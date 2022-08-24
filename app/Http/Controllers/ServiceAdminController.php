<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceAdminController extends MainController
{
protected $path = 'pages.admin.services.';
    public function index()
    {
        $this->template = $this->path.'list';
        $this->vars =[
            'title' => 'Список услуг'
        ];

        return $this->render_admin();
    }


    public function create()
    {
        $this->template = $this->path.'create';
        $this->vars =[
            'title' => 'Создание услуги'
        ];

        return $this->render_admin();
    }


    public function store(Request $request)
    {
        Service::create($request->all());

        return redirect()->back();
    }


    public function show($id)
    {
     //
    }

    public function edit($id)
    {
        $service = Service::find($id);
        $this->template = $this->path.'edit';
        $this->vars =[
            'title' => 'Редактирование услуги',
            'services' => $service,
        ];

        return $this->render_admin();
    }


    public function update(Request $request, $id)
    {
        Service::update($request->all());

        return redirect()->back();
    }


    public function destroy($id)
    {
        $services = Service::find($id);
        $services->delete();

        return redirect()->back();
    }
}
