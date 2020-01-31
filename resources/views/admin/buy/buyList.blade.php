@extends('layouts.admin.master')
@section('title','List of Buy')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List of Feed</h4>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    Buy Name
                                </th>
                                <th>
                                    Buy Type
                                </th>

                                <th>
                                    Buy Price
                                </th>
                                <th>
                                    Supplier
                                </th>
                                <th colspan="2">
                                    Action
                                </th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($buyHistory as $bh)
                                <tr>
                                    <td>
                                        {{ $bh->name }}
                                    </td>

                                    <td>
                                        {{ $bh->type }}
                                    </td>

                                    <td>
                                        {{ $bh->price }}
                                    </td>
                                    <td>
                                        {{ $bh->supplier }}
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{route('buy.edit',$bh->id)}}">Edit</a>
                                        <form class="d-inline-block" action="{{ route('buy.destroy',$bh->id) }}" method="post">
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
