@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-11 m-auto">
                <div class="row d-flex gap-1">
                    @foreach ($images as $key => $image)
                        <div class="col-md-5 card shadow-sm mb-3">
                            <div class="row card-body">
                                @php
                                    $images_array = explode(',', $image);
                                @endphp
                                    <div class="col-md-6 d-flex flex-wrap">
                                        <div class="w-50">
                                            @if ($ets[$key])
                                                <p class="fs-5 text-center">{{ $ets[$key] }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex flex-wrap">
                                        @foreach ($images_array as $image)
                                            <img class="w-50" src="/img/establishments/{{$image}}" alt="" srcset="">
                                        @endforeach
                                    </div>
                            </div>
                            <div class="card-footer border-0">
                                <div class="w-100 d-flex gap-2">
                                    <button class="btn p-1">Saiba mais</button>
                                    <button class="btn">Eventos</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
