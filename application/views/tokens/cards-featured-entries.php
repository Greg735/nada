<?php if (isset($rows) && is_array($rows)): ?>
<style>
    .collection-featured-entries h5 {
        font-size:16px;
        margin-top:5px;
        padding:10px;
    }
    
    .collection-featured-entries  .entry-card{
        box-shadow: 0px 2px 4px rgb(0 0 0 / 10%);
        background:white;
    }
</style>
<?php

$type_icons=array(
    'survey'=>'fa-database',
    'microdata'=>'fa-database',
    'geospatial'=>'fa-globe',
    'timeseries'=>'fa-chart-line',
    'document'=>'fa-file-alt',
    'table'=>'fa-table',
    'visualization'=>'fa-pie-chart',
    'script'=>'fa-file-code',
    'image'=>'fa-image',
    'video'=>'fa-video',
);
?>
<div class="collection-featured-entries">
<h3 class="mb-3"><?php echo t('Featured');?></h3>

    <div class="featured-entries-container">
        <div class="row justify-content-md-center-x">
        <?php
            $total_rows=count($rows);
            $counter=0;
            foreach($rows as $row):
            $counter++; ?>

                <div class="col-md-3 mb-4">
                    <div class="entry-card h-100">
                    <?php if (empty($row['thumbnail'])):?>
                        <?php $row['thumbnail']='thumbnail-2.png';?>
                    <?php endif;?>
                
                    <div class=" wb-col-media" >
                        <a href="<?php echo site_url('catalog/'.$row['id']); ?>">                        
                            <img src="<?php echo base_url();?>files/thumbnails/<?php echo basename($row['thumbnail']);?>" alt="" class="img-fluid entry-thumbnail"/>                        
                        </a>
                    </div>
                
                    <h5>
                    <a href="<?php echo site_url(); ?>/catalog/<?php echo $row['id']; ?>"  title="<?php echo $row['title']; ?>" >
                        <?php /*
                        <?php if(isset($row['type'])):?>
                            <i title="<?php echo $row['type'];?>" class="fa <?php echo $type_icons[$row['type']];?> fa-nada-icon wb-title-icon"></i>    
                        <?php endif;?>
                        */ ?>
                            <?php echo $row['title'];?>
                        </a>
                    </h5>
                        <?php /*
                        <strong><?php echo $row['nation'];?></strong>
                        <?php if (isset($row['authoring_entity']) && $row['authoring_entity']!=''):?>
                            <div class="sub-title"><?php echo $row['authoring_entity'];?></div>
                        <?php endif;?>

                        <div class="survey-stats">                        
                            <span><?php echo date("M d, Y",$row['changed']);?></span>
                        </div>
                        */?>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
<?php endif; ?>