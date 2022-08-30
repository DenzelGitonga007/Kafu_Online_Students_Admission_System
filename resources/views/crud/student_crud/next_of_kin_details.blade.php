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
        <!-- The success message -->
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <!-- Parent details -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form action="{{ route('student_upload_next_of_kin_details') }}" method="POST"> <!-- The url/route posts the details -->
                        <!-- The cross-site request forgery -->
                        @csrf 
                        {!! csrf_field() !!} 
                        <!-- Parent Details -->
                        <h2 class="card-header" style="margin-top: 10px;">Next of Kin Details</h2>
                        <br>
                            <!-- Next of Kin -->
                            <h4 class="card-header">Next of Kin</h4>
                            <br> 
                                <!-- Name -->
                                <div class="card-header">Next of Kin's Name</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- Surname -->
                                            <div class="col">
                                                <label for="nxtk_surname" class="form-label">Surname</label>
                                                <input type="text" class="form-control" placeholder="Next of Kin's Surname" name="nxtk_surname" value="{{ old('nxtk_surname') }}">
                                                <!-- Validation -->
                                            @error('nxtk_surname')
                                                <div class="alert alert-danger col" role="alert">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                            </div>
                                            <!-- First_Name -->
                                            <div class="col">
                                                <label for="nxtk_first_name" class="form-label">First Name</label>
                                                <input type="text" class="form-control" placeholder="Next of Kin's First Name" name="nxtk_first_name" value="{{ old('nxtk_first_name') }}">
                                                <!-- Validation -->
                                            @error('nxtk_first_name')
                                                <div class="alert alert-danger col" role="alert">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                            </div>
                                            <!-- Initial_name -->
                                            <div class="col">
                                                <label for="nxtk_initial_name" class="form-label">Initial/Other Name</label>
                                                <input type="text" class="form-control" placeholder="Next of Kin's Initial/Other Name" name="nxtk_initial_name" value="{{ old('nxtk_initial_name') }}">
                                                <!-- Validation -->
                                                @error('nxtk_initial_name')
                                                    <div class="alert alert-danger col" role="alert">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>       
                                <!-- National_ID -->
                                <div class="card-header">Nationality</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <label for="nxtk_national_id" class="form-label">National ID</label>
                                                <input type="text" class="form-control" name="nxtk_national_id" pattern="[0-9]{8}" placeholder="National ID Number" value="{{ old('nxtk_national_id') }}">
                                                <!-- Validation --> 
                                            @error('nxtk_national_id')
                                                <div class="alert alert-danger col" role="alert">
                                                    {{$message}}
                                                </div>
                                            @enderror 
                                            </div> 
                                        </div>
                                    </div>
                                <div class="card-header">Next of Kin's Contact Address</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- Email -->
                                            <div class="col">
                                                <label for="nxtk_email" class="form-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Enter your Next of Kin's email" name="nxtk_email" value="{{ old('nxtk_email') }}">
                                                <!-- Validation -->
                                                @error('nxtk_email')
                                                <div class="alert alert-danger col" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror  
                                            </div>
                                            <!-- Phone -->
                                            <div class="col">
                                                <label for="nxtk_phone" class="form-label">Phone Number</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">+254</span>
                                                    <input type="tel" class="form-control" placeholder="7000000**" name="nxtk_phone" pattern="[0-9]{9}" value="{{ old('nxtk_phone') }}">
                                                </div>
                                                <!-- Validation -->
                                                @error('nxtk_phone')
                                                <div class="alert alert-danger col" role="alert">
                                                    {{$message}}
                                                </div>
                                            @enderror  
                                            </div>
                                        </div>
                                    </div>
                                <div class="card-header">Next of Kin's Home Address</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- City/Town -->
                                            <div class="col">
                                                <label for="nxtk_city" class="form-label">City/Town</label>
                                                <input type="text" class="form-control" placeholder="Which is your Next of Kin's closest city/town" name="nxtk_city" value="{{ old('nxtk_city') }}">
                                                <!-- Validation -->
                                                @error('nxtk_national_id')
                                                <div class="alert alert-danger col" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror  
                                            </div>
                                            <!-- P.O BOX -->
                                            <div class="col">
                                                <label for="nxtk_pob" class="form-label">P.O BOX</label>
                                                <input type="text" class="form-control" placeholder="Enter your Next of Kin's P.O BOX" name="nxtk_pob" value="{{ old('nxtk_pob') }}">       
                                                <!-- Validation -->
                                                @error('nxtk_pob')
                                                <div class="alert alert-danger col" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror 
                                            </div>
                                        </div>
                                    </div>   

                                      
            
                        <!-- The buttons -->
                        <div class="card-body">
                            <div class="col">
                                <div class="row">
                                    <button class="btn btn-outline-success btn-block">Submit Your Parent/Guardian Details</button>
                                </div>
                            </div>
                        </div>            
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>    