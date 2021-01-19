<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    /* Dashboard Overview Routes */

    public function dashboardPartner()
    {
        // navbar large
        $pageConfigs = ['navbarLarge' => false];

        return view('admin.dashboard-partner-overview', ['pageConfigs' => $pageConfigs]);
    }

    public function dashboardBuyer()
    {
        // navbar large
        $pageConfigs = ['navbarLarge' => false];

        return view('admin.dashboard-buyer-overview', ['pageConfigs' => $pageConfigs]);
    }



    /** CRUD's */

    public function index()
    {
        
        return view('admin.dashboard-admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }
    protected function guard()
    {
        return Auth::guard();
    }
}
