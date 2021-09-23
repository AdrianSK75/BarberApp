@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                    <form action="" method="post" class = "form-group">
                            <input type="text" name = "starttime" class="form-control" placeholder="Scrie ora la care ai vrea sa incepi (Ex: 09:00)"><br>
                            <input type="text" name = "endtime" class="form-control" placeholder="Scrie ora la care ai vrea sa termini (Ex: 22:00)">
                            <input type = "text" class="btn btn-warning" value = "Salveaza">
                    </form>
            </div>
        </div>
    </div>
</div>

@endsection



