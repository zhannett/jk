function init_accordion(){if(!$("dl.accordion").length){return}$("dl.accordion").each(function(){$(this).find("dt:first a").addClass("accordion_expanded").end().find("dd:first").show();$(this).find("dt:last").addClass("last")});$("dl.accordion dt a").click(function(){var a=$(this).parents("dl:first"),c=$(this).parent("dt").next("dd");function b(){if(a.find("dd:last").is(":hidden")){a.find("dt:last").addClass("last")}}if(c.is(":hidden")){c.slideDown("fast").siblings("dd:visible").slideUp("fast",b);$(this).addClass("accordion_expanded").parent("dt").removeClass("last").siblings("dt").find("a").removeClass("accordion_expanded")}this.blur();return false})}$(document).ready(function(){init_accordion()});function addEvent(d,c,b,a){if(d.addEventListener){d.addEventListener(c,b,a)}else{if(d.attachEvent){d.attachEvent("on"+c,b)}else{d["on"+c]=b}}}function update(b){var e=new Date(),c,a="";c=e.getHours();a+=(c>9?"":"0")+c+":";c=e.getMinutes();a+=(c>9?"":"0")+c+":";c=e.getSeconds();a+=(c>9?"":"0")+c;b.innerHTML=a}function init(){if(!document.getElementById){return}var a=document.getElementById("clock");if(!a.innerHTML){return}setInterval(function(){update(a)},1000)}addEvent(window,"load",init,false);function init_dropdown(){if(!$("ul.dropdown").length){return}$("ul.dropdown li.dropdown_trigger").hover(function(){$(this).find("ul").fadeIn(1)},function(){$(this).find("ul").hide()})}$(document).ready(function(){init_dropdown()});jQuery.fn.maxLength=function(a){this.each(function(){var c=this.tagName.toLowerCase(),b=this.type?this.type.toLowerCase():null;if(c==="input"&&(b==="text"||b==="password")){this.maxLength=a}else{if(c==="textarea"){this.onkeypress=function(h){var f=h||event,g=f.keyCode,d=document.selection?document.selection.createRange().text.length>0:this.selectionStart!==this.selectionEnd;return !(this.value.length>=a&&(g>50||g===32||g===0||g===13)&&!f.ctrlKey&&!f.altKey&&!d)};this.onkeyup=function(){if(this.value.length>a){this.value=this.value.substring(0,a)}}}}})};$("#newwin").mousedown(function(){if(!$(this).is(":checked")){$(".accordion li a").attr("target","_blank")}else{$("li a").attr("target","_self")}});$(document).ready(function(){var a=$("div.resizable"),c=a.css("fontSize"),b="%";$("#main_content a:not(.certimg)").filter(function(){return this.hostname&&this.hostname!==location.hostname}).addClass("external");$("#links li>a").removeClass("external");$("ul.gallery a").removeClass("external");$("#forum_main a").removeClass("external");$("a[href^=mailto:]").addClass("mailto");$("a[href$=.pdf]").addClass("pdflink");$("a[href*=www.janetkulyk.com]").addClass("mysite");$("#switcher button").click(function(){var d=parseFloat(a.css("fontSize"),10);switch(this.id){case"switcher_large":d*=1.05;break;case"switcher_small":d/=1.05;break;default:d=parseFloat(c,10)}a.animate({fontSize:d+b},"slow")});$("#news-feed").each(function(){var g=$(this),f=g.height()/4,d=0,e;g.empty();for(d=0;d<f;d+=2){$("<div></div>").css({opacity:d/f,top:g.height()-f+d}).addClass("fade-slice").appendTo(g)}e=$("<img/>").attr({src:"img/loading.gif",alt:"Loading. Please wait."}).addClass("news-wait").appendTo(g);$.get("news/feed.php",function(l){var h=0,o=0,j=g.height()+10,i,m,n=false,k;e.remove();$("rss item",l).each(function(){var r=$("<a></a>").attr("href",$("link",this).text()).text($("title",this).text()),q=$("<h4></h4>").append(r),u=new Date($("pubDate",this).text()),t=u.getMonth()+1,w=u.getDate(),v=u.getFullYear(),s=$("<div></div>").addClass("publication-date").text(t+"/"+w+"/"+v),p=$("<div></div>").addClass("summary").html($("description",this).text());$("<div></div>").addClass("headline").append(q).append(s).append(p).appendTo(g)});$("div.headline").eq(h).css("top",0);i=$("div.headline").length;k=function(){if(!n){n=true;m=false;h=(o+1)%i;$("div.headline").eq(o).animate({top:-j},"slow",function(){$(this).css("top",j)});$("div.headline").eq(h).animate({top:0},"slow",function(){n=false;if(!m){m=setTimeout(k,5000)}});o=h}};if(!m){m=setTimeout(k,5000)}g.hover(function(){clearTimeout(m);m=false},function(){if(!m){m=setTimeout(k,250)}})})})});