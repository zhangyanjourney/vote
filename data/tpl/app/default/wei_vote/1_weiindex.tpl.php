<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common_head_top', TEMPLATE_INCLUDEPATH)) : (include template('common_head_top', TEMPLATE_INCLUDEPATH));?>
    <script src="<?php echo TEMPLATE_PATH;?>js/jquery-2.1.3.min.js"></script>
<!--     <script src="<?php echo TEMPLATE_PATH;?>js/megapix-image.js"></script>
    <script src="<?php echo TEMPLATE_PATH;?>js/image.js"></script>   -->
	<script src="<?php echo TEMPLATE_PATH;?>js/exif.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_PATH;?>css/conn.css">
    <link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_PATH;?>css/upload.css">
</head>
<body>
 <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common_head', TEMPLATE_INCLUDEPATH)) : (include template('common_head', TEMPLATE_INCLUDEPATH));?>


<style>
.Voting-title{
    line-height:37px;

}
.Voting-with{

    padding: 5px 10px;
}

#file {
visibility:hidden;
}
#view li{
cursor: pointer;
}






.ui-panel {
    <!-- background-color: #fff; -->
}
.ui-panel {
    overflow: hidden;
     margin-bottom: 10px;
}


.list-title {
       padding: 18px 0 0px 0;
}


.list-title .tit {
    width: 181px;
    height: 32px;
    background: url(<?php echo TEMPLATE_PATH;?>/images/title.png) no-repeat;
    background-size: 181px auto;
    margin: 0 auto;
    font-size: 18px;
    color: #fff;
    line-height: 28px;
    text-align: center;
    margin-bottom: 5px;
}



#prize {
    margin-bottom: 60px;
    overflow: hidden;
    padding: 5px 10px;
}




</style>

     <div id="Voting">
           <form action="" method="post" enctype="multipart/form-data">
		   <input type="hidden" name="opid"  id ="opid" value="<?php  echo $opid;?>">
           <!-- <div class="Voting-title">立刻报名</div> -->
		   
		   <section id="free-read" class="ui-panel">         
			<div class="list-title">             
			    <div class="tit">立刻报名</div>            
			    
			</div>        
	
		</section>
		   
           <div class="Voting-data">
               <div>
                  <span class="Voting-data-s1 sl"><?php  echo $this->settings[0]['xingming']?>：</span>
                  <input id="names" required="" class="name" placeholder="" type="text" value = "" name="name">
                  <p class="ts">
                    
                    <span id="no" class="ok1">不可以注册必须是2-10个中文</span>
                  </p>
              </div>
          
		   <div>
                <span class="Voting-data-s1 sl">电话：</span>
                <input required="" id="shouji" class="phone" placeholder="填写有效电话（以便快速联系）" type="number" name="phone">
                <p class="ts">
                  <span id="shouyes">可以注册</span>
                  <span id="shouno" class="ok1">不可以注册必须是11位的手机号</span>
                </p>
              </div>
		  
		     <?php  if($this->settings[0]['zidingyi1'] != '') { ?>
				<div>
					  <span class="Voting-data-s1 sl"><?php  echo $this->settings[0]['zidingyi1']?>：</span>
					  <input id="zidingyi1" required="" class="name" placeholder="" type="text" value = "" name="zidingyi1">
					  <p class="ts">
						
						<span id="no" class="ok1">不能为空</span>
					  </p>
				  </div>
			<?php  } else { ?>
			
			<?php  } ?>
			 

 <?php  if($this->settings[0]['zidingyi2'] != '') { ?>
				<div>
					  <span class="Voting-data-s1 sl"><?php  echo $this->settings[0]['zidingyi2']?>：</span>
					  <input id="zidingyi2" required="" class="name" placeholder="" type="text" value = "" name="zidingyi2">
					  <p class="ts">
						
						<span id="no" class="ok1">不能为空</span>
					  </p>
				  </div>
			
			<?php  } ?>


 <?php  if($this->settings[0]['zidingyi3'] != '') { ?>
				<div>
					  <span class="Voting-data-s1 sl"><?php  echo $this->settings[0]['zidingyi3']?>：</span>
					  <input id="zidingyi3" required="" class="name" placeholder="" type="text" value = "" name="zidingyi3">
					  <p class="ts">
						
						<span id="no" class="ok1">不能为空</span>
					  </p>
				  </div>
			<?php  } else { ?>
			
			<?php  } ?>

 <?php  if($this->settings[0]['zidingyi4'] != '') { ?>
				<div>
					  <span class="Voting-data-s1 sl"><?php  echo $this->settings[0]['zidingyi4']?>：</span>
					  <input id="zidingyi4" required="" class="name" placeholder="" type="text" value = "" name="zidingyi4">
					  <p class="ts">
						
						<span id="no" class="ok1">不能为空</span>
					  </p>
				  </div>
			<?php  } else { ?>
			
			<?php  } ?>			
             <!--  <div class="sex">
                  <span class="sex-xib Voting-data-s1">性别：</span>
                  <p><label class="radio">男<input required="" type="radio" id="male_opt" value="0" name="gender"><i></i></label></p>
                  <p><label class="radio">女<input required="" type="radio" id="female_opt" value="1" name="gender" checked="checked"><i></i></label></p>
              </div> -->
             <!--  <div>
                 <span class="Voting-data-s1">年龄：</span>
                 <input required="" id="lian" class="age" placeholder="填写真实年龄（作为必须纯数字）" type="number" name="age">
                 <p class="ts">
                     <span id="lian-no" class="ok1">不可以注册必须是数字0-99岁</span>
                 </p>
              </div> -->
             
              <div class="Voting-data-up">
                  <span>上传照片1-<?php  echo $this->settings[0]['zuiduotupian']?>张：</span>
                  <div class="Voting-data-up-right">
                     
                       <input required="" onchange="handleFiles(this);" type="file" id="file" multiple="" accept="image/*">
                      
                       <ul id="put"></ul> 
                    
                       <ul id="view"> </ul>
                       <a href="javascript:;" id="_box"><img src="<?php echo TEMPLATE_PATH;?>images/0017.png"></a>
                  </div>
                  <div class="jind"></div>
              </div>
                <div id="loadingDiv" style="position:fixed;display:none;z-index:2000;top:0px;left:0px;width:100%;height:100%;background-color:rgba(13, 13, 11, 0.5);"></div>
                <div id="popup">
                       <span id="text">是否确定取消上传</span>
                       <div id="embedding">
                          <a href="javascript:void(0)">确定</a>   
                          <a href="javascript:void(0)">取消</a>
                       </div>
                </div>
              <div class="declaration">
                    <span class="Voting-data-sleft">介绍：</span>
                    <div class="declaration-1"><textarea onkeyup="keypress2()" onblur="keypress2()" required="" id="feifa" class="declaration-sp" placeholder="" name="declaration"></textarea>
                       <font color="gray" class="grn"><label id="pinglun">18/18</label></font>
                    </div>
                  
                    <p class="ts">
                      <span id="feifayes">可以注册</span>
                      <span class="ok1" id="feifano">不可以注册不能有特殊字符和为空</span>
                  </p>
             </div>
           
        </div>
        <div class="Voting-participate">
              <div class="Voting-participate-d" style="border-radius: 3px;"><span id="form_submit">提交</span></div>

        </div>

        <div class="Voting-lie">
            <div class="Voting-lie-1" style="border-radius: 3px;"><a href="<?php  echo $this->createMobileUrl('voindex',array('type'=>'uids','hdid'=>$_GPC['hdid']))?>">查看选手列表</a></div>
        </div>
		<!--  <div class="Voting-lie">
            <div class="Voting-lie-1"><a href="<?php  echo $this->settings[0]['keyword']?>">点击关注公众号</a></div>
        </div> -->
    </form></div>

    <?php  if($peiz[0]['huodong_sm'] != '') { ?>
        <div id="huodong">
          <!-- <div class="Voting-title">立刻报名</div> -->
		  <section id="free-read" class="ui-panel">         
			<div class="list-title">             
			    <div class="tit">活动说明</div>            
			    
			</div>        
	
		</section>
		  
		  
                <div class="Voting-with">
               
				  <?php  echo html_entity_decode($peiz[0]['huodong_sm'], ENT_QUOTES)?>
                </div>
          
        </div>
    <?php  } else { ?>

    <?php  } ?>
   <?php  if($peiz[0]['weng_x'] != '') { ?>
        <div id="prompt">
                <!-- <div class="Voting-title">温馨提示</div> -->
		<section id="free-read" class="ui-panel">         
			<div class="list-title">             
			    <div class="tit">温馨提示</div>            
			    
			</div>        
	
		</section>
                <div class="Voting-with">
				 <?php  echo html_entity_decode($peiz[0]['weng_x'], ENT_QUOTES)?>
                 
                  
                </div>
        
        </div>
    <?php  } else { ?>

    <?php  } ?>
     <?php  if($peiz[0]['jian_p'] != '') { ?>
        <div id="prize">
              <!-- <div class="Voting-title">活动奖品</div><div class="Voting-with"> -->
			  
		<section id="free-read" class="ui-panel">         
			<div class="list-title">             
			    <div class="tit">活动奖品</div>            
			    
			</div>        
	
		</section>
			  
			   <?php  echo html_entity_decode($peiz[0]['jian_p'], ENT_QUOTES)?>
            </div>
         </div>
    <?php  } else { ?>

    <?php  } ?>    
      <canvas id="canvas1" style="display:none"></canvas>   
     <!-- <canvas id ="canvas"></canvas> -->
     <span id="zui" class="ok1"></span>
     <div id="loading" style="position:fixed;display:none;z-index:2000;top:0px;left:0px;width:100%;height:100%;background-color:rgba(0, 0, 0, 0.2);"></div>

<script type="text/javascript">

  function rotateImg(img, direction,canvas) {    
        //alert(img);  
        //最小与最大旋转方向，图片旋转4次后回到原方向    
        var min_step = 0;    
        var max_step = 3;    
        //var img = document.getElementById(pid);    
        if (img == null)return;    
        //img的高度和宽度不能在img元素隐藏后获取，否则会出错    
        var height = img.height;    
        var width = img.width;    
        //var step = img.getAttribute('step');    
        var step = 2;    
        if (step == null) {    
            step = min_step;    
        }    
        if (direction == 'right') {    
            step++;    
            //旋转到原位置，即超过最大值    
            step > max_step && (step = min_step);    
        } else {    
            step--;    
            step < min_step && (step = max_step);    
        }    
        //img.setAttribute('step', step);    
        /*var canvas = document.getElementById('pic_' + pid);   
        if (canvas == null) {   
            img.style.display = 'none';   
            canvas = document.createElement('canvas');   
            canvas.setAttribute('id', 'pic_' + pid);   
            img.parentNode.appendChild(canvas);   
        }  */  
        //旋转角度以弧度值为参数    
        var degree = step * 90 * Math.PI / 180;    
        var ctx = canvas.getContext('2d');    
        switch (step) {    
            case 0:    
                canvas.width = width;    
                canvas.height = height;    
                ctx.drawImage(img, 0, 0);    
                break;    
            case 1:    
                canvas.width = height;    
                canvas.height = width;    
                ctx.rotate(degree);    
                ctx.drawImage(img, 0, -height);    
                break;    
            case 2:    
                canvas.width = width;    
                canvas.height = height;    
                ctx.rotate(degree);    
                ctx.drawImage(img, -width, -height);    
                break;    
            case 3:    
                canvas.width = height;    
                canvas.height = width;    
                ctx.rotate(degree);    
                ctx.drawImage(img, -width, 0);    
                break;    
        }    
    } 







 function Yan(name,shouji,feifa,t){
              var founderr = false; //初始化founderr变量，
              if(!(/^\s*[\u4e00-\u9fa5]{2,8}\s*$/).test(name))
              {
              return "姓名必须是2-8个中文.";
              founderr = true;
              }
              <!-- if(!(/[0]|[1]/).test(gender)) -->
             
              <!-- { -->
              <!-- return "性别必须选一个"; -->
              <!-- founderr = true; -->
              <!-- } -->

             // if(!(/^\d{1,2}$/).test(lian))
             // {
             // return "年龄必须是数字0-99之间";
             // founderr = true;
             // }

              if(!(/^0?(19[0-9]|17[0-9]|16[0-9]|13[0-9]|15[012356789]|18[0123456789]|14[0123456789])[0-9]{8}$/).test(shouji))
              {
              return "手机必须是11位的手机号";
              founderr = true;
              }
              if((/[`~!@#$%^&*()_+<>?:"{},.\/;'[\]]/im).test(feifa))
              {
              return "不能有特殊字符和为空";
              founderr = true;
              }
              if(t.length<1)
              {
              return "必须上传1-<?php  echo $this->settings[0]['zuiduotupian']?>张图片";
              founderr = true;
              }
              if(t.length><?php  echo $this->settings[0]['zuiduotupian']?>)
              {
              return "上传图片超出<?php  echo $this->settings[0]['zuiduotupian']?>张";
              founderr = true;
              }

              if(feifa =='')
              {
              return "介绍不能为空";
              founderr = true;
              }

              if(feifa.length<2)
              {
              return "介绍不能少于2个字";
              founderr = true;
              }

            
              return founderr;

                   }


</script>
 <script type="text/javascript"> 
 
              $("#_box").click(function ()
              {
                   
                   var n = $("#view li").length;             
              if (n<<?php  echo $this->settings[0]['zuiduotupian']?>)
              {
              //alert('ok');
                   $("#file").click();  
              }else
              {

                  $("#zui").css("margin","-"+$("#no").height()/2+"px 0 0 -"+$("#no").width()/2+"px");
                  $("#zui").show().html('图片超过数量');
              setTimeout(function()
              {

                  $("#zui").css('display','none');

              },2000); 

                  };                                                             
                                         
              }); 


 </script>
<script type="text/javascript">
var t = new Array();
function handleFiles(obj) {
               $("#zui").show().html('图片上传中');
            var canvas, context, img, imgX = 0, imgY = 0, imgScale = 1;
            var files = obj.files;
			 var file = obj.files['0'];  
  //图片方向角 added by lzk  
  var Orientation = null;  

			EXIF.getData(file, function() {  
			  // alert(EXIF.pretty(this));  
			  EXIF.getAllTags(this);   
			  //alert(EXIF.getTag(this, 'Orientation'));   
			  Orientation = EXIF.getTag(this, 'Orientation');  
			  //return;  
			 console.log(Orientation); 
			 //alert(Orientation); 
			});
	        
			
		
			
			
			
			
			
			
			
			
			
			
			
			var total=5;
                     var n = $("#view li").length;
                     var z = files.length;
             if ((n+z)><?php  echo $this->settings[0]['zuiduotupian']?>) {
                              
                     $("#zui").css("margin","-"+$("#no").height()/2+"px 0 0 -"+$("#no").width()/2+"px");
                     $("#zui").show().html('图片超过数量');
                     setTimeout(function()
                     {

                     $("#zui").css('display','none');


                     },2000);
                     return false;
                            };
			
			
			
			
			
			
            img = new Image();
            
            canvas = document.getElementById('canvas1');
            context = canvas.getContext('2d');

            window.URL = window.URL || window.webkitURL;
            if (window.URL) {
                img.src = window.URL.createObjectURL(files[0]); //创建一个object URL，并不是你的本地路径
				//alert(img.src);
                img.onload = function (e) {
                    //if (img.width >3000) {
                    //     imgScale = 0.9; 
                    // }
				   
				    if (img.width >800) {
                        imgScale = 800 / img.width;
                    }
				   
				   
				   
				   
                    canvas.width = img.width * imgScale;
                    canvas.height = img.height * imgScale;
                    context.drawImage(img, 0, 0, img.width, img.height, imgX, imgY, img.width * imgScale, img.height * imgScale);

					//alert(img.width * imgScale);
					
					  if (navigator.userAgent.match(/iphone/i)) {  
                    console.log('iphone');  
                    //alert(expectWidth + ',' + expectHeight);  
                    //如果方向角不为1，都需要进行旋转 added by lzk  
					//Orientation =8;
					if(Orientation != "" && Orientation != 1){  
							//alert(Orientation);  
							switch(Orientation){  
								case 6://需要顺时针（向左）90度旋转  
									//alert(canvas.width);  
									rotateImg(img,'left',canvas);  
									break;  
								case 8://需要逆时针（向右）90度旋转  
									//alert('需要顺时针（向右）90度旋转');  
									rotateImg(img,'right',canvas);  
									break;  
								case 3://需要180度旋转  
									//alert('需要180度旋转');  
									rotateImg(img,'right',canvas);//转两次  
									rotateImg(img,'right',canvas);  
									break;  
							}         
						}
					
					
					
					
					}
					
					
					if (navigator.userAgent.match(/iphone/i)) {  
                   
					    var imageUri = canvas.toDataURL("image/jpeg", 0.4);
					}else{
					
						
                       var imageUri = canvas.toDataURL("image/jpeg");
					}
					
				
				   
				    document.getElementById("view").innerHTML+="<li><img id ='tu' src='"+imageUri+"'  /><img class ='dw'  src = '<?php echo TEMPLATE_PATH;?>/images/999.png'><input type='hidden' name='picture[]' value='"+ imageUri+"' /></li>";
				                                 
				     $.post("<?php  echo $this->createMobileUrl('shang1',array('type'=>'uids'))?>", { filed: [imageUri,]},
                     function(data){
                      
                     console.log(data);      
             if (data) {
                          
                      t.push(data);
                      var tl = t.length;
                      var sl = $("#view li").length;
             if (tl == sl)
             {
                       //alert(data);    
                       $("#zui").show().html('上传成功');					   
                     // $("#zui").html('上传成功');
                                  
             };
                      setTimeout(function() {

                      $("#zui").css('display','none');


                      },2000);

                            
             }else{


                      t.push(data);
                      $('#loading').css('display','block');
                           
                      $("#zui").css("margin","-"+$("#no").height()/2+"px 0 0 -"+$("#no").width()/2+"px");
                      $("#zui").show().html('上传失败');
                      setTimeout(function()
                      {
                      $("#zui").css('display','none');
                      $('#loading').css('display','none');
                              // $('.overlay').remove();
                      },2000);
                      };
                          

                      })
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   

           
                  
                }
            }
            
        }









                     <!-- var t = new Array(); -->
             <!-- document.getElementById("file").onchange=function () -->
             <!-- { -->
			 
			 
			 
			 
                     <!-- var files = this.files,total=5; -->
                     <!-- var n = $("#view li").length; -->
                     <!-- var z = files.length; -->
             <!-- if ((n+z)>5) { -->
                              
                     <!-- $("#zui").css("margin","-"+$("#no").height()/2+"px 0 0 -"+$("#no").width()/2+"px"); -->
                     <!-- $("#zui").show().html('图片超过数量'); -->
                     <!-- setTimeout(function() -->
                     <!-- { -->

                     <!-- $("#zui").css('display','none'); -->


                     <!-- },2000); -->
                     <!-- return false; -->
                            <!-- }; -->

             <!-- for (var i = 0; i < files.length; i++) { -->
                 <!-- if (!/jpg|jpeg|gif|png/ig.test(files[i].name.replace(/.+\.(\w+)$/, function (p, p1) {return p1;}))) -->
                 <!-- { -->
					<!-- files[i].type -->
                 <!-- alert(files[i]); -->
                 <!-- return; -->
             
               <!-- } -->
             <!-- $("#zui").css("margin","-"+$("#no").height()/2+"px 0 0 -"+$("#no").width()/2+"px"); -->
             <!-- $("#zui").show().html('正在上传中'); -->
	
          <!-- ImageUtil.viewFile(files[i],{width:500,height:500,quality:0.8},function(imageUri){ -->

             <!-- document.getElementById("view").innerHTML+="<li><img id ='tu' src='"+imageUri+"'  /><img class ='dw'  src = '<?php echo TEMPLATE_PATH;?>/images/999.png'><input type='hidden' name='picture[]' value='"+ imageUri+"' /></li>"; -->
				                                 
				     <!-- $.post("<?php  echo $this->createMobileUrl('shang',array('type'=>'uids'))?>", { filed: [imageUri,]}, -->
                     <!-- function(data){ -->
                          
                     <!-- console.log(data);       -->
             <!-- if (data) { -->

                      <!-- t.push(data); -->
                      <!-- var tl = t.length; -->
                      <!-- var sl = $("#view li").length; -->
             <!-- if (tl == sl) -->
             <!-- { -->
                       <!-- //alert(data) ;          -->
                      <!-- $("#zui").html('上传成功'); -->
                                  
             <!-- }; -->
                      <!-- setTimeout(function() { -->

                      <!-- $("#zui").css('display','none'); -->


                      <!-- },2000); -->

                            
             <!-- }else{ -->


                      <!-- t.push(data); -->
                      <!-- $('#loading').css('display','block'); -->
                           
                      <!-- $("#zui").css("margin","-"+$("#no").height()/2+"px 0 0 -"+$("#no").width()/2+"px"); -->
                      <!-- $("#zui").show().html('上传失败'); -->
                      <!-- setTimeout(function() -->
                      <!-- { -->
                      <!-- $("#zui").css('display','none'); -->
                      <!-- $('#loading').css('display','none'); -->
                           
                      <!-- },2000); -->
                      <!-- }; -->
                          

                      <!-- }) -->


            <!-- }); -->
	
             <!-- } -->
             <!-- }; -->
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
             $(function(){
             $("#form_submit").on("click",function()
             {
                   var opid = $("#opid").val();                 
                   var name = $("#names").val();
                 
                   var shouji = $("#shouji").val();
                   var feifa = $("#feifa").val();
				   
				   var zidingyi1 = $("#zidingyi1").val();                 
                   var zidingyi2 = $("#zidingyi2").val();
                 
                   var zidingyi3 = $("#zidingyi3").val();
                   var zidingyi4 = $("#zidingyi4").val();
				   
				   
				  
                      
                  var me = Yan(name,shouji,feifa,t);
                           
             if(me == false) {
                                

                  $.post("<?php  echo $this->createMobileUrl('shangadd',array('type'=>'uids','hdid'=>$_GPC['hdid']))?>",
                  {            
				               opid:opid,
                               name: name,
                              
                               shouji:shouji,
                               feifa:feifa,
							   
							   
							   zidingyi1:zidingyi1,
                               zidingyi2: zidingyi2,
                              
                               zidingyi3:zidingyi3,
                               zidingyi4:zidingyi4,
                         
                               t:t

                  },
             function(data)
             {
                                    
                  $('#loading').css('display','block');
                                                     
                  $("#zui").css("margin","-"+$("#no").height()/2+"px 0 0 -"+$("#no").width()/2+"px");
                  $("#zui").show().html(data.a);
				 // alert(data.a) ;
                  //if(未关注公众号'.$_W['account']['account'])
                  setTimeout(function()
             {
                  $("#zui").css('display','none');
                  $('#loading').css('display','none');
				  if(data.b==1){
				       window.location.href="<?php  echo $this->settings[0]['keyword']?>"; 
				  }
				  if(data.b==3){
				       window.location.href="<?php  echo $this -> createMobileUrl('list',array('hdid'=>$_GPC['hdid']))?>&id="+data.bmid; 
				  }
                  if(data.b==2){
				       window.location.href="<?php  echo $this -> createMobileUrl('Voindex',array('type'=>'uids','hdid'=>$_GPC['hdid']))?>"; 
				  }
             },2000);

                                         
             },'json'); 

             }else
             {

                  $('#loading').css('display','block');
                                                     
                  $("#zui").css("margin","-"+$("#no").height()/2+"px 0 0 -"+$("#no").width()/2+"px");
                  $("#zui").show().html(me);
                  setTimeout(function() {
                  $("#zui").css('display','none');
                  $('#loading').css('display','none');
             },2000);

             }; 
             })
             
             })
                 var m = 0;
            $(document).on("click", "#view li", function()
		        { 
                  m = $(this).index();
                  $('#loadingDiv').css('display','block');  
                  //t.splice(m,1);
                  $("#popup").css("margin","-"+$("#popup").height()/2+"px 0 0 -"+$("#popup").width()/2+"px");
                  $('#popup').slideDown();
 
            })

                  $(document).on('click','#embedding a',function()
            {
                  if($(this).text()=='确定')
            {
			
			      t.splice(m,1);
                  $("#view li").eq(m).remove();
                  $('#popup').hide();
                  $('#loadingDiv').css('display','none');
                                 
            }else
            {
                  $('#loadingDiv').css('display','none'); 
                  $('#popup').slideUp();
            }
  });

  
  

  
  
</script>
<script type="text/javascript">
          $('.ok1').on('click', function()
		      {
                 $(this).hide();
          });
</script>
<script type="text/javascript">
          function showCover()
		      {
                $("#favor_weixin").show();
                $("#wx-cover").show();
          }
          function hideCover()
		      {
               $("#favor_weixin").hide();
               $("#wx-cover").hide();
          }
</script>
<script language="javascript"> 
          function keypress2() //textarea输入长度处理 
          { 
               var text1=document.getElementById("feifa").value; 
               var len;//记录剩余字符串的长度 
          if(text1.length>=40)//显示输入字符数了 
          { 
               document.getElementById("feifa").value=text1.substr(0,40); 
               len=0; 
          } 
          else 
          { 
               len=40-text1.length; 
          } 
               var show=len+"/40"; 
               document.getElementById("pinglun").innerText=show; 
          } 

</script>

<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common_foot', TEMPLATE_INCLUDEPATH)) : (include template('common_foot', TEMPLATE_INCLUDEPATH));?>