<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;
use App\Traits\AlertDelete;

class SliderController extends Controller
{
    use AlertDelete;
    protected $slider;
    public function __construct(slider $slider)
    {
        $this->slider = $slider;
    }
    public function index()
    {
        $posts = $this->slider->orderBy('id','DESC')->paginate(5);
        return view('backend.admin.slider.index',compact('posts'));
    }
    public function create()
    {
       return view('backend.admin.slider.add');
    }
    public function store(Request $request)
    {
        $post = [
            'name' => $request->input('name'),
            'note' => $request->input('note'),
        ];

        if($request->hasFile('image')){
            $destination_path = 'public/images/sliders/';
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time().'-'.'news.'.$ext;
            $path = $request->file('image')->storeAs($destination_path,$image_name);

            $post['image'] = $image_name;
        }
        $this->slider->create($post);
        session()->flash('message','thêm slider mới thành công!');
        return redirect()->route('SliderController.index');
    }
    public function edit($id)
    {
        $post = $this->slider->find($id);
        // dd($post);
        return view('backend.admin.slider.edit',compact("post"));
    }
    public function update(Request $request, $id)
    {
        $post = [
            'name' => $request->input('name'),
            'note' => $request->input('note'),
        ];

        if($request->hasFile('image')){
            $destination_path = 'public/images/sliders/';
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time().'-'.'news.'.$ext;
            $path = $request->file('image')->storeAs($destination_path,$image_name);

            $post['image'] = $image_name;
        }
        $this->slider->find($id)->update($post);
        session()->flash('message','sửa slider thành công!');
        return redirect()->route('SliderController.index');
    }
    public function delete($id)
    {
        return $this->AlertDelete2($id,$this->slider);
    }
}
