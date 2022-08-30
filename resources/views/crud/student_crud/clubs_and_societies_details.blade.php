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
                    <form action="{{ route('student_upload_clubs_and_societies_details') }}" method="POST">
                         <!-- The cross-site request forgery     -->
                         @csrf
                            {!! csrf_field() !!}
                        <h2 class="card-header" style="margin-top: 10px;">Clubs and Societies Details</h2>
                        <br>
                                <!-- Clubs and societies    -->
                                <div class="card-header">Which clubs and societies are you interested in?</div>
                                        <div class="card-body">
                                            <!-- First_Club -->
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="first_club" class="form-label"> (a) First Choice</label>
                                                        <textarea class="form-control" name="first_club" placeholder="Please write the details of your first club and society choice" rows="1" value="{{ old('first_club') }}"></textarea>

                                                        <!-- Validation -->
                                                        @error('first_club')
                                                            <div class="alert alert-danger col" role="alert">
                                                                {{$message}}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            
                                            <!-- Second_Club -->
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="second_club" class="form-label"> (b) Second Choice</label>
                                                        <textarea class="form-control" name="second_club" placeholder="Please write the details of your second club and society choice" rows="1" value="{{ old('second_club') }}"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>

                                            <!-- Thirs_Club -->
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="third_club" class="form-label"> (b) Third Choice</label>
                                                        <textarea class="form-control" name="third_club" placeholder="Please write the details of your third club and society choice" rows="1" value="{{ old('third_club') }}"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                        <!-- The submit button     -->
                        <div class="card-body">
                            <div class="col">
                                <div class="row">
                                    <button class="btn btn-outline-success btn-block">Submit Your Clubs and Societies details</button>
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