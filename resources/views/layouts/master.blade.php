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


    {{-- Nav --}}
    @include('nav.mainNav')

    <div class="container">
        <div class="row">
            {{-- News Area --}}
            <div class="col s3">
                @if(isset($data['news']) && count($data['news']))
                    @foreach($data['news'] as $item)
                        <div class="row">
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
                        </div>
                    @endforeach
                @else
                    <div class="row">
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
                    </div>
                @endif
            </div>
            {{-- Content Area loaded in sub views--}}
            <div class="col s9">
                @yield('content')
            </div>
        </div>
    </div>{{-- end main container --}}

    {{-- Footer --}}
    @include('footer.mainFooter')

    {{-- page specific js --}}
    @yield('body')

</body>
</html>
