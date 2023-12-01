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
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(5),
            'fulltime_listings' => Listing::where('employment_type', 'Full Time')->paginate(5)
        ]);
    }

    public function show(Listing $listing)
    {
        return view ('listings.show', [
            'listing' => $listing,
        ]);
    }

    public function create(Listing $listing)
    {
        return view ('listings.create');
    }

    public function store(CreateJobListRequest $request)
    {
        $validateData = $request->validated();

        // $validateData['logo'] = $request->file('logo')->store('logos', 'public');

        // dd($validateData['logo']);

        $createJoblist = Listing::create($validateData);

        if ($createJoblist) {

            return redirect('/listings/create')->with('message', 'Job post created successfully');
            
        }
    
    }

    public function edit(Listing $listing)
    {
        return view ('listings.edit', ['listing' => $listing]);
    }


    public function update(CreateJobListRequest $request, Listing $listing)
    {
        $validateData = $request->validated();

        // $validateData['logo'] = $request->file('logo')->store('logos', 'public');

        // dd($validateData['logo']);

        $createJoblist = $listing->update($validateData);

        if ($createJoblist) {

            return back()->with('message', 'Job post updated successfully');
            
        }
    
    }
}
