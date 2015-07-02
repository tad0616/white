<?php
$i                           = 0;
$theme_config[$i]['name']    = "show_var";
$theme_config[$i]['text']    = TF_SHOW_VAR;
$theme_config[$i]['desc']    = TF_SHOW_VAR_DESC;
$theme_config[$i]['type']    = "yesno";
$theme_config[$i]['default'] = "0";

//區塊編號
$i++;
$theme_config[$i]['name']    = "block_id";
$theme_config[$i]['text']    = TF_BLOCK_ID;
$theme_config[$i]['desc']    = TF_BLOCK_ID_DESC;
$theme_config[$i]['type']    = "text";
$theme_config[$i]['default'] = constant('TF_BLOCK_ID_DEFAULT');

//字型設定
$i++;
$theme_config[$i]['name']    = "font_family";
$theme_config[$i]['text']    = TF_FONT_FAMILY;
$theme_config[$i]['desc']    = TF_FONT_FAMILY_DESC;
$theme_config[$i]['type']    = "text";
$theme_config[$i]['default'] = constant('TF_FONT_FAMILY_DEFAULT');
