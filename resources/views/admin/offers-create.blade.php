{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Users edit')

{{-- vendor styles --}}
@section('vendor-style')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2-materialize.css')}}">
@endsection

{{-- page style --}}
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.css')}}">
@endsection

{{-- page content --}}
@section('content')
    <!-- users edit start -->
    <div class="section users-edit">
        <div class="card">
            <div class="card-content">
                <!-- <div class="card-body"> -->
                <ul class="tabs mb-2 row">
                    <li class="tab">
                        <a class="display-flex align-items-center active" id="account-tab" href="#account">
                            <i class="material-icons mr-1">person_outline</i><span>Account</span>
                        </a>
                    </li>

                </ul>
                <div class="divider mb-3"></div>
                <div class="row">
                    <div class="col s12" id="account">
                        <!-- users edit media object start -->
                        <div class="media display-flex align-items-center mb-2">

                            <div class="media-body">
                                <h5 class="media-heading mt-0">Offer ID</h5>

                            </div>
                        </div>
                        <!-- users edit media object ends -->
                        <!-- users edit account form start -->
                        <form id="accountForm">
                            <div class="row">
                                <div class="col s12 m6">
                                    <div class="row">
                                        <div class="col s12 input-field">
                                            <input id="name" name="email" type="text" class="validate" value="myLoans UK"
                                                   data-error=".errorTxt1">
                                            <label for="name">Offer Name</label>
                                            <small class="errorTxt1"></small>
                                        </div>
                                        <div class="col s12 input-field">
                                            <input id="offer_type" name="offer_type" type="text" class="validate" value="Revenue Share - CPS"
                                                   data-error=".errorTxt3">
                                            <label for="offer_type">Offer Type</label>
                                            <small class="errorTxt3"></small>
                                        </div>
                                        <div class="col s12 input-field">
                                            <input id="payout_type" name="payout_type" type="text" class="validate" value="Revenue Share - CPS"
                                                   data-error=".errorTxt2">
                                            <label for="payout_type">Payout Type</label>
                                            <small class="errorTxt2"></small>
                                        </div>
                                        <div class="col s12 input-field">
                                            <input id="payout_amount" name="payout_amount" type="text" class="validate" value="90%"
                                                   data-error=".errorTxt3">
                                            <label for="payout_amount">Payout Amount</label>
                                            <small class="errorTxt3"></small>
                                        </div>
                                        <div class="col s12 input-field">
                                            <input id="revenue_type" name="revenue_type" type="text" class="validate" value="Revenue Share - CPS"
                                                   data-error=".errorTxt3">
                                            <label for="revenue_type">Revenue Type</label>
                                            <small class="errorTxt3"></small>
                                        </div>
                                        <div class="col s12 input-field">
                                            <input id="revenue_amount" name="revenue_amount" type="text" class="validate" value="100%"
                                                   data-error=".errorTxt3">
                                            <label for="revenue_amount">Revenue Amount</label>
                                            <small class="errorTxt3"></small>
                                        </div>

                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <div class="row">

                                        <div class="col s12 input-field">
                                            <select>
                                                <option>Site Link</option>
                                                <option>API</option>
                                                <option>iframe</option>
                                            </select>
                                            <label>Offer Route</label>
                                        </div>

                                        <div class="col s12 input-field">
                                            <input id="site_link" name="site_link" type="text" class="validate">
                                            <label for="site_link">Site Link</label>
                                        </div>

                                        <div class="col s12 input-field">
                                            <select>
                                                <option>Active</option>
                                                <option>Inactive</option>
                                                <option>Paused</option>
                                                <option>Test</option>
                                            </select>
                                            <label>Status</label>
                                        </div>
                                        <div class="col s12 input-field">
                                            <select>
                                                <option>Public</option>
                                                <option>Private</option>
                                                <option>Test</option>
                                            </select>
                                            <label>Partner Status</label>
                                        </div>
                                        <div class="col s12 input-field">
                                            <input id="company" name="company" type="text" class="validate">
                                            <label for="company">Company</label>
                                        </div>
                                        <div class="col s12 input-field">
                                            <input id="expiry_date" name="expiry_date" type="date" class="validate">
                                            <label for="expiry_date">Expiry Date</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col s12 display-flex justify-content-end mt-3">
                                    <button type="submit" class="btn indigo">
                                        Create Offer </button>
                                    <button type="button" class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                        </form>
                        <!-- users edit account form ends -->
                    </div>

                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <!-- users edit ends -->
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
    <script src="{{asset('vendors/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-validation/jquery.validate.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-script')
    <script src="{{asset('js/scripts/page-users.js')}}"></script>
@endsection