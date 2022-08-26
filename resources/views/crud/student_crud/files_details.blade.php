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
                    <form action="{{ url('student_upload_files_details') }}" method="POST" enctype="multipart/form-data">
                         <!-- The cross-site request forgery     -->
                         @csrf
                            {!! csrf_field() !!}
                        <h2 class="card-header" style="margin-top: 10px;">File Uploads Details</h2>
                        <br>
                            <div class="card-header">Please upload your files in the following fields, respectively</div>
                                <div class="card-body">
                                    <!-- Photo -->
                                    <div class="form-group">
                                        <label for="photo" class="form-label">Upload an official passport photo</label>
                                        <input type="file" class="form-control-file form-control" name="photo">
                                        <!-- Validation -->
                                        @error('photo')
                                            <div class="alert alert-danger col" role="alert">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <br>
                                    <!-- Medical examination -->
                                    <div class="form-group">
                                        <label for="medical" class="form-label">Upload your Entrance Medical Examination Document</label>
                                        <input type="file" class="form-control-file form-control" name="medical">
                                        <!-- Validation -->
                                        @error('medical')
                                            <div class="alert alert-danger col" role="alert">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <br>
                                    <!--    Sporting and games -->
                                    <div class="form-group">
                                        <label for="sporting" class="form-label">Upload your Personal Information on Sporting and Games Acitivites Document</label>
                                        <input type="file" class="form-control-file form-control" name="sporting">
                                        <!-- Validation -->
                                        @error('sporting')
                                            <div class="alert alert-danger col" role="alert">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                        <!-- The submit button     -->
                        <div class="card-body">
                            <div class="col">
                                <div class="row">
                                    <button class="btn btn-outline-success btn-block">Submit Your Files</button>
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