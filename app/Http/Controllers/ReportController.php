<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Symfony\Component\Console\Input\Input;

class ReportController extends Controller
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
        $reports = Report::all();

        // load the view and pass the reports
        return View::make('admin.reports'); // TODO -> Partner/User/Buyer
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
        return view('admin.reports-create');
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
            return Redirect::to('reports/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $reports = new report;
            $reports->name = Input::get('name');
            $reports->email = Input::get('email');
            $reports->report_level = Input::get('report_level');
            $reports->save(); // TODO -> check

            // redirect
            Session::flash('message', 'Successfully created report!');
            return Redirect::to('reports');
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
        $reports = Report::find($id);

        // show the view and pass the report to it
        return View::make('admin.reports-view')
            ->with('report.show', $reports);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $reports = Report::find($id);


        return View::make('admin.reports-edit')
            ->with('report.edit', $reports);
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
            return Redirect::to('reports/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $reports = Report::find($id);
            $reports->name = Input::get('name');
            $reports->email = Input::get('email');
            $reports->report_level = Input::get('report_level');
            $reports->save();

            // redirect
            Session::flash('message', 'Successfully updated report!');
            return Redirect::to('reports');
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
        $reports = Report::find($id);
        $reports->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the report!');
        return Redirect::to('reports');
    }
}

