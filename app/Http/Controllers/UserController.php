<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{


    /** CRUD's */

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */

    public function index(Request $request)
    {
        // get all the users
        $users = DB::table('users')->get();


        // load the view and pass the users
        return view('admin.users', compact('users')); // TODO -> Partner/User
    }


    /**
     * Show the form for creating a new resource.
     *
     * //     * @return Response
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.users-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'company' => 'required',
            'status' => 'required',
        ]);

        $user = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'company' => $request->get('company'),
            'status' => $request->get('status'),
        ]);
        $user->save();


        // redirect
        Session::flash('success', 'Successfully created user!');
        return Redirect::to('users');
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        // get the user
        $user = User::find($id);

        // show the view and pass the user to it
        return View::make('admin.users-view')
            ->with('users.show', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);

            if ($user) {
                return View::make('admin.users-edit', compact('user'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
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
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'company' => 'required',
            'status' => 'required'
        ]);


        // store
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->company = $request->get('company');
        $user->status = $request->get('status');
        $user->save();

        // redirect
        Session::flash('message', 'Successfully updated user!');
        return Redirect::to('users');
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
     *
     */
    public function profile($id)
    {
        // get the user
        $user = User::find($id);

        if ($user) {
            // show the view and pass the user to it
            return view('admin.profile-page')
                ->withUser($user);
        }
    }
}




//    public function passwordEdit()
//    {
//
//    }
//
//    public function passwordUpdate()
//    {
//
//    }
//}
