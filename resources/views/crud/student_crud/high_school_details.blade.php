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
                    <form action="{{ route('high_school_details.store') }}" method="POST">
                         <!-- The cross-site request forgery     -->
                         @csrf
                            {!! csrf_field() !!}
                        <h2 class="card-header" style="margin-top: 10px;">High School/Secondary School Details</h2>
                        <br>
                            <div class="card-body">
                                <!-- The table for the different high schools attended -->
                                <table class="table table-striped table-bordered table-hover table-responsive">
                                    <!-- Heading -->
                                    <tr>
                                        <th rowspan="2">#</th>
                                        <th rowspan="2">Name</th>
                                        <th rowspan="2">Address</th>
                                        <th rowspan="2">Town</th>
                                        <th colspan="2">Date</th>
                                        
                                    </tr>
                                    <!-- Splitting the Date into "From" and "To" -->
                                    <tr>
                                        <td>From</td>
                                        <td>To</td>
                                    </tr>
                                    <!-- First High school -->
                                    <tr>
                                        <!-- First -->
                                        <td>
                                            1
                                        </td>

                                        <!-- Name -->
                                        <td>
                                            <input type="text" class="form-control" placeholder="Name of your first high school/secondary school" name="first_high_school_name" value="{{ old('first_high_school_name') }}">
                                            <!-- Validation -->
                                            @error('first_high_school_name')
                                                <div class="alert alert-danger col" role="alert">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </td>

                                        <!-- Address -->
                                        <td>
                                            <input type="text" class="form-control" placeholder="Address of your first high school/secondary school" name="first_high_school_address" value="{{ old('first_high_school_address') }}">
                                            <!-- Validation -->
                                            @error('first_high_school_address')
                                                <div class="alert alert-danger col" role="alert">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </td>
                                    
                                        <!-- Town -->
                                        <td>
                                            <input type="text" class="form-control" placeholder="The town of your first high school/secondary school" name="first_high_school_town" value="{{ old('first_high_school_town') }}">
                                            <!-- Validation -->
                                            @error('first_high_school_town')
                                                <div class="alert alert-danger col" role="alert">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </td>

                                        <!-- From -->
                                        <td>
                                           <input type="date" class="form-control" name="first_high_school_from_date" max="2018-01-01" value="{{ old('first_high_school_from_date') }}">
                                           <!-- Validation -->
                                           @error('first_high_school_from_date')
                                                <div class="alert alert-danger col" role="alert">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </td>

                                        <!-- To -->
                                        <td>
                                            <input type="date" class="form-control" name="first_high_school_to_date" max="2022-04-01" value="{{ old('first_high_school_to_date') }}">
                                            <!-- Validation -->
                                            @error('first_high_school_to_date')
                                                <div class="alert alert-danger col" role="alert">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </td>
                                    </tr> 

                                    <!-- Second High school -->
                                    <tr>
                                        <!-- Second -->
                                        <td>
                                            2
                                        </td>

                                        <!-- Name -->
                                        <td>
                                            <input type="text" class="form-control" placeholder="Name of your second high school/secondary school" name="second_high_school_name" value="{{ old('second_high_school_name') }}">
                                        </td>

                                        <!-- Address -->
                                        <td>
                                            <input type="text" class="form-control" placeholder="Address of your second high school/secondary school" name="second_high_school_address" value="{{ old('second_high_school_address') }}">
                                        </td>

                                        <!-- Town -->
                                        <td>
                                            <input type="text" class="form-control" placeholder="The town of your second high school/secondary school" name="second_high_school_town" value="{{ old('second_high_school_town') }}">
                                        </td>

                                        <!-- From -->
                                        <td>
                                           <input type="date" class="form-control" name="second_high_school_from_date" max="2018-01-01" value="{{ old('second_high_school_from_date') }}">
                                        </td>

                                        <!-- To -->
                                        <td>
                                            <input type="date" class="form-control" name="second_high_school_to_date" max="2022-04-01" value="{{ old('second_high_school_to_date') }}">
                                        </td>
                                    </tr>

                                    <!-- Third High school -->
                                    <tr>
                                        <!-- Third -->
                                        <td>
                                            3
                                        </td>

                                        <!-- Name -->
                                        <td>
                                            <input type="text" class="form-control" placeholder="Name of your third high school/secondary school" name="third_high_school_name" value="{{ old('third_high_school_name') }}">
                                        </td>

                                        <!-- Address -->
                                        <td>
                                            <input type="text" class="form-control" placeholder="Address of your third high school/secondary school" name="third_high_school_address" value="{{ old('third_high_school_address') }}">
                                        </td>

                                        <!-- Town -->
                                        <td>
                                            <input type="text" class="form-control" placeholder="The town of your third high school/secondary school" name="third_high_school_town" value="{{ old('third_high_school_town') }}">
                                        </td>

                                        <!-- From -->
                                        <td>
                                           <input type="date" class="form-control" name="third_high_school_from_date" max="2018-01-01" value="{{ old('third_high_school_from_date') }}">
                                        </td>

                                        <!-- To -->
                                        <td>
                                            <input type="date" class="form-control" name="third_high_school_to_date" max="2022-04-01" value="{{ old('third_high_school_to_date') }}">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        <!-- The submit button     -->
                        <div class="card-body">
                            <div class="col">
                                <div class="row">
                                    <button class="btn btn-outline-success btn-block">Submit Your High School/Secondary School Details</button>
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