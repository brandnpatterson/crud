<?php
function flashMessage($message, $error = false)
{
    $alert = $error ? 'danger' : 'primary';

    echo '
    <div class="alert alert-' . $alert . ' alert-dismissible fade show" role="alert">' .
        $message .
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
}

function emailExist($email, $db)
{
    $sql = "SELECT email FROM users WHERE email = :email";

    $query = $db->prepare($sql);

    $query->bindParam(':email', $email, PDO::PARAM_STR);

    $query->execute();

    if ($query->rowCount() === 1) {
        return true;
    } else {
        return false;
    }
}

if (isset($_POST['submit'])) {
    $db = new PDO($dsn, $username, $password, $options);

    if (!emailExist($_POST['email'], $db)) {

        require './util/index.php';

        try {
            $new_user = array(
                "firstname" => $_POST['firstname'],
                "lastname"  => $_POST['lastname'],
                "email"     => $_POST['email'],
                "age"       => $_POST['age'],
                "location"  => $_POST['location']
            );

            $sql = sprintf(
                "INSERT INTO users (%s) values (%s)",
                implode(", ", array_keys($new_user)),
                ":" . implode(", :", array_keys($new_user))
            );

            $query = $db->prepare($sql);
            $query->execute($new_user);

            flashMessage("Thank you for creating an account, " . escape($_POST['firstname']) . "!");
        } catch (PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
    } else {
        flashMessage('It looks like this email already exists! Try logging in!', $error = true);
    }
}
?>
