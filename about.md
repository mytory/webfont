---
layout: page
title: 소개
permalink: /about/
---

이제 한글 웹폰트를 사용할 만합니다. 아래 기술들을 사용하면 대역폭 낭비, 성능 저하, 텅 비어 있는 화면 문제를 피하면서도 웹폰트를 사용하는 것이 가능합니다.

- 웹폰트를 로컬 스토리지에 저장하는 기법: 웹폰트를 최대한 오래 캐시해 대역폭 낭비를 막습니다.
- 웹폰트 서브셋: 자주 사용하는 한글만 저장함으로써 웹폰트의 용량을 극적으로 줄입니다.
- woff2, woff 포맷: 용량이 작은 웹폰트 포맷입니다.
- woff2 지원 감지: woff2를 지원하는 웹브라우저를 감지합니다.
- 비동지적 웹폰트 적용: 우선 기본 글꼴로 내용을 보여주고 웹폰트를 모두 다운로드한 뒤에 웹폰트를 적용함으로써 인터넷 속도가 느린 사용자가 웹폰트를 모두 다운로드할 때까지 내용을 보지 못하게 되는 문제를 막습니다.


## 용량

자주 사용하는 한글만 포함한 웹폰트 이롭게바탕체의 경우 각 글꼴 포맷별 gzip 용량은 아래와 같습니다. 특히 woff2 글꼴은 큰 이미지 한 장의 용량 정도밖에 되지 않습니다.

- woff2: 138K
- woff: 241K
- ttf: 358K
- eot: 219K


## 이 사이트의 목적

이 사이트는 웹폰트를 효율적으로 사용하기 위한 기법들을 설명하고 사이트에 간단하게 웹폰트를 적용할 수 있는 기법을 다룹니다.


## 지원 포맷과 브라우저 호환성 

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

