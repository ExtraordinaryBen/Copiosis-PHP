<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Copiosis Application';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->Html->script('jquery.min'); ?>
    <script> $(document).ready(function() {
                $('.message').animate({opacity: 1.0}, 3000).fadeOut();  
             });
    </script>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><?= $this->Html->link(__('Copiosis'), ['controller' => 'Dashboard', 'action' => 'index']) ?></h1>
            </li>
        </ul>
        <section class="top-bar-section">
            <ul class="left">
            <?php if (!is_null($this->request->session()->read('Auth.User.username'))):         
                   ?>
                   <li><a>Welcome, <?= $this->request->session()->read('Auth.User.username'); ?>!</a></li>
                   <li class="element">Your current NBR is: <?= $this->request->session()->read('Auth.User.nbr'); ?></li>

                <?php endif; ?>
            </ul>
            <ul class="right">
		<?php if (is_null($this->request->session()->read('Auth.User.username'))):
		?>

                   <li><?= $this->Html->link(__('Login'), ['controller' => 'Users', 'action' => 'login']) ?></li>
                   <li><?= $this->Html->link(__('Register'), ['controller' => 'Users', 'action' => 'add']) ?></li>

                <?php else: ?>

                   <li><?= $this->Html->link(__('Item Management'), ['controller' => 'Products', 'action' => 'index']) ?></li>
                   <li><?= $this->Html->link(__('Create Item'), ['controller' => 'Products', 'action' => 'add']) ?></li>
                   <li><a href="/">I Benefited Someone</a></li>
                   <li><a href="/">I Received Benefit</a></li>

                <?php endif; ?>
            </ul>
        </section>
    </nav>
    <?= $this->Flash->render() ?>
    <section class="container clearfix">
        <?= $this->fetch('content') ?>
    </section>
    <footer>
    </footer>
</body>
</html>
