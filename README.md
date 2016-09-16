# _Word Frequency_

#### _it's like ctrl + f, but less convenient, 09/16/2016_

#### By _**Zach Baum**_

## Description

_A web page that checks how often a word is used in a sentence._

## Installation

1. _Clone or download files from github._
2. _Install Composer if you haven't already, then open the terminal in "/word-frequency" and run the "composer install" command to load frameworks._
3. _Open terminal in "/word-frequency/web" and run the command "php -S localhost:8000"._
4. _Open the internet browser of your choice and go to "localhost:8000/"._

## Specs

1. _Program can say that a word is used in a sentence once._
    - Input: "test" in "test"
    - Output: test is used 1 time.
    - _(Dev Note: The name and length of the string being tested doesn't matter, so i just used the work test. Because I'm testing. To keep things consistent, I looked for the word "test" in all of the following specs as well.)_

2. _Ignores partial occurrences of a word._
    - Input: "test" in "testing"
    - Output: test is used 0 times.
    - _(Dev Note: Currently I only want to confirm the a word in the sentence matches the sought after word if they're exactly the same. I suspected I wouldn't have to write any more code than the first test, so I made it the second spec.)_

3. _Counts the number of times a word is used in a sentence._
    - Input: "test" in "test the test for tests"
    - Output: test is used 2 times.
    - _(Dev Note: Next I wanted to find the word in the sentence multiple times, which would only require splitting the sentence into an array and running a for loop, so it's spec number 3.)_

4. _User can choose to look for partial matches._
    - Input: "test" in "testing for tests" [Partial Matches: checked]
    - Output: test is used 2 times.
    - _(Dev Note: This was not necessary for the project, but I wanted to do it. Because it is both more complicated than the previous specs and not required for the project, I tested it after the basics were done.)_

5. _Can find word in upper or lower case._
    - Input: "test" in "teST"
    - Output: test is used 1 time.
    - _(Dev Note: This spec, while necessary for a smooth user experience, was not crucial to the logic, so I did it last.)_
    - _(Dev Note: I forgot to commit after I wrote these. I did write all of these and then wrote the tests before I wrote any code, but I have no proof._ :expressionless: )

## Link to github pages

https://lazuli42.github.io/word-frequency/

## Support and contact details

_zacharybaum42@gmail.com_

## Technologies Used

_PHP, Silex, Twig, PHPUnit, Bootstrap_

### License

*Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.*

Copyright (c) 2016 **_Zachary Baum_**
