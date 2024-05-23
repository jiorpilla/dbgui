<div class="header d-flex justify-content-between align-items-center">
    <div class="logo d-flex align-items-center">
        <img src="{{URL::asset('/images/logo.svg')}}" alt="DBGUI" class="img-fluid">
        @if (env('APP_ENV') == 'prod')
        <!-- Output blank -->
        @else
            <span class="text-danger fs-1 text-uppercase">{{ env('APP_ENV') }}</span>
        @endif
    </div>
    <div class="searchbar-top"></div>
    <div class="topbar-info d-flex justify-content-between align-items-center">
        <div class="notifications">
            <i class="bi bi-bell">
                <span class="notice position-absolute translate-middle p-1 bg-danger border border-light rounded-circle">
                    <span class="visually-hidden">New alerts</span>
                  </span>
            </i>
        </div>
        <div class="profile-widget d-flex justify-content-between align-items-center">
            <div class="avatar">
                <img src="https://placehold.co/150x150" class="img-fluid">
            </div>
            <div class="profile-info dropdown " data-bs-toggle="dropdown"  dropdown-toggle role="button">
                <span class="name">USERNAME HERE <i class="bi bi-caret-down-fill"></i></span>
                <span>Job Role</span>
                <ul class="dropdown-menu">
                    <a class="dropdown-item" href="#">logout</a>
                </ul>
            </div>
        </div>
    </div>
</div>
