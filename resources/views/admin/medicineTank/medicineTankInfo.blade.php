@extends('layouts.admin.master')
@section('title','Medicine used in the tanks')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Medicine use history</h4>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    Tank Id
                                </th>
                                <th>
                                    Medicine Name
                                </th>

                                <th>
                                    Quantity & Details
                                </th>

                                <th></th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($medicineTanks as $medicineTank)
                                <tr>
                                    <td>
                                        {{ $medicineTank->tank_id }}
                                    </td>

                                    <td>
                                        {{ $medicineTank->medicine_id }}
                                    </td>

                                    <td>
                                        {{ $medicineTank->quantity }}
                                    </td>

                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{route('medicineTank.edit',$medicineTank->id)}}">Edit</a>
                                        <form class="d-inline-block" action="{{ route('medicineTank.destroy',$medicineTank->id) }}" method="post">
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
