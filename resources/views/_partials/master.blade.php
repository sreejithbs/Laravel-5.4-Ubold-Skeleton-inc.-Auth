<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Tacebcapital | Admin Dashboard">
        <meta name="author" content="sreejith@spericorn.com">
        <title> @yield('page_title') </title>

        @include('_partials.styles')
        @yield('page_styles')
    </head>

    <body class="fixed-left">
        <div id="wrapper">

            <!-- HEADER -->
            @include('_partials.header')

            <!-- Sidebar-->
            @include('_partials.sidebar')

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <!-- Passing BASE URL to AJAX -->
                        <input id="base_url" type="hidden" value="{{ URL::to('/') }}">

                        @if($errors->any())
                           <ul class="alert alert-danger">
                              @foreach($errors->all() as $error)
                                 <li style="list-style: none;"> {{ $error }} </li>
                              @endforeach
                           </ul>
                        @endif
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif

                        @yield('content')

                    </div>
                    <!-- container -->
                </div>
                <!-- content -->

                <!-- FOOTER -->
                @include('_partials.footer')

            </div>
        </div>

        <!-- Scripts -->
        @include('_partials.scripts')
        @yield('page_scripts')

        @include('_partials.flash_msgs')

    </body>
</html>