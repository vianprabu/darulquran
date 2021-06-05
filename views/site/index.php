<?php

use webvimark\modules\UserManagement\models\User;
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
        width: 140px;
        height: 140px;
        line-height: 140px;
        border-radius: 5px;
        background-color: #ededed;
        box-shadow: 5px 5px 8px #888;
        margin: 5px;
    }

    .myicon {
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
            <?php if ($akun = User::hasRole(['admin'], $superAdminAllowed = true)) : ?>

                <div class="row" style="margin-left: 0px; margin-right: 0px; margin-bottom: 50px">
                    <div style="display:flex; flex-wrap: wrap; flex-direction: row; justify-content: center; box-sizing: border-box;">
                        <div class="icon">
                            <a href="index.php?r=site/referensi">
                                <img src="icon/master.png" width="80px" style="margin-top: 10px">
                                <div class="text-icon">Data Referensi</div>
                            </a>
                        </div>
                        <div class="icon">
                            <a href="index.php?r=site/master">
                                <img src="icon/master.png" width="80px" style="margin-top: 10px">
                                <div class="text-icon">Data Master</div>
                            </a>
                        </div>
                        <div class="icon">
                            <a href="index.php?r=site/transaksi">
                                <img src="icon/transaksi.png" width="80px" style="margin-top: 10px">
                                <div class="text-icon">Data Transaksi</div>
                            </a>
                        </div>
                    </div>
                </div>

            <?php endif ?>
            <?php if ($akun = User::hasRole(['pegawai'], $superAdminAllowed = false)) : ?>
                <div class="row" style="margin-left: 0px; margin-right: 0px; margin-bottom: 50px">
                    <div style="display:flex; flex-wrap: wrap; flex-direction: row; justify-content: center; box-sizing: border-box;">

                        <div class="myicon">
                            <a href="index.php?r=pegawai/viewpegawai">
                                <img src="icon/presensi.png" width="60px" style="margin-top: 10px">
                                <div class="text-icon">Profil</div>
                            </a>
                        </div>
                        <div class="myicon">
                            <a href="index.php?r=presensi/create">
                                <img src="icon/presensi.png" width="60px" style="margin-top: 10px">
                                <div class="text-icon">Presensi</div>
                            </a>
                        </div>
                        <div class="myicon">
                            <a href="index.php?r=cuti/createcuti">
                                <img src="icon/cuti.png" width="50px" style="margin-top: 10px">
                                <div class="text-icon">Cuti</div>
                            </a>
                        </div>
                        <div class="myicon">
                            <a href="index.php?r=izin/createizin">
                                <img src="icon/izin.png" width="50px" style="margin-top: 10px">
                                <div class="text-icon">Izin</div>
                            </a>
                        </div>
                        <div class="myicon">
                            <a href="index.php?r=presensi">
                                <img src="icon/presensi.png" width="60px" style="margin-top: 10px">
                                <div class="text-icon">Logbook</div>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endif ?>
        </div>

    </section>
</div>