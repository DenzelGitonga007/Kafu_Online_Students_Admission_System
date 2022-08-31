<!-- Call the layouts -->

@extends('assets.layouts')
@section('content')

<!-- The header -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Dashboard') }}
        </h2>
    </x-slot>
    <!-- The body -->
    <div class="container" style="margin-top: 50px;">
    <!-- Success message -->
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
        <!-- Personal details -->
        <div class="row">
            <div class="col-md-12">
               
                <!-- Name -->
                    <div class="card">
                        <form action="{{ route('student_upload_spouse_details') }}" method="POST"> <!-- The route personal_details posts the details -->
                            <!-- The cross-site request forgery     -->
                            @csrf
                            {!! csrf_field() !!}
                            <!-- Spouse details -->
                            <h2 class="card-header" style="margin-top: 10px;">Spouse's Details</h2>
                                <br>
                                <!-- Marital status -->
                                <div class="card-header">Marital status</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <!-- Single -->
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="marital_status" value="Single">
                                                    <label for="single" class="form-check-label">Single</label>
                                                </div>
                                                <!-- Married -->
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="marital_status" value="Married">
                                                    <label for="married" class="form-check-label">Married</label>
                                                </div>
                                                <!-- Validation -->
                                                @error('marital_status')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                <div class="card-header">Spouse's Name</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- Surname -->
                                            <div class="col">
                                                <label for="spouse_surname" class="form-label">Surname</label>
                                                <input type="text" class="form-control" placeholder="Spouse_Surname" name="spouse_surname" value="{{ old('spouse_surname') }}">

                                                <!-- Alternative Fill -->
                                                <div class="form-text">Type "N/A" if not applicable</div>

                                            </div>
                                            <!-- First_Name -->
                                            <div class="col">
                                                <label for="spouse_first_name" class="form-label">First Name</label>
                                                <input type="text" class="form-control" placeholder="Spouse First Name" name="spouse_first_name" value="{{ old('spouse_first_name') }}">

                                                <!-- Alternative Fill -->
                                                <div class="form-text">Type "N/A" if not applicable</div>
                                                
                                            </div>
                                            <!-- last_name -->
                                            <div class="col">
                                                <label for="spouse_last_name" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" placeholder="Spouse Last Name" name="spouse_last_name" value="{{ old('spouse_last_name') }}">

                                                <!-- Alternative Fill -->
                                                <div class="form-text">Type "N/A" if not applicable</div>
                                                

                                            </div>
                                        </div>
                                    </div>
                                <!-- National_ID -->
                                <div class="card-header">Nationality</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <label for="spouse_national_id" class="form-label">National ID</label>
                                                <input type="text" class="form-control" name="spouse_national_id" pattern="[0-9]{8}" placeholder="National ID Number" value="{{ old('spouse_national_id') }}">
                                            </div>

                                            <!-- Alternative Fill -->
                                            <div class="form-text">Type "N/A" if not applicable</div>
                                                
                                        </div>
                                    </div>    


                                        <div class="card-header">Spouse's Contact Address</div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <!-- Email -->
                                                    <div class="col">
                                                        <label for="spouse_email" class="form-label">Email</label>
                                                        <input type="email" class="form-control" placeholder="Enter your spouse's email" name="spouse_email" value="{{ old('spouse_email') }}">

                                                        <!-- Alternative Fill -->
                                                        <div class="form-text">Type "N/A" if not applicable</div>
                                                
                                                    </div>
                                                    <!-- Phone -->
                                                    <div class="col">
                                                        <label for="spouse_phone" class="form-label">Phone Number</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text">+254</span>
                                                            <input type="tel" class="form-control" placeholder="7000000**" name="spouse_phone" pattern="[0-9]{9}" value="{{ old('spouse_phone') }}">
                                                        </div>

                                                        <!-- Alternative Fill -->
                                                        <div class="form-text">Type "700000000**" if not applicable</div>
                                                
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-header">Spouse's Home Address</div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <!-- City/Town -->
                                                    <div class="col">
                                                        <label for="spouse_city" class="form-label">City/Town</label>
                                                        <input type="text" class="form-control" placeholder="Which is your spouse's closest city/town" name="spouse_city" value="{{ old('spouse_city') }}">

                                                        <!-- Alternative Fill -->
                                                        <div class="form-text">Type "N/A" if not applicable</div>
                                                
                                                    </div>
                                                    <!-- P.O BOX -->
                                                    <div class="col">
                                                        <label for="spouse_pob" class="form-label">P.O BOX</label>
                                                        <input type="text" class="form-control" placeholder="Enter your spouse's P.O BOX" name="spouse_pob" value="{{ old('spouse_pob') }}">

                                                        <!-- Alternative Fill -->
                                                        <div class="form-text">Type "N/A" if not applicable</div>
                                                
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Occupation    -->
                                            <div class="card-header">Occupation</div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="spouse_occupation" class="form-label">What is your Spouse's source of income?</label>
                                                        <textarea class="form-control" name="spouse_occupation" rows="2" placeholder="Please type here" value="{{ old('spouse_occupation') }}"></textarea>
                                                    </div>

                                                    <!-- Alternative Fill -->
                                                    <div class="form-text">Type "N/A" if not applicable</div>
                                                
                                                </div>
                                            </div>
                                
                            <!-- The buttons -->
                            <div class="card-body">
                                <div class="col">
                                    <div class="row">
                                        <button class="btn btn-outline-success btn-block">Submit Your Spouse Details</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>      
        <br> 
    </div>
</x-app-layout>

<!-- End the layouts -->

 