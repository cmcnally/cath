<?php

	function empathy_child_scripts()
	{
		wp_enqueue_style('empathy-parent-style', get_template_directory_uri(). '/style.css');
	}
	
	add_action('wp_enqueue_scripts', 'empathy_child_scripts');


/* Custom Functions */