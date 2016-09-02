<?php

/**
 * Copyright 2016 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\PoC;

trait SiteContent
{
    protected $site;

    public function constructSiteContent($data)
    {
        $this->site = $data['site'];
    }

    /**
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }
}
