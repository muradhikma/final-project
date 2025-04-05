@extends('layouts.base')

@section('dashboardcontent')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit Reservation
                </div>
                <div class="float-end">
                    <a href="{{ route('reservation.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('reservation.update', $reservation->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 mt-3 row">
                        <label for="firstname" class="col-md-8 col-form-label text-md-end text-start">First Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname" name="firstname" value="{{ $reservation->firstname }}">
                            @if ($errors->has('firstname'))
                                <span class="text-danger">{{ $errors->first('firstname') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 mt-3 row">
                        <label for="lastname" class="col-md-8 col-form-label text-md-end text-start">Last Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" value="{{ $reservation->lastname }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('lastname') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row mt-3">
                        <label for="email" class="col-md-8 col-form-label text-md-end text-start">Email</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row mt-3">
                        <label for="phone" class="col-md-8 col-form-label text-md-end text-start">Phone</label>
                        <div class="col-md-6">
                          <input type="number" class="form-control" id="phone" name="phone">
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

                    <div class="mb-3 row mt-3">
                        <label for="foodname" class="col-md-8 col-form-label text-md-end text-start">Food Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('foodname') is-invalid @enderror" id="foodname" name="foodname">
                            @if ($errors->has('foodname'))
                                <span class="text-danger">{{ $errors->first('foodname') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row mt-3">
                        <label for="foodtype" class="col-md-8 col-form-label text-md-end text-start">Food Type</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('foodtype') is-invalid @enderror" id="foodtype" name="foodtype">
                            @if ($errors->has('foodtype'))
                                <span class="text-danger">{{ $errors->first('foodtype') }}</span>
                            @endif
                        </div>
                    </div>

                    
                    <div class="mb-3 row mt-3 text-center">
                    <div class="">
                        <input type="submit" class="col-md-8 btn btn-primary" value="Update User">
                    </div>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
