{{-- extend layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Blank Page')

{{-- page content --}}
@section('content')
    <div class="section">
        <div class="card">
            <div class="card-content">
                <p class="caption mb-0">
                <div class="row" id="gradient-Analytics">
                    <div class="col s12 m6 l3 card-width">
                        <div class="card row gradient-45deg-deep-orange-orange gradient-shadow white-text padding-4 mt-5">
                            <div class="col s7 m7">
                                <i class="material-icons background-round mt-5 mb-5">trending_up</i>
                                <p>Today</p>
                            </div>
                            <div class="col s5 m5 right-align">
                                <h5 class="mb-0 white-text">69</h5>
                                <p class="no-margin">New Leads</p>
                                <p>£690</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3 card-width">
                        <div class="card row gradient-45deg-blue-indigo gradient-shadow white-text padding-4 mt-5">
                            <div class="col s7 m7">
                                <i class="material-icons background-round mt-5 mb-5">perm_identity</i>
                                <p>Weekly</p>
                            </div>
                            <div class="col s5 m5 right-align">
                                <h5 class="mb-0 white-text">188</h5>
                                <p class="no-margin">Total Leads</p>
                                <p>£900</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3 card-width">
                        <div class="card row gradient-45deg-purple-deep-orange gradient-shadow white-text padding-4 mt-5">
                            <div class="col s7 m7">
                                <i class="material-icons background-round mt-5 mb-5">timeline</i>
                                <p>Redirection</p>
                            </div>
                            <div class="col s5 m5 right-align">
                                <h5 class="mb-0 white-text">80%</h5>
                                <p class="no-margin">Success Rate</p>
                                <p>Good</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3 card-width">
                        <div class="card row gradient-45deg-purple-deep-purple gradient-shadow white-text padding-4 mt-5">
                            <div class="col s7 m7">
                                <i class="material-icons background-round mt-5 mb-5">attach_money</i>
                                <p>Profit</p>
                            </div>
                            <div class="col s5 m5 right-align">
                                <h5 class="mb-0 white-text">£890</h5>
                                <p class="no-margin">Today</p>
                                <p>£2,500</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="seaction">
                    <!--Line Chart-->
                    <div id="chartjs-line-chart" class="card">
                        <div class="card-content">
                            <h4 class="card-title">Line Chart</h4>
                            <p class="caption">
                                <a href="http://www.chartjs.org/docs/#getting-started" target="_blank">Chart.js</a> provides simple,
                                responsive,
                                clean and engaging charts for designers and developers.
                            </p>
                            <div class="row">
                                <div class="col s12">
                                    <p class="mb-2">
                                        Your stats are displayed below.
                                    </p>
                                    <div class="sample-chart-wrapper"><canvas id="line-chart" height="400"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- users list start -->
    <section class="users-list-wrapper section">
        <div class="users-list-filter">
            <div class="card-panel">
                <div class="row">
                    <form>
                        <div class="col s12 m6 l3">
                            <label for="users-list-verified">Verified</label>
                            <div class="input-field">
                                <select class="form-control" id="users-list-verified">
                                    <option value="">Any</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <label for="users-list-role">Role</label>
                            <div class="input-field">
                                <select class="form-control" id="users-list-role">
                                    <option value="">Any</option>
                                    <option value="User">User</option>
                                    <option value="Staff">Staff</option>
                                </select>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <label for="users-list-status">Status</label>
                            <div class="input-field">
                                <select class="form-control" id="users-list-status">
                                    <option value="">Any</option>
                                    <option value="Active">Active</option>
                                    <option value="Close">Close</option>
                                    <option value="Banned">Banned</option>
                                </select>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 display-flex align-items-center show-btn">
                            <button type="submit" class="btn btn-block indigo waves-effect waves-light">Show</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="users-list-table">
            <div class="card">
                <div class="card-content">
                    <!-- datatable start -->
                    <div class="responsive-table">
                        <table id="users-list-datatable" class="table">
                            <thead>
                            <tr>
                                <th></th>
                                <th>id</th>
                                <th>username</th>
                                <th>name</th>
                                <th>last activity</th>
                                <th>verified</th>
                                <th>role</th>
                                <th>status</th>
                                <th>view</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td>300</td>
                                <td><a href="{{asset('page-users-view')}}">dean3004</a>
                                </td>
                                <td>Dean Stanley</td>
                                <td>30/04/2019</td>
                                <td>No</td>
                                <td>Staff</td>
                                <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                                </td>
                                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- datatable ends -->
                </div>
            </div>
        </div>
    </section>
    <!-- users list ends -->

@endsection

{{-- vendor scripts --}}
@section('vendor-script')
    <script src="{{asset('vendors/chartjs/chart.min.js')}}"></script>
    <script src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-script')
    <script src="{{asset('js/scripts/charts-chartjs.js')}}"></script>
    <script src="{{asset('js/scripts/page-users.js')}}"></script>
@endsection