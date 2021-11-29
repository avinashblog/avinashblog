@extends('admin.layouts.app')
@section('content')
<!--app-content open-->
<div class="app-content">
    <div class="side-app">
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">Income Report</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Income Report</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- ROW-5 -->
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mb-0">Income Report</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="data-table_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="data-table"
                                            class="table table-bordered text-nowrap mb-0 dataTable no-footer"
                                            role="grid" aria-describedby="data-table_info">
                                            <thead class="border-top">
                                                <tr role="row">
                                                    <th class="bg-transparent border-bottom-0 w-5 sorting sorting_asc"
                                                        tabindex="0" aria-controls="data-table" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="S.no: activate to sort column descending"
                                                        style="width: 34.2344px;">
                                                        Date
                                                    </th>
                                                    <th class="bg-transparent border-bottom-0 sorting" tabindex="0"
                                                        aria-controls="data-table" rowspan="1" colspan="1"
                                                        aria-label="Name: activate to sort column ascending"
                                                        style="width: 447.578px;">
                                                        Amount
                                                    </th>
                                                    <th class="bg-transparent border-bottom-0 sorting" tabindex="0"
                                                        aria-controls="data-table" rowspan="1" colspan="1"
                                                        aria-label="Date: activate to sort column ascending"
                                                        style="width: 187.047px;">
                                                        Income
                                                    </th>
                                                    <th class="bg-transparent border-bottom-0 sorting" tabindex="0"
                                                        aria-controls="data-table" rowspan="1" colspan="1"
                                                        aria-label="Action: activate to sort column ascending"
                                                        style="width: 224.297px;">
                                                        Actions
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($bussiness as $item)
                                                <tr class="border-bottom odd">
                                                    <td class="text-muted fs-15 fw-semibold">{{$item->datetime}}</td>
                                                    <td class="text-muted fs-15 fw-semibold">{{$item->credit}}</td>
                                                    <td class="text-muted fs-15 fw-semibold">{{$item->remarks}}</td>
                                                    <td class="">
                                                        <a class="btn btn-{{$item->status==0 ? 'primary' : 'danger'}} btn-sm rounded-11 me-2">
                                                            {{$item->status==0 ? 'Success' : 'pending'}}
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COL END -->
        </div>
        <!-- ROW-5 END -->
    </div>
</div>
@endsection