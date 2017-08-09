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
        
        <link href="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-beta.3/css/select2.min.css" rel="stylesheet" type="text/css" />
        
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

                                       <!--  <div class="m-heading-1 border-green m-bordered">
                                            <h3>Remote Data Fetching Via Ajax</h3>
                                            <p> The theme's styles work in
                                                <a href="http://getbootstrap.com/css/?#forms-horizontal">Bootstrap's Horizontal Forms</a> and offers support for
                                                <a href="http://getbootstrap.com/css/?#horizontal-form-group-sizes">Horizontal Form Group Sizes</a>, too. </p>
                                        </div> -->
                                        <!-- <form class="form-horizontal">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-10">
                                                    <select id="select2-button-addons-single-input-group-sm" class="form-control js-data-example-ajax" multiple>
                                                        <option value="2126244" selected="selected">twbs/bootstrap</option>
                                                        <option value="3620194" selected="selected">select2/select2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form> -->


<div>Stavka
      <select class="form-control input-sm select2-multiple" id="education" multiple>
             <!-- <select id="select2-button-addons-single-input-group-sm" class="form-control js-data-example-ajax" multiple> -->
               <option value="2126244">twbs/bootstrap</option>
                <option value="3620194">select2/select2</option>
    </select>
</div>
<br />
<br />
<button type="button" id="updateeducation">update</button>
<br />
<br />
<div id="output"></div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
            </div>


            <?php include ('common/footer.php'); ?>
            <div class="scroll-to-top" style="display: none;"><i class="icon-arrow-up"></i></div>
        </div>
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
        <script src="../assets/js/xeditable-main.js" type="text/javascript"></script>
    <script src="../assets/js/address.js" type="text/javascript"></script> </body>



</html>

<script >
    $("#updateeducation").click(function(){
       var selectededu = $("#education").val();
        alert(selectededu)
    });
</script>

