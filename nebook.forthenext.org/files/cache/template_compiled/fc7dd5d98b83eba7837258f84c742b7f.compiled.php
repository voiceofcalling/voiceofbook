<?php if(!defined("__XE__"))exit;
echo '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:slash="http://purl.org/rss/1.0/modules/slash/">
	<channel>
		<title><![CDATA[<?php echo escape($__Context->info->title, false) ?>]]></title>
		<link><?php echo escape($__Context->info->link, false) ?></link>
		<description><![CDATA[<?php echo escape($__Context->info->description, false) ?>]]></description>
		<language><?php echo escape($__Context->info->language, false) ?></language>
		<pubDate><?php echo escape($__Context->info->date, false) ?></pubDate>
		<lastBuildDate><?php echo escape($__Context->info->date, false) ?></lastBuildDate>
		<generator>XpressEngine</generator>
		<?php if($__Context->info->feed_copyright){ ?>
		<copyright><![CDATA[<?php echo escape($__Context->info->feed_copyright, false) ?>]]></copyright>
		<?php } ?>
		<?php if($__Context->info->image){ ?>
		<image>
			<url><?php echo escape($__Context->info->image, false) ?></url>
			<title><![CDATA[<?php echo escape($__Context->info->title, false) ?>]]></title>
			<link><?php echo escape($__Context->info->link, false) ?></link>
		</image>
		<?php } ?>
		<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->oDocument){ ?>
		<item>
			<title><![CDATA[<?php echo escape(str_replace('\'', '&apos;',htmlspecialchars($__Context->oDocument->getTitleText(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false)), false) ?>]]></title>
			<dc:creator><![CDATA[<?php echo escape(str_replace('\'', '&apos;',$__Context->oDocument->getNickName()), false) ?>]]></dc:creator>
			<link><?php echo escape($__Context->oDocument->getPermanentUrl(), false) ?></link>
			<guid isPermaLink="true"><?php echo escape($__Context->oDocument->getPermanentUrl(), false) ?></guid>
			<?php if($__Context->oDocument->allowComment()) { ?>
			<comments><?php echo escape($__Context->oDocument->getPermanentUrl(), false) ?>#comment</comments>
			<?php } ?>
			<?php if($__Context->open_rss_config[$__Context->oDocument->get('module_srl')]=='Y'){ ?>
			<description><![CDATA[<?php echo escape($__Context->oDocument->getTransContent(false,false,true), false) ?>]]></description>
			<?php }else{ ?>
			<description><![CDATA[<?php echo escape($__Context->oDocument->getContentText(100), false) ?>]]></description>
			<?php } ?>
			<pubDate><?php echo escape($__Context->oDocument->getRegdateGM(), false) ?></pubDate>
			<?php if($__Context->oDocument->get('tag_list')&&count($__Context->oDocument->get('tag_list')))foreach($__Context->oDocument->get('tag_list') as $__Context->tag){ ?>
			<category><![CDATA[<?php echo escape(str_replace('\'', '&apos;', htmlspecialchars($__Context->tag, ENT_COMPAT | ENT_HTML401, 'UTF-8', false)), false) ?>]]></category>
			<?php } ?>
			<?php if($__Context->oDocument->getCommentcount()>0){ ?>
			<slash:comments><?php echo escape($__Context->oDocument->getCommentcount(), false) ?></slash:comments>
			<?php } ?>
		</item>
		<?php } ?>
	</channel>
</rss>
