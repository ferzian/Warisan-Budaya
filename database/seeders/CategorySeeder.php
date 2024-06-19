<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bangunan = Category::create([
            'name' => 'Bangunan',
        ]);
        $museum = Category::create([
            'name' => 'Museum',
        ]);
        $tarian = Category::create([
            'name' => 'Tarian',
        ]);
    }
}
