<!-- Content Wrapper. Contains page content -->
<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\User;
use common\models\UserSearch;
use common\rbac\models\Role;
use yii\base\Model;
use yii\web\NotFoundHttpException;

$this->title = 'settings';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Settings</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <section class="col-lg-12 connectedSortable ui-sortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="nav-tabs-custom" style="cursor: move;">
                    <!-- Tabs within a box -->
                    <ul class="nav nav-tabs pull-right ui-sortable-handle">
                        <li class="active"><a href="#profile" data-toggle="tab" aria-expanded="true">Profile Settings</a></li>
                        <li class=""><a href="#billing" data-toggle="tab" aria-expanded="true">Billing and Payments Settings</a></li>
                        <li class=""><a href="#notification" data-toggle="tab" aria-expanded="false">Notifications</a></li>
                        
                        <li class="pull-left header"><i class="ion ion-ios-gear-outline"></i> Settings</li>
                    </ul>
                    <div class="tab-content no-padding">
                        <!-- Morris chart - Sales -->
                        <div class="chart tab-pane active" id="profile">
                            <section class="content">
<div class="col-md-2"></div>
                                <div class="col-md-8 well-sm">

                                    <!-- general form elements -->
                                    <div>
                                        <?php if (isset($_GET['update'])) { ?>
                                            <h1 style="padding-left: 10px">Update Profile</h1>
                                            <?=
                                            $this->render('_form', [
                                                'user' => $user,
                                                'role' => $role,
                                            ])
                                            ?>

<?php } 
else {
    ?>
                                        </div>

                                        <!-- form start -->

                                        <div class="box-body">
                                            <?=
                                            DetailView::widget([
                                                'model' => $model,
                                                'attributes' => [
                                                    // 'id',
                                                    'username',
                                                    'email:email',
                                                    //'password_hash',
                                                    [
                                                        'attribute' => 'status',
                                                        'value' => $model->getStatusName(),
                                                    ],
                                                    [
                                                        'attribute' => 'item_name',
                                                        'value' => $model->getRoleName(),
                                                    ],
                                                    //'auth_key',
                                                    //'password_reset_token',
                                                    //'account_activation_token',
                                                    'created_at:date',
                                                    'updated_at:date',
                                                ],
                                            ])
                                            ?>

                                        </div><!-- /.box-body -->

                                        <!-- /.box-body -->


                                        <div class="center-block" style="padding-left: 15px">
                                           
                                            <?= Html::a(Yii::t('app', 'Edit'), ["settings?update=$model->id"], [
                                                'class' => 'btn-lg btn-primary'])
                                            ?>
                                           
                                        </div>
<?php } ?>
                                    <hr>


                                </div><!-- /.box -->


<div class="col-md-2"></div>




                            </section>

                        </div> 



                        <div class="chart tab-pane" id="billing">
                            <br>
                            <div class="col-md-2"></div>
                            <form role="form" class="col-md-8">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="Product name">Product Name</label>
                      <input type="text" class="form-control" id="product_name" placeholder="Product name">
                    </div>
                    <div class="form-group">
                      <label for="">Product Charges</label>
                      <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control">
                    <span class="input-group-addon">.00</span>
                  </div>
                    </div>
                       <div class="form-group">
                      <label for="">Transaction Charges</label>
                      <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control">
                    <span class="input-group-addon">.00</span>
                  </div>
                    </div>
                       <div class="form-group">
                      <label for="">Tex Percentage</label>
                      <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-addon">%</span>
                  </div>
                    </div>
               
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Edit</button>
                  </div>
                </form>
                            <div class="col-md-2"></div>
                        </div> 
                        <div class="chart tab-pane" id="notification">
                            notification
                            
                        </div>
                    </div><!-- /.nav-tabs-custom -->

            </section>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->