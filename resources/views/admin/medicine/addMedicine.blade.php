@extends('layouts.admin.master')
@section('title','Add new Medicine')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Medicine</h4>

                    <form action="{{ route('medicine.store') }}" method="post" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Medicine Name</label>
                            <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="exampleInputName1" placeholder="Medicine Name">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="exampleInpuFish1">Medicine Type</label>
                            <input value="{{ old('type') }}" name="type" type="text" class="form-control" id="exampleInputCity1" placeholder="Fish Type">
                            @error('type')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInpuFish1">Medicine Price</label>
                            <input name="price" value="{{ old('price') }}" type="text" class="form-control" id="exampleInputCity1" placeholder="Medicine price">
                            @error('price')
                            {{ $message }}
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Save</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection

