<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        return view ('listings.index', [
            'listings' => Listing::all(),
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
