---
layout: post
title:  "웹폰트 로컬 스토리지 저장 기법 테스트"
date:   2017-02-27 14:38:37 +0900
---

<ul>
    <li>ttf 지원: <span id="ttf" style="color: red;">지원 안 함</span></li>
    <li>woff 지원: <span id="woff" style="color: red;">지원 안 함</span></li>
    <li>woff2 지원: <span id="woff2" style="color: red;">지원 안 함</span></li>
</ul>

<script src="/js/ttf.js"></script>
<script src="/js/woff.js"></script>
<script src="/js/woff2.js"></script>
<script>
if (supportsWoff) {
    var el = document.getElementById('woff');
    el.innerHTML = '지원함';
    el.style.color = 'green';
}
if (supportsWoff2) {
    var el = document.getElementById('woff2');
    el.innerHTML = '지원함';
    el.style.color = 'green';
}
if (supportsTtf) {
    var el = document.getElementById('ttf');
    el.innerHTML = '지원함';
    el.style.color = 'green';
}
</script>