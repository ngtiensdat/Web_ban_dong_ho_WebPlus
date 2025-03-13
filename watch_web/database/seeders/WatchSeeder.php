<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Watch;

class WatchSeeder extends Seeder {
    public function run(): void {
        $category = Category::create(['name' => 'Casio', 'description' => 'Đồng hồ Casio chính hãng']);
        
        Watch::create([
            'name' => 'Casio G-Shock GA-2100',
            'category_id' => $category->id,
            'price' => 3500000,
            'stock' => 10,
            'description' => 'Đồng hồ thể thao G-Shock chống nước 200m',
            'image' => 'gshock-ga2100.jpg'
        ]);
    }
}
