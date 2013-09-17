<?php
/* 
 * @category  Event Manager Module
 * @package   Wsu_eventTickets 
 * @author    Jeremy Bass <jeremy.bass@wsu.edu>
 * @license   MIT/GPL
 * @link N/A 
 */
class Wsu_eventTickets_Model_Resource_eventTickets_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * Define collection model
     */
    protected function _construct()
    {
        $this->_init('wsu_eventtickets/eventtickets');
    }

    /**
     * Prepare for displaying in list
     *
     * @param integer $page
     * @return Wsu_eventTickets_Model_Resource_eventTickets_Collection
     */
    public function prepareForList($page)
    {
        $this->setPageSize(Mage::helper('wsu_eventtickets')->geteventTicketsPerPage());
        $this->setCurPage($page)->setOrder('published_at', Varien_Data_Collection::SORT_ORDER_DESC);
        return $this;
    }
}