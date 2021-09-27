@extends('dashboard.layouts')

@section('page_title', 'Survey')

@section('content')
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container"> 
        <!--begin::Dashboard-->
        <!--begin::Survey Forms Row--> 
         <div class="row">
            <div class="max-width-950">
                <div class="card card-custom bgi-no-repeat gutter-b card-stretch" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-dark"><i class="fas fa-dot-circle text-success mr-3"></i>Survey Forms</h3>
                    </div>
                    <!--end::Header-->

                      
                   <!--begin::Body-->
                   <div class="card-body dashboard-personal">
                    <!--begin: Datatable-->
                    <table class="table table-separate table-head-custom table-checkable table-striped" id="kt_datatable">
                        <thead>
                            <tr>
                                <th hidden>ID</th>
                                <th>Forms</th>
                                <th>Date Given</th>
                                <th>Date Answered</th>
                                <th>Actions</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td hidden>1</td>
                                <td>Survey 1</td>
                                <td>Jan 1, 2021</td>
                                <td>N/A</td>
                                <td>No Answer</td>
                                <td nowrap>
                                    <a class="btn btn-success py-1" href="{{ route("surveyForm") }}">Answer</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
                </div>
            </div>
         </div>
        <!--end::Survey Forms Row-->
        <!--end::Dashboard-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
@endsection