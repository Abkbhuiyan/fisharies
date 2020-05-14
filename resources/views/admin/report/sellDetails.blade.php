@extends('layouts.admin.master')
@section('title','Project Sell Details')
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-file-text-o"></i> Report</h1>
            <p>Project Selling Report</p>
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
                            <h2 class="card-header">Fish Selling Details of {{ $project->name }}</h2>
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
                                        Date
                                    </th>

                                    <th>
                                       Unit Price
                                    </th>
                                    <th>
                                        Weight
                                    </th>
                                    <th>
                                        Sub Total
                                    </th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sells as $project)
                                    <tr>
                                        <td>
                                            {{ $project->date }}
                                        </td>

                                        <td>
                                            {{$project->unit_price}}
                                        </td>
                                        <td>
                                            {{$project->weight}}
                                        </td>
                                        <td>
                                            {{$project->weight * $project->unit_price}}
                                        </td>
                                    </tr>
                                @endforeach
                                <tr class="card-header">
                                    <td></td>
                                    <td></td>
                                    <td>Total Cost</td>
                                    <td>{{ $tc }}</td>
                                </tr>
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
