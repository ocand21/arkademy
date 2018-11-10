<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function soal1(){
        $product = [
            'itemId' => '12341822',
            'itemName' => 'basic t-shirt',
            'price' => '70000',
            'availableColorAndSize' => [
                'choices1' => [
                    'color' => 'red',
                    'size' => 'S,M,L',
                ],
                'choices2' => [
                    'color' => 'solid black',
                    'size' => 'M,L',
                ],
            ],
            'freeShipping' => 'false',
        ];

        return response()->json($product, 200);
        
    }

    public function soal3(){ 

        $segitigaAsli = 7;
        for($i=1;$i<=$segitigaAsli;$i++){

           for($j=1;$j<=$i;$j++){
               $segitiga = $j;
               echo $segitiga;
           }
           echo '<br/>';
        }

    }


    public function soal5(){
        $teks = "Bootcamp Arkademy";
        
    }

    public function hitungKarakter(){
        $teks1 = 'Bootcamp';
        $teks2 = 'Arkademy';

        $response = [
            'Karakter 1' => $teks1 . ', o',
            'hitungKarakter1' => substr_count($teks1, 'o'),
            'Karakter 2' => $teks2 . ', k',
            'hitungKarakter2' => substr_count($teks2, 'k'),
        ];
        
        return response()->json($response, 200);
    }


}
