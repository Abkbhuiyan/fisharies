@extends('layouts.admin.master')
@section('title','List of Fish')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Fish health info</h4>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    Date
                                </th>
                                <th>
                                    Project Tank Id
                                </th>
                                <th>Fish Amount</th>
                                <th>Weight</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($fishHealts as $fishHealth)
                                <tr>
                                    <td>
                                        {{ $fishHealth->date }}
                                    </td>

                                    <td>
                                        {{$fishHealth->project_tank_id}}
                                    </td>
                                    <td>
                                        {{$fishHealth->fish_amount}}
                                    </td>
                                    <td>
                                        {{$fishHealth->weight}}
                                    </td>

                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{route('fishHealth.edit',$fishHealth->id)}}">Edit</a>
                                        <form class="d-inline-block" action="{{ route('fishHealth.destroy',$fishHealth->id) }}" method="post">
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
