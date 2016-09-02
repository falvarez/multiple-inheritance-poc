<?php

/**
 * Copyright 2016 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\PoC;

trait CoreContent
{
    protected $id;
    protected $pubDate;
    protected $permalink;

    public function constructCoreContent($data)
    {
        $this->id = $data['id'];
        $this->pubDate = $data['pubDate'];
        $this->permalink = $data['permalink'];
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getPubDateTS()
    {
        return $this->pubDate;
    }

    /**
     * @return string
     */
    public function getPermalink()
    {
        return $this->permalink;
    }
}
