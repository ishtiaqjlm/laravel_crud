<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'pid';
    protected $fillable=['name','short_descrption','long_descrption'];
    //get all 
    public function getproduct(){
        return Product::all();
    }
}
