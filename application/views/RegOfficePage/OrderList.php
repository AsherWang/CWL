<div id="maincontainer">
    <div id="query">
         <form id="querydd">
            <div class="input-group" id="searcher"><input class="form-control" name="order_id" type="input" <?php echo "value='".$order_id."'";?> placeholder="订单ID" /></div>
    	    <div id="querybut"><a name="queryddbut"><img style="width:75px;height:34px;" src="<?php echo base_url().'/res/images/button1.png'?>"></a></div>
    	     
         </form>
    </div>
    <script type="text/javascript">
         $(document).ready(function() {

         	$("a[name='queryddbut']").click(function(){$("#querydd").submit();})
         })
    </script>
    
    <div id="list">
    
    	<?php
		if(empty($order_list))
		{
			echo "<div id='hint'><label>没有符合条件的订单yo...</label><div>";
		}
		else
		{
			echo "<div id='hint'><label>符合条件的订单结果<br></label><div>";
			echo "<table class='table table-hover'>";
			echo "<thead><tr><th  style='border:1px black solid;'>挂号单ID</th><th  style='border:1px black solid;'>下单时间</th><th  style='border:1px black solid;'>订单状态</th><th  style='border:1px black solid;'>查看详情</th></tr></thead>";
			echo "<tbody>";
			foreach($order_list as $key => $value)
			{
				echo "<tr><td style='border:1px black solid;'>".$value["ID"]."</td>";
				echo "<td  style='border:1px black solid;'>".$value["Place_Time"]."</td>";
				echo "<td  style='border:1px black solid;'>".tansState($value["State"])."</td>";
				echo "<td  style='border:1px black solid;'><a href='".base_url()."RegOfficePage/OrderDetail?id=".($value["ID"]-0)."'>订单详情</a></td>";
				
				echo "</tr>";
			
			}
			echo "</tbody></table>";
		}
		?>
    
    </div>
</div>    
    
    </body>
</html>
