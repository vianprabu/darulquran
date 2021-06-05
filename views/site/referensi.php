<?php

/* @var $this yii\web\View */

$this->title = 'SDM';
?>

<?php
$akun = 0;
?>

<style>
    .content {
        padding: 0
    }

    .depan {
        display: flex;
        justify-content: center;
        padding: 20px
    }

    .btn {
        margin-left: 10px;
        margin-bottom: 10px
    }

    .icon {
        width: 70px;
        height: 70px;
        line-height: 60px;
        border-radius: 5px;
        background-color: #ededed;
        box-shadow: 5px 5px 8px #888;
        margin: 5px;
    }

    .text-icon {
        line-height: 20px;
        margin-top: 10px;
    }
</style>
<div class="site-index">
    <section class="content">
        <div class="jumbotron">
            <div class="depan">
                <img src="logo.jpg" class="img-responsive">
            </div>

            <?php if ($akun = Yii::$app->user->isGuest) {
            } ?>
            <?php if ($akun = Yii::$app->user->identity) : ?>

                <div class="row" style="margin-left: 0px; margin-right: 0px; margin-bottom: 50px">
                    <div style="display:flex; flex-wrap: wrap; flex-direction: row; justify-content: center; box-sizing: border-box;">
                        <div class="icon">
                            <a href="index.php?r=statuspegawai">
                                <img src="icon/statuspegawai.png" width="48px" style="margin-top: 10px">
                                <div class="text-icon">Status Pegawai</div>
                            </a>
                        </div>
                        <div class="icon">
                            <a href="index.php?r=pangkatgolongan">
                                <img src="icon/pangkatgolongan.png" width="45px" style="margin-top: 10px">
                                <div class="text-icon">Pangkat Golongan</div>
                            </a>
                        </div>
                        <div class="icon">
                            <a href="index.php?r=jenispegawai">
                                <img src="icon/jenispegawai.png" width="55px" style="margin-top: 10px">
                                <div class="text-icon">Jenis Pegawai</div>
                            </a>
                        </div>
                        <div class="icon">
                            <a href="index.php?r=jenjang">
                                <img src="icon/jenjang.png" width="60px" style="margin-top: 10px">
                                <div class="text-icon">Jenjang Sekolah</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-left: 0px; margin-right: 0px; margin-bottom: 50px">
                    <div style="display:flex; flex-wrap: wrap; flex-direction: row; justify-content: center; box-sizing: border-box;">
                        <div class="icon">
                            <a href="index.php?r=statuspengajuan">
                                <img src="icon/presensi.png" width="65px" style="margin-top: 10px">
                                <div class="text-icon">Status Pengajuan</div>
                            </a>
                        </div>
                        <div class="icon">
                            <a href="index.php?r=jeniscuti">
                                <img src="icon/presensi.png" width="65px" style="margin-top: 10px">
                                <div class="text-icon">Jenis Cuti</div>
                            </a>
                        </div>
                        <div class="icon">
                            <a href="index.php?r=jenisizin">
                                <img src="icon/presensi.png" width="65px" style="margin-top: 10px">
                                <div class="text-icon">Jenis Izin</div>
                            </a>
                        </div>
                        <div class="icon">
                            <a href="index.php?r=jenispresensi">
                                <img src="icon/presensi.png" width="65px" style="margin-top: 10px">
                                <div class="text-icon">Jenis Presensi</div>
                            </a>
                        </div>
                    </div>
                </div>


            <?php endif ?>
        </div>

    </section>
</div>