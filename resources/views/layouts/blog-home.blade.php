@include('includes.posts.header')

<!-- Navigation -->
@include('includes.navigation.front_nav')

<!-- Page Content -->
<br><br>

@include('includes.flash_message')
<br>
@yield('content')

<!-- Blog Sidebar Widgets Column -->

<!-- /.row -->
<br><br>
<br>
@include('includes.posts.footer')