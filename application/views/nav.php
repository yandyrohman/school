<div class="nav">
  <div class="nav-logo">
    <a class="nav-home" href="<?= base_url('/') ?>">
      <img src="<?= base_url('img/profile/logo.png') ?>" draggable="false" />
      <div class="nav-school-name"><?= $profile->name ?? 'UNKNOWN' ?></div>
    </a>
  </div>
  <div class="nav-menus">
    <div class="nav-menu" href="#">
      <span class="nav-caption" data-sub="1">
        <span>Beranda</span>
        <i class="material-icons">keyboard_arrow_down</i>
      </span>
      <div class="nav-submenu" data-sub-target="1">
        <a href="<?= base_url('about/show') ?>">Sambutan</a>
        <a href="<?= base_url('vm/show') ?>">Visi Misi</a>
        <a href="<?= base_url('staff/list') ?>">Staff & Pengajar</a>
        <a href="<?= base_url('achievment/list') ?>">Prestasi</a>
        <a href="<?= base_url('gallery/list') ?>">Galeri Sekolah</a>
        <a href="<?= base_url('facility/list') ?>">Fasilitas</a>
        <a href="<?= base_url('news/list') ?>">Berita Terbaru</a>
        <a href="<?= base_url('download/list') ?>">Download Area</a>
      </div>
    </div>
    <div class="nav-menu" href="#">
      <span class="nav-caption" data-sub="2">
        <span>Jurusan</span>
        <i class="material-icons">keyboard_arrow_down</i>
      </span>
      <div class="nav-submenu" data-sub-target="2">
        <?php if(count($majors) != 0) : ?>
          <?php foreach($majors as $major) : ?>
            <a href="<?= base_url('major/show/'.$major->id) ?>"><?= $major->name ?></a>
          <?php endforeach; ?>
        <?php else : ?>
          <a href="#"><i>tidak ada jurusan</i></a>
        <?php endif; ?>
      </div>
    </div>
    <div class="nav-menu" href="#">
      <span class="nav-caption" data-sub="3">
        <span>Ekstrakurikuler</span>
        <i class="material-icons">keyboard_arrow_down</i>
      </span>
      <div class="nav-submenu" data-sub-target="3">
        <?php if(count($extras) != 0) : ?>
          <?php foreach($extras as $extra) : ?>
            <a href="<?= base_url('extra/show/'.$extra->id) ?>"><?= $extra->name ?></a>
          <?php endforeach; ?>
        <?php else : ?>
          <a href="#"><i>tidak ada eskul</i></a>
        <?php endif; ?>
      </div>
    </div>
    <div class="nav-menu" href="#">
      <span class="nav-caption" data-sub="4">
        <span>Hubungi&nbsp;Kami</span>
        <i class="material-icons">keyboard_arrow_down</i>
      </span>
      <div class="nav-submenu" data-sub-target="4">
        <a href="#footer">Kontak</a>
      </div>
    </div>
    <a class="nav-menu" href="<?= base_url('login') ?>">
      <span class="nav-caption" data-sub="6">Login</span>
    </a>
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
      <a class="s-submenu" href="<?= base_url('about/show') ?>">Sambutan</a>
      <a class="s-submenu" href="<?= base_url('vm/show') ?>">Visi Misi</a>
      <a class="s-submenu" href="<?= base_url('staff/list') ?>">Staff & Pengajar</a>
      <a class="s-submenu" href="<?= base_url('achievment/list') ?>">Prestasi</a>
      <a class="s-submenu" href="<?= base_url('gallery/list') ?>">Galeri Sekolah</a>
      <a class="s-submenu" href="<?= base_url('facility/list') ?>">Fasilitas</a>
      <a class="s-submenu" href="<?= base_url('news/list') ?>">Berita Terbaru</a>
      <a class="s-submenu" href="<?= base_url('download/list') ?>">Download Area</a>
    </div>
    <div class="s-menu" data-menu="2">
      <span>Jurusan</span>
      <i class="material-icons">keyboard_arrow_right</i>
    </div>
    <div class="s-submenus" data-menu-target="2">
      <?php if(count($majors) != 0) : ?>
        <?php foreach($majors as $major) : ?>
          <a class="s-submenu" href="<?= base_url('major/show/'.$major->id) ?>"><?= limit_string($major->name, 20) ?></a>
        <?php endforeach; ?>
      <?php else : ?>
        <a class="s-submenu" href="#"><i>tidak ada jurusan</i></a>
      <?php endif; ?>
    </div>
    <div class="s-menu" data-menu="3">
      <span>Ekstrakurikuler</span>
      <i class="material-icons">keyboard_arrow_right</i>
    </div>
    <div class="s-submenus" data-menu-target="3">
      <?php if(count($extras) != 0) : ?>
        <?php foreach($extras as $extra) : ?>
          <a class="s-submenu" href="<?= base_url('extra/show/'.$extra->id) ?>"><?= $extra->name ?></a>
        <?php endforeach; ?>
      <?php else : ?>
        <a class="s-submenu" href="#"><i>tidak ada eskul</i></a>
      <?php endif; ?>
    </div>
    <div class="s-menu" data-menu="4">
      <span>Hubungi&nbsp;Kami</span>
      <i class="material-icons">keyboard_arrow_right</i>
    </div>
    <div class="s-submenus" data-menu-target="4">
      <a class="s-submenu" href="#footer">Kontak</a>
    </div>
    <a class="s-menu" href="<?= base_url('login') ?>">
      <span>Login</span>
    </a>
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