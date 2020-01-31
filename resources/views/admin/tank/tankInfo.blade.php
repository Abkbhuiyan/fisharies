@extends('layouts.admin.master')
@section('title','List of Equipment')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List of Tanks</h4>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    Tank Name
                                </th>
                                <th>
                                    Size in meter
                                </th>

                                <th>
                                    Water Pump
                                </th>
                                <th>
                                    Oxygen Pump
                                </th>
                                <th>
                                    Max Fish
                                </th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tanks as $tank)
                                <tr>
                                    <td>
                                       {{ $tank->name }}
                                    </td>

                                    <td>
                                        {{ $tank->size }}
                                    </td>

                                    <td>
                                        {{ $tank->water_pump }}
                                    </td>
                                    <td>
                                        {{ $tank->oxygen_pump }}
                                    </td>
                                    <td>
                                        {{ $tank->max_fish_quantity }}
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{route('tank.edit',$tank->id)}}">Edit</a>
                                        <form class="d-inline-block" action="{{ route('tank.destroy',$tank->id) }}" method="post">
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
