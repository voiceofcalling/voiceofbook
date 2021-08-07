<?php if(!defined("__XE__"))exit;?><div id="files_<?php echo $__Context->oDocument->document_srl ?>" class="rd_fnt rd_file<?php if(!$__Context->mi->show_files){ ?> hide<?php } ?>">
<table class="bd_tb">
	<caption class="blind">Atachment</caption>
	<tr>
		<th scope="row" class="ui_font"><strong><?php echo $__Context->lang->uploaded_file ?></strong> <span class="fnt_count">'<b><?php echo $__Context->oDocument->get('uploaded_count') ?></b>'</span></th>
		<td>
			<?php if(!$__Context->mi->files_type){ ?><ul>
				<?php if($__Context->oDocument->getUploadedFiles()&&count($__Context->oDocument->getUploadedFiles()))foreach($__Context->oDocument->getUploadedFiles() as $__Context->key=>$__Context->file){ ?><li><a class="bubble" href="<?php echo getUrl('');
echo $__Context->file->download_url ?>" title="[File Size:<?php echo FileHandler::filesize($__Context->file->file_size) ?>/Download:<?php echo number_format($__Context->file->download_count) ?>]"><?php echo $__Context->file->source_filename ?></a><span class="comma">,</span></li><?php } ?>
			</ul><?php } ?>
			<?php if($__Context->mi->files_type){ ?><ul>
				<?php if($__Context->oDocument->getUploadedFiles()&&count($__Context->oDocument->getUploadedFiles()))foreach($__Context->oDocument->getUploadedFiles() as $__Context->key=>$__Context->file){ ?>
<?php 
	$__Context->ext = substr($__Context->file->source_filename, -4);
	$__Context->ext = strtolower($__Context->ext);
	$__Context->ext_img = in_array($__Context->ext,array('.jpg','jpeg','.gif','.png'));
	$__Context->ext_video = in_array($__Context->ext,array('.mpg','mpeg','.avi','.wmv','.mp4','.mov','.mkv','.swf','.flv','.ogv','webm'));
	$__Context->ext_audio = in_array($__Context->ext,array('.mp3','.ogg','.wma','.wav','.ape','flac','.mid'));
 ?>
				<?php if(!$__Context->mi->files_img && $__Context->ext_img){ ?><li><a class="bubble" href="<?php echo getUrl('');
echo $__Context->file->download_url ?>" title="[File Size:<?php echo FileHandler::filesize($__Context->file->file_size) ?>/Download:<?php echo number_format($__Context->file->download_count) ?>]"><?php echo $__Context->file->source_filename ?></a><span class="comma">,</span></li><?php } ?>
				<?php if(!$__Context->mi->files_video && $__Context->ext_video){ ?><li><a class="bubble" href="<?php echo getUrl('');
echo $__Context->file->download_url ?>" title="[File Size:<?php echo FileHandler::filesize($__Context->file->file_size) ?>/Download:<?php echo number_format($__Context->file->download_count) ?>]"><?php echo $__Context->file->source_filename ?></a><span class="comma">,</span></li><?php } ?>
				<?php if(!$__Context->mi->files_audio && $__Context->ext_audio){ ?><li><a class="bubble" href="<?php echo getUrl('');
echo $__Context->file->download_url ?>" title="[File Size:<?php echo FileHandler::filesize($__Context->file->file_size) ?>/Download:<?php echo number_format($__Context->file->download_count) ?>]"><?php echo $__Context->file->source_filename ?></a><span class="comma">,</span></li><?php } ?>
				<?php if(!$__Context->mi->files_etc && (!$__Context->ext_img && !$__Context->ext_video && !$__Context->ext_audio)){ ?><li><a class="bubble" href="<?php echo getUrl('');
echo $__Context->file->download_url ?>" title="[File Size:<?php echo FileHandler::filesize($__Context->file->file_size) ?>/Download:<?php echo number_format($__Context->file->download_count) ?>]"><?php echo $__Context->file->source_filename ?></a><span class="comma">,</span></li><?php } ?>
				<?php } ?>
			</ul><?php } ?>
		</td>
	</tr>
</table>
</div>