<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MainController;

class SiteController extends MainController
{
    public function index(){
        $this->template = 'pages.site.home';
        $this->vars =[
            'title' => 'Мастера сантехники || Сантехнические работы в Уфе'
        ];

        return $this->render_output();
    }
}
