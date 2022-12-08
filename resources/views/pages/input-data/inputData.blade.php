@extends('main')

@section('content')

    <article class="container-fluid mt-4">
        <h4 style="font-family: code;color: black">Input Data Baru</h4>
        <hr>

        <!--  -->
        <form action="data-pribadi/editNumber" method="POST">
            @csrf
        <section class="row">
            <div class="card none-border" style="width: 20%;">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: end">Profil</h5>
                </div>
            </div>
            <div class="card none-border" style="width: 80%;">
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
                                            placeholder             = "John Doe"
                                            aria-describedby        = "basic-icon-default-fullname2"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="card none-border" style="width: 100%;">
                                <div class="card-body">
                                    <label class="form-label" for="basic-icon-default-company">Nama </label>
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
                                            aria-label          = "ACME Inc."
                                            placeholder         = "ACME Inc."
                                            aria-describedby    = "basic-icon-default-company2"
                                        />
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="row" >
                            <div class="card none-border" style="width: 100%;">
                                <div class="card-body">
                                    <label class="form-label" for="basic-icon-default-company">Telpon</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bxs-phone"></i></span>
                                        <input
                                            id                  = "basic-icon-default-company"
                                            type                = "text"
                                            style               = "padding: 12px"
                                            class               = "form-control"
                                            value               = ""
                                            aria-label          = "ACME Inc."
                                            name                = "TELP_WP"
                                            placeholder         = "ACME Inc."
                                            aria-describedby    = "basic-icon-default-company2"
                                        />
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>




            <section class="row">
                <div class="card none-border" style="width: 20%;">
                    <div class="card-body">
                        <h5 style="text-align: end" class="card-title">Alamat</h5>
                    </div>
                </div>
                <div class="card none-border" style="width: 80%;">
                    <div class="card-body  pt-0">
                        
                          
    
                            <!-- Section Name and -->
                            <section class="row" >
                                <div class="card none-border" style="width: 100%;">
                                    <div class="card-body">
                                        <label class="form-label" for="basic-icon-default-fullname">Jalan </label>
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
                        
                                                aria-label          = "John Doe"
                                                placeholder         = "John Doe"
                                                aria-describedby    = "basic-icon-default-fullname2"
                                            />
                                        </div>
                                    </div>
                                </div>
    
                                <div class="card none-border" style="width: 100%;">
                                    <div class="card-body">
                                        <label class="form-label" for="basic-icon-default-company">Kelurahan </label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text"
                                    ><i class="fa-solid fa-warehouse"></i></i
                                    ></span>
                                    <input
                                        id                  = "basic-icon-default-company"
                                        type                = "text"
                                        class               = "form-control"
                                        style               = "padding: 12px"
                                        value               = ""
                
                                        aria-label          = "ACME Inc."
                                        placeholder         = "ACME Inc."
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

                        <button type="submit" class="btn btn-secondary" >cancel</button>
                        <button type="submit" class="btn button-color" >Save</button>
                    </div>
                </section>
        </form>
    </article>

@endsection