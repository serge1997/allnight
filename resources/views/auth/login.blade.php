@extends('layouts.main')
@section('content')
<div class="container">
   <div class="row">
        <h2 class="fw-light text-center mb-4">Login</h2>
        <form action="{{ route('sign.in')}}" method="post">
            @csrf
            <div class="col-lg-10 col-md-11 m-auto">
                @if (session('error'))
                    <p class="w-full rounded-0 m-auto text-center p-2 alert alert-danger">{{ session('error') }}</p>
                @endif
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif;
                <div class="input-group w-50 mb-3 m-auto">
                    <span class="input-group-text">CPF</span>
                    <input name="cpf" type="text" class="form-control" aria-label="Dollar amount">
                </div>
                <div class="input-group w-50 mb-3 m-auto">
                    <span class="input-group-text">Senha</span>
                    <input type="password" name="password" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                </div>
                <div class="input-group w-50 mb-3 m-auto d-flex justify-content-center">
                    <button class="btn btn-primary rounded-0 py-2">Entrar</button>
                </div>
            </div>
        </form>
   </div>
</div>
@endsection

