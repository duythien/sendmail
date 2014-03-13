<?php echo $this->getContent(); ?>
<div align="center">
	<?php echo $this->tag->form(array('class' => 'form-search')); ?>
		<div align="left">
			<h2>Sign Up</h2>
		</div>
		<table class="signup">
			<tr>
				<td align="right">Full Name</td>
				<td>
					<?php echo $this->tag->textField(array('fullName')); ?>
				</td>
			</tr>
			<tr>
				<td align="right">Username</td>
				<td>
					<?php echo $this->tag->textField(array('username')); ?>
				</td>
			</tr>
			<tr>
				<td align="right">Email</td>
				<td>
					<?php echo $this->tag->textField(array('email')); ?>
				</td>
			</tr>
			<tr>
				<td align="right">Password</td>
				<td>
					<?php echo $this->tag->passwordField(array('password')); ?>
				</td>
			</tr>
			
			<tr class="form-actions">
				<td align="right"></td>
				<td> <?php echo $this->tag->submitButton(array('Save', 'class' => 'btn btn-primary btn-large')); ?></td>
			</tr>
		</table>

	
		<hr>

	</form>

</div>