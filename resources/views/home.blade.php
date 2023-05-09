@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')
<style>

h7 {
    color: white;
    
}

h8 {
    color: white;
}

img.two {
    border-radius: 50%;
    margin-left: 50%;
    margin-top: -75%;
  width: 35%;
    transform: translate(-50%, -50%);
    padding: 5px;
    border: 1px solid #ddd;
}

img.one {
  height: 130%;
  width: 120%;
  margin-left: -17.5%;
  filter: brightness(30%);
}

.centered {
  position: absolute;
  top: 50%;
  left: 60%;
  transform: translate(-50%, -50%);
}
</style>
<div class="container">
<img class="one" src="https://images8.alphacoders.com/122/1225458.jpg" width="300" height="300">
<img class="two" src="https://www.theloadout.com/wp-content/sites/theloadout/2023/04/honkai-star-rail-countdown-event-550x309.jpg" alt="Avatar">
  <div class="centered">
    <h7><em>"Hey, Trailblazers! I'm the conductor of the Astral Express, Pom-Pom!"</em></h7> <br>
    <h7><em>"If you encounter any problems during your journey, feel free to tell me!"</em></h7> <br>
    <h8><em>~Pom-Pom</em></h8>
  </div>
</div>
@stop

@section('footer')
<p class=text-center >
        2141720207 | <a href="https://github.com/AryaWicaksanaH?tab=repositories">Arya Wicaksana H</a>
    </p>
    @stop

@section('css')
    <link rel="stylesheet" href="resources/css/bg.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop