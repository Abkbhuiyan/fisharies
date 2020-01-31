@extends('layouts.admin.master')
@section('title','Project Cost Details')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-header">Project Cost Details of ---- {{ $project->name }}</h2>

                    <div class="table-responsive ">
                        <table class="table table-borderless">
                            <tr>
                                <td class="font-weight-bold">Project Id:</td>
                                <td>{{ $project->id }}</td>
                                <td class="font-weight-bold">Project Start Date:</td>
                                <td>{{ $project->start_date }}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Project Name:</td>
                                <td>{{ $project->name }}</td>
                                <td class="font-weight-bold">Project End Date:</td>
                                <td>{{ $project->end_date }}</td>
                            </tr>
                        </table>
                    </div>
                    <h4 class="card-title">Expense List</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    Date
                                </th>
                                <th>
                                    Buy Id
                                </th>

                                <th>
                                    Product Type
                                </th>
                                <th>
                                    Product Name
                                </th>
                                <th>
                                    Price
                                </th>
                                <th></th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($buys as $project)
                                <tr>
                                    <td>
                                        {{ $project->created_at }}
                                    </td>

                                    <td>
                                        {{ $project->id }}
                                    </td>

                                    <td>
                                        {{$project->Type}}
                                    </td>
                                    <td>
                                        {{$project->name}}
                                    </td>
                                    <td>
                                        {{$project->price}}
                                    </td>
                                </tr>
                            @endforeach
                            <tr class="card-header">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total Cost</td>
                                <td>{{ $tc }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
