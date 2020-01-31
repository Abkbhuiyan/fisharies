@extends('layouts.admin.master')
@section('title','List of Equipment')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List of Equipment</h4>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    Equipment Name
                                </th>
                                <th>
                                    Equipment Type
                                </th>

                                <th>
                                    Equipment Price
                                </th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($equipments as $equipment)
                                <tr>
                                    <td>
                                       {{ $equipment->name }}
                                    </td>

                                    <td>
                                        {{ $equipment->type }}
                                    </td>

                                    <td>
                                        {{ $equipment->price }}
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{route('equipment.edit',$equipment->id)}}">Edit</a>
                                        <form class="d-inline-block" action="{{ route('equipment.destroy',$equipment->id) }}" method="post">
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
