<?php

namespace App\Http\Controllers;

use App\Models\ServicePage;
use App\Models\ServiceItem;
use Illuminate\Http\Request;

class ServicePageController extends Controller
{
    public function index()
    {
        $pageData = ServicePage::first();
        $services = ServiceItem::orderBy('created_at', 'desc')->paginate(9);
        return view('pages.services', compact('pageData', 'services'));
    }
    
    public function show($id)
    {
        $service = ServiceItem::findOrFail($id);
        $moreServices = ServiceItem::where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        $allServices = ServiceItem::where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('pages.service-detail', compact('service', 'moreServices','allServices'));
    }
}