@extends('layouts.main')

@section('title','Channels')

@section('content')

<table>
    <tr>
        <td>
            <img src="{{asset('images/exo.jpg')}}" alt="">
        </td>
        <td>
            <a href="/group/exo">EXO</a>
        </td>
    </tr>
    <tr>
        <td>
            <img src="{{asset('images/nct.png')}}" alt="">
        </td>
        <td>
            <a href="/group/nct">NCT</a>
        </td>
    </tr>
    <tr>
        <td>
            <img src="{{asset('images/treasure.jpg')}}" alt="">
        </td>
        <td>
            <a href="/group/treaure">Treasure</a>
        </td>
    </tr>
</table>

<form id="form" class="form" action="" method="get">
    <table>
        <tr>
            <td> <label for="term">Search</label> </td>
            <td> <strong class="color">::</strong></td>
            <td> <input type="text" name="term" id="term"> </td>
        </tr>
    </table>

  <div>
    <button form="form" class="blue" type="submit">Search</button>
  </div>

</form>

@endsection