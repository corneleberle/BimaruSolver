<?php

class PlayingFieldTest extends PHPUnit_Framework_TestCase
{
	public function testGetSize()
	{
		$pf = new BimSolv_PlayingField(10);
		$this->assertEquals(10, $pf->getSize());
	}

	public function testGetGivenShipCountOfRow()
	{
		$shipCounts = array(1, 2);
		
		$pf = new BimSolv_PlayingField(2);
		$pf->setGivenShipCountOfRows($shipCounts);
		
		for ($i = 0; $i < count($shipCounts); $i++)
		{
			$this->assertEquals($shipCounts[$i], $pf->getGivenShipCountOfRow($i));
		}
	}

	public function testGetGivenShipCountOfColumns()
	{
		$shipCounts = array(5, 6);
		
		$pf = new BimSolv_PlayingField(2);
		$pf->setGivenShipCountOfColumns($shipCounts);
		
		for ($i = 0; $i < count($shipCounts); $i++)
		{
			$this->assertEquals($shipCounts[$i], $pf->getGivenShipCountOfColumns($i));
		}
	}
	
	public function testSet()
	{
		$pf = new BimSolv_PlayingField(3);
		$pf->set(0, 0, BimSolv_FieldTypes::LEFT_END);
		
		$this->assertEquals(BimSolv_FieldTypes::LEFT_END, $pf->get(0, 0));
	}
	
	public function testGet()
	{
		
	}
}