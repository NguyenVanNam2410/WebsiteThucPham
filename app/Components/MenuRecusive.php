<?php
namespace App\Components;
use App\Models\Menu;
class MenuRecusive{
    private $html ;
    public function __construct()
    {
        $this->html = '';

    }
    public function menuRecusivesAdd($parentID = 0, $subMark = ''){
        $data = Menu::where('parent_id', $parentID)->get();
        foreach ($data  as $value){
            $this->html .= '<option value= "'.$value->id.'">' .$subMark. $value->name . '</option>';
            $this->menuRecusivesAdd($value->id,$subMark.'--');
        }
        return $this->html;
    }
    public function menuRecusivesEdit($parentID_menu ,$parentID = 0, $subMark = ''){
        $data = Menu::where('parent_id', $parentID)->get();
        foreach ($data  as $value){
            if (!empty($parentID_menu) && $parentID_menu == $value->id){
                $this->html .= '<option selected value= "'.$value->id.'">' .$subMark. $value->name . '</option>';
            }else{
                $this->html .= '<option value= "'.$value->id.'">' .$subMark. $value->name . '</option>';
            }
            $this->menuRecusivesEdit($parentID_menu ,$value->id,$subMark.'--');
        }
        return $this->html;

    }
}



?>