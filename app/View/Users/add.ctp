
<?php echo $this->Form->create('User'); ?>
<div class=registration-block>
				<div class="block block-transparent">
					<div class="head tac">
						<a href=index.html><img src="img/logob.png"/></a>
					</div>
					<div class="content controls npt">
						
						<div class=form-row>
							<div class="col-md-12">
								<div class=input-group>
									<div class="input-group-addon">
										<span class="icon-user"></span>
									</div>
									
									<?php echo $this->Form->input('username',array('class'=>'form-control','placeholder'=>'Username','label'=>false)); ?>
								</div>
							</div>
							
						</div>
						
						<div class=form-row>
							<div class=col-md-6>
								<div class=input-group>
									<div class=input-group-addon>
										<span class="icon-user"></span>
									</div>
									<?php echo $this->Form->input('firstname',array('class'=>'form-control','placeholder'=>'firstname','label'=>false)); ?>
								</div>
							</div>
							<div class="col-md-6">
								<div class=input-group>
									<div class=input-group-addon>
										<span class=icon-user></span>
									</div>
									
									<?php echo $this->Form->input('lastname',array('class'=>'form-control','placeholder'=>'last name','label'=>false)); ?>
								</div>
							</div>
						</div>
						<div class=form-row>
							<div class=col-md-12>
								<div class=input-group>
									<div class=input-group-addon>
										<span class="icon-email"></span>
									</div>
									<?php echo $this->Form->input('email',array('class'=>'form-control','placeholder'=>'email','label'=>false)); ?>
								</div>
							</div>
							
						</div>
						
						<div class=form-row>
							<div class=col-md-6>
								<div class=input-group>
									<div class=input-group-addon>
										<span class=icon-lock></span>
									</div>
									<?php echo $this->Form->input('password',array('class'=>'form-control','placeholder'=>'password','label'=>false)); ?>
								</div>
							</div>
							<div class=col-md-6>
								<div class=input-group>
									<div class=input-group-addon>
										<span class=icon-unlock-alt></span>
									</div>
									<?php echo $this->Form->input('password2',array('class'=>'form-control','placeholder'=>'confirm password','label'=>false)); ?>
								</div>
							</div>
						</div>
						
						<div class=form-row>
							<div class=col-md-12>
								<input type="submit" class="btn btn-default btn-block btn-clean" value="Sign In" />
							</div>
						</div>
						
					</div>
				</div>
			</div>
		