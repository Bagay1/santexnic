<?php

namespace App\Http\Controllers;

use App\Imports\ServiceImport;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Excel;

class ServiceAdminController extends MainController
{
    protected $path = 'pages.admin.services.';

    public function index()
    {
        $this->template = $this->path . 'list';
        $this->vars = [
            'title' => 'Список услуг',
            'services' => Service::all(),
        ];

        return $this->render_admin();
    }


    public function create()
    {
        $this->template = $this->path . 'create';
        $this->vars = [
            'title' => 'Создание услуги'
        ];

        return $this->render_admin();
    }


    public function store(Request $request)
    {
        $service = new Service();
        $service->title = $request->title;
        $service->text = $request->text;
        $service->url = Str::slug($request->title);
        $service->price_id = $request->price_id;
        $service->save();


        return redirect()->back();
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $service = Service::find($id);
        $this->template = $this->path . 'edit';
        $this->vars = [
            'title' => 'Редактирование услуги',
            'services' => $service,
        ];

        return $this->render_admin();
    }


    public function update(Request $request, $id)
    {
        Service::find($id)->update($request->all());

        return redirect()->back();
    }


    public function destroy($id)
    {
        $services = Service::find($id);
        $services->delete();

        return redirect()->route('services.index');
    }

    public function importServices()
    {
        \Maatwebsite\Excel\Facades\Excel::import(new ServiceImport, 'storage/Services.xlsx');

        return redirect()->back();
    }

    public function active(Request $request, $id)
    {
//        dd($request,$id);
        $service = Service::find($id);
        $service->active = $request->active;
        $service->update();

        return redirect()->back()->with(['sucess' => 'Данные сохранены']);
    }
}
