---
layout: post
title:  "웹폰트 로컬스토리지 저장 기법"
date:   2017-02-27 14:38:37 +0900
---

## Code

`head`에 아래 코드를 넣는다. `</body>`위에 넣으면 글꼴이 바뀌는 모습을 실시간으로 보게 되므로 안 된다. 

~~~
<script src="/js/mytory-webfont.js"></script>
<script>
mytoryWebfont({
  woffPath: '/fonts/IropkeBatangMSubset.woff.css?2017-02-27',
  woff2Path: '/fonts/IropkeBatangMSubset.woff2.css?2017-02-27',
  renderingType: 'onReady' // onReady, onNextPage
});
</script>
~~~

## 함수 코드

함수는 아래처럼 생겼다. 학습할 요량이라면 보라.

<pre><code id="js"></code></pre>

<script>
(function () {
	var request = new XMLHttpRequest();
	var jsCodeEl = document.getElementById('js');
	request.open('GET', '/js/mytory-webfont.js', true);

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
