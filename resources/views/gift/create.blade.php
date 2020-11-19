@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="text-center"><img src="{{ asset('/img/logo-fisiostetik.svg') }}" alt="logo" width="150" class="animate__animated animate__pulse"></div>
                <div class="d-flex my-4 animate__animated animate__fadeInDown">
                    <img src="{{ asset('/img/regalo.svg') }}" alt="icon regalo" height="30">
                    <h2 class="pl-2">Generar <span class="font-weight-bold">Gift Card</span> </h2>
                </div>
                <form method="POST" action="{{ route('gift.store') }}" novalidate>

                    @csrf
                    <div class="form-group animate__animated animate__fadeInLeft animate__faster">
                      <label for="titulo">Nombre de quien Regala</label>
                      <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre">
                      @error('nombre')
                        <span class="text-danger">
                            <strong>Error: {{ $message }}</strong>
                        </span>
                      @enderror
                    </div>

                    <div class="form-group animate__animated animate__fadeInLeft animate__fast">
                        <label for="titulo">Nombre de quien Recibe</label>
                        <input type="text" class="form-control @error('receptor') is-invalid @enderror" id="receptor" name="receptor">
                        @error('receptor')
                          <span class="text-danger">
                              <strong>Error: {{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group animate__animated animate__fadeInLeft animate__slow">
                      <label for="titulo">Monto</label>
                        <touch-spin></touch-spin>
                    </div>

                    <div class="form-group animate__animated animate__fadeInLeft animate__slow">
                        <label for="titulo">Dedicatoria</label>
                        <input type="text" class="form-control" id="mensaje" name="mensaje">
                    </div>

                    <div class="form-group animate__animated animate__fadeInLeft animate__slow">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="detalle" value="ninguno" checked>
                            <label class="form-check-label" for="ninguno">Ninguno</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="detalle" value="facial">
                            <label class="form-check-label" for="facial">Facial</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="detalle" value="corporal">
                            <label class="form-check-label" for="corporal">Corporal</label>
                        </div>
                    </div>

                    <button type="submit" class="btn bg-grad btn-block mt-4 animate__animated animate__fadeInUp animate__slower">GENERAR</button>
                </form>
            </div>
        </div>
    </div>
@endsection
