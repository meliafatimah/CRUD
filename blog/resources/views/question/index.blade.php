@extends('master')

@section('content')

    <div class="card">
       
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>                  
              <tr>
                <th style="width: 10px">#</th>
                <th>Judul</th>
                <th>Isi</th>
                <th style="width: 40px">Tanggal_dibuat</th>
                <th style="width: 40px">Tanggal_diperbaharui</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($question as $key => $item)
                  <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$item->judul}}</td>
                      <td>{{$item->isi}}</td>
                      <td>{{$item->tanggal_dibuat}}</td>
                      <td>{{$item->tanggal_diperbaharui}}</td>
                  </tr>
              @endforeach  
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
          </ul>
        </div>
      </div>
@endsection