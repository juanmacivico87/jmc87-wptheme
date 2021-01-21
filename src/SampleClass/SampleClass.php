<?php
namespace PrefixSource\SampleClass;

if ( !defined( 'ABSPATH' ) )
    exit;

class SampleClass
{
    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        add_action( 'init', array( $this, 'sample_method' ) );
    }

    public function sample_method()
    {
        return;
    }
}