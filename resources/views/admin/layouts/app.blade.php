@include('admin.layouts.header')

@include('admin.layouts.navbar')

@include('admin.layouts.aside')

<div class="content-wrapper">
    <div class = "content-fluid">
        @yield('content')
    </div>
</div>

@include('admin.layouts.footer')