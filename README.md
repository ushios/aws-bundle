aws-bundle
==========

Create aws client using 'config.yml'.

---

# Installation

### composer.json

    # composer.json
    "require": {
        "ushios/aws-bundle": "1.0.*",
        …
    }

and run `composer update` command.

### AppKernel.php

    # app/AppKernel.php
    
    public function registerBundles()
    {
        bundles = array(
            // ...
            new Ushios\Bundle\AwsBundle\UshiosAwsBundle(),
        );
        
        retrun bundles();
    }


# Confguration

config.yml

    # app/config/config.php
    ushios_aws:
    client:
        default:
            key: ${your_aws_key}
            secret: ${your_aws_secret_key}
            region: ap-northeast-1
        named:
            class: Your\Aws\Client # default: Aws\Common\Aws
            key: ${your_named_aws_key}
            secret: ${your_named_aws_secret_key}
            region: eu-west-1

# Usage

Using default settings aws client.

    # Bundle/Controller/Controller.php

	public function fooAction()
    {
        $aws = $this->container->get('ushios_aws_client');
    }

Using named settings. 

    # Bundle/Controller/Controller.php

	public function fooAction()
    {
        $aws = $this->container->get('ushios_aws_client_named');
    }