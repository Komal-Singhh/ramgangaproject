<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		
    <style>
        
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 20px;
        }

        .container {
            width: 60%;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
        }


        
        h1 {
            text-align: center;
        }
        h2 {
            margin-left: 50px;
            margin-top: 30px;
        }

        label {
            display: block;
            margin-top: 20px;
            margin-left: 50px;
        }

        input[type="text"],
        input[type="date"],
        textarea {
            width: 40%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-left: 10px;
        }

        select {
            width: 40%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'><path d='M12.5 9.5l-4.5-4.5-4.5 4.5' stroke='black' stroke-width='1.5' stroke-linecap='round'/></svg>");
            background-repeat: no-repeat;
            background-position: right 10px center;
            padding-right: 30px;
            margin-left: 10px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            margin-top: 20px;
            margin-left: 450px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

       .row {
       display: flex;
       flex-wrap: wrap;
       justify-content: space-between;
    }

  .col-md-6 {
    flex-basis: 50%;
  }

  @media (min-width: 768px) {
    .col-md-6 {
      flex-basis: 50%;
    }
  }
    </style>
</head>
<body>
    
    <form>
        
    <div class="container">
        <h1>CE Level-2
        </h1>
        <div class="row">
        <div class="col-md-6">
        <label for="registrationNo">Registration No.:
        <input type="text" id="registrationNo" name="registrationNo" value="123456"></label>


        <label for="monitoringUnit">Monitoring Unit:
        <select id="monitoringUnit" name="monitoringUnit" >
            <option value="">Select Unit</option>
            <option value="2" selected> Unit1</option>
            <option value="">Unit2</option>
            <option value=""> Unit3</option>
            </select></label>

        
        </div>
        <div class="col-md-6">
        <label for="date">Date:
        <input type="date" id="date" name="date" value="2024-07-25"></label>

        <label for="typeNoc">Type of NOC:
        <select id="typeNoc" name="typeNoc" >
            <option value="">Select Category</option>
            <option value="Category-A" selected>Category1</option>
            <option value="">Category2</option>
            <option value="">Category3</option>
            </select></label>
    </div>
    </div>
        <h2>Sender Details</h2>
        <div class="row">
        <div class="col-md-6">
        <label for="name">Name:
        <input type="text" id="name" name="name" placeholder="Sender's Name" value="ABCD"></label>

        <label for="post">Post:
        <input type="text" id="post" name="post" placeholder="Sender's Post" value="EINC"></label>

        <label for="date">Date:
        <input type="date" id="date" name="date" value="2024-01-01"></label>


        <label for="directions">Directions:
        <textarea id="directions" name="directions" ></textarea></label>
        
</div>

        <div class="col-md-6">

        <label for="letterNo">Letter No.:
        <input type="text" id="letterNo" name="letterNo" value="2121"></label>

        <label for="subject">Subject:
        <input type="text" id="subject" name="subject" value="NA"></label>

        <label for="address">Address:
        <input type="text" id="address" name="address" placeholder="Sender's Address" value="ggg,12,kanpue"></label>

        
</div>
</div>

        <button type="submit">Send<i class="fas fa-angle-double-right" style="font-size:15px; padding-left:20px"></i></button>
    </div>
        </form>







<script>



</script>



        
</body>
</html>