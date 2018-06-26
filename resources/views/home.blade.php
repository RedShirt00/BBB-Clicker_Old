@extends('layouts.game')

@section('content')
<div class="game_container" >
  <div class="row">
    <hr>
    <div id="gameDIV">
      <div id="FallCookies"></div>
      <h1 id="points">Points:</h1>
      <br>
      <h3>Points per second: </h3>
    </div>
    <hr>
    <div id="jokerDIV">
      <div class="card img-fluid" style="width:20%"id="btn_grandma">
        <img class="card-img-left" src="{{ asset('img/grandma_3.png') }}" alt="Card image" style="width:90%">
        <div class="card-img-overlay">
          <h1 class="card-title">Grandma</h1>
          <h1 class="card-text">1</h1>
          <a href="#" class="btn btn-primary" id="btn_buy">Buy</a>
        </div>
      </div>
      <div class="card img-fluid" style="width:20%"id="btn_factory">
        <img class="card-img-left" src="{{ asset('img/factory.png') }}" alt="Card image" style="width:90%">
        <div class="card-img-overlay">
          <h1 class="card-title">Factory</h1>
          <h1 class="card-text">1</h1>
          <a href="#" class="btn btn-primary" id="btn_buy">Buy</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
