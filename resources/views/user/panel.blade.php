@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <table class="table">
            <thead class = "thead-light">
            <tr>
                <th scope="col"> # </th>

                <th scope="col"> Status </th>

                <th scope="col"> Prenume </th>

                <th scope="col"> Nume </th>

                <th scope="col"> Nr telefon </th>


            </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>

                    @if ($user->status === 2)
                        <td><span class="badge badge-danger">Admin</span></td>
                    @elseif ($user->status === 1)
                        <td><span class="badge badge-primary">Professional</span></td>
                    @else
                        <td><span class="badge badge-secondary">Client</span></td>
                    @endif

                    <td> {{ $user->forename }} </td>

                    <td> {{ $user->name }} </td>

                    <td> {{ $user->phone }} </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
