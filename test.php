<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>



<?php
echo loggedInUserId();

if(userLikedThisPost(47)){
    echo "User Liked it";
} else{
    echo "Did not like it";
}
?>