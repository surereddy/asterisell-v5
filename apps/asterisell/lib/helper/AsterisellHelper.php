<?php

/* $LICENSE 2009, 2010, 2011, 2012:
 *
 * Copyright (C) 2009, 2010, 2011, 2012 Massimo Zaniboni <massimo.zaniboni@asterisell.com>
 *
 * This file is part of Asterisell.
 *
 * Asterisell is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * Asterisell is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Asterisell. If not, see <http://www.gnu.org/licenses/>.
 * $
 */

sfLoader::loadHelpers(array('Number', 'Date', 'Url'));

/**
 * @param string $str
 * @return bool
 */
function isEmptyOrNull($str)
{
    if (is_null($str)) {
        return TRUE;
    } else {
        if (strlen($str) == 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}

/**
 * @param string|null $str
 * @return int
 */
function countLines($str) {
    if (isEmptyOrNull($str)) {
        return 0;
    } else {
      return substr_count($str, '/\n/');
    }
}

/**
 * @param string|null $str
 * @return string|null null if $str is null or it is the empty string
 */
function trimOrNull($str)
{
    if (is_null($str)) {
        return null;
    }

    $str = trim($str);

    if (strlen($str) == 0) {
        return null;
    } else {
        return $str;
    }
}

/**
 * @param string|null $str
 * @return null|string
 */
function valueOrNull($str)
{
    if (isEmptyOrNull($str)) {
        return null;
    } else {
        return $str;
    }
}

/**
 * @return string the root directory where Asterisell is installed.
 */
function getAsterisellRootDirectory()
{
    return sfConfig::get('sf_root_dir');
}

/**
 * @return bool true if this instance is an admin instance,
 * false if this is a customer instance.
 */
function isAdminInstance() {
    return (trim(basename(getAsterisellCompleteRootDirectory())) == 'admin');
}

/**
 * @return bool false for an instance showing only calls,
 *              true for instance acting like status/aggregate servers,
 *              showing the status and the calls of a group of servers.
 */
function isStatusServerInstance()
{
    return sfConfig::get('app_is_status_server_instance');
}

function isVoIPResellerInstance()
{
    return sfConfig::get('app_is_voip_reseller');
}

function getAsterisellCompleteRootDirectory()
{
    return realpath(sfConfig::get('sf_root_dir'));
}

/**
 * @return string the directory where is installed the admin version of the application.
 */
function getAsterisellCompleteAdminDirectory() {
    return dirname(getAsterisellCompleteRootDirectory()) . '/admin';
}

/**
 * @return string the directory where is installed the admin version of the application.
 */
function getAsterisellCompleteUserDirectory() {
    return dirname(getAsterisellCompleteRootDirectory()) . '/user';
}

/**
 * @param bool $isAdmin
 * @return string the directory where is installed the admin version of the application.
 */
function getAsterisellCompleteAdminOrUserDirectory($isAdmin) {
    if ($isAdmin) {
        return getAsterisellCompleteAdminDirectory();
    } else {
        return getAsterisellCompleteUserDirectory();
    }
}

function getPageURL() {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}

function getAsterisellCompleteDataFileParamsDirectory() {
    return normalizeFileNamePath(getAsterisellCompleteRootDirectory() . DIRECTORY_SEPARATOR . 'data_files' . DIRECTORY_SEPARATOR . 'params');
}

/**
 * @return string
 */
function getAsterisellCompleteLocalArchiveOfCSVFilesDirectory()
{
    return getAsterisellCompleteRootDirectory() . DIRECTORY_SEPARATOR . getInstanceConfigValue('local_archive_of_csv_files');
}

/**
 * @return string this instance code. It should be unique on a system with multiple installed instances.
 * @throws ArProblemException
 */
function getInstanceCodeName() {
    return getInstanceConfigValue('instance_code_name');
}

/**
 * @return bool TRUE if configuratiohn "safe_limit_for_concurrent_calls" is equal to "30",
 * FALSE if it is equal to "m".
 */
function isCostLimitTimeFrame30Days()
{
    if (trim(sfConfig::get('app_max_cost_limit_timeframe')) === 'm') {
        return FALSE;
    } else {
        return TRUE;
    }
}

/**
 * @return string empty in case of no recognizable version
 */
function getApplicationVersion()
{
    $l = file_get_contents(getAsterisellCompleteRootDirectory() . '/VERSION');
    if ($l === false) {
        return '';
    } else {
        return $l;
    }
}

/**
 * @return string
 */
function getConcurrentCallsSafeLimit()
{
    return sfConfig::get('app_safe_limit_for_concurrent_calls');
}

/**
 * @param string $dateStr a date formatted according the current Symfony application locale/culture
 * @return int|NULL a unix timestamp, or NULL if $dateStr is not a valid date
 */
function fromSymfonyDateToUnixTimestamp($dateStr)
{

    $context = sfContext::getInstance();

    $culture = $context->getUser()->getCulture();

    $dmy = $context->getI18N()->getDateForCulture($dateStr, $culture);

    if (is_null($dmy)) {
        return NULL;
    }

    list($d, $m, $y) = $dmy;

    if (!checkdate($m, $d, $y)) {
        return NULL;
    }

    return strtotime("$y-$m-$d 00:00");
}

/**
 * @param string $dateStr a date formatted according the current Symfony application locale/culture
 * @return int|NULL a unix timestamp, or NULL if $dateStr is not a valid date
 */
function fromSymfonyTimestampToUnixTimestamp($dateStr)
{

    $context = sfContext::getInstance();

    $culture = $context->getUser()->getCulture();

    return $context->getI18N()->getTimestampForCulture($dateStr, $culture);
}

/**
 * @param int $d a date in unix timestamp numeric format
 * @return string a date formatted according current Symfony locale/culture setting
 */
function fromUnixTimestampToSymfonyStrDate($d)
{
    return format_date($d, 's');
}

/**
 * @param int|null $d a date in unix timestamp numeric format
 * @return string|null a date formatted according current Symfony locale/culture setting
 */
function fromUnixTimestampToSymfonyStrTimestamp($d)
{
    if (is_null($d)) {
        return null;
    } else {
        return format_date($d, 's');
    }
}

/**
 * Note: there is difference between a MySQL timestamp (date + time),
 * and a date.
 *
 * @param  int $d a unix timestamp
 * @return string in Y-m-d format recognized from MySQL.
 *
 */
function fromUnixTimestampToMySQLDate($d)
{
    return date('Y-m-d', $d);
}

/**
 * Note: there is difference between a MySQL timestamp (date + time),
 * and a date.
 *
 * @param  int $d in unix timestamp
 * @return string|null a timestamp in a format recognized from MySQL.
 *
 */
function fromUnixTimestampToMySQLTimestamp($d)
{
    if (is_null($d)) {
        return null;
    } else {
        return date('Y-m-d H:i:s', $d);
    }
}

/**
 * @param string|null $d
 * @return int|null
 */
function fromMySQLTimestampToUnixTimestamp($d)
{
    if (is_null($d)) {
        return null;
    } else {
        return strtotime($d);
    }
}

/**
 * @param int $b
 * @return bool
 */
function fromMySQLBooleanToPhpBoolean($b)
{
    if (is_null($b)) {
        return FALSE;
    }

    if ($b === 1) {
        return TRUE;
    }

    if ($b) {
        return TRUE;
    } else {
        return FALSE;
    }
}

/**
 * @param int $fromDate unixtimestamp
 * @param int|null $toDate unixtimestamp
 * @param bool $completeToDate true for using now as $toDate if it is null
 * @param bool $forCustomer true for converting the message to customer language
 * @return string the timeframe in user readable format
 */
function getUserReadableTimeFrame($fromDate, $toDate, $completeToDate = true, $forCustomer = true)
{
    if (is_null($toDate) && $completeToDate == true) {
        $toDate = time();
    }

    $info1 = getdate($fromDate);
    if ($info1['seconds'] == 0 && $info1['minutes'] == 0 && $info1['hours'] == 0) {
        $isFromACompactDate = true;
    } else {
        $isFromACompactDate = false;
    }

    if (!is_null($toDate)) {
        $info1 = getdate($toDate);
        if ($info1['seconds'] == 0 && $info1['minutes'] == 0 && $info1['hours'] == 0) {
            $isToACompactDate = true;
        } else {
            $isToACompactDate = false;
        }
    } else {
        $isToACompactDate = true;
    }

    if ($isFromACompactDate && $isToACompactDate) {
        $r = mytr('from', $forCustomer)
                . ' '
                . format_invoice_timestamp_according_config($fromDate);

        if (!is_null($toDate)) {

            $r .= ' '
                    . mytr('to', $forCustomer)
                    . ' '
                    . format_invoice_timestamp_according_config(strtotime('-1 day', $toDate))
                    . ' '
                    . mytr('(inclusive)', $forCustomer);
        }
    } else {
        $r = mytr('from', $forCustomer)
                . ' '
                . format_unixtimestamp_according_config($fromDate);

        if (!is_null($toDate)) {
            $r .= ' '
                    . mytr('to', $forCustomer)
                    . ' '
                    . format_unixtimestamp_according_config($toDate)
                    . ' '
                    . mytr('(exclusive)', $forCustomer);
        }
    }

    return $r;
}


/**
 * @param int $timestamp1
 * @param int $timestamp2
 * @return int number of days between two date in timestamp format.
 */
function getDaysBetween($timestamp1, $timestamp2)
{
    $delta = $timestamp2 - $timestamp1;
    return round(($delta / 86400), 0);
}

/**
 * @param int $date
 */
function getPreviousMonth($date)
{
    $mm = date('m', $date);
    $yy = date('Y', $date);

    $mm--;
    if ($mm < 1) {
        $mm = 12;
        $yy--;
    }

    return strtotime("$yy-$mm-01 00:00:00");
}

/**
 * @param string $a
 * @param string|NULL $b
 * @param string $c
 * @return string "$a . $b . $c" if $b is not null and it is not empty
 *
 * TODO: semantic is not clear... assymetric
 */
function maybeAddIfExistsCentral($a, $b, $c)
{
    if (!is_null($b)) {
        if (strlen(trim($b)) > 0) {
            return $a . $b . $c;
        }
    }
    return "";
}

/**
 * @param string $s
 * @return int the number of lines inside the string.
 */
function number_of_lines($s)
{
    $lines = explode("\n", $s);
    $c = count($lines);

    if ($c > 0) {
        // if the last line is an empty line, then remove it from the count of lines...
        //
        $l = $lines[$c - 1];
        if (strlen(trim($l)) == 0) {
            $c = $c - 1;
        }
    }
    return $c + 1;
}

/**
 * @param string $zipCode
 * @param string $city
 * @param string $stateProvince
 * @param string $country
 * @return string
 */
function format_zip_city_address($zipCode, $city, $stateProvince, $country)
{
    $culture = getCulture();

    if ($culture === "it_IT") {
        return $zipCode . " " . $city . maybeAddIfExistsCentral(" (", $stateProvince, ")") . maybeAddIfExistsCentral(" - ", $country, "");
    } else if ($culture === "de_AT") {
        return $zipCode . " " . $city . maybeAddIfExistsCentral(" (", $stateProvince, ")") . maybeAddIfExistsCentral(" - ", $country, "");
     } else {
        return $city . "\n" . maybeAddIfExistsCentral("", $stateProvince, "\n") . $zipCode . maybeAddIfExistsCentral("\n", $country, "");
    }
}

/**
 * @return integer seconds with microsecond resolution
 */
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

/**
 * Format a date in universal format.
 * This is the format to use in debug message for the administrator.
 *
 * @param int $dateToFormat
 * @return string
 */
function format_date_for_debug_msg($dateToFormat)
{
    if (is_null($dateToFormat)) {
        $d = time();
    } else {
        $d = $dateToFormat;
    }
    $dateStr = strftime("%Y/%m/%d", $d);
    return $dateStr;
}

/**
 * Format a date in CALL REPORT in ISO/MySQL format,
 * according the parameters of the configuration file.
 *
 * @param string $dateToFormat
 * @return string
 */
function format_date_according_config($dateToFormat)
{
    $format = sfConfig::get('app_date_format');
    return date($format, strtotime($dateToFormat));
}

/**
 * Format a date in unix timestamp format,
 * according the parameters of the configuration file.
 *
 * @param int $dateToFormat
 * @return string
 */
function format_unixtimestamp_according_config($dateToFormat)
{
    $format = sfConfig::get('app_date_format');
    return date($format, $dateToFormat);
}

/**
 * Format a date for INVOCES according the parameters
 * of the configuration file.
 *
 * @param string $dateToFormat a date in DB format
 * @return string
 */
function format_invoice_date_according_config($dateToFormat)
{
    $format = sfConfig::get('app_invoice_date_format');
    return date($format, strtotime($dateToFormat));
}

/**
 * Format a date for INVOCES according the parameters
 * of the configuration file.
 *
 * @param int $dateToFormat a date in UNIX timestamp format
 * @return string
 */
function format_invoice_timestamp_according_config($dateToFormat)
{
    $format = sfConfig::get('app_invoice_date_format');
    return date($format, $dateToFormat);
}

/**
 * @param int $seconds time in seconds
 * @return string elapsed minutes and seconds
 */
function format_minute($seconds)
{
    $min = floor($seconds / 60);
    $sec = $seconds - ($min * 60);
    $hour = floor($min / 60);
    $min = $min - ($hour * 60);
    if ($hour > 0) {
        return ($hour . 'h:' . $min . 'm:' . $sec . 's');
    } else if ($min > 0) {
        return ($min . 'm:' . $sec . 's');
    } else {
        return ($sec . 's');
    }
}

/**
 * @param int $seconds time in seconds
 * @return string elapsed minutes and seconds
 */
function format_minute_or_empty($seconds)
{
    if ($seconds == 0) {
        return '';
    }

    $min = floor($seconds / 60);
    $sec = $seconds - ($min * 60);
    $hour = floor($min / 60);
    $min = $min - ($hour * 60);
    if ($hour > 0) {
        return ($hour . 'h:' . $min . 'm:' . $sec . 's');
    } else if ($min > 0) {
        return ($min . 'm:' . $sec . 's');
    } else {
        return ($sec . 's');
    }
}


/**
 * @param int $seconds
 * @return string
 */
function from_seconds_to_nice_duration($seconds)
{
    return format_minute($seconds);
}

function csv_field($val, $isFirst = false)
{
    $fieldSep = trim(sfConfig::get('app_csv_field_separator'));

    if ($isFirst) {
        $r = '';
    } else {
        $r = $fieldSep;
    }
    $r .= encode_csv_value($val);

    return $r;
}

/**
 * @param string $val a string with a PHP decimal number, not formatted into a locale
 * @param bool $isFirst
 * @return string format $val according the settings in `app.yaml`.
 */
function csv_numeric_field($val, $isFirst = false)
{
    $decimalSep = trim(sfConfig::get('app_decimal_separator_symbol_in_csv'));
    $useString = trim(sfConfig::get('app_numbers_as_strings_in_csv'));
    $fieldSep = trim(sfConfig::get('app_csv_field_separator'));

    if ($isFirst) {
        $r = "";
    } else {
        $r = $fieldSep;
    }

    $val2 = "";
    if ($decimalSep === '.') {
        $val2 = $val;
    } else {
        $val2 = str_replace(".", $decimalSep, $val);
    }

    if ($useString) {
        $r .= '"' . $val2 . '"';
    } else {
        $r .= $val2;
    }

    return $r;
}


/**
 * Similar to standard PHP function `str_getcsv`.
 * I'm not using it, because it is shipped only with PHP >= 5.3.0
 *
 * @param string $input
 * @param string $delimiter
 * @param string $enclosure
 * @param string $escape
 * @return array
 */
function csv2array($input, $delimiter = ',', $enclosure = '"', $escape = '\\')
{
    $fields = explode($enclosure . $delimiter . $enclosure, substr($input, 1, -1));
    foreach ($fields as $key => $value) {
        $fields[$key] = str_replace($escape . $enclosure, $enclosure, $value);
    }
    return ($fields);
}

/**
 * Manage correctly quotation.
 * Convert NULL values to '\N'.
 *
 * Code freely modified from http://php.net/manual/en/function.fputcsv.php
 *
 * @param resource $filePointer
 * @param array $dataArray
 * @param string $delimiter field separator
 * @param string $enclosure
 * @return bool|int
 */
function safe_fputcsv($filePointer, $dataArray, $delimiter = ',', $enclosure = '"')
{

    // Build the string
    $string = "";

    // No leading delimiter
    $writeDelimiter = FALSE;
    foreach ($dataArray as $dataElement) {
        // Adds a delimiter before each field (except the first)
        if ($writeDelimiter) $string .= $delimiter;

        $string .= encode_csv_value($dataElement, $delimiter, $enclosure);

        // Delimiters are used every time except the first.
        $writeDelimiter = TRUE;
    } // end foreach($dataArray as $dataElement)

    // Append new line
    $string .= "\n";

    // Write the string to the file
    return fwrite($filePointer, $string);
}

/**
 * Manage correctly quotation.
 * Convert NULL values to '\N'.
 *
 * @param string|null $dataElement
 * @param string $delimeter field separator
 * @param string $enclosure
 * @return string the value to insert in the CSV field, properly escaped/quoted
 */
function encode_csv_value($dataElement, $delimeter = ',', $enclosure = '"')
{

        $useEnclosure = false;
        if (is_null($dataElement)) {
            // MySQL symbol for NULL
            $dataElement = '\\N';
            $useEnclosure = false;
        } else {
            if (strpos($dataElement, $delimeter) !== FALSE || strpos($dataElement, "\n") !== FALSE) {
                $useEnclosure = true;
            }

            if (strpos($dataElement, $enclosure) !== FALSE) {
                $useEnclosure = true;

                // Replaces a double quote with two double quotes
                $dataElement = str_replace($enclosure, $enclosure . $enclosure, $dataElement);
            }
        }

        if ($useEnclosure) {
            return  $enclosure . $dataElement . $enclosure;
        } else {
            return $dataElement;
        }
}

/**
 * @param $valueS a decimal value, using the locale decimal separator
 * @return string a number with "." as decimal separator
 */
function from_local_decimal_to_php_decimal($valueS) {
    static $decimalSeparator = null;

    if (is_null($decimalSeparator)) {
        $n1 = "0.1";
        $culture = sfConfig::get('app_culture');
        $n2 = format_number($n1, $culture);

        $len = strlen($n2);
        $i = $len - 1;
        $decimalSeparator = '.';
        while ($i >= 0) {
            $d = substr($n2, $i, 1);
            if (! is_numeric($d)) {
                $decimalSeparator = $d;
            }
            $i--;
        }
    }

    return convertToArbitraryPrecisionFloat($valueS, $decimalSeparator);
}

/**
 * The max precision (decimal places) of a currency.
 * This precision is used to store data inside CDR table
 * and during computations.
 *
 * @return int
 */
function get_decimal_places_for_currency()
{
    return sfConfig::get('app_currency_decimal_places');
}

/**
 * The max precision (decimal places) of a currency in invoices.
 *
 * @return int
 */
function get_decimal_places_for_currency_in_invoices()
{
    return sfConfig::get('app_currency_decimal_places_in_invoices');
}

/**
 * @param string $value a number like "123456" where the last digits are decimal parts.
 * @return string like "EUR 123,56" with the current locale number format.
 * The format string is in HTML format.
 */
function format_from_db_decimal_to_currency_locale($value)
{
    return format_from_db_decimal_to_call_report_currency($value);
}

/**
 * @param string $value a number like "123456" where the last digits are decimal parts.
 * @return string like "EUR 123,56" with the current locale number format.
 * The format string is in HTML format.
 * The value round/truncation is done according the needs of CALL REPORT.
 */
function format_from_db_decimal_to_call_report_currency($value)
{
    $decimalValue = from_db_decimal_to_invoice_decimal($value);

    $currency = sfConfig::get('app_currency');
    $culture = sfConfig::get('app_culture');
    return format_currency($decimalValue, $currency, $culture);
}

/**
 * @param string $value a number like "123456" where the last digits are decimal parts.
 * @return string number like "12.3456" in case there 4 precision/decimal digits.
 */
function from_db_decimal_to_php_decimal($value)
{
    if (is_null($value)) {
        return "0";
    }

    $decimalPlaces = get_decimal_places_for_currency();
    $scaleFactor = bcpow(10, $decimalPlaces);
    return bcdiv($value, $scaleFactor, $decimalPlaces);
}

/**
 * Like `from_db_decimal_to_php_decimal` but eliminating
 * non necessary decimal digits. For example "19.5" instead of "19.5000"
 *
 * @param string $value
 * @return string
 */
function from_db_decimal_to_smart_php_decimal($value)
{
    $d = strval(from_db_decimal_to_php_decimal($value));

    if (strstr($d, '.') !== FALSE) {

        // remove not significative 0 on the right
        $r = '';
        $i = strlen($d);
        $insertAll = false;
        while ($i > 0) {
            $i--;
            $char = $d[$i];

            if ($insertAll) {
                $r = $char . $r;
            } else {
                if ($char == '0') {
                    // not necessary 0
                } else if ($char == '.') {
                    $insertAll = true;
                } else {
                    // first significative digit
                    $r = $char . $r;
                    $insertAll = true;
                }
            }
        }
        return $r;
    } else {
        return $d;
    }

}

/**
 * @param string $value a number like "12.3456" with an arbitrary number of precision digits.
 * @return string number like "12.35" with the "currency_decimal_places_in_invoices"
 * number of precision digits.
 */
function from_php_decimal_to_invoice_decimal($value)
{
    $l = sfConfig::get('app_currency_decimal_places_in_invoices');
    $decimalValue = round($value, $l);
    return sprintf("%." . $l . "F", $decimalValue);
}

/**
 * @param string $value a number like "12.3456" with an arbitrary number of precision digits.
 * @param int $round_precision
 * @return string number like "12.35" with the "currency_decimal_places_in_invoices"
 * number of precision digits.
 */
function from_php_decimal_to_rounded_php_decimal($value, $round_precision)
{
    $decimalValue = round($value, $round_precision);
    return sprintf("%." . $round_precision . "F", $decimalValue);
}

/**
 * @param mixed $value
 * @return string
 */
function from_php_decimal_to_pdf_txt_decimal($value)
{
    return get_currency_ascii_char() . from_php_decimal_to_invoice_decimal($value);
}

/**
 * @param string $value a number like "123456" where the last digits are decimal parts.
 * @return string php decimal value, rounded to the invoice precision digits.
 */
function from_db_decimal_to_invoice_decimal($value)
{
    $value2 = from_db_decimal_to_php_decimal($value);
    return from_php_decimal_to_invoice_decimal($value2);
}

/**
 * @param string $value a number like "123456" where the last digits are decimal parts.
 * @return string number in the same format, but rounded according invoice
 * required decimals.
 */
function round_db_decimal_according_invoice_decimal($value)
{
    $value2 = from_db_decimal_to_invoice_decimal($value);
    return convertToDbMoney($value2);
}

/**
 * @param string $value a number like "123456" where the last digits are decimal parts.
 * @param int $numberOfDecimalDigits
 * @return string number in the same format, but rounded according invoice
 * required decimals.
 */
function round_db_decimal_to_number_of_digits($value, $numberOfDecimalDigits)
{
    $value2 = from_db_decimal_to_php_decimal($value);
    $value3 = from_php_decimal_to_rounded_php_decimal($value2, $numberOfDecimalDigits);

    return convertToDbMoney($value3);
}

/**
 * @param string $value a number like "101234" where the last digits are the decimal part.
 * In this case can be a number like "10.1234" if get_decimal_places_for_currency == 4
 * @return string like "123.56" without currency simbol but
 * with the correct number of decimal places. The number is formatted according locale/culture.
 */
function from_db_decimal_to_locale_decimal($value)
{
    $culture = sfConfig::get('app_culture');
    return format_number(from_db_decimal_to_invoice_decimal($value), $culture);
}

/**
 * @param string $value a number like "101234" where the last digits are the decimal part.
 * In this case can be a number like "10.1234" if get_decimal_places_for_currency == 4
 * @return string like "123.567" without currency simbol but
 * with all the decimal digits and formatted according locale/culture.
 */
function from_db_decimal_to_locale_decimal_with_full_precision($value)
{
    $culture = sfConfig::get('app_culture');
    return format_number(from_db_decimal_to_php_decimal($value), $culture);
}

/**
 * @param int $value
 * @return string like "1256E-4" in scientific notation in order
 * to produce unanbigous numbers.
 */
function from_db_decimal_to_scientific_notation($value)
{
    if (is_null($value)) {
        return NULL;
    } else {
        $decimalPlaces = get_decimal_places_for_currency();
        return $value . 'E-' . $decimalPlaces;
    }
}

/**
 * @param int $value a VAT % with implicit get_decimal_places_for_currency() decimals.
 *
 * @return string number with the proper decimals, in the default culture format.
 */
function from_db_decimal_to_vat_perc_according_culture($value)
{
    $culture = sfConfig::get('app_culture');

    $value = from_db_decimal_to_smart_php_decimal($value);
    return format_number($value, $culture);
}

/**
 * @param string $value a monetary value without explicit decimal but with
 * implicit get_decimal_places_for_currency() decimals.
 * Sometinhg like "123456" for a number like "12.3456"  with 4
 * decimal places.
 *
 * @return string like "EUR 123,56" with EUR in text form
 * and the monetary value in the culture format.
 */
function from_db_decimal_to_monetary_txt_according_locale($value)
{
    return sfConfig::get('app_currency') . ' ' . from_db_decimal_to_locale_decimal($value);
}

/**
 * Return the ASCII char for the currency symbol.
 * @return string
 */
function get_currency_ascii_char()
{
    return getCurrencyUTF8Symbol();
}

/**
 * @param string $value a monetary value without explicit decimal but with
 * implicit get_decimal_places_for_currency() decimals.
 * Sometinhg like "123456" for a number like "12.3456"  with 4
 * decimal places.
 *
 * @return string like "$123,56" where "$" is the currency symbol.
 */
function from_db_decimal_to_pdf_txt_decimal($value)
{
    return get_currency_ascii_char() . ' ' . from_db_decimal_to_locale_decimal($value);
}

/**
 * @param string $moneyStr a money value with decimals (something like "12.345")
 * @return int with the last digits implicitely associated to the decimal part
 * according the number of decimal places specified in config/app.yml for the currency.
 */
function convertToDbMoney($moneyStr)
{
    $sourcePrecision = get_decimal_places_for_currency();
    return number_format($moneyStr, $sourcePrecision, '', '');
}

/**
 * Synonimous for `convertToDbMoney`
 * @param string $v
 * @return int
 */
function from_php_decimal_to_db_decimal($v)
{
    return convertToDbMoney($v);
}

/**
 * @param string $cost a cost like "12.345"
 * @return string an HTML representation of the cost, with the currency symbol.
 * NOTE: this function is used for representing Rate method, so it uses
 * all the precision and does not format according standard currency locales.
 * used in computations.
 */
function formatCostAccordingCurrency($cost)
{
    $currencySymbol = sfConfig::get('app_currency');
    $culture = sfConfig::get('app_culture');
    $n = format_number($cost, $culture);
    return $currencySymbol . " " . $n;
}

/**
 * @param string $numberAsString the number to convert
 * @param string $decimalSeparator the decimal separator symbol used inside $numberAsString
 * @return string|null a number represented as a String with the correct "." decimal separator symbol,
 *         null if $numberAsString is not a number.
 */
function convertToArbitraryPrecisionFloat($numberAsString, $decimalSeparator)
{
    $s1 = trim($numberAsString);
    if ($decimalSeparator != '.') {
        $s2 = str_replace($decimalSeparator, '.', $s1);
    } else {
        $s2 = $s1;
    }
    if (is_numeric($s2)) {
        return $s2;
    } else {
        return null;
    }
}

// taken from http://stackoverflow.com/questions/231057/how-to-round-ceil-floor-a-bcmath-number-in-php/231171#231171
function bcFloor($x)
{
    $result = bcmul($x, '1', 0);
    if ((bccomp($result, '0', 0) == -1) && bccomp($x, $result, 1))
        $result = bcsub($result, 1, 0);

    return $result;
}

function bcCeil($x)
{
    $floor = bcFloor($x);
    return bcadd($floor, ceil(bcsub($x, $floor)), 0);
}

function bcRound($x)
{
    $floor = bcFloor($x);
    return bcadd($floor, round(bcsub($x, $floor)), 0);
}

/**
 * @param  int $totIncome a number in db_decimal format
 * @param  float $vatPerc the vat perc in PHP decimal format
 * @return mixed[] list($totalVat, $totalWithVat) in db_decimal format, with the precision needed for invoices
 */
function invoice_amount_with_vat($totIncome, $vatPerc)
{
    $totIncome = round_db_decimal_according_invoice_decimal($totIncome);
    $totalVat1 = bcmul($totIncome, $vatPerc, 0);
    $totalVat = round_db_decimal_according_invoice_decimal(bcdiv($totalVat1, 100, 0));
    $totalWithVat = round_db_decimal_according_invoice_decimal(bcadd($totIncome, $totalVat, 0));

    return array($totalVat, $totalWithVat);
}

/**
 * Use an additional security layer for filtering user input data.
 * In theory this is not needed because Symfony uses already Creole
 * that performs this type of filtering before sending queries
 * to MySQL database.
 *
 * @param string $str
 * @return bool true if the string contains only valid characters
 */
function isValidStrForSQLQuery($str)
{
    $n = strlen($str);
    for ($i = 0; $i < $n; $i++) {
        if (!isValidCharForSQLQuery(substr($str, $i, 1))) {
            return false;
        }
    }
    return true;
}

/**
 * @param string $ch1
 * @return bool true if it is a character that can be used in passwords
 */
function isValidCharForSQLQuery($ch1)
{

    if (ctype_alpha($ch1)
        || ctype_digit($ch1)
        || $ch1 === ' '
        || $ch1 === '_'
        || $ch1 === '-'
        || $ch1 === '.'
        || $ch1 === '+')
    {
        return true;
    } else {
        return false;
    }

}

/**
 * @param string $str
 * @return bool
 */
function areAllValidCharacters($str)
{
    for ($i = 0, $j = strlen($str); $i < $j; $i++) {
        if (isValidCharForSQLQuery($str[$i]) === "") {
            return FALSE;
        }
    }
    return TRUE;
}

/**
 * A string with '\n' and other special characters, substituted with new lines.
 *
 * @param string $str
 * @return string
 */
function from_user_string_to_php_string($str)
{
    return str_replace("\\n", "\n", $str);
}

/**
 * @param string $urlPath a path to a file, reachable from the current web-server.
 * It is typically the value returned from `insert_asset _tag` function.
 *
 * @return string a path to the same file inside the file system, or null if it is not specified, or the files does not exists
 */
function uploadedImageFilePath($urlPath)
{
    if (is_null($urlPath)) {
        return null;
    }

    if (strlen(trim($urlPath)) == 0) {
        return null;
    }

    $base = sfConfig::get('app_sfMediaLibrary_upload_dir');

    $path = strstr(trim($urlPath), $base);

    $file = sfConfig::get('sf_web_dir') . '/' . $path;

    if (file_exists($file)) {
        return $file;
    } else {
        return null;
    }
}

/**
 * Convert a string like "#(hex_red)(hex_green)(hex_blue) to an array with r,g,b integer values.
 *
 * @param string $color
 * @return NULL if format is not correct
 */
function html2rgb($color)
{


    if (is_null($color)) {
        return null;
    }

    $color = trim($color);

    if (strlen($color) == 0) {
        return null;
    }

    if ($color[0] === '#')
        $color = substr($color, 1);

    if (strlen($color) == 6)
        list($r, $g, $b) = array($color[0] . $color[1],
            $color[2] . $color[3],
            $color[4] . $color[5]);
    elseif (strlen($color) == 3)
        list($r, $g, $b) = array($color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2]); else
        return null;

    $r = hexdec($r);
    $g = hexdec($g);
    $b = hexdec($b);

    return array($r, $g, $b);
}

/**
 * Test if $prefix is prefix of $number in case insensitive mode.
 *
 * @param string $prefix
 * @param string $number
 * @return bool true if $prefix is a prefix of $number, false otherwise.
 */
function isPrefixOf($prefix, $number)
{
    $prefix = trim($prefix);
    $prefixLen = strlen($prefix);

    $numberLen = strlen($number);

    if ($prefixLen > $numberLen) {
        return false;
    }

    if ($prefixLen == 0) {
        return true;
    }

    $numberPrefix = substr($number, 0, $prefixLen);

    if (substr_compare($prefix, $numberPrefix, 0, $prefixLen, TRUE) == 0) {
        return true;
    } else {
        return false;
    }
}

/**
 * Test if $suffix is suffix of $number in case insensitive mode.
 *
 * @param string $suffix
 * @param string $number
 * @return bool true if $suffix is suffix of $number, false otherwise.
 */
function isSuffixOf($suffix, $number)
{
    $suffix = trim($suffix);
    $suffixLen = strlen($suffix);

    $numberLen = strlen($number);

    if ($suffixLen > $numberLen) {
        return false;
    }

    if ($suffixLen == 0) {
        return true;
    }

    $numberSuffix = substr($number, -$suffixLen, $suffixLen);

    if (substr_compare($suffix, $numberSuffix, 0, $suffixLen, TRUE) == 0) {
        return true;
    } else {
        return false;
    }
}

/**
 * Test if $prefix is prefix of $number in case insensitive mode,
 *
 *
 * @param string $prefix
 * @param string $number
 * @param bool $useRegex
 * @return int 0 if $prefix is not a prefix of $number
 *             the lenght of $prefix + 1 in other case
 */
function isPrefixLen($prefix, $number, $useRegex = false)
{

    if (isEmptyOrNull($prefix)) {
        return 1;
        // a NULL channel is a NULL filter wich is applicable to every CDR
    }

    $prefix = trim($prefix);

    $isRegex = false;
    if ($useRegex && (strlen($prefix) > 2) && ($prefix[0] === '%' && $prefix[1] === '%')) {
        $isRegex = true;
        $prefix = substr($prefix, 2, strlen($prefix) - 2);
    }

    $prefixLen = strlen($prefix);

    if ($prefixLen == 0) {
        return 1;
        // an empty channel is a filter wich is applicable to every CDR
    }

    if ($isRegex) {
        $matches = false;
        if (preg_match($prefix, $number, $matches) > 0) {
            return strlen($matches[0]) + 1;
        } else {
            return 0;
        }
    } else {

        $numberLen = strlen($number);

        if ($prefixLen > $numberLen) {
            return 0;
        }

        $numberPrefix = substr($number, 0, $prefixLen);

        if (substr_compare($prefix, $numberPrefix, 0, $prefixLen, TRUE) == 0) {
            return $prefixLen + 1;
        } else {
            return 0;
        }
    }
}

/**
 *
 * @param mixed[] $filters
 * @param string $index
 * @return mixed|NULL  NULL if the filter is not selected. Its value otherwise.
 */
function filterValue($filters, $index)
{
    $r = NULL;
    if (isset($filters[$index])
            && (!is_null($filters[$index]))
            && (strlen(trim($filters[$index])) != 0)
            && ($filters[$index] != -1)
    ) {
        $r = $filters[$index];
    }

    return $r;
}

/**
 * @param int $fromDate
 * @param int|null $toDate
 * @return string SQL condition
 */
function getArCdrCalldateFilter($fromDate, $toDate)
{
    $r = " calldate >= \"" . fromUnixTimestampToMySQLTimestamp($fromDate) . "\"";

    if (!is_null($toDate)) {
        $r .= " AND calldate < \"" . fromUnixTimestampToMySQLTimestamp($toDate) . "\" ";
    }

    return $r;
}

/**
 * @return int unix-timestamp of the max/last ArCdr Call Date
 * NOTE: for sure this is a fast query that does not scan the table
 */
function getMaxCdrCallDate()
{
    $connection = Propel::getConnection();
    $stm = $connection->prepare('SELECT calldate FROM ar_cdr FORCE INDEX (ar_cdr_calldate_index) ORDER BY calldate DESC LIMIT 1');
    $stm->execute();
    while ($rs = $stm->fetchColumn()) {
        return strtotime($rs[0]);
    }

    // no CDRs
    return 0;
}

/**
 * A link to a viewer/editor of a OrganizationUnit, in a certain point in time.
 *
 * @param integer $id point to a ar_organization_unit.id
 * @param int|NULL $date wich version in time link, NULL for no time link (current time)
 * @param string $content a string to show inside the link
 * @param bool $performHtmlEntities true for executing `htmlentities` on $content
 * @return string with the link
 *
 * TODO: move to a better location
 */
function linkToOrganizationUnitViewer($id, $date, $content, $performHtmlEntities = true)
{
    $r = 'organization_full_view/view?id=' . $id;
    if (!is_null($date)) {
        $r .= '&date=' . $date;
    }

    if ($performHtmlEntities) {
        $content2 = htmlspecialchars($content, ENT_QUOTES, 'UTF-8');
    } else {
        $content2 = $content;
    }

    return '<a href="' . url_for($r) . '">' . $content2 . '</a>';
}

function myAppend($str1, $str2)
{
    $r = $str1;
    if (is_null($r)) {
        $r = "";
    }

    if (is_null($str2)) {
        return $r;
    } else {
        return $r . $str2;
    }
}


/**
 * @param string $key
 * @return mixed the value associated to the $key
 * @throws ArProblemException
 */
function getInstanceConfigValue($key)
{
    $value = sfConfig::get('app_' . $key);

    if (!is_null($value)) {
        if (is_string($value)) {
          return trim($value);
        } else {
            return $value;
        }
    } else {
        $file = '"apps/asterisell/config/app.yml"';
        $problemDuplicationKey = "exception on app config data $key - " . time();
        $problemDescription = 'Unknown parameter "' . $key . '" in file ' . $file;
        $problemProposedSolution = "This is an error in the code, or in the configuration file. If the error persist contact the assistance.";
        $problemEffect = 'Job execution can not continue';
        $p = ArProblemException::createWithoutGarbageCollection(
            ArProblemType::TYPE_CRITICAL,
            ArProblemDomain::CONFIGURATIONS,
            null,
            $problemDuplicationKey, $problemDescription, $problemEffect, $problemProposedSolution
        );
        throw($p);
    }
}

/**
 * @param string[] $keys
 * @return mixed the value associated to the $key
 * @throws ArProblemException
 */
function getInstanceConfigValueFromKeys($keys)
{

    // generate a key like "key1_key2_key3"
    $key = '';
    $isFirst = true;
    foreach($keys as $k) {
        if ($isFirst) {
            $isFirst = false;
        } else {
            $key .= '_';
        }
        $key .= $k;
    }

    return getInstanceConfigValue($key);
}

/**
 * @param string $connectionName a name of "connection" entry in app.yml
 * @return array|null null if no params exists, list(host, user, password, port) otherwise
 */
function getConnectionParams($connectionName) {

    // Read configuration settings from app.yml

    $conf_host = null;
    $conf_user = null;
    $conf_password = null;
    $conf_port = null;

    $i = 0;
    $result = null;
    while (true) {
        $connectionIndex = "app_connections_$i";
        $i++;

        if (sfConfig::has($connectionIndex)) {
            $conf = sfConfig::get($connectionIndex);
            if (trim($conf['name']) == $connectionName) {
                $foundConnection = true;
                $result = array(trim($conf['host']), trim($conf['user']), trim($conf['password']), trim($conf['port']));
                break;
            }
        } else {
            break;
        }
    }

    return $result;
}

/**
 * @return bool false for disabling the call of external hosts
 */
function getContactExternalHosts()
{
    $r = getInstanceConfigValue('contact_external_hosts');
    if (!$r) {
        $problemDuplicationKey = 'contact_external_hosts disabled';
        $problemDescription = '"contact_external_hosts" disabled in "instance.yml".';
        $problemProposedSolution = "This option must be enabled in production, and disabled in testing environment.";
        $problemEffect = 'Jobs requiring connections to remote hosts are not executed.';
        ArProblemException::createWithoutGarbageCollection(
            ArProblemType::TYPE_INFO,
            ArProblemDomain::APPLICATION,
            null,
            $problemDuplicationKey, $problemDescription, $problemEffect, $problemProposedSolution);
    }
    return $r;
}

/**
 * @param string $fileName
 * @return int -1 if the file can not be read
 */
function countLinesInAFileUsingLowMemory($fileName)
{
    $lines = 0;
    $handle = fopen($fileName, "r");

    if ($handle === FALSE) {
        return -1;
    }

    while (!feof($handle)) {
        $line = fgets($handle, 4096);
        $lines = $lines + substr_count($line, PHP_EOL);
    }

    fclose($handle);

    return $lines;
}

/**
 * Add a value to an array, considering as 0 the initial value.
 *
 * @param array $arr
 * @param mixed $key
 * @param mixed $value
 */
function addToStatsArray(&$arr, $key, $value)
{
    if (!array_key_exists($key, $arr)) {
        $arr[$key] = 0;
    }
    $arr[$key] += $value;
}

/**
 * @param array $arr
 * @param mixed $key
 * @return int
 */
function getFromStats(&$arr, $key)
{
    if (array_key_exists($key, $arr)) {
        return $arr[$key];
    } else {
        return 0;
    }
}

/**
 * @param int $good
 * @param int $total
 * @return int
 */
function getStatsPerc($good, $total)
{
    if ($total > 0) {
        return intval($good * 100 / $total);
    } else {
        return 100;
    }
}

/**
 * Add a value to an array, considering as 0 the initial value.
 *
 * @param array $arr
 * @param mixed $key
 * @param mixed $value
 */
function appendStringToGroupArray(&$arr, $key, $value)
{
    if (!array_key_exists($key, $arr)) {
        $arr[$key] = '';
    }
    $arr[$key] .= $value;
}

/**
 * An index useful for signaling the dimension of the CDRs.
 *
 * @param int $nr
 * @return float a number representing the logaritmic increment, rounded
 */
function getCDRKeyUsingLogIncrement($nr)
{
    $l = log10($nr);
    return floor($l);
}

/**
 * @param string $tableName
 * @param PropelPDO $conn
 * @param string $condition
 * @param array|null $params
 * @return int nr of records in the table
 */
function getNrOfRecordsInTable($tableName, PropelPDO $conn, $condition = 'TRUE', $params = null)
{
    if (is_null($params)) {
        $params = array();
    }

    $stm = $conn->prepare("SELECT COUNT(1) FROM $tableName WHERE $condition;");
    $stm->execute($params);

    $r = 0;
    while ((($rs = $stm->fetch(PDO::FETCH_NUM)) !== false)) {
        $r = intval($rs[0]);
    }
    $stm->closeCursor();

    return intval($r);
}

/**
 * To use, instead of `assert(condition)`.
 * @param bool $cond
 * @param string $msg
 * @throws ArProblemException
 */
function assertCondition($cond, $msg)
{
    if (!$cond) {
        $p = ArProblemException::createWithoutGarbageCollection(
            ArProblemType::TYPE_ERROR,
            ArProblemDomain::APPLICATION,
            null,
                'assertCondition - ' . time(),
                'Unexpected condition: ' . $msg,
            'The job is interrupted.',
            'This in an error in the code, specification or data. Contact the assistance. ');
        throw($p);
    }
}


/**
 * Convert the setting
 *
 * > currency
 *
 * in `app.yml`, to a character to use inside PDF reports.
 *
 * @return string
 * @throws ArProblemException
 */
function getCurrencyUTF8Symbol()
{
    $currency = trim(sfConfig::get('app_currency'));

    if ($currency == 'USD') {
        return '$';
    } else if ($currency == 'AUD') {
        return '$';
    } else if ($currency == 'EUR') {
        return "\xE2\x82\xAC";
    } else if ($currency == 'GBP') {
        return "\xC2\xA3";
    } else if ($currency == 'RUB') {
        // TODO this does not work return "\xE2\x82\xBD";
        return "RUB";
    } else {
        $p = ArProblemException::createWithoutGarbageCollection(
            ArProblemType::TYPE_ERROR,
            ArProblemDomain::APPLICATION,
            null,
            'getCurrencyUTF8Symbol',
            "The function 'getCurrencyUTF8Symbol' defined in 'apps/asterisell/lib/helper/AsterisellHelper.php', does not contain a definition for the currency symbol '$currency' defined in file 'apps/asterisell/config/app.yml' in option 'currency'",
            'The application is interrupted.',
            'This in an error in the settings of the applications. Complete the code of the function, or contact the assistance.');
        throw($p);

    }
}

function getCulture()
{
    return trim(sfConfig::get('app_culture'));
}

/**
 * @param string $legalCountry
 * @param string $legalStateProvince
 * @param string $legalCity
 * @param string $legalAddress
 * @param string $legalZipcode
 * @param $vat
 * @return string
 */
function getCustomerAddressAccordingCulture(
    $legalCountry,
    $legalStateProvince,
    $legalCity,
    $legalAddress,
    $legalZipcode,
    $vat)
{

    $culture = getCulture();
    if ($culture == 'it_IT') {
        return $legalAddress
        . "\n" . format_zip_city_address($legalZipcode, $legalCity, $legalStateProvince, $legalCountry)
        . "\n" . mytr("VAT:", true) . $vat;
    } else if ($culture == 'de_AT') {
        $r = $legalAddress
        . "\n" . format_zip_city_address($legalZipcode, $legalCity, $legalStateProvince, $legalCountry);
        if (!isEmptyOrNull($vat)) {
          $r .= "\n" . "UID: " . $vat;
        }
        return $r;
     } else {
        return $legalAddress
        . "\n" . format_zip_city_address($legalZipcode, $legalCity, $legalStateProvince, $legalCountry)
        . "\n" . mytr("VAT:", true) . $vat;
    }
}

/**
 * @param int $time unix timestamp
 * @return int unix timestamp with 00:00:00 time
 */
function startWith00Timestamp($time)
{
    $mm = date('m', $time);
    $yy = date('Y', $time);
    $dd = date('d', $time);

    return strtotime("$yy-$mm-$dd 00:00:00");
}

/**
 * @param int $time unix timestamp
 * @return int unix timestamp with 00:00:00 time, and the first day of the month
 */
function startWith01DayAnd00Timestamp($time)
{
    $mm = date('m', $time);
    $yy = date('Y', $time);

    return strtotime("$yy-$mm-01 00:00:00");
}

/**
 * @param string $telephoneNumber in the format required from expandTelephoneNumber
 * @param string $description
 * @return array list($addedPrefix, $exactDigits)
 * @throws ArProblemException
 */
function addSpecialTelephoneNumberToTelephonePrefixTable($telephoneNumber, $description)
{

    list($internalPrefix, $exactDigits) = expandTelephoneNumber($telephoneNumber);

    $internalPrefix = RateCalls::SPECIAL_TELEPHONE_NUMBER_PREFIX . $internalPrefix;

    if (!is_null($exactDigits)) {
        $exactDigits += strlen(RateCalls::SPECIAL_TELEPHONE_NUMBER_PREFIX);
    }

    // Add/update telephone operators to the shared telephone prefix table.
    $arOperator = ArTelephonePrefixPeer::retrieveByPrefix($internalPrefix);
    if (is_null($arOperator)) {
        $arOperator = new ArTelephonePrefix();
    }

    $arOperator->setPrefix($internalPrefix);
    $arOperator->setName('');
    $arOperator->setGeographicLocation($description);
    $arOperator->setOperatorType(mytr("Special Telephone Number"));
    $arOperator->setMatchOnlyNumbersWithNDigits($exactDigits);
    $arOperator->setNeverMaskNumber(true);
    $arOperator->save();

    return array($internalPrefix, $exactDigits);
}

/**
 * @return string
 */
function getCommonReportWorkflowUserHelp()
{
    return <<<'MARKDOWN'

## Reports Creation Workflow

The usual workflow is:

* create a report template,
* test it,
* create a report scheduler, linked to the report template,
* set the first date from which generate the new reports on the report template,
* use the "Generate" button or report scheduler, for starting the report generation,
* from this date, new reports will be automatically generated, without the need of any manual intervention

Each run of a report scheduler, generate a report-set, that is a set of related reports. The administrator can administer Report Set, applying common operations on the whole set.

Reports usually must be reviewed and confirmed from administrator, before being visible to end users. If the calls associated to the reports are changed, the administrator is advised.

Every error in sending a report by email (when configured) is signaled from the application, until the problem is fixed.

## Single Reports

A report can also be generated manually, without using a Report Scheduler.

## Reports Permissions and Notifications

The administrator can view all reports.

Users can view only reports for which they have the right permissions.

Users and administrators are notified in the call report (on-line), and by email, only for reports for which they are directly responsible.

Scheduled Reports can be generated in a "to review" mode. In this case the administrator is advised that there are reports to review. Then the administrator can check the reports, and if they are all ok, he can confirm the reports. Only in this case the reports are visible to users, and they can be sent to email.

Scheduled Reports can be generated directly as "reviewed", and sent immediately.

Reports permissions, and allowed users, are calculated only when the administrator run the "Confirm Reports" action. If an administrator change later the user permissions, old assigned reports remain visible to users. So the administrator must run again the "Confirm Reports" actions for updating the visible reports. Reports will be visible to new users, and not visible to users with different permissions.

## Organization Hierarchy and Report Generation

Reports can be generated also for every parts of a complex organization hierarchy.

This feature is overkill for the case of simple customers, and it has more sense in case of call reporting inside big organizations.

## Organization Hierarchy and User Permissions

If there is an organization hierarchy like A/B/C/D, and there is an User U, with role "responsible", for organization B, then U can view all the calls of B, B/C, and B/C/D.

"U" receives only the reports associated exactly to B, and not reports associated to B/C, and B/C/D. This in order to reduce the number of reports sent to the the user U. In any case a report on B, can contain info on B/C and B/C/D.

## Report Schedule and Range

Reports can be generated on all the calls of a year/month/custom time-frame.

The first date of generation of a report, influences all next run of a report.

If you change the date of last report generation, then next reports will be scheduled according the new settings.

After configuring a report scheduler, you must always run the scheduler one time, in order to activate it, and test it.

After the first run of a report scheduler, next reports will be generated automatically.

## Generation of Legal Documents Consecutive Numbers

Legal documents use consecutive numbers, according the last generated legal document.

If there are not legal documents in the system, the first used number is 1, and not the number on the document template.

For specifying an initial legal number different from 1, or for starting the generation of documents with a new non consecutive legal number, you had to:

* create a fake legal document of type "Placeholder for Invoice Numeration"
* set the "Billing Document" flag
* set the legal number with the previous number you want to use on new (real) generated legal documents
* set the "legal date" equals to the date of new invoices to generate, so it will be used as last reference number
* leave blank all other params (also the reference date), because they are not used (the document is a "fake")
* save

MARKDOWN;

}

/**
 * @param string $fileNamePath
 * @return string a file path without double "//"
 */
function normalizeFileNamePath($fileNamePath)
{
    $l = strlen($fileNamePath);
    $s = str_replace('//', '/', $fileNamePath);
    if (strlen($s) !== $l) {
        return normalizeFileNamePath($s);
    } else {
        return $s;
    }
}

/**
 * @return string a unique time prefix ordered by seconds and microseconds,
 * and a random number later for making sure it is unique.
 */
function get_ordered_timeprefix_with_unique_id() {
    $time = microtime(false);

    $p = strpos($time, ' ');
    $time1 = substr($time, 0, $p);
    $time2 = substr($time, $p + 1);

    $time1 = str_replace('.', '', $time1);

    return 't_' . $time2 . "-" . $time1 . '-' . rand(0, 5000000);
}

/**
 * This function must be called every time some job of the administrator must generate some string to convert for a document to send to one of its customers.
 * - user interface parts must call "__(...)" function
 * - for admin the calls to "__(...)" are not converted, and this is managed from the Asterisell framework, with a trick during processing of message document
 * - for the customer/user, the calls to "__(...)" are converted to the locale
 * - documents sent to the customer, and generated by the admin, must be generated calling "mytr(...)" function, so they are converted to the locale of customer.
 *   The corresponding translation must be prefixed by "__" in the i18n file.
 * @param string $str
 * @param bool $forCustomer true for converting the language to customer language
 * @return stringd
 */
function mytr($str, $forCustomer = true) {
    static $isEnglishLanguage = null;

    if (is_null($isEnglishLanguage)) {
        $culture = getCulture();
        if (isPrefixOf('en', $culture)) {
            $isEnglishLanguage = true;
        }  else {
            $isEnglishLanguage =  false;
        }
    }

    if ($forCustomer) {
        if ($isEnglishLanguage) {
          return $str;
        } else {
          $r = __('__' . $str);
          if (isPrefixOf('__', $r) && (!isPrefixOf('____', $r))) {
              // in this case there is no conversion and return the original string
              return $str;
          } else {
              return $r;
          }
        }
    } else {
        return $str;
    }
}

/**
 * @param bool $useAdminInstance
 * @return mixed[] list(database name, user, password)
 */
function getDatabaseNameUserAndPassword($useAdminInstance = true)
{
    if ($useAdminInstance) {
        $baseConf = getAsterisellCompleteAdminDirectory();
    } else {
        $baseConf = getAsterisellCompleteUserDirectory();
    }

    $value = sfYaml::load($baseConf . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'databases.yml');

    $r = $value['all']['propel']['param'];

    return array($r['database'], $r['username'], $r['password']);
}
