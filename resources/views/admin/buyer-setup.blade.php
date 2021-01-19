{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Partner list')

{{-- vendors styles --}}
@section('vendor-style')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
@endsection

{{-- page styles --}}

@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.css')}}">
@endsection

{{-- page content --}}
@section('content')
    <!-- users list start -->
    <section class="users-list-wrapper section">
        <div class="users-list-filter">
            <div class="card-panel">
                <div class="row">
                    <form>
                        <div class="col s12 m6 l3">
                            <label for="users-list-verified">Traffic Source</label>
                            <div class="input-field">
                                <select class="form-control" id="users-list-verified">
                                    <option value="">Any</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        {{--                        <div class="col s12 m6 l3">--}}
                        {{--                            <label for="users-list-role">Tiers</label>--}}
                        {{--                            <div class="input-field">--}}
                        {{--                                <select class="form-control" id="users-list-role">--}}
                        {{--                                    <option value="">Any</option>--}}
                        {{--                                    <option value="User">User</option>--}}
                        {{--                                    <option value="Staff">Staff</option>--}}
                        {{--                                </select>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
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
                                <th>Lead Type</th>
                                <th>Buyer ID</th>
                                <th>Buyer Name</th>
                                <th>status</th>
                                <th>add</th>
                                <th>edit</th>
                                <th>view</th>
                                <th>delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($buyersetups as $buyersetup)
                                <tr>
                                    <td></td>
                                    <td>{{ $buyersetup->id  }}</td>
                                    <td><a href="{{ route('buyers.show',$buyersetup->id)}}">{{ $buyersetup->leadType  }}</a>
                                    </td>
                                    <td>{{ $buyersetup->buyerID  }}</td>
                                    <td>{{ $buyersetup->buyerName  }}</td>
                                    <td><span class="chip green lighten-5">
                    <span class="green-text">{{ $buyersetup->status }}</span>
                  </span>
                                    </td>
                                    <td><a href="{{ route('buyersetup.create')}}"><i class="material-icons">add</i></a></td>
                                    <td><a href="{{ route('buyersetup.edit',$buyersetup->id)}}"><i class="material-icons">edit</i></a></td>
                                    <td><a href="{{ route('buyersetup.show',$buyersetup->id)}}"><i class="material-icons">remove_red_eye</i></a></td>
                                    <td><a href="{{ route('buyersetup.show',$buyersetup->id)}}"><i class="material-icons">delete</i></a></td>
                                </tr>
                            @endforeach


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
    <script src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
    <script src="{{asset('js/scripts/page-users.js')}}"></script>
@endsection