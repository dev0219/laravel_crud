<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Symfony\Component\Console\Input\Input;

class ProfileController extends Controller
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
            ['link' => "users", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "User"], ['name' => "Users List"]];
        //Page-header set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        // get all the users
//        $users = DB::table('users')->get();


        // load the view and pass the users
        return view('admin.profile-page'); // TODO -> Partner/User
    }


    /**
     * Show the form for creating a new resource.
     *
     * //     * @return Response
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        //
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
            'name' => 'required',
            'email' => 'required|email',
            'company' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'required',
            'country' => 'required',
            'user_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('users/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $user = new user;
            $user->name = Input::get('name');
            $user->email = Input::get('email');
            $user->company = Input::get('company');
            $user->address = Input::get('address');
            $user->city = Input::get('city');
            $user->state = Input::get('state');
            $user->postcode = Input::get('postcode');
            $user->country = Input::get('country');
            $user->user_level = Input::get('user_level');
            $user->save();

            // redirect
            Session::flash('message', 'Successfully created user!');
            return Redirect::to('users');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param $user_id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        // get the user
        $user = User::find($id);
//        $user_profile = Profile::info($user_id)->first();

        // show the view and pass the user to it
        return View::make('admin.profile-page')
            ->with('profile.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $user = User::find($id);


        return View::make('admin.account-settings')
            ->with('profile.edit', [
                'profileUser' => $user
            ]);
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
            'company' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'required',
            'country' => 'required',
            'user_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('users/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $user = User::find($id);
            $user->name = Input::get('name');
            $user->email = Input::get('email');
            $user->company = Input::get('company');
            $user->address = Input::get('address');
            $user->city = Input::get('city');
            $user->state = Input::get('state');
            $user->postcode = Input::get('postcode');
            $user->country = Input::get('country');
            $user->user_level = Input::get('user_level');
            $user->save();

            // redirect
            Session::flash('message', 'Successfully updated user!');
            return Redirect::to('users');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // delete
        $user = User::find($id);
        $user->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the user!');
        return Redirect::to('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function profile($id)
    {
        // get the user
        $user = User::find($id);

        // show the view and pass the user to it
        return View::make('admin.account-settings')
            ->with('user', $user);
    }

}
