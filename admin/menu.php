<?php
$adminmenu = array();
$icon_dir  = substr(XOOPS_VERSION, 6, 3) == '2.6' ? "" : "images/";

$i                      = 1;
$adminmenu[$i]['title'] = _MI_CDSDOCFILE_ADMIN_HOME;
$adminmenu[$i]['link']  = 'admin/index.php';
$adminmenu[$i]['desc']  = _MI_CDSDOCFILE_ADMIN_HOME_DESC;
$adminmenu[$i]['icon']  = 'images/admin/home.png';

$i++;

$adminmenu[$i]['title'] = _MI_CDSDOCFILE_ADMENU_PERMISSION_FUNCTIONS;
$adminmenu[$i]['link']  = 'admin/cds_docfile_perm_functions.php';
$adminmenu[$i]['desc']  = _MI_CDSDOCFILE_ADMENU_PERMISSION_FUNCTIONS;
$adminmenu[$i]['icon']  = "images/admin/category.png";

