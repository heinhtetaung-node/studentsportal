<?php

// Backend Dashboard
Breadcrumbs::register('backend', function($breadcrumbs)
{
    $breadcrumbs->push('Dashboard', route('backend'));
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