<?php

namespace App\Http\Controllers;

class HomeController extends Controller

{
    public static $pokeneas = [
    [1, "Elkin","1.77","SUPER VELOCIDAD","https://storage.googleapis.com/taller2-teis/Elkin.jpg","Se rogó lo que se tenia que rogar"],
    [2, "Brayan","1.75","PUNTERIA","https://storage.googleapis.com/taller2-teis/Brayan.jpg","Yo no olvido los favores, ni tampoco las traiciones mi pa"],
    [3, "Styven","1.79","SUPER PIQUES","https://storage.googleapis.com/taller2-teis/Styven.jpeg","Hagale mi rey, de cabeza y sin casco"],
    [4, "Alexander","1.73","RAPEAR","https://storage.googleapis.com/taller2-teis/Alexander.jpg","Cuando usted empieza a crecer, empieza a necesitar más billeta pri"],
    [5, "Fercho","1.74","CANTAR","https://storage.googleapis.com/taller2-teis/Fercho.jpg","Mor cuando ama mor, lo demas no importaaa"],
    [6, "Yeison","1.73","SUPER VENDEDOR","https://storage.googleapis.com/taller2-teis/yeisson.jpg","Usted donde lo va a conseguir más barato pri?"],
    [7, "Giovanni","1.80","EL TODERO","https://storage.googleapis.com/taller2-teis/Giovanni.jpeg","¿Cómo es que me dejo meter este ganso ciego ome… yo sí soy una loca"],
    ];
    
    public function index()
        {

        $totalNeas = (count(HomeController::$pokeneas));

        $randomNumber = (rand(0,($totalNeas-1)));

        $randomPokenea = HomeController::$pokeneas[$randomNumber];

        return response()->json(['id' => $randomPokenea[0],'Nombre' => $randomPokenea[1],
        'Altura' => $randomPokenea[2],'Hablidad' => $randomPokenea[3], 'server_ip' => gethostbyname(gethostname())]);
        }

    public function profile()
        {

        $totalNeas = (count(HomeController::$pokeneas));

        $randomNumber = (rand(0,($totalNeas-1)));
    
        $randomPokenea = HomeController::$pokeneas[$randomNumber];

        $Imagen = $randomPokenea[4];
        $Frase = $randomPokenea[5];
        $server_ip = gethostbyname(gethostname());

        echo "<img src='$Imagen'>"."\n";
        echo "Frase: ".$Frase."\n";
        echo "IP del contenedor: ".$server_ip."\n";
        }
 }
