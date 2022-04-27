<?php

namespace App\Http\Controllers;

class HomeController extends Controller

{
    public static $pokeneas = [
    [1, "Elkin","1.77","ASALTAR","X","Y"],
    [2, "Brayan","1.75","DISPARAR","Z","W"],
    [3, "Styven","1.74","IMPACTRUENO","S","A"],
    [4, "Alexander","1.73","D","G","F"],
    [5, "Yizuz","1.79","L","K","H"],
    [6, "Yeison","1.72","T","B","U"],
    [7, "Giovanni","1.80","J","H","G"],
    ];
    
    public function index()
        {

        $totalNeas = (count(HomeController::$pokeneas));

        $randomNumber = (rand(0,($totalNeas-1)));

        $randomPokenea = HomeController::$quotes[$randomNumber];

        return response()->json(['quote' => $randomQuote, 'server_ip' => gethostbyname(gethostname())]);
        }

    public function profile()
        {

        $totalQuotes = (count(HomeController::$quotes));

        $randomNumber = (rand(0,($totalQuotes-1)));

        $randomQuote = HomeController::$quotes[$randomNumber];

        return response()->json(['quote' => $randomQuote, 'server_ip' => gethostbyname(gethostname())]);
        }
 }
