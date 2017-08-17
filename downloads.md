---
layout: page
title: MytoryWebfont.js
---

아래 자원을 다운로드한 뒤 페이지에 js 코드를 넣으면 됩니다. 상용 한글 2,350자+&alpha;를 넣은 글꼴입니다. 변형을 가해 재배포하는 것을 허용하는 글꼴만 사용했습니다.

(제작중)

- 나눔고딕
- 나눔바른고딕
- 나눔명조
- Noto Sans KR
- Noto Serif KR
- 이롭게바탕
- 전부


## Code

head에 아래 코드를 넣는다. </body>위에 넣으면 글꼴이 바뀌는 모습을 실시간으로 보게 되므로 안 된다.

~~~
<script src="/js/mytory-webfont.js"></script>
<script>
mytoryWebfont({
  woffPath: ['/fonts/IropkeBatangMSubset.woff.css'],
  woff2Path: ['/fonts/IropkeBatangMSubset.woff2.css'],
  renderingType: 'onReady' // onReady, onNextPage
});
</script>
~~~
