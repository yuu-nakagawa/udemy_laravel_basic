<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index()
    {
        //１対　親→子
        $shops = Area::find(1)->shops;

        //親　<-　子
        $area = Shop::find(2)->area;

        //多　対　多
        $routes = Shop::find(1)->routes()->get();

        dd($shops,$area,$routes);
    }
}
