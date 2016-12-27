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
        <ul class="nav navbar-nav">                   
            <li><?= $this->Html->link('Page1', ['controller' => 'pages', 'action' => 'page1']); ?></li>
            <li><?= $this->Html->link('Page2', ['controller' => 'pages', 'action' => 'page2']); ?></li>
            <li><?= $this->Html->link('Page3', ['controller' => 'pages', 'action' => 'page3']); ?></li>
            <li><?= $this->Html->link('Notices', ['controller' => 'notices', 'action' => 'index_front']); ?></li>
        </ul>

        <!--dropdown list-->                  
        <ul class="nav navbar-nav navbar-right">    
            <?php if ($currentUser) : ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $currentUser['username'] ?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><?= $this->Html->link('Admin Page', ['controller' => 'admins', 'action' => 'index']); ?></li>
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