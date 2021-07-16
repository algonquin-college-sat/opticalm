<?php

/**
  CST8334 - Opticalm
  Algonquin College - Summer 2021
  By Team 4 and Team 9
 */
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

/* Function to get a working database connection */
function _get_db_conn()
{
    $dbconn = mysqli_connect('localhost', 'user', 'password');
    if (!$dbconn || $dbconn->select_db('dbName') === false)
        echo "<br/><div class='infomsg'><p>Failed to connect to cst8276: " . htmlspecialchars(mysql_error()) . "</p></div>";
    return $dbconn;
}

/* TODO - function to query the database - has to be adapted */
function _query_db($text, $dbconn)
{
    $sql = "SELECT * FROM cst8334";
    if (!is_null($text) && !empty($text)) {
        $sql = $sql . "WHERE email LIKE ?";
    }
    $statement = $dbconn->prepare($sql);
    if (!is_null($text) && !empty($text)) {
        $text = "%" . strtolower($text) . "%";
        $statement->bind_param('ss', $text, $text);
    }
    $statement->execute();
    return $statement->get_result();
}

/* TODO - functions to insert and fill the information on the page */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Visual Stress Test - Opticalm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link href="form.css" rel="stylesheet" />

    <!-- TODO - adjust CSS styles -->

</head>

<body>
    <div class="header">
        <span class="topbar">
            <img id="img1" src="assets/logo.jpg" alt="" />
            <span class="option">
                <a id="optionh">Home</a> <!-- TODO - add links -->
                <a id="optionup">User Page</a>
                <a id="optiontr">EN / FR</a>
            </span>
        </span>
        <h1 id="title">Free Visual Stress Test</h1>
    </div>
    <div>
        <!-- TODO - add fields -->
        Name: <input type="text" name="name" value="<?php echo $name; ?>"><br>

        E-mail: <input type="text" name="email" value="<?php echo $email; ?>"><br>

        Phone number: <input type="text" name="phone" value="<?php echo $website; ?>"><br>

        Address: <input type="text" name="address" value="<?php echo $comment; ?>"><br>

        Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other
    </div>
</body>

<!-- TODO - add footer -->
<!-- TODO - add extra pages -->

</html>
