<?php

namespace App\Http\Controllers;

use App\Models\category_news;
use Illuminate\Http\Request;
use App\Models\news;
use Illuminate\Support\Facades\Redirect;
use App\Traits\AlertDelete;
// use App\Traits\StorageImageTraits;
class NewController extends Controller
{
    use AlertDelete;
    // use StorageImageTraits;
    protected $news;
    protected $categoryNews;
    public function __construct(news $news,category_news $categoryNews)
    {
        $this->news = $news;
        $this->categoryNews = $categoryNews;
    }
    public function index(Request $request)
    {

        $id_cate= $request->input('category_id');

        $categories = $this->categoryNews->all();
        $posts = $this->news->orderBy('id','desc')->paginate(5);
        if($key = request()->key){
            $posts = $this->news->latest()->orderBy('id','desc')->where('name', 'like' , '%'.$key.'%')->paginate(5);
        }
        if($id_cate){
            $posts = $this->news->orderBy('id','desc')->where('new_id',$id_cate )->paginate(5);
        }
        return view('backend.admin.news.index',compact('posts','categories'));
    }
    public function create()
    {
        $categories = $this->categoryNews->all();
        return view('backend.admin.news.add',compact('categories'));
    }
    public function store(Request $request)
    {
        $input = $request->all();
        if($request->hasFile('image')){
            $destination_path = 'public/images/news';
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time().'-'.'news.'.$ext;
            $path = $request->file('image')->storeAs($destination_path,$image_name);

            $input['image'] = $image_name;
        }
        $this->news->create($input);
        session()->flash('message','thêm tin tức mới thành công!');
        return redirect()->route('NewController.index');
    }
    public function edit($id){
        $categories = $this->categoryNews->all();
        $post = $this->news->find($id);
        return view('backend.admin.news.edit',compact('post','categories'));
    }
    public function update($id , Request $request){
        // $input['image'] = $this->StorageImage($request , 'image', 'news');
        $input = $request->all();
        if($request->hasFile('image')){
            // $this->news->where('id', $id)->delete();
            $destination_path = 'public/images/news';
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time().'-'.'news.'.$ext;
            $path = $request->file('image')->storeAs($destination_path,$image_name);
            $input['image'] = $image_name;
        }
        $this->news->find($id)->update($input);
        session()->flash('message','sửa tin tức thành công!');
        return redirect()->route('NewController.index');
    }
    public function delete($id){
        return $this->AlertDelete2($id,$this->news);
    }
}
