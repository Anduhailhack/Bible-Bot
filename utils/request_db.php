<?php
    namespace Utils;

    include_once $_SERVER["DOCUMENT_ROOT"] . "/utils/config.php";

    use Utils;

    class Request
    {
        function getVerseLimit($info)
        {
        /*
            $curl = curl_init();
            $data = ["method" => "getVerseLimit", "parameters" => ["book" => $info["book"], "chapter" => $info["chapter"]]];
            $data = json_encode($data);

            curl_setopt($curl, CURLOPT_URL, "http://baekabible.epizy.com/bible_api_1/route.php");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data))
            );
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");

            $result = curl_exec($curl);

            if (isset($result))
            {
                //$result = json_decode($result);
                //if (isset($result->content_type) && ($result->content_type == "verse_limit"))
                //{
                //    if (is_array($result->content_body))
                //    {
                //        $type = $result->content_body["content_type"];
                //        $body = $result->content_body["content_body"];

                //        if ($type == "verse_limit")
                //        {
                //            return $body["limit"];
                //        }
                //    }
                //}
                
                return file_get_contents("https://api.telegram.org/bot1874296809:AAEVxshFsrnhORwZYloTeaDOAFqzeSpdzxQ/sendMessage?chat_id=686804748&text=".$result);
            }
            */
            
            $data = ["method" => "getVerseLimit", "parameters" => ["book" => $info["book"], "chapter" => $info["chapter"]]];
            $data = http_build_query($data);
            $opts = array('http' => array(
        		'method' => 'POST',
        		'header' => 'Content-type: application/x-www-form-urlencoded',
        		'content' => $postdata
    		));
			$context = stream_context_create($opts);
			$result = file_get_contents("http://baekabible.epizy.com/bible_api_1/route.php", false, $context);
			
			return file_get_contents("https://api.telegram.org/bot1874296809:AAEVxshFsrnhORwZYloTeaDOAFqzeSpdzxQ/sendMessage?chat_id=686804748&text=".$result);
        }
        
        function getChapter()
        {
        	
        }
        
        function getVerse()
        {
        	
        }
    }
?>
