function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}!function(t,e){var n=function(t,e,n){"use strict";var i,a;if(function(){var e,n={lazyClass:"lazyload",loadedClass:"lazyloaded",loadingClass:"lazyloading",preloadClass:"lazypreload",errorClass:"lazyerror",autosizesClass:"lazyautosizes",srcAttr:"data-src",srcsetAttr:"data-srcset",sizesAttr:"data-sizes",minSize:40,customMedia:{},init:!0,expFactor:1.5,hFac:.8,loadMode:2,loadHidden:!0,ricTimeout:0,throttleDelay:125};for(e in a=t.lazySizesConfig||t.lazysizesConfig||{},n)e in a||(a[e]=n[e])}(),!e||!e.getElementsByClassName)return{init:function(){},cfg:a,noSupport:!0};var r=e.documentElement,o=t.HTMLPictureElement,s=t.addEventListener.bind(t),l=t.setTimeout,u=t.requestAnimationFrame||l,c=t.requestIdleCallback,d=/^picture$/i,f=["load","error","lazyincluded","_lazyloaded"],y={},m=Array.prototype.forEach,g=function(t,e){return y[e]||(y[e]=new RegExp("(\\s|^)"+e+"(\\s|$)")),y[e].test(t.getAttribute("class")||"")&&y[e]},h=function(t,e){g(t,e)||t.setAttribute("class",(t.getAttribute("class")||"").trim()+" "+e)},p=function(t,e){var n;(n=g(t,e))&&t.setAttribute("class",(t.getAttribute("class")||"").replace(n," "))},v=function t(e,n,i){var a=i?"addEventListener":"removeEventListener";i&&t(e,n),f.forEach(function(t){e[a](t,n)})},z=function(t,n,a,r,o){var s=e.createEvent("Event");return a||(a={}),a.instance=i,s.initEvent(n,!r,!o),s.detail=a,t.dispatchEvent(s),s},b=function(e,n){var i;!o&&(i=t.picturefill||a.pf)?(n&&n.src&&!e.getAttribute("srcset")&&e.setAttribute("srcset",n.src),i({reevaluate:!0,elements:[e]})):n&&n.src&&(e.src=n.src)},A=function(t,e){return(getComputedStyle(t,null)||{})[e]},C=function(t,e,n){for(n=n||t.offsetWidth;n<a.minSize&&e&&!t._lazysizesWidth;)n=e.offsetWidth,e=e.parentNode;return n},E=(R=[],D=[],k=R,H=function(){var t=k;for(k=R.length?D:R,T=!0,F=!1;t.length;)t.shift()();T=!1},O=function(t,n){T&&!n?t.apply(this,arguments):(k.push(t),F||(F=!0,(e.hidden?l:u)(H)))},O._lsFlush=H,O),_=function(t,e){return e?function(){E(t)}:function(){var e=this,n=arguments;E(function(){t.apply(e,n)})}},w=function(t){var e,i,a=function(){e=null,t()},r=function t(){var e=n.now()-i;e<99?l(t,99-e):(c||a)(a)};return function(){i=n.now(),e||(e=l(r,99))}},N=function(){var o,f,y,C,N,S,L,x,W,B,T,F,R,D,k,H,O,P,$,q=/^img$/i,I=/^iframe$/i,U="onscroll"in t&&!/(gle|ing)bot/.test(navigator.userAgent),j=0,G=0,J=-1,K=function(t){G--,(!t||G<0||!t.target)&&(G=0)},Q=function(t){return null==F&&(F="hidden"==A(e.body,"visibility")),F||!("hidden"==A(t.parentNode,"visibility")&&"hidden"==A(t,"visibility"))},V=function(t,n){var i,a=t,o=Q(t);for(x-=n,T+=n,W-=n,B+=n;o&&(a=a.offsetParent)&&a!=e.body&&a!=r;)(o=(A(a,"opacity")||1)>0)&&"visible"!=A(a,"overflow")&&(i=a.getBoundingClientRect(),o=B>i.left&&W<i.right&&T>i.top-1&&x<i.bottom+1);return o},X=function(){var t,n,s,l,u,c,d,y,m,g,h,p,v=i.elements;if((C=a.loadMode)&&G<8&&(t=v.length)){for(n=0,J++;n<t;n++)if(v[n]&&!v[n]._lazyRace)if(!U||i.prematureUnveil&&i.prematureUnveil(v[n]))at(v[n]);else if((y=v[n].getAttribute("data-expand"))&&(c=1*y)||(c=j),g||(g=!a.expand||a.expand<1?r.clientHeight>500&&r.clientWidth>500?500:370:a.expand,i._defEx=g,h=g*a.expFactor,p=a.hFac,F=null,j<h&&G<1&&J>2&&C>2&&!e.hidden?(j=h,J=0):j=C>1&&J>1&&G<6?g:0),m!==c&&(S=innerWidth+c*p,L=innerHeight+c,d=-1*c,m=c),s=v[n].getBoundingClientRect(),(T=s.bottom)>=d&&(x=s.top)<=L&&(B=s.right)>=d*p&&(W=s.left)<=S&&(T||B||W||x)&&(a.loadHidden||Q(v[n]))&&(f&&G<3&&!y&&(C<3||J<4)||V(v[n],c))){if(at(v[n]),u=!0,G>9)break}else!u&&f&&!l&&G<4&&J<4&&C>2&&(o[0]||a.preloadAfterLoad)&&(o[0]||!y&&(T||B||W||x||"auto"!=v[n].getAttribute(a.sizesAttr)))&&(l=o[0]||v[n]);l&&!u&&at(l)}},Y=(R=X,k=0,H=a.throttleDelay,O=a.ricTimeout,P=function(){D=!1,k=n.now(),R()},$=c&&O>49?function(){c(P,{timeout:O}),O!==a.ricTimeout&&(O=a.ricTimeout)}:_(function(){l(P)},!0),function(t){var e;(t=!0===t)&&(O=33),D||(D=!0,(e=H-(n.now()-k))<0&&(e=0),t||e<9?$():l($,e))}),Z=function(t){var e=t.target;e._lazyCache?delete e._lazyCache:(K(t),h(e,a.loadedClass),p(e,a.loadingClass),v(e,et),z(e,"lazyloaded"))},tt=_(Z),et=function(t){tt({target:t.target})},nt=function(t){var e,n=t.getAttribute(a.srcsetAttr);(e=a.customMedia[t.getAttribute("data-media")||t.getAttribute("media")])&&t.setAttribute("media",e),n&&t.setAttribute("srcset",n)},it=_(function(t,e,n,i,r){var o,s,u,c,f,g;(f=z(t,"lazybeforeunveil",e)).defaultPrevented||(i&&(n?h(t,a.autosizesClass):t.setAttribute("sizes",i)),s=t.getAttribute(a.srcsetAttr),o=t.getAttribute(a.srcAttr),r&&(u=t.parentNode,c=u&&d.test(u.nodeName||"")),g=e.firesLoad||"src"in t&&(s||o||c),f={target:t},h(t,a.loadingClass),g&&(clearTimeout(y),y=l(K,2500),v(t,et,!0)),c&&m.call(u.getElementsByTagName("source"),nt),s?t.setAttribute("srcset",s):o&&!c&&(I.test(t.nodeName)?function(t,e){try{t.contentWindow.location.replace(e)}catch(n){t.src=e}}(t,o):t.src=o),r&&(s||c)&&b(t,{src:o})),t._lazyRace&&delete t._lazyRace,p(t,a.lazyClass),E(function(){var e=t.complete&&t.naturalWidth>1;g&&!e||(e&&h(t,"ls-is-cached"),Z(f),t._lazyCache=!0,l(function(){"_lazyCache"in t&&delete t._lazyCache},9)),"lazy"==t.loading&&G--},!0)}),at=function(t){if(!t._lazyRace){var e,n=q.test(t.nodeName),i=n&&(t.getAttribute(a.sizesAttr)||t.getAttribute("sizes")),r="auto"==i;(!r&&f||!n||!t.getAttribute("src")&&!t.srcset||t.complete||g(t,a.errorClass)||!g(t,a.lazyClass))&&(e=z(t,"lazyunveilread").detail,r&&M.updateElem(t,!0,t.offsetWidth),t._lazyRace=!0,G++,it(t,e,r,i,n))}},rt=w(function(){a.loadMode=3,Y()}),ot=function(){3==a.loadMode&&(a.loadMode=2),rt()},st=function t(){f||(n.now()-N<999?l(t,999):(f=!0,a.loadMode=3,Y(),s("scroll",ot,!0)))};return{_:function(){N=n.now(),i.elements=e.getElementsByClassName(a.lazyClass),o=e.getElementsByClassName(a.lazyClass+" "+a.preloadClass),s("scroll",Y,!0),s("resize",Y,!0),s("pageshow",function(t){if(t.persisted){var n=e.querySelectorAll("."+a.loadingClass);n.length&&n.forEach&&u(function(){n.forEach(function(t){t.complete&&at(t)})})}}),t.MutationObserver?new MutationObserver(Y).observe(r,{childList:!0,subtree:!0,attributes:!0}):(r.addEventListener("DOMNodeInserted",Y,!0),r.addEventListener("DOMAttrModified",Y,!0),setInterval(Y,999)),s("hashchange",Y,!0),["focus","mouseover","click","load","transitionend","animationend"].forEach(function(t){e.addEventListener(t,Y,!0)}),/d$|^c/.test(e.readyState)?st():(s("load",st),e.addEventListener("DOMContentLoaded",Y),l(st,2e4)),i.elements.length?(X(),E._lsFlush()):Y()},checkElems:Y,unveil:at,_aLSL:ot}}(),M=(x=_(function(t,e,n,i){var a,r,o;if(t._lazysizesWidth=i,i+="px",t.setAttribute("sizes",i),d.test(e.nodeName||""))for(a=e.getElementsByTagName("source"),r=0,o=a.length;r<o;r++)a[r].setAttribute("sizes",i);n.detail.dataAttr||b(t,n.detail)}),W=function(t,e,n){var i,a=t.parentNode;a&&(n=C(t,a,n),(i=z(t,"lazybeforesizes",{width:n,dataAttr:!!e})).defaultPrevented||(n=i.detail.width)&&n!==t._lazysizesWidth&&x(t,a,i,n))},B=w(function(){var t,e=L.length;if(e)for(t=0;t<e;t++)W(L[t])}),{_:function(){L=e.getElementsByClassName(a.autosizesClass),s("resize",B)},checkElems:B,updateElem:W}),S=function t(){!t.i&&e.getElementsByClassName&&(t.i=!0,M._(),N._())};var L,x,W,B;var T,F,R,D,k,H,O;return l(function(){a.init&&S()}),i={cfg:a,autoSizer:M,loader:N,init:S,uP:b,aC:h,rC:p,hC:g,fire:z,gW:C,rAF:E}}(t,t.document,Date);t.lazySizes=n,"object"==("undefined"==typeof module?"undefined":_typeof(module))&&module.exports&&(module.exports=n)}("undefined"!=typeof window?window:{});