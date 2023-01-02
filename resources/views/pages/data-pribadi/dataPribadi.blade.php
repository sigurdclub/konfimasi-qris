    @extends('main')

    @section('content')
        <article class="container-fluid mt-4">
            

          
            @foreach ($userData as $item)
            
            <!-- Image Profile -->
                <div class="card card-profile-public none-border" style="width: 30rem; background-color: unset">
                    <div class="card-body">
                        <article style="display:flex ; ">
                            <div class="container-icon-edit">
                                <i class='bx bxs-edit' style="color: black;font-size: 30px"></i>
                                <img src="{{ asset('assets/img/profile icon.png') }}" class="rounded mx-auto d-block" alt="..." width="35%">
                            </div>
                            <div style="margin-top: 10%">
                                <h3 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color:black"> {{$item->NM_WP}} </h3>
                                <h6 style="font-family: code;color: rgb(82, 82, 82)">{{ $item->SUBJEK_PAJAK_ID }}</h6>
                            </div>
                        </article>
                    </div>
                </div>

                
                <!-- Form  -->
                <section style="display: flex; justify-content: center;margin-bottom: 5%">

                    <div class="card card-form-dataPribadi none-border" style="width: 60rem;">
                        <div class="card-body">
                            <form action="data-pribadi/editNumber" method="POST">
                                @csrf
                            
                                <!-- Section Name and -->
                                <section class="row" >
                                    <div class="card none-border" style="width: 28rem;">
                                        <div class="card-body">
                                            <label class="form-label" for="basic-icon-default-fullname">Subjek Pajak ID</label>
                                            <div class="input-group input-group-merge">
                                                <span id="basic-icon-default-fullname2" class="input-group-text">
                                                    <i class="bx bx-user"></i>
                                                </span>
                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                                <input
                                                    id                      = "basic-icon-default-fullname"
                                                    type                    = "text"
                                                    class                   = "form-control"
                                                    style                   = "padding: 12px"
                                                    value                   = "{{ $item->SUBJEK_PAJAK_ID }}"
                                                    name                    = "SUBJEK_PAJAK_ID"
                                                    disabled
                                                    aria-label              = "John Doe"
                                                    placeholder             = "John Doe"
                                                    aria-describedby        = "basic-icon-default-fullname2"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card none-border" style="width: 28rem;">
                                        <div class="card-body">
                                            <label class="form-label" for="basic-icon-default-company">Nama </label>
                                            <div class="input-group input-group-merge">
                                                <span id="basic-icon-default-company2" class="input-group-text">
                                                    <i class="bx bx-buildings"></i>
                                                </span>
                                                <input
                                                    id                  = "basic-icon-default-company"
                                                    type                = "text"
                                                    class               = "form-control"
                                                    style               = "padding: 12px"
                                                    value               = "{{ $item->NM_WP }}"
                                                    aria-label          = "ACME Inc."
                                                    disabled
                                                    placeholder         = "ACME Inc."
                                                    aria-describedby    = "basic-icon-default-company2"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <!-- Section Name and -->
                                <section class="row" >
                                    <div class="card none-border" style="width: 28rem;">
                                        <div class="card-body">
                                            <label class="form-label" for="basic-icon-default-fullname">Jalan </label>
                                            <div class="input-group input-group-merge">
                                                <span id="basic-icon-default-fullname2" class="input-group-text">
                                                    <i class="bx bx-user"></i>
                                                </span>
                                                <input
                                                    id                  = "basic-icon-default-fullname"
                                                    type                = "text"
                                                    class               = "form-control"
                                                    value               = "{{ $item->JALAN_WP }}"
                                                    style               = "padding: 12px"
                                                    disabled
                                                    aria-label          = "John Doe"
                                                    placeholder         = "John Doe"
                                                    aria-describedby    = "basic-icon-default-fullname2"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card none-border" style="width: 28rem;">
                                        <div class="card-body">
                                            <label class="form-label" for="basic-icon-default-company">Kelurahan </label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-company2" class="input-group-text"
                                        ><i class="bx bx-buildings"></i
                                        ></span>
                                        <input
                                            id                  = "basic-icon-default-company"
                                            type                = "text"
                                            class               = "form-control"
                                            style               = "padding: 12px"
                                            value               = "{{ $item->KELURAHAN_WP }}"
                                            disabled
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
                                    <div class="card none-border" style="width: 28rem;">
                                        <div class="card-body">
                                            <label class="form-label" for="basic-icon-default-fullname">Kota</label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"
                                            ><i class="bx bx-user"></i
                                            ></span>
                                            <input
                                                id                  = "basic-icon-default-fullname"
                                                type                = "text"
                                                class               = "form-control"
                                                value               = "{{ $item->KOTA_WP }}"
                                                style               ="padding: 12px"
                                                disabled
                                                aria-label          = "John Doe"
                                                placeholder         = "John Doe"
                                                aria-describedby    = "basic-icon-default-fullname2"
                                            />
                                        </div>
                                        </div>
                                    </div>
                                    <div class="card none-border" style="width: 28rem;">
                                        <div class="card-body">
                                            <label class="form-label" for="basic-icon-default-company">Telpon</label>
                                            <div class="input-group input-group-merge">
                                                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                                                <span id="basic-icon-default-company2" class="input-group-text" style="background: unset;padding-right:unset"> 62</span>
                                                <input
                                                    id                  = "basic-icon-default-company "
                                                    type                = "number"
                                                    style               = "padding: 12px"
                                                    class               = "form-control urlNumber"
                                                    value               = "{{ $item->TELP_WP }}"
                                                    aria-label          = "ACME Inc."
                                                    name                = "TELP_WP"
                                                    placeholder         = "ACME Inc."
                                                    aria-describedby    = "basic-icon-default-company2"
                                                    maxlength           = "12"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <!-- button save -->
                                <section style="display: flex; justify-content: center;margin-top:4%;padding: 12px">
                                    <button type="submit" class="btn btn-public-datapribadi btn-primary" style="width: 30% ;background-color: #18c42c;border: 1px black solid">Save</button>
                                </section>

                            </form>
                        </div>
                    </div>
                </section>

                @endforeach
         
           

               


        </article>
    @endsection