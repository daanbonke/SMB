<?php
/**
 * Copyright (c) 2012 Robin Appelman <icewind@owncloud.com>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

namespace SMB\Command;

/**
 * run a command with two path parameter
 */
abstract class Double extends Command {
	/**
	 * @var string $command
	 */
	protected $command;

	public function run($arguments) {
		$path1 = $this->escapePath($arguments['path1']);
		$path2 = $this->escapePath($arguments['path2']);
		$cmd = $this->command . ' ' . $path1 . ' ' . $path2;
		$output = $this->execute($cmd);
		return $this->parseOutput($output);
	}
}
