    @extends('main')

    @section('content')
        
    <section class="container-fluid mt-2 row" style="justify-content: center">
        <h4 style="margin-top:2%;color:black;font-family: code">Upload Bukti Transaksi</h4>
        <div class="card none-border"  style="width: 100%;margin-top:2%">
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
                            placeholder         = " NOP"
                            aria-label          = "John Doe"
                            name                = "nop"
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
                        <span class="input-group-text"><i class="bx bx-user"></i></span>
                        <input
                            type                = "text"
                            id                  = "basic-icon-default-email"
                            class               = "form-control"
                            placeholder         = "Michael"
                            aria-label          = "john.doe"
                            style               = "padding: 12px"
                            name                = "nama_pengirim"
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
                            aria-describedby    = "basic-icon-default-phone2"
                            />
                        </div>
                    </div>
                    </div>
                    
                    <!-- Foto Bukti Bayar -->
                    <div class="row mb-5">
                        <label class="col-sm-2 form-label" for="basic-icon-default-phone" style="font-size: 16px">Foto Bukti Bayar</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                        
                                <input
                                id                  = "basic-icon-default-phone"
                                type                = "file"
                                aria-label          = "658 799 8941"
                                name                = "foto_bukti_bayar"
                                
                                class               = "form-control phone-mask"
                                placeholder         = "658 799 8941"
                                aria-describedby    = "basic-icon-default-phone2"
                            />
                        </div>
                    </div>
                </div>

                {{-- {{ $myform->nop }} --}}
                
                    <div class="row" style="justify-content: center">
                        <button type="submit" class="btn button-color" style="width: 30%">Send</button>
                    </div>
                
                </form>
            </div>
        </div>


        
    </section>

    
    @endsection
    