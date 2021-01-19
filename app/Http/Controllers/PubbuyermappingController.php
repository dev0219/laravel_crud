<?php

namespace App\Http\Controllers;

use App\Pubbuyermapping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Symfony\Component\Console\Input\Input;

class PubbuyermappingController extends Controller
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
            ['link' => "pubbuyer", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "pubbuyer"], ['name' => "pubbuyer List"]];
        //Page-header set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        // get all the pubbuyers
        $pubbuyers = DB::table('pubbuyermappings')->get();

        // load the view and pass the pubbuyers
        return View::make('admin.pubbuyer')
            ->with('pubbuyers', $pubbuyers); // TODO -> Pubbuyer

    }


    /**
     * Show the form for creating a new resource.
     *
    //     * @return Response
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.pubbuyer-create');
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
            'pubbuyer_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('pubbuyers/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $pubbuyer = new pubbuyer;
            $pubbuyer->name = Input::get('name');
            $pubbuyer->email = Input::get('email');
            $pubbuyer->pubbuyer_level = Input::get('pubbuyer_level');
            $pubbuyer->save(); // TODO -> check

            // redirect
            Session::flash('message', 'Successfully created pubbuyer!');
            return Redirect::to('pubbuyers');
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
        // get the pubbuyer
        $pubbuyer = Pubbuyermapping::find($id);

        // show the view and pass the pubbuyer to it
        return View::make('admin.pubbuyer-view')
            ->with('pubbuyer.show', $pubbuyer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $pubbuyer = Pubbuyermapping::find($id);


        return View::make('admin.pubbuyer-edit')
            ->with('pubbuyer.edit', $pubbuyer);
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
            'pubbuyer_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('pubbuyers/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $pubbuyer = Pubbuyermapping::find($id);
            $pubbuyer->name = Input::get('name');
            $pubbuyer->email = Input::get('email');
            $pubbuyer->pubbuyer_level = Input::get('pubbuyer_level');
            $pubbuyer->save();

            // redirect
            Session::flash('message', 'Successfully updated pubbuyer!');
            return Redirect::to('pubbuyers');
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
        $pubbuyer = Pubbuyermapping::find($id);
        $pubbuyer->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the pubbuyer!');
        return Redirect::to('pubbuyers');
    }
}
