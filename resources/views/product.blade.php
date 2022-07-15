@extends('layouts.main')

@section('title', 'Produto')

@section('content')

@if($id != null)
    <h1> Exibindo conteúdo do produto id: {{ $id }} </h1>
@else
    <h1> Nenhum id foi fornecido conteúdo do produto id:  </h1>
@endif

@if($busca != '')
<h1> O usuário está buscando por: {{ $busca }}  </h1>

@endif

@endsection