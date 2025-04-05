@extends('layouts.base')

@section('dashboardcontent')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Add New Role
                </div>
                <div class="float-end">
                    <a href="{{ route('roles.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('roles.store') }}" method="post">
                    @csrf

                    <div class="mb-3 mt-3 row">
                        <label for="name" class="col-md-8 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-8">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" onkeydown="return /[a-z]/i.test(event.key)">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 mt-3 row">
                        <label for="permissions" class="col-md-8 col-form-label text-md-end text-start">Permissions</label>
                        <div class="col-md-8">
                            <select class="form-select @error('permissions') is-invalid @enderror" multiple aria-label="Permissions" id="permissions" name="permissions[]" style="height: 210px;">
                                @forelse ($permissions as $permission)
                                    <option value="{{ $permission->id }}" {{ in_array($permission->id, old('permissions') ?? []) ? 'selected' : '' }}>
                                        {{ $permission->name }}
                                    </option>
                                @empty

                                @endforelse
                            </select>
                            @if ($errors->has('permissions'))
                                <span class="text-danger">{{ $errors->first('permissions') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mt-3 mb-3 row col-8 text-center">
                    <div class=" col-8">
                        <input type="submit" class="col-md-8 offset-md-5 btn btn-primary" value="Add Role">
                    </div>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
