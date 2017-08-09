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
         <link rel="shortcut icon" href="../assets/apps/img/favicon.ico" />
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-multiselect/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout/css/themes/blue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/css/bootstrap-editable.css" rel="stylesheet"/>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.css" rel="stylesheet">
         <!-- <link href="../assets/js/address.css" rel="stylesheet"/> -->
        <style> body{ font-family: 'Roboto', sans-serif;} </style>
        <style type="text/css" media="screen">
            .aligncenter{
              text-align: center;
              vertical-align: middle !important;
              padding: 5px 10px !important;
            }
            .ellipsis{
              white-space: nowrap; 
              overflow: hidden;
              width: 15em; 
              text-overflow: ellipsis; 
            }
            .border1px{
              border: 1px #000 solid !important;
            }
        </style>
        
    </head>
    <!-- END HEAD -->

    <body class="page-content-white page-sidebar-closed page-header-fixed page-sidebar-fixed page-footer-fixed">

        <div class="page-wrapper">
            <?php include ('../Include/common/topheader.php'); ?>
            <div class="clearfix"> </div>
            <div class="page-container">
                <?php include ('../Include/common/sidebar.php'); ?>
                    <div class="page-content-wrapper">
                        <div class="page-content">

                            <!-- begin -->
                            <div class="row widget-row">
                            <div class="col-md-2">
                                <!-- BEGIN WIDGET THUMB -->
                                <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered"  style="cursor: pointer;" id="all_calls">
                                    <h4 class="widget-thumb-heading">Miles Workbook</h4>
                                    <div class="widget-thumb-wrap">
                                        <i class="widget-thumb-icon bg-purple icon-screen-desktop"></i>
                                        <div class="widget-thumb-body">
                                            <span class="widget-thumb-subtitle">COUNT</span>
                                            <span class="widget-thumb-body-stat" data-counter="counterup" data-value="815">815</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- END WIDGET THUMB -->
                            </div>
                        <div class="col-md-2">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered" style="cursor: pointer;" id="rm_allocate">
                                <h4 class="widget-thumb-heading">RM Allocate</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-green icon-bulb"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">COUNT</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="7,644">7,644</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                        <div class="col-md-2">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered" style="cursor: pointer;" id="my_lead">
                                <h4 class="widget-thumb-heading">My Leads</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-red icon-layers"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">COUNT</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="1,293">1,293</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>                   
                         <div class="col-md-2">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered" style="cursor: pointer;" id="visitor">
                                <h4 class="widget-thumb-heading">Visitors</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-blue icon-users"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">COUNT</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="5,071">5,071</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                         <div class="col-md-2">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered" style="cursor: pointer;" id="net_inquery">
                                <h4 class="widget-thumb-heading">Net Inquiries</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-green-seagreen icon-bar-chart"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">COUNT</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="5,071">5,071</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                    </div>

                    <div class="clearfix"></div>
                            <!-- end -->
                            <!-- BEGIN FOR PORTLET -->
                             <div id="load_mwb"></div>
                            <!--  END  FOR THE PORTLET-->
                            <div class="clearfix"></div>
                        </div>
                    </div>
            </div>
             <div id="chatload"></div>
            <?php include ('../Include/common/footer.php'); ?>
            <div class="scroll-to-top" style="display: none;"><i class="icon-arrow-up"></i></div>
        </div>
        <!-- Modal Begin -->

<!-- Address -->
<div id="mwb_address" class="modal fade" data-backdrop="static" role="dialog" aria-hidden="true" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              Address
            </h4>
          </div>
          <div class="modal-body">
            <div class="portlet-body">
              <div class="form-group has-success">
                <div class="input-group select2-bootstrap-prepend col-md-12">
                  <select class="form-control select2 country">
                      <option></option>
                      <optgroup label="Country">
                          <option value="AK">Address1</option>
                          <option value="HI">Address2</option>
                      </optgroup>
                  </select>
                </div>
              </div>
              <div class="form-group has-success">
                <div class="input-group select2-bootstrap-prepend">
                  <select id="span_small" class="form-control select2">
                      <option></option>
                      <optgroup label="State">
                          <option value="AK">Address1</option>
                          <option value="HI">Address2</option>
                      </optgroup>
                  </select>
                </div>
              </div>
              <div class="form-group has-success">
                <div class="input-group select2-bootstrap-prepend">
                  <select id="single" class="form-control select2">
                      <option></option>
                      <optgroup label="City">
                          <option value="AK">Address1</option>
                          <option value="HI">Address2</option>
                      </optgroup>
                  </select>
                </div>
              </div>
              <div class="form-group has-success">
                  <label class="control-label">Address</label>
                <div class="input-group">
                  <textarea class="form-control" rows="5" cols="100%"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn green-jungle" href="javascript:postDrop()">Update</button>
          </div>
        </div>
    </div>
</div>
<!-- Address -->

<!-- Designation -->
<div id="mwb_designation" class="modal fade" data-backdrop="static" role="dialog" aria-hidden="true" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              Designation
            </h4>
          </div>
          <div class="modal-body">
            <div class="portlet-body">
              <div class="form-group has-success">
                 <div class="input-group col-md-12">
                  <input type="textbox" id="designation" class="form-control">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn green-jungle" id="designationupdate">Update</button>
          </div>
        </div>
    </div>
</div>
<!-- Designation -->

<!-- Education -->
<div id="mwb_education" class="modal fade" data-backdrop="static" role="dialog" aria-hidden="true" data-keyboard="false">
    <input type="hidden" name="educanid" id="educanid" value="">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              Education
            </h4>
          </div>
          <div class="modal-body">
            <div class="portlet-body">
              <div class="form-group">
              <label class="control-label">Bachelors</label>
                <div class="input-group select2-bootstrap-prepend col-md-12">
                  <span class="input-group-addon"><input type="checkbox"> </span>
                  <select id="education1 select2-disable-inputs-single" class="form-control select2" disabled>
                      <option></option>
                      <optgroup label="optgroup-1">
                          <option value="B.Com">B.Com</option>
                          <option value="B.Com - NAAC-A, 1st">B.Com - NAAC-A, 1st</option>
                          <option value="B.Com - pursuing">B.Com - pursuing</option>
                          <option value="BBA / BMS / similar">BBA / BMS / similar</option>
                          <option value="BBA - NAAC-A, 1st">BBA - NAAC-A, 1st</option>
                          <option value="BBA - pursuing">BBA - pursuing</option>
                          <option value="LLB">LLB</option>
                          <option value="B.Tech / B.E">B.Tech / B.E</option>
                          <option value="B.Sc / BCA / others">B.Sc / BCA / others</option>

                      </optgroup>
                      
                  </select>
                </div>
                <!-- 2nd Bachelors  education Begin -->
                 <div class="input-group select2-bootstrap-prepend col-md-12">
                  <span class="input-group-addon"><input type="checkbox"> </span>
                  <select id="education1 select2-disable-inputs-single" class="form-control select2" disabled>
                      <option></option>
                     <optgroup label="optgroup-2">
                          <option value="B.Com">B.Com</option>
                          <option value="B.Com - NAAC-A, 1st">B.Com - NAAC-A, 1st</option>
                          <option value="B.Com - pursuing">B.Com - pursuing</option>
                          <option value="BBA / BMS / similar">BBA / BMS / similar</option>
                          <option value="BBA - NAAC-A, 1st">BBA - NAAC-A, 1st</option>
                          <option value="BBA - pursuing">BBA - pursuing</option>
                          <option value="LLB">LLB</option>
                          <option value="B.Tech / B.E">B.Tech / B.E</option>
                          <option value="B.Sc / BCA / others">B.Sc / BCA / others</option>
                         

                      </optgroup>
                     
                  </select>
                  
                </div>
                <!-- 2nd Bachelors  education end -->
              </div>
              <!-- Masters  education Begin -->
               <div class="form-group">
              <label class="control-label">Masters</label>
                <div class="input-group select2-bootstrap-prepend col-md-12">
                  <span class="input-group-addon"><input type="checkbox"> </span>
                  <select id="education1 select2-disable-inputs-single" class="form-control select2" disabled>
                      <option></option>
                      <optgroup label="optgroup-1">
                          <option value="PGDPA">PGDPA</option>
                          <option value="M.Com">M.Com</option>
                          <option value="M.Com - 1 yr done">M.Com - 1 yr done</option>
                          <option value="MBA">MBA</option>
                          <option value="MBA - 1 yr done">MBA - 1 yr done</option>
                          <option value="MS (Finance)">MS (Finance)</option>
                          <option value="M.Tech / others">M.Tech / others</option>
                          <option value="Any PG Dip (2 yrs)">Any PG Dip (2 yrs)</option>
                          <option value="Any PG Dip (1 yr)">Any PG Dip (1 yr)</option>
                          <option value="Ph.D.">Ph.D.</option>

                      </optgroup>
                      
                  </select>
                </div>
                <!-- 2nd Bachelors  education Begin -->
                 <div class="input-group select2-bootstrap-prepend col-md-12">
                  <span class="input-group-addon"><input type="checkbox"> </span>
                  <select id="education1 select2-disable-inputs-single" class="form-control select2" disabled>
                      <option></option>
                   <optgroup label="optgroup-1">
                          <option value="PGDPA">PGDPA</option>
                          <option value="M.Com">M.Com</option>
                          <option value="M.Com - 1 yr done">M.Com - 1 yr done</option>
                          <option value="MBA">MBA</option>
                          <option value="MBA - 1 yr done">MBA - 1 yr done</option>
                          <option value="MS (Finance)">MS (Finance)</option>
                          <option value="M.Tech / others">M.Tech / others</option>
                          <option value="Any PG Dip (2 yrs)">Any PG Dip (2 yrs)</option>
                          <option value="Any PG Dip (1 yr)">Any PG Dip (1 yr)</option>
                          <option value="Ph.D.">Ph.D.</option>

                      </optgroup>
                     
                  </select>
                  
                </div>
                <!-- 2nd Bachelors  education end -->
              </div>
              <!-- Masters education End -->
            
             <!-- Begin for Professional eduaction -->
            <div class="form-group">
              <label class="control-label">professional</label>
                <div class="input-group select2-bootstrap-prepend col-md-12">
                  <span class="input-group-addon"><input type="checkbox"> </span>
                  <select id="education1 select2-disable-inputs-single" class="form-control select2" disabled>
                      <option></option>
                      <optgroup label="optgroup-1">
                          <option value="CA">CA</option>
                          <option value="CA-Inter">CA-Inter</option>
                          <option value="CWA">CWA</option>
                          <option value="CWA-Inter">CWA-Inter</option>
                          <option value="CS">CS</option>
                          <option value="CS-Inter">CS-Inter</option>
                          <option value="US CPA">US CPA</option>
                          <option value="US CMA">US CMA</option>
                          <option value="US CFA">US CFA</option>

                           <option value="ACCA">ACCA</option>
                          <option value="ACCA - part">ACCA - part</option>
                          <option value="CIMA">CIMA</option>
                          <option value="CIMA - part">CIMA - part</option>

                      </optgroup>
                      
                  </select>
                </div>
                <!-- 2nd Bachelors  education Begin -->
                 <div class="input-group select2-bootstrap-prepend col-md-12">
                  <span class="input-group-addon"><input type="checkbox"> </span>
                  <select id="education1 select2-disable-inputs-single" class="form-control select2" disabled>
                      <option></option>
                     <optgroup label="optgroup-2">
                          <option value="CA">CA</option>
                          <option value="CA-Inter">CA-Inter</option>
                          <option value="CWA">CWA</option>
                          <option value="CWA-Inter">CWA-Inter</option>
                          <option value="CS">CS</option>
                          <option value="CS-Inter">CS-Inter</option>
                          <option value="US CPA">US CPA</option>
                          <option value="US CMA">US CMA</option>
                          <option value="US CFA">US CFA</option>

                           <option value="ACCA">ACCA</option>
                          <option value="ACCA - part">ACCA - part</option>
                          <option value="CIMA">CIMA</option>
                          <option value="CIMA - part">CIMA - part</option>
                      </optgroup>
                  </select>
                </div>
                <!-- 2nd Bachelors  education end -->
                <!-- 3rd Bachelors  education Begin -->
                 <div class="input-group select2-bootstrap-prepend col-md-12">
                  <span class="input-group-addon"><input type="checkbox"> </span>
                  <select id="education1 select2-disable-inputs-single" class="form-control select2" disabled>
                      <option></option>
                     <optgroup label="optgroup-2">
                          <option value="CA">CA</option>
                          <option value="CA-Inter">CA-Inter</option>
                          <option value="CWA">CWA</option>
                          <option value="CWA-Inter">CWA-Inter</option>
                          <option value="CS">CS</option>
                          <option value="CS-Inter">CS-Inter</option>
                          <option value="US CPA">US CPA</option>
                          <option value="US CMA">US CMA</option>
                          <option value="US CFA">US CFA</option>

                           <option value="ACCA">ACCA</option>
                          <option value="ACCA - part">ACCA - part</option>
                          <option value="CIMA">CIMA</option>
                          <option value="CIMA - part">CIMA - part</option>
                      </optgroup>
                  </select>
                </div>
                <!-- 3rd Bachelors  education end -->
              </div>
             <!-- end  for the professional education -->
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn green-jungle updateeducation">Update</button>
          </div>
        </div>
    </div>
</div>
<!-- Education -->

<!-- Email -->
<div id="mwb_email" class="modal fade" data-backdrop="static" role="dialog" aria-hidden="true" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              Email
            </h4>
          </div>
          <div class="modal-body">
            <div class="portlet-body">
              <div class="form-group has-success">
                  <label class="control-label">Primary Email</label>
                <div class="input-group col-md-12">
                  <input type="textbox" id="primaryemail" class="form-control" value="primary@email.com">
                </div>
              </div>
              <div class="form-group has-warning">
                  <label class="control-label">Secondary Email</label>
                <div class="input-group col-md-12">
                  <input type="textbox" id="secondaryemail" class="form-control" value="secondary@email.com">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn green-jungle" id="updateemails">Update</button>
          </div>
        </div>
    </div>
</div>
<!-- Email -->

<!-- AlternateContact -->
<div id="mwb_alternateContact" class="modal fade" data-backdrop="static" role="dialog" aria-hidden="true" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              AlternateContact
            </h4>
          </div>

          <div class="modal-body">
            <div class="portlet-body">
              <div class="form-group has-success">
                <label class="control-label">AlternateContact-1</label>
                <div class="row">
                  <div class="col-md-2">
                    <div class="input-group input-group-sm">
                      <select id="countrycode1" class="form-control select2">
                          <option value="+91">+91</option>
                          <option value="HI">+661</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="input-icon right input-group-sm">
                      <i class="fa fa-check"></i>
                      <input type="text" class="form-control" value="99662241489" id="mobile1">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group has-success">
                <label class="control-label">AlternateContact-2</label>
                <div class="row">
                  <div class="col-md-2">
                    <div class="input-group input-group-sm">
                      <select id="countrycode2" class="form-control select2">
                          <option value="+91">+91</option>
                          <option value="HI">+661</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="input-icon right input-group-sm">
                      <i class="fa fa-check"></i>
                      <input type="text" class="form-control" value="99662241489" id="mobile2">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group has-success">
                <label class="control-label">AlternateContact-3</label>
                <div class="row">
                  <div class="col-md-2">
                    <div class="input-group input-group-sm">
                      <select id="countrycode3" class="form-control select2">
                          <option value="+91">+91</option>
                          <option value="HI">+661</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="input-icon right input-group-sm">
                      <i class="fa fa-check"></i>
                      <input type="text" class="form-control" value="99662241489" id="mobile3">
                    </div>
                  </div>
                </div>
              </div>

            </div>
           </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn green-jungle" id="updatemobile">Update</button>
          </div>
        </div>
    </div>
</div>
<!-- AlternateContact -->


<!-- CommentBox -->
<div id="mwb_commentBox" class="modal fade" data-backdrop="static" role="dialog" aria-hidden="true" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              CommentBox
            </h4>
          </div>
          <div class="modal-body">
            <div class="portlet-body">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                   <!-- BEGIN PORTLET-->
                  <div class="portlet light bordered">
                      <div class="portlet-title">
                         <!--  <div class="caption">
                              <i class="icon-bubble font-hide hide"></i>
                              <span class="caption-subject font-hide bold uppercase">Chats</span>
                          </div> -->
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
                                  <input class="form-control" type="text" placeholder="Type a message here..."  id="chattext"/> 
                              </div><br/>
                                  <div align="center">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn green-jungle"  id="updatechat">Update</button>
                                  </div>
                          </div>
                      </div>
                  </div>
                 <!-- END PORTLET-->
            </div>
          </div>
       </div>
    </div>
</div>
<!-- CommentBox -->


<!-- mwb_visitorBox -->
<div id="mwb_visitorBox" class="modal fade" data-backdrop="static" role="dialog" aria-hidden="true" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              CommentBox
            </h4>
          </div>
          <div class="modal-body">
            <div class="portlet-body">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                   <!-- BEGIN PORTLET-->
                  <div class="portlet light bordered">
                      <div class="portlet-title">
                        <!--   <div class="caption">
                              <i class="icon-bubble font-hide hide"></i>
                              <span class="caption-subject font-hide bold uppercase">Chats</span>
                          </div> -->
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
                             <!--  <div class="input-cont">
                                  <input class="form-control" type="text" placeholder="Type a message here..."  id="chattext"/> 
                              </div><br/> -->
                                  <div align="center">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn green-jungle"  id="updatechat">Update</button>
                                  </div>
                          </div>
                      </div>
                  </div>
                 <!-- END PORTLET-->
            </div>
          </div>
       </div>
    </div>
</div>
<!-- mwb_visitorBox -->



<!-- LeadDetails -->
<div id="mwb_LeadDetails" class="modal fade" data-backdrop="static" role="dialog" aria-hidden="true" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              Enter Lead Details
            </h4>
          </div>
          <div class="modal-body">
            <div class="portlet-body">
              <div class="form-group">
                  <label class="control-label">Lead Name</label>
                <div class="input-group col-md-12">
                  <span class="input-group-addon">
                      <i class="fa fa-user"></i>
                  </span>
                  <input type="textbox" id="single" class="form-control">
                </div>
              </div>
              <div class="form-group">
                  <label class="control-label">Lead Mobile</label>
                <div class="input-group col-md-12">
                  <span class="input-group-addon">
                      <i class="fa fa-phone"></i>
                  </span>
                  <input type="textbox" id="single" class="form-control">
                </div>
              </div>
              <div class="form-group">
                  <label class="control-label">Lead Email</label>
                <div class="input-group col-md-12">
                  <span class="input-group-addon">
                      <i class="fa fa-envelope"></i>
                  </span>
                  <input type="textbox" id="single" class="form-control">
                </div>
              </div>
              <div class="form-group">
                  <label class="control-label">Lead Comments</label>
                  <!-- Put Chatbox Here -->
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn green-jungle" href="javascript:postDrop()">Update</button>
          </div>
        </div>
    </div>
</div>
<!-- LeadDetails -->




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
        <!-- <script src="../assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script> -->
        <!-- DataTable -->
        <script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/js/xeditable-main.js" type="text/javascript"></script>


    </body>



<script>
      // $(document).ready(function(){
      //     $('[data-toggle="popover"]').popover();   
      // }); 

      // for load Miiles Workbook details
      $("#all_calls").on("click",function() { 
          $.ajax({
             url : 'MilesWorkBook/MasterMWB.php',
             success : function(data) { 
                   $("#load_mwb").html(data);
              }
           }); 
      });

      // for load the RM ALLOCATE details
      $("#rm_allocate").on("click",function() { 
          $.ajax({
             url : 'MilesWorkBook/rm_allocate.php',
             success : function(data) { 
                   $("#load_mwb").html(data);
              }
           }); 
      });

      // for load the MY LEADS details
      $("#my_lead").on("click",function() { 
          $.ajax({
             url : 'MilesWorkBook/my_lead.php',
             success : function(data) { 
                   $("#load_mwb").html(data);
              }
         }); 
      });

      // for load the VISITORS details
      $("#visitor").on("click",function() { 
           $.ajax({
               url : 'MilesWorkBook/visitor.php',
               success : function(data) { 
                     $("#load_mwb").html(data);
                }
             }); 
       });

      // for load the NET INQUIRIES details
      $("#net_inquery").on("click",function() { 
            $.ajax({
               url : 'MilesWorkBook/inquiry.php',
               success : function(data) { 
                     $("#load_mwb").html(data);
                }
             }); 
      });
      // for load the MILESSTONE details
       $("#milesstone").on("click",function() { 
            $.ajax({
               url : 'MilesWorkBook/milesstone.php',
               success : function(data) { 
                     $("#load_mwb").html(data);
                }
             }); 
       });
</script>
</html>
