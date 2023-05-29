<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>
<?php 


    if(isset($_POST['submit'])) {

        if(empty($_POST['username']) OR empty($_POST['email']) OR empty($_POST['password'])) {
            echo "<script>alert('one or more inputs are empty');</script>";
        } else {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $insert = $conn-prepare("INSERT INTO users (username, email, mypassword)
            VALUES ()")
        }
    }

?>

      

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="form-control mt-5 mb-5">
                    <h4 class="text-center mt-3"> Register </h4>
                    <div class="">
                        <label for="" class="col-sm-2 col-form-label">Username</label>
                        <div class="">
                            <input type="text"  class="form-control" id="" value="">
                        </div>
                    </div>
                    <div class="">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="">
                            <input type="email"  class="form-control" id="" value="">
                        </div>
                    </div>
                    <div class="">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="">
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-4 mb-4" type="submit">register</button>

                </form>
            </div>
            </div>
<?php require "../includes/footer.php"; ?>
