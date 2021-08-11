<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
   protected $fillable=[
            'cate_id',
            'name',
            'pro_slug',
            'short_desi',
            'long_desi',
            'orignal_price',
            'selling_price',
            'image',
            'status',
            'tradning',
            'meta_title',
            'meta_keyword',
            'meta_desi',


   ];
   public function catagory()
    {
        return $this->belongsTo(Catagory::class,'cate_id','id');
    }
}
