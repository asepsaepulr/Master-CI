<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo site_url('/site'); ?>"><img src="<?php echo base_url('/themes/assets/img/logo.png'); ?>" class="img-responsive" alt="Logo"></a>
</div>
<ul class="nav navbar-top-links navbar-right">
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <img src="<?php echo base_url('/themes/assets/img/foto_default.jpg'); ?>" class="img-responsive img-circle" alt="user">
        </a>
        <ul class="dropdown-menu dropdown-user right-swip">
        	<li><a href="<?php echo site_url('/site/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
        </ul>
    </li>
</ul>