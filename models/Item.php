<?php

require_once __DIR__ . '/Model.php';

class Item extends Model {

    protected static $table = 'items';

    // checks if the attribute being saved is password and hashes it if so
    public function __set($name, $value)
    {
        parent::__set($name, $value);
    }

    // finds and returns instance of user based on email or username
    public static function findByUsernameOrEmail($username_or_email)
    {

        self::dbConnect();

        $query = 'SELECT * FROM users WHERE username = :username OR email = :email';

        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':username', $username_or_email, PDO::PARAM_STR);
        $stmt->bindValue(':email', $username_or_email, PDO::PARAM_STR);
        $stmt->execute();

        //Store the resultset in a variable named $result
        $results = $stmt->fetch(PDO::FETCH_ASSOC);

        // The following code will set the attributes on the calling object based on the result variable's contents

        $instance = null;

        if ( $results )
        {

            $instance = new static;
            $instance->attributes = $results;
        }

        return $instance;
    }


}

?>