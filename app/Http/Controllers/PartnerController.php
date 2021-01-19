<?php

namespace App\Http\Controllers;


use App\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Symfony\Component\Console\Input\Input;

class PartnerController extends Controller
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
            ['link' => "partners", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Partner"], ['name' => "Partners List"]];
        //Page-header set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        // get all the partners
        $partners = DB::table('partners')->get();

        // load the view and pass the partners
        return View::make('admin.partners')
            ->with('partners', $partners); // TODO -> Partner/Partner

    }


    /**
     * Show the form for creating a new resource.
     *
//     * @return Response
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.partners-create');
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
            'email'      => 'required|email',
            'firstName'       => 'required',
            'lastName'       => 'required',
            'company'       => 'required',
            'phone'       => 'required',
            'address'       => 'required',
            'state'       => 'required',
            'city'       => 'required',
            'zipcode'       => 'required',
            'country'       => 'required',
            'status'       => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('partners/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $partner = new partner;
            $partner->firstName = Input::get('firstName');
            $partner->lastName = Input::get('lastName');
            $partner->company = Input::get('company');
            $partner->phone = Input::get('phone');
            $partner->address = Input::get('address');
            $partner->city = Input::get('city');
            $partner->state = Input::get('state');
            $partner->zipcode = Input::get('zipcode');
            $partner->country = Input::get('country');
            $partner->status = Input::get('status');
            $partner->email = Input::get('email');
            $partner->partner_level = Input::get('partner_level');
            $partner->save();

            // redirect
            Session::flash('message', 'Successfully created partner!');
            return Redirect::to('partners');
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
        // get the partner
        $partner = Partner::find($id);

        // show the view and pass the partner to it
        return View::make('admin.partners-view')
            ->with('partner.show', $partner);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $partner = Partner::find($id);


        return View::make('admin.partners-edit')
            ->with('partner.edit', $partner);
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
            'email'      => 'required|email',
            'firstName'       => 'required',
            'lastName'       => 'required',
            'company'       => 'required',
            'phone'       => 'required',
            'address'       => 'required',
            'state'       => 'required',
            'city'       => 'required',
            'zipcode'       => 'required',
            'country'       => 'required',
            'status'       => 'required',
            'partner_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('partners/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $partner = Partner::find($id);
            $partner->firstName = Input::get('firstName');
            $partner->lastName = Input::get('lastName');
            $partner->company = Input::get('company');
            $partner->phone = Input::get('phone');
            $partner->address = Input::get('address');
            $partner->city = Input::get('city');
            $partner->state = Input::get('state');
            $partner->zipcode = Input::get('zipcode');
            $partner->country = Input::get('country');
            $partner->status = Input::get('status');
            $partner->email = Input::get('email');
            $partner->partner_level = Input::get('partner_level');
            $partner->save();

            // redirect
            Session::flash('message', 'Successfully updated partner!');
            return Redirect::to('partners');
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
        $partner = Partner::find($id);
        $partner->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the partner!');
        return Redirect::to('partners');
    }
}
