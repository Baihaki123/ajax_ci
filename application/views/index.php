<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Created_At</th>
                    </tr>
                </thead>
                <tbody id="tbl_data">
                </tbody>
            </table>
        </div>
    </div>

</body>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<script>
    $(document).ready(function() {
        tampil();

        function tampil() {
            $.ajax({
                url: '<?php echo base_url('Welcome/ambilData') ?>',
                dataType: 'json',
                type: 'GET',
                success: function(result) {
                    var i;
                    var html = "";
                    var no = 1;

                    for (i = 0; i < result.length; i++) {
                        html += '<tr>' +
                            '<td>' + no++ + '</td>' +
                            '<td>' + result[i].name + '</td>' +
                            '<td>' + result[i].age + '</td>' +
                            '<td>' + result[i].created_at + '</td>' +
                            '</tr>';

                        $("#tbl_data").html(html);
                    }

                    setTimeout(tampil, 1000);
                }
            });
        }
    });
</script>

</html>