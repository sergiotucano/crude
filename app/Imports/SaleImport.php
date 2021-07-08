<?php

namespace App\Imports;

use App\Models\Sale;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;

class SaleImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $find = false;
        $total = 0.0;

        $data = DB::table('products')
        ->where('product', $row[0])
        ->get()->toArray();

        foreach($data as $d){
            $find = true;
            $total = $d->price * $row[2];
        }
        
        if ($find){

            return new Sale([
                'product'     => $row[0],
                'date'        => $row[1],
                'quantity'    => $row[2],   
                'total'       => $total,         
            ]);
            
        }
    }
}
