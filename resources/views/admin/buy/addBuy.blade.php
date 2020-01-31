@extends('layouts.admin.master')
@section('title','Add new Buy')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add New Buy</h4>

                    <form class="forms-sample" action=" {{ route('buy.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Buy Name</label>
                            <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="exampleInputName1" placeholder="Equipment Name">
                        @error('name'){{ $message }}@enderror
                        </div>


                        <div class="form-group">
                            <label for="exampleSelectGender">Buy Type</label>
                            <select name="type" class="form-control" id="exampleSelectRole">
                                <option value="feed">Feed</option>
                                <option value="medicine">Medicine</option>
                                <option value="equipment">Equipment</option>
                            </select>
                            @error('type'){{ $message }}@enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleSelectGender">Project Name</label>
                            <select name="project_id" class="form-control" id="exampleSelectRole">
                                <@foreach($projects as $project)
                                    <option value="{{ $project->id }}"> {{ $project->name.'  '.$project->id }}</option>
                                @endforeach
                            </select>
                            @error('type'){{ $message }}@enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInpuFish1">Buying Price</label>
                            <input name="price" value="{{ old('price') }}" type="text" class="form-control" id="exampleInputCity1" placeholder="Buy price">
                            @error('price'){{ $message }}@enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInpuFish1">Supplier</label>
                            <input name="supplier" value="{{ old('supplier') }}" type="text" class="form-control" id="exampleInputCity1" placeholder="Buy price">
                            @error('supplier'){{ $message }}@enderror
                        </div>


                        <button type="submit" class="btn btn-primary mr-2">Save</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection

