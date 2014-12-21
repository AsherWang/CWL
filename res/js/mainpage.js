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

  $("a[name='query']").click(function(){$("#quickvisit").submit();})
  $("a[name='querydordbut']").click(function(){$("#querydord").submit();})
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

