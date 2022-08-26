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
                    <form action="{{ url('student_upload_other_institution_details') }}" method="POST">
                         <!-- The cross-site request forgery     -->
                         @csrf
                            {!! csrf_field() !!}
                        <h2 class="card-header" style="margin-top: 10px;">Other Institution/Qualification Details</h2>
                        <br>
                            <div class="card-body">
                                <!-- The table for the different high schools attended -->
                                <table class="table table-striped table-bordered table-hover table-responsive">
                                    <!-- Heading -->
                                    <thead class="thead-light">
                                        <tr>
                                            <th rowspan="2">#</th>
                                            <th rowspan="2">Name</th>
                                            <th rowspan="2">Specialization</th>
                                            <th rowspan="2">Qualifications</th>    
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- First Institution -->
                                        <tr>
                                            <!-- First -->
                                            <td>
                                                1
                                            </td>

                                            <!-- Name -->
                                            <td>
                                                <input type="text" class="form-control" placeholder="Name of your first other institution/qualification" name="first_institution_name" value="{{ old('first_institution_name') }}">
                                            </td>

                                            <!-- Specialization -->
                                            <td>
                                                <input type="text" class="form-control" placeholder="What did you specialize in?" name="first_institution_specialization" value="{{ old('first_institution_specialization') }}">
                                            </td>
                                        
                                            <!-- Qualification -->
                                            <td>
                                                <input type="text" class="form-control" placeholder="What are your qualifications?" name="first_institution_qualification" value="{{ old('first_institution_qualification') }}">
                                            </td>
                                        </tr> 

                                        <!-- Second Institution -->
                                        <tr>
                                            <!-- First -->
                                            <td>
                                                2
                                            </td>

                                            <!-- Name -->
                                            <td>
                                                <input type="text" class="form-control" placeholder="Name of your second other institution/qualification" name="second_institution_name" value="{{ old('second_institution_name') }}">
                                            </td>

                                            <!-- Specialization -->
                                            <td>
                                                <input type="text" class="form-control" placeholder="What did you specialize in?" name="second_institution_specialization" value="{{ old('second_institution_specialization') }}">
                                            </td>
                                        
                                            <!-- Qualification -->
                                            <td>
                                                <input type="text" class="form-control" placeholder="What are your qualifications?" name="second_institution_qualification" value="{{ old('second_institution_qualification') }}">
                                            </td>
                                        </tr> 

                                        <!-- Third Institution -->
                                        <tr>
                                            <!-- Third-->
                                            <td>
                                                3
                                            </td>

                                            <!-- Name -->
                                            <td>
                                                <input type="text" class="form-control" placeholder="Name of your third other institution/qualification" name="third_institution_name" value="{{ old('third_institution_name') }}">
                                            </td>

                                            <!-- Specialization -->
                                            <td>
                                                <input type="text" class="form-control" placeholder="What did you specialize in?" name="third_institution_specialization" value="{{ old('third_institution_specialization') }}">
                                            </td>
                                        
                                            <!-- Qualification -->
                                            <td>
                                                <input type="text" class="form-control" placeholder="What are your qualifications?" name="third_institution_qualification" value="{{ old('third_institution_qualification') }}">
                                            </td>
                                        </tr> 

                                    </tbody>
                                </table>
                            </div>
                        <!-- The submit button     -->
                        <div class="card-body">
                            <div class="col">
                                <div class="row">
                                    <button class="btn btn-outline-success btn-block">Submit Your Other Institution Details or Proceed to the next form</button>
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