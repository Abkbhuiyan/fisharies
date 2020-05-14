@extends('layouts.admin.master')
@section('title','Project Medication Test Details')
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-file-text-o"></i> Report</h1>
            <p>Medication Report</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Report</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <section class="invoice">
                    <div class="row mb-4">
                        <div class="col-6">
                            <h2 class="card-header">Medication Details of {{ $project->name }}</h2>
                        </div>
                        <div class="col-6">
                            <h5 class="text-right">Date: {{ date('d-m-Y') }}</h5>
                        </div>
                    </div>
                    <div class="row invoice-info">
                        <div class="col-4">Project Info
                            <address><strong>Project ID:{{ $project->id }}</strong><br>Start Date: {{ $project->start_date }}<br></address>
                        </div>
                        <div class="col-4">
                            <address><strong>Project Name: {{ $project->name }}</strong><br>ENd Date:{{ $project->end_date }}<br></address>
                        </div>
                        <div class="col-4"><b>Report #00790</b><br><br><b>Report Type:</b> Expense<br></div>
                    </div>
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>
                                        Tank Name
                                    </th>

                                    <th>
                                       Feed Name
                                    </th>
                                    <th>
                                        Quantity
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($medicineHistories as $project)
                                    <tr>
                                        <td>
                                            {{ $project->tank->name }}
                                        </td>

                                        <td>
                                            {{$project->medicine->name}}
                                        </td>
                                        <td>
                                            {{$project->quantity}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row d-print-none mt-2">
                        <div class="col-12 text-right"><a class="btn btn-primary" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Print</a></div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection
