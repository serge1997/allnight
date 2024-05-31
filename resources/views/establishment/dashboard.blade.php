@extends('layouts.main')
@section('css-content')
<link rel="stylesheet" href="/css/establishment.css">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 m-auto d-flex justify-content-center gap-2">
            <button class="sub-menu-btn rounded-3 px-3 py-2" data-bs-toggle="modal" data-bs-target="#create-est-images">Adicionar imagens</button>
            <a class="sub-menu-btn rounded-3 px-3 py-2" href="">Publicar eventos</a>
            <a class="sub-menu-btn rounded-3 px-3 py-2" href="">Comercialisar ingressos</a>
        </div>
    </div>
</div>
<h1>Logado</h1>
<h1>{{ Auth::user()->name}}</h1>
<a href="{{ route('logout')}}">Sair</a>
@include('establishment.components.modals.create-image')
@endsection
@section('script-src-js')
    <script type="module" src="/js/establishment/establishment.js"></script>
@endsection
