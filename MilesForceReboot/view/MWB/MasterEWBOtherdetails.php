 <?php
   $selectedcandidateid = $_POST["canid"];
 ?>
 
  <div class="col-md-3">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th style="display: none;"></th>
          <th colspan="2" style="background-color: #578ebe;color: #fff;"><center>Secondary Information&nbsp;<?=$selectedcandidateid?></center></th></tr>
      </thead>
      <tbody>
        <tr>
          <td style="display: none;"></td>
          <td>Designation</td>
          <td><a href="javascript:void(0)" class="designation" data-type="text" data-placement="right" data-title="Select Designation">Textbox</a></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td>Years of Exp</td>
          <td><a href="javascript:void(0)" class="experience" data-placement="right" data-title="Select Years of Exp">DropDown</a></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td>Education</td>
          <!-- <td><a href="javascript:void(0)" class="education" data-placement="right" data-title="Select Education">DropDown</a></td> -->
          <td>
            <select class="form-control input-sm select2-multiple" id="education" multiple>
             <!-- <select id="select2-button-addons-single-input-group-sm" class="form-control js-data-example-ajax" multiple> -->
               <option value="2126244">twbs/bootstrap</option>
                <option value="3620194">select2/select2</option>
    </select>
            <button type="button" id="updateeducation">update</button>
          </td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td>Student/Professional</td>
          <td><a href="javascript:void(0)" class="studentprof" data-placement="right" data-title="Select Student/Professional">DropDown</a></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td>Email</td>
          <td><a href="javascript:void(0)" class="email" data-placement="right" data-title="Select Email">new@mail.com</a></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td>Email (Alt)</td>
          <td><a href="javascript:void(0)" class="altemail" data-placement="right" data-title="Select Email (Alt)">some@mail.com</a></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td>Phone (Alt 1)</td>
          <td><a href="javascript:void(0)" class="altmobilenum" data-type="primarymobilenum" data-placement="right" data-altmobile="8888888888" data-altcountrycode="+91" data-title="Alternate Enter Mobile">542343242342</a>&nbsp;<i class="fa fa-phone-square font-green-jungle oncall" style="font-size:20px;"   callcanid="1"></i></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td>Phone (Alt 2)</td>
          <td><a href="javascript:void(0)" class="altmobilenum" data-type="primarymobilenum" data-placement="right" data-altmobile="8888888888" data-altcountrycode="+91" data-title="Alternate Enter Mobile">542343242342</a>&nbsp;<i class="fa fa-phone-square font-green-jungle oncall" style="font-size:20px;"   callcanid="1"></i></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td>Phone (Alt 3)</td>
          <td><a href="javascript:void(0)" class="altmobilenum" data-type="primarymobilenum" data-placement="right" data-altmobile="8888888888" data-altcountrycode="+91" data-title="Alternate Enter Mobile">542343242342</a>&nbsp;<i class="fa fa-phone-square font-green-jungle oncall" style="font-size:20px;"   callcanid="1"></i></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td>Gender</td>
          <td><a href="javascript:void(0)" class="gender" data-placement="right" data-title="Select Gender">Male</a></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td>Enrollment Date</td>
          <td><a href="javascript:void(0)" class="enrollmentdate" data-type="date" data-placement="right" data-title="Select Enrollment Date">2017-04-02</a></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td>Agreement Status</td>
          <td>Accepted</td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td>Source</td>
          <td><a href="javascript:void(0)" class="source" data-placement="right" data-title="Select Source">DropDown</a></td>
        </tr>     
        <tr>
          <td style="display: none;"></td>         
          <td>Country | State | City</td>
          <td><a tabindex="-1" href="#" data-target="#addressdetails" data-toggle="modal">India|Telangana|Hyderabad</a></td>
        </tr> 
        <tr>
          <td style="display: none;"></td>
          <td>Street Address</td>
          <td><a tabindex="-1" href="#" data-target="#addressdetails" data-toggle="modal">Hitechcity</a></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td>Additional Info</td>
          <td><a tabindex="-1" href="#" data-target="#additionalinfomodal" data-toggle="modal">TextArea</a></td>
        </tr>

      </tbody>
    </table>       
  </div>

  <div class="col-md-3">
    <table class="table table-striped table-bordered">
      <thead>
        <tr><th style="display: none;"></th><th colspan="2" style="background-color: #578ebe;color: #fff;"><center>Fee &amp; Access Details</center></th></tr>
      </thead>
      <tbody>
        <tr>
          <td style="display: none;"></td>
          <td>Fees paid | agreed</td>
          <td>
             5900&nbsp;|&nbsp;108,000
          </td>
        </tr>   
        <tr>
          <td style="display: none;"></td>
          <td>Fee Status</td>
          <td>Overdue 2017</td>
         </tr>     
        <tr>
          <td style="display: none;"></td>
          <td>Last Connect</td>
          <td>
            12-Jul-2017&nbsp;|&nbsp;Sandra
          </td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td>Fee due comments</td>
          <td><a tabindex="-1" href="#" data-target="#feeduecommentsmodal" data-toggle="modal">TextArea</a></td>
        </tr>
        <tr>
          <td style="display: none;"></td> 
          <td>OTB Access</td>
          <td>
           ABFR&nbsp;|&nbsp;Blocked
          </td>
        </tr>
        <tr>
          <td style="display: none;"></td> 
          <td>MOV Access</td>
          <td>
            AFR&nbsp;|&nbsp;Recieved
          </td>
        </tr>
        <tr>
          <td style="display: none;"></td> 
          <td>Books</td>
          <td>
            ABFR&nbsp;|&nbsp;Recieved
          </td>
        </tr>

        <!-- Heading - 2 -->
        <tr>
          <td style="display: none;"></td> 
          <th colspan="2" style="background-color: #578ebe;color: #fff;"><center>Corporate Details</center></th>
        </tr>
        <tr>
          <td style="display: none;"></td> 
          <td>Corporate Referral</td>
          <td>
            <a href="javascript:void(0)" class="corporatereferral" data-placement="right" data-title="Select Corporate Referral">DropDown</a>
          </td>
        </tr>
        <tr>
          <td style="display: none;"></td> 
          <td>Comments</td>
          <td>
            <a tabindex="-1" href="#" data-target="#dropper" data-toggle="modal">TextArea</a>
          </td>
        </tr>
        <tr>
          <td style="display: none;"></td> 
          <td>Lead Details</td>
          <td>
           <a tabindex="-1" href="#" data-target="#leaddetailsform" data-toggle="modal">leaddetailsform</a>
          </td>
        </tr>
        <tr>
          <td style="display: none;"></td> 
          <td>Placement</td>
          <td>
            <a href="javascript:void(0)" class="placement" data-placement="right" data-title="Select Placement">DropDown</a>
          </td>
        </tr>
        <tr>
          <td style="display: none;"></td> 
          <td>Last Connect</td>
          <td>
            DatePicker&nbsp;|&nbsp;LastFollowerName
          </td>
        </tr>

        <!-- Heading - 3 -->
        <tr>
          <td style="display: none;"></td> 
          <th colspan="2" style="background-color: #578ebe;color: #fff;"><center>Student Reference</center></th>
        </tr>
        <tr>
          <td style="display: none;"></td> 
          <td>SR Status</td>
          <td>
            <a href="javascript:void(0)" class="srstatus" data-placement="right" data-title="Select SR Status">DropDown</a>
          </td>
        </tr>
        <tr>
          <td style="display: none;"></td> 
          <td>Students Referred</td>
          <td>Fetch Can. No.</td>
        </tr>
        <tr>
          <td style="display: none;"></td> 
          <td>SR Comment</td>
          <td>
            <a tabindex="-1" href="#" data-target="#dropper" data-toggle="modal">TextArea</a>
          </td>
        </tr>
        <tr>
          <td style="display: none;"></td> 
          <td>Last Connect</td>
          <td>
            DatePicker&nbsp;|&nbsp;LastFollowerName
          </td>
        </tr>      
        </tbody>
    </table>
  </div>

  <div class="col-md-3">
    <table class="table table-striped table-bordered">
      <thead>
        <tr><th style="display: none;"></th><th colspan="2" style="background-color: #578ebe;color: #fff;"><center>CPA Exam Gameplan</center></th></tr>
      </thead>
      <tbody>
          <tr>
            <td style="display: none;"></td> 
            <td>Batch SR Lead</td>
            <td>Sandra</td>
         </tr>
          <tr>
            <td style="display: none;"></td> 
            <td>Batch Start Date</td>
            <td>May 2016</td>
         </tr>
          <tr>
            <td style="display: none;"></td> 
            <td>PGDA</td>
            <td>PGDA</td>
         </tr>
          <tr>
            <td style="display: none;"></td> 
            <td>Evaluation</td>
            <td><a href="javascript:void(0)" class="evaluation"  data-placement="right" data-title="Select Evaluation">Evaluation Dropdown</a></td>
         </tr>
          <tr>
            <td style="display: none;"></td> 
            <td>NTS (initial)</td>
            <td>NTS (initial)</td>
         </tr>
        <tr>
            <td style="display: none;"></td> 
            <td>AUD next exam</td>
            <td><a href="javascript:void(0)" class="audnext" data-placement="right" data-title="Select AUD Next Exam">Cleared Dropdown</a></td>
         </tr>
         <tr>
            <td style="display: none;"></td> 
            <td>BEC next exam</td>
            <td><a href="javascript:void(0)" class="becnext" data-placement="right" data-title="Select BEC Next Exam">Undecided Dropdown</a></td>
         </tr>
          <tr>
            <td style="display: none;"></td> 
            <td>FAR next exam</td>
            <td><a href="javascript:void(0)" class="farnext" data-placement="right" data-title="Select FAR Next Exam">Q2 2017 Dropdown</a></td>
          </tr>
           <tr>
            <td style="display: none;"></td> 
            <td>REG next exam</td>
            <td><a href="javascript:void(0)" class="regnext" data-placement="right" data-title="Select REG Next Exam">Q2 2017 Dropdown</a></td>
          </tr>
         <tr>
            <td style="display: none;"></td> 
            <td>Overall Status</td>
            <td>Cleared some - WIP</td>
         </tr>
         <tr>
            <td style="display: none;"></td> 
            <td>Next Exams</td>
            <td>Fetch</td>
         </tr>
         <tr>
            <td style="display: none;"></td> 
            <td>Miles Feedback</td>
            <td><a href="javascript:void(0)" class="milesfeedback" data-placement="right" data-title="Select Miles Feedback">Good</a></td>
         </tr>
         <tr>
            <td style="display: none;"></td> 
            <td>Comments</td>
            <td><a tabindex="-1" href="#" data-target="#dropper" data-toggle="modal">Comments textarea</a></td>
         </tr>
          <tr>
            <td style="display: none;"></td> 
            <td>Last Connect</td>
            <td>
              DatePicker&nbsp;|&nbsp;LastFollowerName
            </td>
         </tr>
         <tr><th style="display: none;"></th><th colspan="2" style="background-color: #578ebe;color: #fff;"><center>Academics Data</center></th></tr>
         <tr>
            <td style="display: none;"></td> 
            <td>Comments</td>
            <td><a tabindex="-1" href="#" data-target="#dropper" data-toggle="modal">Comments (Acads) Textarea</a></td>
         </tr>
         <tr>
          <td style="display: none;"></td> 
          <td>Last Connect</td>
          <td>
            DatePicker&nbsp;|&nbsp;LastFollowerName
          </td>
       </tr>

      </tbody>
    </table>
  </div>
<script src="../assets/pages/scripts/components-select2.js" type="text/javascript"></script>

