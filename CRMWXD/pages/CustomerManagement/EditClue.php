<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EditClue</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php
        require("../../header.php");
    ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
        <?php
            require("../../aside.php");
        ?>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">导航栏</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-globe"></i>
            <span>市场管理</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="../../pages/MarketManagement/Market.php"><i class="fa fa-table"></i> 市场管理</a></li>
              <li><a href="../../pages/MarketManagement/MarketActivity.php"><i class="fa fa-table"></i> 市场活动</a></li>
              <li><a href="../../pages/MarketManagement/MarketDocument.php"><i class="fa fa-table"></i> 市场文档</a></li>
              <li><a href="../../pages/MarketManagement/MarketAnalysis.php"><i class="fa fa-file-o"></i> 市场分析</a></li>
            </ul>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-child"></i>
            <span>客户管理</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li class="active"><a href="../../pages/CustomerManagement/Clue.php"><i class="fa fa-chain"></i> 线索</a></li>
              <li><a href="../../pages/CustomerManagement/CluePool.php"><i class="fa fa-pencil-square-o"></i> 线索池</li>
              <div style="width:100%; height:1px; border-top:1px solid #999; clear:both;"></div>
              <li><a href="../../pages/CustomerManagement/Customer.php"><i class="fa fa-user-md"></i> 客户</a></li>
              <li><a href="../../pages/CustomerManagement/CustomerPool.php"><i class="fa fa-pencil-square-o"></i> 客户池</a></li>
              <li><a href="../../pages/CustomerManagement/CustomerCare.php"><i class="fa fa-hand-stop-o"></i> 客户关怀</a></li>
              <li><a href="../../pages/CustomerManagement/CustomerContact.php"><i class="fa fa-user-md"></i> 客户联系人</a></li>
              <div style="width:100%; height:1px; border-top:1px solid #999; clear:both;"></div>
              <li><a href="../../pages/CustomerManagement/RecycleBin.php"><i class="fa fa-recycle"></i> 回收站</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gg-circle"></i>
            <span>销售管理</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="../../pages/SalesManagement/BusinessOpportunity.php"><i class="fa  fa-exclamation-circle"></i> 商机</a></li>
              <li><a href="../../pages/SalesManagement/Quotation.php"><i class="fa  fa-pencil-square-o"></i> 报价单</a></li>
              <li><a href="../../pages/SalesManagement/SalesContract.php"><i class="fa fa-file-text-o"></i> 销售合同</a></li>
            </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-hand-stop-o"></i>
            <span>办公系统</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="../../pages/OfficeSystem/Task.php"><i class="fa fa-tasks"></i> 任务</a></li>
              <li><a href="../../pages/OfficeSystem/Schedule.php"><i class="fa fa-calendar"></i> 日程</a></li>
              <li><a href="../../pages/OfficeSystem/Knowledge.php"><i class="fa fa-book"></i> 知识</a></li>
              <li><a href="../../pages/OfficeSystem/WorkLog.php"><i class="fa fa-magic"></i> 工作日志</a></li>
              <li><a href="../../pages/OfficeSystem/WorkAcceptance.php"><i class="fa fa-bars"></i> 工单受理</a></li>
              <li><a href="../../pages/OfficeSystem/Examination.php"><i class="fa fa-times-circle-o"></i> 审批</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        编辑线索
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">客户管理</a></li>
        <li class="active">线索</li>
      </ol>
    </section>
    <section class="content">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">主要信息</h3>
        </div>
        <form class="form-horizontal" method="post" action="dealClue.php?action=update">
            <?php
                require("../../dbconfig.php");
                $id=$_GET['id'];
                $sql="select * from clue where id={$id}";
                $res=mysqli_query($con,$sql);
                $row=mysqli_fetch_assoc($res);
            ?>
          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="负责人" class="control-label col-md-1" style="width: 20% ">负责人</label>
                  <div>
                      <input type="hidden" name="hidden" value="<?php echo $id;?>" />
                    <input type="text" class="control-label" name="chargeName" style="width: 40%" value="<?php echo $row['chargeName'];?>">
                    <input type="checkbox" name="putintopool">
                    <font style="color: #00a65a">放进线索池</font>
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="来源" class="control-label col-md-1" style="width: 20%">来源</label>
                  <div>
                    <select class="form-control select2" name="origin" style="width: 40%;">
                      <option <?php echo ($row['origin']=='合作伙伴')?'selected':'';?> >合作伙伴</option>
                      <option <?php echo ($row['origin']=='来源2')?'selected':'';?> >来源2</option>
                      <option <?php echo ($row['origin']=='来源3')?'selected':'';?> >来源3</option>
                    </select>
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="职位" class="control-label col-md-1" style="width: 20%">职位</label>
                  <div>
                    <input type="text" name="post" class="control-label" style="width: 40%" value="<?php echo $row['post'];?>">
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="手机" class="control-label col-md-1" style="width: 20%">手机</label>
                  <div>
                    <input type="text" name="telephone" class="control-label" style="width: 40%" value="<?php echo $row['telephone'];?>">
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="下次联系时间" class="control-label col-md-1" style="width: 20%">下次联系时间</label>
                  <div>
                    <input type="date" name="nexttime" class="control-label" style="width: 40%">
                  </div>                  
                </div>
              </div> 
              <div class="col-md-6">
                <div class="form-group">
                  <label for="公司名" class="control-label col-md-1" style="width: 20%">公司名</label>
                  <div>
                    <input type="text" name="company" class="control-label" style="width: 60%" value="<?php echo $row['company'];?>">
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="联系人姓名" class="control-label col-md-1" style="width: 20%">联系人姓名</label>
                  <div>
                    <input type="text" name="contact" class="control-label" required="required" style="width: 60%" value="<?php echo $row['contact'];?>">
                    <font style="color:#f56954">*必填项</font>
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="尊称" class="control-label col-md-1" style="width: 20%">尊称</label>
                  <div>
                    <select class="form-control select2" name="sex" style="width: 60%;">
                      <option <?php echo ($row['sex']=='先生')?'selected':''; ?> >先生</option>
                      <option <?php echo ($row['sex']=='女士')?'selected':''; ?> >女士</option>
                    </select>
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="邮箱" class="control-label col-md-1" style="width: 20%">邮箱</label>
                  <div>
                    <input type="email" class="control-label" name="email" style="width: 60%" value="<?php echo $row['email'];?>">
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="下次联系内容" class="control-label col-md-1" style="width: 20%">下次联系内容</label>
                  <div>
                    <input type="text" class="control-label" name="nextcontent" style="width: 60%" value="<?php echo $row['nextcontent'];?>">
                  </div>                  
                </div>
              </div>   
              <div class="col-md-12">  
                <label for="地址" class="control-label col-md-1" style="width: 9%">地址</label>
                <div col-md-11>
                    <input type="text" name="province" class="control-label" style="width: 10%" value="<?php echo $row['province'];?>">
                    <input type="text" name="city" class="control-label" style="width: 10%" value="<?php echo $row['city'];?>">
                    <input type="text" name="area" class="control-label" style="width: 10%" value="<?php echo $row['area'];?>">
                    <input type="text" name="street" class="control-label" style="width: 10%" value="<?php echo $row['street'];?>">
                  </div>
              </div> 
              <div class="col-md-12">
                <h4>附加信息</h4>
              </div>    
              <div class="col-md-12">
                <div class="form-group">
                  <label for="备注" class="col-md-1 control-label">备注</label>
                  <div class="col-md-11">
                    <textarea id="editor1" name="remark" rows="6" cols="155"
                    style="width: 100%; height: 120px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $row['remark'];?></textarea>
                  </div>
                </div> 
              </div>
            </div>
            <div class="btn-group col-md-12" style="text-align:center;">
              <a ><button type="submit" class="btn btn-success" id="check">确认</button></a>
              <a href="Clue.php"><button type="button" class="btn btn-success" id="check">转化为客户</button></a>
              <a href="Clue.php"><button type="button" class="btn btn-success" id="back">返回</button></a>
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script type="text/javascript">
  $(document).ready(function (){
    $("input").css("text-align","left")
  });
</script>
</body>
</html>
