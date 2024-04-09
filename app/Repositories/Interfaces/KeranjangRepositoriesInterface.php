<?php 

namespace App\Repositories\Interfaces;


interface KeranjangRepositoriesInterface{
    public function all();
    public function show($id);
    public function cekKeranjangSame($id_menu);
    public function store(array $data);
    public function update(array $data,$id_menu);
}
