(()=>{"use strict";function e(e,t){for(var n=0;n<t.length;n++){var a=t[n];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(e,a.key,a)}}var t=function(){function t(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,t)}var n,a;return n=t,(a=[{key:"init",value:function(){$(".toggle-payment-item").off("click").on("click",(function(e){$(e.currentTarget).closest("tbody").find(".payment-content-item").toggleClass("hidden")})),$(".disable-payment-item").off("click").on("click",(function(e){e.preventDefault();var t=$(e.currentTarget);$("#confirm-disable-payment-method-modal").modal("show"),$("#confirm-disable-payment-method-button").on("click",(function(e){e.preventDefault(),$(e.currentTarget).addClass("button-loading"),$.ajax({type:"POST",cache:!1,url:$("div[data-disable-payment-url]").data("disable-payment-url"),data:{type:t.closest("form").find(".payment_type").val()},success:function(e){e.error?Botble.showError(e.message):(t.closest("tbody").find(".payment-name-label-group").addClass("hidden"),t.closest("tbody").find(".edit-payment-item-btn-trigger").addClass("hidden"),t.closest("tbody").find(".save-payment-item-btn-trigger").removeClass("hidden"),t.closest("tbody").find(".btn-text-trigger-update").addClass("hidden"),t.closest("tbody").find(".btn-text-trigger-save").removeClass("hidden"),t.addClass("hidden"),$("#confirm-disable-payment-method-modal").modal("hide"),Botble.showSuccess(e.message)),$("#confirm-disable-payment-method-button").removeClass("button-loading")},error:function(e){Botble.handleError(e),$("#confirm-disable-payment-method-button").removeClass("button-loading")}})}))})),$(".save-payment-item").off("click").on("click",(function(e){e.preventDefault();var t=$(e.currentTarget);t.addClass("button-loading"),$.ajax({type:"POST",cache:!1,url:$("div[data-update-payment-url]").data("update-payment-url"),data:t.closest("form").serialize(),success:function(e){e.error?Botble.showError(e.message):(t.closest("tbody").find(".payment-name-label-group").removeClass("hidden"),t.closest("tbody").find(".method-name-label").text(t.closest("form").find("input[name=name]").val()),t.closest("tbody").find(".disable-payment-item").removeClass("hidden"),t.closest("tbody").find(".edit-payment-item-btn-trigger").removeClass("hidden"),t.closest("tbody").find(".save-payment-item-btn-trigger").addClass("hidden"),t.closest("tbody").find(".btn-text-trigger-update").removeClass("hidden"),t.closest("tbody").find(".btn-text-trigger-save").addClass("hidden"),Botble.showSuccess(e.message)),t.removeClass("button-loading")},error:function(e){Botble.handleError(e),t.removeClass("button-loading")}})}))}}])&&e(n.prototype,a),t}();$(document).ready((function(){(new t).init()}))})();
