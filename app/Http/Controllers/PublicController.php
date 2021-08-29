<?php

namespace App\Http\Controllers;

use App\Mail\ReplyMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class Recipe{

    public $name;
    public $image;
    public $uri;
    public $difficulty = 'media'; //standard example content
    public $time = '45 min'; //standard example content
    public $quantity = '4 persone'; //standard example content
    public $price = 'basso'; //standard example content
    public $overview = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ipsam cupiditate saepe repudiandae fugiat nam nostrum dicta nisi recusandae possimus. Eveniet accusantium dolorum nisi explicabo odit sint perferendis iusto repudiandae.'; //standard example content
    public $ingredients = [
        'Ingrediente 1',
        'Ingrediente 2',
        'Ingrediente 3',
        'Ingrediente 4',
        'Ingrediente 5',
        'Ingrediente 6',
        'Ingrediente 7',
     ]; //standard example content
    public $method = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, nulla. Nesciunt voluptas eum, ipsam id fugit totam, libero officiis consequatur consequuntur delectus molestias perferendis amet, possimus rem. Dolore, tenetur laudantium!
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque qui assumenda dicta ea sit, repudiandae voluptates quidem quam ex doloremque impedit expedita soluta exercitationem rem dolorum, dolore corrupti fugiat iste.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa rerum dicta veritatis eaque necessitatibus id aut voluptates ratione sequi perspiciatis, sint ipsa libero ut officia. Illum beatae suscipit ducimus at?'; //standard example content

    public function __construct(String $name, String $image, String $uri){
        $this->name = $name;
        $this->image = $image;
        $this->uri = $uri;
    }
}

class Region {
    public $name;
    public $recipes; //array of objects of class Recipe
    public $uri;

    public function __construct(String $name, Array $recipes, String $uri){
        $this->name = $name;
        $this->recipes = $recipes;
        $this->uri = $uri;
    }
}

class PublicController extends Controller
{
    public function getAllData() {

        $pizzoccheri = new Recipe(
            'Pizzoccheri alla valtellinese',
            'https://www.giallozafferano.it/images/174-17426/Pizzoccheri-alla-valtellinese_450x300.jpg',
            '/lombardia/pizzoccheri-alla-valtellinese'
        );

        $ossibuchi = new Recipe(
            'Ossibuchi alla milanese',
            'https://www.giallozafferano.it/images/182-18239/Ossibuchi-alla-milanese_450x300.jpg',
            '/lombardia/ossibuchi-alla-milanese'
        );

        $casoeula = new Recipe(
            'Casoeûla',
            'https://www.giallozafferano.it/images/9-917/Casoeula_780x520_wm.jpg',
            '/lombardia/casoeula'
        );

        $lombardia = new Region(
            'Lombardia',
            [$pizzoccheri, $ossibuchi, $casoeula],
            '/lombardia'
        );

        $caciopepe = new Recipe(
            'Spaghetti cacio e pepe',
            'https://www.giallozafferano.it/images/219-21989/Spaghetti-Cacio-e-Pepe_450x300_sp.jpg',
            '/lazio/spaghetti-cacio-e-pepe'
        );

        $amatriciana = new Recipe(
            'Sugo all’amatriciana in vasocottura',
            'https://www.giallozafferano.it/images/231-23199/Sugo-all-amatriciana-in-vasocottura_780x520_wm.jpg',
            '/lazio/sugo-all-amatriciana-in-vasocottura'
        );

        $carbonara = new Recipe(
            'Spaghetti alla Carbonara',
            'https://www.giallozafferano.it/images/219-21928/Spaghetti-alla-Carbonara_450x300_sp.jpg',
            '/lazio/spaghetti-alla-carbonara'
        );

        $lazio = new Region(
            'Lazio',
            [$caciopepe, $amatriciana, $carbonara],
            '/lazio'
        );

        $cimerapa = new Recipe(
            'Orecchiette con le cime di rapa',
            'https://www.giallozafferano.it/images/170-17094/Orecchiette-con-le-cime-di-rapa_450x300.jpg',
            '/puglia/recchiette-con-le-cime-di-rapa'
        );

        $bombette = new Recipe(
            'Bombette pugliesi',
            'https://www.giallozafferano.it/images/17-1753/Bombette-pugliesi_780x520_wm.jpg',
            '/puglia/bombette-pugliesi'
        );

        $taralli = new Recipe(
            'Taralli',
            'https://www.giallozafferano.it/images/193-19361/Taralli_450x300.jpg',
            '/puglia/taralli'
        );
        
        $puglia = new Region(
            'Puglia',
            [$cimerapa, $bombette, $taralli],
            '/puglia'
        );

        $arancini = new Recipe(
            'Arancini di riso',
            'https://www.giallozafferano.it/images/2-247/Arancini-di-riso_450x300.jpg',
            '/sicilia/arancini-di-riso'
        );

        $cannoli = new Recipe(
            'Cannoli siciliani',
            'https://www.giallozafferano.it/images/206-20605/Cannoli-siciliani_450x300.jpg',
            '/sicilia/cannoli-siciliani'
        );

        $spada = new Recipe(
            'Pesce spada alla siciliana',
            'https://www.giallozafferano.it/images/169-16972/Pesce-spada-alla-siciliana_450x300.jpg',
            '/sicilia/pesce-spada-alla-siciliana'
        );
        
        $sicilia = new Region(
            'Sicilia',
            [$arancini, $cannoli, $spada],
            '/sicilia'
        );
        
        $panzanella = new Recipe(
            'Panzanella',
            'https://www.giallozafferano.it/images/233-23300/Panzanella_450x300.jpg',
            '/toscana/panzanella'
        );

        $gnudi = new Recipe(
            'Gnudi',
            'https://www.giallozafferano.it/images/164-16432/Gnudi_780x520_wm.jpg',
            '/toscana/gnudi'
        );

        $pici = new Recipe(
            'Pici all\'aglione',
            'https://www.giallozafferano.it/images/19-1999/Pici-all-aglione_450x300.jpg',
            '/toscana/pici-all-aglione'
        );
        
        $toscana = new Region(
            'Toscana',
            [$panzanella, $gnudi, $pici],
            '/toscana'
        );

        return $regions = [$lombardia, $lazio, $puglia, $sicilia, $toscana];
    }

    public function getHomepage(){

        $allData = PublicController::getAllData();

        $randomRegion = $allData[rand(0, count($allData)-1)];
        $randomRecipe = $randomRegion->recipes[rand(0, count($randomRegion->recipes)-1)];

        return view('index', [
            'regions'=>$allData,
            'recipe'=>$randomRecipe
        ]);
    }

    public function getRegionPage($region) {

        /* $ricette = [
            'Lombardia'=>['Pizzoccheri', 'Cotoletta alla milanese', 'Cassoeula'],
            'Lazio'=>['Cacio e pepe', 'Amatriciana', 'Carbonara'],
        ]; */

        $allData = PublicController::getAllData();

        $singleRegion = '';

        foreach($allData as $object){
            if (strcasecmp($object->name, $region) == 0) {
                $singleRegion = $object;

                return view('region', ['region'=>$singleRegion]);
            }
        }

        echo "Regione non trovata";
    }

    public function getRecipePage($region, $recipe) {

        $allData = PublicController::getAllData();

        $singleRegion = '';
        $singleRecipe = '';

        foreach($allData as $regionObject){
            if (strcasecmp($regionObject->uri, "/$region") == 0) {
                $singleRegion = $regionObject;
            }
        }

        foreach($singleRegion->recipes as $regionRecipe){
            if (strcasecmp($regionRecipe->uri, "/$region/$recipe") == 0) {
                $singleRecipe = $regionRecipe;

                return view('recipe', [
                    'recipe'=>$singleRecipe,
                    'region'=>$singleRegion
                ]);
            }
        }

        echo "Ricetta non trovata";

    }

    public function getContactPage() {
        return view('contact');
    }

    public function postMessage(ContactRequest $formSubmitted) {

        $fullname = $formSubmitted->input('contact-fullname');
        $email = $formSubmitted->input('contact-email');
        $text = $formSubmitted->input('contact-message');

        Mail::to('info@ricetteitaliane.it', 'RicetteItaliane.it')->send(new ContactMail($fullname, $email, $text));

        Mail::to($email)->send(new ReplyMail($fullname, $email, $text));
    
        return redirect(route('postMessage'))->with('message', 'Il tuo messaggio è stato inviato correttamente.');
    }
}
