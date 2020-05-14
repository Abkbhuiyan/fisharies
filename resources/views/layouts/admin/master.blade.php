<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.admin._head')
</head>
<body class="app sidebar-mini">
<!-- Navbar-->
<header class="app-header"><a class="app-header__logo" href="{{route('admin.dashboard')}}">FM</a>
  @include('layouts.admin._header')
</header>
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
   @include('layouts.admin._leftNav')
</aside>
<main class="app-content">
   @yield('content')
</main>
@include('layouts.admin._footer')
@include('layouts.admin._scripts')
</body>

</html>

