@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<style>

</style>
    <h1>Passenger Checklist</h1>
@stop

@section('content')
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Room Number</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
      <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->room }}</td>
      </tr>
      @endforeach
  </tbody>
</table>
@stop

@section('footer')
    <p class=text-center>
        2141720207 | <a href="https://github.com/AryaWicaksanaH?tab=repositories">Arya Wicaksana H</a>
    </p>
    @stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> </script>
@stop