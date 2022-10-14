<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\education;
use App\Models\Admin\Product;

class education extends Model
{
    use HasFactory;

     protected $table='educations';
    protected $fillable =[
        'edu_slug',
        'edu_name',
];

public function education(){
    return $this->belongsTo(Product::class,'edu_id','edu_id');
 }
}
