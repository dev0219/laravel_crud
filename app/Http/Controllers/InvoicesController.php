<?php

namespace App\Http\Controllers;

use App\Invoices;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Symfony\Component\Console\Input\Input;

class InvoicesController extends Controller
{
    /** CRUD's */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */

    public function index()
    {

        // get all the buyers
        $invoices = DB::table('invoices')->get();

        // load the view and pass the buyers
        return View::make('admin.invoices.invoices')
            ->with('invoices', $invoices); // TODO -> Partner/User
    }



    /**
     * Show the form for creating a new resource.
     *
    //     * @return Response
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.invoices.invoices-add');
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
            'invoice_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('invoices/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $invoices = new invoice;
            $invoices->name = Input::get('name');
            $invoices->email = Input::get('email');
            $invoices->invoice_level = Input::get('invoice_level');
            $invoices->save(); // TODO -> check

            // redirect
            Session::flash('message', 'Successfully created invoice!');
            return Redirect::to('invoices');
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
        // get the invoice
        $invoices = Invoices::find($id);

        // show the view and pass the invoice to it
        return View::make('admin.invoices.invoices-view')
            ->with('invoices.show', $invoices);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $invoices = Invoices::find($id);


        return View::make('admin.invoices.invoices-edit')
            ->with('invoices.invoices.edit', $invoices);
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
            'invoice_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('invoices/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $invoices = Invoices::find($id);
            $invoices->name = Input::get('name');
            $invoices->email = Input::get('email');
            $invoices->invoice_level = Input::get('invoice_level');
            $invoices->save();

            // redirect
            Session::flash('message', 'Successfully updated invoice!');
            return Redirect::to('invoices');
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
        $invoices = Invoices::find($id);
        $invoices->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the invoice!');
        return Redirect::to('invoices');
    }
}

