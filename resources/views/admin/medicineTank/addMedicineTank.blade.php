@extends('layouts.admin.master')
@section('title','Medicine to project tanks')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add medicine to a fish tank</h4>

                    <form action="{{ route('medicineTank.store') }}" method="post" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Project Name</label>
                            <select name="project_id" class="form-control" id="">
                                @foreach($projects as $tank)
                                    <option @if(old('project_id')==$tank->id)selected @endif value="{{ $tank->id }}">{{$tank->name}}</option>
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
                            <label for="exampleInputName1"> Medicine</label>
                            <select name="medicine_id" class="form-control" id="">
                                @foreach($medicines as $medicine)
                                    <option @if(old('medicine_id')==$medicine->id)selected @endif value="{{ $medicine->id }}">{{$medicine->name}}</option>
                                @endforeach
                            </select>  @error('medicine_id')
                            {{ $message }}
                            @enderror
                        </div>



                        <div class="form-group">
                            <label for="exampleInpuFish1">Quantity & Details</label>
                            <textarea name="quantity" id="" cols="30" rows="10">{{ old('responsibilities') }}</textarea>
                            @error('quantity')
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

