<?php
 $candidateid = $_POST["canid"];
 $mobilenum = $_POST["mobile"];
?>
<head>
<style>
 .chatbox{
    height:1000px;
    width:1000px;
    position: fixed;
    bottom: 0;
    z-index: 100000;
}

.chat-window{
    bottom:0;
    position:fixed;
    float:left;
    margin-left:75% !important;
}
.chat-window > div > .panel{
    border-radius: 5px 5px 0 0;
}
.icon_minim{
    padding:2px 10px;
}
.msg_container_base{
  background: #e5e5e5;
  margin: 0;
  padding: 0 10px 10px;
  overflow-x:hidden;
}
.top-bar {
  background: #666;
  color: white;
  padding: 10px;
  position: relative;
  overflow: hidden;
}
.msg_container {
    padding: 10px;
    overflow: hidden;
    display: flex;
}

.tborder{
     border: 1px solid #000000 !important;
   
}
</style>
<script type="text/javascript">
$(document).on('click', '.panel-heading span.icon_minim', function (e) {
    var $this = $(this);
    if (!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.removeClass('glyphicon-minus').addClass('glyphicon-plus');
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
</script>
</head>
<div class="chatbox">
    <div class="row chat-window col-xs-5 col-md-3" id="chat_window_1" style="margin-left:10px;">
        <div class="col-xs-12 col-md-12">
        	<div class="panel panel-default">
                <div class="panel-heading top-bar">
                    <div class="col-md-8 col-xs-8">
                        <h3 class="panel-title"><span class="fa fa-phone-square"></span>&nbsp;MWB Connect Box</h3>
                    </div>
                    <div class="col-md-4 col-xs-4" style="text-align: right;">
                        <a href="#"><span id="minim_chat_window" class="glyphicon glyphicon-minus icon_minim"></span></a>
                    </div>
                </div>
                <div class="panel-body msg_container_base">
                    <div class="row msg_container base_sent">
                    </div>
                    <div class="row msg_container base_receive">
                            <table class="tborder table table-responsive table-hover table-striped">
                                <thead class="tborder">
                                    <tr>
                                        <th class="tborder">Cand ID</th>
                                        <th class="tborder"><?=$candidateid?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                        <td class="tborder">Lifted</td>
                                        <td class="tborder" colspan="2">
                                            <div class="form-group">
                                               <select name="calllifted" class="form-control">
                                                   <option>Option 1</option>
                                                   <option>Option 2</option>
                                                   <option>Option 3</option>
                                                   <option>Option 4</option>
                                                   <option>Option 5</option>
                                               </select>
                                            </div>                                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tborder">NL / NR / SO</td>
                                        <td class="tborder" colspan="2">
                                            <div class="form-group">
                                               <select name="badcall" class="form-control">
                                                   <option>Select</option>
                                                   <option>Not Lifted</option>
                                                   <option>No response</option>
                                                   <option>Switched Off</option>
                                               </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr> <td colspan="3" class="clear"></td>
                                    </tr>
                                          <tr> 
                                            <td class="tborder"></td>
                                            <td class="tborder">Current </td>
                                            <td class="tborder">Revised</td>
                                          </tr>
                                           <tr>
                                              <td class="tborder">Level</td>
                                              <td class="tborder">L3</td>
                                              <td class="tborder"> 
                                                 <select name="course" class="form-control">
                                                      <option value="1">CPA</option>
                                                      <option value="2">CMA</option>
                                                      <option value="3">CFA</option>
                                                 </select>
                                            </td>
                                           </tr> 
                                           <tr>  
                                              <td class="tborder">NFD</td>
                                              <td class="tborder">2017-06-01</td>
                                              <td class="tborder"><input type="date" name="olddate" value=""></td>
                                          </tr>
                                          <tr>  
                                            <td class="tborder">Course</td>
                                            <td class="tborder" colspan="2" >
                                                 <select name="course" class="form-control">
                                                      <option value="1">CPA</option>
                                                      <option value="2">CMA</option>
                                                      <option value="3">CFA</option>
                                                 </select>
                                            </td>
                                          </tr>
                                          <tr>  
                                            <td class="tborder" colspan="3">
                                                <textarea name="" placeholder="Additional Info" style="margin: 0px; width: 347px; height: 103px;"></textarea>
                                            </td>
                                          </tr>
                                </tbody>
                            </table>
                    </div>
                 </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <label> Calling <?=$mobilenum?></label>
                        <span class="input-group-btn">
                        <button class="btn btn-danger btn-sm" id="btn-chat">Disconnect</button>
                        </span>
                    </div>
                </div>
           </div>
        </div>
    </div>
</div>