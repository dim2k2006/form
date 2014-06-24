<?php
isset($_GET['size']) ? $pageSizeContent = $_GET['size'] : $pageSizeContent = 15;

require_once 'generate_captcha.php';
require_once 'form_handler.php';

require_once 'get_db.php';
require_once 'get_page_num.php';
require_once 'page_num_checker.php';
require_once 'page_get_content.php';

require_once 'get_paginator.php';