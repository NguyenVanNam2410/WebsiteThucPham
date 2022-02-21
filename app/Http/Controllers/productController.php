<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\productImage;
use App\Models\tag;
use App\Models\Product;
use App\Traits\StorageImageTraits;
use App\Traits\AlertDelete;
use App\Http\Requests\ProductRequest;

class productController extends Controller
{
    protected $menu;
    use StorageImageTraits;
    use AlertDelete;
    protected $tag;
    protected $productImage;
    protected $product;
    public function __construct(Menu $menu, tag $tag, productImage $productImage,Product $product)
    {
        $this->menu = $menu;
        $this->tag = $tag;
        $this->product = $product;
        $this->productImage = $productImage;
    }
    public function index(Request $request){
        $id_cate= $request->input('type_id');

        $menus = $this->menu->all();
        $products = $this->product->orderBy('id','DESC')->paginate(6);
        if($request->has('key')){
            $key = $request->key;
            $products = $this->product->latest()->orderBy('id','desc')->where('name', 'like' , '%'.$key.'%')->paginate(5);
        }
        if($id_cate){
            // $id_cate = request()->type_id;
            $products = $this->product->orderBy('id','desc')->where('type_id',$id_cate )->paginate(5);
        }
        return view('backend.admin.product.index',compact('products','menus'));    
    }
    public function create(){
        $menus = $this->menu->all();
        $tag = $this->tag->all();
        return view('backend.admin.product.add',compact('menus','tag'));
    }
    public function store(ProductRequest $request){
        $post_product = [
            'name' => $request->input('name'),
            'sale' => $request->input('sale'),
            'price' => $request->input('price'),
            'type_id' => $request->input('type_id'),
            'title'  => $request->input('title'),
            'description'  => $request->input('description'),
            'code'  => $request->input('code'),
            'color'  => $request->input('color'),
            'origin' => $request->input('origin'),
            'active' => $request->input('active'),
        ];
        $tagId = $request->input('tag_id', []);
        if($request->hasFile('image')){
            $destination_path = 'public/images/product';
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time().'-'.'news.'.$ext;
            $path = $request->file('image')->storeAs($destination_path,$image_name);

            $post_product['image'] = $image_name;
        }
        $post_product = $this->product->create($post_product);
        if($request->hasFile('image_path')){
            foreach($request->file('image_path') as $img){
                $images = $this->StorageImages($img,'products');
                $post_product->Product_image()->create([
                    'image' => $images['image'],
                ]);
            }
        }
        $post_product->tags()->sync($tagId);
        session()->flash('message','thêm sản phẩm mới thành công!');
        return redirect()->route('productController.index');
    }
    public function edit($id){
        $product = $this->product->find($id);
        $menus = $this->menu->all();
        $tags = $this->tag->all();
        return view('backend.admin.product.edit',compact('product','menus','tags'));
    }
    public function update($id,Request $request){
        $post_product = [
            'name' => $request->input('name'),
            'sale' => $request->input('sale'),
            'price' => $request->input('price'),
            'type_id' => $request->input('type_id'),
            'title'  => $request->input('title'),
            'description'  => $request->input('description'),
            'code'  => $request->input('code'),
            'color'  => $request->input('color'),
            'origin' => $request->input('origin'),
            'active' => $request->input('active'),
        ];
        $tagId = $request->input('tag_id', []);
        if($request->hasFile('image')){
            $destination_path = 'public/images/product';
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time().'-'.'news.'.$ext;
            $path = $request->file('image')->storeAs($destination_path,$image_name);

            $post_product['image'] = $image_name;
        }
        $post_product = $this->product->find($id)->update($post_product);
        $post_product = $this->product->find($id);
        if($request->hasFile('image_path')){
            $this->productImage->where('id_product',$id)->delete();
            foreach($request->file('image_path') as $img){
                $images = $this->StorageImages($img,'products');
                $post_product->Product_image()->create([
                    'image' => $images['image'],
                ]);
            }
        }
        $post_product->tags()->sync($tagId);
        session()->flash('message','update sản phẩm thành công thành công!');
        return redirect()->route('productController.index');
    }
    public function delete($id){
        return $this->AlertDelete3($id,$this->product,$this->productImage,'id_product');
    }
}
