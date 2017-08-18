---
layout: page
title: Mytory Webfont
---

이 사이트는 아직 제작중입니다.

## 바로 사용하기 

이 사이트는 기본적으로 MytoryWebfont.js라는 라이브러리를 제공합니다. 시간이 부족한 분은 그냥 이 웹폰트 라이브러리를 다운받아서 사용하시면 됩니다.

**[▶ MytoryWebfont.js](downloads.html)**

웹폰트 자체에 대해 좀더 탐구하고 싶은 분들에게 정보를 제공하는 것도 이 사이트의 중요한 목적입니다. 그런 분들은 예제 아래의 글들을 차분히 읽어 보세요.


## 예제

<div class="examples">
<!-- buttons start -->
<button type="button" class="js-NanumBarunGothic-Light">NanumBarunGothic-Light</button>
<button type="button" class="js-NotoSansCJKkr-Light">NotoSansCJKkr-Light</button>
<button type="button" class="js-NanumBarunGothic-UltraLight">NanumBarunGothic-UltraLight</button>
<button type="button" class="js-NanumGothic-Light">NanumGothic-Light</button>
<button type="button" class="js-NotoSansCJKkr-Regular">NotoSansCJKkr-Regular</button>
<button type="button" class="js-NanumBarunGothic-Bold">NanumBarunGothic-Bold</button>
<button type="button" class="js-NotoSansKR-Regular">NotoSansKR-Regular</button>
<button type="button" class="js-NanumSquare-Bold">NanumSquare-Bold</button>
<button type="button" class="js-NanumBarunpen-Regular">NanumBarunpen-Regular</button>
<button type="button" class="js-NanumSquare-Light">NanumSquare-Light</button>
<button type="button" class="js-NanumBarunGothic-Regular">NanumBarunGothic-Regular</button>
<button type="button" class="js-NanumGothic_Coding-Regular">NanumGothic_Coding-Regular</button>
<button type="button" class="js-NanumMyeongjo-ExtraBold">NanumMyeongjo-ExtraBold</button>
<button type="button" class="js-NotoSerifCJKkr-Regular">NotoSerifCJKkr-Regular</button>
<button type="button" class="js-NanumGothic_Coding-Bold">NanumGothic_Coding-Bold</button>
<button type="button" class="js-NanumMyeongjo-Bold">NanumMyeongjo-Bold</button>
<button type="button" class="js-NanumBrush-Regular">NanumBrush-Regular</button>
<button type="button" class="js-NanumBarunpen-Bold">NanumBarunpen-Bold</button>
<button type="button" class="js-NanumSquare-Regular">NanumSquare-Regular</button>
<button type="button" class="js-NanumSquare-ExtraBold">NanumSquare-ExtraBold</button>
<button type="button" class="js-IropkeBatang-Regular">IropkeBatang-Regular</button>
<button type="button" class="js-NanumGothic-ExtraBold">NanumGothic-ExtraBold</button>
<button type="button" class="js-NanumMyeongjo-Regular">NanumMyeongjo-Regular</button>
<button type="button" class="js-NanumGothic-Regular">NanumGothic-Regular</button>
<button type="button" class="js-NanumPen-Regular">NanumPen-Regular</button>
<button type="button" class="js-NanumGothic-Bold">NanumGothic-Bold</button>

<!-- buttons end -->
</div>

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

<!-- scripts start -->
<script>
  document.querySelector('.js-NanumBarunGothic-Light').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NanumBarunGothic-Light.woff.css'],
      woff2Path: ['/fonts/NanumBarunGothic-Light.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NanumBarunGothicWeb';
      bodyEl.style.fontWeight = 'Light';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-NotoSansCJKkr-Light').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NotoSansCJKkr-Light.woff.css'],
      woff2Path: ['/fonts/NotoSansCJKkr-Light.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NotoSansCJKkrWeb';
      bodyEl.style.fontWeight = 'Light';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-NanumBarunGothic-UltraLight').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NanumBarunGothic-UltraLight.woff.css'],
      woff2Path: ['/fonts/NanumBarunGothic-UltraLight.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NanumBarunGothicWeb';
      bodyEl.style.fontWeight = 'UltraLight';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-NanumGothic-Light').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NanumGothic-Light.woff.css'],
      woff2Path: ['/fonts/NanumGothic-Light.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NanumGothicWeb';
      bodyEl.style.fontWeight = 'Light';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-NotoSansCJKkr-Regular').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NotoSansCJKkr-Regular.woff.css'],
      woff2Path: ['/fonts/NotoSansCJKkr-Regular.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NotoSansCJKkrWeb';
      bodyEl.style.fontWeight = 'Regular';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-NanumBarunGothic-Bold').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NanumBarunGothic-Bold.woff.css'],
      woff2Path: ['/fonts/NanumBarunGothic-Bold.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NanumBarunGothicWeb';
      bodyEl.style.fontWeight = 'Bold';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-NotoSansKR-Regular').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NotoSansKR-Regular.woff.css'],
      woff2Path: ['/fonts/NotoSansKR-Regular.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NotoSansKRWeb';
      bodyEl.style.fontWeight = 'Regular';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-NanumSquare-Bold').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NanumSquare-Bold.woff.css'],
      woff2Path: ['/fonts/NanumSquare-Bold.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NanumSquareWeb';
      bodyEl.style.fontWeight = 'Bold';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-NanumBarunpen-Regular').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NanumBarunpen-Regular.woff.css'],
      woff2Path: ['/fonts/NanumBarunpen-Regular.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NanumBarunpenWeb';
      bodyEl.style.fontWeight = 'Regular';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-NanumSquare-Light').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NanumSquare-Light.woff.css'],
      woff2Path: ['/fonts/NanumSquare-Light.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NanumSquareWeb';
      bodyEl.style.fontWeight = 'Light';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-NanumBarunGothic-Regular').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NanumBarunGothic-Regular.woff.css'],
      woff2Path: ['/fonts/NanumBarunGothic-Regular.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NanumBarunGothicWeb';
      bodyEl.style.fontWeight = 'Regular';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-NanumGothic_Coding-Regular').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NanumGothic_Coding-Regular.woff.css'],
      woff2Path: ['/fonts/NanumGothic_Coding-Regular.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NanumGothic_CodingWeb';
      bodyEl.style.fontWeight = 'Regular';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-NanumMyeongjo-ExtraBold').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NanumMyeongjo-ExtraBold.woff.css'],
      woff2Path: ['/fonts/NanumMyeongjo-ExtraBold.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NanumMyeongjoWeb';
      bodyEl.style.fontWeight = 'ExtraBold';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-NotoSerifCJKkr-Regular').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NotoSerifCJKkr-Regular.woff.css'],
      woff2Path: ['/fonts/NotoSerifCJKkr-Regular.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NotoSerifCJKkrWeb';
      bodyEl.style.fontWeight = 'Regular';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-NanumGothic_Coding-Bold').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NanumGothic_Coding-Bold.woff.css'],
      woff2Path: ['/fonts/NanumGothic_Coding-Bold.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NanumGothic_CodingWeb';
      bodyEl.style.fontWeight = 'Bold';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-NanumMyeongjo-Bold').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NanumMyeongjo-Bold.woff.css'],
      woff2Path: ['/fonts/NanumMyeongjo-Bold.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NanumMyeongjoWeb';
      bodyEl.style.fontWeight = 'Bold';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-NanumBrush-Regular').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NanumBrush-Regular.woff.css'],
      woff2Path: ['/fonts/NanumBrush-Regular.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NanumBrushWeb';
      bodyEl.style.fontWeight = 'Regular';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-NanumBarunpen-Bold').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NanumBarunpen-Bold.woff.css'],
      woff2Path: ['/fonts/NanumBarunpen-Bold.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NanumBarunpenWeb';
      bodyEl.style.fontWeight = 'Bold';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-NanumSquare-Regular').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NanumSquare-Regular.woff.css'],
      woff2Path: ['/fonts/NanumSquare-Regular.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NanumSquareWeb';
      bodyEl.style.fontWeight = 'Regular';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-NanumSquare-ExtraBold').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NanumSquare-ExtraBold.woff.css'],
      woff2Path: ['/fonts/NanumSquare-ExtraBold.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NanumSquareWeb';
      bodyEl.style.fontWeight = 'ExtraBold';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-IropkeBatang-Regular').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/IropkeBatang-Regular.woff.css'],
      woff2Path: ['/fonts/IropkeBatang-Regular.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'IropkeBatangWeb';
      bodyEl.style.fontWeight = 'Regular';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-NanumGothic-ExtraBold').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NanumGothic-ExtraBold.woff.css'],
      woff2Path: ['/fonts/NanumGothic-ExtraBold.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NanumGothicWeb';
      bodyEl.style.fontWeight = 'ExtraBold';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-NanumMyeongjo-Regular').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NanumMyeongjo-Regular.woff.css'],
      woff2Path: ['/fonts/NanumMyeongjo-Regular.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NanumMyeongjoWeb';
      bodyEl.style.fontWeight = 'Regular';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-NanumGothic-Regular').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NanumGothic-Regular.woff.css'],
      woff2Path: ['/fonts/NanumGothic-Regular.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NanumGothicWeb';
      bodyEl.style.fontWeight = 'Regular';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-NanumPen-Regular').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NanumPen-Regular.woff.css'],
      woff2Path: ['/fonts/NanumPen-Regular.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NanumPenWeb';
      bodyEl.style.fontWeight = 'Regular';
      that.innerHTML = label;
    });
  });
</script>
<script>
  document.querySelector('.js-NanumGothic-Bold').addEventListener('click', function () {
  	var label = this.innerHTML;
  	var that = this;
  	this.innerHTML = 'Loading...';
    mytoryWebfont({
      woffPath: ['/fonts/NanumGothic-Bold.woff.css'],
      woff2Path: ['/fonts/NanumGothic-Bold.woff2.css'],
      renderingType: 'onReady' // onReady, onNextPage
    }, function () {
      var bodyEl = document.querySelector("body");
      bodyEl.style.fontFamily = 'NanumGothicWeb';
      bodyEl.style.fontWeight = 'Bold';
      that.innerHTML = label;
    });
  });
</script>

<!-- scripts end -->
