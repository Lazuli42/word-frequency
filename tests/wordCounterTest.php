<?php
    require_once __DIR__.'/../src/Word_Counter.php';

    class Test_Word_Counter extends PHPUnit_Framework_TestCase
    {
        function test_one_word()
        {
            // Arrange
            $test_word_counter = new Word_Counter();
            $word = "test";
            $sentence = "test";
            $partial_matches = false;

            // Act
            $result = $test_word_counter->find_match($word, $sentence, $partial_matches);

            // Assert
            $this->assertEquals(1, $result);
        }

        function test_partial_match_false()
        {
            // Arrange
            $test_word_counter = new Word_Counter();
            $word = "test";
            $sentence = "testing";
            $partial_matches = false;

            // Act
            $result = $test_word_counter->find_match($word, $sentence, $partial_matches);

            // Assert
            $this->assertEquals(0, $result);
        }

        function test_2_matches()
        {
            // Arrange
            $test_word_counter = new Word_Counter();
            $word = "test";
            $sentence = "test for test in tests";
            $partial_matches = false;

            // Act
            $result = $test_word_counter->find_match($word, $sentence, $partial_matches);

            // Assert
            $this->assertEquals(2, $result);
        }

        function test_patial_match_true()
        {
            // Arrange
            $test_word_counter = new Word_Counter();
            $word = "test";
            $sentence = "testing for tests";
            $partial_matches = true;

            // Act
            $result = $test_word_counter->find_match($word, $sentence, $partial_matches);

            // Assert
            $this->assertEquals(2, $result);
        }

        function test_mixed_case()
        {
            // Arrange
            $test_word_counter = new Word_Counter();
            $word = "test";
            $sentence = "teST";
            $partial_matches = false;

            // Act
            $result = $test_word_counter->find_match($word, $sentence, $partial_matches);

            // Assert
            $this->assertEquals(1, $result);
        }
    }
 ?>
