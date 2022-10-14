<?php

namespace App\Models\Admin;
use App\Models\Admin\Product;
use App\Models\Admin\cuntry;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuntry extends Model
{
    use HasFactory;
      protected $table='cuntries';
      protected $fillable =[
        'cu_name',
        'cu_slug',
        'cu_desc',
        'id',

    ];
      
      public function cuntry(){
    return $this->belongsTo(Product::class,'cuntry_id','cuntry_id');
 }  
}
