@extends('layouts.admin.master')
@section('title','Add new Feed')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Feed</h4>

                    <form action="{{ route('feed.store') }}" method="post" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Feed Name</label>
                            <input name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Feed Name">
                        </div>


                        <div class="form-group">
                            <label for="exampleInpuFish1">Description</label>
                            <input name="description" type="text" class="form-control" id="exampleInputCity1" placeholder="Feed price">
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection

