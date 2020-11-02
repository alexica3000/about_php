
<?php

$success = false;

class UserFormValidator
{
    public function validate($post)
    {
        if ($post['name'] == '') {
            throw new Exception('Name is required.');
        }

        if ($post['age'] < 18) {
            throw new Exception('The age must be at least 18 years.');
        }

        if ($post['email'] == '' OR !filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Email does not have the correct format.');
        }
    }
}

$error = null;

if (!empty($_POST)) {
    try {
        $success = (new UserFormValidator())->validate($_POST);
    } catch (\Exception $e) {
        $error = $e->getMessage();
    }
}

function showError($error, $success)
{
    if (empty($success) AND empty($_POST)) {
        return;
    }

    $type = !empty($error) ? 'alert-danger' : 'alert-success';
    $message = !empty($error) ? $error : 'Form has been send.';

    $err = '<div class="alert ' . $type . '" role="alert">';
    $err .= $message;
    $err .= '</div>';

    echo $err;
}

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Form validation</title>
    </head>

    <body>
        <div class="container">
            <div class="row m-5">
                <div class="col-md-8">

                    <? showError($error, $success) ?>

                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="name" name="name" class="form-control" placeholder="Enter name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="age">Age:</label>
                            <input type="number" name="age" class="form-control" placeholder="Enter age" id="age">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" name="email" class="form-control" placeholder="Enter email" id="email">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
