<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ServiceSaiteController;
use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\MainController;

class SiteController extends MainController
{


    public function index(){
        $services = new ServiceSaiteController();
        $this->template = 'pages.site.home';
        $this->vars =[
            'title' => 'Мастера сантехники || Сантехнические работы в Уфе',
            'services' => $services->servicesFront(),
            'phone' => About::query()->value('tel'),
        ];

        return $this->render_output();
    }
}
