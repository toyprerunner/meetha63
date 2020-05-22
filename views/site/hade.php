
<?php

use yii\widgets\ListView;
use yii\helpers\Url;

echo ListView::widget([
    'dataProvider' => $hade,
    'itemView' => '/group/_hade',
    'layout' => '{items}',
]);
?>
<br>
<a href="<?= Url::to(['group/index','cat_id' => 6]); ?>" class="btn btn-primary">นโยบายและแผนงานทั้งหมด</a>
