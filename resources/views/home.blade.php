@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row">
        <div class="col-lg-6">
            <h2>Fournisseur</h2>
            <div class="row">
                    <form action="{{route('provider.store')}}" method="post">
                        {{ csrf_field() }}
                        <table class="table">
                            <tr>
                                <td><input class="form-control" type="text" name="nom" placeholder="nom"></td>
                                <td><input class="form-control" type="text" name="source" placeholder="source"></td>
                                <td><input class="form-control" type="text" name="adresse" placeholder="adresse"></td>

                            </tr>
                            <tr>
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
                            </tr>
                            <tr>
                                <td colspan="5">{{$provider->adresse}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-3">
            <h2>Marques</h2>
                <div class="row">
                    <form class="form-inline" action="{{route('marque.store')}}" method="post">
                        {{ csrf_field() }}

                        <table class="table">
                            <tr>
                                <td><input class="form-control" type="text" name="nom" placeholder="zebra.."></td>
                                <td><input class="btn btn-primary" type="submit" value="add"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            <br><br>
                <div class="row">
                    @if($marques->isEmpty())
                        <div class="col-lg-12">
                            Aucune marques
                        </div>
                    @else

                        <table class="table">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>marque</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($marques as $index => $marque)
                                <tr>
                                    <td>{{$marque->id}}</td>
                                    <td>{{$marque->nom}}</td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    @endif
                </div>
        </div>
        <div class="col-lg-3">
            <h2>Categories</h2>
            <div class="row">
                <form class="form-inline" action="{{route('categorie.store')}}" method="post">
                    {{ csrf_field() }}

                    <table class="table">
                        <tr>
                            <td><input class="form-control" type="text" name="nom" placeholder=""></td>
                            <td><input class="btn btn-primary" type="submit" value="add"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <br><br>
            @if($categories->isEmpty())
                <div class="col-lg-12">
                    Aucune categories
                </div>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>categorie</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $index => $categorie)
                    <tr>
                        <td>{{$index}}</td>
                        <td>{{$categorie->nom}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
@endsection
