@extends('layouts.master')

@section('title')
    {{--  Add title here--}}
    Malden Little League - Register
@stop

@section('head')
    {{-- Add page specific css--}}
@stop

@section('content')
    {{-- Page Content --}}
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">
                        On-Line Registration
                    </span>
                    <p>
                        Online registration is closed for the 2016 season. Please contact us at <a href="mailto:maldenllbaseball@gmail.com">maldenllbaseball@gmail.com</a> if you have any questions.
                    </p>
                    <p>
                        After registering, please complete the forms listed on the bottom of the page and email to <a href="mailto:maldenllbaseball@gmail.com">maldenllbaseball@gmail.com</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">
                        On-Site Registration Dates
                    </span>
                    <table class="striped">
                        <thead>
                            <tr class="textarea">
                                <th>Date</th>
                                <th>Location</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>Saturday, February 20</td>
                            <td><a href="https://www.google.com/maps/place/Salemwood+Elementary+School/@42.4316,-71.0502999,15z/data=!4m2!3m1!1s0x0:0xd3bebf3772b7473f" target="_blank">Salemwood School</a></td>
                            <td>2:30 PM - 4 PM</td>
                        </tr>
                        <tr>
                            <td>Saturday, February 27</td>
                            <td><a href="https://www.google.com/maps/place/Salemwood+Elementary+School/@42.4316,-71.0502999,15z/data=!4m2!3m1!1s0x0:0xd3bebf3772b7473f" target="_blank">Salemwood School</a></td>
                            <td>2:30 PM - 4 PM</td>
                        </tr>
                        <tr>
                            <td>Saturday, March 5</td>
                            <td><a href="https://www.google.com/maps/place/Salemwood+Elementary+School/@42.4316,-71.0502999,15z/data=!4m2!3m1!1s0x0:0xd3bebf3772b7473f" target="_blank">Salemwood School</a></td>
                            <td>2:30 PM - 4 PM</td>
                        </tr>
                        <tr>
                            <td>Tuesday, March 8</td>
                            <td><a href="https://www.google.com/maps/place/Linden+School/@42.433746,-71.0347871,15z/data=!4m2!3m1!1s0x0:0x7b2a9b4ec0b82f66" target="_blank">Linden School - Front Foyer</a></td>
                            <td>6 PM - 8 PM</td>
                        </tr>
                        <tr>
                            <td>Saturday, March 12</td>
                            <td><a href="https://www.google.com/maps/place/Ferryway+School/@42.4214157,-71.0595501,15z/data=!4m2!3m1!1s0x0:0xfb9af619e73c6887" target="_blank">Ferryway School - Front Foyer</a></td>
                            <td>1 PM - 3 PM</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="card blue darken-4">
                <div class="card-content white-text">
                    <span class="card-title">
                        2016 Little Leage Ages
                    </span>
                    <form>
                        <div class="row">
                            <div class="col s12">
                                Please enter player's birthday:
                            </div>
                            <div class="input-field col s12">
                                <select name="month" id="month">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="01">Jan</option>
                                    <option value="02">Feb</option>
                                    <option value="03">Mar</option>
                                    <option value="04">Apr</option>
                                    <option value="05">May</option>
                                    <option value="06">Jun</option>
                                    <option value="07">Jul</option>
                                    <option value="08">Aug</option>
                                    <option value="09">Sep</option>
                                    <option value="10">Oct</option>
                                    <option value="11">Nov</option>
                                    <option value="12">Dec</option>
                                </select>
                                <label for="month">Month:</label>
                            </div>
                            <div class="input-field col s12">
                                <label for="day">Day:</label>
                                <input type="text" id="day" name="day">
                            </div>
                            <div class="row">
                                <button class="btn waves-effect waves-light white black-text" type="submit" name="action">Submit<i class="material-icons right">send</i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>{{--end row--}}
    <div class="row">
        <div class="col s12 m6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">
                        Tryouts For Ages 9-12 Day 1
                    </span>
                    <table class="striped">
                        <tr>
                            <td colspan="2" class="textarea">Saturday, March 19 from 12PM - 4PM at
                                <a href="https://www.google.com/maps/place/Salemwood+Elementary+School/@42.4316,-71.0502999,15z/data=!4m2!3m1!1s0x0:0xd3bebf3772b7473f" target="_blank">
                                    Salemwood School Gym</a></td>
                        </tr>
                        <tr>
                            <td>Age Group</td>
                            <td>Time</td>
                        </tr>
                        <tr>
                            <td>9 Year Olds</td>
                            <td>12:00 PM</td>
                        </tr>
                        <tr>
                            <td>10 Year Olds</td>
                            <td>12:45 PM</td>
                        </tr>
                        <tr>
                            <td>11 Year Olds</td>
                            <td>1:45 PM</td>
                        </tr>
                        <tr>
                            <td>12 Year Olds</td>
                            <td>2:45 PM</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop

@section('body')
    {{-- Page Specific JS --}}
    <script src="/js/register.js"></script>
@stop