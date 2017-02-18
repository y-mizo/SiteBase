<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        <!--Logo-->
        <a class="navbar-brand" href="http://mizo.xsrv.jp/SiteBase/">BrandName</a>
        <!--toggle button-->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-content">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <!--menu-->
    <div id="nav-content" class="collapse navbar-collapse">  
        <ul class="nav navbar-nav">                   
            <li><?= $this->Html->link('About', ['controller' => 'pages', 'action' => 'page1']); ?></li>
            <li><?= $this->Html->link('Information', ['controller' => 'notices', 'action' => 'index_front']); ?></li>
            <li><?= $this->Html->link('Contact', ['controller' => 'contacts', 'action' => 'contact']); ?></li>
        </ul>
             
        <ul class="nav navbar-nav navbar-right">
            <?php if ($currentUser) : ?>
                <li><?= $this->Html->link('管理画面へ', ['controller' => 'admins', 'action' => 'index']); ?></li>
            <?php else : ?>
                <li><?= $this->Html->link('Login', ['controller' => 'users', 'action' => 'login']); ?></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>