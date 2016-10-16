<?php
/**
 * Created by PhpStorm.
 * User: GNPLX
 * Date: 2016/10/16
 * Time: 20:55
 */

if(have_posts()) {
	the_archive_title();
	the_archive_description();
}