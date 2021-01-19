{{-- layout extend --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','App Invoice List')

{{-- vendor styles --}}
@section('vendor-style')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/dataTables.checkboxes.css')}}">
@endsection

{{-- page styles --}}
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/app-invoice.css')}}">
@endsection

{{-- page content --}}
@section('content')
    <!-- invoice list -->
    <section class="invoice-list-wrapper section">
        <!-- create invoice button-->
        <!-- Options and filter dropdown button-->
        <div class="invoice-filter-action mr-3">
            <a href="javascript:void(0)" class="btn waves-effect waves-light invoice-export border-round z-depth-4">
                <i class="material-icons">picture_as_pdf</i>
                <span class="hide-on-small-only">Export to PDF</span>
            </a>
        </div>
        <!-- create invoice button-->
        <div class="invoice-create-btn">
            <a href="{{ route('invoices.create')}}" class="btn waves-effect waves-light invoice-create border-round z-depth-4">
                <i class="material-icons">add</i>
                <span class="hide-on-small-only">Create Invoice</span>
            </a>
        </div>
        <div class="filter-btn">
            <!-- Dropdown Trigger -->
            <a class='dropdown-trigger btn waves-effect waves-light purple darken-1 border-round' href='#'
               data-target='btn-filter'>
                <span class="hide-on-small-only">Filter Invoice</span>
                <i class="material-icons">keyboard_arrow_down</i>
            </a>
            <!-- Dropdown Structure -->
            <ul id='btn-filter' class='dropdown-content'>
                <li><a href="#!">Paid</a></li>
                <li><a href="#!">Unpaid</a></li>
                <li><a href="#!">Partial Payment</a></li>
            </ul>
        </div>
        <div class="responsive-table">
            <table class="table invoice-data-table white border-radius-4 pt-1">
                <thead>
                <tr>
                    <!-- data table responsive icons -->
                    <th></th>
                    <!-- data table checkbox -->
                    <th></th>
                    <th>
                        <span>Invoice#</span>
                    </th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Customer</th>
                    <th>Partner</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($invoices as $invoice)
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="{{ route('invoices.show',$invoice->id)}}">{{$invoice->id}}</a>
                    </td>
                    <td><span class="invoice-amount">{{$invoice->Amount}}</span></td>
                    <td><small>{{$invoice->Date}}</small></td>
                    <td><span class="invoice-customer">{{$invoice->Customer}}</span></td>
                    <td>
                        <span class="bullet green"></span>
                        <small>**API FEED**</small>
                    </td>
                    <td>
                        <span class="chip lighten-5 green green-text">{{$invoice->Status}}</span>
                    </td>
                    <td>
                        <div class="invoice-action">
                            <a href="{{ route('invoices.show',$invoice->id)}}" class="invoice-action-view mr-4">
                                <i class="material-icons">remove_red_eye</i>
                            </a>
                            <a href="{{ route('invoices.edit',$invoice->id)}}" class="invoice-action-edit">
                                <i class="material-icons">edit</i>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </section>
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
    <script src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('vendors/data-tables/js/datatables.checkboxes.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-script')
    <script src="{{asset('js/scripts/app-invoice.js')}}"></script>
@endsection