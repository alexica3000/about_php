
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

class User
{
    public function load($id)
    {
        $existUsersId = [1, 3, 5, 7, 8, 10];

        if (!in_array($id, $existUsersId)) {
            throw new Exception('The user does not exist.');
        }
    }

    public function save($data)
    {
        $saveToDB = rand(0, 1) == 1;

        if (!$saveToDB) {
            throw new Exception('Error on save data.');
        }

        return $data['id'];
    }
}

function showError($error, $success)
{
    if (empty($success) AND empty($_POST)) {
        return;
    }

    $type = !empty($error) ? 'alert-danger' : 'alert-success';
    $message = !empty($error) ? $error : 'Form has been send.';

    echo '<div class="alert ' . $type . '" role="alert">' . $message . '</div>';
}

function showRandomId()
{
    echo '<input type="hidden" name="id" value="' . rand(1, 10) . '">';
}

$error = null;

if (!empty($_POST)) {
    try {
        $user = new User();
        $user->load($_POST['id']);
        $success = (new UserFormValidator())->validate($_POST);
        $user->save($_POST);
    } catch (\Exception $e) {
        $error = $e->getMessage();
    }
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
                        <? showRandomId() ?>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
