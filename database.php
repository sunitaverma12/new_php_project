<?php

class database
{
    public $connection;

    public function __construct( $config, $username='user1',$password='user@123')
    {
        $dsn = 'mysql:'. http_build_query($config, '',';');
        

        $this->connection=new PDO($dsn,$username,$password,[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    public function query($query)
    {
        $statment = $this->connection->prepare($query);
        $statment->execute();

        return $statment;
    }
}