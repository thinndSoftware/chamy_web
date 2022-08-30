<?php
namespace App\Components;

use App\Models\Category;

class Recusive
{
    private $data;
    private $htmlSelect= "";
    /**
     * Class constructor.
     */
    public function __construct($data)
    {
        $this->data = $data;

    }
    public function categoryRecursive($parentId, $id=0, $text = "")
    {
        foreach ($this->data as $value) {
            if ($value['parent_id'] === $id) {
                if(!empty($parentId) && $parentId == $value['category_id']) {
                    $this->htmlSelect .=
                    "<option selected value=".$value['category_id'].">" . $text . $value['category_name'] . "</option>";
                }else{
                    $this->htmlSelect .=
                    "<option value=".$value['category_id'].">" . $text . $value['category_name'] . "</option>";
                }
                $this->categoryRecursive($parentId  ,$value['category_id'], $text . '--');
            }
        }
        return $this->htmlSelect;
    }
}
