<?php

namespace EvilDead;

/**
 * EvilDead Ipsum Api Class
 *
 * Based on GGA_Bacon_Ipsum_API class
 * @see https://github.com/petenelson/bacon-ipsum
 *
 * @author Davi Marcondes Moreira <davi.marcondes.moreira@gmail.com>
 */
class Api
{
    /**
     *
     */
    public function api()
    {
        if (isset($_REQUEST['submit'])) {
            require_once __DIR__ . '/Generator.php';
            
            $generator = new Generator();
            $numberOfSentences  = 0;
            $numberOfParagraphs = 5;
    
            if (isset($_REQUEST["paras"])) {
                $numberOfParagraphs = intval($_REQUEST["paras"]);
            }
    
            if (isset($_REQUEST["sentences"])) {
                $numberOfSentences  = intval($_REQUEST["sentences"]);
            }
    
            if ($numberOfParagraphs < 1) {
                $numberOfParagraphs = 1;
            }
    
            if ($numberOfParagraphs > 100) {
                $numberOfParagraphs = 100;
            }
    
            if ($numberOfSentences > 100) {
                $numberOfSentences = 100;
            }
    
            $startWithLorem = isset($_REQUEST["start-with-lorem"]) && $_REQUEST["start-with-lorem"] == "1";
    
            $paras = $generator->makeSomeEvilFiller(
                'evil-filler',
                $numberOfParagraphs,
                $startWithLorem,
                $numberOfSentences
            );
    
            return $paras;
        }
    }
}
