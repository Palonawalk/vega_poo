<?php
namespace VegaCore\HttpKernel;

use Symfony\Component\HttpFoundation\Response;

    interface HttpKernelInterface
    {
        /**
         * Cette méthode du noyau lui permet de soumettre la requête du client pour traitement et de retourner la réponse correspondante.
         * 
         * @return Response
         */

        public function handleRequest() : Response;
    }
