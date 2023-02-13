<?php
/**
 * CodeIgniter Typography Helpers
 *
 * @package        CodeIgniter
 * @subpackage     Helpers
 * @category       Helpers
 * @author         EllisLab Dev Team
 * @link           https://codeigniter.com/userguide3/helpers/typography_helper.html
 */

// ------------------------------------------------------------------------

if (!function_exists('nl2br_except_pre')) {
    /**
     * Convert newlines to HTML line breaks except within PRE tags
     *
     * @param string $str
     *
     * @return    string
     */
    function nl2br_except_pre($str)
    {
        return (new \nguyenanhung\Libraries\Typography\SimpleTypography())->nl2br_except_pre($str);
    }
}

// ------------------------------------------------------------------------

if (!function_exists('auto_typography')) {
    /**
     * Auto Typography Wrapper Function
     *
     * @param string $str
     * @param bool   $reduce_linebreaks = FALSE    whether to reduce multiple instances of double newlines to two
     *
     * @return    string
     */
    function auto_typography($str, $reduce_linebreaks = false)
    {
        return (new \nguyenanhung\Libraries\Typography\SimpleTypography())->auto_typography($str, $reduce_linebreaks);
    }
}
