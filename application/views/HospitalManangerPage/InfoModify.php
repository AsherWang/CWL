
<h1 class="page-header">
    CWL全国统一预约平台<small>----医院信息修改</small>
</h1>
      <div style=" float:left; height:600px; vertical-align:middle; padding-left:130px;" >
          <div style="float: left; width: 500px;height: 200px;" ><br/><h2>医院简介:</h2><br/>
          <p><?php echo $h_info["Info"];?></p>
              <div style="float: left; width: 500px;height: 200px;"><img width=500px src="<?php echo $h_info["Image_Url"];?>" /></div>
          </div>

      </div>
      <div style="padding-left:100px;float:left; height:600px;width: 600px;padding-top: 60px;" >

          <form class="form-horizontal">
              <fieldset>
                  <div id="legend" class="">
                      <legend class="">医院信息修改</legend>
                  </div>
                  <div class="control-group">

                      <!-- Text input-->
                      <label class="control-label" for="input01">医院名称：</label>

                          <input style="width: 300px;" type="text" placeholder="<?php echo $h_info["Name"];?>" class="input-xlarge">


                  </div>
                  <br/>

                  <div class="control-group">

                      <!-- Text input-->
                      <label class="control-label" for="input01">医院类型：</label>

                          <input  style="width: 300px;" type="text" placeholder="<?php echo $h_info["Type"];?>" class="input-xlarge">


                  </div>
                  <br/>



                  <div class="control-group">

                      <!-- Text input-->
                      <label class="control-label" for="input01">医院等级：</label>

                          <input  style="width: 300px;" type="text" placeholder="<?php echo $h_info["Level"];?>" class="input-xlarge">


                  </div>
                  <br/>

                  <div class="control-group">

                      <!-- Text input-->
                      <label class="control-label" for="input01">所在地区：</label>

                          <input  style="width: 300px;" type="text" placeholder="<?php echo $h_info["Area"];?>" class="input-xlarge">


                  </div>
                  <br/>

                  <div class="control-group">

                      <!-- Text input-->
                      <label class="control-label" for="input01">详细地址：</label>

                          <input  style="width: 300px;" type="text" placeholder="<?php echo $h_info["Address"];?>" class="input-xlarge">


                  </div>
                  <br/>

                  <div class="control-group">

                      <!-- Text input-->
                      <label class="control-label" for="input01">电　　话：</label>

                          <input  style="width: 300px;" type="text" placeholder="<?php echo $h_info["Phone"];?>" class="input-xlarge">


                  </div>
                  <br/>

                  <div class="control-group">

                      <!-- Text input-->
                      <label class="control-label" for="input01">网　　址：</label>

                          <input  style="width: 300px;" type="text" placeholder="<?php echo $h_info["Website"];?> " class="input-xlarge">


                  </div>


                  <div class="control-group">

                      <!-- Text input-->
                      <label class="control-label" for="input01">介绍图片：</label>

                          <input  style="width: 300px;" type="text" placeholder="<?php echo $h_info["Image_Url"];?>" class="input-xlarge">


                  </div>


                  <div class="control-group">

                      <!-- Textarea -->
                      <label class="control-label">医院简介：</label>

                          <div class="textarea">
                              <textarea style="width: 400px;"  type="" class=""> </textarea>
                          </div>

                  </div>


                  <div class="control-group">


                      <!-- Button -->
                      <div class="controls">
                          <button class="btn btn-primary">点击提交</button>
                      </div>


              </fieldset>
          </form>


          </div>
</body>
</html>