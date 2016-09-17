@extends('layouts.master')

@section('title')
    {{--  Add title here--}}
    Malden Little League - Add News
@stop

@section('head')
    {{-- Add page specific css--}}
    <script src="//cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
@stop

@section('content')
    {{-- Page Content --}}
    <div class="row">
        <div class="col l6 m9 s12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <form class="col s12" action="/admin/addnews" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="input-field col s6">
                                    <label for="title">Title: </label>
                                    <input type="text" id="title" name="title">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <label for="text">News Text:</label>
                                    <textarea id="text" name="text" class="materialize-textarea"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <input type="checkbox" id="important" name="important">
                                <label for="important">Important:</label>
                            </div>
                            <div class="row">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('body')
    {{-- Page Specific JS --}}
@stop