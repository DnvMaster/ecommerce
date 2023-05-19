<div class="sl-header">
    <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
    </div><!-- sl-header-left -->
    <div class="sl-header-right">
        <nav class="nav">
            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name">Николай<span class="hidden-md-down"> Демко</span></span>
                    <img src="{{ asset('adminbackend/img/mikola.jpg') }}" class="wd-32 rounded-circle" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-200">
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href=""><i class="icon ion-ios-person-outline"></i> Профиль</a></li>
                        <li><a href=""><i class="icon ion-ios-gear-outline"></i> Настройки</a></li>
                        <li><a href=""><i class="icon ion-ios-download-outline"></i> Загрузки</a></li>
                        <li><a href=""><i class="icon ion-ios-star-outline"></i> Избранное</a></li>
                        <li><a href=""><i class="icon ion-ios-folder-outline"></i> Коллекции</a></li>
                        <li><a href="{{ route('admin.logout') }}"><i class="icon ion-power"></i> Выход</a></li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
            <a id="btnRightMenu" href="" class="pos-relative">
                <i class="icon ion-ios-bell-outline"></i>
                <!-- start: if statement -->
                <span class="square-8 bg-danger"></span>
                <!-- end: if statement -->
            </a>
        </div><!-- navicon-right -->
    </div><!-- sl-header-right -->
</div><!-- sl-header -->
