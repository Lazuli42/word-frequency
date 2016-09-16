<?php
    class Word_Counter
    {

        private $word;
        private $sentence;
        private $matches;

        function getWord()
        {
            return (string) $this->word;
        }

        function getSentence()
        {
            return $this-> (string) $this->sentence;
        }

        function getMatches()
        {
            return (number) $this->matches;
        }

        function find_match($word, $sentence, $partial_matches)
        {
            $this->work = $word;
            $this->sentence = $sentence;

            $word_lowercase = strtolower($word);
            $sentence_lowercase = strtolower($sentence);
            $words_in_sentence = explode(" ", $sentence_lowercase);
            $number_of_matches = 0;

            foreach ($words_in_sentence as $match)
            {
                if ($word_lowercase === $match)
                {
                    $number_of_matches++;
                }
                if ($partial_matches == true)
                {
                    $number_of_matches = substr_count($sentence_lowercase, $word_lowercase);
                }
            }

            $this->matches = $number_of_matches;
            return $number_of_matches;
        }
    }
 ?>
