---
layout: post
title:  "웹폰트 로컬스토리지 저장 기법"
date:   2017-02-27 14:38:37 +0900
---

## javascript

<pre><code id="js"></code></pre>

<script>
(function () {
	var request = new XMLHttpRequest();
	var jsCodeEl = document.getElementById('js');
	request.open('GET', '/js/webfont.js', true);

	request.onload = function() {
	  
	  if (request.status >= 200 && request.status < 400) {
	    var resp = request.responseText;
	    jsCodeEl.innerText = resp;
	    hljs.highlightBlock(jsCodeEl);
	  } else {
	  	jsCodeEl.innerText = 'Fail to load js code because of server error.'
	  }
	};

	request.onerror = function() {
	  jsCodeEl.innerText = 'Fail to load js code because of connection error.';
	};

	request.send();
} ());
</script>