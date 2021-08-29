<div class="container-fluid p-5">
    <div class="row">
        <div class="col-12">
            <h2>{{$region_name ?? 'Errore: titolo non disponibile'}}</h2>
        </div>
    </div>

    <div class="row">

        {{$region_recipes ?? 'Errore: ricette non disponibili'}}
    
    </div>
</div>