<?php
/* @var $this yii\web\View */
 $this->title = 'ระบบจัดเก็บเอกสารประชุมทีม FAR โรงพยาบาลสว่างวีระวงศ์ จังหวัดอุบลราชธานี (ปีงบประมาณ 2563)' ; 
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;
use yii\db\Query;
use app\models\HaDocuments;
use app\models\Group;


?>
<div class="site-index">

    <!-- <div class="jumbotron"> -->
    <!-- <h1>ระบบจัดเก็บเอกสารประชุมกรรมการบริหาร โรงพยาบาลสว่างวีระวงศ์</h1> -->
    <!-- </div> -->
<center><h3 class="box-title">อุปกรณ์แท็บเล็ตและมือถือสแกน QR CODE ด้านล่าง เพื่อเข้าสู่หน้าเวบนี้</h3></center>
 <center><img src="http://164.115.41.114/meetha63/web/img/qrcodeurl.png" "width=200 height=200"></center>
<br>

    <div class="body-content">
      <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Uploads</span>
                    <span class="info-box-number pull-left badge bg-blue">
                      <?=$model = HaDocuments::find()
                        ->count();
                      ?>
                    </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-aqua"><i class="fa fa-user-circle"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">USER</span>
                    <span class="info-box-number pull-left badge bg-green">
                      <?php echo dektrium\user\models\User::find()->count(); ?>
                    </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number pull-left badge bg-red">
                      <?=$model = Group::find()
                        ->count();
                      ?>
                    </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <!-- /.col -->
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">DEMO</span>
                    <span class="info-box-number">0</span>
                  </div>
                </div>
              </div>
              <!-- /.col -->
              <!-- /.col -->
            </div>
        <div class="row">
            <!-- <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">ตุลาคม2562</h3>
                    </div>
                    <div class="box-body">
                        <?php
                        echo ListView::widget([
                            'dataProvider' => $dataProvider,
                            'itemView' => '/group/_item',
                            'layout' => '{items}',
                        ]);
                        ?>
                    </div>
                </div>
            </div> -->
            <div class="col-md-6">
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">ตุลาคม2562</h3>
                </div>

                <div class="box-body">
                  <?php
                  echo ListView::widget([
                    'dataProvider' => $dataProvider,
                    'itemView' => '/group/_item',
                    'layout' => '{items}',
                  ]);
                  ?>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">พฤศจิกายน2562</h3>
                </div>
                <div class="box-body">
                  <?php
                  echo ListView::widget([
                      'dataProvider' => $ha,
                      'itemView' => '/group/_item',
                      'layout' => '{items}',
                  ]);
                  ?>
                </div>
              </div>
            </div>


            <!-- <div class="col-md-6">
                <div class="box box-solid box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">พฤศจิกายน2562</h3>
                    </div>
                    <div class="box-body">
                        <?php
                        echo ListView::widget([
                            'dataProvider' => $ha,
                            'itemView' => '/group/_item',
                            'layout' => '{items}',
                        ]);
                        ?>
                    </div>
                </div>
            </div> -->


            <div class="col-md-6">
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">ธันวาคม2562</h3>
                </div>
                <div class="box-body">
                  <?php
                  echo ListView::widget([
                      'dataProvider' => $had,
                      'itemView' => '/group/_had',
                      'layout' => '{items}',
                  ]);
                  ?>
                </div>
              </div>
            </div>

            <!-- <div class="col-md-6">
                <div class="box box-solid box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">ธันวาคม2562</h3>
                    </div>
                    <div class="box-body">
                        <?php
                        echo ListView::widget([
                            'dataProvider' => $had,
                            'itemView' => '/group/_had',
                            'layout' => '{items}',
                        ]);
                        ?>
                    </div>
                </div>
            </div> -->


            <div class="col-md-6">
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">มกราคม2563</h3>
                </div>
                <div class="box-body">
                  <?php
                  echo ListView::widget([
                      'dataProvider' => $hadc,
                      'itemView' => '/group/_hadc',
                      'layout' => '{items}',
                  ]);
                  ?>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-6">
                <div class="box box-solid box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">มกราคม2563</h3>
                    </div>
                    <div class="box-body">
                        <?php
                        echo ListView::widget([
                            'dataProvider' => $hadc,
                            'itemView' => '/group/_hadc',
                            'layout' => '{items}',
                        ]);
                        ?>
                    </div>
                </div>
            </div> -->


            <div class="col-md-6">
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">กุมภาพันธ์2563</h3>
                </div>
                <div class="box-body">
                  <?php
                  echo ListView::widget([
                      'dataProvider' => $hadd,
                      'itemView' => '/group/_hadd',
                      'layout' => '{items}',
                  ]);
                  ?>
                </div>
              </div>
            </div>

            <!-- <div class="col-md-6">
                <div class="box box-solid box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">กุมภาพันธ์2563</h3>
                    </div>
                    <div class="box-body">
                        <?php
                        echo ListView::widget([
                            'dataProvider' => $hadd,
                            'itemView' => '/group/_hadd',
                            'layout' => '{items}',
                        ]);
                        ?>
                    </div>
                </div>
            </div> -->


            <div class="col-md-6">
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">มีนาคม2563</h3>
                </div>
                <div class="box-body">
                  <?php
                  echo ListView::widget([
                      'dataProvider' => $hade,
                      'itemView' => '/group/_hade',
                      'layout' => '{items}',
                  ]);
                  ?>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-6">
                <div class="box box-solid box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">มีนาคม2563</h3>
                    </div>
                    <div class="box-body">
                        <?php
                        echo ListView::widget([
                            'dataProvider' => $hade,
                            'itemView' => '/group/_hade',
                            'layout' => '{items}',
                        ]);
                        ?>
                    </div>
                </div>
            </div> -->


 <div class="col-md-6">
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">เมษายน2563</h3>
                </div>
                <div class="box-body">
                  <?php
                  echo ListView::widget([
                      'dataProvider' => $hadf,
                      'itemView' => '/group/_hadf',
                      'layout' => '{items}',
                  ]);
                  ?>
                </div>
              </div>
            </div>

            <!-- <div class="col-md-6">
                <div class="box box-solid box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">เมษายน2563</h3>
                    </div>
                    <div class="box-body">
                        <?php
                        echo ListView::widget([
                            'dataProvider' => $hadf,
                            'itemView' => '/group/_hadf',
                            'layout' => '{items}',
                        ]);
                        ?>
                    </div>
                </div>
            </div> -->

            <div class="col-md-6">
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">พฤษภาคม2563</h3>
                </div>
                <div class="box-body">
                  <?php
                  echo ListView::widget([
                      'dataProvider' => $hadg,
                      'itemView' => '/group/_hadg',
                      'layout' => '{items}',
                  ]);
                  ?>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-6">
                <div class="box box-solid box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">พฤษภาคม2563</h3>
                    </div>
                    <div class="box-body">
                        <?php
                        echo ListView::widget([
                            'dataProvider' => $hadg,
                            'itemView' => '/group/_hadg',
                            'layout' => '{items}',
                        ]);
                        ?>
                    </div>
                </div>
            </div> -->

 <div class="col-md-6">
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">มิถุนายน2563</h3>
                </div>
                <div class="box-body">
                  <?php
                  echo ListView::widget([
                      'dataProvider' => $hadh,
                      'itemView' => '/group/_hadh',
                      'layout' => '{items}',
                  ]);
                  ?>
                </div>
              </div>
            </div>

            <!-- <div class="col-md-6">
                <div class="box box-solid box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">มิถุนายน2563</h3>
                    </div>
                    <div class="box-body">
                        <?php
                        echo ListView::widget([
                            'dataProvider' => $hadh,
                            'itemView' => '/group/_hadh',
                            'layout' => '{items}',
                        ]);
                        ?>
                    </div>
                </div>
            </div> -->

            <div class="col-md-6">
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">กรกฏาคม2563</h3>
                </div>
                <div class="box-body">
                  <?php
                  echo ListView::widget([
                      'dataProvider' => $hadi,
                      'itemView' => '/group/_hadi',
                      'layout' => '{items}',
                  ]);
                  ?>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-6">
                <div class="box box-solid box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">กรกฏาคม2563</h3>
                    </div>
                    <div class="box-body">
                        <?php
                        echo ListView::widget([
                            'dataProvider' => $hadi,
                            'itemView' => '/group/_hadi',
                            'layout' => '{items}',
                        ]);
                        ?>
                    </div>
                </div>
            </div> -->

<div class="col-md-6">
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">สิงหาคม2563</h3>
                </div>
                <div class="box-body">
                  <?php
                  echo ListView::widget([
                      'dataProvider' => $hadj,
                      'itemView' => '/group/_hadj',
                      'layout' => '{items}',
                  ]);
                  ?>
                </div>
              </div>
            </div>

            <!-- <div class="col-md-6">
                <div class="box box-solid box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">สิงหาคม2563</h3>
                    </div>
                    <div class="box-body">
                        <?php
                        echo ListView::widget([
                            'dataProvider' => $hadj,
                            'itemView' => '/group/_hadj',
                            'layout' => '{items}',
                        ]);
                        ?>
                    </div>
                </div>
            </div> -->

            <div class="col-md-6">
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">กันยายน2563</h3>
                </div>
                <div class="box-body">
                  <?php
                  echo ListView::widget([
                      'dataProvider' => $hadk,
                      'itemView' => '/group/_hadk',
                      'layout' => '{items}',
                  ]);
                  ?>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-6">
                <div class="box box-solid box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">กันยายน2563</h3>
                    </div>
                    <div class="box-body">
                        <?php
                        echo ListView::widget([
                            'dataProvider' => $hadk,
                            'itemView' => '/group/_hadk',
                            'layout' => '{items}',
                        ]);
                        ?>
                    </div>
                </div>
            </div> -->



        </div>
    </div>
