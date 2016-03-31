<?php
/*
class person
{
    public $name;
    public $age;
    public $height;
    function __construct($name,$age,$height)
    {
        $this->name = $name;
        $this->age = $age;
        $this->height = $height;    
    }   
}
$obj = new person("zhangsan",20,100);*/
$obj = array(
	'resData' => array(
		'results' => array(
			array(
				'id' => 1,
				'avali' => 1,
				'content' => 'Data'
			),
			array(
				'id' => 2,
				'avali' => 0,
				'content' => 'Data'
			)
		),
		'agru' => array(
			'number' => 15,
			'count' => 1,
			'token' => '5ds450zFfsdf',
			'timestamp' => 1257422554
		)
	),
	'resStatus' => 200
);
$foo_json = json_encode($obj);
echo $foo_json;


?>