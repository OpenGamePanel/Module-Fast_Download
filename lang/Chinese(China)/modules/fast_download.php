<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2018 The OGP Development Team
 *
 * http://www.opengamepanel.org/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */

define('OGP_LANG_create_alias', "创建别名和文件夹");
define('OGP_LANG_save_as', "另存为");
define('OGP_LANG_failure', "错误，生成别名文件失败");
define('OGP_LANG_success', "成功");
define('OGP_LANG_fast_download_service_for', "%s的下载重定向服务");
define('OGP_LANG_to_the_path', "到路径");
define('OGP_LANG_at_url', "在URL");
define('OGP_LANG_create_alias_for', "为...创建别名");
define('OGP_LANG_fast_dl', "重定向下载（FastDL）");
define('OGP_LANG_current_aliases_at_remote_server', "远程服务器上的当前别名");
define('OGP_LANG_delete_selected_aliases', "删除选定的别名");
define('OGP_LANG_no_aliases_defined', "OGP尚未为这个远程服务器定义任何网页别名。");
define('OGP_LANG_fastdl_port', "端口");
define('OGP_LANG_fastdl_port_info', "您的快速下载守护进程将启动的端口。");
define('OGP_LANG_fastdl_ip', "地址");
define('OGP_LANG_fastdl_ip_info', "您的快速下载服务器将启动的IP地址或域名，域名必须列在/etc/hosts中。");
define('OGP_LANG_listing', "列表");
define('OGP_LANG_listing_info', "如果为'on'，服务器将列出文件夹的内容。");
define('OGP_LANG_fast_dl_advanced', "高级设置");
define('OGP_LANG_apply_settings_and_restart_fastdl', "保存守护进程配置并重启");
define('OGP_LANG_stop_fastdl', "停止快速下载守护进程");
define('OGP_LANG_fast_download_daemon_running', "快速下载守护进程正在运行。");
define('OGP_LANG_fast_download_daemon_not_running', "快速下载守护进程未运行。");
define('OGP_LANG_fastdl_could_not_be_restarted', "无法重启快速下载服务。");
define('OGP_LANG_configuration_file_could_not_be_written', "无法写入配置文件。");
define('OGP_LANG_remove_folders', "删除选定别名的文件夹。");
define('OGP_LANG_remove_folder', "删除文件夹");
define('OGP_LANG_delete_alias', "删除别名");
define('OGP_LANG_no_game_homes_assigned', "您的账户尚未分配任何服务器。");
define('OGP_LANG_select_remote_server', "选择远程服务器");
define('OGP_LANG_access_rules', "访问规则");
define('OGP_LANG_create_aliases', "创建别名");
define('OGP_LANG_select_game', "选择游戏");
define('OGP_LANG_games_without_specified_rules', "没有指定规则的游戏");
define('OGP_LANG_match_file_extension', "匹配文件扩展名");
define('OGP_LANG_match_file_extension_info', "指定用逗号分隔的扩展名，<br>匹配的文件将可访问。<br><b>空白表示无限制访问</b>。");
define('OGP_LANG_match_client_ip', "匹配客户端IP");
define('OGP_LANG_match_client_ip_info', "与匹配IP的连接将被授权，<br>空白表示无限制访问。您可以使用<br>逗号分隔的多个IP或范围：<br>/xx子网<br>示例：10.0.0.0/16<br>/xxx.xxx.xxx.xxx子网<br>示例：10.0.0.0/255.0.0.0<br>连字符范围<br>示例：10.0.0.5-230<br>星号匹配<br>示例：10.0.*.*");
define('OGP_LANG_save_access_rules', "保存访问规则");
define('OGP_LANG_create_access_rules', "创建访问规则");
define('OGP_LANG_invalid_entries_found', "发现无效条目");
define('OGP_LANG_game_name', "游戏名称");
define('OGP_LANG_alias_already_exists', "别名%s已存在。");
define('OGP_LANG_warning_access_rules_applied_once_alias_created', "警告：创建别名时将应用访问规则。当前别名不会应用更改。");
define('OGP_LANG_autostart_on_agent_startup', "代理启动时自动启动");
define('OGP_LANG_autostart_on_agent_startup_info', "代理启动时自动启动快速下载守护进程。");
define('OGP_LANG_port_forwarded_to_80', "从80端口转发");
define('OGP_LANG_port_forwarded_to_80_info', "启用此选项，如果为这个快速下载守护进程配置的端口已从80端口转发，因此URL中将隐藏端口。");
define('OGP_LANG_current_access_rules', "当前访问规则");
?>