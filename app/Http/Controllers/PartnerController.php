<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::where('type', '=', 'insurance')->get();
        return view('contact/insurance-partner', compact('partners'));
    }

    public function service()
    {
        $partners = Partner::where('type', '=', 'service')->get();
        return view('contact/service-partner', compact('partners'));
    }

    public function getPartners(Request $request) {
        $query = Partner::query();

        if ($request->has('type')) {
            $query = $query->where('type', '=', $request->type);
        } 

        if ($request->has('search')) {
            $query = $query->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('address', 'like', '%' . $request->search . '%');
        } 

        $partners = $query->get();
        return response()->json($partners);
    }
}
