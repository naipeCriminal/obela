<?php

function getContentTemplate( $post ){
  preg_match('/\[use:(.*?)\]/s', $post->post_content, $match);
  if( isset($match[1])) return $match[1];
  return "";
}