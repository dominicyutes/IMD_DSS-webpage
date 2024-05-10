<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IMD DSS</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border: 1px solid #dddddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">

            <h2>Deleted MacroGroups</h2>
            <br />
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Sno</th>
                        <th>MacroGroup Name</th>
                        <th>Deleted_By</th>
                        <th>Deleted_Reason</th>
                        <th>Deleted_At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i = 1;
                        foreach($result as $row) {
                            echo '<tr>
                                <td>'.$i++.'</td>
                                <td>'.$row['macroname'].'</td>
                                <td>'.$row['deleted_by'].'</td>
                                <td>'.$row['delete_reason'].'</td>
                                <td>'.(isset($row['deleted_At']) ? date('Y-m-d H:i:s', strtotime($row['deleted_At'])) : '').'</td>
                            </tr>';
                        }
                    ?>
                </tbody>


            </table>

        </div>
    </div>

    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

</body>

</html>

</html>