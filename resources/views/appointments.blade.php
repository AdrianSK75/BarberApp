@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="">
                        <input type = "date" name ="somedate" id = "myDate" placeholder="dd-mm-yyyy"><br><br>

                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>

                        <input type="submit"/>
                    </form>
                </div>


                </div>
            </div>
        </div>
    </div>
</div>
<script>
        var today = new Date().toISOString().split('T')[0];
        var date = document.getElementById("myDate").value;
</script>
@endsection
