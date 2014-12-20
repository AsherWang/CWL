<script language="javascript">
        function preview(oper)
        {
            if (oper < 10){
            bdhtml=window.document.body.innerHTML;//获取当前页的html代码
            sprnstr="<!--startprint"+oper+"-->";//设置打印开始区域
            eprnstr="<!--endprint"+oper+"-->";//设置打印结束区域
            prnhtml=bdhtml.substring(bdhtml.indexOf(sprnstr)+18); //从开始代码向后取html
            prnhtml=prnhtml.substring(0,prnhtml.indexOf(eprnstr));//从结束代码向前取html
            window.document.body.innerHTML=prnhtml;
            window.print();
            window.document.body.innerHTML=bdhtml;
                }
        }
        </script>
        
    <p>啊哈哈哈</p>
    <!--startprint1-->
    <div style="boder:1px black solid;">
    	<p>传说中的挂号单</p>
    	<div>
        	<p>一去二三里</p>
            <p>烟村四五家</p>
            <p>亭台六七座</p>
            <p>都不是我的</p>
            <p>哈哈哈</p>
        </div>
 	</div>
    <!--endprint1-->
    <input type="button" onclick="preview(1)" value="哈哈" />
</body>
</html>