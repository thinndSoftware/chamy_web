<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = 'category_id';
    protected $table = 'categories';
    // protected $fillable = ['category_id','category_name','parent_id','slug'];
    protected $fillable = ['category_name','parent_id','slug', 'image_name', 'image_path'];
    public function categoryChildrent()
    {
        return $this->hasMany(Category::class,'parent_id');
    }
}
