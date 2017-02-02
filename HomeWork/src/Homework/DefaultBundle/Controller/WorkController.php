<?php

namespace Homework\DefaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WorkController extends Controller
{
	public function testAction($firstNumber, $secondNumber)
	{
		$summ = $firstNumber + $secondNumber;
		return $this->render('HomeworkDefaultBundle:Work:test.html.twig',[
			"summ" => $summ
			]);
	}
}