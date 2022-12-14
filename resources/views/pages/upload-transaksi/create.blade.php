    @extends('main')

    @section('content')
        
        <section class="  mt-2 row container-uploadBukti" style="justify-content: center; margin: 12px">
            <h4 style="margin-top:2%;color:black;font-family: code">Upload Bukti Transaksi</h4>
                <article class="step-uploadBukti icon-number" style="display: flex;justify-content: center;margin: 14px">
                    
                    <div>
                        <img class="rounded mx-auto d-block" src="assets/svg/number-circle-one.svg" alt="" width="15%">
                        <p class="text-isiBerkas">Isi Berkas</p>
                    </div>
                    <div>
                        <img class="rounded mx-auto d-block" src="assets/svg/two.png" alt="" width="22%">
                        <p style="color: rgb(145, 145, 145)">Upload Bukti Transaksi</p>
                    </div>
                    <div>
                        <img class="rounded mx-auto d-block" src="assets/svg/circle-three.svg" alt="" width="15%">
                        <p style="color: rgb(145, 145, 145)">Submit Berkas</p>
                    </div>
                        
                        
                </article>
            
            <div class="card card-uploadBukti none-border"  style="width: 100%;margin-top:2%;padding: 12px">
                <div class="card-body">

                    
                    <form class="form-upload" action="{{ url('preview') }}" method="get" enctype="multipart/form-data">
                        
                        <!-- NOP -->
                        <div class="row mb-5">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">NOP</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-buildings"></i
                            ></span>
                            <input
                                type                = "text"
                                class               = "form-control"
                                id                  = "basic-icon-default-fullname"
                                placeholder         = "7308xxxxxxxx"
                                aria-label          = "John Doe"
                                name                = "nop"
                                style               = "padding: 12px"
                                value               = "{{ Auth::user()->name }}"
                                
                                required
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
                                
                                ><i class="bx bx-user "></i
                                    ></span>
                                    <input
                                    type                = "text"
                                    id                  = "basic-icon-default-company"
                                    class               = "form-control"
                                    placeholder         = "Rustamsun"
                                    aria-label          = "ACME Inc."
                                    style               = "padding: 12px"
                                    name                = "nama_subjek"
 
 required                                   aria-describedby    = "basic-icon-default-company2"
                                    />
                                </div>
                            </div>
                        </div>
            
                        <!-- nama pengirim -->
                        <div class="row mb-5">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Nama Pengirim</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bx bx-user"></i></span>
                            <input
                                type                = "text"
                                id                  = "basic-icon-default-email"
                                class               = "form-control"
                                placeholder         = "Michael"
                                aria-label          = "john.doe"
                                style               = "padding: 12px"
                                name                = "nama_pengirim"
                                required
                                aria-describedby    = "basic-icon-default-email2"
                                />
                                
                        </div>
                        </div>
                        </div>
                        
                        <!-- No Hp -->
                        <div class="row mb-5">
                            
                        <label class="col-sm-2 form-label" for="basic-icon-default-phone" style="font-size: 16px">No Handphone /  No WA</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text"
                                ><i class="bx bx-phone"></i
                                    ></span>
                            <input
                                id                  = "basic-icon-default-phone"
                                type                = "text"
                                class               = "form-control phone-mask"
                                placeholder         = "+62"
                                aria-label          = "658 799 8941"
                                name                = "no_hp"
                                style               = "padding: 12px"
                                required
                                aria-describedby    = "basic-icon-default-phone2"
                                />
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    
                    <!-- Button Next -->
                        <div class="row" style="justify-content: end;margin-bottom:5%;margin: 12px">
                            <button class="button-next" style="width: 12%" type="submit">
                                <span>Next</span>
                                <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="37" cy="37" r="35.5" stroke="black" stroke-width="3"></circle>
                                    <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="black"></path>
                                </svg>
                            </button>
                        </div>
                    
                    </form>
                </div>
            </div>


            
        </section>

    
    @endsection
    