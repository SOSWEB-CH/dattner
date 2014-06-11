<?php
/*
Plugin Name: seo for wordpress
Plugin URI: http://phppoet.com/decent-seo-wordpress-plugin/
Description: This is plugin for those who want to implement a simple technique of seo . now a days search engines don't like much seo . 
Version: 1.0.9
Author: Parbat patel
Author URI: http://phppoet.com
Author email:admin@fastanswers.net
License: GPLv2
*/
/*
seo for wordpress plugin
Copyright (C) 2012, parbat patel - admin@fastanswers.net

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/






$wds_options = get_option('wds_settings');

$wds_meta_options = get_option('wds_meta_settings');


include ('seo-admin-options.php');
include ('seo-meta-box.php');
include ('include/seo-other-pages.php');




?>