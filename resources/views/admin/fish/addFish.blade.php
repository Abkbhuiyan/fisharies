@extends('layouts.admin.master')
@section('title','Add new Fish')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Fish</h4>
                    <form action="{{ route('fish.store') }}" method="post" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Fish Name</label>
                            <input name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                        </div>


                        <div class="form-group">
                            <label for="exampleInpuFish1">Fish Description</label>
                            <input name="description" type="text" class="form-control" id="exampleInputCity1" placeholder="Fish Description">
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection

