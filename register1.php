<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>SHETH SWAROOPCHAND PANACHAND</title>
</head>
<body>

<div class="container">
       <!-- <div class="register"> -->
           <h2 align="center">BILLING SUPPORT</h2>
           <form class="insert-data" action="ins.php" method="POST">
               <div class="container">
                    <div class="row">
                        <div class="col">
                            <label>contactnumber</label>
                            <input type="text" class="form-control" placeholder="ENTER PHONE NUMBER" name="n1">
                        </div>
                        <div class="col">
                            <label>contactnumber1</label>
                            <input type="text" class="form-control" placeholder="ENTER PHONE NUMBER" name="n2">
                        </div>
                    </div>
                        <div class="col">
                            <label>FULLNAME</label>
                             <input type="text" class="form-control" placeholder="ENTETR FULL NAME" name="fname">
                        </div>
                        <div class="col">
                            <label>ADDRESS</label>
                            <input type="text" class="form-control" placeholder="ENTER FULL ADDRESS" name="address">
                        </div>
                        <div class="col">
                            <label>DRESS</label>
                            <input type="text" class="form-control" placeholder="ENTER DRESS NAME" name="dress">
                        </div>
                        <div class="col">
                            <label>DRESS DETAILS</label>
                            <textarea class="form-control" placeholder="Leave a comment here" name="descr"></textarea>
                        </div>
                        <div class="col">
                            <label>TOTAL PCS</label>
                            <input type="text" class="form-control" placeholder="ENTER DRESS NAME" name="total">
                        </div>
                        <!-- <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled> -->
                        <br>
                        <div class="col" align="center">
                        <button tye="submit" class="btn btn-primary" name="submit" value="insert">Okay</button>
                        </div>
                </div>
            </form>

       <!-- </div> -->

</div>
    
</body>
</html>