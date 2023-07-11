<?php
namespace VegaCore\HttpKernel;

use Psr\Container\ContainerInterface;
use VegaCore\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Response;

    abstract class HttpKernel implements HttpKernelInterface
    {

        /**
         * Le conteneur de dépendances
         * 
         * @var ContainerInterface
        */
        protected readonly ContainerInterface $container;

        public function __construct(ContainerInterface $container)
        {
            $this->container = $container;
        }
        
        /**
         * Cette méthode du noyau lui permet de soumettre la requête du client pour traitement et de retourner la réponse correspondante.
         * 
         * @return Response
         */

        public function handleRequest() : Response
        {
            $response = new Response(
                'Content',
                Response::HTTP_OK,
                ['content-type' => 'text/html']
            );

            return $response;
        }
    }