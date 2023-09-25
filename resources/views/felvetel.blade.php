@extends('layouts.master')
@section('title','Konyvek felvétele')
@section('content')

<div class="container bg-light">

    <h1>Könyvek felvétele</h1>

    <form method="POST">

        @csrf

        <label for="cim">A könyv címe:</label>
        <input type="text" name="cim" id="cim" class="form-control">

        <label for="isb">A ISB száma:</label>
        <input type="number" name="isb" id="isb" class="form-control">

        <label for="isb">A oldalszáma:</label>
        <input type="number" name="oldalszam" id="oldalszam" class="form-control">

        <button type="submit" class="btn bg-success w-100 mt-5">Kőnyv felvétele</button>


    </form>

</div>

@endsection