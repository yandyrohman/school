<div class="nav">
  <div class="nav-logo">
    <a href="<?= base_url('/') ?>">
      <img src="<?= base_url('img/examples/logo.png') ?>">
    </a>
  </div>
  <div class="nav-menus">
    <div class="nav-menu" href="#">
      <span class="nav-caption" data-sub="1">
        <span>Beranda</span>
        <i class="material-icons">keyboard_arrow_down</i>
      </span>
      <div class="nav-submenu" data-sub-target="1">
        <a href="#">Profil Sekolah</a>
        <a href="#">Visi Misi</a>
        <a href="#">Staff & Pengajar</a>
        <a href="#">Prestasi</a>
        <a href="#">Galeri Sekolah</a>
        <a href="#">Fasilitas</a>
        <a href="#">Berita Terbaru</a>
        <a href="#">Download</a>
      </div>
    </div>
    <div class="nav-menu" href="#">
      <span class="nav-caption" data-sub="2">
        <span>Jurusan</span>
        <i class="material-icons">keyboard_arrow_down</i>
      </span>
      <div class="nav-submenu" data-sub-target="2">
        <a href="#">Rekayasa Perangkat Lunak (RPL)</a>
        <a href="#">Teknik Komputer Jaringan (TKJ)</a>
        <a href="#">Akuntansi (AK)</a>
        <a href="#">Administrasi Perkantoran (AP)</a>
        <a href="#">Multimedia (MM)</a>
      </div>
    </div>
    <div class="nav-menu" href="#">
      <span class="nav-caption" data-sub="3">
        <span>Ekstrakurikuler</span>
        <i class="material-icons">keyboard_arrow_down</i>
      </span>
      <div class="nav-submenu" data-sub-target="3">
        <a href="#">Pramuka</a>
        <a href="#">Paskibra</a>
        <a href="#">Boxer</a>
        <a href="#">PMR</a>
        <a href="#">Commucation class</a>
        <a href="#">Drumband</a>
        <a href="#">Kesenian</a>
        <a href="#">Futsal</a>
        <a href="#">Basket</a>
        <a href="#">Hockey</a>
      </div>
    </div>
    <div class="nav-menu" href="#">
      <span class="nav-caption" data-sub="4">
        <span>Hubungi&nbsp;Kami</span>
        <i class="material-icons">keyboard_arrow_down</i>
      </span>
      <div class="nav-submenu" data-sub-target="4">
        <a href="#">Kontak (langsung ke footer)</a>
        <a href="#">FAQ</a>
      </div>
    </div>
    <div class="nav-menu" href="#">
      <span class="nav-caption" data-sub="5">PPDB</span>
    </div>
    <div class="nav-menu" href="#">
      <span class="nav-caption" data-sub="6">Login</span>
    </div>
    <div class="nav-toggle">
      <i class="material-icons">menu</i>
    </div>
  </div>
</div>

<div class="sidebar-bg">
  <div class="sidebar-top">
    <div class="sidebar-top-text"><b>MENU</b></div>
    <div class="sidebar-top-close">
      <i class="material-icons">clear</i>
    </div>
  </div>
  <div class="sidebar">
    <div class="s-menu" data-menu="1">
      <span>Beranda</span>
      <i class="material-icons">keyboard_arrow_right</i>
    </div>
    <div class="s-submenus" data-menu-target="1">
      <div class="s-submenu">SubMenu1</div>
      <div class="s-submenu">SubMenu2</div>
    </div>
    <div class="s-menu" data-menu="2">
      <span>Menu2</span>
      <i class="material-icons">keyboard_arrow_right</i>
    </div>
    <div class="s-submenus" data-menu-target="2">
      <div class="s-submenu">SubMenu1</div>
      <div class="s-submenu">SubMenu2</div>
    </div>
    <div class="s-menu" data-menu="3">
      <span>Menu3</span>
      <i class="material-icons">keyboard_arrow_right</i>
    </div>
    <div class="s-submenus" data-menu-target="3">
      <div class="s-submenu">SubMenu1</div>
      <div class="s-submenu">SubMenu2</div>
    </div>
  </div>
</div>

<script>

  // black navbar configuration
  $(window).scroll(function () {
    var y = $(window).scrollTop();
    if (y > 150) {
      $('.nav').attr('class', 'nav nav-active')
    } else {
      $('.nav').attr('class', 'nav')
    }
  });

  // desktop menu animation
  $('.nav-caption').on('click', function() {
    let target = $(this).data('sub');
    let display = $(`[data-sub-target="${target}"]`).css('display');
    $('[data-sub]').css('color', '#fff');
    if (display == '' || display == 'none') {
      $('[data-sub-target]').css('display', 'none');
      $(`[data-sub-target="${target}"]`).fadeIn();
      $(`[data-sub="${target}"]`).css('color', '#2196f3');
    } else {
      $(`[data-sub-target="${target}"]`).fadeOut();
      $(`[data-sub="${target}"]`).css('color', '#fff');
    }
  });

  // toggle menu for mobile view
  $('.nav-toggle').on('click', function() {
    $('.sidebar-bg').attr('class', 'sidebar-bg sidebar-bg-active');
  });
  $('.sidebar-top-close').on("click", function() {
    $('.sidebar-bg').attr('class', 'sidebar-bg');
  });
  
  // toggle submenu
  $('.s-menu').on('click', function() {
    let target = $(this).data('menu');
    $('.s-menu i').html('keyboard_arrow_right');
    $(this).find('i').html('keyboard_arrow_down');
    $(`[data-menu-target]`).css('display', 'none');
    $(`[data-menu-target="${target}"]`).css('display', 'block');
  });  

</script>