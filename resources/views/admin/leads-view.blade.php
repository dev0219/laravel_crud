{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Lead View')

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

          <div class="media-body">
            <h6 class="media-heading">
              <span class="users-view-name">Dean Stanley </span>
              <span class="grey-text">=></span>
              <span class="users-view-username grey-text">candy007</span>
            </h6>
            <span>ID:</span>
            <span class="users-view-id">305</span>
          </div>
        </div>
      </div>
      <div class="col s12 m5 quick-action-btns display-flex justify-content-end align-items-center pt-2">
        <a href="#" class="btn-small btn-light-indigo">Post Logs</a>
        <a href="#"  class="btn-small btn-light-indigo">Ping Logs</a>
        <a href="#"  class="btn-small btn-light-indigo">Check Status</a>
{
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
                <td>Post time:</td>
                <td>01/01/2019</td>
              </tr>
              <tr>
                <td>Post Response:</td>
                <td class="users-view-latest-activity">Accepted</td>
              </tr>
              <tr>
                <td>Redirected:</td>
                <td <td><span class=" users-view-conversion-ratio chip green lighten-5 green-text">100%</span></td>
              </tr>
              <tr>
                <td>Quality:</td>
                <td class="users-view-role"></td>
              </tr>
              <tr>
                <td>Conversion Ratio:</td>
                <td><span class=" users-view-conversion-ratio chip green lighten-5 green-text">50%</span></td>
              </tr>
              <tr>
                <td>Status:</td>
                <td><span class=" users-view-response chip green lighten-5 green-text">Sold</span></td>
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
{{--      <div class="row indigo lighten-5 border-radius-4 mb-2">--}}
{{--        <div class="col s12 m4 users-view-timeline">--}}
{{--          <h6 class="indigo-text m-0">Posts: <span>125</span></h6>--}}
{{--        </div>--}}
{{--        <div class="col s12 m4 users-view-timeline">--}}
{{--          <h6 class="indigo-text m-0">Followers: <span>534</span></h6>--}}
{{--        </div>--}}
{{--        <div class="col s12 m4 users-view-timeline">--}}
{{--          <h6 class="indigo-text m-0">Following: <span>256</span></h6>--}}
{{--        </div>--}}
      </div>
      <div class="row">
        <div class="col s12">
          <table class="striped">
            <tbody>
              <tr>
                <td>Lead ID:</td>
                <td class="users-view-id">301</td>
              </tr>
              <tr>
                <td>Insert Post Response Raw body here:</td>
                <td class="users-view-email">Raw Body Response Log</td>
              </tr>




            </tbody>
          </table>

            </tbody>
          </table>
        </div>
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