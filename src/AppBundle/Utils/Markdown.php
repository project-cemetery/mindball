<?php

namespace AppBundle\Utils;


use Parsedown;

class Markdown
{
    private $parser;

    public function __construct()
    {
        $this->parser = new Parsedown();
    }

    public function toHtml($text)
    {
        $html = $this->parser->text($text);

        return $html;
    }
}