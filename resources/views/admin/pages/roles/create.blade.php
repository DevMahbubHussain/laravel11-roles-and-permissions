@extends('admin.layouts.master')
@section('styles')
@endsection
@section('admin-content')
    @include('admin.layouts.partials.header-top')
    <!-- header area end -->
    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Create Roles</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li><span>Create Roles</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right">
                    <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}<i
                            class="fa fa-angle-down"></i></h4>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a onclick="event.preventDefault(); this.closest('form').submit();" class="dropdown-item"
                                href="{{ route('logout') }}">Log
                                Out</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->
    <div class="main-content-inner">
        <div class="row">
            <!-- data table start -->
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Create Roles</h4>
                        @include('admin.layouts.partials.messages')
                        <!-- basic form start -->
                        <div class="col-12 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <form method="post" action="{{ route('admin.roles.store') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Role Name</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                aria-describedby="nameHelp" placeholder="Enter role name">
                                        </div>
                                        <div class="form-group">
                                            <label for="permissions">Permissions</label>
                                            @foreach ($permissions as $permission)
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" name="permissions[]"
                                                        id="checkPermission{{ $permission->id }}"
                                                        value="{{ $permission->name }}">
                                                    <label class="form-check-label"
                                                        for="checkPermission{{ $permission->id }}">{{ $permission->name }}</label>
                                                </div>
                                            @endforeach

                                        </div>

                                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Create Role</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- basic form end -->
                    </div>
                </div>
            </div>
            <!-- data table end -->
        </div>
    </div>
    </div>
@endsection
@section('scripts')
@endsection
