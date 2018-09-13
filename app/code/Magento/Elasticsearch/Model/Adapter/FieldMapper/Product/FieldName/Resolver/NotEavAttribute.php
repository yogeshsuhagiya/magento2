<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Elasticsearch\Model\Adapter\FieldMapper\Product\FieldName\Resolver;

use Magento\Elasticsearch\Model\Adapter\FieldMapper\Product\FieldName\ResolverInterface;

/**
 * Resolver field name for not EAV attribute.
 */
class NotEavAttribute implements ResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function getFieldName($attributeCode, $context = [])
    {
        return $attributeCode;
    }
}
