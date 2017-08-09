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
             <select id="select2-button-addons-single-input-group-sm" class="form-control js-data-example-ajax" multiple>
                <option value="2126244" selected="selected">twbs/bootstrap</option>
                <option value="3620194" selected="selected">select2/select2</option>
            </select>
       </td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td>Student/Professional</td>
          <td><a href="javascript:void(0)" class="studentprof" data-placement="right" data-title="Select Student/Professional">DropDown</a></td>
        </tr>
           <tr>
          <td style="display: none;"></td>
          <td>College/Uni (if student)</td>
          <td><a href="javascript:void(0)" data-type="text" class="College" data-placement="right" data-title="Select College">Textbox</a></td>
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
          <td>Gender</td>
          <td><a href="javascript:void(0)" class="gender" data-placement="right" data-title="Select Gender">Male</a></td>
        </tr>
  
 
      </tbody>
    </table>       
  </div>


 
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
  <script src="../assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL SCRIPTS -->
  <script>
       

        $(".educationselect").on("change",function(){
            var oval = this.value; alert("options"+oval);
       });
</script>