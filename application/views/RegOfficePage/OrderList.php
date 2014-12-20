
    <form>
    	<input name="order_id" type="input" placeholder="订单ID" /><input type="submit" value="查询"/>
    </form>
    <div>
    
    	<?php
		if(empty($order_list))
		{
			echo "没有符合条件的订单yo...";
		}
		else
		{
			echo "符合条件的订单结果<br>";
			echo "<table>";
			echo "<thead><tr><th  style='border:1px black solid;'>挂号单ID</th><th  style='border:1px black solid;'>下单时间</th><th  style='border:1px black solid;'>订单状态</th><th  style='border:1px black solid;'>查看详情</th></tr></thead>";
			echo "<tbody>";
			foreach($order_list as $key => $value)
			{
				echo "<tr><td style='border:1px black solid;'>".$value["ID"]."</td>";
				echo "<td  style='border:1px black solid;'>".$value["Place_Time"]."</td>";
				echo "<td  style='border:1px black solid;'>".$value["State"]."</td>";
				echo "<td  style='border:1px black solid;'><a href='".base_url()."RegOfficePage/OrderDetail?id=".($value["ID"]-0)."'>订单详情</a></td>";
				
				echo "</tr>";
			
			}
			echo "</tbody></table>";
		}
		?>
    
    </div>
    
    </body>
</html>
