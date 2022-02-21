<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category_news;
use App\Traits\AlertDelete;
use App\Http\Requests\CategoryNewsRequest;
use App\Http\Requests\editCategoryNews;
class CategoryNewsController extends Controller
{
    use AlertDelete;
    private $category;
    public function __construct(category_news $categories)
    {
        $this->categories = $categories;
    }
    public function index()
    {

        $posts = $this->categories->latest()->orderBy('id','desc')->paginate(5);
        return view('backend.admin.CategoryNews.index',compact('posts'));
    }
    public function create()
    {
        return view('backend.admin.CategoryNews.add');
    }
    public function store(CategoryNewsRequest $request)
    {
        $posts = $request->input('name');
        $this->categories->create(
            ['name' =>   $posts]
        );
        session()->flash('message',$posts. 'thêm mới thành công!');
        return redirect()->route('categoryNews.index');
    }
    public function edit($id)
    {   
        $posts = $this->categories->find($id);
        return view('backend.admin.CategoryNews.edit',compact('posts'));
    }
    public function update(Request $request,$id)
    {
        $this->categories->find($id)->update(
            [
                'name' =>  $request->input('name'),
            ]   
        );
        session()->flash('message','danh mục ' . $request->input('name'). ' update thành công!');
        return redirect()->route('categoryNews.index');
    }
    public function delete($id){
        return $this->AlertDelete2($id,$this->categories);
    }
}
