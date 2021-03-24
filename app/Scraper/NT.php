<?php

namespace App\Scraper;

use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
use App\Models\Blog;
use Illuminate\Support\Str;

class NT
{

    public function scrape()
    {
        $url = 'https://noithattrevietnam.com/thiet-ke-noi-that-phong/';

        $client = new Client();

        $crawler = $client->request('GET', $url);

        $crawler->filter('div.news-lst div.item-news')->each(
            function (Crawler $node) {
                $name = $node->filter('h2')->text();

                $link = 'https://noithattrevietnam.com'.$node->filter('a')->attr('href');

                $image = 'https://noithattrevietnam.com'.$node->filter('img')->eq(0)->attr('src');
                

                $description = $node->filter('div.intro-service')->text();

                $category_id = 2 ;

                $client1 = new Client();

                $crawler1 = $client1->request('GET', $link);

               
                 
                // $crawler1->filter('div.photo--actions')->each(function (Crawler $crawler) {
                //     foreach ($crawler as $node) {
                //         $node->parentNode->removeChild($node);
                //     }
                // });

                // $crawler1->filter('div.photo--save')->each(function (Crawler $crawler) {
                //     foreach ($crawler as $node) {
                //         $node->parentNode->removeChild($node);
                //     }
                // });

                
                
                

				$des  = str_replace('Liên hệ ngay','',$crawler1->filter('div.content-detail')->html());
				$des  = str_replace('HOTLINE','', $des);
                $des  = str_replace('0906 133 999','', $des);
                $des  = str_replace('để được hưởng ưu đãi','', $des);
                $des  = str_replace('miễn 100%','', $des);
                $des  = str_replace('phí thiết kế khi thi công trọn gói','', $des);
                $des  = str_replace('/uploaded','https://noithattrevietnam.com/uploaded',$des);
                
	
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