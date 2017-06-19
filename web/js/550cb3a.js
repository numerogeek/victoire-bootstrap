/*global blogCategories, $ */


function BlogCategory(blogCategoryElement)
{
    this.element = $vic(blogCategoryElement);
    if ($vic(blogCategoryElement).data('index')) {
        this.index = $vic(blogCategoryElement).data('index');
    } else {
        this.index = $vic(blogCategoryElement).children('[data-init="true"]').length;
    }

    var lastMaxId = 0;
    $vic('[data-init=true]').each(function(index, el) {

        if (!isNaN($vic(el).attr('data-blog-category'))
            && $vic(el).attr('data-blog-category') > lastMaxId) {
            lastMaxId = parseInt($vic(el).attr('data-blog-category'));
        }
    });
    this.id = lastMaxId + 1;

    this.parentId =  $vic(blogCategoryElement).parents('li[role="blogCategory"]').first().data('blog-category');
    //get the parent by its id
    if (this.parentId == null || this.parentId == 0) {
        this.parent = null;
        this.parentId = 0;
    } else {
        this.parent = blogCategories[this.parentId];
    }
    blogCategories[this.id] = this;


}

function addBlogCategoryRootItem(el)
{
    var blogCategoryElement = $vic(el).parents('div').first().prev('ul');
    // var parentBlogCategory = $vic('#blogCategory-children');
    var blogCategory = new BlogCategory(blogCategoryElement);
    blogCategory.init();
    blogCategory.append();
}
function addBlogCategoryRow(el)
{
    var blogCategoryElement = $vic(el).parents('span.add_blogCategory_link-container').first().next('ul');
    // var parentBlogCategory = $vic(el).parents('[role="blogCategory-item"]').first();
    var blogCategory = new BlogCategory(blogCategoryElement);
    blogCategory.init();
    blogCategory.append();
}

function deleteBlogCategoryRow(el)
{
    var blogCategory = $vic(el).parents('li[role="blogCategory"]').first();
    blogCategories[blogCategory.data('blog-category')] = undefined;
    blogCategory.remove();

}

function initBlogCategories()
{
    var links = $vic('.add_blogCategory_link');
    var blogCategory = {id: 0};

    //we want the links from the bottom to the top
    $vic.each(links, function (index, link) {

        var blogCategoryElement = $vic(link).parents('li[role="blogCategory"]').first();
        if (blogCategoryElement.length > 0) {
            blogCategory = new BlogCategory(blogCategoryElement);
            blogCategory.update();
        }
    });

    //This is exactly the same loop as the one just before
    //We need to close the previous loop and iterate on a new one because
    //we operated on the DOM that is updated only when the loop ends.
    $vic.each(links, function (index, link) {
        var blogCategoryElement = $vic(link).parents('li[role="blogCategory"]').first();
        var blogCategory = blogCategories[blogCategoryElement.attr('data-blog-category')];

        var parentBlogCategoryElement = $vic(blogCategoryElement).parents('li[role="blogCategory"]').first();

        var parentBlogCategory = blogCategories[parentBlogCategoryElement.attr('data-blog-category')];
        if (parentBlogCategory != undefined) {
            blogCategory.parentId = parentBlogCategory.id;
            blogCategory.parent = parentBlogCategory;

            blogCategories[blogCategory.id] = blogCategory;
        }
    });
}

BlogCategory.prototype.init = function ()
{
    var currentBlogCategory = this;
    var name = '[' + currentBlogCategory.index + ']';
    var i = 0;
    do {
        i++;
        if (currentBlogCategory.parent != null) {
            name = '[' + currentBlogCategory.parent.index + '][children]' + name;
        }
        currentBlogCategory = currentBlogCategory.parent;
    } while (currentBlogCategory != null && i < 10);
    var newForm = prototype.replace(/\[__name__\]/g, name);
    var name =  name.replace(/\]\[/g, '_');
    var name =  name.replace(/\]/g, '_');
    var name =  name.replace(/\[/g, '_');
    var newForm = newForm.replace(/__name__/g, name);
    var newForm = newForm.replace(/__blogCategory_id__/g, this.id);
    var newForm = newForm.replace(/__blogCategory_index__/g, this.index);
    this.newForm = $vic.parseHTML(newForm);
    $vic(this.newForm).attr('data-init', "true");
};

BlogCategory.prototype.update = function ()
{
    $vic(this.element).replaceWith(this.element);
    $vic(this.element).attr('data-blog-category', this.id);
    $vic(this.element).attr('data-init', "true");
};
BlogCategory.prototype.append = function ()
{
    $vic('[data-blog-category="' + this.parentId + '"]').children('[role="blogCategory-container"]').first().append(this.newForm);
};
$vic(document).on('submit', '#victoire_blog_settings_form', function(event) {
    event.preventDefault();
    var form = $vic(this);
    var formData = $vic(form).serializeArray();
    formData = $vic.param(formData);
    if ($vic(form).attr('enctype') == 'multipart/form-data') {
        var formData = new FormData($vic(form)[0]);
        var contentType = false;
    }

    $vic.ajax({
        url         : $vic(form).attr('action'),
        context     : document.body,
        data        : formData,
        type        : $vic(form).attr('method'),
        contentType : 'application/x-www-form-urlencoded; charset=UTF-8',
        processData : false,
        async       : true,
        cache       : false,
        success     : function(jsonResponse) {
            if (jsonResponse.hasOwnProperty("url")) {
                congrat(jsonResponse.message, 10000);
                window.location.replace(jsonResponse.url);
            }else{
                $vic('#victoire-blog-settings').html(jsonResponse.html);
                warn(jsonResponse.message, 10000);
            }
        }
    });
});
$vic(document).on('submit', '#victoire_blog_category_form', function(event) {
    event.preventDefault();
    var form = $vic(this);
    var formData = $vic(form).serializeArray();
    formData = $vic.param(formData);
    if ($vic(form).attr('enctype') == 'multipart/form-data') {
        var formData = new FormData($vic(form)[0]);
        var contentType = false;
    }

    $vic.ajax({
        url         : $vic(form).attr('action'),
        context     : document.body,
        data        : formData,
        type        : $vic(form).attr('method'),
        contentType : 'application/x-www-form-urlencoded; charset=UTF-8',
        processData : false,
        async       : true,
        cache       : false,
        success     : function(jsonResponse) {
            if (jsonResponse.hasOwnProperty("url")) {
                congrat(jsonResponse.message, 10000);
                window.location.replace(jsonResponse.url);
            }else{
                $vic('#victoire-blog-category').html(jsonResponse.html);
                warn(jsonResponse.message, 10000);
            }
        }
    });
});


/*
Copyright 2014 Igor Vaynberg

Version: 3.4.8 Timestamp: Thu May  1 09:50:32 EDT 2014

This software is licensed under the Apache License, Version 2.0 (the "Apache License") or the GNU
General Public License version 2 (the "GPL License"). You may choose either license to govern your
use of this software only upon the condition that you accept all of the terms of either the Apache
License or the GPL License.

You may obtain a copy of the Apache License and the GPL License at:

http://www.apache.org/licenses/LICENSE-2.0
http://www.gnu.org/licenses/gpl-2.0.html

Unless required by applicable law or agreed to in writing, software distributed under the Apache License
or the GPL Licesnse is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND,
either express or implied. See the Apache License and the GPL License for the specific language governing
permissions and limitations under the Apache License and the GPL License.
*/
!function(a){"undefined"==typeof a.fn.each2&&a.extend(a.fn,{each2:function(b){for(var c=a([0]),d=-1,e=this.length;++d<e&&(c.context=c[0]=this[d])&&b.call(c[0],d,c)!==!1;);return this}})}($vic),function(a,b){"use strict";function n(b){var c=a(document.createTextNode(""));b.before(c),c.before(b),c.remove()}function o(a){function b(a){return m[a]||a}return a.replace(/[^\u0000-\u007E]/g,b)}function p(a,b){for(var c=0,d=b.length;d>c;c+=1)if(r(a,b[c]))return c;return-1}function q(){var b=a(l);b.appendTo("body");var c={width:b.width()-b[0].clientWidth,height:b.height()-b[0].clientHeight};return b.remove(),c}function r(a,c){return a===c?!0:a===b||c===b?!1:null===a||null===c?!1:a.constructor===String?a+""==c+"":c.constructor===String?c+""==a+"":!1}function s(b,c){var d,e,f;if(null===b||b.length<1)return[];for(d=b.split(c),e=0,f=d.length;f>e;e+=1)d[e]=a.trim(d[e]);return d}function t(a){return a.outerWidth(!1)-a.width()}function u(c){var d="keyup-change-value";c.on("keydown",function(){a.data(c,d)===b&&a.data(c,d,c.val())}),c.on("keyup",function(){var e=a.data(c,d);e!==b&&c.val()!==e&&(a.removeData(c,d),c.trigger("keyup-change"))})}function v(c){c.on("mousemove",function(c){var d=i;(d===b||d.x!==c.pageX||d.y!==c.pageY)&&a(c.target).trigger("mousemove-filtered",c)})}function w(a,c,d){d=d||b;var e;return function(){var b=arguments;window.clearTimeout(e),e=window.setTimeout(function(){c.apply(d,b)},a)}}function x(a,b){var c=w(a,function(a){b.trigger("scroll-debounced",a)});b.on("scroll",function(a){p(a.target,b.get())>=0&&c(a)})}function y(a){a[0]!==document.activeElement&&window.setTimeout(function(){var d,b=a[0],c=a.val().length;a.focus();var e=b.offsetWidth>0||b.offsetHeight>0;e&&b===document.activeElement&&(b.setSelectionRange?b.setSelectionRange(c,c):b.createTextRange&&(d=b.createTextRange(),d.collapse(!1),d.select()))},0)}function z(b){b=a(b)[0];var c=0,d=0;if("selectionStart"in b)c=b.selectionStart,d=b.selectionEnd-c;else if("selection"in document){b.focus();var e=document.selection.createRange();d=document.selection.createRange().text.length,e.moveStart("character",-b.value.length),c=e.text.length-d}return{offset:c,length:d}}function A(a){a.preventDefault(),a.stopPropagation()}function B(a){a.preventDefault(),a.stopImmediatePropagation()}function C(b){if(!h){var c=b[0].currentStyle||window.getComputedStyle(b[0],null);h=a(document.createElement("div")).css({position:"absolute",left:"-10000px",top:"-10000px",display:"none",fontSize:c.fontSize,fontFamily:c.fontFamily,fontStyle:c.fontStyle,fontWeight:c.fontWeight,letterSpacing:c.letterSpacing,textTransform:c.textTransform,whiteSpace:"nowrap"}),h.attr("class","select2-sizer"),a("body").append(h)}return h.text(b.val()),h.width()}function D(b,c,d){var e,g,f=[];e=b.attr("class"),e&&(e=""+e,a(e.split(" ")).each2(function(){0===this.indexOf("select2-")&&f.push(this)})),e=c.attr("class"),e&&(e=""+e,a(e.split(" ")).each2(function(){0!==this.indexOf("select2-")&&(g=d(this),g&&f.push(g))})),b.attr("class",f.join(" "))}function E(a,b,c,d){var e=o(a.toUpperCase()).indexOf(o(b.toUpperCase())),f=b.length;return 0>e?(c.push(d(a)),void 0):(c.push(d(a.substring(0,e))),c.push("<span class='select2-match'>"),c.push(d(a.substring(e,e+f))),c.push("</span>"),c.push(d(a.substring(e+f,a.length))),void 0)}function F(a){var b={"\\":"&#92;","&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#39;","/":"&#47;"};return String(a).replace(/[&<>"'\/\\]/g,function(a){return b[a]})}function G(c){var d,e=null,f=c.quietMillis||100,g=c.url,h=this;return function(i){window.clearTimeout(d),d=window.setTimeout(function(){var d=c.data,f=g,j=c.transport||a.fn.select2.ajaxDefaults.transport,k={type:c.type||"GET",cache:c.cache||!1,jsonpCallback:c.jsonpCallback||b,dataType:c.dataType||"json"},l=a.extend({},a.fn.select2.ajaxDefaults.params,k);d=d?d.call(h,i.term,i.page,i.context):null,f="function"==typeof f?f.call(h,i.term,i.page,i.context):f,e&&"function"==typeof e.abort&&e.abort(),c.params&&(a.isFunction(c.params)?a.extend(l,c.params.call(h)):a.extend(l,c.params)),a.extend(l,{url:f,dataType:c.dataType,data:d,success:function(a){var b=c.results(a,i.page);i.callback(b)}}),e=j.call(h,l)},f)}}function H(b){var d,e,c=b,f=function(a){return""+a.text};a.isArray(c)&&(e=c,c={results:e}),a.isFunction(c)===!1&&(e=c,c=function(){return e});var g=c();return g.text&&(f=g.text,a.isFunction(f)||(d=g.text,f=function(a){return a[d]})),function(b){var g,d=b.term,e={results:[]};return""===d?(b.callback(c()),void 0):(g=function(c,e){var h,i;if(c=c[0],c.children){h={};for(i in c)c.hasOwnProperty(i)&&(h[i]=c[i]);h.children=[],a(c.children).each2(function(a,b){g(b,h.children)}),(h.children.length||b.matcher(d,f(h),c))&&e.push(h)}else b.matcher(d,f(c),c)&&e.push(c)},a(c().results).each2(function(a,b){g(b,e.results)}),b.callback(e),void 0)}}function I(c){var d=a.isFunction(c);return function(e){var f=e.term,g={results:[]},h=d?c(e):c;a.isArray(h)&&(a(h).each(function(){var a=this.text!==b,c=a?this.text:this;(""===f||e.matcher(f,c))&&g.results.push(a?this:{id:this,text:this})}),e.callback(g))}}function J(b,c){if(a.isFunction(b))return!0;if(!b)return!1;if("string"==typeof b)return!0;throw new Error(c+" must be a string, function, or falsy value")}function K(b){if(a.isFunction(b)){var c=Array.prototype.slice.call(arguments,1);return b.apply(null,c)}return b}function L(b){var c=0;return a.each(b,function(a,b){b.children?c+=L(b.children):c++}),c}function M(a,c,d,e){var h,i,j,k,l,f=a,g=!1;if(!e.createSearchChoice||!e.tokenSeparators||e.tokenSeparators.length<1)return b;for(;;){for(i=-1,j=0,k=e.tokenSeparators.length;k>j&&(l=e.tokenSeparators[j],i=a.indexOf(l),!(i>=0));j++);if(0>i)break;if(h=a.substring(0,i),a=a.substring(i+l.length),h.length>0&&(h=e.createSearchChoice.call(this,h,c),h!==b&&null!==h&&e.id(h)!==b&&null!==e.id(h))){for(g=!1,j=0,k=c.length;k>j;j++)if(r(e.id(h),e.id(c[j]))){g=!0;break}g||d(h)}}return f!==a?a:void 0}function N(){var a=this;Array.prototype.forEach.call(arguments,function(b){a[b].remove(),a[b]=null})}function O(b,c){var d=function(){};return d.prototype=new b,d.prototype.constructor=d,d.prototype.parent=b.prototype,d.prototype=a.extend(d.prototype,c),d}if(window.vicSelect2===b){var c,d,e,f,g,h,j,k,i={x:0,y:0},c={TAB:9,ENTER:13,ESC:27,SPACE:32,LEFT:37,UP:38,RIGHT:39,DOWN:40,SHIFT:16,CTRL:17,ALT:18,PAGE_UP:33,PAGE_DOWN:34,HOME:36,END:35,BACKSPACE:8,DELETE:46,isArrow:function(a){switch(a=a.which?a.which:a){case c.LEFT:case c.RIGHT:case c.UP:case c.DOWN:return!0}return!1},isControl:function(a){var b=a.which;switch(b){case c.SHIFT:case c.CTRL:case c.ALT:return!0}return a.metaKey?!0:!1},isFunctionKey:function(a){return a=a.which?a.which:a,a>=112&&123>=a}},l="<div class='select2-measure-scrollbar'></div>",m={"\u24b6":"A","\uff21":"A","\xc0":"A","\xc1":"A","\xc2":"A","\u1ea6":"A","\u1ea4":"A","\u1eaa":"A","\u1ea8":"A","\xc3":"A","\u0100":"A","\u0102":"A","\u1eb0":"A","\u1eae":"A","\u1eb4":"A","\u1eb2":"A","\u0226":"A","\u01e0":"A","\xc4":"A","\u01de":"A","\u1ea2":"A","\xc5":"A","\u01fa":"A","\u01cd":"A","\u0200":"A","\u0202":"A","\u1ea0":"A","\u1eac":"A","\u1eb6":"A","\u1e00":"A","\u0104":"A","\u023a":"A","\u2c6f":"A","\ua732":"AA","\xc6":"AE","\u01fc":"AE","\u01e2":"AE","\ua734":"AO","\ua736":"AU","\ua738":"AV","\ua73a":"AV","\ua73c":"AY","\u24b7":"B","\uff22":"B","\u1e02":"B","\u1e04":"B","\u1e06":"B","\u0243":"B","\u0182":"B","\u0181":"B","\u24b8":"C","\uff23":"C","\u0106":"C","\u0108":"C","\u010a":"C","\u010c":"C","\xc7":"C","\u1e08":"C","\u0187":"C","\u023b":"C","\ua73e":"C","\u24b9":"D","\uff24":"D","\u1e0a":"D","\u010e":"D","\u1e0c":"D","\u1e10":"D","\u1e12":"D","\u1e0e":"D","\u0110":"D","\u018b":"D","\u018a":"D","\u0189":"D","\ua779":"D","\u01f1":"DZ","\u01c4":"DZ","\u01f2":"Dz","\u01c5":"Dz","\u24ba":"E","\uff25":"E","\xc8":"E","\xc9":"E","\xca":"E","\u1ec0":"E","\u1ebe":"E","\u1ec4":"E","\u1ec2":"E","\u1ebc":"E","\u0112":"E","\u1e14":"E","\u1e16":"E","\u0114":"E","\u0116":"E","\xcb":"E","\u1eba":"E","\u011a":"E","\u0204":"E","\u0206":"E","\u1eb8":"E","\u1ec6":"E","\u0228":"E","\u1e1c":"E","\u0118":"E","\u1e18":"E","\u1e1a":"E","\u0190":"E","\u018e":"E","\u24bb":"F","\uff26":"F","\u1e1e":"F","\u0191":"F","\ua77b":"F","\u24bc":"G","\uff27":"G","\u01f4":"G","\u011c":"G","\u1e20":"G","\u011e":"G","\u0120":"G","\u01e6":"G","\u0122":"G","\u01e4":"G","\u0193":"G","\ua7a0":"G","\ua77d":"G","\ua77e":"G","\u24bd":"H","\uff28":"H","\u0124":"H","\u1e22":"H","\u1e26":"H","\u021e":"H","\u1e24":"H","\u1e28":"H","\u1e2a":"H","\u0126":"H","\u2c67":"H","\u2c75":"H","\ua78d":"H","\u24be":"I","\uff29":"I","\xcc":"I","\xcd":"I","\xce":"I","\u0128":"I","\u012a":"I","\u012c":"I","\u0130":"I","\xcf":"I","\u1e2e":"I","\u1ec8":"I","\u01cf":"I","\u0208":"I","\u020a":"I","\u1eca":"I","\u012e":"I","\u1e2c":"I","\u0197":"I","\u24bf":"J","\uff2a":"J","\u0134":"J","\u0248":"J","\u24c0":"K","\uff2b":"K","\u1e30":"K","\u01e8":"K","\u1e32":"K","\u0136":"K","\u1e34":"K","\u0198":"K","\u2c69":"K","\ua740":"K","\ua742":"K","\ua744":"K","\ua7a2":"K","\u24c1":"L","\uff2c":"L","\u013f":"L","\u0139":"L","\u013d":"L","\u1e36":"L","\u1e38":"L","\u013b":"L","\u1e3c":"L","\u1e3a":"L","\u0141":"L","\u023d":"L","\u2c62":"L","\u2c60":"L","\ua748":"L","\ua746":"L","\ua780":"L","\u01c7":"LJ","\u01c8":"Lj","\u24c2":"M","\uff2d":"M","\u1e3e":"M","\u1e40":"M","\u1e42":"M","\u2c6e":"M","\u019c":"M","\u24c3":"N","\uff2e":"N","\u01f8":"N","\u0143":"N","\xd1":"N","\u1e44":"N","\u0147":"N","\u1e46":"N","\u0145":"N","\u1e4a":"N","\u1e48":"N","\u0220":"N","\u019d":"N","\ua790":"N","\ua7a4":"N","\u01ca":"NJ","\u01cb":"Nj","\u24c4":"O","\uff2f":"O","\xd2":"O","\xd3":"O","\xd4":"O","\u1ed2":"O","\u1ed0":"O","\u1ed6":"O","\u1ed4":"O","\xd5":"O","\u1e4c":"O","\u022c":"O","\u1e4e":"O","\u014c":"O","\u1e50":"O","\u1e52":"O","\u014e":"O","\u022e":"O","\u0230":"O","\xd6":"O","\u022a":"O","\u1ece":"O","\u0150":"O","\u01d1":"O","\u020c":"O","\u020e":"O","\u01a0":"O","\u1edc":"O","\u1eda":"O","\u1ee0":"O","\u1ede":"O","\u1ee2":"O","\u1ecc":"O","\u1ed8":"O","\u01ea":"O","\u01ec":"O","\xd8":"O","\u01fe":"O","\u0186":"O","\u019f":"O","\ua74a":"O","\ua74c":"O","\u01a2":"OI","\ua74e":"OO","\u0222":"OU","\u24c5":"P","\uff30":"P","\u1e54":"P","\u1e56":"P","\u01a4":"P","\u2c63":"P","\ua750":"P","\ua752":"P","\ua754":"P","\u24c6":"Q","\uff31":"Q","\ua756":"Q","\ua758":"Q","\u024a":"Q","\u24c7":"R","\uff32":"R","\u0154":"R","\u1e58":"R","\u0158":"R","\u0210":"R","\u0212":"R","\u1e5a":"R","\u1e5c":"R","\u0156":"R","\u1e5e":"R","\u024c":"R","\u2c64":"R","\ua75a":"R","\ua7a6":"R","\ua782":"R","\u24c8":"S","\uff33":"S","\u1e9e":"S","\u015a":"S","\u1e64":"S","\u015c":"S","\u1e60":"S","\u0160":"S","\u1e66":"S","\u1e62":"S","\u1e68":"S","\u0218":"S","\u015e":"S","\u2c7e":"S","\ua7a8":"S","\ua784":"S","\u24c9":"T","\uff34":"T","\u1e6a":"T","\u0164":"T","\u1e6c":"T","\u021a":"T","\u0162":"T","\u1e70":"T","\u1e6e":"T","\u0166":"T","\u01ac":"T","\u01ae":"T","\u023e":"T","\ua786":"T","\ua728":"TZ","\u24ca":"U","\uff35":"U","\xd9":"U","\xda":"U","\xdb":"U","\u0168":"U","\u1e78":"U","\u016a":"U","\u1e7a":"U","\u016c":"U","\xdc":"U","\u01db":"U","\u01d7":"U","\u01d5":"U","\u01d9":"U","\u1ee6":"U","\u016e":"U","\u0170":"U","\u01d3":"U","\u0214":"U","\u0216":"U","\u01af":"U","\u1eea":"U","\u1ee8":"U","\u1eee":"U","\u1eec":"U","\u1ef0":"U","\u1ee4":"U","\u1e72":"U","\u0172":"U","\u1e76":"U","\u1e74":"U","\u0244":"U","\u24cb":"V","\uff36":"V","\u1e7c":"V","\u1e7e":"V","\u01b2":"V","\ua75e":"V","\u0245":"V","\ua760":"VY","\u24cc":"W","\uff37":"W","\u1e80":"W","\u1e82":"W","\u0174":"W","\u1e86":"W","\u1e84":"W","\u1e88":"W","\u2c72":"W","\u24cd":"X","\uff38":"X","\u1e8a":"X","\u1e8c":"X","\u24ce":"Y","\uff39":"Y","\u1ef2":"Y","\xdd":"Y","\u0176":"Y","\u1ef8":"Y","\u0232":"Y","\u1e8e":"Y","\u0178":"Y","\u1ef6":"Y","\u1ef4":"Y","\u01b3":"Y","\u024e":"Y","\u1efe":"Y","\u24cf":"Z","\uff3a":"Z","\u0179":"Z","\u1e90":"Z","\u017b":"Z","\u017d":"Z","\u1e92":"Z","\u1e94":"Z","\u01b5":"Z","\u0224":"Z","\u2c7f":"Z","\u2c6b":"Z","\ua762":"Z","\u24d0":"a","\uff41":"a","\u1e9a":"a","\xe0":"a","\xe1":"a","\xe2":"a","\u1ea7":"a","\u1ea5":"a","\u1eab":"a","\u1ea9":"a","\xe3":"a","\u0101":"a","\u0103":"a","\u1eb1":"a","\u1eaf":"a","\u1eb5":"a","\u1eb3":"a","\u0227":"a","\u01e1":"a","\xe4":"a","\u01df":"a","\u1ea3":"a","\xe5":"a","\u01fb":"a","\u01ce":"a","\u0201":"a","\u0203":"a","\u1ea1":"a","\u1ead":"a","\u1eb7":"a","\u1e01":"a","\u0105":"a","\u2c65":"a","\u0250":"a","\ua733":"aa","\xe6":"ae","\u01fd":"ae","\u01e3":"ae","\ua735":"ao","\ua737":"au","\ua739":"av","\ua73b":"av","\ua73d":"ay","\u24d1":"b","\uff42":"b","\u1e03":"b","\u1e05":"b","\u1e07":"b","\u0180":"b","\u0183":"b","\u0253":"b","\u24d2":"c","\uff43":"c","\u0107":"c","\u0109":"c","\u010b":"c","\u010d":"c","\xe7":"c","\u1e09":"c","\u0188":"c","\u023c":"c","\ua73f":"c","\u2184":"c","\u24d3":"d","\uff44":"d","\u1e0b":"d","\u010f":"d","\u1e0d":"d","\u1e11":"d","\u1e13":"d","\u1e0f":"d","\u0111":"d","\u018c":"d","\u0256":"d","\u0257":"d","\ua77a":"d","\u01f3":"dz","\u01c6":"dz","\u24d4":"e","\uff45":"e","\xe8":"e","\xe9":"e","\xea":"e","\u1ec1":"e","\u1ebf":"e","\u1ec5":"e","\u1ec3":"e","\u1ebd":"e","\u0113":"e","\u1e15":"e","\u1e17":"e","\u0115":"e","\u0117":"e","\xeb":"e","\u1ebb":"e","\u011b":"e","\u0205":"e","\u0207":"e","\u1eb9":"e","\u1ec7":"e","\u0229":"e","\u1e1d":"e","\u0119":"e","\u1e19":"e","\u1e1b":"e","\u0247":"e","\u025b":"e","\u01dd":"e","\u24d5":"f","\uff46":"f","\u1e1f":"f","\u0192":"f","\ua77c":"f","\u24d6":"g","\uff47":"g","\u01f5":"g","\u011d":"g","\u1e21":"g","\u011f":"g","\u0121":"g","\u01e7":"g","\u0123":"g","\u01e5":"g","\u0260":"g","\ua7a1":"g","\u1d79":"g","\ua77f":"g","\u24d7":"h","\uff48":"h","\u0125":"h","\u1e23":"h","\u1e27":"h","\u021f":"h","\u1e25":"h","\u1e29":"h","\u1e2b":"h","\u1e96":"h","\u0127":"h","\u2c68":"h","\u2c76":"h","\u0265":"h","\u0195":"hv","\u24d8":"i","\uff49":"i","\xec":"i","\xed":"i","\xee":"i","\u0129":"i","\u012b":"i","\u012d":"i","\xef":"i","\u1e2f":"i","\u1ec9":"i","\u01d0":"i","\u0209":"i","\u020b":"i","\u1ecb":"i","\u012f":"i","\u1e2d":"i","\u0268":"i","\u0131":"i","\u24d9":"j","\uff4a":"j","\u0135":"j","\u01f0":"j","\u0249":"j","\u24da":"k","\uff4b":"k","\u1e31":"k","\u01e9":"k","\u1e33":"k","\u0137":"k","\u1e35":"k","\u0199":"k","\u2c6a":"k","\ua741":"k","\ua743":"k","\ua745":"k","\ua7a3":"k","\u24db":"l","\uff4c":"l","\u0140":"l","\u013a":"l","\u013e":"l","\u1e37":"l","\u1e39":"l","\u013c":"l","\u1e3d":"l","\u1e3b":"l","\u017f":"l","\u0142":"l","\u019a":"l","\u026b":"l","\u2c61":"l","\ua749":"l","\ua781":"l","\ua747":"l","\u01c9":"lj","\u24dc":"m","\uff4d":"m","\u1e3f":"m","\u1e41":"m","\u1e43":"m","\u0271":"m","\u026f":"m","\u24dd":"n","\uff4e":"n","\u01f9":"n","\u0144":"n","\xf1":"n","\u1e45":"n","\u0148":"n","\u1e47":"n","\u0146":"n","\u1e4b":"n","\u1e49":"n","\u019e":"n","\u0272":"n","\u0149":"n","\ua791":"n","\ua7a5":"n","\u01cc":"nj","\u24de":"o","\uff4f":"o","\xf2":"o","\xf3":"o","\xf4":"o","\u1ed3":"o","\u1ed1":"o","\u1ed7":"o","\u1ed5":"o","\xf5":"o","\u1e4d":"o","\u022d":"o","\u1e4f":"o","\u014d":"o","\u1e51":"o","\u1e53":"o","\u014f":"o","\u022f":"o","\u0231":"o","\xf6":"o","\u022b":"o","\u1ecf":"o","\u0151":"o","\u01d2":"o","\u020d":"o","\u020f":"o","\u01a1":"o","\u1edd":"o","\u1edb":"o","\u1ee1":"o","\u1edf":"o","\u1ee3":"o","\u1ecd":"o","\u1ed9":"o","\u01eb":"o","\u01ed":"o","\xf8":"o","\u01ff":"o","\u0254":"o","\ua74b":"o","\ua74d":"o","\u0275":"o","\u01a3":"oi","\u0223":"ou","\ua74f":"oo","\u24df":"p","\uff50":"p","\u1e55":"p","\u1e57":"p","\u01a5":"p","\u1d7d":"p","\ua751":"p","\ua753":"p","\ua755":"p","\u24e0":"q","\uff51":"q","\u024b":"q","\ua757":"q","\ua759":"q","\u24e1":"r","\uff52":"r","\u0155":"r","\u1e59":"r","\u0159":"r","\u0211":"r","\u0213":"r","\u1e5b":"r","\u1e5d":"r","\u0157":"r","\u1e5f":"r","\u024d":"r","\u027d":"r","\ua75b":"r","\ua7a7":"r","\ua783":"r","\u24e2":"s","\uff53":"s","\xdf":"s","\u015b":"s","\u1e65":"s","\u015d":"s","\u1e61":"s","\u0161":"s","\u1e67":"s","\u1e63":"s","\u1e69":"s","\u0219":"s","\u015f":"s","\u023f":"s","\ua7a9":"s","\ua785":"s","\u1e9b":"s","\u24e3":"t","\uff54":"t","\u1e6b":"t","\u1e97":"t","\u0165":"t","\u1e6d":"t","\u021b":"t","\u0163":"t","\u1e71":"t","\u1e6f":"t","\u0167":"t","\u01ad":"t","\u0288":"t","\u2c66":"t","\ua787":"t","\ua729":"tz","\u24e4":"u","\uff55":"u","\xf9":"u","\xfa":"u","\xfb":"u","\u0169":"u","\u1e79":"u","\u016b":"u","\u1e7b":"u","\u016d":"u","\xfc":"u","\u01dc":"u","\u01d8":"u","\u01d6":"u","\u01da":"u","\u1ee7":"u","\u016f":"u","\u0171":"u","\u01d4":"u","\u0215":"u","\u0217":"u","\u01b0":"u","\u1eeb":"u","\u1ee9":"u","\u1eef":"u","\u1eed":"u","\u1ef1":"u","\u1ee5":"u","\u1e73":"u","\u0173":"u","\u1e77":"u","\u1e75":"u","\u0289":"u","\u24e5":"v","\uff56":"v","\u1e7d":"v","\u1e7f":"v","\u028b":"v","\ua75f":"v","\u028c":"v","\ua761":"vy","\u24e6":"w","\uff57":"w","\u1e81":"w","\u1e83":"w","\u0175":"w","\u1e87":"w","\u1e85":"w","\u1e98":"w","\u1e89":"w","\u2c73":"w","\u24e7":"x","\uff58":"x","\u1e8b":"x","\u1e8d":"x","\u24e8":"y","\uff59":"y","\u1ef3":"y","\xfd":"y","\u0177":"y","\u1ef9":"y","\u0233":"y","\u1e8f":"y","\xff":"y","\u1ef7":"y","\u1e99":"y","\u1ef5":"y","\u01b4":"y","\u024f":"y","\u1eff":"y","\u24e9":"z","\uff5a":"z","\u017a":"z","\u1e91":"z","\u017c":"z","\u017e":"z","\u1e93":"z","\u1e95":"z","\u01b6":"z","\u0225":"z","\u0240":"z","\u2c6c":"z","\ua763":"z"};j=a(document),g=function(){var a=1;return function(){return a++}}(),j.on("mousemove",function(a){i.x=a.pageX,i.y=a.pageY}),d=O(Object,{bind:function(a){var b=this;return function(){a.apply(b,arguments)}},init:function(c){var d,e,f=".select2-results";this.opts=c=this.prepareOpts(c),this.id=c.id,c.element.data("select2")!==b&&null!==c.element.data("select2")&&c.element.data("select2").destroy(),this.container=this.createContainer(),this.liveRegion=a("<span>",{role:"status","aria-live":"polite"}).addClass("select2-hidden-accessible").appendTo(document.body),this.containerId="s2id_"+(c.element.attr("id")||"autogen"+g()),this.containerEventName=this.containerId.replace(/([.])/g,"_").replace(/([;&,\-\.\+\*\~':"\!\^#$%@\[\]\(\)=>\|])/g,"\\$1"),this.container.attr("id",this.containerId),this.container.attr("title",c.element.attr("title")),this.body=a("body"),D(this.container,this.opts.element,this.opts.adaptContainerCssClass),this.container.attr("style",c.element.attr("style")),this.container.css(K(c.containerCss)),this.container.addClass(K(c.containerCssClass)),this.elementTabIndex=this.opts.element.attr("tabindex"),this.opts.element.data("select2",this).attr("tabindex","-1").before(this.container).on("click.select2",A),this.container.data("select2",this),this.dropdown=this.container.find(".select2-drop"),D(this.dropdown,this.opts.element,this.opts.adaptDropdownCssClass),this.dropdown.addClass(K(c.dropdownCssClass)),this.dropdown.data("select2",this),this.dropdown.on("click",A),this.results=d=this.container.find(f),this.search=e=this.container.find("input.select2-input"),this.queryCount=0,this.resultsPage=0,this.context=null,this.initContainer(),this.container.on("click",A),v(this.results),this.dropdown.on("mousemove-filtered",f,this.bind(this.highlightUnderEvent)),this.dropdown.on("touchstart touchmove touchend",f,this.bind(function(a){this._touchEvent=!0,this.highlightUnderEvent(a)})),this.dropdown.on("touchmove",f,this.bind(this.touchMoved)),this.dropdown.on("touchstart touchend",f,this.bind(this.clearTouchMoved)),this.dropdown.on("click",this.bind(function(){this._touchEvent&&(this._touchEvent=!1,this.selectHighlighted())})),x(80,this.results),this.dropdown.on("scroll-debounced",f,this.bind(this.loadMoreIfNeeded)),a(this.container).on("change",".select2-input",function(a){a.stopPropagation()}),a(this.dropdown).on("change",".select2-input",function(a){a.stopPropagation()}),a.fn.mousewheel&&d.mousewheel(function(a,b,c,e){var f=d.scrollTop();e>0&&0>=f-e?(d.scrollTop(0),A(a)):0>e&&d.get(0).scrollHeight-d.scrollTop()+e<=d.height()&&(d.scrollTop(d.get(0).scrollHeight-d.height()),A(a))}),u(e),e.on("keyup-change input paste",this.bind(this.updateResults)),e.on("focus",function(){e.addClass("select2-focused")}),e.on("blur",function(){e.removeClass("select2-focused")}),this.dropdown.on("mouseup",f,this.bind(function(b){a(b.target).closest(".select2-result-selectable").length>0&&(this.highlightUnderEvent(b),this.selectHighlighted(b))})),this.dropdown.on("click mouseup mousedown touchstart touchend focusin",function(a){a.stopPropagation()}),this.nextSearchTerm=b,a.isFunction(this.opts.initSelection)&&(this.initSelection(),this.monitorSource()),null!==c.maximumInputLength&&this.search.attr("maxlength",c.maximumInputLength);var h=c.element.prop("disabled");h===b&&(h=!1),this.enable(!h);var i=c.element.prop("readonly");i===b&&(i=!1),this.readonly(i),k=k||q(),this.autofocus=c.element.prop("autofocus"),c.element.prop("autofocus",!1),this.autofocus&&this.focus(),this.search.attr("placeholder",c.searchInputPlaceholder)},destroy:function(){var a=this.opts.element,c=a.data("select2");this.close(),this.propertyObserver&&(this.propertyObserver.disconnect(),this.propertyObserver=null),c!==b&&(c.container.remove(),c.liveRegion.remove(),c.dropdown.remove(),a.removeClass("select2-offscreen").removeData("select2").off(".select2").prop("autofocus",this.autofocus||!1),this.elementTabIndex?a.attr({tabindex:this.elementTabIndex}):a.removeAttr("tabindex"),a.show()),N.call(this,"container","liveRegion","dropdown","results","search")},optionToData:function(a){return a.is("option")?{id:a.prop("value"),text:a.text(),element:a.get(),css:a.attr("class"),disabled:a.prop("disabled"),locked:r(a.attr("locked"),"locked")||r(a.data("locked"),!0)}:a.is("optgroup")?{text:a.attr("label"),children:[],element:a.get(),css:a.attr("class")}:void 0},prepareOpts:function(c){var d,e,f,h,i=this;if(d=c.element,"select"===d.get(0).tagName.toLowerCase()&&(this.select=e=c.element),e&&a.each(["id","multiple","ajax","query","createSearchChoice","initSelection","data","tags"],function(){if(this in c)throw new Error("Option '"+this+"' is not allowed for Select2 when attached to a <select> element.")}),c=a.extend({},{populateResults:function(d,e,f){var h,j=this.opts.id,k=this.liveRegion;h=function(d,e,l){var m,n,o,p,q,r,s,t,u,v;for(d=c.sortResults(d,e,f),m=0,n=d.length;n>m;m+=1)o=d[m],q=o.disabled===!0,p=!q&&j(o)!==b,r=o.children&&o.children.length>0,s=a("<li></li>"),s.addClass("select2-results-dept-"+l),s.addClass("select2-result"),s.addClass(p?"select2-result-selectable":"select2-result-unselectable"),q&&s.addClass("select2-disabled"),r&&s.addClass("select2-result-with-children"),s.addClass(i.opts.formatResultCssClass(o)),s.attr("role","presentation"),t=a(document.createElement("div")),t.addClass("select2-result-label"),t.attr("id","select2-result-label-"+g()),t.attr("role","option"),v=c.formatResult(o,t,f,i.opts.escapeMarkup),v!==b&&(t.html(v),s.append(t)),r&&(u=a("<ul></ul>"),u.addClass("select2-result-sub"),h(o.children,u,l+1),s.append(u)),s.data("select2-data",o),e.append(s);k.text(c.formatMatches(d.length))},h(e,d,0)}},a.fn.select2.defaults,c),"function"!=typeof c.id&&(f=c.id,c.id=function(a){return a[f]}),a.isArray(c.element.data("select2Tags"))){if("tags"in c)throw"tags specified as both an attribute 'data-select2-tags' and in options of Select2 "+c.element.attr("id");c.tags=c.element.data("select2Tags")}if(e?(c.query=this.bind(function(a){var f,g,h,c={results:[],more:!1},e=a.term;h=function(b,c){var d;b.is("option")?a.matcher(e,b.text(),b)&&c.push(i.optionToData(b)):b.is("optgroup")&&(d=i.optionToData(b),b.children().each2(function(a,b){h(b,d.children)}),d.children.length>0&&c.push(d))},f=d.children(),this.getPlaceholder()!==b&&f.length>0&&(g=this.getPlaceholderOption(),g&&(f=f.not(g))),f.each2(function(a,b){h(b,c.results)}),a.callback(c)}),c.id=function(a){return a.id}):"query"in c||("ajax"in c?(h=c.element.data("ajax-url"),h&&h.length>0&&(c.ajax.url=h),c.query=G.call(c.element,c.ajax)):"data"in c?c.query=H(c.data):"tags"in c&&(c.query=I(c.tags),c.createSearchChoice===b&&(c.createSearchChoice=function(b){return{id:a.trim(b),text:a.trim(b)}}),c.initSelection===b&&(c.initSelection=function(b,d){var e=[];a(s(b.val(),c.separator)).each(function(){var b={id:this,text:this},d=c.tags;a.isFunction(d)&&(d=d()),a(d).each(function(){return r(this.id,b.id)?(b=this,!1):void 0}),e.push(b)}),d(e)}))),"function"!=typeof c.query)throw"query function not defined for Select2 "+c.element.attr("id");if("top"===c.createSearchChoicePosition)c.createSearchChoicePosition=function(a,b){a.unshift(b)};else if("bottom"===c.createSearchChoicePosition)c.createSearchChoicePosition=function(a,b){a.push(b)};else if("function"!=typeof c.createSearchChoicePosition)throw"invalid createSearchChoicePosition option must be 'top', 'bottom' or a custom function";return c},monitorSource:function(){var c,d,a=this.opts.element;a.on("change.select2",this.bind(function(){this.opts.element.data("select2-change-triggered")!==!0&&this.initSelection()})),c=this.bind(function(){var c=a.prop("disabled");c===b&&(c=!1),this.enable(!c);var d=a.prop("readonly");d===b&&(d=!1),this.readonly(d),D(this.container,this.opts.element,this.opts.adaptContainerCssClass),this.container.addClass(K(this.opts.containerCssClass)),D(this.dropdown,this.opts.element,this.opts.adaptDropdownCssClass),this.dropdown.addClass(K(this.opts.dropdownCssClass))}),a.length&&a[0].attachEvent&&a.each(function(){this.attachEvent("onpropertychange",c)}),d=window.MutationObserver||window.WebKitMutationObserver||window.MozMutationObserver,d!==b&&(this.propertyObserver&&(delete this.propertyObserver,this.propertyObserver=null),this.propertyObserver=new d(function(a){a.forEach(c)}),this.propertyObserver.observe(a.get(0),{attributes:!0,subtree:!1}))},triggerSelect:function(b){var c=a.Event("select2-selecting",{val:this.id(b),object:b});return this.opts.element.trigger(c),!c.isDefaultPrevented()},triggerChange:function(b){b=b||{},b=a.extend({},b,{type:"change",val:this.val()}),this.opts.element.data("select2-change-triggered",!0),this.opts.element.trigger(b),this.opts.element.data("select2-change-triggered",!1),this.opts.element.click(),this.opts.blurOnChange&&this.opts.element.blur()},isInterfaceEnabled:function(){return this.enabledInterface===!0},enableInterface:function(){var a=this._enabled&&!this._readonly,b=!a;return a===this.enabledInterface?!1:(this.container.toggleClass("select2-container-disabled",b),this.close(),this.enabledInterface=a,!0)},enable:function(a){a===b&&(a=!0),this._enabled!==a&&(this._enabled=a,this.opts.element.prop("disabled",!a),this.enableInterface())},disable:function(){this.enable(!1)},readonly:function(a){a===b&&(a=!1),this._readonly!==a&&(this._readonly=a,this.opts.element.prop("readonly",a),this.enableInterface())},opened:function(){return this.container.hasClass("select2-dropdown-open")},positionDropdown:function(){var t,u,v,w,x,b=this.dropdown,c=this.container.offset(),d=this.container.outerHeight(!1),e=this.container.outerWidth(!1),f=b.outerHeight(!1),g=a(window),h=g.width(),i=g.height(),j=g.scrollLeft()+h,l=g.scrollTop()+i,m=c.top+d,n=c.left,o=l>=m+f,p=c.top-f>=g.scrollTop(),q=b.outerWidth(!1),r=j>=n+q,s=b.hasClass("select2-drop-above");s?(u=!0,!p&&o&&(v=!0,u=!1)):(u=!1,!o&&p&&(v=!0,u=!0)),v&&(b.hide(),c=this.container.offset(),d=this.container.outerHeight(!1),e=this.container.outerWidth(!1),f=b.outerHeight(!1),j=g.scrollLeft()+h,l=g.scrollTop()+i,m=c.top+d,n=c.left,q=b.outerWidth(!1),r=j>=n+q,b.show(),this.focusSearch()),this.opts.dropdownAutoWidth?(x=a(".select2-results",b)[0],b.addClass("select2-drop-auto-width"),b.css("width",""),q=b.outerWidth(!1)+(x.scrollHeight===x.clientHeight?0:k.width),q>e?e=q:q=e,f=b.outerHeight(!1),r=j>=n+q):this.container.removeClass("select2-drop-auto-width"),"static"!==this.body.css("position")&&(t=this.body.offset(),m-=t.top,n-=t.left),r||(n=c.left+this.container.outerWidth(!1)-q),w={left:n,width:e},u?(w.top=c.top-f,w.bottom="auto",this.container.addClass("select2-drop-above"),b.addClass("select2-drop-above")):(w.top=m,w.bottom="auto",this.container.removeClass("select2-drop-above"),b.removeClass("select2-drop-above")),w=a.extend(w,K(this.opts.dropdownCss)),b.css(w)},shouldOpen:function(){var b;return this.opened()?!1:this._enabled===!1||this._readonly===!0?!1:(b=a.Event("select2-opening"),this.opts.element.trigger(b),!b.isDefaultPrevented())},clearDropdownAlignmentPreference:function(){this.container.removeClass("select2-drop-above"),this.dropdown.removeClass("select2-drop-above")},open:function(){return this.shouldOpen()?(this.opening(),!0):!1},opening:function(){var f,b=this.containerEventName,c="scroll."+b,d="resize."+b,e="orientationchange."+b;this.container.addClass("select2-dropdown-open").addClass("select2-container-active"),this.clearDropdownAlignmentPreference(),this.dropdown[0]!==this.body.children().last()[0]&&this.dropdown.detach().appendTo(this.body),f=a("#select2-drop-mask"),0==f.length&&(f=a(document.createElement("div")),f.attr("id","select2-drop-mask").attr("class","select2-drop-mask"),f.hide(),f.appendTo(this.body),f.on("mousedown touchstart click",function(b){n(f);var d,c=a("#select2-drop");c.length>0&&(d=c.data("select2"),d.opts.selectOnBlur&&d.selectHighlighted({noFocus:!0}),d.close(),b.preventDefault(),b.stopPropagation())})),this.dropdown.prev()[0]!==f[0]&&this.dropdown.before(f),a("#select2-drop").removeAttr("id"),this.dropdown.attr("id","select2-drop"),f.show(),this.positionDropdown(),this.dropdown.show(),this.positionDropdown(),this.dropdown.addClass("select2-drop-active");var g=this;this.container.parents().add(window).each(function(){a(this).on(d+" "+c+" "+e,function(){g.opened()&&g.positionDropdown()})})},close:function(){if(this.opened()){var b=this.containerEventName,c="scroll."+b,d="resize."+b,e="orientationchange."+b;this.container.parents().add(window).each(function(){a(this).off(c).off(d).off(e)}),this.clearDropdownAlignmentPreference(),a("#select2-drop-mask").hide(),this.dropdown.removeAttr("id"),this.dropdown.hide(),this.container.removeClass("select2-dropdown-open").removeClass("select2-container-active"),this.results.empty(),this.clearSearch(),this.search.removeClass("select2-active"),this.opts.element.trigger(a.Event("select2-close"))}},externalSearch:function(a){this.open(),this.search.val(a),this.updateResults(!1)},clearSearch:function(){},getMaximumSelectionSize:function(){return K(this.opts.maximumSelectionSize)},ensureHighlightVisible:function(){var c,d,e,f,g,h,i,b=this.results;if(d=this.highlight(),!(0>d)){if(0==d)return b.scrollTop(0),void 0;c=this.findHighlightableChoices().find(".select2-result-label"),e=a(c[d]),f=e.offset().top+e.outerHeight(!0),d===c.length-1&&(i=b.find("li.select2-more-results"),i.length>0&&(f=i.offset().top+i.outerHeight(!0))),g=b.offset().top+b.outerHeight(!0),f>g&&b.scrollTop(b.scrollTop()+(f-g)),h=e.offset().top-b.offset().top,0>h&&"none"!=e.css("display")&&b.scrollTop(b.scrollTop()+h)}},findHighlightableChoices:function(){return this.results.find(".select2-result-selectable:not(.select2-disabled):not(.select2-selected)")},moveHighlight:function(b){for(var c=this.findHighlightableChoices(),d=this.highlight();d>-1&&d<c.length;){d+=b;var e=a(c[d]);if(e.hasClass("select2-result-selectable")&&!e.hasClass("select2-disabled")&&!e.hasClass("select2-selected")){this.highlight(d);break}}},highlight:function(b){var d,e,c=this.findHighlightableChoices();return 0===arguments.length?p(c.filter(".select2-highlighted")[0],c.get()):(b>=c.length&&(b=c.length-1),0>b&&(b=0),this.removeHighlight(),d=a(c[b]),d.addClass("select2-highlighted"),this.search.attr("aria-activedescendant",d.find(".select2-result-label").attr("id")),this.ensureHighlightVisible(),this.liveRegion.text(d.text()),e=d.data("select2-data"),e&&this.opts.element.trigger({type:"select2-highlight",val:this.id(e),choice:e}),void 0)},removeHighlight:function(){this.results.find(".select2-highlighted").removeClass("select2-highlighted")},touchMoved:function(){this._touchMoved=!0},clearTouchMoved:function(){this._touchMoved=!1},countSelectableResults:function(){return this.findHighlightableChoices().length
},highlightUnderEvent:function(b){var c=a(b.target).closest(".select2-result-selectable");if(c.length>0&&!c.is(".select2-highlighted")){var d=this.findHighlightableChoices();this.highlight(d.index(c))}else 0==c.length&&this.removeHighlight()},loadMoreIfNeeded:function(){var c,a=this.results,b=a.find("li.select2-more-results"),d=this.resultsPage+1,e=this,f=this.search.val(),g=this.context;0!==b.length&&(c=b.offset().top-a.offset().top-a.height(),c<=this.opts.loadMorePadding&&(b.addClass("select2-active"),this.opts.query({element:this.opts.element,term:f,page:d,context:g,matcher:this.opts.matcher,callback:this.bind(function(c){e.opened()&&(e.opts.populateResults.call(this,a,c.results,{term:f,page:d,context:g}),e.postprocessResults(c,!1,!1),c.more===!0?(b.detach().appendTo(a).text(K(e.opts.formatLoadMore,d+1)),window.setTimeout(function(){e.loadMoreIfNeeded()},10)):b.remove(),e.positionDropdown(),e.resultsPage=d,e.context=c.context,this.opts.element.trigger({type:"select2-loaded",items:c}))})})))},tokenize:function(){},updateResults:function(c){function m(){d.removeClass("select2-active"),h.positionDropdown(),e.find(".select2-no-results,.select2-selection-limit,.select2-searching").length?h.liveRegion.text(e.text()):h.liveRegion.text(h.opts.formatMatches(e.find(".select2-result-selectable").length))}function n(a){e.html(a),m()}var g,i,l,d=this.search,e=this.results,f=this.opts,h=this,j=d.val(),k=a.data(this.container,"select2-last-term");if((c===!0||!k||!r(j,k))&&(a.data(this.container,"select2-last-term",j),c===!0||this.showSearchInput!==!1&&this.opened())){l=++this.queryCount;var o=this.getMaximumSelectionSize();if(o>=1&&(g=this.data(),a.isArray(g)&&g.length>=o&&J(f.formatSelectionTooBig,"formatSelectionTooBig")))return n("<li class='select2-selection-limit'>"+K(f.formatSelectionTooBig,o)+"</li>"),void 0;if(d.val().length<f.minimumInputLength)return J(f.formatInputTooShort,"formatInputTooShort")?n("<li class='select2-no-results'>"+K(f.formatInputTooShort,d.val(),f.minimumInputLength)+"</li>"):n(""),c&&this.showSearch&&this.showSearch(!0),void 0;if(f.maximumInputLength&&d.val().length>f.maximumInputLength)return J(f.formatInputTooLong,"formatInputTooLong")?n("<li class='select2-no-results'>"+K(f.formatInputTooLong,d.val(),f.maximumInputLength)+"</li>"):n(""),void 0;f.formatSearching&&0===this.findHighlightableChoices().length&&n("<li class='select2-searching'>"+K(f.formatSearching)+"</li>"),d.addClass("select2-active"),this.removeHighlight(),i=this.tokenize(),i!=b&&null!=i&&d.val(i),this.resultsPage=1,f.query({element:f.element,term:d.val(),page:this.resultsPage,context:null,matcher:f.matcher,callback:this.bind(function(g){var i;if(l==this.queryCount){if(!this.opened())return this.search.removeClass("select2-active"),void 0;if(this.context=g.context===b?null:g.context,this.opts.createSearchChoice&&""!==d.val()&&(i=this.opts.createSearchChoice.call(h,d.val(),g.results),i!==b&&null!==i&&h.id(i)!==b&&null!==h.id(i)&&0===a(g.results).filter(function(){return r(h.id(this),h.id(i))}).length&&this.opts.createSearchChoicePosition(g.results,i)),0===g.results.length&&J(f.formatNoMatches,"formatNoMatches"))return n("<li class='select2-no-results'>"+K(f.formatNoMatches,d.val())+"</li>"),void 0;e.empty(),h.opts.populateResults.call(this,e,g.results,{term:d.val(),page:this.resultsPage,context:null}),g.more===!0&&J(f.formatLoadMore,"formatLoadMore")&&(e.append("<li class='select2-more-results'>"+h.opts.escapeMarkup(K(f.formatLoadMore,this.resultsPage))+"</li>"),window.setTimeout(function(){h.loadMoreIfNeeded()},10)),this.postprocessResults(g,c),m(),this.opts.element.trigger({type:"select2-loaded",items:g})}})})}},cancel:function(){this.close()},blur:function(){this.opts.selectOnBlur&&this.selectHighlighted({noFocus:!0}),this.close(),this.container.removeClass("select2-container-active"),this.search[0]===document.activeElement&&this.search.blur(),this.clearSearch(),this.selection.find(".select2-search-choice-focus").removeClass("select2-search-choice-focus")},focusSearch:function(){y(this.search)},selectHighlighted:function(a){if(this._touchMoved)return this.clearTouchMoved(),void 0;var b=this.highlight(),c=this.results.find(".select2-highlighted"),d=c.closest(".select2-result").data("select2-data");d?(this.highlight(b),this.onSelect(d,a)):a&&a.noFocus&&this.close()},getPlaceholder:function(){var a;return this.opts.element.attr("placeholder")||this.opts.element.attr("data-placeholder")||this.opts.element.data("placeholder")||this.opts.placeholder||((a=this.getPlaceholderOption())!==b?a.text():b)},getPlaceholderOption:function(){if(this.select){var c=this.select.children("option").first();if(this.opts.placeholderOption!==b)return"first"===this.opts.placeholderOption&&c||"function"==typeof this.opts.placeholderOption&&this.opts.placeholderOption(this.select);if(""===a.trim(c.text())&&""===c.val())return c}},initContainerWidth:function(){function c(){var c,d,e,f,g,h;if("off"===this.opts.width)return null;if("element"===this.opts.width)return 0===this.opts.element.outerWidth(!1)?"auto":this.opts.element.outerWidth(!1)+"px";if("copy"===this.opts.width||"resolve"===this.opts.width){if(c=this.opts.element.attr("style"),c!==b)for(d=c.split(";"),f=0,g=d.length;g>f;f+=1)if(h=d[f].replace(/\s/g,""),e=h.match(/^width:(([-+]?([0-9]*\.)?[0-9]+)(px|em|ex|%|in|cm|mm|pt|pc))/i),null!==e&&e.length>=1)return e[1];return"resolve"===this.opts.width?(c=this.opts.element.css("width"),c.indexOf("%")>0?c:0===this.opts.element.outerWidth(!1)?"auto":this.opts.element.outerWidth(!1)+"px"):null}return a.isFunction(this.opts.width)?this.opts.width():this.opts.width}var d=c.call(this);null!==d&&this.container.css("width",d)}}),e=O(d,{createContainer:function(){var b=a(document.createElement("div")).attr({"class":"select2-container"}).html(["<a href='javascript:void(0)' class='select2-choice' tabindex='-1'>","   <span class='select2-chosen'>&#160;</span><abbr class='select2-search-choice-close'></abbr>","   <span class='select2-arrow' role='presentation'><b role='presentation'></b></span>","</a>","<label for='' class='select2-offscreen'></label>","<input class='select2-focusser select2-offscreen' type='text' aria-haspopup='true' role='button' />","<div class='select2-drop select2-display-none'>","   <div class='select2-search'>","       <label for='' class='select2-offscreen'></label>","       <input type='text' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' class='select2-input' role='combobox' aria-expanded='true'","       aria-autocomplete='list' />","   </div>","   <ul class='select2-results' role='listbox'>","   </ul>","</div>"].join(""));return b},enableInterface:function(){this.parent.enableInterface.apply(this,arguments)&&this.focusser.prop("disabled",!this.isInterfaceEnabled())},opening:function(){var c,d,e;this.opts.minimumResultsForSearch>=0&&this.showSearch(!0),this.parent.opening.apply(this,arguments),this.showSearchInput!==!1&&this.search.val(this.focusser.val()),this.opts.shouldFocusInput(this)&&(this.search.focus(),c=this.search.get(0),c.createTextRange?(d=c.createTextRange(),d.collapse(!1),d.select()):c.setSelectionRange&&(e=this.search.val().length,c.setSelectionRange(e,e))),""===this.search.val()&&this.nextSearchTerm!=b&&(this.search.val(this.nextSearchTerm),this.search.select()),this.focusser.prop("disabled",!0).val(""),this.updateResults(!0),this.opts.element.trigger(a.Event("select2-open"))},close:function(){this.opened()&&(this.parent.close.apply(this,arguments),this.focusser.prop("disabled",!1),this.opts.shouldFocusInput(this)&&this.focusser.focus())},focus:function(){this.opened()?this.close():(this.focusser.prop("disabled",!1),this.opts.shouldFocusInput(this)&&this.focusser.focus())},isFocused:function(){return this.container.hasClass("select2-container-active")},cancel:function(){this.parent.cancel.apply(this,arguments),this.focusser.prop("disabled",!1),this.opts.shouldFocusInput(this)&&this.focusser.focus()},destroy:function(){a("label[for='"+this.focusser.attr("id")+"']").attr("for",this.opts.element.attr("id")),this.parent.destroy.apply(this,arguments),N.call(this,"selection","focusser")},initContainer:function(){var b,h,d=this.container,e=this.dropdown,f=g();this.opts.minimumResultsForSearch<0?this.showSearch(!1):this.showSearch(!0),this.selection=b=d.find(".select2-choice"),this.focusser=d.find(".select2-focusser"),b.find(".select2-chosen").attr("id","select2-chosen-"+f),this.focusser.attr("aria-labelledby","select2-chosen-"+f),this.results.attr("id","select2-results-"+f),this.search.attr("aria-owns","select2-results-"+f),this.focusser.attr("id","s2id_autogen"+f),h=a("label[for='"+this.opts.element.attr("id")+"']"),this.focusser.prev().text(h.text()).attr("for",this.focusser.attr("id"));var i=this.opts.element.attr("title");this.opts.element.attr("title",i||h.text()),this.focusser.attr("tabindex",this.elementTabIndex),this.search.attr("id",this.focusser.attr("id")+"_search"),this.search.prev().text(a("label[for='"+this.focusser.attr("id")+"']").text()).attr("for",this.search.attr("id")),this.search.on("keydown",this.bind(function(a){if(this.isInterfaceEnabled()){if(a.which===c.PAGE_UP||a.which===c.PAGE_DOWN)return A(a),void 0;switch(a.which){case c.UP:case c.DOWN:return this.moveHighlight(a.which===c.UP?-1:1),A(a),void 0;case c.ENTER:return this.selectHighlighted(),A(a),void 0;case c.TAB:return this.selectHighlighted({noFocus:!0}),void 0;case c.ESC:return this.cancel(a),A(a),void 0}}})),this.search.on("blur",this.bind(function(){document.activeElement===this.body.get(0)&&window.setTimeout(this.bind(function(){this.opened()&&this.search.focus()}),0)})),this.focusser.on("keydown",this.bind(function(a){if(this.isInterfaceEnabled()&&a.which!==c.TAB&&!c.isControl(a)&&!c.isFunctionKey(a)&&a.which!==c.ESC){if(this.opts.openOnEnter===!1&&a.which===c.ENTER)return A(a),void 0;if(a.which==c.DOWN||a.which==c.UP||a.which==c.ENTER&&this.opts.openOnEnter){if(a.altKey||a.ctrlKey||a.shiftKey||a.metaKey)return;return this.open(),A(a),void 0}return a.which==c.DELETE||a.which==c.BACKSPACE?(this.opts.allowClear&&this.clear(),A(a),void 0):void 0}})),u(this.focusser),this.focusser.on("keyup-change input",this.bind(function(a){if(this.opts.minimumResultsForSearch>=0){if(a.stopPropagation(),this.opened())return;this.open()}})),b.on("mousedown touchstart","abbr",this.bind(function(a){this.isInterfaceEnabled()&&(this.clear(),B(a),this.close(),this.selection.focus())})),b.on("mousedown touchstart",this.bind(function(c){n(b),this.container.hasClass("select2-container-active")||this.opts.element.trigger(a.Event("select2-focus")),this.opened()?this.close():this.isInterfaceEnabled()&&this.open(),A(c)})),e.on("mousedown touchstart",this.bind(function(){this.opts.shouldFocusInput(this)&&this.search.focus()})),b.on("focus",this.bind(function(a){A(a)})),this.focusser.on("focus",this.bind(function(){this.container.hasClass("select2-container-active")||this.opts.element.trigger(a.Event("select2-focus")),this.container.addClass("select2-container-active")})).on("blur",this.bind(function(){this.opened()||(this.container.removeClass("select2-container-active"),this.opts.element.trigger(a.Event("select2-blur")))})),this.search.on("focus",this.bind(function(){this.container.hasClass("select2-container-active")||this.opts.element.trigger(a.Event("select2-focus")),this.container.addClass("select2-container-active")})),this.initContainerWidth(),this.opts.element.addClass("select2-offscreen"),this.setPlaceholder()},clear:function(b){var c=this.selection.data("select2-data");if(c){var d=a.Event("select2-clearing");if(this.opts.element.trigger(d),d.isDefaultPrevented())return;var e=this.getPlaceholderOption();this.opts.element.val(e?e.val():""),this.selection.find(".select2-chosen").empty(),this.selection.removeData("select2-data"),this.setPlaceholder(),b!==!1&&(this.opts.element.trigger({type:"select2-removed",val:this.id(c),choice:c}),this.triggerChange({removed:c}))}},initSelection:function(){if(this.isPlaceholderOptionSelected())this.updateSelection(null),this.close(),this.setPlaceholder();else{var c=this;this.opts.initSelection.call(null,this.opts.element,function(a){a!==b&&null!==a&&(c.updateSelection(a),c.close(),c.setPlaceholder(),c.nextSearchTerm=c.opts.nextSearchTerm(a,c.search.val()))})}},isPlaceholderOptionSelected:function(){var a;return this.getPlaceholder()===b?!1:(a=this.getPlaceholderOption())!==b&&a.prop("selected")||""===this.opts.element.val()||this.opts.element.val()===b||null===this.opts.element.val()},prepareOpts:function(){var b=this.parent.prepareOpts.apply(this,arguments),c=this;return"select"===b.element.get(0).tagName.toLowerCase()?b.initSelection=function(a,b){var d=a.find("option").filter(function(){return this.selected&&!this.disabled});b(c.optionToData(d))}:"data"in b&&(b.initSelection=b.initSelection||function(c,d){var e=c.val(),f=null;b.query({matcher:function(a,c,d){var g=r(e,b.id(d));return g&&(f=d),g},callback:a.isFunction(d)?function(){d(f)}:a.noop})}),b},getPlaceholder:function(){return this.select&&this.getPlaceholderOption()===b?b:this.parent.getPlaceholder.apply(this,arguments)},setPlaceholder:function(){var a=this.getPlaceholder();if(this.isPlaceholderOptionSelected()&&a!==b){if(this.select&&this.getPlaceholderOption()===b)return;this.selection.find(".select2-chosen").html(this.opts.escapeMarkup(a)),this.selection.addClass("select2-default"),this.container.removeClass("select2-allowclear")}},postprocessResults:function(a,b,c){var d=0,e=this;if(this.findHighlightableChoices().each2(function(a,b){return r(e.id(b.data("select2-data")),e.opts.element.val())?(d=a,!1):void 0}),c!==!1&&(b===!0&&d>=0?this.highlight(d):this.highlight(0)),b===!0){var g=this.opts.minimumResultsForSearch;g>=0&&this.showSearch(L(a.results)>=g)}},showSearch:function(b){this.showSearchInput!==b&&(this.showSearchInput=b,this.dropdown.find(".select2-search").toggleClass("select2-search-hidden",!b),this.dropdown.find(".select2-search").toggleClass("select2-offscreen",!b),a(this.dropdown,this.container).toggleClass("select2-with-searchbox",b))},onSelect:function(a,b){if(this.triggerSelect(a)){var c=this.opts.element.val(),d=this.data();this.opts.element.val(this.id(a)),this.updateSelection(a),this.opts.element.trigger({type:"select2-selected",val:this.id(a),choice:a}),this.nextSearchTerm=this.opts.nextSearchTerm(a,this.search.val()),this.close(),b&&b.noFocus||!this.opts.shouldFocusInput(this)||this.focusser.focus(),r(c,this.id(a))||this.triggerChange({added:a,removed:d})}},updateSelection:function(a){var d,e,c=this.selection.find(".select2-chosen");this.selection.data("select2-data",a),c.empty(),null!==a&&(d=this.opts.formatSelection(a,c,this.opts.escapeMarkup)),d!==b&&c.append(d),e=this.opts.formatSelectionCssClass(a,c),e!==b&&c.addClass(e),this.selection.removeClass("select2-default"),this.opts.allowClear&&this.getPlaceholder()!==b&&this.container.addClass("select2-allowclear")},val:function(){var a,c=!1,d=null,e=this,f=this.data();if(0===arguments.length)return this.opts.element.val();if(a=arguments[0],arguments.length>1&&(c=arguments[1]),this.select)this.select.val(a).find("option").filter(function(){return this.selected}).each2(function(a,b){return d=e.optionToData(b),!1}),this.updateSelection(d),this.setPlaceholder(),c&&this.triggerChange({added:d,removed:f});else{if(!a&&0!==a)return this.clear(c),void 0;if(this.opts.initSelection===b)throw new Error("cannot call val() if initSelection() is not defined");this.opts.element.val(a),this.opts.initSelection(this.opts.element,function(a){e.opts.element.val(a?e.id(a):""),e.updateSelection(a),e.setPlaceholder(),c&&e.triggerChange({added:a,removed:f})})}},clearSearch:function(){this.search.val(""),this.focusser.val("")},data:function(a){var c,d=!1;return 0===arguments.length?(c=this.selection.data("select2-data"),c==b&&(c=null),c):(arguments.length>1&&(d=arguments[1]),a?(c=this.data(),this.opts.element.val(a?this.id(a):""),this.updateSelection(a),d&&this.triggerChange({added:a,removed:c})):this.clear(d),void 0)}}),f=O(d,{createContainer:function(){var b=a(document.createElement("div")).attr({"class":"select2-container select2-container-multi"}).html(["<ul class='select2-choices'>","  <li class='select2-search-field'>","    <label for='' class='select2-offscreen'></label>","    <input type='text' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' class='select2-input'>","  </li>","</ul>","<div class='select2-drop select2-drop-multi select2-display-none'>","   <ul class='select2-results'>","   </ul>","</div>"].join(""));return b},prepareOpts:function(){var b=this.parent.prepareOpts.apply(this,arguments),c=this;return"select"===b.element.get(0).tagName.toLowerCase()?b.initSelection=function(a,b){var d=[];a.find("option").filter(function(){return this.selected&&!this.disabled}).each2(function(a,b){d.push(c.optionToData(b))}),b(d)}:"data"in b&&(b.initSelection=b.initSelection||function(c,d){var e=s(c.val(),b.separator),f=[];b.query({matcher:function(c,d,g){var h=a.grep(e,function(a){return r(a,b.id(g))}).length;return h&&f.push(g),h},callback:a.isFunction(d)?function(){for(var a=[],c=0;c<e.length;c++)for(var g=e[c],h=0;h<f.length;h++){var i=f[h];if(r(g,b.id(i))){a.push(i),f.splice(h,1);break}}d(a)}:a.noop})}),b},selectChoice:function(a){var b=this.container.find(".select2-search-choice-focus");b.length&&a&&a[0]==b[0]||(b.length&&this.opts.element.trigger("choice-deselected",b),b.removeClass("select2-search-choice-focus"),a&&a.length&&(this.close(),a.addClass("select2-search-choice-focus"),this.opts.element.trigger("choice-selected",a)))},destroy:function(){a("label[for='"+this.search.attr("id")+"']").attr("for",this.opts.element.attr("id")),this.parent.destroy.apply(this,arguments),N.call(this,"searchContainer","selection")},initContainer:function(){var d,b=".select2-choices";this.searchContainer=this.container.find(".select2-search-field"),this.selection=d=this.container.find(b);var e=this;this.selection.on("click",".select2-search-choice:not(.select2-locked)",function(){e.search[0].focus(),e.selectChoice(a(this))}),this.search.attr("id","s2id_autogen"+g()),this.search.prev().text(a("label[for='"+this.opts.element.attr("id")+"']").text()).attr("for",this.search.attr("id")),this.search.on("input paste",this.bind(function(){this.isInterfaceEnabled()&&(this.opened()||this.open())})),this.search.attr("tabindex",this.elementTabIndex),this.keydowns=0,this.search.on("keydown",this.bind(function(a){if(this.isInterfaceEnabled()){++this.keydowns;var b=d.find(".select2-search-choice-focus"),e=b.prev(".select2-search-choice:not(.select2-locked)"),f=b.next(".select2-search-choice:not(.select2-locked)"),g=z(this.search);if(b.length&&(a.which==c.LEFT||a.which==c.RIGHT||a.which==c.BACKSPACE||a.which==c.DELETE||a.which==c.ENTER)){var h=b;return a.which==c.LEFT&&e.length?h=e:a.which==c.RIGHT?h=f.length?f:null:a.which===c.BACKSPACE?this.unselect(b.first())&&(this.search.width(10),h=e.length?e:f):a.which==c.DELETE?this.unselect(b.first())&&(this.search.width(10),h=f.length?f:null):a.which==c.ENTER&&(h=null),this.selectChoice(h),A(a),h&&h.length||this.open(),void 0}if((a.which===c.BACKSPACE&&1==this.keydowns||a.which==c.LEFT)&&0==g.offset&&!g.length)return this.selectChoice(d.find(".select2-search-choice:not(.select2-locked)").last()),A(a),void 0;if(this.selectChoice(null),this.opened())switch(a.which){case c.UP:case c.DOWN:return this.moveHighlight(a.which===c.UP?-1:1),A(a),void 0;case c.ENTER:return this.selectHighlighted(),A(a),void 0;case c.TAB:return this.selectHighlighted({noFocus:!0}),this.close(),void 0;case c.ESC:return this.cancel(a),A(a),void 0}if(a.which!==c.TAB&&!c.isControl(a)&&!c.isFunctionKey(a)&&a.which!==c.BACKSPACE&&a.which!==c.ESC){if(a.which===c.ENTER){if(this.opts.openOnEnter===!1)return;if(a.altKey||a.ctrlKey||a.shiftKey||a.metaKey)return}this.open(),(a.which===c.PAGE_UP||a.which===c.PAGE_DOWN)&&A(a),a.which===c.ENTER&&A(a)}}})),this.search.on("keyup",this.bind(function(){this.keydowns=0,this.resizeSearch()})),this.search.on("blur",this.bind(function(b){this.container.removeClass("select2-container-active"),this.search.removeClass("select2-focused"),this.selectChoice(null),this.opened()||this.clearSearch(),b.stopImmediatePropagation(),this.opts.element.trigger(a.Event("select2-blur"))})),this.container.on("click",b,this.bind(function(b){this.isInterfaceEnabled()&&(a(b.target).closest(".select2-search-choice").length>0||(this.selectChoice(null),this.clearPlaceholder(),this.container.hasClass("select2-container-active")||this.opts.element.trigger(a.Event("select2-focus")),this.open(),this.focusSearch(),b.preventDefault()))})),this.container.on("focus",b,this.bind(function(){this.isInterfaceEnabled()&&(this.container.hasClass("select2-container-active")||this.opts.element.trigger(a.Event("select2-focus")),this.container.addClass("select2-container-active"),this.dropdown.addClass("select2-drop-active"),this.clearPlaceholder())})),this.initContainerWidth(),this.opts.element.addClass("select2-offscreen"),this.clearSearch()},enableInterface:function(){this.parent.enableInterface.apply(this,arguments)&&this.search.prop("disabled",!this.isInterfaceEnabled())},initSelection:function(){if(""===this.opts.element.val()&&""===this.opts.element.text()&&(this.updateSelection([]),this.close(),this.clearSearch()),this.select||""!==this.opts.element.val()){var c=this;this.opts.initSelection.call(null,this.opts.element,function(a){a!==b&&null!==a&&(c.updateSelection(a),c.close(),c.clearSearch())})}},clearSearch:function(){var a=this.getPlaceholder(),c=this.getMaxSearchWidth();a!==b&&0===this.getVal().length&&this.search.hasClass("select2-focused")===!1?(this.search.val(a).addClass("select2-default"),this.search.width(c>0?c:this.container.css("width"))):this.search.val("").width(10)},clearPlaceholder:function(){this.search.hasClass("select2-default")&&this.search.val("").removeClass("select2-default")},opening:function(){this.clearPlaceholder(),this.resizeSearch(),this.parent.opening.apply(this,arguments),this.focusSearch(),""===this.search.val()&&this.nextSearchTerm!=b&&(this.search.val(this.nextSearchTerm),this.search.select()),this.updateResults(!0),this.opts.shouldFocusInput(this)&&this.search.focus(),this.opts.element.trigger(a.Event("select2-open"))},close:function(){this.opened()&&this.parent.close.apply(this,arguments)},focus:function(){this.close(),this.search.focus()},isFocused:function(){return this.search.hasClass("select2-focused")},updateSelection:function(b){var c=[],d=[],e=this;a(b).each(function(){p(e.id(this),c)<0&&(c.push(e.id(this)),d.push(this))}),b=d,this.selection.find(".select2-search-choice").remove(),a(b).each(function(){e.addSelectedChoice(this)}),e.postprocessResults()},tokenize:function(){var a=this.search.val();a=this.opts.tokenizer.call(this,a,this.data(),this.bind(this.onSelect),this.opts),null!=a&&a!=b&&(this.search.val(a),a.length>0&&this.open())},onSelect:function(a,c){this.triggerSelect(a)&&(this.addSelectedChoice(a),this.opts.element.trigger({type:"selected",val:this.id(a),choice:a}),this.nextSearchTerm=this.opts.nextSearchTerm(a,this.search.val()),this.clearSearch(),this.updateResults(),(this.select||!this.opts.closeOnSelect)&&this.postprocessResults(a,!1,this.opts.closeOnSelect===!0),this.opts.closeOnSelect?(this.close(),this.search.width(10)):this.countSelectableResults()>0?(this.search.width(10),this.resizeSearch(),this.getMaximumSelectionSize()>0&&this.val().length>=this.getMaximumSelectionSize()?this.updateResults(!0):this.nextSearchTerm!=b&&(this.search.val(this.nextSearchTerm),this.updateResults(),this.search.select()),this.positionDropdown()):(this.close(),this.search.width(10)),this.triggerChange({added:a}),c&&c.noFocus||this.focusSearch())},cancel:function(){this.close(),this.focusSearch()},addSelectedChoice:function(c){var j,k,d=!c.locked,e=a("<li class='select2-search-choice'>    <div></div>    <a href='#' class='select2-search-choice-close' tabindex='-1'></a></li>"),f=a("<li class='select2-search-choice select2-locked'><div></div></li>"),g=d?e:f,h=this.id(c),i=this.getVal();j=this.opts.formatSelection(c,g.find("div"),this.opts.escapeMarkup),j!=b&&g.find("div").replaceWith("<div>"+j+"</div>"),k=this.opts.formatSelectionCssClass(c,g.find("div")),k!=b&&g.addClass(k),d&&g.find(".select2-search-choice-close").on("mousedown",A).on("click dblclick",this.bind(function(b){this.isInterfaceEnabled()&&(this.unselect(a(b.target)),this.selection.find(".select2-search-choice-focus").removeClass("select2-search-choice-focus"),A(b),this.close(),this.focusSearch())})).on("focus",this.bind(function(){this.isInterfaceEnabled()&&(this.container.addClass("select2-container-active"),this.dropdown.addClass("select2-drop-active"))})),g.data("select2-data",c),g.insertBefore(this.searchContainer),i.push(h),this.setVal(i)},unselect:function(b){var d,e,c=this.getVal();if(b=b.closest(".select2-search-choice"),0===b.length)throw"Invalid argument: "+b+". Must be .select2-search-choice";if(d=b.data("select2-data")){var f=a.Event("select2-removing");if(f.val=this.id(d),f.choice=d,this.opts.element.trigger(f),f.isDefaultPrevented())return!1;for(;(e=p(this.id(d),c))>=0;)c.splice(e,1),this.setVal(c),this.select&&this.postprocessResults();return b.remove(),this.opts.element.trigger({type:"select2-removed",val:this.id(d),choice:d}),this.triggerChange({removed:d}),!0}},postprocessResults:function(a,b,c){var d=this.getVal(),e=this.results.find(".select2-result"),f=this.results.find(".select2-result-with-children"),g=this;e.each2(function(a,b){var c=g.id(b.data("select2-data"));p(c,d)>=0&&(b.addClass("select2-selected"),b.find(".select2-result-selectable").addClass("select2-selected"))}),f.each2(function(a,b){b.is(".select2-result-selectable")||0!==b.find(".select2-result-selectable:not(.select2-selected)").length||b.addClass("select2-selected")}),-1==this.highlight()&&c!==!1&&g.highlight(0),!this.opts.createSearchChoice&&!e.filter(".select2-result:not(.select2-selected)").length>0&&(!a||a&&!a.more&&0===this.results.find(".select2-no-results").length)&&J(g.opts.formatNoMatches,"formatNoMatches")&&this.results.append("<li class='select2-no-results'>"+K(g.opts.formatNoMatches,g.search.val())+"</li>")},getMaxSearchWidth:function(){return this.selection.width()-t(this.search)},resizeSearch:function(){var a,b,c,d,e,f=t(this.search);a=C(this.search)+10,b=this.search.offset().left,c=this.selection.width(),d=this.selection.offset().left,e=c-(b-d)-f,a>e&&(e=c-f),40>e&&(e=c-f),0>=e&&(e=a),this.search.width(Math.floor(e))},getVal:function(){var a;return this.select?(a=this.select.val(),null===a?[]:a):(a=this.opts.element.val(),s(a,this.opts.separator))},setVal:function(b){var c;this.select?this.select.val(b):(c=[],a(b).each(function(){p(this,c)<0&&c.push(this)}),this.opts.element.val(0===c.length?"":c.join(this.opts.separator)))},buildChangeDetails:function(a,b){for(var b=b.slice(0),a=a.slice(0),c=0;c<b.length;c++)for(var d=0;d<a.length;d++)r(this.opts.id(b[c]),this.opts.id(a[d]))&&(b.splice(c,1),c>0&&c--,a.splice(d,1),d--);return{added:b,removed:a}},val:function(c,d){var e,f=this;if(0===arguments.length)return this.getVal();if(e=this.data(),e.length||(e=[]),!c&&0!==c)return this.opts.element.val(""),this.updateSelection([]),this.clearSearch(),d&&this.triggerChange({added:this.data(),removed:e}),void 0;if(this.setVal(c),this.select)this.opts.initSelection(this.select,this.bind(this.updateSelection)),d&&this.triggerChange(this.buildChangeDetails(e,this.data()));else{if(this.opts.initSelection===b)throw new Error("val() cannot be called if initSelection() is not defined");this.opts.initSelection(this.opts.element,function(b){var c=a.map(b,f.id);f.setVal(c),f.updateSelection(b),f.clearSearch(),d&&f.triggerChange(f.buildChangeDetails(e,f.data()))})}this.clearSearch()},onSortStart:function(){if(this.select)throw new Error("Sorting of elements is not supported when attached to <select>. Attach to <input type='hidden'/> instead.");this.search.width(0),this.searchContainer.hide()},onSortEnd:function(){var b=[],c=this;this.searchContainer.show(),this.searchContainer.appendTo(this.searchContainer.parent()),this.resizeSearch(),this.selection.find(".select2-search-choice").each(function(){b.push(c.opts.id(a(this).data("select2-data")))}),this.setVal(b),this.triggerChange()},data:function(b,c){var e,f,d=this;return 0===arguments.length?this.selection.children(".select2-search-choice").map(function(){return a(this).data("select2-data")}).get():(f=this.data(),b||(b=[]),e=a.map(b,function(a){return d.opts.id(a)}),this.setVal(e),this.updateSelection(b),this.clearSearch(),c&&this.triggerChange(this.buildChangeDetails(f,this.data())),void 0)}}),a.fn.select2=function(){var d,e,f,g,h,c=Array.prototype.slice.call(arguments,0),i=["val","destroy","opened","open","close","focus","isFocused","container","dropdown","onSortStart","onSortEnd","enable","disable","readonly","positionDropdown","data","search"],j=["opened","isFocused","container","dropdown"],k=["val","data"],l={search:"externalSearch"};return this.each(function(){if(0===c.length||"object"==typeof c[0])d=0===c.length?{}:a.extend({},c[0]),d.element=a(this),"select"===d.element.get(0).tagName.toLowerCase()?h=d.element.prop("multiple"):(h=d.multiple||!1,"tags"in d&&(d.multiple=h=!0)),e=h?new window.vicSelect2["class"].multi:new window.vicSelect2["class"].single,e.init(d);else{if("string"!=typeof c[0])throw"Invalid arguments to select2 plugin: "+c;if(p(c[0],i)<0)throw"Unknown method: "+c[0];if(g=b,e=a(this).data("select2"),e===b)return;if(f=c[0],"container"===f?g=e.container:"dropdown"===f?g=e.dropdown:(l[f]&&(f=l[f]),g=e[f].apply(e,c.slice(1))),p(c[0],j)>=0||p(c[0],k)>=0&&1==c.length)return!1}}),g===b?this:g},a.fn.select2.defaults={width:"copy",loadMorePadding:0,closeOnSelect:!0,openOnEnter:!0,containerCss:{},dropdownCss:{},containerCssClass:"",dropdownCssClass:"",formatResult:function(a,b,c,d){var e=[];return E(a.text,c.term,e,d),e.join("")},formatSelection:function(a,c,d){return a?d(a.text):b},sortResults:function(a){return a},formatResultCssClass:function(a){return a.css},formatSelectionCssClass:function(){return b},formatMatches:function(a){return a+" results are available, use up and down arrow keys to navigate."},formatNoMatches:function(){return"No matches found"},formatInputTooShort:function(a,b){var c=b-a.length;return"Please enter "+c+" or more character"+(1==c?"":"s")},formatInputTooLong:function(a,b){var c=a.length-b;return"Please delete "+c+" character"+(1==c?"":"s")},formatSelectionTooBig:function(a){return"You can only select "+a+" item"+(1==a?"":"s")},formatLoadMore:function(){return"Loading more results\u2026"},formatSearching:function(){return"Searching\u2026"},minimumResultsForSearch:0,minimumInputLength:0,maximumInputLength:null,maximumSelectionSize:0,id:function(a){return a==b?null:a.id},matcher:function(a,b){return o(""+b).toUpperCase().indexOf(o(""+a).toUpperCase())>=0},separator:",",tokenSeparators:[],tokenizer:M,escapeMarkup:F,blurOnChange:!1,selectOnBlur:!1,adaptContainerCssClass:function(a){return a},adaptDropdownCssClass:function(){return null},nextSearchTerm:function(){return b},searchInputPlaceholder:"",createSearchChoicePosition:"top",shouldFocusInput:function(a){var b="ontouchstart"in window||navigator.msMaxTouchPoints>0;return b?a.opts.minimumResultsForSearch<0?!1:!0:!0}},a.fn.select2.ajaxDefaults={transport:a.ajax,params:{type:"GET",cache:!1,dataType:"json"}},window.vicSelect2={query:{ajax:G,local:H,tags:I},util:{debounce:w,markMatch:E,escapeMarkup:F,stripDiacritics:o},"class":{"abstract":d,single:e,multi:f}}}}($vic);
/**
 * Select2 French translation
 */
(function ($) {
    "use strict";

    $.extend($.fn.select2.defaults, {
        formatMatches: function (matches) { return matches + " résultats sont disponibles, utilisez les flèches haut et bas pour naviguer."; },
        formatNoMatches: function () { return "Aucun résultat trouvé"; },
        formatInputTooShort: function (input, min) { var n = min - input.length; return "Merci de saisir " + n + " caractère" + (n == 1 ? "" : "s") + " de plus"; },
        formatInputTooLong: function (input, max) { var n = input.length - max; return "Merci de supprimer " + n + " caractère" + (n == 1 ? "" : "s"); },
        formatSelectionTooBig: function (limit) { return "Vous pouvez seulement sélectionner " + limit + " élément" + (limit == 1 ? "" : "s"); },
        formatLoadMore: function (pageNumber) { return "Chargement de résultats supplémentaires…"; },
        formatSearching: function () { return "Recherche en cours…"; }
    });
})($vic);

/*! jQuery UI - v1.10.4 - 2014-04-02
* http://jqueryui.com
* Includes: jquery.ui.core.js, jquery.ui.widget.js, jquery.ui.mouse.js, jquery.ui.position.js, jquery.ui.accordion.js, jquery.ui.autocomplete.js, jquery.ui.button.js, jquery.ui.datepicker.js, jquery.ui.dialog.js, jquery.ui.draggable.js, jquery.ui.droppable.js, jquery.ui.effect.js, jquery.ui.effect-blind.js, jquery.ui.effect-bounce.js, jquery.ui.effect-clip.js, jquery.ui.effect-drop.js, jquery.ui.effect-explode.js, jquery.ui.effect-fade.js, jquery.ui.effect-fold.js, jquery.ui.effect-highlight.js, jquery.ui.effect-pulsate.js, jquery.ui.effect-scale.js, jquery.ui.effect-shake.js, jquery.ui.effect-slide.js, jquery.ui.effect-transfer.js, jquery.ui.menu.js, jquery.ui.progressbar.js, jquery.ui.resizable.js, jquery.ui.selectable.js, jquery.ui.slider.js, jquery.ui.sortable.js, jquery.ui.spinner.js, jquery.ui.tabs.js, jquery.ui.tooltip.js
* Copyright 2014 jQuery Foundation and other contributors; Licensed MIT */

(function( $, undefined ) {

var uuid = 0,
	runiqueId = /^ui-id-\d+$/;

// $.ui might exist from components with no dependencies, e.g., $.ui.position
$.ui = $.ui || {};

$.extend( $.ui, {
	version: "1.10.4",

	keyCode: {
		BACKSPACE: 8,
		COMMA: 188,
		DELETE: 46,
		DOWN: 40,
		END: 35,
		ENTER: 13,
		ESCAPE: 27,
		HOME: 36,
		LEFT: 37,
		NUMPAD_ADD: 107,
		NUMPAD_DECIMAL: 110,
		NUMPAD_DIVIDE: 111,
		NUMPAD_ENTER: 108,
		NUMPAD_MULTIPLY: 106,
		NUMPAD_SUBTRACT: 109,
		PAGE_DOWN: 34,
		PAGE_UP: 33,
		PERIOD: 190,
		RIGHT: 39,
		SPACE: 32,
		TAB: 9,
		UP: 38
	}
});

// plugins
$.fn.extend({
	focus: (function( orig ) {
		return function( delay, fn ) {
			return typeof delay === "number" ?
				this.each(function() {
					var elem = this;
					setTimeout(function() {
						$( elem ).focus();
						if ( fn ) {
							fn.call( elem );
						}
					}, delay );
				}) :
				orig.apply( this, arguments );
		};
	})( $.fn.focus ),

	scrollParent: function() {
		var scrollParent;
		if (($.ui.ie && (/(static|relative)/).test(this.css("position"))) || (/absolute/).test(this.css("position"))) {
			scrollParent = this.parents().filter(function() {
				return (/(relative|absolute|fixed)/).test($.css(this,"position")) && (/(auto|scroll)/).test($.css(this,"overflow")+$.css(this,"overflow-y")+$.css(this,"overflow-x"));
			}).eq(0);
		} else {
			scrollParent = this.parents().filter(function() {
				return (/(auto|scroll)/).test($.css(this,"overflow")+$.css(this,"overflow-y")+$.css(this,"overflow-x"));
			}).eq(0);
		}

		return (/fixed/).test(this.css("position")) || !scrollParent.length ? $(document) : scrollParent;
	},

	zIndex: function( zIndex ) {
		if ( zIndex !== undefined ) {
			return this.css( "zIndex", zIndex );
		}

		if ( this.length ) {
			var elem = $( this[ 0 ] ), position, value;
			while ( elem.length && elem[ 0 ] !== document ) {
				// Ignore z-index if position is set to a value where z-index is ignored by the browser
				// This makes behavior of this function consistent across browsers
				// WebKit always returns auto if the element is positioned
				position = elem.css( "position" );
				if ( position === "absolute" || position === "relative" || position === "fixed" ) {
					// IE returns 0 when zIndex is not specified
					// other browsers return a string
					// we ignore the case of nested elements with an explicit value of 0
					// <div style="z-index: -10;"><div style="z-index: 0;"></div></div>
					value = parseInt( elem.css( "zIndex" ), 10 );
					if ( !isNaN( value ) && value !== 0 ) {
						return value;
					}
				}
				elem = elem.parent();
			}
		}

		return 0;
	},

	uniqueId: function() {
		return this.each(function() {
			if ( !this.id ) {
				this.id = "ui-id-" + (++uuid);
			}
		});
	},

	removeUniqueId: function() {
		return this.each(function() {
			if ( runiqueId.test( this.id ) ) {
				$( this ).removeAttr( "id" );
			}
		});
	}
});

// selectors
function focusable( element, isTabIndexNotNaN ) {
	var map, mapName, img,
		nodeName = element.nodeName.toLowerCase();
	if ( "area" === nodeName ) {
		map = element.parentNode;
		mapName = map.name;
		if ( !element.href || !mapName || map.nodeName.toLowerCase() !== "map" ) {
			return false;
		}
		img = $( "img[usemap=#" + mapName + "]" )[0];
		return !!img && visible( img );
	}
	return ( /input|select|textarea|button|object/.test( nodeName ) ?
		!element.disabled :
		"a" === nodeName ?
			element.href || isTabIndexNotNaN :
			isTabIndexNotNaN) &&
		// the element and all of its ancestors must be visible
		visible( element );
}

function visible( element ) {
	return $.expr.filters.visible( element ) &&
		!$( element ).parents().addBack().filter(function() {
			return $.css( this, "visibility" ) === "hidden";
		}).length;
}

$.extend( $.expr[ ":" ], {
	data: $.expr.createPseudo ?
		$.expr.createPseudo(function( dataName ) {
			return function( elem ) {
				return !!$.data( elem, dataName );
			};
		}) :
		// support: jQuery <1.8
		function( elem, i, match ) {
			return !!$.data( elem, match[ 3 ] );
		},

	focusable: function( element ) {
		return focusable( element, !isNaN( $.attr( element, "tabindex" ) ) );
	},

	tabbable: function( element ) {
		var tabIndex = $.attr( element, "tabindex" ),
			isTabIndexNaN = isNaN( tabIndex );
		return ( isTabIndexNaN || tabIndex >= 0 ) && focusable( element, !isTabIndexNaN );
	}
});

// support: jQuery <1.8
if ( !$( "<a>" ).outerWidth( 1 ).jquery ) {
	$.each( [ "Width", "Height" ], function( i, name ) {
		var side = name === "Width" ? [ "Left", "Right" ] : [ "Top", "Bottom" ],
			type = name.toLowerCase(),
			orig = {
				innerWidth: $.fn.innerWidth,
				innerHeight: $.fn.innerHeight,
				outerWidth: $.fn.outerWidth,
				outerHeight: $.fn.outerHeight
			};

		function reduce( elem, size, border, margin ) {
			$.each( side, function() {
				size -= parseFloat( $.css( elem, "padding" + this ) ) || 0;
				if ( border ) {
					size -= parseFloat( $.css( elem, "border" + this + "Width" ) ) || 0;
				}
				if ( margin ) {
					size -= parseFloat( $.css( elem, "margin" + this ) ) || 0;
				}
			});
			return size;
		}

		$.fn[ "inner" + name ] = function( size ) {
			if ( size === undefined ) {
				return orig[ "inner" + name ].call( this );
			}

			return this.each(function() {
				$( this ).css( type, reduce( this, size ) + "px" );
			});
		};

		$.fn[ "outer" + name] = function( size, margin ) {
			if ( typeof size !== "number" ) {
				return orig[ "outer" + name ].call( this, size );
			}

			return this.each(function() {
				$( this).css( type, reduce( this, size, true, margin ) + "px" );
			});
		};
	});
}

// support: jQuery <1.8
if ( !$.fn.addBack ) {
	$.fn.addBack = function( selector ) {
		return this.add( selector == null ?
			this.prevObject : this.prevObject.filter( selector )
		);
	};
}

// support: jQuery 1.6.1, 1.6.2 (http://bugs.jquery.com/ticket/9413)
if ( $( "<a>" ).data( "a-b", "a" ).removeData( "a-b" ).data( "a-b" ) ) {
	$.fn.removeData = (function( removeData ) {
		return function( key ) {
			if ( arguments.length ) {
				return removeData.call( this, $.camelCase( key ) );
			} else {
				return removeData.call( this );
			}
		};
	})( $.fn.removeData );
}





// deprecated
$.ui.ie = !!/msie [\w.]+/.exec( navigator.userAgent.toLowerCase() );

$.support.selectstart = "onselectstart" in document.createElement( "div" );
$.fn.extend({
	disableSelection: function() {
		return this.bind( ( $.support.selectstart ? "selectstart" : "mousedown" ) +
			".ui-disableSelection", function( event ) {
				event.preventDefault();
			});
	},

	enableSelection: function() {
		return this.unbind( ".ui-disableSelection" );
	}
});

$.extend( $.ui, {
	// $.ui.plugin is deprecated. Use $.widget() extensions instead.
	plugin: {
		add: function( module, option, set ) {
			var i,
				proto = $.ui[ module ].prototype;
			for ( i in set ) {
				proto.plugins[ i ] = proto.plugins[ i ] || [];
				proto.plugins[ i ].push( [ option, set[ i ] ] );
			}
		},
		call: function( instance, name, args ) {
			var i,
				set = instance.plugins[ name ];
			if ( !set || !instance.element[ 0 ].parentNode || instance.element[ 0 ].parentNode.nodeType === 11 ) {
				return;
			}

			for ( i = 0; i < set.length; i++ ) {
				if ( instance.options[ set[ i ][ 0 ] ] ) {
					set[ i ][ 1 ].apply( instance.element, args );
				}
			}
		}
	},

	// only used by resizable
	hasScroll: function( el, a ) {

		//If overflow is hidden, the element might have extra content, but the user wants to hide it
		if ( $( el ).css( "overflow" ) === "hidden") {
			return false;
		}

		var scroll = ( a && a === "left" ) ? "scrollLeft" : "scrollTop",
			has = false;

		if ( el[ scroll ] > 0 ) {
			return true;
		}

		// TODO: determine which cases actually cause this to happen
		// if the element doesn't have the scroll set, see if it's possible to
		// set the scroll
		el[ scroll ] = 1;
		has = ( el[ scroll ] > 0 );
		el[ scroll ] = 0;
		return has;
	}
});

})( $vic );
(function( $, undefined ) {

var uuid = 0,
	slice = Array.prototype.slice,
	_cleanData = $.cleanData;
$.cleanData = function( elems ) {
	for ( var i = 0, elem; (elem = elems[i]) != null; i++ ) {
		try {
			$( elem ).triggerHandler( "remove" );
		// http://bugs.jquery.com/ticket/8235
		} catch( e ) {}
	}
	_cleanData( elems );
};

$.widget = function( name, base, prototype ) {
	var fullName, existingConstructor, constructor, basePrototype,
		// proxiedPrototype allows the provided prototype to remain unmodified
		// so that it can be used as a mixin for multiple widgets (#8876)
		proxiedPrototype = {},
		namespace = name.split( "." )[ 0 ];

	name = name.split( "." )[ 1 ];
	fullName = namespace + "-" + name;

	if ( !prototype ) {
		prototype = base;
		base = $.Widget;
	}

	// create selector for plugin
	$.expr[ ":" ][ fullName.toLowerCase() ] = function( elem ) {
		return !!$.data( elem, fullName );
	};

	$[ namespace ] = $[ namespace ] || {};
	existingConstructor = $[ namespace ][ name ];
	constructor = $[ namespace ][ name ] = function( options, element ) {
		// allow instantiation without "new" keyword
		if ( !this._createWidget ) {
			return new constructor( options, element );
		}

		// allow instantiation without initializing for simple inheritance
		// must use "new" keyword (the code above always passes args)
		if ( arguments.length ) {
			this._createWidget( options, element );
		}
	};
	// extend with the existing constructor to carry over any static properties
	$.extend( constructor, existingConstructor, {
		version: prototype.version,
		// copy the object used to create the prototype in case we need to
		// redefine the widget later
		_proto: $.extend( {}, prototype ),
		// track widgets that inherit from this widget in case this widget is
		// redefined after a widget inherits from it
		_childConstructors: []
	});

	basePrototype = new base();
	// we need to make the options hash a property directly on the new instance
	// otherwise we'll modify the options hash on the prototype that we're
	// inheriting from
	basePrototype.options = $.widget.extend( {}, basePrototype.options );
	$.each( prototype, function( prop, value ) {
		if ( !$.isFunction( value ) ) {
			proxiedPrototype[ prop ] = value;
			return;
		}
		proxiedPrototype[ prop ] = (function() {
			var _super = function() {
					return base.prototype[ prop ].apply( this, arguments );
				},
				_superApply = function( args ) {
					return base.prototype[ prop ].apply( this, args );
				};
			return function() {
				var __super = this._super,
					__superApply = this._superApply,
					returnValue;

				this._super = _super;
				this._superApply = _superApply;

				returnValue = value.apply( this, arguments );

				this._super = __super;
				this._superApply = __superApply;

				return returnValue;
			};
		})();
	});
	constructor.prototype = $.widget.extend( basePrototype, {
		// TODO: remove support for widgetEventPrefix
		// always use the name + a colon as the prefix, e.g., draggable:start
		// don't prefix for widgets that aren't DOM-based
		widgetEventPrefix: existingConstructor ? (basePrototype.widgetEventPrefix || name) : name
	}, proxiedPrototype, {
		constructor: constructor,
		namespace: namespace,
		widgetName: name,
		widgetFullName: fullName
	});

	// If this widget is being redefined then we need to find all widgets that
	// are inheriting from it and redefine all of them so that they inherit from
	// the new version of this widget. We're essentially trying to replace one
	// level in the prototype chain.
	if ( existingConstructor ) {
		$.each( existingConstructor._childConstructors, function( i, child ) {
			var childPrototype = child.prototype;

			// redefine the child widget using the same prototype that was
			// originally used, but inherit from the new version of the base
			$.widget( childPrototype.namespace + "." + childPrototype.widgetName, constructor, child._proto );
		});
		// remove the list of existing child constructors from the old constructor
		// so the old child constructors can be garbage collected
		delete existingConstructor._childConstructors;
	} else {
		base._childConstructors.push( constructor );
	}

	$.widget.bridge( name, constructor );
};

$.widget.extend = function( target ) {
	var input = slice.call( arguments, 1 ),
		inputIndex = 0,
		inputLength = input.length,
		key,
		value;
	for ( ; inputIndex < inputLength; inputIndex++ ) {
		for ( key in input[ inputIndex ] ) {
			value = input[ inputIndex ][ key ];
			if ( input[ inputIndex ].hasOwnProperty( key ) && value !== undefined ) {
				// Clone objects
				if ( $.isPlainObject( value ) ) {
					target[ key ] = $.isPlainObject( target[ key ] ) ?
						$.widget.extend( {}, target[ key ], value ) :
						// Don't extend strings, arrays, etc. with objects
						$.widget.extend( {}, value );
				// Copy everything else by reference
				} else {
					target[ key ] = value;
				}
			}
		}
	}
	return target;
};

$.widget.bridge = function( name, object ) {
	var fullName = object.prototype.widgetFullName || name;
	$.fn[ name ] = function( options ) {
		var isMethodCall = typeof options === "string",
			args = slice.call( arguments, 1 ),
			returnValue = this;

		// allow multiple hashes to be passed on init
		options = !isMethodCall && args.length ?
			$.widget.extend.apply( null, [ options ].concat(args) ) :
			options;

		if ( isMethodCall ) {
			this.each(function() {
				var methodValue,
					instance = $.data( this, fullName );
				if ( !instance ) {
					return $.error( "cannot call methods on " + name + " prior to initialization; " +
						"attempted to call method '" + options + "'" );
				}
				if ( !$.isFunction( instance[options] ) || options.charAt( 0 ) === "_" ) {
					return $.error( "no such method '" + options + "' for " + name + " widget instance" );
				}
				methodValue = instance[ options ].apply( instance, args );
				if ( methodValue !== instance && methodValue !== undefined ) {
					returnValue = methodValue && methodValue.jquery ?
						returnValue.pushStack( methodValue.get() ) :
						methodValue;
					return false;
				}
			});
		} else {
			this.each(function() {
				var instance = $.data( this, fullName );
				if ( instance ) {
					instance.option( options || {} )._init();
				} else {
					$.data( this, fullName, new object( options, this ) );
				}
			});
		}

		return returnValue;
	};
};

$.Widget = function( /* options, element */ ) {};
$.Widget._childConstructors = [];

$.Widget.prototype = {
	widgetName: "widget",
	widgetEventPrefix: "",
	defaultElement: "<div>",
	options: {
		disabled: false,

		// callbacks
		create: null
	},
	_createWidget: function( options, element ) {
		element = $( element || this.defaultElement || this )[ 0 ];
		this.element = $( element );
		this.uuid = uuid++;
		this.eventNamespace = "." + this.widgetName + this.uuid;
		this.options = $.widget.extend( {},
			this.options,
			this._getCreateOptions(),
			options );

		this.bindings = $();
		this.hoverable = $();
		this.focusable = $();

		if ( element !== this ) {
			$.data( element, this.widgetFullName, this );
			this._on( true, this.element, {
				remove: function( event ) {
					if ( event.target === element ) {
						this.destroy();
					}
				}
			});
			this.document = $( element.style ?
				// element within the document
				element.ownerDocument :
				// element is window or document
				element.document || element );
			this.window = $( this.document[0].defaultView || this.document[0].parentWindow );
		}

		this._create();
		this._trigger( "create", null, this._getCreateEventData() );
		this._init();
	},
	_getCreateOptions: $.noop,
	_getCreateEventData: $.noop,
	_create: $.noop,
	_init: $.noop,

	destroy: function() {
		this._destroy();
		// we can probably remove the unbind calls in 2.0
		// all event bindings should go through this._on()
		this.element
			.unbind( this.eventNamespace )
			// 1.9 BC for #7810
			// TODO remove dual storage
			.removeData( this.widgetName )
			.removeData( this.widgetFullName )
			// support: jquery <1.6.3
			// http://bugs.jquery.com/ticket/9413
			.removeData( $.camelCase( this.widgetFullName ) );
		this.widget()
			.unbind( this.eventNamespace )
			.removeAttr( "aria-disabled" )
			.removeClass(
				this.widgetFullName + "-disabled " +
				"ui-state-disabled" );

		// clean up events and states
		this.bindings.unbind( this.eventNamespace );
		this.hoverable.removeClass( "ui-state-hover" );
		this.focusable.removeClass( "ui-state-focus" );
	},
	_destroy: $.noop,

	widget: function() {
		return this.element;
	},

	option: function( key, value ) {
		var options = key,
			parts,
			curOption,
			i;

		if ( arguments.length === 0 ) {
			// don't return a reference to the internal hash
			return $.widget.extend( {}, this.options );
		}

		if ( typeof key === "string" ) {
			// handle nested keys, e.g., "foo.bar" => { foo: { bar: ___ } }
			options = {};
			parts = key.split( "." );
			key = parts.shift();
			if ( parts.length ) {
				curOption = options[ key ] = $.widget.extend( {}, this.options[ key ] );
				for ( i = 0; i < parts.length - 1; i++ ) {
					curOption[ parts[ i ] ] = curOption[ parts[ i ] ] || {};
					curOption = curOption[ parts[ i ] ];
				}
				key = parts.pop();
				if ( arguments.length === 1 ) {
					return curOption[ key ] === undefined ? null : curOption[ key ];
				}
				curOption[ key ] = value;
			} else {
				if ( arguments.length === 1 ) {
					return this.options[ key ] === undefined ? null : this.options[ key ];
				}
				options[ key ] = value;
			}
		}

		this._setOptions( options );

		return this;
	},
	_setOptions: function( options ) {
		var key;

		for ( key in options ) {
			this._setOption( key, options[ key ] );
		}

		return this;
	},
	_setOption: function( key, value ) {
		this.options[ key ] = value;

		if ( key === "disabled" ) {
			this.widget()
				.toggleClass( this.widgetFullName + "-disabled ui-state-disabled", !!value )
				.attr( "aria-disabled", value );
			this.hoverable.removeClass( "ui-state-hover" );
			this.focusable.removeClass( "ui-state-focus" );
		}

		return this;
	},

	enable: function() {
		return this._setOption( "disabled", false );
	},
	disable: function() {
		return this._setOption( "disabled", true );
	},

	_on: function( suppressDisabledCheck, element, handlers ) {
		var delegateElement,
			instance = this;

		// no suppressDisabledCheck flag, shuffle arguments
		if ( typeof suppressDisabledCheck !== "boolean" ) {
			handlers = element;
			element = suppressDisabledCheck;
			suppressDisabledCheck = false;
		}

		// no element argument, shuffle and use this.element
		if ( !handlers ) {
			handlers = element;
			element = this.element;
			delegateElement = this.widget();
		} else {
			// accept selectors, DOM elements
			element = delegateElement = $( element );
			this.bindings = this.bindings.add( element );
		}

		$.each( handlers, function( event, handler ) {
			function handlerProxy() {
				// allow widgets to customize the disabled handling
				// - disabled as an array instead of boolean
				// - disabled class as method for disabling individual parts
				if ( !suppressDisabledCheck &&
						( instance.options.disabled === true ||
							$( this ).hasClass( "ui-state-disabled" ) ) ) {
					return;
				}
				return ( typeof handler === "string" ? instance[ handler ] : handler )
					.apply( instance, arguments );
			}

			// copy the guid so direct unbinding works
			if ( typeof handler !== "string" ) {
				handlerProxy.guid = handler.guid =
					handler.guid || handlerProxy.guid || $.guid++;
			}

			var match = event.match( /^(\w+)\s*(.*)$/ ),
				eventName = match[1] + instance.eventNamespace,
				selector = match[2];
			if ( selector ) {
				delegateElement.delegate( selector, eventName, handlerProxy );
			} else {
				element.bind( eventName, handlerProxy );
			}
		});
	},

	_off: function( element, eventName ) {
		eventName = (eventName || "").split( " " ).join( this.eventNamespace + " " ) + this.eventNamespace;
		element.unbind( eventName ).undelegate( eventName );
	},

	_delay: function( handler, delay ) {
		function handlerProxy() {
			return ( typeof handler === "string" ? instance[ handler ] : handler )
				.apply( instance, arguments );
		}
		var instance = this;
		return setTimeout( handlerProxy, delay || 0 );
	},

	_hoverable: function( element ) {
		this.hoverable = this.hoverable.add( element );
		this._on( element, {
			mouseenter: function( event ) {
				$( event.currentTarget ).addClass( "ui-state-hover" );
			},
			mouseleave: function( event ) {
				$( event.currentTarget ).removeClass( "ui-state-hover" );
			}
		});
	},

	_focusable: function( element ) {
		this.focusable = this.focusable.add( element );
		this._on( element, {
			focusin: function( event ) {
				$( event.currentTarget ).addClass( "ui-state-focus" );
			},
			focusout: function( event ) {
				$( event.currentTarget ).removeClass( "ui-state-focus" );
			}
		});
	},

	_trigger: function( type, event, data ) {
		var prop, orig,
			callback = this.options[ type ];

		data = data || {};
		event = $.Event( event );
		event.type = ( type === this.widgetEventPrefix ?
			type :
			this.widgetEventPrefix + type ).toLowerCase();
		// the original event may come from any element
		// so we need to reset the target on the new event
		event.target = this.element[ 0 ];

		// copy original event properties over to the new event
		orig = event.originalEvent;
		if ( orig ) {
			for ( prop in orig ) {
				if ( !( prop in event ) ) {
					event[ prop ] = orig[ prop ];
				}
			}
		}

		this.element.trigger( event, data );
		return !( $.isFunction( callback ) &&
			callback.apply( this.element[0], [ event ].concat( data ) ) === false ||
			event.isDefaultPrevented() );
	}
};

$.each( { show: "fadeIn", hide: "fadeOut" }, function( method, defaultEffect ) {
	$.Widget.prototype[ "_" + method ] = function( element, options, callback ) {
		if ( typeof options === "string" ) {
			options = { effect: options };
		}
		var hasOptions,
			effectName = !options ?
				method :
				options === true || typeof options === "number" ?
					defaultEffect :
					options.effect || defaultEffect;
		options = options || {};
		if ( typeof options === "number" ) {
			options = { duration: options };
		}
		hasOptions = !$.isEmptyObject( options );
		options.complete = callback;
		if ( options.delay ) {
			element.delay( options.delay );
		}
		if ( hasOptions && $.effects && $.effects.effect[ effectName ] ) {
			element[ method ]( options );
		} else if ( effectName !== method && element[ effectName ] ) {
			element[ effectName ]( options.duration, options.easing, callback );
		} else {
			element.queue(function( next ) {
				$( this )[ method ]();
				if ( callback ) {
					callback.call( element[ 0 ] );
				}
				next();
			});
		}
	};
});

})( $vic );
(function( $, undefined ) {

var mouseHandled = false;
$( document ).mouseup( function() {
	mouseHandled = false;
});

$.widget("ui.mouse", {
	version: "1.10.4",
	options: {
		cancel: "input,textarea,button,select,option",
		distance: 1,
		delay: 0
	},
	_mouseInit: function() {
		var that = this;

		this.element
			.bind("mousedown."+this.widgetName, function(event) {
				return that._mouseDown(event);
			})
			.bind("click."+this.widgetName, function(event) {
				if (true === $.data(event.target, that.widgetName + ".preventClickEvent")) {
					$.removeData(event.target, that.widgetName + ".preventClickEvent");
					event.stopImmediatePropagation();
					return false;
				}
			});

		this.started = false;
	},

	// TODO: make sure destroying one instance of mouse doesn't mess with
	// other instances of mouse
	_mouseDestroy: function() {
		this.element.unbind("."+this.widgetName);
		if ( this._mouseMoveDelegate ) {
			$(document)
				.unbind("mousemove."+this.widgetName, this._mouseMoveDelegate)
				.unbind("mouseup."+this.widgetName, this._mouseUpDelegate);
		}
	},

	_mouseDown: function(event) {
		// don't let more than one widget handle mouseStart
		if( mouseHandled ) { return; }

		// we may have missed mouseup (out of window)
		(this._mouseStarted && this._mouseUp(event));

		this._mouseDownEvent = event;

		var that = this,
			btnIsLeft = (event.which === 1),
			// event.target.nodeName works around a bug in IE 8 with
			// disabled inputs (#7620)
			elIsCancel = (typeof this.options.cancel === "string" && event.target.nodeName ? $(event.target).closest(this.options.cancel).length : false);
		if (!btnIsLeft || elIsCancel || !this._mouseCapture(event)) {
			return true;
		}

		this.mouseDelayMet = !this.options.delay;
		if (!this.mouseDelayMet) {
			this._mouseDelayTimer = setTimeout(function() {
				that.mouseDelayMet = true;
			}, this.options.delay);
		}

		if (this._mouseDistanceMet(event) && this._mouseDelayMet(event)) {
			this._mouseStarted = (this._mouseStart(event) !== false);
			if (!this._mouseStarted) {
				event.preventDefault();
				return true;
			}
		}

		// Click event may never have fired (Gecko & Opera)
		if (true === $.data(event.target, this.widgetName + ".preventClickEvent")) {
			$.removeData(event.target, this.widgetName + ".preventClickEvent");
		}

		// these delegates are required to keep context
		this._mouseMoveDelegate = function(event) {
			return that._mouseMove(event);
		};
		this._mouseUpDelegate = function(event) {
			return that._mouseUp(event);
		};
		$(document)
			.bind("mousemove."+this.widgetName, this._mouseMoveDelegate)
			.bind("mouseup."+this.widgetName, this._mouseUpDelegate);

		event.preventDefault();

		mouseHandled = true;
		return true;
	},

	_mouseMove: function(event) {
		// IE mouseup check - mouseup happened when mouse was out of window
		if ($.ui.ie && ( !document.documentMode || document.documentMode < 9 ) && !event.button) {
			return this._mouseUp(event);
		}

		if (this._mouseStarted) {
			this._mouseDrag(event);
			return event.preventDefault();
		}

		if (this._mouseDistanceMet(event) && this._mouseDelayMet(event)) {
			this._mouseStarted =
				(this._mouseStart(this._mouseDownEvent, event) !== false);
			(this._mouseStarted ? this._mouseDrag(event) : this._mouseUp(event));
		}

		return !this._mouseStarted;
	},

	_mouseUp: function(event) {
		$(document)
			.unbind("mousemove."+this.widgetName, this._mouseMoveDelegate)
			.unbind("mouseup."+this.widgetName, this._mouseUpDelegate);

		if (this._mouseStarted) {
			this._mouseStarted = false;

			if (event.target === this._mouseDownEvent.target) {
				$.data(event.target, this.widgetName + ".preventClickEvent", true);
			}

			this._mouseStop(event);
		}

		return false;
	},

	_mouseDistanceMet: function(event) {
		return (Math.max(
				Math.abs(this._mouseDownEvent.pageX - event.pageX),
				Math.abs(this._mouseDownEvent.pageY - event.pageY)
			) >= this.options.distance
		);
	},

	_mouseDelayMet: function(/* event */) {
		return this.mouseDelayMet;
	},

	// These are placeholder methods, to be overriden by extending plugin
	_mouseStart: function(/* event */) {},
	_mouseDrag: function(/* event */) {},
	_mouseStop: function(/* event */) {},
	_mouseCapture: function(/* event */) { return true; }
});

})($vic);
(function( $, undefined ) {

$.ui = $.ui || {};

var cachedScrollbarWidth,
	max = Math.max,
	abs = Math.abs,
	round = Math.round,
	rhorizontal = /left|center|right/,
	rvertical = /top|center|bottom/,
	roffset = /[\+\-]\d+(\.[\d]+)?%?/,
	rposition = /^\w+/,
	rpercent = /%$/,
	_position = $.fn.position;

function getOffsets( offsets, width, height ) {
	return [
		parseFloat( offsets[ 0 ] ) * ( rpercent.test( offsets[ 0 ] ) ? width / 100 : 1 ),
		parseFloat( offsets[ 1 ] ) * ( rpercent.test( offsets[ 1 ] ) ? height / 100 : 1 )
	];
}

function parseCss( element, property ) {
	return parseInt( $.css( element, property ), 10 ) || 0;
}

function getDimensions( elem ) {
	var raw = elem[0];
	if ( raw.nodeType === 9 ) {
		return {
			width: elem.width(),
			height: elem.height(),
			offset: { top: 0, left: 0 }
		};
	}
	if ( $.isWindow( raw ) ) {
		return {
			width: elem.width(),
			height: elem.height(),
			offset: { top: elem.scrollTop(), left: elem.scrollLeft() }
		};
	}
	if ( raw.preventDefault ) {
		return {
			width: 0,
			height: 0,
			offset: { top: raw.pageY, left: raw.pageX }
		};
	}
	return {
		width: elem.outerWidth(),
		height: elem.outerHeight(),
		offset: elem.offset()
	};
}

$.position = {
	scrollbarWidth: function() {
		if ( cachedScrollbarWidth !== undefined ) {
			return cachedScrollbarWidth;
		}
		var w1, w2,
			div = $( "<div style='display:block;position:absolute;width:50px;height:50px;overflow:hidden;'><div style='height:100px;width:auto;'></div></div>" ),
			innerDiv = div.children()[0];

		$( "body" ).append( div );
		w1 = innerDiv.offsetWidth;
		div.css( "overflow", "scroll" );

		w2 = innerDiv.offsetWidth;

		if ( w1 === w2 ) {
			w2 = div[0].clientWidth;
		}

		div.remove();

		return (cachedScrollbarWidth = w1 - w2);
	},
	getScrollInfo: function( within ) {
		var overflowX = within.isWindow || within.isDocument ? "" :
				within.element.css( "overflow-x" ),
			overflowY = within.isWindow || within.isDocument ? "" :
				within.element.css( "overflow-y" ),
			hasOverflowX = overflowX === "scroll" ||
				( overflowX === "auto" && within.width < within.element[0].scrollWidth ),
			hasOverflowY = overflowY === "scroll" ||
				( overflowY === "auto" && within.height < within.element[0].scrollHeight );
		return {
			width: hasOverflowY ? $.position.scrollbarWidth() : 0,
			height: hasOverflowX ? $.position.scrollbarWidth() : 0
		};
	},
	getWithinInfo: function( element ) {
		var withinElement = $( element || window ),
			isWindow = $.isWindow( withinElement[0] ),
			isDocument = !!withinElement[ 0 ] && withinElement[ 0 ].nodeType === 9;
		return {
			element: withinElement,
			isWindow: isWindow,
			isDocument: isDocument,
			offset: withinElement.offset() || { left: 0, top: 0 },
			scrollLeft: withinElement.scrollLeft(),
			scrollTop: withinElement.scrollTop(),
			width: isWindow ? withinElement.width() : withinElement.outerWidth(),
			height: isWindow ? withinElement.height() : withinElement.outerHeight()
		};
	}
};

$.fn.position = function( options ) {
	if ( !options || !options.of ) {
		return _position.apply( this, arguments );
	}

	// make a copy, we don't want to modify arguments
	options = $.extend( {}, options );

	var atOffset, targetWidth, targetHeight, targetOffset, basePosition, dimensions,
		target = $( options.of ),
		within = $.position.getWithinInfo( options.within ),
		scrollInfo = $.position.getScrollInfo( within ),
		collision = ( options.collision || "flip" ).split( " " ),
		offsets = {};

	dimensions = getDimensions( target );
	if ( target[0].preventDefault ) {
		// force left top to allow flipping
		options.at = "left top";
	}
	targetWidth = dimensions.width;
	targetHeight = dimensions.height;
	targetOffset = dimensions.offset;
	// clone to reuse original targetOffset later
	basePosition = $.extend( {}, targetOffset );

	// force my and at to have valid horizontal and vertical positions
	// if a value is missing or invalid, it will be converted to center
	$.each( [ "my", "at" ], function() {
		var pos = ( options[ this ] || "" ).split( " " ),
			horizontalOffset,
			verticalOffset;

		if ( pos.length === 1) {
			pos = rhorizontal.test( pos[ 0 ] ) ?
				pos.concat( [ "center" ] ) :
				rvertical.test( pos[ 0 ] ) ?
					[ "center" ].concat( pos ) :
					[ "center", "center" ];
		}
		pos[ 0 ] = rhorizontal.test( pos[ 0 ] ) ? pos[ 0 ] : "center";
		pos[ 1 ] = rvertical.test( pos[ 1 ] ) ? pos[ 1 ] : "center";

		// calculate offsets
		horizontalOffset = roffset.exec( pos[ 0 ] );
		verticalOffset = roffset.exec( pos[ 1 ] );
		offsets[ this ] = [
			horizontalOffset ? horizontalOffset[ 0 ] : 0,
			verticalOffset ? verticalOffset[ 0 ] : 0
		];

		// reduce to just the positions without the offsets
		options[ this ] = [
			rposition.exec( pos[ 0 ] )[ 0 ],
			rposition.exec( pos[ 1 ] )[ 0 ]
		];
	});

	// normalize collision option
	if ( collision.length === 1 ) {
		collision[ 1 ] = collision[ 0 ];
	}

	if ( options.at[ 0 ] === "right" ) {
		basePosition.left += targetWidth;
	} else if ( options.at[ 0 ] === "center" ) {
		basePosition.left += targetWidth / 2;
	}

	if ( options.at[ 1 ] === "bottom" ) {
		basePosition.top += targetHeight;
	} else if ( options.at[ 1 ] === "center" ) {
		basePosition.top += targetHeight / 2;
	}

	atOffset = getOffsets( offsets.at, targetWidth, targetHeight );
	basePosition.left += atOffset[ 0 ];
	basePosition.top += atOffset[ 1 ];

	return this.each(function() {
		var collisionPosition, using,
			elem = $( this ),
			elemWidth = elem.outerWidth(),
			elemHeight = elem.outerHeight(),
			marginLeft = parseCss( this, "marginLeft" ),
			marginTop = parseCss( this, "marginTop" ),
			collisionWidth = elemWidth + marginLeft + parseCss( this, "marginRight" ) + scrollInfo.width,
			collisionHeight = elemHeight + marginTop + parseCss( this, "marginBottom" ) + scrollInfo.height,
			position = $.extend( {}, basePosition ),
			myOffset = getOffsets( offsets.my, elem.outerWidth(), elem.outerHeight() );

		if ( options.my[ 0 ] === "right" ) {
			position.left -= elemWidth;
		} else if ( options.my[ 0 ] === "center" ) {
			position.left -= elemWidth / 2;
		}

		if ( options.my[ 1 ] === "bottom" ) {
			position.top -= elemHeight;
		} else if ( options.my[ 1 ] === "center" ) {
			position.top -= elemHeight / 2;
		}

		position.left += myOffset[ 0 ];
		position.top += myOffset[ 1 ];

		// if the browser doesn't support fractions, then round for consistent results
		if ( !$.support.offsetFractions ) {
			position.left = round( position.left );
			position.top = round( position.top );
		}

		collisionPosition = {
			marginLeft: marginLeft,
			marginTop: marginTop
		};

		$.each( [ "left", "top" ], function( i, dir ) {
			if ( $.ui.position[ collision[ i ] ] ) {
				$.ui.position[ collision[ i ] ][ dir ]( position, {
					targetWidth: targetWidth,
					targetHeight: targetHeight,
					elemWidth: elemWidth,
					elemHeight: elemHeight,
					collisionPosition: collisionPosition,
					collisionWidth: collisionWidth,
					collisionHeight: collisionHeight,
					offset: [ atOffset[ 0 ] + myOffset[ 0 ], atOffset [ 1 ] + myOffset[ 1 ] ],
					my: options.my,
					at: options.at,
					within: within,
					elem : elem
				});
			}
		});

		if ( options.using ) {
			// adds feedback as second argument to using callback, if present
			using = function( props ) {
				var left = targetOffset.left - position.left,
					right = left + targetWidth - elemWidth,
					top = targetOffset.top - position.top,
					bottom = top + targetHeight - elemHeight,
					feedback = {
						target: {
							element: target,
							left: targetOffset.left,
							top: targetOffset.top,
							width: targetWidth,
							height: targetHeight
						},
						element: {
							element: elem,
							left: position.left,
							top: position.top,
							width: elemWidth,
							height: elemHeight
						},
						horizontal: right < 0 ? "left" : left > 0 ? "right" : "center",
						vertical: bottom < 0 ? "top" : top > 0 ? "bottom" : "middle"
					};
				if ( targetWidth < elemWidth && abs( left + right ) < targetWidth ) {
					feedback.horizontal = "center";
				}
				if ( targetHeight < elemHeight && abs( top + bottom ) < targetHeight ) {
					feedback.vertical = "middle";
				}
				if ( max( abs( left ), abs( right ) ) > max( abs( top ), abs( bottom ) ) ) {
					feedback.important = "horizontal";
				} else {
					feedback.important = "vertical";
				}
				options.using.call( this, props, feedback );
			};
		}

		elem.offset( $.extend( position, { using: using } ) );
	});
};

$.ui.position = {
	fit: {
		left: function( position, data ) {
			var within = data.within,
				withinOffset = within.isWindow ? within.scrollLeft : within.offset.left,
				outerWidth = within.width,
				collisionPosLeft = position.left - data.collisionPosition.marginLeft,
				overLeft = withinOffset - collisionPosLeft,
				overRight = collisionPosLeft + data.collisionWidth - outerWidth - withinOffset,
				newOverRight;

			// element is wider than within
			if ( data.collisionWidth > outerWidth ) {
				// element is initially over the left side of within
				if ( overLeft > 0 && overRight <= 0 ) {
					newOverRight = position.left + overLeft + data.collisionWidth - outerWidth - withinOffset;
					position.left += overLeft - newOverRight;
				// element is initially over right side of within
				} else if ( overRight > 0 && overLeft <= 0 ) {
					position.left = withinOffset;
				// element is initially over both left and right sides of within
				} else {
					if ( overLeft > overRight ) {
						position.left = withinOffset + outerWidth - data.collisionWidth;
					} else {
						position.left = withinOffset;
					}
				}
			// too far left -> align with left edge
			} else if ( overLeft > 0 ) {
				position.left += overLeft;
			// too far right -> align with right edge
			} else if ( overRight > 0 ) {
				position.left -= overRight;
			// adjust based on position and margin
			} else {
				position.left = max( position.left - collisionPosLeft, position.left );
			}
		},
		top: function( position, data ) {
			var within = data.within,
				withinOffset = within.isWindow ? within.scrollTop : within.offset.top,
				outerHeight = data.within.height,
				collisionPosTop = position.top - data.collisionPosition.marginTop,
				overTop = withinOffset - collisionPosTop,
				overBottom = collisionPosTop + data.collisionHeight - outerHeight - withinOffset,
				newOverBottom;

			// element is taller than within
			if ( data.collisionHeight > outerHeight ) {
				// element is initially over the top of within
				if ( overTop > 0 && overBottom <= 0 ) {
					newOverBottom = position.top + overTop + data.collisionHeight - outerHeight - withinOffset;
					position.top += overTop - newOverBottom;
				// element is initially over bottom of within
				} else if ( overBottom > 0 && overTop <= 0 ) {
					position.top = withinOffset;
				// element is initially over both top and bottom of within
				} else {
					if ( overTop > overBottom ) {
						position.top = withinOffset + outerHeight - data.collisionHeight;
					} else {
						position.top = withinOffset;
					}
				}
			// too far up -> align with top
			} else if ( overTop > 0 ) {
				position.top += overTop;
			// too far down -> align with bottom edge
			} else if ( overBottom > 0 ) {
				position.top -= overBottom;
			// adjust based on position and margin
			} else {
				position.top = max( position.top - collisionPosTop, position.top );
			}
		}
	},
	flip: {
		left: function( position, data ) {
			var within = data.within,
				withinOffset = within.offset.left + within.scrollLeft,
				outerWidth = within.width,
				offsetLeft = within.isWindow ? within.scrollLeft : within.offset.left,
				collisionPosLeft = position.left - data.collisionPosition.marginLeft,
				overLeft = collisionPosLeft - offsetLeft,
				overRight = collisionPosLeft + data.collisionWidth - outerWidth - offsetLeft,
				myOffset = data.my[ 0 ] === "left" ?
					-data.elemWidth :
					data.my[ 0 ] === "right" ?
						data.elemWidth :
						0,
				atOffset = data.at[ 0 ] === "left" ?
					data.targetWidth :
					data.at[ 0 ] === "right" ?
						-data.targetWidth :
						0,
				offset = -2 * data.offset[ 0 ],
				newOverRight,
				newOverLeft;

			if ( overLeft < 0 ) {
				newOverRight = position.left + myOffset + atOffset + offset + data.collisionWidth - outerWidth - withinOffset;
				if ( newOverRight < 0 || newOverRight < abs( overLeft ) ) {
					position.left += myOffset + atOffset + offset;
				}
			}
			else if ( overRight > 0 ) {
				newOverLeft = position.left - data.collisionPosition.marginLeft + myOffset + atOffset + offset - offsetLeft;
				if ( newOverLeft > 0 || abs( newOverLeft ) < overRight ) {
					position.left += myOffset + atOffset + offset;
				}
			}
		},
		top: function( position, data ) {
			var within = data.within,
				withinOffset = within.offset.top + within.scrollTop,
				outerHeight = within.height,
				offsetTop = within.isWindow ? within.scrollTop : within.offset.top,
				collisionPosTop = position.top - data.collisionPosition.marginTop,
				overTop = collisionPosTop - offsetTop,
				overBottom = collisionPosTop + data.collisionHeight - outerHeight - offsetTop,
				top = data.my[ 1 ] === "top",
				myOffset = top ?
					-data.elemHeight :
					data.my[ 1 ] === "bottom" ?
						data.elemHeight :
						0,
				atOffset = data.at[ 1 ] === "top" ?
					data.targetHeight :
					data.at[ 1 ] === "bottom" ?
						-data.targetHeight :
						0,
				offset = -2 * data.offset[ 1 ],
				newOverTop,
				newOverBottom;
			if ( overTop < 0 ) {
				newOverBottom = position.top + myOffset + atOffset + offset + data.collisionHeight - outerHeight - withinOffset;
				if ( ( position.top + myOffset + atOffset + offset) > overTop && ( newOverBottom < 0 || newOverBottom < abs( overTop ) ) ) {
					position.top += myOffset + atOffset + offset;
				}
			}
			else if ( overBottom > 0 ) {
				newOverTop = position.top - data.collisionPosition.marginTop + myOffset + atOffset + offset - offsetTop;
				if ( ( position.top + myOffset + atOffset + offset) > overBottom && ( newOverTop > 0 || abs( newOverTop ) < overBottom ) ) {
					position.top += myOffset + atOffset + offset;
				}
			}
		}
	},
	flipfit: {
		left: function() {
			$.ui.position.flip.left.apply( this, arguments );
			$.ui.position.fit.left.apply( this, arguments );
		},
		top: function() {
			$.ui.position.flip.top.apply( this, arguments );
			$.ui.position.fit.top.apply( this, arguments );
		}
	}
};

// fraction support test
(function () {
	var testElement, testElementParent, testElementStyle, offsetLeft, i,
		body = document.getElementsByTagName( "body" )[ 0 ],
		div = document.createElement( "div" );

	//Create a "fake body" for testing based on method used in jQuery.support
	testElement = document.createElement( body ? "div" : "body" );
	testElementStyle = {
		visibility: "hidden",
		width: 0,
		height: 0,
		border: 0,
		margin: 0,
		background: "none"
	};
	if ( body ) {
		$.extend( testElementStyle, {
			position: "absolute",
			left: "-1000px",
			top: "-1000px"
		});
	}
	for ( i in testElementStyle ) {
		testElement.style[ i ] = testElementStyle[ i ];
	}
	testElement.appendChild( div );
	testElementParent = body || document.documentElement;
	testElementParent.insertBefore( testElement, testElementParent.firstChild );

	div.style.cssText = "position: absolute; left: 10.7432222px;";

	offsetLeft = $( div ).offset().left;
	$.support.offsetFractions = offsetLeft > 10 && offsetLeft < 11;

	testElement.innerHTML = "";
	testElementParent.removeChild( testElement );
})();

}( $vic ) );
(function( $, undefined ) {

var uid = 0,
	hideProps = {},
	showProps = {};

hideProps.height = hideProps.paddingTop = hideProps.paddingBottom =
	hideProps.borderTopWidth = hideProps.borderBottomWidth = "hide";
showProps.height = showProps.paddingTop = showProps.paddingBottom =
	showProps.borderTopWidth = showProps.borderBottomWidth = "show";

$.widget( "ui.accordion", {
	version: "1.10.4",
	options: {
		active: 0,
		animate: {},
		collapsible: false,
		event: "click",
		header: "> li > :first-child,> :not(li):even",
		heightStyle: "auto",
		icons: {
			activeHeader: "ui-icon-triangle-1-s",
			header: "ui-icon-triangle-1-e"
		},

		// callbacks
		activate: null,
		beforeActivate: null
	},

	_create: function() {
		var options = this.options;
		this.prevShow = this.prevHide = $();
		this.element.addClass( "ui-accordion ui-widget ui-helper-reset" )
			// ARIA
			.attr( "role", "tablist" );

		// don't allow collapsible: false and active: false / null
		if ( !options.collapsible && (options.active === false || options.active == null) ) {
			options.active = 0;
		}

		this._processPanels();
		// handle negative values
		if ( options.active < 0 ) {
			options.active += this.headers.length;
		}
		this._refresh();
	},

	_getCreateEventData: function() {
		return {
			header: this.active,
			panel: !this.active.length ? $() : this.active.next(),
			content: !this.active.length ? $() : this.active.next()
		};
	},

	_createIcons: function() {
		var icons = this.options.icons;
		if ( icons ) {
			$( "<span>" )
				.addClass( "ui-accordion-header-icon ui-icon " + icons.header )
				.prependTo( this.headers );
			this.active.children( ".ui-accordion-header-icon" )
				.removeClass( icons.header )
				.addClass( icons.activeHeader );
			this.headers.addClass( "ui-accordion-icons" );
		}
	},

	_destroyIcons: function() {
		this.headers
			.removeClass( "ui-accordion-icons" )
			.children( ".ui-accordion-header-icon" )
				.remove();
	},

	_destroy: function() {
		var contents;

		// clean up main element
		this.element
			.removeClass( "ui-accordion ui-widget ui-helper-reset" )
			.removeAttr( "role" );

		// clean up headers
		this.headers
			.removeClass( "ui-accordion-header ui-accordion-header-active ui-helper-reset ui-state-default ui-corner-all ui-state-active ui-state-disabled ui-corner-top" )
			.removeAttr( "role" )
			.removeAttr( "aria-expanded" )
			.removeAttr( "aria-selected" )
			.removeAttr( "aria-controls" )
			.removeAttr( "tabIndex" )
			.each(function() {
				if ( /^ui-accordion/.test( this.id ) ) {
					this.removeAttribute( "id" );
				}
			});
		this._destroyIcons();

		// clean up content panels
		contents = this.headers.next()
			.css( "display", "" )
			.removeAttr( "role" )
			.removeAttr( "aria-hidden" )
			.removeAttr( "aria-labelledby" )
			.removeClass( "ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content ui-accordion-content-active ui-state-disabled" )
			.each(function() {
				if ( /^ui-accordion/.test( this.id ) ) {
					this.removeAttribute( "id" );
				}
			});
		if ( this.options.heightStyle !== "content" ) {
			contents.css( "height", "" );
		}
	},

	_setOption: function( key, value ) {
		if ( key === "active" ) {
			// _activate() will handle invalid values and update this.options
			this._activate( value );
			return;
		}

		if ( key === "event" ) {
			if ( this.options.event ) {
				this._off( this.headers, this.options.event );
			}
			this._setupEvents( value );
		}

		this._super( key, value );

		// setting collapsible: false while collapsed; open first panel
		if ( key === "collapsible" && !value && this.options.active === false ) {
			this._activate( 0 );
		}

		if ( key === "icons" ) {
			this._destroyIcons();
			if ( value ) {
				this._createIcons();
			}
		}

		// #5332 - opacity doesn't cascade to positioned elements in IE
		// so we need to add the disabled class to the headers and panels
		if ( key === "disabled" ) {
			this.headers.add( this.headers.next() )
				.toggleClass( "ui-state-disabled", !!value );
		}
	},

	_keydown: function( event ) {
		if ( event.altKey || event.ctrlKey ) {
			return;
		}

		var keyCode = $.ui.keyCode,
			length = this.headers.length,
			currentIndex = this.headers.index( event.target ),
			toFocus = false;

		switch ( event.keyCode ) {
			case keyCode.RIGHT:
			case keyCode.DOWN:
				toFocus = this.headers[ ( currentIndex + 1 ) % length ];
				break;
			case keyCode.LEFT:
			case keyCode.UP:
				toFocus = this.headers[ ( currentIndex - 1 + length ) % length ];
				break;
			case keyCode.SPACE:
			case keyCode.ENTER:
				this._eventHandler( event );
				break;
			case keyCode.HOME:
				toFocus = this.headers[ 0 ];
				break;
			case keyCode.END:
				toFocus = this.headers[ length - 1 ];
				break;
		}

		if ( toFocus ) {
			$( event.target ).attr( "tabIndex", -1 );
			$( toFocus ).attr( "tabIndex", 0 );
			toFocus.focus();
			event.preventDefault();
		}
	},

	_panelKeyDown : function( event ) {
		if ( event.keyCode === $.ui.keyCode.UP && event.ctrlKey ) {
			$( event.currentTarget ).prev().focus();
		}
	},

	refresh: function() {
		var options = this.options;
		this._processPanels();

		// was collapsed or no panel
		if ( ( options.active === false && options.collapsible === true ) || !this.headers.length ) {
			options.active = false;
			this.active = $();
		// active false only when collapsible is true
		} else if ( options.active === false ) {
			this._activate( 0 );
		// was active, but active panel is gone
		} else if ( this.active.length && !$.contains( this.element[ 0 ], this.active[ 0 ] ) ) {
			// all remaining panel are disabled
			if ( this.headers.length === this.headers.find(".ui-state-disabled").length ) {
				options.active = false;
				this.active = $();
			// activate previous panel
			} else {
				this._activate( Math.max( 0, options.active - 1 ) );
			}
		// was active, active panel still exists
		} else {
			// make sure active index is correct
			options.active = this.headers.index( this.active );
		}

		this._destroyIcons();

		this._refresh();
	},

	_processPanels: function() {
		this.headers = this.element.find( this.options.header )
			.addClass( "ui-accordion-header ui-helper-reset ui-state-default ui-corner-all" );

		this.headers.next()
			.addClass( "ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" )
			.filter(":not(.ui-accordion-content-active)")
			.hide();
	},

	_refresh: function() {
		var maxHeight,
			options = this.options,
			heightStyle = options.heightStyle,
			parent = this.element.parent(),
			accordionId = this.accordionId = "ui-accordion-" +
				(this.element.attr( "id" ) || ++uid);

		this.active = this._findActive( options.active )
			.addClass( "ui-accordion-header-active ui-state-active ui-corner-top" )
			.removeClass( "ui-corner-all" );
		this.active.next()
			.addClass( "ui-accordion-content-active" )
			.show();

		this.headers
			.attr( "role", "tab" )
			.each(function( i ) {
				var header = $( this ),
					headerId = header.attr( "id" ),
					panel = header.next(),
					panelId = panel.attr( "id" );
				if ( !headerId ) {
					headerId = accordionId + "-header-" + i;
					header.attr( "id", headerId );
				}
				if ( !panelId ) {
					panelId = accordionId + "-panel-" + i;
					panel.attr( "id", panelId );
				}
				header.attr( "aria-controls", panelId );
				panel.attr( "aria-labelledby", headerId );
			})
			.next()
				.attr( "role", "tabpanel" );

		this.headers
			.not( this.active )
			.attr({
				"aria-selected": "false",
				"aria-expanded": "false",
				tabIndex: -1
			})
			.next()
				.attr({
					"aria-hidden": "true"
				})
				.hide();

		// make sure at least one header is in the tab order
		if ( !this.active.length ) {
			this.headers.eq( 0 ).attr( "tabIndex", 0 );
		} else {
			this.active.attr({
				"aria-selected": "true",
				"aria-expanded": "true",
				tabIndex: 0
			})
			.next()
				.attr({
					"aria-hidden": "false"
				});
		}

		this._createIcons();

		this._setupEvents( options.event );

		if ( heightStyle === "fill" ) {
			maxHeight = parent.height();
			this.element.siblings( ":visible" ).each(function() {
				var elem = $( this ),
					position = elem.css( "position" );

				if ( position === "absolute" || position === "fixed" ) {
					return;
				}
				maxHeight -= elem.outerHeight( true );
			});

			this.headers.each(function() {
				maxHeight -= $( this ).outerHeight( true );
			});

			this.headers.next()
				.each(function() {
					$( this ).height( Math.max( 0, maxHeight -
						$( this ).innerHeight() + $( this ).height() ) );
				})
				.css( "overflow", "auto" );
		} else if ( heightStyle === "auto" ) {
			maxHeight = 0;
			this.headers.next()
				.each(function() {
					maxHeight = Math.max( maxHeight, $( this ).css( "height", "" ).height() );
				})
				.height( maxHeight );
		}
	},

	_activate: function( index ) {
		var active = this._findActive( index )[ 0 ];

		// trying to activate the already active panel
		if ( active === this.active[ 0 ] ) {
			return;
		}

		// trying to collapse, simulate a click on the currently active header
		active = active || this.active[ 0 ];

		this._eventHandler({
			target: active,
			currentTarget: active,
			preventDefault: $.noop
		});
	},

	_findActive: function( selector ) {
		return typeof selector === "number" ? this.headers.eq( selector ) : $();
	},

	_setupEvents: function( event ) {
		var events = {
			keydown: "_keydown"
		};
		if ( event ) {
			$.each( event.split(" "), function( index, eventName ) {
				events[ eventName ] = "_eventHandler";
			});
		}

		this._off( this.headers.add( this.headers.next() ) );
		this._on( this.headers, events );
		this._on( this.headers.next(), { keydown: "_panelKeyDown" });
		this._hoverable( this.headers );
		this._focusable( this.headers );
	},

	_eventHandler: function( event ) {
		var options = this.options,
			active = this.active,
			clicked = $( event.currentTarget ),
			clickedIsActive = clicked[ 0 ] === active[ 0 ],
			collapsing = clickedIsActive && options.collapsible,
			toShow = collapsing ? $() : clicked.next(),
			toHide = active.next(),
			eventData = {
				oldHeader: active,
				oldPanel: toHide,
				newHeader: collapsing ? $() : clicked,
				newPanel: toShow
			};

		event.preventDefault();

		if (
				// click on active header, but not collapsible
				( clickedIsActive && !options.collapsible ) ||
				// allow canceling activation
				( this._trigger( "beforeActivate", event, eventData ) === false ) ) {
			return;
		}

		options.active = collapsing ? false : this.headers.index( clicked );

		// when the call to ._toggle() comes after the class changes
		// it causes a very odd bug in IE 8 (see #6720)
		this.active = clickedIsActive ? $() : clicked;
		this._toggle( eventData );

		// switch classes
		// corner classes on the previously active header stay after the animation
		active.removeClass( "ui-accordion-header-active ui-state-active" );
		if ( options.icons ) {
			active.children( ".ui-accordion-header-icon" )
				.removeClass( options.icons.activeHeader )
				.addClass( options.icons.header );
		}

		if ( !clickedIsActive ) {
			clicked
				.removeClass( "ui-corner-all" )
				.addClass( "ui-accordion-header-active ui-state-active ui-corner-top" );
			if ( options.icons ) {
				clicked.children( ".ui-accordion-header-icon" )
					.removeClass( options.icons.header )
					.addClass( options.icons.activeHeader );
			}

			clicked
				.next()
				.addClass( "ui-accordion-content-active" );
		}
	},

	_toggle: function( data ) {
		var toShow = data.newPanel,
			toHide = this.prevShow.length ? this.prevShow : data.oldPanel;

		// handle activating a panel during the animation for another activation
		this.prevShow.add( this.prevHide ).stop( true, true );
		this.prevShow = toShow;
		this.prevHide = toHide;

		if ( this.options.animate ) {
			this._animate( toShow, toHide, data );
		} else {
			toHide.hide();
			toShow.show();
			this._toggleComplete( data );
		}

		toHide.attr({
			"aria-hidden": "true"
		});
		toHide.prev().attr( "aria-selected", "false" );
		// if we're switching panels, remove the old header from the tab order
		// if we're opening from collapsed state, remove the previous header from the tab order
		// if we're collapsing, then keep the collapsing header in the tab order
		if ( toShow.length && toHide.length ) {
			toHide.prev().attr({
				"tabIndex": -1,
				"aria-expanded": "false"
			});
		} else if ( toShow.length ) {
			this.headers.filter(function() {
				return $( this ).attr( "tabIndex" ) === 0;
			})
			.attr( "tabIndex", -1 );
		}

		toShow
			.attr( "aria-hidden", "false" )
			.prev()
				.attr({
					"aria-selected": "true",
					tabIndex: 0,
					"aria-expanded": "true"
				});
	},

	_animate: function( toShow, toHide, data ) {
		var total, easing, duration,
			that = this,
			adjust = 0,
			down = toShow.length &&
				( !toHide.length || ( toShow.index() < toHide.index() ) ),
			animate = this.options.animate || {},
			options = down && animate.down || animate,
			complete = function() {
				that._toggleComplete( data );
			};

		if ( typeof options === "number" ) {
			duration = options;
		}
		if ( typeof options === "string" ) {
			easing = options;
		}
		// fall back from options to animation in case of partial down settings
		easing = easing || options.easing || animate.easing;
		duration = duration || options.duration || animate.duration;

		if ( !toHide.length ) {
			return toShow.animate( showProps, duration, easing, complete );
		}
		if ( !toShow.length ) {
			return toHide.animate( hideProps, duration, easing, complete );
		}

		total = toShow.show().outerHeight();
		toHide.animate( hideProps, {
			duration: duration,
			easing: easing,
			step: function( now, fx ) {
				fx.now = Math.round( now );
			}
		});
		toShow
			.hide()
			.animate( showProps, {
				duration: duration,
				easing: easing,
				complete: complete,
				step: function( now, fx ) {
					fx.now = Math.round( now );
					if ( fx.prop !== "height" ) {
						adjust += fx.now;
					} else if ( that.options.heightStyle !== "content" ) {
						fx.now = Math.round( total - toHide.outerHeight() - adjust );
						adjust = 0;
					}
				}
			});
	},

	_toggleComplete: function( data ) {
		var toHide = data.oldPanel;

		toHide
			.removeClass( "ui-accordion-content-active" )
			.prev()
				.removeClass( "ui-corner-top" )
				.addClass( "ui-corner-all" );

		// Work around for rendering bug in IE (#5421)
		if ( toHide.length ) {
			toHide.parent()[0].className = toHide.parent()[0].className;
		}
		this._trigger( "activate", null, data );
	}
});

})( $vic );
(function( $, undefined ) {

$.widget( "ui.autocomplete", {
	version: "1.10.4",
	defaultElement: "<input>",
	options: {
		appendTo: null,
		autoFocus: false,
		delay: 300,
		minLength: 1,
		position: {
			my: "left top",
			at: "left bottom",
			collision: "none"
		},
		source: null,

		// callbacks
		change: null,
		close: null,
		focus: null,
		open: null,
		response: null,
		search: null,
		select: null
	},

	requestIndex: 0,
	pending: 0,

	_create: function() {
		// Some browsers only repeat keydown events, not keypress events,
		// so we use the suppressKeyPress flag to determine if we've already
		// handled the keydown event. #7269
		// Unfortunately the code for & in keypress is the same as the up arrow,
		// so we use the suppressKeyPressRepeat flag to avoid handling keypress
		// events when we know the keydown event was used to modify the
		// search term. #7799
		var suppressKeyPress, suppressKeyPressRepeat, suppressInput,
			nodeName = this.element[0].nodeName.toLowerCase(),
			isTextarea = nodeName === "textarea",
			isInput = nodeName === "input";

		this.isMultiLine =
			// Textareas are always multi-line
			isTextarea ? true :
			// Inputs are always single-line, even if inside a contentEditable element
			// IE also treats inputs as contentEditable
			isInput ? false :
			// All other element types are determined by whether or not they're contentEditable
			this.element.prop( "isContentEditable" );

		this.valueMethod = this.element[ isTextarea || isInput ? "val" : "text" ];
		this.isNewMenu = true;

		this.element
			.addClass( "ui-autocomplete-input" )
			.attr( "autocomplete", "off" );

		this._on( this.element, {
			keydown: function( event ) {
				if ( this.element.prop( "readOnly" ) ) {
					suppressKeyPress = true;
					suppressInput = true;
					suppressKeyPressRepeat = true;
					return;
				}

				suppressKeyPress = false;
				suppressInput = false;
				suppressKeyPressRepeat = false;
				var keyCode = $.ui.keyCode;
				switch( event.keyCode ) {
				case keyCode.PAGE_UP:
					suppressKeyPress = true;
					this._move( "previousPage", event );
					break;
				case keyCode.PAGE_DOWN:
					suppressKeyPress = true;
					this._move( "nextPage", event );
					break;
				case keyCode.UP:
					suppressKeyPress = true;
					this._keyEvent( "previous", event );
					break;
				case keyCode.DOWN:
					suppressKeyPress = true;
					this._keyEvent( "next", event );
					break;
				case keyCode.ENTER:
				case keyCode.NUMPAD_ENTER:
					// when menu is open and has focus
					if ( this.menu.active ) {
						// #6055 - Opera still allows the keypress to occur
						// which causes forms to submit
						suppressKeyPress = true;
						event.preventDefault();
						this.menu.select( event );
					}
					break;
				case keyCode.TAB:
					if ( this.menu.active ) {
						this.menu.select( event );
					}
					break;
				case keyCode.ESCAPE:
					if ( this.menu.element.is( ":visible" ) ) {
						this._value( this.term );
						this.close( event );
						// Different browsers have different default behavior for escape
						// Single press can mean undo or clear
						// Double press in IE means clear the whole form
						event.preventDefault();
					}
					break;
				default:
					suppressKeyPressRepeat = true;
					// search timeout should be triggered before the input value is changed
					this._searchTimeout( event );
					break;
				}
			},
			keypress: function( event ) {
				if ( suppressKeyPress ) {
					suppressKeyPress = false;
					if ( !this.isMultiLine || this.menu.element.is( ":visible" ) ) {
						event.preventDefault();
					}
					return;
				}
				if ( suppressKeyPressRepeat ) {
					return;
				}

				// replicate some key handlers to allow them to repeat in Firefox and Opera
				var keyCode = $.ui.keyCode;
				switch( event.keyCode ) {
				case keyCode.PAGE_UP:
					this._move( "previousPage", event );
					break;
				case keyCode.PAGE_DOWN:
					this._move( "nextPage", event );
					break;
				case keyCode.UP:
					this._keyEvent( "previous", event );
					break;
				case keyCode.DOWN:
					this._keyEvent( "next", event );
					break;
				}
			},
			input: function( event ) {
				if ( suppressInput ) {
					suppressInput = false;
					event.preventDefault();
					return;
				}
				this._searchTimeout( event );
			},
			focus: function() {
				this.selectedItem = null;
				this.previous = this._value();
			},
			blur: function( event ) {
				if ( this.cancelBlur ) {
					delete this.cancelBlur;
					return;
				}

				clearTimeout( this.searching );
				this.close( event );
				this._change( event );
			}
		});

		this._initSource();
		this.menu = $( "<ul>" )
			.addClass( "ui-autocomplete ui-front" )
			.appendTo( this._appendTo() )
			.menu({
				// disable ARIA support, the live region takes care of that
				role: null
			})
			.hide()
			.data( "ui-menu" );

		this._on( this.menu.element, {
			mousedown: function( event ) {
				// prevent moving focus out of the text field
				event.preventDefault();

				// IE doesn't prevent moving focus even with event.preventDefault()
				// so we set a flag to know when we should ignore the blur event
				this.cancelBlur = true;
				this._delay(function() {
					delete this.cancelBlur;
				});

				// clicking on the scrollbar causes focus to shift to the body
				// but we can't detect a mouseup or a click immediately afterward
				// so we have to track the next mousedown and close the menu if
				// the user clicks somewhere outside of the autocomplete
				var menuElement = this.menu.element[ 0 ];
				if ( !$( event.target ).closest( ".ui-menu-item" ).length ) {
					this._delay(function() {
						var that = this;
						this.document.one( "mousedown", function( event ) {
							if ( event.target !== that.element[ 0 ] &&
									event.target !== menuElement &&
									!$.contains( menuElement, event.target ) ) {
								that.close();
							}
						});
					});
				}
			},
			menufocus: function( event, ui ) {
				// support: Firefox
				// Prevent accidental activation of menu items in Firefox (#7024 #9118)
				if ( this.isNewMenu ) {
					this.isNewMenu = false;
					if ( event.originalEvent && /^mouse/.test( event.originalEvent.type ) ) {
						this.menu.blur();

						this.document.one( "mousemove", function() {
							$( event.target ).trigger( event.originalEvent );
						});

						return;
					}
				}

				var item = ui.item.data( "ui-autocomplete-item" );
				if ( false !== this._trigger( "focus", event, { item: item } ) ) {
					// use value to match what will end up in the input, if it was a key event
					if ( event.originalEvent && /^key/.test( event.originalEvent.type ) ) {
						this._value( item.value );
					}
				} else {
					// Normally the input is populated with the item's value as the
					// menu is navigated, causing screen readers to notice a change and
					// announce the item. Since the focus event was canceled, this doesn't
					// happen, so we update the live region so that screen readers can
					// still notice the change and announce it.
					this.liveRegion.text( item.value );
				}
			},
			menuselect: function( event, ui ) {
				var item = ui.item.data( "ui-autocomplete-item" ),
					previous = this.previous;

				// only trigger when focus was lost (click on menu)
				if ( this.element[0] !== this.document[0].activeElement ) {
					this.element.focus();
					this.previous = previous;
					// #6109 - IE triggers two focus events and the second
					// is asynchronous, so we need to reset the previous
					// term synchronously and asynchronously :-(
					this._delay(function() {
						this.previous = previous;
						this.selectedItem = item;
					});
				}

				if ( false !== this._trigger( "select", event, { item: item } ) ) {
					this._value( item.value );
				}
				// reset the term after the select event
				// this allows custom select handling to work properly
				this.term = this._value();

				this.close( event );
				this.selectedItem = item;
			}
		});

		this.liveRegion = $( "<span>", {
				role: "status",
				"aria-live": "polite"
			})
			.addClass( "ui-helper-hidden-accessible" )
			.insertBefore( this.element );

		// turning off autocomplete prevents the browser from remembering the
		// value when navigating through history, so we re-enable autocomplete
		// if the page is unloaded before the widget is destroyed. #7790
		this._on( this.window, {
			beforeunload: function() {
				this.element.removeAttr( "autocomplete" );
			}
		});
	},

	_destroy: function() {
		clearTimeout( this.searching );
		this.element
			.removeClass( "ui-autocomplete-input" )
			.removeAttr( "autocomplete" );
		this.menu.element.remove();
		this.liveRegion.remove();
	},

	_setOption: function( key, value ) {
		this._super( key, value );
		if ( key === "source" ) {
			this._initSource();
		}
		if ( key === "appendTo" ) {
			this.menu.element.appendTo( this._appendTo() );
		}
		if ( key === "disabled" && value && this.xhr ) {
			this.xhr.abort();
		}
	},

	_appendTo: function() {
		var element = this.options.appendTo;

		if ( element ) {
			element = element.jquery || element.nodeType ?
				$( element ) :
				this.document.find( element ).eq( 0 );
		}

		if ( !element ) {
			element = this.element.closest( ".ui-front" );
		}

		if ( !element.length ) {
			element = this.document[0].body;
		}

		return element;
	},

	_initSource: function() {
		var array, url,
			that = this;
		if ( $.isArray(this.options.source) ) {
			array = this.options.source;
			this.source = function( request, response ) {
				response( $.ui.autocomplete.filter( array, request.term ) );
			};
		} else if ( typeof this.options.source === "string" ) {
			url = this.options.source;
			this.source = function( request, response ) {
				if ( that.xhr ) {
					that.xhr.abort();
				}
				that.xhr = $.ajax({
					url: url,
					data: request,
					dataType: "json",
					success: function( data ) {
						response( data );
					},
					error: function() {
						response( [] );
					}
				});
			};
		} else {
			this.source = this.options.source;
		}
	},

	_searchTimeout: function( event ) {
		clearTimeout( this.searching );
		this.searching = this._delay(function() {
			// only search if the value has changed
			if ( this.term !== this._value() ) {
				this.selectedItem = null;
				this.search( null, event );
			}
		}, this.options.delay );
	},

	search: function( value, event ) {
		value = value != null ? value : this._value();

		// always save the actual value, not the one passed as an argument
		this.term = this._value();

		if ( value.length < this.options.minLength ) {
			return this.close( event );
		}

		if ( this._trigger( "search", event ) === false ) {
			return;
		}

		return this._search( value );
	},

	_search: function( value ) {
		this.pending++;
		this.element.addClass( "ui-autocomplete-loading" );
		this.cancelSearch = false;

		this.source( { term: value }, this._response() );
	},

	_response: function() {
		var index = ++this.requestIndex;

		return $.proxy(function( content ) {
			if ( index === this.requestIndex ) {
				this.__response( content );
			}

			this.pending--;
			if ( !this.pending ) {
				this.element.removeClass( "ui-autocomplete-loading" );
			}
		}, this );
	},

	__response: function( content ) {
		if ( content ) {
			content = this._normalize( content );
		}
		this._trigger( "response", null, { content: content } );
		if ( !this.options.disabled && content && content.length && !this.cancelSearch ) {
			this._suggest( content );
			this._trigger( "open" );
		} else {
			// use ._close() instead of .close() so we don't cancel future searches
			this._close();
		}
	},

	close: function( event ) {
		this.cancelSearch = true;
		this._close( event );
	},

	_close: function( event ) {
		if ( this.menu.element.is( ":visible" ) ) {
			this.menu.element.hide();
			this.menu.blur();
			this.isNewMenu = true;
			this._trigger( "close", event );
		}
	},

	_change: function( event ) {
		if ( this.previous !== this._value() ) {
			this._trigger( "change", event, { item: this.selectedItem } );
		}
	},

	_normalize: function( items ) {
		// assume all items have the right format when the first item is complete
		if ( items.length && items[0].label && items[0].value ) {
			return items;
		}
		return $.map( items, function( item ) {
			if ( typeof item === "string" ) {
				return {
					label: item,
					value: item
				};
			}
			return $.extend({
				label: item.label || item.value,
				value: item.value || item.label
			}, item );
		});
	},

	_suggest: function( items ) {
		var ul = this.menu.element.empty();
		this._renderMenu( ul, items );
		this.isNewMenu = true;
		this.menu.refresh();

		// size and position menu
		ul.show();
		this._resizeMenu();
		ul.position( $.extend({
			of: this.element
		}, this.options.position ));

		if ( this.options.autoFocus ) {
			this.menu.next();
		}
	},

	_resizeMenu: function() {
		var ul = this.menu.element;
		ul.outerWidth( Math.max(
			// Firefox wraps long text (possibly a rounding bug)
			// so we add 1px to avoid the wrapping (#7513)
			ul.width( "" ).outerWidth() + 1,
			this.element.outerWidth()
		) );
	},

	_renderMenu: function( ul, items ) {
		var that = this;
		$.each( items, function( index, item ) {
			that._renderItemData( ul, item );
		});
	},

	_renderItemData: function( ul, item ) {
		return this._renderItem( ul, item ).data( "ui-autocomplete-item", item );
	},

	_renderItem: function( ul, item ) {
		return $( "<li>" )
			.append( $( "<a>" ).text( item.label ) )
			.appendTo( ul );
	},

	_move: function( direction, event ) {
		if ( !this.menu.element.is( ":visible" ) ) {
			this.search( null, event );
			return;
		}
		if ( this.menu.isFirstItem() && /^previous/.test( direction ) ||
				this.menu.isLastItem() && /^next/.test( direction ) ) {
			this._value( this.term );
			this.menu.blur();
			return;
		}
		this.menu[ direction ]( event );
	},

	widget: function() {
		return this.menu.element;
	},

	_value: function() {
		return this.valueMethod.apply( this.element, arguments );
	},

	_keyEvent: function( keyEvent, event ) {
		if ( !this.isMultiLine || this.menu.element.is( ":visible" ) ) {
			this._move( keyEvent, event );

			// prevents moving cursor to beginning/end of the text field in some browsers
			event.preventDefault();
		}
	}
});

$.extend( $.ui.autocomplete, {
	escapeRegex: function( value ) {
		return value.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g, "\\$&");
	},
	filter: function(array, term) {
		var matcher = new RegExp( $.ui.autocomplete.escapeRegex(term), "i" );
		return $.grep( array, function(value) {
			return matcher.test( value.label || value.value || value );
		});
	}
});


// live region extension, adding a `messages` option
// NOTE: This is an experimental API. We are still investigating
// a full solution for string manipulation and internationalization.
$.widget( "ui.autocomplete", $.ui.autocomplete, {
	options: {
		messages: {
			noResults: "No search results.",
			results: function( amount ) {
				return amount + ( amount > 1 ? " results are" : " result is" ) +
					" available, use up and down arrow keys to navigate.";
			}
		}
	},

	__response: function( content ) {
		var message;
		this._superApply( arguments );
		if ( this.options.disabled || this.cancelSearch ) {
			return;
		}
		if ( content && content.length ) {
			message = this.options.messages.results( content.length );
		} else {
			message = this.options.messages.noResults;
		}
		this.liveRegion.text( message );
	}
});

}( $vic ));
(function( $, undefined ) {

var lastActive,
	baseClasses = "ui-button ui-widget ui-state-default ui-corner-all",
	typeClasses = "ui-button-icons-only ui-button-icon-only ui-button-text-icons ui-button-text-icon-primary ui-button-text-icon-secondary ui-button-text-only",
	formResetHandler = function() {
		var form = $( this );
		setTimeout(function() {
			form.find( ":ui-button" ).button( "refresh" );
		}, 1 );
	},
	radioGroup = function( radio ) {
		var name = radio.name,
			form = radio.form,
			radios = $( [] );
		if ( name ) {
			name = name.replace( /'/g, "\\'" );
			if ( form ) {
				radios = $( form ).find( "[name='" + name + "']" );
			} else {
				radios = $( "[name='" + name + "']", radio.ownerDocument )
					.filter(function() {
						return !this.form;
					});
			}
		}
		return radios;
	};

$.widget( "ui.button", {
	version: "1.10.4",
	defaultElement: "<button>",
	options: {
		disabled: null,
		text: true,
		label: null,
		icons: {
			primary: null,
			secondary: null
		}
	},
	_create: function() {
		this.element.closest( "form" )
			.unbind( "reset" + this.eventNamespace )
			.bind( "reset" + this.eventNamespace, formResetHandler );

		if ( typeof this.options.disabled !== "boolean" ) {
			this.options.disabled = !!this.element.prop( "disabled" );
		} else {
			this.element.prop( "disabled", this.options.disabled );
		}

		this._determineButtonType();
		this.hasTitle = !!this.buttonElement.attr( "title" );

		var that = this,
			options = this.options,
			toggleButton = this.type === "checkbox" || this.type === "radio",
			activeClass = !toggleButton ? "ui-state-active" : "";

		if ( options.label === null ) {
			options.label = (this.type === "input" ? this.buttonElement.val() : this.buttonElement.html());
		}

		this._hoverable( this.buttonElement );

		this.buttonElement
			.addClass( baseClasses )
			.attr( "role", "button" )
			.bind( "mouseenter" + this.eventNamespace, function() {
				if ( options.disabled ) {
					return;
				}
				if ( this === lastActive ) {
					$( this ).addClass( "ui-state-active" );
				}
			})
			.bind( "mouseleave" + this.eventNamespace, function() {
				if ( options.disabled ) {
					return;
				}
				$( this ).removeClass( activeClass );
			})
			.bind( "click" + this.eventNamespace, function( event ) {
				if ( options.disabled ) {
					event.preventDefault();
					event.stopImmediatePropagation();
				}
			});

		// Can't use _focusable() because the element that receives focus
		// and the element that gets the ui-state-focus class are different
		this._on({
			focus: function() {
				this.buttonElement.addClass( "ui-state-focus" );
			},
			blur: function() {
				this.buttonElement.removeClass( "ui-state-focus" );
			}
		});

		if ( toggleButton ) {
			this.element.bind( "change" + this.eventNamespace, function() {
				that.refresh();
			});
		}

		if ( this.type === "checkbox" ) {
			this.buttonElement.bind( "click" + this.eventNamespace, function() {
				if ( options.disabled ) {
					return false;
				}
			});
		} else if ( this.type === "radio" ) {
			this.buttonElement.bind( "click" + this.eventNamespace, function() {
				if ( options.disabled ) {
					return false;
				}
				$( this ).addClass( "ui-state-active" );
				that.buttonElement.attr( "aria-pressed", "true" );

				var radio = that.element[ 0 ];
				radioGroup( radio )
					.not( radio )
					.map(function() {
						return $( this ).button( "widget" )[ 0 ];
					})
					.removeClass( "ui-state-active" )
					.attr( "aria-pressed", "false" );
			});
		} else {
			this.buttonElement
				.bind( "mousedown" + this.eventNamespace, function() {
					if ( options.disabled ) {
						return false;
					}
					$( this ).addClass( "ui-state-active" );
					lastActive = this;
					that.document.one( "mouseup", function() {
						lastActive = null;
					});
				})
				.bind( "mouseup" + this.eventNamespace, function() {
					if ( options.disabled ) {
						return false;
					}
					$( this ).removeClass( "ui-state-active" );
				})
				.bind( "keydown" + this.eventNamespace, function(event) {
					if ( options.disabled ) {
						return false;
					}
					if ( event.keyCode === $.ui.keyCode.SPACE || event.keyCode === $.ui.keyCode.ENTER ) {
						$( this ).addClass( "ui-state-active" );
					}
				})
				// see #8559, we bind to blur here in case the button element loses
				// focus between keydown and keyup, it would be left in an "active" state
				.bind( "keyup" + this.eventNamespace + " blur" + this.eventNamespace, function() {
					$( this ).removeClass( "ui-state-active" );
				});

			if ( this.buttonElement.is("a") ) {
				this.buttonElement.keyup(function(event) {
					if ( event.keyCode === $.ui.keyCode.SPACE ) {
						// TODO pass through original event correctly (just as 2nd argument doesn't work)
						$( this ).click();
					}
				});
			}
		}

		// TODO: pull out $.Widget's handling for the disabled option into
		// $.Widget.prototype._setOptionDisabled so it's easy to proxy and can
		// be overridden by individual plugins
		this._setOption( "disabled", options.disabled );
		this._resetButton();
	},

	_determineButtonType: function() {
		var ancestor, labelSelector, checked;

		if ( this.element.is("[type=checkbox]") ) {
			this.type = "checkbox";
		} else if ( this.element.is("[type=radio]") ) {
			this.type = "radio";
		} else if ( this.element.is("input") ) {
			this.type = "input";
		} else {
			this.type = "button";
		}

		if ( this.type === "checkbox" || this.type === "radio" ) {
			// we don't search against the document in case the element
			// is disconnected from the DOM
			ancestor = this.element.parents().last();
			labelSelector = "label[for='" + this.element.attr("id") + "']";
			this.buttonElement = ancestor.find( labelSelector );
			if ( !this.buttonElement.length ) {
				ancestor = ancestor.length ? ancestor.siblings() : this.element.siblings();
				this.buttonElement = ancestor.filter( labelSelector );
				if ( !this.buttonElement.length ) {
					this.buttonElement = ancestor.find( labelSelector );
				}
			}
			this.element.addClass( "ui-helper-hidden-accessible" );

			checked = this.element.is( ":checked" );
			if ( checked ) {
				this.buttonElement.addClass( "ui-state-active" );
			}
			this.buttonElement.prop( "aria-pressed", checked );
		} else {
			this.buttonElement = this.element;
		}
	},

	widget: function() {
		return this.buttonElement;
	},

	_destroy: function() {
		this.element
			.removeClass( "ui-helper-hidden-accessible" );
		this.buttonElement
			.removeClass( baseClasses + " ui-state-active " + typeClasses )
			.removeAttr( "role" )
			.removeAttr( "aria-pressed" )
			.html( this.buttonElement.find(".ui-button-text").html() );

		if ( !this.hasTitle ) {
			this.buttonElement.removeAttr( "title" );
		}
	},

	_setOption: function( key, value ) {
		this._super( key, value );
		if ( key === "disabled" ) {
			this.element.prop( "disabled", !!value );
			if ( value ) {
				this.buttonElement.removeClass( "ui-state-focus" );
			}
			return;
		}
		this._resetButton();
	},

	refresh: function() {
		//See #8237 & #8828
		var isDisabled = this.element.is( "input, button" ) ? this.element.is( ":disabled" ) : this.element.hasClass( "ui-button-disabled" );

		if ( isDisabled !== this.options.disabled ) {
			this._setOption( "disabled", isDisabled );
		}
		if ( this.type === "radio" ) {
			radioGroup( this.element[0] ).each(function() {
				if ( $( this ).is( ":checked" ) ) {
					$( this ).button( "widget" )
						.addClass( "ui-state-active" )
						.attr( "aria-pressed", "true" );
				} else {
					$( this ).button( "widget" )
						.removeClass( "ui-state-active" )
						.attr( "aria-pressed", "false" );
				}
			});
		} else if ( this.type === "checkbox" ) {
			if ( this.element.is( ":checked" ) ) {
				this.buttonElement
					.addClass( "ui-state-active" )
					.attr( "aria-pressed", "true" );
			} else {
				this.buttonElement
					.removeClass( "ui-state-active" )
					.attr( "aria-pressed", "false" );
			}
		}
	},

	_resetButton: function() {
		if ( this.type === "input" ) {
			if ( this.options.label ) {
				this.element.val( this.options.label );
			}
			return;
		}
		var buttonElement = this.buttonElement.removeClass( typeClasses ),
			buttonText = $( "<span></span>", this.document[0] )
				.addClass( "ui-button-text" )
				.html( this.options.label )
				.appendTo( buttonElement.empty() )
				.text(),
			icons = this.options.icons,
			multipleIcons = icons.primary && icons.secondary,
			buttonClasses = [];

		if ( icons.primary || icons.secondary ) {
			if ( this.options.text ) {
				buttonClasses.push( "ui-button-text-icon" + ( multipleIcons ? "s" : ( icons.primary ? "-primary" : "-secondary" ) ) );
			}

			if ( icons.primary ) {
				buttonElement.prepend( "<span class='ui-button-icon-primary ui-icon " + icons.primary + "'></span>" );
			}

			if ( icons.secondary ) {
				buttonElement.append( "<span class='ui-button-icon-secondary ui-icon " + icons.secondary + "'></span>" );
			}

			if ( !this.options.text ) {
				buttonClasses.push( multipleIcons ? "ui-button-icons-only" : "ui-button-icon-only" );

				if ( !this.hasTitle ) {
					buttonElement.attr( "title", $.trim( buttonText ) );
				}
			}
		} else {
			buttonClasses.push( "ui-button-text-only" );
		}
		buttonElement.addClass( buttonClasses.join( " " ) );
	}
});

$.widget( "ui.buttonset", {
	version: "1.10.4",
	options: {
		items: "button, input[type=button], input[type=submit], input[type=reset], input[type=checkbox], input[type=radio], a, :data(ui-button)"
	},

	_create: function() {
		this.element.addClass( "ui-buttonset" );
	},

	_init: function() {
		this.refresh();
	},

	_setOption: function( key, value ) {
		if ( key === "disabled" ) {
			this.buttons.button( "option", key, value );
		}

		this._super( key, value );
	},

	refresh: function() {
		var rtl = this.element.css( "direction" ) === "rtl";

		this.buttons = this.element.find( this.options.items )
			.filter( ":ui-button" )
				.button( "refresh" )
			.end()
			.not( ":ui-button" )
				.button()
			.end()
			.map(function() {
				return $( this ).button( "widget" )[ 0 ];
			})
				.removeClass( "ui-corner-all ui-corner-left ui-corner-right" )
				.filter( ":first" )
					.addClass( rtl ? "ui-corner-right" : "ui-corner-left" )
				.end()
				.filter( ":last" )
					.addClass( rtl ? "ui-corner-left" : "ui-corner-right" )
				.end()
			.end();
	},

	_destroy: function() {
		this.element.removeClass( "ui-buttonset" );
		this.buttons
			.map(function() {
				return $( this ).button( "widget" )[ 0 ];
			})
				.removeClass( "ui-corner-left ui-corner-right" )
			.end()
			.button( "destroy" );
	}
});

}( $vic ) );
(function( $, undefined ) {

$.extend($.ui, { datepicker: { version: "1.10.4" } });

var PROP_NAME = "datepicker",
	instActive;

/* Date picker manager.
   Use the singleton instance of this class, $.datepicker, to interact with the date picker.
   Settings for (groups of) date pickers are maintained in an instance object,
   allowing multiple different settings on the same page. */

function Datepicker() {
	this._curInst = null; // The current instance in use
	this._keyEvent = false; // If the last event was a key event
	this._disabledInputs = []; // List of date picker inputs that have been disabled
	this._datepickerShowing = false; // True if the popup picker is showing , false if not
	this._inDialog = false; // True if showing within a "dialog", false if not
	this._mainDivId = "ui-datepicker-div"; // The ID of the main datepicker division
	this._inlineClass = "ui-datepicker-inline"; // The name of the inline marker class
	this._appendClass = "ui-datepicker-append"; // The name of the append marker class
	this._triggerClass = "ui-datepicker-trigger"; // The name of the trigger marker class
	this._dialogClass = "ui-datepicker-dialog"; // The name of the dialog marker class
	this._disableClass = "ui-datepicker-disabled"; // The name of the disabled covering marker class
	this._unselectableClass = "ui-datepicker-unselectable"; // The name of the unselectable cell marker class
	this._currentClass = "ui-datepicker-current-day"; // The name of the current day marker class
	this._dayOverClass = "ui-datepicker-days-cell-over"; // The name of the day hover marker class
	this.regional = []; // Available regional settings, indexed by language code
	this.regional[""] = { // Default regional settings
		closeText: "Done", // Display text for close link
		prevText: "Prev", // Display text for previous month link
		nextText: "Next", // Display text for next month link
		currentText: "Today", // Display text for current month link
		monthNames: ["January","February","March","April","May","June",
			"July","August","September","October","November","December"], // Names of months for drop-down and formatting
		monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], // For formatting
		dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], // For formatting
		dayNamesShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"], // For formatting
		dayNamesMin: ["Su","Mo","Tu","We","Th","Fr","Sa"], // Column headings for days starting at Sunday
		weekHeader: "Wk", // Column header for week of the year
		dateFormat: "mm/dd/yy", // See format options on parseDate
		firstDay: 0, // The first day of the week, Sun = 0, Mon = 1, ...
		isRTL: false, // True if right-to-left language, false if left-to-right
		showMonthAfterYear: false, // True if the year select precedes month, false for month then year
		yearSuffix: "" // Additional text to append to the year in the month headers
	};
	this._defaults = { // Global defaults for all the date picker instances
		showOn: "focus", // "focus" for popup on focus,
			// "button" for trigger button, or "both" for either
		showAnim: "fadeIn", // Name of jQuery animation for popup
		showOptions: {}, // Options for enhanced animations
		defaultDate: null, // Used when field is blank: actual date,
			// +/-number for offset from today, null for today
		appendText: "", // Display text following the input box, e.g. showing the format
		buttonText: "...", // Text for trigger button
		buttonImage: "", // URL for trigger button image
		buttonImageOnly: false, // True if the image appears alone, false if it appears on a button
		hideIfNoPrevNext: false, // True to hide next/previous month links
			// if not applicable, false to just disable them
		navigationAsDateFormat: false, // True if date formatting applied to prev/today/next links
		gotoCurrent: false, // True if today link goes back to current selection instead
		changeMonth: false, // True if month can be selected directly, false if only prev/next
		changeYear: false, // True if year can be selected directly, false if only prev/next
		yearRange: "c-10:c+10", // Range of years to display in drop-down,
			// either relative to today's year (-nn:+nn), relative to currently displayed year
			// (c-nn:c+nn), absolute (nnnn:nnnn), or a combination of the above (nnnn:-n)
		showOtherMonths: false, // True to show dates in other months, false to leave blank
		selectOtherMonths: false, // True to allow selection of dates in other months, false for unselectable
		showWeek: false, // True to show week of the year, false to not show it
		calculateWeek: this.iso8601Week, // How to calculate the week of the year,
			// takes a Date and returns the number of the week for it
		shortYearCutoff: "+10", // Short year values < this are in the current century,
			// > this are in the previous century,
			// string value starting with "+" for current year + value
		minDate: null, // The earliest selectable date, or null for no limit
		maxDate: null, // The latest selectable date, or null for no limit
		duration: "fast", // Duration of display/closure
		beforeShowDay: null, // Function that takes a date and returns an array with
			// [0] = true if selectable, false if not, [1] = custom CSS class name(s) or "",
			// [2] = cell title (optional), e.g. $.datepicker.noWeekends
		beforeShow: null, // Function that takes an input field and
			// returns a set of custom settings for the date picker
		onSelect: null, // Define a callback function when a date is selected
		onChangeMonthYear: null, // Define a callback function when the month or year is changed
		onClose: null, // Define a callback function when the datepicker is closed
		numberOfMonths: 1, // Number of months to show at a time
		showCurrentAtPos: 0, // The position in multipe months at which to show the current month (starting at 0)
		stepMonths: 1, // Number of months to step back/forward
		stepBigMonths: 12, // Number of months to step back/forward for the big links
		altField: "", // Selector for an alternate field to store selected dates into
		altFormat: "", // The date format to use for the alternate field
		constrainInput: true, // The input is constrained by the current date format
		showButtonPanel: false, // True to show button panel, false to not show it
		autoSize: false, // True to size the input for the date format, false to leave as is
		disabled: false // The initial disabled state
	};
	$.extend(this._defaults, this.regional[""]);
	this.dpDiv = bindHover($("<div id='" + this._mainDivId + "' class='ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all'></div>"));
}

$.extend(Datepicker.prototype, {
	/* Class name added to elements to indicate already configured with a date picker. */
	markerClassName: "hasDatepicker",

	//Keep track of the maximum number of rows displayed (see #7043)
	maxRows: 4,

	// TODO rename to "widget" when switching to widget factory
	_widgetDatepicker: function() {
		return this.dpDiv;
	},

	/* Override the default settings for all instances of the date picker.
	 * @param  settings  object - the new settings to use as defaults (anonymous object)
	 * @return the manager object
	 */
	setDefaults: function(settings) {
		extendRemove(this._defaults, settings || {});
		return this;
	},

	/* Attach the date picker to a jQuery selection.
	 * @param  target	element - the target input field or division or span
	 * @param  settings  object - the new settings to use for this date picker instance (anonymous)
	 */
	_attachDatepicker: function(target, settings) {
		var nodeName, inline, inst;
		nodeName = target.nodeName.toLowerCase();
		inline = (nodeName === "div" || nodeName === "span");
		if (!target.id) {
			this.uuid += 1;
			target.id = "dp" + this.uuid;
		}
		inst = this._newInst($(target), inline);
		inst.settings = $.extend({}, settings || {});
		if (nodeName === "input") {
			this._connectDatepicker(target, inst);
		} else if (inline) {
			this._inlineDatepicker(target, inst);
		}
	},

	/* Create a new instance object. */
	_newInst: function(target, inline) {
		var id = target[0].id.replace(/([^A-Za-z0-9_\-])/g, "\\\\$1"); // escape jQuery meta chars
		return {id: id, input: target, // associated target
			selectedDay: 0, selectedMonth: 0, selectedYear: 0, // current selection
			drawMonth: 0, drawYear: 0, // month being drawn
			inline: inline, // is datepicker inline or not
			dpDiv: (!inline ? this.dpDiv : // presentation div
			bindHover($("<div class='" + this._inlineClass + " ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all'></div>")))};
	},

	/* Attach the date picker to an input field. */
	_connectDatepicker: function(target, inst) {
		var input = $(target);
		inst.append = $([]);
		inst.trigger = $([]);
		if (input.hasClass(this.markerClassName)) {
			return;
		}
		this._attachments(input, inst);
		input.addClass(this.markerClassName).keydown(this._doKeyDown).
			keypress(this._doKeyPress).keyup(this._doKeyUp);
		this._autoSize(inst);
		$.data(target, PROP_NAME, inst);
		//If disabled option is true, disable the datepicker once it has been attached to the input (see ticket #5665)
		if( inst.settings.disabled ) {
			this._disableDatepicker( target );
		}
	},

	/* Make attachments based on settings. */
	_attachments: function(input, inst) {
		var showOn, buttonText, buttonImage,
			appendText = this._get(inst, "appendText"),
			isRTL = this._get(inst, "isRTL");

		if (inst.append) {
			inst.append.remove();
		}
		if (appendText) {
			inst.append = $("<span class='" + this._appendClass + "'>" + appendText + "</span>");
			input[isRTL ? "before" : "after"](inst.append);
		}

		input.unbind("focus", this._showDatepicker);

		if (inst.trigger) {
			inst.trigger.remove();
		}

		showOn = this._get(inst, "showOn");
		if (showOn === "focus" || showOn === "both") { // pop-up date picker when in the marked field
			input.focus(this._showDatepicker);
		}
		if (showOn === "button" || showOn === "both") { // pop-up date picker when button clicked
			buttonText = this._get(inst, "buttonText");
			buttonImage = this._get(inst, "buttonImage");
			inst.trigger = $(this._get(inst, "buttonImageOnly") ?
				$("<img/>").addClass(this._triggerClass).
					attr({ src: buttonImage, alt: buttonText, title: buttonText }) :
				$("<button type='button'></button>").addClass(this._triggerClass).
					html(!buttonImage ? buttonText : $("<img/>").attr(
					{ src:buttonImage, alt:buttonText, title:buttonText })));
			input[isRTL ? "before" : "after"](inst.trigger);
			inst.trigger.click(function() {
				if ($.datepicker._datepickerShowing && $.datepicker._lastInput === input[0]) {
					$.datepicker._hideDatepicker();
				} else if ($.datepicker._datepickerShowing && $.datepicker._lastInput !== input[0]) {
					$.datepicker._hideDatepicker();
					$.datepicker._showDatepicker(input[0]);
				} else {
					$.datepicker._showDatepicker(input[0]);
				}
				return false;
			});
		}
	},

	/* Apply the maximum length for the date format. */
	_autoSize: function(inst) {
		if (this._get(inst, "autoSize") && !inst.inline) {
			var findMax, max, maxI, i,
				date = new Date(2009, 12 - 1, 20), // Ensure double digits
				dateFormat = this._get(inst, "dateFormat");

			if (dateFormat.match(/[DM]/)) {
				findMax = function(names) {
					max = 0;
					maxI = 0;
					for (i = 0; i < names.length; i++) {
						if (names[i].length > max) {
							max = names[i].length;
							maxI = i;
						}
					}
					return maxI;
				};
				date.setMonth(findMax(this._get(inst, (dateFormat.match(/MM/) ?
					"monthNames" : "monthNamesShort"))));
				date.setDate(findMax(this._get(inst, (dateFormat.match(/DD/) ?
					"dayNames" : "dayNamesShort"))) + 20 - date.getDay());
			}
			inst.input.attr("size", this._formatDate(inst, date).length);
		}
	},

	/* Attach an inline date picker to a div. */
	_inlineDatepicker: function(target, inst) {
		var divSpan = $(target);
		if (divSpan.hasClass(this.markerClassName)) {
			return;
		}
		divSpan.addClass(this.markerClassName).append(inst.dpDiv);
		$.data(target, PROP_NAME, inst);
		this._setDate(inst, this._getDefaultDate(inst), true);
		this._updateDatepicker(inst);
		this._updateAlternate(inst);
		//If disabled option is true, disable the datepicker before showing it (see ticket #5665)
		if( inst.settings.disabled ) {
			this._disableDatepicker( target );
		}
		// Set display:block in place of inst.dpDiv.show() which won't work on disconnected elements
		// http://bugs.jqueryui.com/ticket/7552 - A Datepicker created on a detached div has zero height
		inst.dpDiv.css( "display", "block" );
	},

	/* Pop-up the date picker in a "dialog" box.
	 * @param  input element - ignored
	 * @param  date	string or Date - the initial date to display
	 * @param  onSelect  function - the function to call when a date is selected
	 * @param  settings  object - update the dialog date picker instance's settings (anonymous object)
	 * @param  pos int[2] - coordinates for the dialog's position within the screen or
	 *					event - with x/y coordinates or
	 *					leave empty for default (screen centre)
	 * @return the manager object
	 */
	_dialogDatepicker: function(input, date, onSelect, settings, pos) {
		var id, browserWidth, browserHeight, scrollX, scrollY,
			inst = this._dialogInst; // internal instance

		if (!inst) {
			this.uuid += 1;
			id = "dp" + this.uuid;
			this._dialogInput = $("<input type='text' id='" + id +
				"' style='position: absolute; top: -100px; width: 0px;'/>");
			this._dialogInput.keydown(this._doKeyDown);
			$("body").append(this._dialogInput);
			inst = this._dialogInst = this._newInst(this._dialogInput, false);
			inst.settings = {};
			$.data(this._dialogInput[0], PROP_NAME, inst);
		}
		extendRemove(inst.settings, settings || {});
		date = (date && date.constructor === Date ? this._formatDate(inst, date) : date);
		this._dialogInput.val(date);

		this._pos = (pos ? (pos.length ? pos : [pos.pageX, pos.pageY]) : null);
		if (!this._pos) {
			browserWidth = document.documentElement.clientWidth;
			browserHeight = document.documentElement.clientHeight;
			scrollX = document.documentElement.scrollLeft || document.body.scrollLeft;
			scrollY = document.documentElement.scrollTop || document.body.scrollTop;
			this._pos = // should use actual width/height below
				[(browserWidth / 2) - 100 + scrollX, (browserHeight / 2) - 150 + scrollY];
		}

		// move input on screen for focus, but hidden behind dialog
		this._dialogInput.css("left", (this._pos[0] + 20) + "px").css("top", this._pos[1] + "px");
		inst.settings.onSelect = onSelect;
		this._inDialog = true;
		this.dpDiv.addClass(this._dialogClass);
		this._showDatepicker(this._dialogInput[0]);
		if ($.blockUI) {
			$.blockUI(this.dpDiv);
		}
		$.data(this._dialogInput[0], PROP_NAME, inst);
		return this;
	},

	/* Detach a datepicker from its control.
	 * @param  target	element - the target input field or division or span
	 */
	_destroyDatepicker: function(target) {
		var nodeName,
			$target = $(target),
			inst = $.data(target, PROP_NAME);

		if (!$target.hasClass(this.markerClassName)) {
			return;
		}

		nodeName = target.nodeName.toLowerCase();
		$.removeData(target, PROP_NAME);
		if (nodeName === "input") {
			inst.append.remove();
			inst.trigger.remove();
			$target.removeClass(this.markerClassName).
				unbind("focus", this._showDatepicker).
				unbind("keydown", this._doKeyDown).
				unbind("keypress", this._doKeyPress).
				unbind("keyup", this._doKeyUp);
		} else if (nodeName === "div" || nodeName === "span") {
			$target.removeClass(this.markerClassName).empty();
		}
	},

	/* Enable the date picker to a jQuery selection.
	 * @param  target	element - the target input field or division or span
	 */
	_enableDatepicker: function(target) {
		var nodeName, inline,
			$target = $(target),
			inst = $.data(target, PROP_NAME);

		if (!$target.hasClass(this.markerClassName)) {
			return;
		}

		nodeName = target.nodeName.toLowerCase();
		if (nodeName === "input") {
			target.disabled = false;
			inst.trigger.filter("button").
				each(function() { this.disabled = false; }).end().
				filter("img").css({opacity: "1.0", cursor: ""});
		} else if (nodeName === "div" || nodeName === "span") {
			inline = $target.children("." + this._inlineClass);
			inline.children().removeClass("ui-state-disabled");
			inline.find("select.ui-datepicker-month, select.ui-datepicker-year").
				prop("disabled", false);
		}
		this._disabledInputs = $.map(this._disabledInputs,
			function(value) { return (value === target ? null : value); }); // delete entry
	},

	/* Disable the date picker to a jQuery selection.
	 * @param  target	element - the target input field or division or span
	 */
	_disableDatepicker: function(target) {
		var nodeName, inline,
			$target = $(target),
			inst = $.data(target, PROP_NAME);

		if (!$target.hasClass(this.markerClassName)) {
			return;
		}

		nodeName = target.nodeName.toLowerCase();
		if (nodeName === "input") {
			target.disabled = true;
			inst.trigger.filter("button").
				each(function() { this.disabled = true; }).end().
				filter("img").css({opacity: "0.5", cursor: "default"});
		} else if (nodeName === "div" || nodeName === "span") {
			inline = $target.children("." + this._inlineClass);
			inline.children().addClass("ui-state-disabled");
			inline.find("select.ui-datepicker-month, select.ui-datepicker-year").
				prop("disabled", true);
		}
		this._disabledInputs = $.map(this._disabledInputs,
			function(value) { return (value === target ? null : value); }); // delete entry
		this._disabledInputs[this._disabledInputs.length] = target;
	},

	/* Is the first field in a jQuery collection disabled as a datepicker?
	 * @param  target	element - the target input field or division or span
	 * @return boolean - true if disabled, false if enabled
	 */
	_isDisabledDatepicker: function(target) {
		if (!target) {
			return false;
		}
		for (var i = 0; i < this._disabledInputs.length; i++) {
			if (this._disabledInputs[i] === target) {
				return true;
			}
		}
		return false;
	},

	/* Retrieve the instance data for the target control.
	 * @param  target  element - the target input field or division or span
	 * @return  object - the associated instance data
	 * @throws  error if a jQuery problem getting data
	 */
	_getInst: function(target) {
		try {
			return $.data(target, PROP_NAME);
		}
		catch (err) {
			throw "Missing instance data for this datepicker";
		}
	},

	/* Update or retrieve the settings for a date picker attached to an input field or division.
	 * @param  target  element - the target input field or division or span
	 * @param  name	object - the new settings to update or
	 *				string - the name of the setting to change or retrieve,
	 *				when retrieving also "all" for all instance settings or
	 *				"defaults" for all global defaults
	 * @param  value   any - the new value for the setting
	 *				(omit if above is an object or to retrieve a value)
	 */
	_optionDatepicker: function(target, name, value) {
		var settings, date, minDate, maxDate,
			inst = this._getInst(target);

		if (arguments.length === 2 && typeof name === "string") {
			return (name === "defaults" ? $.extend({}, $.datepicker._defaults) :
				(inst ? (name === "all" ? $.extend({}, inst.settings) :
				this._get(inst, name)) : null));
		}

		settings = name || {};
		if (typeof name === "string") {
			settings = {};
			settings[name] = value;
		}

		if (inst) {
			if (this._curInst === inst) {
				this._hideDatepicker();
			}

			date = this._getDateDatepicker(target, true);
			minDate = this._getMinMaxDate(inst, "min");
			maxDate = this._getMinMaxDate(inst, "max");
			extendRemove(inst.settings, settings);
			// reformat the old minDate/maxDate values if dateFormat changes and a new minDate/maxDate isn't provided
			if (minDate !== null && settings.dateFormat !== undefined && settings.minDate === undefined) {
				inst.settings.minDate = this._formatDate(inst, minDate);
			}
			if (maxDate !== null && settings.dateFormat !== undefined && settings.maxDate === undefined) {
				inst.settings.maxDate = this._formatDate(inst, maxDate);
			}
			if ( "disabled" in settings ) {
				if ( settings.disabled ) {
					this._disableDatepicker(target);
				} else {
					this._enableDatepicker(target);
				}
			}
			this._attachments($(target), inst);
			this._autoSize(inst);
			this._setDate(inst, date);
			this._updateAlternate(inst);
			this._updateDatepicker(inst);
		}
	},

	// change method deprecated
	_changeDatepicker: function(target, name, value) {
		this._optionDatepicker(target, name, value);
	},

	/* Redraw the date picker attached to an input field or division.
	 * @param  target  element - the target input field or division or span
	 */
	_refreshDatepicker: function(target) {
		var inst = this._getInst(target);
		if (inst) {
			this._updateDatepicker(inst);
		}
	},

	/* Set the dates for a jQuery selection.
	 * @param  target element - the target input field or division or span
	 * @param  date	Date - the new date
	 */
	_setDateDatepicker: function(target, date) {
		var inst = this._getInst(target);
		if (inst) {
			this._setDate(inst, date);
			this._updateDatepicker(inst);
			this._updateAlternate(inst);
		}
	},

	/* Get the date(s) for the first entry in a jQuery selection.
	 * @param  target element - the target input field or division or span
	 * @param  noDefault boolean - true if no default date is to be used
	 * @return Date - the current date
	 */
	_getDateDatepicker: function(target, noDefault) {
		var inst = this._getInst(target);
		if (inst && !inst.inline) {
			this._setDateFromField(inst, noDefault);
		}
		return (inst ? this._getDate(inst) : null);
	},

	/* Handle keystrokes. */
	_doKeyDown: function(event) {
		var onSelect, dateStr, sel,
			inst = $.datepicker._getInst(event.target),
			handled = true,
			isRTL = inst.dpDiv.is(".ui-datepicker-rtl");

		inst._keyEvent = true;
		if ($.datepicker._datepickerShowing) {
			switch (event.keyCode) {
				case 9: $.datepicker._hideDatepicker();
						handled = false;
						break; // hide on tab out
				case 13: sel = $("td." + $.datepicker._dayOverClass + ":not(." +
									$.datepicker._currentClass + ")", inst.dpDiv);
						if (sel[0]) {
							$.datepicker._selectDay(event.target, inst.selectedMonth, inst.selectedYear, sel[0]);
						}

						onSelect = $.datepicker._get(inst, "onSelect");
						if (onSelect) {
							dateStr = $.datepicker._formatDate(inst);

							// trigger custom callback
							onSelect.apply((inst.input ? inst.input[0] : null), [dateStr, inst]);
						} else {
							$.datepicker._hideDatepicker();
						}

						return false; // don't submit the form
				case 27: $.datepicker._hideDatepicker();
						break; // hide on escape
				case 33: $.datepicker._adjustDate(event.target, (event.ctrlKey ?
							-$.datepicker._get(inst, "stepBigMonths") :
							-$.datepicker._get(inst, "stepMonths")), "M");
						break; // previous month/year on page up/+ ctrl
				case 34: $.datepicker._adjustDate(event.target, (event.ctrlKey ?
							+$.datepicker._get(inst, "stepBigMonths") :
							+$.datepicker._get(inst, "stepMonths")), "M");
						break; // next month/year on page down/+ ctrl
				case 35: if (event.ctrlKey || event.metaKey) {
							$.datepicker._clearDate(event.target);
						}
						handled = event.ctrlKey || event.metaKey;
						break; // clear on ctrl or command +end
				case 36: if (event.ctrlKey || event.metaKey) {
							$.datepicker._gotoToday(event.target);
						}
						handled = event.ctrlKey || event.metaKey;
						break; // current on ctrl or command +home
				case 37: if (event.ctrlKey || event.metaKey) {
							$.datepicker._adjustDate(event.target, (isRTL ? +1 : -1), "D");
						}
						handled = event.ctrlKey || event.metaKey;
						// -1 day on ctrl or command +left
						if (event.originalEvent.altKey) {
							$.datepicker._adjustDate(event.target, (event.ctrlKey ?
								-$.datepicker._get(inst, "stepBigMonths") :
								-$.datepicker._get(inst, "stepMonths")), "M");
						}
						// next month/year on alt +left on Mac
						break;
				case 38: if (event.ctrlKey || event.metaKey) {
							$.datepicker._adjustDate(event.target, -7, "D");
						}
						handled = event.ctrlKey || event.metaKey;
						break; // -1 week on ctrl or command +up
				case 39: if (event.ctrlKey || event.metaKey) {
							$.datepicker._adjustDate(event.target, (isRTL ? -1 : +1), "D");
						}
						handled = event.ctrlKey || event.metaKey;
						// +1 day on ctrl or command +right
						if (event.originalEvent.altKey) {
							$.datepicker._adjustDate(event.target, (event.ctrlKey ?
								+$.datepicker._get(inst, "stepBigMonths") :
								+$.datepicker._get(inst, "stepMonths")), "M");
						}
						// next month/year on alt +right
						break;
				case 40: if (event.ctrlKey || event.metaKey) {
							$.datepicker._adjustDate(event.target, +7, "D");
						}
						handled = event.ctrlKey || event.metaKey;
						break; // +1 week on ctrl or command +down
				default: handled = false;
			}
		} else if (event.keyCode === 36 && event.ctrlKey) { // display the date picker on ctrl+home
			$.datepicker._showDatepicker(this);
		} else {
			handled = false;
		}

		if (handled) {
			event.preventDefault();
			event.stopPropagation();
		}
	},

	/* Filter entered characters - based on date format. */
	_doKeyPress: function(event) {
		var chars, chr,
			inst = $.datepicker._getInst(event.target);

		if ($.datepicker._get(inst, "constrainInput")) {
			chars = $.datepicker._possibleChars($.datepicker._get(inst, "dateFormat"));
			chr = String.fromCharCode(event.charCode == null ? event.keyCode : event.charCode);
			return event.ctrlKey || event.metaKey || (chr < " " || !chars || chars.indexOf(chr) > -1);
		}
	},

	/* Synchronise manual entry and field/alternate field. */
	_doKeyUp: function(event) {
		var date,
			inst = $.datepicker._getInst(event.target);

		if (inst.input.val() !== inst.lastVal) {
			try {
				date = $.datepicker.parseDate($.datepicker._get(inst, "dateFormat"),
					(inst.input ? inst.input.val() : null),
					$.datepicker._getFormatConfig(inst));

				if (date) { // only if valid
					$.datepicker._setDateFromField(inst);
					$.datepicker._updateAlternate(inst);
					$.datepicker._updateDatepicker(inst);
				}
			}
			catch (err) {
			}
		}
		return true;
	},

	/* Pop-up the date picker for a given input field.
	 * If false returned from beforeShow event handler do not show.
	 * @param  input  element - the input field attached to the date picker or
	 *					event - if triggered by focus
	 */
	_showDatepicker: function(input) {
		input = input.target || input;
		if (input.nodeName.toLowerCase() !== "input") { // find from button/image trigger
			input = $("input", input.parentNode)[0];
		}

		if ($.datepicker._isDisabledDatepicker(input) || $.datepicker._lastInput === input) { // already here
			return;
		}

		var inst, beforeShow, beforeShowSettings, isFixed,
			offset, showAnim, duration;

		inst = $.datepicker._getInst(input);
		if ($.datepicker._curInst && $.datepicker._curInst !== inst) {
			$.datepicker._curInst.dpDiv.stop(true, true);
			if ( inst && $.datepicker._datepickerShowing ) {
				$.datepicker._hideDatepicker( $.datepicker._curInst.input[0] );
			}
		}

		beforeShow = $.datepicker._get(inst, "beforeShow");
		beforeShowSettings = beforeShow ? beforeShow.apply(input, [input, inst]) : {};
		if(beforeShowSettings === false){
			return;
		}
		extendRemove(inst.settings, beforeShowSettings);

		inst.lastVal = null;
		$.datepicker._lastInput = input;
		$.datepicker._setDateFromField(inst);

		if ($.datepicker._inDialog) { // hide cursor
			input.value = "";
		}
		if (!$.datepicker._pos) { // position below input
			$.datepicker._pos = $.datepicker._findPos(input);
			$.datepicker._pos[1] += input.offsetHeight; // add the height
		}

		isFixed = false;
		$(input).parents().each(function() {
			isFixed |= $(this).css("position") === "fixed";
			return !isFixed;
		});

		offset = {left: $.datepicker._pos[0], top: $.datepicker._pos[1]};
		$.datepicker._pos = null;
		//to avoid flashes on Firefox
		inst.dpDiv.empty();
		// determine sizing offscreen
		inst.dpDiv.css({position: "absolute", display: "block", top: "-1000px"});
		$.datepicker._updateDatepicker(inst);
		// fix width for dynamic number of date pickers
		// and adjust position before showing
		offset = $.datepicker._checkOffset(inst, offset, isFixed);
		inst.dpDiv.css({position: ($.datepicker._inDialog && $.blockUI ?
			"static" : (isFixed ? "fixed" : "absolute")), display: "none",
			left: offset.left + "px", top: offset.top + "px"});

		if (!inst.inline) {
			showAnim = $.datepicker._get(inst, "showAnim");
			duration = $.datepicker._get(inst, "duration");
			inst.dpDiv.zIndex($(input).zIndex()+1);
			$.datepicker._datepickerShowing = true;

			if ( $.effects && $.effects.effect[ showAnim ] ) {
				inst.dpDiv.show(showAnim, $.datepicker._get(inst, "showOptions"), duration);
			} else {
				inst.dpDiv[showAnim || "show"](showAnim ? duration : null);
			}

			if ( $.datepicker._shouldFocusInput( inst ) ) {
				inst.input.focus();
			}

			$.datepicker._curInst = inst;
		}
	},

	/* Generate the date picker content. */
	_updateDatepicker: function(inst) {
		this.maxRows = 4; //Reset the max number of rows being displayed (see #7043)
		instActive = inst; // for delegate hover events
		inst.dpDiv.empty().append(this._generateHTML(inst));
		this._attachHandlers(inst);
		inst.dpDiv.find("." + this._dayOverClass + " a").mouseover();

		var origyearshtml,
			numMonths = this._getNumberOfMonths(inst),
			cols = numMonths[1],
			width = 17;

		inst.dpDiv.removeClass("ui-datepicker-multi-2 ui-datepicker-multi-3 ui-datepicker-multi-4").width("");
		if (cols > 1) {
			inst.dpDiv.addClass("ui-datepicker-multi-" + cols).css("width", (width * cols) + "em");
		}
		inst.dpDiv[(numMonths[0] !== 1 || numMonths[1] !== 1 ? "add" : "remove") +
			"Class"]("ui-datepicker-multi");
		inst.dpDiv[(this._get(inst, "isRTL") ? "add" : "remove") +
			"Class"]("ui-datepicker-rtl");

		if (inst === $.datepicker._curInst && $.datepicker._datepickerShowing && $.datepicker._shouldFocusInput( inst ) ) {
			inst.input.focus();
		}

		// deffered render of the years select (to avoid flashes on Firefox)
		if( inst.yearshtml ){
			origyearshtml = inst.yearshtml;
			setTimeout(function(){
				//assure that inst.yearshtml didn't change.
				if( origyearshtml === inst.yearshtml && inst.yearshtml ){
					inst.dpDiv.find("select.ui-datepicker-year:first").replaceWith(inst.yearshtml);
				}
				origyearshtml = inst.yearshtml = null;
			}, 0);
		}
	},

	// #6694 - don't focus the input if it's already focused
	// this breaks the change event in IE
	// Support: IE and jQuery <1.9
	_shouldFocusInput: function( inst ) {
		return inst.input && inst.input.is( ":visible" ) && !inst.input.is( ":disabled" ) && !inst.input.is( ":focus" );
	},

	/* Check positioning to remain on screen. */
	_checkOffset: function(inst, offset, isFixed) {
		var dpWidth = inst.dpDiv.outerWidth(),
			dpHeight = inst.dpDiv.outerHeight(),
			inputWidth = inst.input ? inst.input.outerWidth() : 0,
			inputHeight = inst.input ? inst.input.outerHeight() : 0,
			viewWidth = document.documentElement.clientWidth + (isFixed ? 0 : $(document).scrollLeft()),
			viewHeight = document.documentElement.clientHeight + (isFixed ? 0 : $(document).scrollTop());

		offset.left -= (this._get(inst, "isRTL") ? (dpWidth - inputWidth) : 0);
		offset.left -= (isFixed && offset.left === inst.input.offset().left) ? $(document).scrollLeft() : 0;
		offset.top -= (isFixed && offset.top === (inst.input.offset().top + inputHeight)) ? $(document).scrollTop() : 0;

		// now check if datepicker is showing outside window viewport - move to a better place if so.
		offset.left -= Math.min(offset.left, (offset.left + dpWidth > viewWidth && viewWidth > dpWidth) ?
			Math.abs(offset.left + dpWidth - viewWidth) : 0);
		offset.top -= Math.min(offset.top, (offset.top + dpHeight > viewHeight && viewHeight > dpHeight) ?
			Math.abs(dpHeight + inputHeight) : 0);

		return offset;
	},

	/* Find an object's position on the screen. */
	_findPos: function(obj) {
		var position,
			inst = this._getInst(obj),
			isRTL = this._get(inst, "isRTL");

		while (obj && (obj.type === "hidden" || obj.nodeType !== 1 || $.expr.filters.hidden(obj))) {
			obj = obj[isRTL ? "previousSibling" : "nextSibling"];
		}

		position = $(obj).offset();
		return [position.left, position.top];
	},

	/* Hide the date picker from view.
	 * @param  input  element - the input field attached to the date picker
	 */
	_hideDatepicker: function(input) {
		var showAnim, duration, postProcess, onClose,
			inst = this._curInst;

		if (!inst || (input && inst !== $.data(input, PROP_NAME))) {
			return;
		}

		if (this._datepickerShowing) {
			showAnim = this._get(inst, "showAnim");
			duration = this._get(inst, "duration");
			postProcess = function() {
				$.datepicker._tidyDialog(inst);
			};

			// DEPRECATED: after BC for 1.8.x $.effects[ showAnim ] is not needed
			if ( $.effects && ( $.effects.effect[ showAnim ] || $.effects[ showAnim ] ) ) {
				inst.dpDiv.hide(showAnim, $.datepicker._get(inst, "showOptions"), duration, postProcess);
			} else {
				inst.dpDiv[(showAnim === "slideDown" ? "slideUp" :
					(showAnim === "fadeIn" ? "fadeOut" : "hide"))]((showAnim ? duration : null), postProcess);
			}

			if (!showAnim) {
				postProcess();
			}
			this._datepickerShowing = false;

			onClose = this._get(inst, "onClose");
			if (onClose) {
				onClose.apply((inst.input ? inst.input[0] : null), [(inst.input ? inst.input.val() : ""), inst]);
			}

			this._lastInput = null;
			if (this._inDialog) {
				this._dialogInput.css({ position: "absolute", left: "0", top: "-100px" });
				if ($.blockUI) {
					$.unblockUI();
					$("body").append(this.dpDiv);
				}
			}
			this._inDialog = false;
		}
	},

	/* Tidy up after a dialog display. */
	_tidyDialog: function(inst) {
		inst.dpDiv.removeClass(this._dialogClass).unbind(".ui-datepicker-calendar");
	},

	/* Close date picker if clicked elsewhere. */
	_checkExternalClick: function(event) {
		if (!$.datepicker._curInst) {
			return;
		}

		var $target = $(event.target),
			inst = $.datepicker._getInst($target[0]);

		if ( ( ( $target[0].id !== $.datepicker._mainDivId &&
				$target.parents("#" + $.datepicker._mainDivId).length === 0 &&
				!$target.hasClass($.datepicker.markerClassName) &&
				!$target.closest("." + $.datepicker._triggerClass).length &&
				$.datepicker._datepickerShowing && !($.datepicker._inDialog && $.blockUI) ) ) ||
			( $target.hasClass($.datepicker.markerClassName) && $.datepicker._curInst !== inst ) ) {
				$.datepicker._hideDatepicker();
		}
	},

	/* Adjust one of the date sub-fields. */
	_adjustDate: function(id, offset, period) {
		var target = $(id),
			inst = this._getInst(target[0]);

		if (this._isDisabledDatepicker(target[0])) {
			return;
		}
		this._adjustInstDate(inst, offset +
			(period === "M" ? this._get(inst, "showCurrentAtPos") : 0), // undo positioning
			period);
		this._updateDatepicker(inst);
	},

	/* Action for current link. */
	_gotoToday: function(id) {
		var date,
			target = $(id),
			inst = this._getInst(target[0]);

		if (this._get(inst, "gotoCurrent") && inst.currentDay) {
			inst.selectedDay = inst.currentDay;
			inst.drawMonth = inst.selectedMonth = inst.currentMonth;
			inst.drawYear = inst.selectedYear = inst.currentYear;
		} else {
			date = new Date();
			inst.selectedDay = date.getDate();
			inst.drawMonth = inst.selectedMonth = date.getMonth();
			inst.drawYear = inst.selectedYear = date.getFullYear();
		}
		this._notifyChange(inst);
		this._adjustDate(target);
	},

	/* Action for selecting a new month/year. */
	_selectMonthYear: function(id, select, period) {
		var target = $(id),
			inst = this._getInst(target[0]);

		inst["selected" + (period === "M" ? "Month" : "Year")] =
		inst["draw" + (period === "M" ? "Month" : "Year")] =
			parseInt(select.options[select.selectedIndex].value,10);

		this._notifyChange(inst);
		this._adjustDate(target);
	},

	/* Action for selecting a day. */
	_selectDay: function(id, month, year, td) {
		var inst,
			target = $(id);

		if ($(td).hasClass(this._unselectableClass) || this._isDisabledDatepicker(target[0])) {
			return;
		}

		inst = this._getInst(target[0]);
		inst.selectedDay = inst.currentDay = $("a", td).html();
		inst.selectedMonth = inst.currentMonth = month;
		inst.selectedYear = inst.currentYear = year;
		this._selectDate(id, this._formatDate(inst,
			inst.currentDay, inst.currentMonth, inst.currentYear));
	},

	/* Erase the input field and hide the date picker. */
	_clearDate: function(id) {
		var target = $(id);
		this._selectDate(target, "");
	},

	/* Update the input field with the selected date. */
	_selectDate: function(id, dateStr) {
		var onSelect,
			target = $(id),
			inst = this._getInst(target[0]);

		dateStr = (dateStr != null ? dateStr : this._formatDate(inst));
		if (inst.input) {
			inst.input.val(dateStr);
		}
		this._updateAlternate(inst);

		onSelect = this._get(inst, "onSelect");
		if (onSelect) {
			onSelect.apply((inst.input ? inst.input[0] : null), [dateStr, inst]);  // trigger custom callback
		} else if (inst.input) {
			inst.input.trigger("change"); // fire the change event
		}

		if (inst.inline){
			this._updateDatepicker(inst);
		} else {
			this._hideDatepicker();
			this._lastInput = inst.input[0];
			if (typeof(inst.input[0]) !== "object") {
				inst.input.focus(); // restore focus
			}
			this._lastInput = null;
		}
	},

	/* Update any alternate field to synchronise with the main field. */
	_updateAlternate: function(inst) {
		var altFormat, date, dateStr,
			altField = this._get(inst, "altField");

		if (altField) { // update alternate field too
			altFormat = this._get(inst, "altFormat") || this._get(inst, "dateFormat");
			date = this._getDate(inst);
			dateStr = this.formatDate(altFormat, date, this._getFormatConfig(inst));
			$(altField).each(function() { $(this).val(dateStr); });
		}
	},

	/* Set as beforeShowDay function to prevent selection of weekends.
	 * @param  date  Date - the date to customise
	 * @return [boolean, string] - is this date selectable?, what is its CSS class?
	 */
	noWeekends: function(date) {
		var day = date.getDay();
		return [(day > 0 && day < 6), ""];
	},

	/* Set as calculateWeek to determine the week of the year based on the ISO 8601 definition.
	 * @param  date  Date - the date to get the week for
	 * @return  number - the number of the week within the year that contains this date
	 */
	iso8601Week: function(date) {
		var time,
			checkDate = new Date(date.getTime());

		// Find Thursday of this week starting on Monday
		checkDate.setDate(checkDate.getDate() + 4 - (checkDate.getDay() || 7));

		time = checkDate.getTime();
		checkDate.setMonth(0); // Compare with Jan 1
		checkDate.setDate(1);
		return Math.floor(Math.round((time - checkDate) / 86400000) / 7) + 1;
	},

	/* Parse a string value into a date object.
	 * See formatDate below for the possible formats.
	 *
	 * @param  format string - the expected format of the date
	 * @param  value string - the date in the above format
	 * @param  settings Object - attributes include:
	 *					shortYearCutoff  number - the cutoff year for determining the century (optional)
	 *					dayNamesShort	string[7] - abbreviated names of the days from Sunday (optional)
	 *					dayNames		string[7] - names of the days from Sunday (optional)
	 *					monthNamesShort string[12] - abbreviated names of the months (optional)
	 *					monthNames		string[12] - names of the months (optional)
	 * @return  Date - the extracted date value or null if value is blank
	 */
	parseDate: function (format, value, settings) {
		if (format == null || value == null) {
			throw "Invalid arguments";
		}

		value = (typeof value === "object" ? value.toString() : value + "");
		if (value === "") {
			return null;
		}

		var iFormat, dim, extra,
			iValue = 0,
			shortYearCutoffTemp = (settings ? settings.shortYearCutoff : null) || this._defaults.shortYearCutoff,
			shortYearCutoff = (typeof shortYearCutoffTemp !== "string" ? shortYearCutoffTemp :
				new Date().getFullYear() % 100 + parseInt(shortYearCutoffTemp, 10)),
			dayNamesShort = (settings ? settings.dayNamesShort : null) || this._defaults.dayNamesShort,
			dayNames = (settings ? settings.dayNames : null) || this._defaults.dayNames,
			monthNamesShort = (settings ? settings.monthNamesShort : null) || this._defaults.monthNamesShort,
			monthNames = (settings ? settings.monthNames : null) || this._defaults.monthNames,
			year = -1,
			month = -1,
			day = -1,
			doy = -1,
			literal = false,
			date,
			// Check whether a format character is doubled
			lookAhead = function(match) {
				var matches = (iFormat + 1 < format.length && format.charAt(iFormat + 1) === match);
				if (matches) {
					iFormat++;
				}
				return matches;
			},
			// Extract a number from the string value
			getNumber = function(match) {
				var isDoubled = lookAhead(match),
					size = (match === "@" ? 14 : (match === "!" ? 20 :
					(match === "y" && isDoubled ? 4 : (match === "o" ? 3 : 2)))),
					digits = new RegExp("^\\d{1," + size + "}"),
					num = value.substring(iValue).match(digits);
				if (!num) {
					throw "Missing number at position " + iValue;
				}
				iValue += num[0].length;
				return parseInt(num[0], 10);
			},
			// Extract a name from the string value and convert to an index
			getName = function(match, shortNames, longNames) {
				var index = -1,
					names = $.map(lookAhead(match) ? longNames : shortNames, function (v, k) {
						return [ [k, v] ];
					}).sort(function (a, b) {
						return -(a[1].length - b[1].length);
					});

				$.each(names, function (i, pair) {
					var name = pair[1];
					if (value.substr(iValue, name.length).toLowerCase() === name.toLowerCase()) {
						index = pair[0];
						iValue += name.length;
						return false;
					}
				});
				if (index !== -1) {
					return index + 1;
				} else {
					throw "Unknown name at position " + iValue;
				}
			},
			// Confirm that a literal character matches the string value
			checkLiteral = function() {
				if (value.charAt(iValue) !== format.charAt(iFormat)) {
					throw "Unexpected literal at position " + iValue;
				}
				iValue++;
			};

		for (iFormat = 0; iFormat < format.length; iFormat++) {
			if (literal) {
				if (format.charAt(iFormat) === "'" && !lookAhead("'")) {
					literal = false;
				} else {
					checkLiteral();
				}
			} else {
				switch (format.charAt(iFormat)) {
					case "d":
						day = getNumber("d");
						break;
					case "D":
						getName("D", dayNamesShort, dayNames);
						break;
					case "o":
						doy = getNumber("o");
						break;
					case "m":
						month = getNumber("m");
						break;
					case "M":
						month = getName("M", monthNamesShort, monthNames);
						break;
					case "y":
						year = getNumber("y");
						break;
					case "@":
						date = new Date(getNumber("@"));
						year = date.getFullYear();
						month = date.getMonth() + 1;
						day = date.getDate();
						break;
					case "!":
						date = new Date((getNumber("!") - this._ticksTo1970) / 10000);
						year = date.getFullYear();
						month = date.getMonth() + 1;
						day = date.getDate();
						break;
					case "'":
						if (lookAhead("'")){
							checkLiteral();
						} else {
							literal = true;
						}
						break;
					default:
						checkLiteral();
				}
			}
		}

		if (iValue < value.length){
			extra = value.substr(iValue);
			if (!/^\s+/.test(extra)) {
				throw "Extra/unparsed characters found in date: " + extra;
			}
		}

		if (year === -1) {
			year = new Date().getFullYear();
		} else if (year < 100) {
			year += new Date().getFullYear() - new Date().getFullYear() % 100 +
				(year <= shortYearCutoff ? 0 : -100);
		}

		if (doy > -1) {
			month = 1;
			day = doy;
			do {
				dim = this._getDaysInMonth(year, month - 1);
				if (day <= dim) {
					break;
				}
				month++;
				day -= dim;
			} while (true);
		}

		date = this._daylightSavingAdjust(new Date(year, month - 1, day));
		if (date.getFullYear() !== year || date.getMonth() + 1 !== month || date.getDate() !== day) {
			throw "Invalid date"; // E.g. 31/02/00
		}
		return date;
	},

	/* Standard date formats. */
	ATOM: "yy-mm-dd", // RFC 3339 (ISO 8601)
	COOKIE: "D, dd M yy",
	ISO_8601: "yy-mm-dd",
	RFC_822: "D, d M y",
	RFC_850: "DD, dd-M-y",
	RFC_1036: "D, d M y",
	RFC_1123: "D, d M yy",
	RFC_2822: "D, d M yy",
	RSS: "D, d M y", // RFC 822
	TICKS: "!",
	TIMESTAMP: "@",
	W3C: "yy-mm-dd", // ISO 8601

	_ticksTo1970: (((1970 - 1) * 365 + Math.floor(1970 / 4) - Math.floor(1970 / 100) +
		Math.floor(1970 / 400)) * 24 * 60 * 60 * 10000000),

	/* Format a date object into a string value.
	 * The format can be combinations of the following:
	 * d  - day of month (no leading zero)
	 * dd - day of month (two digit)
	 * o  - day of year (no leading zeros)
	 * oo - day of year (three digit)
	 * D  - day name short
	 * DD - day name long
	 * m  - month of year (no leading zero)
	 * mm - month of year (two digit)
	 * M  - month name short
	 * MM - month name long
	 * y  - year (two digit)
	 * yy - year (four digit)
	 * @ - Unix timestamp (ms since 01/01/1970)
	 * ! - Windows ticks (100ns since 01/01/0001)
	 * "..." - literal text
	 * '' - single quote
	 *
	 * @param  format string - the desired format of the date
	 * @param  date Date - the date value to format
	 * @param  settings Object - attributes include:
	 *					dayNamesShort	string[7] - abbreviated names of the days from Sunday (optional)
	 *					dayNames		string[7] - names of the days from Sunday (optional)
	 *					monthNamesShort string[12] - abbreviated names of the months (optional)
	 *					monthNames		string[12] - names of the months (optional)
	 * @return  string - the date in the above format
	 */
	formatDate: function (format, date, settings) {
		if (!date) {
			return "";
		}

		var iFormat,
			dayNamesShort = (settings ? settings.dayNamesShort : null) || this._defaults.dayNamesShort,
			dayNames = (settings ? settings.dayNames : null) || this._defaults.dayNames,
			monthNamesShort = (settings ? settings.monthNamesShort : null) || this._defaults.monthNamesShort,
			monthNames = (settings ? settings.monthNames : null) || this._defaults.monthNames,
			// Check whether a format character is doubled
			lookAhead = function(match) {
				var matches = (iFormat + 1 < format.length && format.charAt(iFormat + 1) === match);
				if (matches) {
					iFormat++;
				}
				return matches;
			},
			// Format a number, with leading zero if necessary
			formatNumber = function(match, value, len) {
				var num = "" + value;
				if (lookAhead(match)) {
					while (num.length < len) {
						num = "0" + num;
					}
				}
				return num;
			},
			// Format a name, short or long as requested
			formatName = function(match, value, shortNames, longNames) {
				return (lookAhead(match) ? longNames[value] : shortNames[value]);
			},
			output = "",
			literal = false;

		if (date) {
			for (iFormat = 0; iFormat < format.length; iFormat++) {
				if (literal) {
					if (format.charAt(iFormat) === "'" && !lookAhead("'")) {
						literal = false;
					} else {
						output += format.charAt(iFormat);
					}
				} else {
					switch (format.charAt(iFormat)) {
						case "d":
							output += formatNumber("d", date.getDate(), 2);
							break;
						case "D":
							output += formatName("D", date.getDay(), dayNamesShort, dayNames);
							break;
						case "o":
							output += formatNumber("o",
								Math.round((new Date(date.getFullYear(), date.getMonth(), date.getDate()).getTime() - new Date(date.getFullYear(), 0, 0).getTime()) / 86400000), 3);
							break;
						case "m":
							output += formatNumber("m", date.getMonth() + 1, 2);
							break;
						case "M":
							output += formatName("M", date.getMonth(), monthNamesShort, monthNames);
							break;
						case "y":
							output += (lookAhead("y") ? date.getFullYear() :
								(date.getYear() % 100 < 10 ? "0" : "") + date.getYear() % 100);
							break;
						case "@":
							output += date.getTime();
							break;
						case "!":
							output += date.getTime() * 10000 + this._ticksTo1970;
							break;
						case "'":
							if (lookAhead("'")) {
								output += "'";
							} else {
								literal = true;
							}
							break;
						default:
							output += format.charAt(iFormat);
					}
				}
			}
		}
		return output;
	},

	/* Extract all possible characters from the date format. */
	_possibleChars: function (format) {
		var iFormat,
			chars = "",
			literal = false,
			// Check whether a format character is doubled
			lookAhead = function(match) {
				var matches = (iFormat + 1 < format.length && format.charAt(iFormat + 1) === match);
				if (matches) {
					iFormat++;
				}
				return matches;
			};

		for (iFormat = 0; iFormat < format.length; iFormat++) {
			if (literal) {
				if (format.charAt(iFormat) === "'" && !lookAhead("'")) {
					literal = false;
				} else {
					chars += format.charAt(iFormat);
				}
			} else {
				switch (format.charAt(iFormat)) {
					case "d": case "m": case "y": case "@":
						chars += "0123456789";
						break;
					case "D": case "M":
						return null; // Accept anything
					case "'":
						if (lookAhead("'")) {
							chars += "'";
						} else {
							literal = true;
						}
						break;
					default:
						chars += format.charAt(iFormat);
				}
			}
		}
		return chars;
	},

	/* Get a setting value, defaulting if necessary. */
	_get: function(inst, name) {
		return inst.settings[name] !== undefined ?
			inst.settings[name] : this._defaults[name];
	},

	/* Parse existing date and initialise date picker. */
	_setDateFromField: function(inst, noDefault) {
		if (inst.input.val() === inst.lastVal) {
			return;
		}

		var dateFormat = this._get(inst, "dateFormat"),
			dates = inst.lastVal = inst.input ? inst.input.val() : null,
			defaultDate = this._getDefaultDate(inst),
			date = defaultDate,
			settings = this._getFormatConfig(inst);

		try {
			date = this.parseDate(dateFormat, dates, settings) || defaultDate;
		} catch (event) {
			dates = (noDefault ? "" : dates);
		}
		inst.selectedDay = date.getDate();
		inst.drawMonth = inst.selectedMonth = date.getMonth();
		inst.drawYear = inst.selectedYear = date.getFullYear();
		inst.currentDay = (dates ? date.getDate() : 0);
		inst.currentMonth = (dates ? date.getMonth() : 0);
		inst.currentYear = (dates ? date.getFullYear() : 0);
		this._adjustInstDate(inst);
	},

	/* Retrieve the default date shown on opening. */
	_getDefaultDate: function(inst) {
		return this._restrictMinMax(inst,
			this._determineDate(inst, this._get(inst, "defaultDate"), new Date()));
	},

	/* A date may be specified as an exact value or a relative one. */
	_determineDate: function(inst, date, defaultDate) {
		var offsetNumeric = function(offset) {
				var date = new Date();
				date.setDate(date.getDate() + offset);
				return date;
			},
			offsetString = function(offset) {
				try {
					return $.datepicker.parseDate($.datepicker._get(inst, "dateFormat"),
						offset, $.datepicker._getFormatConfig(inst));
				}
				catch (e) {
					// Ignore
				}

				var date = (offset.toLowerCase().match(/^c/) ?
					$.datepicker._getDate(inst) : null) || new Date(),
					year = date.getFullYear(),
					month = date.getMonth(),
					day = date.getDate(),
					pattern = /([+\-]?[0-9]+)\s*(d|D|w|W|m|M|y|Y)?/g,
					matches = pattern.exec(offset);

				while (matches) {
					switch (matches[2] || "d") {
						case "d" : case "D" :
							day += parseInt(matches[1],10); break;
						case "w" : case "W" :
							day += parseInt(matches[1],10) * 7; break;
						case "m" : case "M" :
							month += parseInt(matches[1],10);
							day = Math.min(day, $.datepicker._getDaysInMonth(year, month));
							break;
						case "y": case "Y" :
							year += parseInt(matches[1],10);
							day = Math.min(day, $.datepicker._getDaysInMonth(year, month));
							break;
					}
					matches = pattern.exec(offset);
				}
				return new Date(year, month, day);
			},
			newDate = (date == null || date === "" ? defaultDate : (typeof date === "string" ? offsetString(date) :
				(typeof date === "number" ? (isNaN(date) ? defaultDate : offsetNumeric(date)) : new Date(date.getTime()))));

		newDate = (newDate && newDate.toString() === "Invalid Date" ? defaultDate : newDate);
		if (newDate) {
			newDate.setHours(0);
			newDate.setMinutes(0);
			newDate.setSeconds(0);
			newDate.setMilliseconds(0);
		}
		return this._daylightSavingAdjust(newDate);
	},

	/* Handle switch to/from daylight saving.
	 * Hours may be non-zero on daylight saving cut-over:
	 * > 12 when midnight changeover, but then cannot generate
	 * midnight datetime, so jump to 1AM, otherwise reset.
	 * @param  date  (Date) the date to check
	 * @return  (Date) the corrected date
	 */
	_daylightSavingAdjust: function(date) {
		if (!date) {
			return null;
		}
		date.setHours(date.getHours() > 12 ? date.getHours() + 2 : 0);
		return date;
	},

	/* Set the date(s) directly. */
	_setDate: function(inst, date, noChange) {
		var clear = !date,
			origMonth = inst.selectedMonth,
			origYear = inst.selectedYear,
			newDate = this._restrictMinMax(inst, this._determineDate(inst, date, new Date()));

		inst.selectedDay = inst.currentDay = newDate.getDate();
		inst.drawMonth = inst.selectedMonth = inst.currentMonth = newDate.getMonth();
		inst.drawYear = inst.selectedYear = inst.currentYear = newDate.getFullYear();
		if ((origMonth !== inst.selectedMonth || origYear !== inst.selectedYear) && !noChange) {
			this._notifyChange(inst);
		}
		this._adjustInstDate(inst);
		if (inst.input) {
			inst.input.val(clear ? "" : this._formatDate(inst));
		}
	},

	/* Retrieve the date(s) directly. */
	_getDate: function(inst) {
		var startDate = (!inst.currentYear || (inst.input && inst.input.val() === "") ? null :
			this._daylightSavingAdjust(new Date(
			inst.currentYear, inst.currentMonth, inst.currentDay)));
			return startDate;
	},

	/* Attach the onxxx handlers.  These are declared statically so
	 * they work with static code transformers like Caja.
	 */
	_attachHandlers: function(inst) {
		var stepMonths = this._get(inst, "stepMonths"),
			id = "#" + inst.id.replace( /\\\\/g, "\\" );
		inst.dpDiv.find("[data-handler]").map(function () {
			var handler = {
				prev: function () {
					$.datepicker._adjustDate(id, -stepMonths, "M");
				},
				next: function () {
					$.datepicker._adjustDate(id, +stepMonths, "M");
				},
				hide: function () {
					$.datepicker._hideDatepicker();
				},
				today: function () {
					$.datepicker._gotoToday(id);
				},
				selectDay: function () {
					$.datepicker._selectDay(id, +this.getAttribute("data-month"), +this.getAttribute("data-year"), this);
					return false;
				},
				selectMonth: function () {
					$.datepicker._selectMonthYear(id, this, "M");
					return false;
				},
				selectYear: function () {
					$.datepicker._selectMonthYear(id, this, "Y");
					return false;
				}
			};
			$(this).bind(this.getAttribute("data-event"), handler[this.getAttribute("data-handler")]);
		});
	},

	/* Generate the HTML for the current state of the date picker. */
	_generateHTML: function(inst) {
		var maxDraw, prevText, prev, nextText, next, currentText, gotoDate,
			controls, buttonPanel, firstDay, showWeek, dayNames, dayNamesMin,
			monthNames, monthNamesShort, beforeShowDay, showOtherMonths,
			selectOtherMonths, defaultDate, html, dow, row, group, col, selectedDate,
			cornerClass, calender, thead, day, daysInMonth, leadDays, curRows, numRows,
			printDate, dRow, tbody, daySettings, otherMonth, unselectable,
			tempDate = new Date(),
			today = this._daylightSavingAdjust(
				new Date(tempDate.getFullYear(), tempDate.getMonth(), tempDate.getDate())), // clear time
			isRTL = this._get(inst, "isRTL"),
			showButtonPanel = this._get(inst, "showButtonPanel"),
			hideIfNoPrevNext = this._get(inst, "hideIfNoPrevNext"),
			navigationAsDateFormat = this._get(inst, "navigationAsDateFormat"),
			numMonths = this._getNumberOfMonths(inst),
			showCurrentAtPos = this._get(inst, "showCurrentAtPos"),
			stepMonths = this._get(inst, "stepMonths"),
			isMultiMonth = (numMonths[0] !== 1 || numMonths[1] !== 1),
			currentDate = this._daylightSavingAdjust((!inst.currentDay ? new Date(9999, 9, 9) :
				new Date(inst.currentYear, inst.currentMonth, inst.currentDay))),
			minDate = this._getMinMaxDate(inst, "min"),
			maxDate = this._getMinMaxDate(inst, "max"),
			drawMonth = inst.drawMonth - showCurrentAtPos,
			drawYear = inst.drawYear;

		if (drawMonth < 0) {
			drawMonth += 12;
			drawYear--;
		}
		if (maxDate) {
			maxDraw = this._daylightSavingAdjust(new Date(maxDate.getFullYear(),
				maxDate.getMonth() - (numMonths[0] * numMonths[1]) + 1, maxDate.getDate()));
			maxDraw = (minDate && maxDraw < minDate ? minDate : maxDraw);
			while (this._daylightSavingAdjust(new Date(drawYear, drawMonth, 1)) > maxDraw) {
				drawMonth--;
				if (drawMonth < 0) {
					drawMonth = 11;
					drawYear--;
				}
			}
		}
		inst.drawMonth = drawMonth;
		inst.drawYear = drawYear;

		prevText = this._get(inst, "prevText");
		prevText = (!navigationAsDateFormat ? prevText : this.formatDate(prevText,
			this._daylightSavingAdjust(new Date(drawYear, drawMonth - stepMonths, 1)),
			this._getFormatConfig(inst)));

		prev = (this._canAdjustMonth(inst, -1, drawYear, drawMonth) ?
			"<a class='ui-datepicker-prev ui-corner-all' data-handler='prev' data-event='click'" +
			" title='" + prevText + "'><span class='ui-icon ui-icon-circle-triangle-" + ( isRTL ? "e" : "w") + "'>" + prevText + "</span></a>" :
			(hideIfNoPrevNext ? "" : "<a class='ui-datepicker-prev ui-corner-all ui-state-disabled' title='"+ prevText +"'><span class='ui-icon ui-icon-circle-triangle-" + ( isRTL ? "e" : "w") + "'>" + prevText + "</span></a>"));

		nextText = this._get(inst, "nextText");
		nextText = (!navigationAsDateFormat ? nextText : this.formatDate(nextText,
			this._daylightSavingAdjust(new Date(drawYear, drawMonth + stepMonths, 1)),
			this._getFormatConfig(inst)));

		next = (this._canAdjustMonth(inst, +1, drawYear, drawMonth) ?
			"<a class='ui-datepicker-next ui-corner-all' data-handler='next' data-event='click'" +
			" title='" + nextText + "'><span class='ui-icon ui-icon-circle-triangle-" + ( isRTL ? "w" : "e") + "'>" + nextText + "</span></a>" :
			(hideIfNoPrevNext ? "" : "<a class='ui-datepicker-next ui-corner-all ui-state-disabled' title='"+ nextText + "'><span class='ui-icon ui-icon-circle-triangle-" + ( isRTL ? "w" : "e") + "'>" + nextText + "</span></a>"));

		currentText = this._get(inst, "currentText");
		gotoDate = (this._get(inst, "gotoCurrent") && inst.currentDay ? currentDate : today);
		currentText = (!navigationAsDateFormat ? currentText :
			this.formatDate(currentText, gotoDate, this._getFormatConfig(inst)));

		controls = (!inst.inline ? "<button type='button' class='ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all' data-handler='hide' data-event='click'>" +
			this._get(inst, "closeText") + "</button>" : "");

		buttonPanel = (showButtonPanel) ? "<div class='ui-datepicker-buttonpane ui-widget-content'>" + (isRTL ? controls : "") +
			(this._isInRange(inst, gotoDate) ? "<button type='button' class='ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all' data-handler='today' data-event='click'" +
			">" + currentText + "</button>" : "") + (isRTL ? "" : controls) + "</div>" : "";

		firstDay = parseInt(this._get(inst, "firstDay"),10);
		firstDay = (isNaN(firstDay) ? 0 : firstDay);

		showWeek = this._get(inst, "showWeek");
		dayNames = this._get(inst, "dayNames");
		dayNamesMin = this._get(inst, "dayNamesMin");
		monthNames = this._get(inst, "monthNames");
		monthNamesShort = this._get(inst, "monthNamesShort");
		beforeShowDay = this._get(inst, "beforeShowDay");
		showOtherMonths = this._get(inst, "showOtherMonths");
		selectOtherMonths = this._get(inst, "selectOtherMonths");
		defaultDate = this._getDefaultDate(inst);
		html = "";
		dow;
		for (row = 0; row < numMonths[0]; row++) {
			group = "";
			this.maxRows = 4;
			for (col = 0; col < numMonths[1]; col++) {
				selectedDate = this._daylightSavingAdjust(new Date(drawYear, drawMonth, inst.selectedDay));
				cornerClass = " ui-corner-all";
				calender = "";
				if (isMultiMonth) {
					calender += "<div class='ui-datepicker-group";
					if (numMonths[1] > 1) {
						switch (col) {
							case 0: calender += " ui-datepicker-group-first";
								cornerClass = " ui-corner-" + (isRTL ? "right" : "left"); break;
							case numMonths[1]-1: calender += " ui-datepicker-group-last";
								cornerClass = " ui-corner-" + (isRTL ? "left" : "right"); break;
							default: calender += " ui-datepicker-group-middle"; cornerClass = ""; break;
						}
					}
					calender += "'>";
				}
				calender += "<div class='ui-datepicker-header ui-widget-header ui-helper-clearfix" + cornerClass + "'>" +
					(/all|left/.test(cornerClass) && row === 0 ? (isRTL ? next : prev) : "") +
					(/all|right/.test(cornerClass) && row === 0 ? (isRTL ? prev : next) : "") +
					this._generateMonthYearHeader(inst, drawMonth, drawYear, minDate, maxDate,
					row > 0 || col > 0, monthNames, monthNamesShort) + // draw month headers
					"</div><table class='ui-datepicker-calendar'><thead>" +
					"<tr>";
				thead = (showWeek ? "<th class='ui-datepicker-week-col'>" + this._get(inst, "weekHeader") + "</th>" : "");
				for (dow = 0; dow < 7; dow++) { // days of the week
					day = (dow + firstDay) % 7;
					thead += "<th" + ((dow + firstDay + 6) % 7 >= 5 ? " class='ui-datepicker-week-end'" : "") + ">" +
						"<span title='" + dayNames[day] + "'>" + dayNamesMin[day] + "</span></th>";
				}
				calender += thead + "</tr></thead><tbody>";
				daysInMonth = this._getDaysInMonth(drawYear, drawMonth);
				if (drawYear === inst.selectedYear && drawMonth === inst.selectedMonth) {
					inst.selectedDay = Math.min(inst.selectedDay, daysInMonth);
				}
				leadDays = (this._getFirstDayOfMonth(drawYear, drawMonth) - firstDay + 7) % 7;
				curRows = Math.ceil((leadDays + daysInMonth) / 7); // calculate the number of rows to generate
				numRows = (isMultiMonth ? this.maxRows > curRows ? this.maxRows : curRows : curRows); //If multiple months, use the higher number of rows (see #7043)
				this.maxRows = numRows;
				printDate = this._daylightSavingAdjust(new Date(drawYear, drawMonth, 1 - leadDays));
				for (dRow = 0; dRow < numRows; dRow++) { // create date picker rows
					calender += "<tr>";
					tbody = (!showWeek ? "" : "<td class='ui-datepicker-week-col'>" +
						this._get(inst, "calculateWeek")(printDate) + "</td>");
					for (dow = 0; dow < 7; dow++) { // create date picker days
						daySettings = (beforeShowDay ?
							beforeShowDay.apply((inst.input ? inst.input[0] : null), [printDate]) : [true, ""]);
						otherMonth = (printDate.getMonth() !== drawMonth);
						unselectable = (otherMonth && !selectOtherMonths) || !daySettings[0] ||
							(minDate && printDate < minDate) || (maxDate && printDate > maxDate);
						tbody += "<td class='" +
							((dow + firstDay + 6) % 7 >= 5 ? " ui-datepicker-week-end" : "") + // highlight weekends
							(otherMonth ? " ui-datepicker-other-month" : "") + // highlight days from other months
							((printDate.getTime() === selectedDate.getTime() && drawMonth === inst.selectedMonth && inst._keyEvent) || // user pressed key
							(defaultDate.getTime() === printDate.getTime() && defaultDate.getTime() === selectedDate.getTime()) ?
							// or defaultDate is current printedDate and defaultDate is selectedDate
							" " + this._dayOverClass : "") + // highlight selected day
							(unselectable ? " " + this._unselectableClass + " ui-state-disabled": "") +  // highlight unselectable days
							(otherMonth && !showOtherMonths ? "" : " " + daySettings[1] + // highlight custom dates
							(printDate.getTime() === currentDate.getTime() ? " " + this._currentClass : "") + // highlight selected day
							(printDate.getTime() === today.getTime() ? " ui-datepicker-today" : "")) + "'" + // highlight today (if different)
							((!otherMonth || showOtherMonths) && daySettings[2] ? " title='" + daySettings[2].replace(/'/g, "&#39;") + "'" : "") + // cell title
							(unselectable ? "" : " data-handler='selectDay' data-event='click' data-month='" + printDate.getMonth() + "' data-year='" + printDate.getFullYear() + "'") + ">" + // actions
							(otherMonth && !showOtherMonths ? "&#xa0;" : // display for other months
							(unselectable ? "<span class='ui-state-default'>" + printDate.getDate() + "</span>" : "<a class='ui-state-default" +
							(printDate.getTime() === today.getTime() ? " ui-state-highlight" : "") +
							(printDate.getTime() === currentDate.getTime() ? " ui-state-active" : "") + // highlight selected day
							(otherMonth ? " ui-priority-secondary" : "") + // distinguish dates from other months
							"' href='#'>" + printDate.getDate() + "</a>")) + "</td>"; // display selectable date
						printDate.setDate(printDate.getDate() + 1);
						printDate = this._daylightSavingAdjust(printDate);
					}
					calender += tbody + "</tr>";
				}
				drawMonth++;
				if (drawMonth > 11) {
					drawMonth = 0;
					drawYear++;
				}
				calender += "</tbody></table>" + (isMultiMonth ? "</div>" +
							((numMonths[0] > 0 && col === numMonths[1]-1) ? "<div class='ui-datepicker-row-break'></div>" : "") : "");
				group += calender;
			}
			html += group;
		}
		html += buttonPanel;
		inst._keyEvent = false;
		return html;
	},

	/* Generate the month and year header. */
	_generateMonthYearHeader: function(inst, drawMonth, drawYear, minDate, maxDate,
			secondary, monthNames, monthNamesShort) {

		var inMinYear, inMaxYear, month, years, thisYear, determineYear, year, endYear,
			changeMonth = this._get(inst, "changeMonth"),
			changeYear = this._get(inst, "changeYear"),
			showMonthAfterYear = this._get(inst, "showMonthAfterYear"),
			html = "<div class='ui-datepicker-title'>",
			monthHtml = "";

		// month selection
		if (secondary || !changeMonth) {
			monthHtml += "<span class='ui-datepicker-month'>" + monthNames[drawMonth] + "</span>";
		} else {
			inMinYear = (minDate && minDate.getFullYear() === drawYear);
			inMaxYear = (maxDate && maxDate.getFullYear() === drawYear);
			monthHtml += "<select class='ui-datepicker-month' data-handler='selectMonth' data-event='change'>";
			for ( month = 0; month < 12; month++) {
				if ((!inMinYear || month >= minDate.getMonth()) && (!inMaxYear || month <= maxDate.getMonth())) {
					monthHtml += "<option value='" + month + "'" +
						(month === drawMonth ? " selected='selected'" : "") +
						">" + monthNamesShort[month] + "</option>";
				}
			}
			monthHtml += "</select>";
		}

		if (!showMonthAfterYear) {
			html += monthHtml + (secondary || !(changeMonth && changeYear) ? "&#xa0;" : "");
		}

		// year selection
		if ( !inst.yearshtml ) {
			inst.yearshtml = "";
			if (secondary || !changeYear) {
				html += "<span class='ui-datepicker-year'>" + drawYear + "</span>";
			} else {
				// determine range of years to display
				years = this._get(inst, "yearRange").split(":");
				thisYear = new Date().getFullYear();
				determineYear = function(value) {
					var year = (value.match(/c[+\-].*/) ? drawYear + parseInt(value.substring(1), 10) :
						(value.match(/[+\-].*/) ? thisYear + parseInt(value, 10) :
						parseInt(value, 10)));
					return (isNaN(year) ? thisYear : year);
				};
				year = determineYear(years[0]);
				endYear = Math.max(year, determineYear(years[1] || ""));
				year = (minDate ? Math.max(year, minDate.getFullYear()) : year);
				endYear = (maxDate ? Math.min(endYear, maxDate.getFullYear()) : endYear);
				inst.yearshtml += "<select class='ui-datepicker-year' data-handler='selectYear' data-event='change'>";
				for (; year <= endYear; year++) {
					inst.yearshtml += "<option value='" + year + "'" +
						(year === drawYear ? " selected='selected'" : "") +
						">" + year + "</option>";
				}
				inst.yearshtml += "</select>";

				html += inst.yearshtml;
				inst.yearshtml = null;
			}
		}

		html += this._get(inst, "yearSuffix");
		if (showMonthAfterYear) {
			html += (secondary || !(changeMonth && changeYear) ? "&#xa0;" : "") + monthHtml;
		}
		html += "</div>"; // Close datepicker_header
		return html;
	},

	/* Adjust one of the date sub-fields. */
	_adjustInstDate: function(inst, offset, period) {
		var year = inst.drawYear + (period === "Y" ? offset : 0),
			month = inst.drawMonth + (period === "M" ? offset : 0),
			day = Math.min(inst.selectedDay, this._getDaysInMonth(year, month)) + (period === "D" ? offset : 0),
			date = this._restrictMinMax(inst, this._daylightSavingAdjust(new Date(year, month, day)));

		inst.selectedDay = date.getDate();
		inst.drawMonth = inst.selectedMonth = date.getMonth();
		inst.drawYear = inst.selectedYear = date.getFullYear();
		if (period === "M" || period === "Y") {
			this._notifyChange(inst);
		}
	},

	/* Ensure a date is within any min/max bounds. */
	_restrictMinMax: function(inst, date) {
		var minDate = this._getMinMaxDate(inst, "min"),
			maxDate = this._getMinMaxDate(inst, "max"),
			newDate = (minDate && date < minDate ? minDate : date);
		return (maxDate && newDate > maxDate ? maxDate : newDate);
	},

	/* Notify change of month/year. */
	_notifyChange: function(inst) {
		var onChange = this._get(inst, "onChangeMonthYear");
		if (onChange) {
			onChange.apply((inst.input ? inst.input[0] : null),
				[inst.selectedYear, inst.selectedMonth + 1, inst]);
		}
	},

	/* Determine the number of months to show. */
	_getNumberOfMonths: function(inst) {
		var numMonths = this._get(inst, "numberOfMonths");
		return (numMonths == null ? [1, 1] : (typeof numMonths === "number" ? [1, numMonths] : numMonths));
	},

	/* Determine the current maximum date - ensure no time components are set. */
	_getMinMaxDate: function(inst, minMax) {
		return this._determineDate(inst, this._get(inst, minMax + "Date"), null);
	},

	/* Find the number of days in a given month. */
	_getDaysInMonth: function(year, month) {
		return 32 - this._daylightSavingAdjust(new Date(year, month, 32)).getDate();
	},

	/* Find the day of the week of the first of a month. */
	_getFirstDayOfMonth: function(year, month) {
		return new Date(year, month, 1).getDay();
	},

	/* Determines if we should allow a "next/prev" month display change. */
	_canAdjustMonth: function(inst, offset, curYear, curMonth) {
		var numMonths = this._getNumberOfMonths(inst),
			date = this._daylightSavingAdjust(new Date(curYear,
			curMonth + (offset < 0 ? offset : numMonths[0] * numMonths[1]), 1));

		if (offset < 0) {
			date.setDate(this._getDaysInMonth(date.getFullYear(), date.getMonth()));
		}
		return this._isInRange(inst, date);
	},

	/* Is the given date in the accepted range? */
	_isInRange: function(inst, date) {
		var yearSplit, currentYear,
			minDate = this._getMinMaxDate(inst, "min"),
			maxDate = this._getMinMaxDate(inst, "max"),
			minYear = null,
			maxYear = null,
			years = this._get(inst, "yearRange");
			if (years){
				yearSplit = years.split(":");
				currentYear = new Date().getFullYear();
				minYear = parseInt(yearSplit[0], 10);
				maxYear = parseInt(yearSplit[1], 10);
				if ( yearSplit[0].match(/[+\-].*/) ) {
					minYear += currentYear;
				}
				if ( yearSplit[1].match(/[+\-].*/) ) {
					maxYear += currentYear;
				}
			}

		return ((!minDate || date.getTime() >= minDate.getTime()) &&
			(!maxDate || date.getTime() <= maxDate.getTime()) &&
			(!minYear || date.getFullYear() >= minYear) &&
			(!maxYear || date.getFullYear() <= maxYear));
	},

	/* Provide the configuration settings for formatting/parsing. */
	_getFormatConfig: function(inst) {
		var shortYearCutoff = this._get(inst, "shortYearCutoff");
		shortYearCutoff = (typeof shortYearCutoff !== "string" ? shortYearCutoff :
			new Date().getFullYear() % 100 + parseInt(shortYearCutoff, 10));
		return {shortYearCutoff: shortYearCutoff,
			dayNamesShort: this._get(inst, "dayNamesShort"), dayNames: this._get(inst, "dayNames"),
			monthNamesShort: this._get(inst, "monthNamesShort"), monthNames: this._get(inst, "monthNames")};
	},

	/* Format the given date for display. */
	_formatDate: function(inst, day, month, year) {
		if (!day) {
			inst.currentDay = inst.selectedDay;
			inst.currentMonth = inst.selectedMonth;
			inst.currentYear = inst.selectedYear;
		}
		var date = (day ? (typeof day === "object" ? day :
			this._daylightSavingAdjust(new Date(year, month, day))) :
			this._daylightSavingAdjust(new Date(inst.currentYear, inst.currentMonth, inst.currentDay)));
		return this.formatDate(this._get(inst, "dateFormat"), date, this._getFormatConfig(inst));
	}
});

/*
 * Bind hover events for datepicker elements.
 * Done via delegate so the binding only occurs once in the lifetime of the parent div.
 * Global instActive, set by _updateDatepicker allows the handlers to find their way back to the active picker.
 */
function bindHover(dpDiv) {
	var selector = "button, .ui-datepicker-prev, .ui-datepicker-next, .ui-datepicker-calendar td a";
	return dpDiv.delegate(selector, "mouseout", function() {
			$(this).removeClass("ui-state-hover");
			if (this.className.indexOf("ui-datepicker-prev") !== -1) {
				$(this).removeClass("ui-datepicker-prev-hover");
			}
			if (this.className.indexOf("ui-datepicker-next") !== -1) {
				$(this).removeClass("ui-datepicker-next-hover");
			}
		})
		.delegate(selector, "mouseover", function(){
			if (!$.datepicker._isDisabledDatepicker( instActive.inline ? dpDiv.parent()[0] : instActive.input[0])) {
				$(this).parents(".ui-datepicker-calendar").find("a").removeClass("ui-state-hover");
				$(this).addClass("ui-state-hover");
				if (this.className.indexOf("ui-datepicker-prev") !== -1) {
					$(this).addClass("ui-datepicker-prev-hover");
				}
				if (this.className.indexOf("ui-datepicker-next") !== -1) {
					$(this).addClass("ui-datepicker-next-hover");
				}
			}
		});
}

/* jQuery extend now ignores nulls! */
function extendRemove(target, props) {
	$.extend(target, props);
	for (var name in props) {
		if (props[name] == null) {
			target[name] = props[name];
		}
	}
	return target;
}

/* Invoke the datepicker functionality.
   @param  options  string - a command, optionally followed by additional parameters or
					Object - settings for attaching new datepicker functionality
   @return  jQuery object */
$.fn.datepicker = function(options){

	/* Verify an empty collection wasn't passed - Fixes #6976 */
	if ( !this.length ) {
		return this;
	}

	/* Initialise the date picker. */
	if (!$.datepicker.initialized) {
		$(document).mousedown($.datepicker._checkExternalClick);
		$.datepicker.initialized = true;
	}

	/* Append datepicker main container to body if not exist. */
	if ($("#"+$.datepicker._mainDivId).length === 0) {
		$("body").append($.datepicker.dpDiv);
	}

	var otherArgs = Array.prototype.slice.call(arguments, 1);
	if (typeof options === "string" && (options === "isDisabled" || options === "getDate" || options === "widget")) {
		return $.datepicker["_" + options + "Datepicker"].
			apply($.datepicker, [this[0]].concat(otherArgs));
	}
	if (options === "option" && arguments.length === 2 && typeof arguments[1] === "string") {
		return $.datepicker["_" + options + "Datepicker"].
			apply($.datepicker, [this[0]].concat(otherArgs));
	}
	return this.each(function() {
		typeof options === "string" ?
			$.datepicker["_" + options + "Datepicker"].
				apply($.datepicker, [this].concat(otherArgs)) :
			$.datepicker._attachDatepicker(this, options);
	});
};

$.datepicker = new Datepicker(); // singleton instance
$.datepicker.initialized = false;
$.datepicker.uuid = new Date().getTime();
$.datepicker.version = "1.10.4";

})($vic);
(function( $, undefined ) {

var sizeRelatedOptions = {
		buttons: true,
		height: true,
		maxHeight: true,
		maxWidth: true,
		minHeight: true,
		minWidth: true,
		width: true
	},
	resizableRelatedOptions = {
		maxHeight: true,
		maxWidth: true,
		minHeight: true,
		minWidth: true
	};

$.widget( "ui.dialog", {
	version: "1.10.4",
	options: {
		appendTo: "body",
		autoOpen: true,
		buttons: [],
		closeOnEscape: true,
		closeText: "close",
		dialogClass: "",
		draggable: true,
		hide: null,
		height: "auto",
		maxHeight: null,
		maxWidth: null,
		minHeight: 150,
		minWidth: 150,
		modal: false,
		position: {
			my: "center",
			at: "center",
			of: window,
			collision: "fit",
			// Ensure the titlebar is always visible
			using: function( pos ) {
				var topOffset = $( this ).css( pos ).offset().top;
				if ( topOffset < 0 ) {
					$( this ).css( "top", pos.top - topOffset );
				}
			}
		},
		resizable: true,
		show: null,
		title: null,
		width: 300,

		// callbacks
		beforeClose: null,
		close: null,
		drag: null,
		dragStart: null,
		dragStop: null,
		focus: null,
		open: null,
		resize: null,
		resizeStart: null,
		resizeStop: null
	},

	_create: function() {
		this.originalCss = {
			display: this.element[0].style.display,
			width: this.element[0].style.width,
			minHeight: this.element[0].style.minHeight,
			maxHeight: this.element[0].style.maxHeight,
			height: this.element[0].style.height
		};
		this.originalPosition = {
			parent: this.element.parent(),
			index: this.element.parent().children().index( this.element )
		};
		this.originalTitle = this.element.attr("title");
		this.options.title = this.options.title || this.originalTitle;

		this._createWrapper();

		this.element
			.show()
			.removeAttr("title")
			.addClass("ui-dialog-content ui-widget-content")
			.appendTo( this.uiDialog );

		this._createTitlebar();
		this._createButtonPane();

		if ( this.options.draggable && $.fn.draggable ) {
			this._makeDraggable();
		}
		if ( this.options.resizable && $.fn.resizable ) {
			this._makeResizable();
		}

		this._isOpen = false;
	},

	_init: function() {
		if ( this.options.autoOpen ) {
			this.open();
		}
	},

	_appendTo: function() {
		var element = this.options.appendTo;
		if ( element && (element.jquery || element.nodeType) ) {
			return $( element );
		}
		return this.document.find( element || "body" ).eq( 0 );
	},

	_destroy: function() {
		var next,
			originalPosition = this.originalPosition;

		this._destroyOverlay();

		this.element
			.removeUniqueId()
			.removeClass("ui-dialog-content ui-widget-content")
			.css( this.originalCss )
			// Without detaching first, the following becomes really slow
			.detach();

		this.uiDialog.stop( true, true ).remove();

		if ( this.originalTitle ) {
			this.element.attr( "title", this.originalTitle );
		}

		next = originalPosition.parent.children().eq( originalPosition.index );
		// Don't try to place the dialog next to itself (#8613)
		if ( next.length && next[0] !== this.element[0] ) {
			next.before( this.element );
		} else {
			originalPosition.parent.append( this.element );
		}
	},

	widget: function() {
		return this.uiDialog;
	},

	disable: $.noop,
	enable: $.noop,

	close: function( event ) {
		var activeElement,
			that = this;

		if ( !this._isOpen || this._trigger( "beforeClose", event ) === false ) {
			return;
		}

		this._isOpen = false;
		this._destroyOverlay();

		if ( !this.opener.filter(":focusable").focus().length ) {

			// support: IE9
			// IE9 throws an "Unspecified error" accessing document.activeElement from an <iframe>
			try {
				activeElement = this.document[ 0 ].activeElement;

				// Support: IE9, IE10
				// If the <body> is blurred, IE will switch windows, see #4520
				if ( activeElement && activeElement.nodeName.toLowerCase() !== "body" ) {

					// Hiding a focused element doesn't trigger blur in WebKit
					// so in case we have nothing to focus on, explicitly blur the active element
					// https://bugs.webkit.org/show_bug.cgi?id=47182
					$( activeElement ).blur();
				}
			} catch ( error ) {}
		}

		this._hide( this.uiDialog, this.options.hide, function() {
			that._trigger( "close", event );
		});
	},

	isOpen: function() {
		return this._isOpen;
	},

	moveToTop: function() {
		this._moveToTop();
	},

	_moveToTop: function( event, silent ) {
		var moved = !!this.uiDialog.nextAll(":visible").insertBefore( this.uiDialog ).length;
		if ( moved && !silent ) {
			this._trigger( "focus", event );
		}
		return moved;
	},

	open: function() {
		var that = this;
		if ( this._isOpen ) {
			if ( this._moveToTop() ) {
				this._focusTabbable();
			}
			return;
		}

		this._isOpen = true;
		this.opener = $( this.document[0].activeElement );

		this._size();
		this._position();
		this._createOverlay();
		this._moveToTop( null, true );
		this._show( this.uiDialog, this.options.show, function() {
			that._focusTabbable();
			that._trigger("focus");
		});

		this._trigger("open");
	},

	_focusTabbable: function() {
		// Set focus to the first match:
		// 1. First element inside the dialog matching [autofocus]
		// 2. Tabbable element inside the content element
		// 3. Tabbable element inside the buttonpane
		// 4. The close button
		// 5. The dialog itself
		var hasFocus = this.element.find("[autofocus]");
		if ( !hasFocus.length ) {
			hasFocus = this.element.find(":tabbable");
		}
		if ( !hasFocus.length ) {
			hasFocus = this.uiDialogButtonPane.find(":tabbable");
		}
		if ( !hasFocus.length ) {
			hasFocus = this.uiDialogTitlebarClose.filter(":tabbable");
		}
		if ( !hasFocus.length ) {
			hasFocus = this.uiDialog;
		}
		hasFocus.eq( 0 ).focus();
	},

	_keepFocus: function( event ) {
		function checkFocus() {
			var activeElement = this.document[0].activeElement,
				isActive = this.uiDialog[0] === activeElement ||
					$.contains( this.uiDialog[0], activeElement );
			if ( !isActive ) {
				this._focusTabbable();
			}
		}
		event.preventDefault();
		checkFocus.call( this );
		// support: IE
		// IE <= 8 doesn't prevent moving focus even with event.preventDefault()
		// so we check again later
		this._delay( checkFocus );
	},

	_createWrapper: function() {
		this.uiDialog = $("<div>")
			.addClass( "ui-dialog ui-widget ui-widget-content ui-corner-all ui-front " +
				this.options.dialogClass )
			.hide()
			.attr({
				// Setting tabIndex makes the div focusable
				tabIndex: -1,
				role: "dialog"
			})
			.appendTo( this._appendTo() );

		this._on( this.uiDialog, {
			keydown: function( event ) {
				if ( this.options.closeOnEscape && !event.isDefaultPrevented() && event.keyCode &&
						event.keyCode === $.ui.keyCode.ESCAPE ) {
					event.preventDefault();
					this.close( event );
					return;
				}

				// prevent tabbing out of dialogs
				if ( event.keyCode !== $.ui.keyCode.TAB ) {
					return;
				}
				var tabbables = this.uiDialog.find(":tabbable"),
					first = tabbables.filter(":first"),
					last  = tabbables.filter(":last");

				if ( ( event.target === last[0] || event.target === this.uiDialog[0] ) && !event.shiftKey ) {
					first.focus( 1 );
					event.preventDefault();
				} else if ( ( event.target === first[0] || event.target === this.uiDialog[0] ) && event.shiftKey ) {
					last.focus( 1 );
					event.preventDefault();
				}
			},
			mousedown: function( event ) {
				if ( this._moveToTop( event ) ) {
					this._focusTabbable();
				}
			}
		});

		// We assume that any existing aria-describedby attribute means
		// that the dialog content is marked up properly
		// otherwise we brute force the content as the description
		if ( !this.element.find("[aria-describedby]").length ) {
			this.uiDialog.attr({
				"aria-describedby": this.element.uniqueId().attr("id")
			});
		}
	},

	_createTitlebar: function() {
		var uiDialogTitle;

		this.uiDialogTitlebar = $("<div>")
			.addClass("ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix")
			.prependTo( this.uiDialog );
		this._on( this.uiDialogTitlebar, {
			mousedown: function( event ) {
				// Don't prevent click on close button (#8838)
				// Focusing a dialog that is partially scrolled out of view
				// causes the browser to scroll it into view, preventing the click event
				if ( !$( event.target ).closest(".ui-dialog-titlebar-close") ) {
					// Dialog isn't getting focus when dragging (#8063)
					this.uiDialog.focus();
				}
			}
		});

		// support: IE
		// Use type="button" to prevent enter keypresses in textboxes from closing the
		// dialog in IE (#9312)
		this.uiDialogTitlebarClose = $( "<button type='button'></button>" )
			.button({
				label: this.options.closeText,
				icons: {
					primary: "ui-icon-closethick"
				},
				text: false
			})
			.addClass("ui-dialog-titlebar-close")
			.appendTo( this.uiDialogTitlebar );
		this._on( this.uiDialogTitlebarClose, {
			click: function( event ) {
				event.preventDefault();
				this.close( event );
			}
		});

		uiDialogTitle = $("<span>")
			.uniqueId()
			.addClass("ui-dialog-title")
			.prependTo( this.uiDialogTitlebar );
		this._title( uiDialogTitle );

		this.uiDialog.attr({
			"aria-labelledby": uiDialogTitle.attr("id")
		});
	},

	_title: function( title ) {
		if ( !this.options.title ) {
			title.html("&#160;");
		}
		title.text( this.options.title );
	},

	_createButtonPane: function() {
		this.uiDialogButtonPane = $("<div>")
			.addClass("ui-dialog-buttonpane ui-widget-content ui-helper-clearfix");

		this.uiButtonSet = $("<div>")
			.addClass("ui-dialog-buttonset")
			.appendTo( this.uiDialogButtonPane );

		this._createButtons();
	},

	_createButtons: function() {
		var that = this,
			buttons = this.options.buttons;

		// if we already have a button pane, remove it
		this.uiDialogButtonPane.remove();
		this.uiButtonSet.empty();

		if ( $.isEmptyObject( buttons ) || ($.isArray( buttons ) && !buttons.length) ) {
			this.uiDialog.removeClass("ui-dialog-buttons");
			return;
		}

		$.each( buttons, function( name, props ) {
			var click, buttonOptions;
			props = $.isFunction( props ) ?
				{ click: props, text: name } :
				props;
			// Default to a non-submitting button
			props = $.extend( { type: "button" }, props );
			// Change the context for the click callback to be the main element
			click = props.click;
			props.click = function() {
				click.apply( that.element[0], arguments );
			};
			buttonOptions = {
				icons: props.icons,
				text: props.showText
			};
			delete props.icons;
			delete props.showText;
			$( "<button></button>", props )
				.button( buttonOptions )
				.appendTo( that.uiButtonSet );
		});
		this.uiDialog.addClass("ui-dialog-buttons");
		this.uiDialogButtonPane.appendTo( this.uiDialog );
	},

	_makeDraggable: function() {
		var that = this,
			options = this.options;

		function filteredUi( ui ) {
			return {
				position: ui.position,
				offset: ui.offset
			};
		}

		this.uiDialog.draggable({
			cancel: ".ui-dialog-content, .ui-dialog-titlebar-close",
			handle: ".ui-dialog-titlebar",
			containment: "document",
			start: function( event, ui ) {
				$( this ).addClass("ui-dialog-dragging");
				that._blockFrames();
				that._trigger( "dragStart", event, filteredUi( ui ) );
			},
			drag: function( event, ui ) {
				that._trigger( "drag", event, filteredUi( ui ) );
			},
			stop: function( event, ui ) {
				options.position = [
					ui.position.left - that.document.scrollLeft(),
					ui.position.top - that.document.scrollTop()
				];
				$( this ).removeClass("ui-dialog-dragging");
				that._unblockFrames();
				that._trigger( "dragStop", event, filteredUi( ui ) );
			}
		});
	},

	_makeResizable: function() {
		var that = this,
			options = this.options,
			handles = options.resizable,
			// .ui-resizable has position: relative defined in the stylesheet
			// but dialogs have to use absolute or fixed positioning
			position = this.uiDialog.css("position"),
			resizeHandles = typeof handles === "string" ?
				handles	:
				"n,e,s,w,se,sw,ne,nw";

		function filteredUi( ui ) {
			return {
				originalPosition: ui.originalPosition,
				originalSize: ui.originalSize,
				position: ui.position,
				size: ui.size
			};
		}

		this.uiDialog.resizable({
			cancel: ".ui-dialog-content",
			containment: "document",
			alsoResize: this.element,
			maxWidth: options.maxWidth,
			maxHeight: options.maxHeight,
			minWidth: options.minWidth,
			minHeight: this._minHeight(),
			handles: resizeHandles,
			start: function( event, ui ) {
				$( this ).addClass("ui-dialog-resizing");
				that._blockFrames();
				that._trigger( "resizeStart", event, filteredUi( ui ) );
			},
			resize: function( event, ui ) {
				that._trigger( "resize", event, filteredUi( ui ) );
			},
			stop: function( event, ui ) {
				options.height = $( this ).height();
				options.width = $( this ).width();
				$( this ).removeClass("ui-dialog-resizing");
				that._unblockFrames();
				that._trigger( "resizeStop", event, filteredUi( ui ) );
			}
		})
		.css( "position", position );
	},

	_minHeight: function() {
		var options = this.options;

		return options.height === "auto" ?
			options.minHeight :
			Math.min( options.minHeight, options.height );
	},

	_position: function() {
		// Need to show the dialog to get the actual offset in the position plugin
		var isVisible = this.uiDialog.is(":visible");
		if ( !isVisible ) {
			this.uiDialog.show();
		}
		this.uiDialog.position( this.options.position );
		if ( !isVisible ) {
			this.uiDialog.hide();
		}
	},

	_setOptions: function( options ) {
		var that = this,
			resize = false,
			resizableOptions = {};

		$.each( options, function( key, value ) {
			that._setOption( key, value );

			if ( key in sizeRelatedOptions ) {
				resize = true;
			}
			if ( key in resizableRelatedOptions ) {
				resizableOptions[ key ] = value;
			}
		});

		if ( resize ) {
			this._size();
			this._position();
		}
		if ( this.uiDialog.is(":data(ui-resizable)") ) {
			this.uiDialog.resizable( "option", resizableOptions );
		}
	},

	_setOption: function( key, value ) {
		var isDraggable, isResizable,
			uiDialog = this.uiDialog;

		if ( key === "dialogClass" ) {
			uiDialog
				.removeClass( this.options.dialogClass )
				.addClass( value );
		}

		if ( key === "disabled" ) {
			return;
		}

		this._super( key, value );

		if ( key === "appendTo" ) {
			this.uiDialog.appendTo( this._appendTo() );
		}

		if ( key === "buttons" ) {
			this._createButtons();
		}

		if ( key === "closeText" ) {
			this.uiDialogTitlebarClose.button({
				// Ensure that we always pass a string
				label: "" + value
			});
		}

		if ( key === "draggable" ) {
			isDraggable = uiDialog.is(":data(ui-draggable)");
			if ( isDraggable && !value ) {
				uiDialog.draggable("destroy");
			}

			if ( !isDraggable && value ) {
				this._makeDraggable();
			}
		}

		if ( key === "position" ) {
			this._position();
		}

		if ( key === "resizable" ) {
			// currently resizable, becoming non-resizable
			isResizable = uiDialog.is(":data(ui-resizable)");
			if ( isResizable && !value ) {
				uiDialog.resizable("destroy");
			}

			// currently resizable, changing handles
			if ( isResizable && typeof value === "string" ) {
				uiDialog.resizable( "option", "handles", value );
			}

			// currently non-resizable, becoming resizable
			if ( !isResizable && value !== false ) {
				this._makeResizable();
			}
		}

		if ( key === "title" ) {
			this._title( this.uiDialogTitlebar.find(".ui-dialog-title") );
		}
	},

	_size: function() {
		// If the user has resized the dialog, the .ui-dialog and .ui-dialog-content
		// divs will both have width and height set, so we need to reset them
		var nonContentHeight, minContentHeight, maxContentHeight,
			options = this.options;

		// Reset content sizing
		this.element.show().css({
			width: "auto",
			minHeight: 0,
			maxHeight: "none",
			height: 0
		});

		if ( options.minWidth > options.width ) {
			options.width = options.minWidth;
		}

		// reset wrapper sizing
		// determine the height of all the non-content elements
		nonContentHeight = this.uiDialog.css({
				height: "auto",
				width: options.width
			})
			.outerHeight();
		minContentHeight = Math.max( 0, options.minHeight - nonContentHeight );
		maxContentHeight = typeof options.maxHeight === "number" ?
			Math.max( 0, options.maxHeight - nonContentHeight ) :
			"none";

		if ( options.height === "auto" ) {
			this.element.css({
				minHeight: minContentHeight,
				maxHeight: maxContentHeight,
				height: "auto"
			});
		} else {
			this.element.height( Math.max( 0, options.height - nonContentHeight ) );
		}

		if (this.uiDialog.is(":data(ui-resizable)") ) {
			this.uiDialog.resizable( "option", "minHeight", this._minHeight() );
		}
	},

	_blockFrames: function() {
		this.iframeBlocks = this.document.find( "iframe" ).map(function() {
			var iframe = $( this );

			return $( "<div>" )
				.css({
					position: "absolute",
					width: iframe.outerWidth(),
					height: iframe.outerHeight()
				})
				.appendTo( iframe.parent() )
				.offset( iframe.offset() )[0];
		});
	},

	_unblockFrames: function() {
		if ( this.iframeBlocks ) {
			this.iframeBlocks.remove();
			delete this.iframeBlocks;
		}
	},

	_allowInteraction: function( event ) {
		if ( $( event.target ).closest(".ui-dialog").length ) {
			return true;
		}

		// TODO: Remove hack when datepicker implements
		// the .ui-front logic (#8989)
		return !!$( event.target ).closest(".ui-datepicker").length;
	},

	_createOverlay: function() {
		if ( !this.options.modal ) {
			return;
		}

		var that = this,
			widgetFullName = this.widgetFullName;
		if ( !$.ui.dialog.overlayInstances ) {
			// Prevent use of anchors and inputs.
			// We use a delay in case the overlay is created from an
			// event that we're going to be cancelling. (#2804)
			this._delay(function() {
				// Handle .dialog().dialog("close") (#4065)
				if ( $.ui.dialog.overlayInstances ) {
					this.document.bind( "focusin.dialog", function( event ) {
						if ( !that._allowInteraction( event ) ) {
							event.preventDefault();
							$(".ui-dialog:visible:last .ui-dialog-content")
								.data( widgetFullName )._focusTabbable();
						}
					});
				}
			});
		}

		this.overlay = $("<div>")
			.addClass("ui-widget-overlay ui-front")
			.appendTo( this._appendTo() );
		this._on( this.overlay, {
			mousedown: "_keepFocus"
		});
		$.ui.dialog.overlayInstances++;
	},

	_destroyOverlay: function() {
		if ( !this.options.modal ) {
			return;
		}

		if ( this.overlay ) {
			$.ui.dialog.overlayInstances--;

			if ( !$.ui.dialog.overlayInstances ) {
				this.document.unbind( "focusin.dialog" );
			}
			this.overlay.remove();
			this.overlay = null;
		}
	}
});

$.ui.dialog.overlayInstances = 0;

// DEPRECATED
if ( $.uiBackCompat !== false ) {
	// position option with array notation
	// just override with old implementation
	$.widget( "ui.dialog", $.ui.dialog, {
		_position: function() {
			var position = this.options.position,
				myAt = [],
				offset = [ 0, 0 ],
				isVisible;

			if ( position ) {
				if ( typeof position === "string" || (typeof position === "object" && "0" in position ) ) {
					myAt = position.split ? position.split(" ") : [ position[0], position[1] ];
					if ( myAt.length === 1 ) {
						myAt[1] = myAt[0];
					}

					$.each( [ "left", "top" ], function( i, offsetPosition ) {
						if ( +myAt[ i ] === myAt[ i ] ) {
							offset[ i ] = myAt[ i ];
							myAt[ i ] = offsetPosition;
						}
					});

					position = {
						my: myAt[0] + (offset[0] < 0 ? offset[0] : "+" + offset[0]) + " " +
							myAt[1] + (offset[1] < 0 ? offset[1] : "+" + offset[1]),
						at: myAt.join(" ")
					};
				}

				position = $.extend( {}, $.ui.dialog.prototype.options.position, position );
			} else {
				position = $.ui.dialog.prototype.options.position;
			}

			// need to show the dialog to get the actual offset in the position plugin
			isVisible = this.uiDialog.is(":visible");
			if ( !isVisible ) {
				this.uiDialog.show();
			}
			this.uiDialog.position( position );
			if ( !isVisible ) {
				this.uiDialog.hide();
			}
		}
	});
}

}( $vic ) );
(function( $, undefined ) {

$.widget("ui.draggable", $.ui.mouse, {
	version: "1.10.4",
	widgetEventPrefix: "drag",
	options: {
		addClasses: true,
		appendTo: "parent",
		axis: false,
		connectToSortable: false,
		containment: false,
		cursor: "auto",
		cursorAt: false,
		grid: false,
		handle: false,
		helper: "original",
		iframeFix: false,
		opacity: false,
		refreshPositions: false,
		revert: false,
		revertDuration: 500,
		scope: "default",
		scroll: true,
		scrollSensitivity: 20,
		scrollSpeed: 20,
		snap: false,
		snapMode: "both",
		snapTolerance: 20,
		stack: false,
		zIndex: false,

		// callbacks
		drag: null,
		start: null,
		stop: null
	},
	_create: function() {

		if (this.options.helper === "original" && !(/^(?:r|a|f)/).test(this.element.css("position"))) {
			this.element[0].style.position = "relative";
		}
		if (this.options.addClasses){
			this.element.addClass("ui-draggable");
		}
		if (this.options.disabled){
			this.element.addClass("ui-draggable-disabled");
		}

		this._mouseInit();

	},

	_destroy: function() {
		this.element.removeClass( "ui-draggable ui-draggable-dragging ui-draggable-disabled" );
		this._mouseDestroy();
	},

	_mouseCapture: function(event) {

		var o = this.options;

		// among others, prevent a drag on a resizable-handle
		if (this.helper || o.disabled || $(event.target).closest(".ui-resizable-handle").length > 0) {
			return false;
		}

		//Quit if we're not on a valid handle
		this.handle = this._getHandle(event);
		if (!this.handle) {
			return false;
		}

		$(o.iframeFix === true ? "iframe" : o.iframeFix).each(function() {
			$("<div class='ui-draggable-iframeFix' style='background: #fff;'></div>")
			.css({
				width: this.offsetWidth+"px", height: this.offsetHeight+"px",
				position: "absolute", opacity: "0.001", zIndex: 1000
			})
			.css($(this).offset())
			.appendTo("body");
		});

		return true;

	},

	_mouseStart: function(event) {

		var o = this.options;

		//Create and append the visible helper
		this.helper = this._createHelper(event);

		this.helper.addClass("ui-draggable-dragging");

		//Cache the helper size
		this._cacheHelperProportions();

		//If ddmanager is used for droppables, set the global draggable
		if($.ui.ddmanager) {
			$.ui.ddmanager.current = this;
		}

		/*
		 * - Position generation -
		 * This block generates everything position related - it's the core of draggables.
		 */

		//Cache the margins of the original element
		this._cacheMargins();

		//Store the helper's css position
		this.cssPosition = this.helper.css( "position" );
		this.scrollParent = this.helper.scrollParent();
		this.offsetParent = this.helper.offsetParent();
		this.offsetParentCssPosition = this.offsetParent.css( "position" );

		//The element's absolute position on the page minus margins
		this.offset = this.positionAbs = this.element.offset();
		this.offset = {
			top: this.offset.top - this.margins.top,
			left: this.offset.left - this.margins.left
		};

		//Reset scroll cache
		this.offset.scroll = false;

		$.extend(this.offset, {
			click: { //Where the click happened, relative to the element
				left: event.pageX - this.offset.left,
				top: event.pageY - this.offset.top
			},
			parent: this._getParentOffset(),
			relative: this._getRelativeOffset() //This is a relative to absolute position minus the actual position calculation - only used for relative positioned helper
		});

		//Generate the original position
		this.originalPosition = this.position = this._generatePosition(event);
		this.originalPageX = event.pageX;
		this.originalPageY = event.pageY;

		//Adjust the mouse offset relative to the helper if "cursorAt" is supplied
		(o.cursorAt && this._adjustOffsetFromHelper(o.cursorAt));

		//Set a containment if given in the options
		this._setContainment();

		//Trigger event + callbacks
		if(this._trigger("start", event) === false) {
			this._clear();
			return false;
		}

		//Recache the helper size
		this._cacheHelperProportions();

		//Prepare the droppable offsets
		if ($.ui.ddmanager && !o.dropBehaviour) {
			$.ui.ddmanager.prepareOffsets(this, event);
		}


		this._mouseDrag(event, true); //Execute the drag once - this causes the helper not to be visible before getting its correct position

		//If the ddmanager is used for droppables, inform the manager that dragging has started (see #5003)
		if ( $.ui.ddmanager ) {
			$.ui.ddmanager.dragStart(this, event);
		}

		return true;
	},

	_mouseDrag: function(event, noPropagation) {
		// reset any necessary cached properties (see #5009)
		if ( this.offsetParentCssPosition === "fixed" ) {
			this.offset.parent = this._getParentOffset();
		}

		//Compute the helpers position
		this.position = this._generatePosition(event);
		this.positionAbs = this._convertPositionTo("absolute");

		//Call plugins and callbacks and use the resulting position if something is returned
		if (!noPropagation) {
			var ui = this._uiHash();
			if(this._trigger("drag", event, ui) === false) {
				this._mouseUp({});
				return false;
			}
			this.position = ui.position;
		}

		if(!this.options.axis || this.options.axis !== "y") {
			this.helper[0].style.left = this.position.left+"px";
		}
		if(!this.options.axis || this.options.axis !== "x") {
			this.helper[0].style.top = this.position.top+"px";
		}
		if($.ui.ddmanager) {
			$.ui.ddmanager.drag(this, event);
		}

		return false;
	},

	_mouseStop: function(event) {

		//If we are using droppables, inform the manager about the drop
		var that = this,
			dropped = false;
		if ($.ui.ddmanager && !this.options.dropBehaviour) {
			dropped = $.ui.ddmanager.drop(this, event);
		}

		//if a drop comes from outside (a sortable)
		if(this.dropped) {
			dropped = this.dropped;
			this.dropped = false;
		}

		//if the original element is no longer in the DOM don't bother to continue (see #8269)
		if ( this.options.helper === "original" && !$.contains( this.element[ 0 ].ownerDocument, this.element[ 0 ] ) ) {
			return false;
		}

		if((this.options.revert === "invalid" && !dropped) || (this.options.revert === "valid" && dropped) || this.options.revert === true || ($.isFunction(this.options.revert) && this.options.revert.call(this.element, dropped))) {
			$(this.helper).animate(this.originalPosition, parseInt(this.options.revertDuration, 10), function() {
				if(that._trigger("stop", event) !== false) {
					that._clear();
				}
			});
		} else {
			if(this._trigger("stop", event) !== false) {
				this._clear();
			}
		}

		return false;
	},

	_mouseUp: function(event) {
		//Remove frame helpers
		$("div.ui-draggable-iframeFix").each(function() {
			this.parentNode.removeChild(this);
		});

		//If the ddmanager is used for droppables, inform the manager that dragging has stopped (see #5003)
		if( $.ui.ddmanager ) {
			$.ui.ddmanager.dragStop(this, event);
		}

		return $.ui.mouse.prototype._mouseUp.call(this, event);
	},

	cancel: function() {

		if(this.helper.is(".ui-draggable-dragging")) {
			this._mouseUp({});
		} else {
			this._clear();
		}

		return this;

	},

	_getHandle: function(event) {
		return this.options.handle ?
			!!$( event.target ).closest( this.element.find( this.options.handle ) ).length :
			true;
	},

	_createHelper: function(event) {

		var o = this.options,
			helper = $.isFunction(o.helper) ? $(o.helper.apply(this.element[0], [event])) : (o.helper === "clone" ? this.element.clone().removeAttr("id") : this.element);

		if(!helper.parents("body").length) {
			helper.appendTo((o.appendTo === "parent" ? this.element[0].parentNode : o.appendTo));
		}

		if(helper[0] !== this.element[0] && !(/(fixed|absolute)/).test(helper.css("position"))) {
			helper.css("position", "absolute");
		}

		return helper;

	},

	_adjustOffsetFromHelper: function(obj) {
		if (typeof obj === "string") {
			obj = obj.split(" ");
		}
		if ($.isArray(obj)) {
			obj = {left: +obj[0], top: +obj[1] || 0};
		}
		if ("left" in obj) {
			this.offset.click.left = obj.left + this.margins.left;
		}
		if ("right" in obj) {
			this.offset.click.left = this.helperProportions.width - obj.right + this.margins.left;
		}
		if ("top" in obj) {
			this.offset.click.top = obj.top + this.margins.top;
		}
		if ("bottom" in obj) {
			this.offset.click.top = this.helperProportions.height - obj.bottom + this.margins.top;
		}
	},

	_getParentOffset: function() {

		//Get the offsetParent and cache its position
		var po = this.offsetParent.offset();

		// This is a special case where we need to modify a offset calculated on start, since the following happened:
		// 1. The position of the helper is absolute, so it's position is calculated based on the next positioned parent
		// 2. The actual offset parent is a child of the scroll parent, and the scroll parent isn't the document, which means that
		//    the scroll is included in the initial calculation of the offset of the parent, and never recalculated upon drag
		if(this.cssPosition === "absolute" && this.scrollParent[0] !== document && $.contains(this.scrollParent[0], this.offsetParent[0])) {
			po.left += this.scrollParent.scrollLeft();
			po.top += this.scrollParent.scrollTop();
		}

		//This needs to be actually done for all browsers, since pageX/pageY includes this information
		//Ugly IE fix
		if((this.offsetParent[0] === document.body) ||
			(this.offsetParent[0].tagName && this.offsetParent[0].tagName.toLowerCase() === "html" && $.ui.ie)) {
			po = { top: 0, left: 0 };
		}

		return {
			top: po.top + (parseInt(this.offsetParent.css("borderTopWidth"),10) || 0),
			left: po.left + (parseInt(this.offsetParent.css("borderLeftWidth"),10) || 0)
		};

	},

	_getRelativeOffset: function() {

		if(this.cssPosition === "relative") {
			var p = this.element.position();
			return {
				top: p.top - (parseInt(this.helper.css("top"),10) || 0) + this.scrollParent.scrollTop(),
				left: p.left - (parseInt(this.helper.css("left"),10) || 0) + this.scrollParent.scrollLeft()
			};
		} else {
			return { top: 0, left: 0 };
		}

	},

	_cacheMargins: function() {
		this.margins = {
			left: (parseInt(this.element.css("marginLeft"),10) || 0),
			top: (parseInt(this.element.css("marginTop"),10) || 0),
			right: (parseInt(this.element.css("marginRight"),10) || 0),
			bottom: (parseInt(this.element.css("marginBottom"),10) || 0)
		};
	},

	_cacheHelperProportions: function() {
		this.helperProportions = {
			width: this.helper.outerWidth(),
			height: this.helper.outerHeight()
		};
	},

	_setContainment: function() {

		var over, c, ce,
			o = this.options;

		if ( !o.containment ) {
			this.containment = null;
			return;
		}

		if ( o.containment === "window" ) {
			this.containment = [
				$( window ).scrollLeft() - this.offset.relative.left - this.offset.parent.left,
				$( window ).scrollTop() - this.offset.relative.top - this.offset.parent.top,
				$( window ).scrollLeft() + $( window ).width() - this.helperProportions.width - this.margins.left,
				$( window ).scrollTop() + ( $( window ).height() || document.body.parentNode.scrollHeight ) - this.helperProportions.height - this.margins.top
			];
			return;
		}

		if ( o.containment === "document") {
			this.containment = [
				0,
				0,
				$( document ).width() - this.helperProportions.width - this.margins.left,
				( $( document ).height() || document.body.parentNode.scrollHeight ) - this.helperProportions.height - this.margins.top
			];
			return;
		}

		if ( o.containment.constructor === Array ) {
			this.containment = o.containment;
			return;
		}

		if ( o.containment === "parent" ) {
			o.containment = this.helper[ 0 ].parentNode;
		}

		c = $( o.containment );
		ce = c[ 0 ];

		if( !ce ) {
			return;
		}

		over = c.css( "overflow" ) !== "hidden";

		this.containment = [
			( parseInt( c.css( "borderLeftWidth" ), 10 ) || 0 ) + ( parseInt( c.css( "paddingLeft" ), 10 ) || 0 ),
			( parseInt( c.css( "borderTopWidth" ), 10 ) || 0 ) + ( parseInt( c.css( "paddingTop" ), 10 ) || 0 ) ,
			( over ? Math.max( ce.scrollWidth, ce.offsetWidth ) : ce.offsetWidth ) - ( parseInt( c.css( "borderRightWidth" ), 10 ) || 0 ) - ( parseInt( c.css( "paddingRight" ), 10 ) || 0 ) - this.helperProportions.width - this.margins.left - this.margins.right,
			( over ? Math.max( ce.scrollHeight, ce.offsetHeight ) : ce.offsetHeight ) - ( parseInt( c.css( "borderBottomWidth" ), 10 ) || 0 ) - ( parseInt( c.css( "paddingBottom" ), 10 ) || 0 ) - this.helperProportions.height - this.margins.top  - this.margins.bottom
		];
		this.relative_container = c;
	},

	_convertPositionTo: function(d, pos) {

		if(!pos) {
			pos = this.position;
		}

		var mod = d === "absolute" ? 1 : -1,
			scroll = this.cssPosition === "absolute" && !( this.scrollParent[ 0 ] !== document && $.contains( this.scrollParent[ 0 ], this.offsetParent[ 0 ] ) ) ? this.offsetParent : this.scrollParent;

		//Cache the scroll
		if (!this.offset.scroll) {
			this.offset.scroll = {top : scroll.scrollTop(), left : scroll.scrollLeft()};
		}

		return {
			top: (
				pos.top	+																// The absolute mouse position
				this.offset.relative.top * mod +										// Only for relative positioned nodes: Relative offset from element to offset parent
				this.offset.parent.top * mod -										// The offsetParent's offset without borders (offset + border)
				( ( this.cssPosition === "fixed" ? -this.scrollParent.scrollTop() : this.offset.scroll.top ) * mod )
			),
			left: (
				pos.left +																// The absolute mouse position
				this.offset.relative.left * mod +										// Only for relative positioned nodes: Relative offset from element to offset parent
				this.offset.parent.left * mod	-										// The offsetParent's offset without borders (offset + border)
				( ( this.cssPosition === "fixed" ? -this.scrollParent.scrollLeft() : this.offset.scroll.left ) * mod )
			)
		};

	},

	_generatePosition: function(event) {

		var containment, co, top, left,
			o = this.options,
			scroll = this.cssPosition === "absolute" && !( this.scrollParent[ 0 ] !== document && $.contains( this.scrollParent[ 0 ], this.offsetParent[ 0 ] ) ) ? this.offsetParent : this.scrollParent,
			pageX = event.pageX,
			pageY = event.pageY;

		//Cache the scroll
		if (!this.offset.scroll) {
			this.offset.scroll = {top : scroll.scrollTop(), left : scroll.scrollLeft()};
		}

		/*
		 * - Position constraining -
		 * Constrain the position to a mix of grid, containment.
		 */

		// If we are not dragging yet, we won't check for options
		if ( this.originalPosition ) {
			if ( this.containment ) {
				if ( this.relative_container ){
					co = this.relative_container.offset();
					containment = [
						this.containment[ 0 ] + co.left,
						this.containment[ 1 ] + co.top,
						this.containment[ 2 ] + co.left,
						this.containment[ 3 ] + co.top
					];
				}
				else {
					containment = this.containment;
				}

				if(event.pageX - this.offset.click.left < containment[0]) {
					pageX = containment[0] + this.offset.click.left;
				}
				if(event.pageY - this.offset.click.top < containment[1]) {
					pageY = containment[1] + this.offset.click.top;
				}
				if(event.pageX - this.offset.click.left > containment[2]) {
					pageX = containment[2] + this.offset.click.left;
				}
				if(event.pageY - this.offset.click.top > containment[3]) {
					pageY = containment[3] + this.offset.click.top;
				}
			}

			if(o.grid) {
				//Check for grid elements set to 0 to prevent divide by 0 error causing invalid argument errors in IE (see ticket #6950)
				top = o.grid[1] ? this.originalPageY + Math.round((pageY - this.originalPageY) / o.grid[1]) * o.grid[1] : this.originalPageY;
				pageY = containment ? ((top - this.offset.click.top >= containment[1] || top - this.offset.click.top > containment[3]) ? top : ((top - this.offset.click.top >= containment[1]) ? top - o.grid[1] : top + o.grid[1])) : top;

				left = o.grid[0] ? this.originalPageX + Math.round((pageX - this.originalPageX) / o.grid[0]) * o.grid[0] : this.originalPageX;
				pageX = containment ? ((left - this.offset.click.left >= containment[0] || left - this.offset.click.left > containment[2]) ? left : ((left - this.offset.click.left >= containment[0]) ? left - o.grid[0] : left + o.grid[0])) : left;
			}

		}

		return {
			top: (
				pageY -																	// The absolute mouse position
				this.offset.click.top	-												// Click offset (relative to the element)
				this.offset.relative.top -												// Only for relative positioned nodes: Relative offset from element to offset parent
				this.offset.parent.top +												// The offsetParent's offset without borders (offset + border)
				( this.cssPosition === "fixed" ? -this.scrollParent.scrollTop() : this.offset.scroll.top )
			),
			left: (
				pageX -																	// The absolute mouse position
				this.offset.click.left -												// Click offset (relative to the element)
				this.offset.relative.left -												// Only for relative positioned nodes: Relative offset from element to offset parent
				this.offset.parent.left +												// The offsetParent's offset without borders (offset + border)
				( this.cssPosition === "fixed" ? -this.scrollParent.scrollLeft() : this.offset.scroll.left )
			)
		};

	},

	_clear: function() {
		this.helper.removeClass("ui-draggable-dragging");
		if(this.helper[0] !== this.element[0] && !this.cancelHelperRemoval) {
			this.helper.remove();
		}
		this.helper = null;
		this.cancelHelperRemoval = false;
	},

	// From now on bulk stuff - mainly helpers

	_trigger: function(type, event, ui) {
		ui = ui || this._uiHash();
		$.ui.plugin.call(this, type, [event, ui]);
		//The absolute position has to be recalculated after plugins
		if(type === "drag") {
			this.positionAbs = this._convertPositionTo("absolute");
		}
		return $.Widget.prototype._trigger.call(this, type, event, ui);
	},

	plugins: {},

	_uiHash: function() {
		return {
			helper: this.helper,
			position: this.position,
			originalPosition: this.originalPosition,
			offset: this.positionAbs
		};
	}

});

$.ui.plugin.add("draggable", "connectToSortable", {
	start: function(event, ui) {

		var inst = $(this).data("ui-draggable"), o = inst.options,
			uiSortable = $.extend({}, ui, { item: inst.element });
		inst.sortables = [];
		$(o.connectToSortable).each(function() {
			var sortable = $.data(this, "ui-sortable");
			if (sortable && !sortable.options.disabled) {
				inst.sortables.push({
					instance: sortable,
					shouldRevert: sortable.options.revert
				});
				sortable.refreshPositions();	// Call the sortable's refreshPositions at drag start to refresh the containerCache since the sortable container cache is used in drag and needs to be up to date (this will ensure it's initialised as well as being kept in step with any changes that might have happened on the page).
				sortable._trigger("activate", event, uiSortable);
			}
		});

	},
	stop: function(event, ui) {

		//If we are still over the sortable, we fake the stop event of the sortable, but also remove helper
		var inst = $(this).data("ui-draggable"),
			uiSortable = $.extend({}, ui, { item: inst.element });

		$.each(inst.sortables, function() {
			if(this.instance.isOver) {

				this.instance.isOver = 0;

				inst.cancelHelperRemoval = true; //Don't remove the helper in the draggable instance
				this.instance.cancelHelperRemoval = false; //Remove it in the sortable instance (so sortable plugins like revert still work)

				//The sortable revert is supported, and we have to set a temporary dropped variable on the draggable to support revert: "valid/invalid"
				if(this.shouldRevert) {
					this.instance.options.revert = this.shouldRevert;
				}

				//Trigger the stop of the sortable
				this.instance._mouseStop(event);

				this.instance.options.helper = this.instance.options._helper;

				//If the helper has been the original item, restore properties in the sortable
				if(inst.options.helper === "original") {
					this.instance.currentItem.css({ top: "auto", left: "auto" });
				}

			} else {
				this.instance.cancelHelperRemoval = false; //Remove the helper in the sortable instance
				this.instance._trigger("deactivate", event, uiSortable);
			}

		});

	},
	drag: function(event, ui) {

		var inst = $(this).data("ui-draggable"), that = this;

		$.each(inst.sortables, function() {

			var innermostIntersecting = false,
				thisSortable = this;

			//Copy over some variables to allow calling the sortable's native _intersectsWith
			this.instance.positionAbs = inst.positionAbs;
			this.instance.helperProportions = inst.helperProportions;
			this.instance.offset.click = inst.offset.click;

			if(this.instance._intersectsWith(this.instance.containerCache)) {
				innermostIntersecting = true;
				$.each(inst.sortables, function () {
					this.instance.positionAbs = inst.positionAbs;
					this.instance.helperProportions = inst.helperProportions;
					this.instance.offset.click = inst.offset.click;
					if (this !== thisSortable &&
						this.instance._intersectsWith(this.instance.containerCache) &&
						$.contains(thisSortable.instance.element[0], this.instance.element[0])
					) {
						innermostIntersecting = false;
					}
					return innermostIntersecting;
				});
			}


			if(innermostIntersecting) {
				//If it intersects, we use a little isOver variable and set it once, so our move-in stuff gets fired only once
				if(!this.instance.isOver) {

					this.instance.isOver = 1;
					//Now we fake the start of dragging for the sortable instance,
					//by cloning the list group item, appending it to the sortable and using it as inst.currentItem
					//We can then fire the start event of the sortable with our passed browser event, and our own helper (so it doesn't create a new one)
					this.instance.currentItem = $(that).clone().removeAttr("id").appendTo(this.instance.element).data("ui-sortable-item", true);
					this.instance.options._helper = this.instance.options.helper; //Store helper option to later restore it
					this.instance.options.helper = function() { return ui.helper[0]; };

					event.target = this.instance.currentItem[0];
					this.instance._mouseCapture(event, true);
					this.instance._mouseStart(event, true, true);

					//Because the browser event is way off the new appended portlet, we modify a couple of variables to reflect the changes
					this.instance.offset.click.top = inst.offset.click.top;
					this.instance.offset.click.left = inst.offset.click.left;
					this.instance.offset.parent.left -= inst.offset.parent.left - this.instance.offset.parent.left;
					this.instance.offset.parent.top -= inst.offset.parent.top - this.instance.offset.parent.top;

					inst._trigger("toSortable", event);
					inst.dropped = this.instance.element; //draggable revert needs that
					//hack so receive/update callbacks work (mostly)
					inst.currentItem = inst.element;
					this.instance.fromOutside = inst;

				}

				//Provided we did all the previous steps, we can fire the drag event of the sortable on every draggable drag, when it intersects with the sortable
				if(this.instance.currentItem) {
					this.instance._mouseDrag(event);
				}

			} else {

				//If it doesn't intersect with the sortable, and it intersected before,
				//we fake the drag stop of the sortable, but make sure it doesn't remove the helper by using cancelHelperRemoval
				if(this.instance.isOver) {

					this.instance.isOver = 0;
					this.instance.cancelHelperRemoval = true;

					//Prevent reverting on this forced stop
					this.instance.options.revert = false;

					// The out event needs to be triggered independently
					this.instance._trigger("out", event, this.instance._uiHash(this.instance));

					this.instance._mouseStop(event, true);
					this.instance.options.helper = this.instance.options._helper;

					//Now we remove our currentItem, the list group clone again, and the placeholder, and animate the helper back to it's original size
					this.instance.currentItem.remove();
					if(this.instance.placeholder) {
						this.instance.placeholder.remove();
					}

					inst._trigger("fromSortable", event);
					inst.dropped = false; //draggable revert needs that
				}

			}

		});

	}
});

$.ui.plugin.add("draggable", "cursor", {
	start: function() {
		var t = $("body"), o = $(this).data("ui-draggable").options;
		if (t.css("cursor")) {
			o._cursor = t.css("cursor");
		}
		t.css("cursor", o.cursor);
	},
	stop: function() {
		var o = $(this).data("ui-draggable").options;
		if (o._cursor) {
			$("body").css("cursor", o._cursor);
		}
	}
});

$.ui.plugin.add("draggable", "opacity", {
	start: function(event, ui) {
		var t = $(ui.helper), o = $(this).data("ui-draggable").options;
		if(t.css("opacity")) {
			o._opacity = t.css("opacity");
		}
		t.css("opacity", o.opacity);
	},
	stop: function(event, ui) {
		var o = $(this).data("ui-draggable").options;
		if(o._opacity) {
			$(ui.helper).css("opacity", o._opacity);
		}
	}
});

$.ui.plugin.add("draggable", "scroll", {
	start: function() {
		var i = $(this).data("ui-draggable");
		if(i.scrollParent[0] !== document && i.scrollParent[0].tagName !== "HTML") {
			i.overflowOffset = i.scrollParent.offset();
		}
	},
	drag: function( event ) {

		var i = $(this).data("ui-draggable"), o = i.options, scrolled = false;

		if(i.scrollParent[0] !== document && i.scrollParent[0].tagName !== "HTML") {

			if(!o.axis || o.axis !== "x") {
				if((i.overflowOffset.top + i.scrollParent[0].offsetHeight) - event.pageY < o.scrollSensitivity) {
					i.scrollParent[0].scrollTop = scrolled = i.scrollParent[0].scrollTop + o.scrollSpeed;
				} else if(event.pageY - i.overflowOffset.top < o.scrollSensitivity) {
					i.scrollParent[0].scrollTop = scrolled = i.scrollParent[0].scrollTop - o.scrollSpeed;
				}
			}

			if(!o.axis || o.axis !== "y") {
				if((i.overflowOffset.left + i.scrollParent[0].offsetWidth) - event.pageX < o.scrollSensitivity) {
					i.scrollParent[0].scrollLeft = scrolled = i.scrollParent[0].scrollLeft + o.scrollSpeed;
				} else if(event.pageX - i.overflowOffset.left < o.scrollSensitivity) {
					i.scrollParent[0].scrollLeft = scrolled = i.scrollParent[0].scrollLeft - o.scrollSpeed;
				}
			}

		} else {

			if(!o.axis || o.axis !== "x") {
				if(event.pageY - $(document).scrollTop() < o.scrollSensitivity) {
					scrolled = $(document).scrollTop($(document).scrollTop() - o.scrollSpeed);
				} else if($(window).height() - (event.pageY - $(document).scrollTop()) < o.scrollSensitivity) {
					scrolled = $(document).scrollTop($(document).scrollTop() + o.scrollSpeed);
				}
			}

			if(!o.axis || o.axis !== "y") {
				if(event.pageX - $(document).scrollLeft() < o.scrollSensitivity) {
					scrolled = $(document).scrollLeft($(document).scrollLeft() - o.scrollSpeed);
				} else if($(window).width() - (event.pageX - $(document).scrollLeft()) < o.scrollSensitivity) {
					scrolled = $(document).scrollLeft($(document).scrollLeft() + o.scrollSpeed);
				}
			}

		}

		if(scrolled !== false && $.ui.ddmanager && !o.dropBehaviour) {
			$.ui.ddmanager.prepareOffsets(i, event);
		}

	}
});

$.ui.plugin.add("draggable", "snap", {
	start: function() {

		var i = $(this).data("ui-draggable"),
			o = i.options;

		i.snapElements = [];

		$(o.snap.constructor !== String ? ( o.snap.items || ":data(ui-draggable)" ) : o.snap).each(function() {
			var $t = $(this),
				$o = $t.offset();
			if(this !== i.element[0]) {
				i.snapElements.push({
					item: this,
					width: $t.outerWidth(), height: $t.outerHeight(),
					top: $o.top, left: $o.left
				});
			}
		});

	},
	drag: function(event, ui) {

		var ts, bs, ls, rs, l, r, t, b, i, first,
			inst = $(this).data("ui-draggable"),
			o = inst.options,
			d = o.snapTolerance,
			x1 = ui.offset.left, x2 = x1 + inst.helperProportions.width,
			y1 = ui.offset.top, y2 = y1 + inst.helperProportions.height;

		for (i = inst.snapElements.length - 1; i >= 0; i--){

			l = inst.snapElements[i].left;
			r = l + inst.snapElements[i].width;
			t = inst.snapElements[i].top;
			b = t + inst.snapElements[i].height;

			if ( x2 < l - d || x1 > r + d || y2 < t - d || y1 > b + d || !$.contains( inst.snapElements[ i ].item.ownerDocument, inst.snapElements[ i ].item ) ) {
				if(inst.snapElements[i].snapping) {
					(inst.options.snap.release && inst.options.snap.release.call(inst.element, event, $.extend(inst._uiHash(), { snapItem: inst.snapElements[i].item })));
				}
				inst.snapElements[i].snapping = false;
				continue;
			}

			if(o.snapMode !== "inner") {
				ts = Math.abs(t - y2) <= d;
				bs = Math.abs(b - y1) <= d;
				ls = Math.abs(l - x2) <= d;
				rs = Math.abs(r - x1) <= d;
				if(ts) {
					ui.position.top = inst._convertPositionTo("relative", { top: t - inst.helperProportions.height, left: 0 }).top - inst.margins.top;
				}
				if(bs) {
					ui.position.top = inst._convertPositionTo("relative", { top: b, left: 0 }).top - inst.margins.top;
				}
				if(ls) {
					ui.position.left = inst._convertPositionTo("relative", { top: 0, left: l - inst.helperProportions.width }).left - inst.margins.left;
				}
				if(rs) {
					ui.position.left = inst._convertPositionTo("relative", { top: 0, left: r }).left - inst.margins.left;
				}
			}

			first = (ts || bs || ls || rs);

			if(o.snapMode !== "outer") {
				ts = Math.abs(t - y1) <= d;
				bs = Math.abs(b - y2) <= d;
				ls = Math.abs(l - x1) <= d;
				rs = Math.abs(r - x2) <= d;
				if(ts) {
					ui.position.top = inst._convertPositionTo("relative", { top: t, left: 0 }).top - inst.margins.top;
				}
				if(bs) {
					ui.position.top = inst._convertPositionTo("relative", { top: b - inst.helperProportions.height, left: 0 }).top - inst.margins.top;
				}
				if(ls) {
					ui.position.left = inst._convertPositionTo("relative", { top: 0, left: l }).left - inst.margins.left;
				}
				if(rs) {
					ui.position.left = inst._convertPositionTo("relative", { top: 0, left: r - inst.helperProportions.width }).left - inst.margins.left;
				}
			}

			if(!inst.snapElements[i].snapping && (ts || bs || ls || rs || first)) {
				(inst.options.snap.snap && inst.options.snap.snap.call(inst.element, event, $.extend(inst._uiHash(), { snapItem: inst.snapElements[i].item })));
			}
			inst.snapElements[i].snapping = (ts || bs || ls || rs || first);

		}

	}
});

$.ui.plugin.add("draggable", "stack", {
	start: function() {
		var min,
			o = this.data("ui-draggable").options,
			group = $.makeArray($(o.stack)).sort(function(a,b) {
				return (parseInt($(a).css("zIndex"),10) || 0) - (parseInt($(b).css("zIndex"),10) || 0);
			});

		if (!group.length) { return; }

		min = parseInt($(group[0]).css("zIndex"), 10) || 0;
		$(group).each(function(i) {
			$(this).css("zIndex", min + i);
		});
		this.css("zIndex", (min + group.length));
	}
});

$.ui.plugin.add("draggable", "zIndex", {
	start: function(event, ui) {
		var t = $(ui.helper), o = $(this).data("ui-draggable").options;
		if(t.css("zIndex")) {
			o._zIndex = t.css("zIndex");
		}
		t.css("zIndex", o.zIndex);
	},
	stop: function(event, ui) {
		var o = $(this).data("ui-draggable").options;
		if(o._zIndex) {
			$(ui.helper).css("zIndex", o._zIndex);
		}
	}
});

})($vic);
(function( $, undefined ) {

function isOverAxis( x, reference, size ) {
	return ( x > reference ) && ( x < ( reference + size ) );
}

$.widget("ui.droppable", {
	version: "1.10.4",
	widgetEventPrefix: "drop",
	options: {
		accept: "*",
		activeClass: false,
		addClasses: true,
		greedy: false,
		hoverClass: false,
		scope: "default",
		tolerance: "intersect",

		// callbacks
		activate: null,
		deactivate: null,
		drop: null,
		out: null,
		over: null
	},
	_create: function() {

		var proportions,
			o = this.options,
			accept = o.accept;

		this.isover = false;
		this.isout = true;

		this.accept = $.isFunction(accept) ? accept : function(d) {
			return d.is(accept);
		};

		this.proportions = function( /* valueToWrite */ ) {
			if ( arguments.length ) {
				// Store the droppable's proportions
				proportions = arguments[ 0 ];
			} else {
				// Retrieve or derive the droppable's proportions
				return proportions ?
					proportions :
					proportions = {
						width: this.element[ 0 ].offsetWidth,
						height: this.element[ 0 ].offsetHeight
					};
			}
		};

		// Add the reference and positions to the manager
		$.ui.ddmanager.droppables[o.scope] = $.ui.ddmanager.droppables[o.scope] || [];
		$.ui.ddmanager.droppables[o.scope].push(this);

		(o.addClasses && this.element.addClass("ui-droppable"));

	},

	_destroy: function() {
		var i = 0,
			drop = $.ui.ddmanager.droppables[this.options.scope];

		for ( ; i < drop.length; i++ ) {
			if ( drop[i] === this ) {
				drop.splice(i, 1);
			}
		}

		this.element.removeClass("ui-droppable ui-droppable-disabled");
	},

	_setOption: function(key, value) {

		if(key === "accept") {
			this.accept = $.isFunction(value) ? value : function(d) {
				return d.is(value);
			};
		}
		$.Widget.prototype._setOption.apply(this, arguments);
	},

	_activate: function(event) {
		var draggable = $.ui.ddmanager.current;
		if(this.options.activeClass) {
			this.element.addClass(this.options.activeClass);
		}
		if(draggable){
			this._trigger("activate", event, this.ui(draggable));
		}
	},

	_deactivate: function(event) {
		var draggable = $.ui.ddmanager.current;
		if(this.options.activeClass) {
			this.element.removeClass(this.options.activeClass);
		}
		if(draggable){
			this._trigger("deactivate", event, this.ui(draggable));
		}
	},

	_over: function(event) {

		var draggable = $.ui.ddmanager.current;

		// Bail if draggable and droppable are same element
		if (!draggable || (draggable.currentItem || draggable.element)[0] === this.element[0]) {
			return;
		}

		if (this.accept.call(this.element[0],(draggable.currentItem || draggable.element))) {
			if(this.options.hoverClass) {
				this.element.addClass(this.options.hoverClass);
			}
			this._trigger("over", event, this.ui(draggable));
		}

	},

	_out: function(event) {

		var draggable = $.ui.ddmanager.current;

		// Bail if draggable and droppable are same element
		if (!draggable || (draggable.currentItem || draggable.element)[0] === this.element[0]) {
			return;
		}

		if (this.accept.call(this.element[0],(draggable.currentItem || draggable.element))) {
			if(this.options.hoverClass) {
				this.element.removeClass(this.options.hoverClass);
			}
			this._trigger("out", event, this.ui(draggable));
		}

	},

	_drop: function(event,custom) {

		var draggable = custom || $.ui.ddmanager.current,
			childrenIntersection = false;

		// Bail if draggable and droppable are same element
		if (!draggable || (draggable.currentItem || draggable.element)[0] === this.element[0]) {
			return false;
		}

		this.element.find(":data(ui-droppable)").not(".ui-draggable-dragging").each(function() {
			var inst = $.data(this, "ui-droppable");
			if(
				inst.options.greedy &&
				!inst.options.disabled &&
				inst.options.scope === draggable.options.scope &&
				inst.accept.call(inst.element[0], (draggable.currentItem || draggable.element)) &&
				$.ui.intersect(draggable, $.extend(inst, { offset: inst.element.offset() }), inst.options.tolerance)
			) { childrenIntersection = true; return false; }
		});
		if(childrenIntersection) {
			return false;
		}

		if(this.accept.call(this.element[0],(draggable.currentItem || draggable.element))) {
			if(this.options.activeClass) {
				this.element.removeClass(this.options.activeClass);
			}
			if(this.options.hoverClass) {
				this.element.removeClass(this.options.hoverClass);
			}
			this._trigger("drop", event, this.ui(draggable));
			return this.element;
		}

		return false;

	},

	ui: function(c) {
		return {
			draggable: (c.currentItem || c.element),
			helper: c.helper,
			position: c.position,
			offset: c.positionAbs
		};
	}

});

$.ui.intersect = function(draggable, droppable, toleranceMode) {

	if (!droppable.offset) {
		return false;
	}

	var draggableLeft, draggableTop,
		x1 = (draggable.positionAbs || draggable.position.absolute).left,
		y1 = (draggable.positionAbs || draggable.position.absolute).top,
		x2 = x1 + draggable.helperProportions.width,
		y2 = y1 + draggable.helperProportions.height,
		l = droppable.offset.left,
		t = droppable.offset.top,
		r = l + droppable.proportions().width,
		b = t + droppable.proportions().height;

	switch (toleranceMode) {
		case "fit":
			return (l <= x1 && x2 <= r && t <= y1 && y2 <= b);
		case "intersect":
			return (l < x1 + (draggable.helperProportions.width / 2) && // Right Half
				x2 - (draggable.helperProportions.width / 2) < r && // Left Half
				t < y1 + (draggable.helperProportions.height / 2) && // Bottom Half
				y2 - (draggable.helperProportions.height / 2) < b ); // Top Half
		case "pointer":
			draggableLeft = ((draggable.positionAbs || draggable.position.absolute).left + (draggable.clickOffset || draggable.offset.click).left);
			draggableTop = ((draggable.positionAbs || draggable.position.absolute).top + (draggable.clickOffset || draggable.offset.click).top);
			return isOverAxis( draggableTop, t, droppable.proportions().height ) && isOverAxis( draggableLeft, l, droppable.proportions().width );
		case "touch":
			return (
				(y1 >= t && y1 <= b) ||	// Top edge touching
				(y2 >= t && y2 <= b) ||	// Bottom edge touching
				(y1 < t && y2 > b)		// Surrounded vertically
			) && (
				(x1 >= l && x1 <= r) ||	// Left edge touching
				(x2 >= l && x2 <= r) ||	// Right edge touching
				(x1 < l && x2 > r)		// Surrounded horizontally
			);
		default:
			return false;
		}

};

/*
	This manager tracks offsets of draggables and droppables
*/
$.ui.ddmanager = {
	current: null,
	droppables: { "default": [] },
	prepareOffsets: function(t, event) {

		var i, j,
			m = $.ui.ddmanager.droppables[t.options.scope] || [],
			type = event ? event.type : null, // workaround for #2317
			list = (t.currentItem || t.element).find(":data(ui-droppable)").addBack();

		droppablesLoop: for (i = 0; i < m.length; i++) {

			//No disabled and non-accepted
			if(m[i].options.disabled || (t && !m[i].accept.call(m[i].element[0],(t.currentItem || t.element)))) {
				continue;
			}

			// Filter out elements in the current dragged item
			for (j=0; j < list.length; j++) {
				if(list[j] === m[i].element[0]) {
					m[i].proportions().height = 0;
					continue droppablesLoop;
				}
			}

			m[i].visible = m[i].element.css("display") !== "none";
			if(!m[i].visible) {
				continue;
			}

			//Activate the droppable if used directly from draggables
			if(type === "mousedown") {
				m[i]._activate.call(m[i], event);
			}

			m[ i ].offset = m[ i ].element.offset();
			m[ i ].proportions({ width: m[ i ].element[ 0 ].offsetWidth, height: m[ i ].element[ 0 ].offsetHeight });

		}

	},
	drop: function(draggable, event) {

		var dropped = false;
		// Create a copy of the droppables in case the list changes during the drop (#9116)
		$.each(($.ui.ddmanager.droppables[draggable.options.scope] || []).slice(), function() {

			if(!this.options) {
				return;
			}
			if (!this.options.disabled && this.visible && $.ui.intersect(draggable, this, this.options.tolerance)) {
				dropped = this._drop.call(this, event) || dropped;
			}

			if (!this.options.disabled && this.visible && this.accept.call(this.element[0],(draggable.currentItem || draggable.element))) {
				this.isout = true;
				this.isover = false;
				this._deactivate.call(this, event);
			}

		});
		return dropped;

	},
	dragStart: function( draggable, event ) {
		//Listen for scrolling so that if the dragging causes scrolling the position of the droppables can be recalculated (see #5003)
		draggable.element.parentsUntil( "body" ).bind( "scroll.droppable", function() {
			if( !draggable.options.refreshPositions ) {
				$.ui.ddmanager.prepareOffsets( draggable, event );
			}
		});
	},
	drag: function(draggable, event) {

		//If you have a highly dynamic page, you might try this option. It renders positions every time you move the mouse.
		if(draggable.options.refreshPositions) {
			$.ui.ddmanager.prepareOffsets(draggable, event);
		}

		//Run through all droppables and check their positions based on specific tolerance options
		$.each($.ui.ddmanager.droppables[draggable.options.scope] || [], function() {

			if(this.options.disabled || this.greedyChild || !this.visible) {
				return;
			}

			var parentInstance, scope, parent,
				intersects = $.ui.intersect(draggable, this, this.options.tolerance),
				c = !intersects && this.isover ? "isout" : (intersects && !this.isover ? "isover" : null);
			if(!c) {
				return;
			}

			if (this.options.greedy) {
				// find droppable parents with same scope
				scope = this.options.scope;
				parent = this.element.parents(":data(ui-droppable)").filter(function () {
					return $.data(this, "ui-droppable").options.scope === scope;
				});

				if (parent.length) {
					parentInstance = $.data(parent[0], "ui-droppable");
					parentInstance.greedyChild = (c === "isover");
				}
			}

			// we just moved into a greedy child
			if (parentInstance && c === "isover") {
				parentInstance.isover = false;
				parentInstance.isout = true;
				parentInstance._out.call(parentInstance, event);
			}

			this[c] = true;
			this[c === "isout" ? "isover" : "isout"] = false;
			this[c === "isover" ? "_over" : "_out"].call(this, event);

			// we just moved out of a greedy child
			if (parentInstance && c === "isout") {
				parentInstance.isout = false;
				parentInstance.isover = true;
				parentInstance._over.call(parentInstance, event);
			}
		});

	},
	dragStop: function( draggable, event ) {
		draggable.element.parentsUntil( "body" ).unbind( "scroll.droppable" );
		//Call prepareOffsets one final time since IE does not fire return scroll events when overflow was caused by drag (see #5003)
		if( !draggable.options.refreshPositions ) {
			$.ui.ddmanager.prepareOffsets( draggable, event );
		}
	}
};

})($vic);
(function($, undefined) {

var dataSpace = "ui-effects-";

$.effects = {
	effect: {}
};

/*!
 * jQuery Color Animations v2.1.2
 * https://github.com/jquery/jquery-color
 *
 * Copyright 2013 jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * Date: Wed Jan 16 08:47:09 2013 -0600
 */
(function( jQuery, undefined ) {

	var stepHooks = "backgroundColor borderBottomColor borderLeftColor borderRightColor borderTopColor color columnRuleColor outlineColor textDecorationColor textEmphasisColor",

	// plusequals test for += 100 -= 100
	rplusequals = /^([\-+])=\s*(\d+\.?\d*)/,
	// a set of RE's that can match strings and generate color tuples.
	stringParsers = [{
			re: /rgba?\(\s*(\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(\d{1,3})\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/,
			parse: function( execResult ) {
				return [
					execResult[ 1 ],
					execResult[ 2 ],
					execResult[ 3 ],
					execResult[ 4 ]
				];
			}
		}, {
			re: /rgba?\(\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/,
			parse: function( execResult ) {
				return [
					execResult[ 1 ] * 2.55,
					execResult[ 2 ] * 2.55,
					execResult[ 3 ] * 2.55,
					execResult[ 4 ]
				];
			}
		}, {
			// this regex ignores A-F because it's compared against an already lowercased string
			re: /#([a-f0-9]{2})([a-f0-9]{2})([a-f0-9]{2})/,
			parse: function( execResult ) {
				return [
					parseInt( execResult[ 1 ], 16 ),
					parseInt( execResult[ 2 ], 16 ),
					parseInt( execResult[ 3 ], 16 )
				];
			}
		}, {
			// this regex ignores A-F because it's compared against an already lowercased string
			re: /#([a-f0-9])([a-f0-9])([a-f0-9])/,
			parse: function( execResult ) {
				return [
					parseInt( execResult[ 1 ] + execResult[ 1 ], 16 ),
					parseInt( execResult[ 2 ] + execResult[ 2 ], 16 ),
					parseInt( execResult[ 3 ] + execResult[ 3 ], 16 )
				];
			}
		}, {
			re: /hsla?\(\s*(\d+(?:\.\d+)?)\s*,\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/,
			space: "hsla",
			parse: function( execResult ) {
				return [
					execResult[ 1 ],
					execResult[ 2 ] / 100,
					execResult[ 3 ] / 100,
					execResult[ 4 ]
				];
			}
		}],

	// jQuery.Color( )
	color = jQuery.Color = function( color, green, blue, alpha ) {
		return new jQuery.Color.fn.parse( color, green, blue, alpha );
	},
	spaces = {
		rgba: {
			props: {
				red: {
					idx: 0,
					type: "byte"
				},
				green: {
					idx: 1,
					type: "byte"
				},
				blue: {
					idx: 2,
					type: "byte"
				}
			}
		},

		hsla: {
			props: {
				hue: {
					idx: 0,
					type: "degrees"
				},
				saturation: {
					idx: 1,
					type: "percent"
				},
				lightness: {
					idx: 2,
					type: "percent"
				}
			}
		}
	},
	propTypes = {
		"byte": {
			floor: true,
			max: 255
		},
		"percent": {
			max: 1
		},
		"degrees": {
			mod: 360,
			floor: true
		}
	},
	support = color.support = {},

	// element for support tests
	supportElem = jQuery( "<p>" )[ 0 ],

	// colors = jQuery.Color.names
	colors,

	// local aliases of functions called often
	each = jQuery.each;

// determine rgba support immediately
supportElem.style.cssText = "background-color:rgba(1,1,1,.5)";
support.rgba = supportElem.style.backgroundColor.indexOf( "rgba" ) > -1;

// define cache name and alpha properties
// for rgba and hsla spaces
each( spaces, function( spaceName, space ) {
	space.cache = "_" + spaceName;
	space.props.alpha = {
		idx: 3,
		type: "percent",
		def: 1
	};
});

function clamp( value, prop, allowEmpty ) {
	var type = propTypes[ prop.type ] || {};

	if ( value == null ) {
		return (allowEmpty || !prop.def) ? null : prop.def;
	}

	// ~~ is an short way of doing floor for positive numbers
	value = type.floor ? ~~value : parseFloat( value );

	// IE will pass in empty strings as value for alpha,
	// which will hit this case
	if ( isNaN( value ) ) {
		return prop.def;
	}

	if ( type.mod ) {
		// we add mod before modding to make sure that negatives values
		// get converted properly: -10 -> 350
		return (value + type.mod) % type.mod;
	}

	// for now all property types without mod have min and max
	return 0 > value ? 0 : type.max < value ? type.max : value;
}

function stringParse( string ) {
	var inst = color(),
		rgba = inst._rgba = [];

	string = string.toLowerCase();

	each( stringParsers, function( i, parser ) {
		var parsed,
			match = parser.re.exec( string ),
			values = match && parser.parse( match ),
			spaceName = parser.space || "rgba";

		if ( values ) {
			parsed = inst[ spaceName ]( values );

			// if this was an rgba parse the assignment might happen twice
			// oh well....
			inst[ spaces[ spaceName ].cache ] = parsed[ spaces[ spaceName ].cache ];
			rgba = inst._rgba = parsed._rgba;

			// exit each( stringParsers ) here because we matched
			return false;
		}
	});

	// Found a stringParser that handled it
	if ( rgba.length ) {

		// if this came from a parsed string, force "transparent" when alpha is 0
		// chrome, (and maybe others) return "transparent" as rgba(0,0,0,0)
		if ( rgba.join() === "0,0,0,0" ) {
			jQuery.extend( rgba, colors.transparent );
		}
		return inst;
	}

	// named colors
	return colors[ string ];
}

color.fn = jQuery.extend( color.prototype, {
	parse: function( red, green, blue, alpha ) {
		if ( red === undefined ) {
			this._rgba = [ null, null, null, null ];
			return this;
		}
		if ( red.jquery || red.nodeType ) {
			red = jQuery( red ).css( green );
			green = undefined;
		}

		var inst = this,
			type = jQuery.type( red ),
			rgba = this._rgba = [];

		// more than 1 argument specified - assume ( red, green, blue, alpha )
		if ( green !== undefined ) {
			red = [ red, green, blue, alpha ];
			type = "array";
		}

		if ( type === "string" ) {
			return this.parse( stringParse( red ) || colors._default );
		}

		if ( type === "array" ) {
			each( spaces.rgba.props, function( key, prop ) {
				rgba[ prop.idx ] = clamp( red[ prop.idx ], prop );
			});
			return this;
		}

		if ( type === "object" ) {
			if ( red instanceof color ) {
				each( spaces, function( spaceName, space ) {
					if ( red[ space.cache ] ) {
						inst[ space.cache ] = red[ space.cache ].slice();
					}
				});
			} else {
				each( spaces, function( spaceName, space ) {
					var cache = space.cache;
					each( space.props, function( key, prop ) {

						// if the cache doesn't exist, and we know how to convert
						if ( !inst[ cache ] && space.to ) {

							// if the value was null, we don't need to copy it
							// if the key was alpha, we don't need to copy it either
							if ( key === "alpha" || red[ key ] == null ) {
								return;
							}
							inst[ cache ] = space.to( inst._rgba );
						}

						// this is the only case where we allow nulls for ALL properties.
						// call clamp with alwaysAllowEmpty
						inst[ cache ][ prop.idx ] = clamp( red[ key ], prop, true );
					});

					// everything defined but alpha?
					if ( inst[ cache ] && jQuery.inArray( null, inst[ cache ].slice( 0, 3 ) ) < 0 ) {
						// use the default of 1
						inst[ cache ][ 3 ] = 1;
						if ( space.from ) {
							inst._rgba = space.from( inst[ cache ] );
						}
					}
				});
			}
			return this;
		}
	},
	is: function( compare ) {
		var is = color( compare ),
			same = true,
			inst = this;

		each( spaces, function( _, space ) {
			var localCache,
				isCache = is[ space.cache ];
			if (isCache) {
				localCache = inst[ space.cache ] || space.to && space.to( inst._rgba ) || [];
				each( space.props, function( _, prop ) {
					if ( isCache[ prop.idx ] != null ) {
						same = ( isCache[ prop.idx ] === localCache[ prop.idx ] );
						return same;
					}
				});
			}
			return same;
		});
		return same;
	},
	_space: function() {
		var used = [],
			inst = this;
		each( spaces, function( spaceName, space ) {
			if ( inst[ space.cache ] ) {
				used.push( spaceName );
			}
		});
		return used.pop();
	},
	transition: function( other, distance ) {
		var end = color( other ),
			spaceName = end._space(),
			space = spaces[ spaceName ],
			startColor = this.alpha() === 0 ? color( "transparent" ) : this,
			start = startColor[ space.cache ] || space.to( startColor._rgba ),
			result = start.slice();

		end = end[ space.cache ];
		each( space.props, function( key, prop ) {
			var index = prop.idx,
				startValue = start[ index ],
				endValue = end[ index ],
				type = propTypes[ prop.type ] || {};

			// if null, don't override start value
			if ( endValue === null ) {
				return;
			}
			// if null - use end
			if ( startValue === null ) {
				result[ index ] = endValue;
			} else {
				if ( type.mod ) {
					if ( endValue - startValue > type.mod / 2 ) {
						startValue += type.mod;
					} else if ( startValue - endValue > type.mod / 2 ) {
						startValue -= type.mod;
					}
				}
				result[ index ] = clamp( ( endValue - startValue ) * distance + startValue, prop );
			}
		});
		return this[ spaceName ]( result );
	},
	blend: function( opaque ) {
		// if we are already opaque - return ourself
		if ( this._rgba[ 3 ] === 1 ) {
			return this;
		}

		var rgb = this._rgba.slice(),
			a = rgb.pop(),
			blend = color( opaque )._rgba;

		return color( jQuery.map( rgb, function( v, i ) {
			return ( 1 - a ) * blend[ i ] + a * v;
		}));
	},
	toRgbaString: function() {
		var prefix = "rgba(",
			rgba = jQuery.map( this._rgba, function( v, i ) {
				return v == null ? ( i > 2 ? 1 : 0 ) : v;
			});

		if ( rgba[ 3 ] === 1 ) {
			rgba.pop();
			prefix = "rgb(";
		}

		return prefix + rgba.join() + ")";
	},
	toHslaString: function() {
		var prefix = "hsla(",
			hsla = jQuery.map( this.hsla(), function( v, i ) {
				if ( v == null ) {
					v = i > 2 ? 1 : 0;
				}

				// catch 1 and 2
				if ( i && i < 3 ) {
					v = Math.round( v * 100 ) + "%";
				}
				return v;
			});

		if ( hsla[ 3 ] === 1 ) {
			hsla.pop();
			prefix = "hsl(";
		}
		return prefix + hsla.join() + ")";
	},
	toHexString: function( includeAlpha ) {
		var rgba = this._rgba.slice(),
			alpha = rgba.pop();

		if ( includeAlpha ) {
			rgba.push( ~~( alpha * 255 ) );
		}

		return "#" + jQuery.map( rgba, function( v ) {

			// default to 0 when nulls exist
			v = ( v || 0 ).toString( 16 );
			return v.length === 1 ? "0" + v : v;
		}).join("");
	},
	toString: function() {
		return this._rgba[ 3 ] === 0 ? "transparent" : this.toRgbaString();
	}
});
color.fn.parse.prototype = color.fn;

// hsla conversions adapted from:
// https://code.google.com/p/maashaack/source/browse/packages/graphics/trunk/src/graphics/colors/HUE2RGB.as?r=5021

function hue2rgb( p, q, h ) {
	h = ( h + 1 ) % 1;
	if ( h * 6 < 1 ) {
		return p + (q - p) * h * 6;
	}
	if ( h * 2 < 1) {
		return q;
	}
	if ( h * 3 < 2 ) {
		return p + (q - p) * ((2/3) - h) * 6;
	}
	return p;
}

spaces.hsla.to = function ( rgba ) {
	if ( rgba[ 0 ] == null || rgba[ 1 ] == null || rgba[ 2 ] == null ) {
		return [ null, null, null, rgba[ 3 ] ];
	}
	var r = rgba[ 0 ] / 255,
		g = rgba[ 1 ] / 255,
		b = rgba[ 2 ] / 255,
		a = rgba[ 3 ],
		max = Math.max( r, g, b ),
		min = Math.min( r, g, b ),
		diff = max - min,
		add = max + min,
		l = add * 0.5,
		h, s;

	if ( min === max ) {
		h = 0;
	} else if ( r === max ) {
		h = ( 60 * ( g - b ) / diff ) + 360;
	} else if ( g === max ) {
		h = ( 60 * ( b - r ) / diff ) + 120;
	} else {
		h = ( 60 * ( r - g ) / diff ) + 240;
	}

	// chroma (diff) == 0 means greyscale which, by definition, saturation = 0%
	// otherwise, saturation is based on the ratio of chroma (diff) to lightness (add)
	if ( diff === 0 ) {
		s = 0;
	} else if ( l <= 0.5 ) {
		s = diff / add;
	} else {
		s = diff / ( 2 - add );
	}
	return [ Math.round(h) % 360, s, l, a == null ? 1 : a ];
};

spaces.hsla.from = function ( hsla ) {
	if ( hsla[ 0 ] == null || hsla[ 1 ] == null || hsla[ 2 ] == null ) {
		return [ null, null, null, hsla[ 3 ] ];
	}
	var h = hsla[ 0 ] / 360,
		s = hsla[ 1 ],
		l = hsla[ 2 ],
		a = hsla[ 3 ],
		q = l <= 0.5 ? l * ( 1 + s ) : l + s - l * s,
		p = 2 * l - q;

	return [
		Math.round( hue2rgb( p, q, h + ( 1 / 3 ) ) * 255 ),
		Math.round( hue2rgb( p, q, h ) * 255 ),
		Math.round( hue2rgb( p, q, h - ( 1 / 3 ) ) * 255 ),
		a
	];
};


each( spaces, function( spaceName, space ) {
	var props = space.props,
		cache = space.cache,
		to = space.to,
		from = space.from;

	// makes rgba() and hsla()
	color.fn[ spaceName ] = function( value ) {

		// generate a cache for this space if it doesn't exist
		if ( to && !this[ cache ] ) {
			this[ cache ] = to( this._rgba );
		}
		if ( value === undefined ) {
			return this[ cache ].slice();
		}

		var ret,
			type = jQuery.type( value ),
			arr = ( type === "array" || type === "object" ) ? value : arguments,
			local = this[ cache ].slice();

		each( props, function( key, prop ) {
			var val = arr[ type === "object" ? key : prop.idx ];
			if ( val == null ) {
				val = local[ prop.idx ];
			}
			local[ prop.idx ] = clamp( val, prop );
		});

		if ( from ) {
			ret = color( from( local ) );
			ret[ cache ] = local;
			return ret;
		} else {
			return color( local );
		}
	};

	// makes red() green() blue() alpha() hue() saturation() lightness()
	each( props, function( key, prop ) {
		// alpha is included in more than one space
		if ( color.fn[ key ] ) {
			return;
		}
		color.fn[ key ] = function( value ) {
			var vtype = jQuery.type( value ),
				fn = ( key === "alpha" ? ( this._hsla ? "hsla" : "rgba" ) : spaceName ),
				local = this[ fn ](),
				cur = local[ prop.idx ],
				match;

			if ( vtype === "undefined" ) {
				return cur;
			}

			if ( vtype === "function" ) {
				value = value.call( this, cur );
				vtype = jQuery.type( value );
			}
			if ( value == null && prop.empty ) {
				return this;
			}
			if ( vtype === "string" ) {
				match = rplusequals.exec( value );
				if ( match ) {
					value = cur + parseFloat( match[ 2 ] ) * ( match[ 1 ] === "+" ? 1 : -1 );
				}
			}
			local[ prop.idx ] = value;
			return this[ fn ]( local );
		};
	});
});

// add cssHook and .fx.step function for each named hook.
// accept a space separated string of properties
color.hook = function( hook ) {
	var hooks = hook.split( " " );
	each( hooks, function( i, hook ) {
		jQuery.cssHooks[ hook ] = {
			set: function( elem, value ) {
				var parsed, curElem,
					backgroundColor = "";

				if ( value !== "transparent" && ( jQuery.type( value ) !== "string" || ( parsed = stringParse( value ) ) ) ) {
					value = color( parsed || value );
					if ( !support.rgba && value._rgba[ 3 ] !== 1 ) {
						curElem = hook === "backgroundColor" ? elem.parentNode : elem;
						while (
							(backgroundColor === "" || backgroundColor === "transparent") &&
							curElem && curElem.style
						) {
							try {
								backgroundColor = jQuery.css( curElem, "backgroundColor" );
								curElem = curElem.parentNode;
							} catch ( e ) {
							}
						}

						value = value.blend( backgroundColor && backgroundColor !== "transparent" ?
							backgroundColor :
							"_default" );
					}

					value = value.toRgbaString();
				}
				try {
					elem.style[ hook ] = value;
				} catch( e ) {
					// wrapped to prevent IE from throwing errors on "invalid" values like 'auto' or 'inherit'
				}
			}
		};
		jQuery.fx.step[ hook ] = function( fx ) {
			if ( !fx.colorInit ) {
				fx.start = color( fx.elem, hook );
				fx.end = color( fx.end );
				fx.colorInit = true;
			}
			jQuery.cssHooks[ hook ].set( fx.elem, fx.start.transition( fx.end, fx.pos ) );
		};
	});

};

color.hook( stepHooks );

jQuery.cssHooks.borderColor = {
	expand: function( value ) {
		var expanded = {};

		each( [ "Top", "Right", "Bottom", "Left" ], function( i, part ) {
			expanded[ "border" + part + "Color" ] = value;
		});
		return expanded;
	}
};

// Basic color names only.
// Usage of any of the other color names requires adding yourself or including
// jquery.color.svg-names.js.
colors = jQuery.Color.names = {
	// 4.1. Basic color keywords
	aqua: "#00ffff",
	black: "#000000",
	blue: "#0000ff",
	fuchsia: "#ff00ff",
	gray: "#808080",
	green: "#008000",
	lime: "#00ff00",
	maroon: "#800000",
	navy: "#000080",
	olive: "#808000",
	purple: "#800080",
	red: "#ff0000",
	silver: "#c0c0c0",
	teal: "#008080",
	white: "#ffffff",
	yellow: "#ffff00",

	// 4.2.3. "transparent" color keyword
	transparent: [ null, null, null, 0 ],

	_default: "#ffffff"
};

})( $vic );


/******************************************************************************/
/****************************** CLASS ANIMATIONS ******************************/
/******************************************************************************/
(function() {

var classAnimationActions = [ "add", "remove", "toggle" ],
	shorthandStyles = {
		border: 1,
		borderBottom: 1,
		borderColor: 1,
		borderLeft: 1,
		borderRight: 1,
		borderTop: 1,
		borderWidth: 1,
		margin: 1,
		padding: 1
	};

$.each([ "borderLeftStyle", "borderRightStyle", "borderBottomStyle", "borderTopStyle" ], function( _, prop ) {
	$.fx.step[ prop ] = function( fx ) {
		if ( fx.end !== "none" && !fx.setAttr || fx.pos === 1 && !fx.setAttr ) {
			jQuery.style( fx.elem, prop, fx.end );
			fx.setAttr = true;
		}
	};
});

function getElementStyles( elem ) {
	var key, len,
		style = elem.ownerDocument.defaultView ?
			elem.ownerDocument.defaultView.getComputedStyle( elem, null ) :
			elem.currentStyle,
		styles = {};

	if ( style && style.length && style[ 0 ] && style[ style[ 0 ] ] ) {
		len = style.length;
		while ( len-- ) {
			key = style[ len ];
			if ( typeof style[ key ] === "string" ) {
				styles[ $.camelCase( key ) ] = style[ key ];
			}
		}
	// support: Opera, IE <9
	} else {
		for ( key in style ) {
			if ( typeof style[ key ] === "string" ) {
				styles[ key ] = style[ key ];
			}
		}
	}

	return styles;
}


function styleDifference( oldStyle, newStyle ) {
	var diff = {},
		name, value;

	for ( name in newStyle ) {
		value = newStyle[ name ];
		if ( oldStyle[ name ] !== value ) {
			if ( !shorthandStyles[ name ] ) {
				if ( $.fx.step[ name ] || !isNaN( parseFloat( value ) ) ) {
					diff[ name ] = value;
				}
			}
		}
	}

	return diff;
}

// support: jQuery <1.8
if ( !$.fn.addBack ) {
	$.fn.addBack = function( selector ) {
		return this.add( selector == null ?
			this.prevObject : this.prevObject.filter( selector )
		);
	};
}

$.effects.animateClass = function( value, duration, easing, callback ) {
	var o = $.speed( duration, easing, callback );

	return this.queue( function() {
		var animated = $( this ),
			baseClass = animated.attr( "class" ) || "",
			applyClassChange,
			allAnimations = o.children ? animated.find( "*" ).addBack() : animated;

		// map the animated objects to store the original styles.
		allAnimations = allAnimations.map(function() {
			var el = $( this );
			return {
				el: el,
				start: getElementStyles( this )
			};
		});

		// apply class change
		applyClassChange = function() {
			$.each( classAnimationActions, function(i, action) {
				if ( value[ action ] ) {
					animated[ action + "Class" ]( value[ action ] );
				}
			});
		};
		applyClassChange();

		// map all animated objects again - calculate new styles and diff
		allAnimations = allAnimations.map(function() {
			this.end = getElementStyles( this.el[ 0 ] );
			this.diff = styleDifference( this.start, this.end );
			return this;
		});

		// apply original class
		animated.attr( "class", baseClass );

		// map all animated objects again - this time collecting a promise
		allAnimations = allAnimations.map(function() {
			var styleInfo = this,
				dfd = $.Deferred(),
				opts = $.extend({}, o, {
					queue: false,
					complete: function() {
						dfd.resolve( styleInfo );
					}
				});

			this.el.animate( this.diff, opts );
			return dfd.promise();
		});

		// once all animations have completed:
		$.when.apply( $, allAnimations.get() ).done(function() {

			// set the final class
			applyClassChange();

			// for each animated element,
			// clear all css properties that were animated
			$.each( arguments, function() {
				var el = this.el;
				$.each( this.diff, function(key) {
					el.css( key, "" );
				});
			});

			// this is guarnteed to be there if you use jQuery.speed()
			// it also handles dequeuing the next anim...
			o.complete.call( animated[ 0 ] );
		});
	});
};

$.fn.extend({
	addClass: (function( orig ) {
		return function( classNames, speed, easing, callback ) {
			return speed ?
				$.effects.animateClass.call( this,
					{ add: classNames }, speed, easing, callback ) :
				orig.apply( this, arguments );
		};
	})( $.fn.addClass ),

	removeClass: (function( orig ) {
		return function( classNames, speed, easing, callback ) {
			return arguments.length > 1 ?
				$.effects.animateClass.call( this,
					{ remove: classNames }, speed, easing, callback ) :
				orig.apply( this, arguments );
		};
	})( $.fn.removeClass ),

	toggleClass: (function( orig ) {
		return function( classNames, force, speed, easing, callback ) {
			if ( typeof force === "boolean" || force === undefined ) {
				if ( !speed ) {
					// without speed parameter
					return orig.apply( this, arguments );
				} else {
					return $.effects.animateClass.call( this,
						(force ? { add: classNames } : { remove: classNames }),
						speed, easing, callback );
				}
			} else {
				// without force parameter
				return $.effects.animateClass.call( this,
					{ toggle: classNames }, force, speed, easing );
			}
		};
	})( $.fn.toggleClass ),

	switchClass: function( remove, add, speed, easing, callback) {
		return $.effects.animateClass.call( this, {
			add: add,
			remove: remove
		}, speed, easing, callback );
	}
});

})();

/******************************************************************************/
/*********************************** EFFECTS **********************************/
/******************************************************************************/

(function() {

$.extend( $.effects, {
	version: "1.10.4",

	// Saves a set of properties in a data storage
	save: function( element, set ) {
		for( var i=0; i < set.length; i++ ) {
			if ( set[ i ] !== null ) {
				element.data( dataSpace + set[ i ], element[ 0 ].style[ set[ i ] ] );
			}
		}
	},

	// Restores a set of previously saved properties from a data storage
	restore: function( element, set ) {
		var val, i;
		for( i=0; i < set.length; i++ ) {
			if ( set[ i ] !== null ) {
				val = element.data( dataSpace + set[ i ] );
				// support: jQuery 1.6.2
				// http://bugs.jquery.com/ticket/9917
				// jQuery 1.6.2 incorrectly returns undefined for any falsy value.
				// We can't differentiate between "" and 0 here, so we just assume
				// empty string since it's likely to be a more common value...
				if ( val === undefined ) {
					val = "";
				}
				element.css( set[ i ], val );
			}
		}
	},

	setMode: function( el, mode ) {
		if (mode === "toggle") {
			mode = el.is( ":hidden" ) ? "show" : "hide";
		}
		return mode;
	},

	// Translates a [top,left] array into a baseline value
	// this should be a little more flexible in the future to handle a string & hash
	getBaseline: function( origin, original ) {
		var y, x;
		switch ( origin[ 0 ] ) {
			case "top": y = 0; break;
			case "middle": y = 0.5; break;
			case "bottom": y = 1; break;
			default: y = origin[ 0 ] / original.height;
		}
		switch ( origin[ 1 ] ) {
			case "left": x = 0; break;
			case "center": x = 0.5; break;
			case "right": x = 1; break;
			default: x = origin[ 1 ] / original.width;
		}
		return {
			x: x,
			y: y
		};
	},

	// Wraps the element around a wrapper that copies position properties
	createWrapper: function( element ) {

		// if the element is already wrapped, return it
		if ( element.parent().is( ".ui-effects-wrapper" )) {
			return element.parent();
		}

		// wrap the element
		var props = {
				width: element.outerWidth(true),
				height: element.outerHeight(true),
				"float": element.css( "float" )
			},
			wrapper = $( "<div></div>" )
				.addClass( "ui-effects-wrapper" )
				.css({
					fontSize: "100%",
					background: "transparent",
					border: "none",
					margin: 0,
					padding: 0
				}),
			// Store the size in case width/height are defined in % - Fixes #5245
			size = {
				width: element.width(),
				height: element.height()
			},
			active = document.activeElement;

		// support: Firefox
		// Firefox incorrectly exposes anonymous content
		// https://bugzilla.mozilla.org/show_bug.cgi?id=561664
		try {
			active.id;
		} catch( e ) {
			active = document.body;
		}

		element.wrap( wrapper );

		// Fixes #7595 - Elements lose focus when wrapped.
		if ( element[ 0 ] === active || $.contains( element[ 0 ], active ) ) {
			$( active ).focus();
		}

		wrapper = element.parent(); //Hotfix for jQuery 1.4 since some change in wrap() seems to actually lose the reference to the wrapped element

		// transfer positioning properties to the wrapper
		if ( element.css( "position" ) === "static" ) {
			wrapper.css({ position: "relative" });
			element.css({ position: "relative" });
		} else {
			$.extend( props, {
				position: element.css( "position" ),
				zIndex: element.css( "z-index" )
			});
			$.each([ "top", "left", "bottom", "right" ], function(i, pos) {
				props[ pos ] = element.css( pos );
				if ( isNaN( parseInt( props[ pos ], 10 ) ) ) {
					props[ pos ] = "auto";
				}
			});
			element.css({
				position: "relative",
				top: 0,
				left: 0,
				right: "auto",
				bottom: "auto"
			});
		}
		element.css(size);

		return wrapper.css( props ).show();
	},

	removeWrapper: function( element ) {
		var active = document.activeElement;

		if ( element.parent().is( ".ui-effects-wrapper" ) ) {
			element.parent().replaceWith( element );

			// Fixes #7595 - Elements lose focus when wrapped.
			if ( element[ 0 ] === active || $.contains( element[ 0 ], active ) ) {
				$( active ).focus();
			}
		}


		return element;
	},

	setTransition: function( element, list, factor, value ) {
		value = value || {};
		$.each( list, function( i, x ) {
			var unit = element.cssUnit( x );
			if ( unit[ 0 ] > 0 ) {
				value[ x ] = unit[ 0 ] * factor + unit[ 1 ];
			}
		});
		return value;
	}
});

// return an effect options object for the given parameters:
function _normalizeArguments( effect, options, speed, callback ) {

	// allow passing all options as the first parameter
	if ( $.isPlainObject( effect ) ) {
		options = effect;
		effect = effect.effect;
	}

	// convert to an object
	effect = { effect: effect };

	// catch (effect, null, ...)
	if ( options == null ) {
		options = {};
	}

	// catch (effect, callback)
	if ( $.isFunction( options ) ) {
		callback = options;
		speed = null;
		options = {};
	}

	// catch (effect, speed, ?)
	if ( typeof options === "number" || $.fx.speeds[ options ] ) {
		callback = speed;
		speed = options;
		options = {};
	}

	// catch (effect, options, callback)
	if ( $.isFunction( speed ) ) {
		callback = speed;
		speed = null;
	}

	// add options to effect
	if ( options ) {
		$.extend( effect, options );
	}

	speed = speed || options.duration;
	effect.duration = $.fx.off ? 0 :
		typeof speed === "number" ? speed :
		speed in $.fx.speeds ? $.fx.speeds[ speed ] :
		$.fx.speeds._default;

	effect.complete = callback || options.complete;

	return effect;
}

function standardAnimationOption( option ) {
	// Valid standard speeds (nothing, number, named speed)
	if ( !option || typeof option === "number" || $.fx.speeds[ option ] ) {
		return true;
	}

	// Invalid strings - treat as "normal" speed
	if ( typeof option === "string" && !$.effects.effect[ option ] ) {
		return true;
	}

	// Complete callback
	if ( $.isFunction( option ) ) {
		return true;
	}

	// Options hash (but not naming an effect)
	if ( typeof option === "object" && !option.effect ) {
		return true;
	}

	// Didn't match any standard API
	return false;
}

$.fn.extend({
	effect: function( /* effect, options, speed, callback */ ) {
		var args = _normalizeArguments.apply( this, arguments ),
			mode = args.mode,
			queue = args.queue,
			effectMethod = $.effects.effect[ args.effect ];

		if ( $.fx.off || !effectMethod ) {
			// delegate to the original method (e.g., .show()) if possible
			if ( mode ) {
				return this[ mode ]( args.duration, args.complete );
			} else {
				return this.each( function() {
					if ( args.complete ) {
						args.complete.call( this );
					}
				});
			}
		}

		function run( next ) {
			var elem = $( this ),
				complete = args.complete,
				mode = args.mode;

			function done() {
				if ( $.isFunction( complete ) ) {
					complete.call( elem[0] );
				}
				if ( $.isFunction( next ) ) {
					next();
				}
			}

			// If the element already has the correct final state, delegate to
			// the core methods so the internal tracking of "olddisplay" works.
			if ( elem.is( ":hidden" ) ? mode === "hide" : mode === "show" ) {
				elem[ mode ]();
				done();
			} else {
				effectMethod.call( elem[0], args, done );
			}
		}

		return queue === false ? this.each( run ) : this.queue( queue || "fx", run );
	},

	show: (function( orig ) {
		return function( option ) {
			if ( standardAnimationOption( option ) ) {
				return orig.apply( this, arguments );
			} else {
				var args = _normalizeArguments.apply( this, arguments );
				args.mode = "show";
				return this.effect.call( this, args );
			}
		};
	})( $.fn.show ),

	hide: (function( orig ) {
		return function( option ) {
			if ( standardAnimationOption( option ) ) {
				return orig.apply( this, arguments );
			} else {
				var args = _normalizeArguments.apply( this, arguments );
				args.mode = "hide";
				return this.effect.call( this, args );
			}
		};
	})( $.fn.hide ),

	toggle: (function( orig ) {
		return function( option ) {
			if ( standardAnimationOption( option ) || typeof option === "boolean" ) {
				return orig.apply( this, arguments );
			} else {
				var args = _normalizeArguments.apply( this, arguments );
				args.mode = "toggle";
				return this.effect.call( this, args );
			}
		};
	})( $.fn.toggle ),

	// helper functions
	cssUnit: function(key) {
		var style = this.css( key ),
			val = [];

		$.each( [ "em", "px", "%", "pt" ], function( i, unit ) {
			if ( style.indexOf( unit ) > 0 ) {
				val = [ parseFloat( style ), unit ];
			}
		});
		return val;
	}
});

})();

/******************************************************************************/
/*********************************** EASING ***********************************/
/******************************************************************************/

(function() {

// based on easing equations from Robert Penner (http://www.robertpenner.com/easing)

var baseEasings = {};

$.each( [ "Quad", "Cubic", "Quart", "Quint", "Expo" ], function( i, name ) {
	baseEasings[ name ] = function( p ) {
		return Math.pow( p, i + 2 );
	};
});

$.extend( baseEasings, {
	Sine: function ( p ) {
		return 1 - Math.cos( p * Math.PI / 2 );
	},
	Circ: function ( p ) {
		return 1 - Math.sqrt( 1 - p * p );
	},
	Elastic: function( p ) {
		return p === 0 || p === 1 ? p :
			-Math.pow( 2, 8 * (p - 1) ) * Math.sin( ( (p - 1) * 80 - 7.5 ) * Math.PI / 15 );
	},
	Back: function( p ) {
		return p * p * ( 3 * p - 2 );
	},
	Bounce: function ( p ) {
		var pow2,
			bounce = 4;

		while ( p < ( ( pow2 = Math.pow( 2, --bounce ) ) - 1 ) / 11 ) {}
		return 1 / Math.pow( 4, 3 - bounce ) - 7.5625 * Math.pow( ( pow2 * 3 - 2 ) / 22 - p, 2 );
	}
});

$.each( baseEasings, function( name, easeIn ) {
	$.easing[ "easeIn" + name ] = easeIn;
	$.easing[ "easeOut" + name ] = function( p ) {
		return 1 - easeIn( 1 - p );
	};
	$.easing[ "easeInOut" + name ] = function( p ) {
		return p < 0.5 ?
			easeIn( p * 2 ) / 2 :
			1 - easeIn( p * -2 + 2 ) / 2;
	};
});

})();

})($vic);
(function( $, undefined ) {

var rvertical = /up|down|vertical/,
	rpositivemotion = /up|left|vertical|horizontal/;

$.effects.effect.blind = function( o, done ) {
	// Create element
	var el = $( this ),
		props = [ "position", "top", "bottom", "left", "right", "height", "width" ],
		mode = $.effects.setMode( el, o.mode || "hide" ),
		direction = o.direction || "up",
		vertical = rvertical.test( direction ),
		ref = vertical ? "height" : "width",
		ref2 = vertical ? "top" : "left",
		motion = rpositivemotion.test( direction ),
		animation = {},
		show = mode === "show",
		wrapper, distance, margin;

	// if already wrapped, the wrapper's properties are my property. #6245
	if ( el.parent().is( ".ui-effects-wrapper" ) ) {
		$.effects.save( el.parent(), props );
	} else {
		$.effects.save( el, props );
	}
	el.show();
	wrapper = $.effects.createWrapper( el ).css({
		overflow: "hidden"
	});

	distance = wrapper[ ref ]();
	margin = parseFloat( wrapper.css( ref2 ) ) || 0;

	animation[ ref ] = show ? distance : 0;
	if ( !motion ) {
		el
			.css( vertical ? "bottom" : "right", 0 )
			.css( vertical ? "top" : "left", "auto" )
			.css({ position: "absolute" });

		animation[ ref2 ] = show ? margin : distance + margin;
	}

	// start at 0 if we are showing
	if ( show ) {
		wrapper.css( ref, 0 );
		if ( ! motion ) {
			wrapper.css( ref2, margin + distance );
		}
	}

	// Animate
	wrapper.animate( animation, {
		duration: o.duration,
		easing: o.easing,
		queue: false,
		complete: function() {
			if ( mode === "hide" ) {
				el.hide();
			}
			$.effects.restore( el, props );
			$.effects.removeWrapper( el );
			done();
		}
	});

};

})($vic);
(function( $, undefined ) {

$.effects.effect.bounce = function( o, done ) {
	var el = $( this ),
		props = [ "position", "top", "bottom", "left", "right", "height", "width" ],

		// defaults:
		mode = $.effects.setMode( el, o.mode || "effect" ),
		hide = mode === "hide",
		show = mode === "show",
		direction = o.direction || "up",
		distance = o.distance,
		times = o.times || 5,

		// number of internal animations
		anims = times * 2 + ( show || hide ? 1 : 0 ),
		speed = o.duration / anims,
		easing = o.easing,

		// utility:
		ref = ( direction === "up" || direction === "down" ) ? "top" : "left",
		motion = ( direction === "up" || direction === "left" ),
		i,
		upAnim,
		downAnim,

		// we will need to re-assemble the queue to stack our animations in place
		queue = el.queue(),
		queuelen = queue.length;

	// Avoid touching opacity to prevent clearType and PNG issues in IE
	if ( show || hide ) {
		props.push( "opacity" );
	}

	$.effects.save( el, props );
	el.show();
	$.effects.createWrapper( el ); // Create Wrapper

	// default distance for the BIGGEST bounce is the outer Distance / 3
	if ( !distance ) {
		distance = el[ ref === "top" ? "outerHeight" : "outerWidth" ]() / 3;
	}

	if ( show ) {
		downAnim = { opacity: 1 };
		downAnim[ ref ] = 0;

		// if we are showing, force opacity 0 and set the initial position
		// then do the "first" animation
		el.css( "opacity", 0 )
			.css( ref, motion ? -distance * 2 : distance * 2 )
			.animate( downAnim, speed, easing );
	}

	// start at the smallest distance if we are hiding
	if ( hide ) {
		distance = distance / Math.pow( 2, times - 1 );
	}

	downAnim = {};
	downAnim[ ref ] = 0;
	// Bounces up/down/left/right then back to 0 -- times * 2 animations happen here
	for ( i = 0; i < times; i++ ) {
		upAnim = {};
		upAnim[ ref ] = ( motion ? "-=" : "+=" ) + distance;

		el.animate( upAnim, speed, easing )
			.animate( downAnim, speed, easing );

		distance = hide ? distance * 2 : distance / 2;
	}

	// Last Bounce when Hiding
	if ( hide ) {
		upAnim = { opacity: 0 };
		upAnim[ ref ] = ( motion ? "-=" : "+=" ) + distance;

		el.animate( upAnim, speed, easing );
	}

	el.queue(function() {
		if ( hide ) {
			el.hide();
		}
		$.effects.restore( el, props );
		$.effects.removeWrapper( el );
		done();
	});

	// inject all the animations we just queued to be first in line (after "inprogress")
	if ( queuelen > 1) {
		queue.splice.apply( queue,
			[ 1, 0 ].concat( queue.splice( queuelen, anims + 1 ) ) );
	}
	el.dequeue();

};

})($vic);
(function( $, undefined ) {

$.effects.effect.clip = function( o, done ) {
	// Create element
	var el = $( this ),
		props = [ "position", "top", "bottom", "left", "right", "height", "width" ],
		mode = $.effects.setMode( el, o.mode || "hide" ),
		show = mode === "show",
		direction = o.direction || "vertical",
		vert = direction === "vertical",
		size = vert ? "height" : "width",
		position = vert ? "top" : "left",
		animation = {},
		wrapper, animate, distance;

	// Save & Show
	$.effects.save( el, props );
	el.show();

	// Create Wrapper
	wrapper = $.effects.createWrapper( el ).css({
		overflow: "hidden"
	});
	animate = ( el[0].tagName === "IMG" ) ? wrapper : el;
	distance = animate[ size ]();

	// Shift
	if ( show ) {
		animate.css( size, 0 );
		animate.css( position, distance / 2 );
	}

	// Create Animation Object:
	animation[ size ] = show ? distance : 0;
	animation[ position ] = show ? 0 : distance / 2;

	// Animate
	animate.animate( animation, {
		queue: false,
		duration: o.duration,
		easing: o.easing,
		complete: function() {
			if ( !show ) {
				el.hide();
			}
			$.effects.restore( el, props );
			$.effects.removeWrapper( el );
			done();
		}
	});

};

})($vic);
(function( $, undefined ) {

$.effects.effect.drop = function( o, done ) {

	var el = $( this ),
		props = [ "position", "top", "bottom", "left", "right", "opacity", "height", "width" ],
		mode = $.effects.setMode( el, o.mode || "hide" ),
		show = mode === "show",
		direction = o.direction || "left",
		ref = ( direction === "up" || direction === "down" ) ? "top" : "left",
		motion = ( direction === "up" || direction === "left" ) ? "pos" : "neg",
		animation = {
			opacity: show ? 1 : 0
		},
		distance;

	// Adjust
	$.effects.save( el, props );
	el.show();
	$.effects.createWrapper( el );

	distance = o.distance || el[ ref === "top" ? "outerHeight": "outerWidth" ]( true ) / 2;

	if ( show ) {
		el
			.css( "opacity", 0 )
			.css( ref, motion === "pos" ? -distance : distance );
	}

	// Animation
	animation[ ref ] = ( show ?
		( motion === "pos" ? "+=" : "-=" ) :
		( motion === "pos" ? "-=" : "+=" ) ) +
		distance;

	// Animate
	el.animate( animation, {
		queue: false,
		duration: o.duration,
		easing: o.easing,
		complete: function() {
			if ( mode === "hide" ) {
				el.hide();
			}
			$.effects.restore( el, props );
			$.effects.removeWrapper( el );
			done();
		}
	});
};

})($vic);
(function( $, undefined ) {

$.effects.effect.explode = function( o, done ) {

	var rows = o.pieces ? Math.round( Math.sqrt( o.pieces ) ) : 3,
		cells = rows,
		el = $( this ),
		mode = $.effects.setMode( el, o.mode || "hide" ),
		show = mode === "show",

		// show and then visibility:hidden the element before calculating offset
		offset = el.show().css( "visibility", "hidden" ).offset(),

		// width and height of a piece
		width = Math.ceil( el.outerWidth() / cells ),
		height = Math.ceil( el.outerHeight() / rows ),
		pieces = [],

		// loop
		i, j, left, top, mx, my;

	// children animate complete:
	function childComplete() {
		pieces.push( this );
		if ( pieces.length === rows * cells ) {
			animComplete();
		}
	}

	// clone the element for each row and cell.
	for( i = 0; i < rows ; i++ ) { // ===>
		top = offset.top + i * height;
		my = i - ( rows - 1 ) / 2 ;

		for( j = 0; j < cells ; j++ ) { // |||
			left = offset.left + j * width;
			mx = j - ( cells - 1 ) / 2 ;

			// Create a clone of the now hidden main element that will be absolute positioned
			// within a wrapper div off the -left and -top equal to size of our pieces
			el
				.clone()
				.appendTo( "body" )
				.wrap( "<div></div>" )
				.css({
					position: "absolute",
					visibility: "visible",
					left: -j * width,
					top: -i * height
				})

			// select the wrapper - make it overflow: hidden and absolute positioned based on
			// where the original was located +left and +top equal to the size of pieces
				.parent()
				.addClass( "ui-effects-explode" )
				.css({
					position: "absolute",
					overflow: "hidden",
					width: width,
					height: height,
					left: left + ( show ? mx * width : 0 ),
					top: top + ( show ? my * height : 0 ),
					opacity: show ? 0 : 1
				}).animate({
					left: left + ( show ? 0 : mx * width ),
					top: top + ( show ? 0 : my * height ),
					opacity: show ? 1 : 0
				}, o.duration || 500, o.easing, childComplete );
		}
	}

	function animComplete() {
		el.css({
			visibility: "visible"
		});
		$( pieces ).remove();
		if ( !show ) {
			el.hide();
		}
		done();
	}
};

})($vic);
(function( $, undefined ) {

$.effects.effect.fade = function( o, done ) {
	var el = $( this ),
		mode = $.effects.setMode( el, o.mode || "toggle" );

	el.animate({
		opacity: mode
	}, {
		queue: false,
		duration: o.duration,
		easing: o.easing,
		complete: done
	});
};

})( $vic );
(function( $, undefined ) {

$.effects.effect.fold = function( o, done ) {

	// Create element
	var el = $( this ),
		props = [ "position", "top", "bottom", "left", "right", "height", "width" ],
		mode = $.effects.setMode( el, o.mode || "hide" ),
		show = mode === "show",
		hide = mode === "hide",
		size = o.size || 15,
		percent = /([0-9]+)%/.exec( size ),
		horizFirst = !!o.horizFirst,
		widthFirst = show !== horizFirst,
		ref = widthFirst ? [ "width", "height" ] : [ "height", "width" ],
		duration = o.duration / 2,
		wrapper, distance,
		animation1 = {},
		animation2 = {};

	$.effects.save( el, props );
	el.show();

	// Create Wrapper
	wrapper = $.effects.createWrapper( el ).css({
		overflow: "hidden"
	});
	distance = widthFirst ?
		[ wrapper.width(), wrapper.height() ] :
		[ wrapper.height(), wrapper.width() ];

	if ( percent ) {
		size = parseInt( percent[ 1 ], 10 ) / 100 * distance[ hide ? 0 : 1 ];
	}
	if ( show ) {
		wrapper.css( horizFirst ? {
			height: 0,
			width: size
		} : {
			height: size,
			width: 0
		});
	}

	// Animation
	animation1[ ref[ 0 ] ] = show ? distance[ 0 ] : size;
	animation2[ ref[ 1 ] ] = show ? distance[ 1 ] : 0;

	// Animate
	wrapper
		.animate( animation1, duration, o.easing )
		.animate( animation2, duration, o.easing, function() {
			if ( hide ) {
				el.hide();
			}
			$.effects.restore( el, props );
			$.effects.removeWrapper( el );
			done();
		});

};

})($vic);
(function( $, undefined ) {

$.effects.effect.highlight = function( o, done ) {
	var elem = $( this ),
		props = [ "backgroundImage", "backgroundColor", "opacity" ],
		mode = $.effects.setMode( elem, o.mode || "show" ),
		animation = {
			backgroundColor: elem.css( "backgroundColor" )
		};

	if (mode === "hide") {
		animation.opacity = 0;
	}

	$.effects.save( elem, props );

	elem
		.show()
		.css({
			backgroundImage: "none",
			backgroundColor: o.color || "#ffff99"
		})
		.animate( animation, {
			queue: false,
			duration: o.duration,
			easing: o.easing,
			complete: function() {
				if ( mode === "hide" ) {
					elem.hide();
				}
				$.effects.restore( elem, props );
				done();
			}
		});
};

})($vic);
(function( $, undefined ) {

$.effects.effect.pulsate = function( o, done ) {
	var elem = $( this ),
		mode = $.effects.setMode( elem, o.mode || "show" ),
		show = mode === "show",
		hide = mode === "hide",
		showhide = ( show || mode === "hide" ),

		// showing or hiding leaves of the "last" animation
		anims = ( ( o.times || 5 ) * 2 ) + ( showhide ? 1 : 0 ),
		duration = o.duration / anims,
		animateTo = 0,
		queue = elem.queue(),
		queuelen = queue.length,
		i;

	if ( show || !elem.is(":visible")) {
		elem.css( "opacity", 0 ).show();
		animateTo = 1;
	}

	// anims - 1 opacity "toggles"
	for ( i = 1; i < anims; i++ ) {
		elem.animate({
			opacity: animateTo
		}, duration, o.easing );
		animateTo = 1 - animateTo;
	}

	elem.animate({
		opacity: animateTo
	}, duration, o.easing);

	elem.queue(function() {
		if ( hide ) {
			elem.hide();
		}
		done();
	});

	// We just queued up "anims" animations, we need to put them next in the queue
	if ( queuelen > 1 ) {
		queue.splice.apply( queue,
			[ 1, 0 ].concat( queue.splice( queuelen, anims + 1 ) ) );
	}
	elem.dequeue();
};

})($vic);
(function( $, undefined ) {

$.effects.effect.puff = function( o, done ) {
	var elem = $( this ),
		mode = $.effects.setMode( elem, o.mode || "hide" ),
		hide = mode === "hide",
		percent = parseInt( o.percent, 10 ) || 150,
		factor = percent / 100,
		original = {
			height: elem.height(),
			width: elem.width(),
			outerHeight: elem.outerHeight(),
			outerWidth: elem.outerWidth()
		};

	$.extend( o, {
		effect: "scale",
		queue: false,
		fade: true,
		mode: mode,
		complete: done,
		percent: hide ? percent : 100,
		from: hide ?
			original :
			{
				height: original.height * factor,
				width: original.width * factor,
				outerHeight: original.outerHeight * factor,
				outerWidth: original.outerWidth * factor
			}
	});

	elem.effect( o );
};

$.effects.effect.scale = function( o, done ) {

	// Create element
	var el = $( this ),
		options = $.extend( true, {}, o ),
		mode = $.effects.setMode( el, o.mode || "effect" ),
		percent = parseInt( o.percent, 10 ) ||
			( parseInt( o.percent, 10 ) === 0 ? 0 : ( mode === "hide" ? 0 : 100 ) ),
		direction = o.direction || "both",
		origin = o.origin,
		original = {
			height: el.height(),
			width: el.width(),
			outerHeight: el.outerHeight(),
			outerWidth: el.outerWidth()
		},
		factor = {
			y: direction !== "horizontal" ? (percent / 100) : 1,
			x: direction !== "vertical" ? (percent / 100) : 1
		};

	// We are going to pass this effect to the size effect:
	options.effect = "size";
	options.queue = false;
	options.complete = done;

	// Set default origin and restore for show/hide
	if ( mode !== "effect" ) {
		options.origin = origin || ["middle","center"];
		options.restore = true;
	}

	options.from = o.from || ( mode === "show" ? {
		height: 0,
		width: 0,
		outerHeight: 0,
		outerWidth: 0
	} : original );
	options.to = {
		height: original.height * factor.y,
		width: original.width * factor.x,
		outerHeight: original.outerHeight * factor.y,
		outerWidth: original.outerWidth * factor.x
	};

	// Fade option to support puff
	if ( options.fade ) {
		if ( mode === "show" ) {
			options.from.opacity = 0;
			options.to.opacity = 1;
		}
		if ( mode === "hide" ) {
			options.from.opacity = 1;
			options.to.opacity = 0;
		}
	}

	// Animate
	el.effect( options );

};

$.effects.effect.size = function( o, done ) {

	// Create element
	var original, baseline, factor,
		el = $( this ),
		props0 = [ "position", "top", "bottom", "left", "right", "width", "height", "overflow", "opacity" ],

		// Always restore
		props1 = [ "position", "top", "bottom", "left", "right", "overflow", "opacity" ],

		// Copy for children
		props2 = [ "width", "height", "overflow" ],
		cProps = [ "fontSize" ],
		vProps = [ "borderTopWidth", "borderBottomWidth", "paddingTop", "paddingBottom" ],
		hProps = [ "borderLeftWidth", "borderRightWidth", "paddingLeft", "paddingRight" ],

		// Set options
		mode = $.effects.setMode( el, o.mode || "effect" ),
		restore = o.restore || mode !== "effect",
		scale = o.scale || "both",
		origin = o.origin || [ "middle", "center" ],
		position = el.css( "position" ),
		props = restore ? props0 : props1,
		zero = {
			height: 0,
			width: 0,
			outerHeight: 0,
			outerWidth: 0
		};

	if ( mode === "show" ) {
		el.show();
	}
	original = {
		height: el.height(),
		width: el.width(),
		outerHeight: el.outerHeight(),
		outerWidth: el.outerWidth()
	};

	if ( o.mode === "toggle" && mode === "show" ) {
		el.from = o.to || zero;
		el.to = o.from || original;
	} else {
		el.from = o.from || ( mode === "show" ? zero : original );
		el.to = o.to || ( mode === "hide" ? zero : original );
	}

	// Set scaling factor
	factor = {
		from: {
			y: el.from.height / original.height,
			x: el.from.width / original.width
		},
		to: {
			y: el.to.height / original.height,
			x: el.to.width / original.width
		}
	};

	// Scale the css box
	if ( scale === "box" || scale === "both" ) {

		// Vertical props scaling
		if ( factor.from.y !== factor.to.y ) {
			props = props.concat( vProps );
			el.from = $.effects.setTransition( el, vProps, factor.from.y, el.from );
			el.to = $.effects.setTransition( el, vProps, factor.to.y, el.to );
		}

		// Horizontal props scaling
		if ( factor.from.x !== factor.to.x ) {
			props = props.concat( hProps );
			el.from = $.effects.setTransition( el, hProps, factor.from.x, el.from );
			el.to = $.effects.setTransition( el, hProps, factor.to.x, el.to );
		}
	}

	// Scale the content
	if ( scale === "content" || scale === "both" ) {

		// Vertical props scaling
		if ( factor.from.y !== factor.to.y ) {
			props = props.concat( cProps ).concat( props2 );
			el.from = $.effects.setTransition( el, cProps, factor.from.y, el.from );
			el.to = $.effects.setTransition( el, cProps, factor.to.y, el.to );
		}
	}

	$.effects.save( el, props );
	el.show();
	$.effects.createWrapper( el );
	el.css( "overflow", "hidden" ).css( el.from );

	// Adjust
	if (origin) { // Calculate baseline shifts
		baseline = $.effects.getBaseline( origin, original );
		el.from.top = ( original.outerHeight - el.outerHeight() ) * baseline.y;
		el.from.left = ( original.outerWidth - el.outerWidth() ) * baseline.x;
		el.to.top = ( original.outerHeight - el.to.outerHeight ) * baseline.y;
		el.to.left = ( original.outerWidth - el.to.outerWidth ) * baseline.x;
	}
	el.css( el.from ); // set top & left

	// Animate
	if ( scale === "content" || scale === "both" ) { // Scale the children

		// Add margins/font-size
		vProps = vProps.concat([ "marginTop", "marginBottom" ]).concat(cProps);
		hProps = hProps.concat([ "marginLeft", "marginRight" ]);
		props2 = props0.concat(vProps).concat(hProps);

		el.find( "*[width]" ).each( function(){
			var child = $( this ),
				c_original = {
					height: child.height(),
					width: child.width(),
					outerHeight: child.outerHeight(),
					outerWidth: child.outerWidth()
				};
			if (restore) {
				$.effects.save(child, props2);
			}

			child.from = {
				height: c_original.height * factor.from.y,
				width: c_original.width * factor.from.x,
				outerHeight: c_original.outerHeight * factor.from.y,
				outerWidth: c_original.outerWidth * factor.from.x
			};
			child.to = {
				height: c_original.height * factor.to.y,
				width: c_original.width * factor.to.x,
				outerHeight: c_original.height * factor.to.y,
				outerWidth: c_original.width * factor.to.x
			};

			// Vertical props scaling
			if ( factor.from.y !== factor.to.y ) {
				child.from = $.effects.setTransition( child, vProps, factor.from.y, child.from );
				child.to = $.effects.setTransition( child, vProps, factor.to.y, child.to );
			}

			// Horizontal props scaling
			if ( factor.from.x !== factor.to.x ) {
				child.from = $.effects.setTransition( child, hProps, factor.from.x, child.from );
				child.to = $.effects.setTransition( child, hProps, factor.to.x, child.to );
			}

			// Animate children
			child.css( child.from );
			child.animate( child.to, o.duration, o.easing, function() {

				// Restore children
				if ( restore ) {
					$.effects.restore( child, props2 );
				}
			});
		});
	}

	// Animate
	el.animate( el.to, {
		queue: false,
		duration: o.duration,
		easing: o.easing,
		complete: function() {
			if ( el.to.opacity === 0 ) {
				el.css( "opacity", el.from.opacity );
			}
			if( mode === "hide" ) {
				el.hide();
			}
			$.effects.restore( el, props );
			if ( !restore ) {

				// we need to calculate our new positioning based on the scaling
				if ( position === "static" ) {
					el.css({
						position: "relative",
						top: el.to.top,
						left: el.to.left
					});
				} else {
					$.each([ "top", "left" ], function( idx, pos ) {
						el.css( pos, function( _, str ) {
							var val = parseInt( str, 10 ),
								toRef = idx ? el.to.left : el.to.top;

							// if original was "auto", recalculate the new value from wrapper
							if ( str === "auto" ) {
								return toRef + "px";
							}

							return val + toRef + "px";
						});
					});
				}
			}

			$.effects.removeWrapper( el );
			done();
		}
	});

};

})($vic);
(function( $, undefined ) {

$.effects.effect.shake = function( o, done ) {

	var el = $( this ),
		props = [ "position", "top", "bottom", "left", "right", "height", "width" ],
		mode = $.effects.setMode( el, o.mode || "effect" ),
		direction = o.direction || "left",
		distance = o.distance || 20,
		times = o.times || 3,
		anims = times * 2 + 1,
		speed = Math.round(o.duration/anims),
		ref = (direction === "up" || direction === "down") ? "top" : "left",
		positiveMotion = (direction === "up" || direction === "left"),
		animation = {},
		animation1 = {},
		animation2 = {},
		i,

		// we will need to re-assemble the queue to stack our animations in place
		queue = el.queue(),
		queuelen = queue.length;

	$.effects.save( el, props );
	el.show();
	$.effects.createWrapper( el );

	// Animation
	animation[ ref ] = ( positiveMotion ? "-=" : "+=" ) + distance;
	animation1[ ref ] = ( positiveMotion ? "+=" : "-=" ) + distance * 2;
	animation2[ ref ] = ( positiveMotion ? "-=" : "+=" ) + distance * 2;

	// Animate
	el.animate( animation, speed, o.easing );

	// Shakes
	for ( i = 1; i < times; i++ ) {
		el.animate( animation1, speed, o.easing ).animate( animation2, speed, o.easing );
	}
	el
		.animate( animation1, speed, o.easing )
		.animate( animation, speed / 2, o.easing )
		.queue(function() {
			if ( mode === "hide" ) {
				el.hide();
			}
			$.effects.restore( el, props );
			$.effects.removeWrapper( el );
			done();
		});

	// inject all the animations we just queued to be first in line (after "inprogress")
	if ( queuelen > 1) {
		queue.splice.apply( queue,
			[ 1, 0 ].concat( queue.splice( queuelen, anims + 1 ) ) );
	}
	el.dequeue();

};

})($vic);
(function( $, undefined ) {

$.effects.effect.slide = function( o, done ) {

	// Create element
	var el = $( this ),
		props = [ "position", "top", "bottom", "left", "right", "width", "height" ],
		mode = $.effects.setMode( el, o.mode || "show" ),
		show = mode === "show",
		direction = o.direction || "left",
		ref = (direction === "up" || direction === "down") ? "top" : "left",
		positiveMotion = (direction === "up" || direction === "left"),
		distance,
		animation = {};

	// Adjust
	$.effects.save( el, props );
	el.show();
	distance = o.distance || el[ ref === "top" ? "outerHeight" : "outerWidth" ]( true );

	$.effects.createWrapper( el ).css({
		overflow: "hidden"
	});

	if ( show ) {
		el.css( ref, positiveMotion ? (isNaN(distance) ? "-" + distance : -distance) : distance );
	}

	// Animation
	animation[ ref ] = ( show ?
		( positiveMotion ? "+=" : "-=") :
		( positiveMotion ? "-=" : "+=")) +
		distance;

	// Animate
	el.animate( animation, {
		queue: false,
		duration: o.duration,
		easing: o.easing,
		complete: function() {
			if ( mode === "hide" ) {
				el.hide();
			}
			$.effects.restore( el, props );
			$.effects.removeWrapper( el );
			done();
		}
	});
};

})($vic);
(function( $, undefined ) {

$.effects.effect.transfer = function( o, done ) {
	var elem = $( this ),
		target = $( o.to ),
		targetFixed = target.css( "position" ) === "fixed",
		body = $("body"),
		fixTop = targetFixed ? body.scrollTop() : 0,
		fixLeft = targetFixed ? body.scrollLeft() : 0,
		endPosition = target.offset(),
		animation = {
			top: endPosition.top - fixTop ,
			left: endPosition.left - fixLeft ,
			height: target.innerHeight(),
			width: target.innerWidth()
		},
		startPosition = elem.offset(),
		transfer = $( "<div class='ui-effects-transfer'></div>" )
			.appendTo( document.body )
			.addClass( o.className )
			.css({
				top: startPosition.top - fixTop ,
				left: startPosition.left - fixLeft ,
				height: elem.innerHeight(),
				width: elem.innerWidth(),
				position: targetFixed ? "fixed" : "absolute"
			})
			.animate( animation, o.duration, o.easing, function() {
				transfer.remove();
				done();
			});
};

})($vic);
(function( $, undefined ) {

$.widget( "ui.menu", {
	version: "1.10.4",
	defaultElement: "<ul>",
	delay: 300,
	options: {
		icons: {
			submenu: "ui-icon-carat-1-e"
		},
		menus: "ul",
		position: {
			my: "left top",
			at: "right top"
		},
		role: "menu",

		// callbacks
		blur: null,
		focus: null,
		select: null
	},

	_create: function() {
		this.activeMenu = this.element;
		// flag used to prevent firing of the click handler
		// as the event bubbles up through nested menus
		this.mouseHandled = false;
		this.element
			.uniqueId()
			.addClass( "ui-menu ui-widget ui-widget-content ui-corner-all" )
			.toggleClass( "ui-menu-icons", !!this.element.find( ".ui-icon" ).length )
			.attr({
				role: this.options.role,
				tabIndex: 0
			})
			// need to catch all clicks on disabled menu
			// not possible through _on
			.bind( "click" + this.eventNamespace, $.proxy(function( event ) {
				if ( this.options.disabled ) {
					event.preventDefault();
				}
			}, this ));

		if ( this.options.disabled ) {
			this.element
				.addClass( "ui-state-disabled" )
				.attr( "aria-disabled", "true" );
		}

		this._on({
			// Prevent focus from sticking to links inside menu after clicking
			// them (focus should always stay on UL during navigation).
			"mousedown .ui-menu-item > a": function( event ) {
				event.preventDefault();
			},
			"click .ui-state-disabled > a": function( event ) {
				event.preventDefault();
			},
			"click .ui-menu-item:has(a)": function( event ) {
				var target = $( event.target ).closest( ".ui-menu-item" );
				if ( !this.mouseHandled && target.not( ".ui-state-disabled" ).length ) {
					this.select( event );

					// Only set the mouseHandled flag if the event will bubble, see #9469.
					if ( !event.isPropagationStopped() ) {
						this.mouseHandled = true;
					}

					// Open submenu on click
					if ( target.has( ".ui-menu" ).length ) {
						this.expand( event );
					} else if ( !this.element.is( ":focus" ) && $( this.document[ 0 ].activeElement ).closest( ".ui-menu" ).length ) {

						// Redirect focus to the menu
						this.element.trigger( "focus", [ true ] );

						// If the active item is on the top level, let it stay active.
						// Otherwise, blur the active item since it is no longer visible.
						if ( this.active && this.active.parents( ".ui-menu" ).length === 1 ) {
							clearTimeout( this.timer );
						}
					}
				}
			},
			"mouseenter .ui-menu-item": function( event ) {
				var target = $( event.currentTarget );
				// Remove ui-state-active class from siblings of the newly focused menu item
				// to avoid a jump caused by adjacent elements both having a class with a border
				target.siblings().children( ".ui-state-active" ).removeClass( "ui-state-active" );
				this.focus( event, target );
			},
			mouseleave: "collapseAll",
			"mouseleave .ui-menu": "collapseAll",
			focus: function( event, keepActiveItem ) {
				// If there's already an active item, keep it active
				// If not, activate the first item
				var item = this.active || this.element.children( ".ui-menu-item" ).eq( 0 );

				if ( !keepActiveItem ) {
					this.focus( event, item );
				}
			},
			blur: function( event ) {
				this._delay(function() {
					if ( !$.contains( this.element[0], this.document[0].activeElement ) ) {
						this.collapseAll( event );
					}
				});
			},
			keydown: "_keydown"
		});

		this.refresh();

		// Clicks outside of a menu collapse any open menus
		this._on( this.document, {
			click: function( event ) {
				if ( !$( event.target ).closest( ".ui-menu" ).length ) {
					this.collapseAll( event );
				}

				// Reset the mouseHandled flag
				this.mouseHandled = false;
			}
		});
	},

	_destroy: function() {
		// Destroy (sub)menus
		this.element
			.removeAttr( "aria-activedescendant" )
			.find( ".ui-menu" ).addBack()
				.removeClass( "ui-menu ui-widget ui-widget-content ui-corner-all ui-menu-icons" )
				.removeAttr( "role" )
				.removeAttr( "tabIndex" )
				.removeAttr( "aria-labelledby" )
				.removeAttr( "aria-expanded" )
				.removeAttr( "aria-hidden" )
				.removeAttr( "aria-disabled" )
				.removeUniqueId()
				.show();

		// Destroy menu items
		this.element.find( ".ui-menu-item" )
			.removeClass( "ui-menu-item" )
			.removeAttr( "role" )
			.removeAttr( "aria-disabled" )
			.children( "a" )
				.removeUniqueId()
				.removeClass( "ui-corner-all ui-state-hover" )
				.removeAttr( "tabIndex" )
				.removeAttr( "role" )
				.removeAttr( "aria-haspopup" )
				.children().each( function() {
					var elem = $( this );
					if ( elem.data( "ui-menu-submenu-carat" ) ) {
						elem.remove();
					}
				});

		// Destroy menu dividers
		this.element.find( ".ui-menu-divider" ).removeClass( "ui-menu-divider ui-widget-content" );
	},

	_keydown: function( event ) {
		var match, prev, character, skip, regex,
			preventDefault = true;

		function escape( value ) {
			return value.replace( /[\-\[\]{}()*+?.,\\\^$|#\s]/g, "\\$&" );
		}

		switch ( event.keyCode ) {
		case $.ui.keyCode.PAGE_UP:
			this.previousPage( event );
			break;
		case $.ui.keyCode.PAGE_DOWN:
			this.nextPage( event );
			break;
		case $.ui.keyCode.HOME:
			this._move( "first", "first", event );
			break;
		case $.ui.keyCode.END:
			this._move( "last", "last", event );
			break;
		case $.ui.keyCode.UP:
			this.previous( event );
			break;
		case $.ui.keyCode.DOWN:
			this.next( event );
			break;
		case $.ui.keyCode.LEFT:
			this.collapse( event );
			break;
		case $.ui.keyCode.RIGHT:
			if ( this.active && !this.active.is( ".ui-state-disabled" ) ) {
				this.expand( event );
			}
			break;
		case $.ui.keyCode.ENTER:
		case $.ui.keyCode.SPACE:
			this._activate( event );
			break;
		case $.ui.keyCode.ESCAPE:
			this.collapse( event );
			break;
		default:
			preventDefault = false;
			prev = this.previousFilter || "";
			character = String.fromCharCode( event.keyCode );
			skip = false;

			clearTimeout( this.filterTimer );

			if ( character === prev ) {
				skip = true;
			} else {
				character = prev + character;
			}

			regex = new RegExp( "^" + escape( character ), "i" );
			match = this.activeMenu.children( ".ui-menu-item" ).filter(function() {
				return regex.test( $( this ).children( "a" ).text() );
			});
			match = skip && match.index( this.active.next() ) !== -1 ?
				this.active.nextAll( ".ui-menu-item" ) :
				match;

			// If no matches on the current filter, reset to the last character pressed
			// to move down the menu to the first item that starts with that character
			if ( !match.length ) {
				character = String.fromCharCode( event.keyCode );
				regex = new RegExp( "^" + escape( character ), "i" );
				match = this.activeMenu.children( ".ui-menu-item" ).filter(function() {
					return regex.test( $( this ).children( "a" ).text() );
				});
			}

			if ( match.length ) {
				this.focus( event, match );
				if ( match.length > 1 ) {
					this.previousFilter = character;
					this.filterTimer = this._delay(function() {
						delete this.previousFilter;
					}, 1000 );
				} else {
					delete this.previousFilter;
				}
			} else {
				delete this.previousFilter;
			}
		}

		if ( preventDefault ) {
			event.preventDefault();
		}
	},

	_activate: function( event ) {
		if ( !this.active.is( ".ui-state-disabled" ) ) {
			if ( this.active.children( "a[aria-haspopup='true']" ).length ) {
				this.expand( event );
			} else {
				this.select( event );
			}
		}
	},

	refresh: function() {
		var menus,
			icon = this.options.icons.submenu,
			submenus = this.element.find( this.options.menus );

		this.element.toggleClass( "ui-menu-icons", !!this.element.find( ".ui-icon" ).length );

		// Initialize nested menus
		submenus.filter( ":not(.ui-menu)" )
			.addClass( "ui-menu ui-widget ui-widget-content ui-corner-all" )
			.hide()
			.attr({
				role: this.options.role,
				"aria-hidden": "true",
				"aria-expanded": "false"
			})
			.each(function() {
				var menu = $( this ),
					item = menu.prev( "a" ),
					submenuCarat = $( "<span>" )
						.addClass( "ui-menu-icon ui-icon " + icon )
						.data( "ui-menu-submenu-carat", true );

				item
					.attr( "aria-haspopup", "true" )
					.prepend( submenuCarat );
				menu.attr( "aria-labelledby", item.attr( "id" ) );
			});

		menus = submenus.add( this.element );

		// Don't refresh list items that are already adapted
		menus.children( ":not(.ui-menu-item):has(a)" )
			.addClass( "ui-menu-item" )
			.attr( "role", "presentation" )
			.children( "a" )
				.uniqueId()
				.addClass( "ui-corner-all" )
				.attr({
					tabIndex: -1,
					role: this._itemRole()
				});

		// Initialize unlinked menu-items containing spaces and/or dashes only as dividers
		menus.children( ":not(.ui-menu-item)" ).each(function() {
			var item = $( this );
			// hyphen, em dash, en dash
			if ( !/[^\-\u2014\u2013\s]/.test( item.text() ) ) {
				item.addClass( "ui-widget-content ui-menu-divider" );
			}
		});

		// Add aria-disabled attribute to any disabled menu item
		menus.children( ".ui-state-disabled" ).attr( "aria-disabled", "true" );

		// If the active item has been removed, blur the menu
		if ( this.active && !$.contains( this.element[ 0 ], this.active[ 0 ] ) ) {
			this.blur();
		}
	},

	_itemRole: function() {
		return {
			menu: "menuitem",
			listbox: "option"
		}[ this.options.role ];
	},

	_setOption: function( key, value ) {
		if ( key === "icons" ) {
			this.element.find( ".ui-menu-icon" )
				.removeClass( this.options.icons.submenu )
				.addClass( value.submenu );
		}
		this._super( key, value );
	},

	focus: function( event, item ) {
		var nested, focused;
		this.blur( event, event && event.type === "focus" );

		this._scrollIntoView( item );

		this.active = item.first();
		focused = this.active.children( "a" ).addClass( "ui-state-focus" );
		// Only update aria-activedescendant if there's a role
		// otherwise we assume focus is managed elsewhere
		if ( this.options.role ) {
			this.element.attr( "aria-activedescendant", focused.attr( "id" ) );
		}

		// Highlight active parent menu item, if any
		this.active
			.parent()
			.closest( ".ui-menu-item" )
			.children( "a:first" )
			.addClass( "ui-state-active" );

		if ( event && event.type === "keydown" ) {
			this._close();
		} else {
			this.timer = this._delay(function() {
				this._close();
			}, this.delay );
		}

		nested = item.children( ".ui-menu" );
		if ( nested.length && event && ( /^mouse/.test( event.type ) ) ) {
			this._startOpening(nested);
		}
		this.activeMenu = item.parent();

		this._trigger( "focus", event, { item: item } );
	},

	_scrollIntoView: function( item ) {
		var borderTop, paddingTop, offset, scroll, elementHeight, itemHeight;
		if ( this._hasScroll() ) {
			borderTop = parseFloat( $.css( this.activeMenu[0], "borderTopWidth" ) ) || 0;
			paddingTop = parseFloat( $.css( this.activeMenu[0], "paddingTop" ) ) || 0;
			offset = item.offset().top - this.activeMenu.offset().top - borderTop - paddingTop;
			scroll = this.activeMenu.scrollTop();
			elementHeight = this.activeMenu.height();
			itemHeight = item.height();

			if ( offset < 0 ) {
				this.activeMenu.scrollTop( scroll + offset );
			} else if ( offset + itemHeight > elementHeight ) {
				this.activeMenu.scrollTop( scroll + offset - elementHeight + itemHeight );
			}
		}
	},

	blur: function( event, fromFocus ) {
		if ( !fromFocus ) {
			clearTimeout( this.timer );
		}

		if ( !this.active ) {
			return;
		}

		this.active.children( "a" ).removeClass( "ui-state-focus" );
		this.active = null;

		this._trigger( "blur", event, { item: this.active } );
	},

	_startOpening: function( submenu ) {
		clearTimeout( this.timer );

		// Don't open if already open fixes a Firefox bug that caused a .5 pixel
		// shift in the submenu position when mousing over the carat icon
		if ( submenu.attr( "aria-hidden" ) !== "true" ) {
			return;
		}

		this.timer = this._delay(function() {
			this._close();
			this._open( submenu );
		}, this.delay );
	},

	_open: function( submenu ) {
		var position = $.extend({
			of: this.active
		}, this.options.position );

		clearTimeout( this.timer );
		this.element.find( ".ui-menu" ).not( submenu.parents( ".ui-menu" ) )
			.hide()
			.attr( "aria-hidden", "true" );

		submenu
			.show()
			.removeAttr( "aria-hidden" )
			.attr( "aria-expanded", "true" )
			.position( position );
	},

	collapseAll: function( event, all ) {
		clearTimeout( this.timer );
		this.timer = this._delay(function() {
			// If we were passed an event, look for the submenu that contains the event
			var currentMenu = all ? this.element :
				$( event && event.target ).closest( this.element.find( ".ui-menu" ) );

			// If we found no valid submenu ancestor, use the main menu to close all sub menus anyway
			if ( !currentMenu.length ) {
				currentMenu = this.element;
			}

			this._close( currentMenu );

			this.blur( event );
			this.activeMenu = currentMenu;
		}, this.delay );
	},

	// With no arguments, closes the currently active menu - if nothing is active
	// it closes all menus.  If passed an argument, it will search for menus BELOW
	_close: function( startMenu ) {
		if ( !startMenu ) {
			startMenu = this.active ? this.active.parent() : this.element;
		}

		startMenu
			.find( ".ui-menu" )
				.hide()
				.attr( "aria-hidden", "true" )
				.attr( "aria-expanded", "false" )
			.end()
			.find( "a.ui-state-active" )
				.removeClass( "ui-state-active" );
	},

	collapse: function( event ) {
		var newItem = this.active &&
			this.active.parent().closest( ".ui-menu-item", this.element );
		if ( newItem && newItem.length ) {
			this._close();
			this.focus( event, newItem );
		}
	},

	expand: function( event ) {
		var newItem = this.active &&
			this.active
				.children( ".ui-menu " )
				.children( ".ui-menu-item" )
				.first();

		if ( newItem && newItem.length ) {
			this._open( newItem.parent() );

			// Delay so Firefox will not hide activedescendant change in expanding submenu from AT
			this._delay(function() {
				this.focus( event, newItem );
			});
		}
	},

	next: function( event ) {
		this._move( "next", "first", event );
	},

	previous: function( event ) {
		this._move( "prev", "last", event );
	},

	isFirstItem: function() {
		return this.active && !this.active.prevAll( ".ui-menu-item" ).length;
	},

	isLastItem: function() {
		return this.active && !this.active.nextAll( ".ui-menu-item" ).length;
	},

	_move: function( direction, filter, event ) {
		var next;
		if ( this.active ) {
			if ( direction === "first" || direction === "last" ) {
				next = this.active
					[ direction === "first" ? "prevAll" : "nextAll" ]( ".ui-menu-item" )
					.eq( -1 );
			} else {
				next = this.active
					[ direction + "All" ]( ".ui-menu-item" )
					.eq( 0 );
			}
		}
		if ( !next || !next.length || !this.active ) {
			next = this.activeMenu.children( ".ui-menu-item" )[ filter ]();
		}

		this.focus( event, next );
	},

	nextPage: function( event ) {
		var item, base, height;

		if ( !this.active ) {
			this.next( event );
			return;
		}
		if ( this.isLastItem() ) {
			return;
		}
		if ( this._hasScroll() ) {
			base = this.active.offset().top;
			height = this.element.height();
			this.active.nextAll( ".ui-menu-item" ).each(function() {
				item = $( this );
				return item.offset().top - base - height < 0;
			});

			this.focus( event, item );
		} else {
			this.focus( event, this.activeMenu.children( ".ui-menu-item" )
				[ !this.active ? "first" : "last" ]() );
		}
	},

	previousPage: function( event ) {
		var item, base, height;
		if ( !this.active ) {
			this.next( event );
			return;
		}
		if ( this.isFirstItem() ) {
			return;
		}
		if ( this._hasScroll() ) {
			base = this.active.offset().top;
			height = this.element.height();
			this.active.prevAll( ".ui-menu-item" ).each(function() {
				item = $( this );
				return item.offset().top - base + height > 0;
			});

			this.focus( event, item );
		} else {
			this.focus( event, this.activeMenu.children( ".ui-menu-item" ).first() );
		}
	},

	_hasScroll: function() {
		return this.element.outerHeight() < this.element.prop( "scrollHeight" );
	},

	select: function( event ) {
		// TODO: It should never be possible to not have an active item at this
		// point, but the tests don't trigger mouseenter before click.
		this.active = this.active || $( event.target ).closest( ".ui-menu-item" );
		var ui = { item: this.active };
		if ( !this.active.has( ".ui-menu" ).length ) {
			this.collapseAll( event, true );
		}
		this._trigger( "select", event, ui );
	}
});

}( $vic ));
(function( $, undefined ) {

$.widget( "ui.progressbar", {
	version: "1.10.4",
	options: {
		max: 100,
		value: 0,

		change: null,
		complete: null
	},

	min: 0,

	_create: function() {
		// Constrain initial value
		this.oldValue = this.options.value = this._constrainedValue();

		this.element
			.addClass( "ui-progressbar ui-widget ui-widget-content ui-corner-all" )
			.attr({
				// Only set static values, aria-valuenow and aria-valuemax are
				// set inside _refreshValue()
				role: "progressbar",
				"aria-valuemin": this.min
			});

		this.valueDiv = $( "<div class='ui-progressbar-value ui-widget-header ui-corner-left'></div>" )
			.appendTo( this.element );

		this._refreshValue();
	},

	_destroy: function() {
		this.element
			.removeClass( "ui-progressbar ui-widget ui-widget-content ui-corner-all" )
			.removeAttr( "role" )
			.removeAttr( "aria-valuemin" )
			.removeAttr( "aria-valuemax" )
			.removeAttr( "aria-valuenow" );

		this.valueDiv.remove();
	},

	value: function( newValue ) {
		if ( newValue === undefined ) {
			return this.options.value;
		}

		this.options.value = this._constrainedValue( newValue );
		this._refreshValue();
	},

	_constrainedValue: function( newValue ) {
		if ( newValue === undefined ) {
			newValue = this.options.value;
		}

		this.indeterminate = newValue === false;

		// sanitize value
		if ( typeof newValue !== "number" ) {
			newValue = 0;
		}

		return this.indeterminate ? false :
			Math.min( this.options.max, Math.max( this.min, newValue ) );
	},

	_setOptions: function( options ) {
		// Ensure "value" option is set after other values (like max)
		var value = options.value;
		delete options.value;

		this._super( options );

		this.options.value = this._constrainedValue( value );
		this._refreshValue();
	},

	_setOption: function( key, value ) {
		if ( key === "max" ) {
			// Don't allow a max less than min
			value = Math.max( this.min, value );
		}

		this._super( key, value );
	},

	_percentage: function() {
		return this.indeterminate ? 100 : 100 * ( this.options.value - this.min ) / ( this.options.max - this.min );
	},

	_refreshValue: function() {
		var value = this.options.value,
			percentage = this._percentage();

		this.valueDiv
			.toggle( this.indeterminate || value > this.min )
			.toggleClass( "ui-corner-right", value === this.options.max )
			.width( percentage.toFixed(0) + "%" );

		this.element.toggleClass( "ui-progressbar-indeterminate", this.indeterminate );

		if ( this.indeterminate ) {
			this.element.removeAttr( "aria-valuenow" );
			if ( !this.overlayDiv ) {
				this.overlayDiv = $( "<div class='ui-progressbar-overlay'></div>" ).appendTo( this.valueDiv );
			}
		} else {
			this.element.attr({
				"aria-valuemax": this.options.max,
				"aria-valuenow": value
			});
			if ( this.overlayDiv ) {
				this.overlayDiv.remove();
				this.overlayDiv = null;
			}
		}

		if ( this.oldValue !== value ) {
			this.oldValue = value;
			this._trigger( "change" );
		}
		if ( value === this.options.max ) {
			this._trigger( "complete" );
		}
	}
});

})( $vic );
(function( $, undefined ) {

function num(v) {
	return parseInt(v, 10) || 0;
}

function isNumber(value) {
	return !isNaN(parseInt(value, 10));
}

$.widget("ui.resizable", $.ui.mouse, {
	version: "1.10.4",
	widgetEventPrefix: "resize",
	options: {
		alsoResize: false,
		animate: false,
		animateDuration: "slow",
		animateEasing: "swing",
		aspectRatio: false,
		autoHide: false,
		containment: false,
		ghost: false,
		grid: false,
		handles: "e,s,se",
		helper: false,
		maxHeight: null,
		maxWidth: null,
		minHeight: 10,
		minWidth: 10,
		// See #7960
		zIndex: 90,

		// callbacks
		resize: null,
		start: null,
		stop: null
	},
	_create: function() {

		var n, i, handle, axis, hname,
			that = this,
			o = this.options;
		this.element.addClass("ui-resizable");

		$.extend(this, {
			_aspectRatio: !!(o.aspectRatio),
			aspectRatio: o.aspectRatio,
			originalElement: this.element,
			_proportionallyResizeElements: [],
			_helper: o.helper || o.ghost || o.animate ? o.helper || "ui-resizable-helper" : null
		});

		//Wrap the element if it cannot hold child nodes
		if(this.element[0].nodeName.match(/canvas|textarea|input|select|button|img/i)) {

			//Create a wrapper element and set the wrapper to the new current internal element
			this.element.wrap(
				$("<div class='ui-wrapper' style='overflow: hidden;'></div>").css({
					position: this.element.css("position"),
					width: this.element.outerWidth(),
					height: this.element.outerHeight(),
					top: this.element.css("top"),
					left: this.element.css("left")
				})
			);

			//Overwrite the original this.element
			this.element = this.element.parent().data(
				"ui-resizable", this.element.data("ui-resizable")
			);

			this.elementIsWrapper = true;

			//Move margins to the wrapper
			this.element.css({ marginLeft: this.originalElement.css("marginLeft"), marginTop: this.originalElement.css("marginTop"), marginRight: this.originalElement.css("marginRight"), marginBottom: this.originalElement.css("marginBottom") });
			this.originalElement.css({ marginLeft: 0, marginTop: 0, marginRight: 0, marginBottom: 0});

			//Prevent Safari textarea resize
			this.originalResizeStyle = this.originalElement.css("resize");
			this.originalElement.css("resize", "none");

			//Push the actual element to our proportionallyResize internal array
			this._proportionallyResizeElements.push(this.originalElement.css({ position: "static", zoom: 1, display: "block" }));

			// avoid IE jump (hard set the margin)
			this.originalElement.css({ margin: this.originalElement.css("margin") });

			// fix handlers offset
			this._proportionallyResize();

		}

		this.handles = o.handles || (!$(".ui-resizable-handle", this.element).length ? "e,s,se" : { n: ".ui-resizable-n", e: ".ui-resizable-e", s: ".ui-resizable-s", w: ".ui-resizable-w", se: ".ui-resizable-se", sw: ".ui-resizable-sw", ne: ".ui-resizable-ne", nw: ".ui-resizable-nw" });
		if(this.handles.constructor === String) {

			if ( this.handles === "all") {
				this.handles = "n,e,s,w,se,sw,ne,nw";
			}

			n = this.handles.split(",");
			this.handles = {};

			for(i = 0; i < n.length; i++) {

				handle = $.trim(n[i]);
				hname = "ui-resizable-"+handle;
				axis = $("<div class='ui-resizable-handle " + hname + "'></div>");

				// Apply zIndex to all handles - see #7960
				axis.css({ zIndex: o.zIndex });

				//TODO : What's going on here?
				if ("se" === handle) {
					axis.addClass("ui-icon ui-icon-gripsmall-diagonal-se");
				}

				//Insert into internal handles object and append to element
				this.handles[handle] = ".ui-resizable-"+handle;
				this.element.append(axis);
			}

		}

		this._renderAxis = function(target) {

			var i, axis, padPos, padWrapper;

			target = target || this.element;

			for(i in this.handles) {

				if(this.handles[i].constructor === String) {
					this.handles[i] = $(this.handles[i], this.element).show();
				}

				//Apply pad to wrapper element, needed to fix axis position (textarea, inputs, scrolls)
				if (this.elementIsWrapper && this.originalElement[0].nodeName.match(/textarea|input|select|button/i)) {

					axis = $(this.handles[i], this.element);

					//Checking the correct pad and border
					padWrapper = /sw|ne|nw|se|n|s/.test(i) ? axis.outerHeight() : axis.outerWidth();

					//The padding type i have to apply...
					padPos = [ "padding",
						/ne|nw|n/.test(i) ? "Top" :
						/se|sw|s/.test(i) ? "Bottom" :
						/^e$/.test(i) ? "Right" : "Left" ].join("");

					target.css(padPos, padWrapper);

					this._proportionallyResize();

				}

				//TODO: What's that good for? There's not anything to be executed left
				if(!$(this.handles[i]).length) {
					continue;
				}
			}
		};

		//TODO: make renderAxis a prototype function
		this._renderAxis(this.element);

		this._handles = $(".ui-resizable-handle", this.element)
			.disableSelection();

		//Matching axis name
		this._handles.mouseover(function() {
			if (!that.resizing) {
				if (this.className) {
					axis = this.className.match(/ui-resizable-(se|sw|ne|nw|n|e|s|w)/i);
				}
				//Axis, default = se
				that.axis = axis && axis[1] ? axis[1] : "se";
			}
		});

		//If we want to auto hide the elements
		if (o.autoHide) {
			this._handles.hide();
			$(this.element)
				.addClass("ui-resizable-autohide")
				.mouseenter(function() {
					if (o.disabled) {
						return;
					}
					$(this).removeClass("ui-resizable-autohide");
					that._handles.show();
				})
				.mouseleave(function(){
					if (o.disabled) {
						return;
					}
					if (!that.resizing) {
						$(this).addClass("ui-resizable-autohide");
						that._handles.hide();
					}
				});
		}

		//Initialize the mouse interaction
		this._mouseInit();

	},

	_destroy: function() {

		this._mouseDestroy();

		var wrapper,
			_destroy = function(exp) {
				$(exp).removeClass("ui-resizable ui-resizable-disabled ui-resizable-resizing")
					.removeData("resizable").removeData("ui-resizable").unbind(".resizable").find(".ui-resizable-handle").remove();
			};

		//TODO: Unwrap at same DOM position
		if (this.elementIsWrapper) {
			_destroy(this.element);
			wrapper = this.element;
			this.originalElement.css({
				position: wrapper.css("position"),
				width: wrapper.outerWidth(),
				height: wrapper.outerHeight(),
				top: wrapper.css("top"),
				left: wrapper.css("left")
			}).insertAfter( wrapper );
			wrapper.remove();
		}

		this.originalElement.css("resize", this.originalResizeStyle);
		_destroy(this.originalElement);

		return this;
	},

	_mouseCapture: function(event) {
		var i, handle,
			capture = false;

		for (i in this.handles) {
			handle = $(this.handles[i])[0];
			if (handle === event.target || $.contains(handle, event.target)) {
				capture = true;
			}
		}

		return !this.options.disabled && capture;
	},

	_mouseStart: function(event) {

		var curleft, curtop, cursor,
			o = this.options,
			iniPos = this.element.position(),
			el = this.element;

		this.resizing = true;

		// bugfix for http://dev.jquery.com/ticket/1749
		if ( (/absolute/).test( el.css("position") ) ) {
			el.css({ position: "absolute", top: el.css("top"), left: el.css("left") });
		} else if (el.is(".ui-draggable")) {
			el.css({ position: "absolute", top: iniPos.top, left: iniPos.left });
		}

		this._renderProxy();

		curleft = num(this.helper.css("left"));
		curtop = num(this.helper.css("top"));

		if (o.containment) {
			curleft += $(o.containment).scrollLeft() || 0;
			curtop += $(o.containment).scrollTop() || 0;
		}

		//Store needed variables
		this.offset = this.helper.offset();
		this.position = { left: curleft, top: curtop };
		this.size = this._helper ? { width: this.helper.width(), height: this.helper.height() } : { width: el.width(), height: el.height() };
		this.originalSize = this._helper ? { width: el.outerWidth(), height: el.outerHeight() } : { width: el.width(), height: el.height() };
		this.originalPosition = { left: curleft, top: curtop };
		this.sizeDiff = { width: el.outerWidth() - el.width(), height: el.outerHeight() - el.height() };
		this.originalMousePosition = { left: event.pageX, top: event.pageY };

		//Aspect Ratio
		this.aspectRatio = (typeof o.aspectRatio === "number") ? o.aspectRatio : ((this.originalSize.width / this.originalSize.height) || 1);

		cursor = $(".ui-resizable-" + this.axis).css("cursor");
		$("body").css("cursor", cursor === "auto" ? this.axis + "-resize" : cursor);

		el.addClass("ui-resizable-resizing");
		this._propagate("start", event);
		return true;
	},

	_mouseDrag: function(event) {

		//Increase performance, avoid regex
		var data,
			el = this.helper, props = {},
			smp = this.originalMousePosition,
			a = this.axis,
			prevTop = this.position.top,
			prevLeft = this.position.left,
			prevWidth = this.size.width,
			prevHeight = this.size.height,
			dx = (event.pageX-smp.left)||0,
			dy = (event.pageY-smp.top)||0,
			trigger = this._change[a];

		if (!trigger) {
			return false;
		}

		// Calculate the attrs that will be change
		data = trigger.apply(this, [event, dx, dy]);

		// Put this in the mouseDrag handler since the user can start pressing shift while resizing
		this._updateVirtualBoundaries(event.shiftKey);
		if (this._aspectRatio || event.shiftKey) {
			data = this._updateRatio(data, event);
		}

		data = this._respectSize(data, event);

		this._updateCache(data);

		// plugins callbacks need to be called first
		this._propagate("resize", event);

		if (this.position.top !== prevTop) {
			props.top = this.position.top + "px";
		}
		if (this.position.left !== prevLeft) {
			props.left = this.position.left + "px";
		}
		if (this.size.width !== prevWidth) {
			props.width = this.size.width + "px";
		}
		if (this.size.height !== prevHeight) {
			props.height = this.size.height + "px";
		}
		el.css(props);

		if (!this._helper && this._proportionallyResizeElements.length) {
			this._proportionallyResize();
		}

		// Call the user callback if the element was resized
		if ( ! $.isEmptyObject(props) ) {
			this._trigger("resize", event, this.ui());
		}

		return false;
	},

	_mouseStop: function(event) {

		this.resizing = false;
		var pr, ista, soffseth, soffsetw, s, left, top,
			o = this.options, that = this;

		if(this._helper) {

			pr = this._proportionallyResizeElements;
			ista = pr.length && (/textarea/i).test(pr[0].nodeName);
			soffseth = ista && $.ui.hasScroll(pr[0], "left") /* TODO - jump height */ ? 0 : that.sizeDiff.height;
			soffsetw = ista ? 0 : that.sizeDiff.width;

			s = { width: (that.helper.width()  - soffsetw), height: (that.helper.height() - soffseth) };
			left = (parseInt(that.element.css("left"), 10) + (that.position.left - that.originalPosition.left)) || null;
			top = (parseInt(that.element.css("top"), 10) + (that.position.top - that.originalPosition.top)) || null;

			if (!o.animate) {
				this.element.css($.extend(s, { top: top, left: left }));
			}

			that.helper.height(that.size.height);
			that.helper.width(that.size.width);

			if (this._helper && !o.animate) {
				this._proportionallyResize();
			}
		}

		$("body").css("cursor", "auto");

		this.element.removeClass("ui-resizable-resizing");

		this._propagate("stop", event);

		if (this._helper) {
			this.helper.remove();
		}

		return false;

	},

	_updateVirtualBoundaries: function(forceAspectRatio) {
		var pMinWidth, pMaxWidth, pMinHeight, pMaxHeight, b,
			o = this.options;

		b = {
			minWidth: isNumber(o.minWidth) ? o.minWidth : 0,
			maxWidth: isNumber(o.maxWidth) ? o.maxWidth : Infinity,
			minHeight: isNumber(o.minHeight) ? o.minHeight : 0,
			maxHeight: isNumber(o.maxHeight) ? o.maxHeight : Infinity
		};

		if(this._aspectRatio || forceAspectRatio) {
			// We want to create an enclosing box whose aspect ration is the requested one
			// First, compute the "projected" size for each dimension based on the aspect ratio and other dimension
			pMinWidth = b.minHeight * this.aspectRatio;
			pMinHeight = b.minWidth / this.aspectRatio;
			pMaxWidth = b.maxHeight * this.aspectRatio;
			pMaxHeight = b.maxWidth / this.aspectRatio;

			if(pMinWidth > b.minWidth) {
				b.minWidth = pMinWidth;
			}
			if(pMinHeight > b.minHeight) {
				b.minHeight = pMinHeight;
			}
			if(pMaxWidth < b.maxWidth) {
				b.maxWidth = pMaxWidth;
			}
			if(pMaxHeight < b.maxHeight) {
				b.maxHeight = pMaxHeight;
			}
		}
		this._vBoundaries = b;
	},

	_updateCache: function(data) {
		this.offset = this.helper.offset();
		if (isNumber(data.left)) {
			this.position.left = data.left;
		}
		if (isNumber(data.top)) {
			this.position.top = data.top;
		}
		if (isNumber(data.height)) {
			this.size.height = data.height;
		}
		if (isNumber(data.width)) {
			this.size.width = data.width;
		}
	},

	_updateRatio: function( data ) {

		var cpos = this.position,
			csize = this.size,
			a = this.axis;

		if (isNumber(data.height)) {
			data.width = (data.height * this.aspectRatio);
		} else if (isNumber(data.width)) {
			data.height = (data.width / this.aspectRatio);
		}

		if (a === "sw") {
			data.left = cpos.left + (csize.width - data.width);
			data.top = null;
		}
		if (a === "nw") {
			data.top = cpos.top + (csize.height - data.height);
			data.left = cpos.left + (csize.width - data.width);
		}

		return data;
	},

	_respectSize: function( data ) {

		var o = this._vBoundaries,
			a = this.axis,
			ismaxw = isNumber(data.width) && o.maxWidth && (o.maxWidth < data.width), ismaxh = isNumber(data.height) && o.maxHeight && (o.maxHeight < data.height),
			isminw = isNumber(data.width) && o.minWidth && (o.minWidth > data.width), isminh = isNumber(data.height) && o.minHeight && (o.minHeight > data.height),
			dw = this.originalPosition.left + this.originalSize.width,
			dh = this.position.top + this.size.height,
			cw = /sw|nw|w/.test(a), ch = /nw|ne|n/.test(a);
		if (isminw) {
			data.width = o.minWidth;
		}
		if (isminh) {
			data.height = o.minHeight;
		}
		if (ismaxw) {
			data.width = o.maxWidth;
		}
		if (ismaxh) {
			data.height = o.maxHeight;
		}

		if (isminw && cw) {
			data.left = dw - o.minWidth;
		}
		if (ismaxw && cw) {
			data.left = dw - o.maxWidth;
		}
		if (isminh && ch) {
			data.top = dh - o.minHeight;
		}
		if (ismaxh && ch) {
			data.top = dh - o.maxHeight;
		}

		// fixing jump error on top/left - bug #2330
		if (!data.width && !data.height && !data.left && data.top) {
			data.top = null;
		} else if (!data.width && !data.height && !data.top && data.left) {
			data.left = null;
		}

		return data;
	},

	_proportionallyResize: function() {

		if (!this._proportionallyResizeElements.length) {
			return;
		}

		var i, j, borders, paddings, prel,
			element = this.helper || this.element;

		for ( i=0; i < this._proportionallyResizeElements.length; i++) {

			prel = this._proportionallyResizeElements[i];

			if (!this.borderDif) {
				this.borderDif = [];
				borders = [prel.css("borderTopWidth"), prel.css("borderRightWidth"), prel.css("borderBottomWidth"), prel.css("borderLeftWidth")];
				paddings = [prel.css("paddingTop"), prel.css("paddingRight"), prel.css("paddingBottom"), prel.css("paddingLeft")];

				for ( j = 0; j < borders.length; j++ ) {
					this.borderDif[ j ] = ( parseInt( borders[ j ], 10 ) || 0 ) + ( parseInt( paddings[ j ], 10 ) || 0 );
				}
			}

			prel.css({
				height: (element.height() - this.borderDif[0] - this.borderDif[2]) || 0,
				width: (element.width() - this.borderDif[1] - this.borderDif[3]) || 0
			});

		}

	},

	_renderProxy: function() {

		var el = this.element, o = this.options;
		this.elementOffset = el.offset();

		if(this._helper) {

			this.helper = this.helper || $("<div style='overflow:hidden;'></div>");

			this.helper.addClass(this._helper).css({
				width: this.element.outerWidth() - 1,
				height: this.element.outerHeight() - 1,
				position: "absolute",
				left: this.elementOffset.left +"px",
				top: this.elementOffset.top +"px",
				zIndex: ++o.zIndex //TODO: Don't modify option
			});

			this.helper
				.appendTo("body")
				.disableSelection();

		} else {
			this.helper = this.element;
		}

	},

	_change: {
		e: function(event, dx) {
			return { width: this.originalSize.width + dx };
		},
		w: function(event, dx) {
			var cs = this.originalSize, sp = this.originalPosition;
			return { left: sp.left + dx, width: cs.width - dx };
		},
		n: function(event, dx, dy) {
			var cs = this.originalSize, sp = this.originalPosition;
			return { top: sp.top + dy, height: cs.height - dy };
		},
		s: function(event, dx, dy) {
			return { height: this.originalSize.height + dy };
		},
		se: function(event, dx, dy) {
			return $.extend(this._change.s.apply(this, arguments), this._change.e.apply(this, [event, dx, dy]));
		},
		sw: function(event, dx, dy) {
			return $.extend(this._change.s.apply(this, arguments), this._change.w.apply(this, [event, dx, dy]));
		},
		ne: function(event, dx, dy) {
			return $.extend(this._change.n.apply(this, arguments), this._change.e.apply(this, [event, dx, dy]));
		},
		nw: function(event, dx, dy) {
			return $.extend(this._change.n.apply(this, arguments), this._change.w.apply(this, [event, dx, dy]));
		}
	},

	_propagate: function(n, event) {
		$.ui.plugin.call(this, n, [event, this.ui()]);
		(n !== "resize" && this._trigger(n, event, this.ui()));
	},

	plugins: {},

	ui: function() {
		return {
			originalElement: this.originalElement,
			element: this.element,
			helper: this.helper,
			position: this.position,
			size: this.size,
			originalSize: this.originalSize,
			originalPosition: this.originalPosition
		};
	}

});

/*
 * Resizable Extensions
 */

$.ui.plugin.add("resizable", "animate", {

	stop: function( event ) {
		var that = $(this).data("ui-resizable"),
			o = that.options,
			pr = that._proportionallyResizeElements,
			ista = pr.length && (/textarea/i).test(pr[0].nodeName),
			soffseth = ista && $.ui.hasScroll(pr[0], "left") /* TODO - jump height */ ? 0 : that.sizeDiff.height,
			soffsetw = ista ? 0 : that.sizeDiff.width,
			style = { width: (that.size.width - soffsetw), height: (that.size.height - soffseth) },
			left = (parseInt(that.element.css("left"), 10) + (that.position.left - that.originalPosition.left)) || null,
			top = (parseInt(that.element.css("top"), 10) + (that.position.top - that.originalPosition.top)) || null;

		that.element.animate(
			$.extend(style, top && left ? { top: top, left: left } : {}), {
				duration: o.animateDuration,
				easing: o.animateEasing,
				step: function() {

					var data = {
						width: parseInt(that.element.css("width"), 10),
						height: parseInt(that.element.css("height"), 10),
						top: parseInt(that.element.css("top"), 10),
						left: parseInt(that.element.css("left"), 10)
					};

					if (pr && pr.length) {
						$(pr[0]).css({ width: data.width, height: data.height });
					}

					// propagating resize, and updating values for each animation step
					that._updateCache(data);
					that._propagate("resize", event);

				}
			}
		);
	}

});

$.ui.plugin.add("resizable", "containment", {

	start: function() {
		var element, p, co, ch, cw, width, height,
			that = $(this).data("ui-resizable"),
			o = that.options,
			el = that.element,
			oc = o.containment,
			ce = (oc instanceof $) ? oc.get(0) : (/parent/.test(oc)) ? el.parent().get(0) : oc;

		if (!ce) {
			return;
		}

		that.containerElement = $(ce);

		if (/document/.test(oc) || oc === document) {
			that.containerOffset = { left: 0, top: 0 };
			that.containerPosition = { left: 0, top: 0 };

			that.parentData = {
				element: $(document), left: 0, top: 0,
				width: $(document).width(), height: $(document).height() || document.body.parentNode.scrollHeight
			};
		}

		// i'm a node, so compute top, left, right, bottom
		else {
			element = $(ce);
			p = [];
			$([ "Top", "Right", "Left", "Bottom" ]).each(function(i, name) { p[i] = num(element.css("padding" + name)); });

			that.containerOffset = element.offset();
			that.containerPosition = element.position();
			that.containerSize = { height: (element.innerHeight() - p[3]), width: (element.innerWidth() - p[1]) };

			co = that.containerOffset;
			ch = that.containerSize.height;
			cw = that.containerSize.width;
			width = ($.ui.hasScroll(ce, "left") ? ce.scrollWidth : cw );
			height = ($.ui.hasScroll(ce) ? ce.scrollHeight : ch);

			that.parentData = {
				element: ce, left: co.left, top: co.top, width: width, height: height
			};
		}
	},

	resize: function( event ) {
		var woset, hoset, isParent, isOffsetRelative,
			that = $(this).data("ui-resizable"),
			o = that.options,
			co = that.containerOffset, cp = that.position,
			pRatio = that._aspectRatio || event.shiftKey,
			cop = { top:0, left:0 }, ce = that.containerElement;

		if (ce[0] !== document && (/static/).test(ce.css("position"))) {
			cop = co;
		}

		if (cp.left < (that._helper ? co.left : 0)) {
			that.size.width = that.size.width + (that._helper ? (that.position.left - co.left) : (that.position.left - cop.left));
			if (pRatio) {
				that.size.height = that.size.width / that.aspectRatio;
			}
			that.position.left = o.helper ? co.left : 0;
		}

		if (cp.top < (that._helper ? co.top : 0)) {
			that.size.height = that.size.height + (that._helper ? (that.position.top - co.top) : that.position.top);
			if (pRatio) {
				that.size.width = that.size.height * that.aspectRatio;
			}
			that.position.top = that._helper ? co.top : 0;
		}

		that.offset.left = that.parentData.left+that.position.left;
		that.offset.top = that.parentData.top+that.position.top;

		woset = Math.abs( (that._helper ? that.offset.left - cop.left : (that.offset.left - cop.left)) + that.sizeDiff.width );
		hoset = Math.abs( (that._helper ? that.offset.top - cop.top : (that.offset.top - co.top)) + that.sizeDiff.height );

		isParent = that.containerElement.get(0) === that.element.parent().get(0);
		isOffsetRelative = /relative|absolute/.test(that.containerElement.css("position"));

		if ( isParent && isOffsetRelative ) {
			woset -= Math.abs( that.parentData.left );
		}

		if (woset + that.size.width >= that.parentData.width) {
			that.size.width = that.parentData.width - woset;
			if (pRatio) {
				that.size.height = that.size.width / that.aspectRatio;
			}
		}

		if (hoset + that.size.height >= that.parentData.height) {
			that.size.height = that.parentData.height - hoset;
			if (pRatio) {
				that.size.width = that.size.height * that.aspectRatio;
			}
		}
	},

	stop: function(){
		var that = $(this).data("ui-resizable"),
			o = that.options,
			co = that.containerOffset,
			cop = that.containerPosition,
			ce = that.containerElement,
			helper = $(that.helper),
			ho = helper.offset(),
			w = helper.outerWidth() - that.sizeDiff.width,
			h = helper.outerHeight() - that.sizeDiff.height;

		if (that._helper && !o.animate && (/relative/).test(ce.css("position"))) {
			$(this).css({ left: ho.left - cop.left - co.left, width: w, height: h });
		}

		if (that._helper && !o.animate && (/static/).test(ce.css("position"))) {
			$(this).css({ left: ho.left - cop.left - co.left, width: w, height: h });
		}

	}
});

$.ui.plugin.add("resizable", "alsoResize", {

	start: function () {
		var that = $(this).data("ui-resizable"),
			o = that.options,
			_store = function (exp) {
				$(exp).each(function() {
					var el = $(this);
					el.data("ui-resizable-alsoresize", {
						width: parseInt(el.width(), 10), height: parseInt(el.height(), 10),
						left: parseInt(el.css("left"), 10), top: parseInt(el.css("top"), 10)
					});
				});
			};

		if (typeof(o.alsoResize) === "object" && !o.alsoResize.parentNode) {
			if (o.alsoResize.length) { o.alsoResize = o.alsoResize[0]; _store(o.alsoResize); }
			else { $.each(o.alsoResize, function (exp) { _store(exp); }); }
		}else{
			_store(o.alsoResize);
		}
	},

	resize: function (event, ui) {
		var that = $(this).data("ui-resizable"),
			o = that.options,
			os = that.originalSize,
			op = that.originalPosition,
			delta = {
				height: (that.size.height - os.height) || 0, width: (that.size.width - os.width) || 0,
				top: (that.position.top - op.top) || 0, left: (that.position.left - op.left) || 0
			},

			_alsoResize = function (exp, c) {
				$(exp).each(function() {
					var el = $(this), start = $(this).data("ui-resizable-alsoresize"), style = {},
						css = c && c.length ? c : el.parents(ui.originalElement[0]).length ? ["width", "height"] : ["width", "height", "top", "left"];

					$.each(css, function (i, prop) {
						var sum = (start[prop]||0) + (delta[prop]||0);
						if (sum && sum >= 0) {
							style[prop] = sum || null;
						}
					});

					el.css(style);
				});
			};

		if (typeof(o.alsoResize) === "object" && !o.alsoResize.nodeType) {
			$.each(o.alsoResize, function (exp, c) { _alsoResize(exp, c); });
		}else{
			_alsoResize(o.alsoResize);
		}
	},

	stop: function () {
		$(this).removeData("resizable-alsoresize");
	}
});

$.ui.plugin.add("resizable", "ghost", {

	start: function() {

		var that = $(this).data("ui-resizable"), o = that.options, cs = that.size;

		that.ghost = that.originalElement.clone();
		that.ghost
			.css({ opacity: 0.25, display: "block", position: "relative", height: cs.height, width: cs.width, margin: 0, left: 0, top: 0 })
			.addClass("ui-resizable-ghost")
			.addClass(typeof o.ghost === "string" ? o.ghost : "");

		that.ghost.appendTo(that.helper);

	},

	resize: function(){
		var that = $(this).data("ui-resizable");
		if (that.ghost) {
			that.ghost.css({ position: "relative", height: that.size.height, width: that.size.width });
		}
	},

	stop: function() {
		var that = $(this).data("ui-resizable");
		if (that.ghost && that.helper) {
			that.helper.get(0).removeChild(that.ghost.get(0));
		}
	}

});

$.ui.plugin.add("resizable", "grid", {

	resize: function() {
		var that = $(this).data("ui-resizable"),
			o = that.options,
			cs = that.size,
			os = that.originalSize,
			op = that.originalPosition,
			a = that.axis,
			grid = typeof o.grid === "number" ? [o.grid, o.grid] : o.grid,
			gridX = (grid[0]||1),
			gridY = (grid[1]||1),
			ox = Math.round((cs.width - os.width) / gridX) * gridX,
			oy = Math.round((cs.height - os.height) / gridY) * gridY,
			newWidth = os.width + ox,
			newHeight = os.height + oy,
			isMaxWidth = o.maxWidth && (o.maxWidth < newWidth),
			isMaxHeight = o.maxHeight && (o.maxHeight < newHeight),
			isMinWidth = o.minWidth && (o.minWidth > newWidth),
			isMinHeight = o.minHeight && (o.minHeight > newHeight);

		o.grid = grid;

		if (isMinWidth) {
			newWidth = newWidth + gridX;
		}
		if (isMinHeight) {
			newHeight = newHeight + gridY;
		}
		if (isMaxWidth) {
			newWidth = newWidth - gridX;
		}
		if (isMaxHeight) {
			newHeight = newHeight - gridY;
		}

		if (/^(se|s|e)$/.test(a)) {
			that.size.width = newWidth;
			that.size.height = newHeight;
		} else if (/^(ne)$/.test(a)) {
			that.size.width = newWidth;
			that.size.height = newHeight;
			that.position.top = op.top - oy;
		} else if (/^(sw)$/.test(a)) {
			that.size.width = newWidth;
			that.size.height = newHeight;
			that.position.left = op.left - ox;
		} else {
			if ( newHeight - gridY > 0 ) {
				that.size.height = newHeight;
				that.position.top = op.top - oy;
			} else {
				that.size.height = gridY;
				that.position.top = op.top + os.height - gridY;
			}
			if ( newWidth - gridX > 0 ) {
				that.size.width = newWidth;
				that.position.left = op.left - ox;
			} else {
				that.size.width = gridX;
				that.position.left = op.left + os.width - gridX;
			}
		}
	}

});

})($vic);
(function( $, undefined ) {

$.widget("ui.selectable", $.ui.mouse, {
	version: "1.10.4",
	options: {
		appendTo: "body",
		autoRefresh: true,
		distance: 0,
		filter: "*",
		tolerance: "touch",

		// callbacks
		selected: null,
		selecting: null,
		start: null,
		stop: null,
		unselected: null,
		unselecting: null
	},
	_create: function() {
		var selectees,
			that = this;

		this.element.addClass("ui-selectable");

		this.dragged = false;

		// cache selectee children based on filter
		this.refresh = function() {
			selectees = $(that.options.filter, that.element[0]);
			selectees.addClass("ui-selectee");
			selectees.each(function() {
				var $this = $(this),
					pos = $this.offset();
				$.data(this, "selectable-item", {
					element: this,
					$element: $this,
					left: pos.left,
					top: pos.top,
					right: pos.left + $this.outerWidth(),
					bottom: pos.top + $this.outerHeight(),
					startselected: false,
					selected: $this.hasClass("ui-selected"),
					selecting: $this.hasClass("ui-selecting"),
					unselecting: $this.hasClass("ui-unselecting")
				});
			});
		};
		this.refresh();

		this.selectees = selectees.addClass("ui-selectee");

		this._mouseInit();

		this.helper = $("<div class='ui-selectable-helper'></div>");
	},

	_destroy: function() {
		this.selectees
			.removeClass("ui-selectee")
			.removeData("selectable-item");
		this.element
			.removeClass("ui-selectable ui-selectable-disabled");
		this._mouseDestroy();
	},

	_mouseStart: function(event) {
		var that = this,
			options = this.options;

		this.opos = [event.pageX, event.pageY];

		if (this.options.disabled) {
			return;
		}

		this.selectees = $(options.filter, this.element[0]);

		this._trigger("start", event);

		$(options.appendTo).append(this.helper);
		// position helper (lasso)
		this.helper.css({
			"left": event.pageX,
			"top": event.pageY,
			"width": 0,
			"height": 0
		});

		if (options.autoRefresh) {
			this.refresh();
		}

		this.selectees.filter(".ui-selected").each(function() {
			var selectee = $.data(this, "selectable-item");
			selectee.startselected = true;
			if (!event.metaKey && !event.ctrlKey) {
				selectee.$element.removeClass("ui-selected");
				selectee.selected = false;
				selectee.$element.addClass("ui-unselecting");
				selectee.unselecting = true;
				// selectable UNSELECTING callback
				that._trigger("unselecting", event, {
					unselecting: selectee.element
				});
			}
		});

		$(event.target).parents().addBack().each(function() {
			var doSelect,
				selectee = $.data(this, "selectable-item");
			if (selectee) {
				doSelect = (!event.metaKey && !event.ctrlKey) || !selectee.$element.hasClass("ui-selected");
				selectee.$element
					.removeClass(doSelect ? "ui-unselecting" : "ui-selected")
					.addClass(doSelect ? "ui-selecting" : "ui-unselecting");
				selectee.unselecting = !doSelect;
				selectee.selecting = doSelect;
				selectee.selected = doSelect;
				// selectable (UN)SELECTING callback
				if (doSelect) {
					that._trigger("selecting", event, {
						selecting: selectee.element
					});
				} else {
					that._trigger("unselecting", event, {
						unselecting: selectee.element
					});
				}
				return false;
			}
		});

	},

	_mouseDrag: function(event) {

		this.dragged = true;

		if (this.options.disabled) {
			return;
		}

		var tmp,
			that = this,
			options = this.options,
			x1 = this.opos[0],
			y1 = this.opos[1],
			x2 = event.pageX,
			y2 = event.pageY;

		if (x1 > x2) { tmp = x2; x2 = x1; x1 = tmp; }
		if (y1 > y2) { tmp = y2; y2 = y1; y1 = tmp; }
		this.helper.css({left: x1, top: y1, width: x2-x1, height: y2-y1});

		this.selectees.each(function() {
			var selectee = $.data(this, "selectable-item"),
				hit = false;

			//prevent helper from being selected if appendTo: selectable
			if (!selectee || selectee.element === that.element[0]) {
				return;
			}

			if (options.tolerance === "touch") {
				hit = ( !(selectee.left > x2 || selectee.right < x1 || selectee.top > y2 || selectee.bottom < y1) );
			} else if (options.tolerance === "fit") {
				hit = (selectee.left > x1 && selectee.right < x2 && selectee.top > y1 && selectee.bottom < y2);
			}

			if (hit) {
				// SELECT
				if (selectee.selected) {
					selectee.$element.removeClass("ui-selected");
					selectee.selected = false;
				}
				if (selectee.unselecting) {
					selectee.$element.removeClass("ui-unselecting");
					selectee.unselecting = false;
				}
				if (!selectee.selecting) {
					selectee.$element.addClass("ui-selecting");
					selectee.selecting = true;
					// selectable SELECTING callback
					that._trigger("selecting", event, {
						selecting: selectee.element
					});
				}
			} else {
				// UNSELECT
				if (selectee.selecting) {
					if ((event.metaKey || event.ctrlKey) && selectee.startselected) {
						selectee.$element.removeClass("ui-selecting");
						selectee.selecting = false;
						selectee.$element.addClass("ui-selected");
						selectee.selected = true;
					} else {
						selectee.$element.removeClass("ui-selecting");
						selectee.selecting = false;
						if (selectee.startselected) {
							selectee.$element.addClass("ui-unselecting");
							selectee.unselecting = true;
						}
						// selectable UNSELECTING callback
						that._trigger("unselecting", event, {
							unselecting: selectee.element
						});
					}
				}
				if (selectee.selected) {
					if (!event.metaKey && !event.ctrlKey && !selectee.startselected) {
						selectee.$element.removeClass("ui-selected");
						selectee.selected = false;

						selectee.$element.addClass("ui-unselecting");
						selectee.unselecting = true;
						// selectable UNSELECTING callback
						that._trigger("unselecting", event, {
							unselecting: selectee.element
						});
					}
				}
			}
		});

		return false;
	},

	_mouseStop: function(event) {
		var that = this;

		this.dragged = false;

		$(".ui-unselecting", this.element[0]).each(function() {
			var selectee = $.data(this, "selectable-item");
			selectee.$element.removeClass("ui-unselecting");
			selectee.unselecting = false;
			selectee.startselected = false;
			that._trigger("unselected", event, {
				unselected: selectee.element
			});
		});
		$(".ui-selecting", this.element[0]).each(function() {
			var selectee = $.data(this, "selectable-item");
			selectee.$element.removeClass("ui-selecting").addClass("ui-selected");
			selectee.selecting = false;
			selectee.selected = true;
			selectee.startselected = true;
			that._trigger("selected", event, {
				selected: selectee.element
			});
		});
		this._trigger("stop", event);

		this.helper.remove();

		return false;
	}

});

})($vic);
(function( $, undefined ) {

// number of pages in a slider
// (how many times can you page up/down to go through the whole range)
var numPages = 5;

$.widget( "ui.slider", $.ui.mouse, {
	version: "1.10.4",
	widgetEventPrefix: "slide",

	options: {
		animate: false,
		distance: 0,
		max: 100,
		min: 0,
		orientation: "horizontal",
		range: false,
		step: 1,
		value: 0,
		values: null,

		// callbacks
		change: null,
		slide: null,
		start: null,
		stop: null
	},

	_create: function() {
		this._keySliding = false;
		this._mouseSliding = false;
		this._animateOff = true;
		this._handleIndex = null;
		this._detectOrientation();
		this._mouseInit();

		this.element
			.addClass( "ui-slider" +
				" ui-slider-" + this.orientation +
				" ui-widget" +
				" ui-widget-content" +
				" ui-corner-all");

		this._refresh();
		this._setOption( "disabled", this.options.disabled );

		this._animateOff = false;
	},

	_refresh: function() {
		this._createRange();
		this._createHandles();
		this._setupEvents();
		this._refreshValue();
	},

	_createHandles: function() {
		var i, handleCount,
			options = this.options,
			existingHandles = this.element.find( ".ui-slider-handle" ).addClass( "ui-state-default ui-corner-all" ),
			handle = "<a class='ui-slider-handle ui-state-default ui-corner-all' href='#'></a>",
			handles = [];

		handleCount = ( options.values && options.values.length ) || 1;

		if ( existingHandles.length > handleCount ) {
			existingHandles.slice( handleCount ).remove();
			existingHandles = existingHandles.slice( 0, handleCount );
		}

		for ( i = existingHandles.length; i < handleCount; i++ ) {
			handles.push( handle );
		}

		this.handles = existingHandles.add( $( handles.join( "" ) ).appendTo( this.element ) );

		this.handle = this.handles.eq( 0 );

		this.handles.each(function( i ) {
			$( this ).data( "ui-slider-handle-index", i );
		});
	},

	_createRange: function() {
		var options = this.options,
			classes = "";

		if ( options.range ) {
			if ( options.range === true ) {
				if ( !options.values ) {
					options.values = [ this._valueMin(), this._valueMin() ];
				} else if ( options.values.length && options.values.length !== 2 ) {
					options.values = [ options.values[0], options.values[0] ];
				} else if ( $.isArray( options.values ) ) {
					options.values = options.values.slice(0);
				}
			}

			if ( !this.range || !this.range.length ) {
				this.range = $( "<div></div>" )
					.appendTo( this.element );

				classes = "ui-slider-range" +
				// note: this isn't the most fittingly semantic framework class for this element,
				// but worked best visually with a variety of themes
				" ui-widget-header ui-corner-all";
			} else {
				this.range.removeClass( "ui-slider-range-min ui-slider-range-max" )
					// Handle range switching from true to min/max
					.css({
						"left": "",
						"bottom": ""
					});
			}

			this.range.addClass( classes +
				( ( options.range === "min" || options.range === "max" ) ? " ui-slider-range-" + options.range : "" ) );
		} else {
			if ( this.range ) {
				this.range.remove();
			}
			this.range = null;
		}
	},

	_setupEvents: function() {
		var elements = this.handles.add( this.range ).filter( "a" );
		this._off( elements );
		this._on( elements, this._handleEvents );
		this._hoverable( elements );
		this._focusable( elements );
	},

	_destroy: function() {
		this.handles.remove();
		if ( this.range ) {
			this.range.remove();
		}

		this.element
			.removeClass( "ui-slider" +
				" ui-slider-horizontal" +
				" ui-slider-vertical" +
				" ui-widget" +
				" ui-widget-content" +
				" ui-corner-all" );

		this._mouseDestroy();
	},

	_mouseCapture: function( event ) {
		var position, normValue, distance, closestHandle, index, allowed, offset, mouseOverHandle,
			that = this,
			o = this.options;

		if ( o.disabled ) {
			return false;
		}

		this.elementSize = {
			width: this.element.outerWidth(),
			height: this.element.outerHeight()
		};
		this.elementOffset = this.element.offset();

		position = { x: event.pageX, y: event.pageY };
		normValue = this._normValueFromMouse( position );
		distance = this._valueMax() - this._valueMin() + 1;
		this.handles.each(function( i ) {
			var thisDistance = Math.abs( normValue - that.values(i) );
			if (( distance > thisDistance ) ||
				( distance === thisDistance &&
					(i === that._lastChangedValue || that.values(i) === o.min ))) {
				distance = thisDistance;
				closestHandle = $( this );
				index = i;
			}
		});

		allowed = this._start( event, index );
		if ( allowed === false ) {
			return false;
		}
		this._mouseSliding = true;

		this._handleIndex = index;

		closestHandle
			.addClass( "ui-state-active" )
			.focus();

		offset = closestHandle.offset();
		mouseOverHandle = !$( event.target ).parents().addBack().is( ".ui-slider-handle" );
		this._clickOffset = mouseOverHandle ? { left: 0, top: 0 } : {
			left: event.pageX - offset.left - ( closestHandle.width() / 2 ),
			top: event.pageY - offset.top -
				( closestHandle.height() / 2 ) -
				( parseInt( closestHandle.css("borderTopWidth"), 10 ) || 0 ) -
				( parseInt( closestHandle.css("borderBottomWidth"), 10 ) || 0) +
				( parseInt( closestHandle.css("marginTop"), 10 ) || 0)
		};

		if ( !this.handles.hasClass( "ui-state-hover" ) ) {
			this._slide( event, index, normValue );
		}
		this._animateOff = true;
		return true;
	},

	_mouseStart: function() {
		return true;
	},

	_mouseDrag: function( event ) {
		var position = { x: event.pageX, y: event.pageY },
			normValue = this._normValueFromMouse( position );

		this._slide( event, this._handleIndex, normValue );

		return false;
	},

	_mouseStop: function( event ) {
		this.handles.removeClass( "ui-state-active" );
		this._mouseSliding = false;

		this._stop( event, this._handleIndex );
		this._change( event, this._handleIndex );

		this._handleIndex = null;
		this._clickOffset = null;
		this._animateOff = false;

		return false;
	},

	_detectOrientation: function() {
		this.orientation = ( this.options.orientation === "vertical" ) ? "vertical" : "horizontal";
	},

	_normValueFromMouse: function( position ) {
		var pixelTotal,
			pixelMouse,
			percentMouse,
			valueTotal,
			valueMouse;

		if ( this.orientation === "horizontal" ) {
			pixelTotal = this.elementSize.width;
			pixelMouse = position.x - this.elementOffset.left - ( this._clickOffset ? this._clickOffset.left : 0 );
		} else {
			pixelTotal = this.elementSize.height;
			pixelMouse = position.y - this.elementOffset.top - ( this._clickOffset ? this._clickOffset.top : 0 );
		}

		percentMouse = ( pixelMouse / pixelTotal );
		if ( percentMouse > 1 ) {
			percentMouse = 1;
		}
		if ( percentMouse < 0 ) {
			percentMouse = 0;
		}
		if ( this.orientation === "vertical" ) {
			percentMouse = 1 - percentMouse;
		}

		valueTotal = this._valueMax() - this._valueMin();
		valueMouse = this._valueMin() + percentMouse * valueTotal;

		return this._trimAlignValue( valueMouse );
	},

	_start: function( event, index ) {
		var uiHash = {
			handle: this.handles[ index ],
			value: this.value()
		};
		if ( this.options.values && this.options.values.length ) {
			uiHash.value = this.values( index );
			uiHash.values = this.values();
		}
		return this._trigger( "start", event, uiHash );
	},

	_slide: function( event, index, newVal ) {
		var otherVal,
			newValues,
			allowed;

		if ( this.options.values && this.options.values.length ) {
			otherVal = this.values( index ? 0 : 1 );

			if ( ( this.options.values.length === 2 && this.options.range === true ) &&
					( ( index === 0 && newVal > otherVal) || ( index === 1 && newVal < otherVal ) )
				) {
				newVal = otherVal;
			}

			if ( newVal !== this.values( index ) ) {
				newValues = this.values();
				newValues[ index ] = newVal;
				// A slide can be canceled by returning false from the slide callback
				allowed = this._trigger( "slide", event, {
					handle: this.handles[ index ],
					value: newVal,
					values: newValues
				} );
				otherVal = this.values( index ? 0 : 1 );
				if ( allowed !== false ) {
					this.values( index, newVal );
				}
			}
		} else {
			if ( newVal !== this.value() ) {
				// A slide can be canceled by returning false from the slide callback
				allowed = this._trigger( "slide", event, {
					handle: this.handles[ index ],
					value: newVal
				} );
				if ( allowed !== false ) {
					this.value( newVal );
				}
			}
		}
	},

	_stop: function( event, index ) {
		var uiHash = {
			handle: this.handles[ index ],
			value: this.value()
		};
		if ( this.options.values && this.options.values.length ) {
			uiHash.value = this.values( index );
			uiHash.values = this.values();
		}

		this._trigger( "stop", event, uiHash );
	},

	_change: function( event, index ) {
		if ( !this._keySliding && !this._mouseSliding ) {
			var uiHash = {
				handle: this.handles[ index ],
				value: this.value()
			};
			if ( this.options.values && this.options.values.length ) {
				uiHash.value = this.values( index );
				uiHash.values = this.values();
			}

			//store the last changed value index for reference when handles overlap
			this._lastChangedValue = index;

			this._trigger( "change", event, uiHash );
		}
	},

	value: function( newValue ) {
		if ( arguments.length ) {
			this.options.value = this._trimAlignValue( newValue );
			this._refreshValue();
			this._change( null, 0 );
			return;
		}

		return this._value();
	},

	values: function( index, newValue ) {
		var vals,
			newValues,
			i;

		if ( arguments.length > 1 ) {
			this.options.values[ index ] = this._trimAlignValue( newValue );
			this._refreshValue();
			this._change( null, index );
			return;
		}

		if ( arguments.length ) {
			if ( $.isArray( arguments[ 0 ] ) ) {
				vals = this.options.values;
				newValues = arguments[ 0 ];
				for ( i = 0; i < vals.length; i += 1 ) {
					vals[ i ] = this._trimAlignValue( newValues[ i ] );
					this._change( null, i );
				}
				this._refreshValue();
			} else {
				if ( this.options.values && this.options.values.length ) {
					return this._values( index );
				} else {
					return this.value();
				}
			}
		} else {
			return this._values();
		}
	},

	_setOption: function( key, value ) {
		var i,
			valsLength = 0;

		if ( key === "range" && this.options.range === true ) {
			if ( value === "min" ) {
				this.options.value = this._values( 0 );
				this.options.values = null;
			} else if ( value === "max" ) {
				this.options.value = this._values( this.options.values.length-1 );
				this.options.values = null;
			}
		}

		if ( $.isArray( this.options.values ) ) {
			valsLength = this.options.values.length;
		}

		$.Widget.prototype._setOption.apply( this, arguments );

		switch ( key ) {
			case "orientation":
				this._detectOrientation();
				this.element
					.removeClass( "ui-slider-horizontal ui-slider-vertical" )
					.addClass( "ui-slider-" + this.orientation );
				this._refreshValue();
				break;
			case "value":
				this._animateOff = true;
				this._refreshValue();
				this._change( null, 0 );
				this._animateOff = false;
				break;
			case "values":
				this._animateOff = true;
				this._refreshValue();
				for ( i = 0; i < valsLength; i += 1 ) {
					this._change( null, i );
				}
				this._animateOff = false;
				break;
			case "min":
			case "max":
				this._animateOff = true;
				this._refreshValue();
				this._animateOff = false;
				break;
			case "range":
				this._animateOff = true;
				this._refresh();
				this._animateOff = false;
				break;
		}
	},

	//internal value getter
	// _value() returns value trimmed by min and max, aligned by step
	_value: function() {
		var val = this.options.value;
		val = this._trimAlignValue( val );

		return val;
	},

	//internal values getter
	// _values() returns array of values trimmed by min and max, aligned by step
	// _values( index ) returns single value trimmed by min and max, aligned by step
	_values: function( index ) {
		var val,
			vals,
			i;

		if ( arguments.length ) {
			val = this.options.values[ index ];
			val = this._trimAlignValue( val );

			return val;
		} else if ( this.options.values && this.options.values.length ) {
			// .slice() creates a copy of the array
			// this copy gets trimmed by min and max and then returned
			vals = this.options.values.slice();
			for ( i = 0; i < vals.length; i+= 1) {
				vals[ i ] = this._trimAlignValue( vals[ i ] );
			}

			return vals;
		} else {
			return [];
		}
	},

	// returns the step-aligned value that val is closest to, between (inclusive) min and max
	_trimAlignValue: function( val ) {
		if ( val <= this._valueMin() ) {
			return this._valueMin();
		}
		if ( val >= this._valueMax() ) {
			return this._valueMax();
		}
		var step = ( this.options.step > 0 ) ? this.options.step : 1,
			valModStep = (val - this._valueMin()) % step,
			alignValue = val - valModStep;

		if ( Math.abs(valModStep) * 2 >= step ) {
			alignValue += ( valModStep > 0 ) ? step : ( -step );
		}

		// Since JavaScript has problems with large floats, round
		// the final value to 5 digits after the decimal point (see #4124)
		return parseFloat( alignValue.toFixed(5) );
	},

	_valueMin: function() {
		return this.options.min;
	},

	_valueMax: function() {
		return this.options.max;
	},

	_refreshValue: function() {
		var lastValPercent, valPercent, value, valueMin, valueMax,
			oRange = this.options.range,
			o = this.options,
			that = this,
			animate = ( !this._animateOff ) ? o.animate : false,
			_set = {};

		if ( this.options.values && this.options.values.length ) {
			this.handles.each(function( i ) {
				valPercent = ( that.values(i) - that._valueMin() ) / ( that._valueMax() - that._valueMin() ) * 100;
				_set[ that.orientation === "horizontal" ? "left" : "bottom" ] = valPercent + "%";
				$( this ).stop( 1, 1 )[ animate ? "animate" : "css" ]( _set, o.animate );
				if ( that.options.range === true ) {
					if ( that.orientation === "horizontal" ) {
						if ( i === 0 ) {
							that.range.stop( 1, 1 )[ animate ? "animate" : "css" ]( { left: valPercent + "%" }, o.animate );
						}
						if ( i === 1 ) {
							that.range[ animate ? "animate" : "css" ]( { width: ( valPercent - lastValPercent ) + "%" }, { queue: false, duration: o.animate } );
						}
					} else {
						if ( i === 0 ) {
							that.range.stop( 1, 1 )[ animate ? "animate" : "css" ]( { bottom: ( valPercent ) + "%" }, o.animate );
						}
						if ( i === 1 ) {
							that.range[ animate ? "animate" : "css" ]( { height: ( valPercent - lastValPercent ) + "%" }, { queue: false, duration: o.animate } );
						}
					}
				}
				lastValPercent = valPercent;
			});
		} else {
			value = this.value();
			valueMin = this._valueMin();
			valueMax = this._valueMax();
			valPercent = ( valueMax !== valueMin ) ?
					( value - valueMin ) / ( valueMax - valueMin ) * 100 :
					0;
			_set[ this.orientation === "horizontal" ? "left" : "bottom" ] = valPercent + "%";
			this.handle.stop( 1, 1 )[ animate ? "animate" : "css" ]( _set, o.animate );

			if ( oRange === "min" && this.orientation === "horizontal" ) {
				this.range.stop( 1, 1 )[ animate ? "animate" : "css" ]( { width: valPercent + "%" }, o.animate );
			}
			if ( oRange === "max" && this.orientation === "horizontal" ) {
				this.range[ animate ? "animate" : "css" ]( { width: ( 100 - valPercent ) + "%" }, { queue: false, duration: o.animate } );
			}
			if ( oRange === "min" && this.orientation === "vertical" ) {
				this.range.stop( 1, 1 )[ animate ? "animate" : "css" ]( { height: valPercent + "%" }, o.animate );
			}
			if ( oRange === "max" && this.orientation === "vertical" ) {
				this.range[ animate ? "animate" : "css" ]( { height: ( 100 - valPercent ) + "%" }, { queue: false, duration: o.animate } );
			}
		}
	},

	_handleEvents: {
		keydown: function( event ) {
			var allowed, curVal, newVal, step,
				index = $( event.target ).data( "ui-slider-handle-index" );

			switch ( event.keyCode ) {
				case $.ui.keyCode.HOME:
				case $.ui.keyCode.END:
				case $.ui.keyCode.PAGE_UP:
				case $.ui.keyCode.PAGE_DOWN:
				case $.ui.keyCode.UP:
				case $.ui.keyCode.RIGHT:
				case $.ui.keyCode.DOWN:
				case $.ui.keyCode.LEFT:
					event.preventDefault();
					if ( !this._keySliding ) {
						this._keySliding = true;
						$( event.target ).addClass( "ui-state-active" );
						allowed = this._start( event, index );
						if ( allowed === false ) {
							return;
						}
					}
					break;
			}

			step = this.options.step;
			if ( this.options.values && this.options.values.length ) {
				curVal = newVal = this.values( index );
			} else {
				curVal = newVal = this.value();
			}

			switch ( event.keyCode ) {
				case $.ui.keyCode.HOME:
					newVal = this._valueMin();
					break;
				case $.ui.keyCode.END:
					newVal = this._valueMax();
					break;
				case $.ui.keyCode.PAGE_UP:
					newVal = this._trimAlignValue( curVal + ( (this._valueMax() - this._valueMin()) / numPages ) );
					break;
				case $.ui.keyCode.PAGE_DOWN:
					newVal = this._trimAlignValue( curVal - ( (this._valueMax() - this._valueMin()) / numPages ) );
					break;
				case $.ui.keyCode.UP:
				case $.ui.keyCode.RIGHT:
					if ( curVal === this._valueMax() ) {
						return;
					}
					newVal = this._trimAlignValue( curVal + step );
					break;
				case $.ui.keyCode.DOWN:
				case $.ui.keyCode.LEFT:
					if ( curVal === this._valueMin() ) {
						return;
					}
					newVal = this._trimAlignValue( curVal - step );
					break;
			}

			this._slide( event, index, newVal );
		},
		click: function( event ) {
			event.preventDefault();
		},
		keyup: function( event ) {
			var index = $( event.target ).data( "ui-slider-handle-index" );

			if ( this._keySliding ) {
				this._keySliding = false;
				this._stop( event, index );
				this._change( event, index );
				$( event.target ).removeClass( "ui-state-active" );
			}
		}
	}

});

}($vic));
(function( $, undefined ) {

function isOverAxis( x, reference, size ) {
	return ( x > reference ) && ( x < ( reference + size ) );
}

function isFloating(item) {
	return (/left|right/).test(item.css("float")) || (/inline|table-cell/).test(item.css("display"));
}

$.widget("ui.sortable", $.ui.mouse, {
	version: "1.10.4",
	widgetEventPrefix: "sort",
	ready: false,
	options: {
		appendTo: "parent",
		axis: false,
		connectWith: false,
		containment: false,
		cursor: "auto",
		cursorAt: false,
		dropOnEmpty: true,
		forcePlaceholderSize: false,
		forceHelperSize: false,
		grid: false,
		handle: false,
		helper: "original",
		items: "> *",
		opacity: false,
		placeholder: false,
		revert: false,
		scroll: true,
		scrollSensitivity: 20,
		scrollSpeed: 20,
		scope: "default",
		tolerance: "intersect",
		zIndex: 1000,

		// callbacks
		activate: null,
		beforeStop: null,
		change: null,
		deactivate: null,
		out: null,
		over: null,
		receive: null,
		remove: null,
		sort: null,
		start: null,
		stop: null,
		update: null
	},
	_create: function() {

		var o = this.options;
		this.containerCache = {};
		this.element.addClass("ui-sortable");

		//Get the items
		this.refresh();

		//Let's determine if the items are being displayed horizontally
		this.floating = this.items.length ? o.axis === "x" || isFloating(this.items[0].item) : false;

		//Let's determine the parent's offset
		this.offset = this.element.offset();

		//Initialize mouse events for interaction
		this._mouseInit();

		//We're ready to go
		this.ready = true;

	},

	_destroy: function() {
		this.element
			.removeClass("ui-sortable ui-sortable-disabled");
		this._mouseDestroy();

		for ( var i = this.items.length - 1; i >= 0; i-- ) {
			this.items[i].item.removeData(this.widgetName + "-item");
		}

		return this;
	},

	_setOption: function(key, value){
		if ( key === "disabled" ) {
			this.options[ key ] = value;

			this.widget().toggleClass( "ui-sortable-disabled", !!value );
		} else {
			// Don't call widget base _setOption for disable as it adds ui-state-disabled class
			$.Widget.prototype._setOption.apply(this, arguments);
		}
	},

	_mouseCapture: function(event, overrideHandle) {
		var currentItem = null,
			validHandle = false,
			that = this;

		if (this.reverting) {
			return false;
		}

		if(this.options.disabled || this.options.type === "static") {
			return false;
		}

		//We have to refresh the items data once first
		this._refreshItems(event);

		//Find out if the clicked node (or one of its parents) is a actual item in this.items
		$(event.target).parents().each(function() {
			if($.data(this, that.widgetName + "-item") === that) {
				currentItem = $(this);
				return false;
			}
		});
		if($.data(event.target, that.widgetName + "-item") === that) {
			currentItem = $(event.target);
		}

		if(!currentItem) {
			return false;
		}
		if(this.options.handle && !overrideHandle) {
			$(this.options.handle, currentItem).find("*").addBack().each(function() {
				if(this === event.target) {
					validHandle = true;
				}
			});
			if(!validHandle) {
				return false;
			}
		}

		this.currentItem = currentItem;
		this._removeCurrentsFromItems();
		return true;

	},

	_mouseStart: function(event, overrideHandle, noActivation) {

		var i, body,
			o = this.options;

		this.currentContainer = this;

		//We only need to call refreshPositions, because the refreshItems call has been moved to mouseCapture
		this.refreshPositions();

		//Create and append the visible helper
		this.helper = this._createHelper(event);

		//Cache the helper size
		this._cacheHelperProportions();

		/*
		 * - Position generation -
		 * This block generates everything position related - it's the core of draggables.
		 */

		//Cache the margins of the original element
		this._cacheMargins();

		//Get the next scrolling parent
		this.scrollParent = this.helper.scrollParent();

		//The element's absolute position on the page minus margins
		this.offset = this.currentItem.offset();
		this.offset = {
			top: this.offset.top - this.margins.top,
			left: this.offset.left - this.margins.left
		};

		$.extend(this.offset, {
			click: { //Where the click happened, relative to the element
				left: event.pageX - this.offset.left,
				top: event.pageY - this.offset.top
			},
			parent: this._getParentOffset(),
			relative: this._getRelativeOffset() //This is a relative to absolute position minus the actual position calculation - only used for relative positioned helper
		});

		// Only after we got the offset, we can change the helper's position to absolute
		// TODO: Still need to figure out a way to make relative sorting possible
		this.helper.css("position", "absolute");
		this.cssPosition = this.helper.css("position");

		//Generate the original position
		this.originalPosition = this._generatePosition(event);
		this.originalPageX = event.pageX;
		this.originalPageY = event.pageY;

		//Adjust the mouse offset relative to the helper if "cursorAt" is supplied
		(o.cursorAt && this._adjustOffsetFromHelper(o.cursorAt));

		//Cache the former DOM position
		this.domPosition = { prev: this.currentItem.prev()[0], parent: this.currentItem.parent()[0] };

		//If the helper is not the original, hide the original so it's not playing any role during the drag, won't cause anything bad this way
		if(this.helper[0] !== this.currentItem[0]) {
			this.currentItem.hide();
		}

		//Create the placeholder
		this._createPlaceholder();

		//Set a containment if given in the options
		if(o.containment) {
			this._setContainment();
		}

		if( o.cursor && o.cursor !== "auto" ) { // cursor option
			body = this.document.find( "body" );

			// support: IE
			this.storedCursor = body.css( "cursor" );
			body.css( "cursor", o.cursor );

			this.storedStylesheet = $( "<style>*{ cursor: "+o.cursor+" !important; }</style>" ).appendTo( body );
		}

		if(o.opacity) { // opacity option
			if (this.helper.css("opacity")) {
				this._storedOpacity = this.helper.css("opacity");
			}
			this.helper.css("opacity", o.opacity);
		}

		if(o.zIndex) { // zIndex option
			if (this.helper.css("zIndex")) {
				this._storedZIndex = this.helper.css("zIndex");
			}
			this.helper.css("zIndex", o.zIndex);
		}

		//Prepare scrolling
		if(this.scrollParent[0] !== document && this.scrollParent[0].tagName !== "HTML") {
			this.overflowOffset = this.scrollParent.offset();
		}

		//Call callbacks
		this._trigger("start", event, this._uiHash());

		//Recache the helper size
		if(!this._preserveHelperProportions) {
			this._cacheHelperProportions();
		}


		//Post "activate" events to possible containers
		if( !noActivation ) {
			for ( i = this.containers.length - 1; i >= 0; i-- ) {
				this.containers[ i ]._trigger( "activate", event, this._uiHash( this ) );
			}
		}

		//Prepare possible droppables
		if($.ui.ddmanager) {
			$.ui.ddmanager.current = this;
		}

		if ($.ui.ddmanager && !o.dropBehaviour) {
			$.ui.ddmanager.prepareOffsets(this, event);
		}

		this.dragging = true;

		this.helper.addClass("ui-sortable-helper");
		this._mouseDrag(event); //Execute the drag once - this causes the helper not to be visible before getting its correct position
		return true;

	},

	_mouseDrag: function(event) {
		var i, item, itemElement, intersection,
			o = this.options,
			scrolled = false;

		//Compute the helpers position
		this.position = this._generatePosition(event);
		this.positionAbs = this._convertPositionTo("absolute");

		if (!this.lastPositionAbs) {
			this.lastPositionAbs = this.positionAbs;
		}

		//Do scrolling
		if(this.options.scroll) {
			if(this.scrollParent[0] !== document && this.scrollParent[0].tagName !== "HTML") {

				if((this.overflowOffset.top + this.scrollParent[0].offsetHeight) - event.pageY < o.scrollSensitivity) {
					this.scrollParent[0].scrollTop = scrolled = this.scrollParent[0].scrollTop + o.scrollSpeed;
				} else if(event.pageY - this.overflowOffset.top < o.scrollSensitivity) {
					this.scrollParent[0].scrollTop = scrolled = this.scrollParent[0].scrollTop - o.scrollSpeed;
				}

				if((this.overflowOffset.left + this.scrollParent[0].offsetWidth) - event.pageX < o.scrollSensitivity) {
					this.scrollParent[0].scrollLeft = scrolled = this.scrollParent[0].scrollLeft + o.scrollSpeed;
				} else if(event.pageX - this.overflowOffset.left < o.scrollSensitivity) {
					this.scrollParent[0].scrollLeft = scrolled = this.scrollParent[0].scrollLeft - o.scrollSpeed;
				}

			} else {

				if(event.pageY - $(document).scrollTop() < o.scrollSensitivity) {
					scrolled = $(document).scrollTop($(document).scrollTop() - o.scrollSpeed);
				} else if($(window).height() - (event.pageY - $(document).scrollTop()) < o.scrollSensitivity) {
					scrolled = $(document).scrollTop($(document).scrollTop() + o.scrollSpeed);
				}

				if(event.pageX - $(document).scrollLeft() < o.scrollSensitivity) {
					scrolled = $(document).scrollLeft($(document).scrollLeft() - o.scrollSpeed);
				} else if($(window).width() - (event.pageX - $(document).scrollLeft()) < o.scrollSensitivity) {
					scrolled = $(document).scrollLeft($(document).scrollLeft() + o.scrollSpeed);
				}

			}

			if(scrolled !== false && $.ui.ddmanager && !o.dropBehaviour) {
				$.ui.ddmanager.prepareOffsets(this, event);
			}
		}

		//Regenerate the absolute position used for position checks
		this.positionAbs = this._convertPositionTo("absolute");

		//Set the helper position
		if(!this.options.axis || this.options.axis !== "y") {
			this.helper[0].style.left = this.position.left+"px";
		}
		if(!this.options.axis || this.options.axis !== "x") {
			this.helper[0].style.top = this.position.top+"px";
		}

		//Rearrange
		for (i = this.items.length - 1; i >= 0; i--) {

			//Cache variables and intersection, continue if no intersection
			item = this.items[i];
			itemElement = item.item[0];
			intersection = this._intersectsWithPointer(item);
			if (!intersection) {
				continue;
			}

			// Only put the placeholder inside the current Container, skip all
			// items from other containers. This works because when moving
			// an item from one container to another the
			// currentContainer is switched before the placeholder is moved.
			//
			// Without this, moving items in "sub-sortables" can cause
			// the placeholder to jitter beetween the outer and inner container.
			if (item.instance !== this.currentContainer) {
				continue;
			}

			// cannot intersect with itself
			// no useless actions that have been done before
			// no action if the item moved is the parent of the item checked
			if (itemElement !== this.currentItem[0] &&
				this.placeholder[intersection === 1 ? "next" : "prev"]()[0] !== itemElement &&
				!$.contains(this.placeholder[0], itemElement) &&
				(this.options.type === "semi-dynamic" ? !$.contains(this.element[0], itemElement) : true)
			) {

				this.direction = intersection === 1 ? "down" : "up";

				if (this.options.tolerance === "pointer" || this._intersectsWithSides(item)) {
					this._rearrange(event, item);
				} else {
					break;
				}

				this._trigger("change", event, this._uiHash());
				break;
			}
		}

		//Post events to containers
		this._contactContainers(event);

		//Interconnect with droppables
		if($.ui.ddmanager) {
			$.ui.ddmanager.drag(this, event);
		}

		//Call callbacks
		this._trigger("sort", event, this._uiHash());

		this.lastPositionAbs = this.positionAbs;
		return false;

	},

	_mouseStop: function(event, noPropagation) {

		if(!event) {
			return;
		}

		//If we are using droppables, inform the manager about the drop
		if ($.ui.ddmanager && !this.options.dropBehaviour) {
			$.ui.ddmanager.drop(this, event);
		}

		if(this.options.revert) {
			var that = this,
				cur = this.placeholder.offset(),
				axis = this.options.axis,
				animation = {};

			if ( !axis || axis === "x" ) {
				animation.left = cur.left - this.offset.parent.left - this.margins.left + (this.offsetParent[0] === document.body ? 0 : this.offsetParent[0].scrollLeft);
			}
			if ( !axis || axis === "y" ) {
				animation.top = cur.top - this.offset.parent.top - this.margins.top + (this.offsetParent[0] === document.body ? 0 : this.offsetParent[0].scrollTop);
			}
			this.reverting = true;
			$(this.helper).animate( animation, parseInt(this.options.revert, 10) || 500, function() {
				that._clear(event);
			});
		} else {
			this._clear(event, noPropagation);
		}

		return false;

	},

	cancel: function() {

		if(this.dragging) {

			this._mouseUp({ target: null });

			if(this.options.helper === "original") {
				this.currentItem.css(this._storedCSS).removeClass("ui-sortable-helper");
			} else {
				this.currentItem.show();
			}

			//Post deactivating events to containers
			for (var i = this.containers.length - 1; i >= 0; i--){
				this.containers[i]._trigger("deactivate", null, this._uiHash(this));
				if(this.containers[i].containerCache.over) {
					this.containers[i]._trigger("out", null, this._uiHash(this));
					this.containers[i].containerCache.over = 0;
				}
			}

		}

		if (this.placeholder) {
			//$(this.placeholder[0]).remove(); would have been the jQuery way - unfortunately, it unbinds ALL events from the original node!
			if(this.placeholder[0].parentNode) {
				this.placeholder[0].parentNode.removeChild(this.placeholder[0]);
			}
			if(this.options.helper !== "original" && this.helper && this.helper[0].parentNode) {
				this.helper.remove();
			}

			$.extend(this, {
				helper: null,
				dragging: false,
				reverting: false,
				_noFinalSort: null
			});

			if(this.domPosition.prev) {
				$(this.domPosition.prev).after(this.currentItem);
			} else {
				$(this.domPosition.parent).prepend(this.currentItem);
			}
		}

		return this;

	},

	serialize: function(o) {

		var items = this._getItemsAsjQuery(o && o.connected),
			str = [];
		o = o || {};

		$(items).each(function() {
			var res = ($(o.item || this).attr(o.attribute || "id") || "").match(o.expression || (/(.+)[\-=_](.+)/));
			if (res) {
				str.push((o.key || res[1]+"[]")+"="+(o.key && o.expression ? res[1] : res[2]));
			}
		});

		if(!str.length && o.key) {
			str.push(o.key + "=");
		}

		return str.join("&");

	},

	toArray: function(o) {

		var items = this._getItemsAsjQuery(o && o.connected),
			ret = [];

		o = o || {};

		items.each(function() { ret.push($(o.item || this).attr(o.attribute || "id") || ""); });
		return ret;

	},

	/* Be careful with the following core functions */
	_intersectsWith: function(item) {

		var x1 = this.positionAbs.left,
			x2 = x1 + this.helperProportions.width,
			y1 = this.positionAbs.top,
			y2 = y1 + this.helperProportions.height,
			l = item.left,
			r = l + item.width,
			t = item.top,
			b = t + item.height,
			dyClick = this.offset.click.top,
			dxClick = this.offset.click.left,
			isOverElementHeight = ( this.options.axis === "x" ) || ( ( y1 + dyClick ) > t && ( y1 + dyClick ) < b ),
			isOverElementWidth = ( this.options.axis === "y" ) || ( ( x1 + dxClick ) > l && ( x1 + dxClick ) < r ),
			isOverElement = isOverElementHeight && isOverElementWidth;

		if ( this.options.tolerance === "pointer" ||
			this.options.forcePointerForContainers ||
			(this.options.tolerance !== "pointer" && this.helperProportions[this.floating ? "width" : "height"] > item[this.floating ? "width" : "height"])
		) {
			return isOverElement;
		} else {

			return (l < x1 + (this.helperProportions.width / 2) && // Right Half
				x2 - (this.helperProportions.width / 2) < r && // Left Half
				t < y1 + (this.helperProportions.height / 2) && // Bottom Half
				y2 - (this.helperProportions.height / 2) < b ); // Top Half

		}
	},

	_intersectsWithPointer: function(item) {

		var isOverElementHeight = (this.options.axis === "x") || isOverAxis(this.positionAbs.top + this.offset.click.top, item.top, item.height),
			isOverElementWidth = (this.options.axis === "y") || isOverAxis(this.positionAbs.left + this.offset.click.left, item.left, item.width),
			isOverElement = isOverElementHeight && isOverElementWidth,
			verticalDirection = this._getDragVerticalDirection(),
			horizontalDirection = this._getDragHorizontalDirection();

		if (!isOverElement) {
			return false;
		}

		return this.floating ?
			( ((horizontalDirection && horizontalDirection === "right") || verticalDirection === "down") ? 2 : 1 )
			: ( verticalDirection && (verticalDirection === "down" ? 2 : 1) );

	},

	_intersectsWithSides: function(item) {

		var isOverBottomHalf = isOverAxis(this.positionAbs.top + this.offset.click.top, item.top + (item.height/2), item.height),
			isOverRightHalf = isOverAxis(this.positionAbs.left + this.offset.click.left, item.left + (item.width/2), item.width),
			verticalDirection = this._getDragVerticalDirection(),
			horizontalDirection = this._getDragHorizontalDirection();

		if (this.floating && horizontalDirection) {
			return ((horizontalDirection === "right" && isOverRightHalf) || (horizontalDirection === "left" && !isOverRightHalf));
		} else {
			return verticalDirection && ((verticalDirection === "down" && isOverBottomHalf) || (verticalDirection === "up" && !isOverBottomHalf));
		}

	},

	_getDragVerticalDirection: function() {
		var delta = this.positionAbs.top - this.lastPositionAbs.top;
		return delta !== 0 && (delta > 0 ? "down" : "up");
	},

	_getDragHorizontalDirection: function() {
		var delta = this.positionAbs.left - this.lastPositionAbs.left;
		return delta !== 0 && (delta > 0 ? "right" : "left");
	},

	refresh: function(event) {
		this._refreshItems(event);
		this.refreshPositions();
		return this;
	},

	_connectWith: function() {
		var options = this.options;
		return options.connectWith.constructor === String ? [options.connectWith] : options.connectWith;
	},

	_getItemsAsjQuery: function(connected) {

		var i, j, cur, inst,
			items = [],
			queries = [],
			connectWith = this._connectWith();

		if(connectWith && connected) {
			for (i = connectWith.length - 1; i >= 0; i--){
				cur = $(connectWith[i]);
				for ( j = cur.length - 1; j >= 0; j--){
					inst = $.data(cur[j], this.widgetFullName);
					if(inst && inst !== this && !inst.options.disabled) {
						queries.push([$.isFunction(inst.options.items) ? inst.options.items.call(inst.element) : $(inst.options.items, inst.element).not(".ui-sortable-helper").not(".ui-sortable-placeholder"), inst]);
					}
				}
			}
		}

		queries.push([$.isFunction(this.options.items) ? this.options.items.call(this.element, null, { options: this.options, item: this.currentItem }) : $(this.options.items, this.element).not(".ui-sortable-helper").not(".ui-sortable-placeholder"), this]);

		function addItems() {
			items.push( this );
		}
		for (i = queries.length - 1; i >= 0; i--){
			queries[i][0].each( addItems );
		}

		return $(items);

	},

	_removeCurrentsFromItems: function() {

		var list = this.currentItem.find(":data(" + this.widgetName + "-item)");

		this.items = $.grep(this.items, function (item) {
			for (var j=0; j < list.length; j++) {
				if(list[j] === item.item[0]) {
					return false;
				}
			}
			return true;
		});

	},

	_refreshItems: function(event) {

		this.items = [];
		this.containers = [this];

		var i, j, cur, inst, targetData, _queries, item, queriesLength,
			items = this.items,
			queries = [[$.isFunction(this.options.items) ? this.options.items.call(this.element[0], event, { item: this.currentItem }) : $(this.options.items, this.element), this]],
			connectWith = this._connectWith();

		if(connectWith && this.ready) { //Shouldn't be run the first time through due to massive slow-down
			for (i = connectWith.length - 1; i >= 0; i--){
				cur = $(connectWith[i]);
				for (j = cur.length - 1; j >= 0; j--){
					inst = $.data(cur[j], this.widgetFullName);
					if(inst && inst !== this && !inst.options.disabled) {
						queries.push([$.isFunction(inst.options.items) ? inst.options.items.call(inst.element[0], event, { item: this.currentItem }) : $(inst.options.items, inst.element), inst]);
						this.containers.push(inst);
					}
				}
			}
		}

		for (i = queries.length - 1; i >= 0; i--) {
			targetData = queries[i][1];
			_queries = queries[i][0];

			for (j=0, queriesLength = _queries.length; j < queriesLength; j++) {
				item = $(_queries[j]);

				item.data(this.widgetName + "-item", targetData); // Data for target checking (mouse manager)

				items.push({
					item: item,
					instance: targetData,
					width: 0, height: 0,
					left: 0, top: 0
				});
			}
		}

	},

	refreshPositions: function(fast) {

		//This has to be redone because due to the item being moved out/into the offsetParent, the offsetParent's position will change
		if(this.offsetParent && this.helper) {
			this.offset.parent = this._getParentOffset();
		}

		var i, item, t, p;

		for (i = this.items.length - 1; i >= 0; i--){
			item = this.items[i];

			//We ignore calculating positions of all connected containers when we're not over them
			if(item.instance !== this.currentContainer && this.currentContainer && item.item[0] !== this.currentItem[0]) {
				continue;
			}

			t = this.options.toleranceElement ? $(this.options.toleranceElement, item.item) : item.item;

			if (!fast) {
				item.width = t.outerWidth();
				item.height = t.outerHeight();
			}

			p = t.offset();
			item.left = p.left;
			item.top = p.top;
		}

		if(this.options.custom && this.options.custom.refreshContainers) {
			this.options.custom.refreshContainers.call(this);
		} else {
			for (i = this.containers.length - 1; i >= 0; i--){
				p = this.containers[i].element.offset();
				this.containers[i].containerCache.left = p.left;
				this.containers[i].containerCache.top = p.top;
				this.containers[i].containerCache.width	= this.containers[i].element.outerWidth();
				this.containers[i].containerCache.height = this.containers[i].element.outerHeight();
			}
		}

		return this;
	},

	_createPlaceholder: function(that) {
		that = that || this;
		var className,
			o = that.options;

		if(!o.placeholder || o.placeholder.constructor === String) {
			className = o.placeholder;
			o.placeholder = {
				element: function() {

					var nodeName = that.currentItem[0].nodeName.toLowerCase(),
						element = $( "<" + nodeName + ">", that.document[0] )
							.addClass(className || that.currentItem[0].className+" ui-sortable-placeholder")
							.removeClass("ui-sortable-helper");

					if ( nodeName === "tr" ) {
						that.currentItem.children().each(function() {
							$( "<td>&#160;</td>", that.document[0] )
								.attr( "colspan", $( this ).attr( "colspan" ) || 1 )
								.appendTo( element );
						});
					} else if ( nodeName === "img" ) {
						element.attr( "src", that.currentItem.attr( "src" ) );
					}

					if ( !className ) {
						element.css( "visibility", "hidden" );
					}

					return element;
				},
				update: function(container, p) {

					// 1. If a className is set as 'placeholder option, we don't force sizes - the class is responsible for that
					// 2. The option 'forcePlaceholderSize can be enabled to force it even if a class name is specified
					if(className && !o.forcePlaceholderSize) {
						return;
					}

					//If the element doesn't have a actual height by itself (without styles coming from a stylesheet), it receives the inline height from the dragged item
					if(!p.height()) { p.height(that.currentItem.innerHeight() - parseInt(that.currentItem.css("paddingTop")||0, 10) - parseInt(that.currentItem.css("paddingBottom")||0, 10)); }
					if(!p.width()) { p.width(that.currentItem.innerWidth() - parseInt(that.currentItem.css("paddingLeft")||0, 10) - parseInt(that.currentItem.css("paddingRight")||0, 10)); }
				}
			};
		}

		//Create the placeholder
		that.placeholder = $(o.placeholder.element.call(that.element, that.currentItem));

		//Append it after the actual current item
		that.currentItem.after(that.placeholder);

		//Update the size of the placeholder (TODO: Logic to fuzzy, see line 316/317)
		o.placeholder.update(that, that.placeholder);

	},

	_contactContainers: function(event) {
		var i, j, dist, itemWithLeastDistance, posProperty, sizeProperty, base, cur, nearBottom, floating,
			innermostContainer = null,
			innermostIndex = null;

		// get innermost container that intersects with item
		for (i = this.containers.length - 1; i >= 0; i--) {

			// never consider a container that's located within the item itself
			if($.contains(this.currentItem[0], this.containers[i].element[0])) {
				continue;
			}

			if(this._intersectsWith(this.containers[i].containerCache)) {

				// if we've already found a container and it's more "inner" than this, then continue
				if(innermostContainer && $.contains(this.containers[i].element[0], innermostContainer.element[0])) {
					continue;
				}

				innermostContainer = this.containers[i];
				innermostIndex = i;

			} else {
				// container doesn't intersect. trigger "out" event if necessary
				if(this.containers[i].containerCache.over) {
					this.containers[i]._trigger("out", event, this._uiHash(this));
					this.containers[i].containerCache.over = 0;
				}
			}

		}

		// if no intersecting containers found, return
		if(!innermostContainer) {
			return;
		}

		// move the item into the container if it's not there already
		if(this.containers.length === 1) {
			if (!this.containers[innermostIndex].containerCache.over) {
				this.containers[innermostIndex]._trigger("over", event, this._uiHash(this));
				this.containers[innermostIndex].containerCache.over = 1;
			}
		} else {

			//When entering a new container, we will find the item with the least distance and append our item near it
			dist = 10000;
			itemWithLeastDistance = null;
			floating = innermostContainer.floating || isFloating(this.currentItem);
			posProperty = floating ? "left" : "top";
			sizeProperty = floating ? "width" : "height";
			base = this.positionAbs[posProperty] + this.offset.click[posProperty];
			for (j = this.items.length - 1; j >= 0; j--) {
				if(!$.contains(this.containers[innermostIndex].element[0], this.items[j].item[0])) {
					continue;
				}
				if(this.items[j].item[0] === this.currentItem[0]) {
					continue;
				}
				if (floating && !isOverAxis(this.positionAbs.top + this.offset.click.top, this.items[j].top, this.items[j].height)) {
					continue;
				}
				cur = this.items[j].item.offset()[posProperty];
				nearBottom = false;
				if(Math.abs(cur - base) > Math.abs(cur + this.items[j][sizeProperty] - base)){
					nearBottom = true;
					cur += this.items[j][sizeProperty];
				}

				if(Math.abs(cur - base) < dist) {
					dist = Math.abs(cur - base); itemWithLeastDistance = this.items[j];
					this.direction = nearBottom ? "up": "down";
				}
			}

			//Check if dropOnEmpty is enabled
			if(!itemWithLeastDistance && !this.options.dropOnEmpty) {
				return;
			}

			if(this.currentContainer === this.containers[innermostIndex]) {
				return;
			}

			itemWithLeastDistance ? this._rearrange(event, itemWithLeastDistance, null, true) : this._rearrange(event, null, this.containers[innermostIndex].element, true);
			this._trigger("change", event, this._uiHash());
			this.containers[innermostIndex]._trigger("change", event, this._uiHash(this));
			this.currentContainer = this.containers[innermostIndex];

			//Update the placeholder
			this.options.placeholder.update(this.currentContainer, this.placeholder);

			this.containers[innermostIndex]._trigger("over", event, this._uiHash(this));
			this.containers[innermostIndex].containerCache.over = 1;
		}


	},

	_createHelper: function(event) {

		var o = this.options,
			helper = $.isFunction(o.helper) ? $(o.helper.apply(this.element[0], [event, this.currentItem])) : (o.helper === "clone" ? this.currentItem.clone() : this.currentItem);

		//Add the helper to the DOM if that didn't happen already
		if(!helper.parents("body").length) {
			$(o.appendTo !== "parent" ? o.appendTo : this.currentItem[0].parentNode)[0].appendChild(helper[0]);
		}

		if(helper[0] === this.currentItem[0]) {
			this._storedCSS = { width: this.currentItem[0].style.width, height: this.currentItem[0].style.height, position: this.currentItem.css("position"), top: this.currentItem.css("top"), left: this.currentItem.css("left") };
		}

		if(!helper[0].style.width || o.forceHelperSize) {
			helper.width(this.currentItem.width());
		}
		if(!helper[0].style.height || o.forceHelperSize) {
			helper.height(this.currentItem.height());
		}

		return helper;

	},

	_adjustOffsetFromHelper: function(obj) {
		if (typeof obj === "string") {
			obj = obj.split(" ");
		}
		if ($.isArray(obj)) {
			obj = {left: +obj[0], top: +obj[1] || 0};
		}
		if ("left" in obj) {
			this.offset.click.left = obj.left + this.margins.left;
		}
		if ("right" in obj) {
			this.offset.click.left = this.helperProportions.width - obj.right + this.margins.left;
		}
		if ("top" in obj) {
			this.offset.click.top = obj.top + this.margins.top;
		}
		if ("bottom" in obj) {
			this.offset.click.top = this.helperProportions.height - obj.bottom + this.margins.top;
		}
	},

	_getParentOffset: function() {


		//Get the offsetParent and cache its position
		this.offsetParent = this.helper.offsetParent();
		var po = this.offsetParent.offset();

		// This is a special case where we need to modify a offset calculated on start, since the following happened:
		// 1. The position of the helper is absolute, so it's position is calculated based on the next positioned parent
		// 2. The actual offset parent is a child of the scroll parent, and the scroll parent isn't the document, which means that
		//    the scroll is included in the initial calculation of the offset of the parent, and never recalculated upon drag
		if(this.cssPosition === "absolute" && this.scrollParent[0] !== document && $.contains(this.scrollParent[0], this.offsetParent[0])) {
			po.left += this.scrollParent.scrollLeft();
			po.top += this.scrollParent.scrollTop();
		}

		// This needs to be actually done for all browsers, since pageX/pageY includes this information
		// with an ugly IE fix
		if( this.offsetParent[0] === document.body || (this.offsetParent[0].tagName && this.offsetParent[0].tagName.toLowerCase() === "html" && $.ui.ie)) {
			po = { top: 0, left: 0 };
		}

		return {
			top: po.top + (parseInt(this.offsetParent.css("borderTopWidth"),10) || 0),
			left: po.left + (parseInt(this.offsetParent.css("borderLeftWidth"),10) || 0)
		};

	},

	_getRelativeOffset: function() {

		if(this.cssPosition === "relative") {
			var p = this.currentItem.position();
			return {
				top: p.top - (parseInt(this.helper.css("top"),10) || 0) + this.scrollParent.scrollTop(),
				left: p.left - (parseInt(this.helper.css("left"),10) || 0) + this.scrollParent.scrollLeft()
			};
		} else {
			return { top: 0, left: 0 };
		}

	},

	_cacheMargins: function() {
		this.margins = {
			left: (parseInt(this.currentItem.css("marginLeft"),10) || 0),
			top: (parseInt(this.currentItem.css("marginTop"),10) || 0)
		};
	},

	_cacheHelperProportions: function() {
		this.helperProportions = {
			width: this.helper.outerWidth(),
			height: this.helper.outerHeight()
		};
	},

	_setContainment: function() {

		var ce, co, over,
			o = this.options;
		if(o.containment === "parent") {
			o.containment = this.helper[0].parentNode;
		}
		if(o.containment === "document" || o.containment === "window") {
			this.containment = [
				0 - this.offset.relative.left - this.offset.parent.left,
				0 - this.offset.relative.top - this.offset.parent.top,
				$(o.containment === "document" ? document : window).width() - this.helperProportions.width - this.margins.left,
				($(o.containment === "document" ? document : window).height() || document.body.parentNode.scrollHeight) - this.helperProportions.height - this.margins.top
			];
		}

		if(!(/^(document|window|parent)$/).test(o.containment)) {
			ce = $(o.containment)[0];
			co = $(o.containment).offset();
			over = ($(ce).css("overflow") !== "hidden");

			this.containment = [
				co.left + (parseInt($(ce).css("borderLeftWidth"),10) || 0) + (parseInt($(ce).css("paddingLeft"),10) || 0) - this.margins.left,
				co.top + (parseInt($(ce).css("borderTopWidth"),10) || 0) + (parseInt($(ce).css("paddingTop"),10) || 0) - this.margins.top,
				co.left+(over ? Math.max(ce.scrollWidth,ce.offsetWidth) : ce.offsetWidth) - (parseInt($(ce).css("borderLeftWidth"),10) || 0) - (parseInt($(ce).css("paddingRight"),10) || 0) - this.helperProportions.width - this.margins.left,
				co.top+(over ? Math.max(ce.scrollHeight,ce.offsetHeight) : ce.offsetHeight) - (parseInt($(ce).css("borderTopWidth"),10) || 0) - (parseInt($(ce).css("paddingBottom"),10) || 0) - this.helperProportions.height - this.margins.top
			];
		}

	},

	_convertPositionTo: function(d, pos) {

		if(!pos) {
			pos = this.position;
		}
		var mod = d === "absolute" ? 1 : -1,
			scroll = this.cssPosition === "absolute" && !(this.scrollParent[0] !== document && $.contains(this.scrollParent[0], this.offsetParent[0])) ? this.offsetParent : this.scrollParent,
			scrollIsRootNode = (/(html|body)/i).test(scroll[0].tagName);

		return {
			top: (
				pos.top	+																// The absolute mouse position
				this.offset.relative.top * mod +										// Only for relative positioned nodes: Relative offset from element to offset parent
				this.offset.parent.top * mod -											// The offsetParent's offset without borders (offset + border)
				( ( this.cssPosition === "fixed" ? -this.scrollParent.scrollTop() : ( scrollIsRootNode ? 0 : scroll.scrollTop() ) ) * mod)
			),
			left: (
				pos.left +																// The absolute mouse position
				this.offset.relative.left * mod +										// Only for relative positioned nodes: Relative offset from element to offset parent
				this.offset.parent.left * mod	-										// The offsetParent's offset without borders (offset + border)
				( ( this.cssPosition === "fixed" ? -this.scrollParent.scrollLeft() : scrollIsRootNode ? 0 : scroll.scrollLeft() ) * mod)
			)
		};

	},

	_generatePosition: function(event) {

		var top, left,
			o = this.options,
			pageX = event.pageX,
			pageY = event.pageY,
			scroll = this.cssPosition === "absolute" && !(this.scrollParent[0] !== document && $.contains(this.scrollParent[0], this.offsetParent[0])) ? this.offsetParent : this.scrollParent, scrollIsRootNode = (/(html|body)/i).test(scroll[0].tagName);

		// This is another very weird special case that only happens for relative elements:
		// 1. If the css position is relative
		// 2. and the scroll parent is the document or similar to the offset parent
		// we have to refresh the relative offset during the scroll so there are no jumps
		if(this.cssPosition === "relative" && !(this.scrollParent[0] !== document && this.scrollParent[0] !== this.offsetParent[0])) {
			this.offset.relative = this._getRelativeOffset();
		}

		/*
		 * - Position constraining -
		 * Constrain the position to a mix of grid, containment.
		 */

		if(this.originalPosition) { //If we are not dragging yet, we won't check for options

			if(this.containment) {
				if(event.pageX - this.offset.click.left < this.containment[0]) {
					pageX = this.containment[0] + this.offset.click.left;
				}
				if(event.pageY - this.offset.click.top < this.containment[1]) {
					pageY = this.containment[1] + this.offset.click.top;
				}
				if(event.pageX - this.offset.click.left > this.containment[2]) {
					pageX = this.containment[2] + this.offset.click.left;
				}
				if(event.pageY - this.offset.click.top > this.containment[3]) {
					pageY = this.containment[3] + this.offset.click.top;
				}
			}

			if(o.grid) {
				top = this.originalPageY + Math.round((pageY - this.originalPageY) / o.grid[1]) * o.grid[1];
				pageY = this.containment ? ( (top - this.offset.click.top >= this.containment[1] && top - this.offset.click.top <= this.containment[3]) ? top : ((top - this.offset.click.top >= this.containment[1]) ? top - o.grid[1] : top + o.grid[1])) : top;

				left = this.originalPageX + Math.round((pageX - this.originalPageX) / o.grid[0]) * o.grid[0];
				pageX = this.containment ? ( (left - this.offset.click.left >= this.containment[0] && left - this.offset.click.left <= this.containment[2]) ? left : ((left - this.offset.click.left >= this.containment[0]) ? left - o.grid[0] : left + o.grid[0])) : left;
			}

		}

		return {
			top: (
				pageY -																// The absolute mouse position
				this.offset.click.top -													// Click offset (relative to the element)
				this.offset.relative.top	-											// Only for relative positioned nodes: Relative offset from element to offset parent
				this.offset.parent.top +												// The offsetParent's offset without borders (offset + border)
				( ( this.cssPosition === "fixed" ? -this.scrollParent.scrollTop() : ( scrollIsRootNode ? 0 : scroll.scrollTop() ) ))
			),
			left: (
				pageX -																// The absolute mouse position
				this.offset.click.left -												// Click offset (relative to the element)
				this.offset.relative.left	-											// Only for relative positioned nodes: Relative offset from element to offset parent
				this.offset.parent.left +												// The offsetParent's offset without borders (offset + border)
				( ( this.cssPosition === "fixed" ? -this.scrollParent.scrollLeft() : scrollIsRootNode ? 0 : scroll.scrollLeft() ))
			)
		};

	},

	_rearrange: function(event, i, a, hardRefresh) {

		a ? a[0].appendChild(this.placeholder[0]) : i.item[0].parentNode.insertBefore(this.placeholder[0], (this.direction === "down" ? i.item[0] : i.item[0].nextSibling));

		//Various things done here to improve the performance:
		// 1. we create a setTimeout, that calls refreshPositions
		// 2. on the instance, we have a counter variable, that get's higher after every append
		// 3. on the local scope, we copy the counter variable, and check in the timeout, if it's still the same
		// 4. this lets only the last addition to the timeout stack through
		this.counter = this.counter ? ++this.counter : 1;
		var counter = this.counter;

		this._delay(function() {
			if(counter === this.counter) {
				this.refreshPositions(!hardRefresh); //Precompute after each DOM insertion, NOT on mousemove
			}
		});

	},

	_clear: function(event, noPropagation) {

		this.reverting = false;
		// We delay all events that have to be triggered to after the point where the placeholder has been removed and
		// everything else normalized again
		var i,
			delayedTriggers = [];

		// We first have to update the dom position of the actual currentItem
		// Note: don't do it if the current item is already removed (by a user), or it gets reappended (see #4088)
		if(!this._noFinalSort && this.currentItem.parent().length) {
			this.placeholder.before(this.currentItem);
		}
		this._noFinalSort = null;

		if(this.helper[0] === this.currentItem[0]) {
			for(i in this._storedCSS) {
				if(this._storedCSS[i] === "auto" || this._storedCSS[i] === "static") {
					this._storedCSS[i] = "";
				}
			}
			this.currentItem.css(this._storedCSS).removeClass("ui-sortable-helper");
		} else {
			this.currentItem.show();
		}

		if(this.fromOutside && !noPropagation) {
			delayedTriggers.push(function(event) { this._trigger("receive", event, this._uiHash(this.fromOutside)); });
		}
		if((this.fromOutside || this.domPosition.prev !== this.currentItem.prev().not(".ui-sortable-helper")[0] || this.domPosition.parent !== this.currentItem.parent()[0]) && !noPropagation) {
			delayedTriggers.push(function(event) { this._trigger("update", event, this._uiHash()); }); //Trigger update callback if the DOM position has changed
		}

		// Check if the items Container has Changed and trigger appropriate
		// events.
		if (this !== this.currentContainer) {
			if(!noPropagation) {
				delayedTriggers.push(function(event) { this._trigger("remove", event, this._uiHash()); });
				delayedTriggers.push((function(c) { return function(event) { c._trigger("receive", event, this._uiHash(this)); };  }).call(this, this.currentContainer));
				delayedTriggers.push((function(c) { return function(event) { c._trigger("update", event, this._uiHash(this));  }; }).call(this, this.currentContainer));
			}
		}


		//Post events to containers
		function delayEvent( type, instance, container ) {
			return function( event ) {
				container._trigger( type, event, instance._uiHash( instance ) );
			};
		}
		for (i = this.containers.length - 1; i >= 0; i--){
			if (!noPropagation) {
				delayedTriggers.push( delayEvent( "deactivate", this, this.containers[ i ] ) );
			}
			if(this.containers[i].containerCache.over) {
				delayedTriggers.push( delayEvent( "out", this, this.containers[ i ] ) );
				this.containers[i].containerCache.over = 0;
			}
		}

		//Do what was originally in plugins
		if ( this.storedCursor ) {
			this.document.find( "body" ).css( "cursor", this.storedCursor );
			this.storedStylesheet.remove();
		}
		if(this._storedOpacity) {
			this.helper.css("opacity", this._storedOpacity);
		}
		if(this._storedZIndex) {
			this.helper.css("zIndex", this._storedZIndex === "auto" ? "" : this._storedZIndex);
		}

		this.dragging = false;
		if(this.cancelHelperRemoval) {
			if(!noPropagation) {
				this._trigger("beforeStop", event, this._uiHash());
				for (i=0; i < delayedTriggers.length; i++) {
					delayedTriggers[i].call(this, event);
				} //Trigger all delayed events
				this._trigger("stop", event, this._uiHash());
			}

			this.fromOutside = false;
			return false;
		}

		if(!noPropagation) {
			this._trigger("beforeStop", event, this._uiHash());
		}

		//$(this.placeholder[0]).remove(); would have been the jQuery way - unfortunately, it unbinds ALL events from the original node!
		this.placeholder[0].parentNode.removeChild(this.placeholder[0]);

		if(this.helper[0] !== this.currentItem[0]) {
			this.helper.remove();
		}
		this.helper = null;

		if(!noPropagation) {
			for (i=0; i < delayedTriggers.length; i++) {
				delayedTriggers[i].call(this, event);
			} //Trigger all delayed events
			this._trigger("stop", event, this._uiHash());
		}

		this.fromOutside = false;
		return true;

	},

	_trigger: function() {
		if ($.Widget.prototype._trigger.apply(this, arguments) === false) {
			this.cancel();
		}
	},

	_uiHash: function(_inst) {
		var inst = _inst || this;
		return {
			helper: inst.helper,
			placeholder: inst.placeholder || $([]),
			position: inst.position,
			originalPosition: inst.originalPosition,
			offset: inst.positionAbs,
			item: inst.currentItem,
			sender: _inst ? _inst.element : null
		};
	}

});

})($vic);
(function( $ ) {

function modifier( fn ) {
	return function() {
		var previous = this.element.val();
		fn.apply( this, arguments );
		this._refresh();
		if ( previous !== this.element.val() ) {
			this._trigger( "change" );
		}
	};
}

$.widget( "ui.spinner", {
	version: "1.10.4",
	defaultElement: "<input>",
	widgetEventPrefix: "spin",
	options: {
		culture: null,
		icons: {
			down: "ui-icon-triangle-1-s",
			up: "ui-icon-triangle-1-n"
		},
		incremental: true,
		max: null,
		min: null,
		numberFormat: null,
		page: 10,
		step: 1,

		change: null,
		spin: null,
		start: null,
		stop: null
	},

	_create: function() {
		// handle string values that need to be parsed
		this._setOption( "max", this.options.max );
		this._setOption( "min", this.options.min );
		this._setOption( "step", this.options.step );

		// Only format if there is a value, prevents the field from being marked
		// as invalid in Firefox, see #9573.
		if ( this.value() !== "" ) {
			// Format the value, but don't constrain.
			this._value( this.element.val(), true );
		}

		this._draw();
		this._on( this._events );
		this._refresh();

		// turning off autocomplete prevents the browser from remembering the
		// value when navigating through history, so we re-enable autocomplete
		// if the page is unloaded before the widget is destroyed. #7790
		this._on( this.window, {
			beforeunload: function() {
				this.element.removeAttr( "autocomplete" );
			}
		});
	},

	_getCreateOptions: function() {
		var options = {},
			element = this.element;

		$.each( [ "min", "max", "step" ], function( i, option ) {
			var value = element.attr( option );
			if ( value !== undefined && value.length ) {
				options[ option ] = value;
			}
		});

		return options;
	},

	_events: {
		keydown: function( event ) {
			if ( this._start( event ) && this._keydown( event ) ) {
				event.preventDefault();
			}
		},
		keyup: "_stop",
		focus: function() {
			this.previous = this.element.val();
		},
		blur: function( event ) {
			if ( this.cancelBlur ) {
				delete this.cancelBlur;
				return;
			}

			this._stop();
			this._refresh();
			if ( this.previous !== this.element.val() ) {
				this._trigger( "change", event );
			}
		},
		mousewheel: function( event, delta ) {
			if ( !delta ) {
				return;
			}
			if ( !this.spinning && !this._start( event ) ) {
				return false;
			}

			this._spin( (delta > 0 ? 1 : -1) * this.options.step, event );
			clearTimeout( this.mousewheelTimer );
			this.mousewheelTimer = this._delay(function() {
				if ( this.spinning ) {
					this._stop( event );
				}
			}, 100 );
			event.preventDefault();
		},
		"mousedown .ui-spinner-button": function( event ) {
			var previous;

			// We never want the buttons to have focus; whenever the user is
			// interacting with the spinner, the focus should be on the input.
			// If the input is focused then this.previous is properly set from
			// when the input first received focus. If the input is not focused
			// then we need to set this.previous based on the value before spinning.
			previous = this.element[0] === this.document[0].activeElement ?
				this.previous : this.element.val();
			function checkFocus() {
				var isActive = this.element[0] === this.document[0].activeElement;
				if ( !isActive ) {
					this.element.focus();
					this.previous = previous;
					// support: IE
					// IE sets focus asynchronously, so we need to check if focus
					// moved off of the input because the user clicked on the button.
					this._delay(function() {
						this.previous = previous;
					});
				}
			}

			// ensure focus is on (or stays on) the text field
			event.preventDefault();
			checkFocus.call( this );

			// support: IE
			// IE doesn't prevent moving focus even with event.preventDefault()
			// so we set a flag to know when we should ignore the blur event
			// and check (again) if focus moved off of the input.
			this.cancelBlur = true;
			this._delay(function() {
				delete this.cancelBlur;
				checkFocus.call( this );
			});

			if ( this._start( event ) === false ) {
				return;
			}

			this._repeat( null, $( event.currentTarget ).hasClass( "ui-spinner-up" ) ? 1 : -1, event );
		},
		"mouseup .ui-spinner-button": "_stop",
		"mouseenter .ui-spinner-button": function( event ) {
			// button will add ui-state-active if mouse was down while mouseleave and kept down
			if ( !$( event.currentTarget ).hasClass( "ui-state-active" ) ) {
				return;
			}

			if ( this._start( event ) === false ) {
				return false;
			}
			this._repeat( null, $( event.currentTarget ).hasClass( "ui-spinner-up" ) ? 1 : -1, event );
		},
		// TODO: do we really want to consider this a stop?
		// shouldn't we just stop the repeater and wait until mouseup before
		// we trigger the stop event?
		"mouseleave .ui-spinner-button": "_stop"
	},

	_draw: function() {
		var uiSpinner = this.uiSpinner = this.element
			.addClass( "ui-spinner-input" )
			.attr( "autocomplete", "off" )
			.wrap( this._uiSpinnerHtml() )
			.parent()
				// add buttons
				.append( this._buttonHtml() );

		this.element.attr( "role", "spinbutton" );

		// button bindings
		this.buttons = uiSpinner.find( ".ui-spinner-button" )
			.attr( "tabIndex", -1 )
			.button()
			.removeClass( "ui-corner-all" );

		// IE 6 doesn't understand height: 50% for the buttons
		// unless the wrapper has an explicit height
		if ( this.buttons.height() > Math.ceil( uiSpinner.height() * 0.5 ) &&
				uiSpinner.height() > 0 ) {
			uiSpinner.height( uiSpinner.height() );
		}

		// disable spinner if element was already disabled
		if ( this.options.disabled ) {
			this.disable();
		}
	},

	_keydown: function( event ) {
		var options = this.options,
			keyCode = $.ui.keyCode;

		switch ( event.keyCode ) {
		case keyCode.UP:
			this._repeat( null, 1, event );
			return true;
		case keyCode.DOWN:
			this._repeat( null, -1, event );
			return true;
		case keyCode.PAGE_UP:
			this._repeat( null, options.page, event );
			return true;
		case keyCode.PAGE_DOWN:
			this._repeat( null, -options.page, event );
			return true;
		}

		return false;
	},

	_uiSpinnerHtml: function() {
		return "<span class='ui-spinner ui-widget ui-widget-content ui-corner-all'></span>";
	},

	_buttonHtml: function() {
		return "" +
			"<a class='ui-spinner-button ui-spinner-up ui-corner-tr'>" +
				"<span class='ui-icon " + this.options.icons.up + "'>&#9650;</span>" +
			"</a>" +
			"<a class='ui-spinner-button ui-spinner-down ui-corner-br'>" +
				"<span class='ui-icon " + this.options.icons.down + "'>&#9660;</span>" +
			"</a>";
	},

	_start: function( event ) {
		if ( !this.spinning && this._trigger( "start", event ) === false ) {
			return false;
		}

		if ( !this.counter ) {
			this.counter = 1;
		}
		this.spinning = true;
		return true;
	},

	_repeat: function( i, steps, event ) {
		i = i || 500;

		clearTimeout( this.timer );
		this.timer = this._delay(function() {
			this._repeat( 40, steps, event );
		}, i );

		this._spin( steps * this.options.step, event );
	},

	_spin: function( step, event ) {
		var value = this.value() || 0;

		if ( !this.counter ) {
			this.counter = 1;
		}

		value = this._adjustValue( value + step * this._increment( this.counter ) );

		if ( !this.spinning || this._trigger( "spin", event, { value: value } ) !== false) {
			this._value( value );
			this.counter++;
		}
	},

	_increment: function( i ) {
		var incremental = this.options.incremental;

		if ( incremental ) {
			return $.isFunction( incremental ) ?
				incremental( i ) :
				Math.floor( i*i*i/50000 - i*i/500 + 17*i/200 + 1 );
		}

		return 1;
	},

	_precision: function() {
		var precision = this._precisionOf( this.options.step );
		if ( this.options.min !== null ) {
			precision = Math.max( precision, this._precisionOf( this.options.min ) );
		}
		return precision;
	},

	_precisionOf: function( num ) {
		var str = num.toString(),
			decimal = str.indexOf( "." );
		return decimal === -1 ? 0 : str.length - decimal - 1;
	},

	_adjustValue: function( value ) {
		var base, aboveMin,
			options = this.options;

		// make sure we're at a valid step
		// - find out where we are relative to the base (min or 0)
		base = options.min !== null ? options.min : 0;
		aboveMin = value - base;
		// - round to the nearest step
		aboveMin = Math.round(aboveMin / options.step) * options.step;
		// - rounding is based on 0, so adjust back to our base
		value = base + aboveMin;

		// fix precision from bad JS floating point math
		value = parseFloat( value.toFixed( this._precision() ) );

		// clamp the value
		if ( options.max !== null && value > options.max) {
			return options.max;
		}
		if ( options.min !== null && value < options.min ) {
			return options.min;
		}

		return value;
	},

	_stop: function( event ) {
		if ( !this.spinning ) {
			return;
		}

		clearTimeout( this.timer );
		clearTimeout( this.mousewheelTimer );
		this.counter = 0;
		this.spinning = false;
		this._trigger( "stop", event );
	},

	_setOption: function( key, value ) {
		if ( key === "culture" || key === "numberFormat" ) {
			var prevValue = this._parse( this.element.val() );
			this.options[ key ] = value;
			this.element.val( this._format( prevValue ) );
			return;
		}

		if ( key === "max" || key === "min" || key === "step" ) {
			if ( typeof value === "string" ) {
				value = this._parse( value );
			}
		}
		if ( key === "icons" ) {
			this.buttons.first().find( ".ui-icon" )
				.removeClass( this.options.icons.up )
				.addClass( value.up );
			this.buttons.last().find( ".ui-icon" )
				.removeClass( this.options.icons.down )
				.addClass( value.down );
		}

		this._super( key, value );

		if ( key === "disabled" ) {
			if ( value ) {
				this.element.prop( "disabled", true );
				this.buttons.button( "disable" );
			} else {
				this.element.prop( "disabled", false );
				this.buttons.button( "enable" );
			}
		}
	},

	_setOptions: modifier(function( options ) {
		this._super( options );
		this._value( this.element.val() );
	}),

	_parse: function( val ) {
		if ( typeof val === "string" && val !== "" ) {
			val = window.Globalize && this.options.numberFormat ?
				Globalize.parseFloat( val, 10, this.options.culture ) : +val;
		}
		return val === "" || isNaN( val ) ? null : val;
	},

	_format: function( value ) {
		if ( value === "" ) {
			return "";
		}
		return window.Globalize && this.options.numberFormat ?
			Globalize.format( value, this.options.numberFormat, this.options.culture ) :
			value;
	},

	_refresh: function() {
		this.element.attr({
			"aria-valuemin": this.options.min,
			"aria-valuemax": this.options.max,
			// TODO: what should we do with values that can't be parsed?
			"aria-valuenow": this._parse( this.element.val() )
		});
	},

	// update the value without triggering change
	_value: function( value, allowAny ) {
		var parsed;
		if ( value !== "" ) {
			parsed = this._parse( value );
			if ( parsed !== null ) {
				if ( !allowAny ) {
					parsed = this._adjustValue( parsed );
				}
				value = this._format( parsed );
			}
		}
		this.element.val( value );
		this._refresh();
	},

	_destroy: function() {
		this.element
			.removeClass( "ui-spinner-input" )
			.prop( "disabled", false )
			.removeAttr( "autocomplete" )
			.removeAttr( "role" )
			.removeAttr( "aria-valuemin" )
			.removeAttr( "aria-valuemax" )
			.removeAttr( "aria-valuenow" );
		this.uiSpinner.replaceWith( this.element );
	},

	stepUp: modifier(function( steps ) {
		this._stepUp( steps );
	}),
	_stepUp: function( steps ) {
		if ( this._start() ) {
			this._spin( (steps || 1) * this.options.step );
			this._stop();
		}
	},

	stepDown: modifier(function( steps ) {
		this._stepDown( steps );
	}),
	_stepDown: function( steps ) {
		if ( this._start() ) {
			this._spin( (steps || 1) * -this.options.step );
			this._stop();
		}
	},

	pageUp: modifier(function( pages ) {
		this._stepUp( (pages || 1) * this.options.page );
	}),

	pageDown: modifier(function( pages ) {
		this._stepDown( (pages || 1) * this.options.page );
	}),

	value: function( newVal ) {
		if ( !arguments.length ) {
			return this._parse( this.element.val() );
		}
		modifier( this._value ).call( this, newVal );
	},

	widget: function() {
		return this.uiSpinner;
	}
});

}( $vic ) );
(function( $, undefined ) {

var tabId = 0,
	rhash = /#.*$/;

function getNextTabId() {
	return ++tabId;
}

function isLocal( anchor ) {
	// support: IE7
	// IE7 doesn't normalize the href property when set via script (#9317)
	anchor = anchor.cloneNode( false );

	return anchor.hash.length > 1 &&
		decodeURIComponent( anchor.href.replace( rhash, "" ) ) ===
			decodeURIComponent( location.href.replace( rhash, "" ) );
}

$.widget( "ui.tabs", {
	version: "1.10.4",
	delay: 300,
	options: {
		active: null,
		collapsible: false,
		event: "click",
		heightStyle: "content",
		hide: null,
		show: null,

		// callbacks
		activate: null,
		beforeActivate: null,
		beforeLoad: null,
		load: null
	},

	_create: function() {
		var that = this,
			options = this.options;

		this.running = false;

		this.element
			.addClass( "ui-tabs ui-widget ui-widget-content ui-corner-all" )
			.toggleClass( "ui-tabs-collapsible", options.collapsible )
			// Prevent users from focusing disabled tabs via click
			.delegate( ".ui-tabs-nav > li", "mousedown" + this.eventNamespace, function( event ) {
				if ( $( this ).is( ".ui-state-disabled" ) ) {
					event.preventDefault();
				}
			})
			// support: IE <9
			// Preventing the default action in mousedown doesn't prevent IE
			// from focusing the element, so if the anchor gets focused, blur.
			// We don't have to worry about focusing the previously focused
			// element since clicking on a non-focusable element should focus
			// the body anyway.
			.delegate( ".ui-tabs-anchor", "focus" + this.eventNamespace, function() {
				if ( $( this ).closest( "li" ).is( ".ui-state-disabled" ) ) {
					this.blur();
				}
			});

		this._processTabs();
		options.active = this._initialActive();

		// Take disabling tabs via class attribute from HTML
		// into account and update option properly.
		if ( $.isArray( options.disabled ) ) {
			options.disabled = $.unique( options.disabled.concat(
				$.map( this.tabs.filter( ".ui-state-disabled" ), function( li ) {
					return that.tabs.index( li );
				})
			) ).sort();
		}

		// check for length avoids error when initializing empty list
		if ( this.options.active !== false && this.anchors.length ) {
			this.active = this._findActive( options.active );
		} else {
			this.active = $();
		}

		this._refresh();

		if ( this.active.length ) {
			this.load( options.active );
		}
	},

	_initialActive: function() {
		var active = this.options.active,
			collapsible = this.options.collapsible,
			locationHash = location.hash.substring( 1 );

		if ( active === null ) {
			// check the fragment identifier in the URL
			if ( locationHash ) {
				this.tabs.each(function( i, tab ) {
					if ( $( tab ).attr( "aria-controls" ) === locationHash ) {
						active = i;
						return false;
					}
				});
			}

			// check for a tab marked active via a class
			if ( active === null ) {
				active = this.tabs.index( this.tabs.filter( ".ui-tabs-active" ) );
			}

			// no active tab, set to false
			if ( active === null || active === -1 ) {
				active = this.tabs.length ? 0 : false;
			}
		}

		// handle numbers: negative, out of range
		if ( active !== false ) {
			active = this.tabs.index( this.tabs.eq( active ) );
			if ( active === -1 ) {
				active = collapsible ? false : 0;
			}
		}

		// don't allow collapsible: false and active: false
		if ( !collapsible && active === false && this.anchors.length ) {
			active = 0;
		}

		return active;
	},

	_getCreateEventData: function() {
		return {
			tab: this.active,
			panel: !this.active.length ? $() : this._getPanelForTab( this.active )
		};
	},

	_tabKeydown: function( event ) {
		var focusedTab = $( this.document[0].activeElement ).closest( "li" ),
			selectedIndex = this.tabs.index( focusedTab ),
			goingForward = true;

		if ( this._handlePageNav( event ) ) {
			return;
		}

		switch ( event.keyCode ) {
			case $.ui.keyCode.RIGHT:
			case $.ui.keyCode.DOWN:
				selectedIndex++;
				break;
			case $.ui.keyCode.UP:
			case $.ui.keyCode.LEFT:
				goingForward = false;
				selectedIndex--;
				break;
			case $.ui.keyCode.END:
				selectedIndex = this.anchors.length - 1;
				break;
			case $.ui.keyCode.HOME:
				selectedIndex = 0;
				break;
			case $.ui.keyCode.SPACE:
				// Activate only, no collapsing
				event.preventDefault();
				clearTimeout( this.activating );
				this._activate( selectedIndex );
				return;
			case $.ui.keyCode.ENTER:
				// Toggle (cancel delayed activation, allow collapsing)
				event.preventDefault();
				clearTimeout( this.activating );
				// Determine if we should collapse or activate
				this._activate( selectedIndex === this.options.active ? false : selectedIndex );
				return;
			default:
				return;
		}

		// Focus the appropriate tab, based on which key was pressed
		event.preventDefault();
		clearTimeout( this.activating );
		selectedIndex = this._focusNextTab( selectedIndex, goingForward );

		// Navigating with control key will prevent automatic activation
		if ( !event.ctrlKey ) {
			// Update aria-selected immediately so that AT think the tab is already selected.
			// Otherwise AT may confuse the user by stating that they need to activate the tab,
			// but the tab will already be activated by the time the announcement finishes.
			focusedTab.attr( "aria-selected", "false" );
			this.tabs.eq( selectedIndex ).attr( "aria-selected", "true" );

			this.activating = this._delay(function() {
				this.option( "active", selectedIndex );
			}, this.delay );
		}
	},

	_panelKeydown: function( event ) {
		if ( this._handlePageNav( event ) ) {
			return;
		}

		// Ctrl+up moves focus to the current tab
		if ( event.ctrlKey && event.keyCode === $.ui.keyCode.UP ) {
			event.preventDefault();
			this.active.focus();
		}
	},

	// Alt+page up/down moves focus to the previous/next tab (and activates)
	_handlePageNav: function( event ) {
		if ( event.altKey && event.keyCode === $.ui.keyCode.PAGE_UP ) {
			this._activate( this._focusNextTab( this.options.active - 1, false ) );
			return true;
		}
		if ( event.altKey && event.keyCode === $.ui.keyCode.PAGE_DOWN ) {
			this._activate( this._focusNextTab( this.options.active + 1, true ) );
			return true;
		}
	},

	_findNextTab: function( index, goingForward ) {
		var lastTabIndex = this.tabs.length - 1;

		function constrain() {
			if ( index > lastTabIndex ) {
				index = 0;
			}
			if ( index < 0 ) {
				index = lastTabIndex;
			}
			return index;
		}

		while ( $.inArray( constrain(), this.options.disabled ) !== -1 ) {
			index = goingForward ? index + 1 : index - 1;
		}

		return index;
	},

	_focusNextTab: function( index, goingForward ) {
		index = this._findNextTab( index, goingForward );
		this.tabs.eq( index ).focus();
		return index;
	},

	_setOption: function( key, value ) {
		if ( key === "active" ) {
			// _activate() will handle invalid values and update this.options
			this._activate( value );
			return;
		}

		if ( key === "disabled" ) {
			// don't use the widget factory's disabled handling
			this._setupDisabled( value );
			return;
		}

		this._super( key, value);

		if ( key === "collapsible" ) {
			this.element.toggleClass( "ui-tabs-collapsible", value );
			// Setting collapsible: false while collapsed; open first panel
			if ( !value && this.options.active === false ) {
				this._activate( 0 );
			}
		}

		if ( key === "event" ) {
			this._setupEvents( value );
		}

		if ( key === "heightStyle" ) {
			this._setupHeightStyle( value );
		}
	},

	_tabId: function( tab ) {
		return tab.attr( "aria-controls" ) || "ui-tabs-" + getNextTabId();
	},

	_sanitizeSelector: function( hash ) {
		return hash ? hash.replace( /[!"$%&'()*+,.\/:;<=>?@\[\]\^`{|}~]/g, "\\$&" ) : "";
	},

	refresh: function() {
		var options = this.options,
			lis = this.tablist.children( ":has(a[href])" );

		// get disabled tabs from class attribute from HTML
		// this will get converted to a boolean if needed in _refresh()
		options.disabled = $.map( lis.filter( ".ui-state-disabled" ), function( tab ) {
			return lis.index( tab );
		});

		this._processTabs();

		// was collapsed or no tabs
		if ( options.active === false || !this.anchors.length ) {
			options.active = false;
			this.active = $();
		// was active, but active tab is gone
		} else if ( this.active.length && !$.contains( this.tablist[ 0 ], this.active[ 0 ] ) ) {
			// all remaining tabs are disabled
			if ( this.tabs.length === options.disabled.length ) {
				options.active = false;
				this.active = $();
			// activate previous tab
			} else {
				this._activate( this._findNextTab( Math.max( 0, options.active - 1 ), false ) );
			}
		// was active, active tab still exists
		} else {
			// make sure active index is correct
			options.active = this.tabs.index( this.active );
		}

		this._refresh();
	},

	_refresh: function() {
		this._setupDisabled( this.options.disabled );
		this._setupEvents( this.options.event );
		this._setupHeightStyle( this.options.heightStyle );

		this.tabs.not( this.active ).attr({
			"aria-selected": "false",
			tabIndex: -1
		});
		this.panels.not( this._getPanelForTab( this.active ) )
			.hide()
			.attr({
				"aria-expanded": "false",
				"aria-hidden": "true"
			});

		// Make sure one tab is in the tab order
		if ( !this.active.length ) {
			this.tabs.eq( 0 ).attr( "tabIndex", 0 );
		} else {
			this.active
				.addClass( "ui-tabs-active ui-state-active" )
				.attr({
					"aria-selected": "true",
					tabIndex: 0
				});
			this._getPanelForTab( this.active )
				.show()
				.attr({
					"aria-expanded": "true",
					"aria-hidden": "false"
				});
		}
	},

	_processTabs: function() {
		var that = this;

		this.tablist = this._getList()
			.addClass( "ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" )
			.attr( "role", "tablist" );

		this.tabs = this.tablist.find( "> li:has(a[href])" )
			.addClass( "ui-state-default ui-corner-top" )
			.attr({
				role: "tab",
				tabIndex: -1
			});

		this.anchors = this.tabs.map(function() {
				return $( "a", this )[ 0 ];
			})
			.addClass( "ui-tabs-anchor" )
			.attr({
				role: "presentation",
				tabIndex: -1
			});

		this.panels = $();

		this.anchors.each(function( i, anchor ) {
			var selector, panel, panelId,
				anchorId = $( anchor ).uniqueId().attr( "id" ),
				tab = $( anchor ).closest( "li" ),
				originalAriaControls = tab.attr( "aria-controls" );

			// inline tab
			if ( isLocal( anchor ) ) {
				selector = anchor.hash;
				panel = that.element.find( that._sanitizeSelector( selector ) );
			// remote tab
			} else {
				panelId = that._tabId( tab );
				selector = "#" + panelId;
				panel = that.element.find( selector );
				if ( !panel.length ) {
					panel = that._createPanel( panelId );
					panel.insertAfter( that.panels[ i - 1 ] || that.tablist );
				}
				panel.attr( "aria-live", "polite" );
			}

			if ( panel.length) {
				that.panels = that.panels.add( panel );
			}
			if ( originalAriaControls ) {
				tab.data( "ui-tabs-aria-controls", originalAriaControls );
			}
			tab.attr({
				"aria-controls": selector.substring( 1 ),
				"aria-labelledby": anchorId
			});
			panel.attr( "aria-labelledby", anchorId );
		});

		this.panels
			.addClass( "ui-tabs-panel ui-widget-content ui-corner-bottom" )
			.attr( "role", "tabpanel" );
	},

	// allow overriding how to find the list for rare usage scenarios (#7715)
	_getList: function() {
		return this.tablist || this.element.find( "ol,ul" ).eq( 0 );
	},

	_createPanel: function( id ) {
		return $( "<div>" )
			.attr( "id", id )
			.addClass( "ui-tabs-panel ui-widget-content ui-corner-bottom" )
			.data( "ui-tabs-destroy", true );
	},

	_setupDisabled: function( disabled ) {
		if ( $.isArray( disabled ) ) {
			if ( !disabled.length ) {
				disabled = false;
			} else if ( disabled.length === this.anchors.length ) {
				disabled = true;
			}
		}

		// disable tabs
		for ( var i = 0, li; ( li = this.tabs[ i ] ); i++ ) {
			if ( disabled === true || $.inArray( i, disabled ) !== -1 ) {
				$( li )
					.addClass( "ui-state-disabled" )
					.attr( "aria-disabled", "true" );
			} else {
				$( li )
					.removeClass( "ui-state-disabled" )
					.removeAttr( "aria-disabled" );
			}
		}

		this.options.disabled = disabled;
	},

	_setupEvents: function( event ) {
		var events = {
			click: function( event ) {
				event.preventDefault();
			}
		};
		if ( event ) {
			$.each( event.split(" "), function( index, eventName ) {
				events[ eventName ] = "_eventHandler";
			});
		}

		this._off( this.anchors.add( this.tabs ).add( this.panels ) );
		this._on( this.anchors, events );
		this._on( this.tabs, { keydown: "_tabKeydown" } );
		this._on( this.panels, { keydown: "_panelKeydown" } );

		this._focusable( this.tabs );
		this._hoverable( this.tabs );
	},

	_setupHeightStyle: function( heightStyle ) {
		var maxHeight,
			parent = this.element.parent();

		if ( heightStyle === "fill" ) {
			maxHeight = parent.height();
			maxHeight -= this.element.outerHeight() - this.element.height();

			this.element.siblings( ":visible" ).each(function() {
				var elem = $( this ),
					position = elem.css( "position" );

				if ( position === "absolute" || position === "fixed" ) {
					return;
				}
				maxHeight -= elem.outerHeight( true );
			});

			this.element.children().not( this.panels ).each(function() {
				maxHeight -= $( this ).outerHeight( true );
			});

			this.panels.each(function() {
				$( this ).height( Math.max( 0, maxHeight -
					$( this ).innerHeight() + $( this ).height() ) );
			})
			.css( "overflow", "auto" );
		} else if ( heightStyle === "auto" ) {
			maxHeight = 0;
			this.panels.each(function() {
				maxHeight = Math.max( maxHeight, $( this ).height( "" ).height() );
			}).height( maxHeight );
		}
	},

	_eventHandler: function( event ) {
		var options = this.options,
			active = this.active,
			anchor = $( event.currentTarget ),
			tab = anchor.closest( "li" ),
			clickedIsActive = tab[ 0 ] === active[ 0 ],
			collapsing = clickedIsActive && options.collapsible,
			toShow = collapsing ? $() : this._getPanelForTab( tab ),
			toHide = !active.length ? $() : this._getPanelForTab( active ),
			eventData = {
				oldTab: active,
				oldPanel: toHide,
				newTab: collapsing ? $() : tab,
				newPanel: toShow
			};

		event.preventDefault();

		if ( tab.hasClass( "ui-state-disabled" ) ||
				// tab is already loading
				tab.hasClass( "ui-tabs-loading" ) ||
				// can't switch durning an animation
				this.running ||
				// click on active header, but not collapsible
				( clickedIsActive && !options.collapsible ) ||
				// allow canceling activation
				( this._trigger( "beforeActivate", event, eventData ) === false ) ) {
			return;
		}

		options.active = collapsing ? false : this.tabs.index( tab );

		this.active = clickedIsActive ? $() : tab;
		if ( this.xhr ) {
			this.xhr.abort();
		}

		if ( !toHide.length && !toShow.length ) {
			$.error( "jQuery UI Tabs: Mismatching fragment identifier." );
		}

		if ( toShow.length ) {
			this.load( this.tabs.index( tab ), event );
		}
		this._toggle( event, eventData );
	},

	// handles show/hide for selecting tabs
	_toggle: function( event, eventData ) {
		var that = this,
			toShow = eventData.newPanel,
			toHide = eventData.oldPanel;

		this.running = true;

		function complete() {
			that.running = false;
			that._trigger( "activate", event, eventData );
		}

		function show() {
			eventData.newTab.closest( "li" ).addClass( "ui-tabs-active ui-state-active" );

			if ( toShow.length && that.options.show ) {
				that._show( toShow, that.options.show, complete );
			} else {
				toShow.show();
				complete();
			}
		}

		// start out by hiding, then showing, then completing
		if ( toHide.length && this.options.hide ) {
			this._hide( toHide, this.options.hide, function() {
				eventData.oldTab.closest( "li" ).removeClass( "ui-tabs-active ui-state-active" );
				show();
			});
		} else {
			eventData.oldTab.closest( "li" ).removeClass( "ui-tabs-active ui-state-active" );
			toHide.hide();
			show();
		}

		toHide.attr({
			"aria-expanded": "false",
			"aria-hidden": "true"
		});
		eventData.oldTab.attr( "aria-selected", "false" );
		// If we're switching tabs, remove the old tab from the tab order.
		// If we're opening from collapsed state, remove the previous tab from the tab order.
		// If we're collapsing, then keep the collapsing tab in the tab order.
		if ( toShow.length && toHide.length ) {
			eventData.oldTab.attr( "tabIndex", -1 );
		} else if ( toShow.length ) {
			this.tabs.filter(function() {
				return $( this ).attr( "tabIndex" ) === 0;
			})
			.attr( "tabIndex", -1 );
		}

		toShow.attr({
			"aria-expanded": "true",
			"aria-hidden": "false"
		});
		eventData.newTab.attr({
			"aria-selected": "true",
			tabIndex: 0
		});
	},

	_activate: function( index ) {
		var anchor,
			active = this._findActive( index );

		// trying to activate the already active panel
		if ( active[ 0 ] === this.active[ 0 ] ) {
			return;
		}

		// trying to collapse, simulate a click on the current active header
		if ( !active.length ) {
			active = this.active;
		}

		anchor = active.find( ".ui-tabs-anchor" )[ 0 ];
		this._eventHandler({
			target: anchor,
			currentTarget: anchor,
			preventDefault: $.noop
		});
	},

	_findActive: function( index ) {
		return index === false ? $() : this.tabs.eq( index );
	},

	_getIndex: function( index ) {
		// meta-function to give users option to provide a href string instead of a numerical index.
		if ( typeof index === "string" ) {
			index = this.anchors.index( this.anchors.filter( "[href$='" + index + "']" ) );
		}

		return index;
	},

	_destroy: function() {
		if ( this.xhr ) {
			this.xhr.abort();
		}

		this.element.removeClass( "ui-tabs ui-widget ui-widget-content ui-corner-all ui-tabs-collapsible" );

		this.tablist
			.removeClass( "ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" )
			.removeAttr( "role" );

		this.anchors
			.removeClass( "ui-tabs-anchor" )
			.removeAttr( "role" )
			.removeAttr( "tabIndex" )
			.removeUniqueId();

		this.tabs.add( this.panels ).each(function() {
			if ( $.data( this, "ui-tabs-destroy" ) ) {
				$( this ).remove();
			} else {
				$( this )
					.removeClass( "ui-state-default ui-state-active ui-state-disabled " +
						"ui-corner-top ui-corner-bottom ui-widget-content ui-tabs-active ui-tabs-panel" )
					.removeAttr( "tabIndex" )
					.removeAttr( "aria-live" )
					.removeAttr( "aria-busy" )
					.removeAttr( "aria-selected" )
					.removeAttr( "aria-labelledby" )
					.removeAttr( "aria-hidden" )
					.removeAttr( "aria-expanded" )
					.removeAttr( "role" );
			}
		});

		this.tabs.each(function() {
			var li = $( this ),
				prev = li.data( "ui-tabs-aria-controls" );
			if ( prev ) {
				li
					.attr( "aria-controls", prev )
					.removeData( "ui-tabs-aria-controls" );
			} else {
				li.removeAttr( "aria-controls" );
			}
		});

		this.panels.show();

		if ( this.options.heightStyle !== "content" ) {
			this.panels.css( "height", "" );
		}
	},

	enable: function( index ) {
		var disabled = this.options.disabled;
		if ( disabled === false ) {
			return;
		}

		if ( index === undefined ) {
			disabled = false;
		} else {
			index = this._getIndex( index );
			if ( $.isArray( disabled ) ) {
				disabled = $.map( disabled, function( num ) {
					return num !== index ? num : null;
				});
			} else {
				disabled = $.map( this.tabs, function( li, num ) {
					return num !== index ? num : null;
				});
			}
		}
		this._setupDisabled( disabled );
	},

	disable: function( index ) {
		var disabled = this.options.disabled;
		if ( disabled === true ) {
			return;
		}

		if ( index === undefined ) {
			disabled = true;
		} else {
			index = this._getIndex( index );
			if ( $.inArray( index, disabled ) !== -1 ) {
				return;
			}
			if ( $.isArray( disabled ) ) {
				disabled = $.merge( [ index ], disabled ).sort();
			} else {
				disabled = [ index ];
			}
		}
		this._setupDisabled( disabled );
	},

	load: function( index, event ) {
		index = this._getIndex( index );
		var that = this,
			tab = this.tabs.eq( index ),
			anchor = tab.find( ".ui-tabs-anchor" ),
			panel = this._getPanelForTab( tab ),
			eventData = {
				tab: tab,
				panel: panel
			};

		// not remote
		if ( isLocal( anchor[ 0 ] ) ) {
			return;
		}

		this.xhr = $.ajax( this._ajaxSettings( anchor, event, eventData ) );

		// support: jQuery <1.8
		// jQuery <1.8 returns false if the request is canceled in beforeSend,
		// but as of 1.8, $.ajax() always returns a jqXHR object.
		if ( this.xhr && this.xhr.statusText !== "canceled" ) {
			tab.addClass( "ui-tabs-loading" );
			panel.attr( "aria-busy", "true" );

			this.xhr
				.success(function( response ) {
					// support: jQuery <1.8
					// http://bugs.jquery.com/ticket/11778
					setTimeout(function() {
						panel.html( response );
						that._trigger( "load", event, eventData );
					}, 1 );
				})
				.complete(function( jqXHR, status ) {
					// support: jQuery <1.8
					// http://bugs.jquery.com/ticket/11778
					setTimeout(function() {
						if ( status === "abort" ) {
							that.panels.stop( false, true );
						}

						tab.removeClass( "ui-tabs-loading" );
						panel.removeAttr( "aria-busy" );

						if ( jqXHR === that.xhr ) {
							delete that.xhr;
						}
					}, 1 );
				});
		}
	},

	_ajaxSettings: function( anchor, event, eventData ) {
		var that = this;
		return {
			url: anchor.attr( "href" ),
			beforeSend: function( jqXHR, settings ) {
				return that._trigger( "beforeLoad", event,
					$.extend( { jqXHR : jqXHR, ajaxSettings: settings }, eventData ) );
			}
		};
	},

	_getPanelForTab: function( tab ) {
		var id = $( tab ).attr( "aria-controls" );
		return this.element.find( this._sanitizeSelector( "#" + id ) );
	}
});

})( $vic );
(function( $ ) {

var increments = 0;

function addDescribedBy( elem, id ) {
	var describedby = (elem.attr( "aria-describedby" ) || "").split( /\s+/ );
	describedby.push( id );
	elem
		.data( "ui-tooltip-id", id )
		.attr( "aria-describedby", $.trim( describedby.join( " " ) ) );
}

function removeDescribedBy( elem ) {
	var id = elem.data( "ui-tooltip-id" ),
		describedby = (elem.attr( "aria-describedby" ) || "").split( /\s+/ ),
		index = $.inArray( id, describedby );
	if ( index !== -1 ) {
		describedby.splice( index, 1 );
	}

	elem.removeData( "ui-tooltip-id" );
	describedby = $.trim( describedby.join( " " ) );
	if ( describedby ) {
		elem.attr( "aria-describedby", describedby );
	} else {
		elem.removeAttr( "aria-describedby" );
	}
}

$.widget( "ui.tooltip", {
	version: "1.10.4",
	options: {
		content: function() {
			// support: IE<9, Opera in jQuery <1.7
			// .text() can't accept undefined, so coerce to a string
			var title = $( this ).attr( "title" ) || "";
			// Escape title, since we're going from an attribute to raw HTML
			return $( "<a>" ).text( title ).html();
		},
		hide: true,
		// Disabled elements have inconsistent behavior across browsers (#8661)
		items: "[title]:not([disabled])",
		position: {
			my: "left top+15",
			at: "left bottom",
			collision: "flipfit flip"
		},
		show: true,
		tooltipClass: null,
		track: false,

		// callbacks
		close: null,
		open: null
	},

	_create: function() {
		this._on({
			mouseover: "open",
			focusin: "open"
		});

		// IDs of generated tooltips, needed for destroy
		this.tooltips = {};
		// IDs of parent tooltips where we removed the title attribute
		this.parents = {};

		if ( this.options.disabled ) {
			this._disable();
		}
	},

	_setOption: function( key, value ) {
		var that = this;

		if ( key === "disabled" ) {
			this[ value ? "_disable" : "_enable" ]();
			this.options[ key ] = value;
			// disable element style changes
			return;
		}

		this._super( key, value );

		if ( key === "content" ) {
			$.each( this.tooltips, function( id, element ) {
				that._updateContent( element );
			});
		}
	},

	_disable: function() {
		var that = this;

		// close open tooltips
		$.each( this.tooltips, function( id, element ) {
			var event = $.Event( "blur" );
			event.target = event.currentTarget = element[0];
			that.close( event, true );
		});

		// remove title attributes to prevent native tooltips
		this.element.find( this.options.items ).addBack().each(function() {
			var element = $( this );
			if ( element.is( "[title]" ) ) {
				element
					.data( "ui-tooltip-title", element.attr( "title" ) )
					.attr( "title", "" );
			}
		});
	},

	_enable: function() {
		// restore title attributes
		this.element.find( this.options.items ).addBack().each(function() {
			var element = $( this );
			if ( element.data( "ui-tooltip-title" ) ) {
				element.attr( "title", element.data( "ui-tooltip-title" ) );
			}
		});
	},

	open: function( event ) {
		var that = this,
			target = $( event ? event.target : this.element )
				// we need closest here due to mouseover bubbling,
				// but always pointing at the same event target
				.closest( this.options.items );

		// No element to show a tooltip for or the tooltip is already open
		if ( !target.length || target.data( "ui-tooltip-id" ) ) {
			return;
		}

		if ( target.attr( "title" ) ) {
			target.data( "ui-tooltip-title", target.attr( "title" ) );
		}

		target.data( "ui-tooltip-open", true );

		// kill parent tooltips, custom or native, for hover
		if ( event && event.type === "mouseover" ) {
			target.parents().each(function() {
				var parent = $( this ),
					blurEvent;
				if ( parent.data( "ui-tooltip-open" ) ) {
					blurEvent = $.Event( "blur" );
					blurEvent.target = blurEvent.currentTarget = this;
					that.close( blurEvent, true );
				}
				if ( parent.attr( "title" ) ) {
					parent.uniqueId();
					that.parents[ this.id ] = {
						element: this,
						title: parent.attr( "title" )
					};
					parent.attr( "title", "" );
				}
			});
		}

		this._updateContent( target, event );
	},

	_updateContent: function( target, event ) {
		var content,
			contentOption = this.options.content,
			that = this,
			eventType = event ? event.type : null;

		if ( typeof contentOption === "string" ) {
			return this._open( event, target, contentOption );
		}

		content = contentOption.call( target[0], function( response ) {
			// ignore async response if tooltip was closed already
			if ( !target.data( "ui-tooltip-open" ) ) {
				return;
			}
			// IE may instantly serve a cached response for ajax requests
			// delay this call to _open so the other call to _open runs first
			that._delay(function() {
				// jQuery creates a special event for focusin when it doesn't
				// exist natively. To improve performance, the native event
				// object is reused and the type is changed. Therefore, we can't
				// rely on the type being correct after the event finished
				// bubbling, so we set it back to the previous value. (#8740)
				if ( event ) {
					event.type = eventType;
				}
				this._open( event, target, response );
			});
		});
		if ( content ) {
			this._open( event, target, content );
		}
	},

	_open: function( event, target, content ) {
		var tooltip, events, delayedShow,
			positionOption = $.extend( {}, this.options.position );

		if ( !content ) {
			return;
		}

		// Content can be updated multiple times. If the tooltip already
		// exists, then just update the content and bail.
		tooltip = this._find( target );
		if ( tooltip.length ) {
			tooltip.find( ".ui-tooltip-content" ).html( content );
			return;
		}

		// if we have a title, clear it to prevent the native tooltip
		// we have to check first to avoid defining a title if none exists
		// (we don't want to cause an element to start matching [title])
		//
		// We use removeAttr only for key events, to allow IE to export the correct
		// accessible attributes. For mouse events, set to empty string to avoid
		// native tooltip showing up (happens only when removing inside mouseover).
		if ( target.is( "[title]" ) ) {
			if ( event && event.type === "mouseover" ) {
				target.attr( "title", "" );
			} else {
				target.removeAttr( "title" );
			}
		}

		tooltip = this._tooltip( target );
		addDescribedBy( target, tooltip.attr( "id" ) );
		tooltip.find( ".ui-tooltip-content" ).html( content );

		function position( event ) {
			positionOption.of = event;
			if ( tooltip.is( ":hidden" ) ) {
				return;
			}
			tooltip.position( positionOption );
		}
		if ( this.options.track && event && /^mouse/.test( event.type ) ) {
			this._on( this.document, {
				mousemove: position
			});
			// trigger once to override element-relative positioning
			position( event );
		} else {
			tooltip.position( $.extend({
				of: target
			}, this.options.position ) );
		}

		tooltip.hide();

		this._show( tooltip, this.options.show );
		// Handle tracking tooltips that are shown with a delay (#8644). As soon
		// as the tooltip is visible, position the tooltip using the most recent
		// event.
		if ( this.options.show && this.options.show.delay ) {
			delayedShow = this.delayedShow = setInterval(function() {
				if ( tooltip.is( ":visible" ) ) {
					position( positionOption.of );
					clearInterval( delayedShow );
				}
			}, $.fx.interval );
		}

		this._trigger( "open", event, { tooltip: tooltip } );

		events = {
			keyup: function( event ) {
				if ( event.keyCode === $.ui.keyCode.ESCAPE ) {
					var fakeEvent = $.Event(event);
					fakeEvent.currentTarget = target[0];
					this.close( fakeEvent, true );
				}
			},
			remove: function() {
				this._removeTooltip( tooltip );
			}
		};
		if ( !event || event.type === "mouseover" ) {
			events.mouseleave = "close";
		}
		if ( !event || event.type === "focusin" ) {
			events.focusout = "close";
		}
		this._on( true, target, events );
	},

	close: function( event ) {
		var that = this,
			target = $( event ? event.currentTarget : this.element ),
			tooltip = this._find( target );

		// disabling closes the tooltip, so we need to track when we're closing
		// to avoid an infinite loop in case the tooltip becomes disabled on close
		if ( this.closing ) {
			return;
		}

		// Clear the interval for delayed tracking tooltips
		clearInterval( this.delayedShow );

		// only set title if we had one before (see comment in _open())
		if ( target.data( "ui-tooltip-title" ) ) {
			target.attr( "title", target.data( "ui-tooltip-title" ) );
		}

		removeDescribedBy( target );

		tooltip.stop( true );
		this._hide( tooltip, this.options.hide, function() {
			that._removeTooltip( $( this ) );
		});

		target.removeData( "ui-tooltip-open" );
		this._off( target, "mouseleave focusout keyup" );
		// Remove 'remove' binding only on delegated targets
		if ( target[0] !== this.element[0] ) {
			this._off( target, "remove" );
		}
		this._off( this.document, "mousemove" );

		if ( event && event.type === "mouseleave" ) {
			$.each( this.parents, function( id, parent ) {
				$( parent.element ).attr( "title", parent.title );
				delete that.parents[ id ];
			});
		}

		this.closing = true;
		this._trigger( "close", event, { tooltip: tooltip } );
		this.closing = false;
	},

	_tooltip: function( element ) {
		var id = "ui-tooltip-" + increments++,
			tooltip = $( "<div>" )
				.attr({
					id: id,
					role: "tooltip"
				})
				.addClass( "ui-tooltip ui-widget ui-corner-all ui-widget-content " +
					( this.options.tooltipClass || "" ) );
		$( "<div>" )
			.addClass( "ui-tooltip-content" )
			.appendTo( tooltip );
		tooltip.appendTo( this.document[0].body );
		this.tooltips[ id ] = element;
		return tooltip;
	},

	_find: function( target ) {
		var id = target.data( "ui-tooltip-id" );
		return id ? $( "#" + id ) : $();
	},

	_removeTooltip: function( tooltip ) {
		tooltip.remove();
		delete this.tooltips[ tooltip.attr( "id" ) ];
	},

	_destroy: function() {
		var that = this;

		// close open tooltips
		$.each( this.tooltips, function( id, element ) {
			// Delegate to close method to handle common cleanup
			var event = $.Event( "blur" );
			event.target = event.currentTarget = element[0];
			that.close( event, true );

			// Remove immediately; destroying an open tooltip doesn't use the
			// hide animation
			$( "#" + id ).remove();

			// Restore the title
			if ( element.data( "ui-tooltip-title" ) ) {
				element.attr( "title", element.data( "ui-tooltip-title" ) );
				element.removeData( "ui-tooltip-title" );
			}
		});
	}
});

}( $vic ) );

/*!
 * classie - class helper functions
 * from bonzo https://github.com/ded/bonzo
 * 
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */

/*jshint browser: true, strict: true, undef: true */
/*global define: false */

( function( window ) {

'use strict';

// class helper functions from bonzo https://github.com/ded/bonzo

function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

var classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

// transport
if ( typeof define === 'function' && define.amd ) {
  // AMD
  define( classie );
} else {
  // browser global
  window.classie = classie;
}

})( window );

$vic(document).on('change', '[name="mode-switcher"]', function(event) {

    var mode = $('input[name="mode-switcher"]:checked').val();
    $vic('body').attr('role', mode);
    var route = Routing.generate('victoire_core_switchMode', {'mode': mode, '_locale': locale});
    $vic('#vic-mode-toggler .vic-mode').removeClass('vic-active');
    $vic(this).addClass('vic-active');

    loading(true);
    $vic.ajax(
        {
            url: route,
            context: document.body,
            type: "GET",
            error: function(jsonResponse) {
                error('Woups. La panne !');
            }
        }
    );
    loading(false);
});

$vic(document).ready(function() {
    loading(false);
    enableSortableSlots();
});

//Used to know when user is leaving or page is refreshing
//->when a victoire user is editing or creating a widget and he refresh the page by error, he press ESC. This class allows victoire to know which action to do
$vic(window).on('beforeunload',function() {
    $vic('body').addClass('page-unloading');
});

$vic(document).on("keydown", function (e){
    if (e.altKey) {
        if ($vic('body').attr('role') == 'admin-readonly') {
            $vic('button[data-mode="admin-layout"]').click();
        } else if ($vic('body').attr('role') == 'admin-layout') {
            $vic('button[data-mode="admin-edit"]').click();
        } else if ($vic('body').attr('role') == 'admin-edit') {
            $vic('button[data-mode="admin-style"]').click();
        } else if ($vic('body').attr('role') == 'admin-style') {
            $vic('button[data-mode="admin-readonly"]').click();
        } else if ($vic('button[data-mode="admin-readonly"]') != undefined) {
            $vic('button[data-mode="admin-readonly"]').click();
        }
    }
});

// Functions
////////////

function trackChange(elem)
{
    if ($vic(elem).val() === 'url') {
        $vic(elem).parent('li').children('.url-type').show();
        $vic(elem).parent('li').children('.page-type').hide();
        $vic(elem).parent('li').children('.route-type').hide();
    } else if ($vic(elem).val() === 'page') {
        $vic(elem).parent('li').children('.page-type').show();
        $vic(elem).parent('li').children('.url-type').hide();
        $vic(elem).parent('li').children('.route-type').hide();
    } else if ($vic(elem).val() === 'route') {
        $vic(elem).parent('li').children('.page-type').hide();
        $vic(elem).parent('li').children('.url-type').hide();
        $vic(elem).parent('li').children('.route-type').show();
    }
}

function enableSortableSlots(){
    $vic(".vic-slot").each(function(){
        $vic(this).sortable({
            handle: '.v-widget__overlay:not(.disabled)',
            items: "> .vic-widget-container:not(.vic-undraggable)",
            placeholder: "vic-ui-state-highlight",
            forcePlaceholderSize: true,
            revert: true,
            start: function(event, ui) {
                $(this).attr('data-previndex', $vic(this).children().filter('div').index($vic(ui.item)));

                if (ui.item.prev().is('new-widget-button')) {
                    ui.item.prev().addClass('disabled');
                }
                if (ui.item.next().next().is('new-widget-button')) {
                    ui.item.next().next().addClass('disabled');
                }

                $vic('.v-widget__overlay').each(function() {
                    $vic(this).addClass('disabled');
                })
            },
            update: function(event, ui) {
                if (ui.item.prev().is('new-widget-button')) {
                    var parentWidgetMap = ui.item.prev().attr('widget-map');
                    var position = ui.item.prev().attr('position');
                } else {
                    var parentWidgetMap = ui.item.next().attr('widget-map');
                    var position = ui.item.next().attr('position');
                }
                var sorted = {
                    'parentWidgetMap': parentWidgetMap,
                    'position': position,
                    'slot': ui.item.parents('.vic-slot').first().data('name'),
                    'widgetMap': ui.item.attr('widget-map')
                };

                if (ui.item.prev().is('new-widget-button')) {
                    ui.item.prev().addClass('disabled');
                }
                if (ui.item.next().is('new-widget-button')) {
                    ui.item.next().addClass('disabled');
                }

                if (parseInt($vic(this).children().filter('div').index($vic(ui.item))) != parseInt($(this).attr('data-previndex'))) {
                    updateWidgetPosition(sorted, ui);
                } else {
                    $vic(this).sortable('cancel');
                    $vic('new-widget-button.disabled, .v-widget__overlay.disabled').each(function(index, el) {
                        $vic(el).removeClass('disabled');
                    });
                }
                $(this).removeAttr('data-previndex');

            }
        });
    });
}


function updateWidgetPosition(sorted, ui) {
    var ajaxCall = $vic.post(
        Routing.generate('victoire_core_widget_update_position', {'viewReference': viewReferenceId, '_locale': locale}),
        { 'sorted': sorted }
    );
    ajaxCall.fail(function() {
        $vic(".vic-slot").each(function(){
            $vic(this).sortable('cancel');
            $vic('new-widget-button.disabled, .v-widget__overlay.disabled').each(function(index, el) {
                $vic(el).removeClass('disabled');
            });
        });
        return false;
    });
    ajaxCall.success(function(jsonResponse) {
        $vic('new-widget-button.disabled').each(function(index, el) {
            $vic(el).remove();
        });
        var $rootScope = angular.element($vic('body')).scope().$root;
        $rootScope.widgetMaps = jsonResponse.availablePositions;
        $rootScope.$apply();

        $vic('.v-widget__overlay.disabled').each(function() {
            $vic(this).removeClass('disabled');
        })
    });

    return ajaxCall;
}

function loading(value) {
    if (value == undefined) { //Switch mode
        $vic('#v-header').toggleClass('v-navbar--loading');
    } else if (value === true) { //Run
        $vic('#v-header').addClass('v-navbar--loading');
    } else if (value === false) { //Stop
        $vic('#v-header').removeClass('v-navbar--loading');
    }
}

function slideTo(element, duration, effect) {
    if (duration == undefined) { duration = 1500; }
    if (effect == undefined) { effect = 'easeInSine'; }

    //get the top offset of the target anchor
    var target_offset = $vic(element).offset();
    if (target_offset != undefined) {
        var target_top = target_offset.top;

        //goto that anchor by setting the body scroll top to anchor top
        $vic('html, body').animate({scrollTop:target_top}, duration, effect);
    }
}


////////////
// MODAL BASICS
////////////

// Open a modal
function openModal(url) {
    $vic(document).trigger('victoire_modal_open_before');
    loading(true);
    $vic.ajax({
        type: "GET",
        url: url
    }).done(function(response){
        if (false === response.success) {
            warn(response.message, 10000);
        } else {
            //remove drops from the previous instance of the modal
            $vic('#vic-modal [data-flag*="v-drop"]').each(function(index, el) {
                $vic($vic(el).attr('data-droptarget')).remove();
            });

            //remove the previous instance of the modal
            $vic('#vic-modal').remove();
            //add the html of the modal
            $vic('body').append(response.html);
            //display the modal
            $vic('#vic-modal').vicmodal({
                keyboard: true,
                backdrop: false
            });
            $vic('#vic-modal').attr('data-modal', 'show');

            // set FAB on open mode
            $vic('#v-float-container .v-btn--fab').addClass('v-btn--fab-open');
        }
        loading(false);
        $vic(document).trigger('victoire_modal_open_after');
    }).fail(function() {
        loading(false);
    });

    return $vic('#vic-modal');
}

//redirect to the direct links of the menu
//the dropdown menu intercepts the event and does not let the link do their job
//@todo the vic none is a fix
//the dropdown does an event prevent that does not allow the link.
$vic(document).on('click', 'a[data-toggle="vic-none"]', function(event) {
    event.preventDefault();
    window.location = $vic(this).attr('href');
});


// Open modal
$vic(document).on('click', '.v-widget__overlay', function(event) {
    event.preventDefault();

    var role = $vic('body').attr('role');
    if (typeof role !== typeof undefined && role !== false) {
        if (role == "admin-style") {
            var route = 'victoire_core_widget_stylize';
        } else if (role == "admin-edit") {
            var route = 'victoire_core_widget_edit';
        }

        var id = $vic(this).parents('.vic-widget-container').first().data('id');
        var url = Routing.generate(route, {'id': id, 'viewReference': viewReferenceId, _locale: locale});
        openModal(url);
    } else {
        console.error('You only should click on this in edit or style mode !');
    }
});

// Open modal
$vic(document).on('click', 'a[data-toggle="vic-modal"]', function(event) {
    event.preventDefault();
    openModal($vic(this).attr('href'));
});

// Close a modal
function closeModal(modal) {
    if (modal == undefined) {
        modal = $vic('.v-modal[data-modal="show"]').last();
    }

    $vic(modal).attr('data-modal', 'hidden');

    // set FAB on normal mode
    $vic('#v-float-container .v-btn--fab').removeClass('v-btn--fab-open');

    setTimeout(function() {$vic('.vic-creating').removeClass('vic-creating');}, 10);
}


//Code to close the modal by tapping esc
//This code should not be there because the twitter bootstrap modal system
//provides such a feature but it doesn't works as well
$vic(document).on('keyup', function(e) {
    if (e.keyCode == 27) {
        if (!$vic('body').hasClass('page-unloading')) {
            closeModal($vic('.v-modal').last());
        } else {
            $vic('body').removeClass('page-unloading');
        }
    }
});

// Close modal
$vic(document).on('click', '.v-modal [data-modal="close"]', function(event) {
    event.preventDefault();
    modal = $vic(event.target).parents('.v-modal');
    closeModal(modal);
});
// END MODAL BASICS
//

// Event
////////


// Open select when click on dropdown link
$vic(document).on('focus', '.v-slot select', function(event) {
    $vic(this).parent('.v-slot').addClass('v-slot--open');
});
$vic(document).on('blur', '.v-slot select', function(event) {
    $vic(event.target).parent('.v-slot').removeClass('v-slot--open');
    $vic(event.target).prop('selectedIndex', 0);
});

// Eval width of the slots to add or not a class
function evalSlotWidth(slot) {
    var smallClass = 'v-slot--sm';

    if (slot.offsetWidth > 250 && slot.classList.contains(smallClass)) {
        slot.classList.remove(smallClass);
    } else if (slot.offsetWidth <= 250 && slot.offsetWidth > 0) {
        slot.classList.add(smallClass);
    }

    return;
}

$vic(document).ready(function() {
    $('.v-slot').each(function(index, el) {
        return evalSlotWidth(el);
    });
});

$vic(window).resize(function() {
    $('.v-slot').each(function(index, el) {
        return evalSlotWidth(el);
    });
});


// Create modal for new widget
$vic(document).on('change', '.v-slot select', function(event) {
    event.preventDefault();
    var url = generateNewWidgetUrl(event.target);
    $vic(this).blur();
    openModal(url);
    $vic(this).parents('.v-slot').first().addClass('vic-creating');
});

$vic(document).on('click', '.v-modal--widget a[data-modal="update"], .v-modal--widget a[data-modal="create"]', function(event) {
    event.preventDefault();

    var forms = [];
    $vic('[data-group="tab-widget-quantum"]').each(function() {

        var quantumLetter = $vic(this).data('quantum');

        // matches widget stylize form
        activeForm = $vic(this).find('form[name="' + quantumLetter + '_widget_style"]');

        // matches widget edit form with more than one mode available
        if (activeForm.length == 0) {
            var activeForm = $vic(this).find('[data-group="picker-' + quantumLetter + '"][data-state="visible"] [data-flag="v-collapse"][data-state="visible"] > form');
        }

        // matches widget edit form with only static mode available
        if (activeForm.length == 0) {
            activeForm = $vic(this).find('[data-group="picker-' + quantumLetter + '"][data-state="visible"] form');
        }

        forms = $vic.merge(forms, [activeForm]);
    });

    loading(true);
    var calls = [];
    $vic(forms).each(function (key, form) {
        $vic(form).trigger("victoire_widget_form_update_presubmit");
        formData = $vic(form).serialize();
        var contentType = 'application/x-www-form-urlencoded; charset=UTF-8';
        if ($vic(form).attr('enctype') == 'multipart/form-data') {
            var formData = new FormData($vic(form)[0]);
            var contentType = false;
        }
        calls.push($vic.ajax({
            type: $vic(form).attr('method'),
            url : $vic(form).attr('action'),
            data        : formData,
            processData : false,
            contentType : contentType
        }).done(function(response) {
            $vic(form).trigger("victoire_widget_form_update_postsubmit");
        }).fail(function() {
            loading(false);
        })
        );
    });

    $vic.when.apply($vic, calls).then(function() {
        var errors = false;
        //arguments is a magic var that contains all callback arguments
        $vic(arguments).each(function(index, response) {
            if (response.length) {
                response = response[0];
            }
            if (false === response.success) {
                $vic('ul.vic-modal-nav-tabs a[href="#widget-'+response.widgetId+'-tab-pane"]').css('color', 'red');
                errors = true;
                //inform user there have been an error
                warn(response.message, 10000);

                if (response.html) {
                    $vic('#widget-'+response.widgetId+'-tab-pane div.vic-tab-mode.vic-tab-pane.vic-active div.vic-tab-pane.vic-active').html(response.html)

                }
            } else {
                $vic('ul.vic-modal-nav-tabs a[href="#widget-'+response.widgetId+'-tab-pane"]').css('color', '');
            }
        });
        if (errors === false) {
            window.location.reload();
        }
        loading(false);
    });
});

// Delete a widget after submit
$vic(document).on('click', 'a#widget-new-tab', function(event) {
    event.preventDefault();
    loading(true);
    var url = Routing.generate('victoire_core_widget_new', {
        type: $vic(this).data('type'),
        viewReference: $vic(this).data('viewreference'),
        slot: $vic(this).data('slot'),
        position: $vic(this).data('position'),
        parentWidgetMap: $vic(this).data('parentwidgetmap'),
        quantum: $vic("#v-quantum-tab > .v-flex-col").length - 1,
        _locale: locale
    });
    $vic.ajax({
        type: "GET",
        url : url
    }).done(function(response) {
        if (true === response.success) {
            $vic('[data-group="tab-widget-quantum"][data-state="visible"]').attr('data-state', 'hidden');
            $vic('.v-btn--quantum-active').removeClass('v-btn--quantum-active');
            var form = $vic(response.html).find('[data-group="tab-widget-quantum"]').first();
            var tab = $vic(response.html).find('.v-btn--quantum').last().addClass('v-btn--quantum-active').parent();
            $vic('#widget-new-tab').parent('.v-flex-col').before(tab);
            $vic('#v-modal-tab-content-container').append(form);

            loading(false);
        }
    }).fail(function() {
        loading(false);
    });
    $vic(document).trigger("victoire_widget_delete_postsubmit");
});

// Delete a widget after submit
$vic(document).on('click', '.v-modal--widget a.vic-confirmed, .vic-hover-widget-unlink', function(event) {
    event.preventDefault();
    $vic(document).trigger("victoire_widget_delete_presubmit");

        loading(true);
        $vic.ajax({
            type: "GET",
            url : $vic(this).attr('href')
        }).done(function(response) {
            if (true === response.success) {
                if (response.hasOwnProperty("redirect")) {
                    window.location.replace(response.redirect);
                } else {
                    window.location.reload();
                }
                loading(false);
            } else {
                //log the error
                console.info('An error occured during the deletion of the widget.');
                console.log(response.message);
            }
        }).fail(function() {
            loading(false);
        });
        $vic(document).trigger("victoire_widget_delete_postsubmit");
});


function generateNewWidgetUrl(select){
    var slotId = $vic(select).parents('.vic-slot').first().data('name');
    var container = $vic(select).parents('new-widget-button');

    var position = $vic(container).attr('position');
    var parentWidgetMap = $vic(container).attr('widget-map');

    var params = {
        'viewReference'    : viewReferenceId,
        'type'             : $vic(select).val(),
        'slot'             : slotId,
        '_locale'          : locale
    };

    if (position) {
        params['position'] = position;
    }
    if (parentWidgetMap) {
        params['parentWidgetMap'] = parentWidgetMap;

    }
    return Routing.generate(
        'victoire_core_widget_new',
        params
    );
}


// update on left bar, the quantum name when modifying it
$vic(document).on('keyup', '[data-flag="v-quantum-name"]', function(event) {
    var activeQuantumTab = $vic('#v-quantum-tab > .v-flex-col .v-btn--quantum-active');

    if (!activeQuantumTab.find('span[data-flag="old-name"]').length) {
        var originalShortName = $vic('#v-quantum-tab > .v-flex-col .v-btn--quantum-active span:not([data-flag="old-name"])').text();
        activeQuantumTab.append('<span data-flag="old-name" style="display: none;">' + originalShortName + '</span>');
    }

    var quantumShortName = event.target.value.length ? event.target.value.substr(0, 2) : activeQuantumTab.find('span[data-flag="old-name"]').text();

    activeQuantumTab.find('span:not([data-flag="old-name"])').text(quantumShortName);
});

$vic(document).on('submit','form[data-toggle="vic-confirm"]',function(e){
    vicSmartConfirm(e,this,'form');
});

$vic(document).on('click','a[data-toggle="vic-confirm"]',function(e){
    vicSmartConfirm(e,this,'a');
});

/**
 * This function call UIController::confirm to get a modal box to confirm the user's choice
 * @param  Event e       The click or submit event
 * @param  DomElement referer The a or submit button
 * @param  string type    a (means link) or form
 */
function vicSmartConfirm(e,referer,type){
    if($vic(referer).data('vic-confirm-field-id') != undefined && $vic('#'+$vic(referer).data('vic-confirm-field-id')).attr('checked') == "checked" ){
        return true;
    }
    e.preventDefault();
    $vic(referer).addClass('vic-confirm-waiting');
    loading(true);

    var params = {
        title: $vic(referer).data('title'),
        body: $vic(referer).data('body'),
        type: type,
        _locale: locale
    };

    if ($vic(referer).data('confirm-callback') != undefined) {
        params.confirm_callback = $vic(referer).data('confirm-callback');
    }

    if ($vic(referer).data('cancel-button-class') != undefined) {
        params.cancel_button_class = $vic(referer).data('cancel-button-class');
    }

    if ($vic(referer).data('id') != undefined) {
        params.id = $vic(referer).data('id');
    }

    $vic.ajax(
        {
            url: Routing.generate('victoire_core_ui_confirm', params),
            context: document.body,
            type: "POST",
            error: function(jsonResponse) {
                error('Woups. La panne !');
            },
            success: function(data) {
                $vic("body").append(data);
                loading(false);
            }
        }
    );
}

/*!
 * Bootstrap v3.0.3 (http://getbootstrap.com)
 * Copyright 2013 Twitter, Inc.
 * Licensed under http://www.apache.org/licenses/LICENSE-2.0
 */

if (typeof $vic === "undefined") { throw new Error("Victoire's Bootstrap edition requires $vic jQuery version") }

/* ========================================================================
 * Bootstrap: transition.js v3.0.3
 * http://getbootstrap.com/javascript/#transitions
 * ========================================================================
 * Copyright 2013 Twitter, Inc.
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
 * ======================================================================== */


+function ($vic) { "use strict";

  // CSS TRANSITION SUPPORT (Shoutout: http://www.modernizr.com/)
  // ============================================================

  function transitionEnd() {
    var el = document.createElement('bootstrap')

    var transEndEventNames = {
      'WebkitTransition' : 'webkitTransitionEnd'
    , 'MozTransition'    : 'transitionend'
    , 'OTransition'      : 'oTransitionEnd otransitionend'
    , 'transition'       : 'transitionend'
    }

    for (var name in transEndEventNames) {
      if (el.style[name] !== undefined) {
        return { end: transEndEventNames[name] }
      }
    }
  }

  // http://blog.alexmaccaw.com/css-transitions
  $vic.fn.vicemulateTransitionEnd = function (duration) {
    var called = false, $vicel = this
    $vic(this).one($vic.support.transition.end, function () { called = true })
    var callback = function () { if (!called) $vic($vicel).trigger($vic.support.transition.end) }
    setTimeout(callback, duration)
    return this
  }

  $vic(function () {
    $vic.support.transition = transitionEnd()
  })

}($vic);

/* ========================================================================
 * Bootstrap: alert.js v3.0.3
 * http://getbootstrap.com/javascript/#alerts
 * ========================================================================
 * Copyright 2013 Twitter, Inc.
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
 * ======================================================================== */


+function ($vic) { "use strict";

  // ALERT CLASS DEFINITION
  // ======================

  var dismiss = '[data-dismiss="alert"]'
  var Alert   = function (el) {
    $vic(el).on('click', dismiss, this.close)
  }

  Alert.prototype.close = function (e) {
    var $victhis    = $vic(this)
    var selector = $victhis.attr('data-target')

    if (!selector) {
      selector = $victhis.attr('href')
      selector = selector && selector.replace(/.*(?=#[^\s]*$vic)/, '') // strip for ie7
    }

    var $vicparent = $vic(selector)

    if (e) e.preventDefault()

    if (!$vicparent.length) {
      $vicparent = $victhis.hasClass('vic-alert') ? $victhis : $victhis.parent()
    }

    $vicparent.trigger(e = $vic.Event('close.bs.vic-alert'))

    if (e.isDefaultPrevented()) return

    $vicparent.removeClass('vic-in')

    function removeElement() {
      $vicparent.trigger('closed.bs.vic-alert').remove()
    }

    $vic.support.transition && $vicparent.hasClass('vic-fade') ?
      $vicparent
        .one($vic.support.transition.end, removeElement)
        .vicemulateTransitionEnd(150) :
      removeElement()
  }


  // ALERT PLUGIN DEFINITION
  // =======================

  var old = $vic.fn.vicalert

  $vic.fn.vicalert = function (option) {
    return this.each(function () {
      var $victhis = $vic(this)
      var data  = $victhis.data('bs.vic-alert')

      if (!data) $victhis.data('bs.vic-alert', (data = new Alert(this)))
      if (typeof option == 'string') data[option].call($victhis)
    })
  }

  $vic.fn.vicalert.Constructor = Alert


  // ALERT NO CONFLICT
  // =================

  $vic.fn.vicalert.noConflict = function () {
    $vic.fn.vicalert = old
    return this
  }


  // ALERT DATA-API
  // ==============

  $vic(document).on('click.bs.alert.data-api', dismiss, Alert.prototype.close)

}($vic);

/* ========================================================================
 * Bootstrap: button.js v3.0.3
 * http://getbootstrap.com/javascript/#buttons
 * ========================================================================
 * Copyright 2013 Twitter, Inc.
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
 * ======================================================================== */


+function ($vic) { "use strict";

  // BUTTON PUBLIC CLASS DEFINITION
  // ==============================

  var Button = function (element, options) {
    this.$vicelement = $vic(element)
    this.options  = $vic.extend({}, Button.DEFAULTS, options)
  }

  Button.DEFAULTS = {
    loadingText: 'loading...'
  }

  Button.prototype.setState = function (state) {
    var d    = 'disabled'
    var $vicel  = this.$vicelement
    var val  = $vicel.is('input') ? 'val' : 'html'
    var data = $vicel.data()

    state = state + 'Text'

    if (!data.resetText) $vicel.data('resetText', $vicel[val]())

    $vicel[val](data[state] || this.options[state])

    // push to event loop to allow forms to submit
    setTimeout(function () {
      state == 'loadingText' ?
        $vicel.addClass('vic-'+d).attr(d, d) :
        $vicel.removeClass('vic-'+d).removeAttr(d);
    }, 0)
  }

  Button.prototype.toggle = function () {
    var $vicparent = this.$vicelement.closest('[data-toggle="vic-buttons"]')
    var changed = true

    if ($vicparent.length) {
      var $vicinput = this.$vicelement.find('input')
      if ($vicinput.prop('type') === 'radio') {
        // see if clicking on current one
        if ($vicinput.prop('checked') && this.$vicelement.hasClass('vic-active'))
          changed = false
        else
          $vicparent.find('.vic-active').removeClass('vic-active')
      }
      if (changed) $vicinput.prop('checked', !this.$vicelement.hasClass('vic-active')).trigger('change')
    }

    if (changed) this.$vicelement.toggleClass('vic-active')
  }


  // BUTTON PLUGIN DEFINITION
  // ========================

  var old = $vic.fn.vicbutton

  $vic.fn.vicbutton = function (option) {
    return this.each(function () {
      var $victhis   = $vic(this)
      var data    = $victhis.data('bs.vic-button')
      var options = typeof option == 'object' && option

      if (!data) $victhis.data('bs.vic-button', (data = new Button(this, options)))

      if (option == 'toggle') data.toggle()
      else if (option) data.setState(option)
    })
  }

  $vic.fn.vicbutton.Constructor = Button


  // BUTTON NO CONFLICT
  // ==================

  $vic.fn.vicbutton.noConflict = function () {
    $vic.fn.vicbutton = old
    return this
  }


  // BUTTON DATA-API
  // ===============

  $vic(document).on('click.bs.button.data-api', '[data-toggle^=vic-button]', function (e) {
    var $vicbtn = $vic(e.target)
    if (!$vicbtn.hasClass('vic-btn')) $vicbtn = $vicbtn.closest('.vic-btn')
    $vicbtn.button('toggle')
    e.preventDefault()
  })

}($vic);

/* ========================================================================
 * Bootstrap: carousel.js v3.0.3
 * http://getbootstrap.com/javascript/#carousel
 * ========================================================================
 * Copyright 2013 Twitter, Inc.
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
 * ======================================================================== */


+function ($vic) { "use strict";

  // CAROUSEL CLASS DEFINITION
  // =========================

  var Carousel = function (element, options) {
    this.$vicelement    = $vic(element)
    this.$vicindicators = this.$vicelement.find('.vic-carousel-indicators')
    this.options     = options
    this.paused      =
    this.sliding     =
    this.interval    =
    this.$vicactive     =
    this.$vicitems      = null

    this.options.pause == 'hover' && this.$vicelement
      .on('mouseenter', $vic.proxy(this.pause, this))
      .on('mouseleave', $vic.proxy(this.cycle, this))
  }

  Carousel.DEFAULTS = {
    interval: 5000
  , pause: 'hover'
  , wrap: true
  }

  Carousel.prototype.cycle =  function (e) {
    e || (this.paused = false)

    this.interval && clearInterval(this.interval)

    this.options.interval
      && !this.paused
      && (this.interval = setInterval($vic.proxy(this.next, this), this.options.interval))

    return this
  }

  Carousel.prototype.getActiveIndex = function () {
    this.$vicactive = this.$vicelement.find('.vic-item.vic-active')
    this.$vicitems  = this.$vicactive.parent().children()

    return this.$vicitems.index(this.$vicactive)
  }

  Carousel.prototype.to = function (pos) {
    var that        = this
    var activeIndex = this.getActiveIndex()

    if (pos > (this.$vicitems.length - 1) || pos < 0) return

    if (this.sliding)       return this.$vicelement.one('slid.bs.vic-carousel', function () { that.to(pos) })
    if (activeIndex == pos) return this.pause().cycle()

    return this.slide(pos > activeIndex ? 'next' : 'prev', $vic(this.$vicitems[pos]))
  }

  Carousel.prototype.pause = function (e) {
    e || (this.paused = true)

    if (this.$vicelement.find('.vic-next, .vic-prev').length && $vic.support.transition.end) {
      this.$vicelement.trigger($vic.support.transition.end)
      this.cycle(true)
    }

    this.interval = clearInterval(this.interval)

    return this
  }

  Carousel.prototype.next = function () {
    if (this.sliding) return
    return this.slide('next')
  }

  Carousel.prototype.prev = function () {
    if (this.sliding) return
    return this.slide('prev')
  }

  Carousel.prototype.slide = function (type, next) {
    var $vicactive   = this.$vicelement.find('.vic-item.vic-active')
    var $vicnext     = next || $vicactive[type]()
    var isCycling = this.interval
    var direction = type == 'next' ? 'left' : 'right'
    var fallback  = type == 'next' ? 'first' : 'last'
    var that      = this

    if (!$vicnext.length) {
      if (!this.options.wrap) return
      $vicnext = this.$vicelement.find('.vic-item')[fallback]()
    }

    this.sliding = true

    isCycling && this.pause()

    var e = $vic.Event('slide.bs.vic-carousel', { relatedTarget: $vicnext[0], direction: direction })

    if ($vicnext.hasClass('vic-active')) return

    if (this.$vicindicators.length) {
      this.$vicindicators.find('.vic-active').removeClass('vic-active')
      this.$vicelement.one('slid.bs.vic-carousel', function () {
        var $vicnextIndicator = $vic(that.$vicindicators.children()[that.getActiveIndex()])
        $vicnextIndicator && $vicnextIndicator.addClass('vic-active')
      })
    }

    if ($vic.support.transition && this.$vicelement.hasClass('slide')) {
      this.$vicelement.trigger(e)
      if (e.isDefaultPrevented()) return
      $vicnext.addClass('vic-'+type)
      $vicnext[0].offsetWidth // force reflow
      $vicactive.addClass('vic-'+direction)
      $vicnext.addClass('vic-'+direction)
      $vicactive
        .one($vic.support.transition.end, function () {
          $vicnext.removeClass(['vic-'+type,'vic-'+direction].join(' ')).addClass('vic-active')
          $vicactive.removeClass(['vic-active','vic-'+direction].join(' '))
          that.sliding = false
          setTimeout(function () { that.$vicelement.trigger('slid.bs.vic-carousel') }, 0)
        })
        .vicemulateTransitionEnd(600)
    } else {
      this.$vicelement.trigger(e)
      if (e.isDefaultPrevented()) return
      $vicactive.removeClass('vic-active')
      $vicnext.addClass('vic-active')
      this.sliding = false
      this.$vicelement.trigger('slid.bs.vic-carousel')
    }

    isCycling && this.cycle()

    return this
  }


  // CAROUSEL PLUGIN DEFINITION
  // ==========================

  var old = $vic.fn.viccarousel

  $vic.fn.viccarousel = function (option) {
    return this.each(function () {
      var $victhis   = $vic(this)
      var data    = $victhis.data('bs.vic-carousel')
      var options = $vic.extend({}, Carousel.DEFAULTS, $victhis.data(), typeof option == 'object' && option)
      var action  = typeof option == 'string' ? option : options.slide

      if (!data) $victhis.data('bs.vic-carousel', (data = new Carousel(this, options)))
      if (typeof option == 'number') data.to(option)
      else if (action) data[action]()
      else if (options.interval) data.pause().cycle()
    })
  }

  $vic.fn.viccarousel.Constructor = Carousel


  // CAROUSEL NO CONFLICT
  // ====================

  $vic.fn.viccarousel.noConflict = function () {
    $vic.fn.viccarousel = old
    return this
  }


  // CAROUSEL DATA-API
  // =================

  $vic(document).on('click.bs.vic-carousel.data-api', '[data-slide], [data-slide-to]', function (e) {
    var $victhis   = $vic(this), href
    var $victarget = $vic($victhis.attr('data-target') || (href = $victhis.attr('href')) && href.replace(/.*(?=#[^\s]+$vic)/, '')) //strip for ie7
    var options = $vic.extend({}, $victarget.data(), $victhis.data())
    var slideIndex = $victhis.attr('data-slide-to')
    if (slideIndex) options.interval = false

    $victarget.carousel(options)

    if (slideIndex = $victhis.attr('data-slide-to')) {
      $victarget.data('bs.vic-carousel').to(slideIndex)
    }

    e.preventDefault()
  })

  $vic(window).on('load', function () {
    $vic('[data-ride="carousel"]').each(function () {
      var $viccarousel = $vic(this);
      $viccarousel.viccarousel($viccarousel.data());
    })
  })

}($vic);

/* ========================================================================
 * Bootstrap: collapse.js v3.0.3
 * http://getbootstrap.com/javascript/#collapse
 * ========================================================================
 * Copyright 2013 Twitter, Inc.
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
 * ======================================================================== */


+function ($vic) { "use strict";

  // COLLAPSE PUBLIC CLASS DEFINITION
  // ================================

  var Collapse = function (element, options) {
    this.$vicelement      = $vic(element)
    this.options       = $vic.extend({}, Collapse.DEFAULTS, options)
    this.transitioning = null

    if (this.options.parent) this.$vicparent = $vic(this.options.parent)
    if (this.options.toggle) this.toggle()
  }

  Collapse.DEFAULTS = {
    toggle: true
  }

  Collapse.prototype.dimension = function () {
    var hasWidth = this.$vicelement.hasClass('width')
    return hasWidth ? 'width' : 'height'
  }

  Collapse.prototype.show = function () {
    if (this.transitioning || this.$vicelement.hasClass('vic-in')) return

    var startEvent = $vic.Event('show.bs.vic-collapse')
    this.$vicelement.trigger(startEvent)
    if (startEvent.isDefaultPrevented()) return

    var actives = this.$vicparent && this.$vicparent.find('> .vic-panel > .vic-in')

    if (actives && actives.length) {
      var hasData = actives.data('bs.vic-collapse')
      if (hasData && hasData.transitioning) return
      actives.collapse('hide')
      hasData || actives.data('bs.collapse', null)
    }

    var dimension = this.dimension()

    this.$vicelement
      .removeClass('vic-collapse')
      .addClass('vic-collapsing')
      [dimension](0)

    this.transitioning = 1

    var complete = function () {
      this.$vicelement
        .removeClass('vic-collapsing')
        .addClass('vic-in')
        [dimension]('auto')
      this.transitioning = 0
      this.$vicelement.trigger('shown.bs.vic-collapse')
    }

    if (!$vic.support.transition) return complete.call(this)

    var scrollSize = $vic.camelCase(['scroll', dimension].join('-'))

    this.$vicelement
      .one($vic.support.transition.end, $vic.proxy(complete, this))
      .vicemulateTransitionEnd(350)
      [dimension](this.$vicelement[0][scrollSize])
  }

  Collapse.prototype.hide = function () {
    if (this.transitioning || !this.$vicelement.hasClass('vic-in')) return

    var startEvent = $vic.Event('hide.bs.vic-collapse')
    this.$vicelement.trigger(startEvent)
    if (startEvent.isDefaultPrevented()) return

    var dimension = this.dimension()

    this.$vicelement
      [dimension](this.$vicelement[dimension]())
      [0].offsetHeight

    this.$vicelement
      .addClass('vic-collapsing')
      .removeClass('vic-collapse')
      .removeClass('vic-in')

    this.transitioning = 1

    var complete = function () {
      this.transitioning = 0
      this.$vicelement
        .trigger('hidden.bs.vic-collapse')
        .removeClass('vic-collapsing')
        .addClass('vic-collapse')
    }

    if (!$vic.support.transition) return complete.call(this)

    this.$vicelement
      [dimension](0)
      .one($vic.support.transition.end, $vic.proxy(complete, this))
      .vicemulateTransitionEnd(350)
  }

  Collapse.prototype.toggle = function () {
    this[this.$vicelement.hasClass('vic-in') ? 'hide' : 'show']()
  }


  // COLLAPSE PLUGIN DEFINITION
  // ==========================

  var old = $vic.fn.viccollapse

  $vic.fn.viccollapse = function (option) {
    return this.each(function () {
      var $victhis   = $vic(this)
      var data    = $victhis.data('bs.vic-collapse')
      var options = $vic.extend({}, Collapse.DEFAULTS, $victhis.data(), typeof option == 'object' && option)

      if (!data) $victhis.data('bs.vic-collapse', (data = new Collapse(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  $vic.fn.viccollapse.Constructor = Collapse


  // COLLAPSE NO CONFLICT
  // ====================

  $vic.fn.viccollapse.noConflict = function () {
    $vic.fn.viccollapse = old
    return this
  }


  // COLLAPSE DATA-API
  // =================

  $vic(document).on('click.bs.collapse.data-api', '[data-toggle=vic-collapse]', function (e) {
    var $victhis   = $vic(this), href
    var target  = $victhis.attr('data-target')
        || e.preventDefault()
        || (href = $victhis.attr('href')) && href.replace(/.*(?=#[^\s]+$vic)/, '') //strip for ie7
    var $victarget = $vic(target)
    var data    = $victarget.data('bs.vic-collapse')
    var option  = data ? 'toggle' : $victhis.data()
    var parent  = $victhis.attr('data-parent')
    var $vicparent = parent && $vic(parent)

    if (!data || !data.transitioning) {
      if ($vicparent) $vicparent.find('[data-toggle=vic-collapse][data-parent="' + parent + '"]').not($victhis).addClass('vic-collapsed')
      $victhis[$victarget.hasClass('vic-in') ? 'addClass' : 'removeClass']('vic-collapsed')
    }

    $victarget.collapse(option)
  })

}($vic);

/* ========================================================================
 * Bootstrap: dropdown.js v3.0.3
 * http://getbootstrap.com/javascript/#dropdowns
 * ========================================================================
 * Copyright 2013 Twitter, Inc.
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
 * ======================================================================== */


+function ($vic) { "use strict";

  // DROPDOWN CLASS DEFINITION
  // =========================

  var backdrop = '.vic-dropdown-backdrop'
  var toggle   = '[data-toggle=vic-dropdown]'
  var Dropdown = function (element) {
    $vic(element).on('click.bs.vic-dropdown', this.toggle)
  }

  Dropdown.prototype.toggle = function (e) {
    var $victhis = $vic(this)

    if ($victhis.is('.vic-disabled, :disabled')) return

    var $vicparent  = getParent($victhis)
    var isActive = $vicparent.hasClass('vic-open')

    clearMenus()

    if (!isActive) {
      if ('ontouchstart' in document.documentElement && !$vicparent.closest('.vic-navbar-nav').length) {
        // if mobile we use a backdrop because click events don't delegate
        $vic('<div class="vic-dropdown-backdrop"/>').insertAfter($vic(this)).on('click', clearMenus)
      }

      $vicparent.trigger(e = $vic.Event('show.bs.vic-dropdown'))

      if (e.isDefaultPrevented()) return

      $vicparent
        .toggleClass('vic-open')
        .trigger('shown.bs.vic-dropdown')

      $victhis.focus()
    }

    return false
  }

  Dropdown.prototype.keydown = function (e) {
    if (!/(38|40|27)/.test(e.keyCode)) return

    var $victhis = $vic(this)

    e.preventDefault()
    e.stopPropagation()

    if ($victhis.is('.vic-disabled, :disabled')) return

    var $vicparent  = getParent($victhis)
    var isActive = $vicparent.hasClass('vic-open')

    if (!isActive || (isActive && e.keyCode == 27)) {
      if (e.which == 27) $vicparent.find(toggle).focus()
      return $victhis.click()
    }

    var $vicitems = $vic('[role=menu] li:not(.vic-divider):visible a', $vicparent)

    if (!$vicitems.length) return

    var index = $vicitems.index($vicitems.filter(':focus'))

    if (e.keyCode == 38 && index > 0)                 index--                        // up
    if (e.keyCode == 40 && index < $vicitems.length - 1) index++                        // down
    if (!~index)                                      index=0

    $vicitems.eq(index).focus()
  }

  function clearMenus() {
    $vic(backdrop).remove()
    $vic(toggle).each(function (e) {
      var $vicparent = getParent($vic(this))
      if (!$vicparent.hasClass('vic-open')) return
      $vicparent.trigger(e = $vic.Event('hide.bs.vic-dropdown'))
      if (e.isDefaultPrevented()) return
      $vicparent.removeClass('vic-open').trigger('hidden.bs.vic-dropdown')
    })
  }

  function getParent($victhis) {
    var selector = $victhis.attr('data-target')

    if (!selector) {
      selector = $victhis.attr('href')
      selector = selector && /#/.test(selector) && selector.replace(/.*(?=#[^\s]*$vic)/, '') //strip for ie7
    }

    var $vicparent = selector && $vic(selector)

    return $vicparent && $vicparent.length ? $vicparent : $victhis.parent()
  }


  // DROPDOWN PLUGIN DEFINITION
  // ==========================

  var old = $vic.fn.vicdropdown

  $vic.fn.vicdropdown = function (option) {
    return this.each(function () {
      var $victhis = $vic(this)
      var data  = $victhis.data('bs.vic-dropdown')

      if (!data) $victhis.data('bs.vic-dropdown', (data = new Dropdown(this)))
      if (typeof option == 'string') data[option].call($victhis)
    })
  }

  $vic.fn.vicdropdown.Constructor = Dropdown


  // DROPDOWN NO CONFLICT
  // ====================

  $vic.fn.vicdropdown.noConflict = function () {
    $vic.fn.vicdropdown = old
    return this
  }


  // APPLY TO STANDARD DROPDOWN ELEMENTS
  // ===================================

  $vic(document)
    .on('click.bs.vic-dropdown.data-api', clearMenus)
    .on('click.bs.vic-dropdown.data-api', '.vic-dropdown form', function (e) { e.stopPropagation() })
    .on('click.bs.vic-dropdown.data-api'  , toggle, Dropdown.prototype.toggle)
    .on('keydown.bs.vic-dropdown.data-api', toggle + ', [role=menu]' , Dropdown.prototype.keydown)

}($vic);

/* ========================================================================
 * Bootstrap: modal.js v3.0.3
 * http://getbootstrap.com/javascript/#modals
 * ========================================================================
 * Copyright 2013 Twitter, Inc.
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
 * ======================================================================== */


+function ($vic) { "use strict";

  // MODAL CLASS DEFINITION
  // ======================

  var VicModal = function (element, options) {
    this.options   = options
    this.$vicelement  = $vic(element)
    this.$vicbackdrop =
    this.isShown   = null

    if (this.options.remote) this.$vicelement.load(this.options.remote)
  }

  VicModal.DEFAULTS = {
      backdrop: true
    , keyboard: true
    , show: true
  }

  VicModal.prototype.toggle = function (_relatedTarget) {
    return this[!this.isShown ? 'show' : 'hide'](_relatedTarget)
  }

  VicModal.prototype.show = function (_relatedTarget) {
    var that = this
    var e    = $vic.Event('show.bs.vic-modal', { relatedTarget: _relatedTarget })

    this.$vicelement.trigger(e)

    if (this.isShown || e.isDefaultPrevented()) return

    this.isShown = true

    this.escape()

    this.$vicelement.on('click.dismiss.modal', '[data-dismiss="vic-modal"]', $vic.proxy(this.hide, this))

    this.backdrop(function () {
      var transition = $vic.support.transition && that.$vicelement.hasClass('vic-fade')

      if (!that.$vicelement.parent().length) {
        that.$vicelement.appendTo(document.body) // don't move modals dom position
      }

      that.$vicelement.show()

      if (transition) {
        that.$vicelement[0].offsetWidth // force reflow
      }

      that.$vicelement
        .addClass('vic-in')
        .attr('aria-hidden', false)

      that.enforceFocus()

      var e = $vic.Event('shown.bs.vic-modal', { relatedTarget: _relatedTarget })

      transition ?
        that.$vicelement.find('.vic-modal-dialog') // wait for modal to slide in
          .one($vic.support.transition.end, function () {
            that.$vicelement.focus().trigger(e)
          })
           :
        that.$vicelement.focus().trigger(e)
    })
  }

  VicModal.prototype.hide = function (e) {
    if (e) e.preventDefault()

    e = $vic.Event('hide.bs.vic-modal')

    this.$vicelement.trigger(e)

    if (!this.isShown || e.isDefaultPrevented()) return

    this.isShown = false

    this.escape()

    $vic(document).off('focusin.bs.vic-modal')

    this.$vicelement
      .removeClass('vic-in')
      .attr('aria-hidden', true)
      .off('click.dismiss.modal')

    $vic.support.transition && this.$vicelement.hasClass('vic-fade') ?
      this.$vicelement
        .one($vic.support.transition.end, $vic.proxy(this.hideVicModal, this))
         :
      this.hideVicModal()
  }

  VicModal.prototype.enforceFocus = function () {
    $vic(document)
      .off('focusin.bs.vic-modal') // guard against infinite focus loop
      .on('focusin.bs.vic-modal', $vic.proxy(function (e) {
        if (this.$vicelement[0] !== e.target && !this.$vicelement.has(e.target).length) {
          this.$vicelement.focus()
        }
      }, this))
  }

  VicModal.prototype.escape = function () {
    if (this.isShown && this.options.keyboard) {
      this.$vicelement.on('keyup.dismiss.bs.vic-modal', $vic.proxy(function (e) {
        e.which == 27 && this.hide()
      }, this))
    } else if (!this.isShown) {
      this.$vicelement.off('keyup.dismiss.bs.vic-modal')
    }
  }

  VicModal.prototype.hideVicModal = function () {
    var that = this
    this.$vicelement.hide()
    this.backdrop(function () {
      that.removeBackdrop()
      that.$vicelement.trigger('hidden.bs.vic-modal')
    })
  }

  VicModal.prototype.removeBackdrop = function () {
    this.$vicbackdrop && this.$vicbackdrop.remove()
    this.$vicbackdrop = null
  }

  VicModal.prototype.backdrop = function (callback) {
    var that    = this
    var animate = this.$vicelement.hasClass('vic-fade') ? 'vic-fade' : ''

    if (this.isShown && this.options.backdrop) {
      var doAnimate = $vic.support.transition && animate

      this.$vicbackdrop = $vic('<div class="vic-modal-backdrop ' + animate + '" />')
        .appendTo(document.body)

      this.$vicelement.on('click.dismiss.modal', $vic.proxy(function (e) {
        if (e.target !== e.currentTarget) return
        this.options.backdrop == 'static'
          ? this.$vicelement[0].focus.call(this.$vicelement[0])
          : this.hide.call(this)
      }, this))

      if (doAnimate) this.$vicbackdrop[0].offsetWidth // force reflow

      this.$vicbackdrop.addClass('vic-in')

      if (!callback) return

      doAnimate ?
        this.$vicbackdrop
          .one($vic.support.transition.end, callback)
          .vicemulateTransitionEnd(150) :
        callback()

    } else if (!this.isShown && this.$vicbackdrop) {
      this.$vicbackdrop.removeClass('vic-in')

      $vic.support.transition && this.$vicelement.hasClass('vic-fade')?
        this.$vicbackdrop
          .one($vic.support.transition.end, callback)
          .vicemulateTransitionEnd(150) :
        callback()

    } else if (callback) {
      callback()
    }
  }


  // MODAL PLUGIN DEFINITION
  // =======================

  var old = $vic.fn.vicmodal

  $vic.fn.vicmodal = function (option, _relatedTarget) {
    return this.each(function () {
      var $victhis   = $vic(this)
      var data    = $victhis.data('bs.vic-modal')
      var options = $vic.extend({}, VicModal.DEFAULTS, $victhis.data(), typeof option == 'object' && option)

      if (!data) $victhis.data('bs.vic-modal', (data = new VicModal(this, options)))
      if (typeof option == 'string') data[option](_relatedTarget)
      else if (options.show) data.show(_relatedTarget)
    })
  }

  $vic.fn.vicmodal.Constructor = VicModal


  // MODAL NO CONFLICT
  // =================

  $vic.fn.vicmodal.noConflict = function () {
    $vic.fn.vicmodal = old
    return this
  }


  // MODAL DATA-API
  // ==============

  $vic(document).on('click.bs.vic-modal.data-api', '[data-toggle="modal"]', function (e) {
    var $victhis   = $vic(this)
    var href    = $victhis.attr('href')
    var $victarget = $vic($victhis.attr('data-target') || (href && href.replace(/.*(?=#[^\s]+$vic)/, ''))) //strip for ie7
    var option  = $victarget.data('modal') ? 'toggle' : $vic.extend({ remote: !/#/.test(href) && href }, $victarget.data(), $victhis.data())

    e.preventDefault()

    $victarget
      .modal(option, this)
      .one('hide', function () {
        $victhis.is(':visible') && $victhis.focus()
      })
  })

  $vic(document)
    .on('show.bs.vic-modal',  '.modal', function () { $vic(document.body).addClass('vic-modal-open') })
    .on('hidden.bs.vic-modal', '.modal', function () { $vic(document.body).removeClass('vic-modal-open') })

}($vic);

/* ========================================================================
 * Bootstrap: tooltip.js v3.0.3
 * http://getbootstrap.com/javascript/#tooltip
 * Inspired by the original $vic.tipsy by Jason Frame
 * ========================================================================
 * Copyright 2013 Twitter, Inc.
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
 * ======================================================================== */


+function ($vic) { "use strict";

  // TOOLTIP PUBLIC CLASS DEFINITION
  // ===============================

  var Tooltip = function (element, options) {
    this.type       = null
    this.options    = null
    this.enabled    = null
    this.timeout    = null
    this.hoverState = null
    this.$vicelement   = null

    this.init('tooltip', element, options)
  }

  Tooltip.DEFAULTS = {
    animation: true
  , placement: 'top'
  , selector: false
  , template: '<div class="vic-tooltip"><div class="vic-tooltip-arrow"></div><div class="vic-tooltip-inner"></div></div>'
  , trigger: 'hover focus'
  , title: ''
  , delay: 0
  , html: false
  , container: false
  }

  Tooltip.prototype.init = function (type, element, options) {
    this.enabled  = true
    this.type     = type
    this.$vicelement = $vic(element)
    this.options  = this.getOptions(options)

    var triggers = this.options.trigger.split(' ')

    for (var i = triggers.length; i--;) {
      var trigger = triggers[i]

      if (trigger == 'click') {
        this.$vicelement.on('click.' + this.type, this.options.selector, $vic.proxy(this.toggle, this))
      } else if (trigger != 'manual') {
        var eventIn  = trigger == 'hover' ? 'mouseenter' : 'focus'
        var eventOut = trigger == 'hover' ? 'mouseleave' : 'blur'

        this.$vicelement.on(eventIn  + '.' + this.type, this.options.selector, $vic.proxy(this.enter, this))
        this.$vicelement.on(eventOut + '.' + this.type, this.options.selector, $vic.proxy(this.leave, this))
      }
    }

    this.options.selector ?
      (this._options = $vic.extend({}, this.options, { trigger: 'manual', selector: '' })) :
      this.fixTitle()
  }

  Tooltip.prototype.getDefaults = function () {
    return Tooltip.DEFAULTS
  }

  Tooltip.prototype.getOptions = function (options) {
    options = $vic.extend({}, this.getDefaults(), this.$vicelement.data(), options)

    if (options.delay && typeof options.delay == 'number') {
      options.delay = {
        show: options.delay
      , hide: options.delay
      }
    }

    return options
  }

  Tooltip.prototype.getDelegateOptions = function () {
    var options  = {}
    var defaults = this.getDefaults()

    this._options && $vic.each(this._options, function (key, value) {
      if (defaults[key] != value) options[key] = value
    })

    return options
  }

  Tooltip.prototype.enter = function (obj) {
    var self = obj instanceof this.constructor ?
      obj : $vic(obj.currentTarget)[this.type](this.getDelegateOptions()).data('bs.' + this.type)

    clearTimeout(self.timeout)

    self.hoverState = 'vic-in'

    if (!self.options.delay || !self.options.delay.show) return self.show()

    self.timeout = setTimeout(function () {
      if (self.hoverState == 'vic-in') self.show()
    }, self.options.delay.show)
  }

  Tooltip.prototype.leave = function (obj) {
    var self = obj instanceof this.constructor ?
      obj : $vic(obj.currentTarget)[this.type](this.getDelegateOptions()).data('bs.' + this.type)

    clearTimeout(self.timeout)

    self.hoverState = 'out'

    if (!self.options.delay || !self.options.delay.hide) return self.hide()

    self.timeout = setTimeout(function () {
      if (self.hoverState == 'out') self.hide()
    }, self.options.delay.hide)
  }

  Tooltip.prototype.show = function () {
    var e = $vic.Event('show.bs.'+ this.type)

    if (this.hasContent() && this.enabled) {
      this.$vicelement.trigger(e)

      if (e.isDefaultPrevented()) return

      var $victip = this.tip()

      this.setContent()

      if (this.options.animation) $victip.addClass('vic-fade')

      var placement = typeof this.options.placement == 'function' ?
        this.options.placement.call(this, $victip[0], this.$vicelement[0]) :
        this.options.placement

      var autoToken = /\s?auto?\s?/i
      var autoPlace = autoToken.test(placement)
      if (autoPlace) placement = placement.replace(autoToken, '') || 'top'

      $victip
        .detach()
        .css({ top: 0, left: 0, display: 'block' })
        .addClass('vic-'+placement)

      this.options.container ? $victip.appendTo(this.options.container) : $victip.insertAfter(this.$vicelement)

      var pos          = this.getPosition()
      var actualWidth  = $victip[0].offsetWidth
      var actualHeight = $victip[0].offsetHeight

      if (autoPlace) {
        var $vicparent = this.$vicelement.parent()

        var orgPlacement = placement
        var docScroll    = document.documentElement.scrollTop || document.body.scrollTop
        var parentWidth  = this.options.container == 'body' ? window.innerWidth  : $vicparent.outerWidth()
        var parentHeight = this.options.container == 'body' ? window.innerHeight : $vicparent.outerHeight()
        var parentLeft   = this.options.container == 'body' ? 0 : $vicparent.offset().left

        placement = placement == 'bottom' && pos.top   + pos.height  + actualHeight - docScroll > parentHeight  ? 'top'    :
                    placement == 'top'    && pos.top   - docScroll   - actualHeight < 0                         ? 'bottom' :
                    placement == 'right'  && pos.right + actualWidth > parentWidth                              ? 'left'   :
                    placement == 'left'   && pos.left  - actualWidth < parentLeft                               ? 'right'  :
                    placement

        $victip
          .removeClass('vic-'+orgPlacement)
          .addClass('vic-'+placement)
      }

      var calculatedOffset = this.getCalculatedOffset(placement, pos, actualWidth, actualHeight)

      this.applyPlacement(calculatedOffset, placement)
      this.$vicelement.trigger('shown.bs.' + this.type)
    }
  }

  Tooltip.prototype.applyPlacement = function(offset, placement) {
    var replace
    var $victip   = this.tip()
    var width  = $victip[0].offsetWidth
    var height = $victip[0].offsetHeight

    // manually read margins because getBoundingClientRect includes difference
    var marginTop = parseInt($victip.css('margin-top'), 10)
    var marginLeft = parseInt($victip.css('margin-left'), 10)

    // we must check for NaN for ie 8/9
    if (isNaN(marginTop))  marginTop  = 0
    if (isNaN(marginLeft)) marginLeft = 0

    offset.top  = offset.top  + marginTop
    offset.left = offset.left + marginLeft

    $victip
      .offset(offset)
      .addClass('vic-in')

    // check to see if placing tip in new offset caused the tip to resize itself
    var actualWidth  = $victip[0].offsetWidth
    var actualHeight = $victip[0].offsetHeight

    if (placement == 'top' && actualHeight != height) {
      replace = true
      offset.top = offset.top + height - actualHeight
    }

    if (/bottom|top/.test(placement)) {
      var delta = 0

      if (offset.left < 0) {
        delta       = offset.left * -2
        offset.left = 0

        $victip.offset(offset)

        actualWidth  = $victip[0].offsetWidth
        actualHeight = $victip[0].offsetHeight
      }

      this.replaceArrow(delta - width + actualWidth, actualWidth, 'left')
    } else {
      this.replaceArrow(actualHeight - height, actualHeight, 'top')
    }

    if (replace) $victip.offset(offset)
  }

  Tooltip.prototype.replaceArrow = function(delta, dimension, position) {
    this.arrow().css(position, delta ? (50 * (1 - delta / dimension) + "%") : '')
  }

  Tooltip.prototype.setContent = function () {
    var $victip  = this.tip()
    var title = this.getTitle()

    $victip.find('.vic-tooltip-inner')[this.options.html ? 'html' : 'text'](title)
    $victip.removeClass('vic-fade vic-in vic-top vic-bottom vic-left vic-right')
  }

  Tooltip.prototype.hide = function () {
    var that = this
    var $victip = this.tip()
    var e    = $vic.Event('hide.bs.' + this.type)

    function complete() {
      if (that.hoverState != 'vic-in') $victip.detach()
    }

    this.$vicelement.trigger(e)

    if (e.isDefaultPrevented()) return

    $victip.removeClass('vic-in')

    $vic.support.transition && this.$victip.hasClass('vic-fade') ?
      $victip
        .one($vic.support.transition.end, complete)
        .vicemulateTransitionEnd(150) :
      complete()

    this.$vicelement.trigger('hidden.bs.' + this.type)

    return this
  }

  Tooltip.prototype.fixTitle = function () {
    var $vice = this.$vicelement
    if ($vice.attr('title') || typeof($vice.attr('data-original-title')) != 'string') {
      $vice.attr('data-original-title', $vice.attr('title') || '').attr('title', '')
    }
  }

  Tooltip.prototype.hasContent = function () {
    return this.getTitle()
  }

  Tooltip.prototype.getPosition = function () {
    var el = this.$vicelement[0]
    return $vic.extend({}, (typeof el.getBoundingClientRect == 'function') ? el.getBoundingClientRect() : {
      width: el.offsetWidth
    , height: el.offsetHeight
    }, this.$vicelement.offset())
  }

  Tooltip.prototype.getCalculatedOffset = function (placement, pos, actualWidth, actualHeight) {
    return placement == 'bottom' ? { top: pos.top + pos.height,   left: pos.left + pos.width / 2 - actualWidth / 2  } :
           placement == 'top'    ? { top: pos.top - actualHeight, left: pos.left + pos.width / 2 - actualWidth / 2  } :
           placement == 'left'   ? { top: pos.top + pos.height / 2 - actualHeight / 2, left: pos.left - actualWidth } :
        /* placement == 'right' */ { top: pos.top + pos.height / 2 - actualHeight / 2, left: pos.left + pos.width   }
  }

  Tooltip.prototype.getTitle = function () {
    var title
    var $vice = this.$vicelement
    var o  = this.options

    title = $vice.attr('data-original-title')
      || (typeof o.title == 'function' ? o.title.call($vice[0]) :  o.title)

    return title
  }

  Tooltip.prototype.tip = function () {
    return this.$victip = this.$victip || $vic(this.options.template)
  }

  Tooltip.prototype.arrow = function () {
    return this.$vicarrow = this.$vicarrow || this.tip().find('.vic-tooltip-arrow')
  }

  Tooltip.prototype.validate = function () {
    if (!this.$vicelement[0].parentNode) {
      this.hide()
      this.$vicelement = null
      this.options  = null
    }
  }

  Tooltip.prototype.enable = function () {
    this.enabled = true
  }

  Tooltip.prototype.disable = function () {
    this.enabled = false
  }

  Tooltip.prototype.toggleEnabled = function () {
    this.enabled = !this.enabled
  }

  Tooltip.prototype.toggle = function (e) {
    var self = this
    if (e) {
      self = $vic(e.currentTarget).data('bs.' + this.type)
      if (!self) {
        self = new this.constructor(e.currentTarget, this.getDelegateOptions())
        $vic(e.currentTarget).data('bs.' + this.type, self)
      }
    }

    self.tip().hasClass('vic-in') ? self.leave(self) : self.enter(self)
  }

  Tooltip.prototype.destroy = function () {
    this.hide().$vicelement.off('.' + this.type).removeData('bs.' + this.type)
  }


  // TOOLTIP PLUGIN DEFINITION
  // =========================

  var old = $vic.fn.victooltip

  $vic.fn.victooltip = function (option) {
    return this.each(function () {
      var $victhis   = $vic(this)
      var data    = $victhis.data('bs.vic-tooltip')
      var options = typeof option == 'object' && option

      if (!data) $victhis.data('bs.vic-tooltip', (data = new Tooltip(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  $vic.fn.victooltip.Constructor = Tooltip


  // TOOLTIP NO CONFLICT
  // ===================

  $vic.fn.victooltip.noConflict = function () {
    $vic.fn.victooltip = old
    return this
  }

}($vic);

/* ========================================================================
 * Bootstrap: popover.js v3.0.3
 * http://getbootstrap.com/javascript/#popovers
 * ========================================================================
 * Copyright 2013 Twitter, Inc.
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
 * ======================================================================== */


+function ($vic) { "use strict";

  // POPOVER PUBLIC CLASS DEFINITION
  // ===============================

  var Popover = function (element, options) {
    this.init('popover', element, options)
  }

  if (!$vic.fn.victooltip) throw new Error('Popover requires tooltip.js')

  Popover.DEFAULTS = $vic.extend({} , $vic.fn.victooltip.Constructor.DEFAULTS, {
    placement: 'right'
  , trigger: 'click'
  , content: ''
  , template: '<div class="vic-popover"><div class="vic-arrow"></div><h3 class="vic-popover-title"></h3><div class="vic-popover-content"></div></div>'
  })


  // NOTE: POPOVER EXTENDS tooltip.js
  // ================================

  Popover.prototype = $vic.extend({}, $vic.fn.victooltip.Constructor.prototype)

  Popover.prototype.constructor = Popover

  Popover.prototype.getDefaults = function () {
    return Popover.DEFAULTS
  }

  Popover.prototype.setContent = function () {
    var $victip    = this.tip()
    var title   = this.getTitle()
    var content = this.getContent()

    $victip.find('.vic-popover-title')[this.options.html ? 'html' : 'text'](title)
    $victip.find('.vic-popover-content')[this.options.html ? 'html' : 'text'](content)

    $victip.removeClass('vic-fade vic-top vic-bottom vic-left vic-right vic-in')

    // IE8 doesn't accept hiding via the `:empty` pseudo selector, we have to do
    // this manually by checking the contents.
    if (!$victip.find('.vic-popover-title').html()) $victip.find('.vic-popover-title').hide()
  }

  Popover.prototype.hasContent = function () {
    return this.getTitle() || this.getContent()
  }

  Popover.prototype.getContent = function () {
    var $vice = this.$vicelement
    var o  = this.options

    return $vice.attr('data-content')
      || (typeof o.content == 'function' ?
            o.content.call($vice[0]) :
            o.content)
  }

  Popover.prototype.arrow = function () {
    return this.$vicarrow = this.$vicarrow || this.tip().find('.vic-arrow')
  }

  Popover.prototype.tip = function () {
    if (!this.$victip) this.$victip = $vic(this.options.template)
    return this.$victip
  }


  // POPOVER PLUGIN DEFINITION
  // =========================

  var old = $vic.fn.vicpopover

  $vic.fn.vicpopover = function (option) {
    return this.each(function () {
      var $victhis   = $vic(this)
      var data    = $victhis.data('bs.vic-popover')
      var options = typeof option == 'object' && option

      if (!data) $victhis.data('bs.vic-popover', (data = new Popover(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  $vic.fn.vicpopover.Constructor = Popover


  // POPOVER NO CONFLICT
  // ===================

  $vic.fn.vicpopover.noConflict = function () {
    $vic.fn.vicpopover = old
    return this
  }

}($vic);

/* ========================================================================
 * Bootstrap: scrollspy.js v3.0.3
 * http://getbootstrap.com/javascript/#scrollspy
 * ========================================================================
 * Copyright 2013 Twitter, Inc.
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
 * ======================================================================== */


+function ($vic) { "use strict";

  // SCROLLSPY CLASS DEFINITION
  // ==========================

  function ScrollSpy(element, options) {
    var href
    var process  = $vic.proxy(this.process, this)

    this.$vicelement       = $vic(element).is('body') ? $vic(window) : $vic(element)
    this.$vicbody          = $vic('body')
    this.$vicscrollElement = this.$vicelement.on('scroll.bs.scroll-spy.data-api', process)
    this.options        = $vic.extend({}, ScrollSpy.DEFAULTS, options)
    this.selector       = (this.options.target
      || ((href = $vic(element).attr('href')) && href.replace(/.*(?=#[^\s]+$vic)/, '')) //strip for ie7
      || '') + ' .nav li > a'
    this.offsets        = $vic([])
    this.targets        = $vic([])
    this.activeTarget   = null

    this.refresh()
    this.process()
  }

  ScrollSpy.DEFAULTS = {
    offset: 10
  }

  ScrollSpy.prototype.refresh = function () {
    var offsetMethod = this.$vicelement[0] == window ? 'offset' : 'position'

    this.offsets = $vic([])
    this.targets = $vic([])

    var self     = this
    var $victargets = this.$vicbody
      .find(this.selector)
      .map(function () {
        var $vicel   = $vic(this)
        var href  = $vicel.data('target') || $vicel.attr('href')
        var $vichref = /^#\w/.test(href) && $vic(href)

        return ($vichref
          && $vichref.length
          && [[ $vichref[offsetMethod]().top + (!$vic.isWindow(self.$vicscrollElement.get(0)) && self.$vicscrollElement.scrollTop()), href ]]) || null
      })
      .sort(function (a, b) { return a[0] - b[0] })
      .each(function () {
        self.offsets.push(this[0])
        self.targets.push(this[1])
      })
  }

  ScrollSpy.prototype.process = function () {
    var scrollTop    = this.$vicscrollElement.scrollTop() + this.options.offset
    var scrollHeight = this.$vicscrollElement[0].scrollHeight || this.$vicbody[0].scrollHeight
    var maxScroll    = scrollHeight - this.$vicscrollElement.height()
    var offsets      = this.offsets
    var targets      = this.targets
    var activeTarget = this.activeTarget
    var i

    if (scrollTop >= maxScroll) {
      return activeTarget != (i = targets.last()[0]) && this.activate(i)
    }

    for (i = offsets.length; i--;) {
      activeTarget != targets[i]
        && scrollTop >= offsets[i]
        && (!offsets[i + 1] || scrollTop <= offsets[i + 1])
        && this.activate( targets[i] )
    }
  }

  ScrollSpy.prototype.activate = function (target) {
    this.activeTarget = target

    $vic(this.selector)
      .parents('.vic-active')
      .removeClass('vic-active')

    var selector = this.selector
      + '[data-target="' + target + '"],'
      + this.selector + '[href="' + target + '"]'

    var active = $vic(selector)
      .parents('li')
      .addClass('vic-active')

    if (active.parent('.vic-dropdown-menu').length)  {
      active = active
        .closest('li.vic-dropdown')
        .addClass('vic-active')
    }

    active.trigger('activate.bs.scrollspy')
  }


  // SCROLLSPY PLUGIN DEFINITION
  // ===========================

  var old = $vic.fn.vicscrollspy

  $vic.fn.vicscrollspy = function (option) {
    return this.each(function () {
      var $victhis   = $vic(this)
      var data    = $victhis.data('bs.vic-scrollspy')
      var options = typeof option == 'object' && option

      if (!data) $victhis.data('bs.vic-scrollspy', (data = new ScrollSpy(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  $vic.fn.vicscrollspy.Constructor = ScrollSpy


  // SCROLLSPY NO CONFLICT
  // =====================

  $vic.fn.vicscrollspy.noConflict = function () {
    $vic.fn.vicscrollspy = old
    return this
  }


  // SCROLLSPY DATA-API
  // ==================

  $vic(window).on('load', function () {
    $vic('[data-spy="scroll"]').each(function () {
      var $vicspy = $vic(this)
      $vicspy.scrollspy($vicspy.data())
    })
  })

}($vic);

/* ========================================================================
 * Bootstrap: tab.js v3.0.3
 * http://getbootstrap.com/javascript/#tabs
 * ========================================================================
 * Copyright 2013 Twitter, Inc.
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
 * ======================================================================== */


+function ($vic) { "use strict";

  // TAB CLASS DEFINITION
  // ====================

  var Tab = function (element) {
    this.element = $vic(element)
  }

  Tab.prototype.show = function () {
    var $victhis    = this.element
    var $vicul      = $victhis.closest('ul:not(.vic-dropdown-menu)')
    var selector = $victhis.data('target')

    if (!selector) {
      selector = $victhis.attr('href')
      selector = selector && selector.replace(/.*(?=#[^\s]*$vic)/, '') //strip for ie7
    }

    if ($victhis.parent('li').hasClass('vic-active')) return

    var previous = $vicul.find('.vic-active:last a')[0]
    var e        = $vic.Event('show.bs.tab', {
      relatedTarget: previous
    })

    $victhis.trigger(e)

    if (e.isDefaultPrevented()) return

    var $victarget = $vic(selector)

    this.activate($victhis.parent('li'), $vicul)
    this.activate($victarget, $victarget.parent(), function () {
      $victhis.trigger({
        type: 'shown.bs.tab'
      , relatedTarget: previous
      })
    })
  }

  Tab.prototype.activate = function (element, container, callback) {
    var $vicactive    = container.find('> .vic-active')
    var transition = callback
      && $vic.support.transition
      && $vicactive.hasClass('vic-fade')

    function next() {
      $vicactive
        .removeClass('vic-active')
        .find('> .vic-dropdown-menu > .vic-active')
        .removeClass('vic-active')

      element.addClass('vic-active')

      if (transition) {
        element[0].offsetWidth // reflow for transition
        element.addClass('vic-in')
      } else {
        element.removeClass('vic-fade')
      }

      if (element.parent('.vic-dropdown-menu')) {
        element.closest('li.vic-dropdown').addClass('vic-active')
      }

      callback && callback()
    }

    transition ?
      $vicactive
        .one($vic.support.transition.end, next)
        .vicemulateTransitionEnd(150) :
      next()

    $vicactive.removeClass('vic-in')
  }


  // TAB PLUGIN DEFINITION
  // =====================

  var old = $vic.fn.victab

  $vic.fn.victab = function ( option ) {
    return this.each(function () {
      var $victhis = $vic(this)
      var data  = $victhis.data('bs.vic-tab')

      if (!data) $victhis.data('bs.vic-tab', (data = new Tab(this)))
      if (typeof option == 'string') data[option]()
    })
  }

  $vic.fn.victab.Constructor = Tab


  // TAB NO CONFLICT
  // ===============

  $vic.fn.victab.noConflict = function () {
    $vic.fn.victab = old
    return this
  }


  // TAB DATA-API
  // ============

  $vic(document).on('click.bs.tab.data-api', '[data-toggle="vic-tab"], [data-toggle="vic-pill"]', function (e) {
    e.preventDefault()
    $vic(this).victab('show')
  })

}($vic);

/* ========================================================================
 * Bootstrap: affix.js v3.0.3
 * http://getbootstrap.com/javascript/#affix
 * ========================================================================
 * Copyright 2013 Twitter, Inc.
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
 * ======================================================================== */


+function ($vic) { "use strict";

  // AFFIX CLASS DEFINITION
  // ======================

  var Affix = function (element, options) {
    this.options = $vic.extend({}, Affix.DEFAULTS, options)
    this.$vicwindow = $vic(window)
      .on('scroll.bs.affix.data-api', $vic.proxy(this.checkPosition, this))
      .on('click.bs.affix.data-api',  $vic.proxy(this.checkPositionWithEventLoop, this))

    this.$vicelement = $vic(element)
    this.affixed  =
    this.unpin    = null

    this.checkPosition()
  }

  Affix.RESET = 'affix affix-top affix-bottom'

  Affix.DEFAULTS = {
    offset: 0
  }

  Affix.prototype.checkPositionWithEventLoop = function () {
    setTimeout($vic.proxy(this.checkPosition, this), 1)
  }

  Affix.prototype.checkPosition = function () {
    if (!this.$vicelement.is(':visible')) return

    var scrollHeight = $vic(document).height()
    var scrollTop    = this.$vicwindow.scrollTop()
    var position     = this.$vicelement.offset()
    var offset       = this.options.offset
    var offsetTop    = offset.top
    var offsetBottom = offset.bottom

    if (typeof offset != 'object')         offsetBottom = offsetTop = offset
    if (typeof offsetTop == 'function')    offsetTop    = offset.top()
    if (typeof offsetBottom == 'function') offsetBottom = offset.bottom()

    var affix = this.unpin   != null && (scrollTop + this.unpin <= position.top) ? false :
                offsetBottom != null && (position.top + this.$vicelement.height() >= scrollHeight - offsetBottom) ? 'bottom' :
                offsetTop    != null && (scrollTop <= offsetTop) ? 'top' : false

    if (this.affixed === affix) return
    if (this.unpin) this.$vicelement.css('top', '')

    this.affixed = affix
    this.unpin   = affix == 'bottom' ? position.top - scrollTop : null

    this.$vicelement.removeClass(Affix.RESET).addClass('vic-affix' + (affix ? '-' + affix : ''))

    if (affix == 'bottom') {
      this.$vicelement.offset({ top: document.body.offsetHeight - offsetBottom - this.$vicelement.height() })
    }
  }


  // AFFIX PLUGIN DEFINITION
  // =======================

  var old = $vic.fn.vicaffix

  $vic.fn.vicaffix = function (option) {
    return this.each(function () {
      var $victhis   = $vic(this)
      var data    = $victhis.data('bs.vic-affix')
      var options = typeof option == 'object' && option

      if (!data) $victhis.data('bs.vic-affix', (data = new Affix(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  $vic.fn.vicaffix.Constructor = Affix


  // AFFIX NO CONFLICT
  // =================

  $vic.fn.vicaffix.noConflict = function () {
    $vic.fn.vicaffix = old
    return this
  }


  // AFFIX DATA-API
  // ==============

  $vic(window).on('load', function () {
    $vic('[data-spy="affix"]').each(function () {
      var $vicspy = $vic(this)
      var data = $vicspy.data()

      data.offset = data.offset || {}

      if (data.offsetBottom) data.offset.bottom = data.offsetBottom
      if (data.offsetTop)    data.offset.top    = data.offsetTop

      $vicspy.affix(data)
    })
  })

}($vic);

/*
 * jQuery UI Nested Sortable
 * v 1.3.5 / 21 jun 2012
 * http://mjsarfatti.com/code/nestedSortable
 *
 * Depends on:
 *   jquery.ui.sortable.js 1.8+
 *
 * Copyright (c) 2010-2012 Manuele J Sarfatti
 * Licensed under the MIT License
 * http://www.opensource.org/licenses/mit-license.php
 */

(function($vic) {

    $vic.widget("mjs.nestedSortable", $vic.extend({}, $vic.ui.sortable.prototype, {

        options: {
            tabSize: 20,
            disableNesting: 'mjs-nestedSortable-no-nesting',
            errorClass: 'mjs-nestedSortable-error',
            doNotClear: false,
            listType: 'ol',
            maxLevels: 0,
            protectRoot: false,
            rootID: null,
            rtl: false,
            isAllowed: function(item, parent) { return true; }
        },

        _create: function() {
            this.element.data('sortable', this.element.data('nestedSortable'));

            if (!this.element.is(this.options.listType))
                throw new Error('nestedSortable: Please check the listType option is set to your actual list type');

            return $vic.ui.sortable.prototype._create.apply(this, arguments);
        },

        destroy: function() {
            this.element
                .removeData("nestedSortable")
                .unbind(".nestedSortable");
            return $vic.ui.sortable.prototype.destroy.apply(this, arguments);
        },

        _mouseDrag: function(event) {

            //Compute the helpers position
            this.position = this._generatePosition(event);
            this.positionAbs = this._convertPositionTo("absolute");

            if (!this.lastPositionAbs) {
                this.lastPositionAbs = this.positionAbs;
            }

            var o = this.options;

            //Do scrolling
            if(this.options.scroll) {
                var scrolled = false;
                if(this.scrollParent[0] != document && this.scrollParent[0].tagName != 'HTML') {

                    if((this.overflowOffset.top + this.scrollParent[0].offsetHeight) - event.pageY < o.scrollSensitivity)
                        this.scrollParent[0].scrollTop = scrolled = this.scrollParent[0].scrollTop + o.scrollSpeed;
                    else if(event.pageY - this.overflowOffset.top < o.scrollSensitivity)
                        this.scrollParent[0].scrollTop = scrolled = this.scrollParent[0].scrollTop - o.scrollSpeed;

                    if((this.overflowOffset.left + this.scrollParent[0].offsetWidth) - event.pageX < o.scrollSensitivity)
                        this.scrollParent[0].scrollLeft = scrolled = this.scrollParent[0].scrollLeft + o.scrollSpeed;
                    else if(event.pageX - this.overflowOffset.left < o.scrollSensitivity)
                        this.scrollParent[0].scrollLeft = scrolled = this.scrollParent[0].scrollLeft - o.scrollSpeed;

                } else {

                    if(event.pageY - $vic(document).scrollTop() < o.scrollSensitivity)
                        scrolled = $vic(document).scrollTop($vic(document).scrollTop() - o.scrollSpeed);
                    else if($vic(window).height() - (event.pageY - $vic(document).scrollTop()) < o.scrollSensitivity)
                        scrolled = $vic(document).scrollTop($vic(document).scrollTop() + o.scrollSpeed);

                    if(event.pageX - $vic(document).scrollLeft() < o.scrollSensitivity)
                        scrolled = $vic(document).scrollLeft($vic(document).scrollLeft() - o.scrollSpeed);
                    else if($vic(window).width() - (event.pageX - $vic(document).scrollLeft()) < o.scrollSensitivity)
                        scrolled = $vic(document).scrollLeft($vic(document).scrollLeft() + o.scrollSpeed);

                }

                if(scrolled !== false && $vic.ui.ddmanager && !o.dropBehaviour)
                    $vic.ui.ddmanager.prepareOffsets(this, event);
            }

            //Regenerate the absolute position used for position checks
            this.positionAbs = this._convertPositionTo("absolute");

      // Find the top offset before rearrangement,
      var previousTopOffset = this.placeholder.offset().top;

            //Set the helper position
            if(!this.options.axis || this.options.axis != "y") this.helper[0].style.left = this.position.left+'px';
            if(!this.options.axis || this.options.axis != "x") this.helper[0].style.top = this.position.top+'px';

            //Rearrange
            for (var i = this.items.length - 1; i >= 0; i--) {

                //Cache variables and intersection, continue if no intersection
                var item = this.items[i], itemElement = item.item[0], intersection = this._intersectsWithPointer(item);
                if (!intersection) continue;

                if(itemElement != this.currentItem[0] //cannot intersect with itself
                    &&  this.placeholder[intersection == 1 ? "next" : "prev"]()[0] != itemElement //no useless actions that have been done before
                    &&  !$vic.contains(this.placeholder[0], itemElement) //no action if the item moved is the parent of the item checked
                    && (this.options.type == 'semi-dynamic' ? !$vic.contains(this.element[0], itemElement) : true)
                    //&& itemElement.parentNode == this.placeholder[0].parentNode // only rearrange items within the same container
                ) {

                    $vic(itemElement).mouseenter();

                    this.direction = intersection == 1 ? "down" : "up";

                    if (this.options.tolerance == "pointer" || this._intersectsWithSides(item)) {
                        $vic(itemElement).mouseleave();
                        this._rearrange(event, item);
                    } else {
                        break;
                    }

                    // Clear emtpy ul's/ol's
                    this._clearEmpty(itemElement);

                    this._trigger("change", event, this._uiHash());
                    break;
                }
            }

            var parentItem = (this.placeholder[0].parentNode.parentNode &&
                             $vic(this.placeholder[0].parentNode.parentNode).closest('.ui-sortable').length)
                                ? $vic(this.placeholder[0].parentNode.parentNode)
                                : null,
                level = this._getLevel(this.placeholder),
                childLevels = this._getChildLevels(this.helper);

      // To find the previous sibling in the list, keep backtracking until we hit a valid list item.
            var previousItem = this.placeholder[0].previousSibling ? $vic(this.placeholder[0].previousSibling) : null;
            if (previousItem != null) {
                while (previousItem[0].nodeName.toLowerCase() != 'li' || previousItem[0] == this.currentItem[0] || previousItem[0] == this.helper[0]) {
                    if (previousItem[0].previousSibling) {
                        previousItem = $vic(previousItem[0].previousSibling);
                    } else {
                        previousItem = null;
                        break;
                    }
                }
            }

      // To find the next sibling in the list, keep stepping forward until we hit a valid list item.
      var nextItem = this.placeholder[0].nextSibling ? $vic(this.placeholder[0].nextSibling) : null;
      if (nextItem != null) {
        while (nextItem[0].nodeName.toLowerCase() != 'li' || nextItem[0] == this.currentItem[0] || nextItem[0] == this.helper[0]) {
          if (nextItem[0].nextSibling) {
            nextItem = $vic(nextItem[0].nextSibling);
          } else {
            nextItem = null;
            break;
          }
        }
      }

            var newList = document.createElement(o.listType);

            this.beyondMaxLevels = 0;

            // If the item is moved to the left, send it to its parent's level unless there are siblings below it.
            if (parentItem != null && nextItem == null &&
                    (o.rtl && (this.positionAbs.left + this.helper.outerWidth() > parentItem.offset().left + parentItem.outerWidth()) ||
                    !o.rtl && (this.positionAbs.left < parentItem.offset().left))) {
                parentItem.after(this.placeholder[0]);
                this._clearEmpty(parentItem[0]);
                this._trigger("change", event, this._uiHash());
            }
            // If the item is below a sibling and is moved to the right, make it a child of that sibling.
            else if (previousItem != null &&
                        (o.rtl && (this.positionAbs.left + this.helper.outerWidth() < previousItem.offset().left + previousItem.outerWidth() - o.tabSize) ||
                        !o.rtl && (this.positionAbs.left > previousItem.offset().left + o.tabSize))) {
                this._isAllowed(previousItem, level, level+childLevels+1);
                if (!previousItem.children(o.listType).length) {
                    previousItem[0].appendChild(newList);
                }
        // If this item is being moved from the top, add it to the top of the list.
        if (previousTopOffset && (previousTopOffset <= previousItem.offset().top)) {
          previousItem.children(o.listType).prepend(this.placeholder);
        }
        // Otherwise, add it to the bottom of the list.
        else {
                  previousItem.children(o.listType)[0].appendChild(this.placeholder[0]);
        }
                this._trigger("change", event, this._uiHash());
            }
            else {
                this._isAllowed(parentItem, level, level+childLevels);
            }

            //Post events to containers
            this._contactContainers(event);

            //Interconnect with droppables
            if($vic.ui.ddmanager) $vic.ui.ddmanager.drag(this, event);

            //Call callbacks
            this._trigger('sort', event, this._uiHash());

            this.lastPositionAbs = this.positionAbs;
            return false;

        },

        _mouseStop: function(event, noPropagation) {

            // If the item is in a position not allowed, send it back
            if (this.beyondMaxLevels) {

                this.placeholder.removeClass(this.options.errorClass);

                if (this.domPosition.prev) {
                    $vic(this.domPosition.prev).after(this.placeholder);
                } else {
                    $vic(this.domPosition.parent).prepend(this.placeholder);
                }

                this._trigger("revert", event, this._uiHash());

            }

            // Clean last empty ul/ol
            for (var i = this.items.length - 1; i >= 0; i--) {
                var item = this.items[i].item[0];
                this._clearEmpty(item);
            }

            $vic.ui.sortable.prototype._mouseStop.apply(this, arguments);

        },

        serialize: function(options) {

            var o = $vic.extend({}, this.options, options),
                items = this._getItemsAsjQuery(o && o.connected),
                str = [];

            $vic(items).each(function() {
                var res = ($vic(o.item || this).attr(o.attribute || 'id') || '')
                        .match(o.expression || (/(.+)[-=_](.+)/)),
                    pid = ($vic(o.item || this).parent(o.listType)
                        .parent(o.items)
                        .attr(o.attribute || 'id') || '')
                        .match(o.expression || (/(.+)[-=_](.+)/));

                if (res) {
                    str.push(((o.key || res[1]) + '[' + (o.key && o.expression ? res[1] : res[2]) + ']')
                        + '='
                        + (pid ? (o.key && o.expression ? pid[1] : pid[2]) : o.rootID));
                }
            });

            if(!str.length && o.key) {
                str.push(o.key + '=');
            }

            return str.join('&');

        },

        toHierarchy: function(options) {

            var o = $vic.extend({}, this.options, options),
                sDepth = o.startDepthCount || 0,
                ret = [];

            $vic(this.element).children(o.items).each(function () {
                var level = _recursiveItems(this);
                ret.push(level);
            });

            return ret;

            function _recursiveItems(item) {
                var id = ($vic(item).attr(o.attribute || 'id') || '').match(o.expression || (/(.+)[-=_](.+)/));
                if (id) {
                    var currentItem = {"id" : id[2]};
                    if ($vic(item).children(o.listType).children(o.items).length > 0) {
                        currentItem.children = [];
                        $vic(item).children(o.listType).children(o.items).each(function() {
                            var level = _recursiveItems(this);
                            currentItem.children.push(level);
                        });
                    }
                    return currentItem;
                }
            }
        },

        toArray: function(options) {

            var o = $vic.extend({}, this.options, options),
                sDepth = o.startDepthCount || 0,
                ret = [],
                left = 2;

            ret.push({
                "item_id": o.rootID,
                "parent_id": 'none',
                "depth": sDepth,
                "left": '1',
                "right": ($vic(o.items, this.element).length + 1) * 2
            });

            $vic(this.element).children(o.items).each(function () {
                left = _recursiveArray(this, sDepth + 1, left);
            });

            ret = ret.sort(function(a,b){ return (a.left - b.left); });

            return ret;

            function _recursiveArray(item, depth, left) {

                var right = left + 1,
                    id,
                    pid;

                if ($vic(item).children(o.listType).children(o.items).length > 0) {
                    depth ++;
                    $vic(item).children(o.listType).children(o.items).each(function () {
                        right = _recursiveArray($vic(this), depth, right);
                    });
                    depth --;
                }

                id = ($vic(item).attr(o.attribute || 'id')).match(o.expression || (/(.+)[-=_](.+)/));

                if (depth === sDepth + 1) {
                    pid = o.rootID;
                } else {
                    var parentItem = ($vic(item).parent(o.listType)
                                             .parent(o.items)
                                             .attr(o.attribute || 'id'))
                                             .match(o.expression || (/(.+)[-=_](.+)/));
                    pid = parentItem[2];
                }

                if (id) {
                        ret.push({"item_id": id[2], "parent_id": pid, "depth": depth, "left": left, "right": right});
                }

                left = right + 1;
                return left;
            }

        },

        _clearEmpty: function(item) {

            var emptyList = $vic(item).children(this.options.listType);
            if (emptyList.length && !emptyList.children().length && !this.options.doNotClear) {
                emptyList.remove();
            }

        },

        _getLevel: function(item) {

            var level = 1;

            if (this.options.listType) {
                var list = item.closest(this.options.listType);
                while (list && list.length > 0 &&
                        !list.is('.ui-sortable')) {
                    level++;
                    list = list.parent().closest(this.options.listType);
                }
            }

            return level;
        },

        _getChildLevels: function(parent, depth) {
            var self = this,
                o = this.options,
                result = 0;
            depth = depth || 0;

            $vic(parent).children(o.listType).children(o.items).each(function (index, child) {
                    result = Math.max(self._getChildLevels(child, depth + 1), result);
            });

            return depth ? result + 1 : result;
        },

        _isAllowed: function(parentItem, level, levels) {
            var o = this.options,
                isRoot = $vic(this.domPosition.parent).hasClass('ui-sortable') ? true : false,
                maxLevels = this.placeholder.closest('.ui-sortable').nestedSortable('option', 'maxLevels'); // this takes into account the maxLevels set to the recipient list

            // Is the root protected?
            // Are we trying to nest under a no-nest?
            // Are we nesting too deep?
            if (!o.isAllowed(this.currentItem, parentItem) ||
                parentItem && parentItem.hasClass(o.disableNesting) ||
                o.protectRoot && (parentItem == null && !isRoot || isRoot && level > 1)) {
                    this.placeholder.addClass(o.errorClass);
                    if (maxLevels < levels && maxLevels != 0) {
                        this.beyondMaxLevels = levels - maxLevels;
                    } else {
                        this.beyondMaxLevels = 1;
                    }
            } else {
                if (maxLevels < levels && maxLevels != 0) {
                    this.placeholder.addClass(o.errorClass);
                    this.beyondMaxLevels = levels - maxLevels;
                } else {
                    this.placeholder.removeClass(o.errorClass);
                    this.beyondMaxLevels = 0;
                }
            }
        }

    }));

    $vic.mjs.nestedSortable.prototype.options = $vic.extend({}, $vic.ui.sortable.prototype.options, $vic.mjs.nestedSortable.prototype.options);
})($vic);

﻿/* =========================================================
 * bootstrap-datetimepicker.js
 * =========================================================
 * Copyright 2012 Stefan Petre
 * Improvements by Andrew Rowls
 * Improvements by Sébastien Malot
 * Improvements by Yun Lai
 * Project URL : http://www.malot.fr/bootstrap-datetimepicker
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
 * ========================================================= */

/*
 * Improvement by CuGBabyBeaR @ 2013-09-12
 *
 * Make it work in bootstrap v3
 */

!function ($vic) {

	function UTCDate() {
		return new Date(Date.UTC.apply(Date, arguments));
	}

	function UTCToday() {
		var today = new Date();
		return UTCDate(today.getUTCFullYear(), today.getUTCMonth(), today.getUTCDate(), today.getUTCHours(), today.getUTCMinutes(), today.getUTCSeconds(), 0);
	}

	// Picker object

	var Datetimepicker = function (element, options) {
		var that = this;

		this.element = $vic(element);


		this.language = options.language || this.element.data('date-language') || "fr";
		this.language = this.language in dates ? this.language : "fr";
		this.isRTL = dates[this.language].rtl || false;
		this.formatType = options.formatType || this.element.data('format-type') || 'standard';
		this.format = DPGlobal.parseFormat(options.format || this.element.data('date-format') || dates[this.language].format || DPGlobal.getDefaultFormat(this.formatType, 'input'), this.formatType);
		this.isInline = false;
		this.isVisible = false;
		this.isInput = this.element.is('input');

		this.bootcssVer = this.isInput ? (this.element.is('.v-form-group__input') ? 3 : 2) : ( this.bootcssVer = this.element.is('.v-form-group__input-group') ? 3 : 2 );

		this.component = this.element.is('.v-date') ? ( this.bootcssVer == 3 ? this.element.find('.v-form-group__addon svg, .v-form-group__addon .v-glyphicon-th, .v-form-group__addon .v-glyphicon-time, .v-form-group__addon .v-glyphicon-calendar').parent() : this.element.find('.v-add-on .icon-th, .add-on .icon-time, .add-on .icon-calendar').parent()) : false;
		this.componentReset = this.element.is('.v-date') ? ( this.bootcssVer == 3 ? this.element.find('.v-form-group__addon .v-glyphicon-remove').parent() : this.element.find('.v-add-on .icon-remove').parent()) : false;
		this.hasInput = this.component && this.element.find('input').length;
		if (this.component && this.component.length === 0) {
			this.component = false;
		}
		this.linkField = options.linkField || this.element.data('link-field') || false;
		this.linkFormat = DPGlobal.parseFormat(options.linkFormat || this.element.data('link-format') || DPGlobal.getDefaultFormat(this.formatType, 'link'), this.formatType);
		this.minuteStep = options.minuteStep || this.element.data('minute-step') || 5;
		this.pickerPosition = options.pickerPosition || this.element.data('picker-position') || 'bottom-right';
		this.showMeridian = options.showMeridian || this.element.data('show-meridian') || false;
		this.initialDate = options.initialDate || new Date();

		this._attachEvents();

		this.formatViewType = "datetime";
		if ('formatViewType' in options) {
			this.formatViewType = options.formatViewType;
		} else if ('formatViewType' in this.element.data()) {
			this.formatViewType = this.element.data('formatViewType');
		}

		this.minView = 0;
		if ('minView' in options) {
			this.minView = options.minView;
		} else if ('minView' in this.element.data()) {
			this.minView = this.element.data('min-view');
		}
		this.minView = DPGlobal.convertViewMode(this.minView);

		this.maxView = DPGlobal.modes.length - 1;
		if ('maxView' in options) {
			this.maxView = options.maxView;
		} else if ('maxView' in this.element.data()) {
			this.maxView = this.element.data('max-view');
		}
		this.maxView = DPGlobal.convertViewMode(this.maxView);

		this.wheelViewModeNavigation = false;
		if ('wheelViewModeNavigation' in options) {
			this.wheelViewModeNavigation = options.wheelViewModeNavigation;
		} else if ('wheelViewModeNavigation' in this.element.data()) {
			this.wheelViewModeNavigation = this.element.data('view-mode-wheel-navigation');
		}

		this.wheelViewModeNavigationInverseDirection = false;

		if ('wheelViewModeNavigationInverseDirection' in options) {
			this.wheelViewModeNavigationInverseDirection = options.wheelViewModeNavigationInverseDirection;
		} else if ('wheelViewModeNavigationInverseDirection' in this.element.data()) {
			this.wheelViewModeNavigationInverseDirection = this.element.data('view-mode-wheel-navigation-inverse-dir');
		}

		this.wheelViewModeNavigationDelay = 100;
		if ('wheelViewModeNavigationDelay' in options) {
			this.wheelViewModeNavigationDelay = options.wheelViewModeNavigationDelay;
		} else if ('wheelViewModeNavigationDelay' in this.element.data()) {
			this.wheelViewModeNavigationDelay = this.element.data('view-mode-wheel-navigation-delay');
		}

		this.startViewMode = 2;
		if ('startView' in options) {
			this.startViewMode = options.startView;
		} else if ('startView' in this.element.data()) {
			this.startViewMode = this.element.data('start-view');
		}
		this.startViewMode = DPGlobal.convertViewMode(this.startViewMode);
		this.viewMode = this.startViewMode;

		this.viewSelect = this.minView;
		if ('viewSelect' in options) {
			this.viewSelect = options.viewSelect;
		} else if ('viewSelect' in this.element.data()) {
			this.viewSelect = this.element.data('view-select');
		}
		this.viewSelect = DPGlobal.convertViewMode(this.viewSelect);

		this.forceParse = true;
		if ('forceParse' in options) {
			this.forceParse = options.forceParse;
		} else if ('dateForceParse' in this.element.data()) {
			this.forceParse = this.element.data('date-force-parse');
		}

		this.picker = $vic((this.bootcssVer == 3) ? DPGlobal.templateV3 : DPGlobal.template)
			.appendTo(this.isInline ? this.element : 'body')
			.on({
				click:     $vic.proxy(this.click, this),
				mousedown: $vic.proxy(this.mousedown, this)
			});

		if (this.wheelViewModeNavigation) {
			if ($vic.fn.mousewheel) {
				this.picker.on({mousewheel: $vic.proxy(this.mousewheel, this)});
			} else {
				console.log("Mouse Wheel event is not supported. Please include the jQuery Mouse Wheel plugin before enabling this option");
			}
		}

		if (this.isInline) {
			this.picker.addClass('v-datetimepicker-inline');
		} else {
			this.picker.addClass('v-datetimepicker-dropdown-' + this.pickerPosition + ' v-dropdown-menu');
		}
		if (this.isRTL) {
			this.picker.addClass('v-datetimepicker-rtl');
			if (this.bootcssVer == 3) {
				this.picker.find('.v-prev span, .v-next span')
					.toggleClass('v-glyphicon-arrow-left v-glyphicon-arrow-right');
			} else {
				this.picker.find('.v-prev i, .v-next i')
					.toggleClass('icon-arrow-left icon-arrow-right');
			}
        }
		$vic(document).on('mousedown', function (e) {
			// Clicked outside the datetimepicker, hide it
			if ($vic(e.target).closest('.v-datetimepicker').length === 0) {
				that.hide();
			}
		});

		this.autoclose = false;
		if ('autoclose' in options) {
			this.autoclose = options.autoclose;
		} else if ('dateAutoclose' in this.element.data()) {
			this.autoclose = this.element.data('date-autoclose');
		}

		this.keyboardNavigation = true;
		if ('keyboardNavigation' in options) {
			this.keyboardNavigation = options.keyboardNavigation;
		} else if ('dateKeyboardNavigation' in this.element.data()) {
			this.keyboardNavigation = this.element.data('date-keyboard-navigation');
		}

		this.todayBtn = (options.todayBtn || this.element.data('date-today-btn') || false);
		this.todayHighlight = (options.todayHighlight || this.element.data('date-today-highlight') || false);

		this.weekStart = ((options.weekStart || this.element.data('date-weekstart') || dates[this.language].weekStart || 0) % 7);
		this.weekEnd = ((this.weekStart + 6) % 7);
		this.startDate = -Infinity;
		this.endDate = Infinity;
		this.daysOfWeekDisabled = [];
		this.setStartDate(options.startDate || this.element.data('date-startdate'));
		this.setEndDate(options.endDate || this.element.data('date-enddate'));
		this.setDaysOfWeekDisabled(options.daysOfWeekDisabled || this.element.data('date-days-of-week-disabled'));
		this.fillDow();
		this.fillMonths();
		this.update();
		this.showMode();

		if (this.isInline) {
			this.show();
		}
	};

	Datetimepicker.prototype = {
		constructor: Datetimepicker,

		_events:       [],
		_attachEvents: function () {
			this._detachEvents();
			if (this.isInput) { // single input
				this._events = [
					[this.element, {
						focus:   $vic.proxy(this.show, this),
						keyup:   $vic.proxy(this.update, this),
						keydown: $vic.proxy(this.keydown, this)
					}]
				];
			}
			else if (this.component && this.hasInput) { // component: input + button
				this._events = [
					// For components that are not readonly, allow keyboard nav
					[this.element.find('input'), {
						focus:   $vic.proxy(this.show, this),
						keyup:   $vic.proxy(this.update, this),
						keydown: $vic.proxy(this.keydown, this)
					}],
					[this.component, {
						click: $vic.proxy(this.show, this)
					}]
				];
				if (this.componentReset) {
					this._events.push([
						this.componentReset,
						{click: $vic.proxy(this.reset, this)}
					]);
				}
			}
			else if (this.element.is('div')) {  // inline datetimepicker
				this.isInline = true;
			}
			else {
				this._events = [
					[this.element, {
						click: $vic.proxy(this.show, this)
					}]
				];
			}
			for (var i = 0, el, ev; i < this._events.length; i++) {
				el = this._events[i][0];
				ev = this._events[i][1];
				el.on(ev);
			}
		},

		_detachEvents: function () {
			for (var i = 0, el, ev; i < this._events.length; i++) {
				el = this._events[i][0];
				ev = this._events[i][1];
				el.off(ev);
			}
			this._events = [];
		},

		show: function (e) {
			console.log('hello world !');
			this.picker.show();
			this.height = this.component ? this.component.outerHeight() : this.element.outerHeight();
			if (this.forceParse) {
				this.update();
			}
			this.place();
			$vic(window).on('resize', $vic.proxy(this.place, this));
			if (e) {
				e.stopPropagation();
				e.preventDefault();
			}
			this.isVisible = true;
			this.element.trigger({
				type: 'show',
				date: this.date
			});
		},

		hide: function (e) {
			if (!this.isVisible) return;
			if (this.isInline) return;
			this.picker.hide();
			$vic(window).off('resize', this.place);
			this.viewMode = this.startViewMode;
			this.showMode();
			if (!this.isInput) {
				$vic(document).off('mousedown', this.hide);
			}

			if (
				this.forceParse &&
					(
						this.isInput && this.element.val() ||
							this.hasInput && this.element.find('input').val()
						)
				)
				this.setValue();
			this.isVisible = false;
			this.element.trigger({
				type: 'hide',
				date: this.date
			});
		},

		remove: function () {
			this._detachEvents();
			this.picker.remove();
			delete this.picker;
			delete this.element.data().datetimepicker;
		},

		getDate: function () {
			var d = this.getUTCDate();
			return new Date(d.getTime() + (d.getTimezoneOffset() * 60000));
		},

		getUTCDate: function () {
			return this.date;
		},

		setDate: function (d) {
			this.setUTCDate(new Date(d.getTime() - (d.getTimezoneOffset() * 60000)));
		},

		setUTCDate: function (d) {
			if (d >= this.startDate && d <= this.endDate) {
				this.date = d;
				this.setValue();
				this.viewDate = this.date;
				this.fill();
			} else {
				this.element.trigger({
					type:      'outOfRange',
					date:      d,
					startDate: this.startDate,
					endDate:   this.endDate
				});
			}
		},

		setFormat: function (format) {
			this.format = DPGlobal.parseFormat(format, this.formatType);
			var element;
			if (this.isInput) {
				element = this.element;
			} else if (this.component) {
				element = this.element.find('input');
			}
			if (element && element.val()) {
				this.setValue();
			}
		},

		setValue: function () {
			var formatted = this.getFormattedDate();
			if (!this.isInput) {
				if (this.component) {
					this.element.find('input').val(formatted);
				}
				this.element.data('date', formatted);
			} else {
				this.element.val(formatted);
			}
			if (this.linkField) {
				$vic('#' + this.linkField).val(this.getFormattedDate(this.linkFormat));
			}
		},

		getFormattedDate: function (format) {
			if (format == undefined) format = this.format;
			return DPGlobal.formatDate(this.date, format, this.language, this.formatType);
		},

		setStartDate: function (startDate) {
			this.startDate = startDate || -Infinity;
			if (this.startDate !== -Infinity) {
				this.startDate = DPGlobal.parseDate(this.startDate, this.format, this.language, this.formatType);
			}
			this.update();
			this.updateNavArrows();
		},

		setEndDate: function (endDate) {
			this.endDate = endDate || Infinity;
			if (this.endDate !== Infinity) {
				this.endDate = DPGlobal.parseDate(this.endDate, this.format, this.language, this.formatType);
			}
			this.update();
			this.updateNavArrows();
		},

		setDaysOfWeekDisabled: function (daysOfWeekDisabled) {
			this.daysOfWeekDisabled = daysOfWeekDisabled || [];
			if (!$vic.isArray(this.daysOfWeekDisabled)) {
				this.daysOfWeekDisabled = this.daysOfWeekDisabled.split(/,\s*/);
			}
			this.daysOfWeekDisabled = $vic.map(this.daysOfWeekDisabled, function (d) {
				return parseInt(d, 10);
			});
			this.update();
			this.updateNavArrows();
		},

		place: function () {
			if (this.isInline) return;

			var index_highest = 0;
			$vic('div').each(function () {
				var index_current = parseInt($vic(this).css("zIndex"), 10);
				if (index_current > index_highest) {
					index_highest = index_current;
				}
			});
			var zIndex = index_highest + 10;

			var offset, top, left;
			if (this.component) {
				offset = this.component.offset();
				left = offset.left;
				if (this.pickerPosition == 'bottom-left' || this.pickerPosition == 'top-left') {
					left += this.component.outerWidth() - this.picker.outerWidth();
				}
			} else {
				offset = this.element.offset();
				left = offset.left;
			}
			if (this.pickerPosition == 'top-left' || this.pickerPosition == 'top-right') {
				top = offset.top - this.picker.outerHeight();
			} else {
				top = offset.top + this.height;
			}
			this.picker.css({
				top:    top,
				left:   left,
				zIndex: zIndex
			});
		},

		update: function () {
			var date, fromArgs = false;
			if (arguments && arguments.length && (typeof arguments[0] === 'string' || arguments[0] instanceof Date)) {
				date = arguments[0];
				fromArgs = true;
			} else {
				date = this.element.data('date') || (this.isInput ? this.element.val() : this.element.find('input').val()) || this.initialDate;
			}

			if (!date) {
				date = new Date();
				fromArgs = false;
			}

			this.date = DPGlobal.parseDate(date, this.format, this.language, this.formatType);

			if (fromArgs) this.setValue();

			if (this.date < this.startDate) {
				this.viewDate = new Date(this.startDate);
			} else if (this.date > this.endDate) {
				this.viewDate = new Date(this.endDate);
			} else {
				this.viewDate = new Date(this.date);
			}
			this.fill();
		},

		fillDow: function () {
			var dowCnt = this.weekStart,
				html = '<tr>';
			while (dowCnt < this.weekStart + 7) {
				html += '<th class="v-dow">' + dates[this.language].daysMin[(dowCnt++) % 7] + '</th>';
			}
			html += '</tr>';
			this.picker.find('.v-datetimepicker-days thead').append(html);
		},

		fillMonths: function () {
			var html = '',
				i = 0;
			while (i < 12) {
				html += '<span class="v-month">' + dates[this.language].monthsShort[i++] + '</span>';
			}
			this.picker.find('.v-datetimepicker-months td').html(html);
		},

		fill: function () {
			if (this.date == null || this.viewDate == null) {
				return;
			}
			var d = new Date(this.viewDate),
				year = d.getUTCFullYear(),
				month = d.getUTCMonth(),
				dayMonth = d.getUTCDate(),
				hours = d.getUTCHours(),
				minutes = d.getUTCMinutes(),
				startYear = this.startDate !== -Infinity ? this.startDate.getUTCFullYear() : -Infinity,
				startMonth = this.startDate !== -Infinity ? this.startDate.getUTCMonth() : -Infinity,
				endYear = this.endDate !== Infinity ? this.endDate.getUTCFullYear() : Infinity,
				endMonth = this.endDate !== Infinity ? this.endDate.getUTCMonth() : Infinity,
				currentDate = (new UTCDate(this.date.getUTCFullYear(), this.date.getUTCMonth(), this.date.getUTCDate())).valueOf(),
				today = new Date();
			this.picker.find('.v-datetimepicker-days thead th:eq(1)')
				.text(dates[this.language].months[month] + ' ' + year);
			if (this.formatViewType == "time") {
				var hourConverted = hours % 12 ? hours % 12 : 12;
				var hoursDisplay = (hourConverted < 10 ? '0' : '') + hourConverted;
				var minutesDisplay = (minutes < 10 ? '0' : '') + minutes;
				var meridianDisplay = dates[this.language].meridiem[hours < 12 ? 0 : 1];
				this.picker.find('.v-datetimepicker-hours thead th:eq(1)')
					.text(hoursDisplay + ':' + minutesDisplay + ' ' + meridianDisplay.toUpperCase());
				this.picker.find('.v-datetimepicker-minutes thead th:eq(1)')
					.text(hoursDisplay + ':' + minutesDisplay + ' ' + meridianDisplay.toUpperCase());
			} else {
				this.picker.find('.v-datetimepicker-hours thead th:eq(1)')
					.text(dayMonth + ' ' + dates[this.language].months[month] + ' ' + year);
				this.picker.find('.v-datetimepicker-minutes thead th:eq(1)')
					.text(dayMonth + ' ' + dates[this.language].months[month] + ' ' + year);
			}
			this.picker.find('tfoot th.v-today')
				.text(dates[this.language].today)
				.toggle(this.todayBtn !== false);
			this.updateNavArrows();
			this.fillMonths();
			/*var prevMonth = UTCDate(year, month, 0,0,0,0,0);
			 prevMonth.setUTCDate(prevMonth.getDate() - (prevMonth.getUTCDay() - this.weekStart + 7)%7);*/
			var prevMonth = UTCDate(year, month - 1, 28, 0, 0, 0, 0),
				day = DPGlobal.getDaysInMonth(prevMonth.getUTCFullYear(), prevMonth.getUTCMonth());
			prevMonth.setUTCDate(day);
			prevMonth.setUTCDate(day - (prevMonth.getUTCDay() - this.weekStart + 7) % 7);
			var nextMonth = new Date(prevMonth);
			nextMonth.setUTCDate(nextMonth.getUTCDate() + 42);
			nextMonth = nextMonth.valueOf();
			var html = [];
			var clsName;
			while (prevMonth.valueOf() < nextMonth) {
				if (prevMonth.getUTCDay() == this.weekStart) {
					html.push('<tr>');
				}
				clsName = '';
				if (prevMonth.getUTCFullYear() < year || (prevMonth.getUTCFullYear() == year && prevMonth.getUTCMonth() < month)) {
					clsName += ' v-old';
				} else if (prevMonth.getUTCFullYear() > year || (prevMonth.getUTCFullYear() == year && prevMonth.getUTCMonth() > month)) {
					clsName += ' v-new';
				}
				// Compare internal UTC date with local today, not UTC today
				if (this.todayHighlight &&
					prevMonth.getUTCFullYear() == today.getFullYear() &&
					prevMonth.getUTCMonth() == today.getMonth() &&
					prevMonth.getUTCDate() == today.getDate()) {
					clsName += ' v-today';
				}
				if (prevMonth.valueOf() == currentDate) {
					clsName += ' v-active';
				}
				if ((prevMonth.valueOf() + 86400000) <= this.startDate || prevMonth.valueOf() > this.endDate ||
					$vic.inArray(prevMonth.getUTCDay(), this.daysOfWeekDisabled) !== -1) {
					clsName += ' v-disabled';
				}
				html.push('<td class="v-day' + clsName + '">' + prevMonth.getUTCDate() + '</td>');
				if (prevMonth.getUTCDay() == this.weekEnd) {
					html.push('</tr>');
				}
				prevMonth.setUTCDate(prevMonth.getUTCDate() + 1);
			}
			this.picker.find('.v-datetimepicker-days tbody').empty().append(html.join(''));

			html = [];
			var txt = '', meridian = '', meridianOld = '';
			for (var i = 0; i < 24; i++) {
				var actual = UTCDate(year, month, dayMonth, i);
				clsName = '';
				// We want the previous hour for the startDate
				if ((actual.valueOf() + 3600000) <= this.startDate || actual.valueOf() > this.endDate) {
					clsName += ' v-disabled';
				} else if (hours == i) {
					clsName += ' v-active';
				}
				if (this.showMeridian && dates[this.language].meridiem.length == 2) {
					meridian = (i < 12 ? dates[this.language].meridiem[0] : dates[this.language].meridiem[1]);
					if (meridian != meridianOld) {
						if (meridianOld != '') {
							html.push('</fieldset>');
						}
						html.push('<fieldset class="v-hour"><legend>' + meridian.toUpperCase() + '</legend>');
					}
					meridianOld = meridian;
					txt = (i % 12 ? i % 12 : 12);
					html.push('<span class="v-hour' + clsName + ' v-hour_' + (i < 12 ? 'am' : 'pm') + '">' + txt + '</span>');
					if (i == 23) {
						html.push('</fieldset>');
					}
				} else {
					txt = i + ':00';
					html.push('<span class="v-hour' + clsName + '">' + txt + '</span>');
				}
			}
			this.picker.find('.v-datetimepicker-hours td').html(html.join(''));

			html = [];
			txt = '', meridian = '', meridianOld = '';
			for (var i = 0; i < 60; i += this.minuteStep) {
				var actual = UTCDate(year, month, dayMonth, hours, i, 0);
				clsName = '';
				if (actual.valueOf() < this.startDate || actual.valueOf() > this.endDate) {
					clsName += ' v-disabled';
				} else if (Math.floor(minutes / this.minuteStep) == Math.floor(i / this.minuteStep)) {
					clsName += ' v-active';
				}
				if (this.showMeridian && dates[this.language].meridiem.length == 2) {
					meridian = (hours < 12 ? dates[this.language].meridiem[0] : dates[this.language].meridiem[1]);
					if (meridian != meridianOld) {
						if (meridianOld != '') {
							html.push('</fieldset>');
						}
						html.push('<fieldset class="v-minute"><legend>' + meridian.toUpperCase() + '</legend>');
					}
					meridianOld = meridian;
					txt = (hours % 12 ? hours % 12 : 12);
					//html.push('<span class="v-minute'+clsName+' minute_'+(hours<12?'am':'pm')+'">'+txt+'</span>');
					html.push('<span class="v-minute' + clsName + '">' + txt + ':' + (i < 10 ? '0' + i : i) + '</span>');
					if (i == 59) {
						html.push('</fieldset>');
					}
				} else {
					txt = i + ':00';
					//html.push('<span class="v-hour'+clsName+'">'+txt+'</span>');
					html.push('<span class="v-minute' + clsName + '">' + hours + ':' + (i < 10 ? '0' + i : i) + '</span>');
				}
			}
			this.picker.find('.v-datetimepicker-minutes td').html(html.join(''));

			var currentYear = this.date.getUTCFullYear();
			var months = this.picker.find('.v-datetimepicker-months')
				.find('th:eq(1)')
				.text(year)
				.end()
				.find('span').removeClass('v-active');
			if (currentYear == year) {
				months.eq(this.date.getUTCMonth()).addClass('v-active');
			}
			if (year < startYear || year > endYear) {
				months.addClass('v-disabled');
			}
			if (year == startYear) {
				months.slice(0, startMonth).addClass('v-disabled');
			}
			if (year == endYear) {
				months.slice(endMonth + 1).addClass('v-disabled');
			}

			html = '';
			year = parseInt(year / 10, 10) * 10;
			var yearCont = this.picker.find('.v-datetimepicker-years')
				.find('th:eq(1)')
				.text(year + '-' + (year + 9))
				.end()
				.find('td');
			year -= 1;
			for (var i = -1; i < 11; i++) {
				html += '<span class="v-year' + (i == -1 || i == 10 ? ' v-old' : '') + (currentYear == year ? ' v-active' : '') + (year < startYear || year > endYear ? ' v-disabled' : '') + '">' + year + '</span>';
				year += 1;
			}
			yearCont.html(html);
			this.place();
		},

		updateNavArrows: function () {
			var d = new Date(this.viewDate),
				year = d.getUTCFullYear(),
				month = d.getUTCMonth(),
				day = d.getUTCDate(),
				hour = d.getUTCHours();
			switch (this.viewMode) {
				case 0:
					if (this.startDate !== -Infinity && year <= this.startDate.getUTCFullYear()
						&& month <= this.startDate.getUTCMonth()
						&& day <= this.startDate.getUTCDate()
						&& hour <= this.startDate.getUTCHours()) {
						this.picker.find('.v-prev').css({visibility: 'hidden'});
					} else {
						this.picker.find('.v-prev').css({visibility: 'visible'});
					}
					if (this.endDate !== Infinity && year >= this.endDate.getUTCFullYear()
						&& month >= this.endDate.getUTCMonth()
						&& day >= this.endDate.getUTCDate()
						&& hour >= this.endDate.getUTCHours()) {
						this.picker.find('.v-next').css({visibility: 'hidden'});
					} else {
						this.picker.find('.v-next').css({visibility: 'visible'});
					}
					break;
				case 1:
					if (this.startDate !== -Infinity && year <= this.startDate.getUTCFullYear()
						&& month <= this.startDate.getUTCMonth()
						&& day <= this.startDate.getUTCDate()) {
						this.picker.find('.v-prev').css({visibility: 'hidden'});
					} else {
						this.picker.find('.v-prev').css({visibility: 'visible'});
					}
					if (this.endDate !== Infinity && year >= this.endDate.getUTCFullYear()
						&& month >= this.endDate.getUTCMonth()
						&& day >= this.endDate.getUTCDate()) {
						this.picker.find('.v-next').css({visibility: 'hidden'});
					} else {
						this.picker.find('.v-next').css({visibility: 'visible'});
					}
					break;
				case 2:
					if (this.startDate !== -Infinity && year <= this.startDate.getUTCFullYear()
						&& month <= this.startDate.getUTCMonth()) {
						this.picker.find('.v-prev').css({visibility: 'hidden'});
					} else {
						this.picker.find('.v-prev').css({visibility: 'visible'});
					}
					if (this.endDate !== Infinity && year >= this.endDate.getUTCFullYear()
						&& month >= this.endDate.getUTCMonth()) {
						this.picker.find('.v-next').css({visibility: 'hidden'});
					} else {
						this.picker.find('.v-next').css({visibility: 'visible'});
					}
					break;
				case 3:
				case 4:
					if (this.startDate !== -Infinity && year <= this.startDate.getUTCFullYear()) {
						this.picker.find('.v-prev').css({visibility: 'hidden'});
					} else {
						this.picker.find('.v-prev').css({visibility: 'visible'});
					}
					if (this.endDate !== Infinity && year >= this.endDate.getUTCFullYear()) {
						this.picker.find('.v-next').css({visibility: 'hidden'});
					} else {
						this.picker.find('.v-next').css({visibility: 'visible'});
					}
					break;
			}
		},

		mousewheel: function (e) {

			e.preventDefault();
			e.stopPropagation();

			if (this.wheelPause) {
				return;
			}

			this.wheelPause = true;

			var originalEvent = e.originalEvent;

			var delta = originalEvent.wheelDelta;

			var mode = delta > 0 ? 1 : (delta === 0) ? 0 : -1;

			if (this.wheelViewModeNavigationInverseDirection) {
				mode = -mode;
			}

			this.showMode(mode);

			setTimeout($vic.proxy(function () {

				this.wheelPause = false

			}, this), this.wheelViewModeNavigationDelay);

		},

		click: function (e) {
			e.stopPropagation();
			e.preventDefault();
			var target = $vic(e.target).closest('span, td, th, legend');
			if (target.length == 1) {
				if (target.is('.v-disabled')) {
					this.element.trigger({
						type:      'outOfRange',
						date:      this.viewDate,
						startDate: this.startDate,
						endDate:   this.endDate
					});
					return;
				}
				switch (target[0].nodeName.toLowerCase()) {
					case 'th':
						switch (target[0].className) {
							case 'v-switch':
								this.showMode(1);
								break;
							case 'v-prev':
							case 'v-next':
								var dir = DPGlobal.modes[this.viewMode].navStep * (target[0].className == 'v-prev' ? -1 : 1);
								switch (this.viewMode) {
									case 0:
										this.viewDate = this.moveHour(this.viewDate, dir);
										break;
									case 1:
										this.viewDate = this.moveDate(this.viewDate, dir);
										break;
									case 2:
										this.viewDate = this.moveMonth(this.viewDate, dir);
										break;
									case 3:
									case 4:
										this.viewDate = this.moveYear(this.viewDate, dir);
										break;
								}
								this.fill();
								break;
							case 'v-today':
								var date = new Date();
								date = UTCDate(date.getFullYear(), date.getMonth(), date.getDate(), date.getHours(), date.getMinutes(), date.getSeconds(), 0);

								// Respect startDate and endDate.
								if (date < this.startDate) date = this.startDate;
								else if (date > this.endDate) date = this.endDate;

								this.viewMode = this.startViewMode;
								this.showMode(0);
								this._setDate(date);
								this.fill();
								if (this.autoclose) {
									this.hide();
								}
								break;
						}
						break;
					case 'span':
						if (!target.is('.v-disabled')) {
							var year = this.viewDate.getUTCFullYear(),
								month = this.viewDate.getUTCMonth(),
								day = this.viewDate.getUTCDate(),
								hours = this.viewDate.getUTCHours(),
								minutes = this.viewDate.getUTCMinutes(),
								seconds = this.viewDate.getUTCSeconds();

							if (target.is('.v-month')) {
								this.viewDate.setUTCDate(1);
								month = target.parent().find('span').index(target);
								day = this.viewDate.getUTCDate();
								this.viewDate.setUTCMonth(month);
								this.element.trigger({
									type: 'changeMonth',
									date: this.viewDate
								});
								if (this.viewSelect >= 3) {
									this._setDate(UTCDate(year, month, day, hours, minutes, seconds, 0));
								}
							} else if (target.is('.v-year')) {
								this.viewDate.setUTCDate(1);
								year = parseInt(target.text(), 10) || 0;
								this.viewDate.setUTCFullYear(year);
								this.element.trigger({
									type: 'changeYear',
									date: this.viewDate
								});
								if (this.viewSelect >= 4) {
									this._setDate(UTCDate(year, month, day, hours, minutes, seconds, 0));
								}
							} else if (target.is('.v-hour')) {
								hours = parseInt(target.text(), 10) || 0;
								if (target.hasClass('v-hour_am') || target.hasClass('v-hour_pm')) {
									if (hours == 12 && target.hasClass('v-hour_am')) {
										hours = 0;
									} else if (hours != 12 && target.hasClass('v-hour_pm')) {
										hours += 12;
									}
								}
								this.viewDate.setUTCHours(hours);
								this.element.trigger({
									type: 'changeHour',
									date: this.viewDate
								});
								if (this.viewSelect >= 1) {
									this._setDate(UTCDate(year, month, day, hours, minutes, seconds, 0));
								}
							} else if (target.is('.v-minute')) {
								minutes = parseInt(target.text().substr(target.text().indexOf(':') + 1), 10) || 0;
								this.viewDate.setUTCMinutes(minutes);
								this.element.trigger({
									type: 'changeMinute',
									date: this.viewDate
								});
								if (this.viewSelect >= 0) {
									this._setDate(UTCDate(year, month, day, hours, minutes, seconds, 0));
								}
							}
							if (this.viewMode != 0) {
								var oldViewMode = this.viewMode;
								this.showMode(-1);
								this.fill();
								if (oldViewMode == this.viewMode && this.autoclose) {
									this.hide();
								}
							} else {
								this.fill();
								if (this.autoclose) {
									this.hide();
								}
							}
						}
						break;
					case 'td':
						if (target.is('.v-day') && !target.is('.v-disabled')) {
							var day = parseInt(target.text(), 10) || 1;
							var year = this.viewDate.getUTCFullYear(),
								month = this.viewDate.getUTCMonth(),
								hours = this.viewDate.getUTCHours(),
								minutes = this.viewDate.getUTCMinutes(),
								seconds = this.viewDate.getUTCSeconds();
							if (target.is('.v-old')) {
								if (month === 0) {
									month = 11;
									year -= 1;
								} else {
									month -= 1;
								}
							} else if (target.is('.v-new')) {
								if (month == 11) {
									month = 0;
									year += 1;
								} else {
									month += 1;
								}
							}
							this.viewDate.setUTCFullYear(year);
							this.viewDate.setUTCMonth(month);
							this.viewDate.setUTCDate(day);
							this.element.trigger({
								type: 'changeDay',
								date: this.viewDate
							});
							if (this.viewSelect >= 2) {
								this._setDate(UTCDate(year, month, day, hours, minutes, seconds, 0));
							}
						}
						var oldViewMode = this.viewMode;
						this.showMode(-1);
						this.fill();
						if (oldViewMode == this.viewMode && this.autoclose) {
							this.hide();
						}
						break;
				}
			}
		},

		_setDate: function (date, which) {
			if (!which || which == 'date')
				this.date = date;
			if (!which || which == 'view')
				this.viewDate = date;
			this.fill();
			this.setValue();
			var element;
			if (this.isInput) {
				element = this.element;
			} else if (this.component) {
				element = this.element.find('input');
			}
			if (element) {
				element.change();
				if (this.autoclose && (!which || which == 'date')) {
					//this.hide();
				}
			}
			this.element.trigger({
				type: 'changeDate',
				date: this.date
			});
		},

		moveMinute: function (date, dir) {
			if (!dir) return date;
			var new_date = new Date(date.valueOf());
			//dir = dir > 0 ? 1 : -1;
			new_date.setUTCMinutes(new_date.getUTCMinutes() + (dir * this.minuteStep));
			return new_date;
		},

		moveHour: function (date, dir) {
			if (!dir) return date;
			var new_date = new Date(date.valueOf());
			//dir = dir > 0 ? 1 : -1;
			new_date.setUTCHours(new_date.getUTCHours() + dir);
			return new_date;
		},

		moveDate: function (date, dir) {
			if (!dir) return date;
			var new_date = new Date(date.valueOf());
			//dir = dir > 0 ? 1 : -1;
			new_date.setUTCDate(new_date.getUTCDate() + dir);
			return new_date;
		},

		moveMonth: function (date, dir) {
			if (!dir) return date;
			var new_date = new Date(date.valueOf()),
				day = new_date.getUTCDate(),
				month = new_date.getUTCMonth(),
				mag = Math.abs(dir),
				new_month, test;
			dir = dir > 0 ? 1 : -1;
			if (mag == 1) {
				test = dir == -1
					// If going back one month, make sure month is not current month
					// (eg, Mar 31 -> Feb 31 == Feb 28, not Mar 02)
					? function () {
					return new_date.getUTCMonth() == month;
				}
					// If going forward one month, make sure month is as expected
					// (eg, Jan 31 -> Feb 31 == Feb 28, not Mar 02)
					: function () {
					return new_date.getUTCMonth() != new_month;
				};
				new_month = month + dir;
				new_date.setUTCMonth(new_month);
				// Dec -> Jan (12) or Jan -> Dec (-1) -- limit expected date to 0-11
				if (new_month < 0 || new_month > 11)
					new_month = (new_month + 12) % 12;
			} else {
				// For magnitudes >1, move one month at a time...
				for (var i = 0; i < mag; i++)
					// ...which might decrease the day (eg, Jan 31 to Feb 28, etc)...
					new_date = this.moveMonth(new_date, dir);
				// ...then reset the day, keeping it in the new month
				new_month = new_date.getUTCMonth();
				new_date.setUTCDate(day);
				test = function () {
					return new_month != new_date.getUTCMonth();
				};
			}
			// Common date-resetting loop -- if date is beyond end of month, make it
			// end of month
			while (test()) {
				new_date.setUTCDate(--day);
				new_date.setUTCMonth(new_month);
			}
			return new_date;
		},

		moveYear: function (date, dir) {
			return this.moveMonth(date, dir * 12);
		},

		dateWithinRange: function (date) {
			return date >= this.startDate && date <= this.endDate;
		},

		keydown: function (e) {
			if (this.picker.is(':not(:visible)')) {
				if (e.keyCode == 27) // allow escape to hide and re-show picker
					this.show();
				return;
			}
			var dateChanged = false,
				dir, day, month,
				newDate, newViewDate;
			switch (e.keyCode) {
				case 27: // escape
					this.hide();
					e.preventDefault();
					break;
				case 37: // left
				case 39: // right
					if (!this.keyboardNavigation) break;
					dir = e.keyCode == 37 ? -1 : 1;
					viewMode = this.viewMode;
					if (e.ctrlKey) {
						viewMode += 2;
					} else if (e.shiftKey) {
						viewMode += 1;
					}
					if (viewMode == 4) {
						newDate = this.moveYear(this.date, dir);
						newViewDate = this.moveYear(this.viewDate, dir);
					} else if (viewMode == 3) {
						newDate = this.moveMonth(this.date, dir);
						newViewDate = this.moveMonth(this.viewDate, dir);
					} else if (viewMode == 2) {
						newDate = this.moveDate(this.date, dir);
						newViewDate = this.moveDate(this.viewDate, dir);
					} else if (viewMode == 1) {
						newDate = this.moveHour(this.date, dir);
						newViewDate = this.moveHour(this.viewDate, dir);
					} else if (viewMode == 0) {
						newDate = this.moveMinute(this.date, dir);
						newViewDate = this.moveMinute(this.viewDate, dir);
					}
					if (this.dateWithinRange(newDate)) {
						this.date = newDate;
						this.viewDate = newViewDate;
						this.setValue();
						this.update();
						e.preventDefault();
						dateChanged = true;
					}
					break;
				case 38: // up
				case 40: // down
					if (!this.keyboardNavigation) break;
					dir = e.keyCode == 38 ? -1 : 1;
					viewMode = this.viewMode;
					if (e.ctrlKey) {
						viewMode += 2;
					} else if (e.shiftKey) {
						viewMode += 1;
					}
					if (viewMode == 4) {
						newDate = this.moveYear(this.date, dir);
						newViewDate = this.moveYear(this.viewDate, dir);
					} else if (viewMode == 3) {
						newDate = this.moveMonth(this.date, dir);
						newViewDate = this.moveMonth(this.viewDate, dir);
					} else if (viewMode == 2) {
						newDate = this.moveDate(this.date, dir * 7);
						newViewDate = this.moveDate(this.viewDate, dir * 7);
					} else if (viewMode == 1) {
						if (this.showMeridian) {
							newDate = this.moveHour(this.date, dir * 6);
							newViewDate = this.moveHour(this.viewDate, dir * 6);
						} else {
							newDate = this.moveHour(this.date, dir * 4);
							newViewDate = this.moveHour(this.viewDate, dir * 4);
						}
					} else if (viewMode == 0) {
						newDate = this.moveMinute(this.date, dir * 4);
						newViewDate = this.moveMinute(this.viewDate, dir * 4);
					}
					if (this.dateWithinRange(newDate)) {
						this.date = newDate;
						this.viewDate = newViewDate;
						this.setValue();
						this.update();
						e.preventDefault();
						dateChanged = true;
					}
					break;
				case 13: // enter
					if (this.viewMode != 0) {
						var oldViewMode = this.viewMode;
						this.showMode(-1);
						this.fill();
						if (oldViewMode == this.viewMode && this.autoclose) {
							this.hide();
						}
					} else {
						this.fill();
						if (this.autoclose) {
							this.hide();
						}
					}
					e.preventDefault();
					break;
				case 9: // tab
					this.hide();
					break;
			}
			if (dateChanged) {
				var element;
				if (this.isInput) {
					element = this.element;
				} else if (this.component) {
					element = this.element.find('input');
				}
				if (element) {
					element.change();
				}
				this.element.trigger({
					type: 'changeDate',
					date: this.date
				});
			}
		},

		showMode: function (dir) {
			if (dir) {
				var newViewMode = Math.max(0, Math.min(DPGlobal.modes.length - 1, this.viewMode + dir));
				if (newViewMode >= this.minView && newViewMode <= this.maxView) {
					this.element.trigger({
						type:        'changeMode',
						date:        this.viewDate,
						oldViewMode: this.viewMode,
						newViewMode: newViewMode
					});

					this.viewMode = newViewMode;
				}
			}
			/*
			 vitalets: fixing bug of very special conditions:
			 jquery 1.7.1 + webkit + show inline datetimepicker in bootstrap popover.
			 Method show() does not set display css correctly and datetimepicker is not shown.
			 Changed to .css('display', 'block') solve the problem.
			 See https://github.com/vitalets/x-editable/issues/37

			 In jquery 1.7.2+ everything works fine.
			 */
			//this.picker.find('>div').hide().filter('.v-datetimepicker-'+DPGlobal.modes[this.viewMode].clsName).show();
			this.picker.find('>div').hide().filter('.v-datetimepicker-' + DPGlobal.modes[this.viewMode].clsName).css('display', 'block');
			this.updateNavArrows();
		},

		reset: function (e) {
			this._setDate(null, 'date');
		}
	};

	$vic.fn.datetimepicker = function (option) {
		var args = Array.apply(null, arguments);
		args.shift();
		return this.each(function () {
			var $this = $vic(this),
				data = $this.data('datetimepicker'),
				options = typeof option == 'object' && option;

			if (!data) {
				$this.data('datetimepicker', (data = new Datetimepicker(this, $vic.extend({}, $vic.fn.datetimepicker.defaults, options))));
			}

			if (typeof option == 'string' && typeof data[option] == 'function') {
				data[option].apply(data, args);
			}
		});
	};

	$vic.fn.datetimepicker.defaults = {
	};
	$vic.fn.datetimepicker.Constructor = Datetimepicker;
	var dates = $vic.fn.datetimepicker.dates = {
		en: {
			days:        ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
			daysShort:   ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
			daysMin:     ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"],
			months:      ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
			monthsShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			meridiem:    ["am", "pm"],
			suffix:      ["st", "nd", "rd", "th"],
			today:       "Today"
		}
	};

	var DPGlobal = {
		modes:            [
			{
				clsName: 'minutes',
				navFnc:  'Hours',
				navStep: 1
			},
			{
				clsName: 'hours',
				navFnc:  'Date',
				navStep: 1
			},
			{
				clsName: 'days',
				navFnc:  'Month',
				navStep: 1
			},
			{
				clsName: 'months',
				navFnc:  'FullYear',
				navStep: 1
			},
			{
				clsName: 'years',
				navFnc:  'FullYear',
				navStep: 10
			}
		],
		isLeapYear:       function (year) {
			return (((year % 4 === 0) && (year % 100 !== 0)) || (year % 400 === 0))
		},
		getDaysInMonth:   function (year, month) {
			return [31, (DPGlobal.isLeapYear(year) ? 29 : 28), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][month]
		},
		getDefaultFormat: function (type, field) {
			if (type == "standard") {
				if (field == 'input')
					return 'yyyy-mm-dd hh:ii';
				else
					return 'yyyy-mm-dd hh:ii:ss';
			} else if (type == "php") {
				if (field == 'input')
					return 'Y-m-d H:i';
				else
					return 'Y-m-d H:i:s';
			} else {
				throw new Error("Invalid format type.");
			}
		},
		validParts:       function (type) {
			if (type == "standard") {
				return /hh?|HH?|p|P|ii?|ss?|dd?|DD?|mm?|MM?|yy(?:yy)?/g;
			} else if (type == "php") {
				return /[dDjlNwzFmMnStyYaABgGhHis]/g;
			} else {
				throw new Error("Invalid format type.");
			}
		},
		nonpunctuation:   /[^ -\/:-@\[-`{-~\t\n\rTZ]+/g,
		parseFormat:      function (format, type) {
			// IE treats \0 as a string end in inputs (truncating the value),
			// so it's a bad format delimiter, anyway
			var separators = format.replace(this.validParts(type), '\0').split('\0'),
				parts = format.match(this.validParts(type));
			if (!separators || !separators.length || !parts || parts.length == 0) {
				throw new Error("Invalid date format.");
			}
			return {separators: separators, parts: parts};
		},
		parseDate:        function (date, format, language, type) {
			if (date instanceof Date) {
				var dateUTC = new Date(date.valueOf() - date.getTimezoneOffset() * 60000);
				dateUTC.setMilliseconds(0);
				return dateUTC;
			}
			if (/^\d{4}\-\d{1,2}\-\d{1,2}$vic/.test(date)) {
				format = this.parseFormat('yyyy-mm-dd', type);
			}
			if (/^\d{4}\-\d{1,2}\-\d{1,2}[T ]\d{1,2}\:\d{1,2}$vic/.test(date)) {
				format = this.parseFormat('yyyy-mm-dd hh:ii', type);
			}
			if (/^\d{4}\-\d{1,2}\-\d{1,2}[T ]\d{1,2}\:\d{1,2}\:\d{1,2}[Z]{0,1}$vic/.test(date)) {
				format = this.parseFormat('yyyy-mm-dd hh:ii:ss', type);
			}
			if (/^[-+]\d+[dmwy]([\s,]+[-+]\d+[dmwy])*$vic/.test(date)) {
				var part_re = /([-+]\d+)([dmwy])/,
					parts = date.match(/([-+]\d+)([dmwy])/g),
					part, dir;
				date = new Date();
				for (var i = 0; i < parts.length; i++) {
					part = part_re.exec(parts[i]);
					dir = parseInt(part[1]);
					switch (part[2]) {
						case 'd':
							date.setUTCDate(date.getUTCDate() + dir);
							break;
						case 'm':
							date = Datetimepicker.prototype.moveMonth.call(Datetimepicker.prototype, date, dir);
							break;
						case 'w':
							date.setUTCDate(date.getUTCDate() + dir * 7);
							break;
						case 'y':
							date = Datetimepicker.prototype.moveYear.call(Datetimepicker.prototype, date, dir);
							break;
					}
				}
				return UTCDate(date.getUTCFullYear(), date.getUTCMonth(), date.getUTCDate(), date.getUTCHours(), date.getUTCMinutes(), date.getUTCSeconds(), 0);
			}
			var parts = date && date.match(this.nonpunctuation) || [],
				date = new Date(0, 0, 0, 0, 0, 0, 0),
				parsed = {},
				setters_order = ['hh', 'h', 'ii', 'i', 'ss', 's', 'yyyy', 'yy', 'M', 'MM', 'm', 'mm', 'D', 'DD', 'd', 'dd', 'H', 'HH', 'p', 'P'],
				setters_map = {
					hh:   function (d, v) {
						return d.setUTCHours(v);
					},
					h:    function (d, v) {
						return d.setUTCHours(v);
					},
					HH:   function (d, v) {
						return d.setUTCHours(v == 12 ? 0 : v);
					},
					H:    function (d, v) {
						return d.setUTCHours(v == 12 ? 0 : v);
					},
					ii:   function (d, v) {
						return d.setUTCMinutes(v);
					},
					i:    function (d, v) {
						return d.setUTCMinutes(v);
					},
					ss:   function (d, v) {
						return d.setUTCSeconds(v);
					},
					s:    function (d, v) {
						return d.setUTCSeconds(v);
					},
					yyyy: function (d, v) {
						return d.setUTCFullYear(v);
					},
					yy:   function (d, v) {
						return d.setUTCFullYear(2000 + v);
					},
					m:    function (d, v) {
						v -= 1;
						while (v < 0) v += 12;
						v %= 12;
						d.setUTCMonth(v);
						while (d.getUTCMonth() != v)
							d.setUTCDate(d.getUTCDate() - 1);
						return d;
					},
					d:    function (d, v) {
						return d.setUTCDate(v);
					},
					p:    function (d, v) {
						return d.setUTCHours(v == 1 ? d.getUTCHours() + 12 : d.getUTCHours());
					}
				},
				val, filtered, part;
			setters_map['M'] = setters_map['MM'] = setters_map['mm'] = setters_map['m'];
			setters_map['dd'] = setters_map['d'];
			setters_map['P'] = setters_map['p'];
			date = UTCDate(date.getFullYear(), date.getMonth(), date.getDate(), date.getHours(), date.getMinutes(), date.getSeconds());
			if (parts.length == format.parts.length) {
				for (var i = 0, cnt = format.parts.length; i < cnt; i++) {
					val = parseInt(parts[i], 10);
					part = format.parts[i];
					if (isNaN(val)) {
						switch (part) {
							case 'MM':
								filtered = $vic(dates[language].months).filter(function () {
									var m = this.slice(0, parts[i].length),
										p = parts[i].slice(0, m.length);
									return m == p;
								});
								val = $vic.inArray(filtered[0], dates[language].months) + 1;
								break;
							case 'M':
								filtered = $vic(dates[language].monthsShort).filter(function () {
									var m = this.slice(0, parts[i].length),
										p = parts[i].slice(0, m.length);
									return m == p;
								});
								val = $vic.inArray(filtered[0], dates[language].monthsShort) + 1;
								break;
							case 'p':
							case 'P':
								val = $vic.inArray(parts[i].toLowerCase(), dates[language].meridiem);
								break;
						}
					}
					parsed[part] = val;
				}
				for (var i = 0, s; i < setters_order.length; i++) {
					s = setters_order[i];
					if (s in parsed && !isNaN(parsed[s]))
						setters_map[s](date, parsed[s])
				}
			}
			return date;
		},
		formatDate:       function (date, format, language, type) {
			if (date == null) {
				return '';
			}
			var val;
			if (type == 'standard') {
				val = {
					// year
					yy:   date.getUTCFullYear().toString().substring(2),
					yyyy: date.getUTCFullYear(),
					// month
					m:    date.getUTCMonth() + 1,
					M:    dates[language].monthsShort[date.getUTCMonth()],
					MM:   dates[language].months[date.getUTCMonth()],
					// day
					d:    date.getUTCDate(),
					D:    dates[language].daysShort[date.getUTCDay()],
					DD:   dates[language].days[date.getUTCDay()],
					p:    (dates[language].meridiem.length == 2 ? dates[language].meridiem[date.getUTCHours() < 12 ? 0 : 1] : ''),
					// hour
					h:    date.getUTCHours(),
					// minute
					i:    date.getUTCMinutes(),
					// second
					s:    date.getUTCSeconds()
				};

				if (dates[language].meridiem.length == 2) {
					val.H = (val.h % 12 == 0 ? 12 : val.h % 12);
				}
				else {
					val.H = val.h;
				}
				val.HH = (val.H < 10 ? '0' : '') + val.H;
				val.P = val.p.toUpperCase();
				val.hh = (val.h < 10 ? '0' : '') + val.h;
				val.ii = (val.i < 10 ? '0' : '') + val.i;
				val.ss = (val.s < 10 ? '0' : '') + val.s;
				val.dd = (val.d < 10 ? '0' : '') + val.d;
				val.mm = (val.m < 10 ? '0' : '') + val.m;
			} else if (type == 'php') {
				// php format
				val = {
					// year
					y: date.getUTCFullYear().toString().substring(2),
					Y: date.getUTCFullYear(),
					// month
					F: dates[language].months[date.getUTCMonth()],
					M: dates[language].monthsShort[date.getUTCMonth()],
					n: date.getUTCMonth() + 1,
					t: DPGlobal.getDaysInMonth(date.getUTCFullYear(), date.getUTCMonth()),
					// day
					j: date.getUTCDate(),
					l: dates[language].days[date.getUTCDay()],
					D: dates[language].daysShort[date.getUTCDay()],
					w: date.getUTCDay(), // 0 -> 6
					N: (date.getUTCDay() == 0 ? 7 : date.getUTCDay()),       // 1 -> 7
					S: (date.getUTCDate() % 10 <= dates[language].suffix.length ? dates[language].suffix[date.getUTCDate() % 10 - 1] : ''),
					// hour
					a: (dates[language].meridiem.length == 2 ? dates[language].meridiem[date.getUTCHours() < 12 ? 0 : 1] : ''),
					g: (date.getUTCHours() % 12 == 0 ? 12 : date.getUTCHours() % 12),
					G: date.getUTCHours(),
					// minute
					i: date.getUTCMinutes(),
					// second
					s: date.getUTCSeconds()
				};
				val.m = (val.n < 10 ? '0' : '') + val.n;
				val.d = (val.j < 10 ? '0' : '') + val.j;
				val.A = val.a.toString().toUpperCase();
				val.h = (val.g < 10 ? '0' : '') + val.g;
				val.H = (val.G < 10 ? '0' : '') + val.G;
				val.i = (val.i < 10 ? '0' : '') + val.i;
				val.s = (val.s < 10 ? '0' : '') + val.s;
			} else {
				throw new Error("Invalid format type.");
			}
			var date = [],
				seps = $vic.extend([], format.separators);
			for (var i = 0, cnt = format.parts.length; i < cnt; i++) {
				if (seps.length) {
					date.push(seps.shift());
				}
				date.push(val[format.parts[i]]);
			}
			if (seps.length) {
				date.push(seps.shift());
			}
			return date.join('');
		},
		convertViewMode:  function (viewMode) {
			switch (viewMode) {
				case 4:
				case 'v-decade':
					viewMode = 4;
					break;
				case 3:
				case 'v-year':
					viewMode = 3;
					break;
				case 2:
				case 'v-month':
					viewMode = 2;
					break;
				case 1:
				case 'v-day':
					viewMode = 1;
					break;
				case 0:
				case 'v-hour':
					viewMode = 0;
					break;
			}

			return viewMode;
		},
		headTemplate:     '<thead>' +
							  '<tr>' +
							  '<th class="v-prev"><i class="v-icon-arrow-left"/></th>' +
							  '<th colspan="5" class="v-switch"></th>' +
							  '<th class="v-next"><i class="v-icon-arrow-right"/></th>' +
							  '</tr>' +
			'</thead>',
		headTemplateV3:   '<thead>' +
							  '<tr>' +
							  '<th class="v-prev"><i class="v-glyphicon v-glyphicon-arrow-left"></i> </th>' +
							  '<th colspan="5" class="v-switch"></th>' +
							  '<th class="v-next"><i class="v-glyphicon v-glyphicon-arrow-right"></i> </th>' +
							  '</tr>' +
			'</thead>',
		contTemplate:     '<tbody><tr><td colspan="7"></td></tr></tbody>',
		footTemplate:     '<tfoot><tr><th colspan="7" class="v-today"></th></tr></tfoot>'
	};
	DPGlobal.template = '<div class="v-datetimepicker">' +
		'<div class="v-datetimepicker-minutes">' +
		'<table class="v-table-condensed">' +
		DPGlobal.headTemplate +
		DPGlobal.contTemplate +
		DPGlobal.footTemplate +
		'</table>' +
		'</div>' +
		'<div class="v-datetimepicker-hours">' +
		'<table class="v-table-condensed">' +
		DPGlobal.headTemplate +
		DPGlobal.contTemplate +
		DPGlobal.footTemplate +
		'</table>' +
		'</div>' +
		'<div class="v-datetimepicker-days">' +
		'<table class="v-table-condensed">' +
		DPGlobal.headTemplate +
		'<tbody></tbody>' +
		DPGlobal.footTemplate +
		'</table>' +
		'</div>' +
		'<div class="v-datetimepicker-months">' +
		'<table class="v-table-condensed">' +
		DPGlobal.headTemplate +
		DPGlobal.contTemplate +
		DPGlobal.footTemplate +
		'</table>' +
		'</div>' +
		'<div class="v-datetimepicker-years">' +
		'<table class="v-table-condensed">' +
		DPGlobal.headTemplate +
		DPGlobal.contTemplate +
		DPGlobal.footTemplate +
		'</table>' +
		'</div>' +
		'</div>';
	DPGlobal.templateV3 = '<div class="v-datetimepicker">' +
		'<div class="v-datetimepicker-minutes">' +
		'<table class="v-table-condensed">' +
		DPGlobal.headTemplateV3 +
		DPGlobal.contTemplate +
		DPGlobal.footTemplate +
		'</table>' +
		'</div>' +
		'<div class="v-datetimepicker-hours">' +
		'<table class="v-table-condensed">' +
		DPGlobal.headTemplateV3 +
		DPGlobal.contTemplate +
		DPGlobal.footTemplate +
		'</table>' +
		'</div>' +
		'<div class="v-datetimepicker-days">' +
		'<table class="v-table-condensed">' +
		DPGlobal.headTemplateV3 +
		'<tbody></tbody>' +
		DPGlobal.footTemplate +
		'</table>' +
		'</div>' +
		'<div class="v-datetimepicker-months">' +
		'<table class="v-table-condensed">' +
		DPGlobal.headTemplateV3 +
		DPGlobal.contTemplate +
		DPGlobal.footTemplate +
		'</table>' +
		'</div>' +
		'<div class="v-datetimepicker-years">' +
		'<table class="v-table-condensed">' +
		DPGlobal.headTemplateV3 +
		DPGlobal.contTemplate +
		DPGlobal.footTemplate +
		'</table>' +
		'</div>' +
		'</div>';
	$vic.fn.datetimepicker.DPGlobal = DPGlobal;

	/* DATETIMEPICKER NO CONFLICT
	 * =================== */

	$vic.fn.datetimepicker.noConflict = function () {
		$vic.fn.datetimepicker = old;
		return this;
	};

	/* DATETIMEPICKER DATA-API
	 * ================== */

	$vic(document).on(
		'focus.v-datetimepicker.data-api click.v-datetimepicker.data-api',
		'[data-provide="v-datetimepicker"]',
		function (e) {
			var $this = $vic(this);
			if ($this.data('datetimepicker')) return;
			e.preventDefault();
			// component click requires us to explicitly show it
			$this.datetimepicker('show');
		}
	);
	$vic(function () {
		$vic('[data-provide="v-datetimepicker-inline"]').datetimepicker();
	});

}(window.$vic);

/**
 * French translation for bootstrap-datetimepicker
 * Nico Mollet <nico.mollet@gmail.com>
 */
;(function($vic){
	$vic.fn.datetimepicker.dates['fr'] = {
		days: ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"],
		daysShort: ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam", "Dim"],
		daysMin: ["D", "L", "Ma", "Me", "J", "V", "S", "D"],
		months: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"],
		monthsShort: ["Jan", "Fev", "Mar", "Avr", "Mai", "Jui", "Jul", "Aou", "Sep", "Oct", "Nov", "Dec"],
		today: "Aujourd'hui",
		suffix: [],
		meridiem: ["am", "pm"],
		weekStart: 1,
		format: "dd/mm/yyyy"
	};
}($vic));

!function(a,b){function c(a,b,c){return[parseFloat(a[0])*(n.test(a[0])?b/100:1),parseFloat(a[1])*(n.test(a[1])?c/100:1)]}function d(b,c){return parseInt(a.css(b,c),10)||0}function e(b){var c=b[0];return 9===c.nodeType?{width:b.width(),height:b.height(),offset:{top:0,left:0}}:a.isWindow(c)?{width:b.width(),height:b.height(),offset:{top:b.scrollTop(),left:b.scrollLeft()}}:c.preventDefault?{width:0,height:0,offset:{top:c.pageY,left:c.pageX}}:{width:b.outerWidth(),height:b.outerHeight(),offset:b.offset()}}a.ui=a.ui||{};var f,g=Math.max,h=Math.abs,i=Math.round,j=/left|center|right/,k=/top|center|bottom/,l=/[\+\-]\d+(\.[\d]+)?%?/,m=/^\w+/,n=/%$/,o=a.fn.pos;a.pos={scrollbarWidth:function(){if(f!==b)return f;var c,d,e=a("<div style='display:block;position:absolute;width:50px;height:50px;overflow:hidden;'><div style='height:100px;width:auto;'></div></div>"),g=e.children()[0];return a("body").append(e),c=g.offsetWidth,e.css("overflow","scroll"),d=g.offsetWidth,c===d&&(d=e[0].clientWidth),e.remove(),f=c-d},getScrollInfo:function(b){var c=b.isWindow||b.isDocument?"":b.element.css("overflow-x"),d=b.isWindow||b.isDocument?"":b.element.css("overflow-y"),e="scroll"===c||"auto"===c&&b.width<b.element[0].scrollWidth,f="scroll"===d||"auto"===d&&b.height<b.element[0].scrollHeight;return{width:f?a.pos.scrollbarWidth():0,height:e?a.pos.scrollbarWidth():0}},getWithinInfo:function(b){var c=a(b||window),d=a.isWindow(c[0]),e=!!c[0]&&9===c[0].nodeType;return{element:c,isWindow:d,isDocument:e,offset:c.offset()||{left:0,top:0},scrollLeft:c.scrollLeft(),scrollTop:c.scrollTop(),width:d?c.width():c.outerWidth(),height:d?c.height():c.outerHeight()}}},a.fn.pos=function(b){if(!b||!b.of)return o.apply(this,arguments);b=a.extend({},b);var f,n,p,q,r,s,t=a(b.of),u=a.pos.getWithinInfo(b.within),v=a.pos.getScrollInfo(u),w=(b.collision||"flip").split(" "),x={};return s=e(t),t[0].preventDefault&&(b.at="left top"),n=s.width,p=s.height,q=s.offset,r=a.extend({},q),a.each(["my","at"],function(){var a,c,d=(b[this]||"").split(" ");1===d.length&&(d=j.test(d[0])?d.concat(["center"]):k.test(d[0])?["center"].concat(d):["center","center"]),d[0]=j.test(d[0])?d[0]:"center",d[1]=k.test(d[1])?d[1]:"center",a=l.exec(d[0]),c=l.exec(d[1]),x[this]=[a?a[0]:0,c?c[0]:0],b[this]=[m.exec(d[0])[0],m.exec(d[1])[0]]}),1===w.length&&(w[1]=w[0]),"right"===b.at[0]?r.left+=n:"center"===b.at[0]&&(r.left+=n/2),"bottom"===b.at[1]?r.top+=p:"center"===b.at[1]&&(r.top+=p/2),f=c(x.at,n,p),r.left+=f[0],r.top+=f[1],this.each(function(){var e,j,k=a(this),l=k.outerWidth(),m=k.outerHeight(),o=d(this,"marginLeft"),s=d(this,"marginTop"),y=l+o+d(this,"marginRight")+v.width,z=m+s+d(this,"marginBottom")+v.height,A=a.extend({},r),B=c(x.my,k.outerWidth(),k.outerHeight());"right"===b.my[0]?A.left-=l:"center"===b.my[0]&&(A.left-=l/2),"bottom"===b.my[1]?A.top-=m:"center"===b.my[1]&&(A.top-=m/2),A.left+=B[0],A.top+=B[1],a.support.offsetFractions||(A.left=i(A.left),A.top=i(A.top)),e={marginLeft:o,marginTop:s},a.each(["left","top"],function(c,d){a.ui.pos[w[c]]&&a.ui.pos[w[c]][d](A,{targetWidth:n,targetHeight:p,elemWidth:l,elemHeight:m,collisionPosition:e,collisionWidth:y,collisionHeight:z,offset:[f[0]+B[0],f[1]+B[1]],my:b.my,at:b.at,within:u,elem:k})}),b.using&&(j=function(a){var c=q.left-A.left,d=c+n-l,e=q.top-A.top,f=e+p-m,i={target:{element:t,left:q.left,top:q.top,width:n,height:p},element:{element:k,left:A.left,top:A.top,width:l,height:m},horizontal:0>d?"left":c>0?"right":"center",vertical:0>f?"top":e>0?"bottom":"middle"};l>n&&h(c+d)<n&&(i.horizontal="center"),m>p&&h(e+f)<p&&(i.vertical="middle"),i.important=g(h(c),h(d))>g(h(e),h(f))?"horizontal":"vertical",b.using.call(this,a,i)}),k.offset(a.extend(A,{using:j}))})},a.ui.pos={_trigger:function(a,b,c,d){b.elem&&b.elem.trigger({type:c,position:a,positionData:b,triggered:d})},fit:{left:function(b,c){a.ui.pos._trigger(b,c,"posCollide","fitLeft");var d,e=c.within,f=e.isWindow?e.scrollLeft:e.offset.left,h=e.width,i=b.left-c.collisionPosition.marginLeft,j=f-i,k=i+c.collisionWidth-h-f;c.collisionWidth>h?j>0&&0>=k?(d=b.left+j+c.collisionWidth-h-f,b.left+=j-d):b.left=k>0&&0>=j?f:j>k?f+h-c.collisionWidth:f:j>0?b.left+=j:k>0?b.left-=k:b.left=g(b.left-i,b.left),a.ui.pos._trigger(b,c,"posCollided","fitLeft")},top:function(b,c){a.ui.pos._trigger(b,c,"posCollide","fitTop");var d,e=c.within,f=e.isWindow?e.scrollTop:e.offset.top,h=c.within.height,i=b.top-c.collisionPosition.marginTop,j=f-i,k=i+c.collisionHeight-h-f;c.collisionHeight>h?j>0&&0>=k?(d=b.top+j+c.collisionHeight-h-f,b.top+=j-d):b.top=k>0&&0>=j?f:j>k?f+h-c.collisionHeight:f:j>0?b.top+=j:k>0?b.top-=k:b.top=g(b.top-i,b.top),a.ui.pos._trigger(b,c,"posCollided","fitTop")}},flip:{left:function(b,c){a.ui.pos._trigger(b,c,"posCollide","flipLeft");var d,e,f=c.within,g=f.offset.left+f.scrollLeft,i=f.width,j=f.isWindow?f.scrollLeft:f.offset.left,k=b.left-c.collisionPosition.marginLeft,l=k-j,m=k+c.collisionWidth-i-j,n="left"===c.my[0]?-c.elemWidth:"right"===c.my[0]?c.elemWidth:0,o="left"===c.at[0]?c.targetWidth:"right"===c.at[0]?-c.targetWidth:0,p=-2*c.offset[0];0>l?(d=b.left+n+o+p+c.collisionWidth-i-g,(0>d||d<h(l))&&(b.left+=n+o+p)):m>0&&(e=b.left-c.collisionPosition.marginLeft+n+o+p-j,(e>0||h(e)<m)&&(b.left+=n+o+p)),a.ui.pos._trigger(b,c,"posCollided","flipLeft")},top:function(b,c){a.ui.pos._trigger(b,c,"posCollide","flipTop");var d,e,f=c.within,g=f.offset.top+f.scrollTop,i=f.height,j=f.isWindow?f.scrollTop:f.offset.top,k=b.top-c.collisionPosition.marginTop,l=k-j,m=k+c.collisionHeight-i-j,n="top"===c.my[1],o=n?-c.elemHeight:"bottom"===c.my[1]?c.elemHeight:0,p="top"===c.at[1]?c.targetHeight:"bottom"===c.at[1]?-c.targetHeight:0,q=-2*c.offset[1];0>l?(e=b.top+o+p+q+c.collisionHeight-i-g,b.top+o+p+q>l&&(0>e||e<h(l))&&(b.top+=o+p+q)):m>0&&(d=b.top-c.collisionPosition.marginTop+o+p+q-j,b.top+o+p+q>m&&(d>0||h(d)<m)&&(b.top+=o+p+q)),a.ui.pos._trigger(b,c,"posCollided","flipTop")}},flipfit:{left:function(){a.ui.pos.flip.left.apply(this,arguments),a.ui.pos.fit.left.apply(this,arguments)},top:function(){a.ui.pos.flip.top.apply(this,arguments),a.ui.pos.fit.top.apply(this,arguments)}}},function(){var b,c,d,e,f,g=document.getElementsByTagName("body")[0],h=document.createElement("div");b=document.createElement(g?"div":"body"),d={visibility:"hidden",width:0,height:0,border:0,margin:0,background:"none"},g&&a.extend(d,{position:"absolute",left:"-1000px",top:"-1000px"});for(f in d)b.style[f]=d[f];b.appendChild(h),c=g||document.documentElement,c.insertBefore(b,c.firstChild),h.style.cssText="position: absolute; left: 10.7432222px;",e=a(h).offset().left,a.support.offsetFractions=e>10&&11>e,b.innerHTML="",c.removeChild(b)}()}($vic),function(a){"use strict";"function"==typeof define&&define.amd?define(["jquery"],a):window.$vic&&!window.$vic.fn.iconpicker&&a(window.$vic)}(function(a){"use strict";var b={isEmpty:function(a){return a===!1||""===a||null===a||void 0===a},isEmptyObject:function(a){return this.isEmpty(a)===!0||0===a.length},isElement:function(b){return a(b).length>0},isString:function(a){return"string"==typeof a||a instanceof String},isArray:function(b){return a.isArray(b)},inArray:function(b,c){return-1!==a.inArray(b,c)},throwError:function(a){throw"Font Awesome Icon Picker Exception: "+a}},c=function(d,e){this._id=c._idCounter++,this.element=a(d).addClass("iconpicker-element"),this._trigger("iconpickerCreate"),this.options=a.extend({},c.defaultOptions,this.element.data(),e),this.options.templates=a.extend({},c.defaultOptions.templates,this.options.templates),this.options.originalPlacement=this.options.placement,this.container=b.isElement(this.options.container)?a(this.options.container):!1,this.container===!1&&(this.container=this.element.is("input")?this.element.parent():this.element),this.container.addClass("iconpicker-container").is(".dropdown-menu")&&(this.options.placement="inline"),this.input=this.element.is("input")?this.element.addClass("iconpicker-input"):!1,this.input===!1&&(this.input=this.container.find(this.options.input)),this.component=this.container.find(this.options.component).addClass("iconpicker-component"),0===this.component.length?this.component=!1:this.component.find("i").addClass(this.options.iconComponentBaseClass),this._createPopover(),this._createIconpicker(),0===this.getAcceptButton().length&&(this.options.mustAccept=!1),this.container.is(".input-group")?this.container.parent().append(this.popover):this.container.append(this.popover),this._bindElementEvents(),this._bindWindowEvents(),this.update(this.options.selected),this.isInline()&&this.show(),this._trigger("iconpickerCreated")};c._idCounter=0,c.defaultOptions={title:!1,selected:!1,defaultValue:!1,placement:"bottom",collision:"none",animation:!0,hideOnSelect:!1,showFooter:!1,searchInFooter:!1,mustAccept:!1,selectedCustomClass:"bg-primary",icons:[],iconBaseClass:"fa",iconComponentBaseClass:"fa fa-fw",iconClassPrefix:"fa-",input:"input",component:".input-group-addon",container:!1,templates:{popover:'<div class="iconpicker-popover popover"><div class="arrow"></div><div class="popover-title"></div><div class="popover-content"></div></div>',footer:'<div class="popover-footer"></div>',buttons:'<button class="iconpicker-btn iconpicker-btn-cancel btn btn-default btn-sm">Cancel</button> <button class="iconpicker-btn iconpicker-btn-accept btn btn-primary btn-sm">Accept</button>',search:'<input type="search" class="form-control iconpicker-search" placeholder="Type to filter" />',iconpicker:'<div class="iconpicker"><div class="iconpicker-items"></div></div>',iconpickerItem:'<div class="iconpicker-item"><i></i></div>'}},c.batch=function(b,c){var d=Array.prototype.slice.call(arguments,2);return a(b).each(function(){var b=a(this).data("iconpicker");b&&b[c].apply(b,d)})},c.prototype={constructor:c,options:{},_id:0,_trigger:function(b,c){c=c||{},this.element.trigger(a.extend({type:b,iconpickerInstance:this},c))},_createPopover:function(){this.popover=a(this.options.templates.popover);var c=this.popover.find(".popover-title");if(this.options.title&&c.append(a('<div class="popover-title-text">'+this.options.title+"</div>")),this.options.searchInFooter||b.isEmpty(this.options.templates.buttons)?this.options.title||c.remove():c.append(this.options.templates.search),this.options.showFooter&&!b.isEmpty(this.options.templates.footer)){var d=a(this.options.templates.footer);!b.isEmpty(this.options.templates.search)&&this.options.searchInFooter&&d.append(a(this.options.templates.search)),b.isEmpty(this.options.templates.buttons)||d.append(a(this.options.templates.buttons)),this.popover.append(d)}return this.options.animation===!0&&this.popover.addClass("fade"),this.popover},_createIconpicker:function(){var b=this;this.iconpicker=a(this.options.templates.iconpicker);var c=function(){var c=a(this);c.is("."+b.options.iconBaseClass)&&(c=c.parent()),b._trigger("iconpickerSelect",{iconpickerItem:c,iconpickerValue:b.iconpickerValue}),b.options.mustAccept===!1?(b.update(c.data("iconpickerValue")),b._trigger("iconpickerSelected",{iconpickerItem:this,iconpickerValue:b.iconpickerValue})):b.update(c.data("iconpickerValue"),!0),b.options.hideOnSelect&&b.options.mustAccept===!1&&b.hide()};for(var d in this.options.icons){var e=a(this.options.templates.iconpickerItem);e.find("i").addClass(b.options.iconBaseClass+" "+this.options.iconClassPrefix+this.options.icons[d]),e.data("iconpickerValue",this.options.icons[d]).on("click.iconpicker",c),this.iconpicker.find(".iconpicker-items").append(e.attr("title","."+this.getValue(this.options.icons[d])))}return this.popover.find(".popover-content").append(this.iconpicker),this.iconpicker},_isEventInsideIconpicker:function(b){var c=a(b.target);return c.hasClass("iconpicker-element")&&(!c.hasClass("iconpicker-element")||c.is(this.element))||0!==c.parents(".iconpicker-popover").length?!0:!1},_bindElementEvents:function(){var c=this;this.getSearchInput().on("keyup",function(){c.filter(a(this).val().toLowerCase())}),this.getAcceptButton().on("click.iconpicker",function(){var a=c.iconpicker.find(".iconpicker-selected").get(0);c.update(c.iconpickerValue),c._trigger("iconpickerSelected",{iconpickerItem:a,iconpickerValue:c.iconpickerValue}),c.isInline()||c.hide()}),this.getCancelButton().on("click.iconpicker",function(){c.isInline()||c.hide()}),this.element.on("focus.iconpicker",function(a){c.show(),a.stopPropagation()}),this.hasComponent()&&this.component.on("click.iconpicker",function(){c.toggle()}),this.hasInput()&&this.input.on("keyup.iconpicker",function(a){b.inArray(a.keyCode,[38,40,37,39,16,17,18,9,8,91,93,20,46,186,190,46,78,188,44,86])?c._updateFormGroupStatus(c.getValid(this.value)!==!1):c.update()})},_bindWindowEvents:function(){var b=a(window.document),c=this,d=".iconpicker.inst"+this._id;return a(window).on("resize.iconpicker"+d+" orientationchange.iconpicker"+d,function(){c.popover.hasClass("in")&&c.updatePlacement()}),c.isInline()||b.on("mouseup"+d,function(a){return c._isEventInsideIconpicker(a)||c.isInline()||c.hide(),a.stopPropagation(),a.preventDefault(),!1}),!1},_unbindElementEvents:function(){this.popover.off(".iconpicker"),this.element.off(".iconpicker"),this.hasInput()&&this.input.off(".iconpicker"),this.hasComponent()&&this.component.off(".iconpicker"),this.hasContainer()&&this.container.off(".iconpicker")},_unbindWindowEvents:function(){a(window).off(".iconpicker.inst"+this._id),a(window.document).off(".iconpicker.inst"+this._id)},updatePlacement:function(b,c){b=b||this.options.placement,this.options.placement=b,c=c||this.options.collision,c=c===!0?"flip":c;var d={at:"right bottom",my:"right top",of:this.hasInput()?this.input:this.container,collision:c===!0?"flip":c,within:window};if(this.popover.removeClass("inline topLeftCorner topLeft top topRight topRightCorner rightTop right rightBottom bottomRight bottomRightCorner bottom bottomLeft bottomLeftCorner leftBottom left leftTop"),"object"==typeof b)return this.popover.pos(a.extend({},d,b));switch(b){case"inline":d=!1;break;case"topLeftCorner":d.my="right bottom",d.at="left top";break;case"topLeft":d.my="left bottom",d.at="left top";break;case"top":d.my="center bottom",d.at="center top";break;case"topRight":d.my="right bottom",d.at="right top";break;case"topRightCorner":d.my="left bottom",d.at="right top";break;case"rightTop":d.my="left bottom",d.at="right center";break;case"right":d.my="left center",d.at="right center";break;case"rightBottom":d.my="left top",d.at="right center";break;case"bottomRightCorner":d.my="left top",d.at="right bottom";break;case"bottomRight":d.my="right top",d.at="right bottom";break;case"bottom":d.my="center top",d.at="center bottom";break;case"bottomLeft":d.my="left top",d.at="left bottom";break;case"bottomLeftCorner":d.my="right top",d.at="left bottom";break;case"leftBottom":d.my="right top",d.at="left center";break;case"left":d.my="right center",d.at="left center";break;case"leftTop":d.my="right bottom",d.at="left center";break;default:return!1}return this.popover.css({display:"inline"===this.options.placement?"":"block"}),d!==!1?this.popover.pos(d).css("maxWidth",a(window).width()-this.container.offset().left-5):this.popover.css({top:"auto",right:"auto",bottom:"auto",left:"auto",maxWidth:"none"}),this.popover.addClass(this.options.placement),!0},_updateComponents:function(){if(this.iconpicker.find(".iconpicker-item.iconpicker-selected").removeClass("iconpicker-selected "+this.options.selectedCustomClass),this.iconpicker.find("."+this.options.iconBaseClass+"."+this.options.iconClassPrefix+this.iconpickerValue).parent().addClass("iconpicker-selected "+this.options.selectedCustomClass),this.hasComponent()){var a=this.component.find("i");a.length>0?a.attr("class",this.options.iconComponentBaseClass+" "+this.getValue()):this.component.html(this.getValueHtml())}},_updateFormGroupStatus:function(a){return this.hasInput()?(a!==!1?this.input.parents(".form-group:first").removeClass("has-error"):this.input.parents(".form-group:first").addClass("has-error"),!0):!1},getValid:function(c){b.isString(c)||(c="");var d=""===c;return c=a.trim(c.replace(this.options.iconClassPrefix,"")),b.inArray(c,this.options.icons)||d?c:!1},setValue:function(a){var b=this.getValid(a);return b!==!1?(this.iconpickerValue=b,this._trigger("iconpickerSetValue",{iconpickerValue:b}),this.iconpickerValue):(this._trigger("iconpickerInvalid",{iconpickerValue:a}),!1)},getValue:function(a){return this.options.iconClassPrefix+(a?a:this.iconpickerValue)},getValueHtml:function(){return'<i class="'+this.options.iconBaseClass+" "+this.getValue()+'"></i>'},setSourceValue:function(a){return a=this.setValue(a),a!==!1&&""!==a&&(this.hasInput()?this.input.val(this.getValue()):this.element.data("iconpickerValue",this.getValue()),this._trigger("iconpickerSetSourceValue",{iconpickerValue:a})),a},getSourceValue:function(a){a=a||this.options.defaultValue;var b=a;return b=this.hasInput()?this.input.val():this.element.data("iconpickerValue"),(void 0===b||""===b||null===b||b===!1)&&(b=a),b},hasInput:function(){return this.input!==!1},hasComponent:function(){return this.component!==!1},hasContainer:function(){return this.container!==!1},getAcceptButton:function(){return this.popover.find(".iconpicker-btn-accept")},getCancelButton:function(){return this.popover.find(".iconpicker-btn-cancel")},getSearchInput:function(){return this.popover.find(".iconpicker-search")},filter:function(c){if(b.isEmpty(c))return this.iconpicker.find(".iconpicker-item").show(),a(!1);var d=[];return this.iconpicker.find(".iconpicker-item").each(function(){var b=a(this),e=b.attr("title").toLowerCase(),f=!1;try{f=new RegExp(c,"g")}catch(g){f=!1}f!==!1&&e.match(f)?(d.push(b),b.show()):b.hide()}),d},show:function(){return this.popover.hasClass("in")?!1:(a.iconpicker.batch(a(".iconpicker-popover.in:not(.inline)").not(this.popover),"hide"),this._trigger("iconpickerShow"),this.updatePlacement(),this.popover.addClass("in"),void setTimeout(a.proxy(function(){this.popover.css("display",this.isInline()?"":"block"),this._trigger("iconpickerShown")},this),this.options.animation?300:1))},hide:function(){return this.popover.hasClass("in")?(this._trigger("iconpickerHide"),this.popover.removeClass("in"),void setTimeout(a.proxy(function(){this.popover.css("display","none"),this.getSearchInput().val(""),this.filter(""),this._trigger("iconpickerHidden")},this),this.options.animation?300:1)):!1},toggle:function(){this.popover.is(":visible")?this.hide():this.show(!0)},update:function(a,b){return a=a?a:this.getSourceValue(this.iconpickerValue),this._trigger("iconpickerUpdate"),b===!0?a=this.setValue(a):(a=this.setSourceValue(a),this._updateFormGroupStatus(a!==!1)),a!==!1&&this._updateComponents(),this._trigger("iconpickerUpdated"),a},destroy:function(){this._trigger("iconpickerDestroy"),this.element.removeData("iconpicker").removeData("iconpickerValue").removeClass("iconpicker-element"),this._unbindElementEvents(),this._unbindWindowEvents(),a(this.popover).remove(),this._trigger("iconpickerDestroyed")},disable:function(){return this.hasInput()?(this.input.prop("disabled",!0),!0):!1},enable:function(){return this.hasInput()?(this.input.prop("disabled",!1),!0):!1},isDisabled:function(){return this.hasInput()?this.input.prop("disabled")===!0:!1},isInline:function(){return"inline"===this.options.placement||this.popover.hasClass("inline")}},a.iconpicker=c,a.fn.iconpicker=function(b){return this.each(function(){var d=a(this);d.data("iconpicker")||d.data("iconpicker",new c(this,"object"==typeof b?b:{}))})},c.defaultOptions.icons=["adjust","adn","align-center","align-justify","align-left","align-right","ambulance","anchor","android","angle-double-down","angle-double-left","angle-double-right","angle-double-up","angle-down","angle-left","angle-right","angle-up","apple","archive","arrow-circle-down","arrow-circle-left","arrow-circle-o-down","arrow-circle-o-left","arrow-circle-o-right","arrow-circle-o-up","arrow-circle-right","arrow-circle-up","arrow-down","arrow-left","arrow-right","arrow-up","arrows","arrows-alt","arrows-h","arrows-v","asterisk","automobile","backward","ban","bank","bar-chart-o","barcode","bars","beer","behance","behance-square","bell","bell-o","bitbucket","bitbucket-square","bitcoin","bold","bolt","bomb","book","bookmark","bookmark-o","briefcase","btc","bug","building","building-o","bullhorn","bullseye","cab","calendar","calendar-o","camera","camera-retro","car","caret-down","caret-left","caret-right","caret-square-o-down","caret-square-o-left","caret-square-o-right","caret-square-o-up","caret-up","certificate","chain","chain-broken","check","check-circle","check-circle-o","check-square","check-square-o","chevron-circle-down","chevron-circle-left","chevron-circle-right","chevron-circle-up","chevron-down","chevron-left","chevron-right","chevron-up","child","circle","circle-o","circle-o-notch","circle-thin","clipboard","clock-o","cloud","cloud-download","cloud-upload","cny","code","code-fork","codepen","coffee","cog","cogs","columns","comment","comment-o","comments","comments-o","compass","compress","copy","credit-card","crop","crosshairs","css3","cube","cubes","cut","cutlery","dashboard","database","dedent","delicious","desktop","deviantart","digg","dollar","dot-circle-o","download","dribbble","dropbox","drupal","edit","eject","ellipsis-h","ellipsis-v","empire","envelope","envelope-o","envelope-square","eraser","eur","euro","exchange","exclamation","exclamation-circle","exclamation-triangle","expand","external-link","external-link-square","eye","eye-slash","facebook","facebook-square","fast-backward","fast-forward","fax","female","fighter-jet","file","file-archive-o","file-audio-o","file-code-o","file-excel-o","file-image-o","file-movie-o","file-o","file-pdf-o","file-photo-o","file-picture-o","file-powerpoint-o","file-sound-o","file-text","file-text-o","file-video-o","file-word-o","file-zip-o","files-o","film","filter","fire","fire-extinguisher","flag","flag-checkered","flag-o","flash","flask","flickr","floppy-o","folder","folder-o","folder-open","folder-open-o","font","forward","foursquare","frown-o","gamepad","gavel","gbp","ge","gear","gears","gift","git","git-square","github","github-alt","github-square","gittip","glass","globe","google","google-plus","google-plus-square","graduation-cap","group","h-square","hacker-news","hand-o-down","hand-o-left","hand-o-right","hand-o-up","hdd-o","header","headphones","heart","heart-o","history","home","hospital-o","html5","image","inbox","indent","info","info-circle","inr","instagram","institution","italic","joomla","jpy","jsfiddle","key","keyboard-o","krw","language","laptop","leaf","legal","lemon-o","level-down","level-up","life-bouy","life-ring","life-saver","lightbulb-o","link","linkedin","linkedin-square","linux","list","list-alt","list-ol","list-ul","location-arrow","lock","long-arrow-down","long-arrow-left","long-arrow-right","long-arrow-up","magic","magnet","mail-forward","mail-reply","mail-reply-all","male","map-marker","maxcdn","medkit","meh-o","microphone","microphone-slash","minus","minus-circle","minus-square","minus-square-o","mobile","mobile-phone","money","moon-o","mortar-board","music","navicon","openid","outdent","pagelines","paper-plane","paper-plane-o","paperclip","paragraph","paste","pause","paw","pencil","pencil-square","pencil-square-o","phone","phone-square","photo","picture-o","pied-piper","pied-piper-alt","pied-piper-square","pinterest","pinterest-square","plane","play","play-circle","play-circle-o","plus","plus-circle","plus-square","plus-square-o","power-off","print","puzzle-piece","qq","qrcode","question","question-circle","quote-left","quote-right","ra","random","rebel","recycle","reddit","reddit-square","refresh","renren","reorder","repeat","reply","reply-all","retweet","rmb","road","rocket","rotate-left","rotate-right","rouble","rss","rss-square","rub","ruble","rupee","save","scissors","search","search-minus","search-plus","send","send-o","share","share-alt","share-alt-square","share-square","share-square-o","shield","shopping-cart","sign-in","sign-out","signal","sitemap","skype","slack","sliders","smile-o","sort","sort-alpha-asc","sort-alpha-desc","sort-amount-asc","sort-amount-desc","sort-asc","sort-desc","sort-down","sort-numeric-asc","sort-numeric-desc","sort-up","soundcloud","space-shuttle","spinner","spoon","spotify","square","square-o","stack-exchange","stack-overflow","star","star-half","star-half-empty","star-half-full","star-half-o","star-o","steam","steam-square","step-backward","step-forward","stethoscope","stop","strikethrough","stumbleupon","stumbleupon-circle","subscript","suitcase","sun-o","superscript","support","table","tablet","tachometer","tag","tags","tasks","taxi","tencent-weibo","terminal","text-height","text-width","th","th-large","th-list","thumb-tack","thumbs-down","thumbs-o-down","thumbs-o-up","thumbs-up","ticket","times","times-circle","times-circle-o","tint","toggle-down","toggle-left","toggle-right","toggle-up","trash-o","tree","trello","trophy","truck","try","tumblr","tumblr-square","turkish-lira","twitter","twitter-square","umbrella","underline","undo","university","unlink","unlock","unlock-alt","unsorted","upload","usd","user","user-md","users","video-camera","vimeo-square","vine","vk","volume-down","volume-off","volume-up","warning","wechat","weibo","weixin","wheelchair","windows","won","wordpress","wrench","xing","xing-square","yahoo","yen","youtube","youtube-play","youtube-square"]});
/* ============================================================
 * mopabootstrap-collection.js v3.0.0
 * http://bootstrap.mohrenweiserpartner.de/mopa/bootstrap/forms/collections
 * ============================================================
 * Copyright 2012 Mohrenweiser & Partner
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
 * ============================================================ */

!function ($vic) {
    "use strict";

    /* Collection PUBLIC CLASS DEFINITION
     * ============================== */

    var Collection = function (element, options) {
        this.$vicelement = $vic(element);
        this.options = $vic.extend({}, $vic.fn.collection.defaults, options);

        // This must work with "collections" inside "collections", and should
        // select its children, and not the "collection" inside children.
        var $viccollection = $vic('div' + this.options.collection_id);

        // Indexes must be different for every Collection
        if (typeof this.options.index === 'undefined') {
            this.options.index = {};
        }
        if (!this.options.initial_size) {
            this.options.initial_size = $viccollection.children().size();
        }

        this.options.index[this.options.collection_id] = this.options.initial_size;
    };
    Collection.prototype = {
        constructor: Collection,
        add: function () {
            console.log('collection item add');
            // this leads to overriding items
            this.options.index[this.options.collection_id] = this.options.index[this.options.collection_id] + 1;
            var index = this.options.index[this.options.collection_id];
            if ($vic.isFunction(this.options.addcheckfunc) && ! this.options.addcheckfunc()) {
                if ($vic.isFunction(this.options.addfailedfunc)) {
                    this.options.addfailedfunc();
                }
                return;
            }
            this.addPrototype(index);
        },
        addPrototype: function (index) {
            console.log('collection item addPrototype');
            var $viccollection = $vic(this.options.collection_id);
            console.log($viccollection);
            var prototype_name = $viccollection.data('prototype-name');
            var prototype_label = $viccollection.data('prototype-label');

            // Just in case it doesn't get it
            if (typeof prototype_name === 'undefined') {
                prototype_name = '__name__';
            }

            if (typeof prototype_label === 'undefined') {
                prototype_label = '__name__label__';
            }

            var name_replace_pattern = new RegExp(prototype_name, 'g');
            var label_replace_pattern = new RegExp(prototype_label, 'g');
            var rowContent = $viccollection.attr('data-prototype')
                    .replace(label_replace_pattern, index)
                    .replace(name_replace_pattern, index);
            var row = $vic(rowContent);
            console.log(rowContent);
            $viccollection.append(row);
            $vic(window).triggerHandler('add.mopa-collection-item', [$viccollection, row, index])
        },
        remove: function (row) {
            var $viccollection = $vic(this.options.collection_id);

            if (typeof row == 'undefined') {
                row = this.$vicelement.closest('.collection-item');
            }

            if (typeof row != 'undefined') {
                if (row instanceof $vic) {
                    row = row.get(0);
                }

                var oldIndex = this.getIndex(row);

                if (oldIndex == - 1) {
                    throw new Error('row not contained in collection');
                }

                $vic(window).triggerHandler('before-remove.mopa-collection-item', [$viccollection, row, oldIndex]);
                row.remove();
                $vic(window).triggerHandler('remove.mopa-collection-item', [$viccollection, row, oldIndex]);
            }
        },
        /**
         * Get the index of the current row zero based
         * return -1 if not found
         */
        getIndex: function (row) {
            if (row instanceof $vic) {
                row = row.get(0);
            }

            var $viccollection = $vic(this.options.collection_id);
            var items = $viccollection.children();

            for (var i = 0; i < items.size(); i ++) {
                if (row == items[i]) {
                    return i;
                }
            }
            return - 1;
        },
        getItem: function (index) {
            var items = this.getItems();

            return items[index];
        },
        getItems: function (index) {
            var $viccollection = $vic(this.options.collection_id);
            var items = $viccollection.children();

            return items;
        }
    };

    /* COLLECTION PLUGIN DEFINITION
     * ======================== */

    $vic.fn.collection = function (option) {
        var coll_args = arguments;

        return this.each(function () {
            var $victhis = $vic(this),
                collection_id = $victhis.data('collection-vic-add-btn'),
                data = $victhis.data('collection'),
                options = typeof option == 'object' ? option : {};

            if (collection_id) {
                options.collection_id = collection_id;
            }
            else if ($victhis.closest(".collection-vic-items").attr('id')) {
                options.collection_id = '#' + $victhis.closest(".collection-vic-items").attr('id');
            } else {
                options.collection_id = this.id.length === 0 ? false : '#' + this.id;
                if (!options.collection_id) {
                    throw new Error('Could not load collection id');
                }
            }
            if (!data) {
                $victhis.data('collection', (data = new Collection(this, options)));
            }
            if (coll_args.length > 1) {
                var arg1 = coll_args[1];
                var returnval;
            }
            if (option == 'add') {
                data.add();
            }
            if (option == 'remove') {
                data.remove(arg1);
            }
            if (option == 'getIndex') {
                returnval = data.getIndex(arg1);
            }
            if (option == 'getItem') {
                returnval = data.getItem(arg1);
            }
            if (option == 'getItems') {
                returnval = data.getItems();
            }
            if (coll_args.length > 2 && typeof coll_args[2] == 'function') {
                coll_args[2].call(this, returnval);
            }
        });
    };

    $vic.fn.collection.defaults = {
        collection_id: null,
        initial_size: 0,
        addcheckfunc: false,
        addfailedfunc: false
    };

    $vic.fn.collection.Constructor = Collection;

    /* COLLECTION DATA-API
     * =============== */

    $vic(function () {
        $vic('body').on('click.collection.data-api', '[data-collection-vic-add-btn]', function (e) {
            console.log('add item');
            var $vicbtn = $vic(e.target);
            if (! $vicbtn.hasClass('vic-btn')) {
                $vicbtn = $vicbtn.closest('.vic-btn');
            }
            console.log($vicbtn);
            $vicbtn.collection('add');
            e.preventDefault();
        });
        $vic('body').on('click.collection.data-api', '[data-collection-vic-remove-btn]', function (e) {
            var $vicbtn = $vic(e.target);

            if (! $vicbtn.hasClass('vic-btn')) {
                $vicbtn = $vicbtn.closest('.vic-btn');
            }
            $vicbtn.collection('remove');
            e.preventDefault();
        });
    });

}(window.$vic);

function validSlug(value) {
  return /^([a-zA-Z0-9-]*)?$/i.test(value);
}
function addSlugValidation(inputSlug, allowEmpty){
    displaySlugIcons(inputSlug, inputSlug.val(), allowEmpty);

    inputSlug.on('keyup', function(){
        displaySlugIcons(inputSlug, $vic(this).val(), allowEmpty);
    });
}
function displaySlugIcons(inputSlug, slug, allowEmpty){
    var inputSlugId = inputSlug.attr('id');
    var correctSlugIcon = $vic('#' + inputSlugId + '-correct');
    var notCorrectSlugIcon = $vic('#' + inputSlugId + '-not-correct');
    if (slug != 'undefined' && slug != "") {
        if (validSlug(slug)) {
            correctSlugIcon.removeClass('v-hidden');
            notCorrectSlugIcon.addClass('v-hidden');
        }else{
            correctSlugIcon.addClass('v-hidden');
            notCorrectSlugIcon.removeClass('v-hidden');
        }
    }else{
        if (allowEmpty && slug != 'undefined') {
            correctSlugIcon.removeClass('v-hidden');
            notCorrectSlugIcon.addClass('v-hidden');
        } else {
            correctSlugIcon.addClass('v-hidden');
            notCorrectSlugIcon.removeClass('v-hidden');
        }
    };
}

/**
 * Refresh on change
 ==================
 * Problematic:
 * When a form field conditions the others fields, add the data-refreshOnChange="true" attribute
 * to pass here and then reload|refresh the template (without any errors because the form is not yet properly submitted)
 * by calling the action in a custom mode: novalidate.
 * Then, on the change event, it will call the form action with the novalidate GET variable.
 * In the WidgetManager@createWidget and WidgetManager@editWidget, we do not validate the form and just returninng the template
 * with the new form types.
 *
 **/

$vic(document).on('change', 'select[data-refreshOnChange="true"], input:checkbox[data-refreshOnChange="true"]', function(event) {
    var input = $vic(this);
    var form = $vic(this).parents('form');
    loading(true);

    var targetClass = '.v-modal__body .v-container [data-group="tab-widget-quantum"][data-state="visible"]';
    if ($vic(this).data('target')) {
        targetClass = $vic(this).data('target');
    }
    var updateStrategy = "html";
    if ($vic(this).data('update-strategy')) {
        updateStrategy = $vic(this).data('update-strategy');
    }

    //Get last element of visible target class
    var $target = $vic(document).find(targetClass + ':visible');
    $target = $target.last();

    $vic.ajax({
        type: form.attr('method'),
        url : form.attr('action') + (form.attr('action').split('?')[1] ? '&' : '?') + 'novalidate',
        data: form.serialize(),
        async: true
    }).done(function(response){
        var actives = [];
        $vic(input).parents('.vic-active').each(function() {
            if ($vic(this).attr('id')) {
                actives.push($vic(this).attr('id'));
            }
        });
        //By default, the updateStrategy is html (a simple replace) but you can set your own function
        //for example, append, after etc or even a custom one.
        eval('$target.' + updateStrategy + '(response.html)');

        $vic(actives).each(function() {
            $vic('a[href="#'+this+'"]').victab('show');
        });
        loading(false);
    }).fail(function(response) {
        console.log(response);
        error('Oups, une erreur est apparue', 10000);
    });
});

/**
 * Keep order when eval or load script
 =====================================
 * Problematic:
 * When 2 or more scripts tags need to be evaluated and the first script is an external script
 * if the other scripts need the first one then an error occur because the first wasn't load entirely.
 * example:
 * <script src="source.js"></script>
 * <script>var var2 = CONST + 1 // CONST is defined in source.js</script>
 *
 * This function evaluate scripts one per one and wait to load entirely each script before load an other one.
 */
function evalAll(scripts, current) {
    current = (current) ? current : 0;
    if (current < scripts.length) {
        var script = $(scripts[current]);
        var src = script.attr('src');
        if (!src) {
            eval(script.text());
            evalAll(scripts, current + 1);
        }
        else {
            $.getScript(src, function(){
                evalAll(scripts, current + 1);
            });
        }
    }
}

var Nav4=((navigator.appName=="Netscape")&&(parseInt(navigator.appVersion)==4));var dialogWin=new Object();function openDGDialog(d,f,b,e,c){if(!dialogWin.win||(dialogWin.win&&dialogWin.win.closed)){dialogWin.returnFunc=e;dialogWin.returnedValue="";dialogWin.args=c;dialogWin.url=d;dialogWin.width=f;dialogWin.height=b;dialogWin.name=(new Date()).getSeconds().toString();if(Nav4){dialogWin.left=window.screenX+((window.outerWidth-dialogWin.width)/2);dialogWin.top=window.screenY+((window.outerHeight-dialogWin.height)/2);var a="screenX="+dialogWin.left+",screenY="+dialogWin.top+",resizable=no,width="+dialogWin.width+",height="+dialogWin.height}else{dialogWin.left=(screen.width-dialogWin.width)/2;dialogWin.top=(screen.height-dialogWin.height)/2;var a="left="+dialogWin.left+",top="+dialogWin.top+",resizable=no,width="+dialogWin.width+",height="+dialogWin.height}dialogWin.win=window.open(dialogWin.url,dialogWin.name,a);dialogWin.win.focus()}else{dialogWin.win.focus()}}function deadend(){if(dialogWin.win&&!dialogWin.win.closed){dialogWin.win.focus();return false}}var IELinkClicks;function disableForms(){IELinkClicks=new Array();for(var c=0;c<frames.length;c++){for(var b=0;b<frames[c].document.forms.length;b++){for(var a=0;a<frames[c].document.forms[b].elements.length;a++){frames[c].document.forms[b].elements[a].disabled=true}}IELinkClicks[c]=new Array();for(b=0;b<frames[c].document.links.length;b++){IELinkClicks[c][b]=frames[c].document.links[b].onclick;frames[c].document.links[b].onclick=deadend}frames[c].window.onfocus=checkModal;frames[c].document.onclick=checkModal}}function enableForms(){for(var c=0;c<frames.length;c++){for(var b=0;b<frames[c].document.forms.length;b++){for(var a=0;a<frames[c].document.forms[b].elements.length;a++){frames[c].document.forms[b].elements[a].disabled=false}}for(b=0;b<frames[c].document.links.length;b++){frames[c].document.links[b].onclick=IELinkClicks[c][b]}}}function blockEvents(){if(Nav4){window.captureEvents(Event.CLICK|Event.MOUSEDOWN|Event.MOUSEUP|Event.FOCUS);window.onclick=deadend}else{disableForms()}window.onfocus=checkModal}function unblockEvents(){if(Nav4){window.releaseEvents(Event.CLICK|Event.MOUSEDOWN|Event.MOUSEUP|Event.FOCUS);window.onclick=null;window.onfocus=null}else{enableForms()}}function checkModal(){setTimeout("finishChecking()",50);return true}function finishChecking(){if(dialogWin.win&&!dialogWin.win.closed){dialogWin.win.focus()}};


// PAGE MODAL EVENTS
// Create new page after submit
$vic(document).on('click', '.v-modal.v-modal--view *[data-modal="create"]', function(event) {

    $vic(document).trigger('victoire_modal_page_save_create_before');
    event.preventDefault();
    var form = $vic(this).parents('.v-modal').find('.v-modal__content form');

    loading(true);

    $vic.ajax({
        type: form.attr('method'),
        url : form.attr('action'),
        data: form.serialize(),
    }).done(function(response){
        if (true === response.success) {
            //redirect to the new page
            window.location.replace(response.url);
            closeModal();
            congrat(response.message, 10000);
        } else {
            warn(response.message, 10000);
            $vic('#vic-modal').replaceWith(response.html);
            $vic('#vic-modal').vicmodal({
                keyboard: true,
                backdrop: false
            });
        }
        $vic(document).trigger('victoire_modal_page_save_create_after');
    });
});

// Update an existing page
$vic(document).on('click', '.v-modal.v-modal--view a[data-modal="update"]', function(event) {
    $vic(document).trigger('victoire_modal_page_save_update_before');
    event.preventDefault();
    var form = $vic(this).parents('.v-modal').find('.v-modal__content form');

    loading(true);
    $vic.ajax({
        type: form.attr('method'),
        url : form.attr('action'),
        data: form.serialize(),
    }).done(function(response){
        loading(false);
        if (true === response.success) {
            window.location.replace(response.url);
            closeModal();
            congrat(response.message, 10000);
        } else {
            warn(response.message, 10000);
            $vic('#vic-modal').replaceWith(response.html);
            $vic('#vic-modal').vicmodal({
                keyboard: true,
                backdrop: false
            });
        }
        $vic(document).trigger('victoire_modal_page_save_update_after');
    });
});

// Create new page after submit
$vic(document).on('click', '.v-modal.v-modal--view a.vic-confirmed', function(event) {
    //Check there isn't any data-toggle="vic-confirm" on it
    event.preventDefault();
    loading(true);

    $vic.ajax({
        type: "GET",
        url : $vic(this).attr('href')
    }).done(function(response){
        if (true === response.success) {
            //redirect to the new page
            window.location.replace(response.url);
            congrat(response.message, 10000);
        } else {
            warn(response.message, 10000);
            alert(response.message);
        }
    });
});

/*global $vic*/

//we add the {{ item.XXX }} string to the current input
var addPropertyToCurrentInput = function (button, businessPropertyId) {
    var currentInput = $vic(button).closest('.v-form-group').find('input');
    var label = $vic(button).closest('.v-form-group').find('.v-form-group__label');

    //there was an input
    if (currentInput !== null) {
        //the string to insert
        var insertString = '{{' + 'item.' + businessPropertyId + '}}';
        //we get the current string
        var currentString = currentInput.val();
        //we add the item
        var newString = currentString + insertString;        
        //set the new string
        currentInput.val(newString);

        // unfold label
        label.attr('data-mdform', 'unfolded');
    }
};
$vic(document).on('submit', '.sitemapPriorityForm', function(event) {
    loading(true);
    event.preventDefault();
    var pageId = $vic(this).attr('data-pageId');
    $vic.ajax({
        url         : $vic(this).attr('action'),
        context     : document.body,
        data        : $vic(this).serialize(),
        type        : $vic(this).attr('method'),
        contentType : 'application/x-www-form-urlencoded; charset=UTF-8',
        processData : false,
        async       : true,
        cache       : false,
        success     : function(jsonResponse) {
            loading(false);
            congrat(jsonResponse.message);
            $vic("#form-save-notice-" + pageId).fadeIn();
            setTimeout(function() {
                $vic("#form-save-notice-" + pageId).fadeOut();
            }, 5000);
        }
    });
});

function updateSitemapPosition(element, ui)
{
    var sorted = $vic(element).nestedSortable("toArray");
    loading(true);
    $vic.post(
        Routing.generate('victoire_sitemap_reorganize', {
            '_locale': locale
        }),
        {
            sorted: sorted
        }
    ).done(function(response) {
            loading(false);
            congrat(response.message);

            $vic('#vic-modal').replaceWith(response.html);
            $vic('#vic-modal').vicmodal({
                keyboard: true,
                backdrop: false
            });
        });
};

$vic('.modal').on('hidden', function () {
    $vic('.modal').remove();
});
$vic(document).on('click', '#vic-menu-leftnavbar-trigger', function(event) {
    event.preventDefault();
    $vic('#vic-menu-leftnavbar-trigger').toggleClass('is-in');
    $vic('.vic-menu-leftnavbar').toggleClass('is-in');
    $vic('body').toggleClass('leftNavbar-in'); //used to adapt vic-modal style
});
