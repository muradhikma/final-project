@extends('layouts.base')

@section('dashboardcontent')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Add New Reservation
                </div>
                <div class="float-end">
                    <a href="{{ route('reservation.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('reservation.store') }}" method="post">
                    @csrf

                    <div class="mb-3 mt-3 row">
                        <label for="firstname" class="col-md-8 col-form-label text-md-end text-start">First Name</label>
                        <div class="col-md-8">
                          <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname" name="firstname" value="{{ old('firstname') }}">
                            @if ($errors->has('firstname'))
                                <span class="text-danger">{{ $errors->first('firstname') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 mt-3 row">
                        <label for="lastname" class="col-md-8 col-form-label text-md-end text-start">Last Name</label>
                        <div class="col-md-8">
                          <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" value="{{ old('lastname') }}">
                            @if ($errors->has('lastname'))
                                <span class="text-danger">{{ $errors->first('lastname') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 mt-3 row">
                        <label for="email" class="col-md-8 col-form-label text-md-end text-start">Email</label>
                        <div class="col-md-8">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 mt-3 row">
                        <label for="phone" class="col-md-8 col-form-label text-md-end text-start">Phone</label>
                        <div class="col-md-8">
                          <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}">
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 mt-3 row">
                        <label for="withfoodornot" class="col-md-8 col-form-label text-md-end text-start">With food  Or Not</label>
                        <div class="col-md-8">
                         <!-- <input type="radio" class="form-control @error('withfoodornot') is-invalid @enderror" id="withfoodornot" name="withfoodornot" value="{{ old('withfoodornot') }}">-->
                          <select class="form-select" aria-label="" @error('withfoodornot') is-invalid @enderror" id="withfoodornot" name="withfoodornot">
                            <option selected value="0">Without Food</option>
                            <option value="1"> With Food</option>
                            
                          </select>
                            @if ($errors->has('withfoodornot'))
                                <span class="text-danger">{{ $errors->first('withfoodornot') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 mt-3 row">
                        <label for="foodname" class="col-md-8 col-form-label text-md-end text-start">Food Name</label>
                        <div class="col-md-8">
                          <input type="text" class="form-control @error('foodname') is-invalid @enderror" id="foodname" name="foodname" value="{{ old('foodname') }}">
                            @if ($errors->has('foodname'))
                                <span class="text-danger">{{ $errors->first('foodname') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 mt-3 row">
                        <label for="foodtype" class="col-md-8 col-form-label text-md-end text-start">Food Type</label>
                        <div class="col-md-8">
                          <input type="text" class="form-control @error('foodtype') is-invalid @enderror" id="foodtype" name="foodtype" value="{{ old('foodtype') }}">
                            @if ($errors->has('foodtype'))
                                <span class="text-danger">{{ $errors->first('foodtype') }}</span>
                            @endif
                        </div>
                    </div>

                    

                  

                   
                    <div class=" col-8 mt-3">
                    <div class="mb-3 mt-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add Reservation">
                    </div>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
