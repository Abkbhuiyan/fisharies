@extends('layouts.admin.master')
@section('title','Add new Medicine')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Medicine</h4>

                    <form action="{{ route('medicine.update',$medicine->id) }}" method="post" class="forms-sample">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="exampleInputName1">Medicine Name</label>
                            <input name="name" value="{{ $medicine->name }}" type="text" class="form-control" id="exampleInputName1" placeholder="Medicine Name">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="exampleInpuFish1">Medicine Type</label>
                            <input value="{{  $medicine->type }}" name="type" type="text" class="form-control" id="exampleInputCity1" placeholder="Fish Type">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInpuFish1">Medicine Price</label>
                            <input name="price" value="{{  $medicine->price }}" type="text" class="form-control" id="exampleInputCity1" placeholder="Medicine price">
                            @error('price')
                            {{ $message }}
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection

