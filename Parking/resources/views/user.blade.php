@extends('accueil')
@section('nav')


@php




session_start();
$valeur = session('id');


  echo "Bienvenue Monsieur : ".$valeur."<br />";







@endphp


@stop
