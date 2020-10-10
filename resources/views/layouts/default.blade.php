<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include('layouts.head')
</head>
<body>
<!-- begin #page-loader -->
<div id="page-loader" class="fade in"><span class="spinner"></span></div>

<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
    <!-- begin #header -->
@include('layouts.header')

@include('layouts.sidebar')
<!-- end #sidebar -->
@yield('content')

<!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i
                class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
</div>
<!-- end page container -->

{{--script--}}
@include('layouts.scripts')

</body>
</html>
