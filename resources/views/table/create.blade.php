@extends('layouts.base')

@section('dashboardcontent')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Add New Table
                </div>
                <div class="float-end">
                    <a href="{{ route('table.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('table.store') }}" method="post">
                    @csrf

                    <div class="mb-3 mt-3 row">
                        <label for="idnooftable" class="col-md-8 col-form-label text-md-end text-start">Id no of table</label>
                        <div class="col-md-8">
                          <input type="text" class="form-control @error('idnooftable') is-invalid @enderror" id="idnooftable" name="idnooftable" value="{{ old('idnooftable') }}">
                            @if ($errors->has('idnooftable'))
                                <span class="text-danger">{{ $errors->first('idnooftable') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 mt-3 row">
                        <label for="capacity" class="col-md-8 col-form-label text-md-end text-start">Capacity</label>
                        <div class="col-md-8">
                          <input type="number" class="form-control @error('capacity') is-invalid @enderror" id="capacity" name="capacity" value="{{ old('capacity') }}">
                            @if ($errors->has('capacity'))
                                <span class="text-danger">{{ $errors->first('capacity') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row mt-3">
                        <label for="reserved" class="col-md-8 col-form-label text-md-end text-start">with food or not</label>
                        <div class="col-md-6">
                            <select class="form-select" aria-label="" @error('reserved') is-invalid @enderror id="reserved" name="reserved">
                                <option selected value="0">Not Reserved</option>
                                <option value="1"> Reserved</option>
                                
                              </select>
                         <!-- <input type="text" class="form-control @error('foodtype') is-invalid @enderror "id="foodtype" name="foodtype">-->
                            @if ($errors->has('reserved'))
                                <span class="text-danger">{{ $errors->first('reserved') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class=" col-8 mt-3">
                    <div class="mb-3 mt-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add Table">
                    </div>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
