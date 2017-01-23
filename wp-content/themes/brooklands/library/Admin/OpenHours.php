<?php

namespace Brooklands\Admin;

class OpenHours
{

    public static $week;

    public function __construct()
    {
        self::$week = array(
            __("Monday"),
            __("Tuesday"),
            __("Wendsday"),
            __("Thursday"),
            __("Friday"),
            __("Saturday"),
            __("Sunday"),
        );
    }

    public static function getWeekSchedule()
    {
        $week =  array(
            get_field('oph_mon', 'option'),
            get_field('oph_tue', 'option'),
            get_field('oph_wed', 'option'),
            get_field('oph_thu', 'option'),
            get_field('oph_fri', 'option'),
            get_field('oph_sat', 'option'),
            get_field('oph_sun', 'option'),
        );

        return self::formatWeek($week);
    }

    public static function formatWeek($week = null, $miniWeek = true)
    {

        foreach ((array) $week as $key => $time) {
            if ($time != $week[0]) {
                $miniWeek = false;
            }
        }

        if ($miniWeek) {
            return array(
                array(self::$week[0] . " - " . self::$week[4], $week[0]),
                array(self::$week[5], $week[5]),
                array(self::$week[6], $week[6])
            );
        }

        return array(
            array(self::$week[0], $week[0]),
            array(self::$week[1], $week[1]),
            array(self::$week[2], $week[2]),
            array(self::$week[3], $week[3]),
            array(self::$week[4], $week[4]),
            array(self::$week[5], $week[5]),
            array(self::$week[6], $week[6]),
        );
    }
}
