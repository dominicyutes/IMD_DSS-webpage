<div class="col-9" style="width: 88%">
    <!-- <button class="btn btn-primary">Pen</button>
                <p>Welcome ohme</p> -->
    <div style="background-color: #f5fdfd">
        <br>
        <br>
        <h2 class="text-center">EMAIL DISSEMINATIOIN</h2>

        <div>
            <form id="emailForm" method="POST" action="<?=base_url('email/send_email')?>">
                <!-- <lable>Name</lable>
                <input type="text" id="name" name="name" />
                <br>
                <lable>Subject</lable>
                <input type="text" id="subject" name="subject" />
                <br>
                <lable>Message</lable>
                <input type="text" id="message" name="message" /> -->
                <!-- <label for="toggleButton">To Deliver</label>
                <input type="checkbox" id="toggleButton">

                <button style="margin-left: 10px" type="submit" id="submitButton" class="btn btn-success ml-2"
                    disabled>Submit</button>

                <div class="text-right">
                    <button class="btn btn-primary">Log Information</button>
                </div> -->


                <div class="row">
                    <div class="col-10">
                        <label style="margin-left:5%" for="toggleButton">To Deliver</label>
                        <input type="checkbox" id="toggleButton">
                        <button style="margin-left: 10px" type="submit" id="submitButton" class="btn btn-success ml-2"
                            disabled>Submit</button>
                    </div>
                    <div class="col-2 text-right">
                        <button class="btn btn-primary" id="toggleEmailLogTable">Log Information</button>
                    </div>
                </div>

            </form>
            <br><br><br>
            <div class="container" id="emailLogTable" style="display: none;">
                <div class="row">
                    <br>
                    <h3>Email Log Table</h3>
                    <br />
                    <div class="table-responsive" style="max-height: 450px;">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Sno</th>
                                    <th>Mail From</th>
                                    <th>Mail To</th>
                                    <th>Sent</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                                $i = 1;
                                                foreach($result as $row) {
                                                    echo '<tr>
                                                        <td>'.$i++.'</td>
                                                        <td>'.$row['email_from'].'</td>
                                                        <td>'.$row['email_to'].'</td>
                                                        <td>'.($row['sent'] ? 'Sent' : 'Not Sent').'</td>
                                                        <td>'.(isset($row['sent_time']) ? date('Y-m-d H:i:s', strtotime($row['sent_time'])) : '').'</td>
                                                    </tr>';
                                                }
                                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>