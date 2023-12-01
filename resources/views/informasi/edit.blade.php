@extends('layout.template')
@section('konten')
    <!-- START FORM -->
    <form action='{{ url('informasi/'.$data->idInformasi) }}' method='post'>
    @csrf
    @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{ url('informasi') }}' class="btn btn-primary"> <- Kembali </a>
            <div class="mb-3 row">
                <label for="idInformasi" class="col-sm-2 col-form-label">Id Informasi</label>
                <div class="col-sm-10">
                    {{$data->idInformasi}}
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    {{$data->tanggal}}
                </div>
            </div>
            <div class="mb-3 row">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='judul' value="{{$data->judul}}" id="judul">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='isi' value="{{$data->isi}}" id="isi">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="submit" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
    </form>
@endsection