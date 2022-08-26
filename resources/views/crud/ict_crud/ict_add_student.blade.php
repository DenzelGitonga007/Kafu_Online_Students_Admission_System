<!-- Call the layouts -->
@extends('assets.layouts')
@section('content')

<!-- The dashboard -->
<x-app-layout>
    <!-- The header -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ICT_Support Dashboard') }}
        </h2>
    </x-slot>

    <!-- The body -->
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-12">
                <!-- The success message -->
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        <!-- To print the message -->
                        <i class="bi-check-circle"></i>
                        {{ Session::get('success') }}

                        <!-- Closing the alert -->
                        <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    </div>
                @endif
                
                    <div class="card">
                    <h2 class="card-header">Personal Details</h2>
                    <br>
                        <div class="card-header">Your Name</div>
                            <div class="card-body">
                                <form action="{{ url('ict_save_details') }}" method="POST"> <!-- The route personal_details posts the details -->
                                    <!-- The cross-site request forgery     -->
                                    @csrf
                                    {!! csrf_field() !!}
                                    <div class="row">
                                        <!-- surname -->
                                        <div class="col">
                                            <label for="surname" class="form-label">Surname</label>
                                            <input type="text" class="form-control" placeholder="Surname" name="surname" value="{{ old('surname') }}">
                                            <!-- Validation -->
                                            @error('surname')
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <!-- first_name -->
                                        <div class="col">
                                            <label for="first_name" class="form-label">First Name</label>
                                            <input type="text" class="form-control" placeholder="First Name" name="first_name" value="{{ old('first_name') }}">
                                            <!-- Validation -->
                                            @error('first_name')
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <!-- last_name -->
                                        <div class="col">
                                            <label for="last_name" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}">
                                            <!-- Validation -->
                                            @error('last_name')
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                    <br> 
                                    <!-- DOB -->
                                    <div class="card-header">DOB</div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="date" class="form-label">Date of Birth</label>
                                                    <input type="date" class="form-control" name="date" max="2007-01-01" value="{{ old('date') }}">
                                                </div>
                                                <!-- Validation -->
                                                @error('date')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    <br>
                                    <!-- Gender  -->
                                    <div class="card-header">Gender</div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="input-group col">
                                                        <div class="input-group-prepend">
                                                            <label for="gender" class="form-label input-group-text">Gender</label>
                                                        </div>
                                                        <select name="gender" class="custom-select form-control" style="height: 38px;">
                                                            <option selected>Choose...</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                            <option value="Rather_Not_Say">Rather Not Say</option>
                                                        </select>
                                                    </div>
                                                     <!-- Validation -->
                                                    @error('gender')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror   
                                                </div>
                                            </div>
                                        </div>
                                    <br>
                                    <div class="card-header">Nationality details</div>
                                    <!-- National ID -->
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
                                    <div class="card-body">Nationality</div>
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
                                    <br>    
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
                                    <!-- Home and Address Details -->
                                    <h2 class="card-header">Home and Address Details<h2>
                                    <br>  
                                        <div class="card-header">Contact Addresses</div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <!-- Email -->
                                                    <div class="col">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" class="form-control" placeholder="Enter email address" name="email" value="{{ old('email') }}">
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
                                    <br>
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
                                    <br>
                                    <!-- Spouse details -->
                                    <h2 class="card-header">Spouse's Details</h2>
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
                                                        <!-- Validation -->
                                                        <!-- @error('spouse_surname')
                                                            <div class="alert alert-danger" role="alert">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror -->
                                                    </div>
                                                    <!-- First_Name -->
                                                    <div class="col">
                                                        <label for="spouse_first_name" class="form-label">First Name</label>
                                                        <input type="text" class="form-control" placeholder="Spouse First Name" name="spouse_first_name" value="{{ old('spouse_first_name') }}">
                                                        <!-- Validation -->
                                                        <!-- @error('spouse_first_name')
                                                            <div class="alert alert-danger" role="alert">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror -->
                                                    </div>
                                                    <!-- last_name -->
                                                    <div class="col">
                                                        <label for="spouse_last_name" class="form-label">Last Name</label>
                                                        <input type="text" class="form-control" placeholder="Spouse Last Name" name="spouse_last_name" value="{{ old('spouse_last_name') }}">
                                                        <!-- Validation -->
                                                        <!-- @error('spouse_last_name')
                                                            <div class="alert alert-danger" role="alert">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror -->
                                                    </div>
                                                </div>
                                            </div>      
                                            <div class="card-header">Spouse's Contact Address</div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <!-- Email -->
                                                        <div class="col">
                                                            <label for="spouse_email" class="form-label">Email</label>
                                                            <input type="email" class="form-control" placeholder="Enter their spouse's email" name="spouse_email" value="{{ old('spouse_email') }}">
                                                            <!-- Validation -->
                                                            <!-- @error('spouse_email')
                                                                <div class="alert alert-danger" role="alert">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror -->
                                                        </div>
                                                        <!-- Phone -->
                                                        <div class="col">
                                                            <label for="spouse_phone" class="form-label">Phone Number</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">+254</span>
                                                                <input type="tel" class="form-control" placeholder="7000000**" name="spouse_phone" pattern="[0-9]{9}" value="{{ old('spouse_phone') }}">
                                                            </div>
                                                            <!-- Validation -->
                                                            <!-- @error('spouse_phone')
                                                                <div class="alert alert-danger" role="alert">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror -->
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="card-header">Spouse's Home Address</div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <!-- City/Town -->
                                                        <div class="col">
                                                            <label for="spouse_city" class="form-label">City/Town</label>
                                                            <input type="text" class="form-control" placeholder="Which is their spouse's closest city/town" name="spouse_city" value="{{ old('city') }}">
                                                            <!-- Validation -->
                                                            <!-- @error('spouse_city')
                                                                <div class="alert alert-danger" role="alert">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror -->
                                                        </div>
                                                        <!-- P.O BOX -->
                                                        <div class="col">
                                                            <label for="spouse_pob" class="form-label">P.O BOX</label>
                                                            <input type="text" class="form-control" placeholder="Enter their spouse's P.O BOX" name="spouse_pob" value="{{ old('pob') }}">
                                                            <!-- Validation -->
                                                            <!-- @error('spouse_pob')
                                                                <div class="alert alert-danger" role="alert">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror -->
                                                        </div>
                                                    </div>
                                            </div>
                                        <br>
                                        <!-- Parents and/or guardian -->
                                        <h2 class="card-header">Parent(s) and/or Guardian(s) Details</h2>
                                        <br>
                                        <!-- Father -->
                                            <div class="card-header">Father</div>
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
                                                <div class="card-header">Father's Name</div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <!-- Surname -->
                                                            <div class="col">
                                                                <label for="father_surname" class="form-label">Surname</label>
                                                                <input type="text" class="form-control" placeholder="Father's Surname" name="father_surname" value="{{ old('father_surname') }}">
                                                                <!-- Validation -->
                                                                <!-- @error('father_surname')
                                                                    <div class="alert alert-danger" role="alert">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror -->
                                                            </div>
                                                            <!-- First_Name -->
                                                            <div class="col">
                                                                <label for="father_first_name" class="form-label">First Name</label>
                                                                <input type="text" class="form-control" placeholder="Father's First Name" name="father_first_name" value="{{ old('father_first_name') }}">
                                                                <!-- Validation -->
                                                                <!-- @error('father_first_name')
                                                                    <div class="alert alert-danger" role="alert">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror -->
                                                            </div>
                                                            <!-- last_name -->
                                                            <div class="col">
                                                                <label for="father_last_name" class="form-label">Last Name</label>
                                                                <input type="text" class="form-control" placeholder="Father's Last Name" name="father_last_name" value="{{ old('father_last_name') }}">
                                                                <!-- Validation -->
                                                                <!-- @error('father_last_name')
                                                                    <div class="alert alert-danger" role="alert">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror -->
                                                            </div>
                                                        </div> 
                                                    </div>
                                                <!--Father's DOB -->
                                                <div class="card-header">DOB</div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="father_date" class="form-label">Date of Birth</label>
                                                                <input type="date" class="form-control" name="father_date" max="1997-01-01" value="{{ old('father_date') }}">
                                                            </div>
                                                            <!-- Validation -->
                                                            <!-- @error('date')
                                                                <div class="alert alert-danger" role="alert">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror -->
                                                        </div>
                                                    </div>
                                                    <!-- Father's Occupation    -->
                                                <div class="card-header">Occupation</div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="father_occupation" class="form-label">What is your Father's source of income?</label>
                                                                <textarea class="form-control" name="father_occupation" rows="2" placeholder="Please type here"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!-- Mother     -->
                                                <div class="card-header">Mother</div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <!-- Alive -->
                                                            <div class="form-check form-check-inline">
                                                                <input type="radio" class="form-check-input" name="mother" value="Alive">
                                                                <label for="alive" class="form-check-label">Alive</label>
                                                            </div>
                                                            <!-- Deceased -->
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
                                                <div class="card-header">Mother's Name</div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <!-- Surname -->
                                                            <div class="col">
                                                                <label for="mother_surname" class="form-label">Surname</label>
                                                                <input type="text" class="form-control" placeholder="Mother's Surname" name="mother_surname" value="{{ old('mother_surname') }}">
                                                                <!-- Validation -->
                                                                <!-- @error('mother_surname')
                                                                    <div class="alert alert-danger" role="alert">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror -->
                                                            </div>
                                                            <!-- First_Name -->
                                                            <div class="col">
                                                                <label for="mother_first_name" class="form-label">First Name</label>
                                                                <input type="text" class="form-control" placeholder="Mother's First Name" name="mother_first_name" value="{{ old('mother_first_name') }}">
                                                                <!-- Validation -->
                                                                <!-- @error('mother_first_name')
                                                                    <div class="alert alert-danger" role="alert">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror -->
                                                            </div>
                                                            <!-- last_name -->
                                                            <div class="col">
                                                                <label for="mother_last_name" class="form-label">Last Name</label>
                                                                <input type="text" class="form-control" placeholder="Father's Last Name" name="mother_last_name" value="{{ old('mother_last_name') }}">
                                                                <!-- Validation -->
                                                                <!-- @error('mother_last_name')
                                                                    <div class="alert alert-danger" role="alert">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror -->
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <!--Mother's DOB -->
                                                    <div class="card-header">DOB</div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="mother_date" class="form-label">Date of Birth</label>
                                                                    <input type="date" class="form-control" name="mother_date" max="1997-01-01" value="{{ old('mother_date') }}">
                                                                </div>
                                                                <!-- Validation -->
                                                                <!-- @error('mother_date')
                                                                    <div class="alert alert-danger" role="alert">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror -->
                                                            </div>
                                                        </div>
                                                    <!-- Mother's Occupation    -->
                                                    <div class="card-header">Occupation</div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="mother_occupation" class="form-label">What is your Mother's source of income?</label>
                                                                    <textarea class="form-control" name="mother_occupation" rows="2" placeholder="Please type here"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <!-- Guardian     -->
                                                    <div class="card-header">Guardian</div>
                                                    <br>
                                                    <div class="card-header">Guardian's Name</div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <!-- Surname -->
                                                                <div class="col">
                                                                    <label for="guardian_surname" class="form-label">Surname</label>
                                                                    <input type="text" class="form-control" placeholder="Guardian's Surname" name="guardian_surname" value="{{ old('guardian_surname') }}">
                                                                    <!-- Validation -->
                                                                    <!-- @error('guardian_surname')
                                                                        <div class="alert alert-danger" role="alert">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror -->
                                                                </div>
                                                                <!-- First_Name -->
                                                                <div class="col">
                                                                    <label for="guardian_first_name" class="form-label">First Name</label>
                                                                    <input type="text" class="form-control" placeholder="Guardian's First Name" name="guardian_first_name" value="{{ old('guardian_first_name') }}">
                                                                    <!-- Validation -->
                                                                    <!-- @error('guardian_first_name')
                                                                        <div class="alert alert-danger" role="alert">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror -->
                                                                </div>
                                                                <!-- last_name -->
                                                                <div class="col">
                                                                    <label for="guardian_last_name" class="form-label">Last Name</label>
                                                                    <input type="text" class="form-control" placeholder="Guardian's Last Name" name="guardian_last_name" value="{{ old('guardian_last_name') }}">
                                                                    <!-- Validation -->
                                                                    <!-- @error('mother_last_name')
                                                                        <div class="alert alert-danger" role="alert">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror -->
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    <!--Mother's DOB -->
                                                    <div class="card-header">DOB</div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="guardian_date" class="form-label">Date of Birth</label>
                                                                    <input type="date" class="form-control" name="guardian_date" max="1997-01-01" value="{{ old('guardian_date') }}">
                                                                </div>
                                                                <!-- Validation -->
                                                                <!-- @error('guardian_date')
                                                                    <div class="alert alert-danger" role="alert">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror -->
                                                            </div>
                                                        </div>
                                                    <!-- National ID -->
                                                    <div class="card-header">Guardian's National ID</div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="guardian_national_id" class="form-label">National ID</label>
                                                                    <input type="text" class="form-control" name="guardian_national_id" pattern="[0-9]{8}" placeholder="National ID Number" value="{{ old('guardian_national_id') }}">
                                                                </div>
                                                                <!-- Validation -->
                                                                <!-- @error('guardian_national_id')
                                                                    <div class="alert alert-danger" role="alert">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror -->
                                                            </div>
                                                        </div>     
                                                    <!-- Guardian's Contact Address -->
                                                    <div class="card-header">Guardian's Contact Address</div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <!-- Email -->
                                                                <div class="col">
                                                                    <label for="guardian_email" class="form-label">Email</label>
                                                                    <input type="email" class="form-control" placeholder="Enter your guardian's email" name="guardian_email" value="{{ old('guardian_email') }}">
                                                                    <!-- Validation -->
                                                                    <!-- @error('guardian_email')
                                                                        <div class="alert alert-danger" role="alert">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror -->
                                                                </div>
                                                                <!-- Phone -->
                                                                <div class="col">
                                                                    <label for="guardian_phone" class="form-label">Phone Number</label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-text">+254</span>
                                                                        <input type="tel" class="form-control" placeholder="7000000**" name="guardian_phone" pattern="[0-9]{9}" value="{{ old('guardian_phone') }}">
                                                                    </div>
                                                                    <!-- Validation -->
                                                                    <!-- @error('guardian_phone')
                                                                        <div class="alert alert-danger" role="alert">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-header">Guardian's Home Address</div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <!-- City/Town -->
                                                                    <div class="col">
                                                                        <label for="guardian_city" class="form-label">City/Town</label>
                                                                        <input type="text" class="form-control" placeholder="Which is your guardian's closest city/town" name="guardian_phone" value="{{ old('guardian_phone') }}">
                                                                        <!-- Validation -->
                                                                        <!-- @error('spouse_city')
                                                                            <div class="alert alert-danger" role="alert">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror -->
                                                                    </div>
                                                                    <!-- P.O BOX -->
                                                                    <div class="col">
                                                                        <label for="guardian_pob" class="form-label">P.O BOX</label>
                                                                        <input type="text" class="form-control" placeholder="Enter your guardian's P.O BOX" name="guardian_pob" value="{{ old('guardian_pob') }}">
                                                                        <!-- Validation -->
                                                                        <!-- @error('guardian_pob')
                                                                            <div class="alert alert-danger" role="alert">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror -->
                                                                    </div>
                                                                </div>
                                                            </div>    
                                                        <!-- Guardian's Occupation    -->
                                                        <div class="card-header">Occupation</div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <label for="guardian_occupation" class="form-label">What is your Guardian's source of income?</label>
                                                                        <textarea class="form-control" name="guardian_occupation" rows="2" placeholder="Please type here" value="{{ old('guardian_occupation') }}"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>    

                                    <br>                
                                    <!-- The buttons -->
                                    <!-- Back -->
                                    <div class="row">
                                        <a href="{{ url('student_details')}}" class="btn btn-outline-secondary btn-block">
                                            Back
                                        </a>
                                    </div>
                                    
                                    <!-- Canceling the uploads -->
                                    <div class="row" style="margin-top: 10px ;">
                                        <a href="{{ url('add_student') }}" class="btn btn-outline-danger btn-block">
                                            Cancel Upload
                                        </a>
                                    </div>
                                    
                                    <!-- Submit -->
                                    <div class="row" style="margin-top: 10px;">
                                        <button class="btn btn-outline-success btn-block">Submit Their Personal Details</button>
                                    </div>

                                </form>

                                
                            </div>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
<!-- End the layouts -->