<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

use App\Models\Admin\Product;
use App\Models\Admin\City;
use App\Models\Admin\Color;
use App\Models\Admin\education;
use App\Models\Admin\Category;
use App\Models\Admin\newspaper;
use App\Models\Admin\cuntry;


class Product extends Model
{

    use HasFactory;

    protected $table='products';
    protected $fillable =[
        'category_id',
        'department',
        'edu_id',
        'name',
        'slug',
        'desc',
        'cate_id',
        'newspaper_id',
        'created_at',
        'cuntry_id',


    ];
    
 public function City(){
    

    return $this->belongsTo(City::class,'city_id', 'id');
 }
/////
 
  public function newspaper(){
    return $this->belongsTo(newspaper::class,'newspaper_id', 'id');
 }
////

 public function categories(){
    return $this->belongsTo(Category::class,'cate_id', 'id');
 }
////

  public function defartment(){
    return $this->belongsTo(department::class,'department', 'id');
 }
////

 public function education(){
    return $this->belongsTo(education::class,'edu_id', 'id');
 }

 ////
 public function cuntry(){
    return $this->belongsTo(cuntry::class,'cuntry_id', 'id');
 }

}

