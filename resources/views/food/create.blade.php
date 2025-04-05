@extends('layouts.base')

@section('dashboardcontent')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Add New Food
                </div>
                <div class="float-end">
                    <a href="{{ route('food.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('food.store') }}" method="post">
                    @csrf

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
                        <label for="foodtype" class="col-md-8 col-form-label text-md-end text-start">Food type</label>
                        <div class="col-md-8">
                          <input type="text" class="form-control @error('foodtype') is-invalid @enderror" id="foodtype" name="foodtype" value="{{ old('foodtype') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('foodtype') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 mt-3 row">
                        <label for="price" class="col-md-8 col-form-label text-md-end text-start">Price</label>
                        <div class="col-md-8">
                          <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price">
                            @if ($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('price') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class=" col-8 mt-3">
                    <div class="mb-3 mt-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add Food">
                    </div>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
