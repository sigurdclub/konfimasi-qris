    @extends('main')

    @section('content')

    <section class="container-fluid mt-3 row" style="justify-content: space-around">
        <h4 style="margin-top:2%;color:black;font-family: code">Data Public </h4>

        {{-- Search --}}
            <div class="row justify-content-end mb-3">
                <div class="">
                    <form action="{{ url('data-public') }}">

                        {{ csrf_field() }}

                        <div class="col-12" style="display: flex; justify-content: right;margin-top: 3%">
                            <input
                            type="text"
                            class="form-control search-dataPribadi"
                            placeholder="Pencarian..."
                            aria-label="Pencarian..."
                            style="width: 30%;margin:12px"
                            name="search" value="{{ request('search') }}">

                            <button style="margin: 12px" class="btn btn-outline-success" type="submit" ><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
            </div>

        @if(count($data_public) > 0)
        @foreach ($data_public as $key =>$item)

        <div class="card mt-4" style="width: 18rem;" {{ $key }}>
            <section style="padding: 12px;display: flex;justify-content: end">

                <a class="delete-dataPublic" data-id="{{ $item->id }}" data-nama = "{{ $item->NM_WP }}">

                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                </a>
            </section>
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
                <a href="https://wa.me/{{ $item->TELP_WP }}" target="_blank">

                    <button type="button" class="btn button-color">
                        <span><i class="fa-regular fa-envelope"></i></span>
                        <span style="padding: 5px">
    
                            Message
                        </span>
                    </button>

                </a>
            </footer>
        </div>
        @endforeach

        @else
            <p class="tex-center fs-4">Data Tidak Ditemukan</p>
        @endif

    </section>
    <div class="d-flex justify-content-end " style="margin: 2em">

        {{$data_public->links()}}
    </div>
    @endsection
