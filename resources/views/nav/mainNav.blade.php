{{-- create the shared navbar --}}
<ul id="dropdown1" class="dropdown-content white">
    <li class="black-text"><a class="blue-text text-darken-4" href="#">Dropdown 1</a></li>
    <li><a class="blue-text text-darken-4" href="#">Dropdown 2</a></li>
    <li class="divider"></li>
    <li><a class="blue-text text-darken-4" href="#">Separated Dropdown</a></li>
</ul>
<ul id="dropdown2" class="dropdown-content white">
    <li><a class="blue-text text-darken-4" href="#">Dropdown 1</a></li>
    <li><a class="blue-text text-darken-4" href="#">Dropdown 2</a></li>
    <li class="divider"></li>
    <li><a class="blue-text text-darken-4" href="#">Separated Dropdown</a></li>
</ul>
<div class="navbar-fixed">
    <nav class="blue darken-4">
        <div class="nav-wrapper">
            <a class="brand-logo" href="/">Home</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#">Single Page</a></li>
                <li><a href="/live">Live Link</a></li>
                <li><a href="/example">Show Examples</a></li>
                <li><a href="/example/create">Add Example</a></li>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
            <ul id="mobile-demo" class="side-nav">
                <li><a href="#">Single Page</a></li>
                <li><a href="/live">Live Link</a></li>
                <li><a href="/example">Show Examples</a></li>
                <li><a href="/example/create">Add Example</a></li>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </div>
    </nav>
</div>