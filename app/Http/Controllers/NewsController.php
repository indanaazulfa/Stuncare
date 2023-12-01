<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('home/news', [
            "news" => Informasi::orderBy('tanggal', 'desc')
                ->where('id', '!=', 1)
                ->get(),
            "fundamental" => Informasi::find(1)
        ]);
    }

    public function detail($slug) {
        $news = Informasi::where('slug', $slug)->first();

        return view('home.detail-news', [
            "news" => $news
        ]);
    }
}
