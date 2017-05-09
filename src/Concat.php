<?php 
/**
 * This file is part of Affinity4\Concat.
 *
 * (c) 2017 Luke Watts <luke@affinity4.ie>
 *
 * This software is licensed under the MIT license. For the
 * full copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 */
namespace Affinity4\Concat;

/**
 * Concat Class
 *
 * @author Luke Watts <luke@affinity4.ie>
 * @since  1.0.0
 *
 * @package Affinity4\Concat
 */
class Concat
{
	/**
     * @author Luke Watts <luke@affinity4.ie>
     * @since  1.0.0
     *
     * @var    array Source files to be concatenated
     */
	private $sources = [];

	/**
     * Adds a file to the array of source file.
     *
     * @author Luke Watts <luke@affinity4.ie>
     * @since  1.0.0
     *
     * @param  string $source
     */
	public function setFileSource($source)
	{
		if (!is_string($source)) throw new \InvalidArgumentException(sprintf('Value of $source given to Affinity4\Concat\Concat::setFileSource must be a string. Type of %s given.', gettype($source)));

		$this->sources[] = $source;
	}

	/**
     * Merges a new array of files with the existing array of source file.
     *
     * @author Luke Watts <luke@affinity4.ie>
     * @since  1.0.0
     *
     * @param  array $sources
     */
	public function setFileSources($sources)
	{
		if (!is_array($sources)) throw new \InvalidArgumentException(sprintf('Value of $sources given to Affinity4\Concat\Concat::setFileSources must be an array. Type of %s given.', gettype($source)));

		$this->sources = $this->sources + $sources;
	}

	/**
     * Returns the array of source file paths.
     *
     * @author Luke Watts <luke@affinity4.ie>
     * @since  1.0.0
     *
     * @return array Array of source files paths
     */
	public function getFileSources()
	{
		return $this->sources;
	}
}