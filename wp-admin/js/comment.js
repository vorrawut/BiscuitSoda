jQuery(document).ready(function(e){postboxes.add_postbox_toggles("comment");var a=e("#timestampdiv"),t=e("#timestamp"),i=t.html(),l=a.find(".timestamp-wrap"),n=a.siblings("a.edit-timestamp");n.click(function(t){a.is(":hidden")&&(a.slideDown("fast",function(){e("input, select",l).first().focus()}),e(this).hide()),t.preventDefault()}),a.find(".cancel-timestamp").click(function(l){n.show().focus(),a.slideUp("fast"),e("#mm").val(e("#hidden_mm").val()),e("#jj").val(e("#hidden_jj").val()),e("#aa").val(e("#hidden_aa").val()),e("#hh").val(e("#hidden_hh").val()),e("#mn").val(e("#hidden_mn").val()),t.html(i),l.preventDefault()}),a.find(".save-timestamp").click(function(i){var s=e("#aa").val(),m=e("#mm").val(),d=e("#jj").val(),o=e("#hh").val(),c=e("#mn").val(),v=new Date(s,m-1,d,o,c);return i.preventDefault(),v.getFullYear()!=s||1+v.getMonth()!=m||v.getDate()!=d||v.getMinutes()!=c?void l.addClass("form-invalid"):(l.removeClass("form-invalid"),t.html(commentL10n.submittedOn+" <b>"+commentL10n.dateFormat.replace("%1$s",e('option[value="'+m+'"]',"#mm").attr("data-text")).replace("%2$s",parseInt(d,10)).replace("%3$s",s).replace("%4$s",("00"+o).slice(-2)).replace("%5$s",("00"+c).slice(-2))+"</b> "),n.show().focus(),void a.slideUp("fast"))})});