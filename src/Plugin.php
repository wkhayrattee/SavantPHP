<?php
namespace SavantPHP;

/**
 * Class Plugin
 * @package SavantPHP
 */
class Plugin 
{
    /**
     * Reference to the calling Savant object.
     *
     * @access protected
     * @var Savant
     */
    protected $savant = null;

    /**
     * Constructor
     *
     * @access public
     * @param array $configuration An array of configuration keys and values for
     * this plugin.
     */
    public function __construct($configuration = null)
    {
        settype($configuration, 'array');
        foreach ($configuration as $key => $value) {
            $this->$key = $value;
        }
    }
}