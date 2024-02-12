<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;

class FantasticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menus')->insert([
            'name' => 'Banana milk',
            'image' => 'banana-milk.png',
            'price' => '10000',
            'description' => 'Susu bercita rasa pisang ini mempunyai rasa dan aroma pisang yang lembut. Minuman berwarna kuning pastel ini sangat paling enak diminum saat dingin. Rasa yang tidak terlalu manis jadi gak bikin eneg. Seger banget……',
            'varian' => 'Fantastic Tea Break'
        ]);

        DB::table('menus')->insert([
            'name' => 'Hokkaido Melon',
            'image' => 'hokkaido-melon.png',
            'price' => '10000',
            'description' => 'Segarnya buah Melon ala jepang yang dicampurkan dengan susu yang creamy menjadikan minuman ini perpaduan yang sempurna. Gak usah jauh-jauh ke Jepang buat nyobain citarasa Hokaido Melon, Tea Break udah menyiapkan special buat kamu loh..',
            'varian' => 'Fantastic Tea Break'
        ]);

        DB::table('menus')->insert([
            'name' => 'Taro Milk',
            'image' => 'taro-milk.png',
            'price' => '11000',
            'description' => 'Minuman susu dengan kombinasi rasa Talas Ungu.',
            'varian' => 'Fantastic Tea Break'
        ]);

        DB::table('menus')->insert([
            'name' => 'Matcha Milk',
            'image' => 'matcha-milk.png',
            'price' => '11000',
            'description' => 'Minuman susu dengan kombinasi rasa Matcha (teh hijau bubuk).',
            'varian' => 'Fantastic Tea Break'
        ]);

        DB::table('menus')->insert([
            'name' => 'Coffee Milk',
            'image' => 'coffee-milk.png',
            'price' => '12000',
            'description' => 'Minuman susu dengan kombinasi rasa kopi.',
            'varian' => 'Fantastic Tea Break'
        ]);
        DB::table('menus')->insert([
            'name' => 'Love Me',
            'image' => 'love-me.png',
            'price' => '12000',
            'description' => 'Minuman susu dengan kombinasi rasa strawberry kopyor.',
            'varian' => 'Fantastic Tea Break'
        ]);
        DB::table('menus')->insert([
            'name' => 'Brown Sugar Milk',
            'image' => 'brown-sugar-milk.png',
            'price' => '11000',
            'description' => 'Minuman susu dengan kombinasi gula aren.',
            'varian' => 'Fantastic Tea Break'
        ]);
        DB::table('menus')->insert([
            'name' => 'Dalgona Coffee',
            'image' => 'dalgona-coffee',
            'price' => '13000',
            'description' => 'Minuman susu dengan kombinasi topping dalgona rasa coffee.',
            'varian' => 'Fantastic Tea Break'
        ]);
        DB::table('menus')->insert([
            'name' => 'Chocholate Milk',
            'image' => 'chocholate-milk',
            'price' => '13000',
            'description' => 'Minuman susu dengan kombinasi rasa coklat.',
            'varian' => 'Fantastic Tea Break'
        ]);
        DB::table('menus')->insert([
            'name' => 'Brown Sugar Dalgona Coffee',
            'image' => 'brown-sugar-dalgona-coffee',
            'price' => '16000',
            'description' => 'Minuman susu dengan kombinasi gula aren ditambahkan dalgona rasa coffee.',
            'varian' => 'Fantastic Tea Break'
        ]);
    }
}
