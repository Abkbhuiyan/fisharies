@extends('layouts.admin.master')
@section('title','Add new Buy')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit New Buy</h4>

                    <form class="forms-sample" action=" {{ route('buy.update',$buy_history->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="exampleInputName1">Buy Name</label>
                            <input name="name" value="{{ $buy_history->name }}" type="text" class="form-control" id="exampleInputName1" placeholder="Equipment Name">
                        @error('name'){{ $message }}@enderror
                        </div>


                        <div class="form-group">
                            <label for="exampleSelectGender">Buy Type</label>
                            <select name="type" class="form-control" id="exampleSelectRole">
                                <option @if($buy_history->type == 'feed') selected @endif value="feed">Feed</option>
                                <option @if($buy_history->type == 'medicine') selected @endif value="medicine">Medicine</option>
                                <option value="equipment" @if($buy_history->type == 'equipment') selected @endif>Equipment</option>
                            </select>
                            @error('type'){{ $message }}@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Project Name</label>
                            <select name="project_id" class="form-control" id="exampleSelectRole">
                                <@foreach($projects as $project)
                                    <option @if($buy_history->project_id == $project->id) selected @endif value="{{ $project->id }}"> {{ $project->name.'  '.$project->id }}</option>
                                @endforeach
                            </select>
                            @error('type'){{ $message }}@enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInpuFish1">Buying Price</label>
                            <input name="price" value="{{ $buy_history->price }}" type="text" class="form-control" id="exampleInputCity1" placeholder="Buy price">
                            @error('price'){{ $message }}@enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInpuFish1">Supplier</label>
                            <input name="supplier" value="{{ $buy_history->supplier }}" type="text" class="form-control" id="exampleInputCity1" placeholder="Buy price">
                            @error('supplier'){{ $message }}@enderror
                        </div>


                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection

