<footer id="footer">
  <div class="footer-col">
    <div class="footer-title-prime"><?= $profile->name ?? 'UNKNOWN' ?></div>
    <div class="footer-text"><?= $profile->text ?? 'belum ada profile sekolah, silahkan tambahkan di admin.' ?></div>
  </div>
  <div class="footer-col fi-left">
    <div class="footer-title">INFORMASI</div>
    <div class="footer-item-wrap">
      <div class="footer-item">
        <i class="material-icons">location_on</i>
        <span><?= $profile->address ?? 'tidak diketahui' ?></span>
      </div>
      <div class="footer-item">
        <i class="material-icons">call</i>
        <span><?= $profile->phone ?? 'tidak diketahui' ?></span>
      </div>
      <div class="footer-item">
        <i class="material-icons">call</i>
        <span><?= $profile->wa ?? 'tidak diketahui' ?></span>
      </div>
      <div class="footer-item">
        <i class="material-icons">email</i>
        <span><?= $profile->email ?? 'tidak diketahui' ?></span>
      </div>
      <div class="footer-item">
        <i class="material-icons">schedule</i>
        <span><?= $profile->schedule ?? 'tidak diketahui' ?></span>
      </div>
    </div>
  </div>
  <div class="footer-col fi-left">
    <div class="footer-title">MEDIA SOSIAL</div>
    <div class="footer-item-wrap">
      <div class="footer-box">
        <a class="footer-medsos" href="<?= $profile->facebook ?>">
          <img src="<?= base_url('img/footer/facebook.png') ?>" draggable="false" />
        </a>
        <a class="footer-medsos" href="<?= $profile->youtube ?>">
          <img src="<?= base_url('img/footer/youtube.png') ?>" draggable="false" />
        </a>
        <a class="footer-medsos" href="<?= $profile->instagram ?>">
          <img src="<?= base_url('img/footer/instagram.png') ?>" draggable="false" />
        </a>
        <a class="footer-medsos" href="<?= $profile->twitter ?>">
          <img src="<?= base_url('img/footer/twitter.png') ?>" draggable="false" />
        </a>
      </div>
    </div>
  </div>
</footer>