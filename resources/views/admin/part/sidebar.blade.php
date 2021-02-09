@extends('admin.admin_master')
@section('navbar')
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="{{URL::to('/dashboard')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-cog"></i>
            <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('/addP.java')}}"><i class="fa fa-circle-o"></i> Add Category</a></li>
            <li><a href="{{URL::to('/manage.java')}}"><i class="fa fa-circle-o"></i>All Category</a></li>

          </ul>

        </li>
          
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list"></i>
            <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('/addBlog')}}"><i class="fa fa-circle-o"></i> Add Blog</a></li>
            <li><a href="Categories/add_categories"><i class="fa fa-circle-o"></i> Add Category</a></li>
          </ul>
        </li>
          
        <li class="treeview">
          <a href="#">
            <i class="fa fa-shopping-cart"></i>
            <span>Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Order/pending_orders"><i class="fa fa-circle-o"></i>Pending Orders</a></li>
            <li><a href="Order/delivered_orders"><i class="fa fa-circle-o"></i> Delivered Orders</a></li>
            <li><a href="Order/cancelled_orders"><i class="fa fa-circle-o"></i> Cancelled Orders</a></li>
          </ul>
        </li> 
          
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Users/index"><i class="fa fa-users"></i> Manage Users</a></li>
          </ul>
        </li>    
          
         <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i>
            <span>Messages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Users/messages"><i class="fa fa-envelope"></i>User Messages</a></li>
          </ul>
        </li> 
          
    </section>
  </aside>
  @endsection
