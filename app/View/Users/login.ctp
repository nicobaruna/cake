<?php echo $this->Form->create('User',array('id'=>'validate')); ?>
<div class=login-block>
				<div class="block block-transparent">
					<div class=head>
						<div class=user>
							<div class="info user-change">
								<img src=img/example/user/dmitry_b.jpg class="img-circle img-thumbnail"/>
								<div class=user-change-button>
									<span class=icon-off></span>
								</div>
							</div>
						</div>
					</div>
					<div class="content controls npt">
						<div class="form-row user-change-row">
							<div class=col-md-12>
								<div class=input-group>
									<div class=input-group-addon>
										<span class=icon-user></span>
									</div>
									
									<?php echo $this->Form->input('username',array('class'=>'validate[required] form-control','placeholder'=>'Login','label'=>false));  ?>
								</div>
							</div>
						</div>
						<div class=form-row>
							
							<div class=col-md-12>
								<div class=input-group>
									<div class=input-group-addon>
										<span class=icon-key></span>
									</div>
									
									<?php echo $this->Form->input('password',array('class'=>'validate[required] form-control','placeholder'=>'Password','label'=>false));?>
								</div>
							</div>
						</div>
						<div class=form-row>
							<div class=col-md-6>
								<?php echo $this->Html->link('Register',array('Controller'=>'Users','action'=>'add'),array('class'=>'btn btn-default btn-block btn-clean')) ?>
								
							</div>
							<div class=col-md-6>
								
								<input type="submit" class="btn btn-default btn-block btn-clean" value="login" />
							</div>
						</div>
						<div class=form-row>
							<div class=col-md-12>
								<a href=# class="btn btn-link btn-block">Forgot your password?</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
</form>