<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('loaisanpham')->insert([
            ['tenLoai' => 'Điện thoại', 'moTa' => 'Các loại điện thoại', 'created_at' => now(), 'updated_at' => now()],
            ['tenLoai' => 'Laptop', 'moTa' => 'Các loại laptop', 'created_at' => now(), 'updated_at' => now()],
            ['tenLoai' => 'Phụ kiện', 'moTa' => 'Phụ kiện điện tử', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('products')->insert([
            ['name' => 'iPhone 15', 'description' => 'Apple iPhone 15', 'price' => 25000000, 'quantity' => 10, 'loaisanpham_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Samsung S24', 'description' => 'Samsung Galaxy S24', 'price' => 20000000, 'quantity' => 15, 'loaisanpham_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MacBook Pro', 'description' => 'Apple MacBook Pro M3', 'price' => 45000000, 'quantity' => 5, 'loaisanpham_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dell XPS 15', 'description' => 'Dell XPS 15 inch', 'price' => 35000000, 'quantity' => 8, 'loaisanpham_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tai nghe AirPods', 'description' => 'Apple AirPods Pro', 'price' => 5000000, 'quantity' => 20, 'loaisanpham_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
