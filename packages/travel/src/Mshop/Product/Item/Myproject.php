<?php

namespace Aimeos\MShop\Product\Item;

use \Aimeos\MShop\Common\Item\Config;
use \Aimeos\MShop\Common\Item\ListsRef;
use \Aimeos\MShop\Common\Item\PropertyRef;


class Myproject extends Standard
{
    private $myvalues;
	// use Config\Traits, ListsRef\Traits, PropertyRef\Traits {
	// 	PropertyRef\Traits::__clone as __cloneProperty;
	// 	ListsRef\Traits::__clone insteadof PropertyRef\Traits;
	// 	ListsRef\Traits::__clone as __cloneList;
	// 	ListsRef\Traits::getName as getNameList;
	// }

	// private string $date;
    // public function __construct( array $values, ... )
    // {
    //     parent::__construct( $values, ... )
    //     $this->myvalues = $values;
    // }
    // public function __construct(
    //     array $values = [],
    //     array $listItems = [],
    //     array $refItems = [],
    //     array $propItems = []
    // ) {
    //     parent::__construct('product.', $values);

    //     $this->date = $values['.date'] ?? date('Y-m-d H:i:s');
    //     $this->initListItems($listItems, $refItems);
    //     $this->initPropertyItems($propItems);
    // }

    public function getMyId(): string
    {
        if (isset($this->myvalues['myid'])) {
            return (string) $this->myvalues['myid'];
        }
        return '';
    }

    // public function setMyId(?string $val): \Aimeos\MShop\Common\Item\Iface
    // {
    //     if ((string) $val !== $this->getMyId()) {
    //         $this->values['myid'] = (string) $myid;
    //         $this->setModified();
    //     }
    //     return $this;
    // }

    // public function fromArray(array &$list, bool $private = false): \Aimeos\MShop\Common\Item\Iface
    // {
    //     $unknown = [];
    //     $item = parent::fromArray($list, $private);

    //     foreach ($list as $key => $value) {
    //         switch ($key) {
    //             case 'myid':
    //                 $item = $item->setMyId($value);
    //                 break;
    //             default:
    //                 continue 2;
    //         }
    //         unset($list[$key]);
    //     }

    //     return $item;
    // }

    // public function toArray(bool $private = false): array
    // {
    //     $list = parent::toArray($private);

    //     if ($private === true) {
    //         $list['myid'] = $this->getMyId();
    //     }

    //     return $list;
    // }
}
