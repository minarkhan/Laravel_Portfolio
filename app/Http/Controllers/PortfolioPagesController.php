<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Portfolio;


class PortfolioPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {   
        $portfolios = Portfolio::all();
        return view('pages.portfolio.list', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('pages.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=> 'required|string',
            'sub_title'=> 'required|string',
            'big_image'=> 'required|image',
            'small_image'=> 'required|image',
            'description'=> 'required|string',
            'client'=> 'required|string',
            'category'=> 'required|string',
        ]);

        $portfolios = new Portfolio;
        $portfolios->title = $request->title;
        $portfolios->sub_title = $request->sub_title;
        $portfolios->description = $request->description;
        $portfolios->client = $request->client;
        $portfolios->category = $request->category;

        $big_image = $request->file('big_image');
        storage::putFile('public/img/', $big_image);
        $portfolios->big_image = "storage/img/". $big_image->hashName();

        $small_image = $request->file('small_image');
        storage::putFile('public/img/', $small_image);
        $portfolios->small_image = "storage/img/". $small_image->hashName();


        $portfolios->save();
        return redirect()->route('admin.portfolios.create')->with('success ', "portfolio Create successfully");

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
        $portfolio = Portfolio::find($id);
        return view('pages.portfolio.edit', compact('portfolio'));
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
         $this->validate($request, [
            'title'=> 'required|string',
            'sub_title'=> 'required|string',
            'description'=> 'required|string',
            'client'=> 'required|string',
            'category'=> 'required|string',
        ]);

        $portfolios = Portfolio::find($id);
        $portfolios->title = $request->title;
        $portfolios->sub_title = $request->sub_title;
        $portfolios->description = $request->description;
        $portfolios->client = $request->client;
        $portfolios->category = $request->category;


        if($request->file('big_image')){
        $big_image = $request->file('big_image');
        storage::putFile('public/img/', $big_image);
        $portfolios->big_image = "storage/img/". $big_image->hashName();

        }

        if($request->file('small_image')){
        $small_image = $request->file('small_image');
        storage::putFile('public/img/', $small_image);
        $portfolios->small_image = "storage/img/". $small_image->hashName();
        
        }
        $portfolios->save();
        return redirect()->route('admin.portfolios.list')->with('success ', "portfolio Updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $portfolio = Portfolio::find($id);
        @unlink(public_path($portfolio->big_image));
        @unlink(public_path($portfolio->small_image));
        $portfolio->delete();
        return redirect()->route('admin.portfolios.list')->with('success ', "portfolio Deleted successfully");

    }
}
