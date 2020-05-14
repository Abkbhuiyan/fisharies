@extends('layouts.admin.master')
@section('title','Update Sell info')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Sell Info</h4>

                    <form class="forms-sample" action=" {{ route('sellHistory.update',$sellHistory->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="exampleInpuFish1">Selling Date</label>
                            <input name="date" value="{{ $sellHistory->date }}" type="date" class="form-control" id="exampleInputCity1" placeholder="">
                            @error('date'){{ $message }}@enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleSelectGender">Project Name</label>
                            <select name="project_id" class="form-control" id="exampleSelectRole">
                                <@foreach($projects as $project)
                                    <option @if($sellHistory->project_id == $project->id) selected @endif value="{{ $project->id }}"> {{ $project->name.'  '.$project->id }}</option>
                                @endforeach
                            </select>
                            @error('project_id'){{ $message }}@enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInpuFish1">Unite Price (Per kg)</label>
                            <input name="unit_price" value="{{ $sellHistory->unit_price }}" type="text" class="form-control" id="exampleInputCity1" placeholder="Price">
                            @error('unit_price'){{ $message }}@enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInpuFish1">Weight (kg)</label>
                            <input name="weight" value="{{ $sellHistory->weight }}" type="text" class="form-control" id="exampleInputCity1" placeholder="Weight">
                            @error('weight'){{ $message }}@enderror
                        </div>


                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection

