@extends('layouts.admin.master')
@section('title','Add new Equipment')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Tank</h4>

                    <form method="post" action="{{ route('tank.update',$tank->id) }}" class="forms-sample">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="exampleInputName1">Tank Name</label>
                            <input value="{{ $tank->name }}" name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Equipment Name">
                            @error('name') {{ $message }} @enderror
                        </div>


                        <div class="form-group">
                            <label for="exampleInpuFish1">Tank Size in meter</label>
                            <input value="{{  $tank->size}}" name="size" type="text" class="form-control" id="exampleInputCity1" placeholder="Equipment Type">
                            @error('size') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInpuFish1">Water Pump</label>
                            <input value="{{  $tank->water_pump }}" name="water_pump" type="number" class="form-control" id="exampleInputCity1" placeholder="Equipment Type">
                            @error('water_pump') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInpuFish1">Oxygen Pump</label>
                            <input value="{{  $tank->oxygen_pump }}" name="oxygen_pump" type="number" class="form-control" id="exampleInputCity1" placeholder="Equipment Type">
                            @error('oxygen_pump') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInpuFish1">Maximum Fish Quantity</label>
                            <input value="{{  $tank->max_fish_quantity }}" name="max_fish_quantity" type="number" class="form-control" id="exampleInputCity1" placeholder="Equipment Type">
                            @error('max_fish_quantity') {{ $message }} @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Update</button>

                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection

