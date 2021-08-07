<?php if(!defined("__XE__"))exit;
echo '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<feed xmlns="http://www.w3.org/2005/Atom">
	<title type="text"><?php echo escape($__Context->info->title, false) ?></title>
	<?php if($__Context->info->description){ ?>
	<subtitle type="html"><?php echo escape(str_replace('\'', '&apos;', htmlspecialchars($__Context->info->description, ENT_COMPAT | ENT_HTML401, 'UTF-8', false)), false) ?></subtitle>
	<?php } ?>
	<updated><?php echo escape($__Context->info->date, false) ?></updated>
	<id><?php echo escape($__Context->info->id, false) ?></id>
	<link rel="alternate" type="text/html" hreflang="<?php echo escape($__Context->info->language, false) ?>" href="<?php echo escape($__Context->info->link, false) ?>"/>
	<link rel="self" type="application/atom+xml" href="<?php echo escape($__Context->info->id, false) ?>"/>
	<generator uri="http://www.xpressengine.com/">XpressEngine</generator>
<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->oDocument){ ?>   <entry>
		<title><![CDATA[<?php echo escape($__Context->oDocument->getTitleText(), false) ?>]]></title>
		<id><?php echo escape($__Context->oDocument->getPermanentUrl(), false) ?></id>
		<published><?php echo escape($__Context->oDocument->getRegdate('Y-m-d\TH:i:sP'), false) ?></published>
		<updated><?php echo escape(zdate($__Context->oDocument->get('last_update'),'Y-m-d\TH:i:sP'), false) ?></updated>
		<link rel="alternate" type="text/html" href="<?php echo escape($__Context->oDocument->getPermanentUrl(), false) ?>"/>
		<link rel="replies" type="text/html" href="<?php echo escape($__Context->oDocument->getPermanentUrl(), false) ?>#comment"/>
		<author>
			<name><![CDATA[<?php echo escape(str_replace('\'', '&apos;',$__Context->oDocument->getNickName()), false) ?>]]></name>
			<?php if($__Context->oDocument->isExistsHomepage()){ ?>
			<uri><?php echo escape($__Context->oDocument->getHomepageUrl(), false) ?></uri>
			<?php } ?>
		</author>
		<?php if($__Context->open_rss_config[$__Context->oDocument->get('module_srl')]=='Y'){ ?>
		<content type="html"><![CDATA[<?php echo escape($__Context->oDocument->getTransContent(false,false,true), false) ?>]]></content>
		<?php }else{ ?>
		<summary type="text"><![CDATA[<?php echo escape($__Context->oDocument->getContentText(100), false) ?>]]></summary>
		<?php } ?>
		<?php if($__Context->oDocument->get('tag_list')&&count($__Context->oDocument->get('tag_list')))foreach($__Context->oDocument->get('tag_list') as $__Context->tag){ ?>
		<category term="<?php echo escape(str_replace('\'', '&apos;', htmlspecialchars($__Context->tag, ENT_COMPAT | ENT_HTML401, 'UTF-8', false)), false) ?>"/>
		<?php } ?>
		
	</entry>
<?php } ?>
</feed> 
