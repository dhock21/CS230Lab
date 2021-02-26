<?php
require 'includes/header.php';
require 'includes/dbhandler.php';
?>

<main>
    <div class="bg-cover">
        <link rel="stylesheet" href="css/profile.css">
        <script>
        function triggered() {
            document.querySelector("#prof-image").click();
        }

        function preview(e) {
            if (e.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.querySelector('#prof-display').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(e.files[0]);
            }
        }
        </script>

        <?php
if(isset($_SESSION['uid'])){
    //username after login
    $prof_user = $_SESSION['uname'];
    //idk if the red semicolon is needed in the line below
    $sqlpro = "SELECT * FROM profiles WHERE uname='$prof_user';";
    $res = mysqli_query($conn, $sqlpro);
    $row = mysqli_fetch_array($res);
    $photo = $row['profpic']; //path to the profile pic
    ?>

        <div class="h-50 center-me text-center">
            <div class="my-auto">
                <form action="includes/upload-helper.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <img src="<?php echo $photo;?>" alt="profile picture" onclick="triggered();" id="prof-display">

                        <label for="prof-image" id="uname-style"><?php echo $prof_user?></label>
                        <input type="file" name="prof-image" id="prof-image" onchange="preview(this)"
                            class="form-control" style="display: none;">
                    </div>
                    <div class="form-group">
                        <textarea name="bio" id="bio" cols="30" rows="10" placeholder="Your bio here:"
                            style="text-align: center;"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="prof-submit"
                            class="btn btn-outline-primary btn-lg btn-block">Upload</button>
                    </div>
                </form>
            </div>
        </div>

        <?php

}
?>
    </div>
</main>