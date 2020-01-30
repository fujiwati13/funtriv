    <!-- navbar -->
    <div class="container">
         <nav class="row navbar navbar-expand-lg navbar-light bg-white">
             <a href="#" class="navbar-brand">
                 <img src="{{url('frontend\images\logo.png')}}" alt="Logo FunTriv">
             </a>
             <button class="navbar-toggler navbar-toggler-right collapse" type="button" 
             data-toggle="collapse"
             data-target="#navb" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
            </button>

             <!-- Untuk List Menu,Collapse agar bisa meneysuaikan di mobile juga ,ml=marginleft mr=marginright-->
            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                   <!-- li.nav-item.mx-md-2>a.nav-link*4 ,setelah ketik ini klik tab maka akan otomatis membuatkan li sebanyak 4,mx margin koordinat x-->
                   <li class="nav-item mx-md-2">
                       <a href="#" class="nav-link active">Home</a>
                   </li>
                   <li class="nav-item mx-md-2">
                       <a href="#" class="nav-link">Paket Travel</a>
                   </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toogle" id=navbardrop>Services</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Link</a>
                            <a href="#" class="dropdown-item">Link</a>
                            <a href="#" class="dropdown-item">Link</a>
                        </div>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Testimonial</a>
                    </li>

                </ul>
                
                  @guest
                    <!--Mobile Button-->
                    <form class="form-inline d-sm-block d-md-none">
                        <button class="btn btn-login btn-navbar-right my-2 my-sm-0" type="button"
                        onclick="event.preventDefault(); location.href='{{ url('login')}}';">
                            Masuk
                        </button>
                    </form>
                     
                    <!--Dekstop Button-->
                    <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4"
                        type="button"
                        onclick="event.preventDefault(); location.href='{{ url('login')}}';">
                            Masuk
                        </button>
                    </form>
                  @endguest

                  @auth
                    <!--Mobile Button-->
                    <form class="form-inline d-sm-block d-md-none" action="{{url('logout')}}" method="post">
                        @csrf
                        <button class="btn btn-login btn-navbar-right my-2 my-sm-0" type="submit">
                            Keluar
                        </button>
                    </form>
                     
                    <!--Dekstop Button-->
                    <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{url('logout')}}" method="post">
                    @csrf
                        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                            Keluar
                        </button>
                    </form>
                  @endauth
            </div>

         </nav>

    </div>