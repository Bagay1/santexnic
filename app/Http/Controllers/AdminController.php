<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MainController;
class AdminController extends MainController
{
    public function index(){
        $this->template = 'pages.admin.home';
        $this->vars = [
            'title' => 'Админка',

        ];

        return $this->render_admin();

    }
}
