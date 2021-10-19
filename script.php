<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

</html>
<script>
    $(document).ready(function() {
        $("#floatingInput").on("keyup", function() {
            var value = $(this).val().toUpperCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toUpperCase().indexOf(value) >-1)
            });
        });
    });
</script>