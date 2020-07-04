@extends('master')

@section('content')
    <div>
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">New Question</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="/pertanyaan" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul">
                </div>
                <div class="form-group">
                  <label for="isi">Isi</label>
                  <input type="text" class="form-control" id="isi" name="isi" placeholder="Deskripsi">
                </div>
                <div class="form-group">
                    <label for="tanggal_dibuat">Tanggal dibuat</label>
                    <input type="number" class="form-control" id="tanggal_dibuat" name="tanggal_dibuat" placeholder="DDMMYYY">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_diperbaharui">Tanggal diperbaharui</label>
                    <input type="number" class="form-control" id="tanggal_diperbaharui" name="tanggal_diperbaharui" placeholder="DDMMYYY">
                  </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
    </div>
@endsection