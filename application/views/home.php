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
  
  <!-- nav -->
  <?php $this->load->view('nav') ?>

  <!-- face -->
  <div class="face">
    <div class="face-before">
      <i class="material-icons">keyboard_arrow_left</i>
    </div>
    <div class="face-next">
      <i class="material-icons">keyboard_arrow_right</i>
    </div>

    <?php foreach($faces as $i => $face) : ?>
      <img id="face-img" data-face-img="<?= $i + 1 ?>" src="<?= base_url('img/face/'.$face->photo) ?>">
      <div class="face-wrap" data-face-wrap="<?= $i + 1 ?>">
        <div class="face-title"><?= $face->title ?></div>
        <div class="face-subtitle"><?= $face->text ?></div>
      </div>
    <?php endforeach; ?>
    
    <div class="face-indicator">
      <?php foreach($faces as $i => $face) : ?>
        <span data-bullet="<?= $i + 1?>"></span>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="box">

    <!-- event -->
    <?php if(count($events) > 0) : ?>
    <div class="event">
      <div class="part-title">
        <div class="part-title-value">PENGUMUMAN</div>
        <div class="part-title-border"></div>
      </div>
      <div class="event-box">
        <?php foreach($events as $event) : ?>
        <a href="<?= base_url('event/show/'.$event->id) ?>" class="event-item">
          <div class="event-item-title"><?= $event->title ?></div>
          <div class="event-item-value"><?= $event->view ?></div>
          <div class="event-item-date">22 November 2020</div>
        </a>
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
            src="https://www.youtube.com/embed/7n7hqKsMWE0" 
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
          <img class="achievement-img" src="<?= base_url('img/achievment/1.jpg') ?>">
          <div class="achievement-info">
            <div class="achievement-title">Juara I</div>
            <div class="achievement-subtitle">Sains Terapan Nasional 2020</div>
          </div>
        </div>
        <div class="achievement-item">
          <img class="achievement-img" src="<?= base_url('img/achievment/2.jpg') ?>">
          <div class="achievement-info">
            <div class="achievement-title">Juara I</div>
            <div class="achievement-subtitle">Coding Contest 2020</div>
          </div>
        </div>
        <div class="achievement-item">
          <img class="achievement-img" src="<?= base_url('img/achievment/3.jpg') ?>">
          <div class="achievement-info">
            <div class="achievement-title">Juara I</div>
            <div class="achievement-subtitle">Olimpiade Matermatika 2019</div>
          </div>
        </div>
        <div class="achievement-item">
          <img class="achievement-img" src="<?= base_url('img/achievment/4.jpg') ?>">
          <div class="achievement-info">
            <div class="achievement-title">Juara I</div>
            <div class="achievement-subtitle">Robotik Nasional 2020</div>
          </div>
        </div>
        <div class="achievement-item">
          <img class="achievement-img" src="<?= base_url('img/achievment/5.jpg') ?>">
          <div class="achievement-info">
            <div class="achievement-title">Juara I</div>
            <div class="achievement-subtitle">International Music for World 2018</div>
          </div>
        </div>
        <div class="achievement-item">
          <img class="achievement-img" src="<?= base_url('img/achievment/6.jpg') ?>">
          <div class="achievement-info">
            <div class="achievement-title">Juara I</div>
            <div class="achievement-subtitle">Teater Show Nasional 2018</div>
          </div>
        </div>
        <div class="achievement-item">
          <img class="achievement-img" src="<?= base_url('img/achievment/7.jpg') ?>">
          <div class="achievement-info">
            <div class="achievement-title">Juara I</div>
            <div class="achievement-subtitle">Accountant Fest 2018</div>
          </div>
        </div>
        <div class="achievement-item">
          <img class="achievement-img" src="<?= base_url('img/achievment/8.jpg') ?>">
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
          <img class="facilities-img" src="<?= base_url('img/facility/1.jpg') ?>">
          <div class="facilities-info">
            <div class="facilities-title">Lab Komputer</div>
            <div class="facilities-subtitle">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet laboriosam autem dolorem eius iure.
            </div>
          </div>
        </div>
        <div class="facilities-item">
          <img class="facilities-img" src="<?= base_url('img/facility/2.jpg') ?>">
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
    <?php $this->load->view('footer') ?>

  </div>

</body>
</html>

<script>

  // carousel face
  let face = 1;
  let faceMax = <?= count($faces) ?>;
  $(`img[data-face-img="${face}"]`).css('display', 'block');
  $(`div[data-face-wrap="${face}"]`).css('display', 'flex');
  $(`span[data-bullet="${face}"]`).attr('class', 'fi-active');
  
  $('.face-next').on('click', function() {
    simpleCarousel('+');
  });
  $('.face-before').on('click', function() {
    simpleCarousel('-');
  });
  function simpleCarousel(to) {
    $(`img[data-face-img="${face}"]`).fadeOut();
    $(`div[data-face-wrap="${face}"]`).css('display', 'none');
    $(`span[data-bullet="${face}"]`).attr('class', '');

    if (to == '+') {
      if (face == faceMax) {
        face = 1;
      } else {
        face += 1;
      }
    } else if (to == '-') {
      if (face == 1) {
        face = faceMax;
      } else {
        face -= 1;
      }
    }

    $(`img[data-face-img="${face}"]`).fadeIn();
    $(`div[data-face-wrap="${face}"]`).fadeIn().css('display', 'flex');
    $(`span[data-bullet="${face}"]`).attr('class', 'fi-active');
  }

</script>