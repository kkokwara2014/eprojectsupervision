
@include('admin.layout.statboardcontainer')
    <!-- Small boxes (Stat box) -->
    <div class="row">
      @if (Auth::user()->role->id==1)
      <div class="col-lg-2 col-md-2">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
          <h3>{{$allContacts}}</h3>

            <p>Contacts</p>
          </div>
          <div class="icon">
            <i class="fa fa-envelope"></i>
          </div>
          
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-2 col-md-2">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
          <h3>{{$allShops}}</h3>

            <p>Shops</p>
          </div>
          <div class="icon">
            <i class="fa fa-university"></i>
          </div>
         
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-2 col-md-2">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
          <h3>{{$allSubscriptions}}</h3>

            <p>Subscriptions</p>
          </div>
          <div class="icon">
            <i class="fa fa-money"></i>
          </div>
         
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-2 col-md-2">
        <!-- small box -->
        <div class="small-box bg-blue-active">
          <div class="inner">
            <h3>{{$allShopOwners}}</h3>

            <p>Shop Owners</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
         
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-2 col-md-2">
        <!-- small box -->
        <div class="small-box bg-fuchsia-active">
          <div class="inner">
            <h3>{{$allProducts}}</h3>

            <p>Products</p>
          </div>
          <div class="icon">
            <i class="fa fa-lemon-o"></i>
          </div>
         
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-2 col-md-2">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>{{$allAdmins}}</h3>

            <p>Admins</p>
          </div>
          <div class="icon">
            <i class="fa fa-user-plus"></i>
          </div>
         
        </div>
      </div>
      <!-- ./col -->
          
      @endif
    </div>
    <!-- /.row -->