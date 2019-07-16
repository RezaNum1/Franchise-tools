<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.includes.head')
</head>
<body>
<div class="container-scroller">
    @include('backend.includes.navbar')
    <div class="container-fluid page-body-wrapper">
        @include('backend.includes.navbar-side')
        <div class="main-panel">
            @yield('content')
            @include('backend.includes.footer')
        </div>
    </div>
</div>
@include('backend.includes.scripts')
</body>
</html>
