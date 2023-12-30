@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Modifier le Département</h2>
    <form action="{{ route('departements.update', $departement->
