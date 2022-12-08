    @extends('main')

    @section('content')
        <section class="container-fluid mt-2 row" style="justify-content: center">
            <h4 style="margin-top:2%;color:black;font-family: code">History Transaksi</h4>
            {{-- Search --}}
            <div class="row justify-content-end mb-3">
                <div class="">
                    <form action="{{ url('history-transaksi') }}">

                        {{ csrf_field() }}

                        <div class="" style="display: flex; justify-content: right;margin-top: 3%">
                            <input
                            type="text"
                            class="form-control"
                            placeholder="Pencarian..."
                            aria-label="Pencarian..."
                            style="width: 30%;margin:12px"
                            name="search" value="{{ request('search') }}">

                            <button style="margin: 12px" class="btn btn-outline-success" type="submit" ><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
                {{-- Filter Tanggal --}}
                {{-- <div class="col-md-4 ">
                    <form action="{{ url('history-transaksi') }}">

                        {{ csrf_field() }}

                        <div class="col-12" style="display: flex; justify-content: right;margin-top: 3%">
                            <input
                            type="date"
                            class="form-control"
                            placeholder="Search..."
                            aria-label="Search..."
                            id="fromDate"
                            name="search" >
                            <input
                            type="date"
                            class="form-control"
                            placeholder="Search..."
                            aria-label="Search..."
                            id="toDate"
                            name="search" >

                            <button class="btn btn-outline-info" type="submit" >Search</button>
                        </div>
                    </form>
                </div> --}}

            </div>

            {{-- /Search --}}
            <div class="card none-border"  style="width: 100%;margin-top:2%">
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        @if (count($histori) > 0)
                            @foreach ($histori as $item)
                            <table class="table table-history-transaksi">
                            <thead >
                                <tr style="border: 1px solid #18c42c">
                                <th>NOP</th>
                                <th>NAMA PENGIRIM</th>
                                <th>NAMA SUBJEK</th>
                                <th>NO HP / NO WA</th>
                                <th style="width: 10%">BUKTI BAYAR</th>
                                <th>TANGGAL TRANSAKSI</th>
                                
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <tr>
                                <td>{{ $item->nop }}</td>
                                <td>{{ $item->nama_pengirim }}</td>
                                <td>{{ $item->nama_subjek }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td>
                                    <img style="width: 80%" src="{{ asset('storage/' . $item->foto_bukti_bayar) }}" alt="">
                                </td>

                                <td>{{ $item->tanggal }}</td>

                    

                                </tr>
                                

                            </tbody>
                            </table>
                            @endforeach
                        @else
                            <p class="tex-center fs-4">Data Tidak Ditemukan</p>
                        @endif
                    </div>
                   <div class="d-flex justify-content-end">
                        {{$histori->links()}}
                   </div>
                </div>
            </div>
        </section>
    @endsection
