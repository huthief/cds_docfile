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
$title_of_form = '崇德道務文書-道親資料子系統權限設定';

//權限名稱，自該模組中應該是唯一的
$perm_name = 'cds_docfile_authorization_taomember_functions';

//權限設定摘要說明
$perm_desc = '崇德道務文書-道親資料子系統權限設定';

//權限項目

$item_list = array('101'=>'求道登錄',
		'102'=>'找道親',
		'103'=>'成全名單',
		'104'=>'潛在班員',
		'105'=>'進班登錄',
		'106'=>'畢班立愿',
		'107'=>'清冊報表',
		'108'=>'道親資料匯入',
		'109'=>'道親資料匯入',
		'110'=>'新設壇資料移轉',
		'111'=>'基本功',
		'112'=>'道親資料增修',
		'113'=>'道親資料刪除');

//建立並顯示表單
$form = new XoopsGroupPermForm($title_of_form, $module_id, $perm_name, $perm_desc);
foreach ($item_list as $item_id => $item_name) {
	$form->addItem($item_id, $item_name);
}

$main1 = $form->render();
$xoopsTpl->assign('main1', $main1);

/*-----------秀出結果區--------------*/
include_once 'footer.php';
