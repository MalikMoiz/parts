<div class="wrapper">
    <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
          </ul>
      <!-- Right navbar links -->   
        </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <div class="sidebar"> 
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @if((session()->get('logininfo.Type'))=="Admin" || (session()->get('logininfo.Type'))=="User" || (session()->get('logininfo.Type'))=="Web")
                <li class="nav-item">
                  <a href="{{url('/product')}}" class="nav-link">
                    <i class="fab fa-product-hunt"></i>
                    <p>
                      Product Details
                    </p>
                  </a>
                </li>
                @endif
                @if((session()->get('logininfo.Type'))=="Admin" || (session()->get('logininfo.Type'))=="User")
                <li class="nav-item">
                  <a href="{{url('/recovery')}}" class="nav-link">
                    <i class="fa fa-user"></i>
                    <p>
                     Today's Recoveries
                    </p>
                  </a>
                </li>
                @endif
      
                <li class="nav-item">
                  <a href="{{url('/Ledger')}}" class="nav-link">
                    <i class="far fa-file-alt"></i>
                    <p>
                      Ledger
                    </p>
                  </a>
                </li>
                @if((session()->get('logininfo.Type'))=="Admin")
                <li class="nav-item">
                    <a href="{{url('/Price')}}" class="nav-link">
                        <i class="fas fa-tags"></i>
                      <p>
                       Product Price
                      </p>
                    </a>
                  </li>
                  @endif
                  @if((session()->get('logininfo.Type'))=="Admin")
                  <li class="nav-item">
                    <a href="{{url('/History')}}" class="nav-link">
                        <i class="fas fa-history"></i>
                      <p>
                        Product History
                      </p>
                    </a>
                  </li>
                  @endif
                  @if((session()->get('logininfo.Type'))=="Admin" || (session()->get('logininfo.Type'))=="User" )
                  <li class="nav-item">
                    <a href="{{url('/CashReceive')}}" class="nav-link">
                      <i class="fas fa-wallet"></i>
                      <p>
                        Cash Recieving
                      </p>
                    </a>
                  </li>
                  @endif
                  @if((session()->get('logininfo.Type'))=="Admin" || (session()->get('logininfo.Type'))=="User" )
                  <li class="nav-item">
                    <a href="{{url('/CashPayment')}}" class="nav-link">
                      <i class="far fa-money-bill-alt"></i>
                      <p>
                        Cash Payment
                      </p>
                    </a>
                  </li>
                  @endif
                  @if((session()->get('logininfo.Type'))=="Admin")
                  <li class="nav-item">
                    <a href="{{url('/JournalVoucher')}}" class="nav-link">
                      <i class="fas fa-book"></i>
                      <p>
                        Journal Voucher
                      </p>
                    </a>
                  </li>
                  @endif
                <li class="nav-item">
                  <a href="{{url('/signout')}}" class="nav-link">
                    <i class="fas fa-sign-out-alt"></i>
                    <p>
                      Signout
                    </p>
                  </a>
                </li>

              </ul>
            </nav>
          </div>
        </aside>