<?php

namespace App\Controller;

use App\Entity\Generic;
use Doctrine\ORM\EntityRepository;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class GenericController extends AbstractController
{
    /**
     * @Route("/generic", name="generic")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(Request $request)
    {
        $status = 'OK';
        
        try {
            /**
             * Parameters & Validations
             */

            /** @var \stdClass $parsedBody */
            $parsedBody = json_decode($request->getContent());

            /**
             * @todo validations
             */

            /**
             * Populate models
             */

            /** @var EntityRepository $genericRepository */
            $generic = new Generic();

            /** @var array $properties */
            $properties = [
                'application',
                'level',
                'environment',
                'scope',
                'filename',
                'line',
                'debugBackTrace',
                'session',
                'client',
                'exception',
                'error',
                'message',
                'vars',
                'eventTrace',
                'observations'
                ];

            /**
             * Dynamic populate
             */
            foreach ($properties as $property) {
                /* Dynamic method */
                $genericMethod = 'set' . ucfirst($property);

                /* Encode value on json if it's object or array */
                $genericValue = is_object($parsedBody->$property) || is_array($parsedBody->$property) ?
                    json_encode($parsedBody->$property) :
                    $parsedBody->$property;

                /**
                 * If the method exists, populate it
                 */
                if (method_exists($generic, $genericMethod)) {
                    $generic->$genericMethod($genericValue);
                }
            }

            $generic->setCreated(new \DateTime());

            /**
             * Save on database
             */

            $doctrineManager = $this->getDoctrine()->getManager();
            $doctrineManager->persist($generic);
            $doctrineManager->flush();

        } catch (\Throwable $throwable) {
            // set status to KO
            $status = 'KO';
        }

        /**
         * Send response
         */

        return $this->json([
            'status' => $status
        ]);
    }
}
