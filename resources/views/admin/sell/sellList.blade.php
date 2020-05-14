@extends('layouts.admin.master')
@section('title','List of Sell')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List of Sell</h4>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    Date
                                </th>
                                <th>
                                   Project
                                </th>

                                <th>
                                    Unit Price
                                </th>
                                <th>
                                    Weight
                                </th>
                                <th colspan="2">
                                    Action
                                </th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($sellHistory as $bh)
                                <tr>
                                    <td>
                                        {{ $bh->date }}
                                    </td>

                                    <td>
                                        {{ $bh->project->name }}
                                    </td>

                                    <td>
                                        {{ $bh->unit_price }}
                                    </td>
                                    <td>
                                        {{ $bh->weight }}
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{route('sellHistory.edit',$bh->id)}}">Edit</a>
                                        <form class="d-inline-block" action="{{ route('sellHistory.destroy',$bh->id) }}" method="post">
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
