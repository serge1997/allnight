@extends('layouts.main')
@section('content')
<div class="container">
   <div class="row">
        <form id="establishment-submit" action="" method="post">
            @csrf
            <div class="col-lg-10 col-md-11 m-auto">
                <div class="w-100 d-flex gap-2">
                    <div class="input-group w-50 mb-3">
                        <span class="input-group-text">Nome Estabelicimento</span>
                        <input id="name" type="text" class="form-control" aria-label="Dollar amount">

                    </div>
                    <div class="input-group w-50 mb-3">
                        <span class="input-group-text">E-mail</span>
                        <input id="email" type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                    </div>
                </div>
                <div class="w-100 d-flex gap-2">
                    <div class="input-group w-50 mb-3">
                       <small class="text-danger" id="name-error"></small>
                    </div>
                    <div class="input-group w-50 mb-3">
                        <small class="text-danger" id="email-error"></small>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-11 m-auto">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Tipo estabelecimento</label>
                    <select id="establishment-type" class="form-select">
                      <option selected>Tipo do estabelicimento</option>
                    </select>
                </div>
                <div class="w-100 d-flex gap-2">
                    <div class="input-group w-50 mb-3">
                       <small class="text-danger" id="establishment-type-error"></small>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-11 m-auto">
                <div class="w-100 d-flex gap-2">
                    <div class="input-group w-50 mb-3">
                        <span class="input-group-text">CNPJ</span>
                        <input id="cnpj" type="text" class="form-control" aria-label="Dollar amount">
                    </div>
                    <div class="input-group w-50 mb-3">
                        <span class="input-group-text">Senha</span>
                        <input id="password" type="text" class="form-control" aria-label="">
                    </div>
                </div>
                <div class="w-100 d-flex gap-2">
                    <div class="input-group w-50 mb-3">
                       <small class="text-danger" id="cnpj-error"></small>
                    </div>
                    <div class="input-group w-50 mb-3">
                        <small class="text-danger" id="password-error"></small>
                     </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-11 m-auto">
                <div class="input-group w-100 mb-3">
                    <span class="input-group-text">Telephone</span>
                    <input id="tel" type="text" class="form-control" aria-label="Dollar amount">
                </div>
                <div class="w-100 d-flex gap-2">
                    <div class="input-group w-50 mb-3">
                       <small class="text-danger" id="tel-error"></small>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-11 m-auto">
                <div class="w-100 d-flex gap-2">
                    <div class="input-group w-50 mb-3">
                        <label class="input-group-text" for="state-select">Estado</label>
                        <select id="state-select" class="form-select">
                            <option selected value="">Selecione um estado</option>
                        </select>
                    </div>
                    <div class="input-group w-50 mb-3">
                        <label class="input-group-text" for="city-select">Cidade</label>
                        <select id="city-select" class="form-select">
                            <option selected value="">Selecione uma cidade</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="w-100 d-flex gap-2">
                <div class="input-group w-50 mb-3">
                   <small class="text-danger" id="state-error"></small>
                </div>
                <div class="input-group w-50 mb-3">
                    <small class="text-danger" id="city-error"></small>
                </div>
            </div>
            <div class="col-lg-10 col-md-11 m-auto">
                <div class="w-100 d-flex gap-2">
                    <div class="input-group w-50 mb-3">
                        <span class="input-group-text">Bairro</span>
                        <input id="neighborhood" type="text" class="form-control" aria-label="Dollar amount">
                    </div>
                    <div class="input-group w-50 mb-3">
                        <span class="input-group-text">CEP</span>
                        <input id="cep" type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                    </div>
                </div>
            </div>
            <div class="input-group w-50 mt-3 m-auto d-flex justify-content-center">
                <button type="submit" class="btn btn-primary rounded-0 py-2">Criar conta</button>
            </div>
        </div>
    </form>
</div>
@endsection
@section('script-src-js')
    <script type="module" src="/js/state/state.js"></script>
    <script type="module" src="/js/city/city.js"></script>
    <script type="module" src="/js/TypeEstablishment/type.js"></script>
    <script type="module" src="/js/establishment/establishment.js"></script>
@endsection
