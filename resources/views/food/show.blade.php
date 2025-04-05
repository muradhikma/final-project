@extends('layouts.base')

@section('dashboardcontent')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                   Food Information
                </div>
                <div class="float-end">
                    <a href="{{ route('food.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Food Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $food->foodname }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start"><strong>Food Type:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $food->foodtype }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="roles" class="col-md-4 col-form-label text-md-end text-start"><strong>Roles:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                          
                         
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
