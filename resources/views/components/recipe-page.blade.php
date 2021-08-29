<div class="container-fluid">
    <div class="row p-5">
        <div class="col-12 col-md-6">
            <img src="{{$recipe_image}}" alt="foto ricetta" class="img-fluid header-img">
        </div>
        <div class="col-12 col-md-6">
            <h1 class="mb-5">{{$recipe_name ?? 'Errore: titolo non disponibile'}}</h1>
            <p><strong>Difficoltà: </strong>{{$recipe_difficulty ?? 'Errore: difficoltà non disponibile'}}</p>
            <p><strong>Preparazione: </strong>{{$recipe_time ?? 'Errore: tempo non disponibile'}}</p>
            <p><strong>Dosi per: </strong>{{$recipe_quantity ?? 'Errore: quantità non disponibile'}}</p>
            <p><strong>Costo: </strong>{{$recipe_price ?? 'Errore: costo non disponibile'}}</p>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row p-5">
        <div class="col-12 col-lg-8">
            <h2>PRESENTAZIONE:</h2>
            <p class="recipe-description">
                {{$recipe_overview ?? 'Errore: presentazione non disponibile'}}
            </p>
            <h2>INGREDIENTI:</h2>
            <ul>
               {{$recipe_ingredients ?? 'Errore: ingredienti non disponibili'}}
            </ul>

            <h2>PREPARAZIONE:</h2>
            <p>
                {{$recipe_method ?? 'Errore: preparazione non disponibile'}}
            </p>
        </div>
    </div>
</div>