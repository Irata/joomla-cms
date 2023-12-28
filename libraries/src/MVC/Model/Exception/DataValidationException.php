<?php

/**
 * Joomla! Content Management System
 *
 * @copyright  (C) 2024 Open Source Matters, Inc. <https://www.joomla.org>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\CMS\MVC\Model\Exception;

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * Exception class defining a resource not found exception
 *
 * @since  __DEPLOY_VERSION__
 */
class DataValidationException extends \LogicException implements ModelExceptionInterface
{
    public function __construct(string $message = '', int $code = 0, \Throwable ...$errors)
    {
        parent::__construct($message, $code);
    }
}
