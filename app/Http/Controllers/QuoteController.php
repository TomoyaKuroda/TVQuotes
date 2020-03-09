<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quote;

class QuoteController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {

        $quotes = Quote::latest()->get();
        return view('quotes.index', [
            'quotes' => $quotes
        ]);
    }

    public function show($id)
    {

        $quote = Quote::findOrFail($id);
        return view('quotes.show', [
            'quote' => $quote
        ]);
    }

    public function create()
    {
        return view('quotes.create', []);
    }
    public function store()
    {

        $quote = new Quote();
        $quote->name = request('name');
        $quote->season = request('season');
        $quote->episode = request('episode');
        $quote->quote = request('quote');
        $quote->photo = '';

        $quote->save();


        return redirect()->route('quotes.index')->with('msg', 'The quote is added successfully');
    }

    public function edit($id)
    {
        //Find the quote
        $quote = Quote::find($id);
        return view('quotes.edit', ['quote' => $quote]);
    }

    public function update(Request $request)
    {
        //Retrieve the quote and update
        $quote = Quote::find($request->input('id'));
        $quote->name = $request->input('name');
        $quote->season = $request->input('season');
        $quote->episode = $request->input('episode');
        $quote->quote = $request->input('quote');
        $quote->save(); //persist the data
        return redirect()->route('quotes.index')->with('msg', 'Quote Updated Successfully');
    }
    public function destroy($id)
    {

        $quote = Quote::findOrFail($id);
        $quote->delete();


        return redirect('/quotes');
    }
}