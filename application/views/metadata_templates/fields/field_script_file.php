<?php if (isset($data) && is_array($data) && count($data)>0 ):?>

<?php
    //script file template
    $script_file_template=array(
    //"title"=>'text',
    "file_name" =>'text',
    "zip_package" =>'text',
    "description" =>'text',
    "authors" =>'array',
    "date" =>'text',
    "format" =>'text',
    "software" =>'text',                    
    "methods" =>'text',
    "dependencies" =>'text',
    "instructions" =>'text',
    "format" =>'text',
    "source_code_repo" =>'text',
    "notes" =>'text',
);

?>

<div class="field field-<?php echo $name;?>">
    <div class="xsl-caption field-caption"><?php echo t($name);?></div>
    <div class="field-value">
    <div id="accordion-script-files">
        <?php $k=0;foreach($data as $script):$k++;?>
            <div class="card">
            <div class="card-header" id="script-<?php echo $k;?>">
                <h5 class="mt-1 mb-0 accordion-title float-left" 
                    data-toggle="collapse" 
                    data-target="#script-body-<?php echo $k;?>" 
                    aria-expanded="true" 
                    aria-controls="script-body-<?php echo $k;?>"
                    >                
                    <i class="fa" aria-hidden="true"></i>
                    <?php echo $script['title'];?>
                </h5>
                <?php if (isset($script['file_name'])):?> 
                    <?php if (isset($options['resources']) && array_key_exists($script['file_name'],$options['resources'])):?>                        
                        <?php 
                            $resource = $options['resources'][$script['file_name']];                            
                        ?>
                        <a 
                            href="<?php echo site_url("catalog/{$resource['survey_id']}/download/{$resource['resource_id']}");?>" 
                            class="btn btn-primary btn-sm float-right"
                            >
                            <i class="fa fa-download" aria-hidden="true"></i>
                            <?php echo t('download');?>
                        </a>
                    <?php endif;?>
                    <?php //for zip packages ?>
                    <?php if (isset($options['resources']) && 
                            isset($script['zip_package']) && 
                            array_key_exists($script['zip_package'],$options['resources'])):?>                        
                        <?php 
                            $resource = $options['resources'][$script['zip_package']];                            
                        ?>
                        <a 
                            href="<?php echo site_url("catalog/{$resource['survey_id']}/download/{$resource['resource_id']}");?>" 
                            class="btn btn-primary btn-sm float-right"
                            >
                            <i class="fa fa-download" aria-hidden="true"></i>
                            <?php echo t('download');?>
                        </a>
                    <?php endif;?>
                <?php endif;?>
            </div>

            <div id="script-body-<?php echo $k;?>" class="collapse show" aria-labelledby="script-<?php echo $k;?>" data-parent="#accordion-script-files">
                <div class="card-body" style="padding:15px;">
                    <?php foreach($script_file_template as $field_name=>$field_type):?>
                        <?php $value=get_field_value($field_name,$script); ?>
                        <?php echo render_field($field_type,'metadata.project_desc.scripts.'.$field_name,$value);?>
                    <?php endforeach;?>        
                </div>
            </div>
            </div>
        <?php endforeach;?>
    </div>
    </div>
</div>


<script>
$(document).ready(function()  {
    $('.collapse').collapse()
});
</script>

<?php endif;?>