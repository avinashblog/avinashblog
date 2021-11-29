@extends('admin.layouts.app')
@section('content')
<!--app-content open-->
<div class="app-content">
    <div class="side-app">
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">Users</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </div>
            <div class="ms-auto pageheader-btn">
                <a href="#" class="btn btn-primary btn-icon text-white me-2">
                    <span> <i class="fe fe-plus"></i> </span> Add User
                </a>
                <a href="#" class="btn btn-success btn-icon text-white">
                    <span> <i class="fe fe-log-in"></i> </span> Export
                </a>
            </div>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- ROW-5 -->
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mb-0">Users list</h3>
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
                                                        Username
                                                    </th>
                                                    <th class="bg-transparent border-bottom-0 sorting" tabindex="0"
                                                        aria-controls="data-table" rowspan="1" colspan="1"
                                                        aria-label="Date: activate to sort column ascending"
                                                        style="width: 187.047px;">
                                                        Rank
                                                    </th>
                                                    <th class="bg-transparent border-bottom-0 sorting" tabindex="0"
                                                        aria-controls="data-table" rowspan="1" colspan="1"
                                                        aria-label="Amount: activate to sort column ascending"
                                                        style="width: 194.016px;">
                                                        Block
                                                    </th>
                                                    <th class="bg-transparent border-bottom-0 sorting" tabindex="0"
                                                        aria-controls="data-table" rowspan="1" colspan="1"
                                                        aria-label="Status: activate to sort column ascending"
                                                        style="width: 176.828px;">
                                                        Address
                                                    </th>
                                                    <th class="bg-transparent border-bottom-0 sorting" tabindex="0"
                                                        aria-controls="data-table" rowspan="1" colspan="1"
                                                        aria-label="Status: activate to sort column ascending"
                                                        style="width: 176.828px;">
                                                        Subscription Date
                                                    </th>
                                                    <th class="bg-transparent border-bottom-0 sorting" tabindex="0"
                                                        aria-controls="data-table" rowspan="1" colspan="1"
                                                        aria-label="Status: activate to sort column ascending"
                                                        style="width: 176.828px;">
                                                        Investment
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
                                                @foreach ($users as $item)
                                                <tr class="border-bottom odd">
                                                    <td class="text-muted fs-15 fw-semibold">{{$item->created_at}}</td>
                                                    <td>
                                                        <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                            <h6 class="mb-0 fs-14 fw-semibold">{{$item->customer_sponser_id}}</h6>
                                                        </div>
                                                    </td>
                                                    <td class="text-muted fs-15 fw-semibold">{{$item->rank_name->rank}}</td>
                                                    <td class="fs-15 fw-semibold"><a href="{{url('admin/blockUserId/'.$item->id)}}"  class="text-{{$item->block==0 ? 'success' : 'danger'}}" data-bs-toggle="tooltip" data-bs-original-title="{{$item->block==1 ?'Active' :'Inactive'}}">{{$item->block==0 ?'Active' :'Inactive'}} </a></td>
                                                    <td class="text-muted fs-15 fw-semibold">{{$item->account_token}}</td>
                                                    <td class="text-muted fs-15 fw-semibold">{{$item->sales_active_date}}</td>
                                                    <td class="text-muted fs-15 fw-semibold">{{$item->trans->amount_in_usd}}</td>
                                                    <td class="">
                                                        <a class="btn btn-primary btn-sm rounded-11 me-2" href="{{url('admin/showBusinessByUserId/'.$item->id)}}"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Show Bussiness">
                                                            Show Bussiness
                                                            {{-- <i>
                                                                <svg class="table-edit"
                                                                    xmlns="http://www.w3.org/2000/svg" height="20"
                                                                    viewBox="0 0 24 24" width="16">
                                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                                    <path
                                                                        d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z">
                                                                    </path>
                                                                </svg>
                                                            </i> --}}
                                                        </a>
                                                        <a class="btn btn-danger btn-sm rounded-11"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i>
                                                                <svg class="table-delete"
                                                                    xmlns="http://www.w3.org/2000/svg" height="20"
                                                                    viewBox="0 0 24 24" width="16">
                                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                                    <path
                                                                        d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z">
                                                                    </path>
                                                                </svg>
                                                            </i>
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