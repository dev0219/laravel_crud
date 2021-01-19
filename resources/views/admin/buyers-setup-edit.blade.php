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
                            <i class="material-icons mr-1">person_outline</i><span>Buyer Setup</span>
                        </a>
                    </li>
                    {{--        <li class="tab">--}}
                    {{--          <a class="display-flex align-items-center" id="information-tab" href="#information">--}}
                    {{--            <i class="material-icons mr-2">error_outline</i><span>Information</span>--}}
                    {{--          </a>--}}
                    {{--        </li>--}}
                </ul>
                <div class="divider mb-3"></div>
                <div class="row">
                    <div class="col s12" id="account">
                        <!-- users edit media object start -->

                        <!-- users edit media object ends -->
                        <!-- users edit account form start -->
                        <form id="accountForm">
                            <div class="row">
                                <div class="col s12 m6">
                                    <div class="row">
                                        <div class="col s12 input-field">
                                            <select>
                                                <option>Payday UK</option>
                                                <option>Payday US</option>
                                            </select>
                                            <label>Lead Type</label>
                                        </div>
                                        <div class="col s12 input-field">
                                            <select>
                                                <option>Buyer 123</option>
                                                <option>Buyer 321</option>
                                            </select>
                                            <label>Buyer</label>
                                        </div>
                                        <div class="col s12 input-field">
                                            <input id="ping-url-test" name="ping-url-test" type="text" class="validate" value="https://pingtest.com"
                                                   data-error=".errorTxt1">
                                            <label for="ping-url-test">Ping URL Test</label>
                                            <small class="errorTxt1"></small>
                                        </div>
                                        <div class="col s12 input-field">
                                            <input id="username" name="username" type="text" class="validate" value="https://pingtest.com"
                                                   data-error=".errorTxt1">
                                            <label for="username">Ping URL Test</label>
                                            <small class="errorTxt1"></small>
                                        </div>
                                        <div class="col s12 input-field">
                                            <input id="ping-url-live" name="ping-url-live" type="text" class="validate" value="https://posttest.com"
                                                   data-error=".errorTxt1">
                                            <label for="ping-url-live">Ping URL Live</label>
                                            <small class="errorTxt1"></small>
                                        </div>
                                        <div class="col s12 input-field">
                                            <input id="username" name="username" type="text" class="validate" value="https://posttest.com"
                                                   data-error=".errorTxt1">
                                            <label for="username">Ping URL Live</label>
                                            <small class="errorTxt1"></small>
                                        </div>
                                        <div class="col s12 input-field">
                                            <input id="notes" name="text" type="text" class="validate" value="Additional notes on account -> e.g parameters 1 "
                                                   data-error=".errorTxt1">
                                            <label for="notes">Notes on account</label>
                                            <small class="errorTxt1"></small>
                                        </div>

                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <div class="row">
                                        <div class="col s12 input-field">
                                            <select>
                                                <option>Test</option>
                                                <option>Live</option>
                                            </select>
                                            <label>Mode</label>
                                        </div>
                                        <div class="col s12 input-field">
                                            <select>
                                                <option>Active</option>
                                                <option>Inactive</option>
                                            </select>
                                            <label>Status</label>
                                        </div>
                                        <div class="col s12 input-field">
                                            <input id="company" name="company" type="text" class="validate">
                                            <label for="company">Parameter 1</label>
                                        </div>
                                        <div class="col s12 input-field">
                                            <input id="company" name="company" type="text" class="validate">
                                            <label for="company">Parameter 2</label>
                                        </div>
                                        <div class="col s12 input-field">
                                            <input id="company" name="company" type="text" class="validate">
                                            <label for="company">Parameter 3</label>
                                        </div>
                                        <div class="col s12 input-field">
                                            <input id="company" name="company" type="text" class="validate">
                                            <label for="company">Timeout</label>
                                        </div>


                                    </div>
                                </div>

                                <!-- </div> -->
                            </div>
                            <div class="col s12 display-flex justify-content-end mt-3">
                                <button type="submit" class="btn indigo">
                                    Save changes</button>
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