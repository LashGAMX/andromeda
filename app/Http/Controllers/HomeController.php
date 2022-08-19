<?php

namespace App\Http\Controllers;

use App\Notifications\Proximamente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    //
    public function index(){
        return redirect('proximamente');
    }
    public function proximamente(){
        return view('home.proximamente');
    }
    public function sendMailProximamente(Request $res){
        Notification::route('mail', 'taylor@example.com')->notify(new Proximamente());
        $data = array(
            'dato'=>$res->texto
        );
        return response()->json($data);
    }
    public function inicio(){
        return view('home.inicio');
    }
    public function registro(){
        return view('home.registro');
    }
}
 