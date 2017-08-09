<?php
include("controller/dbconnect_mysql.php");

   $sql="SELECT * FROM app_users limit 2";
   $result = mysqli_query($conn,$sql);
  $studentsdata = array();
  while($row = mysqli_fetch_assoc($result)){
    $studentsdata[] = $row;
  }
?>

<style type="text/css" media="screen">
 .aligncenter{
  text-align: center;
  vertical-align: middle !important;
  padding: 5px 10px !important;
 }
.ellipsis{
/* white-space: nowrap; */
/* overflow: hidden;*/
    width: 10em; 
    text-overflow: ellipsis; 
    text-align: left;
}
.border1px{
  border: 1px #000 solid !important;
}
</style>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="index.html">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Dashboard</span>
        </li>
    </ul>
    <div class="page-toolbar">
        <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
            <i class="icon-clock"></i>&nbsp;
            <span class="thin uppercase hidden-xs">May 12, 2017 - 17:07</span>&nbsp;
        </div>
    </div>
</div>
<h1 class="page-title"><!-- Blank --></h1>

<div class="row">

  <div class="col-md-12">
    <div class="portlet box blue-madison">
      <div class="portlet-title">
        <div class="caption">
          <i class="fa fa-globe"></i>
          CPA | Candidate Profile
        </div>
      </div>
      <div class="portlet-body">
        <!-- Add Content Here -->
        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                  <thead>
                      <tr>
                          <th class="all txt_center">ID</th>
                          <th class="all txt_center">Candidate Name</th>
                          <th class="all txt_center">Course</th>
                          <th class="all txt_center" >Mobile</th>
                          <th class="none"></th>
                      </tr>
                  </thead>
                  <tbody>
                       <?php 
                       $i=0;
                       foreach ($studentsdata as $value) { 
                              $i++;

                        ?>
                            <tr>
                                <td><a href="#" data-type="text" data-placement="right"><?=$i?></a></td>
                                <td><a href="#" class="username" data-name="txt_name" data-type="text" data-placement="right" data-title="Enter username" data-pk="<?=$value['id']?>" data-url="MWB/ajax.php"><?=$value['txt_name']?></a></td>
                                <td><a href="#" class="course" data-pk="1">Course</a></td><!--data-url="ajax.php" -->
                                <td><a href="#" class="mobilenum" data-type="text" data-placement="right" data-title="Enter Mobile">Mobile</a></td>
                                <td>
                                  <table class="table table-striped table-bordered" width="100%" style="margin-top: -25px !important;margin-left: -30px !important;margin-bottom: -12px !important;width: 100% !important;">
                                    <thead>
                                      <tr>
                                        <th class="txt_center">ID</th>
                                        <th class="txt_center">Registration Id</th>
                                        <th class="txt_center">City</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <td><a href="#" class="candidateid" data-type="text" data-placement="right" data-title="Enter Candidate Id">ID</a></td>
                                      <td><a href="#" class="registrationid" data-type="text" data-placement="right" data-title="Enter username" data-name="txt_registration_id" data-pk="<?=$value['id']?>" data-url="MWB/ajax.php"><?=$value['txt_registration_id']?></a></td>
                                       <td><a href="#" class="city" data-pk="1">City</a></td> <!--data-url="ajax.php" -->
                                    </tbody>
                                  </table>                            
                                </td>
                            </tr>
                        <?php } ?>
                      <!--<tr>
                          <td><a href="#" data-type="text" data-placement="right" >2</a></td>
                          <td><a href="#" class="username" data-type="text" data-placement="right" data-title="Enter username">Student2</a></td>
                          <td><a href="#" class="status" data-pk="2">Course</a></td>
                          <td><a href="#" class="mobilenum" data-type="text" data-placement="right" data-title="Enter Mobile">Mobile</a></td>
                        </tr>
                       <tr>
                          <td><a href="#"  data-type="text" data-placement="right">3</a></td>
                          <td><a href="#" class="username" data-type="text" data-placement="right" data-title="Enter username">Student3</a></td>
                          <td><a href="#" class="status" data-pk="3">Course</a></td>
                          <td><a href="#" class="mobilenum" data-type="text" data-placement="right" data-title="Enter Mobile">Mobile</a></td>
                        </tr>
                       <tr>
                          <td><a href="#"  data-type="text" data-placement="right">3</a></td>
                          <td><a href="#" class="username" data-type="text" data-placement="right" data-title="Enter username">Student3</a></td>
                          <td><a href="#" class="status" data-pk="3">Course</a></td>
                          <td><a href="#" class="mobilenum" data-type="text" data-placement="right" data-title="Enter Mobile">Mobile</a></td>
                        </tr>    -->                     
                  </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

<div class="clearfix"></div>

