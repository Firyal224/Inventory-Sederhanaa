<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Finance extends Model
{
    //
    protected $table = 'finances';
    protected $hidden = ['created_at','updated_at'];
    protected $fillable = ['product_id', 'id_product_out', 'id_product_in'];
    public function allData(){
        return DB::table('finances')
        ->leftJoin('products', 'products.id', '=', 'finances.product_id')
        ->leftJoin('product_keluar', 'product_keluar.id', '=', 'finances.id_product_out')
        ->leftJoin('product_masuk', 'product_masuk.id', '=', 'finances.id_product_in')
        ->first();
    }
}
