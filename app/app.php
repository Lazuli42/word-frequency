<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get('/CountRepeats', function() use ($app) {
        $repeat_counter = new RepeatCounter ();
        $repeat_counter->CountRepeats($_GET['word'], $_GET['sentence'], $_GET['partial_matches']);
        return $app['twig']->render('form.html.twig', array('repeat_counter' => $repeat_counter));
    });

    return $app;
 ?>
