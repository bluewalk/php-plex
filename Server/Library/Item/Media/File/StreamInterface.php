<?php

/**
 * Plex Library Item Media stream
 *
 * @category php-plex
 * @package Plex_Server_Library
 * @subpackage Plex_Server_Library_Item
 * @author <nickbart@gmail.com> Nick Bartkowiak
 * @copyright (c) 2013 Nick Bartkowiak
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU Public Licence (GPLv3)
 * @version 0.0.2.5
 *
 * This stream is part of php-plex.
 *
 * php-plex is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * php-plex is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

/**
 * Interface that defines the structure of the stream associated with an item.
 *
 * @category php-plex
 * @package Plex_Server_Library
 * @subpackage Plex_Server_Library_Item
 * @author <nickbart@gmail.com> Nick Bartkowiak
 * @copyright (c) 2013 Nick Bartkowiak
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU Public Licence (GPLv3)
 * @version 0.0.2.5
 */

 /* Added by Bluewalk - 2014 */
interface Plex_Server_Library_Item_Media_StreamInterface
{
	/**
	 * Returns the ID of the stream.
	 *
	 * @return integer The ID of the stream.
	 */
	public function getId();

	/**
	 * Sets the ID of the stream.
	 *
	 * @param integer $id The ID of the stream.
	 *
	 * @return void
	 */
	public function setId($id);

	public function getStreamType();

	public function setStreamType($type);

	public function getLanguage();

	public function setLanguage($language);

    public function getSelected();

	public function setSelected($selected);

    public function getLanguageCode();

    public function setLanguageCode($code);
}
