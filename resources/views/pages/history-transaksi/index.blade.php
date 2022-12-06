    @extends('main')

    @section('content')
        <section class="container-fluid mt-2 row" style="justify-content: center">
            <h4 style="margin-top:2%;color:black;font-family: code">History Transaksi</h4>
            {{-- Search --}}
            <div class="row justify-content-end mb-3">
                <div class="col-md-4 ">
                    <form action="{{ url('history-transaksi') }}">

                        {{ csrf_field() }}

                        <div class="col-12" style="display: flex; justify-content: right;margin-top: 3%">
                            <input
                            type="text"
                            class="form-control"
                            placeholder="Search..."
                            aria-label="Search..."
                            name="search" value="{{ request('search') }}">

                            <button class="btn btn-outline-info" type="submit" >Search</button>
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
                                <tr>
                                <th>NOP</th>
                                <th>NAMA PENGIRIM</th>
                                <th>NAMA SUBJEK</th>
                                <th>NO HP / NO WA</th>
                                <th>TANGGAL TRANSAKSI</th>
                                <th>STATUS</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <tr>
                                <td>{{ $item->nop }}</td>
                                <td>{{ $item->nama_pengirim }}</td>
                                <td>{{ $item->nama_subjek }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td>{{ $item->tanggal }}</td>

                                <td>
                                    <span class="badge bg-label-warning me-1">{{ $item->status }}</span>
                                </td>

                                </tr>
                                <td>
                                    <img style="width: 15%" src="{{ asset('storage/' . $item->foto_bukti_bayar) }}" alt="">
                                </td>


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
