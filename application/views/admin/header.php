<header class="topbar" data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-header" data-logobg="skin5">
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                <i class="ti-menu ti-close"></i>
            </a>
            <div class="navbar-brand">
                <a href="index.html" class="logo">
                    <!-- <b class="logo-icon">
                        <img src="../../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                        <img src="../../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                    </b> -->
                    <span class="logo-text">
                        <img class="logo-img" src="<?= base_url().'img/profile/logo.png' ?>" alt="homepage" />
                    </span>
                    <div class="logo-title">Administrator</div>
                </a>
            </div>
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="ti-more"></i>
            </a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
            <ul class="navbar-nav float-left mr-auto">
                <li style="margin-left: 20px; font-size: 18px; font-weight: bold">
                    <div>SMK Nurul Islam</div>
                </li>
            </ul>
            <ul class="navbar-nav float-right">
                <li class="nav-item dropdown" style="position: relative">
                    <a class="profile-menu">
                        <i class="mdi mdi-account" style="font-size: 25px;"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="profile">
            <a class="dropdown-item" href="<?= base_url('admin/users/show/'.$_SESSION['user_id']) ?>">
                <i class="mdi mdi-account-box"></i>
                My Profile
            </a>
            <a class="dropdown-item" href="<?= base_url('login/logout') ?>">
                <i class="mdi mdi-logout"></i>
                Logout
            </a>
        </div>
    </nav>
</header>

<style>
.logo {
    display: flex;
}
    .logo-img {
        height: 40px;
    }

    .logo-title {
        font-size: 17px;
        color: #fff;
        margin-left: 15px;
    }

.profile-menu {
    width: 65px;
    height: 65px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}

.profile {
    position: absolute;
    top: 70px;
    right: 10px;
    z-index: 999;
    background: #fff;
    border: 1px solid #ccc;
    display: none;
}

.dropdown-item {
    user-select: none;
    cursor: pointer;
}

.dropdown-item:active {
    background: #ccc;
}
</style>

<script>
    $('.profile-menu').on('click', function() {
        let display = $('.profile').css('display');
        if (display == 'block') {
            $('.profile').css('display', 'none');
        } else {
            $('.profile').css('display', 'block');
        }
    })
</script>