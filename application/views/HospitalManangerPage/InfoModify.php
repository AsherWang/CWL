

      <div style="height:400px; vertical-align:middle; padding-left:130px;" >
          <div style="float: left; width: 500px;height: 400px" ><br/><h2>医院简介:</h2><br/>
          <p><?php echo $h_info["Info"];?></p>

          </div>
          <div style="float: left; width: 500px;height: 400px"><img width=500px src="<?php echo base_url().$h_info["Image_Url"];?>" /></div>
      </div>
<form method="post" action="" style="margin-left:auto;margin-right:auto; width:500px;border:1px red solid;" >
	<p>简介的修改，样式你来调吧</p>
	<textarea name="h_info" style="text-wrap:normal; height:100px; width:400px;" ></textarea><br />
    <p>其他字段的修改<p>
    <input type="submit" value="提交更改" />
</form>
</body>
</html>