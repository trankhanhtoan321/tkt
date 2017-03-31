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
    <li><a><i class="fa fa-database"></i> Products <span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="/admin/new_product">New Product</a></li>
        <li><a href="/admin/add_product_category">New Category</a></li>
        <li><a href="/admin/categorys">Categorys</a></li>
        <li><a href="/admin/products">Products</a></li>
      </ul>
    </li>
    <li><a><i class="fa fa-graduation-cap"></i> Courses <span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="/admin/new_course">New Course</a></li>
        <li><a href="/admin/courses">Courses</a></li>
        <li><a href="/admin/new_course_cat">New Courses Category</a></li>
        <li><a href="/admin/courses_cat">Courses Category</a></li>
        <li><a href="/admin/registration_course">Registration Course</a></li>
        <li><a href="/admin/learn_trial">Learn Trial</a></li>
      </ul>
    </li>
    <li><a><i class="fa fa-graduation-cap"></i> Lecturer <span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="/admin/new_lecturer">New Lecturer</a></li>
        <li><a href="/admin/lecturer">Lecturer</a></li>
      </ul>
    </li>
    <li><a><i class="fa fa-plug"></i> Extends <span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a target="_blank" href="/lib/ckfinder/ckfinder.html">Media Files</a></li>
        <li><a href="/admin/subscribe_email">Subscribe Email</a></li>
        <li><a>Student Comment<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="/admin/new_student_comment">New</a></li>
              <li><a href="/admin/student_comment">Management</a></li>
            </ul>
        </li>
        <li><a>Slide<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="/admin/new_slide">New Slide</a></li>
              <li><a href="/admin/slides">Slides</a></li>
            </ul>
        </li>
        <li><a>Exam Result<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="/admin/new_exam_result">New</a></li>
              <li><a href="/admin/exam_result">List</a></li>
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