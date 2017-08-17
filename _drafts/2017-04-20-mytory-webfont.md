# mytory-webfont

2017-04-20

## 설명할 기능

1. 서브셋
2. 로컬스토리지 저장 기법
3. `mytory-webfont.js` 라이브러리 설명

## 바로 사용 가능한 세트 제공

`mytory-webfont.zip`

mytory-webfont.js
mytory-webfont.min.js
mytory-webfont.css
fonts/nanumgothic.eot.css
fonts/nanumgothic.woff.css
fonts/nanumgothic.woff2.css

~~~
var options = {
    woffPath: 'fonts/nanumgothic.woff.css',
    woff2Path: 'fonts/nanumgothic.woff2.css'
};
mytoryWebfont(options);
~~~

기본제공 글꼴 - Kopub은 라이센스 요청해야 함

- 고딕: KopubDotum, Noto Sans CJK, 나눔바른고딕
- 명조: 이롭게바탕, KopubBatang, Noto Serif CJK


## 서브셋

- 서브셋 문자세트(영문 + 완성형 한글 2,350자 + 똠뷁헿햏꺍붴닁됭럄됭얬칢긂홥렜놰뇄푈귬찟샾뱡뜽렫쌰슌똣믜켙펲뛔쿈븨 + 기본 특수문자)
- 서브셋 글꼴 만드는 방법
- 가능한 서브셋 글꼴 세트 제공: 다운로드 링크


## 로컬스토리지 저장 기법

코드 설명과 추천글 소개


## mytory-webfont.js 라이브러리

~~~
new mytoryWebfont({
    eotPath: '/fonts/eot-files.css',
    woffPath: '/fonts/woff-files.css',
    woff2Path: '/fonts/woff2-files.css',
    renderingType: 'onReady' // onReady, onNextPage
});
~~~

## 다운로드

글꼴별 base64 css와 서브셋 웹폰트


## 더 쓸 것

복수의 글꼴 적용
원하는 글자만 subset으로 만들기
