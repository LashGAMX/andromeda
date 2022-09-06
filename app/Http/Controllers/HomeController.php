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
    public function nosotros()
    {
        return view('home.nosotros');
    }
    public function contacto()
    {
        return view('home.contacto');
    }
    public function login(){
        return view('home.registro');
    }
    public function leer1()
    {
        return view('home.leer1');
    }
    public function leer2()
    {
        return view('home.leer2');
    }
    public function ticket(){
        return view('home.ticket');
    }
}
 