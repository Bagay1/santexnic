<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\MainController;

class AboutController extends MainController
{
   public function aboutIndex()
   {
       $this->template = 'pages.admin.about.index';
       $this->vars = [
           'title' => 'О компании',
           'phone' => About::query()->value('tel'),
           'companyadress' => About::query()->value('companyadress'),
       ];

       return $this->render_admin();
   }


   public function store(Request $request){


       $about = new About();
       $about->tel = $request->tel;
       $about->companyadress = $request->companyadress;
       $about->save();

       return redirect()->back();
   }
}
