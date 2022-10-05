(function () {
  'use strict';

  window.Vue=function(e){function t(e,t){const n=Object.create(null),o=e.split(",");for(let r=0;r<o.length;r++)n[o[r]]=!0;return t?e=>!!n[e.toLowerCase()]:e=>!!n[e]}const n=t("Infinity,undefined,NaN,isFinite,isNaN,parseFloat,parseInt,decodeURI,decodeURIComponent,encodeURI,encodeURIComponent,Math,Number,Date,Array,Object,Boolean,String,RegExp,Map,Set,JSON,Intl,BigInt"),o=t("itemscope,allowfullscreen,formnovalidate,ismap,nomodule,novalidate,readonly");function r(e){return !!e||""===e}function s(e){if(N(e)){const t={};for(let n=0;n<e.length;n++){const o=e[n],r=R(o)?c(o):s(o);if(r)for(const e in r)t[e]=r[e];}return t}return R(e)||P(e)?e:void 0}const i=/;(?![^(]*\))/g,l=/:(.+)/;function c(e){const t={};return e.split(i).forEach((e=>{if(e){const n=e.split(l);n.length>1&&(t[n[0].trim()]=n[1].trim());}})),t}function a(e){let t="";if(R(e))t=e;else if(N(e))for(let n=0;n<e.length;n++){const o=a(e[n]);o&&(t+=o+" ");}else if(P(e))for(const n in e)e[n]&&(t+=n+" ");return t.trim()}const u=t("html,body,base,head,link,meta,style,title,address,article,aside,footer,header,h1,h2,h3,h4,h5,h6,nav,section,div,dd,dl,dt,figcaption,figure,picture,hr,img,li,main,ol,p,pre,ul,a,b,abbr,bdi,bdo,br,cite,code,data,dfn,em,i,kbd,mark,q,rp,rt,ruby,s,samp,small,span,strong,sub,sup,time,u,var,wbr,area,audio,map,track,video,embed,object,param,source,canvas,script,noscript,del,ins,caption,col,colgroup,table,thead,tbody,td,th,tr,button,datalist,fieldset,form,input,label,legend,meter,optgroup,option,output,progress,select,textarea,details,dialog,menu,summary,template,blockquote,iframe,tfoot"),p=t("svg,animate,animateMotion,animateTransform,circle,clipPath,color-profile,defs,desc,discard,ellipse,feBlend,feColorMatrix,feComponentTransfer,feComposite,feConvolveMatrix,feDiffuseLighting,feDisplacementMap,feDistanceLight,feDropShadow,feFlood,feFuncA,feFuncB,feFuncG,feFuncR,feGaussianBlur,feImage,feMerge,feMergeNode,feMorphology,feOffset,fePointLight,feSpecularLighting,feSpotLight,feTile,feTurbulence,filter,foreignObject,g,hatch,hatchpath,image,line,linearGradient,marker,mask,mesh,meshgradient,meshpatch,meshrow,metadata,mpath,path,pattern,polygon,polyline,radialGradient,rect,set,solidcolor,stop,switch,symbol,text,textPath,title,tspan,unknown,use,view"),f=t("area,base,br,col,embed,hr,img,input,link,meta,param,source,track,wbr");function d(e,t){if(e===t)return !0;let n=O(e),o=O(t);if(n||o)return !(!n||!o)&&e.getTime()===t.getTime();if(n=A(e),o=A(t),n||o)return e===t;if(n=N(e),o=N(t),n||o)return !(!n||!o)&&function(e,t){if(e.length!==t.length)return !1;let n=!0;for(let o=0;n&&o<e.length;o++)n=d(e[o],t[o]);return n}(e,t);if(n=P(e),o=P(t),n||o){if(!n||!o)return !1;if(Object.keys(e).length!==Object.keys(t).length)return !1;for(const n in e){const o=e.hasOwnProperty(n),r=t.hasOwnProperty(n);if(o&&!r||!o&&r||!d(e[n],t[n]))return !1}}return String(e)===String(t)}function h(e,t){return e.findIndex((e=>d(e,t)))}const m=(e,t)=>t&&t.__v_isRef?m(e,t.value):E(t)?{[`Map(${t.size})`]:[...t.entries()].reduce(((e,[t,n])=>(e[`${t} =>`]=n,e)),{})}:$(t)?{[`Set(${t.size})`]:[...t.values()]}:!P(t)||N(t)||B(t)?t:String(t),g={},v=[],y=()=>{},b=()=>!1,_=/^on[^a-z]/,S=e=>_.test(e),x=e=>e.startsWith("onUpdate:"),C=Object.assign,k=(e,t)=>{const n=e.indexOf(t);n>-1&&e.splice(n,1);},w=Object.prototype.hasOwnProperty,T=(e,t)=>w.call(e,t),N=Array.isArray,E=e=>"[object Map]"===I(e),$=e=>"[object Set]"===I(e),O=e=>"[object Date]"===I(e),F=e=>"function"==typeof e,R=e=>"string"==typeof e,A=e=>"symbol"==typeof e,P=e=>null!==e&&"object"==typeof e,M=e=>P(e)&&F(e.then)&&F(e.catch),V=Object.prototype.toString,I=e=>V.call(e),B=e=>"[object Object]"===I(e),L=e=>R(e)&&"NaN"!==e&&"-"!==e[0]&&""+parseInt(e,10)===e,j=t(",key,ref,ref_for,ref_key,onVnodeBeforeMount,onVnodeMounted,onVnodeBeforeUpdate,onVnodeUpdated,onVnodeBeforeUnmount,onVnodeUnmounted"),U=t("bind,cloak,else-if,else,for,html,if,model,on,once,pre,show,slot,text,memo"),D=e=>{const t=Object.create(null);return n=>t[n]||(t[n]=e(n))},H=/-(\w)/g,W=D((e=>e.replace(H,((e,t)=>t?t.toUpperCase():"")))),z=/\B([A-Z])/g,K=D((e=>e.replace(z,"-$1").toLowerCase())),G=D((e=>e.charAt(0).toUpperCase()+e.slice(1))),q=D((e=>e?`on${G(e)}`:"")),J=(e,t)=>!Object.is(e,t),Z=(e,t)=>{for(let n=0;n<e.length;n++)e[n](t);},Y=(e,t,n)=>{Object.defineProperty(e,t,{configurable:!0,enumerable:!1,value:n});},Q=e=>{const t=parseFloat(e);return isNaN(t)?e:t};let X;let ee;class te{constructor(e=!1){this.active=!0,this.effects=[],this.cleanups=[],!e&&ee&&(this.parent=ee,this.index=(ee.scopes||(ee.scopes=[])).push(this)-1);}run(e){if(this.active){const t=ee;try{return ee=this,e()}finally{ee=t;}}}on(){ee=this;}off(){ee=this.parent;}stop(e){if(this.active){let t,n;for(t=0,n=this.effects.length;t<n;t++)this.effects[t].stop();for(t=0,n=this.cleanups.length;t<n;t++)this.cleanups[t]();if(this.scopes)for(t=0,n=this.scopes.length;t<n;t++)this.scopes[t].stop(!0);if(this.parent&&!e){const e=this.parent.scopes.pop();e&&e!==this&&(this.parent.scopes[this.index]=e,e.index=this.index);}this.active=!1;}}}function ne(e,t=ee){t&&t.active&&t.effects.push(e);}const oe=e=>{const t=new Set(e);return t.w=0,t.n=0,t},re=e=>(e.w&ce)>0,se=e=>(e.n&ce)>0,ie=new WeakMap;let le=0,ce=1;let ae;const ue=Symbol(""),pe=Symbol("");class fe{constructor(e,t=null,n){this.fn=e,this.scheduler=t,this.active=!0,this.deps=[],this.parent=void 0,ne(this,n);}run(){if(!this.active)return this.fn();let e=ae,t=he;for(;e;){if(e===this)return;e=e.parent;}try{return this.parent=ae,ae=this,he=!0,ce=1<<++le,le<=30?(({deps:e})=>{if(e.length)for(let t=0;t<e.length;t++)e[t].w|=ce;})(this):de(this),this.fn()}finally{le<=30&&(e=>{const{deps:t}=e;if(t.length){let n=0;for(let o=0;o<t.length;o++){const r=t[o];re(r)&&!se(r)?r.delete(e):t[n++]=r,r.w&=~ce,r.n&=~ce;}t.length=n;}})(this),ce=1<<--le,ae=this.parent,he=t,this.parent=void 0,this.deferStop&&this.stop();}}stop(){ae===this?this.deferStop=!0:this.active&&(de(this),this.onStop&&this.onStop(),this.active=!1);}}function de(e){const{deps:t}=e;if(t.length){for(let n=0;n<t.length;n++)t[n].delete(e);t.length=0;}}let he=!0;const me=[];function ge(){me.push(he),he=!1;}function ve(){const e=me.pop();he=void 0===e||e;}function ye(e,t,n){if(he&&ae){let t=ie.get(e);t||ie.set(e,t=new Map);let o=t.get(n);o||t.set(n,o=oe()),be(o);}}function be(e,t){let n=!1;le<=30?se(e)||(e.n|=ce,n=!re(e)):n=!e.has(ae),n&&(e.add(ae),ae.deps.push(e));}function _e(e,t,n,o,r,s){const i=ie.get(e);if(!i)return;let l=[];if("clear"===t)l=[...i.values()];else if("length"===n&&N(e))i.forEach(((e,t)=>{("length"===t||t>=o)&&l.push(e);}));else switch(void 0!==n&&l.push(i.get(n)),t){case"add":N(e)?L(n)&&l.push(i.get("length")):(l.push(i.get(ue)),E(e)&&l.push(i.get(pe)));break;case"delete":N(e)||(l.push(i.get(ue)),E(e)&&l.push(i.get(pe)));break;case"set":E(e)&&l.push(i.get(ue));}if(1===l.length)l[0]&&Se(l[0]);else {const e=[];for(const t of l)t&&e.push(...t);Se(oe(e));}}function Se(e,t){const n=N(e)?e:[...e];for(const o of n)o.computed&&xe(o);for(const o of n)o.computed||xe(o);}function xe(e,t){(e!==ae||e.allowRecurse)&&(e.scheduler?e.scheduler():e.run());}const Ce=t("__proto__,__v_isRef,__isVue"),ke=new Set(Object.getOwnPropertyNames(Symbol).filter((e=>"arguments"!==e&&"caller"!==e)).map((e=>Symbol[e])).filter(A)),we=Fe(),Te=Fe(!1,!0),Ne=Fe(!0),Ee=Fe(!0,!0),$e=Oe();function Oe(){const e={};return ["includes","indexOf","lastIndexOf"].forEach((t=>{e[t]=function(...e){const n=yt(this);for(let t=0,r=this.length;t<r;t++)ye(n,0,t+"");const o=n[t](...e);return -1===o||!1===o?n[t](...e.map(yt)):o};})),["push","pop","shift","unshift","splice"].forEach((t=>{e[t]=function(...e){ge();const n=yt(this)[t].apply(this,e);return ve(),n};})),e}function Fe(e=!1,t=!1){return function(n,o,r){if("__v_isReactive"===o)return !e;if("__v_isReadonly"===o)return e;if("__v_isShallow"===o)return t;if("__v_raw"===o&&r===(e?t?ct:lt:t?it:st).get(n))return n;const s=N(n);if(!e&&s&&T($e,o))return Reflect.get($e,o,r);const i=Reflect.get(n,o,r);return (A(o)?ke.has(o):Ce(o))?i:(e||ye(n,0,o),t?i:kt(i)?s&&L(o)?i:i.value:P(i)?e?ft(i):ut(i):i)}}function Re(e=!1){return function(t,n,o,r){let s=t[n];if(mt(s)&&kt(s)&&!kt(o))return !1;if(!e&&(gt(o)||mt(o)||(s=yt(s),o=yt(o)),!N(t)&&kt(s)&&!kt(o)))return s.value=o,!0;const i=N(t)&&L(n)?Number(n)<t.length:T(t,n),l=Reflect.set(t,n,o,r);return t===yt(r)&&(i?J(o,s)&&_e(t,"set",n,o):_e(t,"add",n,o)),l}}const Ae={get:we,set:Re(),deleteProperty:function(e,t){const n=T(e,t),o=Reflect.deleteProperty(e,t);return o&&n&&_e(e,"delete",t,void 0),o},has:function(e,t){const n=Reflect.has(e,t);return A(t)&&ke.has(t)||ye(e,0,t),n},ownKeys:function(e){return ye(e,0,N(e)?"length":ue),Reflect.ownKeys(e)}},Pe={get:Ne,set:(e,t)=>!0,deleteProperty:(e,t)=>!0},Me=C({},Ae,{get:Te,set:Re(!0)}),Ve=C({},Pe,{get:Ee}),Ie=e=>e,Be=e=>Reflect.getPrototypeOf(e);function Le(e,t,n=!1,o=!1){const r=yt(e=e.__v_raw),s=yt(t);n||(t!==s&&ye(r,0,t),ye(r,0,s));const{has:i}=Be(r),l=o?Ie:n?St:_t;return i.call(r,t)?l(e.get(t)):i.call(r,s)?l(e.get(s)):void(e!==r&&e.get(t))}function je(e,t=!1){const n=this.__v_raw,o=yt(n),r=yt(e);return t||(e!==r&&ye(o,0,e),ye(o,0,r)),e===r?n.has(e):n.has(e)||n.has(r)}function Ue(e,t=!1){return e=e.__v_raw,!t&&ye(yt(e),0,ue),Reflect.get(e,"size",e)}function De(e){e=yt(e);const t=yt(this);return Be(t).has.call(t,e)||(t.add(e),_e(t,"add",e,e)),this}function He(e,t){t=yt(t);const n=yt(this),{has:o,get:r}=Be(n);let s=o.call(n,e);s||(e=yt(e),s=o.call(n,e));const i=r.call(n,e);return n.set(e,t),s?J(t,i)&&_e(n,"set",e,t):_e(n,"add",e,t),this}function We(e){const t=yt(this),{has:n,get:o}=Be(t);let r=n.call(t,e);r||(e=yt(e),r=n.call(t,e)),o&&o.call(t,e);const s=t.delete(e);return r&&_e(t,"delete",e,void 0),s}function ze(){const e=yt(this),t=0!==e.size,n=e.clear();return t&&_e(e,"clear",void 0,void 0),n}function Ke(e,t){return function(n,o){const r=this,s=r.__v_raw,i=yt(s),l=t?Ie:e?St:_t;return !e&&ye(i,0,ue),s.forEach(((e,t)=>n.call(o,l(e),l(t),r)))}}function Ge(e,t,n){return function(...o){const r=this.__v_raw,s=yt(r),i=E(s),l="entries"===e||e===Symbol.iterator&&i,c="keys"===e&&i,a=r[e](...o),u=n?Ie:t?St:_t;return !t&&ye(s,0,c?pe:ue),{next(){const{value:e,done:t}=a.next();return t?{value:e,done:t}:{value:l?[u(e[0]),u(e[1])]:u(e),done:t}},[Symbol.iterator](){return this}}}}function qe(e){return function(...t){return "delete"!==e&&this}}function Je(){const e={get(e){return Le(this,e)},get size(){return Ue(this)},has:je,add:De,set:He,delete:We,clear:ze,forEach:Ke(!1,!1)},t={get(e){return Le(this,e,!1,!0)},get size(){return Ue(this)},has:je,add:De,set:He,delete:We,clear:ze,forEach:Ke(!1,!0)},n={get(e){return Le(this,e,!0)},get size(){return Ue(this,!0)},has(e){return je.call(this,e,!0)},add:qe("add"),set:qe("set"),delete:qe("delete"),clear:qe("clear"),forEach:Ke(!0,!1)},o={get(e){return Le(this,e,!0,!0)},get size(){return Ue(this,!0)},has(e){return je.call(this,e,!0)},add:qe("add"),set:qe("set"),delete:qe("delete"),clear:qe("clear"),forEach:Ke(!0,!0)};return ["keys","values","entries",Symbol.iterator].forEach((r=>{e[r]=Ge(r,!1,!1),n[r]=Ge(r,!0,!1),t[r]=Ge(r,!1,!0),o[r]=Ge(r,!0,!0);})),[e,n,t,o]}const[Ze,Ye,Qe,Xe]=Je();function et(e,t){const n=t?e?Xe:Qe:e?Ye:Ze;return (t,o,r)=>"__v_isReactive"===o?!e:"__v_isReadonly"===o?e:"__v_raw"===o?t:Reflect.get(T(n,o)&&o in t?n:t,o,r)}const tt={get:et(!1,!1)},nt={get:et(!1,!0)},ot={get:et(!0,!1)},rt={get:et(!0,!0)},st=new WeakMap,it=new WeakMap,lt=new WeakMap,ct=new WeakMap;function at(e){return e.__v_skip||!Object.isExtensible(e)?0:function(e){switch(e){case"Object":case"Array":return 1;case"Map":case"Set":case"WeakMap":case"WeakSet":return 2;default:return 0}}((e=>I(e).slice(8,-1))(e))}function ut(e){return mt(e)?e:dt(e,!1,Ae,tt,st)}function pt(e){return dt(e,!1,Me,nt,it)}function ft(e){return dt(e,!0,Pe,ot,lt)}function dt(e,t,n,o,r){if(!P(e))return e;if(e.__v_raw&&(!t||!e.__v_isReactive))return e;const s=r.get(e);if(s)return s;const i=at(e);if(0===i)return e;const l=new Proxy(e,2===i?o:n);return r.set(e,l),l}function ht(e){return mt(e)?ht(e.__v_raw):!(!e||!e.__v_isReactive)}function mt(e){return !(!e||!e.__v_isReadonly)}function gt(e){return !(!e||!e.__v_isShallow)}function vt(e){return ht(e)||mt(e)}function yt(e){const t=e&&e.__v_raw;return t?yt(t):e}function bt(e){return Y(e,"__v_skip",!0),e}const _t=e=>P(e)?ut(e):e,St=e=>P(e)?ft(e):e;function xt(e){he&&ae&&be((e=yt(e)).dep||(e.dep=oe()));}function Ct(e,t){(e=yt(e)).dep&&Se(e.dep);}function kt(e){return !(!e||!0!==e.__v_isRef)}function wt(e){return Tt(e,!1)}function Tt(e,t){return kt(e)?e:new Nt(e,t)}class Nt{constructor(e,t){this.__v_isShallow=t,this.dep=void 0,this.__v_isRef=!0,this._rawValue=t?e:yt(e),this._value=t?e:_t(e);}get value(){return xt(this),this._value}set value(e){const t=this.__v_isShallow||gt(e)||mt(e);e=t?e:yt(e),J(e,this._rawValue)&&(this._rawValue=e,this._value=t?e:_t(e),Ct(this));}}function Et(e){return kt(e)?e.value:e}const $t={get:(e,t,n)=>Et(Reflect.get(e,t,n)),set:(e,t,n,o)=>{const r=e[t];return kt(r)&&!kt(n)?(r.value=n,!0):Reflect.set(e,t,n,o)}};function Ot(e){return ht(e)?e:new Proxy(e,$t)}class Ft{constructor(e){this.dep=void 0,this.__v_isRef=!0;const{get:t,set:n}=e((()=>xt(this)),(()=>Ct(this)));this._get=t,this._set=n;}get value(){return this._get()}set value(e){this._set(e);}}class Rt{constructor(e,t,n){this._object=e,this._key=t,this._defaultValue=n,this.__v_isRef=!0;}get value(){const e=this._object[this._key];return void 0===e?this._defaultValue:e}set value(e){this._object[this._key]=e;}}function At(e,t,n){const o=e[t];return kt(o)?o:new Rt(e,t,n)}var Pt;class Mt{constructor(e,t,n,o){this._setter=t,this.dep=void 0,this.__v_isRef=!0,this[Pt]=!1,this._dirty=!0,this.effect=new fe(e,(()=>{this._dirty||(this._dirty=!0,Ct(this));})),this.effect.computed=this,this.effect.active=this._cacheable=!o,this.__v_isReadonly=n;}get value(){const e=yt(this);return xt(e),!e._dirty&&e._cacheable||(e._dirty=!1,e._value=e.effect.run()),e._value}set value(e){this._setter(e);}}Pt="__v_isReadonly";const Vt=[];function It(e){const t=[],n=Object.keys(e);return n.slice(0,3).forEach((n=>{t.push(...Bt(n,e[n]));})),n.length>3&&t.push(" ..."),t}function Bt(e,t,n){return R(t)?(t=JSON.stringify(t),n?t:[`${e}=${t}`]):"number"==typeof t||"boolean"==typeof t||null==t?n?t:[`${e}=${t}`]:kt(t)?(t=Bt(e,yt(t.value),!0),n?t:[`${e}=Ref<`,t,">"]):F(t)?[`${e}=fn${t.name?`<${t.name}>`:""}`]:(t=yt(t),n?t:[`${e}=`,t])}function Lt(e,t,n,o){let r;try{r=o?e(...o):e();}catch(s){Ut(s,t,n);}return r}function jt(e,t,n,o){if(F(e)){const r=Lt(e,t,n,o);return r&&M(r)&&r.catch((e=>{Ut(e,t,n);})),r}const r=[];for(let s=0;s<e.length;s++)r.push(jt(e[s],t,n,o));return r}function Ut(e,t,n,o=!0){if(t){let o=t.parent;const r=t.proxy,s=n;for(;o;){const t=o.ec;if(t)for(let n=0;n<t.length;n++)if(!1===t[n](e,r,s))return;o=o.parent;}const i=t.appContext.config.errorHandler;if(i)return void Lt(i,null,10,[e,r,s])}!function(e,t,n,o=!0){console.error(e);}(e,0,0,o);}let Dt=!1,Ht=!1;const Wt=[];let zt=0;const Kt=[];let Gt=null,qt=0;const Jt=Promise.resolve();let Zt=null;function Yt(e){const t=Zt||Jt;return e?t.then(this?e.bind(this):e):t}function Qt(e){Wt.length&&Wt.includes(e,Dt&&e.allowRecurse?zt+1:zt)||(null==e.id?Wt.push(e):Wt.splice(function(e){let t=zt+1,n=Wt.length;for(;t<n;){const o=t+n>>>1;on(Wt[o])<e?t=o+1:n=o;}return t}(e.id),0,e),Xt());}function Xt(){Dt||Ht||(Ht=!0,Zt=Jt.then(sn));}function en(e){N(e)?Kt.push(...e):Gt&&Gt.includes(e,e.allowRecurse?qt+1:qt)||Kt.push(e),Xt();}function tn(e,t=(Dt?zt+1:0)){for(;t<Wt.length;t++){const e=Wt[t];e&&e.pre&&(Wt.splice(t,1),t--,e());}}function nn(e){if(Kt.length){const e=[...new Set(Kt)];if(Kt.length=0,Gt)return void Gt.push(...e);for(Gt=e,Gt.sort(((e,t)=>on(e)-on(t))),qt=0;qt<Gt.length;qt++)Gt[qt]();Gt=null,qt=0;}}const on=e=>null==e.id?1/0:e.id,rn=(e,t)=>{const n=on(e)-on(t);if(0===n){if(e.pre&&!t.pre)return -1;if(t.pre&&!e.pre)return 1}return n};function sn(e){Ht=!1,Dt=!0,Wt.sort(rn);try{for(zt=0;zt<Wt.length;zt++){const e=Wt[zt];e&&!1!==e.active&&Lt(e,null,14);}}finally{zt=0,Wt.length=0,nn(),Dt=!1,Zt=null,(Wt.length||Kt.length)&&sn();}}let ln=[];function cn(e,t,...n){if(e.isUnmounted)return;const o=e.vnode.props||g;let r=n;const s=t.startsWith("update:"),i=s&&t.slice(7);if(i&&i in o){const e=`${"modelValue"===i?"model":i}Modifiers`,{number:t,trim:s}=o[e]||g;s&&(r=n.map((e=>e.trim()))),t&&(r=n.map(Q));}let l,c=o[l=q(t)]||o[l=q(W(t))];!c&&s&&(c=o[l=q(K(t))]),c&&jt(c,e,6,r);const a=o[l+"Once"];if(a){if(e.emitted){if(e.emitted[l])return}else e.emitted={};e.emitted[l]=!0,jt(a,e,6,r);}}function an(e,t,n=!1){const o=t.emitsCache,r=o.get(e);if(void 0!==r)return r;const s=e.emits;let i={},l=!1;if(!F(e)){const o=e=>{const n=an(e,t,!0);n&&(l=!0,C(i,n));};!n&&t.mixins.length&&t.mixins.forEach(o),e.extends&&o(e.extends),e.mixins&&e.mixins.forEach(o);}return s||l?(N(s)?s.forEach((e=>i[e]=null)):C(i,s),P(e)&&o.set(e,i),i):(P(e)&&o.set(e,null),null)}function un(e,t){return !(!e||!S(t))&&(t=t.slice(2).replace(/Once$/,""),T(e,t[0].toLowerCase()+t.slice(1))||T(e,K(t))||T(e,t))}let pn=null,fn=null;function dn(e){const t=pn;return pn=e,fn=e&&e.type.__scopeId||null,t}function hn(e,t=pn,n){if(!t)return e;if(e._n)return e;const o=(...n)=>{o._d&&Cr(-1);const r=dn(t),s=e(...n);return dn(r),o._d&&Cr(1),s};return o._n=!0,o._c=!0,o._d=!0,o}function mn(e){const{type:t,vnode:n,proxy:o,withProxy:r,props:s,propsOptions:[i],slots:l,attrs:c,emit:a,render:u,renderCache:p,data:f,setupState:d,ctx:h,inheritAttrs:m}=e;let g,v;const y=dn(e);try{if(4&n.shapeFlag){const e=r||o;g=Vr(u.call(e,e,p,s,d,f,h)),v=c;}else {const e=t;0,g=Vr(e(s,e.length>1?{attrs:c,slots:l,emit:a}:null)),v=t.props?c:gn(c);}}catch(_){yr.length=0,Ut(_,e,1),g=Rr(gr);}let b=g;if(v&&!1!==m){const e=Object.keys(v),{shapeFlag:t}=b;e.length&&7&t&&(i&&e.some(x)&&(v=vn(v,i)),b=Pr(b,v));}return n.dirs&&(b=Pr(b),b.dirs=b.dirs?b.dirs.concat(n.dirs):n.dirs),n.transition&&(b.transition=n.transition),g=b,dn(y),g}const gn=e=>{let t;for(const n in e)("class"===n||"style"===n||S(n))&&((t||(t={}))[n]=e[n]);return t},vn=(e,t)=>{const n={};for(const o in e)x(o)&&o.slice(9)in t||(n[o]=e[o]);return n};function yn(e,t,n){const o=Object.keys(t);if(o.length!==Object.keys(e).length)return !0;for(let r=0;r<o.length;r++){const s=o[r];if(t[s]!==e[s]&&!un(n,s))return !0}return !1}function bn({vnode:e,parent:t},n){for(;t&&t.subTree===e;)(e=t.vnode).el=n,t=t.parent;}const _n=e=>e.__isSuspense,Sn={name:"Suspense",__isSuspense:!0,process(e,t,n,o,r,s,i,l,c,a){null==e?function(e,t,n,o,r,s,i,l,c){const{p:a,o:{createElement:u}}=c,p=u("div"),f=e.suspense=Cn(e,r,o,t,p,n,s,i,l,c);a(null,f.pendingBranch=e.ssContent,p,null,o,f,s,i),f.deps>0?(xn(e,"onPending"),xn(e,"onFallback"),a(null,e.ssFallback,t,n,o,null,s,i),Tn(f,e.ssFallback)):f.resolve();}(t,n,o,r,s,i,l,c,a):function(e,t,n,o,r,s,i,l,{p:c,um:a,o:{createElement:u}}){const p=t.suspense=e.suspense;p.vnode=t,t.el=e.el;const f=t.ssContent,d=t.ssFallback,{activeBranch:h,pendingBranch:m,isInFallback:g,isHydrating:v}=p;if(m)p.pendingBranch=f,Nr(f,m)?(c(m,f,p.hiddenContainer,null,r,p,s,i,l),p.deps<=0?p.resolve():g&&(c(h,d,n,o,r,null,s,i,l),Tn(p,d))):(p.pendingId++,v?(p.isHydrating=!1,p.activeBranch=m):a(m,r,p),p.deps=0,p.effects.length=0,p.hiddenContainer=u("div"),g?(c(null,f,p.hiddenContainer,null,r,p,s,i,l),p.deps<=0?p.resolve():(c(h,d,n,o,r,null,s,i,l),Tn(p,d))):h&&Nr(f,h)?(c(h,f,n,o,r,p,s,i,l),p.resolve(!0)):(c(null,f,p.hiddenContainer,null,r,p,s,i,l),p.deps<=0&&p.resolve()));else if(h&&Nr(f,h))c(h,f,n,o,r,p,s,i,l),Tn(p,f);else if(xn(t,"onPending"),p.pendingBranch=f,p.pendingId++,c(null,f,p.hiddenContainer,null,r,p,s,i,l),p.deps<=0)p.resolve();else {const{timeout:e,pendingId:t}=p;e>0?setTimeout((()=>{p.pendingId===t&&p.fallback(d);}),e):0===e&&p.fallback(d);}}(e,t,n,o,r,i,l,c,a);},hydrate:function(e,t,n,o,r,s,i,l,c){const a=t.suspense=Cn(t,o,n,e.parentNode,document.createElement("div"),null,r,s,i,l,!0),u=c(e,a.pendingBranch=t.ssContent,n,a,s,i);0===a.deps&&a.resolve();return u},create:Cn,normalize:function(e){const{shapeFlag:t,children:n}=e,o=32&t;e.ssContent=kn(o?n.default:n),e.ssFallback=o?kn(n.fallback):Rr(gr);}};function xn(e,t){const n=e.props&&e.props[t];F(n)&&n();}function Cn(e,t,n,o,r,s,i,l,c,a,u=!1){const{p:p,m:f,um:d,n:h,o:{parentNode:m,remove:g}}=a,v=Q(e.props&&e.props.timeout),y={vnode:e,parent:t,parentComponent:n,isSVG:i,container:o,hiddenContainer:r,anchor:s,deps:0,pendingId:0,timeout:"number"==typeof v?v:-1,activeBranch:null,pendingBranch:null,isInFallback:!0,isHydrating:u,isUnmounted:!1,effects:[],resolve(e=!1){const{vnode:t,activeBranch:n,pendingBranch:o,pendingId:r,effects:s,parentComponent:i,container:l}=y;if(y.isHydrating)y.isHydrating=!1;else if(!e){const e=n&&o.transition&&"out-in"===o.transition.mode;e&&(n.transition.afterLeave=()=>{r===y.pendingId&&f(o,l,t,0);});let{anchor:t}=y;n&&(t=h(n),d(n,i,y,!0)),e||f(o,l,t,0);}Tn(y,o),y.pendingBranch=null,y.isInFallback=!1;let c=y.parent,a=!1;for(;c;){if(c.pendingBranch){c.effects.push(...s),a=!0;break}c=c.parent;}a||en(s),y.effects=[],xn(t,"onResolve");},fallback(e){if(!y.pendingBranch)return;const{vnode:t,activeBranch:n,parentComponent:o,container:r,isSVG:s}=y;xn(t,"onFallback");const i=h(n),a=()=>{y.isInFallback&&(p(null,e,r,i,o,null,s,l,c),Tn(y,e));},u=e.transition&&"out-in"===e.transition.mode;u&&(n.transition.afterLeave=a),y.isInFallback=!0,d(n,o,null,!0),u||a();},move(e,t,n){y.activeBranch&&f(y.activeBranch,e,t,n),y.container=e;},next:()=>y.activeBranch&&h(y.activeBranch),registerDep(e,t){const n=!!y.pendingBranch;n&&y.deps++;const o=e.vnode.el;e.asyncDep.catch((t=>{Ut(t,e,0);})).then((r=>{if(e.isUnmounted||y.isUnmounted||y.pendingId!==e.suspenseId)return;e.asyncResolved=!0;const{vnode:s}=e;Yr(e,r,!1),o&&(s.el=o);const l=!o&&e.subTree.el;t(e,s,m(o||e.subTree.el),o?null:h(e.subTree),y,i,c),l&&g(l),bn(e,s.el),n&&0==--y.deps&&y.resolve();}));},unmount(e,t){y.isUnmounted=!0,y.activeBranch&&d(y.activeBranch,n,e,t),y.pendingBranch&&d(y.pendingBranch,n,e,t);}};return y}function kn(e){let t;if(F(e)){const n=xr&&e._c;n&&(e._d=!1,_r()),e=e(),n&&(e._d=!0,t=br,Sr());}if(N(e)){const t=function(e){let t;for(let n=0;n<e.length;n++){const o=e[n];if(!Tr(o))return;if(o.type!==gr||"v-if"===o.children){if(t)return;t=o;}}return t}(e);e=t;}return e=Vr(e),t&&!e.dynamicChildren&&(e.dynamicChildren=t.filter((t=>t!==e))),e}function wn(e,t){t&&t.pendingBranch?N(e)?t.effects.push(...e):t.effects.push(e):en(e);}function Tn(e,t){e.activeBranch=t;const{vnode:n,parentComponent:o}=e,r=n.el=t.el;o&&o.subTree===n&&(o.vnode.el=r,bn(o,r));}function Nn(e,t){if(Hr){let n=Hr.provides;const o=Hr.parent&&Hr.parent.provides;o===n&&(n=Hr.provides=Object.create(o)),n[e]=t;}}function En(e,t,n=!1){const o=Hr||pn;if(o){const r=null==o.parent?o.vnode.appContext&&o.vnode.appContext.provides:o.parent.provides;if(r&&e in r)return r[e];if(arguments.length>1)return n&&F(t)?t.call(o.proxy):t}}function $n(e,t){return Rn(e,null,{flush:"post"})}const On={};function Fn(e,t,n){return Rn(e,t,n)}function Rn(e,t,{immediate:n,deep:o,flush:r}=g){const s=Hr;let i,l,c=!1,a=!1;if(kt(e)?(i=()=>e.value,c=gt(e)):ht(e)?(i=()=>e,o=!0):N(e)?(a=!0,c=e.some((e=>ht(e)||gt(e))),i=()=>e.map((e=>kt(e)?e.value:ht(e)?Mn(e):F(e)?Lt(e,s,2):void 0))):i=F(e)?t?()=>Lt(e,s,2):()=>{if(!s||!s.isUnmounted)return l&&l(),jt(e,s,3,[u])}:y,t&&o){const e=i;i=()=>Mn(e());}let u=e=>{l=h.onStop=()=>{Lt(e,s,4);};},p=a?[]:On;const f=()=>{if(h.active)if(t){const e=h.run();(o||c||(a?e.some(((e,t)=>J(e,p[t]))):J(e,p)))&&(l&&l(),jt(t,s,3,[e,p===On?void 0:p,u]),p=e);}else h.run();};let d;f.allowRecurse=!!t,"sync"===r?d=f:"post"===r?d=()=>or(f,s&&s.suspense):(f.pre=!0,s&&(f.id=s.uid),d=()=>Qt(f));const h=new fe(i,d);return t?n?f():p=h.run():"post"===r?or(h.run.bind(h),s&&s.suspense):h.run(),()=>{h.stop(),s&&s.scope&&k(s.scope.effects,h);}}function An(e,t,n){const o=this.proxy,r=R(e)?e.includes(".")?Pn(o,e):()=>o[e]:e.bind(o,o);let s;F(t)?s=t:(s=t.handler,n=t);const i=Hr;zr(this);const l=Rn(r,s.bind(o),n);return i?zr(i):Kr(),l}function Pn(e,t){const n=t.split(".");return ()=>{let t=e;for(let e=0;e<n.length&&t;e++)t=t[n[e]];return t}}function Mn(e,t){if(!P(e)||e.__v_skip)return e;if((t=t||new Set).has(e))return e;if(t.add(e),kt(e))Mn(e.value,t);else if(N(e))for(let n=0;n<e.length;n++)Mn(e[n],t);else if($(e)||E(e))e.forEach((e=>{Mn(e,t);}));else if(B(e))for(const n in e)Mn(e[n],t);return e}function Vn(){const e={isMounted:!1,isLeaving:!1,isUnmounting:!1,leavingVNodes:new Map};return io((()=>{e.isMounted=!0;})),ao((()=>{e.isUnmounting=!0;})),e}const In=[Function,Array],Bn={name:"BaseTransition",props:{mode:String,appear:Boolean,persisted:Boolean,onBeforeEnter:In,onEnter:In,onAfterEnter:In,onEnterCancelled:In,onBeforeLeave:In,onLeave:In,onAfterLeave:In,onLeaveCancelled:In,onBeforeAppear:In,onAppear:In,onAfterAppear:In,onAppearCancelled:In},setup(e,{slots:t}){const n=Wr(),o=Vn();let r;return ()=>{const s=t.default&&Wn(t.default(),!0);if(!s||!s.length)return;let i=s[0];if(s.length>1)for(const e of s)if(e.type!==gr){i=e;break}const l=yt(e),{mode:c}=l;if(o.isLeaving)return Un(i);const a=Dn(i);if(!a)return Un(i);const u=jn(a,l,o,n);Hn(a,u);const p=n.subTree,f=p&&Dn(p);let d=!1;const{getTransitionKey:h}=a.type;if(h){const e=h();void 0===r?r=e:e!==r&&(r=e,d=!0);}if(f&&f.type!==gr&&(!Nr(a,f)||d)){const e=jn(f,l,o,n);if(Hn(f,e),"out-in"===c)return o.isLeaving=!0,e.afterLeave=()=>{o.isLeaving=!1,n.update();},Un(i);"in-out"===c&&a.type!==gr&&(e.delayLeave=(e,t,n)=>{Ln(o,f)[String(f.key)]=f,e._leaveCb=()=>{t(),e._leaveCb=void 0,delete u.delayedLeave;},u.delayedLeave=n;});}return i}}};function Ln(e,t){const{leavingVNodes:n}=e;let o=n.get(t.type);return o||(o=Object.create(null),n.set(t.type,o)),o}function jn(e,t,n,o){const{appear:r,mode:s,persisted:i=!1,onBeforeEnter:l,onEnter:c,onAfterEnter:a,onEnterCancelled:u,onBeforeLeave:p,onLeave:f,onAfterLeave:d,onLeaveCancelled:h,onBeforeAppear:m,onAppear:g,onAfterAppear:v,onAppearCancelled:y}=t,b=String(e.key),_=Ln(n,e),S=(e,t)=>{e&&jt(e,o,9,t);},x=(e,t)=>{const n=t[1];S(e,t),N(e)?e.every((e=>e.length<=1))&&n():e.length<=1&&n();},C={mode:s,persisted:i,beforeEnter(t){let o=l;if(!n.isMounted){if(!r)return;o=m||l;}t._leaveCb&&t._leaveCb(!0);const s=_[b];s&&Nr(e,s)&&s.el._leaveCb&&s.el._leaveCb(),S(o,[t]);},enter(e){let t=c,o=a,s=u;if(!n.isMounted){if(!r)return;t=g||c,o=v||a,s=y||u;}let i=!1;const l=e._enterCb=t=>{i||(i=!0,S(t?s:o,[e]),C.delayedLeave&&C.delayedLeave(),e._enterCb=void 0);};t?x(t,[e,l]):l();},leave(t,o){const r=String(e.key);if(t._enterCb&&t._enterCb(!0),n.isUnmounting)return o();S(p,[t]);let s=!1;const i=t._leaveCb=n=>{s||(s=!0,o(),S(n?h:d,[t]),t._leaveCb=void 0,_[r]===e&&delete _[r]);};_[r]=e,f?x(f,[t,i]):i();},clone:e=>jn(e,t,n,o)};return C}function Un(e){if(qn(e))return (e=Pr(e)).children=null,e}function Dn(e){return qn(e)?e.children?e.children[0]:void 0:e}function Hn(e,t){6&e.shapeFlag&&e.component?Hn(e.component.subTree,t):128&e.shapeFlag?(e.ssContent.transition=t.clone(e.ssContent),e.ssFallback.transition=t.clone(e.ssFallback)):e.transition=t;}function Wn(e,t=!1,n){let o=[],r=0;for(let s=0;s<e.length;s++){let i=e[s];const l=null==n?i.key:String(n)+String(null!=i.key?i.key:s);i.type===hr?(128&i.patchFlag&&r++,o=o.concat(Wn(i.children,t,l))):(t||i.type!==gr)&&o.push(null!=l?Pr(i,{key:l}):i);}if(r>1)for(let s=0;s<o.length;s++)o[s].patchFlag=-2;return o}function zn(e){return F(e)?{setup:e,name:e.name}:e}const Kn=e=>!!e.type.__asyncLoader;function Gn(e,{vnode:{ref:t,props:n,children:o}}){const r=Rr(e,n,o);return r.ref=t,r}const qn=e=>e.type.__isKeepAlive,Jn={name:"KeepAlive",__isKeepAlive:!0,props:{include:[String,RegExp,Array],exclude:[String,RegExp,Array],max:[String,Number]},setup(e,{slots:t}){const n=Wr(),o=n.ctx,r=new Map,s=new Set;let i=null;const l=n.suspense,{renderer:{p:c,m:a,um:u,o:{createElement:p}}}=o,f=p("div");function d(e){to(e),u(e,n,l,!0);}function h(e){r.forEach(((t,n)=>{const o=os(t.type);!o||e&&e(o)||m(n);}));}function m(e){const t=r.get(e);i&&t.type===i.type?i&&to(i):d(t),r.delete(e),s.delete(e);}o.activate=(e,t,n,o,r)=>{const s=e.component;a(e,t,n,0,l),c(s.vnode,e,t,n,s,l,o,e.slotScopeIds,r),or((()=>{s.isDeactivated=!1,s.a&&Z(s.a);const t=e.props&&e.props.onVnodeMounted;t&&jr(t,s.parent,e);}),l);},o.deactivate=e=>{const t=e.component;a(e,f,null,1,l),or((()=>{t.da&&Z(t.da);const n=e.props&&e.props.onVnodeUnmounted;n&&jr(n,t.parent,e),t.isDeactivated=!0;}),l);},Fn((()=>[e.include,e.exclude]),(([e,t])=>{e&&h((t=>Zn(e,t))),t&&h((e=>!Zn(t,e)));}),{flush:"post",deep:!0});let g=null;const v=()=>{null!=g&&r.set(g,no(n.subTree));};return io(v),co(v),ao((()=>{r.forEach((e=>{const{subTree:t,suspense:o}=n,r=no(t);if(e.type!==r.type)d(e);else {to(r);const e=r.component.da;e&&or(e,o);}}));})),()=>{if(g=null,!t.default)return null;const n=t.default(),o=n[0];if(n.length>1)return i=null,n;if(!(Tr(o)&&(4&o.shapeFlag||128&o.shapeFlag)))return i=null,o;let l=no(o);const c=l.type,a=os(Kn(l)?l.type.__asyncResolved||{}:c),{include:u,exclude:p,max:f}=e;if(u&&(!a||!Zn(u,a))||p&&a&&Zn(p,a))return i=l,o;const d=null==l.key?c:l.key,h=r.get(d);return l.el&&(l=Pr(l),128&o.shapeFlag&&(o.ssContent=l)),g=d,h?(l.el=h.el,l.component=h.component,l.transition&&Hn(l,l.transition),l.shapeFlag|=512,s.delete(d),s.add(d)):(s.add(d),f&&s.size>parseInt(f,10)&&m(s.values().next().value)),l.shapeFlag|=256,i=l,_n(o.type)?o:l}}};function Zn(e,t){return N(e)?e.some((e=>Zn(e,t))):R(e)?e.split(",").includes(t):!!e.test&&e.test(t)}function Yn(e,t){Xn(e,"a",t);}function Qn(e,t){Xn(e,"da",t);}function Xn(e,t,n=Hr){const o=e.__wdc||(e.__wdc=()=>{let t=n;for(;t;){if(t.isDeactivated)return;t=t.parent;}return e()});if(oo(t,o,n),n){let e=n.parent;for(;e&&e.parent;)qn(e.parent.vnode)&&eo(o,t,n,e),e=e.parent;}}function eo(e,t,n,o){const r=oo(t,e,o,!0);uo((()=>{k(o[t],r);}),n);}function to(e){let t=e.shapeFlag;256&t&&(t-=256),512&t&&(t-=512),e.shapeFlag=t;}function no(e){return 128&e.shapeFlag?e.ssContent:e}function oo(e,t,n=Hr,o=!1){if(n){const r=n[e]||(n[e]=[]),s=t.__weh||(t.__weh=(...o)=>{if(n.isUnmounted)return;ge(),zr(n);const r=jt(t,n,e,o);return Kr(),ve(),r});return o?r.unshift(s):r.push(s),s}}const ro=e=>(t,n=Hr)=>(!Zr||"sp"===e)&&oo(e,t,n),so=ro("bm"),io=ro("m"),lo=ro("bu"),co=ro("u"),ao=ro("bum"),uo=ro("um"),po=ro("sp"),fo=ro("rtg"),ho=ro("rtc");function mo(e,t=Hr){oo("ec",e,t);}function go(e,t,n,o){const r=e.dirs,s=t&&t.dirs;for(let i=0;i<r.length;i++){const l=r[i];s&&(l.oldValue=s[i].value);let c=l.dir[o];c&&(ge(),jt(c,n,8,[e.el,l,e,t]),ve());}}const vo="components";const yo=Symbol();function bo(e,t,n=!0,o=!1){const r=pn||Hr;if(r){const n=r.type;if(e===vo){const e=os(n,!1);if(e&&(e===t||e===W(t)||e===G(W(t))))return n}const s=_o(r[e]||n[e],t)||_o(r.appContext[e],t);return !s&&o?n:s}}function _o(e,t){return e&&(e[t]||e[W(t)]||e[G(W(t))])}function So(e){return e.some((e=>!Tr(e)||e.type!==gr&&!(e.type===hr&&!So(e.children))))?e:null}const xo=e=>e?Gr(e)?ts(e)||e.proxy:xo(e.parent):null,Co=C(Object.create(null),{$:e=>e,$el:e=>e.vnode.el,$data:e=>e.data,$props:e=>e.props,$attrs:e=>e.attrs,$slots:e=>e.slots,$refs:e=>e.refs,$parent:e=>xo(e.parent),$root:e=>xo(e.root),$emit:e=>e.emit,$options:e=>Oo(e),$forceUpdate:e=>e.f||(e.f=()=>Qt(e.update)),$nextTick:e=>e.n||(e.n=Yt.bind(e.proxy)),$watch:e=>An.bind(e)}),ko={get({_:e},t){const{ctx:n,setupState:o,data:r,props:s,accessCache:i,type:l,appContext:c}=e;let a;if("$"!==t[0]){const l=i[t];if(void 0!==l)switch(l){case 1:return o[t];case 2:return r[t];case 4:return n[t];case 3:return s[t]}else {if(o!==g&&T(o,t))return i[t]=1,o[t];if(r!==g&&T(r,t))return i[t]=2,r[t];if((a=e.propsOptions[0])&&T(a,t))return i[t]=3,s[t];if(n!==g&&T(n,t))return i[t]=4,n[t];To&&(i[t]=0);}}const u=Co[t];let p,f;return u?("$attrs"===t&&ye(e,0,t),u(e)):(p=l.__cssModules)&&(p=p[t])?p:n!==g&&T(n,t)?(i[t]=4,n[t]):(f=c.config.globalProperties,T(f,t)?f[t]:void 0)},set({_:e},t,n){const{data:o,setupState:r,ctx:s}=e;return r!==g&&T(r,t)?(r[t]=n,!0):o!==g&&T(o,t)?(o[t]=n,!0):!T(e.props,t)&&(("$"!==t[0]||!(t.slice(1)in e))&&(s[t]=n,!0))},has({_:{data:e,setupState:t,accessCache:n,ctx:o,appContext:r,propsOptions:s}},i){let l;return !!n[i]||e!==g&&T(e,i)||t!==g&&T(t,i)||(l=s[0])&&T(l,i)||T(o,i)||T(Co,i)||T(r.config.globalProperties,i)},defineProperty(e,t,n){return null!=n.get?e._.accessCache[t]=0:T(n,"value")&&this.set(e,t,n.value,null),Reflect.defineProperty(e,t,n)}},wo=C({},ko,{get(e,t){if(t!==Symbol.unscopables)return ko.get(e,t,e)},has:(e,t)=>"_"!==t[0]&&!n(t)});let To=!0;function No(e){const t=Oo(e),n=e.proxy,o=e.ctx;To=!1,t.beforeCreate&&Eo(t.beforeCreate,e,"bc");const{data:r,computed:s,methods:i,watch:l,provide:c,inject:a,created:u,beforeMount:p,mounted:f,beforeUpdate:d,updated:h,activated:m,deactivated:g,beforeUnmount:v,unmounted:b,render:_,renderTracked:S,renderTriggered:x,errorCaptured:C,serverPrefetch:k,expose:w,inheritAttrs:T,components:E,directives:$}=t;if(a&&function(e,t,n=y,o=!1){N(e)&&(e=Po(e));for(const r in e){const n=e[r];let s;s=P(n)?"default"in n?En(n.from||r,n.default,!0):En(n.from||r):En(n),kt(s)&&o?Object.defineProperty(t,r,{enumerable:!0,configurable:!0,get:()=>s.value,set:e=>s.value=e}):t[r]=s;}}(a,o,null,e.appContext.config.unwrapInjectedRef),i)for(const y in i){const e=i[y];F(e)&&(o[y]=e.bind(n));}if(r){const t=r.call(n,n);P(t)&&(e.data=ut(t));}if(To=!0,s)for(const N in s){const e=s[N],t=F(e)?e.bind(n,n):F(e.get)?e.get.bind(n,n):y,r=!F(e)&&F(e.set)?e.set.bind(n):y,i=ss({get:t,set:r});Object.defineProperty(o,N,{enumerable:!0,configurable:!0,get:()=>i.value,set:e=>i.value=e});}if(l)for(const y in l)$o(l[y],o,n,y);if(c){const e=F(c)?c.call(n):c;Reflect.ownKeys(e).forEach((t=>{Nn(t,e[t]);}));}function O(e,t){N(t)?t.forEach((t=>e(t.bind(n)))):t&&e(t.bind(n));}if(u&&Eo(u,e,"c"),O(so,p),O(io,f),O(lo,d),O(co,h),O(Yn,m),O(Qn,g),O(mo,C),O(ho,S),O(fo,x),O(ao,v),O(uo,b),O(po,k),N(w))if(w.length){const t=e.exposed||(e.exposed={});w.forEach((e=>{Object.defineProperty(t,e,{get:()=>n[e],set:t=>n[e]=t});}));}else e.exposed||(e.exposed={});_&&e.render===y&&(e.render=_),null!=T&&(e.inheritAttrs=T),E&&(e.components=E),$&&(e.directives=$);}function Eo(e,t,n){jt(N(e)?e.map((e=>e.bind(t.proxy))):e.bind(t.proxy),t,n);}function $o(e,t,n,o){const r=o.includes(".")?Pn(n,o):()=>n[o];if(R(e)){const n=t[e];F(n)&&Fn(r,n);}else if(F(e))Fn(r,e.bind(n));else if(P(e))if(N(e))e.forEach((e=>$o(e,t,n,o)));else {const o=F(e.handler)?e.handler.bind(n):t[e.handler];F(o)&&Fn(r,o,e);}}function Oo(e){const t=e.type,{mixins:n,extends:o}=t,{mixins:r,optionsCache:s,config:{optionMergeStrategies:i}}=e.appContext,l=s.get(t);let c;return l?c=l:r.length||n||o?(c={},r.length&&r.forEach((e=>Fo(c,e,i,!0))),Fo(c,t,i)):c=t,P(t)&&s.set(t,c),c}function Fo(e,t,n,o=!1){const{mixins:r,extends:s}=t;s&&Fo(e,s,n,!0),r&&r.forEach((t=>Fo(e,t,n,!0)));for(const i in t)if(o&&"expose"===i);else {const o=Ro[i]||n&&n[i];e[i]=o?o(e[i],t[i]):t[i];}return e}const Ro={data:Ao,props:Vo,emits:Vo,methods:Vo,computed:Vo,beforeCreate:Mo,created:Mo,beforeMount:Mo,mounted:Mo,beforeUpdate:Mo,updated:Mo,beforeDestroy:Mo,beforeUnmount:Mo,destroyed:Mo,unmounted:Mo,activated:Mo,deactivated:Mo,errorCaptured:Mo,serverPrefetch:Mo,components:Vo,directives:Vo,watch:function(e,t){if(!e)return t;if(!t)return e;const n=C(Object.create(null),e);for(const o in t)n[o]=Mo(e[o],t[o]);return n},provide:Ao,inject:function(e,t){return Vo(Po(e),Po(t))}};function Ao(e,t){return t?e?function(){return C(F(e)?e.call(this,this):e,F(t)?t.call(this,this):t)}:t:e}function Po(e){if(N(e)){const t={};for(let n=0;n<e.length;n++)t[e[n]]=e[n];return t}return e}function Mo(e,t){return e?[...new Set([].concat(e,t))]:t}function Vo(e,t){return e?C(C(Object.create(null),e),t):t}function Io(e,t,n,o){const[r,s]=e.propsOptions;let i,l=!1;if(t)for(let c in t){if(j(c))continue;const a=t[c];let u;r&&T(r,u=W(c))?s&&s.includes(u)?(i||(i={}))[u]=a:n[u]=a:un(e.emitsOptions,c)||c in o&&a===o[c]||(o[c]=a,l=!0);}if(s){const t=yt(n),o=i||g;for(let i=0;i<s.length;i++){const l=s[i];n[l]=Bo(r,t,l,o[l],e,!T(o,l));}}return l}function Bo(e,t,n,o,r,s){const i=e[n];if(null!=i){const e=T(i,"default");if(e&&void 0===o){const e=i.default;if(i.type!==Function&&F(e)){const{propsDefaults:s}=r;n in s?o=s[n]:(zr(r),o=s[n]=e.call(null,t),Kr());}else o=e;}i[0]&&(s&&!e?o=!1:!i[1]||""!==o&&o!==K(n)||(o=!0));}return o}function Lo(e,t,n=!1){const o=t.propsCache,r=o.get(e);if(r)return r;const s=e.props,i={},l=[];let c=!1;if(!F(e)){const o=e=>{c=!0;const[n,o]=Lo(e,t,!0);C(i,n),o&&l.push(...o);};!n&&t.mixins.length&&t.mixins.forEach(o),e.extends&&o(e.extends),e.mixins&&e.mixins.forEach(o);}if(!s&&!c)return P(e)&&o.set(e,v),v;if(N(s))for(let u=0;u<s.length;u++){const e=W(s[u]);jo(e)&&(i[e]=g);}else if(s)for(const u in s){const e=W(u);if(jo(e)){const t=s[u],n=i[e]=N(t)||F(t)?{type:t}:t;if(n){const t=Ho(Boolean,n.type),o=Ho(String,n.type);n[0]=t>-1,n[1]=o<0||t<o,(t>-1||T(n,"default"))&&l.push(e);}}}const a=[i,l];return P(e)&&o.set(e,a),a}function jo(e){return "$"!==e[0]}function Uo(e){const t=e&&e.toString().match(/^\s*function (\w+)/);return t?t[1]:null===e?"null":""}function Do(e,t){return Uo(e)===Uo(t)}function Ho(e,t){return N(t)?t.findIndex((t=>Do(t,e))):F(t)&&Do(t,e)?0:-1}const Wo=e=>"_"===e[0]||"$stable"===e,zo=e=>N(e)?e.map(Vr):[Vr(e)],Ko=(e,t,n)=>{if(t._n)return t;const o=hn(((...e)=>zo(t(...e))),n);return o._c=!1,o},Go=(e,t,n)=>{const o=e._ctx;for(const r in e){if(Wo(r))continue;const n=e[r];if(F(n))t[r]=Ko(0,n,o);else if(null!=n){const e=zo(n);t[r]=()=>e;}}},qo=(e,t)=>{const n=zo(t);e.slots.default=()=>n;};function Jo(){return {app:null,config:{isNativeTag:b,performance:!1,globalProperties:{},optionMergeStrategies:{},errorHandler:void 0,warnHandler:void 0,compilerOptions:{}},mixins:[],components:{},directives:{},provides:Object.create(null),optionsCache:new WeakMap,propsCache:new WeakMap,emitsCache:new WeakMap}}let Zo=0;function Yo(e,t){return function(n,o=null){F(n)||(n=Object.assign({},n)),null==o||P(o)||(o=null);const r=Jo(),s=new Set;let i=!1;const l=r.app={_uid:Zo++,_component:n,_props:o,_container:null,_context:r,_instance:null,version:us,get config(){return r.config},set config(e){},use:(e,...t)=>(s.has(e)||(e&&F(e.install)?(s.add(e),e.install(l,...t)):F(e)&&(s.add(e),e(l,...t))),l),mixin:e=>(r.mixins.includes(e)||r.mixins.push(e),l),component:(e,t)=>t?(r.components[e]=t,l):r.components[e],directive:(e,t)=>t?(r.directives[e]=t,l):r.directives[e],mount(s,c,a){if(!i){const u=Rr(n,o);return u.appContext=r,c&&t?t(u,s):e(u,s,a),i=!0,l._container=s,s.__vue_app__=l,ts(u.component)||u.component.proxy}},unmount(){i&&(e(null,l._container),delete l._container.__vue_app__);},provide:(e,t)=>(r.provides[e]=t,l)};return l}}function Qo(e,t,n,o,r=!1){if(N(e))return void e.forEach(((e,s)=>Qo(e,t&&(N(t)?t[s]:t),n,o,r)));if(Kn(o)&&!r)return;const s=4&o.shapeFlag?ts(o.component)||o.component.proxy:o.el,i=r?null:s,{i:l,r:c}=e,a=t&&t.r,u=l.refs===g?l.refs={}:l.refs,p=l.setupState;if(null!=a&&a!==c&&(R(a)?(u[a]=null,T(p,a)&&(p[a]=null)):kt(a)&&(a.value=null)),F(c))Lt(c,l,12,[i,u]);else {const t=R(c),o=kt(c);if(t||o){const l=()=>{if(e.f){const n=t?u[c]:c.value;r?N(n)&&k(n,s):N(n)?n.includes(s)||n.push(s):t?(u[c]=[s],T(p,c)&&(p[c]=u[c])):(c.value=[s],e.k&&(u[e.k]=c.value));}else t?(u[c]=i,T(p,c)&&(p[c]=i)):o&&(c.value=i,e.k&&(u[e.k]=i));};i?(l.id=-1,or(l,n)):l();}}}let Xo=!1;const er=e=>/svg/.test(e.namespaceURI)&&"foreignObject"!==e.tagName,tr=e=>8===e.nodeType;function nr(e){const{mt:t,p:n,o:{patchProp:o,createText:r,nextSibling:s,parentNode:i,remove:l,insert:c,createComment:a}}=e,u=(n,o,l,a,g,v=!1)=>{const y=tr(n)&&"["===n.data,b=()=>h(n,o,l,a,g,y),{type:_,ref:S,shapeFlag:x,patchFlag:C}=o,k=n.nodeType;o.el=n,-2===C&&(v=!1,o.dynamicChildren=null);let w=null;switch(_){case mr:3!==k?""===o.children?(c(o.el=r(""),i(n),n),w=n):w=b():(n.data!==o.children&&(Xo=!0,n.data=o.children),w=s(n));break;case gr:w=8!==k||y?b():s(n);break;case vr:if(1===k||3===k){w=n;const e=!o.children.length;for(let t=0;t<o.staticCount;t++)e&&(o.children+=1===w.nodeType?w.outerHTML:w.data),t===o.staticCount-1&&(o.anchor=w),w=s(w);return w}w=b();break;case hr:w=y?d(n,o,l,a,g,v):b();break;default:if(1&x)w=1!==k||o.type.toLowerCase()!==n.tagName.toLowerCase()?b():p(n,o,l,a,g,v);else if(6&x){o.slotScopeIds=g;const e=i(n);if(t(o,e,null,l,a,er(e),v),w=y?m(n):s(n),w&&tr(w)&&"teleport end"===w.data&&(w=s(w)),Kn(o)){let t;y?(t=Rr(hr),t.anchor=w?w.previousSibling:e.lastChild):t=3===n.nodeType?Mr(""):Rr("div"),t.el=n,o.component.subTree=t;}}else 64&x?w=8!==k?b():o.type.hydrate(n,o,l,a,g,v,e,f):128&x&&(w=o.type.hydrate(n,o,l,a,er(i(n)),g,v,e,u));}return null!=S&&Qo(S,null,a,o),w},p=(e,t,n,r,s,i)=>{i=i||!!t.dynamicChildren;const{type:c,props:a,patchFlag:u,shapeFlag:p,dirs:d}=t,h="input"===c&&d||"option"===c;if(h||-1!==u){if(d&&go(t,null,n,"created"),a)if(h||!i||48&u)for(const t in a)(h&&t.endsWith("value")||S(t)&&!j(t))&&o(e,t,null,a[t],!1,void 0,n);else a.onClick&&o(e,"onClick",null,a.onClick,!1,void 0,n);let c;if((c=a&&a.onVnodeBeforeMount)&&jr(c,n,t),d&&go(t,null,n,"beforeMount"),((c=a&&a.onVnodeMounted)||d)&&wn((()=>{c&&jr(c,n,t),d&&go(t,null,n,"mounted");}),r),16&p&&(!a||!a.innerHTML&&!a.textContent)){let o=f(e.firstChild,t,e,n,r,s,i);for(;o;){Xo=!0;const e=o;o=o.nextSibling,l(e);}}else 8&p&&e.textContent!==t.children&&(Xo=!0,e.textContent=t.children);}return e.nextSibling},f=(e,t,o,r,s,i,l)=>{l=l||!!t.dynamicChildren;const c=t.children,a=c.length;for(let p=0;p<a;p++){const t=l?c[p]:c[p]=Vr(c[p]);if(e)e=u(e,t,r,s,i,l);else {if(t.type===mr&&!t.children)continue;Xo=!0,n(null,t,o,null,r,s,er(o),i);}}return e},d=(e,t,n,o,r,l)=>{const{slotScopeIds:u}=t;u&&(r=r?r.concat(u):u);const p=i(e),d=f(s(e),t,p,n,o,r,l);return d&&tr(d)&&"]"===d.data?s(t.anchor=d):(Xo=!0,c(t.anchor=a("]"),p,d),d)},h=(e,t,o,r,c,a)=>{if(Xo=!0,t.el=null,a){const t=m(e);for(;;){const n=s(e);if(!n||n===t)break;l(n);}}const u=s(e),p=i(e);return l(e),n(null,t,p,u,o,r,er(p),c),u},m=e=>{let t=0;for(;e;)if((e=s(e))&&tr(e)&&("["===e.data&&t++,"]"===e.data)){if(0===t)return s(e);t--;}return e};return [(e,t)=>{if(!t.hasChildNodes())return n(null,e,t),nn(),void(t._vnode=e);Xo=!1,u(t.firstChild,e,null,null,null),nn(),t._vnode=e,Xo&&console.error("Hydration completed but contains mismatches.");},u]}const or=wn;function rr(e){return ir(e)}function sr(e){return ir(e,nr)}function ir(e,t){(X||(X="undefined"!=typeof globalThis?globalThis:"undefined"!=typeof self?self:"undefined"!=typeof window?window:"undefined"!=typeof global?global:{})).__VUE__=!0;const{insert:n,remove:o,patchProp:r,createElement:s,createText:i,createComment:l,setText:c,setElementText:a,parentNode:u,nextSibling:p,setScopeId:f=y,cloneNode:d,insertStaticContent:h}=e,m=(e,t,n,o=null,r=null,s=null,i=!1,l=null,c=!!t.dynamicChildren)=>{if(e===t)return;e&&!Nr(e,t)&&(o=Q(e),H(e,r,s,!0),e=null),-2===t.patchFlag&&(c=!1,t.dynamicChildren=null);const{type:a,ref:u,shapeFlag:p}=t;switch(a){case mr:b(e,t,n,o);break;case gr:_(e,t,n,o);break;case vr:null==e&&S(t,n,o,i);break;case hr:F(e,t,n,o,r,s,i,l,c);break;default:1&p?x(e,t,n,o,r,s,i,l,c):6&p?R(e,t,n,o,r,s,i,l,c):(64&p||128&p)&&a.process(e,t,n,o,r,s,i,l,c,ne);}null!=u&&r&&Qo(u,e&&e.ref,s,t||e,!t);},b=(e,t,o,r)=>{if(null==e)n(t.el=i(t.children),o,r);else {const n=t.el=e.el;t.children!==e.children&&c(n,t.children);}},_=(e,t,o,r)=>{null==e?n(t.el=l(t.children||""),o,r):t.el=e.el;},S=(e,t,n,o)=>{[e.el,e.anchor]=h(e.children,t,n,o,e.el,e.anchor);},x=(e,t,n,o,r,s,i,l,c)=>{i=i||"svg"===t.type,null==e?k(t,n,o,r,s,i,l,c):E(e,t,r,s,i,l,c);},k=(e,t,o,i,l,c,u,p)=>{let f,h;const{type:m,props:g,shapeFlag:v,transition:y,patchFlag:b,dirs:_}=e;if(e.el&&void 0!==d&&-1===b)f=e.el=d(e.el);else {if(f=e.el=s(e.type,c,g&&g.is,g),8&v?a(f,e.children):16&v&&N(e.children,f,null,i,l,c&&"foreignObject"!==m,u,p),_&&go(e,null,i,"created"),g){for(const t in g)"value"===t||j(t)||r(f,t,null,g[t],c,e.children,i,l,J);"value"in g&&r(f,"value",null,g.value),(h=g.onVnodeBeforeMount)&&jr(h,i,e);}w(f,e,e.scopeId,u,i);}_&&go(e,null,i,"beforeMount");const S=(!l||l&&!l.pendingBranch)&&y&&!y.persisted;S&&y.beforeEnter(f),n(f,t,o),((h=g&&g.onVnodeMounted)||S||_)&&or((()=>{h&&jr(h,i,e),S&&y.enter(f),_&&go(e,null,i,"mounted");}),l);},w=(e,t,n,o,r)=>{if(n&&f(e,n),o)for(let s=0;s<o.length;s++)f(e,o[s]);if(r){if(t===r.subTree){const t=r.vnode;w(e,t,t.scopeId,t.slotScopeIds,r.parent);}}},N=(e,t,n,o,r,s,i,l,c=0)=>{for(let a=c;a<e.length;a++){const c=e[a]=l?Ir(e[a]):Vr(e[a]);m(null,c,t,n,o,r,s,i,l);}},E=(e,t,n,o,s,i,l)=>{const c=t.el=e.el;let{patchFlag:u,dynamicChildren:p,dirs:f}=t;u|=16&e.patchFlag;const d=e.props||g,h=t.props||g;let m;n&&lr(n,!1),(m=h.onVnodeBeforeUpdate)&&jr(m,n,t,e),f&&go(t,e,n,"beforeUpdate"),n&&lr(n,!0);const v=s&&"foreignObject"!==t.type;if(p?$(e.dynamicChildren,p,c,n,o,v,i):l||B(e,t,c,null,n,o,v,i,!1),u>0){if(16&u)O(c,t,d,h,n,o,s);else if(2&u&&d.class!==h.class&&r(c,"class",null,h.class,s),4&u&&r(c,"style",d.style,h.style,s),8&u){const i=t.dynamicProps;for(let t=0;t<i.length;t++){const l=i[t],a=d[l],u=h[l];u===a&&"value"!==l||r(c,l,a,u,s,e.children,n,o,J);}}1&u&&e.children!==t.children&&a(c,t.children);}else l||null!=p||O(c,t,d,h,n,o,s);((m=h.onVnodeUpdated)||f)&&or((()=>{m&&jr(m,n,t,e),f&&go(t,e,n,"updated");}),o);},$=(e,t,n,o,r,s,i)=>{for(let l=0;l<t.length;l++){const c=e[l],a=t[l],p=c.el&&(c.type===hr||!Nr(c,a)||70&c.shapeFlag)?u(c.el):n;m(c,a,p,null,o,r,s,i,!0);}},O=(e,t,n,o,s,i,l)=>{if(n!==o){for(const c in o){if(j(c))continue;const a=o[c],u=n[c];a!==u&&"value"!==c&&r(e,c,u,a,l,t.children,s,i,J);}if(n!==g)for(const c in n)j(c)||c in o||r(e,c,n[c],null,l,t.children,s,i,J);"value"in o&&r(e,"value",n.value,o.value);}},F=(e,t,o,r,s,l,c,a,u)=>{const p=t.el=e?e.el:i(""),f=t.anchor=e?e.anchor:i("");let{patchFlag:d,dynamicChildren:h,slotScopeIds:m}=t;m&&(a=a?a.concat(m):m),null==e?(n(p,o,r),n(f,o,r),N(t.children,o,f,s,l,c,a,u)):d>0&&64&d&&h&&e.dynamicChildren?($(e.dynamicChildren,h,o,s,l,c,a),(null!=t.key||s&&t===s.subTree)&&cr(e,t,!0)):B(e,t,o,f,s,l,c,a,u);},R=(e,t,n,o,r,s,i,l,c)=>{t.slotScopeIds=l,null==e?512&t.shapeFlag?r.ctx.activate(t,n,o,i,c):A(t,n,o,r,s,i,c):P(e,t,c);},A=(e,t,n,o,r,s,i)=>{const l=e.component=function(e,t,n){const o=e.type,r=(t?t.appContext:e.appContext)||Ur,s={uid:Dr++,vnode:e,type:o,parent:t,appContext:r,root:null,next:null,subTree:null,effect:null,update:null,scope:new te(!0),render:null,proxy:null,exposed:null,exposeProxy:null,withProxy:null,provides:t?t.provides:Object.create(r.provides),accessCache:null,renderCache:[],components:null,directives:null,propsOptions:Lo(o,r),emitsOptions:an(o,r),emit:null,emitted:null,propsDefaults:g,inheritAttrs:o.inheritAttrs,ctx:g,data:g,props:g,attrs:g,slots:g,refs:g,setupState:g,setupContext:null,suspense:n,suspenseId:n?n.pendingId:0,asyncDep:null,asyncResolved:!1,isMounted:!1,isUnmounted:!1,isDeactivated:!1,bc:null,c:null,bm:null,m:null,bu:null,u:null,um:null,bum:null,da:null,a:null,rtg:null,rtc:null,ec:null,sp:null};s.ctx={_:s},s.root=t?t.root:s,s.emit=cn.bind(null,s),e.ce&&e.ce(s);return s}(e,o,r);if(qn(e)&&(l.ctx.renderer=ne),function(e,t=!1){Zr=t;const{props:n,children:o}=e.vnode,r=Gr(e);(function(e,t,n,o=!1){const r={},s={};Y(s,Er,1),e.propsDefaults=Object.create(null),Io(e,t,r,s);for(const i in e.propsOptions[0])i in r||(r[i]=void 0);e.props=n?o?r:pt(r):e.type.props?r:s,e.attrs=s;})(e,n,r,t),((e,t)=>{if(32&e.vnode.shapeFlag){const n=t._;n?(e.slots=yt(t),Y(t,"_",n)):Go(t,e.slots={});}else e.slots={},t&&qo(e,t);Y(e.slots,Er,1);})(e,o);r?function(e,t){const n=e.type;e.accessCache=Object.create(null),e.proxy=bt(new Proxy(e.ctx,ko));const{setup:o}=n;if(o){const n=e.setupContext=o.length>1?es(e):null;zr(e),ge();const r=Lt(o,e,0,[e.props,n]);if(ve(),Kr(),M(r)){if(r.then(Kr,Kr),t)return r.then((n=>{Yr(e,n,t);})).catch((t=>{Ut(t,e,0);}));e.asyncDep=r;}else Yr(e,r,t);}else Xr(e,t);}(e,t):void 0;Zr=!1;}(l),l.asyncDep){if(r&&r.registerDep(l,V),!e.el){const e=l.subTree=Rr(gr);_(null,e,t,n);}}else V(l,e,t,n,r,s,i);},P=(e,t,n)=>{const o=t.component=e.component;if(function(e,t,n){const{props:o,children:r,component:s}=e,{props:i,children:l,patchFlag:c}=t,a=s.emitsOptions;if(t.dirs||t.transition)return !0;if(!(n&&c>=0))return !(!r&&!l||l&&l.$stable)||o!==i&&(o?!i||yn(o,i,a):!!i);if(1024&c)return !0;if(16&c)return o?yn(o,i,a):!!i;if(8&c){const e=t.dynamicProps;for(let t=0;t<e.length;t++){const n=e[t];if(i[n]!==o[n]&&!un(a,n))return !0}}return !1}(e,t,n)){if(o.asyncDep&&!o.asyncResolved)return void I(o,t,n);o.next=t,function(e){const t=Wt.indexOf(e);t>zt&&Wt.splice(t,1);}(o.update),o.update();}else t.el=e.el,o.vnode=t;},V=(e,t,n,o,r,s,i)=>{const l=e.effect=new fe((()=>{if(e.isMounted){let t,{next:n,bu:o,u:l,parent:c,vnode:a}=e,p=n;lr(e,!1),n?(n.el=a.el,I(e,n,i)):n=a,o&&Z(o),(t=n.props&&n.props.onVnodeBeforeUpdate)&&jr(t,c,n,a),lr(e,!0);const f=mn(e),d=e.subTree;e.subTree=f,m(d,f,u(d.el),Q(d),e,r,s),n.el=f.el,null===p&&bn(e,f.el),l&&or(l,r),(t=n.props&&n.props.onVnodeUpdated)&&or((()=>jr(t,c,n,a)),r);}else {let i;const{el:l,props:c}=t,{bm:a,m:u,parent:p}=e,f=Kn(t);if(lr(e,!1),a&&Z(a),!f&&(i=c&&c.onVnodeBeforeMount)&&jr(i,p,t),lr(e,!0),l&&re){const n=()=>{e.subTree=mn(e),re(l,e.subTree,e,r,null);};f?t.type.__asyncLoader().then((()=>!e.isUnmounted&&n())):n();}else {const i=e.subTree=mn(e);m(null,i,n,o,e,r,s),t.el=i.el;}if(u&&or(u,r),!f&&(i=c&&c.onVnodeMounted)){const e=t;or((()=>jr(i,p,e)),r);}(256&t.shapeFlag||p&&Kn(p.vnode)&&256&p.vnode.shapeFlag)&&e.a&&or(e.a,r),e.isMounted=!0,t=n=o=null;}}),(()=>Qt(c)),e.scope),c=e.update=()=>l.run();c.id=e.uid,lr(e,!0),c();},I=(e,t,n)=>{t.component=e;const o=e.vnode.props;e.vnode=t,e.next=null,function(e,t,n,o){const{props:r,attrs:s,vnode:{patchFlag:i}}=e,l=yt(r),[c]=e.propsOptions;let a=!1;if(!(o||i>0)||16&i){let o;Io(e,t,r,s)&&(a=!0);for(const s in l)t&&(T(t,s)||(o=K(s))!==s&&T(t,o))||(c?!n||void 0===n[s]&&void 0===n[o]||(r[s]=Bo(c,l,s,void 0,e,!0)):delete r[s]);if(s!==l)for(const e in s)t&&T(t,e)||(delete s[e],a=!0);}else if(8&i){const n=e.vnode.dynamicProps;for(let o=0;o<n.length;o++){let i=n[o];if(un(e.emitsOptions,i))continue;const u=t[i];if(c)if(T(s,i))u!==s[i]&&(s[i]=u,a=!0);else {const t=W(i);r[t]=Bo(c,l,t,u,e,!1);}else u!==s[i]&&(s[i]=u,a=!0);}}a&&_e(e,"set","$attrs");}(e,t.props,o,n),((e,t,n)=>{const{vnode:o,slots:r}=e;let s=!0,i=g;if(32&o.shapeFlag){const e=t._;e?n&&1===e?s=!1:(C(r,t),n||1!==e||delete r._):(s=!t.$stable,Go(t,r)),i=t;}else t&&(qo(e,t),i={default:1});if(s)for(const l in r)Wo(l)||l in i||delete r[l];})(e,t.children,n),ge(),tn(),ve();},B=(e,t,n,o,r,s,i,l,c=!1)=>{const u=e&&e.children,p=e?e.shapeFlag:0,f=t.children,{patchFlag:d,shapeFlag:h}=t;if(d>0){if(128&d)return void U(u,f,n,o,r,s,i,l,c);if(256&d)return void L(u,f,n,o,r,s,i,l,c)}8&h?(16&p&&J(u,r,s),f!==u&&a(n,f)):16&p?16&h?U(u,f,n,o,r,s,i,l,c):J(u,r,s,!0):(8&p&&a(n,""),16&h&&N(f,n,o,r,s,i,l,c));},L=(e,t,n,o,r,s,i,l,c)=>{const a=(e=e||v).length,u=(t=t||v).length,p=Math.min(a,u);let f;for(f=0;f<p;f++){const o=t[f]=c?Ir(t[f]):Vr(t[f]);m(e[f],o,n,null,r,s,i,l,c);}a>u?J(e,r,s,!0,!1,p):N(t,n,o,r,s,i,l,c,p);},U=(e,t,n,o,r,s,i,l,c)=>{let a=0;const u=t.length;let p=e.length-1,f=u-1;for(;a<=p&&a<=f;){const o=e[a],u=t[a]=c?Ir(t[a]):Vr(t[a]);if(!Nr(o,u))break;m(o,u,n,null,r,s,i,l,c),a++;}for(;a<=p&&a<=f;){const o=e[p],a=t[f]=c?Ir(t[f]):Vr(t[f]);if(!Nr(o,a))break;m(o,a,n,null,r,s,i,l,c),p--,f--;}if(a>p){if(a<=f){const e=f+1,p=e<u?t[e].el:o;for(;a<=f;)m(null,t[a]=c?Ir(t[a]):Vr(t[a]),n,p,r,s,i,l,c),a++;}}else if(a>f)for(;a<=p;)H(e[a],r,s,!0),a++;else {const d=a,h=a,g=new Map;for(a=h;a<=f;a++){const e=t[a]=c?Ir(t[a]):Vr(t[a]);null!=e.key&&g.set(e.key,a);}let y,b=0;const _=f-h+1;let S=!1,x=0;const C=new Array(_);for(a=0;a<_;a++)C[a]=0;for(a=d;a<=p;a++){const o=e[a];if(b>=_){H(o,r,s,!0);continue}let u;if(null!=o.key)u=g.get(o.key);else for(y=h;y<=f;y++)if(0===C[y-h]&&Nr(o,t[y])){u=y;break}void 0===u?H(o,r,s,!0):(C[u-h]=a+1,u>=x?x=u:S=!0,m(o,t[u],n,null,r,s,i,l,c),b++);}const k=S?function(e){const t=e.slice(),n=[0];let o,r,s,i,l;const c=e.length;for(o=0;o<c;o++){const c=e[o];if(0!==c){if(r=n[n.length-1],e[r]<c){t[o]=r,n.push(o);continue}for(s=0,i=n.length-1;s<i;)l=s+i>>1,e[n[l]]<c?s=l+1:i=l;c<e[n[s]]&&(s>0&&(t[o]=n[s-1]),n[s]=o);}}s=n.length,i=n[s-1];for(;s-- >0;)n[s]=i,i=t[i];return n}(C):v;for(y=k.length-1,a=_-1;a>=0;a--){const e=h+a,p=t[e],f=e+1<u?t[e+1].el:o;0===C[a]?m(null,p,n,f,r,s,i,l,c):S&&(y<0||a!==k[y]?D(p,n,f,2):y--);}}},D=(e,t,o,r,s=null)=>{const{el:i,type:l,transition:c,children:a,shapeFlag:u}=e;if(6&u)return void D(e.component.subTree,t,o,r);if(128&u)return void e.suspense.move(t,o,r);if(64&u)return void l.move(e,t,o,ne);if(l===hr){n(i,t,o);for(let e=0;e<a.length;e++)D(a[e],t,o,r);return void n(e.anchor,t,o)}if(l===vr)return void(({el:e,anchor:t},o,r)=>{let s;for(;e&&e!==t;)s=p(e),n(e,o,r),e=s;n(t,o,r);})(e,t,o);if(2!==r&&1&u&&c)if(0===r)c.beforeEnter(i),n(i,t,o),or((()=>c.enter(i)),s);else {const{leave:e,delayLeave:r,afterLeave:s}=c,l=()=>n(i,t,o),a=()=>{e(i,(()=>{l(),s&&s();}));};r?r(i,l,a):a();}else n(i,t,o);},H=(e,t,n,o=!1,r=!1)=>{const{type:s,props:i,ref:l,children:c,dynamicChildren:a,shapeFlag:u,patchFlag:p,dirs:f}=e;if(null!=l&&Qo(l,null,n,e,!0),256&u)return void t.ctx.deactivate(e);const d=1&u&&f,h=!Kn(e);let m;if(h&&(m=i&&i.onVnodeBeforeUnmount)&&jr(m,t,e),6&u)q(e.component,n,o);else {if(128&u)return void e.suspense.unmount(n,o);d&&go(e,null,t,"beforeUnmount"),64&u?e.type.remove(e,t,n,r,ne,o):a&&(s!==hr||p>0&&64&p)?J(a,t,n,!1,!0):(s===hr&&384&p||!r&&16&u)&&J(c,t,n),o&&z(e);}(h&&(m=i&&i.onVnodeUnmounted)||d)&&or((()=>{m&&jr(m,t,e),d&&go(e,null,t,"unmounted");}),n);},z=e=>{const{type:t,el:n,anchor:r,transition:s}=e;if(t===hr)return void G(n,r);if(t===vr)return void(({el:e,anchor:t})=>{let n;for(;e&&e!==t;)n=p(e),o(e),e=n;o(t);})(e);const i=()=>{o(n),s&&!s.persisted&&s.afterLeave&&s.afterLeave();};if(1&e.shapeFlag&&s&&!s.persisted){const{leave:t,delayLeave:o}=s,r=()=>t(n,i);o?o(e.el,i,r):r();}else i();},G=(e,t)=>{let n;for(;e!==t;)n=p(e),o(e),e=n;o(t);},q=(e,t,n)=>{const{bum:o,scope:r,update:s,subTree:i,um:l}=e;o&&Z(o),r.stop(),s&&(s.active=!1,H(i,e,t,n)),l&&or(l,t),or((()=>{e.isUnmounted=!0;}),t),t&&t.pendingBranch&&!t.isUnmounted&&e.asyncDep&&!e.asyncResolved&&e.suspenseId===t.pendingId&&(t.deps--,0===t.deps&&t.resolve());},J=(e,t,n,o=!1,r=!1,s=0)=>{for(let i=s;i<e.length;i++)H(e[i],t,n,o,r);},Q=e=>6&e.shapeFlag?Q(e.component.subTree):128&e.shapeFlag?e.suspense.next():p(e.anchor||e.el),ee=(e,t,n)=>{null==e?t._vnode&&H(t._vnode,null,null,!0):m(t._vnode||null,e,t,null,null,null,n),tn(),nn(),t._vnode=e;},ne={p:m,um:H,m:D,r:z,mt:A,mc:N,pc:B,pbc:$,n:Q,o:e};let oe,re;return t&&([oe,re]=t(ne)),{render:ee,hydrate:oe,createApp:Yo(ee,oe)}}function lr({effect:e,update:t},n){e.allowRecurse=t.allowRecurse=n;}function cr(e,t,n=!1){const o=e.children,r=t.children;if(N(o)&&N(r))for(let s=0;s<o.length;s++){const e=o[s];let t=r[s];1&t.shapeFlag&&!t.dynamicChildren&&((t.patchFlag<=0||32===t.patchFlag)&&(t=r[s]=Ir(r[s]),t.el=e.el),n||cr(e,t));}}const ar=e=>e&&(e.disabled||""===e.disabled),ur=e=>"undefined"!=typeof SVGElement&&e instanceof SVGElement,pr=(e,t)=>{const n=e&&e.to;if(R(n)){if(t){return t(n)}return null}return n};function fr(e,t,n,{o:{insert:o},m:r},s=2){0===s&&o(e.targetAnchor,t,n);const{el:i,anchor:l,shapeFlag:c,children:a,props:u}=e,p=2===s;if(p&&o(i,t,n),(!p||ar(u))&&16&c)for(let f=0;f<a.length;f++)r(a[f],t,n,2);p&&o(l,t,n);}const dr={__isTeleport:!0,process(e,t,n,o,r,s,i,l,c,a){const{mc:u,pc:p,pbc:f,o:{insert:d,querySelector:h,createText:m}}=a,g=ar(t.props);let{shapeFlag:v,children:y,dynamicChildren:b}=t;if(null==e){const e=t.el=m(""),a=t.anchor=m("");d(e,n,o),d(a,n,o);const p=t.target=pr(t.props,h),f=t.targetAnchor=m("");p&&(d(f,p),i=i||ur(p));const b=(e,t)=>{16&v&&u(y,e,t,r,s,i,l,c);};g?b(n,a):p&&b(p,f);}else {t.el=e.el;const o=t.anchor=e.anchor,u=t.target=e.target,d=t.targetAnchor=e.targetAnchor,m=ar(e.props),v=m?n:u,y=m?o:d;if(i=i||ur(u),b?(f(e.dynamicChildren,b,v,r,s,i,l),cr(e,t,!0)):c||p(e,t,v,y,r,s,i,l,!1),g)m||fr(t,n,o,a,1);else if((t.props&&t.props.to)!==(e.props&&e.props.to)){const e=t.target=pr(t.props,h);e&&fr(t,e,null,a,0);}else m&&fr(t,u,d,a,1);}},remove(e,t,n,o,{um:r,o:{remove:s}},i){const{shapeFlag:l,children:c,anchor:a,targetAnchor:u,target:p,props:f}=e;if(p&&s(u),(i||!ar(f))&&(s(a),16&l))for(let d=0;d<c.length;d++){const e=c[d];r(e,t,n,!0,!!e.dynamicChildren);}},move:fr,hydrate:function(e,t,n,o,r,s,{o:{nextSibling:i,parentNode:l,querySelector:c}},a){const u=t.target=pr(t.props,c);if(u){const c=u._lpa||u.firstChild;if(16&t.shapeFlag)if(ar(t.props))t.anchor=a(i(e),t,l(e),n,o,r,s),t.targetAnchor=c;else {t.anchor=i(e);let l=c;for(;l;)if(l=i(l),l&&8===l.nodeType&&"teleport anchor"===l.data){t.targetAnchor=l,u._lpa=t.targetAnchor&&i(t.targetAnchor);break}a(c,t,u,n,o,r,s);}}return t.anchor&&i(t.anchor)}},hr=Symbol(void 0),mr=Symbol(void 0),gr=Symbol(void 0),vr=Symbol(void 0),yr=[];let br=null;function _r(e=!1){yr.push(br=e?null:[]);}function Sr(){yr.pop(),br=yr[yr.length-1]||null;}let xr=1;function Cr(e){xr+=e;}function kr(e){return e.dynamicChildren=xr>0?br||v:null,Sr(),xr>0&&br&&br.push(e),e}function wr(e,t,n,o,r){return kr(Rr(e,t,n,o,r,!0))}function Tr(e){return !!e&&!0===e.__v_isVNode}function Nr(e,t){return e.type===t.type&&e.key===t.key}const Er="__vInternal",$r=({key:e})=>null!=e?e:null,Or=({ref:e,ref_key:t,ref_for:n})=>null!=e?R(e)||kt(e)||F(e)?{i:pn,r:e,k:t,f:!!n}:e:null;function Fr(e,t=null,n=null,o=0,r=null,s=(e===hr?0:1),i=!1,l=!1){const c={__v_isVNode:!0,__v_skip:!0,type:e,props:t,key:t&&$r(t),ref:t&&Or(t),scopeId:fn,slotScopeIds:null,children:n,component:null,suspense:null,ssContent:null,ssFallback:null,dirs:null,transition:null,el:null,anchor:null,target:null,targetAnchor:null,staticCount:0,shapeFlag:s,patchFlag:o,dynamicProps:r,dynamicChildren:null,appContext:null};return l?(Br(c,n),128&s&&e.normalize(c)):n&&(c.shapeFlag|=R(n)?8:16),xr>0&&!i&&br&&(c.patchFlag>0||6&s)&&32!==c.patchFlag&&br.push(c),c}const Rr=function(e,t=null,n=null,o=0,r=null,i=!1){e&&e!==yo||(e=gr);if(Tr(e)){const o=Pr(e,t,!0);return n&&Br(o,n),xr>0&&!i&&br&&(6&o.shapeFlag?br[br.indexOf(e)]=o:br.push(o)),o.patchFlag|=-2,o}l=e,F(l)&&"__vccOpts"in l&&(e=e.__vccOpts);var l;if(t){t=Ar(t);let{class:e,style:n}=t;e&&!R(e)&&(t.class=a(e)),P(n)&&(vt(n)&&!N(n)&&(n=C({},n)),t.style=s(n));}const c=R(e)?1:_n(e)?128:(e=>e.__isTeleport)(e)?64:P(e)?4:F(e)?2:0;return Fr(e,t,n,o,r,c,i,!0)};function Ar(e){return e?vt(e)||Er in e?C({},e):e:null}function Pr(e,t,n=!1){const{props:o,ref:r,patchFlag:s,children:i}=e,l=t?Lr(o||{},t):o;return {__v_isVNode:!0,__v_skip:!0,type:e.type,props:l,key:l&&$r(l),ref:t&&t.ref?n&&r?N(r)?r.concat(Or(t)):[r,Or(t)]:Or(t):r,scopeId:e.scopeId,slotScopeIds:e.slotScopeIds,children:i,target:e.target,targetAnchor:e.targetAnchor,staticCount:e.staticCount,shapeFlag:e.shapeFlag,patchFlag:t&&e.type!==hr?-1===s?16:16|s:s,dynamicProps:e.dynamicProps,dynamicChildren:e.dynamicChildren,appContext:e.appContext,dirs:e.dirs,transition:e.transition,component:e.component,suspense:e.suspense,ssContent:e.ssContent&&Pr(e.ssContent),ssFallback:e.ssFallback&&Pr(e.ssFallback),el:e.el,anchor:e.anchor}}function Mr(e=" ",t=0){return Rr(mr,null,e,t)}function Vr(e){return null==e||"boolean"==typeof e?Rr(gr):N(e)?Rr(hr,null,e.slice()):"object"==typeof e?Ir(e):Rr(mr,null,String(e))}function Ir(e){return null===e.el||e.memo?e:Pr(e)}function Br(e,t){let n=0;const{shapeFlag:o}=e;if(null==t)t=null;else if(N(t))n=16;else if("object"==typeof t){if(65&o){const n=t.default;return void(n&&(n._c&&(n._d=!1),Br(e,n()),n._c&&(n._d=!0)))}{n=32;const o=t._;o||Er in t?3===o&&pn&&(1===pn.slots._?t._=1:(t._=2,e.patchFlag|=1024)):t._ctx=pn;}}else F(t)?(t={default:t,_ctx:pn},n=32):(t=String(t),64&o?(n=16,t=[Mr(t)]):n=8);e.children=t,e.shapeFlag|=n;}function Lr(...e){const t={};for(let n=0;n<e.length;n++){const o=e[n];for(const e in o)if("class"===e)t.class!==o.class&&(t.class=a([t.class,o.class]));else if("style"===e)t.style=s([t.style,o.style]);else if(S(e)){const n=t[e],r=o[e];!r||n===r||N(n)&&n.includes(r)||(t[e]=n?[].concat(n,r):r);}else ""!==e&&(t[e]=o[e]);}return t}function jr(e,t,n,o=null){jt(e,t,7,[n,o]);}const Ur=Jo();let Dr=0;let Hr=null;const Wr=()=>Hr||pn,zr=e=>{Hr=e,e.scope.on();},Kr=()=>{Hr&&Hr.scope.off(),Hr=null;};function Gr(e){return 4&e.vnode.shapeFlag}let qr,Jr,Zr=!1;function Yr(e,t,n){F(t)?e.render=t:P(t)&&(e.setupState=Ot(t)),Xr(e,n);}function Qr(e){qr=e,Jr=e=>{e.render._rc&&(e.withProxy=new Proxy(e.ctx,wo));};}function Xr(e,t,n){const o=e.type;if(!e.render){if(!t&&qr&&!o.render){const t=o.template||Oo(e).template;if(t){const{isCustomElement:n,compilerOptions:r}=e.appContext.config,{delimiters:s,compilerOptions:i}=o,l=C(C({isCustomElement:n,delimiters:s},r),i);o.render=qr(t,l);}}e.render=o.render||y,Jr&&Jr(e);}zr(e),ge(),No(e),ve(),Kr();}function es(e){const t=t=>{e.exposed=t||{};};let n;return {get attrs(){return n||(n=function(e){return new Proxy(e.attrs,{get:(t,n)=>(ye(e,0,"$attrs"),t[n])})}(e))},slots:e.slots,emit:e.emit,expose:t}}function ts(e){if(e.exposed)return e.exposeProxy||(e.exposeProxy=new Proxy(Ot(bt(e.exposed)),{get:(t,n)=>n in t?t[n]:n in Co?Co[n](e):void 0}))}const ns=/(?:^|[-_])(\w)/g;function os(e,t=!0){return F(e)?e.displayName||e.name:e.name||t&&e.__name}function rs(e,t,n=!1){let o=os(t);if(!o&&t.__file){const e=t.__file.match(/([^/\\]+)\.\w+$/);e&&(o=e[1]);}if(!o&&e&&e.parent){const n=e=>{for(const n in e)if(e[n]===t)return n};o=n(e.components||e.parent.type.components)||n(e.appContext.components);}return o?o.replace(ns,(e=>e.toUpperCase())).replace(/[-_]/g,""):n?"App":"Anonymous"}const ss=(e,t)=>function(e,t,n=!1){let o,r;const s=F(e);return s?(o=e,r=y):(o=e.get,r=e.set),new Mt(o,r,s||!r,n)}(e,0,Zr);function is(){const e=Wr();return e.setupContext||(e.setupContext=es(e))}function ls(e,t,n){const o=arguments.length;return 2===o?P(t)&&!N(t)?Tr(t)?Rr(e,null,[t]):Rr(e,t):Rr(e,null,t):(o>3?n=Array.prototype.slice.call(arguments,2):3===o&&Tr(n)&&(n=[n]),Rr(e,t,n))}const cs=Symbol("");function as(e,t){const n=e.memo;if(n.length!=t.length)return !1;for(let o=0;o<n.length;o++)if(J(n[o],t[o]))return !1;return xr>0&&br&&br.push(e),!0}const us="3.2.39",ps="undefined"!=typeof document?document:null,fs=ps&&ps.createElement("template"),ds={insert:(e,t,n)=>{t.insertBefore(e,n||null);},remove:e=>{const t=e.parentNode;t&&t.removeChild(e);},createElement:(e,t,n,o)=>{const r=t?ps.createElementNS("http://www.w3.org/2000/svg",e):ps.createElement(e,n?{is:n}:void 0);return "select"===e&&o&&null!=o.multiple&&r.setAttribute("multiple",o.multiple),r},createText:e=>ps.createTextNode(e),createComment:e=>ps.createComment(e),setText:(e,t)=>{e.nodeValue=t;},setElementText:(e,t)=>{e.textContent=t;},parentNode:e=>e.parentNode,nextSibling:e=>e.nextSibling,querySelector:e=>ps.querySelector(e),setScopeId(e,t){e.setAttribute(t,"");},cloneNode(e){const t=e.cloneNode(!0);return "_value"in e&&(t._value=e._value),t},insertStaticContent(e,t,n,o,r,s){const i=n?n.previousSibling:t.lastChild;if(r&&(r===s||r.nextSibling))for(;t.insertBefore(r.cloneNode(!0),n),r!==s&&(r=r.nextSibling););else {fs.innerHTML=o?`<svg>${e}</svg>`:e;const r=fs.content;if(o){const e=r.firstChild;for(;e.firstChild;)r.appendChild(e.firstChild);r.removeChild(e);}t.insertBefore(r,n);}return [i?i.nextSibling:t.firstChild,n?n.previousSibling:t.lastChild]}};const hs=/\s*!important$/;function ms(e,t,n){if(N(n))n.forEach((n=>ms(e,t,n)));else if(null==n&&(n=""),t.startsWith("--"))e.setProperty(t,n);else {const o=function(e,t){const n=vs[t];if(n)return n;let o=W(t);if("filter"!==o&&o in e)return vs[t]=o;o=G(o);for(let r=0;r<gs.length;r++){const n=gs[r]+o;if(n in e)return vs[t]=n}return t}(e,t);hs.test(n)?e.setProperty(K(o),n.replace(hs,""),"important"):e[o]=n;}}const gs=["Webkit","Moz","ms"],vs={};const ys="http://www.w3.org/1999/xlink";const[bs,_s]=(()=>{let e=Date.now,t=!1;if("undefined"!=typeof window){Date.now()>document.createEvent("Event").timeStamp&&(e=performance.now.bind(performance));const n=navigator.userAgent.match(/firefox\/(\d+)/i);t=!!(n&&Number(n[1])<=53);}return [e,t]})();let Ss=0;const xs=Promise.resolve(),Cs=()=>{Ss=0;};function ks(e,t,n,o){e.addEventListener(t,n,o);}function ws(e,t,n,o,r=null){const s=e._vei||(e._vei={}),i=s[t];if(o&&i)i.value=o;else {const[n,l]=function(e){let t;if(Ts.test(e)){let n;for(t={};n=e.match(Ts);)e=e.slice(0,e.length-n[0].length),t[n[0].toLowerCase()]=!0;}return [":"===e[2]?e.slice(3):K(e.slice(2)),t]}(t);if(o){const i=s[t]=function(e,t){const n=e=>{const o=e.timeStamp||bs();(_s||o>=n.attached-1)&&jt(function(e,t){if(N(t)){const n=e.stopImmediatePropagation;return e.stopImmediatePropagation=()=>{n.call(e),e._stopped=!0;},t.map((e=>t=>!t._stopped&&e&&e(t)))}return t}(e,n.value),t,5,[e]);};return n.value=e,n.attached=(()=>Ss||(xs.then(Cs),Ss=bs()))(),n}(o,r);ks(e,n,i,l);}else i&&(!function(e,t,n,o){e.removeEventListener(t,n,o);}(e,n,i,l),s[t]=void 0);}}const Ts=/(?:Once|Passive|Capture)$/;const Ns=/^on[a-z]/;function Es(e,t){const n=zn(e);class o extends Os{constructor(e){super(n,e,t);}}return o.def=n,o}const $s="undefined"!=typeof HTMLElement?HTMLElement:class{};class Os extends $s{constructor(e,t={},n){super(),this._def=e,this._props=t,this._instance=null,this._connected=!1,this._resolved=!1,this._numberProps=null,this.shadowRoot&&n?n(this._createVNode(),this.shadowRoot):this.attachShadow({mode:"open"});}connectedCallback(){this._connected=!0,this._instance||this._resolveDef();}disconnectedCallback(){this._connected=!1,Yt((()=>{this._connected||(Ti(null,this.shadowRoot),this._instance=null);}));}_resolveDef(){if(this._resolved)return;this._resolved=!0;for(let n=0;n<this.attributes.length;n++)this._setAttr(this.attributes[n].name);new MutationObserver((e=>{for(const t of e)this._setAttr(t.attributeName);})).observe(this,{attributes:!0});const e=e=>{const{props:t,styles:n}=e,o=!N(t),r=t?o?Object.keys(t):t:[];let s;if(o)for(const i in this._props){const e=t[i];(e===Number||e&&e.type===Number)&&(this._props[i]=Q(this._props[i]),(s||(s=Object.create(null)))[i]=!0);}this._numberProps=s;for(const i of Object.keys(this))"_"!==i[0]&&this._setProp(i,this[i],!0,!1);for(const i of r.map(W))Object.defineProperty(this,i,{get(){return this._getProp(i)},set(e){this._setProp(i,e);}});this._applyStyles(n),this._update();},t=this._def.__asyncLoader;t?t().then(e):e(this._def);}_setAttr(e){let t=this.getAttribute(e);this._numberProps&&this._numberProps[e]&&(t=Q(t)),this._setProp(W(e),t,!1);}_getProp(e){return this._props[e]}_setProp(e,t,n=!0,o=!0){t!==this._props[e]&&(this._props[e]=t,o&&this._instance&&this._update(),n&&(!0===t?this.setAttribute(K(e),""):"string"==typeof t||"number"==typeof t?this.setAttribute(K(e),t+""):t||this.removeAttribute(K(e))));}_update(){Ti(this._createVNode(),this.shadowRoot);}_createVNode(){const e=Rr(this._def,C({},this._props));return this._instance||(e.ce=e=>{this._instance=e,e.isCE=!0,e.emit=(e,...t)=>{this.dispatchEvent(new CustomEvent(e,{detail:t}));};let t=this;for(;t=t&&(t.parentNode||t.host);)if(t instanceof Os){e.parent=t._instance;break}}),e}_applyStyles(e){e&&e.forEach((e=>{const t=document.createElement("style");t.textContent=e,this.shadowRoot.appendChild(t);}));}}function Fs(e,t){if(128&e.shapeFlag){const n=e.suspense;e=n.activeBranch,n.pendingBranch&&!n.isHydrating&&n.effects.push((()=>{Fs(n.activeBranch,t);}));}for(;e.component;)e=e.component.subTree;if(1&e.shapeFlag&&e.el)Rs(e.el,t);else if(e.type===hr)e.children.forEach((e=>Fs(e,t)));else if(e.type===vr){let{el:n,anchor:o}=e;for(;n&&(Rs(n,t),n!==o);)n=n.nextSibling;}}function Rs(e,t){if(1===e.nodeType){const n=e.style;for(const e in t)n.setProperty(`--${e}`,t[e]);}}const As="transition",Ps="animation",Ms=(e,{slots:t})=>ls(Bn,js(e),t);Ms.displayName="Transition";const Vs={name:String,type:String,css:{type:Boolean,default:!0},duration:[String,Number,Object],enterFromClass:String,enterActiveClass:String,enterToClass:String,appearFromClass:String,appearActiveClass:String,appearToClass:String,leaveFromClass:String,leaveActiveClass:String,leaveToClass:String},Is=Ms.props=C({},Bn.props,Vs),Bs=(e,t=[])=>{N(e)?e.forEach((e=>e(...t))):e&&e(...t);},Ls=e=>!!e&&(N(e)?e.some((e=>e.length>1)):e.length>1);function js(e){const t={};for(const C in e)C in Vs||(t[C]=e[C]);if(!1===e.css)return t;const{name:n="v",type:o,duration:r,enterFromClass:s=`${n}-enter-from`,enterActiveClass:i=`${n}-enter-active`,enterToClass:l=`${n}-enter-to`,appearFromClass:c=s,appearActiveClass:a=i,appearToClass:u=l,leaveFromClass:p=`${n}-leave-from`,leaveActiveClass:f=`${n}-leave-active`,leaveToClass:d=`${n}-leave-to`}=e,h=function(e){if(null==e)return null;if(P(e))return [Us(e.enter),Us(e.leave)];{const t=Us(e);return [t,t]}}(r),m=h&&h[0],g=h&&h[1],{onBeforeEnter:v,onEnter:y,onEnterCancelled:b,onLeave:_,onLeaveCancelled:S,onBeforeAppear:x=v,onAppear:k=y,onAppearCancelled:w=b}=t,T=(e,t,n)=>{Hs(e,t?u:l),Hs(e,t?a:i),n&&n();},N=(e,t)=>{e._isLeaving=!1,Hs(e,p),Hs(e,d),Hs(e,f),t&&t();},E=e=>(t,n)=>{const r=e?k:y,i=()=>T(t,e,n);Bs(r,[t,i]),Ws((()=>{Hs(t,e?c:s),Ds(t,e?u:l),Ls(r)||Ks(t,o,m,i);}));};return C(t,{onBeforeEnter(e){Bs(v,[e]),Ds(e,s),Ds(e,i);},onBeforeAppear(e){Bs(x,[e]),Ds(e,c),Ds(e,a);},onEnter:E(!1),onAppear:E(!0),onLeave(e,t){e._isLeaving=!0;const n=()=>N(e,t);Ds(e,p),Zs(),Ds(e,f),Ws((()=>{e._isLeaving&&(Hs(e,p),Ds(e,d),Ls(_)||Ks(e,o,g,n));})),Bs(_,[e,n]);},onEnterCancelled(e){T(e,!1),Bs(b,[e]);},onAppearCancelled(e){T(e,!0),Bs(w,[e]);},onLeaveCancelled(e){N(e),Bs(S,[e]);}})}function Us(e){return Q(e)}function Ds(e,t){t.split(/\s+/).forEach((t=>t&&e.classList.add(t))),(e._vtc||(e._vtc=new Set)).add(t);}function Hs(e,t){t.split(/\s+/).forEach((t=>t&&e.classList.remove(t)));const{_vtc:n}=e;n&&(n.delete(t),n.size||(e._vtc=void 0));}function Ws(e){requestAnimationFrame((()=>{requestAnimationFrame(e);}));}let zs=0;function Ks(e,t,n,o){const r=e._endId=++zs,s=()=>{r===e._endId&&o();};if(n)return setTimeout(s,n);const{type:i,timeout:l,propCount:c}=Gs(e,t);if(!i)return o();const a=i+"end";let u=0;const p=()=>{e.removeEventListener(a,f),s();},f=t=>{t.target===e&&++u>=c&&p();};setTimeout((()=>{u<c&&p();}),l+1),e.addEventListener(a,f);}function Gs(e,t){const n=window.getComputedStyle(e),o=e=>(n[e]||"").split(", "),r=o("transitionDelay"),s=o("transitionDuration"),i=qs(r,s),l=o("animationDelay"),c=o("animationDuration"),a=qs(l,c);let u=null,p=0,f=0;t===As?i>0&&(u=As,p=i,f=s.length):t===Ps?a>0&&(u=Ps,p=a,f=c.length):(p=Math.max(i,a),u=p>0?i>a?As:Ps:null,f=u?u===As?s.length:c.length:0);return {type:u,timeout:p,propCount:f,hasTransform:u===As&&/\b(transform|all)(,|$)/.test(n.transitionProperty)}}function qs(e,t){for(;e.length<t.length;)e=e.concat(e);return Math.max(...t.map(((t,n)=>Js(t)+Js(e[n]))))}function Js(e){return 1e3*Number(e.slice(0,-1).replace(",","."))}function Zs(){return document.body.offsetHeight}const Ys=new WeakMap,Qs=new WeakMap,Xs={name:"TransitionGroup",props:C({},Is,{tag:String,moveClass:String}),setup(e,{slots:t}){const n=Wr(),o=Vn();let r,s;return co((()=>{if(!r.length)return;const t=e.moveClass||`${e.name||"v"}-move`;if(!function(e,t,n){const o=e.cloneNode();e._vtc&&e._vtc.forEach((e=>{e.split(/\s+/).forEach((e=>e&&o.classList.remove(e)));}));n.split(/\s+/).forEach((e=>e&&o.classList.add(e))),o.style.display="none";const r=1===t.nodeType?t:t.parentNode;r.appendChild(o);const{hasTransform:s}=Gs(o);return r.removeChild(o),s}(r[0].el,n.vnode.el,t))return;r.forEach(ei),r.forEach(ti);const o=r.filter(ni);Zs(),o.forEach((e=>{const n=e.el,o=n.style;Ds(n,t),o.transform=o.webkitTransform=o.transitionDuration="";const r=n._moveCb=e=>{e&&e.target!==n||e&&!/transform$/.test(e.propertyName)||(n.removeEventListener("transitionend",r),n._moveCb=null,Hs(n,t));};n.addEventListener("transitionend",r);}));})),()=>{const i=yt(e),l=js(i);let c=i.tag||hr;r=s,s=t.default?Wn(t.default()):[];for(let e=0;e<s.length;e++){const t=s[e];null!=t.key&&Hn(t,jn(t,l,o,n));}if(r)for(let e=0;e<r.length;e++){const t=r[e];Hn(t,jn(t,l,o,n)),Ys.set(t,t.el.getBoundingClientRect());}return Rr(c,null,s)}}};function ei(e){const t=e.el;t._moveCb&&t._moveCb(),t._enterCb&&t._enterCb();}function ti(e){Qs.set(e,e.el.getBoundingClientRect());}function ni(e){const t=Ys.get(e),n=Qs.get(e),o=t.left-n.left,r=t.top-n.top;if(o||r){const t=e.el.style;return t.transform=t.webkitTransform=`translate(${o}px,${r}px)`,t.transitionDuration="0s",e}}const oi=e=>{const t=e.props["onUpdate:modelValue"]||!1;return N(t)?e=>Z(t,e):t};function ri(e){e.target.composing=!0;}function si(e){const t=e.target;t.composing&&(t.composing=!1,t.dispatchEvent(new Event("input")));}const ii={created(e,{modifiers:{lazy:t,trim:n,number:o}},r){e._assign=oi(r);const s=o||r.props&&"number"===r.props.type;ks(e,t?"change":"input",(t=>{if(t.target.composing)return;let o=e.value;n&&(o=o.trim()),s&&(o=Q(o)),e._assign(o);})),n&&ks(e,"change",(()=>{e.value=e.value.trim();})),t||(ks(e,"compositionstart",ri),ks(e,"compositionend",si),ks(e,"change",si));},mounted(e,{value:t}){e.value=null==t?"":t;},beforeUpdate(e,{value:t,modifiers:{lazy:n,trim:o,number:r}},s){if(e._assign=oi(s),e.composing)return;if(document.activeElement===e&&"range"!==e.type){if(n)return;if(o&&e.value.trim()===t)return;if((r||"number"===e.type)&&Q(e.value)===t)return}const i=null==t?"":t;e.value!==i&&(e.value=i);}},li={deep:!0,created(e,t,n){e._assign=oi(n),ks(e,"change",(()=>{const t=e._modelValue,n=fi(e),o=e.checked,r=e._assign;if(N(t)){const e=h(t,n),s=-1!==e;if(o&&!s)r(t.concat(n));else if(!o&&s){const n=[...t];n.splice(e,1),r(n);}}else if($(t)){const e=new Set(t);o?e.add(n):e.delete(n),r(e);}else r(di(e,o));}));},mounted:ci,beforeUpdate(e,t,n){e._assign=oi(n),ci(e,t,n);}};function ci(e,{value:t,oldValue:n},o){e._modelValue=t,N(t)?e.checked=h(t,o.props.value)>-1:$(t)?e.checked=t.has(o.props.value):t!==n&&(e.checked=d(t,di(e,!0)));}const ai={created(e,{value:t},n){e.checked=d(t,n.props.value),e._assign=oi(n),ks(e,"change",(()=>{e._assign(fi(e));}));},beforeUpdate(e,{value:t,oldValue:n},o){e._assign=oi(o),t!==n&&(e.checked=d(t,o.props.value));}},ui={deep:!0,created(e,{value:t,modifiers:{number:n}},o){const r=$(t);ks(e,"change",(()=>{const t=Array.prototype.filter.call(e.options,(e=>e.selected)).map((e=>n?Q(fi(e)):fi(e)));e._assign(e.multiple?r?new Set(t):t:t[0]);})),e._assign=oi(o);},mounted(e,{value:t}){pi(e,t);},beforeUpdate(e,t,n){e._assign=oi(n);},updated(e,{value:t}){pi(e,t);}};function pi(e,t){const n=e.multiple;if(!n||N(t)||$(t)){for(let o=0,r=e.options.length;o<r;o++){const r=e.options[o],s=fi(r);if(n)r.selected=N(t)?h(t,s)>-1:t.has(s);else if(d(fi(r),t))return void(e.selectedIndex!==o&&(e.selectedIndex=o))}n||-1===e.selectedIndex||(e.selectedIndex=-1);}}function fi(e){return "_value"in e?e._value:e.value}function di(e,t){const n=t?"_trueValue":"_falseValue";return n in e?e[n]:t}const hi={created(e,t,n){mi(e,t,n,null,"created");},mounted(e,t,n){mi(e,t,n,null,"mounted");},beforeUpdate(e,t,n,o){mi(e,t,n,o,"beforeUpdate");},updated(e,t,n,o){mi(e,t,n,o,"updated");}};function mi(e,t,n,o,r){const s=function(e,t){switch(e){case"SELECT":return ui;case"TEXTAREA":return ii;default:switch(t){case"checkbox":return li;case"radio":return ai;default:return ii}}}(e.tagName,n.props&&n.props.type)[r];s&&s(e,t,n,o);}const gi=["ctrl","shift","alt","meta"],vi={stop:e=>e.stopPropagation(),prevent:e=>e.preventDefault(),self:e=>e.target!==e.currentTarget,ctrl:e=>!e.ctrlKey,shift:e=>!e.shiftKey,alt:e=>!e.altKey,meta:e=>!e.metaKey,left:e=>"button"in e&&0!==e.button,middle:e=>"button"in e&&1!==e.button,right:e=>"button"in e&&2!==e.button,exact:(e,t)=>gi.some((n=>e[`${n}Key`]&&!t.includes(n)))},yi={esc:"escape",space:" ",up:"arrow-up",left:"arrow-left",right:"arrow-right",down:"arrow-down",delete:"backspace"},bi={beforeMount(e,{value:t},{transition:n}){e._vod="none"===e.style.display?"":e.style.display,n&&t?n.beforeEnter(e):_i(e,t);},mounted(e,{value:t},{transition:n}){n&&t&&n.enter(e);},updated(e,{value:t,oldValue:n},{transition:o}){!t!=!n&&(o?t?(o.beforeEnter(e),_i(e,!0),o.enter(e)):o.leave(e,(()=>{_i(e,!1);})):_i(e,t));},beforeUnmount(e,{value:t}){_i(e,t);}};function _i(e,t){e.style.display=t?e._vod:"none";}const Si=C({patchProp:(e,t,n,s,i=!1,l,c,a,u)=>{"class"===t?function(e,t,n){const o=e._vtc;o&&(t=(t?[t,...o]:[...o]).join(" ")),null==t?e.removeAttribute("class"):n?e.setAttribute("class",t):e.className=t;}(e,s,i):"style"===t?function(e,t,n){const o=e.style,r=R(n);if(n&&!r){for(const e in n)ms(o,e,n[e]);if(t&&!R(t))for(const e in t)null==n[e]&&ms(o,e,"");}else {const s=o.display;r?t!==n&&(o.cssText=n):t&&e.removeAttribute("style"),"_vod"in e&&(o.display=s);}}(e,n,s):S(t)?x(t)||ws(e,t,0,s,c):("."===t[0]?(t=t.slice(1),1):"^"===t[0]?(t=t.slice(1),0):function(e,t,n,o){if(o)return "innerHTML"===t||"textContent"===t||!!(t in e&&Ns.test(t)&&F(n));if("spellcheck"===t||"draggable"===t||"translate"===t)return !1;if("form"===t)return !1;if("list"===t&&"INPUT"===e.tagName)return !1;if("type"===t&&"TEXTAREA"===e.tagName)return !1;if(Ns.test(t)&&R(n))return !1;return t in e}(e,t,s,i))?function(e,t,n,o,s,i,l){if("innerHTML"===t||"textContent"===t)return o&&l(o,s,i),void(e[t]=null==n?"":n);if("value"===t&&"PROGRESS"!==e.tagName&&!e.tagName.includes("-")){e._value=n;const o=null==n?"":n;return e.value===o&&"OPTION"!==e.tagName||(e.value=o),void(null==n&&e.removeAttribute(t))}let c=!1;if(""===n||null==n){const o=typeof e[t];"boolean"===o?n=r(n):null==n&&"string"===o?(n="",c=!0):"number"===o&&(n=0,c=!0);}try{e[t]=n;}catch(a){}c&&e.removeAttribute(t);}(e,t,s,l,c,a,u):("true-value"===t?e._trueValue=s:"false-value"===t&&(e._falseValue=s),function(e,t,n,s,i){if(s&&t.startsWith("xlink:"))null==n?e.removeAttributeNS(ys,t.slice(6,t.length)):e.setAttributeNS(ys,t,n);else {const s=o(t);null==n||s&&!r(n)?e.removeAttribute(t):e.setAttribute(t,s?"":n);}}(e,t,s,i));}},ds);let xi,Ci=!1;function ki(){return xi||(xi=rr(Si))}function wi(){return xi=Ci?xi:sr(Si),Ci=!0,xi}const Ti=(...e)=>{ki().render(...e);},Ni=(...e)=>{wi().hydrate(...e);};function Ei(e){if(R(e)){return document.querySelector(e)}return e}const $i=y;function Oi(e){throw e}function Fi(e){}function Ri(e,t,n,o){const r=new SyntaxError(String(e));return r.code=e,r.loc=t,r}const Ai=Symbol(""),Pi=Symbol(""),Mi=Symbol(""),Vi=Symbol(""),Ii=Symbol(""),Bi=Symbol(""),Li=Symbol(""),ji=Symbol(""),Ui=Symbol(""),Di=Symbol(""),Hi=Symbol(""),Wi=Symbol(""),zi=Symbol(""),Ki=Symbol(""),Gi=Symbol(""),qi=Symbol(""),Ji=Symbol(""),Zi=Symbol(""),Yi=Symbol(""),Qi=Symbol(""),Xi=Symbol(""),el=Symbol(""),tl=Symbol(""),nl=Symbol(""),ol=Symbol(""),rl=Symbol(""),sl=Symbol(""),il=Symbol(""),ll=Symbol(""),cl=Symbol(""),al=Symbol(""),ul=Symbol(""),pl=Symbol(""),fl=Symbol(""),dl=Symbol(""),hl=Symbol(""),ml=Symbol(""),gl=Symbol(""),vl=Symbol(""),yl={[Ai]:"Fragment",[Pi]:"Teleport",[Mi]:"Suspense",[Vi]:"KeepAlive",[Ii]:"BaseTransition",[Bi]:"openBlock",[Li]:"createBlock",[ji]:"createElementBlock",[Ui]:"createVNode",[Di]:"createElementVNode",[Hi]:"createCommentVNode",[Wi]:"createTextVNode",[zi]:"createStaticVNode",[Ki]:"resolveComponent",[Gi]:"resolveDynamicComponent",[qi]:"resolveDirective",[Ji]:"resolveFilter",[Zi]:"withDirectives",[Yi]:"renderList",[Qi]:"renderSlot",[Xi]:"createSlots",[el]:"toDisplayString",[tl]:"mergeProps",[nl]:"normalizeClass",[ol]:"normalizeStyle",[rl]:"normalizeProps",[sl]:"guardReactiveProps",[il]:"toHandlers",[ll]:"camelize",[cl]:"capitalize",[al]:"toHandlerKey",[ul]:"setBlockTracking",[pl]:"pushScopeId",[fl]:"popScopeId",[dl]:"withCtx",[hl]:"unref",[ml]:"isRef",[gl]:"withMemo",[vl]:"isMemoSame"};const bl={source:"",start:{line:1,column:1,offset:0},end:{line:1,column:1,offset:0}};function _l(e,t,n,o,r,s,i,l=!1,c=!1,a=!1,u=bl){return e&&(l?(e.helper(Bi),e.helper(Jl(e.inSSR,a))):e.helper(ql(e.inSSR,a)),i&&e.helper(Zi)),{type:13,tag:t,props:n,children:o,patchFlag:r,dynamicProps:s,directives:i,isBlock:l,disableTracking:c,isComponent:a,loc:u}}function Sl(e,t=bl){return {type:17,loc:t,elements:e}}function xl(e,t=bl){return {type:15,loc:t,properties:e}}function Cl(e,t){return {type:16,loc:bl,key:R(e)?kl(e,!0):e,value:t}}function kl(e,t=!1,n=bl,o=0){return {type:4,loc:n,content:e,isStatic:t,constType:t?3:o}}function wl(e,t=bl){return {type:8,loc:t,children:e}}function Tl(e,t=[],n=bl){return {type:14,loc:n,callee:e,arguments:t}}function Nl(e,t,n=!1,o=!1,r=bl){return {type:18,params:e,returns:t,newline:n,isSlot:o,loc:r}}function El(e,t,n,o=!0){return {type:19,test:e,consequent:t,alternate:n,newline:o,loc:bl}}const $l=e=>4===e.type&&e.isStatic,Ol=(e,t)=>e===t||e===K(t);function Fl(e){return Ol(e,"Teleport")?Pi:Ol(e,"Suspense")?Mi:Ol(e,"KeepAlive")?Vi:Ol(e,"BaseTransition")?Ii:void 0}const Rl=/^\d|[^\$\w]/,Al=e=>!Rl.test(e),Pl=/[A-Za-z_$\xA0-\uFFFF]/,Ml=/[\.\?\w$\xA0-\uFFFF]/,Vl=/\s+[.[]\s*|\s*[.[]\s+/g,Il=e=>{e=e.trim().replace(Vl,(e=>e.trim()));let t=0,n=[],o=0,r=0,s=null;for(let i=0;i<e.length;i++){const l=e.charAt(i);switch(t){case 0:if("["===l)n.push(t),t=1,o++;else if("("===l)n.push(t),t=2,r++;else if(!(0===i?Pl:Ml).test(l))return !1;break;case 1:"'"===l||'"'===l||"`"===l?(n.push(t),t=3,s=l):"["===l?o++:"]"===l&&(--o||(t=n.pop()));break;case 2:if("'"===l||'"'===l||"`"===l)n.push(t),t=3,s=l;else if("("===l)r++;else if(")"===l){if(i===e.length-1)return !1;--r||(t=n.pop());}break;case 3:l===s&&(t=n.pop(),s=null);}}return !o&&!r};function Bl(e,t,n){const o={source:e.source.slice(t,t+n),start:Ll(e.start,e.source,t),end:e.end};return null!=n&&(o.end=Ll(e.start,e.source,t+n)),o}function Ll(e,t,n=t.length){return jl(C({},e),t,n)}function jl(e,t,n=t.length){let o=0,r=-1;for(let s=0;s<n;s++)10===t.charCodeAt(s)&&(o++,r=s);return e.offset+=n,e.line+=o,e.column=-1===r?e.column+n:n-r,e}function Ul(e,t,n=!1){for(let o=0;o<e.props.length;o++){const r=e.props[o];if(7===r.type&&(n||r.exp)&&(R(t)?r.name===t:t.test(r.name)))return r}}function Dl(e,t,n=!1,o=!1){for(let r=0;r<e.props.length;r++){const s=e.props[r];if(6===s.type){if(n)continue;if(s.name===t&&(s.value||o))return s}else if("bind"===s.name&&(s.exp||o)&&Hl(s.arg,t))return s}}function Hl(e,t){return !(!e||!$l(e)||e.content!==t)}function Wl(e){return 5===e.type||2===e.type}function zl(e){return 7===e.type&&"slot"===e.name}function Kl(e){return 1===e.type&&3===e.tagType}function Gl(e){return 1===e.type&&2===e.tagType}function ql(e,t){return e||t?Ui:Di}function Jl(e,t){return e||t?Li:ji}const Zl=new Set([rl,sl]);function Yl(e,t=[]){if(e&&!R(e)&&14===e.type){const n=e.callee;if(!R(n)&&Zl.has(n))return Yl(e.arguments[0],t.concat(e))}return [e,t]}function Ql(e,t,n){let o,r,s=13===e.type?e.props:e.arguments[2],i=[];if(s&&!R(s)&&14===s.type){const e=Yl(s);s=e[0],i=e[1],r=i[i.length-1];}if(null==s||R(s))o=xl([t]);else if(14===s.type){const e=s.arguments[0];R(e)||15!==e.type?s.callee===il?o=Tl(n.helper(tl),[xl([t]),s]):s.arguments.unshift(xl([t])):e.properties.unshift(t),!o&&(o=s);}else if(15===s.type){let e=!1;if(4===t.key.type){const n=t.key.content;e=s.properties.some((e=>4===e.key.type&&e.key.content===n));}e||s.properties.unshift(t),o=s;}else o=Tl(n.helper(tl),[xl([t]),s]),r&&r.callee===sl&&(r=i[i.length-2]);13===e.type?r?r.arguments[0]=o:e.props=o:r?r.arguments[0]=o:e.arguments[2]=o;}function Xl(e,t){return `_${t}_${e.replace(/[^\w]/g,((t,n)=>"-"===t?"_":e.charCodeAt(n).toString()))}`}function ec(e,{helper:t,removeHelper:n,inSSR:o}){e.isBlock||(e.isBlock=!0,n(ql(o,e.isComponent)),t(Bi),t(Jl(o,e.isComponent)));}const tc=/&(gt|lt|amp|apos|quot);/g,nc={gt:">",lt:"<",amp:"&",apos:"'",quot:'"'},oc={delimiters:["{{","}}"],getNamespace:()=>0,getTextMode:()=>0,isVoidTag:b,isPreTag:b,isCustomElement:b,decodeEntities:e=>e.replace(tc,((e,t)=>nc[t])),onError:Oi,onWarn:Fi,comments:!1};function rc(e,t={}){const n=function(e,t){const n=C({},oc);let o;for(o in t)n[o]=void 0===t[o]?oc[o]:t[o];return {options:n,column:1,line:1,offset:0,originalSource:e,source:e,inPre:!1,inVPre:!1,onWarn:n.onWarn}}(e,t),o=yc(n);return function(e,t=bl){return {type:0,children:e,helpers:[],components:[],directives:[],hoists:[],imports:[],cached:0,temps:0,codegenNode:void 0,loc:t}}(sc(n,0,[]),bc(n,o))}function sc(e,t,n){const o=_c(n),r=o?o.ns:0,s=[];for(;!wc(e,t,n);){const i=e.source;let l;if(0===t||1===t)if(!e.inVPre&&Sc(i,e.options.delimiters[0]))l=mc(e,t);else if(0===t&&"<"===i[0])if(1===i.length);else if("!"===i[1])l=Sc(i,"\x3c!--")?cc(e):Sc(i,"<!DOCTYPE")?ac(e):Sc(i,"<![CDATA[")&&0!==r?lc(e,n):ac(e);else if("/"===i[1])if(2===i.length);else {if(">"===i[2]){xc(e,3);continue}if(/[a-z]/i.test(i[2])){fc(e,1,o);continue}l=ac(e);}else /[a-z]/i.test(i[1])?l=uc(e,n):"?"===i[1]&&(l=ac(e));if(l||(l=gc(e,t)),N(l))for(let e=0;e<l.length;e++)ic(s,l[e]);else ic(s,l);}let i=!1;if(2!==t&&1!==t){const t="preserve"!==e.options.whitespace;for(let n=0;n<s.length;n++){const o=s[n];if(e.inPre||2!==o.type)3!==o.type||e.options.comments||(i=!0,s[n]=null);else if(/[^\t\r\n\f ]/.test(o.content))t&&(o.content=o.content.replace(/[\t\r\n\f ]+/g," "));else {const e=s[n-1],r=s[n+1];!e||!r||t&&(3===e.type||3===r.type||1===e.type&&1===r.type&&/[\r\n]/.test(o.content))?(i=!0,s[n]=null):o.content=" ";}}if(e.inPre&&o&&e.options.isPreTag(o.tag)){const e=s[0];e&&2===e.type&&(e.content=e.content.replace(/^\r?\n/,""));}}return i?s.filter(Boolean):s}function ic(e,t){if(2===t.type){const n=_c(e);if(n&&2===n.type&&n.loc.end.offset===t.loc.start.offset)return n.content+=t.content,n.loc.end=t.loc.end,void(n.loc.source+=t.loc.source)}e.push(t);}function lc(e,t){xc(e,9);const n=sc(e,3,t);return 0===e.source.length||xc(e,3),n}function cc(e){const t=yc(e);let n;const o=/--(\!)?>/.exec(e.source);if(o){n=e.source.slice(4,o.index);const t=e.source.slice(0,o.index);let r=1,s=0;for(;-1!==(s=t.indexOf("\x3c!--",r));)xc(e,s-r+1),r=s+1;xc(e,o.index+o[0].length-r+1);}else n=e.source.slice(4),xc(e,e.source.length);return {type:3,content:n,loc:bc(e,t)}}function ac(e){const t=yc(e),n="?"===e.source[1]?1:2;let o;const r=e.source.indexOf(">");return -1===r?(o=e.source.slice(n),xc(e,e.source.length)):(o=e.source.slice(n,r),xc(e,r+1)),{type:3,content:o,loc:bc(e,t)}}function uc(e,t){const n=e.inPre,o=e.inVPre,r=_c(t),s=fc(e,0,r),i=e.inPre&&!n,l=e.inVPre&&!o;if(s.isSelfClosing||e.options.isVoidTag(s.tag))return i&&(e.inPre=!1),l&&(e.inVPre=!1),s;t.push(s);const c=e.options.getTextMode(s,r),a=sc(e,c,t);if(t.pop(),s.children=a,Tc(e.source,s.tag))fc(e,1,r);else if(0===e.source.length&&"script"===s.tag.toLowerCase()){const e=a[0];e&&Sc(e.loc.source,"\x3c!--");}return s.loc=bc(e,s.loc.start),i&&(e.inPre=!1),l&&(e.inVPre=!1),s}const pc=t("if,else,else-if,for,slot");function fc(e,t,n){const o=yc(e),r=/^<\/?([a-z][^\t\r\n\f />]*)/i.exec(e.source),s=r[1],i=e.options.getNamespace(s,n);xc(e,r[0].length),Cc(e);const l=yc(e),c=e.source;e.options.isPreTag(s)&&(e.inPre=!0);let a=dc(e,t);0===t&&!e.inVPre&&a.some((e=>7===e.type&&"pre"===e.name))&&(e.inVPre=!0,C(e,l),e.source=c,a=dc(e,t).filter((e=>"v-pre"!==e.name)));let u=!1;if(0===e.source.length||(u=Sc(e.source,"/>"),xc(e,u?2:1)),1===t)return;let p=0;return e.inVPre||("slot"===s?p=2:"template"===s?a.some((e=>7===e.type&&pc(e.name)))&&(p=3):function(e,t,n){const o=n.options;if(o.isCustomElement(e))return !1;if("component"===e||/^[A-Z]/.test(e)||Fl(e)||o.isBuiltInComponent&&o.isBuiltInComponent(e)||o.isNativeTag&&!o.isNativeTag(e))return !0;for(let r=0;r<t.length;r++){const e=t[r];if(6===e.type){if("is"===e.name&&e.value&&e.value.content.startsWith("vue:"))return !0}else {if("is"===e.name)return !0;"bind"===e.name&&Hl(e.arg,"is");}}}(s,a,e)&&(p=1)),{type:1,ns:i,tag:s,tagType:p,props:a,isSelfClosing:u,children:[],loc:bc(e,o),codegenNode:void 0}}function dc(e,t){const n=[],o=new Set;for(;e.source.length>0&&!Sc(e.source,">")&&!Sc(e.source,"/>");){if(Sc(e.source,"/")){xc(e,1),Cc(e);continue}const r=hc(e,o);6===r.type&&r.value&&"class"===r.name&&(r.value.content=r.value.content.replace(/\s+/g," ").trim()),0===t&&n.push(r),/^[^\t\r\n\f />]/.test(e.source),Cc(e);}return n}function hc(e,t){const n=yc(e),o=/^[^\t\r\n\f />][^\t\r\n\f />=]*/.exec(e.source)[0];t.has(o),t.add(o);{const e=/["'<]/g;for(;e.exec(o););}let r;xc(e,o.length),/^[\t\r\n\f ]*=/.test(e.source)&&(Cc(e),xc(e,1),Cc(e),r=function(e){const t=yc(e);let n;const o=e.source[0],r='"'===o||"'"===o;if(r){xc(e,1);const t=e.source.indexOf(o);-1===t?n=vc(e,e.source.length,4):(n=vc(e,t,4),xc(e,1));}else {const t=/^[^\t\r\n\f >]+/.exec(e.source);if(!t)return;const o=/["'<=`]/g;for(;o.exec(t[0]););n=vc(e,t[0].length,4);}return {content:n,isQuoted:r,loc:bc(e,t)}}(e));const s=bc(e,n);if(!e.inVPre&&/^(v-[A-Za-z0-9-]|:|\.|@|#)/.test(o)){const t=/(?:^v-([a-z0-9-]+))?(?:(?::|^\.|^@|^#)(\[[^\]]+\]|[^\.]+))?(.+)?$/i.exec(o);let i,l=Sc(o,"."),c=t[1]||(l||Sc(o,":")?"bind":Sc(o,"@")?"on":"slot");if(t[2]){const r="slot"===c,s=o.lastIndexOf(t[2]),l=bc(e,kc(e,n,s),kc(e,n,s+t[2].length+(r&&t[3]||"").length));let a=t[2],u=!0;a.startsWith("[")?(u=!1,a=a.endsWith("]")?a.slice(1,a.length-1):a.slice(1)):r&&(a+=t[3]||""),i={type:4,content:a,isStatic:u,constType:u?3:0,loc:l};}if(r&&r.isQuoted){const e=r.loc;e.start.offset++,e.start.column++,e.end=Ll(e.start,r.content),e.source=e.source.slice(1,-1);}const a=t[3]?t[3].slice(1).split("."):[];return l&&a.push("prop"),{type:7,name:c,exp:r&&{type:4,content:r.content,isStatic:!1,constType:0,loc:r.loc},arg:i,modifiers:a,loc:s}}return !e.inVPre&&Sc(o,"v-"),{type:6,name:o,value:r&&{type:2,content:r.content,loc:r.loc},loc:s}}function mc(e,t){const[n,o]=e.options.delimiters,r=e.source.indexOf(o,n.length);if(-1===r)return;const s=yc(e);xc(e,n.length);const i=yc(e),l=yc(e),c=r-n.length,a=e.source.slice(0,c),u=vc(e,c,t),p=u.trim(),f=u.indexOf(p);f>0&&jl(i,a,f);return jl(l,a,c-(u.length-p.length-f)),xc(e,o.length),{type:5,content:{type:4,isStatic:!1,constType:0,content:p,loc:bc(e,i,l)},loc:bc(e,s)}}function gc(e,t){const n=3===t?["]]>"]:["<",e.options.delimiters[0]];let o=e.source.length;for(let s=0;s<n.length;s++){const t=e.source.indexOf(n[s],1);-1!==t&&o>t&&(o=t);}const r=yc(e);return {type:2,content:vc(e,o,t),loc:bc(e,r)}}function vc(e,t,n){const o=e.source.slice(0,t);return xc(e,t),2!==n&&3!==n&&o.includes("&")?e.options.decodeEntities(o,4===n):o}function yc(e){const{column:t,line:n,offset:o}=e;return {column:t,line:n,offset:o}}function bc(e,t,n){return {start:t,end:n=n||yc(e),source:e.originalSource.slice(t.offset,n.offset)}}function _c(e){return e[e.length-1]}function Sc(e,t){return e.startsWith(t)}function xc(e,t){const{source:n}=e;jl(e,n,t),e.source=n.slice(t);}function Cc(e){const t=/^[\t\r\n\f ]+/.exec(e.source);t&&xc(e,t[0].length);}function kc(e,t,n){return Ll(t,e.originalSource.slice(t.offset,n),n)}function wc(e,t,n){const o=e.source;switch(t){case 0:if(Sc(o,"</"))for(let e=n.length-1;e>=0;--e)if(Tc(o,n[e].tag))return !0;break;case 1:case 2:{const e=_c(n);if(e&&Tc(o,e.tag))return !0;break}case 3:if(Sc(o,"]]>"))return !0}return !o}function Tc(e,t){return Sc(e,"</")&&e.slice(2,2+t.length).toLowerCase()===t.toLowerCase()&&/[\t\r\n\f />]/.test(e[2+t.length]||">")}function Nc(e,t){$c(e,t,Ec(e,e.children[0]));}function Ec(e,t){const{children:n}=e;return 1===n.length&&1===t.type&&!Gl(t)}function $c(e,t,n=!1){const{children:o}=e,r=o.length;let s=0;for(let i=0;i<o.length;i++){const e=o[i];if(1===e.type&&0===e.tagType){const o=n?0:Oc(e,t);if(o>0){if(o>=2){e.codegenNode.patchFlag="-1",e.codegenNode=t.hoist(e.codegenNode),s++;continue}}else {const n=e.codegenNode;if(13===n.type){const o=Mc(n);if((!o||512===o||1===o)&&Ac(e,t)>=2){const o=Pc(e);o&&(n.props=t.hoist(o));}n.dynamicProps&&(n.dynamicProps=t.hoist(n.dynamicProps));}}}else 12===e.type&&Oc(e.content,t)>=2&&(e.codegenNode=t.hoist(e.codegenNode),s++);if(1===e.type){const n=1===e.tagType;n&&t.scopes.vSlot++,$c(e,t),n&&t.scopes.vSlot--;}else if(11===e.type)$c(e,t,1===e.children.length);else if(9===e.type)for(let n=0;n<e.branches.length;n++)$c(e.branches[n],t,1===e.branches[n].children.length);}s&&t.transformHoist&&t.transformHoist(o,t,e),s&&s===r&&1===e.type&&0===e.tagType&&e.codegenNode&&13===e.codegenNode.type&&N(e.codegenNode.children)&&(e.codegenNode.children=t.hoist(Sl(e.codegenNode.children)));}function Oc(e,t){const{constantCache:n}=t;switch(e.type){case 1:if(0!==e.tagType)return 0;const o=n.get(e);if(void 0!==o)return o;const r=e.codegenNode;if(13!==r.type)return 0;if(r.isBlock&&"svg"!==e.tag&&"foreignObject"!==e.tag)return 0;if(Mc(r))return n.set(e,0),0;{let o=3;const s=Ac(e,t);if(0===s)return n.set(e,0),0;s<o&&(o=s);for(let r=0;r<e.children.length;r++){const s=Oc(e.children[r],t);if(0===s)return n.set(e,0),0;s<o&&(o=s);}if(o>1)for(let r=0;r<e.props.length;r++){const s=e.props[r];if(7===s.type&&"bind"===s.name&&s.exp){const r=Oc(s.exp,t);if(0===r)return n.set(e,0),0;r<o&&(o=r);}}if(r.isBlock){for(let t=0;t<e.props.length;t++){if(7===e.props[t].type)return n.set(e,0),0}t.removeHelper(Bi),t.removeHelper(Jl(t.inSSR,r.isComponent)),r.isBlock=!1,t.helper(ql(t.inSSR,r.isComponent));}return n.set(e,o),o}case 2:case 3:return 3;case 9:case 11:case 10:default:return 0;case 5:case 12:return Oc(e.content,t);case 4:return e.constType;case 8:let s=3;for(let n=0;n<e.children.length;n++){const o=e.children[n];if(R(o)||A(o))continue;const r=Oc(o,t);if(0===r)return 0;r<s&&(s=r);}return s}}const Fc=new Set([nl,ol,rl,sl]);function Rc(e,t){if(14===e.type&&!R(e.callee)&&Fc.has(e.callee)){const n=e.arguments[0];if(4===n.type)return Oc(n,t);if(14===n.type)return Rc(n,t)}return 0}function Ac(e,t){let n=3;const o=Pc(e);if(o&&15===o.type){const{properties:e}=o;for(let o=0;o<e.length;o++){const{key:r,value:s}=e[o],i=Oc(r,t);if(0===i)return i;let l;if(i<n&&(n=i),l=4===s.type?Oc(s,t):14===s.type?Rc(s,t):0,0===l)return l;l<n&&(n=l);}}return n}function Pc(e){const t=e.codegenNode;if(13===t.type)return t.props}function Mc(e){const t=e.patchFlag;return t?parseInt(t,10):void 0}function Vc(e,{filename:t="",prefixIdentifiers:n=!1,hoistStatic:o=!1,cacheHandlers:r=!1,nodeTransforms:s=[],directiveTransforms:i={},transformHoist:l=null,isBuiltInComponent:c=y,isCustomElement:a=y,expressionPlugins:u=[],scopeId:p=null,slotted:f=!0,ssr:d=!1,inSSR:h=!1,ssrCssVars:m="",bindingMetadata:v=g,inline:b=!1,isTS:_=!1,onError:S=Oi,onWarn:x=Fi,compatConfig:C}){const k=t.replace(/\?.*$/,"").match(/([^/\\]+)\.\w+$/),w={selfName:k&&G(W(k[1])),prefixIdentifiers:n,hoistStatic:o,cacheHandlers:r,nodeTransforms:s,directiveTransforms:i,transformHoist:l,isBuiltInComponent:c,isCustomElement:a,expressionPlugins:u,scopeId:p,slotted:f,ssr:d,inSSR:h,ssrCssVars:m,bindingMetadata:v,inline:b,isTS:_,onError:S,onWarn:x,compatConfig:C,root:e,helpers:new Map,components:new Set,directives:new Set,hoists:[],imports:[],constantCache:new Map,temps:0,cached:0,identifiers:Object.create(null),scopes:{vFor:0,vSlot:0,vPre:0,vOnce:0},parent:null,currentNode:e,childIndex:0,inVOnce:!1,helper(e){const t=w.helpers.get(e)||0;return w.helpers.set(e,t+1),e},removeHelper(e){const t=w.helpers.get(e);if(t){const n=t-1;n?w.helpers.set(e,n):w.helpers.delete(e);}},helperString:e=>`_${yl[w.helper(e)]}`,replaceNode(e){w.parent.children[w.childIndex]=w.currentNode=e;},removeNode(e){const t=e?w.parent.children.indexOf(e):w.currentNode?w.childIndex:-1;e&&e!==w.currentNode?w.childIndex>t&&(w.childIndex--,w.onNodeRemoved()):(w.currentNode=null,w.onNodeRemoved()),w.parent.children.splice(t,1);},onNodeRemoved:()=>{},addIdentifiers(e){},removeIdentifiers(e){},hoist(e){R(e)&&(e=kl(e)),w.hoists.push(e);const t=kl(`_hoisted_${w.hoists.length}`,!1,e.loc,2);return t.hoisted=e,t},cache:(e,t=!1)=>function(e,t,n=!1){return {type:20,index:e,value:t,isVNode:n,loc:bl}}(w.cached++,e,t)};return w}function Ic(e,t){const n=Vc(e,t);Bc(e,n),t.hoistStatic&&Nc(e,n),t.ssr||function(e,t){const{helper:n}=t,{children:o}=e;if(1===o.length){const n=o[0];if(Ec(e,n)&&n.codegenNode){const o=n.codegenNode;13===o.type&&ec(o,t),e.codegenNode=o;}else e.codegenNode=n;}else if(o.length>1){let o=64;e.codegenNode=_l(t,n(Ai),void 0,e.children,o+"",void 0,void 0,!0,void 0,!1);}}(e,n),e.helpers=[...n.helpers.keys()],e.components=[...n.components],e.directives=[...n.directives],e.imports=n.imports,e.hoists=n.hoists,e.temps=n.temps,e.cached=n.cached;}function Bc(e,t){t.currentNode=e;const{nodeTransforms:n}=t,o=[];for(let s=0;s<n.length;s++){const r=n[s](e,t);if(r&&(N(r)?o.push(...r):o.push(r)),!t.currentNode)return;e=t.currentNode;}switch(e.type){case 3:t.ssr||t.helper(Hi);break;case 5:t.ssr||t.helper(el);break;case 9:for(let n=0;n<e.branches.length;n++)Bc(e.branches[n],t);break;case 10:case 11:case 1:case 0:!function(e,t){let n=0;const o=()=>{n--;};for(;n<e.children.length;n++){const r=e.children[n];R(r)||(t.parent=e,t.childIndex=n,t.onNodeRemoved=o,Bc(r,t));}}(e,t);}t.currentNode=e;let r=o.length;for(;r--;)o[r]();}function Lc(e,t){const n=R(e)?t=>t===e:t=>e.test(t);return (e,o)=>{if(1===e.type){const{props:r}=e;if(3===e.tagType&&r.some(zl))return;const s=[];for(let i=0;i<r.length;i++){const l=r[i];if(7===l.type&&n(l.name)){r.splice(i,1),i--;const n=t(e,l,o);n&&s.push(n);}}return s}}}const jc="/*#__PURE__*/",Uc=e=>`${yl[e]}: _${yl[e]}`;function Dc(e,t={}){const n=function(e,{mode:t="function",prefixIdentifiers:n="module"===t,sourceMap:o=!1,filename:r="template.vue.html",scopeId:s=null,optimizeImports:i=!1,runtimeGlobalName:l="Vue",runtimeModuleName:c="vue",ssrRuntimeModuleName:a="vue/server-renderer",ssr:u=!1,isTS:p=!1,inSSR:f=!1}){const d={mode:t,prefixIdentifiers:n,sourceMap:o,filename:r,scopeId:s,optimizeImports:i,runtimeGlobalName:l,runtimeModuleName:c,ssrRuntimeModuleName:a,ssr:u,isTS:p,inSSR:f,source:e.loc.source,code:"",column:1,line:1,offset:0,indentLevel:0,pure:!1,map:void 0,helper:e=>`_${yl[e]}`,push(e,t){d.code+=e;},indent(){h(++d.indentLevel);},deindent(e=!1){e?--d.indentLevel:h(--d.indentLevel);},newline(){h(d.indentLevel);}};function h(e){d.push("\n"+"  ".repeat(e));}return d}(e,t);t.onContextCreated&&t.onContextCreated(n);const{mode:o,push:r,prefixIdentifiers:s,indent:i,deindent:l,newline:c,ssr:a}=n,u=e.helpers.length>0,p=!s&&"module"!==o;!function(e,t){const{push:n,newline:o,runtimeGlobalName:r}=t,s=r;if(e.helpers.length>0&&(n(`const _Vue = ${s}\n`),e.hoists.length)){n(`const { ${[Ui,Di,Hi,Wi,zi].filter((t=>e.helpers.includes(t))).map(Uc).join(", ")} } = _Vue\n`);}(function(e,t){if(!e.length)return;t.pure=!0;const{push:n,newline:o}=t;o();for(let r=0;r<e.length;r++){const s=e[r];s&&(n(`const _hoisted_${r+1} = `),Kc(s,t),o());}t.pure=!1;})(e.hoists,t),o(),n("return ");}(e,n);if(r(`function ${a?"ssrRender":"render"}(${(a?["_ctx","_push","_parent","_attrs"]:["_ctx","_cache"]).join(", ")}) {`),i(),p&&(r("with (_ctx) {"),i(),u&&(r(`const { ${e.helpers.map(Uc).join(", ")} } = _Vue`),r("\n"),c())),e.components.length&&(Hc(e.components,"component",n),(e.directives.length||e.temps>0)&&c()),e.directives.length&&(Hc(e.directives,"directive",n),e.temps>0&&c()),e.temps>0){r("let ");for(let t=0;t<e.temps;t++)r(`${t>0?", ":""}_temp${t}`);}return (e.components.length||e.directives.length||e.temps)&&(r("\n"),c()),a||r("return "),e.codegenNode?Kc(e.codegenNode,n):r("null"),p&&(l(),r("}")),l(),r("}"),{ast:e,code:n.code,preamble:"",map:n.map?n.map.toJSON():void 0}}function Hc(e,t,{helper:n,push:o,newline:r,isTS:s}){const i=n("component"===t?Ki:qi);for(let l=0;l<e.length;l++){let n=e[l];const c=n.endsWith("__self");c&&(n=n.slice(0,-6)),o(`const ${Xl(n,t)} = ${i}(${JSON.stringify(n)}${c?", true":""})${s?"!":""}`),l<e.length-1&&r();}}function Wc(e,t){const n=e.length>3||!1;t.push("["),n&&t.indent(),zc(e,t,n),n&&t.deindent(),t.push("]");}function zc(e,t,n=!1,o=!0){const{push:r,newline:s}=t;for(let i=0;i<e.length;i++){const l=e[i];R(l)?r(l):N(l)?Wc(l,t):Kc(l,t),i<e.length-1&&(n?(o&&r(","),s()):o&&r(", "));}}function Kc(e,t){if(R(e))t.push(e);else if(A(e))t.push(t.helper(e));else switch(e.type){case 1:case 9:case 11:case 12:Kc(e.codegenNode,t);break;case 2:!function(e,t){t.push(JSON.stringify(e.content),e);}(e,t);break;case 4:Gc(e,t);break;case 5:!function(e,t){const{push:n,helper:o,pure:r}=t;r&&n(jc);n(`${o(el)}(`),Kc(e.content,t),n(")");}(e,t);break;case 8:qc(e,t);break;case 3:!function(e,t){const{push:n,helper:o,pure:r}=t;r&&n(jc);n(`${o(Hi)}(${JSON.stringify(e.content)})`,e);}(e,t);break;case 13:!function(e,t){const{push:n,helper:o,pure:r}=t,{tag:s,props:i,children:l,patchFlag:c,dynamicProps:a,directives:u,isBlock:p,disableTracking:f,isComponent:d}=e;u&&n(o(Zi)+"(");p&&n(`(${o(Bi)}(${f?"true":""}), `);r&&n(jc);const h=p?Jl(t.inSSR,d):ql(t.inSSR,d);n(o(h)+"(",e),zc(function(e){let t=e.length;for(;t--&&null==e[t];);return e.slice(0,t+1).map((e=>e||"null"))}([s,i,l,c,a]),t),n(")"),p&&n(")");u&&(n(", "),Kc(u,t),n(")"));}(e,t);break;case 14:!function(e,t){const{push:n,helper:o,pure:r}=t,s=R(e.callee)?e.callee:o(e.callee);r&&n(jc);n(s+"(",e),zc(e.arguments,t),n(")");}(e,t);break;case 15:!function(e,t){const{push:n,indent:o,deindent:r,newline:s}=t,{properties:i}=e;if(!i.length)return void n("{}",e);const l=i.length>1||!1;n(l?"{":"{ "),l&&o();for(let c=0;c<i.length;c++){const{key:e,value:o}=i[c];Jc(e,t),n(": "),Kc(o,t),c<i.length-1&&(n(","),s());}l&&r(),n(l?"}":" }");}(e,t);break;case 17:!function(e,t){Wc(e.elements,t);}(e,t);break;case 18:!function(e,t){const{push:n,indent:o,deindent:r}=t,{params:s,returns:i,body:l,newline:c,isSlot:a}=e;a&&n(`_${yl[dl]}(`);n("(",e),N(s)?zc(s,t):s&&Kc(s,t);n(") => "),(c||l)&&(n("{"),o());i?(c&&n("return "),N(i)?Wc(i,t):Kc(i,t)):l&&Kc(l,t);(c||l)&&(r(),n("}"));a&&n(")");}(e,t);break;case 19:!function(e,t){const{test:n,consequent:o,alternate:r,newline:s}=e,{push:i,indent:l,deindent:c,newline:a}=t;if(4===n.type){const e=!Al(n.content);e&&i("("),Gc(n,t),e&&i(")");}else i("("),Kc(n,t),i(")");s&&l(),t.indentLevel++,s||i(" "),i("? "),Kc(o,t),t.indentLevel--,s&&a(),s||i(" "),i(": ");const u=19===r.type;u||t.indentLevel++;Kc(r,t),u||t.indentLevel--;s&&c(!0);}(e,t);break;case 20:!function(e,t){const{push:n,helper:o,indent:r,deindent:s,newline:i}=t;n(`_cache[${e.index}] || (`),e.isVNode&&(r(),n(`${o(ul)}(-1),`),i());n(`_cache[${e.index}] = `),Kc(e.value,t),e.isVNode&&(n(","),i(),n(`${o(ul)}(1),`),i(),n(`_cache[${e.index}]`),s());n(")");}(e,t);break;case 21:zc(e.body,t,!0,!1);}}function Gc(e,t){const{content:n,isStatic:o}=e;t.push(o?JSON.stringify(n):n,e);}function qc(e,t){for(let n=0;n<e.children.length;n++){const o=e.children[n];R(o)?t.push(o):Kc(o,t);}}function Jc(e,t){const{push:n}=t;if(8===e.type)n("["),qc(e,t),n("]");else if(e.isStatic){n(Al(e.content)?e.content:JSON.stringify(e.content),e);}else n(`[${e.content}]`,e);}const Zc=Lc(/^(if|else|else-if)$/,((e,t,n)=>function(e,t,n,o){if(!("else"===t.name||t.exp&&t.exp.content.trim())){t.exp=kl("true",!1,t.exp?t.exp.loc:e.loc);}if("if"===t.name){const r=Yc(e,t),s={type:9,loc:e.loc,branches:[r]};if(n.replaceNode(s),o)return o(s,r,!0)}else {const r=n.parent.children;let s=r.indexOf(e);for(;s-- >=-1;){const i=r[s];if(!i||2!==i.type||i.content.trim().length){if(i&&9===i.type){n.removeNode();const r=Yc(e,t);i.branches.push(r);const s=o&&o(i,r,!1);Bc(r,n),s&&s(),n.currentNode=null;}break}n.removeNode(i);}}}(e,t,n,((e,t,o)=>{const r=n.parent.children;let s=r.indexOf(e),i=0;for(;s-- >=0;){const e=r[s];e&&9===e.type&&(i+=e.branches.length);}return ()=>{if(o)e.codegenNode=Qc(t,i,n);else {const o=function(e){for(;;)if(19===e.type){if(19!==e.alternate.type)return e;e=e.alternate;}else 20===e.type&&(e=e.value);}(e.codegenNode);o.alternate=Qc(t,i+e.branches.length-1,n);}}}))));function Yc(e,t){const n=3===e.tagType;return {type:10,loc:e.loc,condition:"else"===t.name?void 0:t.exp,children:n&&!Ul(e,"for")?e.children:[e],userKey:Dl(e,"key"),isTemplateIf:n}}function Qc(e,t,n){return e.condition?El(e.condition,Xc(e,t,n),Tl(n.helper(Hi),['""',"true"])):Xc(e,t,n)}function Xc(e,t,n){const{helper:o}=n,r=Cl("key",kl(`${t}`,!1,bl,2)),{children:s}=e,i=s[0];if(1!==s.length||1!==i.type){if(1===s.length&&11===i.type){const e=i.codegenNode;return Ql(e,r,n),e}{let t=64;return _l(n,o(Ai),xl([r]),s,t+"",void 0,void 0,!0,!1,!1,e.loc)}}{const e=i.codegenNode,t=14===(l=e).type&&l.callee===gl?l.arguments[1].returns:l;return 13===t.type&&ec(t,n),Ql(t,r,n),e}var l;}const ea=Lc("for",((e,t,n)=>{const{helper:o,removeHelper:r}=n;return function(e,t,n,o){if(!t.exp)return;const r=ra(t.exp);if(!r)return;const{scopes:s}=n,{source:i,value:l,key:c,index:a}=r,u={type:11,loc:t.loc,source:i,valueAlias:l,keyAlias:c,objectIndexAlias:a,parseResult:r,children:Kl(e)?e.children:[e]};n.replaceNode(u),s.vFor++;const p=o&&o(u);return ()=>{s.vFor--,p&&p();}}(e,t,n,(t=>{const s=Tl(o(Yi),[t.source]),i=Kl(e),l=Ul(e,"memo"),c=Dl(e,"key"),a=c&&(6===c.type?kl(c.value.content,!0):c.exp),u=c?Cl("key",a):null,p=4===t.source.type&&t.source.constType>0,f=p?64:c?128:256;return t.codegenNode=_l(n,o(Ai),void 0,s,f+"",void 0,void 0,!0,!p,!1,e.loc),()=>{let c;const{children:f}=t,d=1!==f.length||1!==f[0].type,h=Gl(e)?e:i&&1===e.children.length&&Gl(e.children[0])?e.children[0]:null;if(h?(c=h.codegenNode,i&&u&&Ql(c,u,n)):d?c=_l(n,o(Ai),u?xl([u]):void 0,e.children,"64",void 0,void 0,!0,void 0,!1):(c=f[0].codegenNode,i&&u&&Ql(c,u,n),c.isBlock!==!p&&(c.isBlock?(r(Bi),r(Jl(n.inSSR,c.isComponent))):r(ql(n.inSSR,c.isComponent))),c.isBlock=!p,c.isBlock?(o(Bi),o(Jl(n.inSSR,c.isComponent))):o(ql(n.inSSR,c.isComponent))),l){const e=Nl(ia(t.parseResult,[kl("_cached")]));e.body={type:21,body:[wl(["const _memo = (",l.exp,")"]),wl(["if (_cached",...a?[" && _cached.key === ",a]:[],` && ${n.helperString(vl)}(_cached, _memo)) return _cached`]),wl(["const _item = ",c]),kl("_item.memo = _memo"),kl("return _item")],loc:bl},s.arguments.push(e,kl("_cache"),kl(String(n.cached++)));}else s.arguments.push(Nl(ia(t.parseResult),c,!0));}}))}));const ta=/([\s\S]*?)\s+(?:in|of)\s+([\s\S]*)/,na=/,([^,\}\]]*)(?:,([^,\}\]]*))?$/,oa=/^\(|\)$/g;function ra(e,t){const n=e.loc,o=e.content,r=o.match(ta);if(!r)return;const[,s,i]=r,l={source:sa(n,i.trim(),o.indexOf(i,s.length)),value:void 0,key:void 0,index:void 0};let c=s.trim().replace(oa,"").trim();const a=s.indexOf(c),u=c.match(na);if(u){c=c.replace(na,"").trim();const e=u[1].trim();let t;if(e&&(t=o.indexOf(e,a+c.length),l.key=sa(n,e,t)),u[2]){const r=u[2].trim();r&&(l.index=sa(n,r,o.indexOf(r,l.key?t+e.length:a+c.length)));}}return c&&(l.value=sa(n,c,a)),l}function sa(e,t,n){return kl(t,!1,Bl(e,n,t.length))}function ia({value:e,key:t,index:n},o=[]){return function(e){let t=e.length;for(;t--&&!e[t];);return e.slice(0,t+1).map(((e,t)=>e||kl("_".repeat(t+1),!1)))}([e,t,n,...o])}const la=kl("undefined",!1),ca=(e,t)=>{if(1===e.type&&(1===e.tagType||3===e.tagType)){const n=Ul(e,"slot");if(n)return t.scopes.vSlot++,()=>{t.scopes.vSlot--;}}},aa=(e,t,n)=>Nl(e,t,!1,!0,t.length?t[0].loc:n);function ua(e,t,n=aa){t.helper(dl);const{children:o,loc:r}=e,s=[],i=[];let l=t.scopes.vSlot>0||t.scopes.vFor>0;const c=Ul(e,"slot",!0);if(c){const{arg:e,exp:t}=c;e&&!$l(e)&&(l=!0),s.push(Cl(e||kl("default",!0),n(t,o,r)));}let a=!1,u=!1;const p=[],f=new Set;let d=0;for(let g=0;g<o.length;g++){const e=o[g];let r;if(!Kl(e)||!(r=Ul(e,"slot",!0))){3!==e.type&&p.push(e);continue}if(c)break;a=!0;const{children:h,loc:m}=e,{arg:v=kl("default",!0),exp:y}=r;let b;$l(v)?b=v?v.content:"default":l=!0;const _=n(y,h,m);let S,x,C;if(S=Ul(e,"if"))l=!0,i.push(El(S.exp,pa(v,_,d++),la));else if(x=Ul(e,/^else(-if)?$/,!0)){let e,t=g;for(;t--&&(e=o[t],3===e.type););if(e&&Kl(e)&&Ul(e,"if")){o.splice(g,1),g--;let e=i[i.length-1];for(;19===e.alternate.type;)e=e.alternate;e.alternate=x.exp?El(x.exp,pa(v,_,d++),la):pa(v,_,d++);}}else if(C=Ul(e,"for")){l=!0;const e=C.parseResult||ra(C.exp);e&&i.push(Tl(t.helper(Yi),[e.source,Nl(ia(e),pa(v,_),!0)]));}else {if(b){if(f.has(b))continue;f.add(b),"default"===b&&(u=!0);}s.push(Cl(v,_));}}if(!c){const e=(e,t)=>Cl("default",n(e,t,r));a?p.length&&p.some((e=>da(e)))&&(u||s.push(e(void 0,p))):s.push(e(void 0,o));}const h=l?2:fa(e.children)?3:1;let m=xl(s.concat(Cl("_",kl(h+"",!1))),r);return i.length&&(m=Tl(t.helper(Xi),[m,Sl(i)])),{slots:m,hasDynamicSlots:l}}function pa(e,t,n){const o=[Cl("name",e),Cl("fn",t)];return null!=n&&o.push(Cl("key",kl(String(n),!0))),xl(o)}function fa(e){for(let t=0;t<e.length;t++){const n=e[t];switch(n.type){case 1:if(2===n.tagType||fa(n.children))return !0;break;case 9:if(fa(n.branches))return !0;break;case 10:case 11:if(fa(n.children))return !0}}return !1}function da(e){return 2!==e.type&&12!==e.type||(2===e.type?!!e.content.trim():da(e.content))}const ha=new WeakMap,ma=(e,t)=>function(){if(1!==(e=t.currentNode).type||0!==e.tagType&&1!==e.tagType)return;const{tag:n,props:o}=e,r=1===e.tagType;let s=r?function(e,t,n=!1){let{tag:o}=e;const r=ba(o),s=Dl(e,"is");if(s)if(r){const e=6===s.type?s.value&&kl(s.value.content,!0):s.exp;if(e)return Tl(t.helper(Gi),[e])}else 6===s.type&&s.value.content.startsWith("vue:")&&(o=s.value.content.slice(4));const i=!r&&Ul(e,"is");if(i&&i.exp)return Tl(t.helper(Gi),[i.exp]);const l=Fl(o)||t.isBuiltInComponent(o);if(l)return n||t.helper(l),l;return t.helper(Ki),t.components.add(o),Xl(o,"component")}(e,t):`"${n}"`;const i=P(s)&&s.callee===Gi;let l,c,a,u,p,f,d=0,h=i||s===Pi||s===Mi||!r&&("svg"===n||"foreignObject"===n);if(o.length>0){const n=ga(e,t,void 0,r,i);l=n.props,d=n.patchFlag,p=n.dynamicPropNames;const o=n.directives;f=o&&o.length?Sl(o.map((e=>function(e,t){const n=[],o=ha.get(e);o?n.push(t.helperString(o)):(t.helper(qi),t.directives.add(e.name),n.push(Xl(e.name,"directive")));const{loc:r}=e;e.exp&&n.push(e.exp);e.arg&&(e.exp||n.push("void 0"),n.push(e.arg));if(Object.keys(e.modifiers).length){e.arg||(e.exp||n.push("void 0"),n.push("void 0"));const t=kl("true",!1,r);n.push(xl(e.modifiers.map((e=>Cl(e,t))),r));}return Sl(n,e.loc)}(e,t)))):void 0,n.shouldUseBlock&&(h=!0);}if(e.children.length>0){s===Vi&&(h=!0,d|=1024);if(r&&s!==Pi&&s!==Vi){const{slots:n,hasDynamicSlots:o}=ua(e,t);c=n,o&&(d|=1024);}else if(1===e.children.length&&s!==Pi){const n=e.children[0],o=n.type,r=5===o||8===o;r&&0===Oc(n,t)&&(d|=1),c=r||2===o?n:e.children;}else c=e.children;}0!==d&&(a=String(d),p&&p.length&&(u=function(e){let t="[";for(let n=0,o=e.length;n<o;n++)t+=JSON.stringify(e[n]),n<o-1&&(t+=", ");return t+"]"}(p))),e.codegenNode=_l(t,s,l,c,a,u,f,!!h,!1,r,e.loc);};function ga(e,t,n=e.props,o,r,s=!1){const{tag:i,loc:l,children:c}=e;let a=[];const u=[],p=[],f=c.length>0;let d=!1,h=0,m=!1,g=!1,v=!1,y=!1,b=!1,_=!1;const x=[],C=({key:e,value:n})=>{if($l(e)){const s=e.content,i=S(s);if(!i||o&&!r||"onclick"===s.toLowerCase()||"onUpdate:modelValue"===s||j(s)||(y=!0),i&&j(s)&&(_=!0),20===n.type||(4===n.type||8===n.type)&&Oc(n,t)>0)return;"ref"===s?m=!0:"class"===s?g=!0:"style"===s?v=!0:"key"===s||x.includes(s)||x.push(s),!o||"class"!==s&&"style"!==s||x.includes(s)||x.push(s);}else b=!0;};for(let S=0;S<n.length;S++){const r=n[S];if(6===r.type){const{loc:e,name:n,value:o}=r;let s=!0;if("ref"===n&&(m=!0,t.scopes.vFor>0&&a.push(Cl(kl("ref_for",!0),kl("true")))),"is"===n&&(ba(i)||o&&o.content.startsWith("vue:")))continue;a.push(Cl(kl(n,!0,Bl(e,0,n.length)),kl(o?o.content:"",s,o?o.loc:e)));}else {const{name:n,arg:c,exp:h,loc:m}=r,g="bind"===n,v="on"===n;if("slot"===n)continue;if("once"===n||"memo"===n)continue;if("is"===n||g&&Hl(c,"is")&&ba(i))continue;if(v&&s)continue;if((g&&Hl(c,"key")||v&&f&&Hl(c,"vue:before-update"))&&(d=!0),g&&Hl(c,"ref")&&t.scopes.vFor>0&&a.push(Cl(kl("ref_for",!0),kl("true"))),!c&&(g||v)){b=!0,h&&(a.length&&(u.push(xl(va(a),l)),a=[]),u.push(g?h:{type:14,loc:m,callee:t.helper(il),arguments:o?[h]:[h,"true"]}));continue}const y=t.directiveTransforms[n];if(y){const{props:n,needRuntime:o}=y(r,e,t);!s&&n.forEach(C),a.push(...n),o&&(p.push(r),A(o)&&ha.set(r,o));}else U(n)||(p.push(r),f&&(d=!0));}}let k;if(u.length?(a.length&&u.push(xl(va(a),l)),k=u.length>1?Tl(t.helper(tl),u,l):u[0]):a.length&&(k=xl(va(a),l)),b?h|=16:(g&&!o&&(h|=2),v&&!o&&(h|=4),x.length&&(h|=8),y&&(h|=32)),d||0!==h&&32!==h||!(m||_||p.length>0)||(h|=512),!t.inSSR&&k)switch(k.type){case 15:let e=-1,n=-1,o=!1;for(let t=0;t<k.properties.length;t++){const r=k.properties[t].key;$l(r)?"class"===r.content?e=t:"style"===r.content&&(n=t):r.isHandlerKey||(o=!0);}const r=k.properties[e],s=k.properties[n];o?k=Tl(t.helper(rl),[k]):(r&&!$l(r.value)&&(r.value=Tl(t.helper(nl),[r.value])),s&&(v||4===s.value.type&&"["===s.value.content.trim()[0]||17===s.value.type)&&(s.value=Tl(t.helper(ol),[s.value])));break;case 14:break;default:k=Tl(t.helper(rl),[Tl(t.helper(sl),[k])]);}return {props:k,directives:p,patchFlag:h,dynamicPropNames:x,shouldUseBlock:d}}function va(e){const t=new Map,n=[];for(let o=0;o<e.length;o++){const r=e[o];if(8===r.key.type||!r.key.isStatic){n.push(r);continue}const s=r.key.content,i=t.get(s);i?("style"===s||"class"===s||S(s))&&ya(i,r):(t.set(s,r),n.push(r));}return n}function ya(e,t){17===e.value.type?e.value.elements.push(t.value):e.value=Sl([e.value,t.value],e.loc);}function ba(e){return "component"===e||"Component"===e}const _a=(e,t)=>{if(Gl(e)){const{children:n,loc:o}=e,{slotName:r,slotProps:s}=function(e,t){let n,o='"default"';const r=[];for(let s=0;s<e.props.length;s++){const t=e.props[s];6===t.type?t.value&&("name"===t.name?o=JSON.stringify(t.value.content):(t.name=W(t.name),r.push(t))):"bind"===t.name&&Hl(t.arg,"name")?t.exp&&(o=t.exp):("bind"===t.name&&t.arg&&$l(t.arg)&&(t.arg.content=W(t.arg.content)),r.push(t));}if(r.length>0){const{props:o,directives:s}=ga(e,t,r,!1,!1);n=o;}return {slotName:o,slotProps:n}}(e,t),i=[t.prefixIdentifiers?"_ctx.$slots":"$slots",r,"{}","undefined","true"];let l=2;s&&(i[2]=s,l=3),n.length&&(i[3]=Nl([],n,!1,!1,o),l=4),t.scopeId&&!t.slotted&&(l=5),i.splice(l),e.codegenNode=Tl(t.helper(Qi),i,o);}};const Sa=/^\s*([\w$_]+|(async\s*)?\([^)]*?\))\s*=>|^\s*(async\s+)?function(?:\s+[\w$]+)?\s*\(/,xa=(e,t,n,o)=>{const{loc:r,modifiers:s,arg:i}=e;let l;if(4===i.type)if(i.isStatic){let e=i.content;e.startsWith("vue:")&&(e=`vnode-${e.slice(4)}`);l=kl(1===t.tagType||e.startsWith("vnode")||!/[A-Z]/.test(e)?q(W(e)):`on:${e}`,!0,i.loc);}else l=wl([`${n.helperString(al)}(`,i,")"]);else l=i,l.children.unshift(`${n.helperString(al)}(`),l.children.push(")");let c=e.exp;c&&!c.content.trim()&&(c=void 0);let a=n.cacheHandlers&&!c&&!n.inVOnce;if(c){const e=Il(c.content),t=!(e||Sa.test(c.content)),n=c.content.includes(";");(t||a&&e)&&(c=wl([`${t?"$event":"(...args)"} => ${n?"{":"("}`,c,n?"}":")"]));}let u={props:[Cl(l,c||kl("() => {}",!1,r))]};return o&&(u=o(u)),a&&(u.props[0].value=n.cache(u.props[0].value)),u.props.forEach((e=>e.key.isHandlerKey=!0)),u},Ca=(e,t,n)=>{const{exp:o,modifiers:r,loc:s}=e,i=e.arg;return 4!==i.type?(i.children.unshift("("),i.children.push(') || ""')):i.isStatic||(i.content=`${i.content} || ""`),r.includes("camel")&&(4===i.type?i.content=i.isStatic?W(i.content):`${n.helperString(ll)}(${i.content})`:(i.children.unshift(`${n.helperString(ll)}(`),i.children.push(")"))),n.inSSR||(r.includes("prop")&&ka(i,"."),r.includes("attr")&&ka(i,"^")),!o||4===o.type&&!o.content.trim()?{props:[Cl(i,kl("",!0,s))]}:{props:[Cl(i,o)]}},ka=(e,t)=>{4===e.type?e.content=e.isStatic?t+e.content:`\`${t}\${${e.content}}\``:(e.children.unshift(`'${t}' + (`),e.children.push(")"));},wa=(e,t)=>{if(0===e.type||1===e.type||11===e.type||10===e.type)return ()=>{const n=e.children;let o,r=!1;for(let e=0;e<n.length;e++){const t=n[e];if(Wl(t)){r=!0;for(let r=e+1;r<n.length;r++){const s=n[r];if(!Wl(s)){o=void 0;break}o||(o=n[e]=wl([t],t.loc)),o.children.push(" + ",s),n.splice(r,1),r--;}}}if(r&&(1!==n.length||0!==e.type&&(1!==e.type||0!==e.tagType||e.props.find((e=>7===e.type&&!t.directiveTransforms[e.name])))))for(let e=0;e<n.length;e++){const o=n[e];if(Wl(o)||8===o.type){const r=[];2===o.type&&" "===o.content||r.push(o),t.ssr||0!==Oc(o,t)||r.push("1"),n[e]={type:12,content:o,loc:o.loc,codegenNode:Tl(t.helper(Wi),r)};}}}},Ta=new WeakSet,Na=(e,t)=>{if(1===e.type&&Ul(e,"once",!0)){if(Ta.has(e)||t.inVOnce)return;return Ta.add(e),t.inVOnce=!0,t.helper(ul),()=>{t.inVOnce=!1;const e=t.currentNode;e.codegenNode&&(e.codegenNode=t.cache(e.codegenNode,!0));}}},Ea=(e,t,n)=>{const{exp:o,arg:r}=e;if(!o)return $a();const s=o.loc.source,i=4===o.type?o.content:s;if(!i.trim()||!Il(i))return $a();const l=r||kl("modelValue",!0),c=r?$l(r)?`onUpdate:${r.content}`:wl(['"onUpdate:" + ',r]):"onUpdate:modelValue";let a;a=wl([`${n.isTS?"($event: any)":"$event"} => ((`,o,") = $event)"]);const u=[Cl(l,e.exp),Cl(c,a)];if(e.modifiers.length&&1===t.tagType){const t=e.modifiers.map((e=>(Al(e)?e:JSON.stringify(e))+": true")).join(", "),n=r?$l(r)?`${r.content}Modifiers`:wl([r,' + "Modifiers"']):"modelModifiers";u.push(Cl(n,kl(`{ ${t} }`,!1,e.loc,2)));}return $a(u)};function $a(e=[]){return {props:e}}const Oa=new WeakSet,Fa=(e,t)=>{if(1===e.type){const n=Ul(e,"memo");if(!n||Oa.has(e))return;return Oa.add(e),()=>{const o=e.codegenNode||t.currentNode.codegenNode;o&&13===o.type&&(1!==e.tagType&&ec(o,t),e.codegenNode=Tl(t.helper(gl),[n.exp,Nl(void 0,o),"_cache",String(t.cached++)]));}}};function Ra(e,t={}){const n=t.onError||Oi,o="module"===t.mode;!0===t.prefixIdentifiers?n(Ri(46)):o&&n(Ri(47));t.cacheHandlers&&n(Ri(48)),t.scopeId&&!o&&n(Ri(49));const r=R(e)?rc(e,t):e,[s,i]=[[Na,Zc,Fa,ea,_a,ma,ca,wa],{on:xa,bind:Ca,model:Ea}];return Ic(r,C({},t,{prefixIdentifiers:false,nodeTransforms:[...s,...t.nodeTransforms||[]],directiveTransforms:C({},i,t.directiveTransforms||{})})),Dc(r,C({},t,{prefixIdentifiers:false}))}const Aa=Symbol(""),Pa=Symbol(""),Ma=Symbol(""),Va=Symbol(""),Ia=Symbol(""),Ba=Symbol(""),La=Symbol(""),ja=Symbol(""),Ua=Symbol(""),Da=Symbol("");var Ha;let Wa;Ha={[Aa]:"vModelRadio",[Pa]:"vModelCheckbox",[Ma]:"vModelText",[Va]:"vModelSelect",[Ia]:"vModelDynamic",[Ba]:"withModifiers",[La]:"withKeys",[ja]:"vShow",[Ua]:"Transition",[Da]:"TransitionGroup"},Object.getOwnPropertySymbols(Ha).forEach((e=>{yl[e]=Ha[e];}));const za=t("style,iframe,script,noscript",!0),Ka={isVoidTag:f,isNativeTag:e=>u(e)||p(e),isPreTag:e=>"pre"===e,decodeEntities:function(e,t=!1){return Wa||(Wa=document.createElement("div")),t?(Wa.innerHTML=`<div foo="${e.replace(/"/g,"&quot;")}">`,Wa.children[0].getAttribute("foo")):(Wa.innerHTML=e,Wa.textContent)},isBuiltInComponent:e=>Ol(e,"Transition")?Ua:Ol(e,"TransitionGroup")?Da:void 0,getNamespace(e,t){let n=t?t.ns:0;if(t&&2===n)if("annotation-xml"===t.tag){if("svg"===e)return 1;t.props.some((e=>6===e.type&&"encoding"===e.name&&null!=e.value&&("text/html"===e.value.content||"application/xhtml+xml"===e.value.content)))&&(n=0);}else /^m(?:[ions]|text)$/.test(t.tag)&&"mglyph"!==e&&"malignmark"!==e&&(n=0);else t&&1===n&&("foreignObject"!==t.tag&&"desc"!==t.tag&&"title"!==t.tag||(n=0));if(0===n){if("svg"===e)return 1;if("math"===e)return 2}return n},getTextMode({tag:e,ns:t}){if(0===t){if("textarea"===e||"title"===e)return 1;if(za(e))return 2}return 0}},Ga=(e,t)=>{const n=c(e);return kl(JSON.stringify(n),!1,t,3)};const qa=t("passive,once,capture"),Ja=t("stop,prevent,self,ctrl,shift,alt,meta,exact,middle"),Za=t("left,right"),Ya=t("onkeyup,onkeydown,onkeypress",!0),Qa=(e,t)=>$l(e)&&"onclick"===e.content.toLowerCase()?kl(t,!0):4!==e.type?wl(["(",e,`) === "onClick" ? "${t}" : (`,e,")"]):e,Xa=(e,t)=>{1!==e.type||0!==e.tagType||"script"!==e.tag&&"style"!==e.tag||t.removeNode();},eu=[e=>{1===e.type&&e.props.forEach(((t,n)=>{6===t.type&&"style"===t.name&&t.value&&(e.props[n]={type:7,name:"bind",arg:kl("style",!0,t.loc),exp:Ga(t.value.content,t.loc),modifiers:[],loc:t.loc});}));}],tu={cloak:()=>({props:[]}),html:(e,t,n)=>{const{exp:o,loc:r}=e;return t.children.length&&(t.children.length=0),{props:[Cl(kl("innerHTML",!0,r),o||kl("",!0))]}},text:(e,t,n)=>{const{exp:o,loc:r}=e;return t.children.length&&(t.children.length=0),{props:[Cl(kl("textContent",!0),o?Oc(o,n)>0?o:Tl(n.helperString(el),[o],r):kl("",!0))]}},model:(e,t,n)=>{const o=Ea(e,t,n);if(!o.props.length||1===t.tagType)return o;const{tag:r}=t,s=n.isCustomElement(r);if("input"===r||"textarea"===r||"select"===r||s){let e=Ma,i=!1;if("input"===r||s){const n=Dl(t,"type");if(n){if(7===n.type)e=Ia;else if(n.value)switch(n.value.content){case"radio":e=Aa;break;case"checkbox":e=Pa;break;case"file":i=!0;}}else (function(e){return e.props.some((e=>!(7!==e.type||"bind"!==e.name||e.arg&&4===e.arg.type&&e.arg.isStatic)))})(t)&&(e=Ia);}else "select"===r&&(e=Va);i||(o.needRuntime=n.helper(e));}return o.props=o.props.filter((e=>!(4===e.key.type&&"modelValue"===e.key.content))),o},on:(e,t,n)=>xa(e,t,n,(t=>{const{modifiers:o}=e;if(!o.length)return t;let{key:r,value:s}=t.props[0];const{keyModifiers:i,nonKeyModifiers:l,eventOptionModifiers:c}=((e,t,n,o)=>{const r=[],s=[],i=[];for(let l=0;l<t.length;l++){const n=t[l];qa(n)?i.push(n):Za(n)?$l(e)?Ya(e.content)?r.push(n):s.push(n):(r.push(n),s.push(n)):Ja(n)?s.push(n):r.push(n);}return {keyModifiers:r,nonKeyModifiers:s,eventOptionModifiers:i}})(r,o);if(l.includes("right")&&(r=Qa(r,"onContextmenu")),l.includes("middle")&&(r=Qa(r,"onMouseup")),l.length&&(s=Tl(n.helper(Ba),[s,JSON.stringify(l)])),!i.length||$l(r)&&!Ya(r.content)||(s=Tl(n.helper(La),[s,JSON.stringify(i)])),c.length){const e=c.map(G).join("");r=$l(r)?kl(`${r.content}${e}`,!0):wl(["(",r,`) + "${e}"`]);}return {props:[Cl(r,s)]}})),show:(e,t,n)=>({props:[],needRuntime:n.helper(ja)})};const nu=Object.create(null);function ou(e,t){if(!R(e)){if(!e.nodeType)return y;e=e.innerHTML;}const n=e,o=nu[n];if(o)return o;if("#"===e[0]){const t=document.querySelector(e);e=t?t.innerHTML:"";}const r=C({hoistStatic:!0,onError:void 0,onWarn:y},t);r.isCustomElement||"undefined"==typeof customElements||(r.isCustomElement=e=>!!customElements.get(e));const{code:s}=function(e,t={}){return Ra(e,C({},Ka,t,{nodeTransforms:[Xa,...eu,...t.nodeTransforms||[]],directiveTransforms:C({},tu,t.directiveTransforms||{}),transformHoist:null}))}(e,r),i=new Function(s)();return i._rc=!0,nu[n]=i}return Qr(ou),e.BaseTransition=Bn,e.Comment=gr,e.EffectScope=te,e.Fragment=hr,e.KeepAlive=Jn,e.ReactiveEffect=fe,e.Static=vr,e.Suspense=Sn,e.Teleport=dr,e.Text=mr,e.Transition=Ms,e.TransitionGroup=Xs,e.VueElement=Os,e.callWithAsyncErrorHandling=jt,e.callWithErrorHandling=Lt,e.camelize=W,e.capitalize=G,e.cloneVNode=Pr,e.compatUtils=null,e.compile=ou,e.computed=ss,e.createApp=(...e)=>{const t=ki().createApp(...e),{mount:n}=t;return t.mount=e=>{const o=Ei(e);if(!o)return;const r=t._component;F(r)||r.render||r.template||(r.template=o.innerHTML),o.innerHTML="";const s=n(o,!1,o instanceof SVGElement);return o instanceof Element&&(o.removeAttribute("v-cloak"),o.setAttribute("data-v-app","")),s},t},e.createBlock=wr,e.createCommentVNode=function(e="",t=!1){return t?(_r(),wr(gr,null,e)):Rr(gr,null,e)},e.createElementBlock=function(e,t,n,o,r,s){return kr(Fr(e,t,n,o,r,s,!0))},e.createElementVNode=Fr,e.createHydrationRenderer=sr,e.createPropsRestProxy=function(e,t){const n={};for(const o in e)t.includes(o)||Object.defineProperty(n,o,{enumerable:!0,get:()=>e[o]});return n},e.createRenderer=rr,e.createSSRApp=(...e)=>{const t=wi().createApp(...e),{mount:n}=t;return t.mount=e=>{const t=Ei(e);if(t)return n(t,!0,t instanceof SVGElement)},t},e.createSlots=function(e,t){for(let n=0;n<t.length;n++){const o=t[n];if(N(o))for(let t=0;t<o.length;t++)e[o[t].name]=o[t].fn;else o&&(e[o.name]=o.key?(...e)=>{const t=o.fn(...e);return t.key=o.key,t}:o.fn);}return e},e.createStaticVNode=function(e,t){const n=Rr(vr,null,e);return n.staticCount=t,n},e.createTextVNode=Mr,e.createVNode=Rr,e.customRef=function(e){return new Ft(e)},e.defineAsyncComponent=function(e){F(e)&&(e={loader:e});const{loader:t,loadingComponent:n,errorComponent:o,delay:r=200,timeout:s,suspensible:i=!0,onError:l}=e;let c,a=null,u=0;const p=()=>{let e;return a||(e=a=t().catch((e=>{if(e=e instanceof Error?e:new Error(String(e)),l)return new Promise(((t,n)=>{l(e,(()=>t((u++,a=null,p()))),(()=>n(e)),u+1);}));throw e})).then((t=>e!==a&&a?a:(t&&(t.__esModule||"Module"===t[Symbol.toStringTag])&&(t=t.default),c=t,t))))};return zn({name:"AsyncComponentWrapper",__asyncLoader:p,get __asyncResolved(){return c},setup(){const e=Hr;if(c)return ()=>Gn(c,e);const t=t=>{a=null,Ut(t,e,13,!o);};if(i&&e.suspense)return p().then((t=>()=>Gn(t,e))).catch((e=>(t(e),()=>o?Rr(o,{error:e}):null)));const l=wt(!1),u=wt(),f=wt(!!r);return r&&setTimeout((()=>{f.value=!1;}),r),null!=s&&setTimeout((()=>{if(!l.value&&!u.value){const e=new Error(`Async component timed out after ${s}ms.`);t(e),u.value=e;}}),s),p().then((()=>{l.value=!0,e.parent&&qn(e.parent.vnode)&&Qt(e.parent.update);})).catch((e=>{t(e),u.value=e;})),()=>l.value&&c?Gn(c,e):u.value&&o?Rr(o,{error:u.value}):n&&!f.value?Rr(n):void 0}})},e.defineComponent=zn,e.defineCustomElement=Es,e.defineEmits=function(){return null},e.defineExpose=function(e){},e.defineProps=function(){return null},e.defineSSRCustomElement=e=>Es(e,Ni),e.effect=function(e,t){e.effect&&(e=e.effect.fn);const n=new fe(e);t&&(C(n,t),t.scope&&ne(n,t.scope)),t&&t.lazy||n.run();const o=n.run.bind(n);return o.effect=n,o},e.effectScope=function(e){return new te(e)},e.getCurrentInstance=Wr,e.getCurrentScope=function(){return ee},e.getTransitionRawChildren=Wn,e.guardReactiveProps=Ar,e.h=ls,e.handleError=Ut,e.hydrate=Ni,e.initCustomFormatter=function(){},e.initDirectivesForSSR=$i,e.inject=En,e.isMemoSame=as,e.isProxy=vt,e.isReactive=ht,e.isReadonly=mt,e.isRef=kt,e.isRuntimeOnly=()=>!qr,e.isShallow=gt,e.isVNode=Tr,e.markRaw=bt,e.mergeDefaults=function(e,t){const n=N(e)?e.reduce(((e,t)=>(e[t]={},e)),{}):e;for(const o in t){const e=n[o];e?N(e)||F(e)?n[o]={type:e,default:t[o]}:e.default=t[o]:null===e&&(n[o]={default:t[o]});}return n},e.mergeProps=Lr,e.nextTick=Yt,e.normalizeClass=a,e.normalizeProps=function(e){if(!e)return null;let{class:t,style:n}=e;return t&&!R(t)&&(e.class=a(t)),n&&(e.style=s(n)),e},e.normalizeStyle=s,e.onActivated=Yn,e.onBeforeMount=so,e.onBeforeUnmount=ao,e.onBeforeUpdate=lo,e.onDeactivated=Qn,e.onErrorCaptured=mo,e.onMounted=io,e.onRenderTracked=ho,e.onRenderTriggered=fo,e.onScopeDispose=function(e){ee&&ee.cleanups.push(e);},e.onServerPrefetch=po,e.onUnmounted=uo,e.onUpdated=co,e.openBlock=_r,e.popScopeId=function(){fn=null;},e.provide=Nn,e.proxyRefs=Ot,e.pushScopeId=function(e){fn=e;},e.queuePostFlushCb=en,e.reactive=ut,e.readonly=ft,e.ref=wt,e.registerRuntimeCompiler=Qr,e.render=Ti,e.renderList=function(e,t,n,o){let r;const s=n&&n[o];if(N(e)||R(e)){r=new Array(e.length);for(let n=0,o=e.length;n<o;n++)r[n]=t(e[n],n,void 0,s&&s[n]);}else if("number"==typeof e){r=new Array(e);for(let n=0;n<e;n++)r[n]=t(n+1,n,void 0,s&&s[n]);}else if(P(e))if(e[Symbol.iterator])r=Array.from(e,((e,n)=>t(e,n,void 0,s&&s[n])));else {const n=Object.keys(e);r=new Array(n.length);for(let o=0,i=n.length;o<i;o++){const i=n[o];r[o]=t(e[i],i,o,s&&s[o]);}}else r=[];return n&&(n[o]=r),r},e.renderSlot=function(e,t,n={},o,r){if(pn.isCE||pn.parent&&Kn(pn.parent)&&pn.parent.isCE)return Rr("slot","default"===t?null:{name:t},o&&o());let s=e[t];s&&s._c&&(s._d=!1),_r();const i=s&&So(s(n)),l=wr(hr,{key:n.key||i&&i.key||`_${t}`},i||(o?o():[]),i&&1===e._?64:-2);return !r&&l.scopeId&&(l.slotScopeIds=[l.scopeId+"-s"]),s&&s._c&&(s._d=!0),l},e.resolveComponent=function(e,t){return bo(vo,e,!0,t)||e},e.resolveDirective=function(e){return bo("directives",e)},e.resolveDynamicComponent=function(e){return R(e)?bo(vo,e,!1)||e:e||yo},e.resolveFilter=null,e.resolveTransitionHooks=jn,e.setBlockTracking=Cr,e.setDevtoolsHook=function t(n,o){var r,s;if(e.devtools=n,e.devtools)e.devtools.enabled=!0,ln.forEach((({event:t,args:n})=>e.devtools.emit(t,...n))),ln=[];else if("undefined"!=typeof window&&window.HTMLElement&&!(null===(s=null===(r=window.navigator)||void 0===r?void 0:r.userAgent)||void 0===s?void 0:s.includes("jsdom"))){(o.__VUE_DEVTOOLS_HOOK_REPLAY__=o.__VUE_DEVTOOLS_HOOK_REPLAY__||[]).push((e=>{t(e,o);})),setTimeout((()=>{e.devtools||(o.__VUE_DEVTOOLS_HOOK_REPLAY__=null,ln=[]);}),3e3);}else ln=[];},e.setTransitionHooks=Hn,e.shallowReactive=pt,e.shallowReadonly=function(e){return dt(e,!0,Ve,rt,ct)},e.shallowRef=function(e){return Tt(e,!0)},e.ssrContextKey=cs,e.ssrUtils=null,e.stop=function(e){e.effect.stop();},e.toDisplayString=e=>R(e)?e:null==e?"":N(e)||P(e)&&(e.toString===V||!F(e.toString))?JSON.stringify(e,m,2):String(e),e.toHandlerKey=q,e.toHandlers=function(e,t){const n={};for(const o in e)n[t&&/[A-Z]/.test(o)?`on:${o}`:q(o)]=e[o];return n},e.toRaw=yt,e.toRef=At,e.toRefs=function(e){const t=N(e)?new Array(e.length):{};for(const n in e)t[n]=At(e,n);return t},e.transformVNodeArgs=function(e){},e.triggerRef=function(e){Ct(e);},e.unref=Et,e.useAttrs=function(){return is().attrs},e.useCssModule=function(e="$style"){return g},e.useCssVars=function(e){const t=Wr();if(!t)return;const n=()=>Fs(t.subTree,e(t.proxy));$n(n),io((()=>{const e=new MutationObserver(n);e.observe(t.subTree.el.parentNode,{childList:!0}),uo((()=>e.disconnect()));}));},e.useSSRContext=()=>{},e.useSlots=function(){return is().slots},e.useTransitionState=Vn,e.vModelCheckbox=li,e.vModelDynamic=hi,e.vModelRadio=ai,e.vModelSelect=ui,e.vModelText=ii,e.vShow=bi,e.version=us,e.warn=function(e,...t){ge();const n=Vt.length?Vt[Vt.length-1].component:null,o=n&&n.appContext.config.warnHandler,r=function(){let e=Vt[Vt.length-1];if(!e)return [];const t=[];for(;e;){const n=t[0];n&&n.vnode===e?n.recurseCount++:t.push({vnode:e,recurseCount:0});const o=e.component&&e.component.parent;e=o&&o.vnode;}return t}();if(o)Lt(o,n,11,[e+t.join(""),n&&n.proxy,r.map((({vnode:e})=>`at <${rs(n,e.type)}>`)).join("\n"),r]);else {const n=[`[Vue warn]: ${e}`,...t];r.length&&n.push("\n",...function(e){const t=[];return e.forEach(((e,n)=>{t.push(...0===n?[]:["\n"],...function({vnode:e,recurseCount:t}){const n=t>0?`... (${t} recursive calls)`:"",o=` at <${rs(e.component,e.type,!!e.component&&null==e.component.parent)}`,r=">"+n;return e.props?[o,...It(e.props),r]:[o+r]}(e));})),t}(r)),console.warn(...n);}ve();},e.watch=Fn,e.watchEffect=function(e,t){return Rn(e,null,t)},e.watchPostEffect=$n,e.watchSyncEffect=function(e,t){return Rn(e,null,{flush:"sync"})},e.withAsyncContext=function(e){const t=Wr();let n=e();return Kr(),M(n)&&(n=n.catch((e=>{throw zr(t),e}))),[n,()=>zr(t)]},e.withCtx=hn,e.withDefaults=function(e,t){return null},e.withDirectives=function(e,t){const n=pn;if(null===n)return e;const o=ts(n)||n.proxy,r=e.dirs||(e.dirs=[]);for(let s=0;s<t.length;s++){let[e,n,i,l=g]=t[s];F(e)&&(e={mounted:e,updated:e}),e.deep&&Mn(n),r.push({dir:e,instance:o,value:n,oldValue:void 0,arg:i,modifiers:l});}return e},e.withKeys=(e,t)=>n=>{if(!("key"in n))return;const o=K(n.key);return t.some((e=>e===o||yi[e]===o))?e(n):void 0},e.withMemo=function(e,t,n,o){const r=n[o];if(r&&as(r,e))return r;const s=t();return s.memo=e.slice(),n[o]=s},e.withModifiers=(e,t)=>(n,...o)=>{for(let e=0;e<t.length;e++){const o=vi[t[e]];if(o&&o(n,t))return}return e(n,...o)},e.withScopeId=e=>hn,Object.defineProperty(e,"__esModule",{value:!0}),e}({});

  /*!
    * vue-router v4.1.5
    * (c) 2022 Eduardo San Martin Morote
    * @license MIT
    */
  window.VueRouter=function(e,t){const n="undefined"!=typeof window;function r(e){return e.__esModule||"Module"===e[Symbol.toStringTag]}const o=Object.assign;function a(e,t){const n={};for(const r in t){const o=t[r];n[r]=s(o)?o.map(e):e(o);}return n}const c=()=>{},s=Array.isArray,i=/\/$/;function l(e,t,n="/"){let r,o={},a="",c="";const s=t.indexOf("#");let i=t.indexOf("?");return s<i&&s>=0&&(i=-1),i>-1&&(r=t.slice(0,i),a=t.slice(i+1,s>-1?s:t.length),o=e(a)),s>-1&&(r=r||t.slice(0,s),c=t.slice(s,t.length)),r=function(e,t){if(e.startsWith("/"))return e;if(!e)return t;const n=t.split("/"),r=e.split("/");let o,a,c=n.length-1;for(o=0;o<r.length;o++)if(a=r[o],"."!==a){if(".."!==a)break;c>1&&c--;}return n.slice(0,c).join("/")+"/"+r.slice(o-(o===r.length?1:0)).join("/")}(null!=r?r:t,n),{fullPath:r+(a&&"?")+a+c,path:r,query:o,hash:c}}function u(e,t){return t&&e.toLowerCase().startsWith(t.toLowerCase())?e.slice(t.length)||"/":e}function f(e,t){return (e.aliasOf||e)===(t.aliasOf||t)}function p(e,t){if(Object.keys(e).length!==Object.keys(t).length)return !1;for(const n in e)if(!h(e[n],t[n]))return !1;return !0}function h(e,t){return s(e)?d(e,t):s(t)?d(t,e):e===t}function d(e,t){return s(t)?e.length===t.length&&e.every(((e,n)=>e===t[n])):1===e.length&&e[0]===t}var m,g;!function(e){e.pop="pop",e.push="push";}(m||(m={})),function(e){e.back="back",e.forward="forward",e.unknown="";}(g||(g={}));function v(e){if(!e)if(n){const t=document.querySelector("base");e=(e=t&&t.getAttribute("href")||"/").replace(/^\w+:\/\/[^\/]+/,"");}else e="/";return "/"!==e[0]&&"#"!==e[0]&&(e="/"+e),e.replace(i,"")}const y=/^[^#]+#/;function b(e,t){return e.replace(y,"#")+t}const w=()=>({left:window.pageXOffset,top:window.pageYOffset});function E(e){let t;if("el"in e){const n=e.el,r="string"==typeof n&&n.startsWith("#"),o="string"==typeof n?r?document.getElementById(n.slice(1)):document.querySelector(n):n;if(!o)return;t=function(e,t){const n=document.documentElement.getBoundingClientRect(),r=e.getBoundingClientRect();return {behavior:t.behavior,left:r.left-n.left-(t.left||0),top:r.top-n.top-(t.top||0)}}(o,e);}else t=e;"scrollBehavior"in document.documentElement.style?window.scrollTo(t):window.scrollTo(null!=t.left?t.left:window.pageXOffset,null!=t.top?t.top:window.pageYOffset);}function R(e,t){return (history.state?history.state.position-t:-1)+e}const O=new Map;let k=()=>location.protocol+"//"+location.host;function P(e,t){const{pathname:n,search:r,hash:o}=t,a=e.indexOf("#");if(a>-1){let t=o.includes(e.slice(a))?e.slice(a).length:1,n=o.slice(t);return "/"!==n[0]&&(n="/"+n),u(n,"")}return u(n,e)+r+o}function j(e,t,n,r=!1,o=!1){return {back:e,current:t,forward:n,replaced:r,position:window.history.length,scroll:o?w():null}}function C(e){const t=function(e){const{history:t,location:n}=window,r={value:P(e,n)},a={value:t.state};function c(r,o,c){const s=e.indexOf("#"),i=s>-1?(n.host&&document.querySelector("base")?e:e.slice(s))+r:k()+e+r;try{t[c?"replaceState":"pushState"](o,"",i),a.value=o;}catch(e){console.error(e),n[c?"replace":"assign"](i);}}return a.value||c(r.value,{back:null,current:r.value,forward:null,position:t.length-1,replaced:!0,scroll:null},!0),{location:r,state:a,push:function(e,n){const s=o({},a.value,t.state,{forward:e,scroll:w()});c(s.current,s,!0),c(e,o({},j(r.value,e,null),{position:s.position+1},n),!1),r.value=e;},replace:function(e,n){c(e,o({},t.state,j(a.value.back,e,a.value.forward,!0),n,{position:a.value.position}),!0),r.value=e;}}}(e=v(e)),n=function(e,t,n,r){let a=[],c=[],s=null;const i=({state:o})=>{const c=P(e,location),i=n.value,l=t.value;let u=0;if(o){if(n.value=c,t.value=o,s&&s===i)return void(s=null);u=l?o.position-l.position:0;}else r(c);a.forEach((e=>{e(n.value,i,{delta:u,type:m.pop,direction:u?u>0?g.forward:g.back:g.unknown});}));};function l(){const{history:e}=window;e.state&&e.replaceState(o({},e.state,{scroll:w()}),"");}return window.addEventListener("popstate",i),window.addEventListener("beforeunload",l),{pauseListeners:function(){s=n.value;},listen:function(e){a.push(e);const t=()=>{const t=a.indexOf(e);t>-1&&a.splice(t,1);};return c.push(t),t},destroy:function(){for(const e of c)e();c=[],window.removeEventListener("popstate",i),window.removeEventListener("beforeunload",l);}}}(e,t.state,t.location,t.replace);const r=o({location:"",base:e,go:function(e,t=!0){t||n.pauseListeners(),history.go(e);},createHref:b.bind(null,e)},t,n);return Object.defineProperty(r,"location",{enumerable:!0,get:()=>t.location.value}),Object.defineProperty(r,"state",{enumerable:!0,get:()=>t.state.value}),r}function x(e){return "string"==typeof e||"symbol"==typeof e}const $={path:"/",name:void 0,params:{},query:{},hash:"",fullPath:"/",matched:[],meta:{},redirectedFrom:void 0},S=Symbol("");var A;function L(e,t){return o(new Error,{type:e,[S]:!0},t)}function M(e,t){return e instanceof Error&&S in e&&(null==t||!!(e.type&t))}e.NavigationFailureType=void 0,(A=e.NavigationFailureType||(e.NavigationFailureType={}))[A.aborted=4]="aborted",A[A.cancelled=8]="cancelled",A[A.duplicated=16]="duplicated";const q="[^/]+?",B={sensitive:!1,strict:!1,start:!0,end:!0},T=/[.+*?^${}()[\]/\\]/g;function _(e,t){let n=0;for(;n<e.length&&n<t.length;){const r=t[n]-e[n];if(r)return r;n++;}return e.length<t.length?1===e.length&&80===e[0]?-1:1:e.length>t.length?1===t.length&&80===t[0]?1:-1:0}function G(e,t){let n=0;const r=e.score,o=t.score;for(;n<r.length&&n<o.length;){const e=_(r[n],o[n]);if(e)return e;n++;}if(1===Math.abs(o.length-r.length)){if(F(r))return 1;if(F(o))return -1}return o.length-r.length}function F(e){const t=e[e.length-1];return e.length>0&&t[t.length-1]<0}const D={type:0,value:""},I=/[a-zA-Z0-9_]/;function K(e,t,n){const r=function(e,t){const n=o({},B,t),r=[];let a=n.start?"^":"";const c=[];for(const t of e){const e=t.length?[]:[90];n.strict&&!t.length&&(a+="/");for(let r=0;r<t.length;r++){const o=t[r];let s=40+(n.sensitive?.25:0);if(0===o.type)r||(a+="/"),a+=o.value.replace(T,"\\$&"),s+=40;else if(1===o.type){const{value:e,repeatable:n,optional:i,regexp:l}=o;c.push({name:e,repeatable:n,optional:i});const u=l||q;if(u!==q){s+=10;try{new RegExp(`(${u})`);}catch(t){throw new Error(`Invalid custom RegExp for param "${e}" (${u}): `+t.message)}}let f=n?`((?:${u})(?:/(?:${u}))*)`:`(${u})`;r||(f=i&&t.length<2?`(?:/${f})`:"/"+f),i&&(f+="?"),a+=f,s+=20,i&&(s+=-8),n&&(s+=-20),".*"===u&&(s+=-50);}e.push(s);}r.push(e);}if(n.strict&&n.end){const e=r.length-1;r[e][r[e].length-1]+=.7000000000000001;}n.strict||(a+="/?"),n.end?a+="$":n.strict&&(a+="(?:/|$)");const i=new RegExp(a,n.sensitive?"":"i");return {re:i,score:r,keys:c,parse:function(e){const t=e.match(i),n={};if(!t)return null;for(let e=1;e<t.length;e++){const r=t[e]||"",o=c[e-1];n[o.name]=r&&o.repeatable?r.split("/"):r;}return n},stringify:function(t){let n="",r=!1;for(const o of e){r&&n.endsWith("/")||(n+="/"),r=!1;for(const e of o)if(0===e.type)n+=e.value;else if(1===e.type){const{value:a,repeatable:c,optional:i}=e,l=a in t?t[a]:"";if(s(l)&&!c)throw new Error(`Provided param "${a}" is an array but it is not repeatable (* or + modifiers)`);const u=s(l)?l.join("/"):l;if(!u){if(!i)throw new Error(`Missing required param "${a}"`);o.length<2&&(n.endsWith("/")?n=n.slice(0,-1):r=!0);}n+=u;}}return n||"/"}}}(function(e){if(!e)return [[]];if("/"===e)return [[D]];if(!e.startsWith("/"))throw new Error(`Invalid path "${e}"`);function t(e){throw new Error(`ERR (${n})/"${l}": ${e}`)}let n=0,r=n;const o=[];let a;function c(){a&&o.push(a),a=[];}let s,i=0,l="",u="";function f(){l&&(0===n?a.push({type:0,value:l}):1===n||2===n||3===n?(a.length>1&&("*"===s||"+"===s)&&t(`A repeatable param (${l}) must be alone in its segment. eg: '/:ids+.`),a.push({type:1,value:l,regexp:u,repeatable:"*"===s||"+"===s,optional:"*"===s||"?"===s})):t("Invalid state to consume buffer"),l="");}function p(){l+=s;}for(;i<e.length;)if(s=e[i++],"\\"!==s||2===n)switch(n){case 0:"/"===s?(l&&f(),c()):":"===s?(f(),n=1):p();break;case 4:p(),n=r;break;case 1:"("===s?n=2:I.test(s)?p():(f(),n=0,"*"!==s&&"?"!==s&&"+"!==s&&i--);break;case 2:")"===s?"\\"==u[u.length-1]?u=u.slice(0,-1)+s:n=3:u+=s;break;case 3:f(),n=0,"*"!==s&&"?"!==s&&"+"!==s&&i--,u="";break;default:t("Unknown state");}else r=n,n=4;return 2===n&&t(`Unfinished custom RegExp for param "${l}"`),f(),c(),o}(e.path),n),a=o(r,{record:e,parent:t,children:[],alias:[]});return t&&!a.record.aliasOf==!t.record.aliasOf&&t.children.push(a),a}function U(e,t){const n=[],r=new Map;function a(e,n,r){const l=!r,u=function(e){return {path:e.path,redirect:e.redirect,name:e.name,meta:e.meta||{},aliasOf:void 0,beforeEnter:e.beforeEnter,props:H(e),children:e.children||[],instances:{},leaveGuards:new Set,updateGuards:new Set,enterCallbacks:{},components:"components"in e?e.components||null:e.component&&{default:e.component}}}(e);u.aliasOf=r&&r.record;const f=z(t,e),p=[u];if("alias"in e){const t="string"==typeof e.alias?[e.alias]:e.alias;for(const e of t)p.push(o({},u,{components:r?r.record.components:u.components,path:e,aliasOf:r?r.record:u}));}let h,d;for(const t of p){const{path:o}=t;if(n&&"/"!==o[0]){const e=n.record.path,r="/"===e[e.length-1]?"":"/";t.path=n.record.path+(o&&r+o);}if(h=K(t,n,f),r?r.alias.push(h):(d=d||h,d!==h&&d.alias.push(h),l&&e.name&&!W(h)&&s(e.name)),u.children){const e=u.children;for(let t=0;t<e.length;t++)a(e[t],h,r&&r.children[t]);}r=r||h,i(h);}return d?()=>{s(d);}:c}function s(e){if(x(e)){const t=r.get(e);t&&(r.delete(e),n.splice(n.indexOf(t),1),t.children.forEach(s),t.alias.forEach(s));}else {const t=n.indexOf(e);t>-1&&(n.splice(t,1),e.record.name&&r.delete(e.record.name),e.children.forEach(s),e.alias.forEach(s));}}function i(e){let t=0;for(;t<n.length&&G(e,n[t])>=0&&(e.record.path!==n[t].record.path||!Q(e,n[t]));)t++;n.splice(t,0,e),e.record.name&&!W(e)&&r.set(e.record.name,e);}return t=z({strict:!1,end:!0,sensitive:!1},t),e.forEach((e=>a(e))),{addRoute:a,resolve:function(e,t){let a,c,s,i={};if("name"in e&&e.name){if(a=r.get(e.name),!a)throw L(1,{location:e});s=a.record.name,i=o(V(t.params,a.keys.filter((e=>!e.optional)).map((e=>e.name))),e.params&&V(e.params,a.keys.map((e=>e.name)))),c=a.stringify(i);}else if("path"in e)c=e.path,a=n.find((e=>e.re.test(c))),a&&(i=a.parse(c),s=a.record.name);else {if(a=t.name?r.get(t.name):n.find((e=>e.re.test(t.path))),!a)throw L(1,{location:e,currentLocation:t});s=a.record.name,i=o({},t.params,e.params),c=a.stringify(i);}const l=[];let u=a;for(;u;)l.unshift(u.record),u=u.parent;return {name:s,path:c,params:i,matched:l,meta:N(l)}},removeRoute:s,getRoutes:function(){return n},getRecordMatcher:function(e){return r.get(e)}}}function V(e,t){const n={};for(const r of t)r in e&&(n[r]=e[r]);return n}function H(e){const t={},n=e.props||!1;if("component"in e)t.default=n;else for(const r in e.components)t[r]="boolean"==typeof n?n:n[r];return t}function W(e){for(;e;){if(e.record.aliasOf)return !0;e=e.parent;}return !1}function N(e){return e.reduce(((e,t)=>o(e,t.meta)),{})}function z(e,t){const n={};for(const r in e)n[r]=r in t?t[r]:e[r];return n}function Q(e,t){return t.children.some((t=>t===e||Q(e,t)))}const X=/#/g,Y=/&/g,Z=/\//g,J=/=/g,ee=/\?/g,te=/\+/g,ne=/%5B/g,re=/%5D/g,oe=/%5E/g,ae=/%60/g,ce=/%7B/g,se=/%7C/g,ie=/%7D/g,le=/%20/g;function ue(e){return encodeURI(""+e).replace(se,"|").replace(ne,"[").replace(re,"]")}function fe(e){return ue(e).replace(te,"%2B").replace(le,"+").replace(X,"%23").replace(Y,"%26").replace(ae,"`").replace(ce,"{").replace(ie,"}").replace(oe,"^")}function pe(e){return null==e?"":function(e){return ue(e).replace(X,"%23").replace(ee,"%3F")}(e).replace(Z,"%2F")}function he(e){try{return decodeURIComponent(""+e)}catch(e){}return ""+e}function de(e){const t={};if(""===e||"?"===e)return t;const n=("?"===e[0]?e.slice(1):e).split("&");for(let e=0;e<n.length;++e){const r=n[e].replace(te," "),o=r.indexOf("="),a=he(o<0?r:r.slice(0,o)),c=o<0?null:he(r.slice(o+1));if(a in t){let e=t[a];s(e)||(e=t[a]=[e]),e.push(c);}else t[a]=c;}return t}function me(e){let t="";for(let n in e){const r=e[n];if(n=fe(n).replace(J,"%3D"),null==r){void 0!==r&&(t+=(t.length?"&":"")+n);continue}(s(r)?r.map((e=>e&&fe(e))):[r&&fe(r)]).forEach((e=>{void 0!==e&&(t+=(t.length?"&":"")+n,null!=e&&(t+="="+e));}));}return t}function ge(e){const t={};for(const n in e){const r=e[n];void 0!==r&&(t[n]=s(r)?r.map((e=>null==e?null:""+e)):null==r?r:""+r);}return t}const ve=Symbol(""),ye=Symbol(""),be=Symbol(""),we=Symbol(""),Ee=Symbol("");function Re(){let e=[];return {add:function(t){return e.push(t),()=>{const n=e.indexOf(t);n>-1&&e.splice(n,1);}},list:()=>e,reset:function(){e=[];}}}function Oe(e,n,r){const o=()=>{e[n].delete(r);};t.onUnmounted(o),t.onDeactivated(o),t.onActivated((()=>{e[n].add(r);})),e[n].add(r);}function ke(e,t,n,r,o){const a=r&&(r.enterCallbacks[o]=r.enterCallbacks[o]||[]);return ()=>new Promise(((c,s)=>{const i=e=>{var i;!1===e?s(L(4,{from:n,to:t})):e instanceof Error?s(e):"string"==typeof(i=e)||i&&"object"==typeof i?s(L(2,{from:t,to:e})):(a&&r.enterCallbacks[o]===a&&"function"==typeof e&&a.push(e),c());},l=e.call(r&&r.instances[o],t,n,i);let u=Promise.resolve(l);e.length<3&&(u=u.then(i)),u.catch((e=>s(e)));}))}function Pe(e,t,n,o){const a=[];for(const s of e)for(const e in s.components){let i=s.components[e];if("beforeRouteEnter"===t||s.instances[e])if("object"==typeof(c=i)||"displayName"in c||"props"in c||"__vccOpts"in c){const r=(i.__vccOpts||i)[t];r&&a.push(ke(r,n,o,s,e));}else {let c=i();a.push((()=>c.then((a=>{if(!a)return Promise.reject(new Error(`Couldn't resolve component "${e}" at "${s.path}"`));const c=r(a)?a.default:a;s.components[e]=c;const i=(c.__vccOpts||c)[t];return i&&ke(i,n,o,s,e)()}))));}}var c;return a}function je(e){const n=t.inject(be),r=t.inject(we),o=t.computed((()=>n.resolve(t.unref(e.to)))),a=t.computed((()=>{const{matched:e}=o.value,{length:t}=e,n=e[t-1],a=r.matched;if(!n||!a.length)return -1;const c=a.findIndex(f.bind(null,n));if(c>-1)return c;const s=xe(e[t-2]);return t>1&&xe(n)===s&&a[a.length-1].path!==s?a.findIndex(f.bind(null,e[t-2])):c})),i=t.computed((()=>a.value>-1&&function(e,t){for(const n in t){const r=t[n],o=e[n];if("string"==typeof r){if(r!==o)return !1}else if(!s(o)||o.length!==r.length||r.some(((e,t)=>e!==o[t])))return !1}return !0}(r.params,o.value.params))),l=t.computed((()=>a.value>-1&&a.value===r.matched.length-1&&p(r.params,o.value.params)));return {route:o,href:t.computed((()=>o.value.href)),isActive:i,isExactActive:l,navigate:function(r={}){return function(e){if(e.metaKey||e.altKey||e.ctrlKey||e.shiftKey)return;if(e.defaultPrevented)return;if(void 0!==e.button&&0!==e.button)return;if(e.currentTarget&&e.currentTarget.getAttribute){const t=e.currentTarget.getAttribute("target");if(/\b_blank\b/i.test(t))return}e.preventDefault&&e.preventDefault();return !0}(r)?n[t.unref(e.replace)?"replace":"push"](t.unref(e.to)).catch(c):Promise.resolve()}}}const Ce=t.defineComponent({name:"RouterLink",compatConfig:{MODE:3},props:{to:{type:[String,Object],required:!0},replace:Boolean,activeClass:String,exactActiveClass:String,custom:Boolean,ariaCurrentValue:{type:String,default:"page"}},useLink:je,setup(e,{slots:n}){const r=t.reactive(je(e)),{options:o}=t.inject(be),a=t.computed((()=>({[$e(e.activeClass,o.linkActiveClass,"router-link-active")]:r.isActive,[$e(e.exactActiveClass,o.linkExactActiveClass,"router-link-exact-active")]:r.isExactActive})));return ()=>{const o=n.default&&n.default(r);return e.custom?o:t.h("a",{"aria-current":r.isExactActive?e.ariaCurrentValue:null,href:r.href,onClick:r.navigate,class:a.value},o)}}});function xe(e){return e?e.aliasOf?e.aliasOf.path:e.path:""}const $e=(e,t,n)=>null!=e?e:null!=t?t:n;function Se(e,t){if(!e)return null;const n=e(t);return 1===n.length?n[0]:n}const Ae=t.defineComponent({name:"RouterView",inheritAttrs:!1,props:{name:{type:String,default:"default"},route:Object},compatConfig:{MODE:3},setup(e,{attrs:n,slots:r}){const a=t.inject(Ee),c=t.computed((()=>e.route||a.value)),s=t.inject(ye,0),i=t.computed((()=>{let e=t.unref(s);const{matched:n}=c.value;let r;for(;(r=n[e])&&!r.components;)e++;return e})),l=t.computed((()=>c.value.matched[i.value]));t.provide(ye,t.computed((()=>i.value+1))),t.provide(ve,l),t.provide(Ee,c);const u=t.ref();return t.watch((()=>[u.value,l.value,e.name]),(([e,t,n],[r,o,a])=>{t&&(t.instances[n]=e,o&&o!==t&&e&&e===r&&(t.leaveGuards.size||(t.leaveGuards=o.leaveGuards),t.updateGuards.size||(t.updateGuards=o.updateGuards))),!e||!t||o&&f(t,o)&&r||(t.enterCallbacks[n]||[]).forEach((t=>t(e)));}),{flush:"post"}),()=>{const a=c.value,s=e.name,i=l.value,f=i&&i.components[s];if(!f)return Se(r.default,{Component:f,route:a});const p=i.props[s],h=p?!0===p?a.params:"function"==typeof p?p(a):p:null,d=t.h(f,o({},h,n,{onVnodeUnmounted:e=>{e.component.isUnmounted&&(i.instances[s]=null);},ref:u}));return Se(r.default,{Component:d,route:a})||d}}});function Le(e){return e.reduce(((e,t)=>e.then((()=>t()))),Promise.resolve())}return e.RouterLink=Ce,e.RouterView=Ae,e.START_LOCATION=$,e.createMemoryHistory=function(e=""){let t=[],n=[""],r=0;function o(e){r++,r===n.length||n.splice(r),n.push(e);}const a={location:"",state:{},base:e=v(e),createHref:b.bind(null,e),replace(e){n.splice(r--,1),o(e);},push(e,t){o(e);},listen:e=>(t.push(e),()=>{const n=t.indexOf(e);n>-1&&t.splice(n,1);}),destroy(){t=[],n=[""],r=0;},go(e,o=!0){const a=this.location,c=e<0?g.back:g.forward;r=Math.max(0,Math.min(r+e,n.length-1)),o&&function(e,n,{direction:r,delta:o}){const a={direction:r,delta:o,type:m.pop};for(const r of t)r(e,n,a);}(this.location,a,{direction:c,delta:e});}};return Object.defineProperty(a,"location",{enumerable:!0,get:()=>n[r]}),a},e.createRouter=function(e){const r=U(e.routes,e),i=e.parseQuery||de,u=e.stringifyQuery||me,h=e.history,d=Re(),g=Re(),v=Re(),y=t.shallowRef($);let b=$;n&&e.scrollBehavior&&"scrollRestoration"in history&&(history.scrollRestoration="manual");const k=a.bind(null,(e=>""+e)),P=a.bind(null,pe),j=a.bind(null,he);function C(e,t){if(t=o({},t||y.value),"string"==typeof e){const n=l(i,e,t.path),a=r.resolve({path:n.path},t),c=h.createHref(n.fullPath);return o(n,a,{params:j(a.params),hash:he(n.hash),redirectedFrom:void 0,href:c})}let n;if("path"in e)n=o({},e,{path:l(i,e.path,t.path).path});else {const r=o({},e.params);for(const e in r)null==r[e]&&delete r[e];n=o({},e,{params:P(e.params)}),t.params=P(t.params);}const a=r.resolve(n,t),c=e.hash||"";a.params=k(j(a.params));const s=function(e,t){const n=t.query?e(t.query):"";return t.path+(n&&"?")+n+(t.hash||"")}(u,o({},e,{hash:(f=c,ue(f).replace(ce,"{").replace(ie,"}").replace(oe,"^")),path:a.path}));var f;const p=h.createHref(s);return o({fullPath:s,hash:c,query:u===me?ge(e.query):e.query||{}},a,{redirectedFrom:void 0,href:p})}function S(e){return "string"==typeof e?l(i,e,y.value.path):o({},e)}function A(e,t){if(b!==e)return L(8,{from:t,to:e})}function q(e){return T(e)}function B(e){const t=e.matched[e.matched.length-1];if(t&&t.redirect){const{redirect:n}=t;let r="function"==typeof n?n(e):n;return "string"==typeof r&&(r=r.includes("?")||r.includes("#")?r=S(r):{path:r},r.params={}),o({query:e.query,hash:e.hash,params:"path"in r?{}:e.params},r)}}function T(e,t){const n=b=C(e),r=y.value,a=e.state,c=e.force,s=!0===e.replace,i=B(n);if(i)return T(o(S(i),{state:"object"==typeof i?o({},a,i.state):a,force:c,replace:s}),t||n);const l=n;let h;return l.redirectedFrom=t,!c&&function(e,t,n){const r=t.matched.length-1,o=n.matched.length-1;return r>-1&&r===o&&f(t.matched[r],n.matched[o])&&p(t.params,n.params)&&e(t.query)===e(n.query)&&t.hash===n.hash}(u,r,n)&&(h=L(16,{to:l,from:r}),Q(r,r,!0,!1)),(h?Promise.resolve(h):G(l,r)).catch((e=>M(e)?M(e,2)?e:z(e):N(e,l,r))).then((e=>{if(e){if(M(e,2))return T(o({replace:s},S(e.to),{state:"object"==typeof e.to?o({},a,e.to.state):a,force:c}),t||l)}else e=D(l,r,!0,s,a);return F(l,r,e),e}))}function _(e,t){const n=A(e,t);return n?Promise.reject(n):Promise.resolve()}function G(e,t){let n;const[r,o,a]=function(e,t){const n=[],r=[],o=[],a=Math.max(t.matched.length,e.matched.length);for(let c=0;c<a;c++){const a=t.matched[c];a&&(e.matched.find((e=>f(e,a)))?r.push(a):n.push(a));const s=e.matched[c];s&&(t.matched.find((e=>f(e,s)))||o.push(s));}return [n,r,o]}(e,t);n=Pe(r.reverse(),"beforeRouteLeave",e,t);for(const o of r)o.leaveGuards.forEach((r=>{n.push(ke(r,e,t));}));const c=_.bind(null,e,t);return n.push(c),Le(n).then((()=>{n=[];for(const r of d.list())n.push(ke(r,e,t));return n.push(c),Le(n)})).then((()=>{n=Pe(o,"beforeRouteUpdate",e,t);for(const r of o)r.updateGuards.forEach((r=>{n.push(ke(r,e,t));}));return n.push(c),Le(n)})).then((()=>{n=[];for(const r of e.matched)if(r.beforeEnter&&!t.matched.includes(r))if(s(r.beforeEnter))for(const o of r.beforeEnter)n.push(ke(o,e,t));else n.push(ke(r.beforeEnter,e,t));return n.push(c),Le(n)})).then((()=>(e.matched.forEach((e=>e.enterCallbacks={})),n=Pe(a,"beforeRouteEnter",e,t),n.push(c),Le(n)))).then((()=>{n=[];for(const r of g.list())n.push(ke(r,e,t));return n.push(c),Le(n)})).catch((e=>M(e,8)?e:Promise.reject(e)))}function F(e,t,n){for(const r of v.list())r(e,t,n);}function D(e,t,r,a,c){const s=A(e,t);if(s)return s;const i=t===$,l=n?history.state:{};r&&(a||i?h.replace(e.fullPath,o({scroll:i&&l&&l.scroll},c)):h.push(e.fullPath,c)),y.value=e,Q(e,t,r,i),z();}let I;function K(){I||(I=h.listen(((e,t,r)=>{if(!J.listening)return;const a=C(e),s=B(a);if(s)return void T(o(s,{replace:!0}),a).catch(c);b=a;const i=y.value;var l,u;n&&(l=R(i.fullPath,r.delta),u=w(),O.set(l,u)),G(a,i).catch((e=>M(e,12)?e:M(e,2)?(T(e.to,a).then((e=>{M(e,20)&&!r.delta&&r.type===m.pop&&h.go(-1,!1);})).catch(c),Promise.reject()):(r.delta&&h.go(-r.delta,!1),N(e,a,i)))).then((e=>{(e=e||D(a,i,!1))&&(r.delta&&!M(e,8)?h.go(-r.delta,!1):r.type===m.pop&&M(e,20)&&h.go(-1,!1)),F(a,i,e);})).catch(c);})));}let V,H=Re(),W=Re();function N(e,t,n){z(e);const r=W.list();return r.length?r.forEach((r=>r(e,t,n))):console.error(e),Promise.reject(e)}function z(e){return V||(V=!e,K(),H.list().forEach((([t,n])=>e?n(e):t())),H.reset()),e}function Q(r,o,a,c){const{scrollBehavior:s}=e;if(!n||!s)return Promise.resolve();const i=!a&&function(e){const t=O.get(e);return O.delete(e),t}(R(r.fullPath,0))||(c||!a)&&history.state&&history.state.scroll||null;return t.nextTick().then((()=>s(r,o,i))).then((e=>e&&E(e))).catch((e=>N(e,r,o)))}const X=e=>h.go(e);let Y;const Z=new Set,J={currentRoute:y,listening:!0,addRoute:function(e,t){let n,o;return x(e)?(n=r.getRecordMatcher(e),o=t):o=e,r.addRoute(o,n)},removeRoute:function(e){const t=r.getRecordMatcher(e);t&&r.removeRoute(t);},hasRoute:function(e){return !!r.getRecordMatcher(e)},getRoutes:function(){return r.getRoutes().map((e=>e.record))},resolve:C,options:e,push:q,replace:function(e){return q(o(S(e),{replace:!0}))},go:X,back:()=>X(-1),forward:()=>X(1),beforeEach:d.add,beforeResolve:g.add,afterEach:v.add,onError:W.add,isReady:function(){return V&&y.value!==$?Promise.resolve():new Promise(((e,t)=>{H.add([e,t]);}))},install(e){e.component("RouterLink",Ce),e.component("RouterView",Ae),e.config.globalProperties.$router=this,Object.defineProperty(e.config.globalProperties,"$route",{enumerable:!0,get:()=>t.unref(y)}),n&&!Y&&y.value===$&&(Y=!0,q(h.location).catch((e=>{})));const r={};for(const e in $)r[e]=t.computed((()=>y.value[e]));e.provide(be,this),e.provide(we,t.reactive(r)),e.provide(Ee,y);const o=e.unmount;Z.add(e),e.unmount=function(){Z.delete(e),Z.size<1&&(b=$,I&&I(),I=null,y.value=$,Y=!1,V=!1),o();};}};return J},e.createRouterMatcher=U,e.createWebHashHistory=function(e){return (e=location.host?e||location.pathname+location.search:"").includes("#")||(e+="#"),C(e)},e.createWebHistory=C,e.isNavigationFailure=M,e.loadRouteLocation=function(e){return e.matched.every((e=>e.redirect))?Promise.reject(new Error("Cannot load a route that redirects.")):Promise.all(e.matched.map((e=>e.components&&Promise.all(Object.keys(e.components).reduce(((t,n)=>{const o=e.components[n];return "function"!=typeof o||"displayName"in o||t.push(o().then((t=>{if(!t)return Promise.reject(new Error(`Couldn't resolve component "${n}" at "${e.path}". Ensure you passed a function that returns a promise.`));const o=r(t)?t.default:t;e.components[n]=o;}))),t}),[]))))).then((()=>e))},e.matchedRouteKey=ve,e.onBeforeRouteLeave=function(e){const n=t.inject(ve,{}).value;n&&Oe(n,"leaveGuards",e);},e.onBeforeRouteUpdate=function(e){const n=t.inject(ve,{}).value;n&&Oe(n,"updateGuards",e);},e.parseQuery=de,e.routeLocationKey=we,e.routerKey=be,e.routerViewLocationKey=Ee,e.stringifyQuery=me,e.useLink=je,e.useRoute=function(){return t.inject(we)},e.useRouter=function(){return t.inject(be)},e.viewDepthKey=ye,Object.defineProperty(e,"__esModule",{value:!0}),e}({},Vue);

  customElements.define('kiss-accordion', class extends HTMLElement {

      static get observedAttributes() {
          return [];
      }

      constructor() {
          super();
      }

      connectedCallback() {


          this.addEventListener('click', e => {

              let trigger = e.target.matches('kiss-accordion-trigger') ? e.target : e.target.closest('kiss-accordion-trigger');

              if (trigger) {
                  e.preventDefault();
                  this.toggle(this.triggerElements().indexOf(trigger));
              }
          });
      }

      triggerElements() {

          return Array.from(this.children).filter(c => {
              return c.matches('kiss-accordion-trigger');
          });
      }

      toggle(index = 0) {

          let triggers = this.triggerElements(),
              multiple = this.getAttribute('multiple') !== null;

          triggers.forEach((t, idx) => {

              if (idx == index) {
                  t.setAttribute('active', (!t.getAttribute('active') || t.getAttribute('active') == 'false') ? 'true' : 'false');
              } else if(!multiple) {
                  t.setAttribute('active', 'false');
              }
          });
      }
  });

  // WebReflection / element-notifier
  function onMutation(callback, root) {

      let loop = function loop(nodes, added, removed, connected, pass) {

          for (let i = 0, length = nodes.length; i < length; i++) {

              let node = nodes[i];

              if (pass || 'querySelectorAll' in node) {

                  if (connected) {
                      if (!added.has(node)) {
                          added.add(node);
                          removed["delete"](node);
                          callback(node, connected);
                      }
                  } else if (!removed.has(node)) {
                      removed.add(node);
                      added["delete"](node);
                      callback(node, connected);
                  }

                  if (!pass) loop((node.shadowRoot || node)['querySelectorAll']('*'), added, removed, connected, true);
              }
          }
      };

      let observer = new MutationObserver(records => {
          for (let added = new Set(), removed = new Set(), i = 0, length = records.length; i < length; i++) {
              let _records$i = records[i],
                  addedNodes = _records$i.addedNodes,
                  removedNodes = _records$i.removedNodes;
              loop(removedNodes, added, removed, false, false);
              loop(addedNodes, added, removed, true, false);
          }
      });

      observer.observe(root || document, {
          subtree: true,
          childList: true
      });

      return observer;
  }

  function on$1(element, name, delegate, fn) {

      if (!fn) {
         element.addEventListener(name, arguments[2]);
      } else {
          element.addEventListener(name, function (e) {

              let target = e.target;

              while (target !== element) {

                  if (!target) {
                      break;
                  }

                  if (target.matches(delegate)){
                      return fn.apply(target, arguments);
                  }

                  target = target.parentNode;
              }
          }, true);
      }

      return element;
  }

  function trigger(ele, name, data = {}) {
      ele.dispatchEvent(new CustomEvent(name, Object.assign({bubbles: true}, data)));
  }

  let Animations = {
      default(resolve, current, next) {
          resolve();
      },

      fade(resolve, current, next) {

          current.animate([
              {opacity: 1},
              {opacity: 0}
          ], {
              duration: 250,
          });

          next.animate([
              {opacity: 0},
              {opacity: 1}
          ], {
              duration: 250,
          }).addEventListener('finish', function(e) {
              resolve();
          }, false);
      },

      slide(resolve, current, next) {

          let slides = [...current.parentElement.children],
              dir = slides.indexOf(next) > slides.indexOf(current) ? 1 : -1;

          next.classList.add('visible');

          current.animate([
              {transform: `translateX(${-1 * dir * 100}%)`},
          ], {
              duration: 250,
              easing: 'ease-in-out',
          });

          next.animate([
              {transform: `translateX(${dir * 100}%)`},
              {transform: 'translateX(0)'},
          ], {
              duration: 250,
              easing: 'ease-in-out',
          }).addEventListener('finish', function(e) {
              resolve();
              next.classList.remove('visible');
          }, false);

      }
  };

  function animate(animation, current, next) {

      return new Promise((resolve, reject) => {
          (Animations[animation] || Animations.default)(resolve, current, next);
      });
  }

  customElements.define('kiss-carousel', class extends HTMLElement {

      static get observedAttributes() {
          return ['animation'];
      }

      attributeChangedCallback(attrName, oldVal, newVal) {

          switch (attrName) {
              case 'animation':
                  this.animation = newVal;
                  break;
          }
      }

      connectedCallback() {

          const $this = this;

          this.wrapper = this.querySelector(':scope > kiss-slides') || this;
          this.animation = this.getAttribute('animation') || 'slide';
          this.setActive(0);

          // events
          on$1(this, 'click', '[kiss-slide]', function(e) {

              const goto = this.getAttribute('kiss-slide');

              switch(goto) {
                  case 'next':
                      $this.nextSlide();
                      break;
                  case 'prev':
                      $this.prevSlide();
                      break;
                  default:
                      const isNumeric = !isNaN(parseFloat(goto)) && isFinite(goto);

                      if (isNumeric && $this.slides()[Number(goto) - 1]) {
                          $this.setActive(Number(goto) - 1);
                      }
              }
          });

          let pointerStart = null;

          on$1(this.wrapper, 'pointerdown', e => {

              if (e.target.matches('a, input, textarea, select, button')) {
                  return;
              }

              e.preventDefault();
              pointerStart = e;

          });

          on$1(this.wrapper, 'pointermove', e => {

              if (!pointerStart) {
                  return;
              }

              e.preventDefault();
          });

          on$1(this.wrapper, 'pointerup', e => {

              if (!pointerStart) return;

              if (pointerStart.clientX < e.clientX) {
                  this.prevSlide();
              } else if(pointerStart.clientX > e.clientX) {
                  this.nextSlide();
              }

              pointerStart = null;
          });

          document.addEventListener('DOMContentLoaded', () => {
              this.normalize();
          });

          window.addEventListener('resize', () => {
              this.normalize();
          });
      }

      normalize() {

          let height = 0;
          let slides = this.slides();

          slides.forEach(slide => {
              slide.style.height = '';
              height = Math.max(height, slide.offsetHeight);
          });

          [this.wrapper, ...slides].forEach(slide => slide.style.height = `${height}px`);
      }

      slides() {
          return this.wrapper.querySelectorAll(':scope > kiss-slide');
      }

      nextSlide() {

          if (!this.activeSlide) return;

          let slides = this.slides();

          const index = [...slides].indexOf(this.activeSlide);

          this.setActive(slides[index + 1] ? index + 1 : 0);
      }

      prevSlide() {

          if (!this.activeSlide) return;

          let slides = this.slides();

          const index = [...slides].indexOf(this.activeSlide);

          this.setActive(slides[index - 1] ? index - 1 : slides.length - 1);
      }

      setActive(idx) {

          if (this.isAnimating) return;

          const slide = this.slides()[idx] || null;

          if (!slide) {
              return;
          }

          // initial
          if (!this.activeSlide && !idx) {
              slide.classList.add('active');
              this.activeSlide = slide;
              return;
          }

          this.isAnimating = true;

          animate(this.animation, this.activeSlide, slide).then(() => {

              this.activeSlide.classList.remove('active');
              slide.classList.add('active');

              // update active triggers
              this.querySelectorAll('[kiss-slide]').forEach(item => {

                  item.classList.remove('active');

                  if (item.getAttribute('kiss-slide') == String(idx + 1)) {
                      item.classList.add('active');
                  }
              });

              this.activeSlide = slide;
              this.isAnimating = false;
          });
      }
  });

  on$1(document.documentElement, 'click', function(e) {

      let dropdowns = document.body.querySelectorAll('kiss-dropdown[open="true"]'),
          dp = e.target.closest('kiss-dropdown');

      for (let i=0;i<dropdowns.length;i++) {
          if (!dp || dp!==dropdowns[i]) dropdowns[i].close();
      }

  });

  customElements.define('kiss-dropdown', class extends HTMLElement {

      connectedCallback() {

          this.addEventListener('click', (e) => {

              if (e.target.matches('input,select,textarea')) {
                  return;
              }

              if (this.getAttribute('open') == 'true') {

                  if (this.getAttribute('autohide') == 'false') {
                      return
                  }

                  this.close();
              } else {
                  this.open();
              }
          });
      }

      open() {
          this.setAttribute('open', 'true');
      }

      close() {
          this.removeAttribute('open');
      }
  });

  customElements.define('kiss-dialog', class extends HTMLElement {

      connectedCallback() {

          on$1(this, 'click', '[kiss-dialog-close]', e => {
              e.preventDefault();
              this.close();
          });
      }

      show() {
          this.setAttribute('open', 'true');
      }

      close() {
          this.removeAttribute('open');
      }
  });

  on$1(document.documentElement, 'click', '[kiss-offcanvas]', function (e) {

      e.preventDefault();

      let offcanvas = document.querySelector(this.getAttribute('kiss-offcanvas') || this.getAttribute('href'));

      if (offcanvas && offcanvas.show) {
          offcanvas.show();
      }
  });

  customElements.define('kiss-offcanvas', class extends HTMLElement {

      connectedCallback() {

          let $self = this, pointerStart = null;

          on$1(this, 'pointerdown', e => pointerStart = e.target);
          on$1(this, 'pointerup', e => {

              if (e.target == this && pointerStart == this) {

                  e.preventDefault();

                  if (!this.matches('[modal="true"]')) {
                      this.close();
                  }
              }
          });


          on$1(this, 'click', '[kiss-offcanvas-close]', function(e){

              if (this.getAttribute('kiss-offcanvas-close') != 'no-prevent') {
                  e.preventDefault();
              }

              $self.close();
          });

      }

      show() {
          this.setAttribute('open', 'true');
      }

      close() {
          this.removeAttribute('open');
      }
  });

  on$1(document.documentElement, 'click', '[kiss-popoutmenu]', function (e) {

      e.preventDefault();

      let menu = document.querySelector(this.getAttribute('kiss-popoutmenu') || this.getAttribute('href'));

      if (menu && menu.show) {

          let position = this.getAttribute('kiss-popoutmenu-pos');

          menu.show(position ? this : null, position);
      }
  });

  customElements.define('kiss-popoutmenu', class extends HTMLElement {

      connectedCallback() {

          on$1(this, 'click', e => {

              if (e.target.matches('[kiss-popoutmenu-close]') || e.target.closest('[kiss-popoutmenu-close]')) {
                  return this.close();
              }

              if (this.getAttribute('modal') !== 'true') {
                  this.close();
              }
          });
      }

      show(ele, position = 'left') {

          let content = this.querySelector('kiss-content');

          if (content) {
              content.style.position = '';
              content.style.top = '';
              content.style.left = '';
          }

          if (content && ele) {

              let rect = ele.getBoundingClientRect(),
                  left = rect.left,
                  top = rect.top + ele.offsetHeight;

              switch (position) {
                  case "right":
                      left = rect.right - content.offsetWidth;
                      break;

                  case "center":
                      left = (rect.right - ele.offsetWidth/2) - content.offsetWidth / 2;
                      break;

                  case "left":
                  default:
                      left = rect.left;
                      break;
              }

              if (left + content.offsetWidth > this.offsetWidth) {
                  left = rect.right - content.offsetWidth;
              }

              content.style.position = 'absolute';
              content.style.top = `${top}px`;
              content.style.left = `${left}px`;

          }

          this.setAttribute('open', 'true');
      }

      close() {
          this.removeAttribute('open');
          trigger(this, 'popoutmenuclose');
      }
  });

  customElements.define('kiss-parallax', class extends HTMLElement {

      connectedCallback() {

          let $this = this;

          this.speed = .3;
          this.mobilePx = 450;
          this.mobileDisable = this.getAttribute('mobile') == 'false';
          this.conditions = [];
          this.active = true;

          this.transform = this.getAttribute('transform') || 'translateY';

          this.winHeight = window.innerHeight;
          this.accumulated = 0;
          this.getRect();

          this.startScroll = this.targetR.top - this.winHeight > 0
            ? this.targetR.top - this.winHeight
            : 0;

          window.addEventListener('scroll', event => {
              requestAnimationFrame(() => {
                  if ($this.mobileDisable && window.innerWidth < this.mobilePx) return

                  if ($this.active) {
                    $this.update();
                  }
              });
          });
      }

      // HELPERS
      scrollY() {
          return window.scrollY || window.pageYOffset;
      }

      getTranslation() {
          const dist = this.scrollY() - this.startScroll;
          const translation = (dist * this.speed) + this.accumulated;
          return translation >= 0 ? translation : 0;
      }

      getRect() {
          this.targetR = this.getBoundingClientRect();
          return this.targetR;
      }

      inWindow() {
          this.getRect();

          const top = this.targetR.top;
          const bottom = this.targetR.bottom;

          return top < this.winHeight && bottom > 0;
      }

      update() {

          if (this._isHidden()) {
              return;
          }

          let translate = this.getTranslation();
          let percent = ((translate / this.speed)/this.winHeight) * 100;

          if (percent < 0) percent = 0;
          if (percent > 100) percent = 100;

          let style = {transform : '', filter: ''}, mod;

          this.transform.split(' ').forEach(prop => {

              mod = prop.split('*');
              prop = mod[0];
              mod = Number(mod[1] || 1);

              switch (prop) {
                  case 'translateX':
                  case 'translateY':
                      style.transform += ` ${prop}(${(translate * mod)}px)`;
                      break;

                  case 'rotate':
                  case 'rotateX':
                  case 'rotateY':
                      style.transform += ` ${prop}(${(translate * mod)}deg)`;
                      break;

                  case 'opacity':
                      style.opacity = (mod < 0 ?  (percent/100) : 1 - (percent/100)) * Math.abs(mod);
                      break;
              }
          });

          Object.assign(this.style, style);
      }

      _isHidden() {
          return (this.offsetTop === null)
      }
  });

  customElements.define('kiss-svg', class extends HTMLElement {

      static get observedAttributes() {
          return ['src'];
      }

      connectedCallback() {
          this.update();
      }

      attributeChangedCallback(attrName, oldVal, newVal) {
          if (attrName == 'src') this.update();
      }

      update() {

          let url = this.getAttribute('src');
          let width = this.getAttribute('width');
          let height = this.getAttribute('height');

          if (!url.trim()) {
              this.innerHTML = '';
              return;
          }

          if (width && height) {
              this.innerHTML = `<canvas width="${width}" height="${height}"></canvas>`;
          }

          fetch(url).then(response => response.text()).then(content => {

              content = content.trim();

              let attrs = {
                  width: this.getAttribute('width') || '',
                  height: this.getAttribute('height') || ''
              };

              if (!content.match(/^<svg/)) {
                  this.innerHTML = '';
                  return;
              }

              this.innerHTML = content;

              let svg = this.children[0];

              Object.keys(attrs).forEach(attr => attrs[attr] && svg.setAttribute(attr, attrs[attr]));
          }).catch(() => {
              this.innerHTML = '';
          });
      }

  });

  customElements.define('kiss-tabs', class extends HTMLElement {

      static get observedAttributes() {
          return [];
      }

      constructor() {
          super();
      }

      connectedCallback() {

          if (this.getAttribute('static') == 'true') {
              return;
          }

          this.activeIndex = Number(this.getAttribute('index') || 0);

          this.nav = document.createElement("ul");

          this.nav.classList.add('kiss-tabs-nav');
          this.prepend(this.nav);

          this.render();

          this.addEventListener('click', e => {
              if (!e.target.classList.contains('kiss-tabs-nav-link')) return;
              this.setIndex(e.target.getAttribute('index'));
              e.preventDefault();
          });
      }

      attributeChangedCallback(oldvalue, newvalue) {
          if (oldvalue != newvalue) this.render();
      }

      setIndex(index) {

          this.activeIndex = Number(index);

          this.tabs.forEach((tab, idx) => {

              this.nav.children[idx].setAttribute('active', this.activeIndex == idx ? 'true' : 'false');
              tab.setAttribute('active', this.activeIndex == idx ? 'true' : 'false');
          });
      }

      render() {

          if (this.getAttribute('static') == 'true') {
              return;
          }

          this.tabs = [];

          this.nav.innerHTML = '';

          let item;

          for (let i = 0; i < this.children.length; i++) {

              if (this.children[i].tagName.toLowerCase() == 'tab') {

                  item = document.createElement("li");
                  item.innerHTML = `<a class="kiss-tabs-nav-link" index="${this.tabs.length}">${this.children[i].getAttribute('caption') || 'Tab'}</a>`;
                  this.nav.append(item);

                  this.tabs.push(this.children[i]);

                  this.children[i].setAttribute('active', 'false');
                  item.setAttribute('active', 'false');
              }
          }

          this.setIndex(this.activeIndex);
      }
  });

  let tooltipContainer = null;

  on$1(document.documentElement, 'mouseenter', '[kiss-tooltip]', function(e) {

      e.preventDefault();

      if (!tooltipContainer) {

          tooltipContainer = document.createElement('kiss-tooltip');
          document.body.appendChild(tooltipContainer);

      }

      tooltipContainer.show(this.getAttribute('aria-label'), this, this.getAttribute('kiss-tooltip'));
  });


  customElements.define('kiss-tooltip', class extends HTMLElement {

      connectedCallback() {

      }

      show(text, ele, position = 'bottom') {

          this.innerText = text;
          this.setAttribute('show', 'true');

          if (ele) {
              let rect = ele.getBoundingClientRect(),
              left = null,
              top = null,
              offset = 5;

              switch (position) {
                  case "right":
                      top = (rect.top + rect.height / 2) - this.offsetHeight / 2;
                      left = rect.right + offset;
                      break;

                  case "bottom":
                      top = rect.bottom + offset;
                      left = rect.left;
                      break;
                  default:
                      left = rect.left;
                      break;
              }

              Object.assign(this.style, {
                  top: `${top}px`,
                  left: `${left}px`
              });

              this.$element = ele;

              if (!ele.__tooltiped) {

                  on$1(ele, 'mouseleave', e => {
                      tooltipContainer.hide();
                  });

                  ele.__tooltiped = true;
              }

          }
      }

      hide() {
          this.setAttribute('show', 'false');
      }

      isActive() {
          return this.getAttribute('show') == 'true';
      }
  });

  HTMLElement.prototype.on = function(event, selector, handler) {
      return on$1(this, event, selector, handler)
  };

  HTMLElement.prototype.onMutation = function(cb) {
      return onMutation(cb, this)
  };

  /**
   * JSONStorage - a simple storage helper inspired by the redis api.
   *
   * @author     Artur Heinze
   * @copyright  (c) since 2012 Artur Heinze
   * @license    MIT - http://opensource.org/licenses/MIT
   * @url        https://github.com/aheinze/JSONStorage
   */
  (function (global) {

      function Store(name, adapter) {

          var $this = this;

          this.name = name;
          this.adapter = adapter;
          this.data = adapter.load(name);
          this.data.__ex = this.data.__ex || {}; // expires data container

          // cleanup expires data
          (function () {

              var time = (new Date()).getTime();

              for (var key in $this.data.__ex) {
                  if ($this.data.__ex[key] < time) {
                      delete $this.data[key];
                      delete $this.data.__ex[key];
                  }
              }

          })();
      }

      Store.prototype.store = function () {
          try {
              this.adapter.store(this.name, this.data);
          } catch (e) { }
      };

      Store.prototype.toString = function () {
          return JSON.stringify(this.data);
      };

      Store.prototype.flushdb = function () {

          var $this = this;

          this.data = {};
          this.data.__ex = {};

          setTimeout(function () {
              $this.store();
          }, 0); // async saving!?

          return true;
      };

      Store.prototype.get = function (key, def) {

          if (this.data.__ex[key] && this.data.__ex[key] < (new Date()).getTime()) {
              delete this.data[key];
              delete this.data.__ex[key];
          }

          return this.data[key] !== undefined ? this.data[key] : def;
      };

      Store.prototype.set = function (key, value) {
          this.data[key] = value;
          this.store();
      };

      Store.prototype.setex = function (key, seconds, value) {
          this.set(key, value);
          this.expire(key, seconds);
      };

      Store.prototype.expire = function (key, seconds) {
          if (this.data[key]) this.data.__ex[key] = (new Date()).getTime() + (seconds * 1000);
      };

      Store.prototype.exists = function (key) {
          return this.get(key, "___no___") !== "___no___";
      };

      Store.prototype.del = function () {

          var keys = arguments,
              key = null,
              removed = 0;

          for (var i = 0; i < keys.length; i++) {

              key = keys[i];

              if (this.exists(key)) {
                  delete this.data[key];

                  if (this.data.__ex[key]) {
                      delete this.data.__ex[key];
                  }

                  removed++;
              }
          }

          this.store();

          return removed;
      };

      Store.prototype.type = function (key) {

          key = this.get(key);

          if (typeof (key) === 'object') {
              return JSON.stringify(key)[0] === "[" ? "list" : "set";
          }

          return typeof (key);
      };

      Store.prototype.append = function (key, value) {

          value = String(value);

          var current = String(this.get(key, "")),
              newone = current + value;

          this.set(key, newone);

          return newone.length;
      };

      Store.prototype.incr = function (key, by) {

          by = by || 1;

          var current = Number(this.get(key, 0)),
              newone = current + by;

          this.set(key, newone);

          return newone;
      };

      Store.prototype.decr = function (key, by) {
          by = by || 1;
          return this.incr(key, (by * -1));
      };

      /* List methods */

      Store.prototype.llen = function (key) {
          return this.get(key, []).length;
      };

      Store.prototype.lpush = function (key, value) {
          var list = this.get(key, []),
              ret = list.unshift(value);

          this.set(key, list);
          return ret;
      };

      Store.prototype.rpush = function (key, value) {
          var list = this.get(key, []),
              ret = list.push(value);

          this.set(key, list);
          return ret;
      };

      Store.prototype.lset = function (key, index, value) {
          var list = this.get(key, []);

          if (index < 0) {
              index = list.length - Math.abs(index);
          }

          if (list[index]) {
              list[index] = value;
              this.set(key, list);
              return true;
          }

          return false;
      };

      Store.prototype.lindex = function (key, index) {
          var list = this.get(key, []);

          if (index < 0) {
              index = list.length - Math.abs(index);
          }

          return list[index] ? list[index] : null;
      };

      /* Hash methods */

      Store.prototype.hset = function (key, field, value) {
          var set = this.get(key, {});

          set[field] = value;
          this.set(key, set);
      };

      Store.prototype.hget = function (key, field, def) {
          var set = this.get(key, {});

          return set[field] !== undefined ? set[field] : def;
      };

      Store.prototype.hgetall = function (key) {
          return this.get(key, {});
      };

      Store.prototype.hexists = function (key, field) {
          var set = this.get(key, {});

          return (set[field] !== undefined);
      };

      Store.prototype.hkeys = function (key) {
          var set = this.get(key, {}),
              keys = [],
              name = null;

          for (name in set) {
              if (set.hasOwnProperty(name)) {
                  keys.push(name);
              }
          }

          return keys;
      };

      Store.prototype.hvals = function (key) {
          var set = this.get(key, {}),
              vals = [],
              name = null;

          for (name in set) {
              if (set.hasOwnProperty(name)) {
                  vals.push(keys[name]);
              }
          }

          return vals;
      };

      Store.prototype.hlen = function (key) {
          return this.hkeys(key).length;
      };

      Store.prototype.hdel = function (key) {

          if (!this.exists(key)) return 0;

          var set = this.get(key, {}),
              field = null,
              removed = 0;

          for (var i = 1; i < arguments.length; i++) {

              field = arguments[i];

              if (set[field] !== undefined) {
                  delete set[field];
                  removed++;
              }
          }

          this.set(key, set);

          return removed;
      };

      Store.prototype.hincrby = function (key, field, by) {
          by = by || 1;
          var current = Number(this.hget(key, field, 0)),
              newone = current + by;

          this.hset(key, field, newone);

          return newone;
      };

      Store.prototype.hmget = function (key) {
          var set = this.get(key, {}),
              field = null,
              values = [];

          for (var i = 1; i < arguments.length; i++) {
              field = arguments[i];
              values.push(set[field] !== undefined ? set[field] : null);
          }

          return values;
      };

      Store.prototype.hmset = function (key) {
          var set = this.get(key, {}),
              field = null,
              value = null;

          for (var i = 1; i < arguments.length; i++) {
              field = arguments[i];
              value = arguments[(i + 1)] ? arguments[(i + 1)] : null;
              set[field] = value;
              i = i + 1;
          }

          this.set(key, set);
      };

      var JSONStorage = {

          select: function (name, adapter) {
              return (new Store(name, typeof (adapter) == 'object' ? adapter : (this.adapters[adapter] || this.adapters['memory'])));
          },

          adapters: {

              memory: (function () {
                  var dbs = {};

                  return {
                      load: function (name) {
                          return dbs[name] || {};
                      },
                      store: function (name, data) {
                          dbs[name] = data;
                      }
                  }
              })(),

              local: {
                  load: function (name) {
                      return global.localStorage["jsonstorage." + name] ? JSON.parse(global.localStorage["jsonstorage." + name]) : {};
                  },
                  store: function (name, data) {
                      global.localStorage["jsonstorage." + name] = JSON.stringify(data);
                  }
              },

              session: {
                  load: function (name) {
                      return global.sessionStorage["jsonstorage." + name] ? JSON.parse(global.sessionStorage["jsonstorage." + name]) : {};
                  },
                  store: function (name, data) {
                      global.sessionStorage["jsonstorage." + name] = JSON.stringify(data);
                  }
              }
          }
      };

      // AMD support
      if (typeof define === 'function' && define.amd) {
          define(function () {
              return JSONStorage;
          });
          // CommonJS and Node.js module support.
      } else if (typeof exports !== 'undefined') {
          // Support Node.js specific `module.exports` (which can be a function)
          if (typeof module != 'undefined' && module.exports) {
              exports = module.exports = JSONStorage;
          }
          // But always support CommonJS module 1.1.1 spec (`exports` cannot be a function)
          exports.JSONStorage = JSONStorage;
      } else {
          global.JSONStorage = JSONStorage;
      }

  })(typeof window === 'undefined' ? {} : window);

  /**
   * Translation tool
   */
  (function(global){

          function extend(destination, source) {

              if (!destination || !source) return destination;

              for (var field in source) {
                  if (destination[field] === source[field]) continue;
                  destination[field] = source[field];
              }

              return destination;
          }


          var i18n = {

                  __data : {},

                  register: function(key, data){

                      switch(arguments.length) {
                          case 1:
                              extend(this.__data, key);
                              break;
                          case 2:
                              this.__data[key] = data;
                              break;
                      }
                  },
                  get: function(key){

                      var args = arguments.length ==1 ? [] : Array.prototype.slice.call(arguments, 1);

                      if (!this.__data[key]) {
                          return this.printf(key, args);
                      }

                      return this.printf(String(this.__data[key]), args);
                  },

                  key: function(key) {
                    return this.__data[key] ? this.__data[key] : null;
                  },

                  printf: function() {
                      // From: http://phpjs.org/functions
                        // +   original by: Ash Searle (http://hexmen.com/blog/)
                        // + namespaced by: Michael White (http://getsprink.com)
                        // +    tweaked by: Jack
                        // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
                        // +      input by: Paulo Freitas
                        // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
                        // +      input by: Brett Zamir (http://brett-zamir.me)
                        // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
                        // +   improved by: Dj
                        // +   improved by: Allidylls
                        // *     example 1: sprintf("%01.2f", 123.1);
                        // *     returns 1: 123.10
                        // *     example 2: sprintf("[%10s]", 'monkey');
                        // *     returns 2: '[    monkey]'
                        // *     example 3: sprintf("[%'#10s]", 'monkey');
                        // *     returns 3: '[####monkey]'
                        // *     example 4: sprintf("%d", 123456789012345);
                        // *     returns 4: '123456789012345'
                        var regex = /%%|%(\d+\$)?([-+\'#0 ]*)(\*\d+\$|\*|\d+)?(\.(\*\d+\$|\*|\d+))?([scboxXuideEfFgG])/g;
                        var a = arguments,
                          i = 0,
                          format = a[i++];

                        // pad()
                        var pad = function (str, len, chr, leftJustify) {
                          if (!chr) {
                            chr = ' ';
                          }
                          var padding = (str.length >= len) ? '' : Array(1 + len - str.length >>> 0).join(chr);
                          return leftJustify ? str + padding : padding + str;
                        };

                        // justify()
                        var justify = function (value, prefix, leftJustify, minWidth, zeroPad, customPadChar) {
                          var diff = minWidth - value.length;
                          if (diff > 0) {
                            if (leftJustify || !zeroPad) {
                              value = pad(value, minWidth, customPadChar, leftJustify);
                            } else {
                              value = value.slice(0, prefix.length) + pad('', diff, '0', true) + value.slice(prefix.length);
                            }
                          }
                          return value;
                        };

                        // formatBaseX()
                        var formatBaseX = function (value, base, prefix, leftJustify, minWidth, precision, zeroPad) {
                          // Note: casts negative numbers to positive ones
                          var number = value >>> 0;
                          prefix = prefix && number && {
                            '2': '0b',
                            '8': '0',
                            '16': '0x'
                          }[base] || '';
                          value = prefix + pad(number.toString(base), precision || 0, '0', false);
                          return justify(value, prefix, leftJustify, minWidth, zeroPad);
                        };

                        // formatString()
                        var formatString = function (value, leftJustify, minWidth, precision, zeroPad, customPadChar) {
                          if (precision != null) {
                            value = value.slice(0, precision);
                          }
                          return justify(value, '', leftJustify, minWidth, zeroPad, customPadChar);
                        };

                        // doFormat()
                        var doFormat = function (substring, valueIndex, flags, minWidth, _, precision, type) {
                          var number;
                          var prefix;
                          var method;
                          var textTransform;
                          var value;

                          if (substring === '%%') {
                            return '%';
                          }

                          // parse flags
                          var leftJustify = false,
                            positivePrefix = '',
                            zeroPad = false,
                            prefixBaseX = false,
                            customPadChar = ' ';
                          var flagsl = flags.length;
                          for (var j = 0; flags && j < flagsl; j++) {
                            switch (flags.charAt(j)) {
                            case ' ':
                              positivePrefix = ' ';
                              break;
                            case '+':
                              positivePrefix = '+';
                              break;
                            case '-':
                              leftJustify = true;
                              break;
                            case "'":
                              customPadChar = flags.charAt(j + 1);
                              break;
                            case '0':
                              zeroPad = true;
                              break;
                            case '#':
                              prefixBaseX = true;
                              break;
                            }
                          }

                          // parameters may be null, undefined, empty-string or real valued
                          // we want to ignore null, undefined and empty-string values
                          if (!minWidth) {
                            minWidth = 0;
                          } else if (minWidth === '*') {
                            minWidth = +a[i++];
                          } else if (minWidth.charAt(0) == '*') {
                            minWidth = +a[minWidth.slice(1, -1)];
                          } else {
                            minWidth = +minWidth;
                          }

                          // Note: undocumented perl feature:
                          if (minWidth < 0) {
                            minWidth = -minWidth;
                            leftJustify = true;
                          }

                          if (!isFinite(minWidth)) {
                            throw new Error('sprintf: (minimum-)width must be finite');
                          }

                          if (!precision) {
                            precision = 'fFeE'.indexOf(type) > -1 ? 6 : (type === 'd') ? 0 : undefined;
                          } else if (precision === '*') {
                            precision = +a[i++];
                          } else if (precision.charAt(0) == '*') {
                            precision = +a[precision.slice(1, -1)];
                          } else {
                            precision = +precision;
                          }

                          // grab value using valueIndex if required?
                          value = valueIndex ? a[valueIndex.slice(0, -1)] : a[i++];

                          switch (type) {
                          case 's':
                            return formatString(String(value), leftJustify, minWidth, precision, zeroPad, customPadChar);
                          case 'c':
                            return formatString(String.fromCharCode(+value), leftJustify, minWidth, precision, zeroPad);
                          case 'b':
                            return formatBaseX(value, 2, prefixBaseX, leftJustify, minWidth, precision, zeroPad);
                          case 'o':
                            return formatBaseX(value, 8, prefixBaseX, leftJustify, minWidth, precision, zeroPad);
                          case 'x':
                            return formatBaseX(value, 16, prefixBaseX, leftJustify, minWidth, precision, zeroPad);
                          case 'X':
                            return formatBaseX(value, 16, prefixBaseX, leftJustify, minWidth, precision, zeroPad).toUpperCase();
                          case 'u':
                            return formatBaseX(value, 10, prefixBaseX, leftJustify, minWidth, precision, zeroPad);
                          case 'i':
                          case 'd':
                            number = +value || 0;
                            number = Math.round(number - number % 1); // Plain Math.round doesn't just truncate
                            prefix = number < 0 ? '-' : positivePrefix;
                            value = prefix + pad(String(Math.abs(number)), precision, '0', false);
                            return justify(value, prefix, leftJustify, minWidth, zeroPad);
                          case 'e':
                          case 'E':
                          case 'f': // Should handle locales (as per setlocale)
                          case 'F':
                          case 'g':
                          case 'G':
                            number = +value;
                            prefix = number < 0 ? '-' : positivePrefix;
                            method = ['toExponential', 'toFixed', 'toPrecision']['efg'.indexOf(type.toLowerCase())];
                            textTransform = ['toString', 'toUpperCase']['eEfFgG'.indexOf(type) % 2];
                            value = prefix + Math.abs(number)[method](precision);
                            return justify(value, prefix, leftJustify, minWidth, zeroPad)[textTransform]();
                          default:
                            return substring;
                          }
                        };

                        return format.replace(regex, doFormat);
                  }

          };

          // AMD support
          if (typeof define === 'function' && define.amd) {
              define(function () { return i18n; });

          // CommonJS and Node.js module support.
          } else if (typeof exports !== 'undefined') {
              // Support Node.js specific `module.exports` (which can be a function)
              if (typeof module != 'undefined' && module.exports) {
               exports = module.exports = i18n;
              }
              // But always support CommonJS module 1.1.1 spec (`exports` cannot be a function)
              exports.i18n = i18n;
          } else {
              // browser client
              window.i18n = i18n;
          }

  })();

  /*! @license DOMPurify 2.3.3 | (c) Cure53 and other contributors | Released under the Apache license 2.0 and Mozilla Public License 2.0 | github.com/cure53/DOMPurify/blob/2.3.3/LICENSE */
  !function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e=e||self).DOMPurify=t();}(undefined,(function(){var e=Object.hasOwnProperty,t=Object.setPrototypeOf,n=Object.isFrozen,r=Object.getPrototypeOf,o=Object.getOwnPropertyDescriptor,i=Object.freeze,a=Object.seal,l=Object.create,c="undefined"!=typeof Reflect&&Reflect,s=c.apply,u=c.construct;s||(s=function(e,t,n){return e.apply(t,n)}),i||(i=function(e){return e}),a||(a=function(e){return e}),u||(u=function(e,t){return new(Function.prototype.bind.apply(e,[null].concat(function(e){if(Array.isArray(e)){for(var t=0,n=Array(e.length);t<e.length;t++)n[t]=e[t];return n}return Array.from(e)}(t))))});var m,f=x(Array.prototype.forEach),d=x(Array.prototype.pop),p=x(Array.prototype.push),h=x(String.prototype.toLowerCase),g=x(String.prototype.match),y=x(String.prototype.replace),v=x(String.prototype.indexOf),b=x(String.prototype.trim),T=x(RegExp.prototype.test),A=(m=TypeError,function(){for(var e=arguments.length,t=Array(e),n=0;n<e;n++)t[n]=arguments[n];return u(m,t)});function x(e){return function(t){for(var n=arguments.length,r=Array(n>1?n-1:0),o=1;o<n;o++)r[o-1]=arguments[o];return s(e,t,r)}}function S(e,r){t&&t(e,null);for(var o=r.length;o--;){var i=r[o];if("string"==typeof i){var a=h(i);a!==i&&(n(r)||(r[o]=a),i=a);}e[i]=!0;}return e}function w(t){var n=l(null),r=void 0;for(r in t)s(e,t,[r])&&(n[r]=t[r]);return n}function E(e,t){for(;null!==e;){var n=o(e,t);if(n){if(n.get)return x(n.get);if("function"==typeof n.value)return x(n.value)}e=r(e);}return function(e){return console.warn("fallback value for",e),null}}var R=i(["a","abbr","acronym","address","area","article","aside","audio","b","bdi","bdo","big","blink","blockquote","body","br","button","canvas","caption","center","cite","code","col","colgroup","content","data","datalist","dd","decorator","del","details","dfn","dialog","dir","div","dl","dt","element","em","fieldset","figcaption","figure","font","footer","form","h1","h2","h3","h4","h5","h6","head","header","hgroup","hr","html","i","img","input","ins","kbd","label","legend","li","main","map","mark","marquee","menu","menuitem","meter","nav","nobr","ol","optgroup","option","output","p","picture","pre","progress","q","rp","rt","ruby","s","samp","section","select","shadow","small","source","spacer","span","strike","strong","style","sub","summary","sup","table","tbody","td","template","textarea","tfoot","th","thead","time","tr","track","tt","u","ul","var","video","wbr"]),_=i(["svg","a","altglyph","altglyphdef","altglyphitem","animatecolor","animatemotion","animatetransform","circle","clippath","defs","desc","ellipse","filter","font","g","glyph","glyphref","hkern","image","line","lineargradient","marker","mask","metadata","mpath","path","pattern","polygon","polyline","radialgradient","rect","stop","style","switch","symbol","text","textpath","title","tref","tspan","view","vkern"]),N=i(["feBlend","feColorMatrix","feComponentTransfer","feComposite","feConvolveMatrix","feDiffuseLighting","feDisplacementMap","feDistantLight","feFlood","feFuncA","feFuncB","feFuncG","feFuncR","feGaussianBlur","feMerge","feMergeNode","feMorphology","feOffset","fePointLight","feSpecularLighting","feSpotLight","feTile","feTurbulence"]),D=i(["animate","color-profile","cursor","discard","fedropshadow","feimage","font-face","font-face-format","font-face-name","font-face-src","font-face-uri","foreignobject","hatch","hatchpath","mesh","meshgradient","meshpatch","meshrow","missing-glyph","script","set","solidcolor","unknown","use"]),k=i(["math","menclose","merror","mfenced","mfrac","mglyph","mi","mlabeledtr","mmultiscripts","mn","mo","mover","mpadded","mphantom","mroot","mrow","ms","mspace","msqrt","mstyle","msub","msup","msubsup","mtable","mtd","mtext","mtr","munder","munderover"]),O=i(["maction","maligngroup","malignmark","mlongdiv","mscarries","mscarry","msgroup","mstack","msline","msrow","semantics","annotation","annotation-xml","mprescripts","none"]),M=i(["#text"]),L=i(["accept","action","align","alt","autocapitalize","autocomplete","autopictureinpicture","autoplay","background","bgcolor","border","capture","cellpadding","cellspacing","checked","cite","class","clear","color","cols","colspan","controls","controlslist","coords","crossorigin","datetime","decoding","default","dir","disabled","disablepictureinpicture","disableremoteplayback","download","draggable","enctype","enterkeyhint","face","for","headers","height","hidden","high","href","hreflang","id","inputmode","integrity","ismap","kind","label","lang","list","loading","loop","low","max","maxlength","media","method","min","minlength","multiple","muted","name","noshade","novalidate","nowrap","open","optimum","pattern","placeholder","playsinline","poster","preload","pubdate","radiogroup","readonly","rel","required","rev","reversed","role","rows","rowspan","spellcheck","scope","selected","shape","size","sizes","span","srclang","start","src","srcset","step","style","summary","tabindex","title","translate","type","usemap","valign","value","width","xmlns","slot"]),F=i(["accent-height","accumulate","additive","alignment-baseline","ascent","attributename","attributetype","azimuth","basefrequency","baseline-shift","begin","bias","by","class","clip","clippathunits","clip-path","clip-rule","color","color-interpolation","color-interpolation-filters","color-profile","color-rendering","cx","cy","d","dx","dy","diffuseconstant","direction","display","divisor","dur","edgemode","elevation","end","fill","fill-opacity","fill-rule","filter","filterunits","flood-color","flood-opacity","font-family","font-size","font-size-adjust","font-stretch","font-style","font-variant","font-weight","fx","fy","g1","g2","glyph-name","glyphref","gradientunits","gradienttransform","height","href","id","image-rendering","in","in2","k","k1","k2","k3","k4","kerning","keypoints","keysplines","keytimes","lang","lengthadjust","letter-spacing","kernelmatrix","kernelunitlength","lighting-color","local","marker-end","marker-mid","marker-start","markerheight","markerunits","markerwidth","maskcontentunits","maskunits","max","mask","media","method","mode","min","name","numoctaves","offset","operator","opacity","order","orient","orientation","origin","overflow","paint-order","path","pathlength","patterncontentunits","patterntransform","patternunits","points","preservealpha","preserveaspectratio","primitiveunits","r","rx","ry","radius","refx","refy","repeatcount","repeatdur","restart","result","rotate","scale","seed","shape-rendering","specularconstant","specularexponent","spreadmethod","startoffset","stddeviation","stitchtiles","stop-color","stop-opacity","stroke-dasharray","stroke-dashoffset","stroke-linecap","stroke-linejoin","stroke-miterlimit","stroke-opacity","stroke","stroke-width","style","surfacescale","systemlanguage","tabindex","targetx","targety","transform","text-anchor","text-decoration","text-rendering","textlength","type","u1","u2","unicode","values","viewbox","visibility","version","vert-adv-y","vert-origin-x","vert-origin-y","width","word-spacing","wrap","writing-mode","xchannelselector","ychannelselector","x","x1","x2","xmlns","y","y1","y2","z","zoomandpan"]),I=i(["accent","accentunder","align","bevelled","close","columnsalign","columnlines","columnspan","denomalign","depth","dir","display","displaystyle","encoding","fence","frame","height","href","id","largeop","length","linethickness","lspace","lquote","mathbackground","mathcolor","mathsize","mathvariant","maxsize","minsize","movablelimits","notation","numalign","open","rowalign","rowlines","rowspacing","rowspan","rspace","rquote","scriptlevel","scriptminsize","scriptsizemultiplier","selection","separator","separators","stretchy","subscriptshift","supscriptshift","symmetric","voffset","width","xmlns"]),C=i(["xlink:href","xml:id","xlink:title","xml:space","xmlns:xlink"]),z=a(/\{\{[\s\S]*|[\s\S]*\}\}/gm),H=a(/<%[\s\S]*|[\s\S]*%>/gm),U=a(/^data-[\-\w.\u00B7-\uFFFF]/),P=a(/^aria-[\-\w]+$/),j=a(/^(?:(?:(?:f|ht)tps?|mailto|tel|callto|cid|xmpp):|[^a-z]|[a-z+.\-]+(?:[^a-z+.\-:]|$))/i),B=a(/^(?:\w+script|data):/i),W=a(/[\u0000-\u0020\u00A0\u1680\u180E\u2000-\u2029\u205F\u3000]/g),G="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e};function q(e){if(Array.isArray(e)){for(var t=0,n=Array(e.length);t<e.length;t++)n[t]=e[t];return n}return Array.from(e)}var Y=function(){return "undefined"==typeof window?null:window},K=function(e,t){if("object"!==(void 0===e?"undefined":G(e))||"function"!=typeof e.createPolicy)return null;var n=null,r="data-tt-policy-suffix";t.currentScript&&t.currentScript.hasAttribute(r)&&(n=t.currentScript.getAttribute(r));var o="dompurify"+(n?"#"+n:"");try{return e.createPolicy(o,{createHTML:function(e){return e}})}catch(e){return console.warn("TrustedTypes policy "+o+" could not be created."),null}};return function e(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:Y(),n=function(t){return e(t)};if(n.version="2.3.3",n.removed=[],!t||!t.document||9!==t.document.nodeType)return n.isSupported=!1,n;var r=t.document,o=t.document,a=t.DocumentFragment,l=t.HTMLTemplateElement,c=t.Node,s=t.Element,u=t.NodeFilter,m=t.NamedNodeMap,x=void 0===m?t.NamedNodeMap||t.MozNamedAttrMap:m,V=t.Text,X=t.Comment,$=t.DOMParser,Z=t.trustedTypes,J=s.prototype,Q=E(J,"cloneNode"),ee=E(J,"nextSibling"),te=E(J,"childNodes"),ne=E(J,"parentNode");if("function"==typeof l){var re=o.createElement("template");re.content&&re.content.ownerDocument&&(o=re.content.ownerDocument);}var oe=K(Z,r),ie=oe&&ze?oe.createHTML(""):"",ae=o,le=ae.implementation,ce=ae.createNodeIterator,se=ae.createDocumentFragment,ue=ae.getElementsByTagName,me=r.importNode,fe={};try{fe=w(o).documentMode?o.documentMode:{};}catch(e){}var de={};n.isSupported="function"==typeof ne&&le&&void 0!==le.createHTMLDocument&&9!==fe;var pe=z,he=H,ge=U,ye=P,ve=B,be=W,Te=j,Ae=null,xe=S({},[].concat(q(R),q(_),q(N),q(k),q(M))),Se=null,we=S({},[].concat(q(L),q(F),q(I),q(C))),Ee=null,Re=null,_e=!0,Ne=!0,De=!1,ke=!1,Oe=!1,Me=!1,Le=!1,Fe=!1,Ie=!1,Ce=!0,ze=!1,He=!0,Ue=!0,Pe=!1,je={},Be=null,We=S({},["annotation-xml","audio","colgroup","desc","foreignobject","head","iframe","math","mi","mn","mo","ms","mtext","noembed","noframes","noscript","plaintext","script","style","svg","template","thead","title","video","xmp"]),Ge=null,qe=S({},["audio","video","img","source","image","track"]),Ye=null,Ke=S({},["alt","class","for","id","label","name","pattern","placeholder","role","summary","title","value","style","xmlns"]),Ve="http://www.w3.org/1998/Math/MathML",Xe="http://www.w3.org/2000/svg",$e="http://www.w3.org/1999/xhtml",Ze=$e,Je=!1,Qe=void 0,et=["application/xhtml+xml","text/html"],tt="text/html",nt=void 0,rt=null,ot=o.createElement("form"),it=function(e){rt&&rt===e||(e&&"object"===(void 0===e?"undefined":G(e))||(e={}),e=w(e),Ae="ALLOWED_TAGS"in e?S({},e.ALLOWED_TAGS):xe,Se="ALLOWED_ATTR"in e?S({},e.ALLOWED_ATTR):we,Ye="ADD_URI_SAFE_ATTR"in e?S(w(Ke),e.ADD_URI_SAFE_ATTR):Ke,Ge="ADD_DATA_URI_TAGS"in e?S(w(qe),e.ADD_DATA_URI_TAGS):qe,Be="FORBID_CONTENTS"in e?S({},e.FORBID_CONTENTS):We,Ee="FORBID_TAGS"in e?S({},e.FORBID_TAGS):{},Re="FORBID_ATTR"in e?S({},e.FORBID_ATTR):{},je="USE_PROFILES"in e&&e.USE_PROFILES,_e=!1!==e.ALLOW_ARIA_ATTR,Ne=!1!==e.ALLOW_DATA_ATTR,De=e.ALLOW_UNKNOWN_PROTOCOLS||!1,ke=e.SAFE_FOR_TEMPLATES||!1,Oe=e.WHOLE_DOCUMENT||!1,Fe=e.RETURN_DOM||!1,Ie=e.RETURN_DOM_FRAGMENT||!1,Ce=!1!==e.RETURN_DOM_IMPORT,ze=e.RETURN_TRUSTED_TYPE||!1,Le=e.FORCE_BODY||!1,He=!1!==e.SANITIZE_DOM,Ue=!1!==e.KEEP_CONTENT,Pe=e.IN_PLACE||!1,Te=e.ALLOWED_URI_REGEXP||Te,Ze=e.NAMESPACE||$e,Qe=Qe=-1===et.indexOf(e.PARSER_MEDIA_TYPE)?tt:e.PARSER_MEDIA_TYPE,nt="application/xhtml+xml"===Qe?function(e){return e}:h,ke&&(Ne=!1),Ie&&(Fe=!0),je&&(Ae=S({},[].concat(q(M))),Se=[],!0===je.html&&(S(Ae,R),S(Se,L)),!0===je.svg&&(S(Ae,_),S(Se,F),S(Se,C)),!0===je.svgFilters&&(S(Ae,N),S(Se,F),S(Se,C)),!0===je.mathMl&&(S(Ae,k),S(Se,I),S(Se,C))),e.ADD_TAGS&&(Ae===xe&&(Ae=w(Ae)),S(Ae,e.ADD_TAGS)),e.ADD_ATTR&&(Se===we&&(Se=w(Se)),S(Se,e.ADD_ATTR)),e.ADD_URI_SAFE_ATTR&&S(Ye,e.ADD_URI_SAFE_ATTR),e.FORBID_CONTENTS&&(Be===We&&(Be=w(Be)),S(Be,e.FORBID_CONTENTS)),Ue&&(Ae["#text"]=!0),Oe&&S(Ae,["html","head","body"]),Ae.table&&(S(Ae,["tbody"]),delete Ee.tbody),i&&i(e),rt=e);},at=S({},["mi","mo","mn","ms","mtext"]),lt=S({},["foreignobject","desc","title","annotation-xml"]),ct=S({},_);S(ct,N),S(ct,D);var st=S({},k);S(st,O);var ut=function(e){var t=ne(e);t&&t.tagName||(t={namespaceURI:$e,tagName:"template"});var n=h(e.tagName),r=h(t.tagName);if(e.namespaceURI===Xe)return t.namespaceURI===$e?"svg"===n:t.namespaceURI===Ve?"svg"===n&&("annotation-xml"===r||at[r]):Boolean(ct[n]);if(e.namespaceURI===Ve)return t.namespaceURI===$e?"math"===n:t.namespaceURI===Xe?"math"===n&&lt[r]:Boolean(st[n]);if(e.namespaceURI===$e){if(t.namespaceURI===Xe&&!lt[r])return !1;if(t.namespaceURI===Ve&&!at[r])return !1;var o=S({},["title","style","font","a","script"]);return !st[n]&&(o[n]||!ct[n])}return !1},mt=function(e){p(n.removed,{element:e});try{e.parentNode.removeChild(e);}catch(t){try{e.outerHTML=ie;}catch(t){e.remove();}}},ft=function(e,t){try{p(n.removed,{attribute:t.getAttributeNode(e),from:t});}catch(e){p(n.removed,{attribute:null,from:t});}if(t.removeAttribute(e),"is"===e&&!Se[e])if(Fe||Ie)try{mt(t);}catch(e){}else try{t.setAttribute(e,"");}catch(e){}},dt=function(e){var t=void 0,n=void 0;if(Le)e="<remove></remove>"+e;else {var r=g(e,/^[\r\n\t ]+/);n=r&&r[0];}"application/xhtml+xml"===Qe&&(e='<html xmlns="http://www.w3.org/1999/xhtml"><head></head><body>'+e+"</body></html>");var i=oe?oe.createHTML(e):e;if(Ze===$e)try{t=(new $).parseFromString(i,Qe);}catch(e){}if(!t||!t.documentElement){t=le.createDocument(Ze,"template",null);try{t.documentElement.innerHTML=Je?"":i;}catch(e){}}var a=t.body||t.documentElement;return e&&n&&a.insertBefore(o.createTextNode(n),a.childNodes[0]||null),Ze===$e?ue.call(t,Oe?"html":"body")[0]:Oe?t.documentElement:a},pt=function(e){return ce.call(e.ownerDocument||e,e,u.SHOW_ELEMENT|u.SHOW_COMMENT|u.SHOW_TEXT,null,!1)},ht=function(e){return !(e instanceof V||e instanceof X)&&!("string"==typeof e.nodeName&&"string"==typeof e.textContent&&"function"==typeof e.removeChild&&e.attributes instanceof x&&"function"==typeof e.removeAttribute&&"function"==typeof e.setAttribute&&"string"==typeof e.namespaceURI&&"function"==typeof e.insertBefore)},gt=function(e){return "object"===(void 0===c?"undefined":G(c))?e instanceof c:e&&"object"===(void 0===e?"undefined":G(e))&&"number"==typeof e.nodeType&&"string"==typeof e.nodeName},yt=function(e,t,r){de[e]&&f(de[e],(function(e){e.call(n,t,r,rt);}));},vt=function(e){var t=void 0;if(yt("beforeSanitizeElements",e,null),ht(e))return mt(e),!0;if(g(e.nodeName,/[\u0080-\uFFFF]/))return mt(e),!0;var r=nt(e.nodeName);if(yt("uponSanitizeElement",e,{tagName:r,allowedTags:Ae}),!gt(e.firstElementChild)&&(!gt(e.content)||!gt(e.content.firstElementChild))&&T(/<[/\w]/g,e.innerHTML)&&T(/<[/\w]/g,e.textContent))return mt(e),!0;if("select"===r&&T(/<template/i,e.innerHTML))return mt(e),!0;if(!Ae[r]||Ee[r]){if(Ue&&!Be[r]){var o=ne(e)||e.parentNode,i=te(e)||e.childNodes;if(i&&o)for(var a=i.length-1;a>=0;--a)o.insertBefore(Q(i[a],!0),ee(e));}return mt(e),!0}return e instanceof s&&!ut(e)?(mt(e),!0):"noscript"!==r&&"noembed"!==r||!T(/<\/no(script|embed)/i,e.innerHTML)?(ke&&3===e.nodeType&&(t=e.textContent,t=y(t,pe," "),t=y(t,he," "),e.textContent!==t&&(p(n.removed,{element:e.cloneNode()}),e.textContent=t)),yt("afterSanitizeElements",e,null),!1):(mt(e),!0)},bt=function(e,t,n){if(He&&("id"===t||"name"===t)&&(n in o||n in ot))return !1;if(Ne&&!Re[t]&&T(ge,t));else if(_e&&T(ye,t));else {if(!Se[t]||Re[t])return !1;if(Ye[t]);else if(T(Te,y(n,be,"")));else if("src"!==t&&"xlink:href"!==t&&"href"!==t||"script"===e||0!==v(n,"data:")||!Ge[e]){if(De&&!T(ve,y(n,be,"")));else if(n)return !1}else;}return !0},Tt=function(e){var t=void 0,r=void 0,o=void 0,i=void 0;yt("beforeSanitizeAttributes",e,null);var a=e.attributes;if(a){var l={attrName:"",attrValue:"",keepAttr:!0,allowedAttributes:Se};for(i=a.length;i--;){var c=t=a[i],s=c.name,u=c.namespaceURI;if(r=b(t.value),o=nt(s),l.attrName=o,l.attrValue=r,l.keepAttr=!0,l.forceKeepAttr=void 0,yt("uponSanitizeAttribute",e,l),r=l.attrValue,!l.forceKeepAttr&&(ft(s,e),l.keepAttr))if(T(/\/>/i,r))ft(s,e);else {ke&&(r=y(r,pe," "),r=y(r,he," "));var m=nt(e.nodeName);if(bt(m,o,r))try{u?e.setAttributeNS(u,s,r):e.setAttribute(s,r),d(n.removed);}catch(e){}}}yt("afterSanitizeAttributes",e,null);}},At=function e(t){var n=void 0,r=pt(t);for(yt("beforeSanitizeShadowDOM",t,null);n=r.nextNode();)yt("uponSanitizeShadowNode",n,null),vt(n)||(n.content instanceof a&&e(n.content),Tt(n));yt("afterSanitizeShadowDOM",t,null);};return n.sanitize=function(e,o){var i=void 0,l=void 0,s=void 0,u=void 0,m=void 0;if((Je=!e)&&(e="\x3c!--\x3e"),"string"!=typeof e&&!gt(e)){if("function"!=typeof e.toString)throw A("toString is not a function");if("string"!=typeof(e=e.toString()))throw A("dirty is not a string, aborting")}if(!n.isSupported){if("object"===G(t.toStaticHTML)||"function"==typeof t.toStaticHTML){if("string"==typeof e)return t.toStaticHTML(e);if(gt(e))return t.toStaticHTML(e.outerHTML)}return e}if(Me||it(o),n.removed=[],"string"==typeof e&&(Pe=!1),Pe);else if(e instanceof c)1===(l=(i=dt("\x3c!----\x3e")).ownerDocument.importNode(e,!0)).nodeType&&"BODY"===l.nodeName||"HTML"===l.nodeName?i=l:i.appendChild(l);else {if(!Fe&&!ke&&!Oe&&-1===e.indexOf("<"))return oe&&ze?oe.createHTML(e):e;if(!(i=dt(e)))return Fe?null:ie}i&&Le&&mt(i.firstChild);for(var f=pt(Pe?e:i);s=f.nextNode();)3===s.nodeType&&s===u||vt(s)||(s.content instanceof a&&At(s.content),Tt(s),u=s);if(u=null,Pe)return e;if(Fe){if(Ie)for(m=se.call(i.ownerDocument);i.firstChild;)m.appendChild(i.firstChild);else m=i;return Ce&&(m=me.call(r,m,!0)),m}var d=Oe?i.outerHTML:i.innerHTML;return ke&&(d=y(d,pe," "),d=y(d,he," ")),oe&&ze?oe.createHTML(d):d},n.setConfig=function(e){it(e),Me=!0;},n.clearConfig=function(){rt=null,Me=!1;},n.isValidAttribute=function(e,t,n){rt||it({});var r=nt(e),o=nt(t);return bt(r,o,n)},n.addHook=function(e,t){"function"==typeof t&&(de[e]=de[e]||[],p(de[e],t));},n.removeHook=function(e){de[e]&&d(de[e]);},n.removeHooks=function(e){de[e]&&(de[e]=[]);},n.removeAllHooks=function(){de={};},n}()}));

  /*global define:false */
  /**
   * Copyright 2012-2017 Craig Campbell
   *
   * Licensed under the Apache License, Version 2.0 (the "License");
   * you may not use this file except in compliance with the License.
   * You may obtain a copy of the License at
   *
   * http://www.apache.org/licenses/LICENSE-2.0
   *
   * Unless required by applicable law or agreed to in writing, software
   * distributed under the License is distributed on an "AS IS" BASIS,
   * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   * See the License for the specific language governing permissions and
   * limitations under the License.
   *
   * Mousetrap is a simple keyboard shortcut library for Javascript with
   * no external dependencies
   *
   * @version 1.6.5
   * @url craig.is/killing/mice
   */
   (function(window, document, undefined$1) {

      // Check if mousetrap is used inside browser, if not, return
      if (!window) {
          return;
      }

      /**
       * mapping of special keycodes to their corresponding keys
       *
       * everything in this dictionary cannot use keypress events
       * so it has to be here to map to the correct keycodes for
       * keyup/keydown events
       *
       * @type {Object}
       */
      var _MAP = {
          8: 'backspace',
          9: 'tab',
          13: 'enter',
          16: 'shift',
          17: 'ctrl',
          18: 'alt',
          20: 'capslock',
          27: 'esc',
          32: 'space',
          33: 'pageup',
          34: 'pagedown',
          35: 'end',
          36: 'home',
          37: 'left',
          38: 'up',
          39: 'right',
          40: 'down',
          45: 'ins',
          46: 'del',
          91: 'meta',
          93: 'meta',
          224: 'meta'
      };

      /**
       * mapping for special characters so they can support
       *
       * this dictionary is only used incase you want to bind a
       * keyup or keydown event to one of these keys
       *
       * @type {Object}
       */
      var _KEYCODE_MAP = {
          106: '*',
          107: '+',
          109: '-',
          110: '.',
          111 : '/',
          186: ';',
          187: '=',
          188: ',',
          189: '-',
          190: '.',
          191: '/',
          192: '`',
          219: '[',
          220: '\\',
          221: ']',
          222: '\''
      };

      /**
       * this is a mapping of keys that require shift on a US keypad
       * back to the non shift equivelents
       *
       * this is so you can use keyup events with these keys
       *
       * note that this will only work reliably on US keyboards
       *
       * @type {Object}
       */
      var _SHIFT_MAP = {
          '~': '`',
          '!': '1',
          '@': '2',
          '#': '3',
          '$': '4',
          '%': '5',
          '^': '6',
          '&': '7',
          '*': '8',
          '(': '9',
          ')': '0',
          '_': '-',
          '+': '=',
          ':': ';',
          '\"': '\'',
          '<': ',',
          '>': '.',
          '?': '/',
          '|': '\\'
      };

      /**
       * this is a list of special strings you can use to map
       * to modifier keys when you specify your keyboard shortcuts
       *
       * @type {Object}
       */
      var _SPECIAL_ALIASES = {
          'option': 'alt',
          'command': 'meta',
          'return': 'enter',
          'escape': 'esc',
          'plus': '+',
          'mod': /Mac|iPod|iPhone|iPad/.test(navigator.platform) ? 'meta' : 'ctrl'
      };

      /**
       * variable to store the flipped version of _MAP from above
       * needed to check if we should use keypress or not when no action
       * is specified
       *
       * @type {Object|undefined}
       */
      var _REVERSE_MAP;

      /**
       * loop through the f keys, f1 to f19 and add them to the map
       * programatically
       */
      for (var i = 1; i < 20; ++i) {
          _MAP[111 + i] = 'f' + i;
      }

      /**
       * loop through to map numbers on the numeric keypad
       */
      for (i = 0; i <= 9; ++i) {

          // This needs to use a string cause otherwise since 0 is falsey
          // mousetrap will never fire for numpad 0 pressed as part of a keydown
          // event.
          //
          // @see https://github.com/ccampbell/mousetrap/pull/258
          _MAP[i + 96] = i.toString();
      }

      /**
       * cross browser add event method
       *
       * @param {Element|HTMLDocument} object
       * @param {string} type
       * @param {Function} callback
       * @returns void
       */
      function _addEvent(object, type, callback) {
          if (object.addEventListener) {
              object.addEventListener(type, callback, false);
              return;
          }

          object.attachEvent('on' + type, callback);
      }

      /**
       * takes the event and returns the key character
       *
       * @param {Event} e
       * @return {string}
       */
      function _characterFromEvent(e) {

          // for keypress events we should return the character as is
          if (e.type == 'keypress') {
              var character = String.fromCharCode(e.which);

              // if the shift key is not pressed then it is safe to assume
              // that we want the character to be lowercase.  this means if
              // you accidentally have caps lock on then your key bindings
              // will continue to work
              //
              // the only side effect that might not be desired is if you
              // bind something like 'A' cause you want to trigger an
              // event when capital A is pressed caps lock will no longer
              // trigger the event.  shift+a will though.
              if (!e.shiftKey) {
                  character = character.toLowerCase();
              }

              return character;
          }

          // for non keypress events the special maps are needed
          if (_MAP[e.which]) {
              return _MAP[e.which];
          }

          if (_KEYCODE_MAP[e.which]) {
              return _KEYCODE_MAP[e.which];
          }

          // if it is not in the special map

          // with keydown and keyup events the character seems to always
          // come in as an uppercase character whether you are pressing shift
          // or not.  we should make sure it is always lowercase for comparisons
          return String.fromCharCode(e.which).toLowerCase();
      }

      /**
       * checks if two arrays are equal
       *
       * @param {Array} modifiers1
       * @param {Array} modifiers2
       * @returns {boolean}
       */
      function _modifiersMatch(modifiers1, modifiers2) {
          return modifiers1.sort().join(',') === modifiers2.sort().join(',');
      }

      /**
       * takes a key event and figures out what the modifiers are
       *
       * @param {Event} e
       * @returns {Array}
       */
      function _eventModifiers(e) {
          var modifiers = [];

          if (e.shiftKey) {
              modifiers.push('shift');
          }

          if (e.altKey) {
              modifiers.push('alt');
          }

          if (e.ctrlKey) {
              modifiers.push('ctrl');
          }

          if (e.metaKey) {
              modifiers.push('meta');
          }

          return modifiers;
      }

      /**
       * prevents default for this event
       *
       * @param {Event} e
       * @returns void
       */
      function _preventDefault(e) {
          if (e.preventDefault) {
              e.preventDefault();
              return;
          }

          e.returnValue = false;
      }

      /**
       * stops propogation for this event
       *
       * @param {Event} e
       * @returns void
       */
      function _stopPropagation(e) {
          if (e.stopPropagation) {
              e.stopPropagation();
              return;
          }

          e.cancelBubble = true;
      }

      /**
       * determines if the keycode specified is a modifier key or not
       *
       * @param {string} key
       * @returns {boolean}
       */
      function _isModifier(key) {
          return key == 'shift' || key == 'ctrl' || key == 'alt' || key == 'meta';
      }

      /**
       * reverses the map lookup so that we can look for specific keys
       * to see what can and can't use keypress
       *
       * @return {Object}
       */
      function _getReverseMap() {
          if (!_REVERSE_MAP) {
              _REVERSE_MAP = {};
              for (var key in _MAP) {

                  // pull out the numeric keypad from here cause keypress should
                  // be able to detect the keys from the character
                  if (key > 95 && key < 112) {
                      continue;
                  }

                  if (_MAP.hasOwnProperty(key)) {
                      _REVERSE_MAP[_MAP[key]] = key;
                  }
              }
          }
          return _REVERSE_MAP;
      }

      /**
       * picks the best action based on the key combination
       *
       * @param {string} key - character for key
       * @param {Array} modifiers
       * @param {string=} action passed in
       */
      function _pickBestAction(key, modifiers, action) {

          // if no action was picked in we should try to pick the one
          // that we think would work best for this key
          if (!action) {
              action = _getReverseMap()[key] ? 'keydown' : 'keypress';
          }

          // modifier keys don't work as expected with keypress,
          // switch to keydown
          if (action == 'keypress' && modifiers.length) {
              action = 'keydown';
          }

          return action;
      }

      /**
       * Converts from a string key combination to an array
       *
       * @param  {string} combination like "command+shift+l"
       * @return {Array}
       */
      function _keysFromString(combination) {
          if (combination === '+') {
              return ['+'];
          }

          combination = combination.replace(/\+{2}/g, '+plus');
          return combination.split('+');
      }

      /**
       * Gets info for a specific key combination
       *
       * @param  {string} combination key combination ("command+s" or "a" or "*")
       * @param  {string=} action
       * @returns {Object}
       */
      function _getKeyInfo(combination, action) {
          var keys;
          var key;
          var i;
          var modifiers = [];

          // take the keys from this pattern and figure out what the actual
          // pattern is all about
          keys = _keysFromString(combination);

          for (i = 0; i < keys.length; ++i) {
              key = keys[i];

              // normalize key names
              if (_SPECIAL_ALIASES[key]) {
                  key = _SPECIAL_ALIASES[key];
              }

              // if this is not a keypress event then we should
              // be smart about using shift keys
              // this will only work for US keyboards however
              if (action && action != 'keypress' && _SHIFT_MAP[key]) {
                  key = _SHIFT_MAP[key];
                  modifiers.push('shift');
              }

              // if this key is a modifier then add it to the list of modifiers
              if (_isModifier(key)) {
                  modifiers.push(key);
              }
          }

          // depending on what the key combination is
          // we will try to pick the best event for it
          action = _pickBestAction(key, modifiers, action);

          return {
              key: key,
              modifiers: modifiers,
              action: action
          };
      }

      function _belongsTo(element, ancestor) {
          if (element === null || element === document) {
              return false;
          }

          if (element === ancestor) {
              return true;
          }

          return _belongsTo(element.parentNode, ancestor);
      }

      function Mousetrap(targetElement) {
          var self = this;

          targetElement = targetElement || document;

          if (!(self instanceof Mousetrap)) {
              return new Mousetrap(targetElement);
          }

          /**
           * element to attach key events to
           *
           * @type {Element}
           */
          self.target = targetElement;

          /**
           * a list of all the callbacks setup via Mousetrap.bind()
           *
           * @type {Object}
           */
          self._callbacks = {};

          /**
           * direct map of string combinations to callbacks used for trigger()
           *
           * @type {Object}
           */
          self._directMap = {};

          /**
           * keeps track of what level each sequence is at since multiple
           * sequences can start out with the same sequence
           *
           * @type {Object}
           */
          var _sequenceLevels = {};

          /**
           * variable to store the setTimeout call
           *
           * @type {null|number}
           */
          var _resetTimer;

          /**
           * temporary state where we will ignore the next keyup
           *
           * @type {boolean|string}
           */
          var _ignoreNextKeyup = false;

          /**
           * temporary state where we will ignore the next keypress
           *
           * @type {boolean}
           */
          var _ignoreNextKeypress = false;

          /**
           * are we currently inside of a sequence?
           * type of action ("keyup" or "keydown" or "keypress") or false
           *
           * @type {boolean|string}
           */
          var _nextExpectedAction = false;

          /**
           * resets all sequence counters except for the ones passed in
           *
           * @param {Object} doNotReset
           * @returns void
           */
          function _resetSequences(doNotReset) {
              doNotReset = doNotReset || {};

              var activeSequences = false,
                  key;

              for (key in _sequenceLevels) {
                  if (doNotReset[key]) {
                      activeSequences = true;
                      continue;
                  }
                  _sequenceLevels[key] = 0;
              }

              if (!activeSequences) {
                  _nextExpectedAction = false;
              }
          }

          /**
           * finds all callbacks that match based on the keycode, modifiers,
           * and action
           *
           * @param {string} character
           * @param {Array} modifiers
           * @param {Event|Object} e
           * @param {string=} sequenceName - name of the sequence we are looking for
           * @param {string=} combination
           * @param {number=} level
           * @returns {Array}
           */
          function _getMatches(character, modifiers, e, sequenceName, combination, level) {
              var i;
              var callback;
              var matches = [];
              var action = e.type;

              // if there are no events related to this keycode
              if (!self._callbacks[character]) {
                  return [];
              }

              // if a modifier key is coming up on its own we should allow it
              if (action == 'keyup' && _isModifier(character)) {
                  modifiers = [character];
              }

              // loop through all callbacks for the key that was pressed
              // and see if any of them match
              for (i = 0; i < self._callbacks[character].length; ++i) {
                  callback = self._callbacks[character][i];

                  // if a sequence name is not specified, but this is a sequence at
                  // the wrong level then move onto the next match
                  if (!sequenceName && callback.seq && _sequenceLevels[callback.seq] != callback.level) {
                      continue;
                  }

                  // if the action we are looking for doesn't match the action we got
                  // then we should keep going
                  if (action != callback.action) {
                      continue;
                  }

                  // if this is a keypress event and the meta key and control key
                  // are not pressed that means that we need to only look at the
                  // character, otherwise check the modifiers as well
                  //
                  // chrome will not fire a keypress if meta or control is down
                  // safari will fire a keypress if meta or meta+shift is down
                  // firefox will fire a keypress if meta or control is down
                  if ((action == 'keypress' && !e.metaKey && !e.ctrlKey) || _modifiersMatch(modifiers, callback.modifiers)) {

                      // when you bind a combination or sequence a second time it
                      // should overwrite the first one.  if a sequenceName or
                      // combination is specified in this call it does just that
                      //
                      // @todo make deleting its own method?
                      var deleteCombo = !sequenceName && callback.combo == combination;
                      var deleteSequence = sequenceName && callback.seq == sequenceName && callback.level == level;
                      if (deleteCombo || deleteSequence) {
                          self._callbacks[character].splice(i, 1);
                      }

                      matches.push(callback);
                  }
              }

              return matches;
          }

          /**
           * actually calls the callback function
           *
           * if your callback function returns false this will use the jquery
           * convention - prevent default and stop propogation on the event
           *
           * @param {Function} callback
           * @param {Event} e
           * @returns void
           */
          function _fireCallback(callback, e, combo, sequence) {

              // if this event should not happen stop here
              if (self.stopCallback(e, e.target || e.srcElement, combo, sequence)) {
                  return;
              }

              if (callback(e, combo) === false) {
                  _preventDefault(e);
                  _stopPropagation(e);
              }
          }

          /**
           * handles a character key event
           *
           * @param {string} character
           * @param {Array} modifiers
           * @param {Event} e
           * @returns void
           */
          self._handleKey = function(character, modifiers, e) {
              var callbacks = _getMatches(character, modifiers, e);
              var i;
              var doNotReset = {};
              var maxLevel = 0;
              var processedSequenceCallback = false;

              // Calculate the maxLevel for sequences so we can only execute the longest callback sequence
              for (i = 0; i < callbacks.length; ++i) {
                  if (callbacks[i].seq) {
                      maxLevel = Math.max(maxLevel, callbacks[i].level);
                  }
              }

              // loop through matching callbacks for this key event
              for (i = 0; i < callbacks.length; ++i) {

                  // fire for all sequence callbacks
                  // this is because if for example you have multiple sequences
                  // bound such as "g i" and "g t" they both need to fire the
                  // callback for matching g cause otherwise you can only ever
                  // match the first one
                  if (callbacks[i].seq) {

                      // only fire callbacks for the maxLevel to prevent
                      // subsequences from also firing
                      //
                      // for example 'a option b' should not cause 'option b' to fire
                      // even though 'option b' is part of the other sequence
                      //
                      // any sequences that do not match here will be discarded
                      // below by the _resetSequences call
                      if (callbacks[i].level != maxLevel) {
                          continue;
                      }

                      processedSequenceCallback = true;

                      // keep a list of which sequences were matches for later
                      doNotReset[callbacks[i].seq] = 1;
                      _fireCallback(callbacks[i].callback, e, callbacks[i].combo, callbacks[i].seq);
                      continue;
                  }

                  // if there were no sequence matches but we are still here
                  // that means this is a regular match so we should fire that
                  if (!processedSequenceCallback) {
                      _fireCallback(callbacks[i].callback, e, callbacks[i].combo);
                  }
              }

              // if the key you pressed matches the type of sequence without
              // being a modifier (ie "keyup" or "keypress") then we should
              // reset all sequences that were not matched by this event
              //
              // this is so, for example, if you have the sequence "h a t" and you
              // type "h e a r t" it does not match.  in this case the "e" will
              // cause the sequence to reset
              //
              // modifier keys are ignored because you can have a sequence
              // that contains modifiers such as "enter ctrl+space" and in most
              // cases the modifier key will be pressed before the next key
              //
              // also if you have a sequence such as "ctrl+b a" then pressing the
              // "b" key will trigger a "keypress" and a "keydown"
              //
              // the "keydown" is expected when there is a modifier, but the
              // "keypress" ends up matching the _nextExpectedAction since it occurs
              // after and that causes the sequence to reset
              //
              // we ignore keypresses in a sequence that directly follow a keydown
              // for the same character
              var ignoreThisKeypress = e.type == 'keypress' && _ignoreNextKeypress;
              if (e.type == _nextExpectedAction && !_isModifier(character) && !ignoreThisKeypress) {
                  _resetSequences(doNotReset);
              }

              _ignoreNextKeypress = processedSequenceCallback && e.type == 'keydown';
          };

          /**
           * handles a keydown event
           *
           * @param {Event} e
           * @returns void
           */
          function _handleKeyEvent(e) {

              // normalize e.which for key events
              // @see http://stackoverflow.com/questions/4285627/javascript-keycode-vs-charcode-utter-confusion
              if (typeof e.which !== 'number') {
                  e.which = e.keyCode;
              }

              var character = _characterFromEvent(e);

              // no character found then stop
              if (!character) {
                  return;
              }

              // need to use === for the character check because the character can be 0
              if (e.type == 'keyup' && _ignoreNextKeyup === character) {
                  _ignoreNextKeyup = false;
                  return;
              }

              self.handleKey(character, _eventModifiers(e), e);
          }

          /**
           * called to set a 1 second timeout on the specified sequence
           *
           * this is so after each key press in the sequence you have 1 second
           * to press the next key before you have to start over
           *
           * @returns void
           */
          function _resetSequenceTimer() {
              clearTimeout(_resetTimer);
              _resetTimer = setTimeout(_resetSequences, 1000);
          }

          /**
           * binds a key sequence to an event
           *
           * @param {string} combo - combo specified in bind call
           * @param {Array} keys
           * @param {Function} callback
           * @param {string=} action
           * @returns void
           */
          function _bindSequence(combo, keys, callback, action) {

              // start off by adding a sequence level record for this combination
              // and setting the level to 0
              _sequenceLevels[combo] = 0;

              /**
               * callback to increase the sequence level for this sequence and reset
               * all other sequences that were active
               *
               * @param {string} nextAction
               * @returns {Function}
               */
              function _increaseSequence(nextAction) {
                  return function() {
                      _nextExpectedAction = nextAction;
                      ++_sequenceLevels[combo];
                      _resetSequenceTimer();
                  };
              }

              /**
               * wraps the specified callback inside of another function in order
               * to reset all sequence counters as soon as this sequence is done
               *
               * @param {Event} e
               * @returns void
               */
              function _callbackAndReset(e) {
                  _fireCallback(callback, e, combo);

                  // we should ignore the next key up if the action is key down
                  // or keypress.  this is so if you finish a sequence and
                  // release the key the final key will not trigger a keyup
                  if (action !== 'keyup') {
                      _ignoreNextKeyup = _characterFromEvent(e);
                  }

                  // weird race condition if a sequence ends with the key
                  // another sequence begins with
                  setTimeout(_resetSequences, 10);
              }

              // loop through keys one at a time and bind the appropriate callback
              // function.  for any key leading up to the final one it should
              // increase the sequence. after the final, it should reset all sequences
              //
              // if an action is specified in the original bind call then that will
              // be used throughout.  otherwise we will pass the action that the
              // next key in the sequence should match.  this allows a sequence
              // to mix and match keypress and keydown events depending on which
              // ones are better suited to the key provided
              for (var i = 0; i < keys.length; ++i) {
                  var isFinal = i + 1 === keys.length;
                  var wrappedCallback = isFinal ? _callbackAndReset : _increaseSequence(action || _getKeyInfo(keys[i + 1]).action);
                  _bindSingle(keys[i], wrappedCallback, action, combo, i);
              }
          }

          /**
           * binds a single keyboard combination
           *
           * @param {string} combination
           * @param {Function} callback
           * @param {string=} action
           * @param {string=} sequenceName - name of sequence if part of sequence
           * @param {number=} level - what part of the sequence the command is
           * @returns void
           */
          function _bindSingle(combination, callback, action, sequenceName, level) {

              // store a direct mapped reference for use with Mousetrap.trigger
              self._directMap[combination + ':' + action] = callback;

              // make sure multiple spaces in a row become a single space
              combination = combination.replace(/\s+/g, ' ');

              var sequence = combination.split(' ');
              var info;

              // if this pattern is a sequence of keys then run through this method
              // to reprocess each pattern one key at a time
              if (sequence.length > 1) {
                  _bindSequence(combination, sequence, callback, action);
                  return;
              }

              info = _getKeyInfo(combination, action);

              // make sure to initialize array if this is the first time
              // a callback is added for this key
              self._callbacks[info.key] = self._callbacks[info.key] || [];

              // remove an existing match if there is one
              _getMatches(info.key, info.modifiers, {type: info.action}, sequenceName, combination, level);

              // add this call back to the array
              // if it is a sequence put it at the beginning
              // if not put it at the end
              //
              // this is important because the way these are processed expects
              // the sequence ones to come first
              self._callbacks[info.key][sequenceName ? 'unshift' : 'push']({
                  callback: callback,
                  modifiers: info.modifiers,
                  action: info.action,
                  seq: sequenceName,
                  level: level,
                  combo: combination
              });
          }

          /**
           * binds multiple combinations to the same callback
           *
           * @param {Array} combinations
           * @param {Function} callback
           * @param {string|undefined} action
           * @returns void
           */
          self._bindMultiple = function(combinations, callback, action) {
              for (var i = 0; i < combinations.length; ++i) {
                  _bindSingle(combinations[i], callback, action);
              }
          };

          // start!
          _addEvent(targetElement, 'keypress', _handleKeyEvent);
          _addEvent(targetElement, 'keydown', _handleKeyEvent);
          _addEvent(targetElement, 'keyup', _handleKeyEvent);
      }

      /**
       * binds an event to mousetrap
       *
       * can be a single key, a combination of keys separated with +,
       * an array of keys, or a sequence of keys separated by spaces
       *
       * be sure to list the modifier keys first to make sure that the
       * correct key ends up getting bound (the last key in the pattern)
       *
       * @param {string|Array} keys
       * @param {Function} callback
       * @param {string=} action - 'keypress', 'keydown', or 'keyup'
       * @returns void
       */
      Mousetrap.prototype.bind = function(keys, callback, action) {
          var self = this;
          keys = keys instanceof Array ? keys : [keys];
          self._bindMultiple.call(self, keys, callback, action);
          return self;
      };

      /**
       * unbinds an event to mousetrap
       *
       * the unbinding sets the callback function of the specified key combo
       * to an empty function and deletes the corresponding key in the
       * _directMap dict.
       *
       * TODO: actually remove this from the _callbacks dictionary instead
       * of binding an empty function
       *
       * the keycombo+action has to be exactly the same as
       * it was defined in the bind method
       *
       * @param {string|Array} keys
       * @param {string} action
       * @returns void
       */
      Mousetrap.prototype.unbind = function(keys, action) {
          var self = this;
          return self.bind.call(self, keys, function() {}, action);
      };

      /**
       * triggers an event that has already been bound
       *
       * @param {string} keys
       * @param {string=} action
       * @returns void
       */
      Mousetrap.prototype.trigger = function(keys, action) {
          var self = this;
          if (self._directMap[keys + ':' + action]) {
              self._directMap[keys + ':' + action]({}, keys);
          }
          return self;
      };

      /**
       * resets the library back to its initial state.  this is useful
       * if you want to clear out the current keyboard shortcuts and bind
       * new ones - for example if you switch to another page
       *
       * @returns void
       */
      Mousetrap.prototype.reset = function() {
          var self = this;
          self._callbacks = {};
          self._directMap = {};
          return self;
      };

      /**
       * should we stop this event before firing off callbacks
       *
       * @param {Event} e
       * @param {Element} element
       * @return {boolean}
       */
      Mousetrap.prototype.stopCallback = function(e, element) {
          var self = this;

          // if the element has the class "mousetrap" then no need to stop
          if ((' ' + element.className + ' ').indexOf(' mousetrap ') > -1) {
              return false;
          }

          if (_belongsTo(element, self.target)) {
              return false;
          }

          // Events originating from a shadow DOM are re-targetted and `e.target` is the shadow host,
          // not the initial event target in the shadow tree. Note that not all events cross the
          // shadow boundary.
          // For shadow trees with `mode: 'open'`, the initial event target is the first element in
          // the event’s composed path. For shadow trees with `mode: 'closed'`, the initial event
          // target cannot be obtained.
          if ('composedPath' in e && typeof e.composedPath === 'function') {
              // For open shadow trees, update `element` so that the following check works.
              var initialEventTarget = e.composedPath()[0];
              if (initialEventTarget !== e.target) {
                  element = initialEventTarget;
              }
          }

          // stop for input, select, and textarea
          return element.tagName == 'INPUT' || element.tagName == 'SELECT' || element.tagName == 'TEXTAREA' || element.isContentEditable;
      };

      /**
       * exposes _handleKey publicly so it can be overwritten by extensions
       */
      Mousetrap.prototype.handleKey = function() {
          var self = this;
          return self._handleKey.apply(self, arguments);
      };

      /**
       * allow custom key mappings
       */
      Mousetrap.addKeycodes = function(object) {
          for (var key in object) {
              if (object.hasOwnProperty(key)) {
                  _MAP[key] = object[key];
              }
          }
          _REVERSE_MAP = null;
      };

      /**
       * Init the global mousetrap functions
       *
       * This method is needed to allow the global mousetrap functions to work
       * now that mousetrap is a constructor function.
       */
      Mousetrap.init = function() {
          var documentMousetrap = Mousetrap(document);
          for (var method in documentMousetrap) {
              if (method.charAt(0) !== '_') {
                  Mousetrap[method] = (function(method) {
                      return function() {
                          return documentMousetrap[method].apply(documentMousetrap, arguments);
                      };
                  } (method));
              }
          }
      };

      Mousetrap.init();

      // expose mousetrap to the global object
      window.Mousetrap = Mousetrap;

      // expose as a common js module
      if (typeof module !== 'undefined' && module.exports) {
          module.exports = Mousetrap;
      }

      // expose mousetrap as an AMD module
      if (typeof define === 'function' && define.amd) {
          define(function() {
              return Mousetrap;
          });
      }
  }) (typeof window !== 'undefined' ? window : null, typeof  window !== 'undefined' ? document : null);

  let formatSize = function (bytes) {
      if (bytes == 0) { return "0.00 B"; }
      let e = Math.floor(Math.log(bytes) / Math.log(1024));
      return ((bytes / Math.pow(1024, e)).toFixed(2) + ' ' + ' KMGTP'.charAt(e) + 'B').replace('.00', '');
  };

  let formatNumber = function(num, round = 2) {
      return (new Intl.NumberFormat(navigator.language, { style: 'decimal', maximumFractionDigits: round})).format(num);
  };

  let formatDuration = function (time) {
      // Hours, minutes and seconds
      let hrs = ~~(time / 3600);
      let mins = ~~((time % 3600) / 60);
      let secs = ~~time % 60;

      // Output like "1:01" or "4:03:59" or "123:03:59"
      let ret = "";

      if (hrs > 0) {
          ret += "" + hrs + ":" + (mins < 10 ? "0" : "");
      }

      ret += "" + mins + ":" + (secs < 10 ? "0" : "");
      ret += "" + secs;
      return ret;
  };

  let on = function (element, name, delegate, fn) {

      if (!fn) {
          element.addEventListener(name, arguments[2]);
      } else {
          element.addEventListener(name, function (e) {

              let target = e.target;

              while (target !== element) {

                  if (!target) {
                      break;
                  }

                  if (target.matches(delegate)) {
                      return fn.apply(target, arguments);
                  }

                  target = target.parentNode;
              }
          });
      }

      return element;
  };

  let toKebabCase = function(str) {
      return str.replace(/([a-z])([A-Z])/g, '$1-$2').replace(/\s+/g, '-').toLowerCase();
  };

  let copyText = function (text, cb) {
      let inp = document.createElement('textarea');
      document.body.appendChild(inp);
      inp.value = text;
      inp.select();
      try { document.execCommand('copy', false); } catch (e) { }
      inp.remove();
      if (cb) cb();
  };

  let interpolate = function (str, params) {
      const names = Object.keys(params);
      const vals = Object.values(params);
      return new Function(...names, `return \`${str}\`;`)(...vals);
  };

  let uuid = function() {
      return ([1e7]+-1e3+-4e3+-8e3+-1e11).replace(/[018]/g, c =>
          (c ^ crypto.getRandomValues(new Uint8Array(1))[0] & 15 >> c / 4).toString(16)
      );
  };

  let truncate = function(text, length, clamp = '...') {
      let content = text || '';
      return content.length > length ? content.slice(0, length) + clamp : content;
  };

  let stripTags = function(input, allowed) {

      // making sure the allowed arg is a string containing only tags in lowercase (<a><b><c>)
      allowed = (((allowed || '') + '').toLowerCase().match(/<[a-z][a-z0-9]*>/g) || []).join('');
      const tags = /<\/?([a-z0-9]*)\b[^>]*>?/gi;
      const commentsAndPhpTags = /<!--[\s\S]*?-->|<\?(?:php)?[\s\S]*?\?>/gi;
      let after = input;

      after = (after.substring(after.length - 1) === '<') ? after.substring(0, after.length - 1) : after;

      while (true) {
          const before = after;
          after = before.replace(commentsAndPhpTags, '').replace(tags, ($0, $1) => {
              return allowed.indexOf('<' + $1.toLowerCase() + '>') > -1 ? $0 : ''
          });
          if (before === after) {
              return after
          }
      }
  };

  var utils = {
      copyText,
      formatSize,
      formatDuration,
      formatNumber,
      interpolate,
      on,
      toKebabCase,
      uuid,
      truncate,
      stripTags
  };

  var ui$1 = {

      notify: function (message, status, timeout) {

          if (timeout !== false && !timeout) {
              timeout = 2500;
          }

          new Noty({
              type: status || 'info',
              text: message,
              timeout: timeout,
              layout: 'topCenter',
              theme: 'app',
              progressBar: true
          }).show();
      },

      block: function (info='', context = 'ui-block') {

          document.body.insertAdjacentHTML('beforeend', `
            <app-loader-cover class="${context}" label="${info}"></app-loader-cover>
        `);
      },

      unblock: function (context = 'ui-block') {
          document.querySelectorAll(`.${context}`).forEach(node => node.parentNode.removeChild(node));
      },

      offcanvas: function (content, options) {

          let id = Math.random().toString(36).substring(2) + Date.now().toString(36),
              size = '';

          options = options || {};

          switch (options.size) {
              case 'large':
                  size = 'kiss-width-1-3@m kiss-width-1-4@xl';
                  break;
              case 'xlarge':
                  size = 'kiss-width-2-3@m kiss-width-1-2@xl';
                  break;
              case 'xxlarge':
                  size = 'kiss-width-3-4';
                  break;
              case 'screen':
                  size = 'kiss-width-1-1';
                  break;
          }

          document.body.insertAdjacentHTML('beforeend', `
            <kiss-offcanvas id="offcanvas-${id}" flip="${(options.flip && 'true') || ''}">
                <kiss-content class="${size}">
                    ${content}
                </kiss-content>
            </kiss-offcanvas>
        `);

          let offcanvas = document.getElementById(`offcanvas-${id}`);

          if (options && options.zIndex) {
              offcanvas.style.zIndex = options.zIndex;
          }

          offcanvas.__close = offcanvas.close;
          offcanvas.__show = offcanvas.show;

          offcanvas.close = function() {
              offcanvas.__close();
              setTimeout(() => {
                  offcanvas.parentNode.removeChild(offcanvas);
              }, 300);
          };

          offcanvas.show = function() {
              offcanvas.__show();

              setTimeout(() => {
                  let ele = offcanvas.querySelector('[autofocus]');

                  if (ele) {
                      ele.focus();
                  }
              }, 300);
          };

          return offcanvas;
      },


      dialog: function (content, options, dialogtype) {

          let id = Math.random().toString(36).substring(2) + Date.now().toString(36);

          document.body.insertAdjacentHTML('beforeend', `
            <kiss-dialog id="dialog-${id}" size="${(options && options.size) || ''}" type="${dialogtype}">
                <kiss-content class="animated fadeInUp faster">
                    ${content}
                </kiss-content>
            </kiss-dialog>
        `);

          let dialog = document.getElementById(`dialog-${id}`);

          if (options && options.zIndex) {
              dialog.style.zIndex = options.zIndex;
          }

          dialog.__close = dialog.close;
          dialog.__show = dialog.show;

          dialog.close = function() {
              dialog.__close();
              dialog.parentNode.removeChild(dialog);
          };

          dialog.show = function() {
              dialog.__show();

              setTimeout(() => {
                  let ele = dialog.querySelector('[autofocus]');

                  if (ele) {
                      ele.focus();
                  }
              }, 300);
          };

          return dialog;
      },

      alert: function (content, options) {

          let dialog = this.dialog(/*html*/`
            <div class="kiss-margin">
                ${content}
            </div>
            <div class="kiss-margin-top kiss-flex kiss-flex-middle">
                <button type="button" class="kiss-button kiss-button-primary kiss-flex-1" kiss-dialog-close>${App.i18n.get('Ok')}</button>
            </div>
        `, options, 'alert');

          dialog.show();
      },

      confirm: function (text, onconfirm, oncancel, options) {

          let dialog = this.dialog(/*html*/`
            <div class="kiss-margin-bottom">
                ${text}
            </div>
            <div class="kiss-margin-top kiss-flex kiss-flex-middle kiss-button-group">
                <button type="button" class="kiss-button-cancel kiss-button kiss-flex-1">${App.i18n.get('Cancel')}</button>
                <button type="button" class="kiss-button-confirm kiss-button kiss-button-primary kiss-flex-1">${App.i18n.get('Ok')}</button>
            </div>
        `, options, 'confirm');

          App.utils.on(dialog, 'click', '.kiss-button-confirm', () => {
              if (onconfirm) onconfirm();
              dialog.close();
          });

          App.utils.on(dialog, 'click', '.kiss-button-cancel', () => {
              if (oncancel) oncancel();
              dialog.close();
          });

          dialog.show();
      },

      prompt: function (text, value = '', clb, options) {
          let dialog = this.dialog(/*html*/`
            <form>
                <div class="kiss-margin kiss-text-bold">${text}</div>
                <div class="kiss-margin-bottom">
                    <input class="kiss-width-1-1 kiss-input" type="text" required>
                </div>
                <div class="kiss-margin-top kiss-flex kiss-flex-middle kiss-button-group">
                    <button type="button" class="kiss-button-cancel kiss-button kiss-flex-1">${App.i18n.get('Cancel')}</button>
                    <button type="submit" class="kiss-button-confirm kiss-button kiss-button-primary kiss-flex-1">${App.i18n.get('Ok')}</button>
                </div>
            </form>
        `, options, 'confirm');

          let input = dialog.querySelector('.kiss-input');

          input.value = value;

          App.utils.on(dialog, 'submit', (e) => {
              e.preventDefault();
              if (clb) clb(input.value);
              dialog.close();
          });

          App.utils.on(dialog, 'click', '.kiss-button-cancel', () => {
              dialog.close();
          });

          dialog.show();

          setTimeout(() => input.focus(), 300);
      }
  };

  var assets = {

      _ress: {},

      require: function (ress, onSuccess, onError) {

          onSuccess = onSuccess || function () { };
          onError = onError || function () { };

          let req = [];

          ress = Array.isArray(ress) ? ress : [ress];

          for (let i = 0, len = ress.length; i < len; i++) {

              if (!ress[i]) continue;

              if (!this._ress[ress[i]]) {

                  if (ress[i].match(/\.js$/i)) {
                      this._ress[ress[i]] = this.getScript(ress[i]);
                  } else if (ress[i].match(/\.(jpg|jpeg|gif|png)$/i)) {
                      this._ress[ress[i]] = this.getImage(ress[i]);
                  } else if (ress[i].match(/\.css$/i)) {
                      this._ress[ress[i]] = this.getCss(ress[i]);
                  } else {
                      continue;
                  }
              }

              req.push(this._ress[ress[i]]);
          }

          return Promise.all(req).then(onSuccess).catch(function (e) {
              onError.apply(self, [e]);
          });
      },

      getScript: function (url) {

          return new Promise(function (resolve, reject) {

              let script = document.createElement('script');

              script.async = true;

              script.onload = function () {
                  resolve(url);
              };

              script.onerror = function () {
                  reject(url);
              };

              script.src = (/^(\/\/|http)/.test(url) ? url : App.base(url)) + '?v=' + App.version;

              document.getElementsByTagName('head')[0].appendChild(script);

          });
      },

      getCss: function (url) {

          return new Promise(function (resolve, reject) {

              let link = document.createElement('link');
              link.type = 'text/css';
              link.rel = 'stylesheet';
              link.href = (/^(\/\/|http)/.test(url) ? url : App.base(url)) + '?v=' + App.version;

              document.getElementsByTagName('head')[0].appendChild(link);

              let img = document.createElement('img');
              img.onerror = function () {
                  resolve(url);
              };
              img.src = link.href + '?v=' + App.version;
          });
      },

      getImage: function (url) {

          return new Promise(function (resolve, reject) {

              let img = document.createElement('img');

              img.onload = function () { resolve(url); };
              img.onerror = function () { reject(url); };

              img.src = (url.match(/^(\/\/|http)/) ? url : App.base(url)) + '?v=' + App.version;
          });
      }
  };

  var ui = {

      offcanvas(component, data, callbacks, options) {

          let offcanvas;

          data = data || {};
          callbacks = callbacks || {};

          let def = {

              $viewSetup(app) {

                  app.mixin({
                      methods: {
                          $close() {

                              if (this.$el.closest) {
                                  this.$el.closest('kiss-offcanvas').close();
                              } else {
                                  this.$el.parentNode.closest('kiss-offcanvas').close();
                              }
                          },
                          $call(name, ...args) {
                              if (callbacks[name]) {
                                  callbacks[name](...args);
                              }
                          }
                      }
                  });
              },

              data() {
                  return  {
                      data
                  }
              },

              components: {
                  'vue-offcanvas-content': component
              }
          };

          offcanvas = App.ui.offcanvas(/*html*/`
            <div class="vue-offcanvas">
                <vue-offcanvas-content v-bind="data"></vue-offcanvas-content>
            </div>
        `, options || {});

          offcanvas.$view = offcanvas.querySelector('.vue-offcanvas');

          VueView.compile(offcanvas.$view, def);
          setTimeout(() => offcanvas.show(), 50);

          return offcanvas;
      },

      modal(url, data, callbacks, options, modaltype) {

          data = data || {};
          callbacks = callbacks || {};

          let def = {

              $viewSetup(app) {

                  app.mixin({
                      methods: {
                          $close() {

                              if (this.$el.closest) {
                                  this.$el.closest('kiss-dialog').close();
                              } else {
                                  this.$el.parentNode.closest('kiss-dialog').close();
                              }
                          },
                          $call(name, ...args) {
                              if (callbacks[name]) {
                                  callbacks[name](...args);
                              }
                          }
                      }
                  });
              },

              data() {

                  return  {
                      data
                  }
              },

              components: {
                  'vue-dialog-content':  url
              }
          };

          let dialog = App.ui.dialog(/*html*/`
            <div class="vue-modal">
                <vue-dialog-content v-bind="data"></vue-dialog-content>
            </div>
        `, options || {}, modaltype);

          dialog.$view = dialog.querySelector('.vue-modal');

          VueView.compile(dialog.$view, def);
          dialog.show();

          return dialog;
      }
  };

  /**
   * Dynamic vue template (Vue 3.x)
   */
  (function() {

      let VueView = {

          ready: new Promise(function(resolve) {
              document.addEventListener('DOMContentLoaded', e => resolve());
          }),

          components: {},

          component(name, def) {
              this.components[name] = def;
          },

          compile(el, def) {
              this.ready.then(() => {
                  this._compile(el, def);
              });
          },

          _compile: async function(el, definition) {

              let script = definition ? null : el.querySelector('script');
              let template = definition ? null : el.querySelector('template');
              let def = definition || {}, app;

              if (script) {
                  let module = await import(`data:text/javascript;charset=utf-8,${encodeURIComponent(script.innerHTML)}`);
                  def = module.default;
                  script.parentNode.removeChild(script);
              }

              if (template) {
                  def.template = template.innerHTML;
                  template.parentNode.removeChild(template);
              }

              def = Object.assign({}, def || {});

              def.components = def.components || {};

              Object.keys(def.components).forEach(name => {

                  if (typeof(def.components[name]) === 'string') {
                      def.components[name] = (function(url) {
                          return Vue.defineAsyncComponent(() => App.utils.import(url));
                      })(def.components[name]);
                  }
              });

              app = Vue.createApp(def);

              Object.keys(VueView.components).forEach(name => {

                  if (typeof(VueView.components[name]) === 'string') {
                      app.component(name, Vue.defineAsyncComponent(() => App.utils.import(VueView.components[name])));
                  } else {
                      app.component(name, VueView.components[name]);
                  }
              });

              app.mixin({
                  data() {
                      return {
                          App: window.App
                      }
                  },

                  methods: {
                      t(key) {
                          return App.i18n.get(key);
                      },

                      $route(url) {
                          return App.route(url);
                      },

                      $base(url) {
                          return App.base(url);
                      },

                      $request(url, data) {
                          return App.request(url, data);
                      }
                  }
              });

              // view router
              if (def.$router && window.VueRouter) {

                  def.$router = Object.assign({
                      history: VueRouter.createWebHashHistory(),
                      routes: []
                  }, def.$router);

                  def.$router.routes.forEach(route => {

                      if (typeof(route.component) === 'string') {
                          route.component = (function(url) {
                              return Vue.defineAsyncComponent(() => App.utils.import(url));
                          })(route.component);
                      }
                  });

                  app.use(new VueRouter.createRouter(def.$router));
              }

              if (def.$viewSetup) {
                  def.$viewSetup(app);
              }

              app.mount(el);
              el.setAttribute('init', true);

              return app;
          }
      };

      class VueElement extends HTMLElement {
          connectedCallback() {
              VueView.compile(this);
          }
      }

      customElements.define('vue-view', VueElement);

      VueView.ui = ui;

      window.VueView = VueView;

  })();

  customElements.define('app-avatar', class extends HTMLElement {

      static get observedAttributes() {
          return ['name', 'size', 'color'];
      }

      constructor() {
          super();
      }

      connectedCallback() {
          setTimeout(() => this.draw(), 0);
      }

      attributeChangedCallback(name, oldValue, newValue) {
          this.draw();
      }

      disconnectedCallback() {

      }

      draw() {

          this.innerHTML = '<canvas></canvas>';

          let name = this.getAttribute('name') || '';
          let size = this.getAttribute('size') || 60;
          let color = this.getAttribute('color') || null;

          let canvas = this.querySelector('canvas');

          let colours = [
              "#1abc9c", "#2ecc71", "#3498db", "#9b59b6", "#34495e", "#16a085", "#27ae60", "#2980b9", "#8e44ad", "#2c3e50",
              "#f1c40f", "#e67e22", "#e74c3c", "#ecf0f1", "#95a5a6", "#f39c12", "#d35400", "#c0392b", "#bdc3c7", "#7f8c8d"
          ],

              nameSplit = String(name).toUpperCase().split(' '),
              initials, charIndex, colourIndex, context, dataURI;


          if (nameSplit.length == 1) {
              initials = nameSplit[0] ? nameSplit[0].charAt(0) : '?';
          } else {
              initials = nameSplit[0].charAt(0) + nameSplit[1].charAt(0);
          }

          charIndex = (initials == '?' ? 72 : initials.charCodeAt(0)) - 64;
          colourIndex = charIndex % 20;
          canvas.width = size;
          canvas.height = size;
          context = canvas.getContext("2d");

          context.fillStyle = color ? color : colours[colourIndex - 1];
          context.fillRect(0, 0, canvas.width, canvas.height);
          context.font = Math.round(canvas.width / 2) + "px Arial";
          context.textAlign = "center";
          context.fillStyle = "#FFF";
          context.fillText(initials, size / 2, size / 1.5);

          dataURI = canvas.toDataURL();

          this.canvas = canvas;

          return dataURI;
      }
  });

  customElements.define('app-actionbar', class extends HTMLElement {

      constructor() {
          super();
      }

      connectedCallback() {

          let idle = setInterval(() => {

              if (this.offsetHeight) {
                  clearInterval(idle);
                  this.update();
              }
          }, 10);

          // just to be sure
          window.addEventListener("load", evt => {
              this.update();
          });
      }

      disconnectedCallback() {
          document.body.style.paddingBottom = '';
      }

      update() {

          if (this.getAttribute('space') !== 'false') {
              document.body.style.paddingBottom = `calc(2rem + ${this.offsetHeight}px)`;
          }
      }
  });

  const fn = e => {

      let element = e.target, closest = e.target.matches('app-fieldcontainer') ? e.target : null;

      while ((element = element.parentElement)) {
          if (element.matches('app-fieldcontainer')) {
              closest = element;
          }
      }

      let containers = document.querySelectorAll('app-fieldcontainer');

      containers.forEach(container => {

          if (container !== closest) {
              container.removeAttribute('active');
          }
      });
  };


  document.addEventListener('click', fn);
  document.addEventListener('focusin', fn);

  customElements.define('app-fieldcontainer', class extends HTMLElement {

      constructor() {
          super();
      }

      connectedCallback() {

          this.addEventListener('click', e => this.setAttribute('active','true'));
          this.addEventListener('focusin', e => this.setAttribute('active','true'));
      }

      disconnectedCallback() {

      }
  });

  customElements.define('app-frame', class extends HTMLElement {

      static get observedAttributes() {
          return ['src'];
      }

      constructor() {
          super();
      }

      connectedCallback() {

          this.innerHTML = '<iframe></iframe>';

          setTimeout(() => {

              this.iframe = this.querySelector('iframe');

              if (this.getAttribute('seamless') == 'true') {
                  this.iframe.style.height = '0px';
                  setInterval(() => this.resize(), 150);
              }

              this.update();

          }, 0);
      }

      disconnectedCallback() {
          this.observer.disconnect();
      }

      attributeChangedCallback(name, oldValue, newValue) {

          if (!this.iframe) {
              return;
          }

          this.update();
      }

      update() {
          this.iframe.src = this.getAttribute('src') || '';
      }

      resize() {

          if (!this.iframe.contentDocument.body) {
              return;
          }

          if (this._offsetHeight == this.iframe.contentDocument.body.offsetHeight) {
              return;
          }

          this._offsetHeight = this.iframe.contentDocument.body.offsetHeight;

          this.iframe.style.height = this._offsetHeight+'px';

      }
  });

  customElements.define('app-loader', class extends HTMLElement {

      static get observedAttributes() {
          return ['label', 'mode'];
      }

      constructor() {
          super();
      }

      connectedCallback() {
          this.render();
      }

      attributeChangedCallback(oldvalue, newvalue) {
          if (oldvalue != newvalue)this.render();
      }

      render() {

          let template;
          let mode = this.getAttribute('mode');

          switch (mode) {
              case 'dots':
                  template = '<div></div><div></div><div></div><div></div>';
                  break;
              default:

                  if (mode !== 'orbit') {
                      this.setAttribute('mode', 'orbit');
                  }

                  template = '<div><div></div><div></div><div></div></div>';
          }

          this.innerHTML = template;
      }
  });

  customElements.define('app-loader-cover', class extends HTMLElement {

      static get observedAttributes() {
          return ['label', 'mode'];
      }

      constructor() {
          super();
      }

      connectedCallback() {
          this.innerHTML = `
        <div>
            <app-loader></app-loader>
            <div class="app-loader-cover-label"></div>
        </div>
        `;

          this.labelElement = this.querySelector('.app-loader-cover-label');
          this.loaderElement = this.querySelector('app-loader');

          this.render();
      }

      attributeChangedCallback() {
          this.render();
      }

      render() {

          if (!this.labelElement) return;

          this.labelElement.innerText = this.getAttribute('label') || '';
          this.loaderElement.setAttribute('mode', this.getAttribute('mode'));
      }
  });

  customElements.define('app-scrollcontainer', class extends HTMLElement {

      static get observedAttributes() {
          return ['boundary'];
      }

      constructor() {
          super();
      }

      connectedCallback() {

          document.addEventListener('DOMContentLoaded', () => requestAnimationFrame(() => {
              setTimeout(() => this.expand());
          }));

          window.addEventListener('resize',  () => requestAnimationFrame(() => {
              setTimeout(() => this.expand());
          }));

          window.addEventListener('load',  () => requestAnimationFrame(() => {
              setTimeout(() => this.expand());
          }));
      }

      attributeChangedCallback(oldvalue, newvalue) {
          if (oldvalue != newvalue)this.expand();
      }

      expand() {

          this.style.maxHeight = '';

          let rect = this.getBoundingClientRect();
          let mode = this.getAttribute('mode');

          if (rect.top > window.innerHeight) {
              return;
          }

          let maxHeight = window.innerHeight - rect.top;

          switch (mode) {
              case 'boundary':

                  let boundary = this.getAttribute('boundary');

                  if (boundary) {
                      boundary = document.querySelector(boundary);

                      if (boundary) {
                          maxHeight = boundary.getBoundingClientRect().top - rect.top;
                      }
                  }

                  if (maxHeight > window.innerHeight) {
                      return;
                  }

                  break;
          }


          this.style.maxHeight = `${maxHeight}px`;
      }
  });

  // this file gets auto imported in app:assets/js/components.js
  VueView.component('fields-manager', 'system:assets/vue-components/fields-manager.js');
  VueView.component('fields-renderer', 'system:assets/vue-components/fields-renderer.js');
  VueView.component('icon-picker', 'system:assets/vue-components/icon-picker.js');

  // General
  VueView.component('vue-draggable', Vue.defineAsyncComponent(() => {
      return new Promise(resolve => {
          App.assets.require(['app:assets/vendor/Sortable.js']).then(() => {
              App.assets.require(['app:assets/vendor/vue/components/vue-draggable.js']).then(() => resolve(window.vuedraggable));
          });
      })
  }));

  VueView.component('vue-table', Vue.defineAsyncComponent(() => {
      return new Promise(resolve => {
          App.assets.require([
              'app:assets/vendor/tabulator/tabulator.js',
              'app:assets/css/vendor/tabulator.css'
          ]).then(() => {
              App.utils.import('app:assets/vendor/tabulator/tabulator-vue.js').then((m) => resolve(m));
          });
      })
  }));

  VueView.component('revisions-widget', 'system:assets/vue-components/revisions/widget.js');

  // Fields
  VueView.component('field-boolean', 'app:assets/vue-components/field-boolean.js');
  VueView.component('field-code', 'app:assets/vue-components/field-code.js');
  VueView.component('field-color', 'app:assets/vue-components/field-color.js');
  VueView.component('field-date', 'app:assets/vue-components/field-date.js');
  VueView.component('field-datetime', 'app:assets/vue-components/field-datetime.js');
  VueView.component('field-nav', 'app:assets/vue-components/field-nav.js');
  VueView.component('field-number', 'app:assets/vue-components/field-number.js');
  VueView.component('field-object', 'app:assets/vue-components/field-object.js');
  VueView.component('field-select', 'app:assets/vue-components/field-select.js');
  VueView.component('field-set', 'app:assets/vue-components/field-set.js');
  VueView.component('field-table', 'app:assets/vue-components/field-table.js');
  VueView.component('field-tags', 'app:assets/vue-components/field-tags.js');
  VueView.component('field-text', 'app:assets/vue-components/field-text.js');
  VueView.component('field-time', 'app:assets/vue-components/field-time.js');
  VueView.component('field-wysiwyg', 'app:assets/vue-components/field-wysiwyg.js');

  let html = document.documentElement;
  let baseUrl = (html.getAttribute('data-base') || '').replace(/\/$/, '');
  let routeUrl = (html.getAttribute('data-route') || '').replace(/\/$/, '');

  let App$1 = {

      base_url: baseUrl,
      route_url: routeUrl,
      version: (html.getAttribute("data-version") || '0.0.1'),

      _events: {},
      _paths: {},

      base: function (url) {

          let path = url.match(/^(.*?)\:/);

          if (path && this._paths[path[1]]) {
              return url.replace(path[0], this._paths[path[1]]);
          }

          return this.base_url + url;
      },

      route: function (url) {
          return this.route_url + url;
      },

      reroute: function (url) {
          location.href = /^http/.test(url) ? url : this.route(url);
      },

      request: function (url, data, type) {

          url = this.route(url);
          type = type || 'json';

          return new Promise(function (fulfill, reject) {

              let xhr = new XMLHttpRequest();

              xhr.open('post', url, true);
              xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

              url += (url.indexOf('?') !== -1 ? '&' : '?') + 'nc=' + Math.random().toString(36).substr(2);

              if (data) {

                  if (typeof (data) === 'object' && data instanceof HTMLFormElement) {
                      data = new FormData(data);
                  } else if (typeof (data) === 'object' && data instanceof FormData) ; else if (typeof (data) === 'object') {

                      xhr.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
                      data = JSON.stringify(data || {});
                  }
              }

              xhr.onloadend = function () {

                  let resdata = xhr.responseText;

                  if (type === 'json') {
                      try {
                          resdata = JSON.parse(xhr.responseText);
                      } catch (e) {
                          resdata = null;
                      }
                  }

                  if (this.status == 200) {
                      fulfill(resdata, xhr);
                  } else {
                      reject(resdata, xhr);
                  }
              };

              // send the collected data as JSON
              xhr.send(data);
          });
      },

      on: function (name, fn) {
          if (!this._events[name]) this._events[name] = [];
          this._events[name].push(fn);
      },

      off: function (name, fn) {
          if (!this._events[name]) return;

          if (!fn) {
              this._events[name] = [];
          } else {

              for (let i = 0; i < this._events[name].length; i++) {
                  if (this._events[name][i] === fn) {
                      this._events[name].splice(i, 1);
                      break;
                  }
              }
          }
      },

      trigger: function (name, params) {

          if (!this._events[name]) return;

          let event = { name, params };

          for (let i = 0; i < this._events[name].length; i++) {
              this._events[name][i].apply(App$1, [event]);
          }
      },

      deferred: function () {

          let resolve, fail;

          let d = new Promise(function (fullfill, reject) {
              resolve = fullfill;
              fail = reject;
          });

          d.resolve = function (data) {
              resolve(data);
          };

          d.reject = function (data) {
              fail(data);
          };

          return d;
      }
  };

  // general services
  App$1.session = window.JSONStorage ? window.JSONStorage.select("app", "session") : null;
  App$1.storage = window.JSONStorage ? window.JSONStorage.select("app", "local") : null;
  App$1.memory = window.JSONStorage ? window.JSONStorage.select("app", "memory") : null;
  App$1.i18n = window.i18n || null;
  App$1.assets = assets;
  App$1.ui = ui$1;
  App$1.utils = utils;

  // custom utils
  App$1.utils.import = function(uri) {
      return import(App$1.base(uri)+'?v='+App$1.version);
  };

  window.App = App$1;

}());
