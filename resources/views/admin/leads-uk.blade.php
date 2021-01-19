{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Lead UK Live Feed')

{{-- vendors styles --}}
@section('vendor-style')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
@endsection

{{-- page styles --}}
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.css')}}">
@endsection

{{-- page content --}}
@section('content')
    <!-- users list start -->
    <section class="users-list-wrapper section">
        <div class="users-list-filter">
            <div class="card-panel">
                <div class="row">
                    <form>
                        <div class="col s12 m6 l3">
                            <label for="users-list-verified">Verified</label>
                            <div class="input-field">
                                <select class="form-control" id="users-list-verified">
                                    <option value="">Any</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <label for="users-list-role">Role</label>
                            <div class="input-field">
                                <select class="form-control" id="users-list-role">
                                    <option value="">Any</option>
                                    <option value="User">User</option>
                                    <option value="Staff">Staff</option>
                                </select>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <label for="users-list-status">Status</label>
                            <div class="input-field">
                                <select class="form-control" id="users-list-status">
                                    <option value="">Any</option>
                                    <option value="Active">Active</option>
                                    <option value="Close">Close</option>
                                    <option value="Banned">Banned</option>
                                </select>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 display-flex align-items-center show-btn">
                            <button type="submit" class="btn btn-block indigo waves-effect waves-light">Show</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="users-list-table">
            <div class="card">
                <div class="card-content">
                    <!-- datatable start -->
                    <div class="responsive-table">

                        <table id="users-list-datatable" class="table">
                            <thead>
                            <tr>
                                <th></th>
                                <th>id</th>
                                <th>affiliate ID</th>
                                <th>Buyer ID</th>
                                <th>Tier</th>
                                <th>Redirection %</th>
                                <th>Quality</th>
                                <th>Full name</th>
                                <th>Email</th>
                                <th>Conversion Ratio</th>
                                <th>Conversion Price</th>
                                <th>Partner Commission</th>
                                <th>P/L Commission</th>
                                <th>Lead Info</th>
                                <th>Timestamp</th>
                                <th>Response</th>
                                <th>view</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($leads as $lead)
                            <tr>
                                <td ></td>
                                <td><span class="chip green lighten-5">
                    <span class="green-text">{{$lead->id}}</span>
                  </span>
                                </td>
                                <td>{{$lead->affiliateID}} [<strong>{{$lead->subID}}</strong>]
                                </td>
                                <td>{{$lead->buyerID}}
                                </td>
                                <td>{{$lead->buyerTierID}}</td>
                                <td>{{$lead->isRedirected}}</td>
                                <td><span class="m-0 amber-text material-icons star-width">star_rate</span>

                                </td>
                                <td>{{$lead->firstName}} {{$lead->lastName}}</td>
                                <td>{{$lead->email}}</td>
                                <td>75%</td>
                                <td>£2.00</td>
                                <td>£1.00</td>
                                <td>£1.00</td>
                                <td><a href="{{asset('leads/view/{$id}')}}">Log Info</a>
                                </td>
                                <td>11/01/2020
                                </td>
                                <td><span class="chip green lighten-5">
                    <span class="green-text">Accept</span>
                  </span>
                                </td>
                                 <td><a href="{{ route('leads.show',$lead->id)}}"><i class="material-icons">remove_red_eye</i></a></td>
                            </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                    <!-- datatable ends -->
                </div>
            </div>
        </div>
    </section>
    <!-- users list ends -->
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
    <script src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
    <script src="{{asset('js/scripts/page-users.js')}}"></script>
@endsection