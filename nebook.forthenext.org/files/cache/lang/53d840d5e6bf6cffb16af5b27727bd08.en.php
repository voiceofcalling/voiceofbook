<?php
$lang->file='File';
$lang->file_upload='File Upload';
$lang->file_name='File Name';
$lang->file_size='File Size';
$lang->download_count='Number of Downloads';
$lang->status='Status';
$lang->is_valid='Valid';
$lang->is_stand_by='Stand by';
$lang->file_list='Attachments List';
$lang->allow_outlink='Allow External Link?';
$lang->allow_outlink_site='Allowed Websites';
$lang->allow_outlink_format='Allowed Formats';
$lang->allowed_filesize='Maximum File Size';
$lang->allowed_attach_size='Maximum Attachments';
$lang->allowed_filetypes='Allowed extentsions';
$lang->enable_download_group='Downloadable Groups';
$lang->about_allow_outlink='You can block external links according to referers(except media files like *.wmv and *.mp3).';
$lang->about_allow_outlink_format='These formats will always be allowed. Please use comma(,) for multiple input. eg)hwp,doc,zip,pdf';
$lang->about_allow_outlink_site='These websites will alyways be allowed. Please use new line for multiple input. ex)https://www.xpressengine.com/';
$lang->about_allowed_filesize='You can assign file size limit for each file.(Exclude administrators)';
$lang->about_allowed_attach_size='You can assign file size limit for each document.(Exclude administrators)';
$lang->about_allowed_filetypes='To allow an extension, use "*.[extention]". To allow multiple extensions, use ";" between each extension. ex) *.* or *.jpg;*.gif; ';
$lang->cmd_delete_checked_file='Delete Selected Item(s)';
$lang->cmd_move_to_document='Move to Document';
$lang->cmd_download='Download';
$lang->msg_not_permitted_download='You do not have a permission to download.';
$lang->msg_file_cart_is_null='Please select a file(s) to delete.';
$lang->msg_checked_file_is_deleted='%d attachment(s) was(were) deleted.';
$lang->msg_exceeds_limit_size='This file exceeds the attachment limit.';
$lang->msg_not_allowed_filetype='업로드할 수 없는 파일 형식입니다.';
$lang->msg_file_not_found='Could not find requested file.';
if(!is_array($lang->file_search_target_list)){
	$lang->file_search_target_list = array();
}
$lang->file_search_target_list['filename']='File Name';
$lang->file_search_target_list['filesize_more']='File Size(byte, more)';
$lang->file_search_target_list['filesize_mega_more']='File Size(mbyte, more)';
$lang->file_search_target_list['filesize_less']='File Size(byte, less)';
$lang->file_search_target_list['filesize_mega_less']='File Size(Mb, less)';
$lang->file_search_target_list['download_count']='Downloads(more)';
$lang->file_search_target_list['user_id']='User UD';
$lang->file_search_target_list['user_name']='User Name';
$lang->file_search_target_list['nick_name']='Nickname';
$lang->file_search_target_list['regdate']='Registered Date';
$lang->file_search_target_list['ipaddress']='IP Address';
$lang->file_search_target_list['isvalid']='Status';
$lang->msg_not_allowed_outlink='It is not allowed to download files from sites other than this.';
$lang->msg_not_permitted_create='Failed to create a file or directory.';
$lang->msg_file_upload_error='An error has occurred during uploading.';
$lang->no_files='No Files';
$lang->file_manager='Manage selected files';
$lang->selected_file='Selected files';
