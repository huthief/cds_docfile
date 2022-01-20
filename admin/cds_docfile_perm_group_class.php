<?php
//  ------------------------------------------------------------------------ //
// 本模組由 huthief 製作
// 製作日期：2012-12-02
// $Id:
// ------------------------------------------------------------------------- //

/*-----------引入檔案區--------------*/
//include_once "header_admin.php";
include '../../../include/cp_header.php';
include_once XOOPS_ROOT_PATH.'/class/xoopsform/grouppermform.php';
$module_id = $xoopsModule->getVar('mid');

//標題
$title_of_form = '班務子系統資料權限範圍設定';

//權限名稱，自該模組中應該是唯一的
$perm_name = 'docfile_group_permission_class';

//權限設定摘要說明
$perm_desc = '班務資料權限範圍設定';

//權限項目
//20130223 huthief 反向編號，以便跟java LEVEL配合
//原：'1' => '整個崇德道場', '2' => '本國全部道場', '3' => '全部界別','4' => '全部分區','5' => '全部佛堂'
//改：'9' => '系統管理員','7' => '整個崇德道場', '6' => '本國全部道場', '5' => '全部界別','4' => '全部分區','3' => '全部佛堂','2' => '所屬佛堂群組','1' => '所屬佛堂'
$item_list = array(
		'9' => '系統管理員','7' => '整個崇德道場', '6' => '所屬國別全部道場', '5' => '所屬道場全部界別','4' => '所屬界別全部分區','3' => '所屬分區全部佛堂','2' => '所屬群組全部佛堂','1' => '所屬佛堂'
		);

//建立並顯示表單
$form = new XoopsGroupPermForm($title_of_form, $module_id, $perm_name, $perm_desc);
foreach ($item_list as $item_id => $item_name) {
	$form->addItem($item_id, $item_name);
}
xoops_cp_header();
echo $form->render();
xoops_cp_footer();


?>