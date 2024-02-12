<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;

class HotSeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menus')->insert([
            'name' => 'Hot Honey Lamon Tea',
            'image' => 'hot-honey-lamon-tea.png',
            'price' => '6000',
            'description' => 'Minuman teh original dari Tea Break dihidangkan hangat. Aroma teh khas yang dikombinasikan dengan madu dan segarnya lemon.',
            'varian' => 'Hot Series Tea Break'
        ]);
        DB::table('menus')->insert([
            'name' => 'Hot Coffee Milk',
            'image' => 'hot-coffee-milk.jpg',
            'price' => '5500',
            'description' => 'Minuman susu yang dikombinasikan dengan kopi yang nikmat. Cocok banget disajikan secara hangat. Selain kandungan kafein yang bisa untu mencegah kantuk ternyata kopi juga menjadi salah satu sumber antioksidan yang diperlukan oleh tubuh.',
            'varian' => 'Hot Series Tea Break'
        ]);
        DB::table('menus')->insert([
            'name' => 'Hot Chocolate Milk',
            'image' => 'hot-chocolate-milk.jpg',
            'price' => '6000',
            'description' => 'Susu yang dipadukan dengan coklat berkualitas ini, memang mempunyai citarasa yang nikmat. Apalagi jika disajikan dengan hangat, rasa coklat yang khas dari Tea Break ini cocok banget buat mood booster kamu.',
            'varian' => 'Hot Series Tea Break'
        ]);
        DB::table('menus')->insert([
            'name' => 'Hot Matcha Milk',
            'image' => 'hot-matcha-milk.jpg',
            'price' => '7000',
            'description' => 'Matcha milk dari Tea Break memang selalu menjadi salah satu best seller. Kalo biasanya kamu menikmati minuman ini secara dingin, kini tea break menghadirkan matcha versi hangat buat kamu. Dan kamu perlu tau, kalau minuman matcha ini juga bisa mengurangi stress, lengkap banget ya...udah enak.. berkhasiat juga…',
            'varian' => 'Hot Series Tea Break'
        ]);
        DB::table('menus')->insert([
            'name' => 'Hot Frest Tea',
            'image' => 'hot-frest-tea.jpg',
            'price' => '6000',
            'description' => 'Minuman teh original dari Tea Break dihidangkan hangat. Aroma teh yang khas, bisa membuat pikiranmu lebih tenang dan rilex saat meminumnya',
            'varian' => 'Hot Series Tea Break'
        ]);
    }
}
