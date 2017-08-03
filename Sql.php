<?php
Class SQL
{
	private $sql;
	private $selectVal;
	private $fromVal;
	private $whereVal;
	private $insertVal;
	private $valuesVal;
	private $deleteVal;
	private $updateVal;
	private $setVal;
	public function select(array $what)
	{
		if(!empty($what) && $what !== "*")
		{
			$this->selectVal = "Select `$what[0]`,`$what[1]` ";
			return $this;
		}
		else
		{
			return ERROR_VAL;
		}
	}
	
	public function from($table)
	{
		if(!empty($table))
		{
			$this->fromVal = "from `$table` ";
			return $this;
		}
		else
		{
			return ERROR_VAL;
		}
	}
	
	public function where($key, $values)
	{
		if(!empty($key) && !empty($values))
		{
			
			$this->whereVal = "where `$key` = '$values' ";
			return $this;
		}
		else
		{
			return ERROR_VAL;
		}
	}
	public function insert($what)
	{
		if(!empty($what))
		{
			$this->insertVal = "INSERT INTO `$what` ";
			return $this;
		}
		else
		{
			return ERROR_VAL;
		}
	}
	public function values(array $values)
	{
		if(!empty($values))
		{
			$this->valuesVal = "VALUES ('$values[0]','$values[1]') ";
			return $this;
		}
		else
		{
			return ERROR_VAL;
		}
	}
	
	
	
	
	
	public function exec($var)
	{
		switch($var)
		{
			case 'SELECT':
				if(!isset($var) || empty($var) || $var == '*')
			   	{
			   		return false;
			   	}else
				{
				 	$this->sql= $this->selectVal . $this->fromVal . $this->whereVal;
					return $this->sql;
				 }
		 	case 'INSERT':	 
				if(!isset($var) || empty($var))
			   	{
			   		return false;
			   	}else
				{
				 	$this->sql= $this->insertVal . $this->valuesVal;
					return $this->sql;
				 }
			 
		}
		
	}
	

}



?>
