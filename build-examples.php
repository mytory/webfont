<?php
function get_font_info($filename) {
  if (strstr($filename, '-')) {
    $font_name = explode('-', $filename)[0];  
  } else {
    $font_name = explode('.', $filename)[0];  
  }

  $info = explode('.', $filename)[0]; // ex. NanumBarunGothic-Bold
  $temp = explode('-', $info);
  if (count($temp) == 1) {
    $font_weight = 'Regular';
  } else {
    $font_weight = $temp[1];
  }

  return [$font_name, $font_weight];
}

$button_template = <<<button
<button type="button" class="js-{{font_name}}-{{font_weight}}">{{font_label}}</button>

button;

$script_template = <<<script
<script>
  document.querySelector('.js-{{font_name}}-{{font_weight}}').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/{{font_name}}-{{font_weight}}.woff.css'],
      woff2Path: ['/fonts/{{font_name}}-{{font_weight}}.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = '{{font_name}}Web';
      bodyEl.style.fontWeight = '{{font_weight}}';
      that.innerHTML = label;
    });
  });
</script>

script;

$handle = opendir('fonts');
$buttons = '';
$scripts = '';
while($filename = readdir($handle)) {
	if (!preg_match('/woff$/', $filename)) {
		continue;
	}

	list($font_name, $font_weight) = get_font_info($filename);

	// get human font name from ttf file.
	$font_label = "$font_name $font_weight";	

    $ttf_filename = str_replace('woff', 'ttf', $filename);
    if (is_file("fonts/$ttf_filename")) {
    	$output = [];
	    exec("exiftool fonts/$ttf_filename -json", $output, $return_var);
		$info = json_decode(implode("\n", $output), true);
		if ($info) {
			$font_label = (!empty($info[0]["FontName-ko"])) ? $info[0]["FontName-ko"] : $info[0]["FontName-en-US"];
		}
    }

    // make strings.
	$buttons .= str_replace(['{{font_name}}', '{{font_weight}}', '{{font_label}}'], [$font_name, $font_weight, $font_label], $button_template);
	$scripts .= str_replace(['{{font_name}}', '{{font_weight}}'], [$font_name, $font_weight], $script_template);
}

$index = file_get_contents('index.md');
$index = preg_replace('/<!-- buttons start -->.*<!-- buttons end -->/us', "<!-- buttons start -->\n$buttons\n<!-- buttons end -->", $index);
$index = preg_replace('/<!-- scripts start -->.*<!-- scripts end -->/us', "<!-- scripts start -->\n$scripts\n<!-- scripts end -->", $index);

file_put_contents('index.md', $index);

echo 'Created new examples in index.md.' . PHP_EOL;