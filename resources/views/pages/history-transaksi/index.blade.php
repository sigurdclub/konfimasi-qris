    @extends('main')

    @section('content')
        <section class="container-fluid mt-2 row" style="justify-content: center">
            <h4 style="margin-top:2%;color:black;font-family: code">History Transaksi</h4>
            <div class="card none-border"  style="width: 100%;margin-top:2%">
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        @foreach ($histori as $item)
                        <table class="table table-history-transaksi">
                        <thead >
                            <tr>
                            <th>NOP</th>
                            <th>NAMA SUBJEK</th>
                            <th>NAMA PENGIRIM</th>
                            <th>NO HP / NO WA</th>
                            <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                            <td>{{ $item->nop }}</td>
                            <td>{{ $item->nama_subjek }}</td>
                            <td>{{ $item->nama_pengirim }}</td>
                            <td>{{ $item->no_hp }}</td>

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
                    </div>
                </div>
            </div>
        </section>
    @endsection
