@extends('layouts.admin.master')
@section('title','Edit  Project')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Project</h4>

                    <form action="{{ route('project.update',$project->id) }}" method="post" class="forms-sample">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="exampleInputName1">Project Name</label>
                            <input name="name" value="{{ $project->name }}" type="text" class="form-control" id="exampleInputName1" placeholder="Medicine Name">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="exampleInpuFish1">Start Date</label>
                            <input value="{{ $project->start_date  }}" name="start_date" type="date" class="form-control" id="exampleInputCity1" placeholder="Fish Type">
                            @error('start_date')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInpuFish1">End Date</label>
                            <input name="end_date" value="{{ $project->end_date }}" type="date" class="form-control" id="exampleInputCity1" placeholder="Medicine price">
                            @error('end_date')
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

