/**
 * Bundled by jsDelivr using Rollup v2.79.2 and Terser v5.39.0.
 * Original file: /npm/object-assign@4.1.1/index.js
 *
 * Do NOT use SRI with dynamically generated files! More information: https://www.jsdelivr.com/using-sri-with-dynamic-files
 */
/*
object-assign
(c) Sindre Sorhus
@license MIT
*/
var r=Object.getOwnPropertySymbols,t=Object.prototype.hasOwnProperty,e=Object.prototype.propertyIsEnumerable;var n=function(){try{if(!Object.assign)return!1;var r=new String("abc");if(r[5]="de","5"===Object.getOwnPropertyNames(r)[0])return!1;for(var t={},e=0;e<10;e++)t["_"+String.fromCharCode(e)]=e;if("0123456789"!==Object.getOwnPropertyNames(t).map((function(r){return t[r]})).join(""))return!1;var n={};return"abcdefghijklmnopqrst".split("").forEach((function(r){n[r]=r})),"abcdefghijklmnopqrst"===Object.keys(Object.assign({},n)).join("")}catch(r){return!1}}()?Object.assign:function(n,o){for(var a,c,i=function(r){if(null==r)throw new TypeError("Object.assign cannot be called with null or undefined");return Object(r)}(n),f=1;f<arguments.length;f++){for(var b in a=Object(arguments[f]))t.call(a,b)&&(i[b]=a[b]);if(r){c=r(a);for(var l=0;l<c.length;l++)e.call(a,c[l])&&(i[c[l]]=a[c[l]])}}return i};export{n as default};
