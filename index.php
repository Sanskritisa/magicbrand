<?php

// Meta tags and SEO data (optional)
$meta_description = 'Your Site Description';
$meta_keywords = 'keywords, related, to, your, site';
$og_title = 'Your Site Title';
$og_desc = "Your site description for social sharing.";
$og_url = '';
// $og_image = BASE_URL . 'assets/img/logo.png';  // Placeholder image
$title = 'Your Website';
$canonical_url = '';

// Fetch the requested URL from the GET parameter
$requestedUrl = isset($_GET['url']) ? $_GET['url'] : '';
$slug = trim($requestedUrl, '/');  // Trim slashes from the URL

// ROUTING LOGIC: Handle different pages based on the slug

// If the homepage is requested
if ($slug == "") {
    require 'home.php';
    exit;
}

// Define other routes based on slug
else if ($slug == "contact") {
    require 'contact.php';
    exit;
} else if ($slug == "about") {
    require 'about.php';
    exit;
} else if ($slug == "gallery") {
    require 'gallery.php';
    exit;
}  elseif($slug== "services"){
    require 'services.php';
    exit;
}

// Handle specific URLs without periods (like "product_detail/some-product")
// else if (strpos($slug, '.') === false) {
//     $slug = str_replace('product_detail/', '', $slug);
//      require 'product_detail.php';
//     exit;
// } 

// If the slug does not match any known routes, display a 404 page
else {
    require '404.php';
    exit;
}
?>