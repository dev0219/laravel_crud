{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','User Profile Page')

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/user-profile-page.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div class="section">
  <div class="row user-profile mt-1 ml-0 mr-0">
    <img class="responsive-img" alt="" src="{{asset('images/gallery/profile-bg')}}.png">
  </div>
  <div class="section" id="user-profile">
    <div class="row">
      <!-- User Profile Feed -->
      <div class="col s12 m4 l3 user-section-negative-margin">
        <div class="row">
          <div class="col s12 center-align">
            <img class="responsive-img circle z-depth-5" width="120" src="{{asset('images/user/12.jpg')}}" alt="">
            <br>

          </div>
        </div>
        <hr class="mt-5">
      </div>
      <!-- User Post Feed -->
      <div class="col s12 m8 l6">
        <div class="row">
          <div class="card user-card-negative-margin z-depth-0" id="feed">
            <div class="card-content card-border-gray">
              <div class="row">
                <div class="col s12">
                  <h5>John Doe</h5>
                  <p>Performance <span class="amber-text"><span
                        class="material-icons star-width vertical-align-middle">star_rate</span>
                      <span class="material-icons star-width vertical-align-middle">star_rate</span> <span
                        class="material-icons star-width vertical-align-middle">star_rate</span>
                      <span class="material-icons star-width vertical-align-middle">star_rate</span> <span
                        class="material-icons star-width vertical-align-middle">star_rate</span></span></p>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <ul class="tabs card-border-gray mt-4">
                    <li class="tab col m3 s6 p-0"><a href="#test1">
                        <i class="material-icons vertical-align-middle">crop_portrait</i> Info
                      </a></li>
                    <li class="tab col m3 s6 p-0"><a class="active" href="#test2">
                        <i class="material-icons vertical-align-middle">bookmark_border</i>Settings
                      </a></li>

                  </ul>
                </div>
              </div>

              <hr class="mt-5">
              <div class="row mt-5">
                <div class="col s1 pr-0 circle">
                  <a href="#"><img class="responsive-img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                </div>
                <div class="col s11">

                  <div class="row">
                    <div class="col s12">
                      <div class="card card-border z-depth-2">
                        <div class="card-image">
                          <img src="{{asset('images/gallery/post-2')}}.png" alt="">
                        </div>
                        <div class="card-content">
                          <h6 class="font-weight-900 text-uppercase"><a href="#">Welcome to U-PING</a></h6>
                          <p>Complete your profile...</p>
                        </div>
                      </div>
                      <div class="social-icon">
                        <span><i class="material-icons vertical-align-bottom mr-1">favorite_border</i>90</span> <i
                          class="material-icons vertical-align-bottom ml-3 mr-1">chat_bubble_outline</i>
                        15 <span><i class="material-icons vertical-align-bottom ml-3 mr-1">redo</i> 6</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Today Highlight -->
      <div class="col s12 m12 l3 hide-on-med-and-down">

        <hr class="mt-5">

        <hr class="mt-5">
        <div class="row">
          <div class="col s12">
            <h6>Latest Updates</h6>
            <p class="latest-update">Make Metronic<span class="right"> <a href="#">+480</a> </span></p>
            <p class="latest-update">Programming Language <span class="right"> <a href="#">+12</a> </span></p>
            <p class="latest-update">Project completed <span class="right"> <a href="#">+570</a> </span></p>
            <p class="latest-update">New Customer <span class="right"><a href="#">+120</a> </span></p>
            <p class="latest-update">Annual Companies<span class="right"> <a href="#">+890</a> </span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection