<?php

namespace App\Http\Controllers;

use App\Logs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Symfony\Component\Console\Input\Input;

class LogsController extends Controller
{
    /** CRUD's */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */

    public function index()
    {

        // get all the report posts
        $logs = DB::table('logs')->get();

        // load the view and pass the logs
        return View::make('admin.logs.logs')
            ->with('logs', $logs); // TODO -> Partner/User

    }



    /**
     * Show the form for creating a new resource.
     *
    //     * @return Response
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.logs-create');
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
            'report_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('logs/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $logs = new report;
            $logs->name = Input::get('name');
            $logs->email = Input::get('email');
            $logs->report_level = Input::get('report_level');
            $logs->save(); // TODO -> check

            // redirect
            Session::flash('message', 'Successfully created report!');
            return Redirect::to('logs');
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
        // get the report
        $logs = Logs::find($id);

        // show the view and pass the report to it
        return View::make('admin.logs-view')
            ->with('admin.logs.logs.show', $logs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $logs = Logs::find($id);


        return View::make('admin.logs-edit')
            ->with('admin.logs.logs.edit', $logs);
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
            'report_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('logs/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $logs = Logs::find($id);
            $logs->name = Input::get('name');
            $logs->email = Input::get('email');
            $logs->report_level = Input::get('report_level');
            $logs->save();

            // redirect
            Session::flash('message', 'Successfully updated report!');
            return Redirect::to('logs');
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
        $logs = Logs::find($id);
        $logs->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the report!');
        return Redirect::to('logs');
    }
}
