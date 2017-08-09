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
                            <?php include ('MWB/MasterEWB.php'); ?>
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
                                  </select>
                        </div>
                        <div>Enter State
                                    <select name="state" class="form-control">
                                     <option value="">option</option>
                                  </select>
                        </div>
                        <div>Enter City
                                 <select name="city" class="form-control">
                                     <option value="">option</option>
                                  </select>
                        </div>
                        <div>Enter Street Address<textarea name="streetaddress">Street Address</textarea></div>
                    </div>
                    <div class="modal-footer">
                          <button type="button" class="btn btn-default opacity75" data-dismiss="modal" style="padding-left: -26px;padding: 5px 53px;">Cancel</button>
                          <button type="button" class="btn btn-warning" href="javascript:postDrop()" style="padding: 5px 53px;margin-left: -3px;">Update</button>
                </div>
            </div>
        </div>
        </div>

       <div id="dropper" class="modal fade" tabindex="-1" data-backdrop="static" role="dialog" aria-hidden="true">

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

        <!-- <script src="../assets/pages/scripts/components-select2.js" type="text/javascript"></script> -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>

        <script src="../assets/pages/scripts/ui-sweetalert.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/components-bootstrap-multiselect.min.js" type="text/javascript"></script>
        <!-- Multiselect /-->
        <!-- DataTable -->
        <script src="../assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script>
        <!-- DataTable -->
        <script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/js/xeditable-main.js" type="text/javascript"></script>
    <script src="../assets/js/address.js" type="text/javascript"></script>
    </body>

</html>
<script>

$('#dropper').on( "show.bs.modal", function() {
    $('#dropping').summernote({
        height: 150
    });
})
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


  $(".oncall").click(function(){
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
  $(document).delegate('#updateeducation','click', function () {
         var selectededu = $("#selecteducation").val();
        alert(selectededu)
    });

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
</script>


