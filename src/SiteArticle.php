<?php

/**
 * Copyright 2016 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\PoC;

class SiteArticle extends CoreArticle
{
    use SiteContent;

    protected $subtitle;

    public function __construct($data)
    {
        parent::__construct($data);
        $this->constructSiteContent($data);
        $this->subtitle = $data['subtitle'];
    }

    /**
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }
}
