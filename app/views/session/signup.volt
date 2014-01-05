{{ content() }}
<div align="center">
	{{ form('class': 'form-search') }}
		<div align="left">
			<h2>Sign Up</h2>
		</div>
		<table class="signup">
			<tr>
				<td align="right">Full Name</td>
				<td>
					{{ text_field("fullName") }}
				</td>
			</tr>
			<tr>
				<td align="right">Username</td>
				<td>
					{{ text_field("username") }}
				</td>
			</tr>
			<tr>
				<td align="right">Email</td>
				<td>
					{{ text_field('email')}}
				</td>
			</tr>
			<tr>
				<td align="right">Password</td>
				<td>
					{{ password_field("password") }}
				</td>
			</tr>
			
			<tr class="form-actions">
				<td align="right"></td>
				<td> {{ submit_button('Save','class':'btn btn-primary btn-large') }}</td>
			</tr>
		</table>

	
		<hr>

	</form>

</div>