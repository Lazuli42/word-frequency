<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__."/../src/Word_Counter.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get('/find_match', function() use ($app) {
        $word_counter = new Word_Counter();
        $word_counter->find_match($_GET['word'], $_GET['sentence'], $_GET['partial_matches']);
        return $app['twig']->render('form.html.twig', array('word_counter' => $word_counter));
    });

    return $app;
 ?>
