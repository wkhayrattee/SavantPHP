<?php
namespace SavantPHP;

/**
 * Class Filter
 * @package SavantPHP
 */
abstract class Filter
{
    /**
     * Optional reference to the calling Savant object.
     *
     * @access protected
     * @var object
     */
    protected $Savant = null;

    /**
     * Constructor.
     *
     * @access public
     * @param array $configuration An array of configuration keys and values for
     * this filter.
     */
    public function __construct($configuration = null)
    {
        settype($configuration, 'array');
        foreach ($configuration as $key => $value) {
            $this->$key = $value;
        }
    }

    /**
     * Stub method for extended behaviors.
     *
     * @access public
     * @param string $text The text buffer to filter.
     * @return string The text buffer after it has been filtered.
     */
    public static function filter($text)
    {
        return $text;
    }
}