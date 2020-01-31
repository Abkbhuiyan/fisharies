@extends('layouts.admin.master')
@section('title','Feed to project tanks')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Feed to a fish tank</h4>

                    <form action="{{ route('feedTank.update',$feedTank->id) }}" method="post" class="forms-sample">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="exampleInputName1">Tank Name</label>
                            <select name="tank_id" class="form-control" id="">
                                @foreach($tanks as $tank)
                                    <option @if($feedTank->tank_id == $tank->id)selected @endif value="{{ $tank->id }}">{{$tank->name}}</option>
                                @endforeach
                            </select>  @error('tank_id')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1"> Feed  </label>
                            <select name="feed_id" class="form-control" id="">
                                @foreach($feeds as $feed)
                                    <option @if($feedTank->feed_id==$feed->id)selected @endif value="{{ $feed->id }}">{{$feed->name}}</option>
                                @endforeach
                            </select>  @error('feed_id')
                            {{ $message }}
                            @enderror
                        </div>



                        <div class="form-group">
                            <label for="exampleInpuFish1">Quantity & Details</label>
                            <textarea name="quantity" id="" cols="30" rows="10">{{ $feedTank->quantity }}</textarea>
                            @error('quantity')
                            {{ $message }}
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection

