@extends('layouts.admin.master')
@section('title','Create new User')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create User</h4>

                    <form class="forms-sample" method="post" action="{{ route('user.update',$user->id) }}" >
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="{{ $user->name}}">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" value="{{ $user->email }}">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputEmail3" placeholder="Password">
                            @error('password')
                            {{ $message }}
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="exampleSelectGender">Role</label>
                            <select name="role" class="form-control" id="exampleSelectRole">
                                <option value="manager" @if($user->role == 'manager')selected @endif>Manager</option>
                                <option @if($user->role == 'staff')selected @endif value="staff">Staff</option>
                                <option @if($user->role == 'worker')selected @endif value="worker">Worker</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Salary</label>
                            <input name="salary" type="text" class="form-control" id="exampleInputEmail3" placeholder="Salary" value="{{ $user->salary }}">
                            @error('salary')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail3">Phone Number</label>
                            <input name="phone" type="text" class="form-control" id="exampleInputEmail3" placeholder="Phone Number" value="{{ $user->phone }}">
                            @error('phone')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputCity1">Address</label>
                            <textarea name="address" id="address" cols="30" rows="10">{{ $user->address }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection

