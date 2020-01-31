@extends('layouts.admin.master')
@section('title','Add new Equipment')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Tank</h4>

                    <form method="post" action="{{ route('tank.store') }}" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Tank Name</label>
                            <input value="{{ old('name') }}" name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Equipment Name">
                            @error('name') {{ $message }} @enderror
                        </div>


                        <div class="form-group">
                            <label for="exampleInpuFish1">Tank Size in meter</label>
                            <input value="{{ old('size') }}" name="size" type="text" class="form-control" id="exampleInputCity1" placeholder="Equipment Type">
                            @error('size') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInpuFish1">Water Pump</label>
                            <input value="{{ old('water_pump') }}" name="water_pump" type="number" class="form-control" id="exampleInputCity1" placeholder="Equipment Type">
                            @error('water_pump') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInpuFish1">Oxygen Pump</label>
                            <input value="{{ old('oxygen_pump') }}" name="oxygen_pump" type="number" class="form-control" id="exampleInputCity1" placeholder="Equipment Type">
                            @error('oxygen_pump') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInpuFish1">Maximum Fish Quantity</label>
                            <input value="{{ old('max_fish_quantity') }}" name="max_fish_quantity" type="number" class="form-control" id="exampleInputCity1" placeholder="Equipment Type">
                            @error('max_fish_quantity') {{ $message }} @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Save</button>

                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection

