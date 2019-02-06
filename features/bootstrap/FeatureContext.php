<?php

use Behat\Behat\Context\Context;
use Behat\Mink\Driver\Selenium2Driver;
use Behat\MinkExtension\Context\MinkContext;
use PHPUnit_Framework_Assert as PHPUnit;


/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    protected $driver;
    protected $session;
    public function __construct()
    {
    //    $this->driver = new \Behat\Mink\Driver\GoutteDriver();
      //  $this->session = new \Behat\Mink\Session($this->driver);
     //   $this->session->start();
    }

    /**
     * @Given Visit Page :arg1
     */
    public function visitPage($arg1)
    {
        $this->session->visit($arg1);
    }

    /**
     * @Then I should get response :arg1
     */
    public function iShouldGetResponse($arg1)
    {
        PHPUnit::assertEquals($this->getSession()->getStatusCode(),intval($arg1));
    }
    /**
     * @Then Set Browser Language :arg1
     */
    public function setBrowserLanguage($arg1)
    {
        $this->session->setRequestHeader('Accept-Language', $arg1);
    }



}
