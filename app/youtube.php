<?php
class Youtube
{
	const SEARCH_URL ='https://www.googleapis.com/youtube/v3/search';

	public static function getVideos($channelId, $maxResults)

	{
        $parameters = http_build_query([
            'part' => 'snippet', 
            'channelId' => $channelId,
            'type' => 'video',
            'order' => 'date',
            'key' => 'AIzaSyCQWI4iSLS7dj5lANm2BPplztFxJPVFC2M',
            'maxResults' => $maxResults,
        ]);
        return json_decode(file_get_contents(self::SEARCH_URL.'?'.$parameters));
	}
}