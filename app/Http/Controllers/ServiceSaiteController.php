<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceSaiteController extends MainController
{

    public function servicesFront() {
        return Service::all();
    }

    public function single($slug){
        $services = Service::where('url', $slug)->first();
        $this->template = 'pages.site.services.single';
        $this ->vars =[
            'title' => $services->value('title'),
            'service' => $services,
        ];

        return $this->render_output();
    }

}
