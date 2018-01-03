<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WorkAcceptance</title>
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
  <header class="main-header">
    <!-- Logo -->
    <a href="../../temp1.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>RM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>CRM</b>System</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
            </a>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
            </a>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
            </a>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="../../CRMlogin.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
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
        <li class="treeview">
          <a href="#">
            <i class="fa fa-child"></i>
            <span>客户管理</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="../../pages/CustomerManagement/Clue.php"><i class="fa fa-chain"></i> 线索</a></li>
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
        <li class="treeview active">
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
              <li class="active"><a href="../../pages/OfficeSystem/WorkAcceptance.php"><i class="fa fa-bars"></i> 工单受理</a></li>
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
        工单受理
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">办公系统</a></li>
        <li class="active">工单受理</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">工单列表</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="btn-group">
                  <button type="button" class="btn btn-info">删除</button>
              </div>
              <div class="btn-group" style="float: right;">
                <a href="AddWorkAcceptance.php"><button type="button" class="btn btn-info">新建工单</button></a>
              </div>
              <p></p>
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                  <th style="width:3%"><input type="checkbox" id="all" /></th>
                  <th style="width:20%">编号</th>
                  <th style="width:7%">主题</th>
                  <th style="width:7%">客户名</th>
                  <th style="width:6%">状态</th>
                  <th style="width:7%">优先级</th>
                  <th style="width:9%">创建人</th>
                  <th style="width:10%">创建时间</th>
                  <th style="width:10%">到期时间</th>
                  <th style="width:10%">操作</th>
                </thead>
                <tbody id="list">
                  <tr>
                    <td></td>
                    <td>WXD201712290001</td>
                    <td>反馈客户</td>
                    <td>杭州电子科技大学</td>
                    <td>已完成</td>
                    <td>普通</td>
                    <td>admin</td>
                    <td>2017.12.29</td>
                    <td>2018.1.1</td>
                    <td>
                      <div class="btn-group">
                        <a href="ShowWorkAcceptance.php"><button type="button" class="btn btn-default btn-xs">查看</button></a>
                        <a href="EditWorkAcceptance.php"><button type="button" class="btn btn-default btn-xs">修改</button></a>
                        <a><button type="button" class="btn btn-default btn-xs" name="delete">删除</button></a>
                      </div>
                    </td>
                  </tr>
                </tbody>            
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
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
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script type="text/javascript">
  $(document).ready(function (){
    $("input").css("text-align","left")
  });
</script>
<script type="text/javascript">
$(function(){
  $("tr td:first-child").append("<input type='checkbox' name='box' />");
  })
</script>
<script type="text/javascript">
  $(document).ready(function (){
    $("#all").click(function(){
      var userids=this.checked;
      $("input[name=box]").each(function(){
        this.checked=userids;
      });
    });
    $("input[name=box]").click(function(){
      var length=$("input[name=box]:checked").length;
      var len=$("input[name=box]").length;
      if(length==len){
        $("#all").get(0).checked=true;
      }else{
        $("#all").get(0).checked=false;
      }
    }); 
  });
</script>
<script type="text/javascript">  
    $(document).ready(function() {  
        $("button[name='delete']").click(function() {  
            var link = $(this).parents("tr");  
            link.remove();  
        });  
    });  
</script>  
</body>
</html>
