<?php
/************************************	
 * 20210824	v1.8		huthief 班務子系統增加群組資料權限範圍設定
 * 20210801 v1.7		huthief 1.增加 '700'=>權限設定 2.[授權]班務管理權限增加601解鎖
 * 20210328 v1.6		huthief 增加公職系統權限設定
 * 20210308 v1.5		huthief 子功能權限，拆開為各權限設定各自功能畫面
 * 20210105 v1.4		huthief 增加法會管理權限 '800'=>'法會管理','899'=>'法會進班查詢'
 * 20201108	v1.3		huthief	增加權限項目 '403'=>'活動類別-班務畢班選擇，'404'=>'活動可實質刪除資料'
 * 20200831	v1.2		huthief	增加報到管理授權設定
 * 20200715	v1.1		huthief	增加班務管理權限選項
 */
$modversion = array();
//---模組基本資訊---//
//模組名稱
$modversion['name'] = _MI_CDSDOCFILE_NAME;
//模組版次
$modversion['version']	= '1.8';
//模組作者
$modversion['author'] = _MI_CDSDOCFILE_AUTHOR;
//模組說明
$modversion['description'] = _MI_CDSDOCFILE_DESC;

$modversion['help']        = 'page=help';



//模組授權者
$modversion['credits']	= _MI_CDSDOCFILE_CREDITS;
//模組版權
$modversion['license']		= "Copyright fycd.org";
$modversion['license_url'] = 'www.gnu.org/licenses/gpl-2.0.html/';
//模組是否為官方發佈1，非官方0
$modversion['official']		= 0;
//模組圖示
$modversion['image']		= "images/logo.png";
//模組目錄名稱
$modversion['dirname']     = basename(dirname(__FILE__));

$modversion['min_php']             = 5.4;
$modversion['min_xoops']           = '2.5';
//---啟動後台管理界面選單---//
$modversion['system_menu'] = 1;

//---資料表架構---//



//---管理介面設定---//
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

//---使用者主選單設定---//


//---樣板設定---//
$modversion['templates']                    = array();
$i                                          = 1;
$modversion['templates'][$i]['file']        = 'cds_docfile_adm_main.tpl';
$modversion['templates'][$i]['description'] = 'cds_docfile_adm_main.tpl';

$i++;
$modversion['templates'][$i]['file']        = 'cds_docfile_adm_perm.tpl';
$modversion['templates'][$i]['description'] = 'cds_docfile_adm_perm.tpl';

$i++;
$modversion['templates'][$i]['file']        = 'cds_docfile_index.tpl';
$modversion['templates'][$i]['description'] = 'cds_docfile_index.tpl';
//---區塊設定---//


?>
