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
        <!-- The high_school details -->
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <!-- The form itself -->
                    <form action="{{ url('student_upload_other_details') }}" method="POST">
                         <!-- The cross-site request forgery     -->
                         @csrf
                            {!! csrf_field() !!}
                        <h2 class="card-header" style="margin-top: 10px;">Other Details</h2>
                        <br>
                            <!-- Religion      -->
                            <div class="card-header">Do you suffer from any impairments?</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <!-- No -->
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="physical_impairment" value="No" checked>
                                                <label for="no" class="form-check-label">No</label>
                                            </div>
                                            <!-- Yes -->
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="physical_impairment" value="Yes">
                                                <label for="no" class="form-check-label">Yes</label>
                                            </div>
                                            <!-- Others -->
                                        </div>
                                            <!-- Validation -->
                                        @error('physical_impairment')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div> 
                                <!-- Physical Impairment Details    -->
                                <div class="card-header">Which clubs and societies are you interested in?</div>
                                        <div class="card-body">
                                            <!-- Physical Impairments-->
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="first_club" class="form-label">Physical Impairment Details</label>
                                                        <textarea class="form-control" name="physical_impairment_details" placeholder="Please give details on the physical impairments if 'Yes', or type 'N/A' " rows="2" value="{{ old('physical_impairment_details') }}"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                <!-- Other Details    -->
                                <div class="card-header">Any Other Information</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="other_details" class="form-label">Other Details</label>
                                                    <textarea class="form-control" name="other_information" placeholder="Please give any information you think is useful for you to communicate to the University" rows="3" value="{{ old('other_information') }}"></textarea>
                                                    
                                                    <!-- Validation -->
                                                    @error('other_information')
                                                        <div class="alert alert-danger col" role="alert">
                                                            {{$message}}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>        
                        <!-- The submit button  -->
                        <div class="card-body">
                            <div class="col">
                                <div class="row">
                                    <button class="btn btn-outline-success btn-block">Submit Any Other Information</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>   
<!-- End layouts -->