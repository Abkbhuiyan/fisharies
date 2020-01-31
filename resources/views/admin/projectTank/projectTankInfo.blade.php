@extends('layouts.admin.master')
@section('title','Assigned Projects & users')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List of Projects and assigned users</h4>

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
                                    Tank Id
                                </th>
                                <th>Tank  Name</th>
                                <th>
                                    Fish Id
                                </th>
                                <th>Fish  Name</th>
                                <th>Fish Quantity</th>
                                <th></th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projectTanks as $project)
                                <tr>
                                    <td>
                                        {{ $project->project->id }}
                                    </td>

                                    <td>
                                        {{ $project->project->name }}
                                    </td>

                                    <td>
                                        {{$project->tank->id}}
                                    </td>
                                    <td>
                                        {{$project->tank->name}}
                                    </td>
                                    <td>
                                        {{$project->fish->id}}
                                    </td>
                                    <td>
                                        {{$project->fish->name}}
                                    </td>
                                    <td>{{$project->fish_quantity}}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{route('projectTank.edit',$project->id)}}">Edit</a>
                                        <form class="d-inline-block" action="{{ route('projectTank.destroy',$project->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to destroy?')">Destroy </button>
                                        </form>
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
