<?php $this->load->view('Menu/template/header_'); ?>
<?php $this->load->view('Menu/template//sidebar_'); ?>
<div class="content-wrapper">
        <section class="content">
        <div class="row">    
            <img src="<?php echo base_url('img/weather_img.png'); ?>" />
            <!-- height="" style="width: 87%;height: 864px;margin-left: 207px;margin-top: -864px;" /> -->
        </div>
        </section>
</div>

<?php $this->load->view('Menu/template/footer_js_'); ?>
    
    <script>
    $(document).ready(function() {
        $('#toggleButton').change(function() {
            if ($(this).is(':checked')) {
                $('#submitButton').prop('disabled', false);
            } else {
                $('#submitButton').prop('disabled', true);
            }
        });
    });

    $(document).ready(function() {
        $("#toggleEmailLogTable").click(function() {
            event.preventDefault();
            $("#emailLogTable").toggle();

        });
    });
    </script>
<?php $this->load->view('Menu/template/footer_'); ?>