<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BombasticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menus')->insert([
            'name' => 'Vanilla Ice Cone',
            'image' => 'vanilla-ice-cone.png',
            'price' => '6000',
            'description' => 'Ice Cream Rasa Vanilla.',
            'varian' => 'Bombastic Ice Cream'
        ]);

        DB::table('menus')->insert([
            'name' => 'Chocolate Ice Cone',
            'image' => 'chocolate-ice-cone.png',
            'price' => '6000',
            'description' => 'Ice Cream rasa coklat',
            'varian' => 'Bombastic Ice Cream'
        ]);
        DB::table('menus')->insert([
            'name' => 'Mix Ice Cone',
            'image' => 'mix-ice-cone.png',
            'price' => '6000',
            'description' => 'Ice Cream Rasa Coklat Kombinasi Rasa Vanilla',
            'varian' => 'Bombastic Ice Cream'
        ]);
        DB::table('menus')->insert([
            'name' => 'Vanilla Sundae',
            'image' => 'vanilla-sundae.png',
            'price' => '9000',
            'description' => 'Soft ice cream vanilla dengan kemasan Cup.',
            'varian' => 'Bombastic Ice Cream'
        ]);
        DB::table('menus')->insert([
            'name' => 'Chocolate Sundae',
            'image' => 'chocolate-sundae.png',
            'price' => '9000',
            'description' => 'Soft ice cream coklat dengan kemasan Cup.',
            'varian' => 'Bombastic Ice Cream'
        ]);
        DB::table('menus')->insert([
            'name' => 'Mix Sundae',
            'image' => 'mix-sundae.png',
            'price' => '9000',
            'description' => 'Soft ice cream coklat kombinasi vanilla dengan kemasan Cup',
            'varian' => 'Bombastic Ice Cream'
        ]);
        DB::table('menus')->insert([
            'name' => 'Strawberry Vanilla Sundae',
            'image' => 'strawberry-vanilla-sundae.png',
            'price' => '11000',
            'description' => 'Soft ice cream vanilla dipadukan rasa strawberry yang lezat dengan kemasan Cup.',
            'varian' => 'Bombastic Ice Cream'
        ]);
        DB::table('menus')->insert([
            'name' => 'Mango Vanilla Sundae',
            'image' => 'mango-vanilla-sundae.png',
            'price' => '11000',
            'description' => 'Soft ice cream vanilla dipadukan rasa mango yang lezat dengan kemasan Cup.',
            'varian' => 'Bombastic Ice Cream'
        ]);
        DB::table('menus')->insert([
            'name' => 'Brown Sugar Bubble Vanilla Sundae',
            'image' => 'brown-sugar-bubble-vanilla-sundae.png',
            'price' => '12000',
            'description' => 'Soft ice cream vanilla dipadukan brown sugar dengan kombinasi bubble dengan kemasan Cup',
            'varian' => 'Bombastic Ice Cream'
        ]);
        DB::table('menus')->insert([
            'name' => 'Brown Sugar Bubble Chocolate Sundae',
            'image' => 'brown-sugar-bubble-chocolate-sundae.png',
            'price' => '12000',
            'description' => 'Soft ice cream coklat dipadukan brown sugar dengan kombinasi bubble dengan kemasan Cup.',
            'varian' => 'Bombastic Ice Cream'
        ]);
        DB::table('menus')->insert([
            'name' => 'Brown Sugar Bubble Mix Sundae',
            'image' => 'brown-sugar-bubble-mix-sundae.png',
            'price' => '12000',
            'description' => 'Soft ice cream coklat mix dipadukan brown sugar dengan kombinasi bubble dengan kemasan Cup.',
            'varian' => 'Bombastic Ice Cream'
        ]);
    }
}
