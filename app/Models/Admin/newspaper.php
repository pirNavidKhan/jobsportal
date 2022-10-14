<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Product;
use App\Models\Admin\newspaper;

class newspaper extends Model
{
    use HasFactory;
    protected $table="newspapers";
     protected $fillable =[
        'newsp_name',
        'newsp_slug',
        'newsp_desc',
        'id',
];



public function newspaper(){
    return $this->belongsTo(Product::class,'newspaper_id','newspaper_id');
 }


public function City(){
    return $this->hasMany(Product::class);
    return $this->belongsTo(Product::class,'city_id','city_id');
 }
}