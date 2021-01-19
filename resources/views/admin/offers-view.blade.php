{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Users View')

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-offers.css')}}">
@endsection

{{-- page content  --}}
@section('content')
<!-- offers view start -->
<div class="section offers-view">
  <!-- offers view media object start -->
  <div class="card-panel">
    <div class="row">
      <div class="col s12 m7">
        <div class="display-flex media">

          <div class="media-body">
            <h6 class="media-heading">
              <span class="offers-view-name">myLoans UK</span>
              <span class="grey-text">-</span>
              <span class="offers-view-payout_type grey-text">Revenue Share - CPS 90%</span>
            </h6>
            <span>ID:</span>
            <span class="offers-view-id">305</span>
          </div>
        </div>
      </div>
      <div class="col s12 m5 quick-action-btns display-flex justify-content-end align-items-center pt-2">
        <a href="{{asset('app-email')}}" class="btn-small btn-light-indigo"><i
            class="material-icons">mail_outline</i></a>
        <a href="{{asset('offers/edit/{$id}')}}" class="btn-small indigo">Edit</a>
      </div>
    </div>
  </div>
  <!-- offers view media object ends -->
  <!-- offers view card data start -->
  <div class="card">
    <div class="card-content">
      <div class="row">
        <div class="col s12 m4">
          <table class="striped">
            <tbody>
              <tr>
                <td>Created at:</td>
                <td>01/01/2019</td>
              </tr>
              <tr>
                <td>Updated At:</td>
                <td class="offers-view-latest-activity">30/04/2019</td>
              </tr>
              <tr>
                <td>Payout Type:</td>
                <td class="offers-view-payout_type">Revenue Share - CPS</td>
              </tr>
              <tr>
                <td>Payout:</td>
                <td class="offers-view-payout_amount">90%</td>
              </tr>
              <tr>
                <td>Status:</td>
                <td><span class=" offers-view-status chip green lighten-5 green-text">Active</span></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col s12 m8">
          <table class="responsive-table">
            <thead>
              <tr>
                <th>Traffic Sources Allowed</th>
                <th>Email</th>
                <th>PPC</th>
                <th>SMS</th>
                <th>Display</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>iFrame</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>No</td>
                <td>Yes</td>
              </tr>
              <tr>
                <td>Creatives</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>No</td>
                <td>Yes</td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- offers view card data ends -->

  <!-- offers view card details start -->
  <div class="card">
    <div class="card-content">
      <div class="row">
        <div class="col s12">
          <table class="striped">
            <tbody>
              <tr>
                <td>Offer Name:</td>
                <td class="offers-view-username">myLoans UK</td>
              </tr>
              <tr>
                <td>Payout:</td>
                <td class="offers-view-name">90%</td>
              </tr>
              <tr>
                <td>Payout Type:</td>
                <td class="offers-view-email">Revenue Share - 90% CPS</td>
              </tr>
              <tr>
                <td>Company:</td>
                <td>U-PING</td>
              </tr>

              <tr>
                <td>Tracking link:</td>
                <td>Tracking link generation feature here.</td>
              </tr>

            </tbody>
          </table>

        </div>
      </div>
      <!-- </div> -->
    </div>
  </div>
  <!-- offers view card details ends -->

</div>
<!-- offers view ends -->
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/page-offers.js')}}"></script>
@endsection