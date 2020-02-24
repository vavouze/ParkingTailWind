@extends('accueil')
@section('nav')
@php
session_start();
$valeur = session('id');
@endphp
@if ($valeur === NULL)
  <div class="container mx-auto h-full flex justify-center items-center">
    <div class="w-1/3">
      <h1 class="font-hairline mb-6 text-center">Login to our Website</h1>
      <div class="rounded-lg shadow-lg border-t-8 border-blue-200">
      <form action="/login" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
            Username
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" name='id' placeholder="Username">
        </div>
        <div class="mb-6">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
            Password
          </label>
          <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="motdepasse" type="password" placeholder="******************">
          <p class="text-red-500 text-xs italic">Please choose a password.</p>
        </div>
        <div class="flex items-center justify-between">
          <input type='submit' value='Login' name='login' id='submit' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
          <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
            Forgot Password?
          </a>
        </div>
      </form>
    </div>
  </div>


@else

  @php
    echo "USER : $valeur";
  @endphp
    <div class='description'>
      <br><p class='texteAccueil'>Cette application web permet de gérer l'hébergement des ligues sportive
            durant les rencontres.</p>
      <p class='texteAccueil'>Elle offre les services suivants :</p>
      <ul class='list'>
         <p> - Gérer les établissements (caractéristiques et capacités d'accueil) acceptant d'héberger les groupes de sportifs.<br>
          - Consulter, réaliser ou modifier les attributions des chambres aux groupes dans les établissements.</p>
      </ul>
   </div>
@endif
@stop
