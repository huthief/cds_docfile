<?php

/*-----------引入檔案區--------------*/
include "header.php";
$xoopsOption['template_main'] = "cds_docfile_index_tpl.html";
include_once XOOPS_ROOT_PATH . "/header.php";

/*-----------function區--------------*/

include_once $GLOBALS['xoops']->path('/modules/system/include/functions.php');
$xoopsTpl->assign("toolbar", toolbar_bootstrap($interface_menu));
$xoopsTpl->assign("isAdmin", $isAdmin);
include_once XOOPS_ROOT_PATH . '/footer.php';
