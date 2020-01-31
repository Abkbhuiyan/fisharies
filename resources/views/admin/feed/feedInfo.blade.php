@extends('layouts.admin.master')
@section('title','List of Feed')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Available Feeds</h4>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    Feed Name
                                </th>

                                <th>
                                   Description
                                </th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($feeds as $feed)
                                <tr>
                                    <td>
                                        {{ $feed->name }}
                                    </td>

                                    <td>
                                        {{ $feed->description }}
                                    </td>


                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{route('feed.edit',$feed->id)}}">Edit</a>
                                        <form class="d-inline-block" action="{{ route('feed.destroy',$feed->id) }}" method="post">
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
