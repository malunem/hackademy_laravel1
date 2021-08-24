<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function getAllRegions() {
        $regions = ['Lombardia', 'Lazio', 'Puglia', 'Sicilia', 'Toscana'];

        return view('homepage', ['regions'=>$regions]);
    }

    public function getSingleRegion($region) {

        $ricette = [
            'Lombardia'=>['Pizzoccheri', 'Cotoletta alla milanese', 'Cassoeula'],
            'Lazio'=>['Cacio e pepe', 'Amatriciana', 'Carbonara'],
        ];
    
        return view('regione', [
            'region'=>$region,
            'ricette'=>$ricette["$region"],
        ]);
    }

    public function getRecipe($ricetta) {

        $ricette = [
            'Pizzoccheri'=>[
                'Descrizione'=>'Cosa sono i pizzoccheri:',
                'Ingredienti'=>'Ingredienti per i pizzoccheri:',
                'Procedimento'=>'Come fare i pizzoccheri',
            ],
            'Cotoletta alla milanese'=>[
                'Descrizione'=>'Cos\'è la cotoletta alla milanese:',
                'Ingredienti'=>'Ingredienti per la cotoletta alla milanese:',
                'Procedimento'=>'Come fare la cotoletta alla milanese',
            ],
            'Cassoeula'=>[
                'Descrizione'=>'Cos\'è la cassoeula:',
                'Ingredienti'=>'Ingredienti per la cassoeula:',
                'Procedimento'=>'Come fare la cassoeula',
            ],
            'Cacio e pepe'=>[
                'Descrizione'=>'Cos\'è la cacio e pepe:',
                'Ingredienti'=>'Ingredienti per la cacio e pepe:',
                'Procedimento'=>'Come fare la cacio e pepe',
            ],
            'Amatriciana'=>[
                'Descrizione'=>'Cos\'è l\'amatriciana:',
                'Ingredienti'=>'Ingredienti per l\'amatriciana:',
                'Procedimento'=>'Come fare l\'amatriciana',
            ],
            'Carbonara'=>[
                'Descrizione'=>'Cos\'è la carbonara:',
                'Ingredienti'=>'Ingredienti per la carbonara:',
                'Procedimento'=>'Come fare la carbonara',
            ],
        ];
    
        return view('ricetta', [
            'ricetta'=>$ricette["$ricetta"],
            'nome'=>$ricetta,
        ]);
    }
}
