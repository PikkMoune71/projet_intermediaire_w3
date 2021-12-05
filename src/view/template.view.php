<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Antoine PICARD - Bastian PEIRE</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" href="/">Posts</a>
            <a class="nav-link" href="/userList">Users</a>
            <?php if($_SESSION["users"]){?>
            <? if($_SESSION["users"]["isAdmin"]){ ?> 
                <a type="button" href="/userList" class="btn btn-outline-secondary">Admin</a> <? 
            }?>
                <a type="button" href="/logout" class="btn btn-outline-danger">Logout</a>
                <?php echo '<span class="navbar-text">' . $_SESSION['users']['email'] . '</span>';?>
            <?php } ?>

            <?php if(!$_SESSION["users"]){?>
                <a type="button" href="/signin" class="btn btn-outline-secondary">SignIn</a>
                <a type="button" href="/signup" class="btn btn-outline-primary">SignUp</a>
            <?php } ?>
        </div>
    </nav>
    <?= $content ?>
</body>
</html>
