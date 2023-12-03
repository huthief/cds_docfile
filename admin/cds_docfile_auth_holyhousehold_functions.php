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
$title_of_form = '崇德道務文書-天榜簿子系統權限設定';

//權限名稱，自該模組中應該是唯一的
$perm_name = 'cds_docfile_authorization_holyhousehold_functions';

//權限設定摘要說明
$perm_desc = '崇德道務文書-天榜簿子系統權限設定';

//權限項目

$item_list = array('501'=>'天榜簿基本資料解鎖',
		'511'=>'天榜簿基本資料查詢',
		'512'=>'天榜簿基本資料增修',
		'513'=>'天榜簿基本資料刪除',
		'502'=>'天榜簿立愿轉道籍資料',
		'503'=>'天榜簿求道人資料可實質刪除資料',
		'521'=>'天榜簿求道人資料查詢',
		'522'=>'天榜簿求道人資料增修',
		'523'=>'天榜簿求道人資料刪除',
		'529' => '天榜簿求道人連結增修道親資料',
		'599'=>'天榜簿文書助理授權',
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
