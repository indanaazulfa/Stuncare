@extends('layout.template')
@section('konten')
    <!-- START DATA -->
    <div class="mt-5 my-3 p-3 bg-body rounded shadow-sm">
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
          <a href='{{url('informasi/create')}}' class="btn btn-primary">+ Tambah Data</a>
        </div>
  
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Gambar</th>
                    <th>Tanggal</th>
                    <th>Judul</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <?php $i = $data->firstItem()?>
                @foreach ($data as $item)
                <tr>
                    <td>{{$i}}</td>
                    <td>
                        <a href="{{ asset($item->gambar) }}" data-fslightbox="gallery-{{ $item->id }}">
                            <img src="{{ asset($item->gambar) }}" alt="" class="img-fluid" style="width: 100px;">
                        </a>
                    </td>
                    <td>{{$item->tanggal}}</td>
                    <td>{{$item->judul}}</td>
                    <td>
                        <a href='{{url('informasi/'.$item->id)}}' class="btn btn-primary btn-sm">View</a>
                        <a href='{{url('informasi/'.$item->id.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>
                        <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{url('informasi/'.$item->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                        </form>
                    </td>
                </tr>
                <?php $i++?>
                @endforeach
            </tbody>
        </table>  
        {{$data->links()}}
    </div>
  <!-- AKHIR DATA -->
@endsection