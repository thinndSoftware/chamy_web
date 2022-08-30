<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intagrams extends Model
{
    use HasFactory;
    protected $table = 'intagrams';
    protected $fillable = ['url_intagram', 'image_path'];
}
