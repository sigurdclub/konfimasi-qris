@extends('main')

@section('content')
    <div>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">NOP</label>
                <input type="text" class="form-control" id="inputEmail4" name="nop" placeholder="Input Nomor Objek Pajak">
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Nama Subjek Pajak</label>
                <input type="text" class="form-control" id="inputEmail4" name="nama_subjek" placeholder="Input Nama Subjek Pajak">
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Nama Pengirim</label>
                <input type="text" class="form-control" id="inputEmail4" name="nama_pengirim" placeholder="Input Nama Pengirim">
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">No.Hp</label>
                <input type="text" class="form-control" id="inputEmail4" name="no_hp" placeholder="Input Nomor Hp atau WA">
            </div>
            <div class="col-12">
                <label for="inputAddres2" class="form-label">Foto Bukti Transfer</label>
                <input type="file" class="form-control" id="inputAddres2" name="gambar">
            </div>
            <div class="col-12" style="display: flex; justify-content: right;margin-top: 4%">
                <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
            </div>
        </form>
    </div>
@endsection
