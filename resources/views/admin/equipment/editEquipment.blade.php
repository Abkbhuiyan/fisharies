@extends('layouts.admin.master')
@section('title','Add new Equipment')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Equipment</h4>

                    <form method="post" action="{{ route('equipment.update',$equipment->id) }}" class="forms-sample">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="exampleInputName1">Equipment Name</label>
                            <input value="{{ $equipment->name }}" name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Equipment Name">
                            @error('name') {{ $message }} @enderror
                        </div>


                        <div class="form-group">
                            <label for="exampleInpuFish1">Equipment Type</label>
                            <input value="{{ $equipment->type }}" name="type" type="text" class="form-control" id="exampleInputCity1" placeholder="Equipment Type">
                            @error('type') {{ $message }} @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInpuFish1">Equipment Price</label>
                            <input value="{{ $equipment->price }}" name="price" type="text" class="form-control" id="exampleInputCity1" placeholder="Equipment price">
                            @error('price') {{ $message }} @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Update</button>

                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection

