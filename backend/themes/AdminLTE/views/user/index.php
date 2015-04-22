<?php
use common\helpers\CssHelper;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          <?= Html::encode($this->title) ?>
            <small>User listing</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?php echo $this->params['breadcrumbs'][] = $this->title; ?></li>
        </ol>
    </section>
    <br>
  
 
    <section class="content">
       
    <!-- Main content -->
   
        <div class="">
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title"> <?= Html::encode($this->title) ?></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div id="example1_wrapper" class="dataTables_wrapper form-inline" role="grid">
                      <!--<div class="row"><div class="col-xs-6">
                              <div id="example1_length" class="dataTables_length">
                                  <label><select size="1" name="example1_length" aria-controls="example1">
                                          <option value="10" selected="selected">10</option>
                                          <option value="25">25</option>
                                          <option value="50">50</option>
                                          <option value="100">100</option>
                                      </select> records per page</label>
                              </div>
                          </div>
                          <div class="col-xs-6">
                              <div class="dataTables_filter" id="example1_filter">
                                  <label>Search: <input type="text" aria-controls="example1"></label>
                              </div>
                          </div>
                      </div>-->
                      <table  class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
                        
                  <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                             <span class="pull-right" style="padding-left: 15px">
        <?= Html::a(Yii::t('app', 'Create User'), ['create'], ['class' => 'btn btn-success']) ?>
    </span>
                         <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => FALSE,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'username',
            'email:email',
             //'status',
            [
                'attribute'=>'status',
                'filter' => $searchModel->statusList,
                'value' => function ($data) {
                    return $data->statusName;
                },
                'contentOptions'=>function($model, $key, $index, $column) {
                    return ['class'=>CssHelper::statusCss($model->statusName)];
                }
            ],
            // role
            [
                'attribute'=>'item_name',
                'filter' => $searchModel->rolesList,
                'value' => function ($data) {
                    return $data->roleName;
                },
                'contentOptions'=>function($model, $key, $index, $column) {

                    return ['class'=>CssHelper::roleCss($model->roleName)];
                }
            ],
            // buttons
            ['class' => 'yii\grid\ActionColumn',
            'header' => "Action",
            'template' => '{view} {update} {delete}',
                'buttons' => [
                    'view' => function ($url, $model, $key) {
                        return Html::a('', $url, ['title'=>'View user', 
                            'class'=>'glyphicon glyphicon-eye-open']);
                    },
                    'update' => function ($url, $model, $key) {
                        return Html::a('', $url, ['title'=>'Manage user', 
                            'class'=>'glyphicon glyphicon-wrench']);
                    },
                    'delete' => function ($url, $model, $key) {
                        return Html::a('', $url, 
                        ['title'=>'Delete user', 
                            'class'=>'glyphicon glyphicon-trash',
                            'data' => [
                                'confirm' => Yii::t('app', 'Are you sure you want to delete this user?'),
                                'method' => 'post']
                        ]);
                    }
                ]
            ], // ActionColumn
        ], // columns
    ]); ?>
                           
                 </tr>
                  </tbody>
                      </table>
                      <div class="row">
                          <div class="col-xs-6"><div class="dataTables_info" id="example1_info">Showing 1 to 10 of 57 entries</div>
                              
                          </div>
                          <div class="col-xs-6 pull-right"><div class="dataTables_paginate paging_bootstrap">
                                  <ul class="pagination"><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li><li class="next"><a href="#">Next → </a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
                </div><!-- /.box-body -->
              </div>
            
        </div>
       
    </section><!-- /.content -->
</div>