<html>
<head>
 <title>全国统一预约平台</title>
 <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

 <link rel="stylesheet" type="text/css" href='<?=base_url().'res/css/bootstrap.min.css'?>'>
 <link href='<?=base_url().'/res/css/mainpagestyle.css'?>' rel="stylesheet" type="text/css" />
 <script src='<?=base_url().'/res/js/jquery.js'?>'></script>
 <script src='<?=base_url().'res/js/bootstrap.min.js'?>'></script>
</head>

<body>
  <div id="header">
   <nav class="navbar navbar-inverse" role="navigation" id="logo">
     <div class="navbar-header">
       <a class="navbar-brand" href="#">CWL全国统一预约平台</a>
     </div>
     <div>
       <ul class="nav navbar-nav">
         <li class="active"><a href="#">首页</a></li>
         <li><a href="#">预约挂号</a></li>
         <li><a href="#">查看公告</a></li>


       </ul>
       <ul class="nav navbar-nav navbar-right" id="logo1">
        <li><a href="#">登录/注册</a></li>
        <li><a href="#">用户中心</a></li>
      </ul>
    </div>
  </nav>

</div>
<div id="maincontent">
 <div class="wrap">
  <div class="banner-show" id="js_ban_content">
    <div class="cell bns-01">
      <div class="con">
      </div>
    </div>
    <div class="cell bns-02" style="display:none;">
      <div class="con">
        <a href="#" target="_blank" class="banner-link">
          <i>2</i></a> </div>
        </div>
        <div class="cell bns-03" style="display:none;">
          <div class="con">
            <a href="#" target="_blank" class="banner-link">
              <i>3</i></a> </div>
            </div>
          </div>
          <div class="banner-control" id="js_ban_button_box">
            <a href="javascript:;" class="left">左</a>
            <a href="javascript:;" class="right">右</a> 
          </div>
          <script type="text/javascript">
            ;(function(){

              var defaultInd = 0;
              var list = $('#js_ban_content').children();
              var count = 0;
              var change = function(newInd, callback){
                if(count) return;
                count = 2;
                $(list[defaultInd]).fadeOut(400, function(){
                  count--;
                  if(count <= 0){
                    if(start.timer) window.clearTimeout(start.timer);
                    callback && callback();
                  }
                });
                $(list[newInd]).fadeIn(400, function(){
                  defaultInd = newInd;
                  count--;
                  if(count <= 0){
                    if(start.timer) window.clearTimeout(start.timer);
                    callback && callback();
                  }
                });
              }

              var next = function(callback){
                var newInd = defaultInd + 1;
                if(newInd >= list.length){
                  newInd = 0;
                }
                change(newInd, callback);
              }

              var start = function(){
                if(start.timer) window.clearTimeout(start.timer);
                start.timer = window.setTimeout(function(){
                  next(function(){
                    start();
                  });
                }, 4000);
              }

              start();

              $('#js_ban_button_box').on('click', 'a', function(){
                var btn = $(this);
                if(btn.hasClass('right')){
                            //next
                            next(function(){
                              start();
                            });
                          }
                          else{
                            //prev
                            var newInd = defaultInd - 1;
                            if(newInd < 0){
                              newInd = list.length - 1;
                            }
                            change(newInd, function(){
                              start();
                            });
                          }
                          return false;
                        });

            })();
          </script>
          <div id="quicklogin">
            <div id="title">快速登录</div>
            <form role="form">
              <div class="container-fluid">
                <div class="row">

                  <div class="form-group input-lg" id="user">

                    <input type="email" class="form-control" placeholder="身份证号">
                  </div>

                  <div class="form-group input-lg" id="pwd">

                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="密码">
                  </div>

                  <div class="col-xs-offset-1" id="ckx">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> 记住密码
                      </label>

                    </div>

                  </div>

                  <div class="col-xs-offset-1">
                  <a href="#" onclick="document.form.submit();"><img src="<?=base_url().'res/images/login.png'?>" /></a>
                  </div>

                </div>
              </div>

            </form>



          </div>
          <div id="search">
           <div class="input-group" id="searcher">
             <input type="text" id="searchcontent" class="form-control" placeholder="医院/科室/医生">
           </div>

           <input type="image" src="<?=base_url().'res/images/button.png'?>" id="clicksearch" ></input>
           <div id="selects">

           </div>

         </div>
         <div id="visit">
          <div id="vtitle"><img src="<?=base_url().'res/images/query.png'?>"></div>
          <table id="Querylist">
            <tr>

              <td>
                <!--品牌-->
                <div class="querystyle">
                  <span class="querytitle2">地区</span>
                  <div id="area">
                    <select name="area">
                      <option value="null">请选择</option>
                      <option value="bj">北京</option>
                      <option value="sh">上海</option>
                      <option value="tj">天津</option>
                    </select>
                  </div>
                </div>
                <!--品牌-->
              </td>
              <td>
                <!--车系-->
                <div class="querystyle">
                  <span class="querytitle2">类型</span>
                  <div id="type">
                    <select name="type">
                      <option value="null">请选择</option>
                      <option value="专科">专科医院</option>
                      <option value="大型综合">大型综合医院</option>
                      <option value="卫生部直属">卫生部直属医院</option>
                    </select>
                  </div>
                  
                </div>
                
              </td>
              <td>

                <div class="querystyle">
                 <span class="querytitle2">等级</span>
                 <div id="class">
                  <select name="class">
                    <option value="null">请选择</option>
                    <option value="1">一级</option>
                    <option value="2">二级</option>
                    <option value="3">三级</option>
                  </select>
                </div>

              </div>

            </td>
          </tr>
          <tr>



            <td>

              <div id="startquery">
                <div class="start"><span>我要</span></div>
                <div class="go"><span>预约</span></div>
                <div id="queryArrow"><a href="#" onclick="document.form.submit();"><img src="<?=base_url().'res/images/arrow.png'?>" /></a></div>
              </div>


            </td>
          </tr>

        </table>


      </div>
      <div id="news">

       <div id="nmore"><a href="#">more..</a></div>
       <div class="hotnews" id="firsthotnews" onmouseover="this.style.background='url(<?=base_url().'res/images/hotlable.png'?>)'" onmouseout="this.style.background='none'">
        <div class="new">
          <a href="#" target="_blank"><span class="words">北医三院，功在千秋<span></a>
        </div>
      </div>
      <div class="hotnews" onmouseover="this.style.background='url(<?=base_url().'res/images/hotlable.png'?>)'" onmouseout="this.style.background='none'"><div class="new"><a target="_blank" href="#"><span class="words">热血澎湃，解放军陆军医院 </span></a></div></div>
      <div class="hotnews" onmouseover="this.style.background='url(<?=base_url().'res/images/hotlable.png'?>)'" onmouseout="this.style.background='none'"><div class="new"><a target="_blank" href="#"><span class="words">什么都能治，来就看好</span></a></div></div>
      <div class="hotnews" onmouseover="this.style.background='url(<?=base_url().'res/images/hotlable.png'?>)'" onmouseout="this.style.background='none'"><div class="new"><a target="_blank" href="#"><span class="words">悬壶济世，妙手回春 </span></a></div></div>
      <div class="hotnews" onmouseover="this.style.background='url(<?=base_url().'res/images/hotlable.png'?>)'" onmouseout="this.style.background='none'"><div class="new"><a target="_blank" href="#"><span class="words">活死人，肉白骨，想死先出院</span></a></div></div>


    </div>
    <div id="hots">
     <div id="htitle"></div>


   </div>


 </div>
 <div id="footer">

 </div>
</body>
</html>