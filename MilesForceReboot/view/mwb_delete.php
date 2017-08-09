<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>MilesSR | Blank Page Layout</title>
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <meta content="Shivam Chopra" name="author" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-multiselect/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout/css/themes/blue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="../assets/apps/img/favicon.ico" />
        <!-- x-editable (bootstrap version) -->
        <link href="../assets/global/css/bootstrap-editable.css" rel="stylesheet"/>
          
        <!-- x-editable (bootstrap version) -->
        <style> body{ font-family: 'Roboto', sans-serif;} </style>
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
                            <?php include ('MWB/MasterMWB.php'); ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
            </div>
            <?php include ('common/footer.php'); ?>
            <div class="scroll-to-top" style="display: none;"><i class="icon-arrow-up"></i>/div>
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
        <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <!-- DataTable /-->
        <!-- Multiselect -->
        <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-multiselect/js/bootstrap-multiselect.js" type="text/javascript"></script>
        <!-- Multiselect /-->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- Multiselect -->
        <script src="../assets/pages/scripts/components-bootstrap-multiselect.min.js" type="text/javascript"></script>
        <!-- Multiselect /-->
        <!-- DataTable -->
        <script src="../assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script>
        <!-- DataTable -->
        <script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/js/xeditable-main.js" type="text/javascript"></script>

    </body>

</html>
<script>
    //toggle `popup` / `inline` mode
 $.fn.editable.defaults.mode = 'popup';     
   
$(document).on('click', '.username', function () {
        var firstnamevar = $(this).attr("firstname");
        var lastnamevar = $(this).attr("lastname");
             //make Candidatename editable
       $('.username').editable({
                send: 'always',
                url: 'MWB/updatestudentname.php',
              success: function (response) {
                    if(response === false) {
                        console.log('remote error from success');
                        return 'remote error';
                    }
                },
                error: function (response) {
                    console.log('remote error from fail');
                    return 'remote error';
                },
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
