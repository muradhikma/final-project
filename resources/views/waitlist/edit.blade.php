@extends('layouts.base')

@section('dashboardcontent')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit Waitlist

                </div>
                <div class="float-end">
                    <a href="{{ route('waitlist.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('waitlist.update', $waitlist->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 mt-3 row">
                        <label for="firstname" class="col-md-8 col-form-label text-md-end text-start">First Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname" name="firstname" value="{{ $waitlist->firstname }}">
                            @if ($errors->has('firstname'))
                                <span class="text-danger">{{ $errors->first('firstname') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 mt-3 row">
                        <label for="lastname" class="col-md-8 col-form-label text-md-end text-start">Last Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" value="{{ $waitlist->lastname }}">
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





                    <div class="mb-3 row mt-3">
                        <label for="noofperson" class="col-md-8 col-form-label text-md-end text-start">No of person</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('noofperson') is-invalid @enderror" id="noofperson" name="noofperson">
                            @if ($errors->has('noofperson'))
                                <span class="text-danger">{{ $errors->first('noofperson') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row mt-3">
                        <label for="withfoodornot" class="col-md-8 col-form-label text-md-end text-start">with food or not</label>
                        <div class="col-md-6">
                            <select class="form-select" aria-label="" @error('withfoodornot') is-invalid @enderror id="withfoodornot" name="withfoodornot">
                                <option selected value="0">Without Food</option>
                                <option value="1"> With Food</option>

                              </select>
                         <!-- <input type="text" class="form-control @error('foodtype') is-invalid @enderror "id="foodtype" name="foodtype">-->
                            @if ($errors->has('foodtype'))
                                <span class="text-danger">{{ $errors->first('foodtype') }}</span>
                            @endif
                        </div>
                    </div>



                    <div class="mb-3 row mt-3">
                        <label for="paymenttype" class="col-md-8 col-form-label text-md-end text-start">payment type</label>
                        <div class="col-md-6">
                            <select class="form-select" aria-label="" @error('paymenttype') is-invalid @enderror id="paymenttype" name="paymenttype">
                                <option selected value="Cash">Cash</option>
                                <option value="Mobliebanking"> Moblie Banking</option>

                              </select>
                         <!-- <input type="text" class="form-control @error('foodtype') is-invalid @enderror" id="foodtype" name="foodtype">-->
                            @if ($errors->has('paymenttype'))
                                <span class="text-danger">{{ $errors->first('paymenttype') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row mt-3">
                        <label for="approve" class="col-md-8 col-form-label text-md-end text-start">Approve</label>
                        <div class="col-md-6">
                            <select class="form-select" aria-label="" @error('approve') is-invalid @enderror id="approve" name="approve">
                                <option selected value="0">unapproved</option>
                                <option value="1"> Approved</option>

                              </select>
                         <!-- <input type="text" class="form-control @error('foodtype') is-invalid @enderror" id="foodtype" name="foodtype">-->
                            @if ($errors->has('approve'))
                                <span class="text-danger">{{ $errors->first('approve') }}</span>
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
