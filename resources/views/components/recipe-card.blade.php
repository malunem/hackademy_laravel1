<div class="col-12 col-lg-4">
    <div class="card mb-4 h-100" style="width: 100%;">
        <img src="{{$recipe_img}}" class="card-img-top" alt="foto ricetta">
        <div class="card-body">
            <h5 class="card-title">{{$recipe_name ?? 'Errore: titolo non disponibile'}}</h5>
            <a href="{{$recipe_uri ?? '/error'}}">Ricetta completa</a>
        </div>
    </div>
</div>