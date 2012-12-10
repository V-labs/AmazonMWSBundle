Amazon MWS Bundle
=================

This bundle provides a Symfony2 service for the Amazon MWS PHP SDK.

Installation
------------

Add the reference into your composer.json : 

    "vlabs/amazon-mws-bundle": "dev-master"

Enable the bundle in your AppKernel.php

    new Vlabs\AmazonMWSBundle\VlabsAmazonMWSBundle(),

Configuration
-------------

    vlabs_amazon_mws:
        access_key: your_access_key
        secret_key: your_secret_key
        application_name: your_app_name
        application_version: 1.0
        config:
            ServiceURL: https://mws.amazonservices.fr/Products/2011-10-01


Usage
-----

In controller :

     $client = $this->get('vlabs_amazon_mws.client')->get('search');
