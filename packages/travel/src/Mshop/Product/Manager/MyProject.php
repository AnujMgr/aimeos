<?php

namespace Aimeos\MShop\Product\Manager;

class Myproject extends Standard
{
    private $searchConfig = [
        'product.myvalue' => [
            'code' => 'product.myvalue',
            'internalcode' => 'mpro."myval"',
            'label' => 'Product MyValue',
            'type' => 'string', // integer, float, etc.
            'internaltype' => \Aimeos\Base\DB\Statement\Base::PARAM_STR, // _INT, _FLOAT, etc.
        ],
    ];

    protected function saveItem( \Aimeos\MShop\Product\Item\Iface $item, bool $fetch = true ) : \Aimeos\MShop\Product\Item\Iface
	{
		if( !$item->isModified() )
		{
			$item = $this->savePropertyItems( $item, 'product', $fetch );
			return $this->saveListItems( $item, 'product', $fetch );
		}

		$context = $this->context();
		$conn = $context->db( $this->getResourceName() );

		$id = $item->getId();
		$date = date( 'Y-m-d H:i:s' );
		$columns = $this->object()->getSaveAttributes();

		if( $id === null )
		{
			/** mshop/product/manager/insert/mysql
			 * Inserts a new product record into the database table
			 *
			 * @see mshop/product/manager/insert/ansi
			 */

			/** mshop/product/manager/insert/ansi
			 * Inserts a new product record into the database table
			 *
			 * Items with no ID yet (i.e. the ID is NULL) will be created in
			 * the database and the newly created ID retrieved afterwards
			 * using the "newid" SQL statement.
			 *
			 * The SQL statement must be a string suitable for being used as
			 * prepared statement. It must include question marks for binding
			 * the values from the product item to the statement before they are
			 * sent to the database server. The number of question marks must
			 * be the same as the number of columns listed in the INSERT
			 * statement. The order of the columns must correspond to the
			 * order in the save() method, so the correct values are
			 * bound to the columns.
			 *
			 * The SQL statement should conform to the ANSI standard to be
			 * compatible with most relational database systems. This also
			 * includes using double quotes for table and column names.
			 *
			 * @param string SQL statement for inserting records
			 * @since 2014.03
			 * @category Developer
			 * @see mshop/product/manager/update/ansi
			 * @see mshop/product/manager/newid/ansi
			 * @see mshop/product/manager/delete/ansi
			 * @see mshop/product/manager/search/ansi
			 * @see mshop/product/manager/count/ansi
			 * @see mshop/product/manager/rate/ansi
			 * @see mshop/product/manager/stock/ansi
			 */
			$path = 'mshop/product/manager/insert';
			$sql = $this->addSqlColumns( array_keys( $columns ), $this->getSqlConfig( $path ) );
		}
		else
		{
			/** mshop/product/manager/update/mysql
			 * Updates an existing product record in the database
			 *
			 * @see mshop/product/manager/update/ansi
			 */

			/** mshop/product/manager/update/ansi
			 * Updates an existing product record in the database
			 *
			 * Items which already have an ID (i.e. the ID is not NULL) will
			 * be updated in the database.
			 *
			 * The SQL statement must be a string suitable for being used as
			 * prepared statement. It must include question marks for binding
			 * the values from the product item to the statement before they are
			 * sent to the database server. The order of the columns must
			 * correspond to the order in the save() method, so the
			 * correct values are bound to the columns.
			 *
			 * The SQL statement should conform to the ANSI standard to be
			 * compatible with most relational database systems. This also
			 * includes using double quotes for table and column names.
			 *
			 * @param string SQL statement for updating records
			 * @since 2014.03
			 * @category Developer
			 * @see mshop/product/manager/insert/ansi
			 * @see mshop/product/manager/newid/ansi
			 * @see mshop/product/manager/delete/ansi
			 * @see mshop/product/manager/search/ansi
			 * @see mshop/product/manager/count/ansi
			 * @see mshop/product/manager/rate/ansi
			 * @see mshop/product/manager/stock/ansi
			 */
			$path = 'mshop/product/manager/update';
			$sql = $this->addSqlColumns( array_keys( $columns ), $this->getSqlConfig( $path ), false );
		}

		$idx = 1;
		$stmt = $this->getCachedStatement( $conn, $path, $sql );

		foreach( $columns as $name => $entry ) {
			$stmt->bind( $idx++, $item->get( $name ), $entry->getInternalType() );
		}

		$stmt->bind( $idx++, $item->getType() );
		$stmt->bind( $idx++, $item->getCode() );
		$stmt->bind( $idx++, $item->getDataset() );
		$stmt->bind( $idx++, $item->getLabel() );
		$stmt->bind( $idx++, $item->getUrl() );
		$stmt->bind( $idx++, $item->inStock(), \Aimeos\Base\DB\Statement\Base::PARAM_INT );
		$stmt->bind( $idx++, $item->getStatus(), \Aimeos\Base\DB\Statement\Base::PARAM_INT );
		$stmt->bind( $idx++, $item->getScale(), \Aimeos\Base\DB\Statement\Base::PARAM_FLOAT );
		$stmt->bind( $idx++, $item->getDateStart() );
		$stmt->bind( $idx++, $item->getDateEnd() );
		$stmt->bind( $idx++, json_encode( $item->getConfig() ) );
		$stmt->bind( $idx++, $item->getTarget() );
		$stmt->bind( $idx++, $item->boost() );
		$stmt->bind( $idx++, $context->editor() );
		$stmt->bind( $idx++, $date ); // mtime
		$stmt->bind( $idx++, $item->getTimeCreated() ?: $date );

		if( $id !== null ) {
			$stmt->bind( $idx++, $context->locale()->getSiteId() . '%' );
			$stmt->bind( $idx++, $id, \Aimeos\Base\DB\Statement\Base::PARAM_INT );
		} else {
			$stmt->bind( $idx++, $this->siteId( $item->getSiteId(), \Aimeos\MShop\Locale\Manager\Base::SITE_SUBTREE ) );
		}

		$stmt->execute()->finish();

		if( $id === null )
		{
			/** mshop/product/manager/newid/mysql
			 * Retrieves the ID generated by the database when inserting a new record
			 *
			 * @see mshop/product/manager/newid/ansi
			 */

			/** mshop/product/manager/newid/ansi
			 * Retrieves the ID generated by the database when inserting a new record
			 *
			 * As soon as a new record is inserted into the database table,
			 * the database server generates a new and unique identifier for
			 * that record. This ID can be used for retrieving, updating and
			 * deleting that specific record from the table again.
			 *
			 * For MySQL:
			 *  SELECT LAST_INSERT_ID()
			 * For PostgreSQL:
			 *  SELECT currval('seq_mpro_id')
			 * For SQL Server:
			 *  SELECT SCOPE_IDENTITY()
			 * For Oracle:
			 *  SELECT "seq_mpro_id".CURRVAL FROM DUAL
			 *
			 * There's no way to retrive the new ID by a SQL statements that
			 * fits for most database servers as they implement their own
			 * specific way.
			 *
			 * @param string SQL statement for retrieving the last inserted record ID
			 * @since 2014.03
			 * @category Developer
			 * @see mshop/product/manager/insert/ansi
			 * @see mshop/product/manager/update/ansi
			 * @see mshop/product/manager/delete/ansi
			 * @see mshop/product/manager/search/ansi
			 * @see mshop/product/manager/count/ansi
			 * @see mshop/product/manager/rate/ansi
			 * @see mshop/product/manager/stock/ansi
			 */
			$path = 'mshop/product/manager/newid';
			$id = $this->newId( $conn, $path );
		}

		$item->setId( $id );

		$item = $this->savePropertyItems( $item, 'product', $fetch );
		return $this->saveListItems( $item, 'product', $fetch );
	}

    public function get( string $id, array $ref = [], ?bool $default = false ) : \Aimeos\MShop\Common\Item\Iface
	{
        // dd('Myproject::get()');
		return $this->getItemBase( 'product.id', $id, $ref, $default );
	}

    public function getSearchAttributes(bool $withsub = true): array
    {
        $list = parent::getSearchAttributes($withsub);
        foreach ($this->searchConfig as $key => $fields) {
            $list[$key] = new \Aimeos\Base\Criteria\Attribute\Standard($fields);
        }
        return $list;
    }

    protected function createItemBase(
        array $values = [],
        array $listItems = [],
        array $refItems = [],
        array $propertyItems = []
    ): \Aimeos\MShop\Common\Item\Iface {
        return new \Aimeos\MShop\Product\Item\Myproject($values, $listItems, $refItems, $propertyItems);
    }
}
