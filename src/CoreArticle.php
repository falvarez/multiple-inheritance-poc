<?php

/**
 * Copyright 2016 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\PoC;

class CoreArticle
{
    use CoreContent;

    protected $summary;
    protected $body;

    public function __construct($data)
    {
        $this->constructCoreContent($data);
        $this->summary = $data['summary'];
        $this->body = $data['body'];
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }
}
