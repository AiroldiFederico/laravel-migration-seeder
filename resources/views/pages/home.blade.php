@extends( 'layout.app' )

@section('titlePage')
 Home
@endsection

@section( 'content' )

<h1 class="text-center text-uppercase fs-1 fw-bolder text-light mt-4">TRAINS</h1>



<div class="maincore col-8 m-auto d-flex flex-wrap gap-4 h-100 p-4 bg-dark justify-content-center">

    @foreach ($trains as $train)
    <div class="card col-3 ">
        <img src="{{ Vite::asset('resources/images/trainimage.jpg') }}" class="card-img-top" alt="...">

        <div class="card-body p-3">
            <p class="card-text"><strong>Azienda:</strong> {{ $train->azienda }}</p>
            <p class="card-text"><strong>Stazione di partenza:</strong> {{ $train->stazione_partenza }}</p>
            <p class="card-text"><strong>Stazione di arrivo:</strong> {{ $train->stazione_arrivo }}</p>
            <p class="card-text"><strong>Orario di partenza:</strong> {{ $train->orario_partenza }} <br> <strong>Orario di arrivo:</strong> {{ $train->orario_arrivo }}</p>
            <p class="card-text"><strong>Codice treno:</strong> {{ $train->codice_treno }}</p>
            <p class="card-text"><strong>Numero carrozze:</strong> {{ $train->numero_carrozze }}</p>
            <p class="card-text"><strong>In orario:</strong> {{ $train->in_orario }}</p>
            <p class="card-text"><strong>Cancellato:</strong> {{ $train->cancellato }}</p>
        </div>
    </div>
@endforeach



</div>

@endsection