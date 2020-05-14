@extends('layouts.admin.master')
@section('title','Projects Cost Summary')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> Generate Reports</h4>

                    <div class="col s12 m12 l12">
                        <div id="form-with-validation" class="card card card-default scrollspy">
                            <div class="card-content">
                                <h4 class="card-title">Report Form</h4>
                                <form action="{{ route('report.manage') }}" method="post" >
                                    @csrf
                                    <div class="row">
                                        <div class="input-field col m4 s12">
                                            <select name="project_id" id="proejct_id">
                                                <option value="" disabled selected>Chose a Project</option>
                                                @foreach($projects as $project)
                                                    <option value="{{$project->id}}">{{$project->name}}</option>
                                                @endforeach
                                            </select>
                                            <label>Project</label>
                                            @error('project_id')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="input-field col m2 s12 center">
                                            <div class="input-field col s12">
                                                <button class="btn btn-light-light-green waves-effect waves-light" value="summary" type="submit" name="action">
                                                    <i class="material-icons left"></i> Summary </button>
                                            </div>
                                        </div>
                                        <div class="input-field col m2 s12 center">
                                            <div class="input-field col s12 center">
                                                <button class="btn btn-light-blue waves-effect waves-button-input" value="feeding" type="submit" name="action">
                                                    <i class="material-icons left">Feeding</i> </button>
                                            </div>
                                        </div>
                                        <div class="input-field col m2 s12 center">
                                            <div class="input-field col s12">
                                                <button class="btn btn-light-brown waves-effect waves-light" value="medication" type="submit" name="action">
                                                    <i class="material-icons left"></i> Medication </button>
                                            </div>
                                        </div>
                                        <div class="input-field col m2 s12 center">
                                            <div class="input-field col s12">
                                                <button class="btn btn-light-teal waves-effect waves-light" value="sales" type="submit" name="action">
                                                    <i class="material-icons left"></i> Sales</button>
                                            </div>
                                        </div>
                                        <div class="input-field col m2 s12 center">
                                            <div class="input-field col s12">
                                                <button class="btn btn-light-deep-purple waves-effect waves-light" value="health" type="submit" name="action">
                                                    <i class="material-icons left"></i> Health</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
