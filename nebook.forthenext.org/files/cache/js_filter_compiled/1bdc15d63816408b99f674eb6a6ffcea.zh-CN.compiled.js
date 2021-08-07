function insert_comment(form){ return legacy_filter('insert_comment', form, 'board', 'procBoardInsertComment', completeInsertComment, ['error','message','mid','document_srl','comment_srl'], '', {}) };
(function($){
	var v=xe.getApp('validator')[0];if(!v)return false;
	v.cast("ADD_FILTER", ["insert_comment", {'document_srl': {required:true},'nick_name': {required:true,maxlength:20},'password': {required:true},'email_address': {maxlength:250,rule:'email'},'homepage': {maxlength:250,rule:'url'},'content': {required:true,minlength:1}}]);
	
	v.cast('ADD_MESSAGE',['document_srl','文章编号']);
	v.cast('ADD_MESSAGE',['nick_name','昵称']);
	v.cast('ADD_MESSAGE',['password','密码']);
	v.cast('ADD_MESSAGE',['email_address','电子邮件']);
	v.cast('ADD_MESSAGE',['homepage','主页']);
	v.cast('ADD_MESSAGE',['content','内容']);
	v.cast('ADD_MESSAGE',['mid','模块名称']);
	v.cast('ADD_MESSAGE',['comment_srl','comment_srl']);
	v.cast('ADD_MESSAGE',['parent_srl','parent_srl']);
	v.cast('ADD_MESSAGE',['is_secret','is_secret']);
	v.cast('ADD_MESSAGE',['notify_message','notify_message']);
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