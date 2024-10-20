<?php

namespace App\Imports;

use App\Models\Product;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductImport implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            Product::create([
                'kode_produk' => $row['kode_produk'],
                'produk' => $row['produk'],
                'jumlah' => $row['jumlah'],
                'satuan' => $row['satuan'],
                'harga' => $row['harga'],
            ]);
        }
    }
}