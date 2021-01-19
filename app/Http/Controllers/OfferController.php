<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Symfony\Component\Console\Input\Input;

class OfferController extends Controller
{
    /** CRUD's */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */

    public function index()
    {

        // get all the offer posts
        $offers = Offer::all();

        // load the view and pass the offers
        return View::make('admin.offers')
            ->with('offers', $offers); // TODO -> Partner/User
//        return view('admin.partner-list');
    }



    /**
     * Show the form for creating a new resource.
     *
    //     * @return Response
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.offers-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'offer_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('offers/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $offers = new offer;
            $offers->name = Input::get('name');
            $offers->email = Input::get('email');
            $offers->offer_level = Input::get('offer_level');
            $offers->save(); // TODO -> check

            // redirect
            Session::flash('message', 'Successfully created offer!');
            return Redirect::to('offers');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        // get the offer
        $offers = Offer::find($id);

        // show the view and pass the offer to it
        return View::make('admin.offers-view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $offers = Offer::find($id);


        return View::make('admin.offers-edit')->with('offer', $offers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name' => 'required',
            'email' => 'required|email',
            'offer_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('offers/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $offers = Offer::find($id);
            $offers->name = Input::get('name');
            $offers->email = Input::get('email');
            $offers->offer_level = Input::get('offer_level');
            $offers->save();

            // redirect
            Session::flash('message', 'Successfully updated offer!');
            return Redirect::to('offers');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // delete
        $offers = Offer::find($id);
        $offers->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the offer!');
        return Redirect::to('offers');
    }
}
