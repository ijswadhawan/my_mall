(()=>{function e(e,n){for(var t=0;t<n.length;t++){var a=n[t];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(e,a.key,a)}}var n=function(){function n(){!function(e,n){if(!(e instanceof n))throw new TypeError("Cannot call a class as a function")}(this,n)}var t,a;return t=n,(a=[{key:"init",value:function(){$(document).on("click",".answer-trigger-button",(function(e){e.preventDefault(),e.stopPropagation();var n=$(".answer-wrapper");n.is(":visible")?n.fadeOut():n.fadeIn()})),$(document).on("click",".answer-send-button",(function(e){e.preventDefault(),e.stopPropagation(),$(e.currentTarget).addClass("button-loading");var n="";"undefined"!=typeof tinymce?n=tinymce.get("message").getContent():CKEDITOR.instances.message&&void 0!==CKEDITOR.instances.message&&(n=CKEDITOR.instances.message.getData()),$.ajax({type:"POST",cache:!1,url:route("contacts.reply",$("#input_contact_id").val()),data:{message:n},success:function(n){n.error||($(".answer-wrapper").fadeOut(),"undefined"!=typeof tinymce?tinymce.get("message").setContent(""):CKEDITOR.instances.message&&void 0!==CKEDITOR.instances.message&&CKEDITOR.instances.message.setData(""),Botble.showSuccess(n.message),$("#reply-wrapper").load(window.location.href+" #reply-wrapper > *")),$(e.currentTarget).removeClass("button-loading")},error:function(n){$(e.currentTarget).removeClass("button-loading"),Botble.handleError(n)}})}))}}])&&e(t.prototype,a),n}();$(document).ready((function(){(new n).init()}))})();
