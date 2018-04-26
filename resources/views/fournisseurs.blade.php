@extends('layouts.app')

@section('content')
    <div class="container">
        <h5>Fournisseur</h5>
        <div class="row">
            <form action="{{route('provider.store')}}" method="post">
                {{ csrf_field() }}
                <table class="table">
                    <tr>
                        <td><input class="form-control" type="text" name="nom" placeholder="nom"></td>
                        <td><input class="form-control" type="text" name="source" placeholder="source"></td>
                        <td><input class="form-control" type="text" name="adresse" placeholder="adresse"></td>
                        <td><input class="form-control" type="text" name="email" placeholder="email"></td>
                        <td><input class="form-control" type="text" name="tel" placeholder="telephone"></td>
                        <td><input class="btn btn-primary" type="submit" value="add"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="row">
            <table class="table">
                <tbody>
                @foreach($fournisseurs as $index => $provider)
                    <tr>
                        <td><b>{{strtoupper($provider->nom)}}</b></td>
                        <td>{{$provider->telephone}}</td>
                        <td>{{$provider->email}}</td>
                        <td>{{$provider->source}}</td>
                        <td>{{$provider->tel}}</td>
                        <td colspan="5">{{$provider->adresse}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection