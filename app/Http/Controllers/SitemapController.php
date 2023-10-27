<?php 

namespace App\Http\Controllers;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;


class SitemapController extends Controller
{
    public function generate()
{
    // Create a new sitemap
    $sitemap = Sitemap::create();

    // Add the home page
    $sitemap->add(url('/'));

    // Add other webpages dynamically from your routes
    $this->addRoutesToSitemap($sitemap);

    // Write the sitemap to a file
    $sitemap->writeToFile(public_path('sitemap.xml'));

    return 'Sitemap Generated Successfully';
}

private function addRoutesToSitemap(Sitemap $sitemap)
{
    // Define the list of routes to include
    $routes = [
        'products.create',
        'projects',
        'about-us',
        'contact-form',
        // Add other route names as needed
    ];

    // Add each route to the sitemap
    foreach ($routes as $route) {
        $sitemap->add(route($route));
    }
}

}
