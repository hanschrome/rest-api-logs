<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Generic
 *
 * @ORM\Table(name="generic")
 * @ORM\Entity
 */
class Generic
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP","comment"="Creation date"})
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="application", type="string", length=255, nullable=true, options={"comment"="Application label in order to identify which application is being logged"})
     */
    private $application;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level", type="integer", nullable=true, options={"comment"="0 DEBUG, 1 WARN, 2 ERROR, 3 FATAL, 4 CRITICAL, 5 TRACE"})
     */
    private $level;

    /**
     * @var string|null
     *
     * @ORM\Column(name="environment", type="string", length=255, nullable=true, options={"comment"="Environment: dev, qa, pre, pro"})
     */
    private $environment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="scope", type="string", length=255, nullable=true, options={"comment"="Abstract layer: CLIENT_API, PAYPAL_API, vendor, ..."})
     */
    private $scope;

    /**
     * @var string|null
     *
     * @ORM\Column(name="filename", type="string", length=3000, nullable=true, options={"comment"="Absolute path for filename"})
     */
    private $filename;

    /**
     * @var int|null
     *
     * @ORM\Column(name="line", type="integer", nullable=true, options={"comment"="File line"})
     */
    private $line;

    /**
     * @var string|null
     *
     * @ORM\Column(name="debug_back_trace", type="text", length=65535, nullable=true, options={"comment"="Exception trace"})
     */
    private $debugBackTrace;

    /**
     * @var string|null
     *
     * @ORM\Column(name="session", type="string", length=3000, nullable=true, options={"comment"="Session data such user id, token..."})
     */
    private $session;

    /**
     * @var string|null
     *
     * @ORM\Column(name="client", type="string", length=3000, nullable=true, options={"comment"="Client data such user-agent, ip, ..."})
     */
    private $client;

    /**
     * @var string|null
     *
     * @ORM\Column(name="exception", type="string", length=255, nullable=true, options={"comment"="Name of the exception such InternalErrorException, InvalidArgumentsException, ..."})
     */
    private $exception;

    /**
     * @var string|null
     *
     * @ORM\Column(name="error", type="string", length=250, nullable=true, options={"comment"="Error tag to identify same errors such LOGIN_FAILED, DATABASE_CONNECTION, ..."})
     */
    private $error;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="string", length=3000, nullable=true, options={"comment"="Exception message thrown by the exception system"})
     */
    private $message;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vars", type="string", length=3000, nullable=true, options={"comment"="Variable data, json encoded recommended"})
     */
    private $vars;

    /**
     * @var string|null
     *
     * @ORM\Column(name="event_trace", type="text", length=65535, nullable=true, options={"comment"="Custom trace of events in json, for example: [""Validated parameters"", ""Validated args"", ""Loaded information"", ""Save information""]"})
     */
    private $eventTrace;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observations", type="string", length=3000, nullable=true, options={"comment"="Observations, any kind of information that does not fit with fields"})
     */
    private $observations;


}
