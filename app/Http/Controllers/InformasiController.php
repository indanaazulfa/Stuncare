<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class InformasiController extends Controller
{
    public function index()
    {
        $data = Informasi::latest()->paginate(5);
        return view('informasi.index')->with('data',$data);
    }

    public function create()
    {
        return view('informasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
            'tanggal.required' => 'Tanggal wajib diisi',
            'judul.required' => 'Judul Informasi wajib diisi',
            'isi.required' => 'Isi Informasi wajib diisi',
            'gambar.required' => 'Gambar wajib diisi',
            'gambar.image' => 'Gambar harus berupa file gambar',
            'gambar.mimes' => 'Gambar harus berupa file gambar',
            'gambar.max' => 'Gambar maksimal berukuran 2 MB',
        ]);

        $data = [
            'tanggal' => $request->tanggal,
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $this->storeImage($request->gambar, 'informasi'),
            'slug' => $this->generateSlug($request->judul),
        ];

        Informasi::create($data);

        return redirect()->to('informasi')->with('success','Berhasil menambahkan data');
    }

    public function show($id)
    {
        $informasi = Informasi::find($id);

        return view('informasi.lihat', [
            'data' => $informasi
        ]);
    }

    public function edit($id) //untuk melakukan proses edit
    {
        $informasi = Informasi::find($id);

        return view('informasi.edit', [
            'data' => $informasi
        ]);
    }

    public function update(Request $request, string $id) //untuk menyimpan update data
    {
        $request->validate([
            'judul'=>'required',
            'isi'=>'required',
            'tanggal'=>'required',
            'gambar'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
            'judul.required'=> 'Judul Informasi wajib diisi',
            'isi.required'=> 'Isi Informasi wajib diisi',
            'tanggal.required'=> 'Tanggal wajib diisi',
            'gambar.image'=> 'Gambar harus berupa file gambar',
            'gambar.mimes'=> 'Gambar harus berupa file gambar',
            'gambar.max'=> 'Gambar maksimal berukuran 2 MB',
        ]);

        $informasi = Informasi::find($id);

        $data = [
            'judul'=>$request->judul,
            'isi'=>$request->isi,
            'tanggal'=>$request->tanggal,
        ];

        if ($request->gambar) {
            $data['gambar'] = $this->storeImage($request->gambar, 'informasi');
            $this->deleteImage($informasi->gambar);
        }

        $informasi->update($data);

        return redirect()->to('informasi')->with('success','Berhasil melakukan update data');
    }

    public function destroy($id) //untuk melakukan pernghapusan data
    {
        if ($id == 1) {
            return redirect()->to('informasi')->with('error','Tidak dapat menghapus data');
        }

        $informasi = Informasi::find($id);
        $this->deleteImage($informasi->gambar);
        $informasi->delete();
        return redirect()->to('informasi')->with('success','Berhasil menghapus data');
    }

    protected function storeImage($file, $folder) {
        if (!Storage::exists('public/'.$folder)) {
            Storage::makeDirectory('public/'.$folder);
        }

        $file->store('public/'.$folder);
        $fileName = $file->hashName();

        return 'storage/'.$folder.'/'.$fileName;
    }

    private function deleteImage($path) {
        if (Storage::exists($path)) {
            Storage::delete($path);
        }
    }

    private function generateSlug($name) {
        $slug = Str::slug($name, '-');
        $slug_count = Informasi::where('slug', 'like', $slug . '%')->count();
        return $slug_count ? "{$slug}-{$slug_count}" : $slug;
    }
}
