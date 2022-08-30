<?php

namespace App\Components;

use App\Models\Menu;

class MenusRecusive
{
    private $html;
    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->html = "";
    }

    public function menuRecusiveAdd($parent_id = 0, $subMack = "")
    {
        $data = Menu::where('parent_id', $parent_id)->get();

        foreach ($data as $value) {
            $this->html .= '<option value="' . $value->id . '">' . $subMack . $value->name . '</option>';
            $this->menuRecusiveAdd($value->id, $subMack . "--");
        }
        return $this->html;
    }
    public function menuRecusiveEdit($parentIdMenuEdit,$parent_id = 0, $subMack = "")
    {
        $data = Menu::where('parent_id', $parent_id)->get();
        foreach ($data as $value) {
            if($parentIdMenuEdit == $value->id){
                $this->html .= '<option selected value="' . $value->id . '">' . $subMack . $value->name . '</option>';
            }else{
                $this->html .= '<option value="' . $value->id . '">' . $subMack . $value->name . '</option>';
            }
            $this->menuRecusiveEdit($parentIdMenuEdit,$value->id, $subMack . "--");
        }
        return $this->html;
    }
}
