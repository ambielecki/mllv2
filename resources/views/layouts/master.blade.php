<!DOCTYPE html>
<html lang="en">
@include('header.mainHeader')
<body>
    {{-- Flash Message Code --}}
    @if(\Session::has('flash_message'))
        <div id="flash_div">
            <div class="container" id="flash_container">
                <div class="col s6">
                    {{\Session::get('flash_message')}}
                </div>
            </div>
        </div>
    @endif


    {{-- Nav --}}
    @include('nav.mainNav')


        <div class="row">
            {{-- News Area --}}
            <div class="col s12 m3">
                @if(count($news))
                    @foreach($news as $item)
                        <div class="col s12">
                            <div class="card">
                                <div class="card-content">
                                    <span class="card-title">
                                        {!!$item->title!!}
                                    </span>
                                    <p>{!!$item->text!!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                    <span class="card-title">
                                        No News Today!
                                    </span>
                                <p>Check back for more updates.</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            {{-- Content Area loaded in sub views--}}
            <div class="col s12 m9">
                @yield('content')
            </div>
        </div>


    {{-- Footer --}}
    @include('footer.mainFooter')

    {{-- page specific js --}}
    @yield('body')

</body>
</html>
