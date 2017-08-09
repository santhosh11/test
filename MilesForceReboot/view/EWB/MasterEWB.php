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

.btn:not(.btn-sm):not(.btn-lg) {
    width: 25px;
    margin-top: 1px;
}

/*.dt-buttons{
      display: none;
}
*/
</style>
<!-- <div class="page-bar">
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
</div> -->
<h1 class="page-title"><!-- Blank --></h1>
<div class="row">
  <div class="col-md-12" id="cpa_can_pro">
    <div class="portlet box blue-madison">
      <div class="portlet-title">
        <div class="caption">
          <i class="fa fa-globe"></i>
          Enrollement Workbook | {city}
        </div>
      </div>
      <div class="portlet-body">
        <!-- Add Content Here -->
        <table class="table table-striped table-bordered dt-responsive" width="100%" id="sample_1">
          <thead>
            <tr>
              <th class="all txt_center">Can No.</th>
              <th class="all txt_center">Full Name</th>
              <th class="all txt_center">Level/Batch</th>
              <th class="all txt_center">Contact</th>
              <th class="all txt_center">Company</th>
              <th class="all txt_center">Mode</th>
              <th class="all txt_center">Fee Status</th>
              <th class="all txt_center">Last Connect (CM)</th>
              <th class="all txt_center">Next Follow Up Date</th>
              <th class="all txt_center">Last Connect (Acads)</th>
              <th class="all txt_center">NFD (Acads)</th>
         <!-- <th class="all txt_center">Course</th>
              <th class="all txt_center">Subject</th> -->
              <th class="all">Action</th>
              <th class="none showtd"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="getotherdetails" canid="1">M-AUD-2456</td>
              <td><a href="#" class="username" data-name="txt_name" data-type="username" firstname="shivam" lastname="Chopra" data-placement="right" data-title="Enter username" data-pk="1" >Shivam Chopra</a></td>
              <td><a href="#" class="level" data-pk="1">CPA-M7-01</a></td>
              <td><a href="#" class="primarymobilenum" data-type="primarymobilenum" data-placement="right" data-mobile="8888888888" data-pcountrycode="+91" data-title="Enter Mobile">8888888888</a>&nbsp;<i class="fa fa-phone-square font-green-jungle oncall" style="font-size:20px;" callcanid="1" mobile="8888888888"></i></td>
              <td><a href="#" class="company" data-placement="right" data-title="Select Company">Deloitte</a></td>
              <td>Online</td>
              <td>Overdue 2017</td>
              <td>12-Jul-2017 | Sandra</td>
              <td>2017-06-01</td>
              <!-- <td><a href="#" class="course" data-placement="right" data-title="Select Course">CPA</a></td>
              <td><a href="#" class="subject" data-placement="right" data-title="Select Subject">AUD</a></td> -->
              <td>Hasham</td>
              <td>2017-06-01</td>
              
              <td>
                    <button style="width:100%;" class="btn btn-xs btn-danger mt-sweetalert" data-title="Are you Sure To Delete {CanID}" data-message="Are you sure you want to delete the candidate"
                      data-type="warning" data-show-confirm-button="true" data-confirm-button-class="btn-success" data-canid="1" data-show-cancel-button="true" data-cancel-button-class="btn-default" data-close-on-confirm="false" data-close-on-cancel="false" data-confirm-button-text='Yes, I agree'
                      data-cancel-button-text='No, I disagree' data-popup-title-success="Thank you" data-popup-message-success="Candidate Deleted Succesfully" data-popup-title-cancel="Cancelled" data-popup-message-cancel="Candidate is not Deleted">Delete Canididate
                    </button>
              </td>
             
               <td>
                <div class="row otherdetails1">
                  
                </div> 
                 
              </td> 
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script src="../assets/js/jquery-2.0.3.min.js"></script>
<script>
  $(document).delegate('#updateeducation', 'click', function() {  alert("In update");
        var selectededu =  $("#selecteducation").val();
        alert(selectededu)
   });
</script>
 <!-- <script src="../assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script> -->
 <!-- <script src="../assets/js/xeditable-main.js" type="text/javascript"></script> -->
