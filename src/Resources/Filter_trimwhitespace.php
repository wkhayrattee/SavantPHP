<?php
namespace SavantPHP\Resources;

use SavantPHP\Filter;
/**
 * Filter to remove extra white space within the text.
 *
 * Class Filter_trimwhitespace
 * @package SavantPHP\Resources
 */
class Filter_trimwhitespace extends Filter
{
    /**
     * Removes extra white space within the text.
     *
     * Trim leading white space and blank lines from template source
     * after it gets interpreted, cleaning up code and saving bandwidth.
     * Does not affect <pre></pre>, <script></script>, or
     * <textarea></textarea> blocks.
     *
     * @access public
     * @param string $buffer The source text to be filtered.
     * @return string The filtered text.
     */
    public static function filter($buffer)
    {
        // Pull out the script blocks
        preg_match_all("!<script[^>]+>.*?</script>!is", $buffer, $match);
        $script_blocks = $match[0];
        $buffer = preg_replace(
            "!<script[^>]+>.*?</script>!is",
            '@@@SAVANT:TRIM:SCRIPT@@@',
            $buffer
        );

        // Pull out the pre blocks
        preg_match_all("!<pre[^>]*>.*?</pre>!is", $buffer, $match);
        $pre_blocks = $match[0];
        $buffer = preg_replace(
            "!<pre[^>]*>.*?</pre>!is",
            '@@@SAVANT:TRIM:PRE@@@',
            $buffer
        );

        // Pull out the textarea blocks
        preg_match_all("!<textarea[^>]+>.*?</textarea>!is", $buffer, $match);
        $textarea_blocks = $match[0];
        $buffer = preg_replace(
            "!<textarea[^>]+>.*?</textarea>!is",
            '@@@SAVANT:TRIM:TEXTAREA@@@',
            $buffer
        );

        // remove all leading spaces, tabs and carriage returns NOT
        // preceeded by a php close tag.
        $buffer = trim(preg_replace('/((?<!\?>)\n)[\s]+/m', '\1', $buffer));

        // replace script blocks
        self::replace(
            "@@@SAVANT:TRIM:SCRIPT@@@",
            $script_blocks,
            $buffer
        );

        // replace pre blocks
        self::replace(
            "@@@SAVANT:TRIM:PRE@@@",
            $pre_blocks,
            $buffer
        );

        // replace textarea blocks
        self::replace(
            "@@@SAVANT:TRIM:TEXTAREA@@@",
            $textarea_blocks,
            $buffer
        );
        return $buffer;
    }


    /**
     * Does a simple search-and-replace on the source text.
     *
     * @param $search
     * @param $replace
     * @param $buffer
     */
    protected static function replace($search, $replace, &$buffer)
    {
        $len = strlen($search);
        $pos = 0;
        $count = count($replace);

        for ($i = 0; $i < $count; $i++) {
            // does the search-string exist in the buffer?
            $pos = strpos($buffer, $search, $pos);
            if ($pos !== false) {
                // replace the search-string
                $buffer = substr_replace($buffer, $replace[$i], $pos, $len);
            } else {
                break;
            }
        }
    }
}