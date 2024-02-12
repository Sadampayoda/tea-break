<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Repositories\MenuRepositories;
use Illuminate\Http\Request;
use App\Utils\Response;
use Doctrine\Inflector\Rules\Word;
use Symfony\Polyfill\Intl\Idn\Idn;

class VarianController extends Controller
{
    protected $menusRepository;

    public function __construct(MenuRepositories $menusRepository)
    {
        $this->menusRepository  = $menusRepository;   
    }

    
    public function index()
    {
        
        $menu = $this->menusRepository->all();
        $menu = $this->menusRepository->Word($menu);
        $categories = $this->menusRepository->Categories();
        $menuTop = $this->menusRepository->TakeMenu(3);
        


        return view('varian.index',[
            'rating' => $menuTop,
            'menu' => $menu,
            'categories' => $categories
        ]);
    }

    public function select(Request $request)
    {
        $menu = $this->menusRepository->searchCategories($request->select);
        return view('varian.categories',[
            'menu' => $this->menusRepository->Word($menu)
        ]);
    }

    public function price(Request $request)
    {
        
        $menu = $this->menusRepository->OrderbyMenu('price',$request->price);
        return view('varian.price',[
            'menu' => $this->menusRepository->Word($menu)
        ]);
    }

    public function show( $id)
    {
        // var_dump($request->id);die;
    
        return view('varian.show',[
            'menu' => $this->menusRepository->find('id',$id),
            'count'  => $this->menusRepository->count(),
        ]);
    }
}
