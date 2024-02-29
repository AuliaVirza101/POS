<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends BaseController
{
    public function foodbeverage(){
        return view('categoryproduct.food-beverages');
    }

    public function beautyhealth(){
        return view('categoryproduct.beauty-health');
    }

    public function homeCare(){
        return view('categoryproduct.home-care');
    }
    
    public function babykid(){
        return view('categoryproduct.baby-kid');
    }
}
