@extends('layouts.base')
@section('base.content')
    <!-- admin-page-area -->
    <div class='wrapper'>
            {{-- include naviagtion --}}
            @include('layouts.partials.navigation')
            <!-- main-content-area -->
            <div class="main-content">
                @include('layouts.partials.header')
                <div class="content">
                    {{-- all content goes to here --}}
                    @yield('content')
                </div>
            </div>
    </div>
    {{-- include footer --}}
    @include('layouts.partials.footer')










@endsection