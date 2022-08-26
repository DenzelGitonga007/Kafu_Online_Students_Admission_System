<!-- A student to view their personal details after submitting -->

<!-- Call the layouts -->
@extends('assets.layouts')
@section('content')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Dashboard') }}
        </h2>
    </x-slot>
    <!-- The body -->
    <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered table-striped table-sm">
                                <caption>Details of the students</caption>
                                <thead class="thead-dark">
                                    <tr>
                                    <!-- Table columns -->
                                        <th scope="col">#</th>
                                        <th scope="col">Surname</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                   @foreach ($personal_details as $personal_detail)
                                    <tr>
                                        <th scope="row">{{ $personal_detail->id }}</th>
                                        <!-- <th scope="row">{{ $loop->iteration }}</th> -->
                                        <td>{{ $personal_detail->surname }}</td>
                                        <td>{{ $personal_detail->first_name }}</td>
                                        <td>{{ $personal_detail->last_name}}</td>
                                        <!-- The crud actions buttons -->
                                        <td>
                                        <!-- <a href="{{ url('student_details' . $personal_detail->id)}}" title="View Student">
                                            <button class="btn btn-info btn-sm">View</button>
                                        </a> -->
                                            <!-- View -->
                                            <a href="" class="btn btn-outline-info btn-sm">
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
                                        

                                    </tr>

                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
</x-app-layout>
<!-- End layouts -->