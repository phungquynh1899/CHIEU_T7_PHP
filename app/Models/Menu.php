<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    //nếu tên bảng ko phải là menus thì phải khai báo
//protected $table = 'menus';
//nếu bảng ko có trường created_at và updated_at
//public $timestamps = false;
//đây là chỗ mà mình sẽ điền tên tất cả các cột của bảng menus
protected $fillable = ['ten','idCha','mota','anhien','thutu','slug'];



}
