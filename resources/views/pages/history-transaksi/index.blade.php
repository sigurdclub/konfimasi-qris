<?php

    $access = Auth::user()->role;

?>
    @extends('main')

    @section('content')
        <section class="container-fluid mt-2 row mb-5" style="justify-content: center">
            <h4 style="margin-top:2%;color:black;font-family: code">History Transaksi</h4>
            {{-- Search --}}
            <div class="row justify-content-end mb-3">
                <div class="">
                    <form action="{{ url('history-transaksi') }}">

                        {{ csrf_field() }}

                        <div class="" style="display: flex; justify-content: right;margin-top: 3%">
                            <input
                            type="text"
                            class="form-control search-historyTransaksi"
                            placeholder="Pencarian..."
                            aria-label="Pencarian..."
                            style="width: 30%;margin:12px"
                            name="search" value="{{ request('search') }}">

                            <button style="margin: 12px" class="btn btn-outline-success" type="submit" ><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>

                @if ($access == "admin")

                    <div class="row justify-content-start mb-3">
                        <div class="">
                            <form action="{{ url('history-transaksi') }}" method="GET">

                                {{ csrf_field() }}

                                <div class="" style="display: flex; justify-content: left;margin-top: 3%">
                                    <input
                                    type="date"
                                    class="form-control search-historyTransaksi"
                                    placeholder="Pencarian..."
                                    aria-label="Pencarian..."
                                    style="width: 20%;margin:12px"
                                    name="tgl_awal" >
                                    <input
                                    type="date"
                                    class="form-control search-historyTransaksi"
                                    placeholder="Pencarian..."
                                    aria-label="Pencarian..."
                                    style="width: 20%;margin:12px"
                                    name="tgl_akhir" >

                                    <button style="margin: 12px" class="btn btn-outline-success" type="submit" ><i class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </form>
                        </div>

                    </div>

                @endif
            </div>


            {{-- /Search --}}
            <div class="card card-historyTransaksi none-border"  style="width: 50%;margin-top:2%;background-color: unset">
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        @if (count([$histori]) > 0)
                        <table style="background-color: white" class="table-history-transaksi">
                            <thead >
                                <tr style="background-color: #f5f5f9">
                                    <th>URAIAN</th>

                                    {{-- <th>NAMA SUBJEK</th>
                                    <th>NO HP / NO WA</th> --}}
                                    <th style="width: 10%">BUKTI BAYAR</th>
                                    {{-- <th>TANGGAL TRANSAKSI</th> --}}

                                </tr>
                            </thead>
                            @foreach ($histori as $item)
                            <tbody class="table-border-bottom-0">
                                <tr>
                                <td>
                                    <h5 style="color: black;font-family: code">
                                        Pajak Bumi Dan Bangunan
                                    </h5>

                                    <h6 style="color: black;font-family: code">
                                        {{ $item->nop }}
                                    </h6>
                                    <p style="font-size: 16px">
                                        {{ $item->nama_pengirim }}
                                    </p>
                                    <p style="font-size: 16px">
                                        {{ $item->nominal }}
                                    </p>
                                    <p style="color: rgba(34, 34, 34, 0.74)">
                                        {{ $item->tanggal }}
                                    </p>
                                </td>

                                {{-- <td>{{ $item->nama_subjek }}</td> --}}
                                {{-- <td>{{ $item->no_hp }}</td> --}}
                                <td>
                                    <img style="width: 80%" src="{{ asset('storage/' . $item->foto_bukti_bayar) }}" alt="">
                                </td>

                                {{-- <td>{{ $item->tanggal }}</td> --}}



                                </tr>


                            </tbody>
                            @endforeach
                            </table>
                        @else
                            <p class="tex-center fs-4">Data Tidak Ditemukan</p>
                        @endif
                    </div>
                   <div class="d-flex justify-content-end mt-2">
                        {{$histori->links()}}
                   </div>
                </div>
            </div>
        </section>
    @endsection
