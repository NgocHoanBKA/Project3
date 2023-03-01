<?php

namespace App\Imports;

use App\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ExcelProduct implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'meta_keyworks' => $row[0],
            'product_name' =>$row[1],
            'product_slug'=>$row[2],
            'category_id'=>$row[3],
            'brand_id'=>$row[4],
            'product_desc'=>$row[5],
            'product_content'=>$row[6],
            'product_price'=>$row[7],
            'product_image'=>$row[8],
            'product_status'=>$row[9],
            'price_cost'=>$row[10],
            'ManufactureDate'=>$row[11],
            'ExpirationDate'=>$row[12],
            'expiry'=>$row[13]
        ]);
    }
}
