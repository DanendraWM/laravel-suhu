<?php

namespace App\Http\Controllers;

class sensorController extends Controller
{
    public function index()
    {
        return view('front.status', ['title' => 'Home']);
    }
    // public function tgl()
    // {
    //     setlocale(LC_ALL, 'IND');
    //     date_default_timezone_set('Asia/Jakarta');
    //     // return strftime("%T <br> <h4>%A, %d %B %Y</h4>");
    //     return "halo gais";
    // }
}
