@extends('layouts.admin.master')
@section('title','List of Fish')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List of Fish</h4>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    Fish Name
                                </th>
                                <th>
                                    Fish Description
                                </th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($fishes as $fish)
                                <tr>
                                    <td>
                                        {{ $fish->name }}
                                    </td>

                                    <td>
                                       {{$fish->description}}
                                    </td>

                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{route('fish.edit',$fish->id)}}">Edit</a>
                                        <form class="d-inline-block" action="{{ route('fish.destroy',$fish->id) }}" method="post">
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
