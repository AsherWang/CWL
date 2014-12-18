<html>
<head>
 <title>全国统一预约平台</title>
 <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

 <link rel="stylesheet" type="text/css" href='<?php echo base_url().'/res/css/bootstrap.min.css'?>'>
 <link href='<?php echo base_url().'res/css/mainpagestyle.css'?>' rel="stylesheet" type="text/css" />
 <script src='<?php echo base_url().'res/js/jquery.js'?>'></script>
 <script type="text/javascript" src="<?php echo base_url().'res/js/jquery-1.4.4.min.js'?>"></script> 
 <script src='<?php echo base_url().'res/js/bootstrap.min.js'?>'></script>
 <script type="text/javascript" src="<?php echo base_url().'res/js/jquery.reveal.js'?>"></script>
</head>

<body>
  <div id="header">
   <nav class="navbar navbar-inverse" role="navigation" id="logo">
     <div class="navbar-header">
       <a class="navbar-brand" href="">CWL全国统一预约平台</a>
     </div>
     <div>
       <ul class="nav navbar-nav">
         <li class="active"><a >首页</a></li>
         <li><a href="<?php echo base_url();?>RegUserPage">预约挂号</a></li>
         <li><a href="NoticePage">查看公告</a></li>
       </ul>
       <ul class="nav navbar-nav navbar-right" id="logo1">
        <li><a href="<?php echo base_url();?>LoginPage/regist">注册</a></li>
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

          <?php if($login_result==1)  {?>
            <div id="welcome">
           <div id="wtitle">欢迎回来!</div>
           <div id="wname">X先生/女士</div>
           <div id="wimg"><img style="width:180px;height:180px;" class="img-circle" src="<?php echo base_url().'/res/images/wimg.jpg'?>"></div>
           <div id="wlog"><button id="wbut" type="button" class="btn btn-primary btn-lg">退出登录</button></div>
          </div>
          <?php } else {?>


          
          <div id="quicklogin">
            <div id="title">快速登录</div>
            <form id="loginform"  role="form" action="" method="post">


              <div class="container-fluid">
                <div class="row">

                  <div class="form-group input-lg" id="user">

                    <input name="id_number" type="text" class="form-control" placeholder="身份证号" id="userid">
                    
                  </div>

                  <div class="form-group input-lg" id="pwd">

                    <input name="password" type="password" class="form-control" id="Password" placeholder="密码">
                    
                  </div>

                  <div class="col-xs-offset-1" id="ckx">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> 记住密码
                      </label>

                    </div>
                      

                  </div>

                  
                  <div class="col-xs-offset-1 col-md-10">
                    
                    <button type="submit"  class="btn btn-warning btn-lg btn-block">登录</button>


            
                  </div>

                </div>
              </div>

            </form>
            <?php if($login_result==-1) {?>
            <div id="hint">登录失败,密码错误</div>
            <?php } ?>
          </div>
          <?php } ?>
        
          <script type="text/javascript">
            $(document).ready(function() {
              $("#userid").blur(function(){
                var idcard=$("#userid").val()
                
                var bo=/^(\d{6})(18|19|20)?(\d{2})([01]\d)([0123]\d)(\d{3})(\d|X)?$/.test(idcard);
                var year = idcard. substr(6,4);
                var month = idcard. substr(10,2);
                var day = idcard. substr(12,2);
                if(bo==false||month>12||day>31){
                  alert('身份证号格式错误!');
                  $("#userid").val('');
                 
                  return false;
                }
              });
              
              

              

            })
            
         

            
          </script>


          <div id="search">
           <div class="input-group" id="searcher">
             <input type="text" id="searchcontent" class="form-control" placeholder="医院/科室">
           </div>

           <input type="image" src="<?php echo base_url().'/res/images/button.png'?>" id="clicksearch" ></input>
           <div id="selects">

           </div>

         </div>
         <div id="visit">
          <div id="vtitle"><img src="<?php echo base_url().'/res/images/query.png'?>"></div>
          <form method="post" action="<?php echo base_url().'/RegUserPage'?>" id="quickvisit">
          <table id="Querylist">
            <tr>

              <td>
               
                <div class="querystyle">
                  <span class="querytitle2">地区</span>
                  <div id="area">
                    <select name="area">
                      <option value="null">请选择</option>
                      <option value="a1">北京市</option>
                      <option value="a2">上海市</option>
                      <option value="a3">天津市</option>
                      <option value="a4">广州省</option>
                      <option value="a5">河北省</option>
                      <option value="a6">福建省</option>
                      <option value="a7">浙江省</option>
                      <option value="a8">安徽省</option>
                      <option value="a9">山西省</option>
                      <option value="a10">甘肃省</option>
                      <option value="a11">湖南省</option>
                      <option value="a12">黑龙江省</option>
                    </select>
                  </div>
                </div>
                
              </td>
              <td>
                
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
                    <option value="1">一级甲等</option>
                    <option value="2">二级甲等</option>
                    <option value="3">三级甲等</option>
                    <option value="4">一级乙等</option>
                    <option value="5">二级乙等</option>
                    <option value="6">三级乙等</option>
                    <option value="7">一级丙等</option>
                    <option value="8">二级丙等</option>
                    <option value="9">三级丙等</option>
                  </select>
                </div>

              </div>

            </td>
          </tr>
          <tr>

             <td>

              <div id="noticeframe">
                 <div class="start"><span>近期</span></div>
                  <div class="go"><span>公告</span></div>
                <div id="noticeinfo"><a href="<?php echo base_url();?>NoticePage"><img src="<?php echo base_url().'res/images/noticefree.png'?>" style="width:90px"/></a></div>
              </div>


            </td>

            <td>

              <div id="startquery">
                <div class="start"><span>我要</span></div>
                <div class="go"><span>预约</span></div>
                <div id="queryArrow"><a href="<?php echo base_url().'RegUserPage'?>" onClick="document.form.submit();"><img src="<?php echo base_url().'res/images/arrowone.png'?>" style="width:90px"/></a></div>
              </div>


            </td>

           
            <td>

              <div id="helpframe">
              <div class="start"><span>预约</span></div>
                <div class="go"><span>流程</span></div>
                 <div id="helpinfo"><a class="big-link" data-reveal-id="myModal"><img src="<?php echo base_url().'res/images/help.png'?>" style="width:90px" /></a></div>
              </div>


            </td>
          </tr>

        </table>
        </form>


      </div>
      <div id="myModal" class="reveal-modal">
          <img src="<?php echo base_url().'res/images/myMtitle.png'?>" style="width:600px;margin-left:90px;padding-bottom:20px;"/>        
          <img src="<?php echo base_url().'res/images/liucheng.png'?>" style="width:480px;"/>
          <div style="margin-left:140px;"><label>tips：新用户要先注册呦！</label></div>
         <a class="close-reveal-modal">&#215;</a>
       </div>

      <div id="news">

       <div id="nmore"><a href="NoticePage">more..</a></div>
     
    <div id="firsthotnews">
      <?php foreach ($latest_notices as $notice_item): ?>

        <div class="hotnews" onMouseOver="this.style.background='url(<?php echo base_url().'/res/images/hotlable.png'?>)'" onMouseOut="this.style.background='none'">
          <div class="new">
            <a href="<?php echo base_url()."NoticePage/".$notice_item['ID'] ?>" target="_blank"><span class="words"><?php echo $notice_item['Title'] ?><span></a>
          </div>

        </div>

      <?php endforeach ?>

    </div>
  </div>
  <div id="activehot">
    <div id="hots1" class="hots">
      <div id="htitle1"><img src="<?php echo base_url().'/res/images/hos.png'?>"></div>
      <ul>
      
        <?php foreach ($hospitals as $hospital_item): ?>
          <li>
            <div class="hothospital">
              <img src="<?php echo base_url().'/res/images/hop1.jpg'?>" width="128" height="96" /> 
              <strong>
                <a href="#"><?php echo $hospital_item['Name'] ?>
                  [<?php echo $hospital_item['Level'] ?>]</a></strong>
                  <p>电话:<abbr title="hhh"><?php echo $hospital_item['Phone'] ?></abbr><br />
                    地址:<abbr title="<?php echo $hospital_item['Address'] ?>"><?php echo $hospital_item['Address'] ?></abbr><br />
                    所属城市：<?php echo $hospital_item['Type'] ?>
                    <div class="clear"></div>
                  </p>
                </div>
              </li>

            <?php endforeach ?>


          </ul>

        </div>

        <div id="hots2" class="hots">
         <div id="htitle2"><img src="<?php echo base_url().'/res/images/dep.png'?>"></div>
         <ul>

           <li>
            <div class="hothospital">
              <img src="<?php echo base_url().'/res/images/hop1.jpg'?>" width="128" height="96" />
              <strong>
                <a href="#">北医三院叼叼叼
                  [三级甲等]</a></strong>
                  <p>电话:<abbr title="hhh">80082089</abbr><br />
                    地址:<abbr title="北京市海淀区北大医学部">北京市海淀区北大医学部</abbr><br />
                    所属城市：北京
                    <div class="clear"></div>
                  </p>
                </div>
              </li>
              <li>
                <div class="hothospital">
                  <img src="<?php echo base_url().'/res/images/hop2.jpg'?>" width="128" height="96" /> <strong><a
                  href="#">上海颈复康医院
                  [三级甲等]</a></strong>
                  <p>电话:<abbr title="fff">454567</abbr><br />
                    地址:<abbr title="上海">上海某不知名小街区</abbr><br />
                    所属城市:上海市
                    <div class="clear"></div>
                  </p>
                </div>
              </li>
              <li>
                <div class="hothospital"> <img src="<?php echo base_url().'/res/images/hop3.jpg'?>" width="128" height="96" /> <strong><a
                  href="#">五四一急救特工队
                  [三级甲等]</a></strong>
                  <p>电话:<abbr title="武汉">000014556</abbr><br />
                    地址:<abbr title="武汉">武汉小花园广场街36路</abbr><br />
                    所属城市：武汉
                    <div class="clear"></div>
                  </p>
                </div>
              </li>
              <li>
                <div class="hothospital">
                  <img src="<?php echo base_url().'/res/images/hop4.jpg'?>" width="128" height="96" /> <strong><a
                  href="#">北京同仁医院
                  [三级甲等 ]</a></strong>
                  <p>电话:<abbr title="sdsdsd">010-58266699</abbr><br />
                    地址:<abbr title="">北京市东城区东交民巷1号(西区)</abbr><br />
                    所属城市:北京
                    <div class="clear"></div>
                  </p>
                </div>
              </li>
              <li>
                <div class="hothospital">
                  <img src="<?php echo base_url().'/res/images/hop5.jpg'?>" width="128" height="96" /> <strong><a
                  href="#">天津精神病疗护医院
                  [三级甲等 ]</a></strong>
                  <p>电话:<abbr title="sdsdsd">010-59718686</abbr><br />
                    地址:<abbr title="">天津城郊贫民窟</abbr><br />
                    所属城市:天津
                    <div class="clear"></div>
                  </p>
                </div>
              </li>
              <li>
                <div class="hothospital">
                  <img src="<?php echo base_url().'/res/images/hop6.jpg'?>" width="128" height="96" /> <strong><a
                  href="#">空军总医院
                  [三级甲等]</a></strong>
                  <p>电话:<abbr title="06654646456">04564564</abbr><br />
                    地址:<abbr title="北京市海淀区阜成路30号">北京市海淀区阜成路30号</abbr><br />
                    所属城市:北京
                    <div class="clear"></div>
                  </p>
                </div>
              </li>
            </ul>



          </div>
        </div>


        <div id="hleft"></div>
        <div id="hright"></div>
        <script type="text/javascript">
          $(document).ready(function() {
            $('#hright').mouseover(function() {
              $("#hots1").stop().animate({
                left: '-1040px'
              }, 350);
              $("#hots2").stop().animate({
                left: '0px'
              }, 350);
              $(this).css("background-color","black");
              $("#hleft").css("background-color","white");
            })
            $('#hleft').mouseover(function() {
              $("#hots1").stop().animate({
                left: '0px'
              }, 350);
              $("#hots2").stop().animate({
               left: '1040px'
             }, 350);
              $(this).css("background-color","black");
              $("#hright").css("background-color","white");
            })
            var style1={

              'background-color':'#E0FFFF',
              'border':'2px #ff0069 solid'
            };
            var style2={'background-color':'#FFF5EE',
            'border':'0px'
          };


          $(".hothospital").mouseover(function(){$(this).css(style1);})

          $(".hothospital").mouseout(function(){$(this).css(style2);})
        })
</script>
</div>
<div id="footer">
	<a href="<?php echo base_url();?>LoginPage">后台登陆</a>&nbsp;&nbsp;&nbsp;<a>关于我们</a>
</div>
</body>
</html>
