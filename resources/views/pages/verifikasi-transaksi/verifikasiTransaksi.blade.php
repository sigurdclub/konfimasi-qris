@extends('main')

@section('content')
    <section class="container-fluid mt-2 row" style="justify-content: center">
        <h4 style="margin-top:2%;color:black;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 32px">Verifikasi Transaksi</h4>
        <div class="card none-border"  style="width: 100%;margin-top:2%;background-color: unset; ">
            <div class="card-body">
                <div class="table-responsive text-nowrap">

                    <table style="background-color: white;" class="   table-status-transaksi">
                        <thead >
                            <tr style="background-color: #f5f5f9">
                                <th>NOP</th>
                                <th>NAMA SUBJEK</th>
                                <th>NAMA PENGIRIM</th>
                                <th>NO HP / NO WA</th>
                                <th>NOMINAL</th>
                                <th style="width: 10%">BUKTI BAYAR</th>
                                <th>STATUS</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        @foreach ($all_data as $item)
                        <tbody class="table-border-bottom-0">
                        <tr class="
                        @if ($item->status == "success")
                        tr-td
                        @else
                        tr-td-1
                        @endif"
                        >
                        <td>{{ $item->nop }}</td>
                        <td>{{ $item->nama_subjek }}</td>
                        <td>{{ $item->nama_pengirim }}</td>
                        <td>{{ $item->no_hp }}</td>
                        <td>{{ $item->nominal }}</td>

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


                                    <button style="font-size: 12px" type="button" class="btn btn-success btn-thumbsVerifikasi" data-id="{{ $item->id }}"><i style="font-size: 20px" class="fa-solid fa-thumbs-up"></i></button>

                            </td>
                        @else
                            <td>
                                {{-- <a href="{{ url('verifikasi-transaksi/change-status/'.$item->id) }}">

                                    <button style="font-size: 12px" type="button" class="btn btn-success"><i style="font-size: 20px" class="fa-solid fa-thumbs-up"></i></button>
                                </a> --}}
                                <span style="font-style: italic" class="badge bg-label-secondary me-1">Verified <i class="fa-solid fa-check"></i></span>
                            </td>
                        @endif

                        </tr>


                    </tbody>
                    @endforeach
                    </table>
                </div>
                <div class="d-flex justify-content-end mt-2">
                    {{$all_data->links()}}
                </div>
            </div>
        </div>
    </section>
@endsection
