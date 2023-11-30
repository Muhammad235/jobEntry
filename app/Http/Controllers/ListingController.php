<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use App\Http\Requests\CreateJobListRequest;

class ListingController extends Controller
{
    public function index(Request $request)
    {
        return view ('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get(),
            'fulltime_listings' => Listing::where('employment_type', 'Full Time')->get()
        ]);
    }

    public function show(Listing $listing)
    {
        return view ('listings.show', [
            'listing' => $listing
        ]);
    }

    public function create(Listing $listing)
    {
        return view ('listings.create');
    }

    public function store(CreateJobListRequest $request)
    {

        $validateData = $request->validated();

        $createJoblist = Listing::create($validateData);

        if ($createJoblist) {

            return redirect('/listings/create')->with('message', 'Job post created successfully');
            
        }
    
    }
}
