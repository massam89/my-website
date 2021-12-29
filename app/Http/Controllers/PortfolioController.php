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
        $portfolios = Portfolio::where('lang', $request->lang)->get();

        if($request->has('search')) {
            $portfolios = Portfolio::where('lang', $request->lang)->where('portfolio_title', 'like', "%{$request->search}%")->get();
        }

        return view('portfolio.index', [
            'portfolios' => $portfolios,
            'lang' => $request->lang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($lang)
    {
        return view('portfolio.create', ['lang' => $lang]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfolioExt = '';
        
        if(isset($request->portfolio_image_link)){

            $randnum = uniqid();

            $portfolioExt = $request->portfolio_image_link->extension('');

            $request->portfolio_image_link->move(public_path('/assets/img/owner/portfolio/'), $randnum . '.' . $portfolioExt); 
            $portfolio = '/assets/img/owner/portfolio/'. $randnum . '.' . $portfolioExt;
        } else {
            $portfolio = null;
        }

        Portfolio::create([
            'portfolio_title' => $request->portfolio_title,
            'portfolio_category' => $request->portfolio_category,
            'portfolio_link' => $request->portfolio_link,
            'portfolio_description' => $request->portfolio_description,
            'portfolio_image_link' => $portfolio,
            'lang' => $request->lang
        ]);

        return redirect()->route('portfolio.index', ['lang' => $request->lang])->with('message', $request->lang == 'en' ? 'Portfolio has been created!' : 'نمونه کار جدید ایجاد شد');
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
    public function edit($lang, $id)
    {
        $portfolio = Portfolio::where('id', $id)->get()->first();
        
        return view('portfolio.edit', [
            'portfolio'=> $portfolio,
            'lang' => $lang
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $lang, $id)
    {
        $portfolioExt = '';
        $portfolio1 = Portfolio::where('id', $id)->get()->first();

        if(isset($request->portfolio_image_link)){

            $randnum = uniqid();
            $portfolioExt = $request->portfolio_image_link->extension('');
            $request->portfolio_image_link->move(public_path('/assets/img/owner/portfolio/'), $randnum . '.' . $portfolioExt); 
            $portfolio = '/assets/img/owner/portfolio/'. $randnum . '.' . $portfolioExt;
        } else {
            $portfolio = $portfolio1->portfolio_image_link;
        }

        $portfolio1->update([
            'portfolio_title' => $request->portfolio_title,
            'portfolio_category' => $request->portfolio_category,
            'portfolio_link' => $request->portfolio_link,
            'portfolio_description' => $request->portfolio_description,
            'portfolio_image_link' => $portfolio,
            'lang' => $lang
        ]);

        return redirect()->route('portfolio.index', ['lang' => $lang])->with('message', $lang == 'en' ? 'Portfolio has been updated!' : 'نمونه کار بروز شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, $id)
    {
        $portfolio = Portfolio::where('id', $id)->get()->first();

        $portfolio->delete();

        return redirect()->route('portfolio.index', ['lang' => $lang])->with('message', $lang == 'en' ? 'Portfolio has been deleted!' : 'نمونه کار حذف شد');
    }
}