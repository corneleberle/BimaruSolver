<?php

class BimSolv_PlayingField
{
	private $_size;
	private $_givenShipCountOfRows;
	private $_givenShipCountOfColumns;
	private $_rows;
	
	public function __construct($size)
	{
		$this->_size = $size;

		$row = array_fill(0, $size, BimSolv_FieldTypes::UNKNOWN);
		$this->_rows = array_fill(0, $size, $row);
	}
	
	public function setGivenShipCountOfRows(array $givenShipCountOfRows)
	{
		if (count($givenShipCountOfRows) != $this->_size)
		{
			throw new InvalidArgumentException("Number of elements in givenShipCountOfRows must match size of PlayingField");
		}
		
		$this->_givenShipCountOfRows = $givenShipCountOfRows;
	}
	
	public function setGivenShipCountOfColumns(array $givenShipCountOfColumns)
	{
		if (count($givenShipCountOfColumns) != $this->_size)
		{
			throw new InvalidArgumentException("Number of elements in givenShipCountOfColumns must match size of PlayingField");
		}
	
		$this->_givenShipCountOfColumns = $givenShipCountOfColumns;
	}
	
	public function getGivenShipCountOfRow($rowIndex)
	{
		if ($rowIndex < 0 || $rowIndex >= $this->_size)
		{
			throw new InvalidArgumentException("Invalid Parameter: rowIndex");
		}
		
		return $this->_givenShipCountOfRows[$rowIndex];
	}
	
	public function getGivenShipCountOfColumns($columnIndex)
	{
		if ($columnIndex < 0 || $columnIndex >= $this->_size)
		{
			throw new InvalidArgumentException("Invalid Parameter: rowIndex");
		}
		
		return $this->_givenShipCountOfColumns[$columnIndex];
	}
	
	public function get($rowIndex, $columnIndex)
	{
		return $this->_rows[$rowIndex][$columnIndex];
	}
	
	public function set($rowIndex, $columnIndex, $fieldType)
	{
		$this->_rows[$rowIndex][$columnIndex] = $fieldType;
	}
	
	// ACCESSORS
	
	public function getSize()
	{
		return $this->_size;
	}
	
}