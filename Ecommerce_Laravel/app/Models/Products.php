<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id_dienthoai';
    // protected $fillable = ['ID_thuonghieu','ID_Nhacungcap','Tendt','Anhdt','Motadt','Giadt','Soluong','ID_khuyenmai','ID_baohanh','trangthai'];
    protected $fillable = ['id_thuonghieu','id_Nhacungcap','Tendt','Anhdt','Mota','Giadt','Soluong','id_khuyenmai','id_baohanh','status'];
  
}
