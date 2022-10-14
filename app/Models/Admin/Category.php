<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Product;
use App\Models\Admin\category;
class category extends Model
{
    use HasFactory;
     protected $table='categories';


    protected $fillable =[
        'cate_name',
        'cate_slug',
        'cate_desc',
        'id'
    ];

    public function categories(){
    return $this->hasMany(category::class);
    return $this->belongsTo(category::class,'cate_id','cate_id');
 }
}
