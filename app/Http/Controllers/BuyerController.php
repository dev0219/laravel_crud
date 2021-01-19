<?php

namespace App\Http\Controllers;

use App\Buyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Symfony\Component\Console\Input\Input;

class BuyerController extends Controller
{
    /** CRUD's */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */

    public function index()
    {
        $breadcrumbs = [
            ['link' => "buyers", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "User"], ['name' => "Users List"]];
        //Page-header set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        // get all the buyers
        $buyers = DB::table('buyers')->get();

        // load the view and pass the buyers
        return View::make('admin.buyers')
            ->with('buyers', $buyers); // TODO -> Partner/User

    }


    /**
     * Show the form for creating a new resource.
     *
    //     * @return Response
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.buyers-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'firstName'       => 'required',
            'lastName'       => 'required',
            'email'      => 'required|email|unique:buyers,email'
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('buyers/create')
                ->withErrors($validator)
                ->withInput($request->except('password'));
        } else {
            // store
            $buyer = new buyer;
            $buyer->firstName =$request->get('firstName') ;
            $buyer->lastName=$request->get('lastName');
            $buyer->email = $request->get('email');
            $buyer->phone=$request->get('phone');
            $buyer->address=$request->get('address');
            $buyer->state=$request->get('state');
            $buyer->city=$request->get('city');
            $buyer->trafficSource=$request->get('trafficSource');
            $buyer->country=$request->get('country');
            $buyer->status  =$request->get('Status');
            $buyer->tiers   =1;
            $buyer->save(); // TODO -> check

            // redirect
            Session::flash('message', 'Successfully created buyer!');
            return Redirect::to('buyers');
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
        // get the buyer
        $buyer = Buyer::find($id);

        // show the view and pass the buyer to it
        return View::make('admin.buyers-view')
            ->with('buyer.show', $buyer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $buyer = Buyer::find($id);


        return View::make('admin.buyers-edit')
            ->with('buyer.edit', $buyer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'firstName'       => 'required',
            'lastName'       => 'required',
            'email'      => 'required|email|unique:buyers,email'
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('buyers/edit')
                ->withErrors($validator)
                ->withInput($request->except('password'));
        } else {
            // store
            $buyer = Buyer::find($id);
            $buyer->firstName =$request->get('firstName') ;
            $buyer->lastName=$request->get('lastName');
            $buyer->email = $request->get('email');
            $buyer->phone=$request->get('phone');
            $buyer->address=$request->get('address');
            $buyer->state=$request->get('state');
            $buyer->city=$request->get('city');
            $buyer->trafficSource=$request->get('trafficSource');
            $buyer->country=$request->get('country');
            $buyer->status  =$request->get('Status');
            $buyer->tiers   =1;
            $buyer->save(); // TODO -> check

            // redirect
            Session::flash('message', 'Successfully created buyer!');
            return Redirect::to('buyers');
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
        $buyer = Buyer::find($id);
        $buyer->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the buyer!');
        return Redirect::to('buyers');
    }

}

