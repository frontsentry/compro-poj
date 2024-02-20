<?php

namespace App\Http\Controllers;

use App\Models\{Article, Banner, BusinessClient, WebSetting};
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::where('is_active', 1)
            ->orderBy('updated_at', 'desc')->get();
        $articles = Article::where('status', 'publish')->orderBy('updated_at', 'desc')->get();
        $clients = BusinessClient::get();

        $totalOutsourcing = WebSetting::where('key', 'total_outsourcing')->first()->value;
        $totalTransportFleet = WebSetting::where('key', 'total_transport_fleet')->first()->value;
        $totalTelecentre = WebSetting::where('key', 'total_telecentre')->first()->value;
        
        return view('welcome', [
            'banners' => $banners,
            'articles' => $articles,
            'clients' => $clients,
            'totalOutsourcing' => $totalOutsourcing,
            'totalTransportFleet' => $totalTransportFleet,
            'totalTelecentre' => $totalTelecentre,
        ]);
    }
}
