<?php

/* 
 * Copyright (C) 2017 Pascal Koch <info@pascalkoch.net>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

    require "../vendor/autoload.php";

    $xml = '<?xml version="1.0" encoding="UTF-8" ?>
        <export>
            <data>
		<data1>Telephone</data1>
		<data2>220</data2>
            </data>
            <data>
		<data1>Tele</data1>
		<data2>20</data2>
            </data>
            <data>
		<data1>Yep</data1>
		<data2>120</data2>
            </data>
            <data>
		<data1>Frigo</data1>
		<data2>20</data2>
            </data>
            <data>
		<data1>DVD</data1>
		<data2>89</data2>
            </data>
            <data>
		<data1>Camescope</data1>
		<data2>35</data2>
            </data>
    </export>';

    //parse xml 2 object
    $object= \Xml2Object\Xml2Object::getObjectXml($xml);
    new \Ospinto\dBug($object);