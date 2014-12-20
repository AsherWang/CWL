

      <div style="height:400px; vertical-align:middle; padding-left:130px;" >
          <div style="float: left; width: 500px;height: 400px" ><br/><h2>医院简介:</h2><br/>
          <p><?php echo $h_info["Info"];?></p>
          </div>
          <div style="float: left; width: 500px;height: 400px"><img width=500px src="<?php echo $h_info["Image_Url"];?>" /></div>
      </div>
<form method="post" action="" style="margin-left:auto;margin-right:auto; width:500px;border:1px red solid;" >
	<p>简介的修改，样式你来调吧</p>
    医院名称<input name="h_Name"  value="<?php echo $h_info["Name"];?>"><br>
    
    医院类型<input name="h_Type"  value="<?php echo $h_info["Type"];?>"><br>
    
    医院等级<input name="h_Level"  value="<?php echo $h_info["Level"];?>"><br>
    
    所在地区<input name="h_Area"  value="<?php echo $h_info["Area"];?>"><br>
    详细地址<input name="h_Address"  value="<?php echo $h_info["Address"];?>"><br>
    电话<input name="h_Phone"  value="<?php echo $h_info["Phone"];?>"><br>
    网址<input name="h_Website"  value="<?php echo $h_info["Website"];?>"><br>
    介绍图片(可外链)<input name="h_Image_Url"  value="<?php echo $h_info["Image_Url"];?>"><br>
    医院简介<br />
	<textarea name="h_info"  style="text-wrap:normal; height:100px;width:400px; max-width:400px;" ><?php echo $h_info["Info"];?></textarea><br />
    <p>其他字段的修改<p>
    <input type="submit" value="提交更改" />
</form>
</body>
</html>