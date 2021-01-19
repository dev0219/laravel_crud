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
            <!-- users edit media object ends -->
            <!-- users edit account form start -->
            <form id="accountForm" method="POST" action="{{route('create.buyer')}}">
              @csrf
              @method('PUT')
              <div class="row">
                <div class="col s12 m6">
                  <div class="row">
                    <div class="col s12 input-field">
                      <input id="firstName" name="firstName" type="text" class="validate" value=""
                             data-error=".errorTxt1">
                      <label for="firstName">First Name</label>
                      <small class="errorTxt1"></small>
                    </div>
                    <div class="col s12 input-field">
                      <input id="lastName" name="lastName" type="text" class="validate" value=""
                             data-error=".errorTxt1">
                      <label for="lastName">Last Name</label>
                      <small class="errorTxt1"></small>
                    </div>
                    <div class="col s12 input-field">
                      <input id="email" name="email" type="email" class="validate" value=""
                             data-error=".errorTxt3">
                      <label for="email">E-mail</label>
                      <small class="errorTxt3"></small>
                    </div>
                    <div class="col s12 input-field">
                      <input id="phone" name="phone" type="text" class="validate" value=""
                             data-error=".errorTxt3">
                      <label for="phone">Phone</label>
                      <small class="errorTxt3"></small>
                    </div>
                    <div class="col s12 input-field">
                      <input id="email" name="email" type="email" class="validate" value=""
                             data-error=".errorTxt3">
                      <label for="email">E-mail</label>
                      <small class="errorTxt3"></small>
                    </div>
                    <div class="col s12 input-field">
                      <input id="address" name="address" type="text" class="validate" value=""
                             data-error=".errorTxt3">
                      <label for="address">Address</label>
                      <small class="errorTxt3"></small>
                    </div>
                    <div class="col s12 input-field">
                      <input id="city" name="email" type="text" class="validate" value=""
                             data-error=".errorTxt3">
                      <label for="city">City</label>
                      <small class="errorTxt3"></small>
                    </div>
                  </div>
                </div>
                <div class="col s12 m6">
                  <div class="row">
                    <div class="col s12 input-field">
                      <select>
                        <option>Payday UK</option>
                        <option>Payday US</option>
                      </select>
                      <label>Region</label>
                    </div>
                    <div class="col s12 input-field">
                      <select>
                        <option>Active</option>
                        <option>Inactive</option>
                        <option>Test</option>
                      </select>
                      <label>Status</label>
                    </div>
                    <div class="col s12 input-field">
                      <input id="state" name="state" type="text" class="validate">
                      <label for="state">State</label>
                    </div>
                    <div class="col s12 input-field">
                      <input id="country" name="address" type="text" class="validate">
                      <label for="country">Country</label>
                    </div>
                    <div class="col s12 input-field">
                      <input id="trafficSource" name="trafficSource" type="text" class="validate">
                      <label for="trafficSource">Traffic Source</label>
                    </div>
                  </div>
                </div>
                {{--                                <div class="col s12">--}}
                {{--                                    <table class="mt-1">--}}
                {{--                                        <thead>--}}
                {{--                                        <tr>--}}
                {{--                                            <th>Module Permission</th>--}}
                {{--                                            <th>Read</th>--}}
                {{--                                            <th>Write</th>--}}
                {{--                                            <th>Create</th>--}}
                {{--                                            <th>Delete</th>--}}
                {{--                                        </tr>--}}
                {{--                                        </thead>--}}
                {{--                                        <tbody>--}}
                {{--                                        <tr>--}}
                {{--                                            <td>Users</td>--}}
                {{--                                            <td>--}}
                {{--                                                <label>--}}
                {{--                                                    <input type="checkbox" checked />--}}
                {{--                                                    <span></span>--}}
                {{--                                                </label>--}}
                {{--                                            </td>--}}
                {{--                                            <td>--}}
                {{--                                                <label>--}}
                {{--                                                    <input type="checkbox" />--}}
                {{--                                                    <span></span>--}}
                {{--                                                </label>--}}
                {{--                                            </td>--}}
                {{--                                            <td>--}}
                {{--                                                <label>--}}
                {{--                                                    <input type="checkbox" />--}}
                {{--                                                    <span></span>--}}
                {{--                                                </label>--}}
                {{--                                            </td>--}}
                {{--                                            <td>--}}
                {{--                                                <label>--}}
                {{--                                                    <input type="checkbox" checked />--}}
                {{--                                                    <span></span>--}}
                {{--                                                </label>--}}
                {{--                                            </td>--}}
                {{--                                        </tr>--}}
                {{--                                        <tr>--}}
                {{--                                            <td>Articles</td>--}}
                {{--                                            <td>--}}
                {{--                                                <label>--}}
                {{--                                                    <input type="checkbox" />--}}
                {{--                                                    <span></span>--}}
                {{--                                                </label>--}}
                {{--                                            </td>--}}
                {{--                                            <td>--}}
                {{--                                                <label>--}}
                {{--                                                    <input type="checkbox" checked />--}}
                {{--                                                    <span></span>--}}
                {{--                                                </label>--}}
                {{--                                            </td>--}}
                {{--                                            <td>--}}
                {{--                                                <label>--}}
                {{--                                                    <input type="checkbox" />--}}
                {{--                                                    <span></span>--}}
                {{--                                                </label>--}}
                {{--                                            </td>--}}
                {{--                                            <td>--}}
                {{--                                                <label>--}}
                {{--                                                    <input type="checkbox" checked />--}}
                {{--                                                    <span></span>--}}
                {{--                                                </label>--}}
                {{--                                            </td>--}}
                {{--                                        </tr>--}}
                {{--                                        <tr>--}}
                {{--                                            <td>Staff</td>--}}
                {{--                                            <td>--}}
                {{--                                                <label>--}}
                {{--                                                    <input type="checkbox" checked />--}}
                {{--                                                    <span></span>--}}
                {{--                                                </label>--}}
                {{--                                            </td>--}}
                {{--                                            <td>--}}
                {{--                                                <label>--}}
                {{--                                                    <input type="checkbox" checked />--}}
                {{--                                                    <span></span>--}}
                {{--                                                </label>--}}
                {{--                                            </td>--}}
                {{--                                            <td>--}}
                {{--                                                <label>--}}
                {{--                                                    <input type="checkbox" />--}}
                {{--                                                    <span></span>--}}
                {{--                                                </label>--}}
                {{--                                            </td>--}}
                {{--                                            <td>--}}
                {{--                                                <label>--}}
                {{--                                                    <input type="checkbox" />--}}
                {{--                                                    <span></span>--}}
                {{--                                                </label>--}}
                {{--                                            </td>--}}
                {{--                                        </tr>--}}
                {{--                                        </tbody>--}}
                {{--                                    </table>--}}
                {{--                                    <!-- </div> -->--}}
                {{--                                </div>--}}
                <div class="col s12 display-flex justify-content-end mt-3">
                  <button type="submit" class="btn indigo">
                    Update Buyer</button>
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