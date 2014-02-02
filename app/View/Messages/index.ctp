<div class=row>
				<div class=col-md-4>
					<div class=block>
						<div class=btn-group>
							<button class="btn btn-default btn-clean">
								<span class=icon-chevron-down></span>
							</button>
							<button class="btn btn-default btn-clean">
								<span class=icon-refresh></span>
							</button>
						</div>
						<div class=btn-group>
							<button class="btn btn-default btn-clean">
								<span class=icon-folder-open></span>
							</button>
							<button class="btn btn-default btn-clean">
								<span class=icon-exclamation-sign></span>
							</button>
							<button class="btn btn-default btn-clean">
								<span class=icon-trash></span>
							</button>
						</div>
						<div class="btn-group pull-right">
							<a class="btn btn-danger btn-block" href=#modal_mail data-toggle=modal>New Email</a>
						</div>
					</div>
					<div class="block block-transparent nm">
						<div class="scroll-mail email-list">
						<?php foreach($messages as $item) { ?>
							<div class="email-list-item" data-id="<?php echo $item['Message']['id'] ?>">
								<div class=item-line>
									
									<div class=item-line-title>
										<?php echo $item['From']['username'] ?>
									</div>
									<div class=item-line-date>
										<?php echo date('d M Y',strtotime($item['Message']['date'])); ?>
									</div>
								</div>
								<div class=item-line>
								
									<div class="item-line-box ">
										<?php if($item['Message']['status'] == NULL) { ?>
											<span class="icon-star active unread"></span>
										<?php } ?>
									</div>
								
									<div class=item-line-title>
										<?php echo $item['Message']['subject'] ?>
									</div>
								</div>
								<div class=item-line>
									<div class=item-line-content>
										<?php echo substr(strip_tags($item['Message']['message']), 0,150) ?>...
									</div>
								</div>
							</div>
						<?php } ?>
							</div>
					</div>
				</div>
				<div class=col-md-5>
					<div class=block>
						<div class=btn-group>
							<button class="btn btn-default btn-clean">
								<span class=icon-exclamation-sign></span>
							</button>
							<button class="btn btn-default btn-clean">
								<span class=icon-trash></span>
							</button>
						</div>
						<div class=btn-group>
							<button class="btn btn-default btn-clean">
								<span class=icon-mail-forward></span>
							</button>
							<button class="btn btn-default btn-clean">
								<span class=icon-mail-reply></span>
							</button>
							<button class="btn btn-default btn-clean">
								<span class=icon-mail-reply-all></span>
							</button>
						</div>
						<div class="btn-group pull-right">
							<button class="btn btn-default btn-clean dropdown-toggle" data-toggle=dropdown>
								<span class=icon-folder-close></span> Move to <span class=caret></span>
							</button>
							<ul class=dropdown-menu role=menu>
								<li>
									<a href=#>Inbox</a>
								</li>
								<li>
									<a href=#>Starred</a>
								</li>
								<li>
									<a href=#>Sent</a>
								</li>
								<li>
									<a href=#>Important</a>
								</li>
								<li>
									<a href=#>Trash</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="block block-drop-shadow">
						<div id="messageBody">
							
							<div class="alert alert-warning">Please select a message</div>
							
						</div>
						
					</div>
				</div>
			</div>


<div class=modal id=modal_mail tabindex=-1 role=dialog aria-labelledby=myModalLabel aria-hidden=true>
			<div class=modal-dialog>
				<div class=modal-content>
					<div class=modal-header>
						<button type=button class=close data-dismiss=modal aria-hidden=true>
							&times;
						</button>
						<h4 class=modal-title>New Message</h4>
					</div>
					<div class="modal-body clearfix">
						<?php echo $this->Form->create('Message',array('id'=>'newMessage')); ?>
						<div class=controls>
							<div class=form-row>
								<div class=col-md-3>
									From:
								</div>
								<div class=col-md-9>
									<?php echo $this->Form->hidden('from',array('label'=>FALSE,'value'=>$this->Session->read('Auth.User.id'))) ?>
									<input type=text class=form-control disabled=disabled value="<?php echo $this->Session->read('Auth.User.username') ?>"/>
								</div>
							</div>
							<div class=form-row>
								<div class=col-md-3>
									To:
								</div>
								<div class=col-md-9>
									<?php echo $this->Form->input('to',array('label'=>FALSE,'options'=>$tos)) ?>
								</div>
							</div>
							
							<div class=form-row>
								<div class=col-md-3>
									Subject:
								</div>
								<div class=col-md-9>
									<?php echo $this->Form->input('subject',array('label'=>FALSE)) ?>
								</div>
							</div>
							
							<div class=form-row>
								<div class=col-md-12>
									<?php echo $this->Form->hidden('date',array('value'=>date('Y-m-d H:i:s'))); ?>
									<?php echo $this->Form->input('message',array('label'=>FALSE,'div'=>FALSE,'type'=>'textarea','class'=>'form-control scle')) ?>
								</div>
							</div>
						</div>
					</div>
					<div class=modal-footer>
						<button type=button class="btn btn-default btn-clean" data-dismiss=modal>
							Close
						</button>
						
						<button type=submit class="btn btn-success btn-clean">
							Send
						</button>
					</div>
				</div>
				</form>
			</div>
		</div>
	
