<?php

namespace App\Http\Controllers;


use App\Buyersetup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Symfony\Component\Console\Input\Input;

class BuyersetupController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */

    public function index()
    {

        // get all the buyer setups
        $buyersetups = DB::table('buyersetups')->get();

        // load the view and pass the buyer_setup
        return View::make('admin.buyer-setup')
            ->with('buyersetups', $buyersetups);

    }


    /**
     * Show the form for creating a new resource.
     *
    //     * @return Response
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.buyers-setup-create');
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
            'leadType'       => 'required',
            'buyerID'       => 'required',
            'buyerName'      => 'required'
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('buyersetup/create')
                ->withErrors($validator)
                ->withInput($request->except('password'));
        } else {
            // store
            $buyersetups = new buyersetup;
            $buyersetups->leadType = $request->get('leadType');
            $buyersetups->buyerID = $request->get('buyerID');
            $buyersetups->buyerName = $request->get('buyerName');
            $buyersetups->posting_order = $request->get('posting_order');
            $buyersetups->parameter1 = $request->get('parameter1');
            $buyersetups->parameter2 = $request->get('parameter2');
            $buyersetups->parameter3 = $request->get('parameter3');
            $buyersetups->ping_url_test = $request->get('ping_url_test');
            $buyersetups->post_url_test = $request->get('post_url_test');
            $buyersetups->ping_url_live = $request->get('ping_url_live');
            $buyersetups->post_url_live = $request->get('post_url_live');
            $buyersetups->timeout = $request->get('timeout');
            $buyersetups->mode = $request->get('mode');
            $buyersetups->status = $request->get('Status');
            $buyersetups->notes = $request->get('notes');
            $buyersetups->save(); // TODO -> check

            // redirect
            Session::flash('message', 'Successfully created buyer!');
            return Redirect::to('buyersetup/create');
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
        // get the buyer setup
        $buyersetups = Buyersetup::find($id);

        // show the view and pass the buyer to it
        return View::make('admin.buyers-setup-view')
            ->with('buyersetup.show', $buyersetups);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $buyersetups = Buyersetup::find($id);


        return View::make('admin.buyers-setup-edit')
            ->with('buyersetup.edit', $buyersetups);
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
            'leadType'       => 'required',
            'buyerID'       => 'required',
            'buyerName'      => 'required|email|unique:buyers,email'
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('buyersetup')
                ->withErrors($validator)
                ->withInput($request->except('password'));
        } else {
            // store
            $buyersetups = Buyersetup::find($id);
            $buyersetups->leadType = $request->get('leadType');
            $buyersetups->buyerID = $request->get('buyerID');
            $buyersetups->buyerName = $request->get('buyerName');
            $buyersetups->posting_order = $request->get('posting_order');
            $buyersetups->parameter1 = $request->get('parameter1');
            $buyersetups->parameter2 = $request->get('parameter2');
            $buyersetups->parameter3 = $request->get('parameter3');
            $buyersetups->ping_url_test = $request->get('ping_url_test');
            $buyersetups->post_url_test = $request->get('post_url_test');
            $buyersetups->ping_url_live = $request->get('ping_url_live');
            $buyersetups->post_url_live = $request->get('post_url_live');
            $buyersetups->timeout = $request->get('timeout');
            $buyersetups->mode = $request->get('mode');
            $buyersetups->status = $request->get('Status');
            $buyersetups->notes = $request->get('notes');
            $buyersetups->save(); // TODO -> check

            // redirect
            Session::flash('message', 'Successfully created buyer!');
            return Redirect::to('buyersetup');
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
        $buyersetups = Buyersetup::find($id);
        $buyersetups->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the buyer!');
        return Redirect::to('buyersetup');
    }
}


