    @extends('main')

    @section('content')
        <section class="container-fluid mt-2 row" style="justify-content: center">
            <h4 style="margin-top:2%;color:black;font-family: code">Status Transaksi</h4>
            {{-- Search --}}
            <div class="row justify-content-end mb-3">
                <div class="col-md-4">
                    <form action="{{ url('status-transaksi') }}">

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
            </div>
            {{-- /Search --}}
            <div class="card none-border"  style="width: 100%;margin-top:2%">
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        @if (count($data) > 0)
                            @foreach ($data as $item)
                            <table class="table table-status-transaksi">
                            <thead >
                                <tr>
                                <th>NOP</th>
                                <th>NAMA SUBJEK</th>
                                <th>NAMA PENGIRIM</th>
                                <th>NO HP / NO WA</th>
                                <th style="width: 10%">BUKTI BAYAR</th>
                                <th >STATUS</th>

                                <!-- Actions Cek -->
                                    @if ($item->status == "pending")
                                        <th>Actions</th> 
                                    @endif

                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <tr>
                                <td>{{ $item->nop }}</td>
                                <td>{{ $item->nama_subjek }}</td>
                                <td>{{ $item->nama_pengirim }}</td>
                                <td>{{ $item->no_hp }}</td>

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
                                        <button style="font-size: 12px" type="button" class="btn btn-danger">Cancel</button>
                                    </td>
                                    
                                @else
                                    
                                @endif

                                
                                </tr>


                            </tbody>
                            </table>
                            @endforeach
                        @else
                            <p class="tex-center fs-4">Data Tidak Ditemukan</p>
                        @endif
                    </div>
                    <div class="d-flex justify-content-end">
                        {{$data->links()}}
                     </div>
                </div>
            </div>
        </section>
    @endsection
