    <!DOCTYPE html>
    <!-- =========================================================
    * Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
    ==============================================================
    * Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
    * Created by: ThemeSelection
    * License: You must have a valid license purchased in order to legally use the theme for your project.
    * Copyright ThemeSelection (https://themeselection.com)
    =========================================================
    -->
    <!-- beautify ignore:start -->
    <html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/"
    data-template="vertical-menu-template-free"
    >
    <head>
        <meta charset="utf-8" />
        <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
        />
        <title>Konfirmasi QRIS</title>
        <meta name="description" content="" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="template/assets/img/favicon/KabupatenMaros.png" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
        />
        <!-- Mind CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Icons. Uncomment required icon fonts -->
        <link rel="stylesheet" href="template/assets/vendor/fonts/boxicons.css" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="template/assets/vendor/css/core.css" class="template-customizer-core-css" />
        <link rel="stylesheet" href="template/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="template/assets/css/demo.css" />

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

        <link rel="stylesheet" href="template/assets/vendor/libs/apex-charts/apex-charts.css" />

        <style>

    #overlay {
    position: absolute; /* Sit on top of the page content */
    /* Hidden by default */
    width: 100%; /* Full width (cover the whole page) */
    height: 100%; /* Full height (cover the whole page) */
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(255, 255, 255, 0.993); /* Black background with opacity */
    z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
    cursor: auto; /* Add a pointer on hover */
    }

    .shadowBox {
        box-shadow: rgb(38, 57, 77) 0px 20px 30px 0px;
    }
        </style>
        <!-- Page CSS -->
        <!-- Helpers -->
        <script src="template/assets/vendor/js/helpers.js"></script>

        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="template/assets/js/config.js"></script>
    </head>

    <body id="overlay">
        <section class="container-fluid mt-2 mb-4 row" style="justify-content: center">

            <div class="card none-border shadowBox"  style="width: 80%;margin-top:2%;margin-bottom:5%">
                <div class="card-body">
                    <!-- Images Maros -->
                    <div style="display: flex;justify-content: center">
                        <img src="assets/img/KabupatenMaros.png" alt="" width="10%">
                    </div>

                    <!-- Icon Number -->
                    <article class="icon-number" style="display: flex;justify-content: center;margin: 14px;margin-top :5%">

                        <div>
                            <img class="rounded mx-auto d-block" src="assets/svg/circle-one.svg" alt="" width="15%">
                            <p style="color: rgb(145, 145, 145)">Isi Berkas</p>
                        </div>
                        <div>
                            <img class="rounded mx-auto d-block" src="assets/svg/number-circle-two.svg" alt="" width="15%">
                            <p style="color: black">Upload Bukti Transaksi</p>
                        </div>
                        <div>
                            <img class="rounded mx-auto d-block" src="assets/svg/circle-three.svg" alt="" width="15%">
                            <p style="color: rgb(145, 145, 145)">Submit Berkas</p>
                        </div>


                    </article>


                    <form class="mt-5" action="{{ url('upload-transaksi/store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- NOP -->
                        <div class="row mb-5">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">NOP</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                            ></span>
                            <input
                                type                = "text"
                                class               = "form-control"
                                id                  = "basic-icon-default-fullname"
                                placeholder         = " NOP"
                                aria-label          = "John Doe"
                                name                = "nop"
                                value               = "{{ $nop }}"
                                style               = "padding: 12px"
                                aria-describedby    = "basic-icon-default-fullname2"
                                />
                            </div>
                        </div>
                    </div>
                    <!-- Nama Subjek -->
                    <div class="row mb-5">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Nama Subjek</label>
                        <div class="col-sm-10">

                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"
                                ><i class="bx bx-buildings"></i
                                    ></span>
                                    <input
                                    type                = "text"
                                    id                  = "basic-icon-default-company"
                                    class               = "form-control"
                                    placeholder         = "Rustamsun"
                                    aria-label          = "ACME Inc."
                                    style               = "padding: 12px"
                                    name                = "nama_subjek"
                                    value               = "{{ $nama_subjek }}"
                                    aria-describedby    = "basic-icon-default-company2"
                                    />
                                </div>
                            </div>
                        </div>

                        <!-- nama pengirim -->
                        <div class="row mb-5">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Nama Pengirim</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                            <input
                                type                = "text"
                                id                  = "basic-icon-default-email"
                                class               = "form-control"
                                placeholder         = "john.doe"
                                aria-label          = "john.doe"
                                style               = "padding: 12px"
                                name                = "nama_pengirim"
                                value               = "{{ $nama_pengirim }}"
                                aria-describedby    = "basic-icon-default-email2"
                                />

                            </div>

                        </div>
                        </div>

                        <!-- No Hp -->
                        <div class="row mb-5">
                        <label class="col-sm-2 form-label" for="basic-icon-default-phone">No Handphone /  No WA</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text"
                                ><i class="bx bx-phone"></i
                                    ></span>
                            <input
                            id                  = "basic-icon-default-phone"
                                type                = "text"
                                class               = "form-control phone-mask"
                                placeholder         = "658 799 8941"
                                aria-label          = "658 799 8941"
                                name                = "no_hp"
                                style="padding: 12px"
                                value               = "{{ $no_hp }}"
                                aria-describedby    = "basic-icon-default-phone2"
                                />
                            </div>
                        </div>
                        </div>

                        <!-- Foto Bukti Bayar -->
                        <div class="row mb-5">
                            <label class="col-sm-2 form-label" for="basic-icon-default-phone">Foto Bukti Bayar</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                {{-- <span id="basic-icon-default-phone2" class="input-group-text"
                                ><i class="bx bx-phone"></i
                                    ></span> --}}
                                    <input
                                    id                  = "basic-icon-default-phone"
                                    type                = "file"
                                    aria-label          = "658 799 8941"
                                    name                = "foto_bukti_bayar"

                                    class               = "form-control phone-mask"
                                    placeholder         = "658 799 8941"
                                    value="{{ $foto_bukti_bayar }}"
                                    aria-describedby    = "basic-icon-default-phone2"
                                />
                            </div>
                        </div>
                    </div>


                    <div  style="display: flex; justify-content: end">
                        <div class="">
                            <button type="submit" class="btn btn-danger">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>

                        </div>
                    </div>
                </form>
                </div>
            </div>

            {{-- {{ $nop }} --}}


        </section>





        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="template/assets/vendor/libs/jquery/jquery.js"></script>
        <script src="template/assets/vendor/libs/popper/popper.js"></script>
        <script src="template/assets/vendor/js/bootstrap.js"></script>
        <script src="template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

        <script src="template/assets/vendor/js/menu.js"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="template/assets/vendor/libs/apex-charts/apexcharts.js"></script>

        <!-- Main JS -->
        <script src="template/assets/js/main.js"></script>

        <!-- Page JS -->
        <script src="template/assets/js/dashboards-analytics.js"></script>

        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
    </html>






