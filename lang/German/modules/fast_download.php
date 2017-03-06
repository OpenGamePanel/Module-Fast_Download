<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2016 The OGP Development Team
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

define('create_alias', "Alias und Ordner erstellen ");
define('save_as', "Speichern als");
define('failure', "Fehler, konnte die Alias-Datei nicht generieren");
define('success', "Erfolg");
define('fast_download_service_for', "Downloads Umleitungsservice für %s");
define('to_the_path', "Zum Pfad");
define('at_url', "zu URL");
define('create_alias_for', "Alias erstellen für");
define('fast_dl', "Weiterleiten von Downloads (FastDL)");
define('current_aliases_at_remote_server', "Aktuelle Aliase auf dem entfernten Server");
define('delete_selected_aliases', "Ausgewählte Aliase löschen");
define('no_aliases_defined', "There are no web aliases defined by OGP for this remote server yet.");
define('fastdl_port', "Port");
define('fastdl_port_info', "Port auf dem Ihr Fast Download Server starten wird.");
define('fastdl_ip', "Adresse");
define('fastdl_ip_info', "The IP address or domain in which your Fast Download server will start, the domain must to be listed at /etc/hosts.");
define('listing', "Auflistung");
define('listing_info', "Wenn 'an', wird der Server den Inhalt der Ordner auflisten.");
define('fast_dl_advanced', "Erweiterte Einstellungen");
define('apply_settings_and_restart_fastdl', "Save the daemon configuration and restart it");
define('stop_fastdl', "FastDL Daemon anhalten.");
define('fast_download_daemon_running', "FastDL Daemon läuft.");
define('fast_download_daemon_not_running', "FastDL Daemon läuft nicht.");
define('fastdl_could_not_be_restarted', "Der FastDL Dienst konnte nicht neu gestartet werden.");
define('configuration_file_could_not_be_written', "Die Konfigurationsdatei konnte nicht geschrieben werden.");
define('remove_folders', "Ordner für ausgewählte Aliase entfernen.");
define('remove_folder', "Ordner löschen");
define('delete_alias', "Alias löschen");
define('no_game_homes_assigned', "No game servers assigned for you. You need to ask your OGP admin to assign games for you.");
define('select_remote_server', "Select remote server");
define('access_rules', "Zugriffsregeln");
define('create_aliases', "Aliase erstellen");
define('select_game', "Spiel auswählen");
define('games_without_specified_rules', "Games without specified rules");
define('match_file_extension', "Match file extension");
define('match_file_extension_info', "Specify extensions separated by coma,<br> the matching files will be accessible.<br><b>Blank for unrestricted access</b>.");
define('match_client_ip', "Match client IP");
define('match_client_ip_info', "Connections with matching IP will be granted,<br>blank for unrestricted access. You can use<br>multiple IPs or ranges separated by coma:<br>/xx subnets<br>Example: 10.0.0.0/16<br>/xxx.xxx.xxx.xxx subnets<br>Example: 10.0.0.0/255.0.0.0<br>Hyphen ranges<br>Example: 10.0.0.5-230<br>Asterisk matching<br>Example: 10.0.*.*");
define('save_access_rules', "Zugriffsregeln speichern");
define('create_access_rules', "Zugriffsregeln erstellen");
define('invalid_entries_found', "Ungültige Einträge gefunden");
define('game_name', "Spielname");
define('alias_already_exists', "Alias %s existiert bereits.");
define('warning_access_rules_applied_once_alias_created', "WARNING: Access rules are applied when the alias is created. No changes will be applied to the current aliases.");
define('autostart_on_agent_startup', "Autostart on agent startup");
define('autostart_on_agent_startup_info', "Start the fast download daemon automatically when the agent starts.");
define('port_forwarded_to_80', "Port weitergeleitet von 80");
define('port_forwarded_to_80_info', "Enable this option if the port configured for this fast download daemon has been forwarded from port 80, so the port will be hidden at URLs.");
?>