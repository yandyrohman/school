<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>School Web</title>
  <link rel="stylesheet" href="<?= base_url('/css/home.css') ?>">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>
<body>
  
  <div class="nav">
    <div class="nav-logo">
      <img src="<?= base_url('img/examples/logo.png') ?>">
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

  <div class="face">
    <div class="face-before">
      <i class="material-icons">keyboard_arrow_left</i>
    </div>
    <div class="face-next">
      <i class="material-icons">keyboard_arrow_right</i>
    </div>
    <img id="face-img" data-img="1" src="<?= base_url('img/face/1.jpg') ?>">
    <div class="face-wrap">
      <div class="face-title">Lorem Ipsum Dolor Sit Amet</div>
      <div class="face-subtitle">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat ipsam dolor, 
        alias, recusandae necessitatibus, magni veniam nostrum consectetur totam obcaecati 
        optio ducimus qui officiis animi quibusdam nesciunt eos sed. Quia?
      </div>
    </div>
    <div class="face-indicator">
      <span data-bullet="1" class="fi-active"></span>
      <span data-bullet="2"></span>
      <span data-bullet="3"></span>
      <span data-bullet="4"></span>
      <span data-bullet="5"></span>
    </div>
  </div>

  <div class="box">

    <!-- event -->
    <?php if(count($event) > 0) : ?>
    <div class="event">
      <div class="part-title">
        <div class="part-title-value">PENGUMUMAN</div>
        <div class="part-title-border"></div>
      </div>
      <div class="event-box">
        <?php foreach($event as $item) : ?>
        <div class="event-item">
          <div class="event-item-title"><?= $item->title ?></div>
          <div class="event-item-value"><?= $item->text ?></div>
          <div class="event-item-date">22 November 2020</div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endif; ?>

    <!-- about -->
    <div class="about">
      <div class="part-title">
        <div class="part-title-value">SEKILAS TENTANG KAMI</div>
        <div class="part-title-border"></div>
      </div>
      <div class="about-box">
        <div class="about-text">
          <div class="about-text-title">
            SMK NURUL ISLAM<br />
            CIANJUR
          </div>
          <div class="about-text-value">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Aliquid assumenda similique nihil accusamus officia perspiciatis aspernatur architecto praesentium a? 
            Necessitatibus provident distinctio tempora, quia deleniti quos et corrupti aliquid illo!
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Aliquid assumenda similique nihil accusamus officia perspiciatis aspernatur architecto praesentium a? 
            Necessitatibus provident distinctio tempora, quia deleniti quos et corrupti aliquid illo!
          </div>
        </div>
        <div class="about-video">
          <iframe 
            src="https://www.youtube.com/embed/d4b-oH3bFTo" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>          
        </div>
      </div>
    </div>

    <!-- mission -->
    <div class="mission">
      <div class="part-title">
        <div class="part-title-value" style="color: #fff">VISI & MISI</div>
        <div class="part-title-border" style="background: #fff"></div>
      </div>
      <div class="mission-box">
        <div class="mission-title">( VISI )</div>
        <div class="mission-vision">
          " Mencetak Siswa yang Kompeten dan Berakhlak "
        </div>
        <div class="mission-title">( MISI )</div>
        <div class="mission-mission">
          <div class="mission-mission-item">
            <div class="mission-mission-index">1.</div>
            <div class="mission-mission-value">
              Lorem ipsum, dolor
            </div>
          </div>
          <div class="mission-mission-item">
            <div class="mission-mission-index">2.</div>
            <div class="mission-mission-value">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda at adipisci quasi quos.
            </div>
          </div>
          <div class="mission-mission-item">
            <div class="mission-mission-index">3.</div>
            <div class="mission-mission-value">
              Lorem ipsum, dolor sit amet consectetur
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- team -->
    <div class="team">
      <div class="part-title">
        <div class="part-title-value">Tim Pengajar & Staff</div>
        <div class="part-title-border"></div>
      </div>
      <div class="team-box">
        <div class="team-item">
          <img class="team-img" src="<?= base_url('img/team/5.jpg') ?>">
          <div class="team-name">Drs. Aceng Sirojudin</div>
          <div class="team-rank">Kepala Sekolah</div>
        </div>
        <div class="team-item">
          <img class="team-img" src="<?= base_url('img/team/1.jpg') ?>">
          <div class="team-name">Utep Sutiana, ST, MT</div>
          <div class="team-rank">Wakil Kepala Sekolah</div>
        </div>
        <div class="team-item">
          <img class="team-img" src="<?= base_url('img/team/3.jpg') ?>">
          <div class="team-name">Ela Siti Laela, S.Kom, M.Kom</div>
          <div class="team-rank">Ketua Jurusan RPL</div>
        </div>
        <div class="team-item">
          <img class="team-img" src="<?= base_url('img/team/2.jpg') ?>">
          <div class="team-name">Fahmi Setiadi, ST</div>
          <div class="team-rank">Guru Pemrograman Dasar</div>
        </div>
        <div class="team-item">
          <img class="team-img" src="<?= base_url('img/team/1.jpg') ?>">
          <div class="team-name">Utep Sutiana, ST, MT</div>
          <div class="team-rank">Wakil Kepala Sekolah</div>
        </div>
        <div class="team-item">
          <img class="team-img" src="<?= base_url('img/team/3.jpg') ?>">
          <div class="team-name">Ela Siti Laela, S.Kom, M.Kom</div>
          <div class="team-rank">Ketua Jurusan RPL</div>
        </div>
        <div class="team-item">
          <img class="team-img" src="<?= base_url('img/team/2.jpg') ?>">
          <div class="team-name">Fahmi Setiadi, ST</div>
          <div class="team-rank">Guru Pemrograman Dasar</div>
        </div>
        <div class="team-item">
          <div class="team-more">
            <i class="material-icons">group_add</i>
          </div>
          <div class="team-name team-more-link">
            <span>Lihat Staff Lainnya</span>
            <i class="material-icons">keyboard_arrow_right</i>
          </div>
          <div class="team-rank"></div>
        </div>
      </div>
    </div>

    <!-- count -->
    <div class="count">
      <div class="count-box">
        <div class="count-item">
          <div class="count-value">99</div>
          <div class="count-title">Staff & Guru</div>
        </div>
        <div class="count-line"></div>
        <div class="count-item">
          <div class="count-value">1790</div>
          <div class="count-title">Siswa</div>
        </div>
      </div>
    </div>

    <!-- achievement -->
    <div class="achievement">
      <div class="part-title">
        <div class="part-title-value">Prestasi</div>
        <div class="part-title-border"></div>
      </div>
      <div class="achievement-box">
        <div class="achievement-item">
          <img class="achievement-img" src="<?= base_url('img/achievement/1.jpg') ?>">
          <div class="achievement-info">
            <div class="achievement-title">Juara I</div>
            <div class="achievement-subtitle">Sains Terapan Nasional 2020</div>
          </div>
        </div>
        <div class="achievement-item">
          <img class="achievement-img" src="<?= base_url('img/achievement/2.jpg') ?>">
          <div class="achievement-info">
            <div class="achievement-title">Juara I</div>
            <div class="achievement-subtitle">Coding Contest 2020</div>
          </div>
        </div>
        <div class="achievement-item">
          <img class="achievement-img" src="<?= base_url('img/achievement/3.jpg') ?>">
          <div class="achievement-info">
            <div class="achievement-title">Juara I</div>
            <div class="achievement-subtitle">Olimpiade Matermatika 2019</div>
          </div>
        </div>
        <div class="achievement-item">
          <img class="achievement-img" src="<?= base_url('img/achievement/4.jpg') ?>">
          <div class="achievement-info">
            <div class="achievement-title">Juara I</div>
            <div class="achievement-subtitle">Robotik Nasional 2020</div>
          </div>
        </div>
        <div class="achievement-item">
          <img class="achievement-img" src="<?= base_url('img/achievement/5.jpg') ?>">
          <div class="achievement-info">
            <div class="achievement-title">Juara I</div>
            <div class="achievement-subtitle">International Music for World 2018</div>
          </div>
        </div>
        <div class="achievement-item">
          <img class="achievement-img" src="<?= base_url('img/achievement/6.jpg') ?>">
          <div class="achievement-info">
            <div class="achievement-title">Juara I</div>
            <div class="achievement-subtitle">Teater Show Nasional 2018</div>
          </div>
        </div>
        <div class="achievement-item">
          <img class="achievement-img" src="<?= base_url('img/achievement/7.jpg') ?>">
          <div class="achievement-info">
            <div class="achievement-title">Juara I</div>
            <div class="achievement-subtitle">Accountant Fest 2018</div>
          </div>
        </div>
        <div class="achievement-item">
          <img class="achievement-img" src="<?= base_url('img/achievement/8.jpg') ?>">
          <div class="achievement-info">
            <div class="achievement-title">Juara I</div>
            <div class="achievement-subtitle">Futsal Siswa Nasional 2018</div>
          </div>
        </div>
      </div>
      <div class="achievement-more">
        <span>Lihat Prestasi Lainnya</span>
        <i class="material-icons">keyboard_arrow_right</i>
      </div>
    </div>

    <!-- gallery -->
    <div class="gallery">
      <div class="part-title">
        <div class="part-title-value">Galeri</div>
        <div class="part-title-border"></div>
      </div>
      <div class="gallery-box">
        <div class="gallery-item">
          <img class="gallery-img" src="<?= base_url('img/default.jpg') ?>">
          <div class="gallery-info">
            <div class="gallery-title">Kegiatan SoC</div>
            <div class="gallery-subtitle">11 November 2020</div>
          </div>
        </div>
        <div class="gallery-item">
          <img class="gallery-img" src="<?= base_url('img/default.jpg') ?>">
          <div class="gallery-info">
            <div class="gallery-title">Kegiatan Pentas Seni</div>
            <div class="gallery-subtitle">05 Juni 2020</div>
          </div>
        </div>
        <div class="gallery-item">
          <img class="gallery-img" src="<?= base_url('img/default.jpg') ?>">
          <div class="gallery-info">
            <div class="gallery-title">Kegiatan Memperingati Hari Kemerdekaan</div>
            <div class="gallery-subtitle">17 Agustus 2020</div>
          </div>
        </div>
        <div class="gallery-item">
          <img class="gallery-img" src="<?= base_url('img/default.jpg') ?>">
          <div class="gallery-info">
            <div class="gallery-title">Kegiatan Maulid Nabi</div>
            <div class="gallery-subtitle">20 April 2020</div>
          </div>
        </div>
        <div class="gallery-item">
          <img class="gallery-img" src="<?= base_url('img/default.jpg') ?>">
          <div class="gallery-info">
            <div class="gallery-title">Kegiatan Sosialisasi dengan PT. Pouyen</div>
            <div class="gallery-subtitle">08 Februari 2020</div>
          </div>
        </div>
        <div class="gallery-item">
          <img class="gallery-img" src="<?= base_url('img/default.jpg') ?>">
          <div class="gallery-info">
            <div class="gallery-title">Kegiatan Keluluasan Angkatan 2019</div>
            <div class="gallery-subtitle">19 April 2019</div>
          </div>
        </div>
        <div class="gallery-item">
          <img class="gallery-img" src="<?= base_url('img/default.jpg') ?>">
          <div class="gallery-info">
            <div class="gallery-title">Kegiatan Study Banding di Bali</div>
            <div class="gallery-subtitle">02 Januari 2019</div>
          </div>
        </div>
        <div class="gallery-item">
          <img class="gallery-img" src="<?= base_url('img/default.jpg') ?>">
          <div class="gallery-info">
            <div class="gallery-title">Kegiatan Ujikom 2019</div>
            <div class="gallery-subtitle">18 Desember 2018</div>
          </div>
        </div>
      </div>
      <div class="achievement-more">
        <span>Lihat Foto Lainnya</span>
        <i class="material-icons">keyboard_arrow_right</i>
      </div>
    </div>

    <!-- extra -->
    <div class="extra">
      <div class="part-title">
        <div class="part-title-value">Extrakulikuler</div>
        <div class="part-title-border"></div>
      </div>
      <div class="extra-box">
        <div class="extra-item">
          <img class="extra-img" src="<?= base_url('img/default.jpg') ?>">
          <div class="extra-info">
            <div class="extra-title">Pramuka</div>
          </div>
        </div>
        <div class="extra-item">
          <img class="extra-img" src="<?= base_url('img/default.jpg') ?>">
          <div class="extra-info">
            <div class="extra-title">Paskibra</div>
          </div>
        </div>
        <div class="extra-item">
          <img class="extra-img" src="<?= base_url('img/default.jpg') ?>">
          <div class="extra-info">
            <div class="extra-title">Drumband</div>
          </div>
        </div>
        <div class="extra-item">
          <img class="extra-img" src="<?= base_url('img/default.jpg') ?>">
          <div class="extra-info">
            <div class="extra-title">Futsal</div>
          </div>
        </div>
        <div class="extra-item">
          <img class="extra-img" src="<?= base_url('img/default.jpg') ?>">
          <div class="extra-info">
            <div class="extra-title">Bulutangkis</div>
          </div>
        </div>
        <div class="extra-item">
          <img class="extra-img" src="<?= base_url('img/default.jpg') ?>">
          <div class="extra-info">
            <div class="extra-title">Basket</div>
          </div>
        </div>
        <div class="extra-item">
          <img class="extra-img" src="<?= base_url('img/default.jpg') ?>">
          <div class="extra-info">
            <div class="extra-title">Kesenian</div>
          </div>
        </div>
        <div class="extra-item">
          <img class="extra-img" src="<?= base_url('img/default.jpg') ?>">
          <div class="extra-info">
            <div class="extra-title">Tarung Derajat</div>
          </div>
        </div>
      </div>
      <div class="achievement-more">
        <span>Selengkapnya</span>
        <i class="material-icons">keyboard_arrow_right</i>
      </div>
    </div>
    
    <!-- facilities -->
    <div class="facilities">
      <div class="part-title">
        <div class="part-title-value">Fasilitas</div>
        <div class="part-title-border"></div>
      </div>
      <div class="facilities-box">
        <div class="facilities-item">
          <img class="facilities-img" src="<?= base_url('img/facilities/1.jpg') ?>">
          <div class="facilities-info">
            <div class="facilities-title">Lab Komputer</div>
            <div class="facilities-subtitle">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet laboriosam autem dolorem eius iure.
            </div>
          </div>
        </div>
        <div class="facilities-item">
          <img class="facilities-img" src="<?= base_url('img/facilities/2.jpg') ?>">
          <div class="facilities-info">
            <div class="facilities-title">Kantin Sekolah</div>
            <div class="facilities-subtitle">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet laboriosam autem dolorem eius iure.
            </div>
          </div>
        </div>
        <div class="facilities-more">
          <span>Fasilitas Lainnya</span>
          <i class="material-icons">keyboard_arrow_right</i>
        </div>
      </div>
    </div>

    <!-- news -->
    <div class="news">
      <div class="part-title">
        <div class="part-title-value">Berita Terbaru</div>
        <div class="part-title-border"></div>
      </div>
      <div class="news-box">
        <div class="news-item">
          <img class="news-img" src="<?= base_url('img/default.jpg') ?>">
          <div class="news-title">Lorem Ipsum Dolor Sit Amet Teko Welas</div>
          <div class="news-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, debitis asperiores sapiente minus et a, ratione placeat maxime itaque, rerum nostrum reprehenderit neque dolorum laborum incidunt dolores consequatur eveniet quas.
          </div> 
          <div class="news-date">Minggu, 13 Des 2020</div>
        </div>
        <div class="news-item">
          <img class="news-img" src="<?= base_url('img/default.jpg') ?>">
          <div class="news-title">Lorem Ipsum Dolor Sit Amet Teko Welas</div>
          <div class="news-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, debitis asperiores sapiente minus et a, ratione placeat maxime itaque, rerum nostrum reprehenderit neque dolorum laborum incidunt dolores consequatur eveniet quas.
          </div> 
          <div class="news-date">Minggu, 13 Des 2020</div>
        </div>
        <div class="news-item">
          <img class="news-img" src="<?= base_url('img/default.jpg') ?>">
          <div class="news-title">Lorem Ipsum Dolor Sit Amet Teko Welas</div>
          <div class="news-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, debitis asperiores sapiente minus et a, ratione placeat maxime itaque, rerum nostrum reprehenderit neque dolorum laborum incidunt dolores consequatur eveniet quas.
          </div> 
          <div class="news-date">Minggu, 13 Des 2020</div>
        </div>
        <div class="news-item">
          <img class="news-img" src="<?= base_url('img/default.jpg') ?>">
          <div class="news-title">Lorem Ipsum Dolor Sit Amet Teko Welas</div>
          <div class="news-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, debitis asperiores sapiente minus et a, ratione placeat maxime itaque, rerum nostrum reprehenderit neque dolorum laborum incidunt dolores consequatur eveniet quas.
          </div> 
          <div class="news-date">Minggu, 13 Des 2020</div>
        </div>
      </div>
      <div class="news-more">
        <span>Lihat Berita Lainnya</span>
        <i class="material-icons">keyboard_arrow_right</i>
      </div>
    </div>

    <!-- footer -->
    <footer>
      <div class="footer-col">
        <img class="footer-logo" src="<?= base_url('img/examples/logo2.png') ?>">
        <div class="footer-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi consequuntur voluptates repellat blanditiis porro quod eveniet autem.
        </div>
      </div>
      <div class="footer-col fi-left">
        <div class="footer-title">INFORMASI</div>
        <div class="footer-item-wrap">
          <div class="footer-item">
            <i class="material-icons">location_on</i>
            <span>Jl. Raya Cianjur, Sukaluyu</span>
          </div>
          <div class="footer-item">
            <i class="material-icons">call</i>
            <span>(022) 1234567890</span>
          </div>
          <div class="footer-item">
            <i class="material-icons">call</i>
            <span>0812123456</span>
          </div>
          <div class="footer-item">
            <i class="material-icons">email</i>
            <span>admin@smaknis.sch.id</span>
          </div>
          <div class="footer-item">
            <i class="material-icons">schedule</i>
            <span>Senin - Jum'at | 07.00 - 17.00</span>
          </div>
        </div>
      </div>
      <div class="footer-col fi-left">
        <div class="footer-title">MEDIA SOSIAL</div>
        <div class="footer-item-wrap">
          <div class="footer-box">
            <div class="footer-medsos">
              <i class="material-icons">facebook</i>
            </div>
            <div class="footer-medsos">
              <i class="material-icons">facebook</i>
            </div>
            <div class="footer-medsos">
              <i class="material-icons">facebook</i>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>

</body>
</html>

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

  // carousel face
  $('.face-next').on('click', function() {
    simpleCarousel('+');
  });
  $('.face-before').on('click', function() {
    simpleCarousel('-');
  });
  function simpleCarousel(to) {
    let imgNow = parseInt($('#face-img').data('img'));
    imgNow = to == '+' ? (imgNow + 1) : (imgNow - 1);
    $('.face-indicator span').attr('class', '');
    if (imgNow <= 5 && imgNow > 0) {
      $('#face-img').hide();
      $('#face-img').attr('src', '<?= base_url('img/face/') ?>' + imgNow + '.jpg');
      $('#face-img').data('img', imgNow);
      $('#face-img').fadeIn();
      $(`.face-indicator span[data-bullet="${imgNow}"]`).attr('class', 'fi-active');
    } else if (imgNow == 0) {
      $('#face-img').hide();
      $('#face-img').attr('src', '<?= base_url('img/face/') ?>' + 5 + '.jpg');
      $('#face-img').data('img', 5);
      $('#face-img').fadeIn();
      $(`.face-indicator span[data-bullet="${5}"]`).attr('class', 'fi-active');
    } else if (imgNow == 6) {
      $('#face-img').hide();
      $('#face-img').attr('src', '<?= base_url('img/face/') ?>' + 1 + '.jpg');
      $('#face-img').data('img', 1);
      $('#face-img').fadeIn();
      $(`.face-indicator span[data-bullet="${1}"]`).attr('class', 'fi-active');
    }
  }

</script>