<html>
<head>
 <title>全国统一预约平台</title>
 <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

 <link rel="stylesheet" type="text/css" href='<?php echo base_url().'/res/css/bootstrap.min.css'?>'>
 <link href='<?php echo base_url().'res/css/mainpagestyle.css'?>' rel="stylesheet" type="text/css" />
 <script src='<?php echo base_url().'res/js/jquery.js'?>'></script>
 
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
       <?php if($login_result==0||$login_result==-1)  {?>
       <ul class="nav navbar-nav navbar-right" id="logo1">
        <li class="active"><a>游客欢迎您</a></li>
        <li><a href="<?php echo base_url();?>LoginPage/regist">请先注册</a></li>
      </ul>
      <?php } else {?>
      <ul class="nav navbar-nav navbar-right" id="logo1">
       <li class="active"><a><?php echo $user['username'] ?></a></li>
       <li><a href="<?php echo base_url();?>LoginPage/regist">用户中心</a></li>
     </ul>

     <?php } ?>
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
           <div id="wname"><?php echo $user['username'] ?></div>
           <div id="wimg"><img style="width:180px;height:180px;" class="img-circle" src="<?php echo base_url().'res/images/user.jpg'?>"></div>

           <div id="wlog"><button id="wbut" onclick="window.location.href='<?php echo base_url();?>?do=exit'" type="button" class="btn btn-primary btn-lg">退出登录</button>
           </div>
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
          <div id="hint"></div>
          <?php if($login_result==-1) {?>
          <div id="hint">登录失败,密码错误</div>
          <?php } ?>
          </div>
          <?php } ?>
      </div>
        <script type="text/javascript">
          $(document).ready(function() {
            $("#userid").blur(function(){
              var idcard=$("#userid").val()

              var bo=/^(\d{6})(18|19|20)?(\d{2})([01]\d)([0123]\d)(\d{3})(\d|X)?$/.test(idcard);
              var year = idcard. substr(6,4);
              var month = idcard. substr(10,2);
              var day = idcard. substr(12,2);
              if(bo==false||month>12||day>31){
                $("#hint").text('身份证号格式错误');
                $("#userid").val('');

                return false;
              }
              else{
                $("#hint").text('');
                return true;
              }
            });
          })
        </script>


        <div id="search">
        <form action="<?php echo base_url()?>RegUserPage/Index" method="get" id="querydord">
         <div class="input-group" id="searcher">
           <input type="text" name="search_box" id="searchcontent" class="form-control" placeholder="医院名称">
         </div>
         <div id="querybut"><a name="querydordbut"><img style="width:120px;height:50px;" src="<?php echo base_url().'/res/images/button.png'?>"></a></div>
         </form>

       </div>

       <div id="visit">
        <div id="vtitle"><img src="<?php echo base_url().'/res/images/query.png'?>"></div>
        <form method="get" action="<?php echo base_url().'/RegUserPage'?>" id="quickvisit">
          <table id="Querylist">
            <tr>

              <td>

                <div class="querystyle">
                  <span class="querytitle2">地区</span>
                  <div id="area">
                    <select name="search_area">
                      <option value="">请选择</option>
                      <?php foreach ($area_list as $key => $value){ ?>
                          <option value="<?php echo $value ?>"><?php echo $value ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                
              </td>
              <td>

                <div class="querystyle">
                  <span class="querytitle2">类型</span>
                  <div id="type">
                    <select name="search_type">
                       <option value="">请选择</option>
                       <?php foreach ($type_list as $key => $value){ ?>
                          <option value="<?php echo $value ?>"><?php echo $value ?></option>
                        <?php } ?>
                    </select>
                  </div>

                </div>

              </td>
              <td>

                <div class="querystyle">
                 <span class="querytitle2">等级</span>
                 <div id="class">
                  <select name="search_level">
                     <option value="">请选择</option>
                     <option value="一级甲等">一级甲等</option>
                     <option value="二级甲等">二级甲等</option>
                     <option value="三级甲等">三级甲等</option>
                     <option value="一级乙等">一级乙等</option>
                     <option value="二级乙等">二级乙等</option>
                     <option value="三级乙等">三级乙等</option>
                     <option value="一级丙等">一级丙等</option>
                     <option value="二级丙等">二级丙等</option>
                     <option value="三级丙等">三级丙等</option>
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
            <div id="queryArrow"><a name="query"><img src="<?php echo base_url().'res/images/arrowone.png'?>" style="width:90px"/></a></div>
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
<script type="text/javascript">
  $(document).ready(function() {
            $("a[name='query']").click(function(){$("#quickvisit").submit();})
            $("a[name='querydordbut']").click(function(){$("#querydord").submit();})
  })
</script>

<div id="myModal" class="reveal-modal">
  <img src="<?php echo base_url().'res/images/myMtitle.png'?>" style="width:600px;margin-left:90px;padding-bottom:20px;"/>        
  <img src="<?php echo base_url().'res/images/liucheng.png'?>" style="width:480px;"/>
  <div style="margin-left:140px;"><label>tips：新用户要先注册呦！</label></div>
  <a class="close-reveal-modal">&#215;</a>
</div>

<div id="news">
 <div id="nmore"><a href="<?php echo base_url();?>NoticePage">more..</a></div>
 <div id="firsthotnews">
    <?php foreach ($latest_notices as $notice_item){ ?>
      <div class="hotnews" onMouseOver="this.style.background='url(<?php echo base_url().'/res/images/hotlable.png'?>)'" onMouseOut="this.style.background='none'">
      <div class="new">
        <a href="<?php echo base_url().'NoticePage/view/'.$notice_item['ID'] ?>" target="_blank"><span class="words"><?php $smalltitle=substr($notice_item['Title'],0,45); echo $smalltitle ?><span></a>
      </div>
      </div>
    <?php } ?>
  </div>
</div>
<div id="activehot">
  <div id="hots1" class="hots">
    <div id="htitle1"><img src="<?php echo base_url().'res/images/hos.png'?>"></div>
    <ul>
      <?php $i=0; foreach ($hospitals as $hospital_item){ $i++;?>
      <li>
        <div class="hothospital">
          <img src="<?php echo base_url().'res/images/hop'."$i".'.jpg'?>" width="128" height="96" /> 
          <strong>
            <a href="<?php echo base_url().'RegUserPage/Hsp_doctor_list?hospital_id='.$hospital_item['ID'] ?>"><?php echo $hospital_item['Name'] ?>
              [<?php echo $hospital_item['Level'] ?>]</a></strong>
              <p>电话:<abbr title="hhh"><?php echo $hospital_item['Phone'] ?></abbr><br />
                地址:<abbr title="<?php echo $hospital_item['Address'] ?>"><?php echo $hospital_item['Address'] ?></abbr><br />
                所属城市：<?php echo $hospital_item['Type'] ?>
                <div class="clear"></div>
              </p>
            </div>
          </li>
          <?php } ?>
        </ul>
      </div>

      <div id="hots2" class="hots">
       <div id="htitle2"><img src="<?php echo base_url().'/res/images/dep.png'?>"></div>
       <ul>
         <?php $j=0; foreach ($departments as $department_item){ $j++;?>
         <li>
          <div class="hothospital">
            <img src="<?php echo base_url().'/res/images/hop'."$j".'.jpg'?>" width="128" height="96" /> 
            <strong>
              <a href="<?php echo base_url().'RegUserPage/result_of_dep_search?department_id='.$department_item['ID'] ?>"><?php echo $department_item['Name'] ?>
                [<?php echo $department_item['Type'] ?>]</a></strong>
                <p>
                  详细信息:<?php $Info1 = substr($department_item['Info'],0,90); echo $Info1.'。。。';  ?><br />
                  所属医院：<?php echo $department_item['Type'] ?>
                  <div class="clear"></div>
                </p>
              </div>
            </li>
            <?php } ?>
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
