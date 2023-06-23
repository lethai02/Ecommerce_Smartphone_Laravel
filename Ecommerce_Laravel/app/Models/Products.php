<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'dienthoai';
    protected $primaryKey = 'id_dienthoai';
    protected $fillable = ['ID_thuonghieu','ID_Nhacungcap','Tendt','Anhdt','Motadt','Giadt','Soluong','ID_khuyenmai','ID_baohanh','trangthai'];
}
