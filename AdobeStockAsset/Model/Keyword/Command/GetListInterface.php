<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\AdobeStockAsset\Model\Keyword\Command;

use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\AdobeStockAssetApi\Api\Data\KeywordSearchResultsInterface;

/**
 * Find Keywords by SearchCriteria command (Service Provider Interface - SPI)
 *
 * Separate command interface to which Repository proxies initial GetList call, could be considered as SPI - Interfaces
 * that you should extend and implement to customize current behaviour, but NOT expected to be used (called) in the code
 * of business logic directly
 *
 * @see \Magento\AdobeStockAsset\Model\KeywordRepositoryInterface
 * @api
 */
interface GetListInterface
{
    /**
     * Find Keywords by given SearchCriteria
     *
     * @param SearchCriteriaInterface|null $searchCriteria
     * @return KeywordSearchResultsInterface
     */
    public function execute(SearchCriteriaInterface $searchCriteria): KeywordSearchResultsInterface;
}
