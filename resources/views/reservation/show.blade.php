@extends('layouts.base')

@section('dashboardcontent')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    User Reservation
                </div>
                <div class="float-end">
                    <a href="{{ route('reservation.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="mb-3 row">
                        <label for="firstname" class="col-md-4 col-form-label text-md-end text-start"><strong>First Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $reservation->firstname }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="lastname" class="col-md-4 col-form-label text-md-end text-start"><strong>Last Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $reservation->lastname }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="phone" class="col-md-4 col-form-label text-md-end text-start"><strong>Phone:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $reservation->phone }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start"><strong>Email:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $reservation->email }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="withfoodornot" class="col-md-4 col-form-label text-md-end text-start"><strong>With Food or Not:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $reservation->withfoodornot }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="foodname" class="col-md-4 col-form-label text-md-end text-start"><strong>Food name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $reservation->foodname }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="foodtype" class="col-md-4 col-form-label text-md-end text-start"><strong>Food Type:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $reservation->foodtype }}
                        </div>
                    </div>



                   
            </div>
        </div>
    </div>
</div>
@endsection
