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
    <!-- The table to display the student_details -->
    <div class="container" style="margin-top: 50px;">
       <div class="row">
        <div class="col-md-12">
            <!-- The header and the add student div -->
            <div class="container">
                <div class="row">
                    <!-- Student' list -->
                    <div class="col-9">
                        <h2>Students' List</h2>
                    </div>
                    <div class="col-3">
                        <div class="card" style="margin-bottom: 25px;">
                            <!-- <div class="card-body"> -->
                                <a href="{{ url('add_student')}}" class="btn btn-success btn-block" role="button"> <!-- The url to ICT adding a new student -->
                                    Add student details
                                </a>
                            <!-- </div> -->
                        </div>
                    </div>    
                </div>
            </div>
            <!-- <div class="row">
            <div class="col-9">
            <h2>Students' details</h2>
            </div>
            <div class="col-3">
                <h2>Add student</h2>
            </div>
            </div>
             -->

             <!-- After deleting a student -->
             
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif
             
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <caption>Details of the students</caption>
                            <table class="table table-hover table-bordered table-striped table-sm">
                                <thead class="thead-dark">
                                    <tr>
                                    <!-- Table columns -->
                                        <th scope="col">#</th>
                                        <th scope="col">Surname</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">DOB</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">National ID</th>
                                        <th scope="col">Nationality</th>
                                        <th scope="col">Religion</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">City/Town</th>
                                        <th scope="col">P.O BOX</th>

                                        <!-- Father -->
                                        <th scope="col">Father</th>
                                        <th scope="col">Father's Surname</th>
                                        <th scope="col">Father's First Name</th>
                                        <th scope="col">Father's Last Name</th>
                                        <th scope="col">Father's National ID Number</th>
                                        <th scope="col">Father's Occupation</th>

                                        <!-- Mother -->
                                        <th scope="col">Mother</th>
                                        <th scope="col">Mother's Surname</th>
                                        <th scope="col">Mother's First Name</th>
                                        <th scope="col">Mother's Last Nname</th>
                                        <th scope="col">Mother's National ID Number</th>
                                        <th scope="col">Mother's Occupation</th>

                                        <!-- Guardian -->
                                        <th scope="col">Guardian's Surname</th>
                                        <th scope="col">Guardian's First Name</th>
                                        <th scope="col">Guardian's Initial/Other Name</th>
                                        <th scope="col">Guardian's National ID Number</th>
                                        <th scope="col">Guardian's Email</th>
                                        <th scope="col">Guardian's Phone Number</th>
                                        <th scope="col">Guardian's City/Town</th>
                                        <th scope="col">Guardian's P.O BOX</th>
                                        <th scope="col">Guardian's Occupation</th>

                                        <!-- Spouse -->
                                        <th scope="col">Marital Status</th>
                                        <th scope="col">Spouse's Surname</th>
                                        <th scope="col">Spouse's First Name</th>
                                        <th scope="col">Spouse's Last Name</th>
                                        <th scope="col">Spouse's Email</th>
                                        <th scope="col">Spouse's Phone Number</th>
                                        <th scope="col">Spouse's City/Town</th>
                                        <th scope="col">Spouse's P.O BOX</th>

                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <!-- Reading the personal details from -->
                                        @foreach ($personal_details as $personal_detail)
                                            <th scope="row">{{ $personal_detail->id }}</th>
                                            <td>{{ $personal_detail->surname }}</td>
                                            <td>{{ $personal_detail->first_name }}</td>
                                            <td>{{ $personal_detail->last_name}}</td>
                                            <td>{{ $personal_detail->date }}</td>
                                            <td>{{ $personal_detail->gender }}</td>
                                            <td>{{ $personal_detail->national_id}}</td>
                                            <td>{{ $personal_detail->nationality }}</td>
                                            <td>{{ $personal_detail->religion }}</td>
                                            <td>{{ $personal_detail->email }}</td>
                                            <td>{{ $personal_detail->phone }}</td>
                                            <td>{{ $personal_detail->city }}</td>
                                            <td>{{ $personal_detail->pob }}</td>
                                        @endforeach

                                        <!-- Father -->
                                        @foreach ($parent_details as $parent_detail)
                                            <td>{{ $parent_detail->father }}</td>
                                            <td>{{ $parent_detail->father_surname }}</td>
                                            <td>{{ $parent_detail->father_first_name }}</td>
                                            <td>{{ $parent_detail->father_last_name }}</td>
                                            <td>{{ $parent_detail->father_national_id }}</td>
                                            <td>{{ $parent_detail->father_occupation }}</td>

                                            <!-- Mother -->
                                            <td>{{ $parent_detail->mother }}</td>
                                            <td>{{ $parent_detail->mother_surname }}</td>
                                            <td>{{ $parent_detail->mother_first_name }}</td>
                                            <td>{{ $parent_detail->mother_last_name }}</td>
                                            <td>{{ $parent_detail->mother_date }}</td>
                                            <td>{{ $parent_detail->mother_occupation }}</td>

                                            <!-- Guardian -->
                                            <td>{{ $parent_detail->guardian_surname }}</td>
                                            <td>{{ $parent_detail->guardian_first_name }}</td>
                                            <td>{{ $parent_detail->guardian_initial_name }}</td>
                                            <td>{{ $parent_detail->guardian_national_id }}</td>
                                            <td>{{ $parent_detail->guardian_email }}</td>
                                            <td>{{ $parent_detail->guardian_phone }}</td>
                                            <td>{{ $parent_detail->guardian_city }}</td>
                                            <td>{{ $parent_detail->guardian_pob }}</td>
                                            <td>{{ $parent_detail->guardian_occupation }}</td>

                                        @endforeach

                                        <!-- Reading the spouse details -->
                                        @foreach ($spouse_details as $spouse_detail)
                                            <td>{{ $spouse_detail->marital_status }}</td>
                                            <td>{{ $spouse_detail->spouse_surname }}</td>
                                            <td>{{ $spouse_detail->spouse_first_name }}</td>
                                            <td>{{ $spouse_detail->spouse_last_name }}</td>
                                            <td>{{ $spouse_detail->spouse_email }}</td>
                                            <td>{{ $spouse_detail->spouse_phone }}</td>
                                            <td>{{ $spouse_detail->spouse_city }}</td>
                                            <td>{{ $spouse_detail->spouse_pob }}</td>

                                        @endforeach
                                        
                                        <!-- The crud actions buttons -->
                                        @foreach ($personal_details as $personal_detail)
                                        <td>
                                        <!-- <a href="{{ url('student_details' . $personal_detail->id)}}" title="View Student">
                                            <button class="btn btn-info btn-sm">View</button>
                                        </a> -->
                                            <!-- View -->
                                            
                                            <a href="{{ url('view_student/' . $personal_detail->id) }}" class="btn btn-outline-info btn-sm">
                                                View
                                            </a>
                                            <!-- Edit -->
                                            <a href="{{ url('edit_student/' . $personal_detail->id) }}" class="btn btn-outline-primary btn-sm" role="button" style="margin-left: 4px;">
                                                Edit
                                            </a>
                                            <!-- Delete -->
                                            <a href="{{ url('delete_student/' . $personal_detail->id) }}" class="btn btn-outline-danger btn-sm" style="margin-left: 4px;">
                                                Delete
                                            </a>
                                        </td>
                                        @endforeach
                                        

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
       </div> 
    </div>
    
</x-app-layout>

<!-- End the layouts -->
