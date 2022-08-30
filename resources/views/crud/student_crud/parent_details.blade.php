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
                    <form action="{{ route('student_upload_parent_details') }}" method="POST"> <!-- The url/route posts the details -->
                        <!-- The cross-site request forgery -->
                        @csrf 
                        {!! csrf_field() !!} 
                        <!-- Parent Details -->
                        <h2 class="card-header" style="margin-top: 10px;">Parent/Guardian Details</h2>
                        <br>
                            <!-- Father -->
                            <h4 class="card-header">Father</h4>
                            <br>
                                <!-- Alive/Deceased -->
                                <div class="card-header">Life State</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <!-- Alive -->
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="father" value="Alive">
                                                <label for="alive" class="form-check-label">Alive</label>
                                            </div>
                                            <!-- Deceased -->
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="father" value="Deceased">
                                                <label for="deceased" class="form-check-label">Deceased</label>
                                            </div>
                                            <!-- Validation -->
                                            @error('father')
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- Name -->
                                <div class="card-header">Name</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- Surname -->
                                            <div class="col">
                                                <label for="father_surname" class="form-label">Surname</label>
                                                <input type="text" class="form-control" placeholder="Surname" value="{{ old('father_surname') }}">
                                            </div>
                                            <!-- First_name -->
                                            <div class="col">
                                                <label for="father_first_name" class="form-label">First Name</label>
                                                <input type="text" class="form-control" placeholder="First Name" name="father_first_name" value="{{ old('father_first_name') }}">
                                            </div>
                                            <!-- Last_name -->
                                            <div class="col">
                                                <label for="father_last_name" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" name="father_last_name" value="{{ old('father_last_name') }}">
                                            </div>
                                        </div>
                                    </div>
                                <!-- Nationality details -->     
                                <div class="card-header">Nationality details</div>
                                <!-- National_ID -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <label for="father_national_id" class="form-label">National ID</label>
                                                <input type="text" class="form-control" name="father_national_id" pattern="[0-9]{8}" placeholder="National ID Number" value="{{ old('father_national_id') }}">
                                            </div>
                                        </div>
                                    </div> 
                                <!-- Father's Occupation    -->
                                <div class="card-header">Occupation</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <label for="father_occupation" class="form-label">What is your Father's source of income?</label>
                                                <textarea class="form-control" name="father_occupation" rows="2" placeholder="Please type here" value="{{ old('father_occupation') }}"></textarea>
                                            </div>
                                        </div>
                                    </div>    
                            
                            <!-- Mother -->
                            <h4 class="card-header">Mother</h4>
                            <br>
                                <!-- Alive/Deceased -->
                                <div class="card-header">Life State</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <!-- Alive -->
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="mother" value="Alive">
                                                <label for="alive" class="form-check-label">Alive</label>
                                            </div>
                                            <!-- Married -->
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="mother" value="Deceased">
                                                <label for="deceased" class="form-check-label">Deceased</label>
                                            </div>
                                            <!-- Validation -->
                                            @error('mother')
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- Name -->
                                <div class="card-header">Name</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- Surname -->
                                            <div class="col">
                                                <label for="mother_surname" class="form-label">Surname</label>
                                                <input type="text" class="form-control" placeholder="Surname" value="{{ old('mother_surname') }}">
                                            </div>
                                            <!-- First_name -->
                                            <div class="col">
                                                <label for="mother_first_name" class="form-label">First Name</label>
                                                <input type="text" class="form-control" placeholder="First Name" name="mother_first_name" value="{{ old('mother_first_name') }}">
                                            </div>
                                            <!-- Last_name -->
                                            <div class="col">
                                                <label for="mother_last_name" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" name="mother_last_name" value="{{ old('mother_last_name') }}">
                                            </div>
                                        </div>
                                    </div>
                                <!-- Nationality details -->     
                                <div class="card-header">Nationality details</div>
                                <!-- National_ID -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <label for="mother_national_id" class="form-label">National ID</label>
                                                <input type="text" class="form-control" name="mother_national_id" pattern="[0-9]{8}" placeholder="National ID Number" value="{{ old('mother_national_id') }}">
                                            </div>
                                        </div>
                                    </div> 
                                <!-- Occupation    -->
                                <div class="card-header">Occupation</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <label for="mother_occupation" class="form-label">What is your Mother's source of income?</label>
                                                <textarea class="form-control" name="mother_occupation" rows="2" placeholder="Please type here" value="{{ old('mother_occupation') }}"></textarea>
                                            </div>
                                        </div>
                                    </div>

                            <!-- Guardian        -->
                            <h4 class="card-header">Guardian</h4>
                            <br> 
                                <!-- Name -->
                                <div class="card-header">Guardian's Name</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- Surname -->
                                            <div class="col">
                                                <label for="guardian_surname" class="form-label">Surname</label>
                                                <input type="text" class="form-control" placeholder="Guardian's Surname" name="guardian_surname" value="{{ old('guardian_surname') }}">
                                            </div>
                                            <!-- First_Name -->
                                            <div class="col">
                                                <label for="guardian_first_name" class="form-label">First Name</label>
                                                <input type="text" class="form-control" placeholder="Guardian First Name" name="guardian_first_name" value="{{ old('guardian_first_name') }}">    
                                            </div>
                                            <!-- last_name -->
                                            <div class="col">
                                                <label for="guardian_initial_name" class="form-label">Initial/Other Name</label>
                                                <input type="text" class="form-control" placeholder="Guardian Initial/Other Name" name="guardian_initial_name" value="{{ old('guardian_initial_name') }}">
                                            </div>
                                        </div>
                                    </div>       
                                <!-- National_ID -->
                                <div class="card-header">Nationality</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <label for="guardian_national_id" class="form-label">National ID</label>
                                                <input type="text" class="form-control" name="guardian_national_id" pattern="[0-9]{8}" placeholder="National ID Number" value="{{ old('guardian_national_id') }}">
                                            </div>    
                                        </div>
                                    </div>
                                <div class="card-header">Guardian's Contact Address</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- Email -->
                                            <div class="col">
                                                <label for="guardian_email" class="form-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Enter your guardian's email" name="guardian_email" value="{{ old('guardian_email') }}">
                                            </div>
                                            <!-- Phone -->
                                            <div class="col">
                                                <label for="guardian_phone" class="form-label">Phone Number</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">+254</span>
                                                    <input type="tel" class="form-control" placeholder="7000000**" name="guardian_phone" pattern="[0-9]{9}" value="{{ old('guardian_phone') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="card-header">Guardian's Home Address</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- City/Town -->
                                            <div class="col">
                                                <label for="guardian_city" class="form-label">City/Town</label>
                                                <input type="text" class="form-control" placeholder="Which is your guardian's closest city/town" name="guardian_city" value="{{ old('guardian_city') }}">
                                            </div>
                                            <!-- P.O BOX -->
                                            <div class="col">
                                                <label for="guardian_pob" class="form-label">P.O BOX</label>
                                                <input type="text" class="form-control" placeholder="Enter your guardian's P.O BOX" name="guardian_pob" value="{{ old('guardian_pob') }}">       
                                            </div>
                                        </div>
                                    </div>
                                <!-- Occupation    -->
                                <div class="card-header">Occupation</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <label for="guardian_occupation" class="form-label">What is your Guardian's source of income?</label>
                                                <textarea class="form-control" name="guardian_occupation" rows="2" placeholder="Please type here" value="{{ old('guardian_occupation') }}"></textarea>
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