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
                                    Employee Id
                                </th>
                                <th>Employee Name</th>
                                <th>Responsibilities</th>
                                <th></th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projectUsers as $project)
                                <tr>
                                    <td>
                                        {{ $project->projects->id }}
                                    </td>

                                    <td>
                                        {{ $project->projects->name }}
                                    </td>

                                    <td>
                                        {{$project->users->id}}
                                    </td>
                                    <td>
                                        {{$project->users->name}}
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{route('projectUser.edit',$project->id)}}">Edit</a>
                                        <form class="d-inline-block" action="{{ route('projectUser.destroy',$project->id) }}" method="post">
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
