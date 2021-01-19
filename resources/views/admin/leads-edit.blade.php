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
            <i class="material-icons mr-1">person_outline</i><span>Lead Details</span>
          </a>
        </li>

      </ul>
      <div class="divider mb-3"></div>
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit media object start -->
          <div class="media display-flex align-items-center mb-2">

            <div class="media-body">
              <h5 class="media-heading mt-0">Lead Details</h5>
              <h6 class="media-heading mt-0">Lead Quality</h6>
{{--              # stars --> --}}
            </div>
          </div>
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form id="accountForm">
            <div class="row">
              <div class="col s12 m6">
                <div class="row">
                  <div class="col s12 input-field">
                    <input id="username" name="username" type="text" class="validate" value=""
                      data-error=".errorTxt1">
                    <label for="username">Lead ID</label>
                    <small class="errorTxt1"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="username" name="username" type="text" class="validate" value=""
                           data-error=".errorTxt1">
                    <label for="username">affiliate ID</label>
                    <small class="errorTxt1"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="username" name="username" type="text" class="validate" value=""
                           data-error=".errorTxt1">
                    <label for="username">aff SUB ID</label>
                    <small class="errorTxt1"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="username" name="username" type="text" class="validate" value=""
                           data-error=".errorTxt1">
                    <label for="username">Buyer ID</label>
                    <small class="errorTxt1"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="name" name="name" type="text" class="validate" value=""
                      data-error=".errorTxt2">
                    <label for="name">Buyer Tier ID</label>
                    <small class="errorTxt2"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="email" name="email" type="email" class="validate" value=""
                      data-error=".errorTxt3">
                    <label for="email">Lead Status</label>
                    <small class="errorTxt3"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="email" name="email" type="email" class="validate" value=""
                           data-error=".errorTxt3">
                    <label for="email">Tier</label>
                    <small class="errorTxt3"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="email" name="email" type="email" class="validate" value=""
                           data-error=".errorTxt3">
                    <label for="email">E-mail</label>
                    <small class="errorTxt3"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="email" name="email" type="email" class="validate" value=""
                           data-error=".errorTxt3">
                    <label for="email">E-mail</label>
                    <small class="errorTxt3"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="email" name="email" type="email" class="validate" value=""
                           data-error=".errorTxt3">
                    <label for="email">E-mail</label>
                    <small class="errorTxt3"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="email" name="email" type="email" class="validate" value=""
                           data-error=".errorTxt3">
                    <label for="email">E-mail</label>
                    <small class="errorTxt3"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="email" name="email" type="email" class="validate" value=""
                           data-error=".errorTxt3">
                    <label for="email">E-mail</label>
                    <small class="errorTxt3"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="email" name="email" type="email" class="validate" value=""
                           data-error=".errorTxt3">
                    <label for="email">E-mail</label>
                    <small class="errorTxt3"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="email" name="email" type="email" class="validate" value=""
                           data-error=".errorTxt3">
                    <label for="email">E-mail</label>
                    <small class="errorTxt3"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="email" name="email" type="email" class="validate" value=""
                           data-error=".errorTxt3">
                    <label for="email">E-mail</label>
                    <small class="errorTxt3"></small>
                  </div>

                </div>
              </div>
              <div class="col s12 m6">
                <div class="row">

                  <div class="col s12 input-field">
                    <input id="company" name="company" type="text" class="validate">
                    <label for="company">Company</label>
                  </div>
                  <div class="col s12 input-field">
                    <input id="company" name="company" type="text" class="validate">
                    <label for="company">Company</label>
                  </div>
                  <div class="col s12 input-field">
                    <input id="company" name="company" type="text" class="validate">
                    <label for="company">Company</label>
                  </div>
                  <div class="col s12 input-field">
                    <input id="company" name="company" type="text" class="validate">
                    <label for="company">Company</label>
                  </div>
                  <div class="col s12 input-field">
                    <input id="company" name="company" type="text" class="validate">
                    <label for="company">Company</label>
                  </div>
                  <div class="col s12 input-field">
                    <input id="company" name="company" type="text" class="validate">
                    <label for="company">Company</label>
                  </div>
                  <div class="col s12 input-field">
                    <input id="company" name="company" type="text" class="validate">
                    <label for="company">Company</label>
                  </div>
                  <div class="col s12 input-field">
                    <input id="company" name="company" type="text" class="validate">
                    <label for="company">Company</label>
                  </div>
                  <div class="col s12 input-field">
                    <input id="company" name="company" type="text" class="validate">
                    <label for="company">Company</label>
                  </div>
                  <div class="col s12 input-field">
                    <input id="company" name="company" type="text" class="validate">
                    <label for="company">Company</label>
                  </div>
                  <div class="col s12 input-field">
                    <input id="company" name="company" type="text" class="validate">
                    <label for="company">Company</label>
                  </div>
                  <div class="col s12 input-field">
                    <input id="company" name="company" type="text" class="validate">
                    <label for="company">Company</label>
                  </div>


                </div>
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