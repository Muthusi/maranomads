(window.webpackJsonp=window.webpackJsonp||[]).push([[4],{92:function(e,t,r){}}]),function(e){function t(t){for(var n,u,p=t[0],c=t[1],i=t[2],s=0,f=[];s<p.length;s++)u=p[s],Object.prototype.hasOwnProperty.call(o,u)&&o[u]&&f.push(o[u][0]),o[u]=0;for(n in c)Object.prototype.hasOwnProperty.call(c,n)&&(e[n]=c[n]);for(l&&l(t);f.length;)f.shift()();return a.push.apply(a,i||[]),r()}function r(){for(var e,t=0;t<a.length;t++){for(var r=a[t],n=!0,p=1;p<r.length;p++){var c=r[p];0!==o[c]&&(n=!1)}n&&(a.splice(t--,1),e=u(u.s=r[0]))}return e}var n={},o={1:0},a=[];function u(t){if(n[t])return n[t].exports;var r=n[t]={i:t,l:!1,exports:{}};return e[t].call(r.exports,r,r.exports,u),r.l=!0,r.exports}u.m=e,u.c=n,u.d=function(e,t,r){u.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},u.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},u.t=function(e,t){if(1&t&&(e=u(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(u.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)u.d(r,n,function(t){return e[t]}.bind(null,n));return r},u.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return u.d(t,"a",t),t},u.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},u.p="";var p=window.webpackJsonp=window.webpackJsonp||[],c=p.push.bind(p);p.push=t,p=p.slice();for(var i=0;i<p.length;i++)t(p[i]);var l=c;a.push([96,4]),r()}({0:function(e,t){e.exports=window.wp.element},14:function(e,t){e.exports=window.wp.blockEditor},18:function(e,t){function r(){return e.exports=r=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var n in r)Object.prototype.hasOwnProperty.call(r,n)&&(e[n]=r[n])}return e},e.exports.__esModule=!0,e.exports.default=e.exports,r.apply(this,arguments)}e.exports=r,e.exports.__esModule=!0,e.exports.default=e.exports},37:function(e,t){e.exports=window.wp.blocks},96:function(e,t,r){"use strict";r.r(t);var n=r(37),o=(r(92),r(0)),a=r(14);var u=r(18),p=r.n(u);Object(n.registerBlockType)("amazon-payments-advanced/log-out-banner",{edit:e=>Object(o.createElement)("div",Object(a.useBlockProps)()),save:e=>{let{attributes:t}=e;return Object(o.createElement)("div",p()({},a.useBlockProps.save(),{"data-block-name":"amazon-payments-advanced/log-out-banner"}))}})}});