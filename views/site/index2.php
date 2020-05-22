<?php
/* @var $this yii\web\View */
$this->title = 'ระบบจัดเก็บเอกสารประชุมกรรมการบริหาร โรงพยาบาลสว่างวีระวงศ์ จังหวัดอุบลราชธานี';
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
                        <h3 class="box-title">ตอนที่ I ภาพรวมของการบริหารองค์กร</h3>
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
                  <h3 class="box-title">ตอนที่ I ภาพรวมของการบริหารองค์กร</h3>
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
                  <h3 class="box-title">ตอนที่ III กระบวนการดูแลผู้ป่วย (PCT)</h3>
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
                <div class="box box-solid box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">ตอนที่ III กระบวนการดูแลผู้ป่วย (PCT)</h3>
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
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">ตอนที่ II ระบบงานสำคัญของโรงพยาบาล</h3>
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
                <div class="box box-solid box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">ตอนที่ II ระบบงานสำคัญของโรงพยาบาล</h3>
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
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">ตอนที่ IV ผลลัพธ</h3>
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
                        <h3 class="box-title">ตอนที่ IV ผลลัพธ์</h3>
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

        </div>
    </div>
