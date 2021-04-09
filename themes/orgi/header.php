<style>
    .site-header .nada-sitename{
        padding-left:0px;
        margin-left:0px;
        color:black;
        font-size:18px;
        font-family:'Fira Sans', Helvetica Neue, Arial, Sans-serif;
    }
    .site-logo{
        max-width:70px;
        max-height:70px;
    }
    </style>
<header class="site-header fixed-top">

    <div class="container">
        <!--  /***** Login Bar Start *****/ -->
        <?php $this->load->view('users/user_bar'); ?>
        <!--  /***** Login Bar Close *****/ -->
        <div class="row">

            <div class="col-md-4">
                <div class="navbar-brand ">
                    <a href="<?php echo site_url();?>" class="g01v1-logo nada-logo">
                        <?php /* 
                            <img title="<?php echo $this->config->item("website_title");?>" src="<?php echo base_url().$bootstrap_theme; ?>/images/orgi_logo.png" class="img-responsive"> 
                        */?>
                        <img title="<?php echo $this->config->item("website_title");?>" src="http://census.ihsn.org/themes/corporate_lite/logo.svg" class="img-responsive site-logo">
                        
                    </a>
                    <strong><a class="nada-sitename" href="#index.html">Census Data Dissemination <br/>Platform</a></strong>
                </div>
            </div>

            <div class="col-md-8 ">
                <?php require_once 'menu.php' ?>
            </div>


            <div class="col-12">
                <nav class="navbar navbar-expand-md navbar-light rounded navbar-toggleable-md wb-navbar">
                    
                    <?php 
                    /**
                     * 
                     * LOGO + Text
                     * 
                     */
                    ?>
                    <?php /* ?>
                    <div class="navbar-brand ">
                        <a href="<?php echo site_url();?>" class="g01v1-logo nada-logo">
                            <img title="<?php echo $this->config->item("website_title");?>" src="<?php echo base_url().$bootstrap_theme; ?>/images/orgi_logo.png" class="img-responsive">
                        </a>
                        <strong><a class="nada-sitename" href="#index.html">Office of the Registrar General <br>& Census Commissioner, India</a></strong>
                    </div>
                    <?php */ ?>
                    

                    <?php /**
                     * 
                     * text only 
                     **/  ?>
                    <?php /* ?>
                    <div class="navbar-brand">                        
                        <div><a class="nada-site-title" href="<?php echo site_url();?>"><?php echo $this->config->item("website_title");?></a></div>
                        <div class="nada-site-subtitle">An Online Microdata Catalog</div>
                    </div>
                    <?php */?>

                    <button class="navbar-toggler navbar-toggler-right collapsed wb-navbar-button-toggler" type="button" data-toggle="collapse" data-target="#containerNavbar" aria-controls="containerNavbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Start menus -->
                    <?php /* ?>
                    <div class="navbar-collapse collapse" id="containerNavbar" aria-expanded="false">
                        <?php if ($menu_horizontal===TRUE):?>
                            <?php //echo isset($sidebar) ? $sidebar : '';?>
                            <?php //require_once 'menu.php' ?>
                        <?php endif;?>
                    </div>
                    <?php */?>
                    <!-- Close Menus -->

                </nav>
            </div>

        </div>
        <!-- /row -->

    </div>

</header>