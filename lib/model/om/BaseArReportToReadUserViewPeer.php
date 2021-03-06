<?php

/**
 * Base static class for performing query and update operations on the 'ar_report_to_read_user_view' table.
 *
 * 
 *
 * @package    lib.model.om
 */
abstract class BaseArReportToReadUserViewPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'propel';

	/** the table name for this class */
	const TABLE_NAME = 'ar_report_to_read_user_view';

	/** the related Propel class for this table */
	const OM_CLASS = 'ArReportToReadUserView';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'lib.model.ArReportToReadUserView';

	/** the related TableMap class for this table */
	const TM_CLASS = 'ArReportToReadUserViewTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 13;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'ar_report_to_read_user_view.ID';

	/** the column name for the AR_REPORT_TO_READ_ID field */
	const AR_REPORT_TO_READ_ID = 'ar_report_to_read_user_view.AR_REPORT_TO_READ_ID';

	/** the column name for the AR_REPORT_ID field */
	const AR_REPORT_ID = 'ar_report_to_read_user_view.AR_REPORT_ID';

	/** the column name for the AR_USER_ID field */
	const AR_USER_ID = 'ar_report_to_read_user_view.AR_USER_ID';

	/** the column name for the SEEN_OR_RECEIVED_FROM_USER field */
	const SEEN_OR_RECEIVED_FROM_USER = 'ar_report_to_read_user_view.SEEN_OR_RECEIVED_FROM_USER';

	/** the column name for the AR_ORGANIZATION_UNIT_ID field */
	const AR_ORGANIZATION_UNIT_ID = 'ar_report_to_read_user_view.AR_ORGANIZATION_UNIT_ID';

	/** the column name for the FROM_DATE field */
	const FROM_DATE = 'ar_report_to_read_user_view.FROM_DATE';

	/** the column name for the TO_DATE field */
	const TO_DATE = 'ar_report_to_read_user_view.TO_DATE';

	/** the column name for the PRODUCED_REPORT_GENERATION_DATE field */
	const PRODUCED_REPORT_GENERATION_DATE = 'ar_report_to_read_user_view.PRODUCED_REPORT_GENERATION_DATE';

	/** the column name for the PRODUCED_REPORT_SHORT_DESCRIPTION field */
	const PRODUCED_REPORT_SHORT_DESCRIPTION = 'ar_report_to_read_user_view.PRODUCED_REPORT_SHORT_DESCRIPTION';

	/** the column name for the PRODUCED_REPORT_ADDITIONAL_DESCRIPTION field */
	const PRODUCED_REPORT_ADDITIONAL_DESCRIPTION = 'ar_report_to_read_user_view.PRODUCED_REPORT_ADDITIONAL_DESCRIPTION';

	/** the column name for the PRODUCED_REPORT_ALREADY_REVIEWED field */
	const PRODUCED_REPORT_ALREADY_REVIEWED = 'ar_report_to_read_user_view.PRODUCED_REPORT_ALREADY_REVIEWED';

	/** the column name for the PRODUCED_REPORT_IS_DRAFT field */
	const PRODUCED_REPORT_IS_DRAFT = 'ar_report_to_read_user_view.PRODUCED_REPORT_IS_DRAFT';

	/**
	 * An identiy map to hold any loaded instances of ArReportToReadUserView objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array ArReportToReadUserView[]
	 */
	public static $instances = array();


	// symfony behavior
	
	/**
	 * Indicates whether the current model includes I18N.
	 */
	const IS_I18N = false;

	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'ArReportToReadId', 'ArReportId', 'ArUserId', 'SeenOrReceivedFromUser', 'ArOrganizationUnitId', 'FromDate', 'ToDate', 'ProducedReportGenerationDate', 'ProducedReportShortDescription', 'ProducedReportAdditionalDescription', 'ProducedReportAlreadyReviewed', 'ProducedReportIsDraft', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'arReportToReadId', 'arReportId', 'arUserId', 'seenOrReceivedFromUser', 'arOrganizationUnitId', 'fromDate', 'toDate', 'producedReportGenerationDate', 'producedReportShortDescription', 'producedReportAdditionalDescription', 'producedReportAlreadyReviewed', 'producedReportIsDraft', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::AR_REPORT_TO_READ_ID, self::AR_REPORT_ID, self::AR_USER_ID, self::SEEN_OR_RECEIVED_FROM_USER, self::AR_ORGANIZATION_UNIT_ID, self::FROM_DATE, self::TO_DATE, self::PRODUCED_REPORT_GENERATION_DATE, self::PRODUCED_REPORT_SHORT_DESCRIPTION, self::PRODUCED_REPORT_ADDITIONAL_DESCRIPTION, self::PRODUCED_REPORT_ALREADY_REVIEWED, self::PRODUCED_REPORT_IS_DRAFT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'ar_report_to_read_id', 'ar_report_id', 'ar_user_id', 'seen_or_received_from_user', 'ar_organization_unit_id', 'from_date', 'to_date', 'produced_report_generation_date', 'produced_report_short_description', 'produced_report_additional_description', 'produced_report_already_reviewed', 'produced_report_is_draft', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'ArReportToReadId' => 1, 'ArReportId' => 2, 'ArUserId' => 3, 'SeenOrReceivedFromUser' => 4, 'ArOrganizationUnitId' => 5, 'FromDate' => 6, 'ToDate' => 7, 'ProducedReportGenerationDate' => 8, 'ProducedReportShortDescription' => 9, 'ProducedReportAdditionalDescription' => 10, 'ProducedReportAlreadyReviewed' => 11, 'ProducedReportIsDraft' => 12, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'arReportToReadId' => 1, 'arReportId' => 2, 'arUserId' => 3, 'seenOrReceivedFromUser' => 4, 'arOrganizationUnitId' => 5, 'fromDate' => 6, 'toDate' => 7, 'producedReportGenerationDate' => 8, 'producedReportShortDescription' => 9, 'producedReportAdditionalDescription' => 10, 'producedReportAlreadyReviewed' => 11, 'producedReportIsDraft' => 12, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::AR_REPORT_TO_READ_ID => 1, self::AR_REPORT_ID => 2, self::AR_USER_ID => 3, self::SEEN_OR_RECEIVED_FROM_USER => 4, self::AR_ORGANIZATION_UNIT_ID => 5, self::FROM_DATE => 6, self::TO_DATE => 7, self::PRODUCED_REPORT_GENERATION_DATE => 8, self::PRODUCED_REPORT_SHORT_DESCRIPTION => 9, self::PRODUCED_REPORT_ADDITIONAL_DESCRIPTION => 10, self::PRODUCED_REPORT_ALREADY_REVIEWED => 11, self::PRODUCED_REPORT_IS_DRAFT => 12, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'ar_report_to_read_id' => 1, 'ar_report_id' => 2, 'ar_user_id' => 3, 'seen_or_received_from_user' => 4, 'ar_organization_unit_id' => 5, 'from_date' => 6, 'to_date' => 7, 'produced_report_generation_date' => 8, 'produced_report_short_description' => 9, 'produced_report_additional_description' => 10, 'produced_report_already_reviewed' => 11, 'produced_report_is_draft' => 12, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. ArReportToReadUserViewPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(ArReportToReadUserViewPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      criteria object containing the columns to add.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria)
	{
		$criteria->addSelectColumn(ArReportToReadUserViewPeer::ID);
		$criteria->addSelectColumn(ArReportToReadUserViewPeer::AR_REPORT_TO_READ_ID);
		$criteria->addSelectColumn(ArReportToReadUserViewPeer::AR_REPORT_ID);
		$criteria->addSelectColumn(ArReportToReadUserViewPeer::AR_USER_ID);
		$criteria->addSelectColumn(ArReportToReadUserViewPeer::SEEN_OR_RECEIVED_FROM_USER);
		$criteria->addSelectColumn(ArReportToReadUserViewPeer::AR_ORGANIZATION_UNIT_ID);
		$criteria->addSelectColumn(ArReportToReadUserViewPeer::FROM_DATE);
		$criteria->addSelectColumn(ArReportToReadUserViewPeer::TO_DATE);
		$criteria->addSelectColumn(ArReportToReadUserViewPeer::PRODUCED_REPORT_GENERATION_DATE);
		$criteria->addSelectColumn(ArReportToReadUserViewPeer::PRODUCED_REPORT_SHORT_DESCRIPTION);
		$criteria->addSelectColumn(ArReportToReadUserViewPeer::PRODUCED_REPORT_ADDITIONAL_DESCRIPTION);
		$criteria->addSelectColumn(ArReportToReadUserViewPeer::PRODUCED_REPORT_ALREADY_REVIEWED);
		$criteria->addSelectColumn(ArReportToReadUserViewPeer::PRODUCED_REPORT_IS_DRAFT);
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ArReportToReadUserViewPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ArReportToReadUserViewPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(ArReportToReadUserViewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Method to select one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     ArReportToReadUserView
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = ArReportToReadUserViewPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Method to do selects.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return ArReportToReadUserViewPeer::populateObjects(ArReportToReadUserViewPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ArReportToReadUserViewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			ArReportToReadUserViewPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      ArReportToReadUserView $value A ArReportToReadUserView object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(ArReportToReadUserView $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getId();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A ArReportToReadUserView object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof ArReportToReadUserView) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ArReportToReadUserView object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     ArReportToReadUserView Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to ar_report_to_read_user_view
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
	}

	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = ArReportToReadUserViewPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = ArReportToReadUserViewPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = ArReportToReadUserViewPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				ArReportToReadUserViewPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}

	/**
	 * Returns the number of rows matching criteria, joining the related ArReportToRead table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinArReportToRead(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ArReportToReadUserViewPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ArReportToReadUserViewPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ArReportToReadUserViewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_REPORT_TO_READ_ID, ArReportToReadPeer::ID, $join_behavior);

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related ArReport table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinArReport(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ArReportToReadUserViewPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ArReportToReadUserViewPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ArReportToReadUserViewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_REPORT_ID, ArReportPeer::ID, $join_behavior);

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related ArUser table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinArUser(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ArReportToReadUserViewPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ArReportToReadUserViewPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ArReportToReadUserViewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_USER_ID, ArUserPeer::ID, $join_behavior);

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related ArOrganizationUnit table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinArOrganizationUnit(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ArReportToReadUserViewPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ArReportToReadUserViewPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ArReportToReadUserViewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_ORGANIZATION_UNIT_ID, ArOrganizationUnitPeer::ID, $join_behavior);

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Selects a collection of ArReportToReadUserView objects pre-filled with their ArReportToRead objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ArReportToReadUserView objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinArReportToRead(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ArReportToReadUserViewPeer::addSelectColumns($criteria);
		$startcol = (ArReportToReadUserViewPeer::NUM_COLUMNS - ArReportToReadUserViewPeer::NUM_LAZY_LOAD_COLUMNS);
		ArReportToReadPeer::addSelectColumns($criteria);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_REPORT_TO_READ_ID, ArReportToReadPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ArReportToReadUserViewPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ArReportToReadUserViewPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = ArReportToReadUserViewPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ArReportToReadUserViewPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = ArReportToReadPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = ArReportToReadPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = ArReportToReadPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					ArReportToReadPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded
				
				// Add the $obj1 (ArReportToReadUserView) to $obj2 (ArReportToRead)
				$obj2->addArReportToReadUserView($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of ArReportToReadUserView objects pre-filled with their ArReport objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ArReportToReadUserView objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinArReport(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ArReportToReadUserViewPeer::addSelectColumns($criteria);
		$startcol = (ArReportToReadUserViewPeer::NUM_COLUMNS - ArReportToReadUserViewPeer::NUM_LAZY_LOAD_COLUMNS);
		ArReportPeer::addSelectColumns($criteria);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_REPORT_ID, ArReportPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ArReportToReadUserViewPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ArReportToReadUserViewPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = ArReportToReadUserViewPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ArReportToReadUserViewPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = ArReportPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = ArReportPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = ArReportPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					ArReportPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded
				
				// Add the $obj1 (ArReportToReadUserView) to $obj2 (ArReport)
				$obj2->addArReportToReadUserView($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of ArReportToReadUserView objects pre-filled with their ArUser objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ArReportToReadUserView objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinArUser(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ArReportToReadUserViewPeer::addSelectColumns($criteria);
		$startcol = (ArReportToReadUserViewPeer::NUM_COLUMNS - ArReportToReadUserViewPeer::NUM_LAZY_LOAD_COLUMNS);
		ArUserPeer::addSelectColumns($criteria);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_USER_ID, ArUserPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ArReportToReadUserViewPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ArReportToReadUserViewPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = ArReportToReadUserViewPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ArReportToReadUserViewPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = ArUserPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = ArUserPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = ArUserPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					ArUserPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded
				
				// Add the $obj1 (ArReportToReadUserView) to $obj2 (ArUser)
				$obj2->addArReportToReadUserView($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of ArReportToReadUserView objects pre-filled with their ArOrganizationUnit objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ArReportToReadUserView objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinArOrganizationUnit(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ArReportToReadUserViewPeer::addSelectColumns($criteria);
		$startcol = (ArReportToReadUserViewPeer::NUM_COLUMNS - ArReportToReadUserViewPeer::NUM_LAZY_LOAD_COLUMNS);
		ArOrganizationUnitPeer::addSelectColumns($criteria);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_ORGANIZATION_UNIT_ID, ArOrganizationUnitPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ArReportToReadUserViewPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ArReportToReadUserViewPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = ArReportToReadUserViewPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ArReportToReadUserViewPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = ArOrganizationUnitPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = ArOrganizationUnitPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = ArOrganizationUnitPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					ArOrganizationUnitPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded
				
				// Add the $obj1 (ArReportToReadUserView) to $obj2 (ArOrganizationUnit)
				$obj2->addArReportToReadUserView($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining all related tables
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ArReportToReadUserViewPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ArReportToReadUserViewPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ArReportToReadUserViewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_REPORT_TO_READ_ID, ArReportToReadPeer::ID, $join_behavior);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_REPORT_ID, ArReportPeer::ID, $join_behavior);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_USER_ID, ArUserPeer::ID, $join_behavior);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_ORGANIZATION_UNIT_ID, ArOrganizationUnitPeer::ID, $join_behavior);

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}

	/**
	 * Selects a collection of ArReportToReadUserView objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ArReportToReadUserView objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ArReportToReadUserViewPeer::addSelectColumns($criteria);
		$startcol2 = (ArReportToReadUserViewPeer::NUM_COLUMNS - ArReportToReadUserViewPeer::NUM_LAZY_LOAD_COLUMNS);

		ArReportToReadPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (ArReportToReadPeer::NUM_COLUMNS - ArReportToReadPeer::NUM_LAZY_LOAD_COLUMNS);

		ArReportPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (ArReportPeer::NUM_COLUMNS - ArReportPeer::NUM_LAZY_LOAD_COLUMNS);

		ArUserPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (ArUserPeer::NUM_COLUMNS - ArUserPeer::NUM_LAZY_LOAD_COLUMNS);

		ArOrganizationUnitPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + (ArOrganizationUnitPeer::NUM_COLUMNS - ArOrganizationUnitPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_REPORT_TO_READ_ID, ArReportToReadPeer::ID, $join_behavior);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_REPORT_ID, ArReportPeer::ID, $join_behavior);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_USER_ID, ArUserPeer::ID, $join_behavior);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_ORGANIZATION_UNIT_ID, ArOrganizationUnitPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ArReportToReadUserViewPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ArReportToReadUserViewPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = ArReportToReadUserViewPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ArReportToReadUserViewPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined ArReportToRead rows

			$key2 = ArReportToReadPeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = ArReportToReadPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = ArReportToReadPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					ArReportToReadPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (ArReportToReadUserView) to the collection in $obj2 (ArReportToRead)
				$obj2->addArReportToReadUserView($obj1);
			} // if joined row not null

			// Add objects for joined ArReport rows

			$key3 = ArReportPeer::getPrimaryKeyHashFromRow($row, $startcol3);
			if ($key3 !== null) {
				$obj3 = ArReportPeer::getInstanceFromPool($key3);
				if (!$obj3) {

					$cls = ArReportPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					ArReportPeer::addInstanceToPool($obj3, $key3);
				} // if obj3 loaded

				// Add the $obj1 (ArReportToReadUserView) to the collection in $obj3 (ArReport)
				$obj3->addArReportToReadUserView($obj1);
			} // if joined row not null

			// Add objects for joined ArUser rows

			$key4 = ArUserPeer::getPrimaryKeyHashFromRow($row, $startcol4);
			if ($key4 !== null) {
				$obj4 = ArUserPeer::getInstanceFromPool($key4);
				if (!$obj4) {

					$cls = ArUserPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					ArUserPeer::addInstanceToPool($obj4, $key4);
				} // if obj4 loaded

				// Add the $obj1 (ArReportToReadUserView) to the collection in $obj4 (ArUser)
				$obj4->addArReportToReadUserView($obj1);
			} // if joined row not null

			// Add objects for joined ArOrganizationUnit rows

			$key5 = ArOrganizationUnitPeer::getPrimaryKeyHashFromRow($row, $startcol5);
			if ($key5 !== null) {
				$obj5 = ArOrganizationUnitPeer::getInstanceFromPool($key5);
				if (!$obj5) {

					$cls = ArOrganizationUnitPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					ArOrganizationUnitPeer::addInstanceToPool($obj5, $key5);
				} // if obj5 loaded

				// Add the $obj1 (ArReportToReadUserView) to the collection in $obj5 (ArOrganizationUnit)
				$obj5->addArReportToReadUserView($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related ArReportToRead table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptArReportToRead(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ArReportToReadUserViewPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ArReportToReadUserViewPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ArReportToReadUserViewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(ArReportToReadUserViewPeer::AR_REPORT_ID, ArReportPeer::ID, $join_behavior);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_USER_ID, ArUserPeer::ID, $join_behavior);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_ORGANIZATION_UNIT_ID, ArOrganizationUnitPeer::ID, $join_behavior);

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related ArReport table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptArReport(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ArReportToReadUserViewPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ArReportToReadUserViewPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ArReportToReadUserViewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(ArReportToReadUserViewPeer::AR_REPORT_TO_READ_ID, ArReportToReadPeer::ID, $join_behavior);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_USER_ID, ArUserPeer::ID, $join_behavior);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_ORGANIZATION_UNIT_ID, ArOrganizationUnitPeer::ID, $join_behavior);

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related ArUser table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptArUser(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ArReportToReadUserViewPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ArReportToReadUserViewPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ArReportToReadUserViewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(ArReportToReadUserViewPeer::AR_REPORT_TO_READ_ID, ArReportToReadPeer::ID, $join_behavior);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_REPORT_ID, ArReportPeer::ID, $join_behavior);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_ORGANIZATION_UNIT_ID, ArOrganizationUnitPeer::ID, $join_behavior);

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related ArOrganizationUnit table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptArOrganizationUnit(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ArReportToReadUserViewPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ArReportToReadUserViewPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ArReportToReadUserViewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(ArReportToReadUserViewPeer::AR_REPORT_TO_READ_ID, ArReportToReadPeer::ID, $join_behavior);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_REPORT_ID, ArReportPeer::ID, $join_behavior);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_USER_ID, ArUserPeer::ID, $join_behavior);

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Selects a collection of ArReportToReadUserView objects pre-filled with all related objects except ArReportToRead.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ArReportToReadUserView objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptArReportToRead(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ArReportToReadUserViewPeer::addSelectColumns($criteria);
		$startcol2 = (ArReportToReadUserViewPeer::NUM_COLUMNS - ArReportToReadUserViewPeer::NUM_LAZY_LOAD_COLUMNS);

		ArReportPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (ArReportPeer::NUM_COLUMNS - ArReportPeer::NUM_LAZY_LOAD_COLUMNS);

		ArUserPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (ArUserPeer::NUM_COLUMNS - ArUserPeer::NUM_LAZY_LOAD_COLUMNS);

		ArOrganizationUnitPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (ArOrganizationUnitPeer::NUM_COLUMNS - ArOrganizationUnitPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_REPORT_ID, ArReportPeer::ID, $join_behavior);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_USER_ID, ArUserPeer::ID, $join_behavior);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_ORGANIZATION_UNIT_ID, ArOrganizationUnitPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ArReportToReadUserViewPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ArReportToReadUserViewPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = ArReportToReadUserViewPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ArReportToReadUserViewPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined ArReport rows

				$key2 = ArReportPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = ArReportPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = ArReportPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					ArReportPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (ArReportToReadUserView) to the collection in $obj2 (ArReport)
				$obj2->addArReportToReadUserView($obj1);

			} // if joined row is not null

				// Add objects for joined ArUser rows

				$key3 = ArUserPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = ArUserPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = ArUserPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					ArUserPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (ArReportToReadUserView) to the collection in $obj3 (ArUser)
				$obj3->addArReportToReadUserView($obj1);

			} // if joined row is not null

				// Add objects for joined ArOrganizationUnit rows

				$key4 = ArOrganizationUnitPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = ArOrganizationUnitPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = ArOrganizationUnitPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					ArOrganizationUnitPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (ArReportToReadUserView) to the collection in $obj4 (ArOrganizationUnit)
				$obj4->addArReportToReadUserView($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of ArReportToReadUserView objects pre-filled with all related objects except ArReport.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ArReportToReadUserView objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptArReport(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ArReportToReadUserViewPeer::addSelectColumns($criteria);
		$startcol2 = (ArReportToReadUserViewPeer::NUM_COLUMNS - ArReportToReadUserViewPeer::NUM_LAZY_LOAD_COLUMNS);

		ArReportToReadPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (ArReportToReadPeer::NUM_COLUMNS - ArReportToReadPeer::NUM_LAZY_LOAD_COLUMNS);

		ArUserPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (ArUserPeer::NUM_COLUMNS - ArUserPeer::NUM_LAZY_LOAD_COLUMNS);

		ArOrganizationUnitPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (ArOrganizationUnitPeer::NUM_COLUMNS - ArOrganizationUnitPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_REPORT_TO_READ_ID, ArReportToReadPeer::ID, $join_behavior);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_USER_ID, ArUserPeer::ID, $join_behavior);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_ORGANIZATION_UNIT_ID, ArOrganizationUnitPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ArReportToReadUserViewPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ArReportToReadUserViewPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = ArReportToReadUserViewPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ArReportToReadUserViewPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined ArReportToRead rows

				$key2 = ArReportToReadPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = ArReportToReadPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = ArReportToReadPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					ArReportToReadPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (ArReportToReadUserView) to the collection in $obj2 (ArReportToRead)
				$obj2->addArReportToReadUserView($obj1);

			} // if joined row is not null

				// Add objects for joined ArUser rows

				$key3 = ArUserPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = ArUserPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = ArUserPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					ArUserPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (ArReportToReadUserView) to the collection in $obj3 (ArUser)
				$obj3->addArReportToReadUserView($obj1);

			} // if joined row is not null

				// Add objects for joined ArOrganizationUnit rows

				$key4 = ArOrganizationUnitPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = ArOrganizationUnitPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = ArOrganizationUnitPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					ArOrganizationUnitPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (ArReportToReadUserView) to the collection in $obj4 (ArOrganizationUnit)
				$obj4->addArReportToReadUserView($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of ArReportToReadUserView objects pre-filled with all related objects except ArUser.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ArReportToReadUserView objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptArUser(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ArReportToReadUserViewPeer::addSelectColumns($criteria);
		$startcol2 = (ArReportToReadUserViewPeer::NUM_COLUMNS - ArReportToReadUserViewPeer::NUM_LAZY_LOAD_COLUMNS);

		ArReportToReadPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (ArReportToReadPeer::NUM_COLUMNS - ArReportToReadPeer::NUM_LAZY_LOAD_COLUMNS);

		ArReportPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (ArReportPeer::NUM_COLUMNS - ArReportPeer::NUM_LAZY_LOAD_COLUMNS);

		ArOrganizationUnitPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (ArOrganizationUnitPeer::NUM_COLUMNS - ArOrganizationUnitPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_REPORT_TO_READ_ID, ArReportToReadPeer::ID, $join_behavior);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_REPORT_ID, ArReportPeer::ID, $join_behavior);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_ORGANIZATION_UNIT_ID, ArOrganizationUnitPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ArReportToReadUserViewPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ArReportToReadUserViewPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = ArReportToReadUserViewPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ArReportToReadUserViewPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined ArReportToRead rows

				$key2 = ArReportToReadPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = ArReportToReadPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = ArReportToReadPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					ArReportToReadPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (ArReportToReadUserView) to the collection in $obj2 (ArReportToRead)
				$obj2->addArReportToReadUserView($obj1);

			} // if joined row is not null

				// Add objects for joined ArReport rows

				$key3 = ArReportPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = ArReportPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = ArReportPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					ArReportPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (ArReportToReadUserView) to the collection in $obj3 (ArReport)
				$obj3->addArReportToReadUserView($obj1);

			} // if joined row is not null

				// Add objects for joined ArOrganizationUnit rows

				$key4 = ArOrganizationUnitPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = ArOrganizationUnitPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = ArOrganizationUnitPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					ArOrganizationUnitPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (ArReportToReadUserView) to the collection in $obj4 (ArOrganizationUnit)
				$obj4->addArReportToReadUserView($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of ArReportToReadUserView objects pre-filled with all related objects except ArOrganizationUnit.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ArReportToReadUserView objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptArOrganizationUnit(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ArReportToReadUserViewPeer::addSelectColumns($criteria);
		$startcol2 = (ArReportToReadUserViewPeer::NUM_COLUMNS - ArReportToReadUserViewPeer::NUM_LAZY_LOAD_COLUMNS);

		ArReportToReadPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (ArReportToReadPeer::NUM_COLUMNS - ArReportToReadPeer::NUM_LAZY_LOAD_COLUMNS);

		ArReportPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (ArReportPeer::NUM_COLUMNS - ArReportPeer::NUM_LAZY_LOAD_COLUMNS);

		ArUserPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (ArUserPeer::NUM_COLUMNS - ArUserPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_REPORT_TO_READ_ID, ArReportToReadPeer::ID, $join_behavior);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_REPORT_ID, ArReportPeer::ID, $join_behavior);

		$criteria->addJoin(ArReportToReadUserViewPeer::AR_USER_ID, ArUserPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ArReportToReadUserViewPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ArReportToReadUserViewPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = ArReportToReadUserViewPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ArReportToReadUserViewPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined ArReportToRead rows

				$key2 = ArReportToReadPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = ArReportToReadPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = ArReportToReadPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					ArReportToReadPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (ArReportToReadUserView) to the collection in $obj2 (ArReportToRead)
				$obj2->addArReportToReadUserView($obj1);

			} // if joined row is not null

				// Add objects for joined ArReport rows

				$key3 = ArReportPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = ArReportPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = ArReportPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					ArReportPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (ArReportToReadUserView) to the collection in $obj3 (ArReport)
				$obj3->addArReportToReadUserView($obj1);

			} // if joined row is not null

				// Add objects for joined ArUser rows

				$key4 = ArUserPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = ArUserPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = ArUserPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					ArUserPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (ArReportToReadUserView) to the collection in $obj4 (ArUser)
				$obj4->addArReportToReadUserView($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}

	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BaseArReportToReadUserViewPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseArReportToReadUserViewPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new ArReportToReadUserViewTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * If $withPrefix is true, the returned path
	 * uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @param      boolean  Whether or not to return the path wit hthe class name 
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass($withPrefix = true)
	{
		return $withPrefix ? ArReportToReadUserViewPeer::CLASS_DEFAULT : ArReportToReadUserViewPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a ArReportToReadUserView or Criteria object.
	 *
	 * @param      mixed $values Criteria or ArReportToReadUserView object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ArReportToReadUserViewPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from ArReportToReadUserView object
		}

		if ($criteria->containsKey(ArReportToReadUserViewPeer::ID) && $criteria->keyContainsValue(ArReportToReadUserViewPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.ArReportToReadUserViewPeer::ID.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Method perform an UPDATE on the database, given a ArReportToReadUserView or Criteria object.
	 *
	 * @param      mixed $values Criteria or ArReportToReadUserView object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ArReportToReadUserViewPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(ArReportToReadUserViewPeer::ID);
			$selectCriteria->add(ArReportToReadUserViewPeer::ID, $criteria->remove(ArReportToReadUserViewPeer::ID), $comparison);

		} else { // $values is ArReportToReadUserView object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the ar_report_to_read_user_view table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ArReportToReadUserViewPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(ArReportToReadUserViewPeer::TABLE_NAME, $con);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			ArReportToReadUserViewPeer::clearInstancePool();
			ArReportToReadUserViewPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a ArReportToReadUserView or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or ArReportToReadUserView object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(ArReportToReadUserViewPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			ArReportToReadUserViewPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof ArReportToReadUserView) { // it's a model object
			// invalidate the cache for this single object
			ArReportToReadUserViewPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ArReportToReadUserViewPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				ArReportToReadUserViewPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			ArReportToReadUserViewPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given ArReportToReadUserView object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      ArReportToReadUserView $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(ArReportToReadUserView $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ArReportToReadUserViewPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ArReportToReadUserViewPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(ArReportToReadUserViewPeer::DATABASE_NAME, ArReportToReadUserViewPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     ArReportToReadUserView
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = ArReportToReadUserViewPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(ArReportToReadUserViewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(ArReportToReadUserViewPeer::DATABASE_NAME);
		$criteria->add(ArReportToReadUserViewPeer::ID, $pk);

		$v = ArReportToReadUserViewPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ArReportToReadUserViewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(ArReportToReadUserViewPeer::DATABASE_NAME);
			$criteria->add(ArReportToReadUserViewPeer::ID, $pks, Criteria::IN);
			$objs = ArReportToReadUserViewPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

	// symfony behavior
	
	/**
	 * Returns an array of arrays that contain columns in each unique index.
	 *
	 * @return array
	 */
	static public function getUniqueColumnNames()
	{
	  return array();
	}

} // BaseArReportToReadUserViewPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseArReportToReadUserViewPeer::buildTableMap();

