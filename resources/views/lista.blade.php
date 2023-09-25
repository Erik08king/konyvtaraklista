@extends('layouts.master')
@section('title','Konyvek lista')
@section('content')

<table class="table info table-striped table-hover">
    <tr>
        <th>#id</th>
        <th>Kőnyv cím</th>
        <th>ISB szám</th>
        <th>oldalszám</th>
        <th>modosítás</th>
        <th>törlés</th>
    </tr>

    @foreach ($konyvek as $konyv)
        
        <tr>
            <td>{{$konyv->ko_id}}</td>
            <td>{{$konyv->cim}}</td>
            <td>{{$konyv->isb}}</td>
            <td>{{$konyv->oldalsz}}</td>
            <td></td>
            <td></td>
        </tr>

    @endforeach

</table>

@endsection