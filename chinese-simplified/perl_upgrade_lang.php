<?php

//////////////////////////////////////////////////////////////
//===========================================================
// upgrade_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}
$l['no_info_file'] = '无法找到 INFO.XML 文件！请向服务器管理员报告。';
$l['incompatible'] = '软件需要更高版本的'.APP.'！请向服务器管理员报告。';
$l['no_upgrade'] = '无法找到 UPGRADE.XML 文件！请向服务器管理员报告。';
$l['no_functions'] = '无法找到升级功能文件！请向服务器管理员报告。';
$l['no_field'] = '<b>&soft-1;</b> 是必填字段，必须填写。';
$l['no_package'] = '找不到升级包！';
$l['no_decompress'] = '解压缩包文件时出现一些错误。';
$l['no_decompress_www'] = '解压 Web 文件时出现一些错误。';
$l['no_config_perl_path'] = '配置 CGI 文件时出错。';
$l['checking_data'] = '检查提交的数据';
$l['unzipping_files'] = '复制文件和文件夹';
$l['unzipping_datadir'] = '解压数据文件';
$l['prop_db'] = '更新数据库';
$l['finishing_process'] = '完成升级';
$l['wait_note'] = '<b>注意：</b>这可能需要 3-4 分钟。请在进度条达到 100% 之前不要离开此页面';
$l['no_space'] = '您没有足够的空间来升级此安装！';
$l['invalid_insid'] = '无效的安装 ID';
$l['invalid_script'] = '无效的脚本 ID';
$l['not_perl_script'] = '此脚本不在 PERL 中';
$l['no_perl_upgrade'] = '此脚本不支持升级';

//主题字符串
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = '软件升级';
$l['softins_url'] = 'URL';
$l['softins_path'] = '路径';
$l['softcopy_note'] = '<b>注意</b>：此软件将使用自己的升级实用程序执行升级。要完成升级，请访问复制文件后将显示的 URL。';
$l['softsubmit'] = '升级';
$l['congrats'] = '恭喜，软件升级成功';
$l['succesful'] = '已成功升级';
$l['admin_url'] = '管理员网址';
$l['setup_continue'] = '但是升级会由软件自己完成，所以请访问以下网址';
$l['enjoy'] = '我们希望升级过程很简单。';
$l['upgrade_notes'] = '以下是一些重要的注意事项。强烈建议您阅读它们 ';
$l['please_note'] = '<b>注意</b>：'.APP.'只是一个自动安装程序，不提供对软件的任何支持。请访问软件供应商的网站以获得支持！';
$l['regards'] = '问候';
$l['softinstaller'] = APP.'自动安装程序';
$l['return'] = '返回概览';
$l['note_backup'] = '建议您在安装之前进行<a href="'.$globals['index'].'act=backup&insid=&soft-1;">备份</a>升级。';
$l['create_backup'] = '创建备份';
$l['create_backup_exp'] = '升级前创建备份';
$l['prog_upgrading'] = 'Upgrading';// 不去除尾随空格
$l['prog_upgrade_complete'] = '升级完成。';

$l['upgrade_tweet_sub'] = '告诉你的朋友';
