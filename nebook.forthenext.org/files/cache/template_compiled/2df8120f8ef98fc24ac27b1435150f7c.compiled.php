<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/board/m.skins/phiz_mboard/css/list.list.css--><?php $__tmp=array('modules/board/m.skins/phiz_mboard/css/list.list.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if(Mobile::isMobileCheckByAgent()){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','list_btn_top_default.html');
} ?>
<?php if($__Context->module_info->use_category=='Y'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','include_category.html');
} ?>
<div class="board_list table-responsive" id="board_list">
	<table width="100%" border="1" cellspacing="0" summary="List of Articles" class="table m-form">
		<thead>
			<!-- LIST HEADER -->
			<tr>
				<?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->key=>$__Context->val){ ?>
				<?php if($__Context->val->type=='no' && $__Context->val->idx==-1){ ?><th scope="col"><span><?php echo $__Context->lang->no ?></span></th><?php } ?>
				<?php if($__Context->val->type=='title' && $__Context->val->idx==-1){ ?><th scope="col" class="title"><span><?php echo $__Context->lang->title ?></span></th><?php } ?>
				<?php if($__Context->val->type=='nick_name' && $__Context->val->idx==-1){ ?><th scope="col"><span><?php echo $__Context->lang->writer ?></span></th><?php } ?>
				<?php if($__Context->val->type=='user_id' && $__Context->val->idx==-1){ ?><th scope="col"><span><?php echo $__Context->lang->user_id ?></span></th><?php } ?>
				<?php if($__Context->val->type=='user_name' && $__Context->val->idx==-1){ ?><th scope="col"><span><?php echo $__Context->lang->user_name ?></span></th><?php } ?>
				<?php if($__Context->val->type=='regdate' && $__Context->val->idx==-1){ ?><th scope="col"><span><a href="<?php echo getUrl('sort_index','regdate','order_type',$__Context->order_type) ?>"><?php echo $__Context->lang->date ?></a></span></th><?php } ?>
				<?php if($__Context->val->type=='last_update' && $__Context->val->idx==-1){ ?><th scope="col"><span><a href="<?php echo getUrl('sort_index','update_order','order_type',$__Context->order_type) ?>"><?php echo $__Context->lang->last_update ?></a></span></th><?php } ?>
				<?php if($__Context->val->type=='last_post' && $__Context->val->idx==-1){ ?><th scope="col"><span><a href="<?php echo getUrl('sort_index','update_order','order_type',$__Context->order_type) ?>"><?php echo $__Context->lang->last_post ?></a></span></th><?php } ?>
				<?php if($__Context->val->type=='readed_count' && $__Context->val->idx==-1){ ?><th scope="col"><span><a href="<?php echo getUrl('sort_index','readed_count','order_type',$__Context->order_type) ?>"><?php echo $__Context->lang->readed_count ?></a></span></th><?php } ?>
				<?php if($__Context->val->type=='voted_count' && $__Context->val->idx==-1){ ?><th scope="col"><span><a href="<?php echo getUrl('sort_index','voted_count','order_type',$__Context->order_type) ?>"><?php echo $__Context->lang->voted_count ?></a></span></th><?php } ?>
				<?php if($__Context->val->type=='blamed_count' && $__Context->val->idx==-1){ ?><th scope="col"><span><a href="<?php echo getUrl('sort_index','blamed_count','order_type',$__Context->order_type) ?>"><?php echo $__Context->lang->blamed_count ?></a></span></th><?php } ?>
				<?php if($__Context->val->idx!=-1){ ?><th scope="col"><span><a href="<?php echo getUrl('sort_index', $__Context->val->eid, 'order_type', $__Context->order_type) ?>"><?php echo $__Context->val->name ?></a></span></th><?php } ?>
				<?php } ?>
				<?php if($__Context->grant->manager){ ?><th scope="col" style="width:44px">
					<span>
						<input type="checkbox" onclick="XE.checkboxToggleAll({ doClick:true });" id="iCheck" class="iCheck" title="Check All" />
						<label for="iCheck"></label>
					</span></th><?php } ?>
			</tr>
			<!-- /LIST HEADER -->
		</thead>
		<?php if(!$__Context->document_list && !$__Context->notice_list){ ?><tbody>
			<tr class="no_article">
				<td<?php if(!$__Context->grant->manager){ ?> colspan="<?php echo count($__Context->list_config) ?>"<?php };
if($__Context->grant->manager){ ?> colspan="<?php echo count($__Context->list_config)+1 ?>"<?php } ?>>
					<p style="text-align:center"><?php echo $__Context->lang->no_documents ?></p>
				</td>
			</tr>
		</tbody><?php } ?>
		<?php if($__Context->document_list || $__Context->notice_list){ ?><tbody>
			<!-- NOTICE -->
			<?php if($__Context->notice_list&&count($__Context->notice_list))foreach($__Context->notice_list as $__Context->no=>$__Context->document){ ?><tr class="notice">
				<?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->key=>$__Context->val){ ?>
				<?php if($__Context->val->type=='no' && $__Context->val->idx==-1){ ?><td class="notice">
					<?php if($__Context->document_srl==$__Context->document->document_srl){ ?>&raquo;<?php } ?>
					<?php if($__Context->document_srl!=$__Context->document->document_srl){;
echo $__Context->lang->notice;
} ?>
				</td><?php } ?>
				<?php if($__Context->val->type=='title' && $__Context->val->idx==-1){ ?><td class="title">
					<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>">
						<?php echo $__Context->document->getTitle() ?>
					</a>
					<?php if($__Context->document->getCommentCount()){ ?><a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#comment" class="replyNum" title="Replies">
						[<?php echo $__Context->document->getCommentCount() ?>]
					</a><?php } ?>
					<?php if($__Context->document->getTrackbackCount()){ ?><a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#trackback" class="trackbackNum" title="Trackbacks">
						[<?php echo $__Context->document->getTrackbackCount() ?>]
					</a><?php } ?>
				</td><?php } ?>
				<?php if($__Context->val->type=='nick_name' && $__Context->val->idx==-1){ ?><td class="author"><a href="#popup_menu_area" class="member_<?php echo $__Context->document->get('member_srl') ?>" onclick="return false"><?php echo $__Context->document->getNickName() ?></a></td><?php } ?>
				<?php if($__Context->val->type=='user_id' && $__Context->val->idx==-1){ ?><td class="author"><?php echo $__Context->document->getUserID() ?></td><?php } ?>
				<?php if($__Context->val->type=='user_name' && $__Context->val->idx==-1){ ?><td class="author"><?php echo $__Context->document->getUserName() ?></td><?php } ?>
				<?php if($__Context->val->type=='regdate' && $__Context->val->idx==-1){ ?><td class="time"><?php echo $__Context->document->getRegdate('Y.m.d') ?></td><?php } ?>
				<?php if($__Context->val->type=='last_update' && $__Context->val->idx==-1){ ?><td class="time"><?php echo zdate($__Context->document->get('last_update'),'Y.m.d') ?></td><?php } ?>
				<?php if($__Context->val->type=='last_post' && $__Context->val->idx==-1){ ?><td class="lastReply">
					<?php if((int)($__Context->document->get('comment_count'))>0){ ?>
						<a href="<?php echo $__Context->document->getPermanentUrl() ?>#comment" title="Last Reply">
							<?php echo zdate($__Context->document->get('last_update'),'Y.m.d') ?>
						</a>
						<?php if($__Context->document->getLastUpdater()){ ?><span>
							<sub>by</sub>
							<?php echo $__Context->document->getLastUpdater() ?>
						</span><?php } ?>
					<?php } ?>
					<?php if((int)($__Context->document->get('comment_count'))==0){ ?>&nbsp;<?php } ?>
				</td><?php } ?>
				<?php if($__Context->val->type=='readed_count' && $__Context->val->idx==-1){ ?><td class="readNum"><?php echo $__Context->document->get('readed_count')>0?$__Context->document->get('readed_count'):'0' ?></td><?php } ?>
				<?php if($__Context->val->type=='voted_count' && $__Context->val->idx==-1){ ?><td class="voteNum"><?php echo $__Context->document->get('voted_count')!=0?$__Context->document->get('voted_count'):'0' ?></td><?php } ?>
				<?php if($__Context->val->type=='blamed_count' && $__Context->val->idx==-1){ ?><td class="voteNum"><?php echo $__Context->document->get('blamed_count')!=0?$__Context->document->get('blamed_count'):'0' ?></td><?php } ?>
				<?php if($__Context->val->idx!=-1){ ?><td><?php echo $__Context->document->getExtraValueHTML($__Context->val->idx) ?>&nbsp;</td><?php } ?>
				<?php } ?>
				<?php if($__Context->grant->manager){ ?><td class="check"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" id="iCheck-<?php echo $__Context->document->document_srl ?>" class="iCheck" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /><label for="iCheck-<?php echo $__Context->document->document_srl ?>"></label></td><?php } ?>
			</tr><?php } ?>
			<!-- /NOTICE -->
			<!-- LIST -->
			<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no=>$__Context->document){ ?><tr>
				<?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->key=>$__Context->val){ ?>
				<?php if($__Context->val->type=='no' && $__Context->val->idx==-1){ ?><td class="no">
					<?php if($__Context->document_srl==$__Context->document->document_srl){ ?>&raquo;<?php } ?>
					<?php if($__Context->document_srl!=$__Context->document->document_srl){;
echo $__Context->no;
} ?>
				</td><?php } ?>
				<?php if($__Context->val->type=='title' && $__Context->val->idx==-1){ ?><td class="title">
					<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>"><?php echo $__Context->document->getTitle() ?></a>
					<?php if($__Context->document->getCommentCount()){ ?><a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#comment" class="replyNum" title="Replies">[<?php echo $__Context->document->getCommentCount() ?>]</a><?php } ?>
					<?php if($__Context->document->getTrackbackCount()){ ?><a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#trackback" class="trackbackNum" title="Trackbacks">[<?php echo $__Context->document->getTrackbackCount() ?>]</a><?php } ?>
					<?php echo $__Context->document->printExtraImages(60*60*$__Context->module_info->duration_new) ?>
				</td><?php } ?>
				<?php if($__Context->val->type=='nick_name' && $__Context->val->idx==-1){ ?><td class="author"><a href="#popup_menu_area" class="member_<?php echo $__Context->document->get('member_srl') ?>" onclick="return false"><?php echo $__Context->document->getNickName() ?></a></td><?php } ?>
				<?php if($__Context->val->type=='user_id' && $__Context->val->idx==-1){ ?><td class="author"><?php echo $__Context->document->getUserID() ?></td><?php } ?>
				<?php if($__Context->val->type=='user_name' && $__Context->val->idx==-1){ ?><td class="author"><?php echo $__Context->document->getUserName() ?></td><?php } ?>
				<?php if($__Context->val->type=='regdate' && $__Context->val->idx==-1){ ?><td class="time"><?php echo $__Context->document->getRegdate('Y.m.d') ?></td><?php } ?>
				<?php if($__Context->val->type=='last_update' && $__Context->val->idx==-1){ ?><td class="time"><?php echo zdate($__Context->document->get('last_update'),'Y.m.d') ?></td><?php } ?>
				<?php if($__Context->val->type=='last_post' && $__Context->val->idx==-1){ ?><td class="lastReply">
					<?php if((int)($__Context->document->get('comment_count'))>0){ ?>
						<a href="<?php echo $__Context->document->getPermanentUrl() ?>#comment" title="Last Reply">
							<?php echo zdate($__Context->document->get('last_update'),'Y.m.d') ?>
						</a>
						<?php if($__Context->document->getLastUpdater()){ ?><span>
							<sub>by</sub>
							<?php echo $__Context->document->getLastUpdater() ?>
						</span><?php } ?>
					<?php } ?>
					<?php if((int)($__Context->document->get('comment_count'))==0){ ?>&nbsp;<?php } ?>
				</td><?php } ?>
				<?php if($__Context->val->type=='readed_count' && $__Context->val->idx==-1){ ?><td class="readNum"><?php echo $__Context->document->get('readed_count')>0?$__Context->document->get('readed_count'):'0' ?></td><?php } ?>
				<?php if($__Context->val->type=='voted_count' && $__Context->val->idx==-1){ ?><td class="voteNum"><?php echo $__Context->document->get('voted_count')!=0?$__Context->document->get('voted_count'):'0' ?></td><?php } ?>
				<?php if($__Context->val->type=='blamed_count' && $__Context->val->idx==-1){ ?><td class="voteNum"><?php echo $__Context->document->get('blamed_count')!=0?$__Context->document->get('blamed_count'):'0' ?></td><?php } ?>
				<?php if($__Context->val->idx!=-1){ ?><td><?php echo $__Context->document->getExtraValueHTML($__Context->val->idx) ?>&nbsp;</td><?php } ?>
				<?php } ?>
				<?php if($__Context->grant->manager){ ?><td class="check"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>"id="iCheck-<?php echo $__Context->document->document_srl ?>" class="iCheck" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /><label for="iCheck-<?php echo $__Context->document->document_srl ?>"></label></td><?php } ?>
			</tr><?php } ?>
			<!-- /LIST -->
		</tbody><?php } ?>
	</table>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/phiz_mboard','include_list_footer.html') ?>
