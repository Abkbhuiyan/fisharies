@extends('layouts.admin.master')
@section('title','Add new Feed')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Feed</h4>
                    <form action="{{ route('feed.update',$feed->id) }}" method="post" class="forms-sample">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="exampleInputName1">Feed Name</label>
                            <input name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="{{ $feed->name }}">
                        </div>


                        <div class="form-group">
                            <label for="exampleInpuFish1">Description</label>
                            <input value="{{ $feed->description }}" name="description" type="text" class="form-control" id="exampleInputCity1" placeholder="Feed Price">
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection

