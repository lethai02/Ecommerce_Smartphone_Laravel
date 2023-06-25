<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table ='thuonghieu';
    protected $id = 'id_thuonghieu';
    protected $fillable = ['Tenthuonghieu','trangthai'];
}
