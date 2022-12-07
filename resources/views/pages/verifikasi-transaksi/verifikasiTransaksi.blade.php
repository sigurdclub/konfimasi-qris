@extends('main')

@section('content')
    <section class="container-fluid mt-2 row" style="justify-content: center">
        <h4 style="margin-top:2%;color:black;font-family:'Times New Roman', Times, serif;font-size: 32px">Verifikasi Transaksi</h4>
        <div class="card none-border"  style="width: 100%;margin-top:2%">
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    
                    @foreach ($all_data as $item)
                    <table class="table table-status-transaksi">
                    <thead >
                        <tr>
                        <th>NOP</th>
                        <th>NAMA SUBJEK</th>
                        <th>NAMA PENGIRIM</th>
                        <th>NO HP / NO WA</th>
                        {{-- <th>BUKTI BAYAR</th> --}}
                        <th>STATUS</th>
                        <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                        <td>{{ $item->nop }}</td>
                        <td>{{ $item->nama_subjek }}</td>
                        <td>{{ $item->nama_pengirim }}</td>
                        <td>{{ $item->no_hp }}</td>

                        
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
                                <a href="{{ url('verifikasi-transaksi/change-status/'.$item->id) }}">
                                
                                    <button style="font-size: 12px" type="button" class="btn btn-success"><i style="font-size: 20px" class="fa-solid fa-thumbs-up"></i></button>
                                </a>
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
                        <td>
                            <img style="width: 15%" src="{{ asset('storage/' . $item->foto_bukti_bayar) }}" alt="">
                        </td>


                    </tbody>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
