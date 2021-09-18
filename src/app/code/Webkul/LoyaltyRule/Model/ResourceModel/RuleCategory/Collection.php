<?php
/**
 * Webkul Software.
 *
 * PHP version 7.0+
 *
 * @category  Webkul
 * @package   Webkul_LoyaltyRule
 * @author    Webkul <support@webkul.com>
 * @copyright Webkul Software Private Limited (https://webkul.com)
 * @license   https://store.webkul.com/license.html ASL Licence
 * @link      https://store.webkul.com/license.html
 */

namespace Webkul\LoyaltyRule\Model\ResourceModel\RuleCategory;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = "id";

    /**
     * Initialization here
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \Webkul\LoyaltyRule\Model\RuleCategory::class,
            \Webkul\LoyaltyRule\Model\ResourceModel\RuleCategory::class
        );
        $this->_map["fields"]["id"] = "main_table.id";
    }

    /**
     * Set Pos Category Data
     *
     * @param string $condition
     * @param string $attributeData
     *
     * @return $this
     */
    public function setPosCategoryData($condition, $attributeData)
    {
        return $this->getConnection()->update(
            $this->getTable("loyalty_rule_assigned_category"),
            $attributeData,
            $where = $condition
        );
    }
}
