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
                            <a href="index.php?r=sekolah">
                                <img src="icon/sekolah.png" width="55px" style="margin-top: 10px">
                                <div class="text-icon">Sekolah</div>
                            </a>
                        </div>
                        <div class="icon">
                            <a href="index.php?r=pegawai">
                                <img src="icon/pegawai.png" width="50px" style="margin-top: 10px">
                                <div class="text-icon">Pegawai</div>
                            </a>
                        </div>
                        <div class="icon">
                            <a href="index.php?r=pendidikanpegawai">
                                <img src="icon/pendidikanpegawai.png" width="55px" style="margin-top: 10px">
                                <div class="text-icon">Pendidikan Pegawai</div>
                            </a>
                        </div>
                        <div class="icon">
                            <a href="index.php?r=anakpegawai">
                                <img src="icon/anakpegawai.png" width="55px" style="margin-top: 10px">
                                <div class="text-icon">Anak Pegawai</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-left: 0px; margin-right: 0px; margin-bottom: 50px">
                    <div style="display:flex; flex-wrap: wrap; flex-direction: row; justify-content: center; box-sizing: border-box;">

                        <div class="icon">
                            <a href="index.php?r=jadwalpresensi">
                                <img src="icon/jadwalpresensi.png" width="50px" style="margin-top: 10px">
                                <div class="text-icon">Jadwal Presensi</div>
                            </a>
                        </div>
                        <div class="icon">
                            <a href="index.php?r=jadwalpresensi-pegawai">
                                <img src="icon/presensi.png" width="65px" style="margin-top: 10px">
                                <div class="text-icon">Jadwal Presensi Pegawai</div>
                            </a>
                        </div>
                        <div class="icon">
                            <a href="index.php?r=targetkinerja">
                                <img src="icon/targetkinerja.png" width="55px" style="margin-top: 10px">
                                <div class="text-icon">Target Kinerja</div>
                            </a>
                        </div>
                        <div class="icon">
                            <a href="index.php?r=user-management%2Fuser%2Findex">
                                <img src="icon/jadwalpresensi.png" width="50px" style="margin-top: 10px">
                                <div class="text-icon">User Pegawai</div>
                            </a>
                        </div>

                    </div>
                </div>


            <?php endif ?>
        </div>

    </section>
</div>