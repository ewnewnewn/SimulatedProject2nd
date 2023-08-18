<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use SplFileObject;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen(database_path('seeders/shops.csv'), 'r');
        // ヘッダー行の読み飛ばし
        $header = fgetcsv($file);

        while (($row = fgetcsv($file, 0, ',')) !== false) {
            DB::table('shops')->insert([
                'name' => $row[0],
                'area' => (int)$row[1], // 数値にキャスト
                'genre' => (int)$row[2], // 数値にキャスト
                'detail' => $row[3],
                'image_path' => $row[4],
            ]);
        }

        fclose($file);    
    }
}