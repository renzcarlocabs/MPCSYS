<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CIC MPCSYS</title>
		{!! HTML::script('jquery/jquery-1.11.2.min.js');!!}
		{!! HTML::style('bootstrap/css/bootstrap.min.css');!!}
		{!! HTML::style('css/font-awesome/font-awesome.min.css');!!}
        {!! HTML::style('css/sb-admin.css');!!}
        {!! HTML::style('css/dataTables.bootstrap.css');!!}
        {!! HTML::style('datatables/media/css/jquery.dataTables.min.css');!!}
        {!! HTML::style('datatables/media/css/jquery.dataTables_themeroller.css');!!}
        {!! HTML::style('css/sb-admin.css');!!}
        {!! HTML::script('bootstrap/js/bootstrap.min.js');!!}
        {!! HTML::style('css/styles.css');!!}
        {!! HTML::script('momentjs/moment.js');!!}
        {!! HTML::script('datatables/media/js/jquery.dataTables.min.js');!!}
        {!! HTML::style('datatablesresponsive/css/dataTables.responsive.css');!!}
        {!! HTML::script('datatablesresponsive/js/dataTables.responsive.min.js');!!}
    </head>
	<body>

    <div id="wrapper">
    <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/home">CIC MPCSYS</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::user()->name}} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="/user/profile"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="/settings"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="/auth/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    <li class = "{{ Route::currentRouteName() == 'home.index' ? 'active' : '' }}">
                        <a href="/home"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                      <li class="{{ Route::currentRouteName() == 'view.viewusers' ? 'active' : '' }}">
                        <a href="javascript:;" data-toggle="collapse" data-target="#view"><i class="fa fa-fw fa-table"></i> View <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="view" class="collapse in">
                            <li class="{{ Route::currentRouteName() == 'view.viewusers' ? 'active' : '' }}">
                                <a href="/view/users"><i class="fa fa-users"></i> Users</a>
                            </li>
                            <li class="{{ Route::currentRouteName() == 'auth.approvedloans' ? 'active' : '' }}">
                                <a href="/view/users"><i class="fa fa-thumbs-up"></i> Approved Loans</a>
                            </li>
                             <li class="{{ Route::currentRouteName() == 'auth.rejectloans' ? 'active' : '' }}">
                                <a href="/view/users"><i class="fa fa-thumbs-down"></i> Rejected Loans</a>
                            </li>
                            <li class="{{ Route::currentRouteName() == 'auth.usershares' ? 'active' : '' }}">
                                <a href="/view/users"><i class="fa fa-bar-chart"></i> User Shares</a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'auth.addform' ? 'active' : '' }}">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw  fa-file"></i> Forms <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse in">
                            <li class="{{ Route::currentRouteName() == 'auth.addform' ? 'active' : '' }}">
                                <a href="/adduser"><i class="fa fa-user-plus"></i> Add User</a>
                            </li>
                            <li class="{{ Route::currentRouteName() == 'auth.applyloan' ? 'active' : '' }}">
                                <a href="/adduser"><i class="fa fa-bank"></i> Apply User Loan</a>
                            </li>
                        </ul>
                    </li>
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

       @yield('section')

    </div>
    <!-- /#wrapper -->

    @yield('scripts')
</body>
</html>