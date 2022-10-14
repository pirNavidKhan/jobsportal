<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Product;
use App\Models\Admin\department;

class department extends Model
{
    use HasFactory;

     protected $table='departments';
    protected $fillable =[
        'department',
        'def_slug',
];

public function defartment(){
    return $this->belongsTo(Product::class,'department','department');
 }

}
