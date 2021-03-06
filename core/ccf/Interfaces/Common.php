<?php

namespace CCF\Core\CCF\Interfaces;

/**
 * Common interface
 */
interface Common
{
	/**
	 * Getters and setters
	 *
	 * @param string $property
	 * @param mixed $arguments
	 * @throws Exception
	 */
	public function __call($property, $arguments);
}
