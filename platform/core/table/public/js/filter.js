(()=>{function e(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}var t=function(){function t(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,t)}var n,r;return n=t,(r=[{key:"loadData",value:function(e){$.ajax({type:"GET",url:$(".filter-data-url").val(),data:{class:$(".filter-data-class").val(),key:e.val(),value:e.closest(".filter-item").find(".filter-column-value").val()},success:function(t){var n=$.map(t.data,(function(e,t){return{id:t,name:e}}));e.closest(".filter-item").find(".filter-column-value-wrap").html(t.html);var r=e.closest(".filter-item").find(".filter-column-value");r.length&&"text"===r.prop("type")&&(r.typeahead({source:n}),r.data("typeahead").source=n),Botble.initResources()},error:function(e){Botble.handleError(e)}})}},{key:"init",value:function(){var e=this;$.each($(".filter-items-wrap .filter-column-key"),(function(t,n){$(n).val()&&e.loadData($(n))})),$(document).on("change",".filter-column-key",(function(t){e.loadData($(t.currentTarget))})),$(document).on("click",".btn-reset-filter-item",(function(e){e.preventDefault();var t=$(e.currentTarget);t.closest(".filter-item").find(".filter-column-key").val("").trigger("change"),t.closest(".filter-item").find(".filter-column-operator").val("="),t.closest(".filter-item").find(".filter-column-value").val("")})),$(document).on("click",".add-more-filter",(function(){var t=$(document).find(".sample-filter-item-wrap").html();$(document).find(".filter-items-wrap").append(t.replace("<script>","").replace("<\\/script>","")),Botble.initResources();var n=$(document).find(".filter-items-wrap .filter-item:last-child").find(".filter-column-key");$(n).val()&&e.loadData(n)})),$(document).on("click",".btn-remove-filter-item",(function(e){e.preventDefault(),$(e.currentTarget).closest(".filter-item").remove()}))}}])&&e(n.prototype,r),t}();$(document).ready((function(){(new t).init()}))})();
