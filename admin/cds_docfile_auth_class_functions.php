<?php

/*-----------引入檔案區--------------*/
$xoopsOption['template_main'] = "cds_docfile_adm_perm.tpl";
include_once "header.php";
include_once "../function.php";
include_once XOOPS_ROOT_PATH . "/Frameworks/art/functions.php";
include_once XOOPS_ROOT_PATH . "/Frameworks/art/functions.admin.php";
include_once XOOPS_ROOT_PATH . '/class/xoopsform/grouppermform.php';

/*-----------function區--------------*/
$module_id = $xoopsModule->getVar('mid');

//$jquery_path = get_jquery(true); //TadTools引入jquery ui
//$xoopsTpl->assign('jquery_path', $jquery_path);

//標題
$title_of_form = '崇德道務文書-班務子系統權限設定';

//權限名稱，自該模組中應該是唯一的
$perm_name = 'cds_docfile_authorization_class_functions';

//權限設定摘要說明
$perm_desc = '崇德道務文書-班務子系統權限設定';

//權限項目

$item_list = array(
		'601'=>'班別基本資料解鎖',
		'611'=>'班別基本資料查詢',
		'612'=>'班別基本資料增修',
		'613'=>'班別基本資料刪除',
		'621'=>'班員資料查詢',
		'622'=>'班員資料增修',
		'623'=>'班員資料刪除',
		'699'=>'班務文書助理授權',
);

//建立並顯示表單
$form = new XoopsGroupPermForm($title_of_form, $module_id, $perm_name, $perm_desc);
foreach ($item_list as $item_id => $item_name) {
	$form->addItem($item_id, $item_name);
}

$main1 = $form->render();
$xoopsTpl->assign('main1', $main1);

/*-----------秀出結果區--------------*/
include_once 'footer.php';
