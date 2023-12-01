@extends('layout.template')
@section('konten')
    <!-- START FORM -->
    <form action='{{ url('informasi') }}' method='post' enctype="multipart/form-data">
        @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{ url('informasi') }}' class="btn btn-primary"> <- Kembali </a>
            <div class="mb-3 row">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='tanggal' value="{{ old('tanggal') }}" id="tanggal">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='judul' id="judul" value="{{ old('judul') }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="isi" id="isi" rows="3">
                        {{ old('isi') }}
                    </textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="isi" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name='gambar' id="gambar" value="{{ old('gambar') }}">
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-10 mt-3">
                    <img src="{{ asset('assets/img/placeholder.jpeg') }}" alt="" class="img-fluid" id="preview" style="width: 50%;">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="submit" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
    </form>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let options = {
            selector: '#isi',
            height: 300,
            menubar: false,
            statusbar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat',
            content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; -webkit-font-smoothing: antialiased; }'
            }
            
            tinyMCE.init(options);
    
            const gambar = document.querySelector('#gambar');
            const preview = document.querySelector('#preview');

            gambar.addEventListener('change', function(){
                const file = this.files[0];
                if(file){
                    const reader = new FileReader();
                    reader.addEventListener('load', function(){
                        preview.setAttribute('src', this.result);
                    });
                    reader.readAsDataURL(file);
                }
            });
        })
    </script>
@endsection