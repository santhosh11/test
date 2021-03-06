<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
<head>
        <meta charset="utf-8" />
        <title>MilesForce | EWB | V2.1</title>
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
        <!-- <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.css" rel="stylesheet"> -->
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
            .flag-text { margin-left: 10px; }
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

                                 <?php //include ('EnrollWorkBook/MasterEWB.php'); ?>
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
                                                      <th class="all aligncenter">Can No.</th>
                                                      <th class="all aligncenter">Full Name</th>
                                                      <th class="all aligncenter">Level/Batch</th>
                                                      <th class="all aligncenter">Contact</th>
                                                      <th class="all aligncenter">Company</th>
                                                      <th class="all aligncenter">Mode</th>
                                                      <th class="all aligncenter">Fee Status</th>
                                                      <th class="all aligncenter">Last Connect (CM)</th>
                                                      <th class="all aligncenter">NFD (CM)</th>
                                                      <th class="all aligncenter">Last Connect (Acads)</th>
                                                      <th class="all aligncenter">NFD (Acads)</th>
                                                      <th class="all">Action</th>
                                                      <th class="none showtd"></th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr class="text-center">
                                                      <td style="vertical-align: middle;" class="getotherdetails" canid="1">M-AUD-2456</td>
                                                      <td style="vertical-align: middle;"><a href="#" id="username1"  onclick="fullnameedit(1)" data-name="txt_name" data-type="username" firstname="Chandra Shekhar" lastname="Azad" data-placement="right" data-title="Enter username" data-pk="1" >Chandra Shekhar Azad</a></td>
                                                      <td style="vertical-align: middle;"><a href="#" id="level1" onclick="updatelevel(1)"  data-pk="1">CPA-M7-01</a></td>
                                                      <td style="vertical-align: middle;"><a href="#" id="primarymobilenum1"  onclick="primarymobileedit(1)"  data-type="primarymobilenum" data-placement="right" data-mobile="8888888888" data-pcountrycode="+91" data-title="Enter Mobile">8888888888</a>&nbsp;<i class="fa fa-phone-square font-green-jungle oncall" style="font-size:20px;" callcanid="1" mobile="8888888888"></i></td>
                                                      <td style="vertical-align: middle;"><a href="#" class="company" data-placement="right" data-title="Select Company">Deloitte</a></td>
                                                      <td style="vertical-align: middle;">Online</td>
                                                      <td style="vertical-align: middle;">Overdue 2017</td>
                                                      <td style="vertical-align: middle;">12-Jul-2017<p class="btn-info">Sandra</p></td>
                                                      <td style="vertical-align: middle;">2017-06-01</td>
                                                      <td style="vertical-align: middle;">18-Jul-2017<p class="btn-info">Hasham</p></td>
                                                      <td style="vertical-align: middle;">2017-06-01</td>
                                                      <td style="vertical-align: middle;">
                                                          <button style="width:100%;" class="btn btn-xs btn-danger mt-sweetalert" data-title="Are you Sure To Delete {CanID}" data-message="Are you sure you want to delete the candidate"
                                                            data-type="warning" data-show-confirm-button="true" data-confirm-button-class="btn-success" data-canid="1" data-show-cancel-button="true" data-cancel-button-class="btn-default" data-close-on-confirm="false" data-close-on-cancel="false" data-confirm-button-text='Yes, I agree'
                                                            data-cancel-button-text='No, I disagree' data-popup-title-success="Thank you" data-popup-message-success="Candidate Deleted Succesfully" data-popup-title-cancel="Cancelled" data-popup-message-cancel="Candidate is not Deleted">Delete
                                                          </button>
                                                      </td>
                                                      <td>
                                                        <div class="row otherdetails1"></div> 
                                                      </td>
                                                    </tr>
                                                    <tr class="text-center">
                                                      <td style="vertical-align: middle;" class="getotherdetails" canid="2">M-AUD-2456</td>
                                                      <td style="vertical-align: middle;"><a href="#" id="username2" onclick="fullnameedit(2)" data-name="txt_name" data-type="username" firstname="shivam" lastname="chopra" data-placement="right" data-title="Enter username" data-pk="2" >shivam chopra</a></td>
                                                      <td style="vertical-align: middle;"><a href="#" id="level2" onclick="updatelevel(2)" data-pk="2">CPA-M7-01</a></td>
                                                      <td style="vertical-align: middle;"><a href="#" id="primarymobilenum2" onclick="primarymobileedit(2)" data-type="primarymobilenum" data-placement="right" data-mobile="87878787878" data-pcountrycode="+91" data-title="Enter Mobile">5555555555</a>&nbsp;<i class="fa fa-phone-square font-green-jungle oncall" style="font-size:20px;" callcanid="2" mobile="87878787878"></i></td>
                                                      <td style="vertical-align: middle;"><a href="#" class="company" data-placement="right" data-title="Select Company">miles</a></td>
                                                      <td style="vertical-align: middle;">Online</td>
                                                      <td style="vertical-align: middle;">Overdue 2017</td>
                                                      <td style="vertical-align: middle;">12-Jul-2017<p class="btn-info">Sandra</p></td>
                                                      <td style="vertical-align: middle;">2017-06-01</td>
                                                      <td style="vertical-align: middle;">18-Jul-2017<p class="btn-info">Hasham</p></td>
                                                      <td style="vertical-align: middle;">2017-06-01</td>
                                                      <td style="vertical-align: middle;">
                                                          <button style="width:100%;" class="btn btn-xs btn-danger mt-sweetalert" data-title="Are you Sure To Delete {CanID}" data-message="Are you sure you want to delete the candidate"
                                                            data-type="warning" data-show-confirm-button="true" data-confirm-button-class="btn-success" data-canid="2" data-show-cancel-button="true" data-cancel-button-class="btn-default" data-close-on-confirm="false" data-close-on-cancel="false" data-confirm-button-text='Yes, I agree'
                                                            data-cancel-button-text='No, I disagree' data-popup-title-success="Thank you" data-popup-message-success="Candidate Deleted Succesfully" data-popup-title-cancel="Cancelled" data-popup-message-cancel="Candidate is not Deleted">Delete
                                                          </button>
                                                      </td>
                                                      <td>
                                                        <div class="row otherdetails2"></div> 
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

            <?php include ('../Include/common/footer.php'); ?>
            <div class="scroll-to-top" style="display: none;"><i class="icon-arrow-up"></i></div>
  </div>
<!-- // Modal Begins -->


<!-- Designation -->
<div id="designation" class="modal fade" data-backdrop="static" role="dialog" aria-hidden="true" data-keyboard="false">
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
                  <input type="hidden" id="descanid" value="">
                  <input type="textbox" id="designationtext" class="form-control" placeholder="Enter Designation">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn green-jungle designationupdate">Update</button>
          </div>
        </div>
    </div>
</div>
<!-- Designation -->


<!-- Education -->
<div id="education" class="modal fade" data-backdrop="static" role="dialog" aria-hidden="true" data-keyboard="false">
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
                  <span class="input-group-addon"><input type="checkbox" id="educheck1"> </span>
                  <select id="education1" class="form-control select2" disabled>
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
                  <span class="input-group-addon"><input type="checkbox" id="educheck2"> </span>
                  <select id="education2" class="form-control select2" disabled>
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
                  <span class="input-group-addon"><input type="checkbox" id="educheck3"> </span>
                  <select id="education3" class="form-control select2" disabled>
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
                  <span class="input-group-addon"><input type="checkbox" id="educheck4"> </span>
                  <select id="education4" class="form-control select2" disabled>
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
                  <span class="input-group-addon"><input type="checkbox" id="educheck5"> </span>
                  <select id="education5" class="form-control select2" disabled>
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
                  <span class="input-group-addon"><input type="checkbox" id="educheck6"> </span>
                  <select id="education6" class="form-control select2" disabled>
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
                  <span class="input-group-addon"><input type="checkbox" id="educheck7"> </span>
                  <select id="education7" class="form-control select2" disabled>
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
            <button type="button" class="btn green-jungle updateselectededucation">Update</button>
          </div>
        </div>
    </div>
</div>
<!-- Education -->


<!-- Email -->
<div id="email" class="modal fade" data-backdrop="static" role="dialog" aria-hidden="true" data-keyboard="false">
    <input type="hidden" name="emailcanid" id="emailcanid" value="emailcanid">
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
            <button type="button" class="btn green-jungle updateemails">Update</button>
          </div>
        </div>
    </div>
</div>
<!-- Email -->



<!-- AlternateContact -->
<div id="alternateContact" class="modal fade" data-backdrop="static" role="dialog" aria-hidden="true" data-keyboard="false">
   <input type="hidden" name="contactcanid" id="contactcanid" value="">
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
                          <option value="">Select</option>
                          <option value="+91">India +91</option>
                          <option value="HI">America+61</option>
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
            <button type="button" class="btn green-jungle updatemobile">Update</button>
          </div>
        </div>
    </div>
</div>
<!-- AlternateContact -->


<!-- Address -->
<div id="address" class="modal fade" data-backdrop="static" role="dialog" aria-hidden="true" data-keyboard="false">
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


<!-- Additional info CommentBox -->
<div id="addinfocommentBox" class="modal fade" data-backdrop="static" role="dialog" aria-hidden="true" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              Additional Info
            </h4>
          </div>
          <div class="modal-body">
            <div class="portlet-body">
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
                                  <input class="form-control" type="text" placeholder="Type a message here..."  id="chattext"/> 
                              </div><br/>
                                  <div align="center">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn green-jungle updatechat">Update</button>
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
<!-- Additional info CommentBox -->

<!-- Fee due CommentBox -->
<div id="feeduecommentBox" class="modal fade" data-backdrop="static" role="dialog" aria-hidden="true" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              Fee Due CommentBox
            </h4>
          </div>
          <div class="modal-body">
            <div class="portlet-body">
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
                                    <button type="button" class="btn green-jungle updatechat">Update</button>
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
<!-- Fee due CommentBox -->

<!-- Corporate CommentBox -->
<div id="corporatecommentBox" class="modal fade" data-backdrop="static" role="dialog" aria-hidden="true" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              Corporate CommentBox
            </h4>
          </div>
          <div class="modal-body">
            <div class="portlet-body">
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
                                  <input class="form-control" type="text" placeholder="Type a message here..."  id="chattext"/> 
                              </div><br/>
                                  <div align="center">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn green-jungle updatechat">Update</button>
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
<!-- Corporate CommentBox -->

<!-- Corporate CommentBox -->
<div id="commentBox" class="modal fade" data-backdrop="static" role="dialog" aria-hidden="true" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
               CommentBox
            </h4>
          </div>
          <div class="modal-body">
            <div class="portlet-body">
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
                                  <input class="form-control" type="text" placeholder="Type a message here..."  id="chattext"/> 
                              </div><br/>
                                  <div align="center">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn green-jungle updatechat">Update</button>
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
<!-- Corporate CommentBox -->

<!-- LeadDetails -->
<div id="LeadDetails" class="modal fade" data-backdrop="static" role="dialog" aria-hidden="true" data-keyboard="false">
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



<!-- Modal Ends // -->


        <!--[if lt IE 9]> <script src="../assets/global/plugins/respond.min.js"></script> <script src="../assets/global/plugins/excanvas.min.js"></script> <script src="../assets/global/plugins/ie8.fix.min.js"></script> <![endif]-->
        <script src="../assets/js/jquery-2.0.3.min.js"></script> <!-- <Added By Chakradhar> -->
        <script src="../assets/js/bootstrap.min.js"></script> <!-- <Added By Chakradhar> -->
        <script src="../assets/js/bootstrap-editable.min.js"></script><!-- <Added By Chakradhar> -->
        
        <!-- Global Scripts -->
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-multiselect/js/bootstrap-multiselect.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- Global Scripts ./ -->
        <!-- Custom Scripts -->
        <script src="../assets/pages/scripts/ui-sweetalert.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/components-select2.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/components-bootstrap-multiselect.min.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script>
        <script src="../assets/js/xeditable-main.js" type="text/javascript"></script>
        <!-- Custom Scripts ./ -->
        
        <!-- Layout Scripts -->
        <script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <!-- Layout Scripts ./ -->
        <!---chat script-->
        <script src="../assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
         <script src="../assets/js/countries.js" type="text/javascript"></script>
        
        <!---chat script-->
      
    </body>

</html>
<script>
$(".getotherdetails").click(function(){ 
       var expandcan = $(this).attr("canid");
       loadotherdetails(expandcan);
});

function loadotherdetails(expandcan){ 
    $.ajax({
        url : 'EnrollWorkBook/Master_EWB_Details.php',
        type : 'post',
        data : {
            "canid" : expandcan
        },
       success : function(data) { 
        //element.removeClass('parent')
        // $('tr').removeClass('parent'); // removes all highlights from tr's
        // $(this).addClass('parent'); // adds the highlight to this row
        // jQuery('table tr.parent').not(this).removeClass('parent');
        // $('table tr.parent').removeClass('parent');
        // $('table tr.child').not("getotherdetails sorting_1").remove();//remove();
           $(".otherdetails"+expandcan).html(data);
        }
     }); 
}

$(document).on('click', '.oncall', function () {
     var expandcan = $(this).attr("callcanid");
     var mobile = $(this).attr("mobile");
       loadotherdetails(expandcan);
          $.ajax({
             url : 'EnrollWorkBook/ewbchatbox.php',
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

</script>
<script>
  $.fn.editable.defaults.mode = 'popup';     
   
   function  fullnameedit(canid){ 
           $('#username'+canid).editable({
                 send: 'always',
                  url: 'EnrollWorkBook/ajax.php',  
                  ajaxOptions: {
                     cache: true,
                      dataType: 'post'
                  },
                   params: {
                     action: 'updatename',//to find the code search with action in ajax.php file 
                     column1:'first_name',
                     column2:'last_name'
                  },
                  autotext:"never ",
                   value: {
                      firstname: $("#username"+canid).attr("firstname"), 
                      lastname:$("#username"+canid).attr("lastname"), 
                  },
                  success: function(response, newValue) {
                     // $( "#Response" ).load( "../ajax/get/{{issue_obj.id}}/response/" );
                  }
          });
   }
//make level editable
function updatelevel(canid){
  $('#level'+canid).editable({
    type: 'select',
    title: 'Select Level',
    placement: 'right',
    value: $('#level'+canid).attr("data-pk"),
    source: [
      {value: 1, text: 'M-1'},
      {value: 2, text: 'M-2'},
      {value: 3, text: 'M-2'}
    ]
  });
}
// $(document).on('click', '.primarymobilenum', function () {
  function  primarymobileedit(canid){ 
      //make Mobile num editable  //sourceCountry 
      $('#primarymobilenum'+canid).editable({
                  send: 'always',
                  url: 'EnrollWorkBook/ajax.php',  
                  title: 'Enter Country code and Mobile',
                  ajaxOptions: {
                      dataType: 'post'
                  },
                params: {
                     action: 'updateprimarycontact', //to find the code search with action in ajax.php file 
                     column1:'countrycode',
                     column2:'primarymobile'
                  },
                value: {
                  mobilenum: $("#primarymobilenum"+canid).attr("data-mobile"),
                  countrycode: $("#primarymobilenum"+canid).attr("data-pcountrycode"),
                },
               Countrycode: [
                  {value: "+91", text: "India"},
                  {value: "+61", text: "Australia"}
              ]
       }); 
}
//make company editable
  $('.company').editable({ 
  });


//make Next followup date editable
  $('.nextfollowupdate').editable({ 
  });

function updatedesignation(canid,designation){ 
   $("#descanid").val(canid);
   $("#designationtext").val(designation);
   $('#designation').modal('show');    
}

function updateeducation(canid,education){
   $("#educanid").val(canid);
   $(".select2-selection__rendered").html("");
   $('input:checkbox').removeAttr('checked');
   alert("run ajax call and get existing education and preselect ");
   $('#education').modal('show');    
}

function updateexperience(candid,experience){ 
     //make experience editable
        $(".experience"+candid).editable({
          type: 'select',
          title: 'Select Experience',
          placement: 'right',
          value: experience,
          source: [
              {value: 1, text: '+1'},
              {value: 2, text: '+2'},
              {value: 3, text: '+3'},
              {value: 4, text: '+4'},
              {value: 5, text: '+5'},
              {value: 6, text: '+6'},
              {value: 7, text: '+7'},
          ]
        });
}

function updatestudentprof(canid,stuprof){
   //make student/professional editable
      $('.studentprof'+canid).editable({
          type: 'select',
          title: 'Select Student/Professional',
          placement: 'right',
          value: stuprof,
          source: [
              {value: 1, text: 'Student'},
              {value: 2, text: 'Professional'}
          ]
      });
}

function updateemail(canid,pemail,semail){
     $("#emailcanid").val(canid);
     $("#primaryemail").val(pemail);
     $("#secondaryemail").val(semail);
     $('#email').modal('show');  
}
function updatecontact(canid){
     $("#contactcanid").val(canid);
     $('#alternateContact').modal('show');  
}

function updategender(canid,genderval){
 //make gender editable
      $('.gender'+canid).editable({
          type: 'select',
          title: 'Select Gender',
          placement: 'right',
          value: genderval,
          source: [
              {value: 1, text: 'Male'},
              {value: 2, text: 'Female'},
          ]
      });
}
function updateenrollmentdate(canid){
 //make enrollmentdate editable
      $('.enrollmentdate'+canid).editable({
      });
}

function updateenrollmentdate(canid){
      //make enrollmentdate editable
      $('.enrollmentdate'+canid).editable({
      });
}
function updatesource(canid,sourceval){
   //make source editable
      $('.source'+canid).editable({
          type: 'select',
          title: 'Select Source',
          placement: 'right',
          value: sourceval,
          source: [
              {value: 1, text: 'Referred by B-CMA-123456'},
              {value: 2, text: 'Referred by B-CMA-1234567'},
          ]
      });
}
//make evaluation editable
function updateevolution(candid,experience){ 
     $('.evaluation'+candid).editable({ 
                send: 'always',
                type: 'select',
                title: 'Select Evaluation',
                url: 'EnrollWorkBook/ajax.php',  
                ajaxOptions: {
                 cache: true,
                  dataType: 'post'
                },
                params: {
                 action: 'updateevaluation',//to find the code search with action in ajax.php file 
                 column1:'evaluation'
                },
                autotext:"never ",
                value: 1,
                source: [
                    {value: 1, text: 'Not yet initiated'},
                    {value: 2,text: 'WIP'},
                    {value: 3,text: 'Done'},
                    {value: 4,text: 'Status Unknown'}
                ],
                success: function(response, newValue) {
                 // $( "#Response" ).load( "../ajax/get/{{issue_obj.id}}/response/" );
                }
     });
 } 
 //make milesfeedback editable
 function updatents(candid,experience){ 
     $('.NTS'+candid).editable({ 
              send: 'always',
              type: 'select',
              title: 'Select Evaluation',
              url: 'EnrollWorkBook/ajax.php',  
              ajaxOptions: {
               cache: true,
                dataType: 'post'
              },
            params: {
             action: 'updatents',//to find the code search with action in ajax.php file 
             column1:'nts'
            },
            autotext:"never ",
            value: 1,
            source: [
                {value: 1, text: 'Not yet initiated'},
                {value: 2, text: 'WIP'},
                {value: 3, text: 'Done'},
                {value: 4,text: 'Status Unknown'}
            ]
     });
}

//make aud next exam editable
function updateaudtarget(candid,experience){
      $('.audnext'+candid).editable({
            send: 'always',
            type: 'select',
            title: 'Select AUD Target',
            url: 'EnrollWorkBook/ajax.php',  
             ajaxOptions: {
               cache: true,
                dataType: 'post'
              },
            params: {
             action: 'updateaudtarget',//to find the code search with action in ajax.php file 
             column1:'audtarget'
            },
           autotext:"never ",
            value: 1,
            source: [
                {value: 1, text: 'Cleared'},
                {value: 2, text: 'Undecided'},
                {value: 3, text: 'Drop-out'},
                {value: 4, text: 'Q1-2017'},
                {value: 5, text: 'Q2-2017'},
                {value: 6, text: 'Q3-2017'},
                {value: 7, text: 'Q4-2017'},
                {value: 8, text: 'Q1-2018'},
                {value: 9, text: 'Q2-2018'},
                {value: 10, text: 'Q3-2018'},
                {value: 11, text: 'Q4-2018'},
                {value: 12, text: 'Status Unknown'}
          ]
     });
}
//make bec next exam editable
function updatebectarget(candid,experience){ 
     $('.becnext'+candid).editable({ 
              send: 'always',
              type: 'select',
              title: 'Select BEC Target',
              url: 'EnrollWorkBook/ajax.php',  
              ajaxOptions: {
               cache: true,
                dataType: 'post'
              },
            params: {
             action: 'updatbectarget',//to find the code search with action in ajax.php file 
             column1:'bectarget'
            },
            autotext:"never ",
            value: 1,
            source: [
                {value: 1, text: 'Cleared'},
                {value: 2, text: 'Undecided'},
                {value: 3, text: 'Drop-out'},
                {value: 4,text: 'Q1-2017'},
                {value: 5, text: 'Q2-2017'},
                {value: 6, text: 'Q3-2017'},
                {value: 7, text: 'Q4-2017'},
                {value: 8, text: 'Q1-2018'},
                {value: 9, text: 'Q2-2018'},
                {value: 10, text: 'Q3-2018'},
                {value: 11, text: 'Q4-2018'},
                {value: 12, text: 'Status Unknown'}
            ]
     });
}
//make far next exam editable
function updatefartarget(candid,experience){ 
     $('.farnext'+candid).editable({ 
              send: 'always',
              type: 'select',
              title: 'Select FAR Target',
              url: 'EnrollWorkBook/ajax.php',  
              ajaxOptions: {
               cache: true,
                dataType: 'post'
              },
            params: {
             action: 'updatefartarget',//to find the code search with action in ajax.php file 
             column1:'fartarget'
            },
            autotext:"never ",
            value: 1,
            source: [
                 {value: 1, text: 'Cleared'},
                {value: 2, text: 'Undecided'},
                {value: 3, text: 'Drop-out'},
                {value: 4,text: 'Q1-2017'},
                {value: 5, text: 'Q2-2017'},
                {value: 6, text: 'Q3-2017'},
                {value: 7, text: 'Q4-2017'},
                {value: 8, text: 'Q1-2018'},
                {value: 9, text: 'Q2-2018'},
                {value: 10, text: 'Q3-2018'},
                {value: 11, text: 'Q4-2018'},
                {value: 12, text: 'Status Unknown'}
            ]
     });
}
//make reg next exam editable
function updateregtarget(candid,experience){ 
     $('.regnext'+candid).editable({ 
              send: 'always',
              type: 'select',
              title: 'Select REG Target',
              url: 'EnrollWorkBook/ajax.php',  
              ajaxOptions: {
               cache: true,
                dataType: 'post'
              },
            params: {
             action: 'updateregtarget',//to find the code search with action in ajax.php file 
             column1:'regtarget'
            },
            autotext:"never ",
            value: 1,
            source: [
                 {value: 1, text: 'Cleared'},
                {value: 2, text: 'Undecided'},
                {value: 3, text: 'Drop-out'},
                {value: 4,text: 'Q1-2017'},
                {value: 5, text: 'Q2-2017'},
                {value: 6, text: 'Q3-2017'},
                {value: 7, text: 'Q4-2017'},
                {value: 8, text: 'Q1-2018'},
                {value: 9, text: 'Q2-2018'},
                {value: 10, text: 'Q3-2018'},
                {value: 11, text: 'Q4-2018'},
                {value: 12, text: 'Status Unknown'}
            ]
     });
}

//make miles feedback editable
function updatemilesfeedback(candid,experience){ 
         $('.milesfeedback'+candid).editable({ 
              send: 'always',
              type: 'select',
              title: 'Select REG Target',
              url: 'EnrollWorkBook/ajax.php',  
              ajaxOptions: {
               cache: true,
                dataType: 'post'
              },
            params: {
             action: 'updatemilesfeedback',//to find the code search with action in ajax.php file 
             column1:'milesfeedback'
            },
            autotext:"never ",
            value: 1,
            source: [
                {value: 1, text: 'Very Happy'},
                {value: 2, text: 'Happy'},
                {value: 3, text: 'Average'},
                {value: 4, text: 'Not Happy'},
                {value: 5, text: 'Disappointed'},
                {value: 6, text: 'DND'},
                {value: 7, text: 'Status Unknown'},
            ]
     });
}  

function updatecorporatereferral(candid,experience){ 
   //make Referral editable
      $('.corporatereferral'+candid).editable({
          send: 'always',
          type: 'select',
          title: 'Select Referral',
          url: 'EnrollWorkBook/ajax.php',  
          ajaxOptions: {
               cache: true,
                dataType: 'post'
          },
          params: {
             action: 'updatecorporatereferral',//to find the code search with action in ajax.php file 
             column1:'milesfeedback'
          },
          value: 1,
          source: [
              {value: 1, text: 'Successful'},
              {value: 2, text: 'Hot Leads'},
              {value: 3, text: 'To be Tapped'},
              {value: 4, text: 'Not Interested'},
              {value: 5, text: 'Not Applicable'}
          ]
      });
} 

     


$(document).on('click', 'a', function () {
   

     //make placement editable
     $('.placement').editable({ 
            type: 'select',
            title: 'Select Placement',
            placement: 'right',
            value: 1,
            source: [
                {value: 1, text: 'Seeker'},
                {value: 2,text: 'Recruiter'},
                {value: 3,text: 'Both'},
                {value: 4,text: 'None'}
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
                {value: 2,text: 'Future potential'},
                {value: 3,text: 'Not interested'}
            ]
     });
});


//update designation
$(document).on('click','.designationupdate',function(){
    var canid = $("#descanid").val();
    var designationtext = $("#designationtext").val();
    alert(canid);alert(designationtext);
    alert("updatedesignation");
});

//update education
$(".updateselectededucation").click(function(){
     var edu1 =  edu2 = edu3 = edu4 = edu5 = edu6 = edu7 = "";
     if($('#educheck1').is(":checked")){
         var edu1 = $('#education1').val();
     }
    if($('#educheck2').is(":checked")){
         var edu2 = $('#education2').val();
    }
     if($('#educheck3').is(":checked")){
         var edu3 = $('#education3').val();
    }
    if($('#educheck4').is(":checked")){
         var edu4 = $('#education4').val();
    }
    if($('#educheck5').is(":checked")){
         var edu5 = $('#education5').val();
    }
    if($('#educheck6').is(":checked")){
         var edu6 = $('#education6').val();
    }
    if($('#educheck7').is(":checked")){
         var edu7 = $('#education7').val();
    }

    //var secondaryemail = $("#secondaryemail").val();
    alert("update Education");
});


//update emails
$(".updateemails").click(function(){
     var primaryemail = $("#primaryemail").val();
     var secondaryemail = $("#secondaryemail").val();
     alert("update emails");
});

//update alternate mobile numbers
$(".updatemobile").click(function(){
     var countrycode1 = $("#countrycode1").val();
     var mobile1 = $("#mobile1").val();
      var countrycode2 = $("#countrycode2").val();
     var mobile2= $("#mobile2").val();
     var countrycode3 = $("#countrycode3").val();
     var mobile3= $("#mobile3").val();
     alert("update Mobile");
});

$(document).on('click', '.addressclick', function () { 
           $.getJSON("../Include/jsondata/country.json", function(json){
                  $('.country').empty();
                  $('.country').append($('<option>').text("Select"));
                  $.each(json, function(i, obj){ console.log(obj)
                          $('.country').append($('<option>').text(obj.text).attr('value', obj.val));
                  });
          });
}); 

$(document).on("change",".country",function(){
    alert("country selected");
});

//search option in chat modal
$('#search').keyup(function(){
      var text = $(this).val();
      $('.chatcontent').hide();
      $('.chatcontent:contains(' + text + ')').show();
 });

//update chat
$(".updatechat").click(function(){
   var chattext = $("#chattext").val(); 
   alert("update chat")
});
</script>


