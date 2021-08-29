<div class="container-fluid">
    <div class="row p-5">
        <div class="col-12 col-md-6">
            <img src="{{$recipe_img ?? 'Errore: immagine non disponibile'}}" alt="foto piatto" class="img-fluid header-img">
        </div>
        <div class="col-12 col-md-6">
            <h1>{{$recipe_name}}</h1>
            <p class="recipe-description">{{$recipe_overview ?? 'Errore: presentazione non disponibile'}}</p>
            <p><strong>Difficoltà: </strong>{{$recipe_difficulty ?? 'Errore: difficoltà non disponibile'}}</p>
            <p><strong>Preparazione: </strong>{{$recipe_time ?? 'Errore: preparazione non disponibile'}}</p>
            <p><strong>Dosi per: </strong>{{$recipe_quantity ?? 'Errore: quantità non disponibile'}}</p>
            <p><strong>Costo: </strong>{{$recipe_price ?? 'Errore: costo non disponibile'}}</p>
            <a href="{{$recipe_uri}}"><button type="button" class="btn">Ricetta completa</button></a>
        </div>
    </div>
</div>