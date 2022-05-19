<?php

namespace App\Exports;

use App\Finance;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use DB;
class ExportLaporan implements FromView
{
    /**
     * melakukan format dokumen menggunakan html, maka package ini juga menyediakan fungsi lainnya agar dapat me-load data tersebut dari file html / blade di Laravel
     */
    use Exportable;

    public function view(): View
    {
        // TODO: Implement view() method.
        $laporan = DB::table('finances')
        ->leftJoin('products', 'products.id', '=', 'finances.product_id')
        ->leftJoin('product_keluar', 'product_keluar.id', '=', 'finances.id_product_out')
        ->leftJoin('product_masuk', 'product_masuk.id', '=', 'finances.id_product_in')
        ->first();


        $out =  DB::table('product_keluar')->where('id', $laporan->id_product_out)->select('product_keluar.*')->first();
        $in =  DB::table('product_masuk')->where('id', $laporan->id_product_in)->select('product_masuk.*')->first();

        $data=[
            'out'=>$out,
            'in'=>$in, 
            'laporan'=>$laporan
        ];

        // $tes = $data['laporan']->product_id;
        // dd($data);
        return view('finance.financeAllExcel',$data);
    }
}
