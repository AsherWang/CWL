<div id="maincontainer" style="height:980px;"> 
     <div style="margin-left:130px;">
         <h1 class="page-header">
             CWL全国统一预约平台<small>----医院信息修改</small>
         </h1>
     </div>

      <div style=" float:left; height:600px; vertical-align:middle; padding-left:130px;padding-right:80px;border-right:1px solid black;" >
          <div style="float: left; width: 500px;height: 200px;" ><br/><h2>医院简介:</h2><br/>
          <p><?php echo $h_info["Info"];?></p>
              <div style="float: left; width: 500px;height: 200px;"><img width=500px src="<?php echo $h_info["Image_Url"];?>" /></div>
          </div>

      </div>
      <div style="padding-left:100px;float:left; height:600px;width: 600px;padding-top: 60px;" >

          <form class="form-horizontal" method="post">
              <fieldset>
                  <div id="legend" class="">
                      <legend class="">医院信息修改</legend>
                  </div>
                  <div class="control-group">
                      <label class="control-label" for="input01">医院名称：</label>
                          <input style="width: 300px;" name="h_Name" type="text" value="<?php echo $h_info["Name"];?>" class="input-xlarge"/>
                  </div>
                  <br/>
                  <div class="control-group">
                      <label class="control-label" for="input01">医院类型：</label>
                      <input name="h_Type" style="width: 300px;" type="text" value="<?php echo $h_info["Type"];?>" class="input-xlarge">
                  </div>
                  <br/>
                  <div class="control-group">
                      <label class="control-label" for="input01">医院等级：</label>
                      <input name="h_Level"  style="width: 300px;" type="text" value="<?php echo $h_info["Level"];?>" class="input-xlarge">
                  </div>
                  <br/>
                  <div class="control-group">
                      <label class="control-label" for="input01">所在地区：</label>
                      <input name="h_Area" style="width: 300px;" type="text" value="<?php echo $h_info["Area"];?>" class="input-xlarge">
                  </div>
                  <br/>
                  <div class="control-group">
                      <label class="control-label" for="input01">详细地址：</label>
                      <input name="h_Address" style="width: 300px;" type="text" value="<?php echo $h_info["Address"];?>" class="input-xlarge">
                  </div>
                  <br/>
                  <div class="control-group">
                      <label class="control-label" for="input01">电　　话：</label>
                      <input name="h_Phone" style="width: 300px;" type="text" value="<?php echo $h_info["Phone"];?>" class="input-xlarge">
                  </div>
                  <br/>
                  <div class="control-group">
                      <label class="control-label" for="input01">网　　址：</label>
                      <input name="h_Website"  style="width: 300px;" type="text" value="<?php echo $h_info["Website"];?> " class="input-xlarge">
                  </div>
                  <br/>
                  <div class="control-group">
                      <label class="control-label" for="input01">介绍图片：</label>
                      <input name="h_Image_Url" style="width: 300px;" type="text" value="<?php echo $h_info["Image_Url"];?>" class="input-xlarge">
                  </div>
                  <br/>
                  <div class="control-group">
                      <label class="control-label">医院简介：</label>
                      <div class="textarea">
                              <textarea name="h_info" style="width: 375px; max-width:400px; height:200px;"  type="" class=""><?php echo $h_info["Info"];?></textarea></div>
                  </div>
                  <div class="control-group">
                      <div class="controls" style="margin-left:140px;margin-top:10px;">
                          <button  class="btn btn-primary">点击提交</button>
                      </div>
                  </div>
              </fieldset>
          </form>


          </div>
</div>