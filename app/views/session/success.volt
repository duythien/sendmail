{{content()}}
<div>

<section>
	<h2>Authentication sucessful</h2>
	
	<p>Authentication is successful and auth response is <span style="color: green; font-weight: bold;">validated</span>.</p>

	<p>Returned auth response:</p>
	
	<table class="table">
	<tbody>
	<tr>
		<th>Key</th>
		<th>Value</th>
	</tr>
	{% for key,auth in auths['auth'] %}
		{% if auth is scalar %}
		<tr>
		<th> {{key }}</th>
		<th> {{auth}} </th>
		</tr>
		{% else %}
			<tr>
			<th> {{key}} </th>
			<td><ul>
			{% for key1,item in auth %}
					{% if key1 is sameas('image') %}
						<li><strong>{{key1}}</strong>:<img src="{{item}}" width="100" height="100"> </li>
					{% else %}
						<li><strong>{{key1}}</strong>: {{item}} </li>
					{% endif %}
			{% endfor %}
			</ul></td>
			</tr>
		{% endif %}
	{% endfor %}
	</tbody>
	</table>
	<h2>Raw response</h2>
		{{"<pre>"}}
		<?php print_r($auths);?>
      </section>
		
</div>