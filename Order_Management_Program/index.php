<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Order Management System</title>
</head>

<body>
    <h1 class="display-2 mb-5 text-center">Order Management System</h1>
    <form action="database.php" method="POST">


        <div class="container-fluid text-center">
            <label for="ordername">Enter Order Name</label>
            <input type="text" name="ordername" id="ordername">

            <br>
            <br><br>
            <label for="orderquantity">Enter Order Quantity</label>
            <input type="text" name="orderquantity" id="orderquantity">

            <br><br><br>

            <label for="ordercategory">Enter Order Category</label>
            <input type="text" name="ordercategory" id="ordercategory">

            <br><br><br>

            <input type="submit" value="Submit" class="btn btn-primary mx-5">

            <input type="reset" value="Reset" class="btn btn-danger">

        </div>

    </form>
</body>

</html>