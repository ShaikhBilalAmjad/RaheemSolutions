@extends('layouts.master')

@section('title', 'Raheem Solutions')
@section('username', \Illuminate\Support\Facades\Auth::user()->getName())


@section('content')
    <div class="row bg-light">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Update Staff</h4>
              </div>
              <div class="card-body">
                    @include('staff.form',[
                        'model' => $model,
                        'location' => $location,
                        'zone' => $zone,
                        'roles' => $roles,
                        'departments' => $departments,
                        'company' => $company
                    ])
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    
@endsection