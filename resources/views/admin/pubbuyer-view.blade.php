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

          <div class="media-body">
            <h6 class="media-heading">
              <span class="buyers-view-buyerID">Buyer 123</span>
            </h6>
            <span>ID:</span>
            <span class="buyers-view-id">001</span>
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
                <td class="buyers-view-latest-activity">30/04/2019</td>
              </tr>
              <tr>
                <td>Verified:</td>
                <td class="buyers-view-verified">Yes</td>
              </tr>
              <tr>
                <td>Traffic Source:</td>
                <td class="buyers-view-">Email, PPC</td>
              </tr>
              <tr>
                <td>Status:</td>
                <td><span class=" buyers-view-status chip green lighten-5 green-text">Active</span></td>
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
                <td>buyer ID:</td>
                <td class="buyers-view-buyerID">Buyer 123</td>
              </tr>
              <tr>
                <td>Account Contact:</td>
                <td class="buyers-view-name">Dean Stanley</td>
              </tr>
              <tr>
                <td>Company:</td>
                <td class="buyers-view-company">Buyer 123 Ltd</td>
              </tr>
              <tr>
                <td>Address:</td>
                <td class="buyers-view-address">130 Old Street</td>
              </tr>
              <tr>
                <td>City:</td>
                <td class="buyers-view-city">London</td>
              </tr>
              <tr>
                <td>State:</td>
                <td class="buyers-view-state">London</td>
              </tr>
              <tr>
                <td>Postcode:</td>
                <td class="buyers-view-postcode">EC1V 9BD</td>
              </tr>


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