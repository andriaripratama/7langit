<p>Top 10 Games score</p>

<table>
	<thead>
		<tr>
			<th>User</th>
			<th>Scores</th>
			<th>Create At</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$gameid = '';
			foreach($results as $r) {
				
				if($gameid != $r->gameid) {
					echo '<tr>';
						echo '<td colspan="3"><h3>'.$r->gameid.'</h3></td>';
					echo '</tr>';	
				} 
				
				echo '<tr>';
					echo '<td>'.$r->username.'</td>';
					echo '<td>'.$r->scores.'</td>';
					echo '<td>'.date("d-m-Y H:i:s", $r->created_at).'</td>';
				echo '</tr>';
				
				$gameid = $r->gameid;
				
			}
		?>
	</tbody>
</table>
