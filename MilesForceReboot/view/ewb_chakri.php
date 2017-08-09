<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>MilesSR | EWB</title>
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <meta content="Shivam Chopra" name="author" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-multiselect/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout/css/themes/blue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="../assets/apps/img/favicon.ico" />
        <!-- x-editable (bootstrap version) -->
        <link href="../assets/global/css/bootstrap-editable.css" rel="stylesheet"/>
          <!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.css" rel="stylesheet">
<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.js"></script> -->
        <!-- x-editable (bootstrap version) -->
        <style> body{ font-family: 'Roboto', sans-serif;} 
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
        </style>
    </head>
    <!-- END HEAD -->

    <body class="page-content-white page-sidebar-closed page-header-fixed page-sidebar-fixed page-footer-fixed">
        <div class="page-wrapper">
            <?php include ('common/topheader.php'); ?>
            <div class="clearfix"> </div>
            <div class="page-container">
                <?php include ('common/sidebar.php'); ?>
                    <div class="page-content-wrapper">
                        <div class="page-content">
                            <?php //include ('MWB/MasterEWB.php'); ?>
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
                                                            <td>201-01-01</td>
                                                        
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
                              <div class="clearfix"></div>
                        </div>
                    </div>
            </div>
            <div id="chatload"></div>

            <?php include ('common/footer.php'); ?>
            <div class="scroll-to-top" style="display: none;"><i class="icon-arrow-up"></i></div>
        </div>

         <div id="addressdetails" class="modal fade" tabindex="-1" data-backdrop="static" role="dialog" aria-hidden="true">

            <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                    <label>Enter Address Details</label>
                       <hr>
                        <div>Choose Country
                              <select id="single" class="form-control select2">
                                    <option></option>
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                    <option value="WA">Washington</option>
                                    <option value="WA">Washington</option>
                                    <option value="WA">Washington</option>
                                    <option value="WA">Washington</option>
                                    <option value="WA">Washington</option>
                          </select>
                        </div>
                       <!--  <div>Enter State
                                    <select name="state" class="form-control">
                                     <option value="">option</option>
                                  </select>
                        </div>
                        <div>Enter City
                                 <select name="city" class="form-control">
                                     <option value="">option</option>
                                  </select>
                        </div>
                        <div>Enter Street Address<textarea name="streetaddress">Street Address</textarea></div> -->
                    </div>
                    <div class="modal-footer">
                          <button type="button" class="btn btn-default opacity75" data-dismiss="modal" style="padding-left: -26px;padding: 5px 53px;">Cancel</button>
                          <button type="button" class="btn btn-warning" href="javascript:postDrop()" style="padding: 5px 53px;margin-left: -3px;">Update</button>
                   </div>
            </div>
        </div>
        </div>

       <div id="feeduecommentsmodal" class="modal fade" tabindex="-1" data-backdrop="static" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                    <label>Enter Additional Info</label>
                        <div id="dropping" class="">text...</div>
                    </div>
                    <div class="modal-footer">
                          <button type="button" class="btn btn-default opacity75" data-dismiss="modal" style="padding-left: -26px;padding: 5px 53px;">Cancel</button>
                          <button type="button" class="btn btn-warning" href="javascript:postDrop()" style="padding: 5px 53px;margin-left: -3px;">Update</button>
                </div>
            </div>
        </div>
  </div>
    <div id="additionalinfomodal" class="modal fade" tabindex="-1" data-backdrop="static" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <!-- BEGIN PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-bubble font-hide hide"></i>
                                            <span class="caption-subject font-hide bold uppercase">Chats</span>
                                        </div>
                                        <div class="actions">
                                            <div class="portlet-input input-inline">
                                                <div class="input-icon right" class="dataTables_filter">
                                                    <i class="icon-magnifier"></i>
                                                    <input type="text" class="form-control input-circle" placeholder="search..."  id='search'>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body chatcontent" id="chats">
                                        <div class="scroller" style="height: 525px;" data-always-visible="1" data-rail-visible1="1">
                                            <ul class="chats">
                                                <li class="out">
                                                    <div class="message">
                                                        <span class="arrow"> </span>
                                                        <a href="javascript:;" class="name"> Lisa Wong </a>
                                                        <span class="datetime"> at 20:11 </span>
                                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                    </div>
                                                </li>
                                                <li class="out">
                                                    <div class="message">
                                                        <span class="arrow"> </span>
                                                        <a href="javascript:;" class="name"> Lisa Wong </a>
                                                        <span class="datetime"> at 20:11 </span>
                                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat1 volutpat. </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="chat-form">
                                            <div class="input-cont">
                                                <input class="form-control" type="text" placeholder="Type a message here..." /> 
                                            </div>
                                            <div class="btn-cont">
                                             <button type="button" class="btn green-jungle"  id="addchat">Update</button>
                                                <!-- <span class="arrow"> </span> -->
                                                <!-- <a href="" class="btn blue icn-only" id="addchat">
                                                    <i class="fa fa-check icon-white"></i>
                                                </a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PORTLET-->
                    </div>
            </div>
        </div>
  </div>


     <div id="leaddetailsform" class="modal fade" tabindex="-1" data-backdrop="static" role="dialog" aria-hidden="true">

            <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                    <label>Enter Lead Details</label>
                       <hr>
                        <div>Enter Lead Name<input type="text" name="leadename" value="" class="form-control" placeholder="Enter Lead Name"></div>
                        <div>Enter Lead Mobile<input type="text" name="leademobile" value="" class="form-control" placeholder="Enter Lead Mobile"></div>
                        <div>Enter Lead Email<input type="text" name="leadeemail" value="" class="form-control" placeholder="Enter Lead Email"></div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default opacity75" data-dismiss="modal" style="padding-left: -26px;padding: 5px 53px;">Cancel</button>
                      <button type="button" class="btn btn-warning" href="javascript:postDrop()" style="padding: 5px 53px;margin-left: -3px;">Update</button>
                </div>
            </div>
        </div>
</div>

        <!--[if lt IE 9]>
		<script src="../assets/global/plugins/respond.min.js"></script> <script src="../assets/global/plugins/excanvas.min.js"></script> <script src="../assets/global/plugins/ie8.fix.min.js"></script> 
		<![endif]-->
        <script src="../assets/js/jquery-2.0.3.min.js"></script> <!-- <Added By Chakradhar> -->
        <script src="../assets/js/bootstrap.min.js"></script> <!-- <Added By Chakradhar> -->
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- DataTable -->
        <script src="../assets/js/bootstrap-editable.min.js"></script><!-- <Added By Chakradhar> -->
        <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <!-- <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script> -->
        <!-- DataTable /-->
        <!-- Multiselect -->
        <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>

        <script src="../assets/global/plugins/bootstrap-multiselect/js/bootstrap-multiselect.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <!-- Multiselect /-->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- Multiselect -->
<script src="../assets/pages/scripts/components-select2.js" type="text/javascript"></script>

        
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>

        <script src="../assets/pages/scripts/ui-sweetalert.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/components-bootstrap-multiselect.min.js" type="text/javascript"></script>
        <!-- Multiselect /-->
        <!-- DataTable -->
        <script src="../assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script>
        <!-- DataTable -->
        <script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
        <script src="../assets/js/xeditable-main.js" type="text/javascript"></script>
         <script src="../assets/js/address.js" type="text/javascript"></script>
    </body>

</html>
<script>
 $('#search').keyup(function(){
  // Search text
  var text = $(this).val();
  // Hide all content class element
  $('.chatcontent').hide();
 // Search and show
 $('.chatcontent:contains(' + text + ')').show();
 });



$('#feeduecommentsmodal').on( "show.bs.modal", function() {
    $('#dropping').summernote({
        height: 150
    });
});

$('#additionalinfomodal').on( "show.bs.modal", function() {
   
});

 $(".getotherdetails").click(function(){ 
       var expandcan = $(this).attr("canid");
       loadotherdetails(expandcan);
  });

 function loadotherdetails(expandcan){
           $.ajax({
             url : 'MWB/MasterEWBOtherdetails.php',
              type : 'post',
             data : {
                  "canid" : expandcan
              },
             success : function(data) { 
                    // $(".showtd").css("display","");
                   $(".otherdetails"+expandcan).html(data);
              }
           }); 
 }
$(document).delegate('#updateeducation', 'click', function() {  alert("In update");

        var selectededu = $("#education").val();
        alert(selectededu)
   });

  $(".oncall").click(function(){
     var expandcan = $(this).attr("callcanid");
     var mobile = $(this).attr("mobile");
       loadotherdetails(expandcan);
          $.ajax({
             url : 'ewbchatbox.php',
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

  

  // $(document).delegate('#updateeducation','click', function () {
  //        var selectededu = $("#selecteducation").val();
  //       alert(selectededu)
  //   });

  $(".deletecandidate").click(function(){
     alert(0)
  });

</script>
<script>

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

//make company editable
$('.company').editable({ 

}); 

 //  //make Course editable
 //   $('.course').editable({
 //            type: 'select',
 //            title: 'Select Course',
 //            url: '/post',    
 //            sourceCache: false,
 //            value: 2,
 //            source: "course.php"
 //   });
 // //make subject editable
 //   $('.subject').editable({
 //          type: 'select',
 //          title: 'Select Subject',
 //          url: '/post',    
 //          sourceCache: false,
 //          value: 2,
 //          source: "course.php"
 //      });

    //make mode editable
   $('.mode').editable({
          type: 'select',
          title: 'Select Mode',
          url: '/post',    
          sourceCache: false,
          value: 2,
          source: "course.php"
   });
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

//make Next followup date editable
$('.nextfollowupdate').editable({ 

}); 






  $(document).on('click', '.address', function () {
           var countryvar = $(this).attr("data-country"); 
           var cityvar = $(this).attr("data-city");
           var streetvar = $(this).attr("data-street"); //alert(streetvar)
 //make address editable 
         $('.address').editable({ 
                    send: 'always',
                    url: 'MWB/ajax.php',
                    title: 'Enter Address',
                    showbuttons: 'bottom',
                    value: {
                       country: countryvar,
                       city: cityvar,
                       street: streetvar,
                    },
          });
   });        


$(document).on('click', 'a', function () {
   
       //make Designtaion editable
         $('.designation').editable({ 

         });

   //make Course editable
     $('.experience').editable({
            type: 'select',
            title: 'Select Experience',
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
        //make education editable
    //  $('.education').editable({
    //         type: 'select',
    //         title: 'Select Education',
    //         placement: 'right',
    //         value: 1,
    //         source: [
    //             {value: 1, text: 'B.Com + CA Inter'},
    //             {value: 2, text: 'B.Com'},
    //             {value: 3, text: 'CA Inter'}
    //         ]
    // });

  //make student/professional editable
     $('.studentprof').editable({
            type: 'select',
            title: 'Select Student/Professional',
            placement: 'right',
            value: 1,
            source: [
                {value: 1, text: 'Student'},
                {value: 2, text: 'Professional'}
            ]
    });

//make Email num editable
     $('.email').editable({ 

     });
 //make Alt Email num editable
     $('.altemail').editable({ 

     });

//make alt Mobile num editable
$('.altmobilenum').editable({ 
            send: 'always',
            url: 'MWB/ajax.php',
            title: 'Enter Country code and Mobile',
            showbuttons: 'bottom',
            value: {
                mobilenum: $(this).attr("data-altmobile"),
                countrycode: $(this).attr("data-altcountrycode")
            },
             Countrycode: [
                {value: "+91", text: "India"},
                {value: "+61", text: "Australia"}
            ]
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
//make source editable
$('.source').editable({
            type: 'select',
            title: 'Select Source',
            placement: 'right',
            value: 1,
            source: [
                {value: 1, text: 'Referred by B-CMA-123456'},
                {value: 2, text: 'Referred by B-CMA-1234567'},
            ]
});
//make Country editable
$('.country').editable({
            type: 'select',
            title: 'Select Country',
            placement: 'right',
            value: 1,
            source:"country.json"
});

//make street address editable
$('.streetaddress').editable({ 

});  


//make Additional info editable
 $('.additionalinfo').editable({ 

 });    
//make feeduecomment editable
 $('.feeduecomment').editable({ 

 });


//make Referral editable
$('.corporatereferral').editable({
        type: 'select',
        title: 'Select Referral',
        placement: 'right',
        value: 1,
        source: [
            {value: 1, text: 'Hot Lead'},
            {value: 2, text: 'Hot Lead'},
            {value: 3, text: 'Hot Lead'}
        ]
});

 //make crcomment editable
 $('.crcomment').editable({ 

 });
//make leaddetails editable
 $('.leaddetails').editable({ 

 });
 //make placement editable
 $('.placement').editable({ 
            type: 'select',
            title: 'Select Placement',
            placement: 'right',
            value: 1,
            source: [
                {value: 1, text: 'Recruiter'},
                {value: 2,text: 'Recruiter'}
            ]
 });
  //make sr status editable
 $('.srstatus').editable({ 
            type: 'select',
            title: 'Select SR Status',
            placement: 'right',
            value: 1,
            source: [
                {value: 1, text: 'Referred & Future potential'},
                {value: 2,text: 'Referred & Future potential'}
            ]
 });

   //make sr status editable
 $('.srcomments').editable({ 
    
 });

  //make evaluation editable
 $('.evaluation').editable({ 
            type: 'select',
            title: 'Select Evaluation',
            placement: 'right',
            value: 1,
            source: [
                {value: 1, text: 'Evaluation1'},
                {value: 2,text: 'Evaluation2'}
            ]
 });
 //make aud next exam editable
 $('.audnext').editable({ 
            type: 'select',
            title: 'Select AUD Next Exam',
            placement: 'right',
            value: 1,
            source: [
                {value: 1, text: 'abc'},
                {value: 2,text: 'def'}
            ]
 });
  //make bec next exam editable
 $('.becnext').editable({ 
            type: 'select',
            title: 'Select BEC Next Exam',
            placement: 'right',
            value: 1,
            source: [
                {value: 1, text: 'abc'},
                {value: 2,text: 'def'}
            ]
 });
   //make far next exam editable
 $('.farnext').editable({ 
            type: 'select',
            title: 'Select FAR Next Exam',
            placement: 'right',
            value: 1,
            source: [
                {value: 1, text: 'abc'},
                {value: 2,text: 'def'}
            ]
 });
    //make reg next exam editable
 $('.regnext').editable({ 
            type: 'select',
            title: 'Select REG Next Exam',
            placement: 'right',
            value: 1,
            source: [
                {value: 1, text: 'abc'},
                {value: 2,text: 'def'}
            ]
 });

//make milesfeedback editable
 $('.milesfeedback').editable({ 
            type: 'select',
            title: 'Select milesfeedback',
            placement: 'right',
            value: 1,
            source: [
                {value: 1, text: 'Good'},
                {value: 2,text: 'Average'}
            ]
 });

//make examcomments editable
 $('.examcomments').editable({ 

 });
 //make Academic comments editable
 $('.acacomments').editable({ 

 });
 

});
$("#addchat").click(function(){
      alert("Run ajax call")
});
</script>


