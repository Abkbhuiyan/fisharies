@extends('layouts.admin.master')
@section('title','List of Medicine')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List of Projects</h4>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    Project Name
                                </th>
                                <th>
                                    Project Start Date
                                </th>

                                <th>
                                    Project End Date
                                </th>
                                <th></th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <td>
                                        {{ $project->name }}
                                    </td>

                                    <td>
                                        {{ $project->start_date }}
                                    </td>

                                    <td>
                                        {{$project->end_date}}
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{route('project.edit',$project->id)}}">Edit</a>
                                        <form class="d-inline-block" action="{{ route('project.destroy',$project->id) }}" method="post">
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
