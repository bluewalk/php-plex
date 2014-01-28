<?php

/**
 * Plex Library Item Media File
 *
 * @category php-plex
 * @package Plex_Server_Library_Item
 * @subpackage Plex_Server_Library_Item_Media
 * @author <nickbart@gmail.com> Nick Bartkowiak
 * @copyright (c) 2013 Nick Bartkowiak
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU Public Licence (GPLv3)
 * @version 0.0.2.5
 *
 * This file is part of php-plex.
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
 * Class that represents a file associated with a media item.
 *
 * @category php-plex
 * @package Plex_Server_Library_Item
 * @subpackage Plex_Server_Library_Item_Media
 * @author <nickbart@gmail.com> Nick Bartkowiak
 * @copyright (c) 2013 Nick Bartkowiak
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU Public Licence (GPLv3)
 * @version 0.0.2.5
 */

  /* Added by Bluewalk - 2014 */
class Plex_Server_Library_Item_Media_Stream
	implements Plex_Server_Library_Item_Media_StreamInterface
{
	/**
	 * The ID of the file.
	 * @var integer
	 */
	private $id;

    private $streamtype;

    private $language;

    private $selected;

    private $languagecode;

	/**
	 * Sets an array of file info to their corresponding class members.
	 *
	 * @param array $rawFile An array of the raw file info returned from the
	 * Plex HTTP API.
	 *
	 * @uses Plex_Server_Library_Item_Media_File::setId()
	 * @uses Plex_Server_Library_Item_Media_File::setKey()
	 * @uses Plex_Server_Library_Item_Media_File::setDuration()
	 * @uses Plex_Server_Library_Item_Media_File::setFile()
	 * @uses Plex_Server_Library_Item_Media_File::setSize()
	 * @uses Plex_Server_Library_Item_Media_File::setContainer()
	 *
	 * @return void
	 */
	public function __construct($rawFile)
	{
		if (isset($rawFile['id'])) {
			$this->setId($rawFile['id']);
		}
		if (isset($rawFile['streamType'])) {
			$this->setStreamType($rawFile['streamType']);
		}
		if (isset($rawFile['language'])) {
			$this->setLanguage($rawFile['language']);
		}
		if (isset($rawFile['selected'])) {
			$this->setSelected($rawFile['selected']);
		}
		if (isset($rawFile['languageCode'])) {
			$this->setLanguageCode($rawFile['languageCode']);
		}
	}

	/**
	 * Returns the ID of the file.
	 *
	 * @uses Plex_Server_Library_Item_Media_File::$id
	 *
	 * @return integer The ID of the file.
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Sets the ID of the file.
	 *
	 * @uses Plex_Server_Library_Item_Media_File::$id
	 *
	 * @param integer $id The ID of the file.
	 *
	 * @return void
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	public function getStreamType()
    {
        return $this->streamtype;
    }

	public function setStreamType($type)
    {
        $this->streamtype = $type;
    }

	public function getLanguage()
    {
        return $this->language;
    }

	public function setLanguage($language)
    {
        $this->language = $language;
    }

    public function getSelected()
    {
        return $this->selected;
    }

	public function setSelected($selected)
    {
        $this->selected = $selected;
    }

    public function getLanguageCode()
    {
        $this->languagecode;
    }

    public function setLanguageCode($code)
    {
        $this->languagecode = $code;
    }
}
