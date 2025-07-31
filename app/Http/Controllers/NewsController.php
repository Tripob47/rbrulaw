<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function index()
    {
        $response = Http::get('https://news.rbru.ac.th/newsrb_json/news_json.php');

        if ($response->successful()) {
            $news = $response->json();
        } else {
            $news = [];
        }

        // สำหรับ debug ลองแสดงข้อมูลก่อน return view
        // dd($news);

        return view('news.news', compact('news'));
    }
}
