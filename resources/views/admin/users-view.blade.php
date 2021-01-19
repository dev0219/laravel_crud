{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Users View')

{{-- page style --}}
@section('page-style')
  <link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.css')}}">
@endsection

{{-- page content  --}}
@section('content')
  <!-- users view start -->
  <div class="section users-view">
    <!-- users view media object start -->
    <div class="card-panel">
      <div class="row">
        <div class="col s12 m7">
          <div class="display-flex media">
            <a href="#" class="avatar">
              <img src="{{asset('images/avatar/avatar-15.png')}}" alt="users view avatar" class="z-depth-4 circle"
                   height="64" width="64">
            </a>

            <div class="media-body">
              <h6 class="media-heading">
                <span class="users-view-name"></span>
                <span class="grey-text">-></span>
                <span class="users-view-username grey-text"></span>
              </h6>
              <span>ID:</span>
              <span class="users-view-id"></span>
            </div>
          </div>
        </div>
        <div class="col s12 m5 quick-action-btns display-flex justify-content-end align-items-center pt-2">
          <a href="{{asset('app-email')}}" class="btn-small btn-light-indigo"><i
                    class="material-icons">mail_outline</i></a>
        </div>
      </div>
    </div>
    <!-- users view media object ends -->
    <!-- users view card data start -->
    <div class="card">
      <div class="card-content">
        <div class="row">
          <div class="col s12 m4">
            <table class="striped">
              <tbody>
              <tr>
                <td>Registered:</td>
                <td>01/01/2019</td>
              </tr>
              <tr>
                <td>Latest Activity:</td>
                <td class="users-view-latest-updated_at">30/04/2019</td>
              </tr>
              <tr>
                <td>Verified:</td>
                <td class="users-view-email_verified_at">Yes</td>
              </tr>
              <tr>
                <td>Role:</td>
                <td class="users-view-role">Staff</td>
              </tr>
              <tr>
                <td>Status:</td>
                <td><span class=" users-view-status chip green lighten-5 green-text">Active</span></td>
              </tr>
              </tbody>
            </table>
          </div>
          <div class="col s12 m8">
            <table class="responsive-table">
              <thead>
              <tr>
                <th>Module Permission / Routes</th>
                <th>Super Admin</th>
                <th>Staff</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>Login Access Permission</td>
                <td>Yes</td>
                <td>No</td>
              </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- users view card data ends -->

    <!-- users view card details start -->
    <div class="card">
      <div class="card-content">

        <div class="row">
          <div class="col s12">
            <table class="striped">
              <tbody>

              <tr>
                <td>Email:</td>
                <td class="users-view-username"></td>
              </tr>
              <tr>
                <td>Name:</td>
                <td class="users-view-name"></td>
              </tr>
              <tr>
                <td>Company:</td>
                <td class="users-view-company"></td>
              </tr>
              <tr>
                <td>Address:</td>
                <td class="users-view-address"></td>
              </tr>
              <tr>
                <td>City:</td>
                <td class="users-view-city"></td>
              </tr>
              <tr>
                <td>State:</td>
                <td class="users-view-state"></td>
              </tr>
              <tr>
                <td>Postcode:</td>
                <td class="users-view-postcode"></td>
              </tr>
              <tr>
                <td>Country:</td>
                <td class="users-view-country">UK</td>
              </tr>



              </tbody>
            </table>



          </div>
          <!-- </div> -->
        </div>
      </div>
      <!-- users view card details ends -->

    </div>
    <!-- users view ends -->
    @endsection

    {{-- page script --}}
    @section('page-script')
      <script src="{{asset('js/scripts/page-users.js')}}"></script>
@endsection