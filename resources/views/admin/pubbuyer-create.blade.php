{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Pub-Buyer create')

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
                            <i class="material-icons mr-1">person_outline</i><span>Pub-Buyer Mapping</span>
                        </a>
                    </li>

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
                                                <option>Select Lead Type</option>
                                                <option>Payday UK</option>
                                                <option>Payday US</option>
                                                <option>Test</option>
                                            </select>
                                            <label>Lead Type</label>
                                        </div>
                                        <div class="col s12 input-field">
                                            <select>
                                                <option>Select Partner</option>
                                                <option>Partner 123</option>
                                                <option>Partner 321</option>
                                                <option>Test</option>
                                            </select>
                                            <label>Partner</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <div class="row">
                                        <div class="col s12 input-field">
                                            <select>
                                                <option>Select Status</option>
                                                <option>Active</option>
                                                <option>Banned</option>
                                                <option>Test</option>
                                            </select>
                                            <label>Status</label>
                                        </div>
                                        <div class="col s12 input-field">
                                            <select>
                                                <option>Select Buyer</option>
                                                <option>Buyer 123</option>
                                                <option>Buyer 321</option>
                                                <option>Buyer 001</option>
                                            </select>
                                            <label>Buyer</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="col s12">
                                    <table class="mt-1">
                                        <thead>
                                        <tr>
                                          <th>Module Permission / Routes</th>
                                          <th>Gold</th>
                                          <th>Silver</th>
                                          <th>Bronze</th>
                                          <th>Test</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Tiers</td>
                                            <td>
                                                <label>
                                                    <input type="checkbox"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input type="checkbox" />
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input type="checkbox" />
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input type="checkbox" />
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>
                                    <!-- </div> -->
                                </div>
                                <div class="col s12 display-flex justify-content-end mt-3">
                                    <button type="submit" class="btn indigo">
                                        Create Mapping</button>
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