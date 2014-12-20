<script language="javascript">
        function preview(oper)
        {
            if (oper < 10){
            bdhtml=window.document.body.innerHTML;//获取当前页的html代码
            sprnstr="<!--startprint"+oper+"-->";//设置打印开始区域
            eprnstr="<!--endprint"+oper+"-->";//设置打印结束区域
            prnhtml=bdhtml.substring(bdhtml.indexOf(sprnstr)+18); //从开始代码向后取html
            prnhtml=prnhtml.substring(0,prnhtml.indexOf(eprnstr));//从结束代码向前取html
            window.document.body.innerHTML="<style type='text/css'>.printContent{border:1px black solid;}  </style>"+prnhtml;
            window.print();
            window.document.body.innerHTML=bdhtml;
                }
        }
        </script>
        
    <p>啊哈哈哈</p>
    <!--startprint1-->
    <div >
    	<table class="printContent" width=600 height=200>
        	<tr><td colspan="2" align="center">挂号单<td></tr>
            <tr><td align="center">挂号单ID<td><td>11</td></tr>
            <tr><td colspan="2" align="center">挂号单<td></tr>
            
        </table>
 	</div>
    <!--endprint1-->
    <input type="button" onclick="preview(1)" value="哈哈" />
</body>
</html>