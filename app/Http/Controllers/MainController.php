<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public $template;
    public $vars =[];


    public function render_output(){
        $menu = [
            'menu_top' => [
                ['route' => 'site.index' , 'title'=>'Главная'],
            ],
        ];


        return view($this->template, $this->vars, $menu);
    }

    public function render_admin(){
        $menu = [
            'sidebar' => [
                ['route'=>'admin.index', 'title'=>'Главная'],
                [
                    'route' => 'services.index',
                    'title'=> 'Услуги',
                    'downmenu' => [
                        ['route' => 'services.index', 'title'=>'Все услуги'],
                        ['route' => 'services.create', 'title'=>'Добавить услугу'],
                ]
                ]
            ]
        ];
        return view($this->template, $this->vars, $menu);


    }
}
