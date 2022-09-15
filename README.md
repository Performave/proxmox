# Deprecated

This library has been deprecated in favor of custom written logic to call Proxmox API. This is because the library was poorly designed and became hard to maintain.

# Proxmox API
This **PHP 8+** Proxmox library allows you to interact with your Proxmox PVE server and cluster in an object-oriented way.

This library is a fork of another library, and this library is actively maintained as it's being used in a real project.

[![Latest Stable Version](http://poser.pugx.org/performave/proxmox/v)](https://packagist.org/packages/performave/proxmox) [![Total Downloads](http://poser.pugx.org/performave/proxmox/downloads)](https://packagist.org/packages/performave/proxmox) [![Latest Unstable Version](http://poser.pugx.org/performave/proxmox/v/unstable)](https://packagist.org/packages/performave/proxmox) [![License](http://poser.pugx.org/performave/proxmox/license)](https://packagist.org/packages/performave/proxmox) [![PHP Version Require](http://poser.pugx.org/performave/proxmox/require/php)](https://packagist.org/packages/performave/proxmox)

> If you find any errors, typos, or errors [issue](https://github.com/performave/proxmox/issues/new). I'll try to release a hotfix

## Getting Started

Install using Composer via the command-line

```sh
$ composer require performave/proxmox
```

## Example

---
### From version 3.1

```php
<?php
// Require the autoloader
require_once 'vendor/autoload.php';

// Use the library namespace
use Proxmox\PVE;

// Then simply pass your credentials when creating the API client object.
$proxmox = new PVE("hostname", "username", "password", 8006, "pve", false);

//Read all nodes
print_r($proxmox->nodes()->get());

//Read all lxc
print_r($proxmox->nodes()->lxc()->get());

//Read all qemu
print_r($proxmox->nodes()->qemu()->get());
```

---
### For version 3.1

| WARNING: The array options is after version 3.0 no longer supported! |
| --- |

```php
<?php
// Require the autoloader
require_once 'vendor/autoload.php';

// Use the library namespace
use Proxmox\PVE;

/**
 * Connect established (For version 3.0) 
 * 
 * authType and port defaults to 'pam' and '8006' but you can specify them like so
 * 
 * !!! WARNING !!!
 * This variant is after version 3.0 no longer supported
 * 
*/
$credentials = [
    'hostname' => '127.0.0.1',
    'username' => 'root',
    'password' => 'example',
    'authType' => 'pam',
    'port' => '8006',
];

// Then simply pass your credentials when creating the API client object.
$proxmox = new PVE($credentials);

//Read all nodes
print_r($proxmox->nodes()->get());

//Read all lxc
print_r($proxmox->nodes()->lxc()->get());

//Read all qemu
print_r($proxmox->nodes()->qemu()->get());
```

[LICENSE]:./LICENSE
[PVE2 API Documentation]:http://pve.proxmox.com/pve-docs/api-viewer/index.html
[ProxmoxVE API]:http://pve.proxmox.com/wiki/Proxmox_VE_API
[Proxmox wiki]:http://pve.proxmox.com/wiki
[Composer]:https://getcomposer.org/
