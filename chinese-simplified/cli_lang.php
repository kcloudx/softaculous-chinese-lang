<?php

//////////////////////////////////////////////////////////////
//===========================================================
// cli_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 4.1.7
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

$l['err_cannot_autoupgrade'] = "此控制面板无法自动升级。\n";
$l['err_invalid_param'] = "无效参数 &soft-1;\n请阅读文档了解更多详情：\nhttp://www.softaculous.com/docs/Upgrade_Script_from_CLI\n";
$l['err_no_input'] = "请提供一些输入。\n";
$l['err_no_insid'] = "未提供安装 ID。\n";
$l['err_no_username'] = "未提供用户名。\n";
$l['err_no_owner'] = "没有提供所有者。\n";
$l['err_no_such_user'] = "没有找到这样的用户。\n";
$l['err_dont_provide_username'] = "不需要用户名。\n";
$l['err_no_softdir'] = "找不到用户 &soft-1;\n";
$l['err_no_installation'] = "没有找到安装 ID 的安装：&soft-1;\n";
$l['err_cant_upgrade'] = "此安装已为最新版本或此脚本无法自动升级。\n";
$l['err_backup_fail'] = '备份不成功，因此中止升级过程。以下是详细信息：';
$l['err_upgrade_restore_failed'] = '升级安装失败，也无法从创建的备份中恢复。以下是详细信息：';
$l['err_upgrade_restore_success'] = '升级安装失败，但成功从创建的备份中恢复。以下是详细信息：';
$l['err_upgrade'] = '升级安装失败。以下是详细信息：';
$l['err_upgrade_req'] = '此安装不符合升级要求。因此它不能自动升级。以下是详细信息：';
$l['err_could_not_posix'] = '无法切换到用户所以中止进程...';
$l['err_cant_upgrade_for_this_server'] = "升级前检查失败，因为无法访问外部 URL。\n 这可能是由于您的服务器上禁用了 allow_url_fopen() 或 CURL 无法访问该 URL。因此自动升级无法执行。";
$l['err_auto_upgrade_req_fail'] = '此安装不符合自动升级要求。因此它不能自动升级。以下是详细信息：';
$l['help'] = "欢迎使用 Softaculous 命令行界面。
可用命令：\n\t
--install\t 用于安装应用程序。
--upgrade\t 用于升级已安装的应用程序。
--import\t 用于将已安装的应用程序导入到 Softaculous。\n
如需支持，请联系我们：support@softaculous.com
";
$l['err_no_script'] = "未提供脚本名称。\n";
$l['err_no_url'] = "请提供已安装的 URL，例如 --url=DOMAIN.COM/testdir\n";
$l['err_no_such_script'] = "糟糕！没有找到这样的脚本 - &soft-1;\n";
$l['import_success'] = "导入成功！\n";
$l['import_error'] = "发生以下错误：\n";
$l['err_no_path'] = "请提供路径。例如 --path=/home/USER/public_html/test\n";
$l['err_no_import'] = "此脚本无法使用导入工具\n";
$l['err_user_not_allowed'] = "最终用户无法使用导入工具\n";
$l['err_cant_load_docroots'] = "无法加载域路径\n";
$l['ins_available_for'] = " installation(s) available for the following directory :\n";// 保留开头的空间
$l['ins_found_at_path'] = " 在指定路径找到安装。\n 使用 --r 执行前面的命令以导入它。\n";
$l['imp_ins_exists'] = "此安装已导入 - &soft-1; at &soft-2;\n";
$l['upgraded_manually'] = "安装已经是最新的。更新了".APP."记录\n";
$l['upgraded_successfully'] = "升级成功\n";
$l['shellexec_disabled'] = 'shell_exec() 被禁用';
$l['list_scripts'] = "\n以下是脚本要求列表";
$l['err_cannot_autobackup'] = "此控制面板无法执行自动备份。\n";
$l['err_no_auto_backup'] = "自动备份已被管理员禁用。\n";
$l['err_update_record'] = '更新'.APP."记录中的版本时发生错误。\n";
$l['suc_update_record'] = "已更新 ".APP." 记录成功从 &soft-1; 到 &soft-2; 为 &soft-3;\n";
$l['show_real_version'] = "真实版本：&soft-1; -- 按照".APP."记录的版本：&soft-2; \n";
$l['no_outdated_ins'] = "没有发现过时的安装。\n";
$l['edit_detail_options'] = "\n--show_outdated_version=1 用于显示指定用户的过时安装
--user=USER_NAME 您要更新其记录
--sid=SCRIPT_ID 要更新记录的脚本的脚本 ID
--update_records=1 这将更新'.APP.'记录\n";
$l['only_au_ins_note'] = "注意：这里只列出可以自动升级的安装\n";
$l['err_restore_cli'] = "此控制面板无法通过 CLI 进行恢复。\n";
$l['err_no_backupfile'] = "备份文件不存在。\n";
$l['err_wrongins'] = "备份文件不适用于本次安装。\n";
$l['err_no_file'] = "未指定备份文件名。\n";
$l['err_no_backupinfo'] = "未找到备份信息文件。\n";
$l['err_no_backup_file'] = "未找到备份文件。\n";
$l['err_no_openssl'] = "Openssl 扩展需要使用新的加密算法加密密码\n";
$l['err_no_mcrypt'] = "需要 Mcrypt 扩展来解密用旧加密算法加密的密码\n";

$l['soft_license'] = APP."许可证";
$l['lic_type'] = "类型";
$l['num_users'] = "用户数量";
$l['licexpires'] = "过期";
$l['primary_ip'] = "许可IP";
$l['free'] = "免费";
$l['premium'] = "溢价";
$l['expired'] = "已过期";
$l['never'] = "从不";

// 删除安装
$l['no_panels'] = "只有在 cPanel 或 Webuzo 上才能从 CLI 中删除脚本。\n";
$l['no_input'] = "请提供所需的输入。\n";
$l['invalid_par'] = '无效参数';
$l['no_scripts'] = '脚本未加载。';
$l['remove'] = '已删除';
$l['heading'] = "脚本名称\t 脚本安装ID\n";
$l['no_installation'] = "在您的服务器上没有找到安装。\n";
$l['err_remove'] = "删除安装失败。\n";
$l['note_by_automated_backup'] = '自动备份创建的备份';
$l['note_by_automated_upgrade'] = '自动升级创建的备份';
$l['sql_db'] = '找不到数据库文件';
$l['err_query'] = '无法执行查询';
$l['sqlfile_err'] = '无法创建sql文件';
$l['fetching_remote_files'] = '从远程服务器导入文件';
$l['import_complete'] = '导入完成';
$l['import_script'] = '导入';
$l['export_db'] = '从远程服务器导出数据库';
$l['fetch_datadir'] = '从远程服务器获取数据目录';
$l['import_db'] = '传播数据库';
$l['insid_missing'] = '请提供安装ID';
$l['insid_incorrect'] = '安装 ID 不正确';
$l['read_file'] = '无法读取导入数据文件';
$l['no_remote_import'] = '此脚本不支持远程导入';
$l['wrong_ftp_path'] = '指定的FTP路径不正确';

//Webuzo备份和恢复
$l['not_permitted'] = '不允许该用户运行脚本';
$l['no_option'] = '无事可做';
$l['no_backup_dir'] = '备份目录不存在';
$l['backup_filename'] = '备份文件名';
$l['create_tar'] = '创建 tar 文件';
$l['tar_error'] = '创建 tar 文件时出现一些错误';
$l['tar_created'] = 'tar 文件已创建';
$l['create_db'] = '创建数据库备份';
$l['no_dbback_func'] = '备份功能不可用';
$l['db_back_fail'] = '实用程序无法备份数据库';
$l['compress_sql'] = '压缩SQL文件';
$l['db_backup_filename'] = '数据库备份文件名是';
$l['no_mysql'] = 'MySQL 未安装';
$l['skip_db_files'] = '跳过数据库备份过程';
$l['tar_extract'] = '提取tar文件';
$l['err_tar_xtrct'] = '提取 tar 文件时出现一些错误';
$l['db_restore_file'] = '恢复数据库文件';
$l['db_restore_err'] = 'Utility 无法恢复数据库';
$l['db_restore_done'] = '数据库恢复成功';
$l['skip_db_restore'] = '跳过数据库恢复过程';
$l['no_exim'] = 'Exim 未安装';
$l['skip_exim_files'] = '跳过 Exim 文件';
$l['no_bind'] = 'BIND 未安装';
$l['skip_bind_files'] = '跳过绑定文件';
$l['no_backup_type'] = '未指定备份类型';
$l['wrng_backup_type'] = '指定的备份类型不正确';
$l['wrng_back_file'] = '指定的文件不是备份文件';
$l['strt_backup'] = '开始备份过程';
$l['success_backup'] = '备份过程完成';
$l['error_backup'] = '备份过程已完成，但有错误';
$l['exit_cli'] = '退出 CLI';
$l['no_file2restore'] = '没有指定要恢复的文件';
$l['no_db_backup'] = '未找到数据库备份文件';
$l['chck_backup_exits'] = '检查备份文件是否存在';
$l['strt_restore'] = '开始恢复过程';
$l['success_restore'] = '恢复过程完成';
$l['error_restore'] = '恢复过程已完成，但有错误';
$l['send_email'] = '发送邮件给用户';
$l['only_for_premium'] = '此功能仅适用于高级许可证用户';
$l['err_invalid_file'] = "文件名无效\n";
$l['acl_saved'] = '设置保存成功';
$l['acl_errr'] = '无法保存设置';
$l['err_unzipping'] = '解压文件时出错';
$l['invalid_import_file'] = '请提供一个有效的文件来导入设置';
$l['no_access_url'] = '无法访问源设置文件';
$l['no_write_tmpfile'] = '无法写入临时文件';
$l['file_not_exist'] = '文件不存在，请提供正确的路径';
$l['no_root_user'] = '只有root用户可以导入管理设置';
$l['successfully_imported'] = '设置导入成功';
$l['no_ins_found'] = '没有找到安装';

$l['cli_ftp_error'] = '连接到 FTP 服务器时出错';
$l['err_fetch_file'] = '无法访问上传到域的文件';
$l['err_fetch_path'] = '无法从接收到的数据中获取路径';
$l['cli_no_remote_import'] = '此脚本不支持 CLI 远程导入';
$l['cli_wrong_ftp_path'] = 'FTP 路径不正确';
$l['cli_ftp_error-1'] = '无法解析域名';
$l['cli_ftp_error-2'] = '无法使用指定的 FTP 详细信息登录';
$l['cli_ftp_error-3'] = 'FTP 路径不存在';

$l['invalid_backup_location'] = '提交的备份位置不存在';
$l['invalid_access_token'] = '无效的访问令牌。请重新授权'.APP.'中“编辑备份位置”页面中的 Dropbox APP。最终用户面板';
$l['insufficient_space'] = '您的 Dropbox 帐户已满。请释放一些空间并在一段时间后尝试备份';

$l['gdrive_err_init'] = '在 Google Drive 上启动备份时出现一些错误！！';
$l['gdrive_err_end'] = '向您的 Google Drive 帐户提交备份时出现一些错误！！';
$l['err_no_posix'] = 'POSIX 被禁用，请启用 POSIX 功能';
$l['pass_decrpyt_fail'] = '密码解密失败。';
$l['ssh_conn_fail'] = 'SSH 连接到远程服务器失败';
$l['delete_temp_file'] = '删除临时备份文件';
$l['ssh_conn_success'] = 'SSH 连接成功';
$l['bckp_dir_notfound'] = '未找到备份目录，正在创建';
$l['fail_bckp_dir'] = '创建远程备份目录失败';
$l['ssh_upload_start'] = '开始备份文件的 SSH 上传';
$l['ssh_upload_fail'] = 'SSH 上传失败';
$l['ssh_upload_success'] = 'SSH 上传成功';
$l['ssh_conn_close'] = '关闭 SSH 连接';
$l['ftp_conn_fail'] = 'FTP 连接失败';
$l['ftp_conn_success'] = 'FTP 连接成功';
$l['ftp_change_dir'] = '切换到FTP目录';
$l['ftp_upload_fail'] = 'FTP上传失败';
$l['ftp_upload_success'] = 'FTP上传成功';
$l['ftp_conn_close'] = '关闭FTP连接';
$l['empty_server_list'] = '无法获取备份服务器列表';
$l['ftp_upload_start'] = '开始备份文件的FTP上传';
$l['dwnlod_restore_fail'] = '无法下载恢复文件';
$l['remote_del_fail'] = '无法删除远程服务器上的文件';
$l['remote_del_success'] = '远程备份文件删除成功';
$l['no_server_id_filename'] = '未提供备份服务器 ID 和文件名！';
$l['cd_backup_location_fail'] = '无法将目录切换到指定位置';
$l['add_backup_file'] = '备份文件已添加';
$l['err_include_extend'] = "\n未能包含插件/主题更新的功能";
$l['err_access_ins'] = "\n访问安装时出错 &soft-1;\n 跳过此安装的插件/主题升级";
$l['note_partial_backup'] = '插件/主题升级期间进行的部分备份';
$l['err_partial_backup_fail'] = '部分备份不成功，因此中止插件/主题升级过程。以下是详细信息：';
$l['err_upgrade_extras'] = "\n升级主题和插件时出现一些错误";
$l['upgraded_successfully_extras'] = "\n插件/主题已成功升级为：";
$l['err_upgrade_restore_failed_extras'] = '无法升级插件/主题，也无法从创建的备份中恢复。以下是详细信息：';
$l['err_upgrade_restore_success_extras'] = '无法升级插件/主题，但成功从创建的备份中恢复。以下是详细信息：';
$l['err_cannot_autoupgrade_extras'] = "此控制面板无法执行插件/主题的自动升级。\n";
$l['err_failed_attempt'] = "上次自动升级插件/主题失败，因此无法尝试升级。\n";
$l['cant_create_dir'] = "不能创建目录";
// import_webuzo.php
$l['no_server_ip'] = '未提供服务器 IP。';
$l['no_server_pass'] = '未提供服务器 root 密码。';
$l['no_server_port'] = '未提供服务器端口';
$l['no_server_mysql_pass'] = '未提供服务器 mysql 密码。';
$l['no_migrate_type'] = '未提供迁移类型。';
$l['invalid_migrate_type'] = '无效的迁移类型。';
$l['migrate_finish'] = 'Webuzo 迁移完成。';
$l['migrate_conf_finish'] = '完成迁移 webuzo 配置。';
$l['migrate_user_account_finish'] = '完成用户帐户迁移。';
$l['migrate_databases_finish'] = '完成数据库迁移。';
$l['migrate_emails_finish'] = '已完成迁移电子邮件帐户和电子邮件数据。';
$l['migrate_ftp_finish'] = 'FTP 迁移完成。';
$l['mysql_not_same'] = '两个 Webuzo 服务器上的 MySQL 版本不同。';
$l['webuzo_user_not_same'] = 'Webuzo 服务器上的 Webuzo 用户名不同。';
$l['sshpass_installed'] = 'sshpass 已经安装在您的服务器上。';
$l['remote_command_exec_fail'] = '远程命令执行失败。';
$l['migrate_command_failed'] = '执行命令时出现错误';
$l['conn_fail'] = '连接到 Webuzo 服务器失败。';

$l['cloning'] = '克隆';
$l['staging'] = '暂存';
$l['pushtolive'] = 'pushtolive';
$l['cloning_complete'] = '克隆完成。';
$l['staging_complete'] = '暂存完成。';
$l['pushtolive_complete'] = '推送完成。';
$l['unzipping_files'] = '复制文件和文件夹';
$l['prog_backingup'] = '备份';
$l['panel_not_support'] = '此面板不支持此实用程序。';

$l['checking_data'] = '检查提交的数据';
$l['prog_restoring'] = '正在恢复'; // 不要删除尾随空格
$l['res_dir'] = '恢复目录';
$l['res_db'] = '恢复数据库';
$l['res_datadir'] = '恢复数据目录';
$l['prog_restore_complete'] = '恢复完成。';
$l['read_archive'] = '阅读档案';
$l['pushtolive_backup_note'] = '在推送网站上线前创建备份';
$l['license_refreshed'] = '您的许可证已更新！';
$l['updated_license'] = '更新的许可证详情如下：';

$l['err_no_universal'] = '找不到universal.php';

$l['rbackup_disabled'] = '远程位置的备份被管理员禁用';
$l['rbackup_protocol_disabled'] = '<b>&soft-1;</b> 上的备份被管理员禁用';

// 显示真实版本的 CLI 实用程序字符串
$l['show_real_version_no_outdated'] = '所有安装都在'.APP.'中更新了版本。记录 ！';
$l['show_real_version_updates_list'] = '以下安装的版本未在 '.APP.' 中更新。记录';
$l['show_real_version_user_ins'] = '用户安装';
$l['installation_id'] = '安装ID';
$l['script_name'] = '脚本名称';
$l['version'] = '版本';
$l['real_version'] = '真实版本';
$l['installation_url'] = '安装地址';
$l['update_real_version_notice'] = '使用参数--update_real_version 更新'.APP.'记录';

$l['update_real_version_no_outdated'] = '在'.APP.'中没有找到过时版本的安装。记录 ！';
$l['update_real_version_fail'] = APP.'记录中的版本更新失败。';
$l['update_real_version_list'] = '以下安装版本已在'.APP.'记录中更新。';
