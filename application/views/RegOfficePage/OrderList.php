
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
			echo "<table>";
			echo "<thead><tr>挂号单ID<th></th><th>下单时间</th><th>订单状态</th></tr></thead>";
			echo "<tbody>";
			foreach($order_list as $key => $value)
			{
				echo "<tr><td>".$value["ID"]."</td>";
			
			}
			echo "</tbody></table>";
		}
		?>
    
    </div>
    
    </body>
</html>
