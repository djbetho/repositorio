<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Document</title>
   <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" >
    $(document).ready(function() {
        var dataTable = $('#employee-grid').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax":{
                url :"lista/index.php", // json datasource
                type: "post",  // method  , by default get
                error: function(){  // error handling
                    $(".employee-grid-error").html("");
                    $("#employee-grid").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
                    $("#employee-grid_processing").css("display","none");
 
                }
            }
        } );
    } );
</script>
</head>
<body>
   <table id="employee-grid"  cellpadding="0" cellspacing="0" border="0" class="display" width="100%">
        <thead>
            <tr>
                <th>Employee name</th>
                <th>Salary</th>
                <th>Age</th>
            </tr>
        </thead>
</table>
</body>
</html>