<?php 
// Class providing generic data access functioality
class DatabaseHandler
{
    // Hold an instance of the PDO class   
    private static $_mHandler;

    //Private constructor to prevent direct creation of object
    private function __construct()
    {
    }

    // Return an initialize database handler
    private static function GetHandler()
    {
        // create database connection if and only if one doesn't exist already
        if(!isset(self::$_mHandler))
        {
            //Execute code catching potential exception
            try
            {
                //Create a new PDO class instance
                self::$_mHandler = new PDO(PDO_DSN, DB_USERNAME,DB_PASSWORD,array(PDO::ATTR_PERSISTENT => DB_PERSISTENCY));

                //Configue PDO to throw exceptions
                self::$_mHandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e)
            {
                //Close the database handler and trigger an error
                self::Close();
                trigger_error($e->getMessage(),E_USER_ERROR);
            }
        }
        // return the database handler
        return self::$_mHandler;
    }

    // Clear the PDO class instance
    public static function Close()
    {
        self::$_mHandler = null;
    }

    // this method don't return records (insert, delete, or update)
    // wrapper method for PDOStatement::execute()
    public static function Execute($sqlQuery, $params=null)
    {
        // try to execute an SQL query or a stored procedure
        try
        {
            //get database handler
            $database_handler = self::GetHandler();

            //Prepare the query for execution
            $statement_handler = $database_handler->prepare($sqlQeury);

            //execute query
            $statement_handler->execute($params);
        }
        catch(PDOExecption $e)
        {
            //Close the statement handler and trigger an error
            self::Close();
            trigger_error($e->getMessage(),E_USER_ERROR);
        }
    }

     // Wrapper method for PDOStatement::fetchAll()
  public static function GetAll($sqlQuery, $params = null,
    $fetchStyle = PDO::FETCH_ASSOC)
    {
        // Initialize the return value to null
        $result = null;

        // Try to execute an SQL query or a stored procedure
        try
        {
        // Get the database handler
        $database_handler = self::GetHandler();

        // Prepare the query for execution
        $statement_handler = $database_handler->prepare($sqlQuery);

        // Execute the query
        $statement_handler->execute($params);

        // Fetch result
        $result = $statement_handler->fetchAll($fetchStyle);
        }
        // Trigger an error if an exception was thrown when executing the SQL query
        catch(PDOException $e)
        {
        // Close the database handler and trigger an error
        self::Close();
        trigger_error($e->getMessage(), E_USER_ERROR);
        }

        // Return the query results
        return $result;
    }
    // GetRow is for get a row of the data resulted from a SELECT query
    public static function GetRow($sqlQuery, $params=null,$fetchStyle=PDO::FETCH_ASSOC)
    {
        //Initialize the return value to null
        $result = null;

        //Try to execute an SQL query or a stored procedure
        try
        {
            //Get the database handler
            $database_handler = self::GetHandler();

            //Prepare the query for execution
            $statement_handler = $database_handler->prepare($sqlQuery);

            //execute the query
            $statement_handler->execute($params);

            //Fetch result
            $result = $statement_handler->fetch($fetchStyle);
        }
        catch(PDOExecption $e)
        {
            //Close the statement handler and trigger an error
            self::Close();
            trigger_error($e->getMessage(),E_USER_ERROR);
        }

        return $result;
    }
 
    // GetOne is just get a single value result from a SELECT
    public static function GetOne($sqlQuery, $params=null,$fetchStyle=PDO::FETCH_NUM)
    {
        //Initialize the return value to null
        $result = null;

        //Try to execute an SQL query or a stored procedure
        try
        {
            //Get the database handler
            $database_handler = self::GetHandler();

            //Prepare the query for execution
            $statement_handler = $database_handler->prepare($sqlQuery);

            //execute the query
            $statement_handler->execute($params);

            //Fetch result
            $result = $statement_handler->fetch($fetchStyle);

            //save the first value of the result set
            $result = $result[0];
        }
        catch(PDOExecption $e)
        {
            //Close the statement handler and trigger an error
            self::Close();
            trigger_error($e->getMessage(),E_USER_ERROR);
        }

        return $result;
    }
}
?>