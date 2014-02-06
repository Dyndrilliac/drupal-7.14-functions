<?php
	function checkUserRole($roleID)
	{
		global $user;
		
		if (user_is_logged_in() == TRUE)
		{
			if (in_array($roleID, $user->roles))
			{
				return TRUE;
			}
		}
		
		return FALSE;
	}

	function createExternalLink($text, $url)
	{
		return l(t($text), $url, array('attributes' => array('target' => '_blank')));
	}
?>