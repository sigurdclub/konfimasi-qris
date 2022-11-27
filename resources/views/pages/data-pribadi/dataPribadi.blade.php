    @extends('main')

    @section('content')
        <article class="container-fluid mt-4">
            

            
            <!-- Image Profile -->
                <div class="card none-border" style="width: 30rem;">
                    <div class="card-body">
                        <article style="display:flex ; ">
                            <div class="container-icon-edit">
                                <i class='bx bxs-edit' style="color: black;font-size: 30px"></i>
                                <img src="assets/img/profile icon.png" class="rounded mx-auto d-block" alt="..." width="35%">
                            </div>
                            <div style="margin-top: 10%">
                                <h3 style="font-family: code;color:black"> Public </h3>
                                <h6 style="font-family: code;color: rgb(82, 82, 82)">730801300500401480</h6>
                            </div>
                        </article>
                    </div>
                </div>

                <!-- Form  -->

                <section style="display: flex; justify-content: center">

                    <div class="card none-border" style="width: 60rem;">
                        <div class="card-body">

                            <form action="">

                            
                            <!-- Section Name and -->
                            <section class="row" >
                                <div class="card none-border" style="width: 28rem;">
                                    <div class="card-body">
                                        <label class="form-label" for="basic-icon-default-fullname">Subjuk Pajak ID</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"
                                        ><i class="bx bx-user"></i
                                        ></span>
                                        <input
                                        type="text"
                                        class="form-control"
                                        id="basic-icon-default-fullname"
                                        placeholder="John Doe"
                                        aria-label="John Doe"
                                        aria-describedby="basic-icon-default-fullname2"
                                        style="padding: 12px"
                                        />
                                    </div>
                                    </div>
                                </div>
                                <div class="card none-border" style="width: 28rem;">
                                    <div class="card-body">
                                        <label class="form-label" for="basic-icon-default-company">Nama </label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text"
                                    ><i class="bx bx-buildings"></i
                                    ></span>
                                    <input
                                    type="text"
                                    id="basic-icon-default-company"
                                    class="form-control"
                                    placeholder="ACME Inc."
                                    aria-label="ACME Inc."
                                    aria-describedby="basic-icon-default-company2"
                                    style="padding: 12px"
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
                                        <span id="basic-icon-default-fullname2" class="input-group-text"
                                        ><i class="bx bx-user"></i
                                        ></span>
                                        <input
                                        type="text"
                                        class="form-control"
                                        id="basic-icon-default-fullname"
                                        placeholder="John Doe"
                                        aria-label="John Doe"
                                        aria-describedby="basic-icon-default-fullname2"
                                        style="padding: 12px"
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
                                        placeholder         = "ACME Inc."
                                        aria-label          = "ACME Inc."
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
                                            id               = "basic-icon-default-fullname"
                                            type             = "text"
                                            class            = "form-control"
                                            aria-label       = "John Doe"
                                            placeholder      = "John Doe"
                                            aria-describedby = "basic-icon-default-fullname2"
                                            style="padding: 12px"
                                        />
                                    </div>
                                    </div>
                                </div>
                                <div class="card none-border" style="width: 28rem;">
                                    <div class="card-body">
                                        <label class="form-label" for="basic-icon-default-company">Telpon</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text"
                                    ><i class="bx bx-buildings"></i
                                    ></span>
                                    <input
                                    type="text"
                                    id="basic-icon-default-company"
                                    class="form-control"
                                    placeholder="ACME Inc."
                                    aria-label="ACME Inc."
                                    aria-describedby="basic-icon-default-company2"
                                    style="padding: 12px"
                                    />
                                </div>
                                    </div>
                                </div>
                            </section>

                            <!-- button save -->
                            <section style="display: flex; justify-content: center;margin-top:2%">
                                <button type="submit" class="btn btn-primary" style="width: 30% ;background-color: #18c42c;border: 1px black solid">Save</button>
                            </section>

                        </form>

                            
                            {{-- <form>
                                <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                    ><i class="bx bx-user"></i
                                    ></span>
                                    <input
                                    type="text"
                                    class="form-control"
                                    id="basic-icon-default-fullname"
                                    placeholder="John Doe"
                                    aria-label="John Doe"
                                    aria-describedby="basic-icon-default-fullname2"
                                    />
                                </div>
                                </div>
                                <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-company">Company</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text"
                                    ><i class="bx bx-buildings"></i
                                    ></span>
                                    <input
                                    type="text"
                                    id="basic-icon-default-company"
                                    class="form-control"
                                    placeholder="ACME Inc."
                                    aria-label="ACME Inc."
                                    aria-describedby="basic-icon-default-company2"
                                    />
                                </div>
                                </div>
                                <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-email">Email</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                    <input
                                    type="text"
                                    id="basic-icon-default-email"
                                    class="form-control"
                                    placeholder="john.doe"
                                    aria-label="john.doe"
                                    aria-describedby="basic-icon-default-email2"
                                    />
                                    <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                                </div>
                                <div class="form-text">You can use letters, numbers & periods</div>
                                </div>
                                <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-phone">Phone No</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-phone2" class="input-group-text"
                                    ><i class="bx bx-phone"></i
                                    ></span>
                                    <input
                                    type="text"
                                    id="basic-icon-default-phone"
                                    class="form-control phone-mask"
                                    placeholder="658 799 8941"
                                    aria-label="658 799 8941"
                                    aria-describedby="basic-icon-default-phone2"
                                    />
                                </div>
                                </div>
                                <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-message">Message</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-message2" class="input-group-text"
                                    ><i class="bx bx-comment"></i
                                    ></span>
                                    <textarea
                                    id="basic-icon-default-message"
                                    class="form-control"
                                    placeholder="Hi, Do you have a moment to talk Joe?"
                                    aria-label="Hi, Do you have a moment to talk Joe?"
                                    aria-describedby="basic-icon-default-message2"
                                    ></textarea>
                                </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Send</button>
                            </form> --}}
                        </div>
                    </div>
                </section>

            

        </article>
    @endsection