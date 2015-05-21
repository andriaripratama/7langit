<p>List of file already uploaded</p>

<table>
	<thead>
		<tr>
			<th>Filename</th>
			<th>Uploader</th>
			<th>Upload time</th>
			<th>Option</th>
		</tr>
	</thead>
	<tbody>
		<?php
			
			foreach($results as $r) {
				$user = user_load($r->uid);
				echo '<tr>';
					echo '<td>'.$r->filename.'</td>';
					echo '<td>'.$user->name.'</td>';
					echo '<td>'.date('d-m-Y H:i:s', $r->timestamp).'</td>';
					echo '<td><a target="new" href="'.file_create_url($r->uri).'">Download</a></td>';
				echo '</tr>';
			}
		?>
	</tbody>
</table>
