<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Repositories\KeranjangRepositories;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{

    protected $keranjang;
    public function __construct(KeranjangRepositories $keranjang)
    {

        $this->keranjang = $keranjang;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = $this->keranjang->all();
        // $data = $this->keranjang->cekKeranjangSame(1);
        return view('keranjang.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        if(!auth()->user())
        {
            return 'Gagal Tambahkan Keranjang, Anda belum login';
        }
        // return $request->id;
        
        if($this->keranjang->cekKeranjangSame($request->id) > 0){
            $data = $this->keranjang->show($request->id);
            $this->keranjang->update([
                'quantity' => $data->quantity + 1,
            ],$request->id);
            return 'success';
        }else{
            $this->keranjang->store([
                'menu_id' => $request->id,
                'user_id' => auth()->user()->id,
                'quantity' => 1
            ]);
            return 'success';
        }

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
