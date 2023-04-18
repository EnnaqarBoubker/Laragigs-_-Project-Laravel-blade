<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\ListingRequest;

class ListingsController extends Controller
{
    //show all listings
    public function index()
    {
        // dd(request()-> tag); 
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    //show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    //show form to create new listing
    public function create()
    {
        return view('listings.create');
    }

    //store new listing
    public function store(ListingRequest $request)
    {
        $data = $request->validated();
        Listing::create($data);
        return redirect('/')->with('message', 'Listing created successfully');
    }
}
