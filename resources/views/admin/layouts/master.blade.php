@include('admin.layouts.header')
@include('admin.layouts.sidebar')
{{--@include('admin.layouts.content')--}}
<div class = "main-content">
@yield('content')
</div>
@include('admin.layouts.footer')
