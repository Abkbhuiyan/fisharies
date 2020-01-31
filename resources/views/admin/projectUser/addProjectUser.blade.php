@extends('layouts.admin.master')
@section('title','Assign user to a project')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Assign an user to a project</h4>

                    <form action="{{ route('projectUser.store') }}" method="post" class="forms-sample">
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
                            <label for="exampleInputName1">Employees Name</label>
                            <select name="user_id" class="form-control" id="">
                                @foreach($users as $user)
                                    <option @if(old('user_id')==$user->id)selected @endif value="{{ $user->id }}">{{$user->name}}</option>
                                @endforeach
                            </select>  @error('user_id')
                            {{ $message }}
                            @enderror
                        </div>



                        <div class="form-group">
                            <label for="exampleInpuFish1">Responsibilities</label>
                            <textarea name="responsibilities" id="" cols="30" rows="10">{{ old('responsibilities') }}</textarea>
                            @error('responsibilities')
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

