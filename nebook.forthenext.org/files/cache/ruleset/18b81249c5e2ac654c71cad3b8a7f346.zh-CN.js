(function($,v){
v=xe.getApp('validator')[0];if(!v)return;

v.cast('ADD_FILTER',['sitelock', {'use_sitelock':{required:true},'sitelock_whitelist':{'if':[{test:'$use_sitelock == \'Y\'', attr:'required', value:'true'}]},'sitelock_title':{'if':[{test:'$use_sitelock == \'Y\'', attr:'required', value:'true'}]},'sitelock_message':{'if':[{test:'$use_sitelock == \'Y\'', attr:'required', value:'true'}]}}]);
v.cast('ADD_MESSAGE',['use_sitelock','Use Site Lock']);
v.cast('ADD_MESSAGE',['sitelock_whitelist','IPs allowed to access']);
v.cast('ADD_MESSAGE',['sitelock_title','Sign Title']);
v.cast('ADD_MESSAGE',['sitelock_message','Sign Contents']);
v.cast('ADD_MESSAGE',['isnull','请输入%s']);
v.cast('ADD_MESSAGE',['outofrange','请确认%s字数']);
v.cast('ADD_MESSAGE',['equalto','%s值有误。']);
v.cast('ADD_MESSAGE',['invalid','%s值有误。']);
v.cast('ADD_MESSAGE',['invalid_email','%s格式有误。（例：developers@xpressengine.com)']);
v.cast('ADD_MESSAGE',['invalid_userid','%s只能用英文，数字和 _，首个字符必须是英文字母。']);
v.cast('ADD_MESSAGE',['invalid_user_id','%s只能用英文，数字和 _，首个字符必须是英文字母。']);
v.cast('ADD_MESSAGE',['invalid_homepage','%s格式有误。（例： http://www.xpressengine.com/)']);
v.cast('ADD_MESSAGE',['invalid_url','%s 格式错误。 例）http://www.xpressengine.com/']);
v.cast('ADD_MESSAGE',['invalid_korean','%s只能输入中文']);
v.cast('ADD_MESSAGE',['invalid_korean_number','%s只能输入中文或数字']);
v.cast('ADD_MESSAGE',['invalid_alpha','%s只能输入英文字母']);
v.cast('ADD_MESSAGE',['invalid_alpha_number','%s只能输入英文或数字']);
v.cast('ADD_MESSAGE',['invalid_mid','%s 格式错误。 模块名称只能用英文、数字及下划线，开头必须是英文。']);
v.cast('ADD_MESSAGE',['invalid_number','%s只能输入数字']);
v.cast('ADD_MESSAGE',['invalid_float','%s只能输入数字']);
v.cast('ADD_MESSAGE',['invalid_extension','The format of %s is invalid. e.g.) *.* or *.jpg;*.gif;.']);
})(jQuery);