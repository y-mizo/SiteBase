<!DOCTYPE html>
<html>
    <head>
        <title>
            LoginBase |
            <?php echo $this->fetch('title'); ?>
        </title>
        <?php
        echo $this->Html->charset();
        echo $this->Html->meta('icon');
        echo $this->fetch('css');
        echo $this->fetch('script');

        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('sticky-footer-navbar.css');
        echo $this->Html->css('front');
        echo $this->Html->css('subpage');
        echo $this->Html->css('dashboard');

        echo $this->Html->script('jquery.min');
        echo $this->Html->script('bootstrap.min');
        ?>
    </head>
    <body>
        <!--navbar-->
        <nav class="navbar navbar-inverse navbar-fixed-top">

            <div class="navbar-header">
                <!--Logo-->
                <a class="navbar-brand" href="/">LoginBase</a>
                <!--toggle button-->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-content">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!--menu-->
            <div id="nav-content" class="collapse navbar-collapse">  
                <!--                <ul class="nav navbar-nav">                   
                                    <li><?= $this->Html->link('Page1', ['controller' => 'pages', 'action' => 'page1']); ?></li>
                                    <li><?= $this->Html->link('Page2', ['controller' => 'pages', 'action' => 'page2']); ?></li>
                                    <li><?= $this->Html->link('Page3', ['controller' => 'pages', 'action' => 'page3']); ?></li>
                                </ul>-->

                <!--dropdown list-->                  
                <ul class="nav navbar-nav navbar-right">    
                    <?php if ($currentUser) : ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $currentUser['username'] ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><?= $this->Html->link('Admin Page', ['controller' => 'users', 'action' => 'home']); ?></li>
                                <li><?= $this->Html->link('Change Password', ['controller' => 'users', 'action' => 'changePassword']); ?></li>
                                <li><?= $this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout']); ?></li>
                            </ul>   
                        </li>
                    <?php else : ?>
                        <li class="divider"></li>
                        <li><?= $this->Html->link('Login', ['controller' => 'users', 'action' => 'login']); ?></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
        
    <div class="container-fruid">

        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
            <!--<div class="col-xs-12 col-sm-3 col-md-2 sidebar">-->
                <?php // echo $this->fetch('sidebar'); ?>
                <ul class="nav nav-sidebar">
                    <li><?php echo $this->Html->link(__('HOME'), array('action' => 'home')); ?></li>
                    <li><?php echo $this->Html->link(__('USER INDEX'), array('action' => 'index')); ?></li>
                </ul>
            </div>
        <!--</div>-->

    <!--contents area-->
    <!--<div class="row">-->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <!--<div class="col-xs-12 col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">-->
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
        </div>
    </div>
    </div>

    <!--footer-->
    <footer class="footer">
        <div class="container">
            <p class="text-muted">Copyright (C) 2016 y-mizo All Rights Reserved.</p>
        </div>
    </footer>
    <?php echo $this->element('sql_dump'); ?>
</body>
</html>