@extends('layouts.admin.master')
@section('title','Projects Cost Summary')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Projects Cost Summary</h4>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    Project Id
                                </th>
                                <th>
                                    Project Name
                                </th>

                                <th>
                                    Total Cost
                                </th>
                                <th></th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <td>
                                        {{ $project->id }}
                                    </td>

                                    <td>
                                        {{ $project->name }}
                                    </td>

                                    <td>
                                        {{$project->total_cost}}
                                    </td>

                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{route('report.details',$project->id)}}">View Details</a>
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

@endsection
