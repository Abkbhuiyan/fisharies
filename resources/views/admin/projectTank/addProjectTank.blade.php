@extends('layouts.admin.master')
@section('title','Assign user to a project')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Project Tank</h4>

                    <form action="{{ route('projectTank.store') }}" method="post" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Project Name</label>
                            <select name="project_id" class="form-control" id="">
                                @foreach($projects as $project)
                                    <option @if(old('project_id')==$project->id)selected @endif value="{{ $project->id }}">{{$project->name}}</option>
                                @endforeach
                            </select>  @error('project_id')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Tank Name</label>
                            <select name="tank_id" class="form-control" id="">
                                @foreach($tanks as $tank)
                                    <option @if(old('tank_id')==$tank->id)selected @endif value="{{ $tank->id }}">{{$tank->name}}</option>
                                @endforeach
                            </select>  @error('tank_id')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Tank Name</label>
                            <select name="fish_id" class="form-control" id="">
                                @foreach($fishes as $fish)
                                    <option @if(old('fish_id')==$fish->id)selected @endif value="{{ $fish->id }}">{{$fish->name}}</option>
                                @endforeach
                            </select>  @error('fish_id')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInpuFish1">Fish Quantity</label>
                            <input type="number" name="fish_quantity" id="">
                            @error('fish_quantity')
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

