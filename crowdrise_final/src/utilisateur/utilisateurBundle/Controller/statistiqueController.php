<?php
namespace utilisateur\utilisateurBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ob\HighchartsBundle\Highcharts\Highchart;
class statistiqueController extends Controller{


public function chartAction()
{
    // Chart
    $series = array(
        array("name" => "Data Serie Name",    "data" => array(1,2,4,5,6,3,8))
    );

    $ob = new Highchart();
    $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
    $ob->title->text('nombre d utilisateur connecte');
    $ob->xAxis->title(array('text'  => "date"));
    $ob->yAxis->title(array('text'  => "utilisateur Connecte"));
    $ob->series($series);

    return $this->render('utilisateurBundle:Default:statistique.html.twig', array(
        'chart' => $ob
    ));
}
    }

