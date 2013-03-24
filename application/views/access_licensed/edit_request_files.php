<?php
/*
* List of files for a request 
* For admin to setup download options
*
*/
?>

<?php if ($files): ?>
    <!-- grid -->
    <table class="grid-table" width="100%" cellspacing="0" cellpadding="0">
    	<tr class="header">
	        <th><input type="checkbox" id="chk_toggle"/></th>
            <th><?php echo t('file');?></th>
            <th><?php echo t('download_limit');?></th>			
            <th><?php echo t('expiry');?></th>            
        </tr>
	<?php $tr_class=""; ?>
	<?php foreach($files as $key=>$survey_data): ?>
    	<tr>
        <td></td>
        <td colspan="3"><h3><?php echo $survey_list[$key];?></h3></td>
        </tr>
    <?php foreach($survey_data as $row): ?>
    	<?php $row=(object)$row;//echo '<pre>';var_dump($row); ?>
		<?php if($tr_class=="") {$tr_class="alternate";} else{ $tr_class=""; } ?>
    	<tr class="<?php echo $tr_class; ?>">
	        <td><input class="chk" type="checkbox" value="<?php echo $row->resource_id;?>" name="fileid-<?php echo $row->resource_id;?>" <?php  echo isset($row->download['download_limit']) ? 'checked="checked"' : ''; ?>/></td>
            <td><?php echo basename($row->filename); ?></td>
            <td><input type="text" class="download-limit" name="download-limit-<?php echo $row->resource_id;?>" maxlength="2" size="2" value="<?php echo isset($row->download['download_limit']) ? $row->download['download_limit'] : 3; ?>"/></td>
			<td><input maxlength="10" class="expiry" name="expiry-<?php echo $row->resource_id;?>" type="text" size="10" value="<?php echo isset($row->download['expiry']) ? date("m/d/Y",$row->download['expiry']) : date("m/d/Y",date("U")+(60*60*24*5)); ?>"/></td>
        </tr>
    <?php endforeach;?>
    <?php endforeach;?>
    	<tr class="<?php echo $tr_class; ?>" style="background-color:#FFFFCC">
	        <td>&nbsp;</td>
            <td><?php echo t('change_all_settings');?></td>
            <td><input id="download-limit-hd" type="text" maxlength="2" size="2" value="3"/></td>			
            <td><input id="expiry-hd" class="expiry" type="text" maxlength="10" size="10" value="<?php echo date("m/d/Y",date("U")+(60*60*24*5));?>"/>&nbsp;<input type="button" id="update-all" value="<?php echo t('apply');?>"/></td>
        </tr>
    </table>

	<?php /* ?>
    <div class="field" style="margin-top:10px;">        
    <label style="font-weight:bold;"><?php echo t('restrict_data_access_by_id');?></label>
    <input name="ip_limit" type="text" size="30" value="<?php echo isset($ip_limit) ? $ip_limit : ''; ?>"/> <em style="font-style:italic"><?php echo t('use_comma_for_multiple_ip');?></em>
    </div>
	<?php */ ?>
                
<?php else: ?>
	<?php echo t('not_attached_any_licensed_files');?>
<?php endif; ?>

<script type="text/javascript"> 
	$(function() {
		$(".expiry").datepicker();
	});

	function process_request(requestid){
		data=$("#form_request_review").serialize();
		$("#status-text").html('<img src="images/loading.gif"/><?php echo t('js_updating_please_wait');?>');
		$.ajax({
			timeout:1000*120,
			dataType: "html",
			data:data,
			type:'POST', 
			url: CI.base_url+'/admin/licensed_requests/update/'+requestid, //+selected+'/?ajax=true',
			success: function(data) {			
				$("#status-text").html(data);
			},
			error: function(XHR,err) {
					$("#status-text").html("Error occured " + XHR.status + " - " + err);
			}
		});	
	}

	function send_mail(requestid){
		$("#form_compose_email_status").html('');
		data=$("#form_compose_email").serialize();
		url=CI.base_url+'/admin/licensed_requests/send_mail/'+requestid;
		$.post(url,data, 
			function (data){
				$("#form_compose_email_status").html('<div>'+data+'</div>');
			});
	}
	
	function forward_mail(requestid){
		$("#form_fw_lic_request_status").html('');
		data=$("#form_fw_lic_request").serialize();
		url=CI.base_url+'/admin/licensed_requests/forward_request/'+requestid;
		$.post(url,data, 
			function (data){
				$("#form_fw_lic_request_status").html('<div>'+data+'</div>');
			});
	}
	
	$(function() {
		$("#update-all").click(function () {
			update_all_settings();return false;
		});

	});
	
	function update_all_settings()
	{
		if ($(".download-limit").val()!=''){
			$(".download-limit").val($("#download-limit-hd").val());
		}
		if ($(".expiry").val()!=''){
			$(".expiry").val($("#expiry-hd").val());
		}
		return false;
	}

//checkbox select/deselect
jQuery(document).ready(function(){
	$("#chk_toggle").click(
			function (e) 
			{
				$('.chk').each(function(){ 
                    this.checked = (e.target).checked; 
                }); 
			}
	);
	$(".chk").click(
			function (e) 
			{
			   if (this.checked==false){
				$("#chk_toggle").attr('checked', false);
			   }			   
			}
	);
});	
</script>