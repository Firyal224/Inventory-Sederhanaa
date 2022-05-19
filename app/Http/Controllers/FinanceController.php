<?php

namespace App\Http\Controllers;

use App\Exports\ExportLaporan;
use Illuminate\Http\Request;
use App\Finance;
use DataTables ;
use DB;
class FinanceController extends Controller
{
    //

    public function index(Request $request)
    {
            
            return view('finance/laporan');

    }

    public  function data_table(Request $request){
        $data = DB::table('finances')
        ->leftJoin('products', 'products.id', '=', 'finances.product_id')
        ->leftJoin('product_keluar', 'product_keluar.id', '=', 'finances.id_product_out')
        ->leftJoin('product_masuk', 'product_masuk.id', '=', 'finances.id_product_in')
        ->get();

       
      
      
        // dd($data);
        return DataTables::of($data)
        ->addColumn('product_id', function ($data){
            return $data->product_id;
        })
        ->addColumn('products_name', function ($data){
            return $data->nama;
        })
        ->addColumn('products_name', function ($data){
            return $data->nama;
        })
        ->addColumn('product_out', function ($data){
            $qty_keluar =  DB::table('product_keluar')->where('id', $data->id_product_out)->select('product_keluar.*')->first();
            return $qty_keluar->qty;
        })
        ->addColumn('tanggal_product_out', function ($data){
            $qty_keluar =  DB::table('product_keluar')->where('id', $data->id_product_out)->select('product_keluar.*')->first();
            return $qty_keluar->tanggal;
        })
        ->addColumn('product_in', function ($data){
            $qty_masuk =  DB::table('product_masuk')->where('id', $data->id_product_in)->select('product_masuk.*')->first();
            return $qty_masuk->qty;
        })
        ->addColumn('tanggal_product_in', function ($data){
            $qty_masuk =  DB::table('product_masuk')->where('id', $data->id_product_in)->select('product_masuk.*')->first();
            return $qty_masuk->tanggal;
        })
        ->rawColumns(['product_id','products_name','product_out','tanggal_product_out','product_in','tanggal_product_in'])->make(true);

    }

    public function exportExcel()
    {
        return (new ExportLaporan)->download('laporan.xlsx');
    }
}
