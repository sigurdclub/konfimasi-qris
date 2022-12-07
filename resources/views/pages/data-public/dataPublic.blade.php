    @extends('main')

    @section('content')

    <section class="container-fluid mt-3 row" style="justify-content: space-around">
        <h4 style="margin-top:2%;color:black;font-family: code">Data Public </h4>

        @foreach ($data_public as $item)
            
        <div class="card mt-3" style="width: 18rem;">
            <img src="assets/img/profile icon.png" width="50%" class="rounded mx-auto d-block m-3" alt="...">
            <div class="card-body">
                <h5 style="text-align: center;color: black" class="card-title">{{ $item->SUBJEK_PAJAK_ID }}</h5>
                <p style="text-align: center;color:black" class="card-text">{{ $item->NM_WP }}</p>
            </div>
            <footer class="mb-3" style=" display: flex; justify-content: space-around ; padding: 14px;" >

                <!-- Profile Button -->
                
                <a href="data-pribadi/{{ $item->id }}">
                
                    <button type="button" class="btn button-color"> 
                        <span><i class="fa-regular fa-user"></i></span> 
                        <span style="padding: 5px">
    
                            Profile
                        </span>
                    </button>
                </a>

                <!-- Message Button -->
                <button type="button" class="btn button-color"> 
                    <span><i class="fa-regular fa-envelope"></i></span> 
                    <span style="padding: 5px">

                        Message
                    </span>
                </button>
            </footer>
        </div>
        @endforeach

        
    </section>
    @endsection