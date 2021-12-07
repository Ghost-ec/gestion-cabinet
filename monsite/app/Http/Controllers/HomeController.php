<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use App\Models\Menu;

class HomeController extends BaseController
{
    public function ShowAccueil(){

		$data = array();
		$menu = Menu::all();
		$data["menu"] = array();


		foreach ($menu as $key => $value){
			$data ["menu"][] = $value->titre. "<br>";

		}

		return View::make('accueil')->with('data', $data);

	}
}
