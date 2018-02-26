<?php

namespace EvilDead;

/**
 * EvilDead Ipsum Generator Class
 *
 * Based on BaconIpsumGenerator class
 * @see https://github.com/petenelson/bacon-ipsum
 *
 * @author Davi Marcondes Moreira <davi.marcondes.moreira@gmail.com>
 */
class Generator
{
    /**
     * @param string $type
     * @return array
     */
    public function getWords($type)
    {
        $necronomicon = array(
            'Tatra',
            'amistrobin',
            'azarta',
            'tatis',
            'manor',
            'manziz',
            'hounaz',
            'ansobar',
            'saman',
            'darobza',
            'dahir',
            'saika',
            'danz',
            'deroza',
            'kandar',
            'kandar',
            'kandar',
            'Necronomicon',
            'ex',
            'Mortis',
            'Kandarian',
            'Naturam',
            'De',
            'Montum',
            'Ash',
            'Cheryl',
            'woods',
            'Shelly',
            'Scotty',
            'Linda',
            'ruins',
            'ancient',
            'burial',
            'practices',
            'incantations',
            'Book',
            'of',
            'the',
            'Dead',
            'human flesh',
            'human blood',
            'demons',
            'resurrection',
            'forest',
            'dark',
            'Groovy',
            'swallow your soul',
            'chain saw',
            'cellar',
            'Dead by dawn',
            'dawn',
            'boomstick',
            'Gimme some sugar',
            'Klaatu',
            'Barada',
            'Nikto',
            'Necktie',
            'Neckturn',
            'Nickel',
            'Hail to the king',
            'S-Mart',
        );

        $ipsum = array(
            'consectetur',
            'adipisicing',
            'elit',
            'sed',
            'do',
            'eiusmod',
            'tempor',
            'incididunt',
            'ut',
            'labore',
            'et',
            'dolore',
            'magna',
            'aliqua',
            'ut',
            'enim',
            'ad',
            'minim',
            'veniam',
            'quis',
            'nostrud',
            'exercitation',
            'ullamco',
            'laboris',
            'nisi',
            'ut',
            'aliquip',
            'ex',
            'ea',
            'commodo',
            'consequat',
            'duis',
            'aute',
            'irure',
            'dolor',
            'in',
            'reprehenderit',
            'in',
            'voluptate',
            'velit',
            'esse',
            'cillum',
            'dolore',
            'eu',
            'fugiat',
            'nulla',
            'pariatur',
            'excepteur',
            'sint',
            'occaecat',
            'cupidatat',
            'non',
            'proident',
            'sunt',
            'in',
            'culpa',
            'qui',
            'officia',
            'deserunt',
            'mollit',
            'anim',
            'id',
            'est',
            'laborum'
        );
        
        $words = $necronomicon;
        if ($type == 'evil-filler') {
            $words = array_merge($necronomicon, $ipsum);
        }

        shuffle($words);

        return $words;
    }

    /**
     * @param string $type
     * @return string
     */
    public function makeSentence($type)
    {
        // A sentence should be between 4 and 15 words.
        $sentence = '';
        $length   = rand(4, 15);

        // Add a little more randomness to commas, about 2/3rds of the time
        $includeComma = $length >= 7 && rand(0, 2) > 0;

        $words = $this->GetWords($type);

        if (count($words) > 0) {
            // Capitalize the first word.
            $words[0] =  ucfirst($words[0]);

            for ($i = 0; $i < $length; $i++) {
                if ($i > 0) {
                    if ($i >= 3 && $i != $length - 1 && $includeComma) {
                        if (rand(0, 1) == 1) {
                            $sentence     = rtrim($sentence) . ', ';
                            $includeComma = false;
                        } else {
                            $sentence .= ' ';
                        }
                    } else {
                        $sentence .= ' ';
                    }
                }

                $sentence .= $words[$i];
            }

            $sentence = rtrim($sentence) . '. ';
        }

        return $sentence;
    }

    /**
     * @param string $type
     * @return string
     */
    public function makeParagraph($type)
    {
        // A paragraph should be bewteen 4 and 7 sentences.
        $para   = '';
        $length = rand(4, 7);

        for ($i = 0; $i < $length; $i++) {
            $para .= $this->MakeSentence($type) . ' ';
        }

        return rtrim($para);
    }

    /**
     * @param string $type
     * @param int $numberOfParagraphs
     * @param boolean $startWithLorem
     * @param int $numberOfSentences
     * @return array
     */
    public function makeSomeEvilFiller(
        $type = 'evil-filler',
        $numberOfParagraphs = 5,
        $startWithLorem = true,
        $numberOfSentences = 0
    ) {
        $paragraphs = array();
        
        if ($numberOfSentences > 0) {
            $numberOfParagraphs = 1;
        }

        $words = '';

        for ($i = 0; $i < $numberOfParagraphs; $i++) {
            if ($numberOfSentences > 0) {
                for ($s = 0; $s < $numberOfSentences; $s++) {
                    $words .= $this->MakeSentence($type);
                }
            } else {
                $words = $this->MakeParagraph($type);
            }

            if ($i == 0 && $startWithLorem && count($words) > 0) {
                $words[0] = strtolower($words[0]);
                $words    = 'Evil Dead ipsum dolor sit amet ' . $words;
            }

            $paragraphs[]  = rtrim($words);
        }

        return $paragraphs;
    }
}
