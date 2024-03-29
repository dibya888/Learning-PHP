@extends('layouts.admin_app')
@section('app_content')
    <!-- Navbar -->
    @includeIf('backend.includes.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @includeIf('backend.includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">

                @yield('master_content')

            </div><!-- /.container-fluid -->
        </section>


    </div>
    <!-- /.content-wrapper -->

    @includeIf('backend.includes.footer')
@endsection
