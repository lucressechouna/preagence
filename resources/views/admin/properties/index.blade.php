@extends('admin.admin')
@section('title','accueil')
@section('content')
<div class='d-flex justify-content-between align-items-center'>
<h1>les biens</h1>
 <a href="{{ route('admin.property.create')}}" class="btn btn-primary">ajouter un bien </a>
</div>
<table class='table table-striped'>
    <thead>
        <tr>
            <th>Titre</th>
            <th>Surface</th>
            <th>Prix</th>
            <th>Ville</th>
            <th class='text-end'>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($properties as $Property)
        <tr>
            <td>{{$property->title}}</td>
            <td>{{$property->surface}}m^2</td>
            <td>number_format{{$property->price, thousands_seperator: ""}}</td>
            <td>{{$property->city}}</td>
        </tr>
    @endforeach
    </tbody>

</table>

 {{$properties->links()}}
@endsection