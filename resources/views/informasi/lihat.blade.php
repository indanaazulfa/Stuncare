@extends('layout.template')
@section('konten')
    <!-- START FORM -->
    <form action='{{ url('informasi/'.$data->id) }}' method='post'>
    @csrf
    @method('GET')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{ url('informasi') }}' class="btn btn-primary"> <- Kembali </a>
            <div class="mb-3 row mt-3">
                <img src="{{ asset($data->gambar ?? 'assets/img/placeholder.jpeg') }}" alt="" class="img-fluid" id="preview" style="width: 40%;">
            </div>
            <div class="mb-3 row">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    {{date('d F Y', strtotime($data->tanggal))}}
                </div>
            </div>
            <div class="mb-3 row">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    {{$data->judul}}
                </div>
            </div>
            <div class="mb-3 row">
                <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                <div class="col-sm-10">
                    {!! $data->isi !!}
                </div>
            </div>
        </div>
    </form>
@endsection