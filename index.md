---
layout: page
title: Mytory Webfont
---

이 사이트는 아직 제작중입니다.

## 바로 사용하기 

이 사이트는 기본적으로 MytoryWebfont.js라는 라이브러리를 제공합니다. 시간이 부족한 분은 그냥 이 웹폰트 라이브러리를 다운받아서 사용하시면 됩니다.

**[▶ MytoryWebfont.js](downloads.html)**

웹폰트 자체에 대해 좀더 탐구하고 싶은 분들에게 정보를 제공하는 것도 이 사이트의 중요한 목적입니다. 그런 분들은 아래 글들을 차분히 읽어 보세요.

----


## 한글 웹폰트를 사용할 만한 시대

이제 한글 웹폰트를 사용할 만합니다. 아래 기술들을 사용하면 대역폭 낭비, 성능 저하, 텅 빈 화면 문제를 피하면서 웹폰트를 사용할 수 있습니다.

1. **[웹폰트를 로컬 스토리지에 저장하는 기법과 비동기적 웹폰트 적용](webfont-localstorage-saving-technique.html):** 로컬 스토리지 기법은 웹폰트를 최대한 오래 캐시해 대역폭 낭비를 막습니다. 비동기적 웹폰트 적용 기법은 우선 기본 글꼴로 내용을 보여주고 웹폰트를 모두 다운로드한 뒤에 웹폰트를 적용함으로써 인터넷 속도가 느린 사용자가 웹폰트를 모두 다운로드할 때까지 내용을 보지 못하게 되는 문제를 막습니다.
1. **[글꼴 서브셋](https://spoqa.github.io/2015/10/14/making-spoqa-han-sans.html):** 자주 사용하는 한글 2,350자+&alpha;와 알파벳, 특수문자 일부만 저장함으로써 웹폰트의 용량을 크게 줄입니다.
1. **[woff2 지원 감지를 이용한 woff2, woff 포맷 사용](https://github.com/filamentgroup/woff2-feature-test):** woff2와 woff는 용량이 작은 웹폰트 포맷입니다. 특히 woff2는 용량이 극적으로 작은데, woff2를 지원하는 웹브라우저를 감지해 가능한 경우 woff2만 적용합니다. CSS만 이용하는 웹폰트라면 감지가 필요없지만, `localStorage`를 이용하므로 js 쪽에서 감지해 처리해야 합니다.


## 글꼴 서브셋을 이용했을 때 용량

웹폰트 이롭게바탕체로 글꼴 서브셋을 만든 경우 포맷별 gzip 용량은 아래와 같습니다. 특히 woff2 글꼴은 큰 이미지 한 장의 용량 정도밖에 되지 않습니다.

- woff2: 138K
- woff: 241K
- eot: 219K
- ttf: 358K


## woff 브라우저 호환성

이 사이트에서 설명하는 스크립트는 woff와 woff2를 지원하는 브라우저를 대상으로 작성한 포맷입니다. woff 브라우저 지원 상황은 아래와 같습니다.

- IE 9 이상
- Edge 12 이상
- Firefox 3.6 이상
- Chrome 5 이상
- Safari 5.1 이상
- iOS Safari 5.1 이상
- Opera 11.5 이상
- Opera Mobile 12 이상
- Android Browser 4.4 이상
- Blackberry Browser 7 이상
- Chrome for Android, Firefox for Android, IE Mobile, Uc Browser for Android, Samsung Internet, QQ Browser 기본 지원

caniuse.com을 보면 2017년 4월 17일 현재 사용 브라우저의 94.18퍼센트가 woff를 지원합니다. 현재 상황을 보고 싶다면 <http://caniuse.com/#feat=woff>를 방문하세요.

[▶ 지금 사용하는 브라우저가 지원하는 폰트 포맷 확인하기](does-support-what-font-format.html)

