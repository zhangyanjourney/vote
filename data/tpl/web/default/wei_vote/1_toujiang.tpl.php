<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

 
 
    <script>
	     
		   function fun(){
				obj = document.getElementsByName("delete");
				check_val = [];
				for(k in obj){
					if(obj[k].checked)
						check_val.push(obj[k].value);
				}
				
				
				$.post("<?php  echo $this->createWebUrl('Delajaxtoupiao', array())?>", { "checkval": check_val },
				function(data){
				  
				  
				 //alert(data.msg); // John
				  
				  location.reload(); 

				  console.log(data); //  2pm
				  
				  
				  
				  }, "json");
						
				
				
				
			}
		     
		
	</script>
 
 
 
 
 
 
 
 
	<div class="panel panel-default">
	<div class="panel-body table-responsive">
		<table class="table table-hover" style="width:100%;z-index:-10;" cellspacing="0" cellpadding="0">
			<thead class="navbar-inner">
				<tr>
					<th style="width:30px;overflow:hidden;">删？</th>
					<th style="width:60px;overflow:hidden;">ID</th>
					
					<th style="width:120px;overflow:hidden;">头像</th>
						<th style="width:90px;overflow:hidden;">活动ID</th>
					<th style="width:270px;overflow:hidden;">openid/时间</th>
				
					<th style="width:100px;overflow:hidden;">抽奖次数</th>
					<th style="width:100px;overflow:hidden;">投票总数</th>
	
				
					<th style="min-width:70px;" class="text-right">操作</th>
				</tr>
			</thead>
			<tbody>
	<?php  if(is_array($urs)) { foreach($urs as $i => $item) { ?>
				<tr>
					<tr>
	      <td class="text-left vertical-middle"><input class="check-delete tagids-<?php  echo $item['id'];?>" type="checkbox" name="delete" value="<?php  echo $item['id'];?>" data-tagids="" data-openid="" data-fanid="<?php  echo $item['id'];?>"></td>
		  <td class="text-left vertical-middle"><?php  echo $item['id'];?></td>
		 
		  <td class="text-left vertical-middle">
		  <p><img src="<?php  echo $item['avatar'];?>" width="50px" height="50px"></p>
		  <p><?php  echo $item['nickname'];?></p>
		  </td>
		  <td class="text-left vertical-middle"><?php  echo $item['hdid'];?></td>
		   <td class="text-left vertical-middle">
		   
		   <p><?php  echo $item['openid'];?></p>
		    <p><?php  echo date('Y-m-d H:i:s', $item['time']);?></p>
		   </td>
	
		  <td class="text-left vertical-middle"><?php  echo $item['choujiang'];?></td>
		   <td class="text-left vertical-middle"><?php  echo $item['toupiao'];?></td>
		  <td class="text-right text-left vertical-middle" style="overflow:visible;">

		  <a class="btn btn-default btn-sm" href="<?php  echo $this->createWebUrl('Toujiang', array('id' => $item['id'], 'op' => 'del'))?>">删除</a>
		  </td>
		</tr>
				</tr> <?php  } } ?>
				
							</tbody>
		</table>
		<table class="table table-hover">
			<tbody><tr>
				<td width="30">
					<input type="checkbox" onclick="var ck = this.checked;$('.check-delete').each(function(){this.checked = ck});">
				</td>
				<td class="text-left">
					<input name="token" type="hidden" value="747068bb">
					<input type="submit" name="submit" class="btn btn-primary span2" onclick="fun()" value="删除"> &nbsp; 
			
					</td>
			</tr>
			<tr>
				<td colspan="2">
					
				</td>
			</tr>
		</tbody></table>
	</div>
	</div>
	<div class="footactions" style="padding-left:10px">
		<div class="pages" style="text-align:right;"><?php  echo $pager;?></div>
	</div>
  
  
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>