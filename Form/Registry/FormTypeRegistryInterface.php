<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Bundle\ResourceBundle\Form\Registry;

interface FormTypeRegistryInterface
{
    /**
     * @param string $identifier
     * @param string $typeIdentifier
     * @param string $formType
     */
    public function add(string $identifier, string $typeIdentifier, string $formType);

    /**
     * @param string $identifier
     * @param string $typeIdentifier
     *
     * @return string|null
     */
    public function get(string $identifier, string $typeIdentifier);

    /**
     * @param string $identifier
     * @param string $typeIdentifier
     *
     * @return bool
     */
    public function has(string $identifier, string $typeIdentifier);
}
