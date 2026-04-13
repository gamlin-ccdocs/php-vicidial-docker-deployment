<?php
/**
 * Running VICIdial in Docker: The Container Setup Nobody Talks About
 *
 * @see https://vicistack.com/blog/vicidial-docker-deployment/
 * @package vicistack/vicidial-docker-deployment
 */
namespace ViciStack\VicidialDockerDeployment;

class VicidialDockerDeployment
{
    /**
     * @return string Documentation URL
     */
    public static function getDocumentationUrl(): string
    {
        return 'https://vicistack.com/blog/vicidial-docker-deployment/';
    }

    /**
     * @return string Package topic
     */
    public static function getTopic(): string
    {
        return 'Running VICIdial in Docker: The Container Setup Nobody Talks About';
    }
}
