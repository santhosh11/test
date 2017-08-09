
 
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
          VISITOR | {city}
        </div>
      </div>
      <div class="portlet-body">
        <!-- Add Content Here -->
      <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                                            <thead>
                                                <tr>
                                                
                                                     <th class="all txt_center">Can No.</th>
                                                      <th class="all txt_center">Full Name</th>
                                                      <th class="all txt_center">Course</th>
                                                      <th class="all txt_center">Level/Batch</th>
                                                      <th>Contact</th>
                                                      <th class="all txt_center">Company</th>
                                                      <th class="all txt_center">Prof Qual</th>
                                                      <th class="all txt_center">Last Called By</th>
                                                      <th class="all txt_center">LFD</th>
                                                      <th class="all txt_center">NFD</th>
                                                      <th class="all txt_center">Eligibility</th>
                                                      <th class="all">Action</th>
                                                      <th class="none showtd"></th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                             
                                                <tr>
                                                    <td>Garrett</td>
                                                    <td>Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                             
                                                </tr>
                                                <!-- BEGIN -->
                                                <tr>
                                                    <td class="get_mwb_details" canid="1">MWB_1</td>
                                                    <td><a href="#" class="username" data-name="txt_name" data-type="username" firstname="shivam" lastname="Chopra" data-placement="right" data-title="Enter username" data-pk="1" >Shivam Chopra</a></td>
                                                    <td><a href="#" class="level" data-pk="1">CPA</a></td>
                                                     <td><a href="#" class="level" data-pk="1">CPA-M7-01</a></td>
                                                    <td><a href="#" class="primarymobilenum" data-type="primarymobilenum" data-placement="right" data-mobile="987654321" data-pcountrycode="+91" data-title="Enter Mobile">987654321</a>&nbsp;<i class="fa fa-phone-square font-green-jungle onmwbcall" style="font-size:20px;" callcanid="1" mobile="987654321"></i></td>
                                                    <td><a href="#" class="company" data-placement="right" data-title="Select Company">Deloitte</a></td>
                                                  
                                                    <td>CA Inter</td>
                                                    <td>Hasham</td>
                                                    <td></td>
                                                    <!-- <td><a href="#" class="course" data-placement="right" data-title="Select Course">CPA</a></td>
                                                    <td><a href="#" class="subject" data-placement="right" data-title="Select Subject">AUD</a></td> -->
                                                    <td></td>
                                                    <td></td>
                                                    
                                                    <td>
                                                          <button style="width:100%;" class="btn btn-xs btn-danger mt-sweetalert" data-title="Are you Sure To Delete {CanID}" data-message="Are you sure you want to delete the candidate"
                                                            data-type="warning" data-show-confirm-button="true" data-confirm-button-class="btn-success" data-canid="1" data-show-cancel-button="true" data-cancel-button-class="btn-default" data-close-on-confirm="false" data-close-on-cancel="false" data-confirm-button-text='Yes, I agree'
                                                            data-cancel-button-text='No, I disagree' data-popup-title-success="Thank you" data-popup-message-success="Candidate Deleted Succesfully" data-popup-title-cancel="Cancelled" data-popup-message-cancel="Candidate is not Deleted">Delete | Enrolled
                                                          </button>
                                                    </td>
                                                    <td>
                                                      <div class="row otherMWBdetails1">
                                                        
                                                      </div> 
                                                       
                                                    </td> 
                                                  </tr>



                                                  <!-- END -->

                                               
                                              
                                         
                                            </tbody>
                                        </table>
      </div>
    </div>
  </div>

</div>

      
        <script src="../assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script>
 <script src="../assets/js/xeditable-main.js" type="text/javascript"></script>
<script>

   
 $(".get_mwb_details").click(function(){ 
       var expandcan = $(this).attr("canid");
       loadotherdetails(expandcan);
  });

 function loadotherdetails(expandcan){
           $.ajax({
             url : 'MWB/MasterMWBOtherdetails.php',
              type : 'post',
             data : {
                  "canid" : expandcan
              },
             success : function(data) { 
                    // $(".showtd").css("display","");
                   $(".otherMWBdetails"+expandcan).html(data);
              }
           }); 
 }


  $(".onmwbcall").click(function(){
    alert("hi");
     var expandcan = $(this).attr("callcanid");
     var mobile = $(this).attr("mobile");
       loadotherdetails(expandcan);
          $.ajax({
             url : 'chatbox.php',
              type : 'post',
             data : {
                  "canid" : expandcan,
                   "mobile" :mobile
              },
             success : function(data) { 
                   $("#chatload").html(data);
              }
           }); 
  });


    //toggle `popup` / `inline` mode
 $.fn.editable.defaults.mode = 'popup';     
   
$(document).on('click', '.username', function () {
        var firstnamevar = $(this).attr("firstname");
        var lastnamevar = $(this).attr("lastname");
             //make Candidatename editable
       $('.username').editable({
                send: 'always',
                url: 'MWB/ajax.php',
                title: 'Enter Name',
                value: {
                    firstname: firstnamevar, 
                    lastname:lastnamevar, 
                }
        });
   });

  $(document).on('click', '.primarymobilenum', function () {
         var primarymobile = $(this).attr("data-mobile");
         var pcountrycodeval = $(this).attr("data-pcountrycode");
         
         //make Mobile num editable  //sourceCountry 
                 $('.primarymobilenum').editable({ 
                            send: 'always',
                            url: 'MWB/ajax.php',
                            title: 'Enter Country code and Mobile',
                            showbuttons: 'bottom',
                            value: {
                                mobilenum: primarymobile,
                                countrycode: pcountrycodeval
                            },
                             Countrycode: [
                                {value: "+91", text: "India"},
                                {value: "+61", text: "Australia"}
                            ]
                  });
     }); 
      //make alt Mobile num editable

   $(document).on('click', '.altmobilenum', function () {
                       var altmobile = $(this).attr("data-altmobile");
                       var countrycodeval = $(this).attr("data-altcountrycode");
             //make Mobile num editable  //sourceCountry 
                     $('.altmobilenum').editable({ 
                                send: 'always',
                                url: 'MWB/ajax.php',
                                title: 'Enter Country code and Mobile',
                                showbuttons: 'bottom',
                                value: {
                                    mobilenum: altmobile,
                                    countrycode: countrycodeval
                                },
                                 Countrycode: [
                                    {value: "+91", text: "India"},
                                    {value: "+61", text: "Australia"}
                                ]
                      });
   });      

$(document).on('click', 'a', function () {

  //make level editable
     $('.level').editable({
            type: 'select',
            title: 'Select Level',
            placement: 'right',
            value: 2,
            source: [
                {value: 1, text: 'M-1'},
                {value: 2, text: 'M-2'},
                {value: 3, text: 'M-2'}
            ]
        });
            
          //make Email num editable
         $('.email').editable({ 

         });

       //make nextfollowupdate editable
         $('.nextfollowupdate').editable({ 

         });
         
       //make gender editable
     $('.gender').editable({
            type: 'select',
            title: 'Select Gender',
            placement: 'right',
            value: 2,
            source: [
                {value: 1, text: 'Male'},
                {value: 2, text: 'Female'},
            ]
        });
         

    //make Course editable
     $('.course').editable({
            type: 'select',
            title: 'Select Course',
            placement: 'right',
            value: 2,
            source: [
                {value: 1, text: 'US CPA'},
                {value: 2, text: 'US CMA'},
                 {value: 2, text: 'CFA'},
            ]
        });
       //make Designtaion editable
         $('.designtaion').editable({ 

         });
        //make Course editable
         $('.experience').editable({
                type: 'select',
                title: 'Select Course',
                placement: 'right',
                value: 2,
                source: [
                    {value: 1, text: '+1'},
                    {value: 2, text: '+2'},
                    {value: 2, text: '+3'},
                    {value: 2, text: '+4'},
                    {value: 2, text: '+5'},
                    {value: 2, text: '+6'},
                    {value: 2, text: '+7'},
                ]
        });

          //make Education editable
         $('.education').editable({ 

         });
         
            //make Candidate info editable
         $('.candidateinfo').editable({ 

         });
           //make Candidate info editable
         $('.Company').editable({ 

         });
 //make Course editable
         $('.DataSource').editable({
                type: 'select',
                title: 'Select DataSource',
                placement: 'right',
                value: 2,
                source: [
                    {value: 1, text: 'CA'},
                    {value: 2, text: 'Net Enquiry'},
                    {value: 3, text: 'Physical Enquiry'}
                ]
        });
});
</script>



