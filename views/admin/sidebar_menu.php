<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="menu_section">
  <h3>Dashboard</h3>
  <ul class="nav side-menu">
    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="/admin">Dashboard</a></li>
        <li><a target="_blank" href="/">Website</a></li>
      </ul>
    </li>
    <li><a><i class="fa fa-file"></i> Articles <span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="/admin/new_blog">New Article</a></li>
        <li><a href="/admin/blogs">Articles</a></li>
        <li><a href="/admin/new_blogcategory">New Category</a></li>
        <li><a href="/admin/blogcategory">Categories</a></li>
      </ul>
    </li>
    <li><a><i class="fa fa-plug"></i> Extends <span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a target="_blank" href="/lib/ckfinder/ckfinder.html">Media Files</a></li>
        <li><a href="/admin/subscribe_email">Subscribe Email</a></li>
        <li><a>Slide<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="/admin/new_slide">New Slide</a></li>
              <li><a href="/admin/slides">Slides</a></li>
            </ul>
        </li>
      </ul>
    </li>
    <li><a><i class="fa fa-user"></i>User <span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="/admin/profile_user">Profile</a></li>
        <li><a href="/admin/change_password">Change Password</a></li>
      </ul>
    </li>
    <li><a><i class="fa fa-cogs"></i>Setting <span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="/admin/general_setting">General</a></li>
      </ul>
    </li>
  </ul>
</div>