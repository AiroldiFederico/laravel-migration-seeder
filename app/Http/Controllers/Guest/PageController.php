<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function getTrains(){


        $trains = Train::All(); //select * from books

        return view( 'pages.home', compact( 'trains' ) );
    }
}
