@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row">
        <div class="col-lg-3">
            <h5>Marques</h5>
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
        <div class="col-lg-2"></div>
        <div class="col-lg-3">
            <h5>Categories</h5>
            <div class="row">
                <form class="form-inline" action="{{route('categorie.store')}}" method="post">
                    {{ csrf_field() }}

                    <table class="table">
                        <tr>
                            <td><input class="form-control" type="text" name="nom" placeholder="materiel"></td>
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
