<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_lang.php
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
$l['no_functions'] = '无法找到导入函数文件！请向服务器管理员报告。';
$l['no_softdomain'] = '您没有选择导入软件的域。';
$l['disable_import'] = '导入功能已被管理员禁用';
$l['invalid_script'] = '无效的脚本 ID';

//主题字符串
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['import_soft'] = '导入软件';
$l['choose_domain'] = '选择域';
$l['choose_domain_exp'] = '请选择已安装软件的域。';
$l['in_directory'] = '在目录中（可选）';
$l['in_directory_exp'] = '该目录相对于您的域。例如要导入安装在 http://mydomain/dir/ 的软件，只需键入 <b>dir</b>。要导入仅安装在 http://mydomain/ 中的软件，请将其留空。';
$l['softsubmit'] = '导入';
$l['congrats'] = '恭喜，软件导入成功';
$l['succesful'] = '已成功导入';
$l['admin_url'] = '管理员网址';
$l['enjoy'] = '我们希望导入过程很简单。';
$l['import_notes'] = '以下是一些重要的注释。我们强烈建议您阅读以下内容： ';
$l['please_note'] = '<b>注意</b>：'.APP.'只是一个自动安装程序，不提供对软件包的任何支持。请访问脚本或软件的网站以获得任何类型的支持！';
$l['regards'] = '问候';
$l['softinstaller'] = APP.'自动安装程序';
$l['return'] = '返回概览';

$l['choose_protocol'] = '选择协议';
$l['choose_protocol_exp'] = '如果您的站点有 SSL，那么请选择 HTTPS 协议。';
$l['no_https'] = '未找到受信任的 SSL 证书';
$l['wrong_softdomain'] = '找不到您选择的域的路径。';

//远程导入
$l['server_host'] = '服务器主机（可选）';
$l['server_host_exp'] = '<b>IF</b> 您的域名和服务器主机不同，请输入服务器主机，例如ftp.mydomain.com';
$l['protocol'] = '协议';
$l['protocol_exp'] = '选择 Softaculous 通信的协议';
$l['port'] = '端口';
$l['port_exp'] = '输入要连接的端口';
$l['domain'] = '域名';
$l['domain_exp'] = '输入一个有效的域名。例如mydomain.com';
$l['ftp_user'] = '用户名';
$l['ftp_user_exp'] = '你的FTP账户的用户名';
$l['ftp_pass'] = '密码';
$l['ftp_pass_exp'] = '你的FTP账号密码';
$l['ftp_path'] = '路径';
$l['ftp_path_exp'] = '用户的网络可访问目录的相对路径。例如/public_html';
$l['Installed_pa​​th'] = '安装目录（可选）';
$l['Installed_pa​​th_exp'] = '安装目录例如博客如果你已经在 /public_html/blog 安装了脚本';
$l['wrong_ftp_path'] = '指定的FTP路径不存在';
$l['ftp_error-1'] = '无法解析域名';
$l['ftp_error-2'] = '无法使用指定的 FTP 详细信息登录';
$l['ftp_error-3'] = '指定的FTP路径不存在';
$l['imp_err'] = '导入安装在 &soft-1; 的软件时出现一些错误;';
$l['remote_import'] = '您的安装导入过程已在后台启动。导入过程完成后，您将收到有关状态的电子邮件通知。';
$l['db_err'] = '无法连接到数据库';
$l['remote_dir_err'] = '远程安装目录不存在';
$l['err_db_create'] = '创建数据库时出错';
$l['dest_dir_err'] = '目标目录已经存在';
$l['source'] = '来源';
$l['destination'] = '目的地';
$l['auth_password'] = '认证方式';
$l['auth_password_exp'] = '选择认证方式';
$l['private_key'] = '私钥';
$l['private_key_exp'] = '在这里粘贴私钥';
$l['passphrase'] = '密码';
$l['passphrase_exp'] = '加密私钥的密码（可选）';
$l['database_name'] = '数据库名称';
$l['database_name_exp'] = '输入要为安装创建的数据库的名称';
$l['database_exists'] = '数据库已经存在。请选择一个不同的名字';
$l['databaseuser_exists'] = '数据库用户已经存在';
$l['db_limit_crossed'] = '已达到您可以创建的最大数据库数，因此无法继续导入';
$l['empty_db'] = '数据库名称字段为空。请输入数据库名称';
$l['adv_option'] = '高级选项';
$l['database_name'] = '数据库名称';
$l['database_name_exp'] = '输入要为安装创建的数据库的名称';
$l['db_name_long'] = '数据库名不能超过7个字母。请选择一个较短的数据库名称';
$l['db_alpha_num'] = '数据库名称只允许使用字母数字字符';
$l['remote_btn'] = '来自远程服务器';
$l['local_btn'] = '来自这个服务器';
$l['checking_data'] = '检查提交的数据';
$l['fetching_remote_db'] = '从远程服务器获取数据库详细信息';
$l['create_db'] = '创建数据库';
$l['fetching_remote_files'] = '从远程服务器导入文件';
$l['import_complete'] = '导入完成';
$l['import_script'] = '导入';
$l['no_remote_import'] = '此脚本不支持远程导入';
$l['overwrite'] = '覆盖文件';
$l['some_files_exist'] = '安装无法继续，因为目标文件夹中已存在以下文件：';
$l['delete_files'] = '请删除这些文件或选择另一个文件夹。';
$l['overwrite_exist'] = '<b>OR</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style ="color:#000;">选中复选框覆盖所有文件并继续</span></b>';
$l['sftp_path'] = 'SFTP 路径';
$l['sftp_path_exp'] = '用户网页目录的绝对路径。例如/home/USERNAME/public_html';
$l['ftp_error'] = '无法连接到FTP服务器';
$l['err_upload_remote'] = '无法上传文件到FTP路径';
$l['err_fetch_file'] = '无法访问上传到域的文件';
$l['err_fetch_path'] = '无法从接收到的数据中获取路径';
$l['dbusername'] = '数据库用户名';
$l['dbusername_exp'] = 'MySQL 用户名';
$l['dbuserpass'] = '数据库密码';
$l['dbuserpass_exp'] = 'MySQL用户的密码';
$l['database_name_exp_aefer'] = '输入用于安装的数据库名称';
$l['hostname'] = '数据库主机名';
$l['hostname_exp'] = 'MySQL 主机名（主要是 <b>localhost</b>）';
$l['no_hostname'] = '请输入您的数据库主机名';
$l['no_dbusername'] = '请输入您的数据库用户名';
$l['no_dbuserpass'] = '请输入您的数据库密码';
$l['no_db'] = '请输入您的数据库名称';
$l['auth_method_pass'] = '密码';
$l['auth_method_key'] = 'SSH 密钥';
$l['no_pass_pri'] = '请提供密码或私钥';
$l['finishing_process'] = '完成导入';
$l['wait_note'] = '<b>注意：</b>这可能需要 3-4 分钟。如果你愿意，你可以离开这个页面！';

$l['import_push_bg'] = '导入已在后台推送';
$l['local_import'] = '自动检测所有安装';
