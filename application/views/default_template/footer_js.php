<style type="text/css">
    .sidebar ul li:after {
    border-bottom: 1px solid #e1e5eb;
    font-weight: 400;
    color: #3d5170;
    content: "";
    display: block;
}
</style>
<footer class="main-footer">
<?php
    if(!isset($_SESSION['counter'])) { // It's the first visit in this session
        $handle = fopen(ROOT_DIR."/counter_file/counter.txt", "r"); 
        if(!$handle){ 
            echo "Could not open the file" ;
        } else { 
            $counter = ( int ) fread ($handle,20) ;
            fclose ($handle) ;
            $counter++ ; 
            echo" Visitor Count: ". $counter . "  " ; 
            $handle = fopen(ROOT_DIR."/counter_file/counter.txt", "w" ) ; 
            fwrite($handle,$counter) ; 
            fclose ($handle) ;
            $_SESSION['counter'] = $counter;
        }
    } else { // It's not the first time, do not update the counter but show the total hits stored in session
        $counter = $_SESSION['counter'];
        echo" Visitor Count: ". $counter . "  " ;
    }
?>
</footer>            
</div>

<script src="<?php echo base_url(); ?>stylesheet/plugins/jQuery/jQuery-2.2.0.min.js"></script>

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
<script src="<?php echo base_url(); ?>stylesheet/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>stylesheet/bootstrap/js/bootstrap-multiselect.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>stylesheet/js/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>stylesheet/js/daterangepicker.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/disable-devtool@latest"></script>
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
    $("body").on("click","#log_out_firebase",function(Logout_event){
        Logout_event.preventDefault();
        firebase.auth().signOut();
        var action = $(this).attr('href');
        window.location = action;
    });
    $.ajaxSetup({
        data: {
            'csrf_hash_name': $('meta[name="csrf-token"]').attr('csrf_hash')
        }
    });
    $(document).keydown(function(e){
        console.log(e.keyCode);
        var _key_code = e.keyCode;
        // if(_key_code == '67'){
        //     return false;
        // }
        // if(_key_code  == '18' && _key_code == '91' && _key_code == '74'){
        //     return false;
        // }
        // if(_key_code == '74'){
        //     return false;
        // }
        // if(_key_code == '73'){
        //     return false;
        // }
        // if(_key_code == '17'){
        //     return false;
        // }
        // if(_key_code == '85'){
        //     return false;
        // }
        if(_key_code == '123'){
            return false;
        }
    }); 
    $(document).bind("contextmenu",function(e) {
                e.preventDefault();
            });
</script>
<!-- Firebase JS End -->

<script>
    $(document).on("ready",function(){
        firebase.auth().onAuthStateChanged((fuser) => {
            if (fuser) {
                
            } else {
                $("#log_out_firebase").click();
                
            }
        });
    });
</script>