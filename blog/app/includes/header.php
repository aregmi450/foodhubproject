<header>
    <a href="<?php BASE_URL . '/blog_index.php' ?>" class="logo">
        <h1 class="logo-text"><span>Food</span>Hub</h1>
    </a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
        <li><a href="<?php BASE_URL . '/blog_index.php' ?>"> Home</a></li>
        <li><a href="#">Contacts</a></li>
        <li><a href="#">About</a></li>

        <?php if (isset($_SESSION['id'])) : ?>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    <?php echo $_SESSION['username']; ?>  <!-- showing username on navbar -->
                    <i class="fas fa-chevron-down" style="font-size:.8em;"></i>
                </a>
                <ul>
                    <?php if($_SESSION['admin']): ?>
                        <li> <a href="<?php echo BASE_URL . '/admin/dashboard.php'?>">Dashboard</a></li>
                    <?php endif; ?>
                    <li><a href="<?php echo BASE_URL . '/blog_logout.php' ?>" class="logout">Logout</li>
                </ul>
            </li>
        <?php else : ?>
            <li><a href="<?php echo BASE_URL . '/blog_register.php'?>">Sign Up </a></li>
            <li> <a href="<?php echo BASE_URL . '/blog_login.php'?>">Login</a></li>
        <?php endif; ?>
    </ul>
</header>