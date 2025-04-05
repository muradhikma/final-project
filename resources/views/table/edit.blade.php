@extends('layouts.base')

@section('dashboardcontent')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit Table
                </div>
                <div class="float-end">
                    <a href="{{ route('table.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('table.update', $table->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 mt-3 row">
                        <label for="idnooftable" class="col-md-8 col-form-label text-md-end text-start">Id no of table</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('idnooftable') is-invalid @enderror" id="idnooftable" name="idnooftable" value="{{ $table->idnooftable }}">
                            @if ($errors->has('idnooftable'))
                                <span class="text-danger">{{ $errors->first('idnooftable') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 mt-3 row">
                        <label for="capacity" class="col-md-8 col-form-label text-md-end text-start">Capacity</label>
                        <div class="col-md-6">
                          <input type="number" class="form-control @error('capacity') is-invalid @enderror" id="capacity" name="capacity" value="{{ $table->capacity }}">
                            @if ($errors->has('capacity'))
                                <span class="text-danger">{{ $errors->first('capacity') }}</span>
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
