<?php

namespace App\Scraper;

use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
use App\Models\Blog;
use Illuminate\Support\Str;

class CH
{

    public function scrape()
    {
        $url = 'https://www.homify.vn/magazine';

        $client = new Client();

        $crawler = $client->request('GET', $url);

        $crawler->filter('div.ideabook--items div.ideabook--item')->each(
            function (Crawler $node) {
                $name = $node->filter('a')->text();

                $link = 'https://www.homify.vn'.$node->filter('a')->attr('href');

                $image = $node->filter('img')->eq(0)->attr('src');
                

                $description = $node->filter('p')->text();

                $category_id = 1 ;

                $client1 = new Client();

                $crawler1 = $client1->request('GET', $link);

                    

                $crawler1->filter('div.photo--actions')->each(function (Crawler $crawler) {
                    foreach ($crawler as $node) {
                        $node->parentNode->removeChild($node);
                    }
                });

                $crawler1->filter('div.photo--save')->each(function (Crawler $crawler) {
                    foreach ($crawler as $node) {
                        $node->parentNode->removeChild($node);
                    }
                });

                $crawler1->filter('div.photo--information')->each(function (Crawler $crawler) {
                    foreach ($crawler as $node) {
                        $node->parentNode->removeChild($node);
                    }
                });

                 $crawler1->filter('.-vertical-xs-')->each(function (Crawler $crawler) {
                    foreach ($crawler as $node) {
                        $node->parentNode->removeChild($node);
                    }
                });

                $crawler1->filter('.context-menu')->each(function (Crawler $crawler) {
                    foreach ($crawler as $node) {
                        $node->parentNode->removeChild($node);
                    }
                });
                

                $crawler1->filter('.overlay')->each(function (Crawler $crawler) {
                    foreach ($crawler as $node) {
                        $node->parentNode->removeChild($node);
                    }
                });

                $crawler1->filter('section.free-consultation-banner-box--container')->each(function (Crawler $crawler) {
                    foreach ($crawler as $node) {
                        $node->parentNode->removeChild($node);
                    }
                });
                
                

				$des  = str_replace('c_fill,f_auto,q_0,w_740/','', $crawler1->filter('#ideabook-content')->html());
				$des  = str_replace('c_fill,f_auto,q_0,w_520/','', $des);
				$des  = str_replace('c_fill,f_auto,q_0,w_260/','', $des);
				$des  = str_replace('c_fill,f_auto,q_0,w_1480/','', $des);
				$des  = str_replace('lazy-image','', $des);
                
					
				$content = $des;
                
                  

                

                $blog = new Blog;
                $blog->name = $name;
                $blog->description = $description;
                $blog->image = $image;
                $blog->content = $content;
                $blog->category_id = $category_id;
                $blog->save();
                
            }
        );
    }
}

