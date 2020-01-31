@extends('layouts.admin.master')
@section('title','List of User')
@section('content')
          <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="card-title">List of User</h4>

                          <div class="table-responsive">
                              <table class="table table-striped">
                                  <thead>
                                  <tr>
                                      <th>
                                          User Name
                                      </th>
                                      <th>
                                          Role
                                      </th>
                                      <th>
                                          salary
                                      </th>

                                      <th>
                                          Phone Number
                                      </th>
                                      <th>
                                          Address
                                      </th>

                                  </tr>
                                  </thead>
                                  <tbody>
                                 @foreach($users as $user)
                                     <tr>
                                         <td>
                                             {{$user->name}}
                                         </td>

                                         <td>
                                             {{$user->role}}
                                         </td>
                                         <td>
                                             {{$user->salary}}
                                         </td>
                                         <td>
                                             {{$user->phone}}
                                         </td>
                                         <td>
                                             {{$user->address}}
                                         </td>
                                         <td>
                                             <a class="btn btn-primary btn-sm" href="{{route('user.edit',$user->id)}}">Edit</a>
{{--                                             <from action="{{route('user.destroy',$user->id)}}" method="post">--}}
{{--                                                 @csrf--}}
{{--                                                 @method('delete')--}}
{{--                                                 <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure')" >Destroy</button>--}}
{{--                                                 <input class="btn btn-danger btn-sm" type="button" name="submit" value="Destroy">--}}
{{--                                             </from>--}}
                                             <form class="d-inline-block" method="post" action="{{ route('user.destroy',$user->id) }}">
                                                 @csrf
                                                 @method('delete')
                                                 <button class="btn btn-danger btn-sm" onclick="return confirm('Are you confirm to delete?')"><i class="fa fa-trash-o m-r-5"></i>Delete</button>
                                             </form>

                                         </td>
                                     </tr>
                                 @endforeach

                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

@endsection
