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
          <div class="media display-flex align-items-center mb-2">
            <a class="mr-2" href="#">
              <img src="{{asset('images/avatar/avatar-11.png')}}" alt="users avatar" class="z-depth-4 circle"
                height="64" width="64">
            </a>
            <div class="media-body">
              <h5 class="media-heading mt-0">Avatar</h5>
              <div class="user-edit-btns display-flex">
                <a href="#" class="btn-small indigo">Change</a>
                <a href="#" class="btn-small btn-light-pink">Reset</a>
              </div>
            </div>
          </div>
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form id="accountForm">
            <div class="row">
              <div class="col s12 m6">
                <div class="row">
                  <div class="col s12 input-field">
                    <input id="username" name="username" type="text" class="validate" value="johndoe@gmail.com"
                      data-error=".errorTxt1">
                    <label for="username">Email</label>
                    <small class="errorTxt1"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="firstName" name="firstName" type="text" class="validate" value="John"
                           data-error=".errorTxt1">
                    <label for="firstName">First Name</label>
                    <small class="errorTxt1"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="lastName" name="lastName" type="text" class="validate" value="Doe"
                           data-error=".errorTxt1">
                    <label for="lastName">Last Name</label>
                    <small class="errorTxt1"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="username" name="username" type="text" class="validate" value="130 Old Street"
                           data-error=".errorTxt1">
                    <label for="username">Address</label>
                    <small class="errorTxt1"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="name" name="name" type="text" class="validate" value="London"
                      data-error=".errorTxt2">
                    <label for="name">City</label>
                    <small class="errorTxt2"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="state" name="email" type="text" class="validate" value="London"
                      data-error=".errorTxt3">
                    <label for="state">State</label>
                    <small class="errorTxt3"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="postcode" name="email" type="text" class="validate" value="EC1V 9BD"
                           data-error=".errorTxt3">
                    <label for="postcode">Postcode/ZIP</label>
                    <small class="errorTxt3"></small>
                  </div>
                </div>
              </div>
              <div class="col s12 m6">
                <div class="row">
                  <div class="col s12 input-field">
                    <select>
                      <option>User</option>
                      <option>Partner</option>
                    </select>
                    <label>Role</label>
                  </div>
                  <div class="col s12 input-field">
                    <select>
                      <option>Active</option>
                      <option>Banned</option>
                      <option>Close</option>
                    </select>
                    <label>Status</label>
                  </div>
                  <div class="col s12 input-field">
                    <input id="company" name="company" type="text" class="validate">
                    <label for="company">Company</label>
                  </div>
                  <div class="col s12 input-field">
                    <input id="licenses" name="licenses" type="text" class="validate">
                    <label for="licenses">Licenses</label>
                  </div>
                  <div class="col s12 input-field">
                    <input id="trafficsource" name="trafficsource" type="text" class="validate">
                    <label for="trafficsource">Traffic Source</label>
                  </div>
                  <div class="col s12 input-field">
                    <input id="website" name="website" type="text" class="validate">
                    <label for="website">Website</label>
                  </div>
                  <div class="col s12 input-field">
                    <input id="company" name="company" type="text" class="validate">
                    <label for="company">API, iframe, public</label>
                  </div>
{{--                  <div class="col s12 input-field">--}}
{{--                    <input id="company" name="company" type="text" class="validate">--}}
{{--                    <label for="company">Performance</label>--}}
{{--                  </div>--}}

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
                      <td>Payday UK</td>
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
                          <input type="checkbox"  checked  />
                          <span></span>
                        </label>
                      </td>
                    </tr>
                    <tr>
                      <td>Payday US</td>
                      <td>
                        <label>
                          <input type="checkbox" />
                          <span></span>
                        </label>
                      </td>
                      <td>
                        <label>
                          <input type="checkbox"  />
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
                          <input type="checkbox" checked />
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