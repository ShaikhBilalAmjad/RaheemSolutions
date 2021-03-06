@extends('layouts.master')

@section('title', 'Raheem Solutions')
@section('username', \Illuminate\Support\Facades\Auth::user()->getName())


@section('content')
    <div class="row bg-light">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Create Type</h4>
              </div>
              <div class="card-body">
                    @include('type.form',[
                        'model' => $model,
                        'status' => $status,
                        'purpose' => $purpose,
                        'item' => $item,
                    ])
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    
@endsection