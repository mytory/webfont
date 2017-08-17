<?php
$handle = opendir('fonts');
$base64_files = [];
while($font = readdir($handle)) {
	if (pathinfo($font, PATHINFO_EXTENSION) == 'base64') {
		$base64_files[] = $font;
	}
}

$eot_template = <<<eot
@font-face {
  font-family: "{{font_name}}";
  font-style: normal;
  font-weight: {{font_weight}};
  src: url("data:application/vnd.ms-fontobject;base64,{{base64}}");
}
eot;

$ttf_template = <<<ttf
@font-face {
  font-family: "{{font_name}}";
  font-style: normal;
  font-weight: {{font_weight}};
  src: url("data:application/font-sfnt;base64,{{base64}}")
       format("truetype");
}
ttf;

$woff_template = <<<woff
@font-face {
  font-family: "{{font_name}}";
  font-style: normal;
  font-weight: {{font_weight}};
  src: url("data:application/font-woff;base64,{{base64}}")
       format("woff");
}
woff;

$woff2_template = <<<woff2
@font-face {
  font-family: "{{font_name}}";
  font-style: normal;
  font-weight: {{font_weight}};
  src: url("data:application/font-woff2;base64,{{base64}}")
       format("woff2");
}
woff2;

foreach ($base64_files as $base64_filename) {
  if (strstr($base64_filename, '-')) {
    $font_name = explode('-', $base64_filename)[0];  
  } else {
    $font_name = explode('.', $base64_filename)[0];  
  }

  $info = explode('.', $base64_filename)[0]; // ex. NanumBarunGothic-Bold
  $temp = explode('-', $info);
  if (count($temp) == 1) {
    $font_weight = 'Regular';
  } else {
    $font_weight = $temp[1];
  }
  
  if (strstr($base64_filename, 'eot')) {
    $template = $eot_template;
  }
  if (strstr($base64_filename, 'ttf')) {
    $template = $ttf_template;
  }
  if (strstr($base64_filename, 'woff.')) {
    $template = $woff_template;
  }
  if (strstr($base64_filename, 'woff2')) {
    $template = $woff2_template;
  }

  $css = str_replace([
      '{{font_name}}',
      '{{font_weight}}',
      '{{base64}}',
    ], [
      $font_name . 'Web',
      $font_weight,
      file_get_contents("fonts/$base64_filename"),
    ], $template);

  $css_filename = str_replace('base64', 'css', $base64_filename);

  file_put_contents("fonts/$css_filename", $css);

  echo "$css_filename created." . PHP_EOL;
}