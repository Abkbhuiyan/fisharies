@extends('layouts.admin.master')
@section('title','Add new Fish Health Info')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Fish Health Info</h4>
                    <form action="{{ route('fishHealth.store') }}" method="post" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Date</label>
                            <input name="date" type="date" class="form-control" id="exampleInputName1" placeholder="Name">
                            @error('date') {{ $message }} @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Project Tank</label>
                            <select name="project_tank_id" class="form-control" id="">
                                @foreach($projectTanks as $projectTank)
                                    <option @if(old('project_tank_id')==$projectTank->id)selected @endif value="{{ $projectTank->id }}">{{ $projectTank->id.'. '.$projectTank->project->name.'  '.$projectTank->tank->name}}</option>
                                @endforeach
                            </select>  @error('project_tank_id')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInpuFish1">Fish Amount</label>
                            <input name="fish_amount" type="number" class="form-control" id="exampleInputCity1" placeholder="Fish Description">
                            @error('fish_amount') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInpuFish1">Weight</label>
                            <input name="weight" type="text" class="form-control" id="exampleInputCity1" placeholder="Fish Description">
                            @error('weight') {{ $message }} @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection

