<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Product;
use App\Models\Admin\City;
use App\Models\Admin\cuntry;

class City extends Model
{
    use HasFactory;
   
    protected $table='cities';
    protected $fillable =[
        'city_name',
        'category_slug',
        'c_desc',
        'id',
        'parent_category_id'
];

public function City(){
    return $this->hasMany(Product::class);
    return $this->belongsTo(Product::class,'city_id','city_id');
 }


}
