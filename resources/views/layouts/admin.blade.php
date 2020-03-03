<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="{{asset('css/libs.css')}}" rel="stylesheet" />
    <!-- <link href="{{asset('css/app.css')}}" rel="stylesheet" /> -->
    <!-- /global stylesheets -->

    @yield('styles')
</head>

<body>
    <!-- Main navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="/admin">CodeHacking</a>
        </div>


        <ul class="nav navbar-nav navbar-right" role="menu">
            <li>
                <a href="{{ url('/logout') }}">
                    <i class="fa fa-btn fa-sign-out"></i>Logout</a>
            </li>
        </ul>


        <!-- <ul class="nav navbar-nav navbar-right">

            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="" alt="">
                    <span>{{ ucwords(Auth::user()->name)}}</span>
                    <i class="caret"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <a href="#">
                            <i class="icon-switch2"></i> Logout</a>
                    </li>
                </ul>

            </li>
        </ul> -->
    </div>
    </div>
    <!-- /main navbar -->

    <!-- Page container -->
    <div class="page-container">
        <!-- Page content -->
        <div class="page-content">
            <!-- Main sidebar -->
            <div class="sidebar sidebar-main">
                <div class="sidebar-content">

                    <!-- User menu -->
                    <div class="sidebar-user">
                        <div class="category-content">
                            <div class="media">
                                <a href="#" class="media-left">
                                    <img src="{{asset('images/placeholder.jpg')}}" class="img-circle img-sm" alt="">
                                </a>
                                <div class="media-body">
                                    <span class="media-heading text-semibold">{{ ucwords(Auth::user()->name)}}</span>
                                    <span>{{ Auth::user()->email}}</span>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <!-- /user menu -->

                    <!-- Main navigation -->
                    <div class="sidebar-category sidebar-category-visible ">
                        <div class="category-content no-padding">
                            <ul class="navigation navigation-main navigation-accordion">
                                <!-- Main -->
                                <li>
                                    <a href="/admin">
                                        <i class="icon-home4"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-stack2"></i>
                                        <span>Users</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{route('admin.users.index')}}">All Users</a>
                                        </li>
                                        <li>
                                            <a href="{{route('admin.users.create')}}">Create User</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-stack2"></i>
                                        <span>Posts</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{route('admin.posts.index')}}">All Posts</a>
                                        </li>
                                        <li>
                                            <a href="{{route('admin.posts.create')}}">Create Post</a>
                                        </li>
                                        <li>
                                            <a href=" {{route('admin.comments.index')}}">All Comments</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-stack2"></i>
                                        <span>Categories</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{route('admin.categories.index')}}">Categories</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-stack2"></i>
                                        <span>Media</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{route('admin.media.index')}}">All Media</a>
                                        </li>
                                        <li>
                                            <a href="{{route('admin.media.create')}}">Upload Media</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- /layout -->
                            </ul>
                        </div>
                    </div>
                    <!-- /main navigation -->

                </div>
            </div>
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Page header -->
                <div class="page-header page-header-default">
                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <li>
                                <a href="/admin">
                                    <i class="icon-home2 position-left"></i>Home</a>
                            </li>
                            <li class="active">@yield('pagename')</li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content">

                    <!-- Main charts -->
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="panel panel-flat">
                                <div class="container-fluid">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /main charts -->
                    <!-- Footer -->
                    <br>
                    <br>
                    <br>
                    <div class="footer text-muted">
                        <p>Copyright &copy; CodeHacking {{\Carbon\Carbon::now()->year}}</p>
                    </div>
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->
    <script href="{{asset('js/libs.js')}}" type="text/javacript"></script>
    @yield('scripts')
</body>

</html>