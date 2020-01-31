@extends('layouts.admin.master')
@section('title','List of Medicine')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List of Medicine</h4>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    Medicine Name
                                </th>
                                <th>
                                    Medicine Type
                                </th>

                                <th>
                                    Medicine Price
                                </th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($medicines as $med)
                                <tr>
                                    <td>
                                        {{ $med->name }}
                                    </td>

                                    <td>
                                        {{ $med->type }}
                                    </td>

                                    <td>
                                        {{$med->price}}
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{route('medicine.edit',$med->id)}}">Edit</a>
                                        <form class="d-inline-block" action="{{ route('medicine.destroy',$med->id) }}" method="post">
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
