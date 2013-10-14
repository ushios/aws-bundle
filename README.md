aws-bundle
==========

Create aws client using 'config.yml'.

---

# Get started!

Add to composer.json

    "ushios/aws-bundle": "1.0.*"

and run `composer update` command.

# Settings

config.yml

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

    $aws = $this->container->get('ushios_aws_client');

Using named settings. 

    $aws = $this->container->get('ushios_aws_client_named');