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
                    <form action="{{ route('student_upload_games_and_sports_details') }}" method="POST">
                         <!-- The cross-site request forgery     -->
                         @csrf
                            {!! csrf_field() !!}
                        <h2 class="card-header" style="margin-top: 10px;">Games and Sports Details</h2>
                        <br>
                            <div class="card-header">Which games and sports did you participate in?</div>
                                <div class="card-body">
                                    <!-- The checkboxes -->

                                    <!-- Soccer -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="games_and_sports[]" value="soccer">
                                        <label class="form-check-label" for="soccer">Soccer</label>
                                    </div>

                                    <!-- Hockey -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="games_and_sports[]" value="hockey">
                                        <label class="form-check-label" for="hockey">Hockey</label>
                                    </div>

                                    <!-- Basketball -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="games_and_sports[]" value="basketball">
                                        <label class="form-check-label" for="basketball">Basketball</label>
                                    </div>

                                    <!-- Netball -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="games_and_sports[]" value="netball">
                                        <label class="form-check-label" for="netball">Netball</label>
                                    </div>

                                    <!-- Tennis -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="games_and_sports[]" value="tennis">
                                        <label class="form-check-label" for="tennis">Tennis</label>
                                    </div>

                                    <!-- Bad minton -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="games_and_sports[]" value="bad_minton">
                                        <label class="form-check-label" for="bad_minton">Bad Minton</label>
                                    </div>

                                    <!-- Rugby -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="games_and_sports[]" value="rugby">
                                        <label class="form-check-label" for="rugby">Rugby</label>
                                    </div>

                                    <!-- Volleyball -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="games_and_sports[]" value="volleyball">
                                        <label class="form-check-label" for="volleyball">Volleyball</label>
                                    </div>

                                    <!-- Athletics -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="games_and_sports[]" value="athletics">
                                        <label class="form-check-label" for="athletics">Athletics</label>
                                    </div>

                                    <!-- Swimming -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="games_and_sports[]" value="volleyball">
                                        <label class="form-check-label" for="volleyball">Swimming</label>
                                    </div>
                                
                                    <!-- Table Tennis -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="games_and_sports[]" value="table_tennis">
                                        <label class="form-check-label" for="table_tennis">Table Tennis</label>
                                    </div>

                                    <!-- Darts -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="games_and_sports[]" value="darts">
                                        <label class="form-check-label" for="darts">Darts</label>
                                    </div>

                                    <!-- Karate -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="games_and_sports[]" value="karate">
                                        <label class="form-check-label" for="karate">Karate</label>
                                    </div>

                                    <!-- Martial Arts -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="games_and_sports[]" value="martial_arts">
                                        <label class="form-check-label" for="martial_arts">Martial Arts</label>
                                    </div>

                                    <!-- Others -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="games_and_sports[]" value="others">
                                        <label class="form-check-label" for="others">Others</label>
                                    </div>
                                    
                                    <!-- Validation -->
                                    @error('games_and_sports')
                                        <div class="alert alert-danger col" role="alert">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <!-- Representing your school    -->
                                <div class="card-header">Games Participation</div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="games_representation" class="form-label">If you represented your school in games, please give the details in the space below...</label>
                                                    <textarea class="form-control" name="games_representation" rows="2" placeholder="Please type here" value="{{ old('games_representation') }}"></textarea>
                                                </div>
                                            </div>
                                        </div>
                        <!-- The submit button     -->
                        <div class="card-body">
                            <div class="col">
                                <div class="row">
                                    <button class="btn btn-outline-success btn-block">Submit Your Games and Sports Details</button>
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