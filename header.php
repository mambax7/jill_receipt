<?php
/**
 * Jill Receipt module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright  The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license    http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package    Jill Receipt
 * @since      2.5
 * @author     jaile
 * @version    $Id $
 **/
include_once "../../mainfile.php";
include_once "function.php";
$isAdmin = $can_receipt = $can_manager = false;
if ($xoopsUser) {

    $modhandler  = xoops_gethandler('module');
    $xoopsModule = $modhandler->getByDirname("jill_receipt");
    $module_id   = $xoopsModule->getVar('mid');
    $isAdmin     = $xoopsUser->isAdmin($module_id);
    $can_receipt = receipt_perm();
    $can_manager = receipt_manager();
}

//$interface_menu[_TAD_TO_MOD]="index.php";
$interface_menu[_MD_JILLRECEIP_SMNAME1] = "index.php";
$interface_icon[_MD_JILLRECEIP_SMNAME1] = "fa-chevron-right";

if ($isAdmin) {
    $interface_menu[_TAD_TO_ADMIN] = "admin/main.php";
    $interface_icon[_TAD_TO_ADMIN] = "fa-sign-in";
}
