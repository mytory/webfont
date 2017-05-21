---
layout: page
title:  "ttf, woff, woff2 지원 여부 검사"
---

<div id="font-type-list">
    <ul>
        <li>ttf 지원: <span id="ttf" style="color: red;">지원 안 함</span></li>
        <li>woff 지원: <span id="woff" style="color: red;">지원 안 함</span></li>
        <li>woff2 지원: <span id="woff2" style="color: red;">지원 안 함</span></li>
    </ul>
</div>

<script src="/js/ttf.js"></script>
<script src="/js/woff.js"></script>
<script src="/js/woff2.js"></script>
<script>
if (!("FontFace" in window)) {
    document.getElementById('font-type-list').innerHTML = '<p>js <code>FontFace</code> 객체가 없어서 ttf, woff, woff2 지원 여부를 검사하지 못합니다.</p>';
} else {
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
}
</script>
