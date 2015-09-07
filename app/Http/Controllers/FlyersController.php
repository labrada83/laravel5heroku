<?php

namespace FlyerProject\Http\Controllers;

use FlyerProject\Flyer;
use FlyerProject\Photo;
use Illuminate\Http\Request;
use FlyerProject\Http\Requests\FlyerRequest;
use FlyerProject\Http\Controllers\Controller;

class FlyersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {        
        return view('flyers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */ 
    public function store(FlyerRequest $request)
    {
        Flyer::create($request->all());       

        flash()->success('Success','Your flyer has been created.');
        return redirect()->back(); //temporary
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($zip, $street)
    {        
        $flyer = Flyer::locatedAt($zip, $street);
        return view('flyers.show', compact('flyer'));
    }


    /**
     * Add photo
     *
     * @param  int  $id
     * @return Response
     */
    public function addPhoto($zip, $street, Request $request)
    {
        $this->validate($request,[
            'file'=>'required|mimes:jpg,jpeg,png,bmp'
        ]);

        $photo = Photo::fromForm($request->file('file'));

        Flyer::locatedAt($zip, $street)->addPhoto($photo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
