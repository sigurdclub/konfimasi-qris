@extends('main')


@section('content')

<!-- Article Dashboard -->
    <article class="container-fluid mt-4" >
        <div class="card none-border" style="width: 100%; ">
            <div class="card-body">
                <!-- Image Logo Kabupaten Maros -->
                <img 
                    alt     = "Kabupaten Maros" 
                    src     = "assets/img/KabupatenMaros.png"
                    class   = "rounded mx-auto d-block" 
                    width   = "25%"
                >
                

                <!-- Text -->
                <section style="display: flex; justify-content: center ">
                    <div class="card none-border" style="width: 70%;">
                        <div class="card-body">
                            <h4 style="text-align: center;font-size: 3em ;color: black; font-family: code">QRIS hadir mempermudah pembayaran anda</h4>
                        </div>
                    </div>
                </section>

                <!-- Container Tutorial -->
                <section style="display: flex;justify-content: center">
                    <div>
                        <button class="button-dashboard" data-bs-toggle="modal" data-bs-target="#modalPanduan">
                            <span class="button_top"> Panduan</span>
                        </button>
                        <button class="button-dashboard" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span class="button_top"> QR CODE </span>
                        </button>
                    </div>
                </section>


                
                <!-- Modal Tutorial and QR Code -->
                <section>
                    @include('pages.dashboard.modal.modal_QRcode')
                    @include('pages.dashboard.modal.modal_panduan')
                </section>

            </div>
        </div>
    </article>
<!--/ Article Dashboard -->

@endsection