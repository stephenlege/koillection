<?php

declare(strict_types=1);

namespace App\Controller\App;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/import', name: 'app_import_')]
class ImportController extends AbstractController
{
    #[Route('/excel', name: 'excel', methods: ['GET', 'POST'])]
    public function index(): Response
    {
        //TODO: Logic for handling the import form and processing the Excel file will go here later

        return $this->render('App/Import/excel.html.twig', [
            // Variables to pass to the template will go here later
        ]);
    }
} 