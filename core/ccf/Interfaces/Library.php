<?php

namespace CCF\Core\CCF\Interfaces;

/**
 * Library interface
 */
interface Library extends Common
{
	/**
	 * Set application instance
	 * @param App $app
	 * @return Library
	 */
	public function setApp(App $app);
}
