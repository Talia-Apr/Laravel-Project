<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
           [
            'nama'=>'Samsung Phone',
            'harga'=>'2000000',
            'kategori'=>'Handphone',
            'deskripsi'=>'sangat baru',            
            'gambar'=>'https://images.samsung.com/is/image/samsung/assets/id/galaxy-a52/buy/A52_AwesomeViolet_ProductKV_MO_img.jpg?imwidth=720'
           ],
           [
            'nama'=>'Vivo Phone',
            'harga'=>'3000000',
            'kategori'=>'Handphone',
            'deskripsi'=>'paling baru',            
            'gambar'=>'https://asia-exstatic-vivofs.vivo.com/PSee2l50xoirPK7y/activity/1644202991651/zip/img/s1_mobi.jpg'
           ],
           [
            'nama'=>'Xiaomi Smart TV',
            'harga'=>'5000000',
            'kategori'=>'TV',
            'deskripsi'=>'tv pintar dengan layar 4k',            
            'gambar'=>'https://static.bmdstatic.com/pk/product/medium/6073b2f053fe4.jpg'
           ],
           [
            'nama'=>'Polytron Fridge',
            'harga'=>'10000000',
            'kategori'=>'Kulkas',
            'deskripsi'=>'kulkas lebar baru',            
            'gambar'=>'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//83/MTA-3031704/polytron_polytron-kulkas-side-by-side-460-liter-prs-460b_full02.jpg'
           ],
        ]);
    }
}
