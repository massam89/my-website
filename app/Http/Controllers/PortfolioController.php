<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $portfolios = Portfolio::all();

        if($request->has('search')) {
            $portfolios = Portfolio::where('portfolio_title', 'like', "%{$request->search}%")->get();
        }

        return view('portfolio.index')->with('portfolios', $portfolios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Portfolio::create([
            'portfolio_title' => $request->portfolio_title,
            'portfolio_category' => $request->portfolio_category,
            'portfolio_link' => $request->portfolio_link,
            'portfolio_description' => $request->portfolio_description
        ]);

        return redirect()->route('portfolio.index')->with('message', 'Portfolio has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::where('id', $id)->get()->first();
        
        return view('portfolio.edit')->with('portfolio', $portfolio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::where('id', $id)->get()->first();

        $portfolio->update([
            'portfolio_title' => $request->portfolio_title,
            'portfolio_category' => $request->category,
            'portfolio_link' => $request->link,
            'portfolio_description' => $request->description
        ]);

        return redirect()->route('portfolio.index')->with('message', 'Portfolio has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::where('id', $id)->get()->first();

        $portfolio->delete();

        return redirect()->route('portfolio.index')->with('message', 'Portfolio has been deleted!');
    }
}