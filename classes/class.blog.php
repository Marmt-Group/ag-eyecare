<?php

class AgBlog {
    public function catch_that_image($post) {
        $first_img = '';
        ob_start();
        ob_end_clean();
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
        $first_img = $matches[1][0];

        if(!empty($first_img)) {
            return $first_img;
        } else {
            return '';
        }   
    }
}