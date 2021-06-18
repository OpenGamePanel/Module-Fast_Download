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

define('OGP_LANG_create_alias', "Luo alias ja kansio");
define('OGP_LANG_save_as', "Tallenna nimellä");
define('OGP_LANG_failure', "Virhe, alias-tiedoston luominen epäonnistui");
define('OGP_LANG_success', "Onnistui");
define('OGP_LANG_fast_download_service_for', "Latausten uudelleenohjauspalvelu kohteelle %s");
define('OGP_LANG_to_the_path', "Polulle");
define('OGP_LANG_at_url', "URL:ssa");
define('OGP_LANG_create_alias_for', "Luo alias kohteelle");
define('OGP_LANG_fast_dl', "Latausten uudelleenohjaus (FastDL)");
define('OGP_LANG_current_aliases_at_remote_server', "Nykyiset aliakset etäpalvelimessa");
define('OGP_LANG_delete_selected_aliases', "Poista valitut aliakset");
define('OGP_LANG_no_aliases_defined', "Ei OGP:n määrittelemiä verkko-aliaksia tällä etäpalvelimella.");
define('OGP_LANG_fastdl_port', "Portti");
define('OGP_LANG_fastdl_port_info', "Portti, mistä Fast Download Daemon käynnistyy.");
define('OGP_LANG_fastdl_ip', "Osoite");
define('OGP_LANG_fastdl_ip_info', "IP-osoite tai verkko-osoite jossa Fast Download-palvelimesi käynnistyy, domain on listattava /etc/hosts tiedostossa.");
define('OGP_LANG_listing', "Listaus");
define('OGP_LANG_listing_info', "Jos 'päällä', palvelin luetteloi kansioiden sisällön.");
define('OGP_LANG_fast_dl_advanced', "Edistyneet asetukset");
define('OGP_LANG_apply_settings_and_restart_fastdl', "Tallenna daemon-määritykset ja uudelleenkäynnistä se");
define('OGP_LANG_stop_fastdl', "Pysäytä Fast Download Daemon");
define('OGP_LANG_fast_download_daemon_running', "Fast Download Daemon on käynnissä.");
define('OGP_LANG_fast_download_daemon_not_running', "Fast Download Daemon ei ole käynnissä.");
define('OGP_LANG_fastdl_could_not_be_restarted', "Fast Download-palvelua ei voitu käynnistää uudelleen.");
define('OGP_LANG_configuration_file_could_not_be_written', "Määritystiedostoa ei voitu kirjoittaa.");
define('OGP_LANG_remove_folders', "Poista kansio valituilta aliaksilta.");
define('OGP_LANG_remove_folder', "Poista kansio");
define('OGP_LANG_delete_alias', "Poista alias");
define('OGP_LANG_no_game_homes_assigned', "Tilillesi ei ole määritetty palvelimia.");
define('OGP_LANG_select_remote_server', "Valitse etäpalvelin");
define('OGP_LANG_access_rules', "Käyttöoikeussäännöt");
define('OGP_LANG_create_aliases', "Luo aliaksia");
define('OGP_LANG_select_game', "Valitse peli");
define('OGP_LANG_games_without_specified_rules', "Pelit ilman määriteltyjä sääntöjä");
define('OGP_LANG_match_file_extension', "Vastaava tiedostopääte");
define('OGP_LANG_match_file_extension_info', "Määritä laajennukset pilkuilla erotettuina,<br> jotta vastaavat tiedostot ovat käytettävissä.<br><b> Tyhjä rajoittamattomalle käytölle</b>.");
define('OGP_LANG_match_client_ip', "Vastaava asiakas IP");
define('OGP_LANG_match_client_ip_info', "Yhteydet joissa on vastaava IP myönnetään,<br>tyhjä rajoittamattomalle käytölle. Voit käyttää<br> useita IP-osotteita tai alueita pilkuilla erotettuna:<br> /xx aliverkot<br> Esimerkki: 10.0.0.0/16<br>/xxx.xxx.xxx.xxx aliverkot<br> Esimerkki: 10.0.0.0/255.0.0.0<br> Tavuviivat<br>Esimerkki: 10.0.0.5-230 <br>Tähtiä vastaava<br>Esimerkki: 10.0. *. *");
define('OGP_LANG_save_access_rules', "Tallenna käyttöoikeussäännöt");
define('OGP_LANG_create_access_rules', "Luo käyttöoikeussäännöt");
define('OGP_LANG_invalid_entries_found', "Virheellisiä merkintöjä löytyi");
define('OGP_LANG_game_name', "Pelin nimi");
define('OGP_LANG_alias_already_exists', "Alias %s on jo olemassa.");
define('OGP_LANG_warning_access_rules_applied_once_alias_created', "VAROITUS: Käyttöoikeussääntöjä sovelletaan, kun alias luodaan. Nykyisiin aliaksiin ei tehdä muutoksia.");
define('OGP_LANG_autostart_on_agent_startup', "Automaattinen käynnistys agentin käynnistyessä");
define('OGP_LANG_autostart_on_agent_startup_info', "Käynnistä fast download daemon automaattisesti, kun agentti käynnistyy.");
define('OGP_LANG_port_forwarded_to_80', "Portti ohjattu 80:stä");
define('OGP_LANG_port_forwarded_to_80_info', "Ota tämä vaihtoehto käyttöön, jos tälle fast download daemon määritetty portti on ohjattu portista 80, joten portti piilotetaan URL-osoitteissa.");
define('OGP_LANG_current_access_rules', "Nykyiset käyttöoikeussäännöt");
?>