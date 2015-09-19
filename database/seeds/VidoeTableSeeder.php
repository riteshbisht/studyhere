// app/database/seeds/VideoTableSeeder.php

<?php
use Illuminate\Database\Seeder;
  use Illuminate\Support\Facades\Config;
  use Vinelab\Http\Client as HttpClient;
class VideoTableSeeder extends Seeder
{

public function run()
{
//get the subtopic and youtube videoids as array of key valur pair from config/subtopic.php
//eg array('ETMA-101-1-1'=>array('fdfd','dffdf','sdsd'))
      $arrofsubtopicsandvideoid=Config::get('subtopic');

      $arrofsubtopics=[];

      $i=0;
            while ( $i<sizeof($arrofsubtopicsandvideoid)) {
              //get the array of subtopics
              $arrofsubtopics=array_add($arrofsubtopics,$i,key($arrofsubtopicsandvideoid));
              $i=$i+1;

          next($arrofsubtopicsandvideoid);
      }
      //for each subtopic  fetch all the videos from youtube
  for($i=0;$i<sizeof($arrofsubtopics);$i++)
  {
    $subtopic_code=$arrofsubtopics[$i];
    $videoids=$arrofsubtopicsandvideoid[$subtopic_code];

//fetch all the videos title and description of a single subtopic and store in datbase
    for($j=0;$j<sizeof($videoids);$j++)
          {
            $client = new HttpClient;

$url='https://www.googleapis.com/youtube/v3/videos?id='.$videoids[$j].'&key=AIzaSyACqud0pby3FsKsbfHAUD17PSE7EBL7Yr0&part=snippet,contentDetails,statistics,status';

        $response = $client->get($url);
        $m=$response->json();
        $items=$m->items;

        $snippet=$items[0]->snippet;
          DB::table('videos')->insert([
              'subtopic_code' =>$arrofsubtopics[$i],
              'url'=> 'https://www.youtube.com/watch?v='.$videoids[$j].'/',
              'youtubevideoid' => $videoids[$j],
              'title'=>	$snippet->title,
              'description'=>$snippet->description,

          ]);
        }
  }




}

}
