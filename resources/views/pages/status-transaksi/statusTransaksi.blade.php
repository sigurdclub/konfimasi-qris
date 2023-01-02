    @extends('main')

    @section('content')
        <section class="container-fluid mt-2 row" style="justify-content: center">
            <h4 style="margin-top:2%;color:black;font-family: code">Status Transaksi</h4>

                <!--========= Search ============-->
            <div class="row justify-content-end mb-3">
                <div class="">
                    <form action="{{ url('status-transaksi') }}">

                        {{ csrf_field() }}

                        <div class="" style="display: flex; justify-content: right;margin-top: 3%">
                            <input
                            type="text"
                            class="form-control search-statusTransaksi"
                            placeholder="Search..."
                            aria-label="Search..."
                            style="width: 30%;margin:12px"
                            name="search" value="{{ request('search') }}">
                            <button style="margin: 12px" class="btn btn-outline-success" type="submit" ><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card none-border "  style="width: 100%;margin-top:2%; background-color: unset">
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        @if (count($data) > 0)
                        <table style="background-color: white" class="  table-status-transaksi">
                            <thead >
                                <tr style="background-color: #f5f5f9">
                                    <th>NOP</th>
                                    <th>NAMA SUBJEK</th>
                                    <th>NAMA PENGIRIM</th>
                                    <th>NO HP / NO WA</th>
                                    <th>NOMINAL</th>
                                    <th style="width: 10%">BUKTI BAYAR</th>
                                    <th >STATUS</th>

                                    <th>Actions</th>
                                    {{-- @foreach ($data as $item)

                                        <!-- Actions Cek -->
                                        @if ($item->status == "pending")
                                        @endif
                                    @endforeach --}}

                                </tr>
                            </thead>
                            @foreach ($data as $item)
                            <tbody class="table-border-bottom-0">
                                <tr>
                                <td>{{ $item->nop }}</td>
                                <td>{{ $item->nama_subjek }}</td>
                                <td>{{ $item->nama_pengirim }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td class="number-nominal">Rp. {{ $item->nominal }}</td>

                                <td>
                                    <img style="width: 80%" src="{{ asset('storage/' . $item->foto_bukti_bayar) }}" alt="">
                                </td>

                                @if ($item->status == "pending")
                                    <td>
                                        <span class="badge bg-label-warning me-1">{{ $item->status }}</span>
                                    </td>

                                @else
                                    <td>
                                        <span class="badge bg-label-success me-1">{{ $item->status }}</span>
                                    </td>
                                @endif

                                @if ($item->status == "pending")
                                    <td>

                                            <button data-id="{{ $item->id }}" data-nama="{{ $item->nop }}" style="font-size: 12px" type="button" class="btn btn-danger btn-cancel-statusTransaksi" ><i style="font-size: 20px" class="fa-solid fa-xmark"></i></button>
                                    </td>

                                @else

                                @endif


                                </tr>


                            </tbody>
                            @endforeach
                            </table>
                        @else
                            <p class="tex-center fs-4">Data Tidak Ditemukan</p>
                        @endif
                    </div>
                    <div class="d-flex justify-content-end mt-2">
                        {{$data->links()}}
                    </div>
                </div>
            </div>
        </section>




    @endsection
