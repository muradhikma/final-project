@extends('layouts.base')

@section('dashboardcontent')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    User Waitlist
                </div>
                <div class="float-end">
                    <a href="{{ route('waitlist.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="mb-3 row">
                        <label for="firstname" class="col-md-4 col-form-label text-md-end text-start"><strong>First Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $waitlist->firstname }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="lastname" class="col-md-4 col-form-label text-md-end text-start"><strong>Last Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $waitlist->lastname }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="phone" class="col-md-4 col-form-label text-md-end text-start"><strong>Phone:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $waitlist->phone }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start"><strong>Email:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $waitlist->email }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="withfoodornot" class="col-md-4 col-form-label text-md-end text-start"><strong>With Food or Not:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            @if($waitlist->withfoodornot==0)
                           Without Food
                            @else
                           With Food
                            @endif

                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="approve" class="col-md-4 col-form-label text-md-end text-start"><strong>approved:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            @if( $waitlist->approve==0)
                           Unapproved
                            @else
                           Approved
                            @endif 

                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="foodname" class="col-md-4 col-form-label text-md-end text-start"><strong>Food name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $waitlist->foodname }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="foodtype" class="col-md-4 col-form-label text-md-end text-start"><strong>Food Type:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $waitlist->foodtype }}
                        </div>
                    </div>



                   
            </div>
        </div>
    </div>
</div>
@endsection
