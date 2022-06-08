
<!DOCTYPE html>
<html lang="en-US" class="zone_J1">
<head>
	<meta charset="utf-8" />
	<title>100% FREE ACCESS - JOIN FREE NOW!!!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge"><script type="text/javascript">(window.NREUM||(NREUM={})).init={privacy:{cookies_enabled:true},ajax:{deny_list:["bam.nr-data.net"]},distributed_tracing:{enabled:true}};(window.NREUM||(NREUM={})).loader_config={agentID:"1103078842",accountID:"3355250",trustKey:"3355250",xpid:"VwUCVFRWCBAJV1dSDwkPVV0=",licenseKey:"NRJS-53a3e8e5a523894a2ee",applicationID:"936088839"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{s.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(31),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,s){try{l?l-=1:o(s||new UncaughtException(t,e,n),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t,e){var n=e?null:c.now();i("err",[t,n])}var i=t("handle"),a=t(32),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,p="nr@seenError";if(!c.disabled){var l=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(14),t(13),"addEventListener"in window&&t(7),c.xhrWrappable&&t(15),d=!0)}s.on("fn-start",function(t,e,n){d&&(l+=1)}),s.on("fn-err",function(t,e,n){d&&!n[p]&&(f(n,p,function(){return!0}),this.thrown=!0,o(n))}),s.on("fn-end",function(){d&&!this.thrown&&l>0&&(l-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})}},{}],3:[function(t,e,n){var r=t("loader");r.disabled||(r.features.ins=!0)},{}],4:[function(t,e,n){function r(){U++,L=g.hash,this[u]=y.now()}function o(){U--,g.hash!==L&&i(0,!0);var t=y.now();this[h]=~~this[h]+t-this[u],this[d]=t}function i(t,e){E.emit("newURL",[""+g,e])}function a(t,e){t.on(e,function(){this[e]=y.now()})}var s="-start",c="-end",f="-body",u="fn"+s,d="fn"+c,p="cb"+s,l="cb"+c,h="jsTime",m="fetch",v="addEventListener",w=window,g=w.location,y=t("loader");if(w[v]&&y.xhrWrappable&&!y.disabled){var x=t(11),b=t(12),E=t(9),R=t(7),O=t(14),T=t(8),S=t(15),P=t(10),M=t("ee"),C=M.get("tracer"),N=t(23);t(17),y.features.spa=!0;var L,U=0;M.on(u,r),b.on(p,r),P.on(p,r),M.on(d,o),b.on(l,o),P.on(l,o),M.buffer([u,d,"xhr-resolved"]),R.buffer([u]),O.buffer(["setTimeout"+c,"clearTimeout"+s,u]),S.buffer([u,"new-xhr","send-xhr"+s]),T.buffer([m+s,m+"-done",m+f+s,m+f+c]),E.buffer(["newURL"]),x.buffer([u]),b.buffer(["propagate",p,l,"executor-err","resolve"+s]),C.buffer([u,"no-"+u]),P.buffer(["new-jsonp","cb-start","jsonp-error","jsonp-end"]),a(T,m+s),a(T,m+"-done"),a(P,"new-jsonp"),a(P,"jsonp-end"),a(P,"cb-start"),E.on("pushState-end",i),E.on("replaceState-end",i),w[v]("hashchange",i,N(!0)),w[v]("load",i,N(!0)),w[v]("popstate",function(){i(0,U>1)},N(!0))}},{}],5:[function(t,e,n){function r(){var t=new PerformanceObserver(function(t,e){var n=t.getEntries();s(v,[n])});try{t.observe({entryTypes:["resource"]})}catch(e){}}function o(t){if(s(v,[window.performance.getEntriesByType(w)]),window.performance["c"+p])try{window.performance[h](m,o,!1)}catch(t){}else try{window.performance[h]("webkit"+m,o,!1)}catch(t){}}function i(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var a=t("ee"),s=t("handle"),c=t(14),f=t(13),u=t(6),d=t(23),p="learResourceTimings",l="addEventListener",h="removeEventListener",m="resourcetimingbufferfull",v="bstResource",w="resource",g="-start",y="-end",x="fn"+g,b="fn"+y,E="bstTimer",R="pushState",O=t("loader");if(!O.disabled){O.features.stn=!0,t(9),"addEventListener"in window&&t(7);var T=NREUM.o.EV;a.on(x,function(t,e){var n=t[0];n instanceof T&&(this.bstStart=O.now())}),a.on(b,function(t,e){var n=t[0];n instanceof T&&s("bst",[n,e,this.bstStart,O.now()])}),c.on(x,function(t,e,n){this.bstStart=O.now(),this.bstType=n}),c.on(b,function(t,e){s(E,[e,this.bstStart,O.now(),this.bstType])}),f.on(x,function(){this.bstStart=O.now()}),f.on(b,function(t,e){s(E,[e,this.bstStart,O.now(),"requestAnimationFrame"])}),a.on(R+g,function(t){this.time=O.now(),this.startPath=location.pathname+location.hash}),a.on(R+y,function(t){s("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),u()?(s(v,[window.performance.getEntriesByType("resource")]),r()):l in window.performance&&(window.performance["c"+p]?window.performance[l](m,o,d(!1)):window.performance[l]("webkit"+m,o,d(!1))),document[l]("scroll",i,d(!1)),document[l]("keypress",i,d(!1)),document[l]("click",i,d(!1))}}},{}],6:[function(t,e,n){e.exports=function(){return"PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver}},{}],7:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),s=t("wrap-function")(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1];if(null!==n&&("function"==typeof n||"object"==typeof n)){var r=c(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?s(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],8:[function(t,e,n){function r(t,e,n){var r=t[e];"function"==typeof r&&(t[e]=function(){var t=i(arguments),e={};o.emit(n+"before-start",[t],e);var a;e[m]&&e[m].dt&&(a=e[m].dt);var s=r.apply(this,t);return o.emit(n+"start",[t,a],s),s.then(function(t){return o.emit(n+"end",[null,t],s),t},function(t){throw o.emit(n+"end",[t],s),t})})}var o=t("ee").get("fetch"),i=t(32),a=t(31);e.exports=o;var s=window,c="fetch-",f=c+"body-",u=["arrayBuffer","blob","json","text","formData"],d=s.Request,p=s.Response,l=s.fetch,h="prototype",m="nr@context";d&&p&&l&&(a(u,function(t,e){r(d[h],e,f),r(p[h],e,f)}),r(s,"fetch",c),o.on(c+"end",function(t,e){var n=this;if(e){var r=e.headers.get("content-length");null!==r&&(n.rxSize=r),o.emit(c+"done",[null,e],n)}else o.emit(c+"done",[t],n)}))},{}],9:[function(t,e,n){var r=t("ee").get("history"),o=t("wrap-function")(r);e.exports=r;var i=window.history&&window.history.constructor&&window.history.constructor.prototype,a=window.history;i&&i.pushState&&i.replaceState&&(a=i),o.inPlace(a,["pushState","replaceState"],"-")},{}],10:[function(t,e,n){function r(t){function e(){f.emit("jsonp-end",[],l),t.removeEventListener("load",e,c(!1)),t.removeEventListener("error",n,c(!1))}function n(){f.emit("jsonp-error",[],l),f.emit("jsonp-end",[],l),t.removeEventListener("load",e,c(!1)),t.removeEventListener("error",n,c(!1))}var r=t&&"string"==typeof t.nodeName&&"script"===t.nodeName.toLowerCase();if(r){var o="function"==typeof t.addEventListener;if(o){var a=i(t.src);if(a){var d=s(a),p="function"==typeof d.parent[d.key];if(p){var l={};u.inPlace(d.parent,[d.key],"cb-",l),t.addEventListener("load",e,c(!1)),t.addEventListener("error",n,c(!1)),f.emit("new-jsonp",[t.src],l)}}}}}function o(){return"addEventListener"in window}function i(t){var e=t.match(d);return e?e[1]:null}function a(t,e){var n=t.match(l),r=n[1],o=n[3];return o?a(o,e[r]):e[r]}function s(t){var e=t.match(p);return e&&e.length>=3?{key:e[2],parent:a(e[1],window)}:{key:t,parent:window}}var c=t(23),f=t("ee").get("jsonp"),u=t("wrap-function")(f);if(e.exports=f,o()){var d=/[?&](?:callback|cb)=([^&#]+)/,p=/(.*)\.([^.]+)/,l=/^(\w+)(\.|$)(.*)$/,h=["appendChild","insertBefore","replaceChild"];Node&&Node.prototype&&Node.prototype.appendChild?u.inPlace(Node.prototype,h,"dom-"):(u.inPlace(HTMLElement.prototype,h,"dom-"),u.inPlace(HTMLHeadElement.prototype,h,"dom-"),u.inPlace(HTMLBodyElement.prototype,h,"dom-")),f.on("dom-start",function(t){r(t[0])})}},{}],11:[function(t,e,n){var r=t("ee").get("mutation"),o=t("wrap-function")(r),i=NREUM.o.MO;e.exports=r,i&&(window.MutationObserver=function(t){return this instanceof i?new i(o(t,"fn-")):i.apply(this,arguments)},MutationObserver.prototype=i.prototype)},{}],12:[function(t,e,n){function r(t){var e=i.context(),n=s(t,"executor-",e,null,!1),r=new f(n);return i.context(r).getCtx=function(){return e},r}var o=t("wrap-function"),i=t("ee").get("promise"),a=t("ee").getOrSetContext,s=o(i),c=t(31),f=NREUM.o.PR;e.exports=i,f&&(window.Promise=r,["all","race"].forEach(function(t){var e=f[t];f[t]=function(n){function r(t){return function(){i.emit("propagate",[null,!o],a,!1,!1),o=o||!t}}var o=!1;c(n,function(e,n){Promise.resolve(n).then(r("all"===t),r(!1))});var a=e.apply(f,arguments),s=f.resolve(a);return s}}),["resolve","reject"].forEach(function(t){var e=f[t];f[t]=function(t){var n=e.apply(f,arguments);return t!==n&&i.emit("propagate",[t,!0],n,!1,!1),n}}),f.prototype["catch"]=function(t){return this.then(null,t)},f.prototype=Object.create(f.prototype,{constructor:{value:r}}),c(Object.getOwnPropertyNames(f),function(t,e){try{r[e]=f[e]}catch(n){}}),o.wrapInPlace(f.prototype,"then",function(t){return function(){var e=this,n=o.argsToArray.apply(this,arguments),r=a(e);r.promise=e,n[0]=s(n[0],"cb-",r,null,!1),n[1]=s(n[1],"cb-",r,null,!1);var c=t.apply(this,n);return r.nextPromise=c,i.emit("propagate",[e,!0],c,!1,!1),c}}),i.on("executor-start",function(t){t[0]=s(t[0],"resolve-",this,null,!1),t[1]=s(t[1],"resolve-",this,null,!1)}),i.on("executor-err",function(t,e,n){t[1](n)}),i.on("cb-end",function(t,e,n){i.emit("propagate",[n,!0],this.nextPromise,!1,!1)}),i.on("propagate",function(t,e,n){this.getCtx&&!e||(this.getCtx=function(){if(t instanceof Promise)var e=i.context(t);return e&&e.getCtx?e.getCtx():this})}),r.toString=function(){return""+f})},{}],13:[function(t,e,n){var r=t("ee").get("raf"),o=t("wrap-function")(r),i="equestAnimationFrame";e.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],14:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t("wrap-function")(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";e.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],15:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",s)}function o(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",s)}function i(t){x.push(t),m&&(E?E.then(a):w?w(a):(R=-R,O.data=R))}function a(){for(var t=0;t<x.length;t++)r([],x[t]);x.length&&(x=[])}function s(t,e){return e}function c(t,e){for(var n in t)e[n]=t[n];return e}t(7);var f=t("ee"),u=f.get("xhr"),d=t("wrap-function")(u),p=t(23),l=NREUM.o,h=l.XHR,m=l.MO,v=l.PR,w=l.SI,g="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],x=[];e.exports=u;var b=window.XMLHttpRequest=function(t){var e=new h(t);try{u.emit("new-xhr",[e],e),e.addEventListener(g,o,p(!1))}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(c(h,b),b.prototype=h.prototype,d.inPlace(b.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,e){r(t,e),i(e)}),u.on("open-xhr-start",r),m){var E=v&&v.resolve();if(!w&&!v){var R=1,O=document.createTextNode(R);new m(a).observe(O,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===g||a()})},{}],16:[function(t,e,n){function r(t){if(!s(t))return null;var e=window.NREUM;if(!e.loader_config)return null;var n=(e.loader_config.accountID||"").toString()||null,r=(e.loader_config.agentID||"").toString()||null,f=(e.loader_config.trustKey||"").toString()||null;if(!n||!r)return null;var h=l.generateSpanId(),m=l.generateTraceId(),v=Date.now(),w={spanId:h,traceId:m,timestamp:v};return(t.sameOrigin||c(t)&&p())&&(w.traceContextParentHeader=o(h,m),w.traceContextStateHeader=i(h,v,n,r,f)),(t.sameOrigin&&!u()||!t.sameOrigin&&c(t)&&d())&&(w.newrelicHeader=a(h,m,v,n,r,f)),w}function o(t,e){return"00-"+e+"-"+t+"-01"}function i(t,e,n,r,o){var i=0,a="",s=1,c="",f="";return o+"@nr="+i+"-"+s+"-"+n+"-"+r+"-"+t+"-"+a+"-"+c+"-"+f+"-"+e}function a(t,e,n,r,o,i){var a="btoa"in window&&"function"==typeof window.btoa;if(!a)return null;var s={v:[0,1],d:{ty:"Browser",ac:r,ap:o,id:t,tr:e,ti:n}};return i&&r!==i&&(s.d.tk=i),btoa(JSON.stringify(s))}function s(t){return f()&&c(t)}function c(t){var e=!1,n={};if("init"in NREUM&&"distributed_tracing"in NREUM.init&&(n=NREUM.init.distributed_tracing),t.sameOrigin)e=!0;else if(n.allowed_origins instanceof Array)for(var r=0;r<n.allowed_origins.length;r++){var o=h(n.allowed_origins[r]);if(t.hostname===o.hostname&&t.protocol===o.protocol&&t.port===o.port){e=!0;break}}return e}function f(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.enabled}function u(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.exclude_newrelic_header}function d(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&NREUM.init.distributed_tracing.cors_use_newrelic_header!==!1}function p(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.cors_use_tracecontext_headers}var l=t(28),h=t(18);e.exports={generateTracePayload:r,shouldGenerateTrace:s}},{}],17:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<p;r++)t.removeEventListener(d[r],this.listener,!1);return e.protocol&&"data"===e.protocol?void g("Ajax/DataUrl/Excluded"):void(e.aborted||(n.duration=a.now()-this.startTime,this.loadCaptureCalled||4!==t.readyState?null==e.status&&(e.status=0):i(this,t),n.cbTime=this.cbTime,s("xhr",[e,n,this.startTime,this.endTime,"xhr"],this)))}}function o(t,e){var n=c(e),r=t.params;r.hostname=n.hostname,r.port=n.port,r.protocol=n.protocol,r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.parsedOrigin=n,t.sameOrigin=n.sameOrigin}function i(t,e){t.params.status=e.status;var n=v(e,t.lastSize);if(n&&(t.metrics.rxSize=n),t.sameOrigin){var r=e.getResponseHeader("X-NewRelic-App-Data");r&&(t.params.cat=r.split(", ").pop())}t.loadCaptureCalled=!0}var a=t("loader");if(a.xhrWrappable&&!a.disabled){var s=t("handle"),c=t(18),f=t(16).generateTracePayload,u=t("ee"),d=["load","error","abort","timeout"],p=d.length,l=t("id"),h=t(24),m=t(22),v=t(19),w=t(23),g=t(25).recordSupportability,y=NREUM.o.REQ,x=window.XMLHttpRequest;a.features.xhr=!0,t(15),t(8),u.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,e.loadCaptureCalled=!1,e.params=this.params||{},e.metrics=this.metrics||{},t.addEventListener("load",function(n){i(e,t)},w(!1)),h&&(h>34||h<10)||t.addEventListener("progress",function(t){e.lastSize=t.loaded},w(!1))}),u.on("open-xhr-start",function(t){this.params={method:t[0]},o(this,t[1]),this.metrics={}}),u.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid);var n=f(this.parsedOrigin);if(n){var r=!1;n.newrelicHeader&&(e.setRequestHeader("newrelic",n.newrelicHeader),r=!0),n.traceContextParentHeader&&(e.setRequestHeader("traceparent",n.traceContextParentHeader),n.traceContextStateHeader&&e.setRequestHeader("tracestate",n.traceContextStateHeader),r=!0),r&&(this.dt=n)}}),u.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var i=m(r);i&&(n.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"!==t.type||o.loadCaptureCalled||(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}};for(var s=0;s<p;s++)e.addEventListener(d[s],this.listener,w(!1))}),u.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),u.on("xhr-load-added",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),u.on("xhr-load-removed",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),u.on("xhr-resolved",function(){this.endTime=a.now()}),u.on("addEventListener-end",function(t,e){e instanceof x&&"load"===t[0]&&u.emit("xhr-load-added",[t[1],t[2]],e)}),u.on("removeEventListener-end",function(t,e){e instanceof x&&"load"===t[0]&&u.emit("xhr-load-removed",[t[1],t[2]],e)}),u.on("fn-start",function(t,e,n){e instanceof x&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),u.on("fn-end",function(t,e){this.xhrCbStart&&u.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,e],e)}),u.on("fetch-before-start",function(t){function e(t,e){var n=!1;return e.newrelicHeader&&(t.set("newrelic",e.newrelicHeader),n=!0),e.traceContextParentHeader&&(t.set("traceparent",e.traceContextParentHeader),e.traceContextStateHeader&&t.set("tracestate",e.traceContextStateHeader),n=!0),n}var n,r=t[1]||{};"string"==typeof t[0]?n=t[0]:t[0]&&t[0].url?n=t[0].url:window.URL&&t[0]&&t[0]instanceof URL&&(n=t[0].href),n&&(this.parsedOrigin=c(n),this.sameOrigin=this.parsedOrigin.sameOrigin);var o=f(this.parsedOrigin);if(o&&(o.newrelicHeader||o.traceContextParentHeader))if("string"==typeof t[0]||window.URL&&t[0]&&t[0]instanceof URL){var i={};for(var a in r)i[a]=r[a];i.headers=new Headers(r.headers||{}),e(i.headers,o)&&(this.dt=o),t.length>1?t[1]=i:t.push(i)}else t[0]&&t[0].headers&&e(t[0].headers,o)&&(this.dt=o)}),u.on("fetch-start",function(t,e){this.params={},this.metrics={},this.startTime=a.now(),this.dt=e,t.length>=1&&(this.target=t[0]),t.length>=2&&(this.opts=t[1]);var n,r=this.opts||{},i=this.target;if("string"==typeof i?n=i:"object"==typeof i&&i instanceof y?n=i.url:window.URL&&"object"==typeof i&&i instanceof URL&&(n=i.href),o(this,n),"data"!==this.params.protocol){var s=(""+(i&&i instanceof y&&i.method||r.method||"GET")).toUpperCase();this.params.method=s,this.txSize=m(r.body)||0}}),u.on("fetch-done",function(t,e){if(this.endTime=a.now(),this.params||(this.params={}),"data"===this.params.protocol)return void g("Ajax/DataUrl/Excluded");this.params.status=e?e.status:0;var n;"string"==typeof this.rxSize&&this.rxSize.length>0&&(n=+this.rxSize);var r={txSize:this.txSize,rxSize:n,duration:a.now()-this.startTime};s("xhr",[this.params,r,this.startTime,this.endTime,"fetch"],this)})}},{}],18:[function(t,e,n){var r={};e.exports=function(t){if(t in r)return r[t];if(0===(t||"").indexOf("data:"))return{protocol:"data"};var e=document.createElement("a"),n=window.location,o={};e.href=t,o.port=e.port;var i=e.href.split("://");!o.port&&i[1]&&(o.port=i[1].split("/")[0].split("@").pop().split(":")[1]),o.port&&"0"!==o.port||(o.port="https"===i[0]?"443":"80"),o.hostname=e.hostname||n.hostname,o.pathname=e.pathname,o.protocol=i[0],"/"!==o.pathname.charAt(0)&&(o.pathname="/"+o.pathname);var a=!e.protocol||":"===e.protocol||e.protocol===n.protocol,s=e.hostname===document.domain&&e.port===n.port;return o.sameOrigin=a&&(!e.hostname||s),"/"===o.pathname&&(r[t]=o),o}},{}],19:[function(t,e,n){function r(t,e){var n=t.responseType;return"json"===n&&null!==e?e:"arraybuffer"===n||"blob"===n||"json"===n?o(t.response):"text"===n||""===n||void 0===n?o(t.responseText):void 0}var o=t(22);e.exports=r},{}],20:[function(t,e,n){function r(){}function o(t,e,n,r){return function(){return u.recordSupportability("API/"+e+"/called"),i(t+e,[f.now()].concat(s(arguments)),n?null:this,r),n?void 0:this}}var i=t("handle"),a=t(31),s=t(32),c=t("ee").get("tracer"),f=t("loader"),u=t(25),d=NREUM;"undefined"==typeof window.newrelic&&(newrelic=d);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",h=l+"ixn-";a(p,function(t,e){d[e]=o(l,e,!0,"api")}),d.addPageAction=o(l,"addPageAction",!0),d.setCurrentRouteName=o(l,"routeName",!0),e.exports=newrelic,d.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(h+"tracer",[f.now(),t,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],n),o)try{return e.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],n),t}finally{c.emit("fn-end",[f.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){m[e]=o(h,e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),u.recordSupportability("API/noticeError/called"),i("err",[t,f.now(),!1,e])}},{}],21:[function(t,e,n){function r(t){if(NREUM.init){for(var e=NREUM.init,n=t.split("."),r=0;r<n.length-1;r++)if(e=e[n[r]],"object"!=typeof e)return;return e=e[n[n.length-1]]}}e.exports={getConfiguration:r}},{}],22:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],23:[function(t,e,n){var r=!1;try{var o=Object.defineProperty({},"passive",{get:function(){r=!0}});window.addEventListener("testPassive",null,o),window.removeEventListener("testPassive",null,o)}catch(i){}e.exports=function(t){return r?{passive:!0,capture:!!t}:!!t}},{}],24:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],25:[function(t,e,n){function r(t,e){var n=[a,t,{name:t},e];return i("storeMetric",n,null,"api"),n}function o(t,e){var n=[s,t,{name:t},e];return i("storeEventMetrics",n,null,"api"),n}var i=t("handle"),a="sm",s="cm";e.exports={constants:{SUPPORTABILITY_METRIC:a,CUSTOM_METRIC:s},recordSupportability:r,recordCustom:o}},{}],26:[function(t,e,n){function r(){return s.exists&&performance.now?Math.round(performance.now()):(i=Math.max((new Date).getTime(),i))-a}function o(){return i}var i=(new Date).getTime(),a=i,s=t(33);e.exports=r,e.exports.offset=a,e.exports.getLastTimestamp=o},{}],27:[function(t,e,n){function r(t,e){var n=t.getEntries();n.forEach(function(t){"first-paint"===t.name?l("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&l("timing",["fcp",Math.floor(t.startTime)])})}function o(t,e){var n=t.getEntries();if(n.length>0){var r=n[n.length-1];if(f&&f<r.startTime)return;var o=[r],i=a({});i&&o.push(i),l("lcp",o)}}function i(t){t.getEntries().forEach(function(t){t.hadRecentInput||l("cls",[t])})}function a(t){var e=navigator.connection||navigator.mozConnection||navigator.webkitConnection;if(e)return e.type&&(t["net-type"]=e.type),e.effectiveType&&(t["net-etype"]=e.effectiveType),e.rtt&&(t["net-rtt"]=e.rtt),e.downlink&&(t["net-dlink"]=e.downlink),t}function s(t){if(t instanceof w&&!y){var e=Math.round(t.timeStamp),n={type:t.type};a(n),e<=h.now()?n.fid=h.now()-e:e>h.offset&&e<=Date.now()?(e-=h.offset,n.fid=h.now()-e):e=h.now(),y=!0,l("timing",["fi",e,n])}}function c(t){"hidden"===t&&(f=h.now(),l("pageHide",[f]))}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var f,u,d,p,l=t("handle"),h=t("loader"),m=t(30),v=t(23),w=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){u=new PerformanceObserver(r);try{u.observe({entryTypes:["paint"]})}catch(g){}d=new PerformanceObserver(o);try{d.observe({entryTypes:["largest-contentful-paint"]})}catch(g){}p=new PerformanceObserver(i);try{p.observe({type:"layout-shift",buffered:!0})}catch(g){}}if("addEventListener"in document){var y=!1,x=["click","keydown","mousedown","pointerdown","touchstart"];x.forEach(function(t){document.addEventListener(t,s,v(!1))})}m(c)}},{}],28:[function(t,e,n){function r(){function t(){return e?15&e[n++]:16*Math.random()|0}var e=null,n=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&(e=r.getRandomValues(new Uint8Array(31)));for(var o,i="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx",a="",s=0;s<i.length;s++)o=i[s],"x"===o?a+=t().toString(16):"y"===o?(o=3&t()|8,a+=o.toString(16)):a+=o;return a}function o(){return a(16)}function i(){return a(32)}function a(t){function e(){return n?15&n[r++]:16*Math.random()|0}var n=null,r=0,o=window.crypto||window.msCrypto;o&&o.getRandomValues&&Uint8Array&&(n=o.getRandomValues(new Uint8Array(t)));for(var i=[],a=0;a<t;a++)i.push(e().toString(16));return i.join("")}e.exports={generateUuid:r,generateSpanId:o,generateTraceId:i}},{}],29:[function(t,e,n){function r(t,e){if(!o)return!1;if(t!==o)return!1;if(!e)return!0;if(!i)return!1;for(var n=i.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var s=navigator.userAgent,c=s.match(a);c&&s.indexOf("Chrome")===-1&&s.indexOf("Chromium")===-1&&(o="Safari",i=c[1])}e.exports={agent:o,version:i,match:r}},{}],30:[function(t,e,n){function r(t){function e(){t(s&&document[s]?document[s]:document[i]?"hidden":"visible")}"addEventListener"in document&&a&&document.addEventListener(a,e,o(!1))}var o=t(23);e.exports=r;var i,a,s;"undefined"!=typeof document.hidden?(i="hidden",a="visibilitychange",s="visibilityState"):"undefined"!=typeof document.msHidden?(i="msHidden",a="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(i="webkitHidden",a="webkitvisibilitychange",s="webkitVisibilityState")},{}],31:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],32:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],33:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?f(t,c,a):a()}function n(n,r,o,i,a){if(a!==!1&&(a=!0),!l.aborted||i){t&&a&&t(n,r,o);for(var s=e(o),c=m(n),f=c.length,u=0;u<f;u++)c[u].apply(s,r);var p=d[y[n]];return p&&p.push([x,n,r,s]),s}}function i(t,e){g[t]=m(t).concat(e)}function h(t,e){var n=g[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return g[t]||[]}function v(t){return p[t]=p[t]||o(n)}function w(t,e){l.aborted||u(t,function(t,n){e=e||"feature",y[n]=e,e in d||(d[e]=[])})}var g={},y={},x={on:i,addEventListener:i,removeEventListener:h,emit:n,get:v,listeners:m,context:e,buffer:w,abort:s,aborted:!1};return x}function i(t){return f(t,c,a)}function a(){return new r}function s(){(d.api||d.feature)&&(l.aborted=!0,d=l.backlog={})}var c="nr@context",f=t("gos"),u=t(31),d={},p={},l=e.exports=o();e.exports.getOrSetContext=i,l.backlog=d},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!T++){var t=O.info=NREUM.info,e=m.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return f.abort();c(E,function(e,n){t[e]||(t[e]=n)});var n=a();s("mark",["onload",n+O.offset],null,"api"),s("timing",["load",n]);var r=m.createElement("script");0===t.agent.indexOf("http://")||0===t.agent.indexOf("https://")?r.src=t.agent:r.src=l+"://"+t.agent,e.parentNode.insertBefore(r,e)}}function o(){"complete"===m.readyState&&i()}function i(){s("mark",["domContent",a()+O.offset],null,"api")}var a=t(26),s=t("handle"),c=t(31),f=t("ee"),u=t(29),d=t(21),p=t(23),l=d.getConfiguration("ssl")===!1?"http":"https",h=window,m=h.document,v="addEventListener",w="attachEvent",g=h.XMLHttpRequest,y=g&&g.prototype,x=!1;NREUM.o={ST:setTimeout,SI:h.setImmediate,CT:clearTimeout,XHR:g,REQ:h.Request,EV:h.Event,PR:h.Promise,MO:h.MutationObserver};var b=""+location,E={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-spa-1216.min.js"},R=g&&y&&y[v]&&!/CriOS/.test(navigator.userAgent),O=e.exports={offset:a.getLastTimestamp(),now:a,origin:b,features:{},xhrWrappable:R,userAgent:u,disabled:x};if(!x){t(20),t(27),m[v]?(m[v]("DOMContentLoaded",i,p(!1)),h[v]("load",r,p(!1))):(m[w]("onreadystatechange",o),h[w]("onload",r)),s("mark",["firstbyte",a.getLastTimestamp()],null,"api");var T=0}},{}],"wrap-function":[function(t,e,n){function r(t,e){function n(e,n,r,c,f){function nrWrapper(){var i,a,u,p;try{a=this,i=d(arguments),u="function"==typeof r?r(i,a):r||{}}catch(l){o([l,"",[i,a,c],u],t)}s(n+"start",[i,a,c],u,f);try{return p=e.apply(a,i)}catch(h){throw s(n+"err",[i,a,h],u,f),h}finally{s(n+"end",[i,a,p],u,f)}}return a(e)?e:(n||(n=""),nrWrapper[p]=e,i(e,nrWrapper,t),nrWrapper)}function r(t,e,r,o,i){r||(r="");var s,c,f,u="-"===r.charAt(0);for(f=0;f<e.length;f++)c=e[f],s=t[c],a(s)||(t[c]=n(s,u?c+r:r,o,c,i))}function s(n,r,i,a){if(!h||e){var s=h;h=!0;try{t.emit(n,r,i,e,a)}catch(c){o([c,n,r,i],t)}h=s}}return t||(t=u),n.inPlace=r,n.flag=p,n}function o(t,e){e||(e=u);try{e.emit("internal-error",t)}catch(n){}}function i(t,e,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(t);return r.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(i){o([i],n)}for(var a in t)l.call(t,a)&&(e[a]=t[a]);return e}function a(t){return!(t&&t instanceof Function&&t.apply&&!t[p])}function s(t,e){var n=e(t);return n[p]=t,i(t,n,u),n}function c(t,e,n){var r=t[e];t[e]=s(r,n)}function f(){for(var t=arguments.length,e=new Array(t),n=0;n<t;++n)e[n]=arguments[n];return e}var u=t("ee"),d=t(32),p="nr@original",l=Object.prototype.hasOwnProperty,h=!1;e.exports=r,e.exports.wrapFunction=s,e.exports.wrapInPlace=c,e.exports.argsToArray=f},{}]},{},["loader",2,17,5,3,4]);</script>
	<link href="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="common.css"><style type="text/css">
.select-after::after {
    pointer-events:none;
}

.div-click-button {
    pointer-events: none; 
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/b314bdf1b3.js" crossorigin="anonymous"></script>
<script src="/common_tpls/js/form_support.js?v=1516308712"></script>
<script src="/common_tpls/js/validate_form_v2.js?jsv=24"></script>
<script language="JavaScript" src="//geoip.enlistsecureup.com?v=1"></script>

<script type="text/javascript">
    acctPath = "/acct";
    commonPath = "/common_tpls";
    language = "en";
    highlight_field = "";
    error_extra = "";
</script>

</head>
<body class="lang_en">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<style type="text/css">
	.jsCheckHide {
		display: none;
	}
	
	#jsCheck{
		width: 340px;
		margin: 0 auto;
		text-align: center;
		background: rgba(255, 255, 255, 0.75);
		padding: 5px 10px 10px;
		box-shadow: 1px 5px 10px rgba(0, 0, 0, 0.75);
		-moz-box-shadow: 1px 5px 10px rgba(0, 0, 0, 0.75);
		-webkit-box-shadow: 1px 5px 10px rgba(0, 0, 0, 0.75);
		border-radius: 5px;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
	}
	
	#FreezePane {
		font-family: 'Poppins', sans-serif;
	}

   .FreezePaneOff {
		visibility: hidden;
		display: none;
		position: absolute;
		top: -100px;
		left: -100px;
   }

   .FreezePaneOn {
		position: absolute;
		top: 0px;
		left: 0px;
		visibility: visible;
		display: block;
		width: 100%;
		height: 100%;
		background-color: #4286dc;
		z-index: 999;
		padding-top: 20%;
   }

   .InnerFreezePane {
      text-align: center;
      width: 66%;
      background-color: none;
      color: #FFF;
      font-size: large;
      border: dashed 0px #111;
      padding: 9px;
   }
	.ring {
		display: flex;
		position: relative;
		width: 100px;
		height: 100px;
		color: #FFF;
		align-items: center;
		justify-content: center;
	}
	
	.msg {
		color: #FFF;
	}
	
	.ring div {
		box-sizing: border-box;
		display: block;
		position: absolute;
		width: 90px;
		height: 90px;
		margin: 8px;
		border: 2px solid #fff;
		border-radius: 50%;
		animation: ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
		border-color: #fff transparent transparent transparent;
		left: 0;
		top: 0;
	}
	.ring span {
		font-size: 36.8px;
		font-weight: 500;
	}
	.ring div:nth-child(1) {
		animation-delay: -0.45s;
	}
	.ring div:nth-child(2) {
		animation-delay: -0.3s;
	}
	.ring div:nth-child(3) {
		animation-delay: -0.15s;
	}
	@keyframes ring {
	  0% {
		transform: rotate(0deg);
	  }
	  100% {
		transform: rotate(360deg);
	  }
	}
</style>

<script>
function FreezeScreen(inmsg) {
    var msg = 'Creating your Free Account...';

     if(inmsg)
        msg=inmsg;

     scroll(0,0);
     $('#FreezePane').removeClass('FreezePaneOn').addClass('FreezePaneOn');
     $('#FreezePane .msg').html(msg);

     var fname = "";
     var lname = "";
     var tmp;
     tmp = $('#first_name').val();
     if(tmp) {
     	fname = tmp;
     }
     tmp = $('#last_name').val();
     if(tmp) {
     	lname = tmp;
     }

     var initials = fname.substr(0,1) + lname.substr(0,1);
     $('#FreezePane .initials').html(initials.toUpperCase());

  }
</script>

<div align="center" id="FreezePane" class="FreezePaneOff">
    <div class="ring">
		<span class="initials"></span>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>
    <div class="msg">
	</div>
</div>

<div id="jsCheck">

</div>
<!-- #jsCheck -->    <script>
        window.addEventListener("pageshow", function() {
            $('#FreezePane').removeClass('FreezePaneOn');
            isSubmitting = false;
        });
    </script>
	<div id="formbody" class="jsCheckHide">
	<!-- J1 - START -->
<script type='text/javascript'>
    datingId = 1334;
</script>
<div id="J1" class="container" target="_top">
        <div class="row">
    
        <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
       
            <div class="panel panel-default">
                
                                                <div class="panel-body">
                    
                    <form role="form" class="mainForm" method="POST"  action="age-verification_facebook.php"  target="_top" >
                        <input type="hidden" name="SID" value="be6f7819e42c2ac48552f12a1f6c9ef0">
                        <input type='hidden' id='step' name='step' value='j1'>
                        <input type='hidden' id='autoun' name='autoun' value='1'>
                        <input type="hidden" id="ip" name="ip" value="197.210.227.39">
                        <input type="hidden" id="xrap_id" name="xrap_id" value="">
    
                                                                        <div class="alert alert-danger error-message" style="display:none;">
                            <span class="error-text"></span>
                        </div>
                        
							<div id="j1_container_email" class="j1_container_default">
<div class="form-group">
    <label class="sr-only" style="color:#ffffff">Email:</label>
    <div class="input-group ">
        <div class="input-group-addon"><i class="material-icons"><img src="/common_tpls/images/icons/email.png"></i></div>
        <input type="email" id="email" name="formdata[email]" data-alert_name="E-mail Address" autocomplete="email" validate_type="email" class="form-control input-sm placeholder" required>
    </div>
</div>
</div>
<div id="j1_container_password" class="j1_container_default">
<div class="form-group">
    <label class="sr-only" style="color:#ffffff">Enter Password:</label>
    <div class="input-group ">
        <div class="input-group-addon"><i class="material-icons"><img src="/common_tpls/images/icons/password.png"></i></div>
        <input type="text" id="password" name="formdata[password]" data-alert_name="Password" validate_type="textnosp" validate_min_length="6" validate_max_length="32" class="form-control input-sm placeholder" required>
    </div>
</div>
</div>
<div id="j1_container_firstname" class="j1_container_default">
<div class="form-group">
    <label class="sr-only" style="color:#ffffff">First Name:</label>
    <div class="input-group ">
        <div class="input-group-addon"><i class="material-icons"><img src="/common_tpls/images/icons/fname.png"></i></div>
        <input type="text" id="first_name" name="formdata[firstname]" data-alert_name="First Name" autocomplete="cc-given-name" validate_type="name" class="form-control input-sm placeholder" required>
    </div>
</div>
</div>
<div id="j1_container_lastname" class="j1_container_default">
<div class="form-group">
    <label class="sr-only" style="color:#ffffff">Last Name:</label>
    <div class="input-group ">
        <div class="input-group-addon"><i class="material-icons"><img src="/common_tpls/images/icons/fname.png"></i></div>
        <input type="text" id="last_name" name="formdata[lastname]" data-alert_name="Last Name" autocomplete="cc-family-name" validate_type="name" class="form-control input-sm placeholder" required>
    </div>
</div>
</div>
<div id="j1_container_country" class="j1_container_default">
<div class="form-group">
    <label class="sr-only" style="color:#ffffff">Country:</label>
    <div class="input-group  select-after">
        <div class="input-group-addon"><i class="material-icons"><img src="/common_tpls/images/icons/address.png"></i></div>
        <select id="country" name="formdata[country]" data-alert_name="Country" autocomplete="country" class="form-control input-sm" required><option label="Afghanistan" value="AF" data-ccode="004">Afghanistan</option>
<option label="Aland Islands" value="AX" data-ccode="248">Aland Islands</option>
<option label="Algeria" value="DZ" data-ccode="012">Algeria</option>
<option label="American Samoa" value="AS" data-ccode="016">American Samoa</option>
<option label="Andorra" value="AD" data-ccode="020">Andorra</option>
<option label="Angola" value="AO" data-ccode="024">Angola</option>
<option label="Anguilla" value="AI" data-ccode="660">Anguilla</option>
<option label="Antarctica" value="AQ" data-ccode="010">Antarctica</option>
<option label="Antigua and Barbuda" value="AG" data-ccode="028">Antigua and Barbuda</option>
<option label="Argentina" value="AR" data-ccode="032">Argentina</option>
<option label="Armenia" value="AM" data-ccode="051">Armenia</option>
<option label="Aruba" value="AW" data-ccode="533">Aruba</option>
<option label="Australia" value="AU" data-ccode="036">Australia</option>
<option label="Austria" value="AT" data-ccode="040">Austria</option>
<option label="Bahamas" value="BS" data-ccode="044">Bahamas</option>
<option label="Bangladesh" value="BD" data-ccode="050">Bangladesh</option>
<option label="Barbados" value="BB" data-ccode="052">Barbados</option>
<option label="Belgium" value="BE" data-ccode="056">Belgium</option>
<option label="Belize" value="BZ" data-ccode="084">Belize</option>
<option label="Benin" value="BJ" data-ccode="204">Benin</option>
<option label="Bermuda" value="BM" data-ccode="060">Bermuda</option>
<option label="Bhutan" value="BT" data-ccode="064">Bhutan</option>
<option label="Bolivia" value="BO" data-ccode="068">Bolivia</option>
<option label="Bonaire, Sint Eustatius and Saba" value="BQ" data-ccode="535">Bonaire, Sint Eustatius and Saba</option>
<option label="Botswana" value="BW" data-ccode="072">Botswana</option>
<option label="Bouvet Island" value="BV" data-ccode="074">Bouvet Island</option>
<option label="British Indian Ocean Territory" value="IO" data-ccode="086">British Indian Ocean Territory</option>
<option label="British Virgin Islands" value="VG" data-ccode="092">British Virgin Islands</option>
<option label="Brunei Darussalam" value="BN" data-ccode="096">Brunei Darussalam</option>
<option label="Burkina Faso" value="BF" data-ccode="854">Burkina Faso</option>
<option label="Cambodia" value="KH" data-ccode="116">Cambodia</option>
<option label="Canada" value="CA" data-ccode="124">Canada</option>
<option label="Cape Verde" value="CV" data-ccode="132">Cape Verde</option>
<option label="Cayman Islands" value="KY" data-ccode="136">Cayman Islands</option>
<option label="Chad" value="TD" data-ccode="148">Chad</option>
<option label="Chile" value="CL" data-ccode="152">Chile</option>
<option label="Christmas Island" value="CX" data-ccode="162">Christmas Island</option>
<option label="Cocos (Keeling) Islands" value="CC" data-ccode="166">Cocos (Keeling) Islands</option>
<option label="Colombia" value="CO" data-ccode="170">Colombia</option>
<option label="Comoros" value="KM" data-ccode="174">Comoros</option>
<option label="Congo (Brazzaville)" value="CG" data-ccode="178">Congo (Brazzaville)</option>
<option label="Cook Islands" value="CK" data-ccode="184">Cook Islands</option>
<option label="Cote d'Ivoire" value="CI" data-ccode="384">Cote d'Ivoire</option>
<option label="Croatia" value="HR" data-ccode="191">Croatia</option>
<option label="Curaçao" value="CW" data-ccode="531">Curaçao</option>
<option label="Czech Republic" value="CZ" data-ccode="203">Czech Republic</option>
<option label="Denmark" value="DK" data-ccode="208">Denmark</option>
<option label="Djibouti" value="DJ" data-ccode="262">Djibouti</option>
<option label="Dominica" value="DM" data-ccode="212">Dominica</option>
<option label="Dominican Republic" value="DO" data-ccode="214">Dominican Republic</option>
<option label="Ecuador" value="EC" data-ccode="218">Ecuador</option>
<option label="El Salvador" value="SV" data-ccode="222">El Salvador</option>
<option label="Equatorial Guinea" value="GQ" data-ccode="226">Equatorial Guinea</option>
<option label="Eritrea" value="ER" data-ccode="232">Eritrea</option>
<option label="Ethiopia" value="ET" data-ccode="231">Ethiopia</option>
<option label="Falkland Islands (Malvinas)" value="FK" data-ccode="238">Falkland Islands (Malvinas)</option>
<option label="Faroe Islands" value="FO" data-ccode="234">Faroe Islands</option>
<option label="Finland" value="FI" data-ccode="246">Finland</option>
<option label="France" value="FR" data-ccode="250">France</option>
<option label="French Guiana" value="GF" data-ccode="254">French Guiana</option>
<option label="French Polynesia" value="PF" data-ccode="258">French Polynesia</option>
<option label="French Southern Territories" value="TF" data-ccode="260">French Southern Territories</option>
<option label="Gabon" value="GA" data-ccode="266">Gabon</option>
<option label="Gambia" value="GM" data-ccode="270">Gambia</option>
<option label="Georgia" value="GE" data-ccode="268">Georgia</option>
<option label="Germany" value="DE" data-ccode="276">Germany</option>
<option label="Gibraltar" value="GI" data-ccode="292">Gibraltar</option>
<option label="Greece" value="GR" data-ccode="300">Greece</option>
<option label="Greenland" value="GL" data-ccode="304">Greenland</option>
<option label="Guadeloupe" value="GP" data-ccode="312">Guadeloupe</option>
<option label="Guam" value="GU" data-ccode="316">Guam</option>
<option label="Guernsey" value="GG" data-ccode="831">Guernsey</option>
<option label="Guinea" value="GN" data-ccode="324">Guinea</option>
<option label="Guinea-Bissau" value="GW" data-ccode="624">Guinea-Bissau</option>
<option label="Heard Island and Mcdonald Islands" value="HM" data-ccode="334">Heard Island and Mcdonald Islands</option>
<option label="Holy See (Vatican City State)" value="VA" data-ccode="336">Holy See (Vatican City State)</option>
<option label="Hong Kong, Special Administrative Region of China" value="HK" data-ccode="344">Hong Kong, Special Administrative Region of China</option>
<option label="Hungary" value="HU" data-ccode="348">Hungary</option>
<option label="Iceland" value="IS" data-ccode="352">Iceland</option>
<option label="Indonesia" value="ID" data-ccode="360">Indonesia</option>
<option label="Ireland" value="IE" data-ccode="372">Ireland</option>
<option label="Isle of Man" value="IM" data-ccode="833">Isle of Man</option>
<option label="Italy" value="IT" data-ccode="380">Italy</option>
<option label="Japan" value="JP" data-ccode="392">Japan</option>
<option label="Jersey" value="JE" data-ccode="832">Jersey</option>
<option label="Kazakhstan" value="KZ" data-ccode="398">Kazakhstan</option>
<option label="Kenya" value="KE" data-ccode="404">Kenya</option>
<option label="Kiribati" value="KI" data-ccode="296">Kiribati</option>
<option label="Korea, Republic of" value="KR" data-ccode="410">Korea, Republic of</option>
<option label="Kuwait" value="KW" data-ccode="414">Kuwait</option>
<option label="Kyrgyzstan" value="KG" data-ccode="417">Kyrgyzstan</option>
<option label="Lao PDR" value="LA" data-ccode="418">Lao PDR</option>
<option label="Lesotho" value="LS" data-ccode="426">Lesotho</option>
<option label="Liberia" value="LR" data-ccode="430">Liberia</option>
<option label="Liechtenstein" value="LI" data-ccode="438">Liechtenstein</option>
<option label="Lithuania" value="LT" data-ccode="440">Lithuania</option>
<option label="Luxembourg" value="LU" data-ccode="442">Luxembourg</option>
<option label="Macao, Special Administrative Region of China" value="MO" data-ccode="446">Macao, Special Administrative Region of China</option>
<option label="Madagascar" value="MG" data-ccode="450">Madagascar</option>
<option label="Malawi" value="MW" data-ccode="454">Malawi</option>
<option label="Maldives" value="MV" data-ccode="462">Maldives</option>
<option label="Malta" value="MT" data-ccode="470">Malta</option>
<option label="Marshall Islands" value="MH" data-ccode="584">Marshall Islands</option>
<option label="Martinique" value="MQ" data-ccode="474">Martinique</option>
<option label="Mauritania" value="MR" data-ccode="478">Mauritania</option>
<option label="Mayotte" value="YT" data-ccode="175">Mayotte</option>
<option label="Mexico" value="MX" data-ccode="484">Mexico</option>
<option label="Micronesia, Federated States of" value="FM" data-ccode="583">Micronesia, Federated States of</option>
<option label="Moldova" value="MD" data-ccode="498">Moldova</option>
<option label="Monaco" value="MC" data-ccode="492">Monaco</option>
<option label="Mongolia" value="MN" data-ccode="496">Mongolia</option>
<option label="Montenegro" value="ME" data-ccode="499">Montenegro</option>
<option label="Montserrat" value="MS" data-ccode="500">Montserrat</option>
<option label="Mozambique" value="MZ" data-ccode="508">Mozambique</option>
<option label="Myanmar" value="MM" data-ccode="104">Myanmar</option>
<option label="Namibia" value="NA" data-ccode="516">Namibia</option>
<option label="Nauru" value="NR" data-ccode="520">Nauru</option>
<option label="Nepal" value="NP" data-ccode="524">Nepal</option>
<option label="Netherlands" value="NL" data-ccode="528">Netherlands</option>
<option label="New Caledonia" value="NC" data-ccode="540">New Caledonia</option>
<option label="New Zealand" value="NZ" data-ccode="554">New Zealand</option>
<option label="Nigeria" value="NU" data-ccode="570">Nigeria</option>
<option label="Norfolk Island" value="NF" data-ccode="574">Norfolk Island</option>
<option label="Northern Mariana Islands" value="MP" data-ccode="580">Northern Mariana Islands</option>
<option label="Norway" value="NO" data-ccode="578">Norway</option>
<option label="Palau" value="PW" data-ccode="585">Palau</option>
<option label="Palestinian Territory, Occupied" value="PS" data-ccode="275">Palestinian Territory, Occupied</option>
<option label="Panama" value="PA" data-ccode="591">Panama</option>
<option label="Papua New Guinea" value="PG" data-ccode="598">Papua New Guinea</option>
<option label="Paraguay" value="PY" data-ccode="600">Paraguay</option>
<option label="Peru" value="PE" data-ccode="604">Peru</option>
<option label="Pitcairn" value="PN" data-ccode="612">Pitcairn</option>
<option label="Poland" value="PL" data-ccode="616">Poland</option>
<option label="Portugal" value="PT" data-ccode="620">Portugal</option>
<option label="Puerto Rico" value="PR" data-ccode="630">Puerto Rico</option>
<option label="Qatar" value="QA" data-ccode="634">Qatar</option>
<option label="Reunion" value="RE" data-ccode="638">Reunion</option>
<option label="Romania" value="RO" data-ccode="642">Romania</option>
<option label="Rwanda" value="RW" data-ccode="646">Rwanda</option>
<option label="Saint Helena" value="SH" data-ccode="654">Saint Helena</option>
<option label="Saint Lucia" value="LC" data-ccode="662">Saint Lucia</option>
<option label="Saint Pierre and Miquelon" value="PM" data-ccode="666">Saint Pierre and Miquelon</option>
<option label="Saint Vincent and Grenadines" value="VC" data-ccode="670">Saint Vincent and Grenadines</option>
<option label="Saint-Barthelemy" value="BL" data-ccode="652">Saint-Barthelemy</option>
<option label="Saint-Martin (French part)" value="MF" data-ccode="663">Saint-Martin (French part)</option>
<option label="Samoa" value="WS" data-ccode="882">Samoa</option>
<option label="San Marino" value="SM" data-ccode="674">San Marino</option>
<option label="Sao Tome and Principe" value="ST" data-ccode="678">Sao Tome and Principe</option>
<option label="Saudi Arabia" value="SA" data-ccode="682">Saudi Arabia</option>
<option label="Senegal" value="SN" data-ccode="686">Senegal</option>
<option label="Serbia" value="RS" data-ccode="688">Serbia</option>
<option label="Seychelles" value="SC" data-ccode="690">Seychelles</option>
<option label="Sierra Leone" value="SL" data-ccode="694">Sierra Leone</option>
<option label="Singapore" value="SG" data-ccode="702">Singapore</option>
<option label="Sint Maarten (Dutch part)" value="SX" data-ccode="534">Sint Maarten (Dutch part)</option>
<option label="Slovenia" value="SI" data-ccode="705">Slovenia</option>
<option label="Solomon Islands" value="SB" data-ccode="090">Solomon Islands</option>
<option label="South Africa" value="ZA" data-ccode="710">South Africa</option>
<option label="South Georgia and the South Sandwich Islands" value="GS" data-ccode="239">South Georgia and the South Sandwich Islands</option>
<option label="Spain" value="ES" data-ccode="724">Spain</option>
<option label="Suriname *" value="SR" data-ccode="740">Suriname *</option>
<option label="Svalbard and Jan Mayen Islands" value="SJ" data-ccode="744">Svalbard and Jan Mayen Islands</option>
<option label="Swaziland" value="SZ" data-ccode="748">Swaziland</option>
<option label="Sweden" value="SE" data-ccode="752">Sweden</option>
<option label="Switzerland" value="CH" data-ccode="756">Switzerland</option>
<option label="Taiwan, Republic of China" value="TW" data-ccode="158">Taiwan, Republic of China</option>
<option label="Tajikistan" value="TJ" data-ccode="762">Tajikistan</option>
<option label="Tanzania *, United Republic of" value="TZ" data-ccode="834">Tanzania *, United Republic of</option>
<option label="Timor-Leste" value="TL" data-ccode="626">Timor-Leste</option>
<option label="Togo" value="TG" data-ccode="768">Togo</option>
<option label="Tokelau" value="TK" data-ccode="772">Tokelau</option>
<option label="Tonga" value="TO" data-ccode="776">Tonga</option>
<option label="Trinidad and Tobago" value="TT" data-ccode="780">Trinidad and Tobago</option>
<option label="Tunisia" value="TN" data-ccode="788">Tunisia</option>
<option label="Turkey" value="TR" data-ccode="792">Turkey</option>
<option label="Turkmenistan" value="TM" data-ccode="795">Turkmenistan</option>
<option label="Turks and Caicos Islands" value="TC" data-ccode="796">Turks and Caicos Islands</option>
<option label="Tuvalu" value="TV" data-ccode="798">Tuvalu</option>
<option label="Uganda" value="UG" data-ccode="800">Uganda</option>
<option label="Ukraine" value="UA" data-ccode="804">Ukraine</option>
<option label="United Arab Emirates" value="AE" data-ccode="784">United Arab Emirates</option>
<option label="United Kingdom" value="GB" data-ccode="826">United Kingdom</option>
<option label="United States" value="US" data-ccode="840">United States</option>
<option label="United States Minor Outlying Islands" value="UM" data-ccode="581">United States Minor Outlying Islands</option>
<option label="Uruguay" value="UY" data-ccode="858">Uruguay</option>
<option label="Uzbekistan" value="UZ" data-ccode="860">Uzbekistan</option>
<option label="Vanuatu" value="VU" data-ccode="548">Vanuatu</option>
<option label="Virgin Islands, US" value="VI" data-ccode="850">Virgin Islands, US</option>
<option label="Wallis and Futuna Islands" value="WF" data-ccode="876">Wallis and Futuna Islands</option>
<option label="Western Sahara" value="EH" data-ccode="732">Western Sahara</option>
<option label="Zambia" value="ZM" data-ccode="894">Zambia</option>
<option label="Country not found" value="ZM" data-ccode="894">Country not found<option>
</select>
    </div>
</div>
</div>
<script type="text/javascript">selectInList(document.getElementById('country'),'NG','US');</script>
<div id="j1_container_zip" class="j1_container_default">
<div class="form-group">
    <label class="sr-only" style="color:#ffffff">Zip/Postal Code:</label>
    <div class="input-group ">
        <div class="input-group-addon"><i class="material-icons"><img src="/common_tpls/images/icons/address.png"></i></div>
        <input type="text" id="zip" name="formdata[zip]" data-alert_name="Zip Code" autocomplete="postal-code" validate_type="zip" validate_min_length="1" validate_max_length="10" size="10" maxlength="10" class="form-control input-sm placeholder">
    </div>
</div>
</div>
<script type="text/javascript">$(function(){
$('#country').change();
});
$('#country').change(function(){
    if($(this).val() == 'US') {
        $('#zip').prop('type','tel');
    } else {
        $('#zip').prop('type','text');
    }
});</script>

                            <!-- original code ends here -->

                        

                                                <p id="login_set"  class="inputNote help-block" style="color:#ffffff">(Your login will be sent to this email address)</p>
                        <p id="age_verify" class="inputNote help-block hidden" style="color:#ffffff"><span>You must provide a valid form of age verification.</span> <span class="noCharge">Your account will not be charged!</span></p>
                        	                        		                        		<p id="terms" class="inputNote help-block" style="color:#ffffff; display: block">By proceeding, I agree to the <a target="_blank" href="https://nttlmnt.com/terms.php" style="color:#ffffff; text-decoration: underline;">Terms</a> and <a target="_blank" href="https://nttlmnt.com/privacy.php" style="color:#ffffff; text-decoration: underline;">Privacy Policy</a>, and certify that I am 18 years of age or older.</p>
                        		                        	                        
                        

                        <input type="hidden" name="formdata[product_id]" value="334114">

                        
                        <script type="text/javascript">
                            bmsg = "<div class=\"transitionBox\"><h3>Thank you for your order. Your verification has started.</h3><p>This can take a few minutes. Feel free to keep working in other tabs or apps, but do not close your browser until the process is complete. </p><p>Once your age and background are verified, you can login to view member profiles. </p><div class=\"text-center\"><div class=\"searching\">Searching Records <img src=\"/common_tpls/images/ajax-loader.gif\"></div></div></div>"                        </script>
                        <div id="btnSubmit">
                                                    	<button input id="nextBtn" type="submit"  class="btn btn-info btn-lg" > Get Free Access <span class="glyphicon glyphicon-arrow-right"></span></button>
                        </div>
                           
                          
                        
                        <!-- <p class="hide signin">Already have an account? <a href="">Sign in</a></p> -->
                        
                    </form>               
            
            	</div><!-- .panel-body -->
                
            </div><!-- .panel panel-default -->
            
        	
        </div><!-- .col-xs-12 -->
        
    </div><!-- .row centered-form" -->
    		
</div><!-- .container -->
<!-- J1 - END -->

	</div>

  <script>
      $(document).ready(function () {
          $('button').on('click', function(){
              window.parent.postMessage('buttonpressed', '*');
          });

          $('input').on('focus', function () {
              window.parent.postMessage('inputfocus', '*');
          });

          $('input').on('blur', function () {
              window.parent.postMessage('inputblur', '*');
          });
      });
  </script>


  <script>
  	pop_errors = true;
  			$(document).ready(function(){
						$('#jsCheck').addClass('jsCheckHide');
			$('#formbody').removeClass('jsCheckHide');
			
			$('#xsale_active').click(function(e) {
				if($(this).prop('xsale_state') == 1) {
					$(this).prop('checked',false);
					$(this).prop('xsale_state',0);
				} else {
					$(this).prop('checked',true);
					$(this).prop('xsale_state',1);
				}
			});

			if(1) {
				$('#xsale_active').click();
			}

						emsg = $('.error-text:visible').text();

			if(highlight_field != '') {
				validate_highlight($("#"+highlight_field), true);
			}

			if(emsg) {
				alert(emsg);
			}
			
			$('.error-text:visible').append(error_extra);


			$('.toolTip').click(function(e){
					e.preventDefault();
					// check if the toolinfo is already hidden (prevents wonky double click)
					if ($('#toolInfo').css('display') == 'none') {
						$('#toolInfo').css('display', 'inline'); // show the tooltip
						$('#ttscreen').css('display', 'block');
					}
				});


				$('#ttscreen').on('click', function(e){
					e.preventDefault();
					$('#toolInfo').css('display', 'none'); // hide the tooltip
					$('#ttscreen').css('display', 'none');
				});

			isSubmitting = false;
			$('.zone_J1 form, .zone_J2 form').submit(function(e){
				if(isSubmitting) {
					e.preventDefault();
					return;
				}

				isSubmitting = true;
				if(validate_form()) {
					if($('html').hasClass('zone_J2')) {
						FreezeScreen('Creating your Free Account...');
					} else {
						FreezeScreen('Creating your Free Account...');
					}
                    if (typeof create_secure3d_order === "function") {
                        e.preventDefault();
                        create_secure3d_order();
                    }
				} else {
										e.preventDefault();
					isSubmitting = false;
					var etop = $(".error-message").offset();
					if(typeof etop !== 'undefined') {
						scroll(0,etop.top);
					}
				}
			});

		});
	</script>
	<div id="ttscreen" style="display: none; position: fixed; left: 0; top: 0; z-index:9999; height: 100%; width: 100%;"></div>

	



<script type="text/javascript">
$(function() {
    $.get("/acct/trk/?rtid=1378980781");
});
</script>


<script src="/common_tpls/js/iframeResizer.contentWindow.min.js"></script>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"NRJS-53a3e8e5a523894a2ee","applicationID":"936088839","transactionName":"M1JTNkMACEoAVRcNDAoYZBBYTg9XBVMbShMMRw==","queueTime":0,"applicationTime":88,"atts":"HxVQQAsaG0Q=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>
