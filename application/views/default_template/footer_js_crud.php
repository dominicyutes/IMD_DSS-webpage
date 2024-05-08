<footer class="main-footer">
    <?php
    if (!isset($_SESSION['counter'])) { // It's the first visit in this session
        $handle = fopen(ROOT_DIR . "/counter_file/counter.txt", "r");
        if (!$handle) {
            echo "Could not open the file";
        } else {
            $counter = (int) fread($handle, 20);
            fclose($handle);
            $counter++;
            echo" Visitor Count: " . $counter . "  ";
            $handle = fopen(ROOT_DIR . "/counter_file/counter.txt", "w");
            fwrite($handle, $counter);
            fclose($handle);
            $_SESSION['counter'] = $counter;
        }
    } else { // It's not the first time, do not update the counter but show the total hits stored in session
        $counter = $_SESSION['counter'];
        echo" Visitor Count: " . $counter . "  ";
    }
    ?>
</footer>            
</div>   

<script src="<?php echo base_url(); ?>stylesheet/plugins/jQueryUI/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>stylesheet/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>stylesheet/dist/js/app.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>stylesheet/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>stylesheet/plugins/fastclick/fastclick.js"></script>
<!-- Block Ui -->
<script src="<?php echo base_url(); ?>stylesheet/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url(); ?>stylesheet/bootstrap/js/bootstrap-multiselect.js"></script>
<!--  Firebase JS related files -->
<!-- <script src="https://www.gstatic.com/firebasejs/6.2.3/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.2.3/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.2.3/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.2.3/firebase-firestore.js"></script> -->
<script src="<?php echo base_url(); ?>assets/firebase/firebase.js"></script>
<script src="<?php echo base_url(); ?>assets/firebase/firebase-app.js"></script>
<script src="<?php echo base_url(); ?>assets/firebase/firebase-auth.js"></script>
<script src="<?php echo base_url(); ?>assets/firebase/firebase-firestore.js"></script>
<script src="<?php echo base_url(); ?>stylesheet/js/firebase_config.js"></script> 
<script type="text/javascript">
    $("body").on("click", "#log_out_firebase", function (Logout_event) {
        Logout_event.preventDefault();
        firebase.auth().signOut();
        var action = $(this).attr('href');
        window.location = action;
    });
</script>
<!-- Firebase JS End -->



<script>
    $(document).on("ready",function(){
        firebase.auth().onAuthStateChanged((fuser) => {
            if (fuser) {
                // var uid = fuser.uid;
                // console.log(fuser);
                // var _uId = fuser._lat;
                // var _apkey = fuser.l;
                // $.ajax({
                //     url: 'https://identitytoolkit.googleapis.com/v1/accounts:lookup?key='+_apkey,
                //     type : 'post',
                //     data : {'idToken':_uId},
                //     dataType : 'json',
                //     success : function (res){
                //         var userData = res.users[0];
                //         const p_u_at = JSON.parse(userData.passwordUpdatedAt);
                //         const l_l_at = JSON.parse(userData.lastLoginAt);
                //         console.log("P Update at -"+new Date(JSON.parse(p_u_at)));
                //         console.log("L Login at -"+new Date(JSON.parse(l_l_at)));
                //         //return false;
                //         if(p_u_at > l_l_at) {
                //             console.log("Password changed recently, Logout the user");
                //             $("#log_out_firebase").click();
                //         } else {
                //             console.log("Password Not changed recently");
                //         }
                //     }
                // });
                // // ...
            } else {
                //console.log("User Signed Out");
                $("#log_out_firebase").click();
                // ...
            }
        });
    });
</script>