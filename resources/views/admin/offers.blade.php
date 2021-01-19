{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Offer list')

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

    <!-- Card With Analytics -->
    <div id="card-with-analytics" class="section">
        <h4 class="header">Offer Details</h4>
        <div class="row">
            <div class="col s12 m6 l3 card-width">
                <div class="card border-radius-6">
                    <div class="card-content center-align">
                        <i class="material-icons amber-text small-ico-bg mb-5">check</i>
                        <h4 class="m-0"><b>21.5k</b></h4>
                        <p>Total Views</p>
                        <p class="green-text  mt-3"><i class="material-icons vertical-align-middle">arrow_drop_up</i>
                            119.71%</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3 card-width">
                <div class="card border-radius-6">
                    <div class="card-content center-align">
                        <i class="material-icons amber-text small-ico-bg mb-5">sentiment_satisfied</i>
                        <h4 class="m-0"><b>1.6k</b></h4>
                        <p>Impressions</p>
                        <p class="green-text  mt-3"><i class="material-icons vertical-align-middle">arrow_drop_up</i>
                            112.90%</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3 card-width">
                <div class="card border-radius-6">
                    <div class="card-content center-align">
                        <i class="material-icons amber-text small-ico-bg mb-5">radio_button_unchecked</i>
                        <h4 class="m-0"><b>890</b></h4>
                        <p>Reach</p>
                        <p class="red-text  mt-3"><i class="material-icons vertical-align-middle">arrow_drop_down</i>
                            24.4%</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3 card-width">
                <div class="card border-radius-6">
                    <div class="card-content center-align">
                        <i class="material-icons amber-text small-ico-bg mb-5">favorite_border</i>
                        <h4 class="m-0"><b>22.5%</b></h4>
                        <p>Engagement Rate</p>
                        <p class="green-text  mt-3"><i class="material-icons vertical-align-middle">arrow_drop_up</i>
                            112.43%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
                                <th>offerID</th>
                                <th>Offer Name</th>
                                <th>Payout</th>
                                <th>Payout Type</th>
                                <th>Site</th>
                                <th>status</th>
                                <th>edit</th>
                                <th>view</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($offers as $offer)
                            <tr>
                                <td></td>
                                <td>{{$offer->id}}</td>
                                <td><a href="{{ route('offers.show',$offer->id)}}">{{$offer->name}}</a>
                                </td>
                                <td>{{$offer->payout_amount}}</td>
                                <td>{{$offer->payout_type}}</td>
                                <td>{{$offer->site_link}}</td>
                                <td><span class="chip green lighten-5">
                    <span class="green-text">{{$offer->status}}</span>
                  </span>
                                </td>
                                <td><a href="{{ route('offers.edit',$offer->id)}}"><i class="material-icons">edit</i></a></td>
                                <td><a href="{{ route('offers.show',$offer->id)}}"><i class="material-icons">remove_red_eye</i></a></td>
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