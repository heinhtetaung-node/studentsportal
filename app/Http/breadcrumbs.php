<?php

// Backend Dashboard
Breadcrumbs::register('backend', function($breadcrumbs)
{
    $breadcrumbs->push('Dashboard', route('backend'));
});


//Dashboard > Blogs
Breadcrumbs::register('blogs', function($breadcrumbs)
{
    $breadcrumbs->parent('backend');
    $breadcrumbs->push('Blogs', route('backend.blog.index'));
});

// Dashboard > Blogs > create
Breadcrumbs::register('blogs.create',function($breadcrumbs){

	$breadcrumbs->parent('blogs');
	$breadcrumbs->push('Create', route('backend.blog.create'));
});




// Dashboard > Student
Breadcrumbs::register('students', function($breadcrumbs)
{
    $breadcrumbs->parent('backend');
    $breadcrumbs->push('Students', route('backend.student.index'));
});

// Dashboard > Student > create
Breadcrumbs::register('students.create', function($breadcrumbs)
{
    $breadcrumbs->parent('students');
    $breadcrumbs->push('Create', route('backend.student.create'));
});

// Dashboard > Student > edit
Breadcrumbs::register('students.edit', function($breadcrumbs)
{
    $breadcrumbs->parent('students');
    $breadcrumbs->push('Edit', route('backend.student.edit'));
});