<?php
class Wsu_eventTickets_Model_Resource_eventTickets extends Mage_Core_Model_Resource_Db_Abstract {
    /**
     * Initialize connection and define main table and primary key
     */
    protected function _construct() {
        $this->_init('wsu_eventtickets/eventtickets', 'eventtickets_id');
    }
}
