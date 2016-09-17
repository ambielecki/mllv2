{{-- Main Navbar Dropdowns --}}
<ul id="dropdown1" class="dropdown-content white">
    <li><a class="blue-text text-darken-4" href="/admin">Admin Panel</a></li>
    <li><a class="blue-text text-darken-4" href="/settings">Settings</a></li>
    <li class="divider"></li>
    <li class="black-text"><a class="blue-text text-darken-4" href="/logout">Logout</a></li>
</ul>
<ul id="dropdown2" class="dropdown-content white">
    <li><a class="blue-text text-darken-4" href="/login">Login</a></li>
    <li><a class="blue-text text-darken-4" href="/register">Register</a></li>
</ul>
<ul id="dropdown3" class="dropdown-content white">
    @foreach($leagues as $league)
        <li><a class="blue-text text-darken-4" href="/leagues/{{$league->address}}">{{$league->name}}</a></li>
    @endforeach
</ul>
{{-- Mobile Dropdowns --}}
<ul id="dropdown1-mobile" class="dropdown-content white">
    <li><a class="blue-text text-darken-4" href="#">Dropdown 1</a></li>
    <li><a class="blue-text text-darken-4" href="#">Dropdown 2</a></li>
    <li class="divider"></li>
    <li><a class="blue-text text-darken-4" href="#">Separated Dropdown</a></li>
</ul>
<ul id="dropdown2-mobile" class="dropdown-content white">
    <li><a class="blue-text text-darken-4" href="/login">Login</a></li>
    <li><a class="blue-text text-darken-4" href="/register">Register</a></li>
</ul>
<ul id="dropdown3-mobile" class="dropdown-content white">
    @foreach($leagues as $league)
        <li><a class="blue-text text-darken-4" href="/leagues/{{$league->address}}">{{$league->name}}</a></li>
    @endforeach
</ul>
{{-- Navbar Layout --}}
<div class="navbar-fixed">
    <nav class="blue darken-4">
        <div class="nav-wrapper">
            <a class="brand-logo" href="/">Home</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            {{-- Full Page Menu --}}
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/registration">Register for 2016</a></li>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown3">Teams<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="/live">Live Link</a></li>
                <li><a href="/example">Show Examples</a></li>
                <li><a href="/example/create">Add Example</a></li>
                @if(Auth::user())
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Hello {{Auth::user()->first_name}}<i class="material-icons right">arrow_drop_down</i></a></li>
                @else
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Login / Register<i class="material-icons right">arrow_drop_down</i></a></li>
                @endif
            </ul>
            {{-- Mobile Menu --}}
            <ul id="mobile-demo" class="side-nav">
                <li><a href="/registration">Register for 2016</a></li>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown3-mobile">Teams<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="/live">Live Link</a></li>
                <li><a href="/example">Show Examples</a></li>
                <li><a href="/example/create">Add Example</a></li>
                @if(Auth::user())
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1-mobile">Hello {{Auth::user()->first_name}}<i class="material-icons right">arrow_drop_down</i></a></li>
                @else
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown2-mobile">Login / Register<i class="material-icons right">arrow_drop_down</i></a></li>
                @endif
            </ul>
        </div>
    </nav>
</div>