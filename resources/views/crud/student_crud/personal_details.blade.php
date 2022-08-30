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
                        <form action="{{ route('student_upload_personal_details') }}" method="POST"> <!-- The url/route personal_details posts the details -->
                            <!-- The cross-site request forgery     -->
                            @csrf
                            {!! csrf_field() !!}
                            <!-- Personal Details -->
                            <h2 class="card-header" style="margin-top: 10px;">Personal details</h2>
                            <br>
                                <!-- Name -->
                                <div class="card-header">Your Name</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- Surname -->
                                            <div class="col">
                                                <label for="surname" class="form-label">Surname</label>
                                                <input type="text" class="form-control" placeholder="Surname" name="surname" value="{{ old('surname') }}">
                                            </div>
                                            <!-- Validation -->
                                            @error('surname')
                                                <div class="alert alert-danger col" role="alert">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                            <!-- First_name -->
                                            <div class="col">
                                                <label for="first_name" class="form-label">First Name</label>
                                                <input type="text" class="form-control" placeholder="First Name" name="first_name" value="{{ old('first_name') }}">
                                            </div>
                                            <!-- Validation -->
                                            @error('first_name')
                                                <div class="alert alert-danger col" role="alert">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                            <!-- Last_name -->
                                            <div class="col">
                                                <label for="last_name" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}">
                                            </div>
                                            <!-- Validation -->
                                            @error('last_name')
                                                <div class="alert alert-danger col" role="alert">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                <!-- DOB -->
                                <div class="card-header">Your Birth Details</div> 
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <label for="dob" class="form-label">Date of Birth</label> 
                                                <input type="date" class= "form-control" name="date" max="2007-01-01" value="{{ old('date') }}">
                                            </div>
                                            <!-- Validation -->
                                            @error('date')
                                                <div class="alert alert-danger col">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                <!-- Gender  -->
                                <div class="card-header">Gender</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <div class="input-group col">
                                                    <div class="input-group-prepend">
                                                        <label for="gender" class="input-group-text form-label">Gender</label>
                                                    </div>
                                                    <select class="custom-select form-control" name="gender" style="height: 38px;">
                                                        <option name= "gender" selected>Choose...</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Rather_Not_Say">Rather Not Say</option>
                                                    </select>
                                                </div>
                                                <!-- Validation -->
                                                @error('gender')
                                                    <div class="alert alert-danger col" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                <!-- Nationality details -->        
                                <div class="card-header">Nationality details</div>
                                <!-- National_ID -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <label for="national_id" class="form-label">National ID</label>
                                                <input type="text" class="form-control" name="national_id" pattern="[0-9]{8}" placeholder="National ID Number" value="{{ old('national_id') }}">
                                            </div>
                                            <!-- Validation -->
                                            @error('national_id')
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                <!-- Nationality -->
                                <div class="card-header">Nationality</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <!-- Kenyan -->
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="nationality" value="Kenyan">
                                                    <label for="kenyan" class="form-check-label">Kenyan</label>
                                                </div>
                                                <!-- East African -->
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="nationality" value="East African">
                                                    <label for="east_african" class="form-check-label">East African</label>
                                                </div>
                                                <!-- Others -->
                                            </div>
                                            <!-- Validation -->
                                            @error('nationality')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div> 
                                    <!-- Religion      -->
                                <div class="card-header">Religion</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <!-- Protestant -->
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="religion" value="Protestant">
                                                    <label for="protestant" class="form-check-label">Protestant</label>
                                                </div>
                                                <!-- Catholic -->
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="religion" value="Catholic">
                                                    <label for="catholic" class="form-check-label">Catholic</label>
                                                </div>
                                                <!-- Others -->
                                            </div>
                                                <!-- Validation -->
                                            @error('religion')
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div> 
                            <br>

                            <!-- Home and address details -->
                            <h2 class="card-header">Home and Address Details</h2>
                            <br>
                                <div class="card-header">Your Contact Addresses</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- Email -->
                                            <div class="col">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Enter your email" name="email" value="{{ old('email') }}">
                                                <!-- Validation -->
                                                @error('email')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <!-- Phone -->
                                            <div class="col">
                                                <label for="phone" class="form-label">Phone Number</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">+254</span>
                                                    <input type="tel" class="form-control" placeholder="7000000**" name="phone" pattern="[0-9]{9}" value="{{ old('phone') }}">
                                                </div>
                                                <!-- Validation -->
                                                @error('phone')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                        
                                <div class="card-header">Your Home Address</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- City/Town -->
                                            <div class="col">
                                                <label for="city" class="form-label">City/Town</label>
                                                <input type="text" class="form-control" placeholder="Which is your closest city/town" name="city" value="{{ old('city') }}">
                                                <!-- Validation -->
                                                @error('city')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <!-- P.O BOX -->
                                            <div class="col">
                                                <label for="pob" class="form-label">P.O BOX</label>
                                                <input type="text" class="form-control" placeholder="Enter your P.O BOX" name="pob" value="{{ old('pob') }}">
                                                <!-- Validation -->
                                                @error('pob')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                            <!-- The buttons -->
                            <div class="card-body">
                                <div class="col">
                                    <div class="row">
                                        <button class="btn btn-outline-success btn-block">Submit Your Personal Details</button>
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

 