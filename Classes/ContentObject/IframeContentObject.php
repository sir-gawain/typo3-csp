<?php
namespace AndrasOtto\Csp\ContentObject;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
use AndrasOtto\Csp\Utility\IframeUtility;
use TYPO3\CMS\Frontend\ContentObject\AbstractContentObject;


/**
 * Contains TEXT class object.
 */
class IframeContentObject extends AbstractContentObject
{
    /**
     * Rendering the cObject, TEXT
     *
     * @param array $conf Array of TypoScript properties
     * @return string Output
     */
    public function render($conf = [])
    {
        $content = IframeUtility::generateIframeTagFromConfigArray($conf);

        return $content;
    }
}
