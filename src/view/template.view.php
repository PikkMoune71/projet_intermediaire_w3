<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <title>Antoine PICARD - Bastian PEIRE</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" href="/">Post list</a>
            <?php if($_SESSION["users"]){?>
                <a class="nav-link" href="/createPost">Create Post</a>
            <? if($_SESSION["users"]["is_admin"]){ ?> 
                <a class="nav-link" href="/postCrud">Post Crud</a>
                <a class="nav-link" href="/userList">Users List</a>
                 <? 
            }?>
                <button href="/user" class="btn btn-outline-secondary"><?= $_SESSION['users']['email'];?></button>
                <a type="button" href="/logout" class="btn btn-outline-danger">Logout</a>
            <?php } ?>

            <?php if(!$_SESSION["users"]){?>
                <a class="nav-link" href="/">Posts</a>
                <a type="button" href="/signin" class="btn btn-outline-secondary">SignIn</a>
                <a type="button" href="/signup" class="btn btn-outline-primary">SignUp</a>
            <?php } ?>
        </div>
    </nav>
    <?= $content ?>
</body>
</html>
