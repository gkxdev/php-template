<?php
define('GKXDEV', true);

require_once __DIR__ . '/Template.php';

$template = new Template;

$data = array(
    'name'   => 'gkxdev',
    'skills' => ['php', 'mysql', 'javascript']
);

$template->render('welcome.php', $data);