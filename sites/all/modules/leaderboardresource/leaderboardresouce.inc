<?php

	// leaderboardresource.inc
	/**
	 * Callback for storing score
	 */
	 
	function _leaderboardresource_create($data) {
		global $user;
		
		if(isset($data) && is_array($data)) $data=(object) $data;
		unset($data->id);
		$data->username = $user->name;
		$data->created_at = time();
		
		if(!isset($data->gameid)) {
			return services_error('Missing leaderboard attribute gameid', 406);
		}
		
		if(!isset($data->scores)) {
			return services_error('Missing leaderboard attribute scores', 406);
		}
		
		leaderboardresource_write_score($data);
		
		return (object)array(
			'id' => $data->id;
			'result' => 'Success',
		);
	}
	
	function _leaderboardresource_retrieve($id) {
		return leaderboardresource_get_score($id);
	}
	
	function _leaderboardresource_delete($id) {
		leaderboardresource_delete_score($id);
		
		return (object)array(
			'id' => $id,
			'result' => 'Success',
		);
	}
	
	function _leaderboardresource_index($pages, $parameters) {
		global $user;
		
		$scores = array();
		$query = db_query('SELECT * FROM {leaderboard} WHERE username=:uid ORDER BY created_at DESC', array(':uid' => $user->name));
		
		foreach($query as $score) {
			$scores[] = $score;
		}
		
		return $scores;
	}

?>