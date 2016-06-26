<?php

// Backend Dashboard
Breadcrumbs::register('backend', function($breadcrumbs)
{
    $breadcrumbs->push('Dashboard', route('backend'));
});





// Testing ...
Breadcrumbs::register('multiple', function($breadcrumbs)
{
    $breadcrumbs->parent('backend');
    $breadcrumbs->push('Multiple', route('backend'));
});