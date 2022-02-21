<?php

namespace App\Http\Controllers;

use App\Models\bill;
use App\Models\bill_detail;
use Illuminate\Http\Request;
use App\Models\news;
use App\Models\category_news;
use App\Models\Customer;
use App\Models\Menu;
use App\Models\Product;
use App\Models\slider;
use App\Models\tag;
// use App\Http\Requests\customer;
use App\Http\Requests\customer1;
use App\Models\Citys;
use App\Models\Province;
use App\Models\wards;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Console\Output\Output;

// use phpDocumentor\Reflection\DocBlock\Tag;

class HomeController extends Controller
{
    protected $news;
    protected $bill_detail;
    protected $menu;
    protected $bill;
    protected $product;
    protected $slider;
    protected $customer;
    protected $tag;
    protected $category_news;
    public function __construct(tag $tag, slider $slider, bill_detail $bill_detail, news $news, category_news $category_news, Product $product,Menu $menu, Customer $customer, bill $bill)
    {   
        $this->news = $news;
        $this->bill_detail = $bill_detail;
        $this->bill = $bill;
        $this->tag = $tag;
        $this->slider = $slider;
        $this->menu = $menu;
        $this->product = $product;
        $this->customer = $customer;
        $this->category_news = $category_news;
    }
    public function index(){
        $posts_news = $this->news->orderBy('id','DESC')->where('status',1)->paginate(2);
        $post_slider = $this->slider->orderBy('id','DESC')->paginate(2);
        $posts_slider = $this->slider->orderBy('id','DESC')->paginate(3);
        // dd($menus);
        $products_1 = $this->product->orderBy('id','DESC')->where('active',0)->paginate(8);
        $products_2 = $this->product->orderBy('id','DESC')->where('active',1)->paginate(8);
        // dd($products);
        return view('frontend.home.home_page',compact('posts_news','products_1','products_2' ,'post_slider','posts_slider'));

    }
    public function news($id){   
       
        $posts_category = $this->category_news->find($id);
        $categories = $this->category_news->all();
        $news_posts = $posts_category->News_post->all();
        // dd($news_posts);
        $postsNew_1 = $this->news->where('status', 1)->orderBy('id','DESC')->paginate(4);
        return view('frontend.home.news',compact('posts_category','postsNew_1','news_posts','categories','id'));
    }
    public function news_home(){
       
        $categories = $this->category_news->all();
        $postsNew = $this->news->orderBy('id','DESC')->paginate(8);
        $postsNew_1 = $this->news->where('status', 1)->orderBy('id','DESC')->paginate(4);
     
        return view('frontend.home.news_home',compact('postsNew','postsNew_1','categories'));
    }
    public function product(){
        $menus = $this->menu->where('parent_id',0)->get();
        // dd( $this->product->orderBy('price','ASC')->paginate(9));
        if(isset($_GET['sort_by'])){
            $sort_by = $_GET['sort_by'];
            if($sort_by == 'ky_tu_Z'){
                $products = $this->product->orderBy('name','ASC')->paginate(9)->appends(request()->query());
            }elseif($sort_by == 'ky_tu_A'){
                $products = $this->product->orderBy('name','DESC')->paginate(9)->appends(request()->query());
            }elseif($sort_by == 'tang_dan'){
                $products = $this->product->orderBy('price','ASC')->paginate(9)->appends(request()->query());
            }elseif($sort_by == 'giam_dan'){
                $products = $this->product->orderBy('price','DESC')->paginate(9)->appends(request()->query());
            }
        }else{
            $products = $this->product->orderBy('id','DESC')->paginate(9)->appends(request()->query());
        }

        $tags = $this->tag->orderBy('id','ASC')->get();
        return view('frontend.home.product',compact('menus', 'products','tags'));
    }
    public function products($id){
        
        $menus = $this->menu->where('parent_id',0)->get();
        $menu = $this->menu->find($id);

        if(isset($_GET['sort_by'])){
            $sort_by = $_GET['sort_by'];
            if($sort_by == 'ky_tu_Z'){
                $products = $this->product::with('Menu')->where('type_id',$id)->orderBy('name','ASC')->paginate(9)->appends(request()->query());
            }elseif($sort_by == 'ky_tu_A'){
                $products = $this->product::with('Menu')->where('type_id',$id)->orderBy('name','DESC')->paginate(9)->appends(request()->query());
            }elseif($sort_by == 'tang_dan'){
                $products = $this->product::with('Menu')->where('type_id',$id)->orderBy('price','ASC')->paginate(9)->appends(request()->query());
            }elseif($sort_by == 'giam_dan'){
                $products = $this->product::with('Menu')->where('type_id',$id)->orderBy('price','DESC')->paginate(9)->appends(request()->query());
            }
        }else{
            $products = $this->product::with('Menu')->where('type_id',$id)->orderBy('id','DESC')->paginate(9)->appends(request()->query());
        }
        $tags = $this->tag->orderBy('id','ASC')->get();
        return view('frontend.home.product',compact('menus', 'products','menu','tags'));
    }
    public function compare(){
        return view('frontend.home.compare');
    }
    public function contact(){
       
        return view('frontend.home.contact');
    }
    public function introduce(){
       
        return view('frontend.home.introduce');
    }
    public function login(){
       
        return view('frontend.home.login');
    }
    public function cart()
    {
        $city = Citys::orderby('matp','ASC')->get();
        return view('frontend.home.cart',compact('city'));
    }
    public function PostCart(customer1 $request){
        $cart = $request->session()->get("Cart");
        // dd($cart);
        $post = [
            'name' => $request->name,
            'SDT'  => $request->SDT,
            'address' => $request->address,
            'email' => $request->email,
             'tp' => $request->city,
            'qh' => $request->province,
            'xp' => $request->wards,
            'note' => $request->note,
        ];
        // dd($post);
        $post = $this->customer->create($post);
        $post2 = [
            'id_customer' => $post->id,
            'total_price' => $cart->TotalPrice,
            // 'tp' => $post->city,
            // 'qh' => $post->province,
            // 'xp' => $post->wards,
            // 'payment' => 'tiền mặt', 
            'note'   => $post->note
        ];
        $post2 = $this->bill->create($post2);

        foreach($cart->products as $key=>$value){
            $post_bill_detail = [
                'id_bill' => $post2->id,
                'id_product' => $key, //$value['item']['id'],
                'quanity' => $value['quanity'],
                'name_product' => $value['productInfo']['name'],
                'image' => $value['productInfo']['image'],
                'price_product' => $value['productInfo']['price'],
                'unit_price' => $value['price'] / $value['quanity'],
            ];
            $this->bill_detail->create($post_bill_detail);
        }
        //  check mail
        Mail::send('emails.check_order' ,compact('post','post2','post_bill_detail'), function($email) use ($post, $post2,$post_bill_detail){
            $email->subject('FoodFarm - xác nhận đơn hàng');
            $email->to($post->email,$post->name);
        });
        $request->session()->forget('Cart');
        // Session::forget('Cart');
        return redirect()->route('HomeController.cart')->with("thongbao", "quý khách vui lòng check thông tin Email và xác nhận");
    }
    public function details_new($id){
       
        $post = $this->news->find($id);
        // dd($post);
        return view('frontend.home.details__news',compact('post'));
    }
    public function details_product($id){
       
        $product_item = $this->product->find($id);
        $product_relate = $this->product->where('type_id', $product_item->type_id)->orderBy('id','DESC')->paginate(2);
        $products = $this->product->orderBy('id','DESC')->paginate(8);
        // dd(unset($product_item[0]));
                        
        return view('frontend.home.details_product',compact('product_item','product_relate','products'));
    }
    public function select_delivery(Request $request){
        $data = $request->all();
        if($data['action']){
            $output = '';
            if($data['action'] == 'city'){
                $select_province = Province::where('matp',$data['ma_id'])->orderby('maqh','ASC')->get();
                $output.= '<option > -- Chọn quận huyện -- </option>';
                foreach($select_province as $key=>$item){
                    $output.= '<option value= "'.$item->maqh.'">'.$item->name_quanhuyen.'</option>';
                }
            }else{
                $select_wards = wards::where('maqh',$data['ma_id'])->orderby('xaid','ASC')->get();
                $output.= '<option> -- Chọn xã phường -- </option>';
                foreach($select_wards as $key=>$ward){
                    $output.= '<option value= "'.$ward->xaid.'">'.$ward->name_xahuyen.'</option>';
                }
            }
        }
        echo($output);
    }
    public function ajax_tag1(Request $request)
    {
        $data = $request->all();


        return view('frontend.home.ajaxcheckbox',compact('data'));
    }
    // public function AddCart($id)
    // {
    //     echo "hello";
    //     // dd($id);
    // }
    // public function testMail(){
    //     $name = 'Nguyễn Văn Khang';
    //     Mail::send('emails.test' ,compact('name'), function($email) use($name){
    //         $email->subject('Demo email');
    //         $email->to('nguyennam2410k2@gmail.com', $name);
    //     });
    // }

}
