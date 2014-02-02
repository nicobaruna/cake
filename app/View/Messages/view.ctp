						<div class="head bg-dot30">
							<h2><?php echo $message['Message']['subject'] ?></h2>
							<div class=pull-right>
								<span class=icon-paper-clip></span> <?php echo date('d M Y',strtotime($message['Message']['date'])); ?>
							</div>
							<div class=head-subtitle>
								<?php echo $message['From']['username'] ?><span class="icon-stop text-primary pull-right"></span>
							</div>
						</div>
						<div class=content>
							<?php echo $message['Message']['message'] ?>
						</div>