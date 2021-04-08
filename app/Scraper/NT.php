<?php

namespace App\Scraper;

use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
use App\Models\Blog;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

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
               
                
                $crawler1->filter('div.content-detail')->each(
                    function(Crawler $node1){
                        $z=0;
                        foreach($node1->filter('img') as $key){
                        $path = 'https://noithattrevietnam.com'.$node1->filter('img')->eq($z)->attr('src');
                        $filename = basename($path);
                        Image::make($path)->save(public_path('img/'.str_replace('%','-',$filename)));
                        

                        $z++;
                        }


                    }
                );

                $url = asset('img/');
				$des  = str_replace('Liên hệ ngay','',$crawler1->filter('div.content-detail')->html());
				$des  = str_replace('HOTLINE','', $des);
                $des  = str_replace('0906 133 999','', $des);
                $des  = str_replace('để được hưởng ưu đãi','', $des);
                $des  = str_replace('miễn 100%','', $des);
                $des  = str_replace('phí thiết kế khi thi công trọn gói','', $des);
               
                $des  = str_replace('/uploaded/Thiet-ke-noi-that-phong/Thiet-ke-noi-that-phong-khach',$url, $des);
                $des  = str_replace('/uploaded/2019/08',$url, $des);
                $des  = str_replace('/uploaded/2020/07',$url, $des);
                $des  = str_replace('/uploaded/Thiet-ke-noi-that-phong/phong-bep',$url, $des);
                $des  = str_replace('/uploaded/Thiet-ke-noi-that-phong/Phong-ngu',$url, $des);
                $des  = str_replace('/uploaded/Thiet-ke-noi-that-nha/Phong-tre-em',$url, $des);
                $des  = str_replace('/uploaded/2019/10',$url, $des);
                $des  = str_replace('/uploaded/Thiet-ke-noi-that-nha/Phong-tre-em',$url, $des);
                $des  = str_replace('/uploaded/2021/03',$url, $des);

                $des  = str_replace('%20%281%29','-20-281-29', $des);
                $des  = str_replace('%20%288%29','-20-288-29', $des);
                $des  = str_replace('%20%282%29','-20-282-29', $des);
                $des  = str_replace('%20%283%29','-20-283-29', $des);
                $des  = str_replace('%20%284%29','-20-284-29', $des);
                $des  = str_replace('%20%285%29','-20-285-29', $des);
                $des  = str_replace('%20%286%29','-20-286-29', $des);
                $des  = str_replace('%20%2812%29','-20-2812-29', $des);
                $des  = str_replace('%20%2813%29','-20-2813-29', $des);
                $des  = str_replace('%20%2814%29','-20-2814-29', $des);
                $des  = str_replace('%20%289%29','-20-289-29', $des);
                $des  = str_replace('%20%2810%29','-20-2810-29', $des);
                $des  = str_replace('%20%2811%29','-20-2811-29', $des);
                $des  = str_replace('%20','-20', $des);

				$content = $des;

                $blog = new Blog;
                $blog->name = $name;
                $blog->description = $description;
                $blog->image = $image;
                $blog->content = $content;
                $blog->category_id = $category_id;
                $resurt = Blog::where('name','like', $name)->value('name');
                    if($resurt == null){
                        $blog->save();
                    }

                }

                
                
            
        );
    }
}