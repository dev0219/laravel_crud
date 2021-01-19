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
            <a href="#"
                  class="waves-effect waves-light btn mt-5 border-radius-4">Account Settings</a>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col s6">
            <h6>Company</h6>
            <h5 class="m-0"><a href="#">XYZ Limited</a></h5>
          </div>

        </div>
        <hr>
        <div class="row">
          <div class="col s12">
            <p class="m-0">Joined:</p>
            <p class="m-0">12/12/2021</p>
            <p class="m-0">Licenses:</p>
            <p class="m-0">123456</p>
            <p class="m-0">Website:</p>
            <p class="m-0">www.example.com</p>
          </div>
        </div>
        <hr>



        <div class="row mt-2">
          <div class="col s2 mt-2 pr-0 circle">
            <a href="#"><img class="responsive-img circle" src="{{asset('images/user/1.jpg')}}" alt=""></a>
          </div>
          <div class="col s9">
            <a href="#">
              <p class="m-0">Account Manager</p>
            </a>
            <p class="m-0 amber-text">Affiliate Manager<span class="material-icons star-width">star_rate</span></p>
          </div>
        </div>

      </div>
      <!-- User Post Feed -->
      <div class="col s12 m8 l6">
        <div class="row">
          <div class="card user-card-negative-margin z-depth-0" id="feed">
            <div class="card-content card-border-gray">
              <div class="row">
                <div class="col s12">
                  <h5>{{ $user['name'] }}</h5>
                  <p>XYZ Limited</p>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <ul class="tabs card-border-gray mt-4">
                    <li class="tab col m3 s6 p-0"><a href="#test1">
                        <i class="material-icons vertical-align-middle">crop_portrait</i> Info
                      </a></li>

                  </ul>
                </div>
              </div>

              <hr class="mt-5">
              <div class="row mt-5">
                <div class="col s1 pr-0 circle">
                  <a href="#"><img class="responsive-img circle" src="{{asset('images/user/7.jpg')}}" alt=""></a>
                </div>
                <div class="col s11">
                  <a href="#">
                    <p class="m-0">Affiliate Manager <span><i class="material-icons vertical-align-bottom">access_time</i> 10
                        days</span></p>
                  </a>
                  <div class="row">
                    <div class="col s12">
                      <div class="card card-border z-depth-2">
                        <div class="card-content">
                          <div class="row">
                            <div class="col s2 pr-0 circle">
                              <a href="#"><img class="responsive-img circle" src="{{asset('images/user/1.jpg')}}"
                                  alt=""></a>
                            </div>
                            <div class="col s10">
                              <a href="#">
                                <h6>Weekly Payment was sent for £500.01</h6>
                              </a>
                              <p class="m-0 amber-text"><span class="material-icons star-width">star_rate</span></p>
                            </div>
                          </div>
                          <hr>
                          <h6 class="font-weight-900 text-uppercase"><a href="#">Affiliate Manager</a></h6>
                          <p>Your weekly payment was paid.</p>

                            <p>Allow 2-3 business days for payment to reach your account.</p>
                        </div>
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
        <div class="row mt-5">
          <div class="col s12">
        </div>
        <div class="row">
          <div class="col s12">
            <h6>Latest Updates</h6>
            <p class="latest-update">Weekly Payment was sent<span class="right"> <a href="#">£500.01</a> </span></p>
{{--            <p class="latest-update">Programming Language <span class="right"> <a href="#">+12</a> </span></p>--}}
{{--            <p class="latest-update">Project completed <span class="right"> <a href="#">+570</a> </span></p>--}}
{{--            <p class="latest-update">New Customer <span class="right"><a href="#">+120</a> </span></p>--}}
{{--            <p class="latest-update">Annual Companies<span class="right"> <a href="#">+890</a> </span></p>--}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection