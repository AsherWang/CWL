
    <form>
    	<input name="order_id" type="input" placeholder="订单ID" /><input type="submit" value="查询"/>
    </form>
    <div>
    	<?php
        foreach($order_list as $key => $value)
		{
			?><div style="width:400px; height:70px;">
			<?php
			echo $value["ID"]."<br >";
		}
		?>
		</div>
		<?php
		
		?>
    
    </div>
    
    </body>
</html>
