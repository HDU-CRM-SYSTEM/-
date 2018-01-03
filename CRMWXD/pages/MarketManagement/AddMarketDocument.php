<?php
    require("../../isLogin.php");
?>
<!DOCTYPE html>
<html>
<?php
    require("layout.php");
?>
<title>AddMarketDocument</title>
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
                <li class="treeview active">
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
                        <li class="active"><a href="../../pages/MarketManagement/MarketDocument.php"><i class="fa fa-table"></i> 市场文档</a></li>
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
                市场文档管理
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
                <li><a href="#"></a>市场管理</li>
                <li class="active">市场管理</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">新建市场文档</h3>
                        </div>
                        <div class="box-body">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">文档名称</label>
                                    <div class="col-sm-11">
                                        <input id="name" type="text" class="form-control" placeholder="市场名称">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">文档信息</label>
                                    <div class="col-sm-11">
                    <textarea id="editor1" name="editor1" rows="6" cols="155" placeholder="市场信息描述"
                              style="width: 100%; height: 120px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">市场地址</label>
                                    <div class="col-sm-11">
                                        <input id="address" type="text" class="form-control" placeholder="市场所在地址">
                                    </div>
                                </div>
<!--                                <div class="form-group">-->
<!--                                    <label class="col-sm-1 control-label">创建时间</label>-->
<!--                                    <div class="col-sm-3">-->
<!--                                        <input type="date" class="form-control">-->
<!--                                    </div>-->
<!--                                </div>-->
                            </form>
                            <p class="showmessage"></p>
                            <div class="pull-left">
                                <button id="submit" type="button" class="btn btn-default">确认</button>
                                <button id="return" type="button" class="btn btn-default">取消</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
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
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
    $(document).ready(function(){
        $("#submit").on("click",function(){
            var name=$("#name").val();
            var message=$("#editor1").val();
            var address=$("#address").val();
            $.ajax({
                type:"post",
                url:"action_document.php?action=add",
                data:{
                    name:name,
                    message:message,
                    address:address
                },
                dataType:"json",
                success:function(data){
                    $(".showmessage").html(data.message);
                    if(data.code==0){
                        setTimeout(function(){
                            window.location="MarketDocument.php";
                        },1000)
                    }
                }
            })
        })
        $("#return").on("click",function(){
            window.history.back();
        })
    })
</script>
</body>
</html>
