@extends('layouts.app')

@section('content')
<?php
    use App\Models\User;
    use App\Models\Services;
?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <h3>Programarile mele</h3>
        <a href = "/fa-o-programare" class = "btn btn-outline-secondary"> Inapoi </a>

        <hr>
            @if (count($appointments) > 0)
                    @foreach ($appointments as $a)
                                    <?php
                                       $barber = User::find($a->barber_id);
                                       $service = Services::find($a->service_id);
                                       $client = User::find($a->client_id);
                                    ?>
                                    @if ($barber->id == Auth::id() || $client->id == Auth::id())
                                                <div class="alert alert-info" role="alert">
                                                    <h4> {{$service->name}} </h4>
                                                    <small> Data programarii: <strong> {{$a->scheduled_at}} </strong> </small><br>
                                                    <small> Contact
                                                                @if ($barber->id == Auth::id())
                                                                        client : <strong> {{$client->phone}} </strong>
                                                                @else
                                                                        frizer : <strong> {{$barber->phone}} </strong>
                                                                @endif
                                                    </small><br>
                                                    <small> Pret: <strong> {{$service->price}} lei </strong> / Durata: <strong> {{$service->duration}} minute</strong> </small>
                                                </div>
                                    @endif
                    @endforeach
            @else
                <div class="alert alert-warning" role="alert">
                        Nu s-au gasit programari
                </div>
            @endif
    </div>
</div>
@endsection
