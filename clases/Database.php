<?php

    namespace Clases;
    class Database{

        private $conn;
        protected static $settings = array(

            "mysql" => Array(

                'driver' => 'mysql',
                'host' => 'localhost',
                'username' => 'campus',
                'database' => 'campuslands',
                'password' => 'campus2023',
                'collation' => 'utf8mb4_unicode_ci',
                'flags' => [

                    \PDO::ATTR_PERSISTENT => false,

                    \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

                    \PDO::ATTR_EMULATE_PREPARES => true,

                    \PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

                    \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci'

                    ],

            "pgsql" => Array(

                'driver' => 'pgsql',
                'host' => 'localhost',
                'username' => 'posgrest',
                'database' => 'sgav',
                'password' => 'uts123',
                'flags' => [

                    \PDO::ATTR_PERSISTENT => false,

                    \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

                    \PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

                    \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            
                    ]

                )

            )

    );


    public function __construct($agrs = []){

        $this->conn = $args['conn'] ?? null;

    }


    public function getConnection($dbKey){

        $dbConfig = self::$settings[$dbKey];
        $this->conn = null;
        $dsn = "{$dbConfig['driver']}:host={$dbConfig['host']};dbname={$dbConfig['database']}";

        try {

            $this->conn = new \PDO($dsn, $dbConfig['username'], $dbConfig['password'], $dbConfig['flags']);
            echo 'Conexión exitosa by Database:64';

        } catch(\PDOException $exception){

            $error = [[

                'error' => $exception->getMessage(),
                'message' => 'Error al momento de establecer conexión'
 
            ]];

            return $error;
            
        }

        return $this->conn;

    }

    };

?>