<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{url('user_images',$user->userimage)}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{Auth::user()->lastname.' '.Auth::user()->firstname}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">

    <li>
        <a href="{{route('dashboard.index')}}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            {{-- <i class="fa fa-angle-left pull-right"></i> --}}
          </span>
        </a>

      </li>

      @if (Auth::user()->role->id==1)
      <li><a href="{{ route('category.index') }}"><i class="fa fa-th"></i> Category</a></li>
      @endif
      @if (Auth::user()->role->id==1)
      <li><a href="{{ route('contact.index') }}"><i class="fa fa-envelope"></i> Contacts</a></li>
      @endif

      <li><a href="{{route('user.profile')}}"><i class="fa fa-picture-o"></i> My Profile Photo</a></li>

      <li><a href="{{ route('shop.index') }}"><i class="fa fa-university"></i> Shop</a></li>
      <li><a href="{{ route('product.index') }}"><i class="fa fa-lemon-o"></i> Product</a></li>

      <li><a href="{{ route('subscription.index') }}"><i class="fa fa-money"></i> Subscription</a></li>

      @if (Auth::user()->role->id==1)
      <li><a href="{{ route('shopowner.all')}}"><i class="fa fa-users"></i> Shop Owners</a></li>
      <li><a href="{{ route('admins.all')}}"><i class="fa fa-user-plus"></i> Admins</a></li>
      @endif
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>