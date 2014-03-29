<?php echo $this->getContent(); ?>
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
	<?php foreach ($auths['auth'] as $key => $auth) { ?>
		<?php if (is_scalar($auth)) { ?>
		<tr>
		<th> <?php echo $key; ?></th>
		<th> <?php echo $auth; ?> </th>
		</tr>
		<?php } else { ?>
			<tr>
			<th> <?php echo $key; ?> </th>
			<td><ul>
			<?php foreach ($auth as $key1 => $item) { ?>
					<?php if (($key1) === ('image')) { ?>
						<li><strong><?php echo $key1; ?></strong>:<img src="<?php echo $item; ?>" width="100" height="100"> </li>
					<?php } elseif ($key1 == 'urls') { ?>
						<li><strong><?php echo $key1; ?></strong>: <?php echo $item['google']; ?> </li>
					<?php } else { ?>
					<li><strong><?php echo $key1; ?></strong>: <?php echo $item; ?> </li>
					<?php } ?>
			<?php } ?>
			</ul></td>
			</tr>
		<?php } ?>
	<?php } ?>
	</tbody>
	</table>
	<h2>Raw response</h2>
		<?php echo '<pre>'; ?>
		<?php print_r($auths);?>
      </section>
		
</div>