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
$title_of_form = '崇德道務文書管理子系統授權設定';

//權限名稱，自該模組中應該是唯一的
$perm_name = 'cds_docfile_permission_functions';

//權限設定摘要說明
$perm_desc = '崇德道務文書管理子系統授權設定';

//權限項目

$item_list = array('10'=>'三表五愿','100'=>'道親資料維護','150'=>'公職維護','200'=>'道親資料報表','400'=>'活動報到','600'=>'班務管理','700'=>'辦道管理','798'=>'辦道資料查詢','800'=>'法會管理','898'=>'法會進班查詢', '901' => '稽核資料');

//建立並顯示表單
$form = new XoopsGroupPermForm($title_of_form, $module_id, $perm_name, $perm_desc);
foreach ($item_list as $item_id => $item_name) {
	$form->addItem($item_id, $item_name);
}

$main1 = $form->render();
$xoopsTpl->assign('main1', $main1);

/*-----------秀出結果區--------------*/
include_once 'footer.php';
