<?php

namespace Aimeos\MShop\Media\Manager;

class Custommanager extends Standard
{
    protected function saveItem(\Aimeos\MShop\Media\Item\Iface $item, bool $fetch = true): \Aimeos\MShop\Media\Item\Iface
    {
        $id = $item->getId();
		$columns = $this->object()->getSaveAttributes();
        // info($item['media.blur_hash']);
        if ($id === null) {
            $path = 'mshop/media/manager/insert';
            $sql = $this->addSqlColumns( array_keys( $columns ), $this->getSqlConfig( $path ) );
            $context = $this->context();
            $conn = $context->db($this->getResourceName());

            $stmt = $this->getCachedStatement($conn, $path, $sql);

            $stmt->bind(14, $item->get('media.blur_hash')); // Bind the "blur_hash" variable
        }
    
        return parent::saveItem($item, $fetch);
    }
}
