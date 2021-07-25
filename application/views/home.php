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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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
        <?php if(count($faces) == 0) : ?>
            <img id="face-img" data-face-img="1" src="img/face/default.png">
            <div class="face-wrap" data-face-wrap="1">
                <div class="face-title">Tidak ada slide</div>
                <div class="face-subtitle">silahkan tambahkan slide di halaman admin.</div>
            </div>
        <?php endif; ?>

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
                    <div class="event-item-date"><?= date('d F Y', strtotime($event->created_at)) ?></div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- about -->
        <div class="about">
            <div class="part-title">
                <div class="part-title-value">SAMBUTAN SEKOLAH</div>
                <div class="part-title-border"></div>
            </div>
            <div class="about-box">
                <div class="about-text">
                    <div class="about-text-title">
                        <?= $about->title ?? 'unknown' ?>
                    </div>
                    <div class="about-text-value">
                        <?= $about->text ?? 'belum ada sambutan, silahkan tambahkan di admin.' ?>
                    </div>
                </div>
                <div class="about-video">
                    <?= $about->youtube ?? 'belum ada video, silahkan tambahkan di admin'?>
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
                    " <?= $vm['visi']->value ?? 'tidak ada data visi silahkan tambahkan di admin.' ?> "
                </div>
                <div class="mission-title">( MISI )</div>
                <div class="mission-mission">
                    <?php if(count($vm['misi']) != 0) : ?>
                        <?php foreach($vm['misi'] as $num => $misi) : ?>
                            <div class="mission-mission-item">
                                <div class="mission-mission-index"><?= ($num + 1) ?>.</div>
                                <div class="mission-mission-value">
                                    <?= $misi->value ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <div class="mission-mission-item">
                            <div style="grid-column: 1/3; text-align: center">belum ada data misi silahkan tambahkan di admin.</div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- team -->
        <div class="team">
            <div class="part-title">
                <div class="part-title-value">TIM PENGAJAR & STAFF</div>
                <div class="part-title-border"></div>
            </div>
            <div class="team-box">
                <?php if(count($staffs) != 0) : ?>
                    <?php foreach ($staffs as $key => $staff) : ?>
                        <div class="team-item">
                            <img class="team-img" src="<?= base_url('img/staff/'.$staff->photo) ?>">
                            <div class="team-name"><?= $staff->name; ?></div>
                            <div class="team-rank"><?= staff_position($staff->position); ?></div>
                        </div>
                    <?php endforeach; ?>
                    <div class="team-item">
                        <div class="team-more">
                            <i class="material-icons">group</i>
                        </div>
                        <a class="team-name team-more-link" href="<?= base_url('staff/list') ?>">
                            <span>Lihat Semua</span>
                            <i class="material-icons">keyboard_arrow_right</i>
                        </a>
                        <div class="team-rank"></div>
                    </div>
                <?php else : ?>
                    <div class="team-null">belum ada data staff, silahkan tambahkan di admin.</div>
                <?php endif; ?>
            </div>
        </div>

        <!-- count -->
        <div class="count">
            <div class="count-box">
                <div class="count-item">
                    <div class="count-value"><?= number_format($count_people['staff'], 0, ',', '.'); ?></div>
                    <div class="count-title">Staff & Guru</div>
                </div>
                <div class="count-line"></div>
                <div class="count-item">
                    <div class="count-value"><?= number_format($count_people['students'], 0, ',', '.'); ?></div>
                    <div class="count-title">Siswa</div>
                </div>
            </div>
        </div>

        <!-- achievement -->
        <div class="achievement">
            <div class="part-title">
                <div class="part-title-value">PRESTASI</div>
                <div class="part-title-border"></div>
            </div>
            <div class="achievement-box">
                <?php if(count($achievments) != 0) : ?>
                    <?php foreach($achievments as $key => $achievment) : ?>
                    <a class="achievement-item" href="<?= base_url('achievment/show/'.$achievment->id) ?>">
                        <img class="achievement-img" src="<?= base_url('img/achievment/'.$achievment->photo) ?>">
                        <div class="achievement-info">
                            <div class="achievement-title">Juara <?= $achievment->rank; ?></div>
                            <div class="achievement-subtitle"><?= $achievment->title; ?></div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="achievement-null">belum ada data prestasi, silahkan tambahkan di admin.</div>
                <?php endif; ?>
            </div>
            <?php if(count($achievments) != 0) : ?>
                <a class="achievement-more" href="<?= base_url('achievment/list') ?>">
                    <span>Lihat Semua</span>
                    <i class="material-icons">keyboard_arrow_right</i>
                </a>
            <?php endif; ?>
        </div>

        <!-- gallery -->
        <div class="gallery">
            <div class="part-title">
                <div class="part-title-value">GALERI</div>
                <div class="part-title-border"></div>
            </div>
            <div class="gallery-box">
                <?php if(count($gallerys) != 0 ) : ?>
                    <?php foreach ($gallerys as $key => $gallery) : ?>
                    <a class="gallery-item" href="<?= base_url('gallery/show/'.$gallery['id']) ?>">
                        <img class="gallery-img" src="<?= base_url('img/gallery/'.$gallery['thumbnail']) ?>">
                        <div class="gallery-info">
                            <div class="gallery-title"><?= $gallery['title']; ?></div>
                            <div class="gallery-subtitle"><?= date('d M Y', strtotime($gallery['created_at'])); ?></div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="gallery-null">belum ada data galeri, silahkan tambahkan di admin.</div>
                <?php endif; ?>
            </div>
            <?php if(count($gallerys) != 0 ) : ?>
                <a class="achievement-more" href="<?= base_url('gallery/list') ?>">
                    <span>Lihat Semua</span>
                    <i class="material-icons">keyboard_arrow_right</i>
                </a>
            <?php endif; ?>
        </div>

        <!-- extra -->
        <div class="extra">
            <div class="part-title">
                <div class="part-title-value">EKSTRAKURIKULER</div>
                <div class="part-title-border"></div>
            </div>
            <div class="extra-box">
                <?php if(count($extras) != 0) : ?>
                    <?php foreach($extras as $key => $extra) : ?>
                    <a class="extra-item" href="<?= base_url('extra/show/'.$extra->id) ?>">
                        <img class="extra-img" src="<?= base_url('img/extra/'.$extra->photo) ?>">
                        <div class="extra-info">
                            <div class="extra-title"><?= $extra->name; ?></div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="extra-null">belum ada data extrakurikuler, silahkan tambahkan di admin.</div>
                <?php endif; ?>
            </div>
            <?php if(count($extras) != 0) : ?>
                <a class="achievement-more" href="<?= base_url('extra/list') ?>">
                    <span>Lihat Semua</span>
                    <i class="material-icons">keyboard_arrow_right</i>
                </a>
            <?php endif; ?>
        </div>

        <!-- facilities -->
        <div class="facilities">
            <div class="part-title">
                <div class="part-title-value">FASILITAS</div>
                <div class="part-title-border"></div>
            </div>
            <div class="facilities-box">
                <?php if(count($facilitys) != 0) : ?>
                    <?php foreach($facilitys as $key => $facility) : ?>
                    <a class="facilities-item" href="<?= base_url('facility/show/'.$facility->id) ?>">
                        <img class="facilities-img" src="<?= base_url('img/facility/'.$facility->photo) ?>">
                        <div class="facilities-info">
                            <div class="facilities-title"><?= $facility->name; ?></div>
                            <div class="facilities-subtitle">
                                <?= limit_string($facility->text, 200); ?>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="facilities-null">belum ada data fasilitas, silahkan tambahkan di admin.</div>
                <?php endif; ?>
            </div>
            <?php if(count($facilitys) != 0) : ?>
                <a class="facilities-more" href="<?= base_url('facility/list') ?>">
                    <span>Lihat Semua</span>
                    <i class="material-icons">keyboard_arrow_right</i>
                </a>
            <?php endif; ?>
        </div>

        <!-- news -->
        <div class="news">
            <div class="part-title">
                <div class="part-title-value">BERITA TERBARU</div>
                <div class="part-title-border"></div>
            </div>
            <div class="news-box">
                <?php if(count($newses) != 0) : ?>
                    <?php foreach($newses as $key => $news) : ?>
                    <a class="news-item" href="<?= base_url('news/show/'.$news->id) ?>">
                        <img class="news-img" src="<?= base_url('img/news/'.$news->photo) ?>">
                        <div class="news-title"><?= $news->title; ?></div>
                        <div class="news-text">
                            <?= $news->text; ?>
                        </div>
                        <div class="news-date"><?= date('D, d M Y', strtotime($news->created_at)); ?></div>
                    </a>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="news-null">belum ada data berita, silahkan tambahkan di admin.</div>
                <?php endif; ?>
            </div>
            <?php if(count($newses) != 0) : ?>    
                <a class="news-more" href="<?= base_url('news/list') ?>">
                    <span>Lihat Semua</span>
                    <i class="material-icons">keyboard_arrow_right</i>
                </a>
            <?php endif; ?>
        </div>

        <!-- footer -->
        <?php $this->load->view('footer') ?>

    </div>

</body>

</html>

<script>
// carousel face
let face = 1;
let faceMax = <?= count($faces) != 0 ? count($faces) : 1 ?>;
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