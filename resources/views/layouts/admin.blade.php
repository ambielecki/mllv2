<!DOCTYPE html>
<html lang="en">
@include('header.mainHeader')
<body>
{{-- Flash Message Code --}}
@if(\Session::has('flash_message'))
    <div id="flash_div">
        <div class="container-fluid" id="flash_container">
            <div class="col-sm-6">
                {{\Session::get('flash_message')}}
            </div>
        </div>
    </div>
@endif

{{-- Bootstrap Jumbotron and nav --}}
<div class="jumbotron" id="site_brand">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <img src="/images/logos/littleleaguelogo.jpg" alt="Little League Logo" class="img-responsive center-block">
            </div>
            <div class="col-sm-8 text-center">
                <h4>Welcome to the Home of</h4>
                <h1><a href="/">Malden Little League</a></h1>
            </div>
            <div class="col-sm-2">
                <img src="/images/logos/littleleaguelogo.jpg" alt="Little League Logo" class="img-responsive center-block">
            </div>
        </div>
    </div>
</div>

{{-- Nav --}}
@include('nav.mainNav')

<div class="container">
    <div class="row">
        {{-- Content Area loaded in sub views--}}
        <div class="col s12">
            @yield('content')
        </div>
    </div>
</div>{{-- end main container --}}

{{-- Footer --}}
@include('footer.mainFooter')

{{-- Load jquery and bootstrap js --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
{{-- page specific js --}}
@yield('body')

</body>
</html>
