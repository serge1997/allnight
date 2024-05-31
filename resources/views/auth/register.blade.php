@extends('layouts.main')
@section('content')
<div class="container">
   <div class="row">
        <form action="" method="post">
            @csrf
            <div class="col-lg-10 col-md-11 m-auto">
                <div class="w-100 d-flex gap-2">
                    <div class="input-group w-50 mb-3">
                        <span class="input-group-text">Nome completo</span>
                        <input type="text" class="form-control" aria-label="Dollar amount">
                    </div>
                    <div class="input-group w-50 mb-3">
                        <span class="input-group-text">E-mail</span>
                        <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-11 m-auto">
                <div class="w-100 d-flex gap-2">
                    <div class="input-group w-50 mb-3">
                        <span class="input-group-text">CPF</span>
                        <input type="text" class="form-control" aria-label="Dollar amount">
                    </div>
                    <div class="input-group w-50 mb-3">
                        <span class="input-group-text">Senha</span>
                        <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-11 m-auto">
                <div class="input-group w-100 mb-3">
                    <span class="input-group-text">Telephone</span>
                    <input type="text" class="form-control" aria-label="Dollar amount">
                </div>
            </div>
            <div class="col-lg-10 col-md-11 m-auto">
                <div class="w-100 d-flex gap-2">
                    <div class="input-group w-50 mb-3">
                        <span class="input-group-text">Estado</span>
                        <input type="text" class="form-control" aria-label="Dollar amount">
                    </div>
                    <div class="input-group w-50 mb-3">
                        <span class="input-group-text">Cidade</span>
                        <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                    </div>
                </div>
            </div>
            <div class="input-group w-50 mt-3 m-auto d-flex justify-content-center">
                <button class="btn btn-primary rounded-0 py-2">Criar conta</button>
            </div>
        </div>
    </form>
</div>
@endsection

