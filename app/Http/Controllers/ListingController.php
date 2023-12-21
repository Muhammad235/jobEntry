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
        if ($listing->user_id != auth()->id()) {

            return back()->with('message', 'Unathorized action');
        }
        
        return view ('listings.show', [
            'listing' => $listing,
        ]);
    }

    public function create()
    {
        return view ('listings.create');
    }

    public function store(CreateJobListRequest $request)
    {
        $validateData = $request->validated();

        // $validateData['logo'] = $request->file('logo')->store('logos', 'public');
        $validateData['logo'] = 'test.png';

        $validateData['user_id'] = auth()->id();
        $createJoblist = Listing::create($validateData);

        if ($createJoblist) {

            return redirect('/dashboard')->with('message', 'Job post created successfully');
        }

    
    }

    public function edit(Listing $listing)
    {
        if ($listing->user_id != auth()->id()) {

            return back()->with('message', 'Unathorized action');
        }

        return view ('listings.edit', ['listing' => $listing]);
    }


    public function update(CreateJobListRequest $request, Listing $listing)
    {

        $validateData = $request->validated();

        // $validateData['logo'] = $request->file('logo')->store('logos', 'public');

        // dd($validateData['logo']);

        $createJoblist = $listing->update($validateData);

        if ($createJoblist) {

            return redirect('/dashboard')->with('message', 'Job post updated successfully');
            
        }
    }

    public function destroy(Listing $listing)
    {
        if ($listing->user_id != auth()->id()) {

            return back()->with('message', 'Unathorized action');
        }

        $listing->delete();

        return back()->with('message', 'Job post deleted successfully');

    }
}
