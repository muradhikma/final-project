@extends('layouts.base')

@section('dashboardcontent')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Table Information
                </div>
                <div class="float-end">
                    <a href="{{ route('table.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="mb-3 row">
                        <label for="idnooftable" class="col-md-4 col-form-label text-md-end text-start"><strong>Id no of table:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $table->idnooftable }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="capacity" class="col-md-4 col-form-label text-md-end text-start"><strong>capacity:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $table->capacity }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                       
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
