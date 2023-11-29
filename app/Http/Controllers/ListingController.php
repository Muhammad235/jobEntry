<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(Request $request)
    {
        return view ('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'employment_type']))->get(),
            'fulltime_listings' => Listing::where('employment_type', 'Full Time')->get()
        ]);
    }

    public function show(Listing $listing)
    {
        return view ('listings.show', [
            'listing' => $listing
        ]);
    }
}
