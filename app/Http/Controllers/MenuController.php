<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use App\Components\Recusive;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    private $menu;
    public function __construct(Menu $menu)
    {
        $this->menu = $menu;
    }
    public function create()
    {
        $option = $this->getCategory($parentID = '');
        return view('backend.admin.menu.add',compact('option'));
    }
    public function index()
    {
        $menus = $this->menu->latest()->paginate(6);
        return view('backend.admin.menu.index',compact('menus'));
    }
    public function store(Request $request){
        // dd($request->all());
        $this->menu->create([
            'name' =>  $request->name,
            'parent_id'=> $request->parent_id,
            'slug' => $request->name
        ]);
        return redirect()->route('MenuController.index');
    }
    public function getCategory($parentID)
    {
        $data = $this->menu->all();
        $recusive = new Recusive($data);
        $option =  $recusive->categoryRecusive($parentID);
        return $option;
    }
    public function edit($id)
    {
        $menu = $this->menu->find($id);
        $option = $this->getCategory($menu->parent_id);
        return view('backend.admin.menu.edit',compact('menu','option'));
    }
    public function update(Request $request,$id){
        $this->menu->find($id)->update([
            'name' =>  $request->name,
            'parent_id'=> $request->parent_id,
            'slug' => $request->name
        ]);
        return redirect()->route('MenuController.index');
    }
    public function delete($id){
        $this->menu->find($id)->delete();
        return redirect()->route('MenuController.index');
    }
}
