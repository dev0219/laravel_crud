<?php

namespace App\Http\Controllers;

use App\Lmspaydayus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Symfony\Component\Console\Input\Input;

class LmspaydayusController extends Controller
{
    /** CRUD's */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */

    public function index()
    {

        // get all the lead posts
        $leads = Lmspaydayus::all();

        // load the view and pass the leads
        return View::make('admin.leads-uk'); // TODO -> Partner/User/Buyer
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
        return view('admin.leads-create');
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
            'lead_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('leads/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $leads = new lead;
            $leads->name = Input::get('name');
            $leads->email = Input::get('email');
            $leads->lead_level = Input::get('lead_level');
            $leads->save(); // TODO -> check

            // redirect
            Session::flash('message', 'Successfully created lead!');
            return Redirect::to('leads');
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
        // get the lead
        $leads = Lmspaydayus::find($id);

        // show the view and pass the lead to it
        return View::make('admin.leads-view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $leads = Lmspaydayus::find($id);


        return View::make('admin.leads-edit')->with('lead', $leads);
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
            'lead_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('leads/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $leads = Lmspaydayus::find($id);
            $leads->name = Input::get('name');
            $leads->email = Input::get('email');
            $leads->lead_level = Input::get('lead_level');
            $leads->save();

            // redirect
            Session::flash('message', 'Successfully updated lead!');
            return Redirect::to('leads');
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
        $leads = Lmspaydayus::find($id);
        $leads->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the lead!');
        return Redirect::to('leads');
    }
}
