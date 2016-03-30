<?php
/**
*	@name 		SQLite3 Class
*	@abstract		$DB = new SQLite('filename.db');
*	@author		CSDN,Mofied by ZhangPeng
*	@example		$DB -> query("insert into TABLE(TITLE) values(VALUES)");
*	@version		1.0.0		Jun. 25th 2015
*/

class SQLite
{
	function __construct($file)
	{
		try
		{
			$this->connection=new PDO('sqlite:'.$file);
		}
		catch(PDOException $e)
		{
			try
			{
				$this->connection=new PDO('sqlite2:'.$file);
			}
			catch(PDOException $e)
			{
				exit('error!');
			}
		}
	}

	function __destruct()
	{
		$this->connection=null;
	}

	function query($sql) //直接运行SQL，可用于更新、删除数据
	{
		return $this->connection->query($sql);
	}

	function getlist($sql) //取得记录列表
	{
		$recordlist=array();
		foreach($this->query($sql) as $rstmp)
		{
			$recordlist[]=$rstmp;
		}
		return $recordlist;
	}

	function Execute($sql)
	{
		return $this->query($sql)->fetch();
	}

	function RecordArray($sql)
	{
		return $this->query($sql)->fetchAll();
	}

	function RecordCount($sql)
	{
		return count($this->RecordArray($sql));
	}

	function RecordLastID()
	{
		return $this->connection->lastInsertId();
	}
}
?>