@extends('main')

@section('content')

    <article class="container-fluid mt-5">
        <h4 style="font-family: code;color: black">Input Data Baru</h4>
        <hr style="margin-bottom: 4% ;color: #18c42c">

        <!--  -->
        <form action="{{ route('data-public') }}" method="POST" >
            @csrf
        <section class="row">
            <div class="card none-border card-profile-inputData" style="width: 20%;background-color: unset">
                <div class="card-body"> 
                    <h5 class="card-title " style="text-align: end;color: black">Profil</h5>
                    
                </div>
            </div>



            <div class="card card-profile none-border shadow-lg p-3 mb-3 bg-body rounded" style="width: 80%;">
                <div class="card-body">

                        <!-- Section Name and -->
                        <section class="row" >
                            <div class="card none-border" style="width: 100%;">
                                <div class="card-body pt-0">
                                    <label class="form-label" for="basic-icon-default-fullname">Subjek Pajak ID</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text">
                                            <i class="fa-solid fa-list-ol"></i>
                                        </span>
                                        <input type="hidden" name="id" value="">
                                        <input
                                            id                      = "basic-icon-default-fullname"
                                            type                    = "text"
                                            class                   = "form-control"
                                            style                   = "padding: 12px"
                                            value                   = ""
                                            name                    = "SUBJEK_PAJAK_ID"
                                            aria-label              = "John Doe"
                                            placeholder             = "7308xxxxxxxxxx"
                                            aria-describedby        = "basic-icon-default-fullname2"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="card none-border" style="width: 100%;">
                                <div class="card-body">
                                    <label class="form-label" for="basic-icon-default-company">Nama Subjek </label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-company2" class="input-group-text">
                                            <i class="bx bxs-user-detail"></i>
                                        </span>
                                        <input
                                            id                  = "basic-icon-default-company"
                                            type                = "text"
                                            class               = "form-control"
                                            style               = "padding: 12px"
                                            value               = ""
                                            name                = "NM_WP"
                                            aria-label          = "ACME Inc. "
                                            placeholder         = "DG. SIJA"
                                            aria-describedby    = "basic-icon-default-company2"
                                        />
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="row" >
                            

                            <div class="card none-border" style="width: 100%;">
                                <div class="card-body">
                                    <label class="form-label" for="basic-icon-default-fullname">Telp</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                    >
                                    <i class="bx bxs-phone"></i>
                                    
                                    </span>
                                    <input
                                        id                  = "basic-icon-default-fullname"
                                        type                = "text"
                                        class               = "form-control"
                                        value               = ""
                                        style               ="padding: 12px"
                                        name                = "TELP_WP"
                                        aria-label          = "John Doe"
                                        placeholder         = "08109xxx88xx"
                                        aria-describedby    = "basic-icon-default-fullname2"
                                    />
                                </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>


            
            <section class="row"  style="margin-top: 5%">
                <div class="card none-border  card-alamat-InputData" style="width: 20%;background-color: unset">
                    <div class="card-body">
                        <h5 style="text-align: end;color: black" class="card-title">Alamat</h5>
                    </div>
                </div>

                <div class="card card-alamat none-border shadow-lg p-3 mb-4 bg-body rounded" style="width: 80%;">
                    <div class="card-body  pt-0">
                            <!-- Section Name and -->
                            <section class="row" >
                               

                                <div class="card none-border" style="width: 100%;">
                                    <div class="card-body">
                                        <label class="form-label" for="basic-icon-default-company">Alamat</label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-company2" class="input-group-text">
                                                <i class="fa-solid fa-location-crosshairs"></i>
                                        </span>
                                            <input
                                                id                  = "basic-icon-default-company"
                                                type                = "text"
                                                style               = "padding: 12px"
                                                class               = "form-control"
                                                value               = ""
                                                aria-label          = "ACME Inc."
                                                name                = "JALAN_WP"
                                                placeholder         = "dsn bonto cinde"
                                                aria-describedby    = "basic-icon-default-company2"
                                            />
                                        </div>
                                    </div>
                                </div>

                                <div class="card none-border" style="width: 100%;">
                                    <div class="card-body">
                                        <label class="form-label" for="basic-icon-default-company">RW </label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text"
                                    ><i class="fa-solid fa-address-book"></i></i
                                    ></span>
                                    <input
                                        id                  = "basic-icon-default-company"
                                        type                = "text"
                                        class               = "form-control"
                                        style               = "padding: 12px"
                                        value               = ""
                                        name                = "RW_WP"
                                        aria-label          = "ACME Inc."
                                        placeholder         = "005"
                                        aria-describedby    = "basic-icon-default-company2"
                                    />
                                </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Section Name and -->
                            <section class="row" >
                                <div class="card none-border" style="width: 100%;">
                                    <div class="card-body">
                                        <label class="form-label" for="basic-icon-default-fullname">RT</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"
                                        ><i class="fa-regular fa-address-book"></i></i
                                        ></span>
                                        <input
                                            id                  = "basic-icon-default-fullname"
                                            type                = "text"
                                            class               = "form-control"
                                            value               = ""
                                            style               ="padding: 12px"
                                            name                = "RT_WP"
                                            aria-label          = "John Doe"
                                            placeholder         = "002"
                                            aria-describedby    = "basic-icon-default-fullname2"
                                        />
                                    </div>
                                    </div>
                                </div>
                            </section>
                            <section class="row" >
                                <div class="card none-border" style="width: 100%;">
                                    <div class="card-body">
                                        <label class="form-label" for="basic-icon-default-fullname">Kelurahan</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"
                                        ><i class="fa-solid fa-shield"></i></i
                                        ></span>
                                        <input
                                            id                  = "basic-icon-default-fullname"
                                            type                = "text"
                                            class               = "form-control"
                                            value               = ""
                                            style               ="padding: 12px"
                                            name                = "KELURAHAN_WP"
                                            aria-label          = "John Doe"
                                            placeholder         = "ALLAERE"
                                            aria-describedby    = "basic-icon-default-fullname2"
                                        />
                                    </div>
                                    </div>
                                </div>
                            </section>
                            <section class="row" >
                                <div class="card none-border" style="width: 100%;">
                                    <div class="card-body">
                                        <label class="form-label" for="basic-icon-default-fullname">Kota</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"
                                        ><i class="fa-solid fa-city"></i></i
                                        ></span>
                                        <input
                                            id                  = "basic-icon-default-fullname"
                                            type                = "text"
                                            class               = "form-control"
                                            value               = ""
                                            style               ="padding: 12px"
                                            name                = "KOTA_WP"
                                            aria-label          = "John Doe"
                                            placeholder         = "MAROS"
                                            aria-describedby    = "basic-icon-default-fullname2"
                                        />
                                    </div>
                                    </div>
                                </div>
                            </section>
                            <section class="row" >
                                <div class="card none-border" style="width: 100%;">
                                    <div class="card-body">
                                        <label class="form-label" for="basic-icon-default-fullname">Kode Pos</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"
                                        ><i class="fa-solid fa-signs-post"></i></i
                                        ></span>
                                        <input
                                            id                  = "basic-icon-default-fullname"
                                            type                = "text"
                                            class               = "form-control"
                                            value               = ""
                                            style               ="padding: 12px"
                                            name                = "KD_POS_WP"
                                            aria-label          = "John Doe"
                                            placeholder         = "90513"
                                            aria-describedby    = "basic-icon-default-fullname2"
                                        />
                                    </div>
                                    </div>
                                </div>
                            </section>
                            <section class="row" >
                            
                                <div class="card none-border" style="width: 100%;">
                                    <div class="card-body">
                                        <label class="form-label" for="basic-icon-default-fullname">Blok Kav </label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text">
                                                <i class="fa-solid fa-location-dot"></i>
                                            </span>
                                            <input
                                                id                  = "basic-icon-default-fullname"
                                                type                = "text"
                                                class               = "form-control"
                                                value               = ""
                                                style               = "padding: 12px"
                                                name                = "BLOK_KAV_NO_WP"
                                                aria-label          = "John Doe"
                                                placeholder         = "E/2"
                                                aria-describedby    = "basic-icon-default-fullname2"
                                            />
                                        </div>
                                    </div>
                                </div>

                            </section>

                            <section class="row" >
                                <div class="card none-border" style="width: 100%;">
                                    <div class="card-body">
                                        <label class="form-label" for="basic-icon-default-fullname">NPWP</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"
                                        ><i class="fa-solid fa-receipt"></i></i
                                        ></span>
                                        <input
                                            id                  = "basic-icon-default-fullname"
                                            type                = "text"
                                            class               = "form-control"
                                            value               = ""
                                            style               ="padding: 12px"
                                            name                = "NPWP"
                                            aria-label          = "John Doe"
                                            placeholder         = "09 254 xx xxx"
                                            aria-describedby    = "basic-icon-default-fullname2"
                                        />
                                    </div>
                                    </div>
                                </div>
                            </section>
                            <section class="row" >
                                <div class="card none-border" style="width: 100%;">
                                    <div class="card-body">
                                        <label class="form-label" for="basic-icon-default-fullname">Status Pekerjaan</label> 
                                        
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"
                                        ><i class="fa-solid fa-user-tie"></i></i
                                        ></span>
                                        <input
                                            id                  = "basic-icon-default-fullname"
                                            type                = "number"
                                            class               = "form-control"
                                            value               = ""
                                            style               ="padding: 12px"
                                            name                = "STATUS_PEKERJAAN_WP"
                                            aria-label          = "John Doe"
                                            placeholder         = "John Doe"
                                            aria-describedby    = "basic-icon-default-fullname2"
                                        />
                                    </div>
                                    </div>
                                </div>
                                
                            </section>



                        </div>
                    </div>
                </section>
                <!-- button save -->
                <section style="display: flex; justify-content: end;margin-top:2%;margin-bottom:5%">
                    <div>

                        <a href="{{ url('add-subjekpajak') }}">
                            <button type="button" class="btn btn-secondary" >cancel</button>
                        </a>
                        <button type="submit" class="btn button-color btn-addSubjekPajak" >Save</button>
                    </div>
                </section>
        </form>
    </article>

@endsection
