<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\NativeHttpClient;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

class CitiesController extends AbstractController
{

    /**
     * @throws TransportExceptionInterface
     */
    #[Route('/cities/{cityName}', name: 'app_cities')]
    public function show(String $cityName): Response
    {
        $client = new NativeHttpClient();
        $response = $client->request('GET', 'https://symfony-course.free.beeceptor.com/cities');
        $city = $response->getContent();
        return $this->render('cities/show.html.twig', [
            'cities' => $city,
        ]);
    }
}
