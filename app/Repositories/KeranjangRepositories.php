<?php

namespace App\Repositories;

use App\Models\Keranjang;
use App\Repositories\Interfaces\KeranjangRepositoriesInterface;

class KeranjangRepositories implements KeranjangRepositoriesInterface{
    public function all()
    {
        Keranjang::all();
    }
    public function show($id)
    {
        return Keranjang::where('menu_id',$id)->first();
    }
    public function store(array $data)
    {
        Keranjang::create($data);
    }
    public function cekKeranjangSame($id_menu)
    {
        return Keranjang::where('user_id',auth()->user()->id)->where('menu_id',$id_menu)->count();
    }

    public function update(array $data, $id_menu)
    {
        Keranjang::where('menu_id',$id_menu)->update($data);
    }
}