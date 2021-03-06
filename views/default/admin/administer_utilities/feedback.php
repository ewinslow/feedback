<?php

/**
 * Elgg Feedback plugin
 * Feedback interface for Elgg sites
 *
 * @package Feedback
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Prashant Juvekar
 * @copyright Prashant Juvekar
 * @link http://www.linkedin.com/in/prashantjuvekar
 *
 * for Elgg 1.8 onwards by iionly
 * iionly@gmx.de
 */

$offset = (int)get_input('offset');
$limit = 10;

$list = elgg_list_entities(array('type' => 'object', 'subtype' => 'feedback', 'limit' => $limit, 'offset' => $offset));
if (!$list) {
	$list = '<p class="mtm">' . elgg_echo('feedback:list:nofeedback') . '</p>';
}

echo $list;
