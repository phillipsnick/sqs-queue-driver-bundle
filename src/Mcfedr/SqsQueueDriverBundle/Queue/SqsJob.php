<?php
/**
 * Created by mcfedr on 03/06/2014 22:02
 */

namespace Mcfedr\SqsQueueDriverBundle\Queue;

use Mcfedr\QueueManagerBundle\Queue\AbstractJob;

class SqsJob extends AbstractJob
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var int
     */
    private $delay;

    /**
     * @var string
     */
    private $url;

    /**
     * ResqueJob constructor.
     * @param string $name
     * @param array $arguments
     * @param array $options
     * @param string $id
     * @param int $delay
     * @param string $url
     */
    public function __construct($name, $arguments, $options, $id, $delay, $url)
    {
        parent::__construct($name, $arguments, $options);
        $this->id = $id;
        $this->delay = $delay;
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return int
     */
    public function getDelay()
    {
        return $this->delay;
    }
}
