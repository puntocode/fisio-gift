@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endsection

@section('content')
    <div class="container">

        <div class="row animate__animated animate__fadeInDown">
            <div class="col-lg-6 mx-auto">
                <div id="contenido" class="tarjeta border pt-3" style="max-width: 450px">
                    <div class="cabecera text-center mb-5 mt-1">
                        <div class="d-block"><img src="{{ asset('/img/logo-fisiostetik.svg') }}" alt="logo" width="100"></div>
                        <div class="d-block"><img src="{{ asset('/img/gift-card-texto.svg') }}" alt="logo" width="200"></div>
                    </div>

                    <div class="body m-3 pb-3">
                        @if($giftCard->detalle != 'ninguno')
                            <div class="detalle text-center">
                                <img class="svg-white" src="/img/{{ $giftCard->detalle }}.svg" alt="" height="35">
                                <span class="text-white text-capitalize">{{ $giftCard->detalle }}</span>
                            </div>
                        @endif

                        <h5 class="text-capitalize"><strong>De: </strong> {{ $giftCard->nombre }}</h5>
                        <h5 class="text-capitalize"><strong>Para: </strong> {{ $giftCard->receptor }}</h5>
                        @isset($giftCard->mensaje)
                            <p class="text-primary text-uppercase text-center m-0 pt-1 font-weight-bold">{{ $giftCard->mensaje }}</p>
                        @endisset
                    </div>

                    <div class="plastico bg-white p-3 shadow-lg mx-3 my-4">
                        <span id="numero" class="text-primary">{{ $giftCard->id }}</span>
                        <div class="text-center my-4"><img src="{{ asset('/img/logo-fisiostetik.svg') }}" alt="" width="200"></div>
                        @if($giftCard->monto > 0 && $giftCard->monto < 1000)
                            <h5 class="text-right">{{ $giftCard->monto }}mil</h5>
                        @elseif($giftCard->monto >= 1000)
                            <h5 class="text-right">{{ $giftCard->monto/1000 }}M</h5>
                        @endif
                    </div>

                    <div class="bg-secondary mt-5 bg-grad" style="height: 15px;"></div>
                </div>
            </div>
        </div>

        <!-- <div class="row py-5 animate__animated animate__fadeInUp">
            <div class="col-md-6 mx-auto text-center">
                <button id="crearimagen" class="btn btn-outline-primary">DESCARCAR</button>
            </div>
        </div> -->

    </div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.4/FileSaver.min.js" integrity="sha512-e35tHhi6aPIZL4003XnvCy0fBMKquI2U3KwFWzFomF7pryelCq/KAAgErZIv7om4tPO+asEL8KLvBebzJQzSKw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js" integrity="sha512-s/XK4vYVXTGeUSv4bRPOuxSDmDlTedEpMEcAQk0t/FMd9V6ft8iXdwSBxV0eD60c6w/tjotSlKu9J2AAW1ckTA==" crossorigin="anonymous"></script>
<script>
    // Agregar cero a la izquierda
    const resultado = $('#numero').html().padStart(3, "0");
    $('#numero').html(resultado);

    /*Convertir div a imagen
    $("#crearimagen").click(function() {
        html2canvas($("#contenido"), {
            onrendered: function(canvas) {
                theCanvas = canvas;
                document.body.appendChild(canvas);

                canvas.toBlob(function(blob) {
                saveAs(blob, "Dashboard.png");
                });

            }
        });
    }); */

</script>
@endsection
