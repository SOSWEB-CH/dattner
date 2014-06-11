<?php 
global $wds_options;

if($wds_options['wds_checkbox']==01) {
include ('wds-homepage-seo-function.php');
} 


if ($wds_options['wds_checkbox3']==03) {
include ('wds-tag-seo-function.php');
} 


if ($wds_options['wds_checkbox2']==02) {
include ('wds-category-seo-function.php');
}

if ($wds_options['wds_checkbox4']==04) {
include ('wds-author-seo-function.php');
} 


if ($wds_options['wds_checkbox5']==05) {
include ('wds-archive-seo-function.php');
}



?>