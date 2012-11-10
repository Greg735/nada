<style>
#tabs {
	border-bottom : 1px solid #ccc;
	margin : 0;
	xpadding-bottom : 19px;
	padding-left : 10px;
	margin-top:20px;
}
 
#tabs ul, #tabs li	{
	display : inline;
	list-style-type : none;
	margin : 0;
	padding : 0;
	margin-bottom:10px;
}
 
	
#tabs a:link, #tabs a:visited	{
	background:gainsboro;
	border : 1px solid #ccc;
	color:black;
	xfloat : left;
	font-size : 14px;
	font-weight : normal;
	xline-height : 18px;
	margin-right : 8px;
	padding : 2px 10px 2px 10px;
	text-decoration : none;
	display:inline-block;
	margin-bottom:-1px;
}

 
#tabs .active a, #tabs a:link.active, #tabs a:visited.active	{
	background : #fff;
	border-bottom : 1px solid #fff;
	color : #000;
	font-weight:bold;
}

#tabs .active a:hover{
	background:none;
	color:black;
}
 
#tabs a:hover	{
	color:white;
	background:black;
}

 
</style>

<?php $selected_page=$this->uri->segment(5); ?>
<?php $edit_page=$this->uri->segment(2).'/'.$this->uri->segment(3);?>
<ul id="tabs"> 
  <li <?php echo ($selected_page=='') ? 'class="active"' : ''; ?>><a href="<?php echo site_url();?>/admin/catalog/edit/<?php echo $this->uri->segment(4);?>"><?php echo t('manage_files');?></a></li> 
  <li <?php echo ($selected_page=='resources') ? 'class="active"' : ''; ?>><a href="<?php echo site_url();?>/admin/catalog/<?php echo $this->uri->segment(3);?>/<?php echo $this->uri->segment(4);?>/resources"><?php echo t('external_resources');?></a></li>  
  <li <?php echo ($selected_page=='citations') ? 'class="active"' : ''; ?>><a href="<?php echo site_url();?>/admin/catalog/<?php echo $this->uri->segment(3);?>/<?php echo $this->uri->segment(4);?>/citations"><?php echo t('citations');?></a></li>  
</ul>