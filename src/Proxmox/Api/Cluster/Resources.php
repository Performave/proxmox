<?php
/*
 * @copyright 2021 Daniel Engelschalk <hello@mrkampf.com>
 */

namespace Proxmox\Api\Cluster;

use Proxmox\Helper\PVEPathClassBase;
use Proxmox\PVE;

/**
 * Class Resources
 * @package Proxmox\Api\Cluster
 */
class Resources extends PVEPathClassBase
{
    /**
     * Resources constructor.
     * @param PVE $pve
     * @param string $parentAdditional
     */
    public function __construct(PVE $pve, string $parentAdditional)
    {
        parent::__construct($pve, $parentAdditional . 'resources/');
    }

    /**
     * Resources index (cluster wide).
     * @link https://pve.proxmox.com/pve-docs/api-viewer/#/cluster/resources
     * @params array $params
     * @return array|null
     */
    public function get($params = []): ?array
    {
        return $this->getPve()->getApi()->get($this->getPathAdditional(), $params);
    }

}