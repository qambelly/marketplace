<?php

use common\rbac\models\AuthItem;
use nenad\passwordStrength\PasswordInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;
use common\models\UserSearch;
use common\rbac\models\Role;
use yii\base\Model;
use yii\web\NotFoundHttpException;

/* @var $this yii\web\View */
/* @var $user common\models\User */
/* @var $form yii\widgets\ActiveForm */
/* @var $role common\rbac\models\Role; */
?>
<div class="">
    <!-- general form elements -->
    <div class="box box-primary">

        <!-- form start -->
        <?php $form = ActiveForm::begin(['id' => 'form-user']); ?>

        <div class="box-body">
            <div class="form-group">
                <?= $form->field($user, 'username') ?>
            </div>
            <div class="form-group">
                <?= $form->field($user, 'email') ?>
            </div>
            <div class="form-group">

                <?php if ($user->scenario === 'create'): ?>
                    <?= $form->field($user, 'password')->widget(PasswordInput::classname(''), []) ?>
                <?php else: ?>
                    <?=
                            $form->field($user, 'password')->widget(PasswordInput::classname(), [])
                            ->passwordInput(['placeholder' => Yii::t('app', 'New pwd ( if you want to change it )')])
                    ?>       
<?php endif ?>
            </div>
            <div class="form-group">
<?= $form->field($user, 'status')->dropDownList($user->statusList) ?>
            </div>
            <div class="form-group">
                <?php foreach (AuthItem::getRoles() as $item_name): ?>
                    <?php $roles[$item_name->name] = $item_name->name ?>
<?php endforeach ?>
            </div>
            <div class="form-group">
<?= $form->field($role, 'item_name')->dropDownList($roles) ?>
            </div>
         
        </div><!-- /.box-body -->

        <div class="box-footer">
            <?=
            Html::submitButton($user->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $user->isNewRecord ? 'btn btn-success' : 'btn btn-primary'])
            ?>
            <?php
            if (isset($_GET['update'])) {
                $back_id = $_GET['update'];
                ?>

                <?= Html::a(Yii::t('app', 'Back'), ["user/settings?admin&id=$back_id"], ['class' => 'btn btn-default']); ?>
            <?php } else { ?>
    <?= Html::a(Yii::t('app', 'Cancel'), ['user/index'], ['class' => 'btn btn-default']) ?>
<?php } ?>

        </div>

<?php ActiveForm::end(); ?>

    </div><!-- /.box -->


</div>

































<div class="user-form">










    <div class="form-group">     

    </div>


</div>
