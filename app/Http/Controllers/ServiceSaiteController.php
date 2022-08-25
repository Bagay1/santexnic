<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceSaiteController extends MainController
{

    public function servicesFront() {
        return Service::all();
    }

    public function single($id){
        $services = Service::find($id);
        $this->template = 'pages.site.services.single';
        $this ->vars =[
            'title' => $services->value('title'),
            'service' => $services,
        ];

        return $this->render_output();
    }

}
