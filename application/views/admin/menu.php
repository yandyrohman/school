<aside class="left-sidebar" data-sidebarbg="skin5">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="<?= $_SESSION['page'] == 'event' ? 'active ' : '' ?>sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('admin/event') ?>"
                        aria-expanded="false">
                        <i class="material-icons">book_online</i>
                        <span class="hide-menu">Pengumuman</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link dropdown-toggle toggle-menu"
                        data-toggle="collapse"
                        aria-expanded="false">
                        <i class="material-icons">public</i>
                        <span class="hide-menu">Data Umum</span>
                    </a>
                    <ul class="sidebar-item-sub"
                        <?php if(
                            $_SESSION['page'] == 'face' ||
                            $_SESSION['page'] == 'profile' ||
                            $_SESSION['page'] == 'vm' ||
                            $_SESSION['page'] == 'about'
                        ) : ?>
                            style="display: block"
                        <?php endif; ?>
                    >
                        <li class="sidebar-item">
                            <a 
                                class="<?= $_SESSION['page'] == 'face' ? 'active ' : '' ?>sidebar-link waves-effect waves-dark sidebar-link" 
                                href="<?= base_url('admin/face') ?>"
                                aria-expanded="false"
                            >
                                <i class="mdi mdi-checkbox-blank-circle-outline"></i>
                                <span class="hide-menu">Tampilan Depan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a 
                                class="<?= $_SESSION['page'] == 'about' ? 'active ' : '' ?>sidebar-link waves-effect waves-dark sidebar-link" 
                                href="<?= base_url('admin/about') ?>"
                                aria-expanded="false"
                            >
                                <i class="mdi mdi-checkbox-blank-circle-outline"></i>
                                <span class="hide-menu">Sambutan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a 
                                class="<?= $_SESSION['page'] == 'profile' ? 'active ' : '' ?>sidebar-link waves-effect waves-dark sidebar-link" 
                                href="<?= base_url('admin/profile') ?>"
                                aria-expanded="false"
                            >
                                <i class="mdi mdi-checkbox-blank-circle-outline"></i>
                                <span class="hide-menu">Profile Sekolah</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a 
                                class="<?= $_SESSION['page'] == 'vm' ? 'active ' : '' ?>sidebar-link waves-effect waves-dark sidebar-link" 
                                href="<?= base_url('admin/vm') ?>"
                                aria-expanded="false"
                            >
                                <i class="mdi mdi-checkbox-blank-circle-outline"></i>
                                <span class="hide-menu">Visi Misi</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link dropdown-toggle toggle-menu"
                        data-toggle="collapse"
                        aria-expanded="false">
                        <i class="material-icons">dns</i>
                        <span class="hide-menu">Data Internal</span>
                    </a>
                    <ul class="sidebar-item-sub"
                        <?php if(
                            $_SESSION['page'] == 'staff' ||
                            $_SESSION['page'] == 'student'
                        ) : ?>
                            style="display: block"
                        <?php endif; ?>
                    >
                        <li class="sidebar-item">
                            <a 
                                class="<?= $_SESSION['page'] == 'staff' ? 'active ' : '' ?>sidebar-link waves-effect waves-dark sidebar-link" 
                                href="<?= base_url('admin/staff') ?>"
                                aria-expanded="false"
                            >
                                <i class="mdi mdi-checkbox-blank-circle-outline"></i>
                                <span class="hide-menu">Staff & Guru</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a 
                                class="<?= $_SESSION['page'] == 'student' ? 'active ' : '' ?>sidebar-link waves-effect waves-dark sidebar-link" 
                                href="<?= base_url('admin/student') ?>"
                                aria-expanded="false"
                            >
                                <i class="mdi mdi-checkbox-blank-circle-outline"></i>
                                <span class="hide-menu">Siswa</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link dropdown-toggle toggle-menu"
                        data-toggle="collapse"
                        aria-expanded="false">
                        <i class="material-icons">apartment</i>
                        <span class="hide-menu">Data Sekolah</span>
                    </a>
                    <ul class="sidebar-item-sub"
                        <?php if(
                            $_SESSION['page'] == 'major' ||
                            $_SESSION['page'] == 'class' ||
                            $_SESSION['page'] == 'facility' ||
                            $_SESSION['page'] == 'extra'
                        ) : ?>
                            style="display: block"
                        <?php endif; ?>
                    >
                        <li class="sidebar-item">
                            <a  
                                class="<?= $_SESSION['page'] == 'major' ? 'active ' : '' ?>sidebar-link waves-effect waves-dark sidebar-link" 
                                href="<?= base_url('admin/major') ?>"
                                aria-expanded="false"
                            >
                                <i class="mdi mdi-checkbox-blank-circle-outline"></i>
                                <span class="hide-menu">Jurusan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a 
                                class="<?= $_SESSION['page'] == 'class' ? 'active ' : '' ?>sidebar-link waves-effect waves-dark sidebar-link" 
                                href="<?= base_url('admin/classs') ?>"
                                aria-expanded="false"
                            >
                                <i class="mdi mdi-checkbox-blank-circle-outline"></i>
                                <span class="hide-menu">Kelas</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a 
                                class="<?= $_SESSION['page'] == 'facility' ? 'active ' : '' ?>sidebar-link waves-effect waves-dark sidebar-link" 
                                href="<?= base_url('admin/facility') ?>"
                                aria-expanded="false"
                            >
                                <i class="mdi mdi-checkbox-blank-circle-outline"></i>
                                <span class="hide-menu">Fasilitas</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a 
                                class="<?= $_SESSION['page'] == 'extra' ? 'active ' : '' ?>sidebar-link waves-effect waves-dark sidebar-link" 
                                href="<?= base_url('admin/extra') ?>"
                                aria-expanded="false"
                            >
                                <i class="mdi mdi-checkbox-blank-circle-outline"></i>
                                <span class="hide-menu">Extrakurikuler</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link dropdown-toggle toggle-menu"
                        data-toggle="collapse"
                        aria-expanded="false">
                        <i class="material-icons">dashboard</i>
                        <span class="hide-menu">Data Lainnya</span>
                    </a>
                    <ul class="sidebar-item-sub"
                        <?php if(
                            $_SESSION['page'] == 'news' ||
                            $_SESSION['page'] == 'download'
                        ) : ?>
                            style="display: block"
                        <?php endif; ?>
                    >
                        <li class="sidebar-item">
                            <a 
                                class="<?= $_SESSION['page'] == 'news' ? 'active ' : '' ?>sidebar-link waves-effect waves-dark sidebar-link" 
                                href="<?= base_url('admin/news') ?>"
                                aria-expanded="false"
                            >
                                <i class="mdi mdi-checkbox-blank-circle-outline"></i>
                                <span class="hide-menu">Berita</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a 
                                class="<?= $_SESSION['page'] == 'download' ? 'active ' : '' ?>sidebar-link waves-effect waves-dark sidebar-link" 
                                href="<?= base_url('admin/download') ?>"
                                aria-expanded="false"
                            >
                                <i class="mdi mdi-checkbox-blank-circle-outline"></i>
                                <span class="hide-menu">Download Area</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link dropdown-toggle toggle-menu"
                        data-toggle="collapse"
                        aria-expanded="false">
                        <i class="material-icons">emoji_events</i>
                        <span class="hide-menu">Kegiatan</span>
                    </a>
                    <ul class="sidebar-item-sub"
                        <?php if(
                            $_SESSION['page'] == 'gallery' ||
                            $_SESSION['page'] == 'achievment'
                        ) : ?>
                            style="display: block"
                        <?php endif; ?>
                    >
                        <li class="sidebar-item">
                            <a 
                                class="<?= $_SESSION['page'] == 'gallery' ? 'active ' : '' ?>sidebar-link waves-effect waves-dark sidebar-link" 
                                href="<?= base_url('admin/gallery') ?>"
                                aria-expanded="false"
                            >
                                <i class="mdi mdi-checkbox-blank-circle-outline"></i>
                                <span class="hide-menu">Galeri Foto</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a 
                                class="<?= $_SESSION['page'] == 'achievment' ? 'active ' : '' ?>sidebar-link waves-effect waves-dark sidebar-link" 
                                href="<?= base_url('admin/achievment') ?>"
                                aria-expanded="false"
                            >
                                <i class="mdi mdi-checkbox-blank-circle-outline"></i>
                                <span class="hide-menu">Prestasi</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a  
                        class="<?= $_SESSION['page'] == 'users' ? 'active ' : '' ?>sidebar-link waves-effect waves-dark sidebar-link" 
                        href="<?= base_url('admin/users') ?>"
                        aria-expanded="false"
                    >
                        <i class="material-icons">people</i>
                        <span class="hide-menu">Kelola User</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a 
                        class="sidebar-link waves-effect waves-dark sidebar-link" 
                        href="<?= base_url('login/logout') ?>"
                        aria-expanded="false"
                    >
                        <i class="material-icons">logout</i>
                        <span class="hide-menu">Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

<style>
.sidebar-item-sub {
    display: none;
    background: #384350 !important;
}

.sidebar-item .active {
    border-left: 2px solid #2962ff !important;
    color: #fff !important;
}
</style>

<script>
    $('.toggle-menu').on('click', function() {
        let display = $(this).parent().find('.sidebar-item-sub').css('display');
        if (display == 'block') {
            let sub = $(this).parent().find('.sidebar-item-sub').css('display', 'none')
        } else {
            let sub = $(this).parent().find('.sidebar-item-sub').css('display', 'block')
        }
    });
</script>