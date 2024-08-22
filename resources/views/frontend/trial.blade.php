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
            display: flex;
            justify-content: space-between;
        }

        .sidebar {
            width: 200px;
            background-color: #240942;
            color: white;
            padding: 20px;
            height: 100vh;
        }

        .sidebar h2 {
            margin-bottom: 0px;
            margin-left: 20px;
        }

        .sidebar img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .container {
            width: 80%;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #ffffff;
            text-align: center;
        }

        .button-container {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
            margin-left: 10px;
        }

        .button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        .delete-button {
            background-color: #f44336;
            margin-left: 20px;
        }



         .dropdown {
      position: relative;
      display: inline-block;
      margin-top: 40px;
    }


    .dropbtn {
    background-color: #ccc;
    border: 1px solid #ccc;
    padding: 10px 30px;
    font-size: 15px;
    cursor: pointer;
    width: 214px;
    border-radius: 12px;
    text-align: left;
  }


    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 200px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
      border-radius: 12px;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }
    </style>
</head>
<body>
    <div class="sidebar">
        
        <img src="images/home.jpg" alt="Profile Picture">
        <center><h2>Welcome</h2></center>
        <h2>EE Ramganga</h2>
        <div class="dropdown">
    <button class="dropbtn">Type of NOC<i class="fas fa-caret-down" style="font-size:24px; padding-left:50px"></i></button>
    <div class="dropdown-content">
      <a href="#">Category A</a>
      <a href="#">Category B</a>
      <a href="#">Category C</a>
      
    </div>
  </div>
    </div>
    <div class="container">
        <h2>EE Joint Inspection</h2>
        <table>
            <thead>
                <tr>
                    <th>Discharge</th>
                    <th>Bed Width</th>
                    <th>Water Depth</th>
                    <th>Free Board of Canal</th>
                    <th>Bed Level</th>
                    <th>Full supply Level(FSL)</th>
                    <th>Top bank level</th>
                    <th>Ground Level(GL)</th>
                    <th>Canal Cutting/Filling</th>
                    <th>Chainage of Canal</th>
                    <th>Name of Village</th>
                    <th>Name of District</th>
                    <th>Longitude and Latitude</th>
                    <th>Remarks</th>
                    <th>Action</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" placeholder=""></td>
                    <td><input type="text" placeholder=""></td>
                    <td><input type="text" placeholder=""></td>
                    <td><input type="text" placeholder=""></td>
                    <td><input type="text" placeholder=""></td>
                    <td><input type="text" placeholder=""></td>
                    <td><input type="text" placeholder=""></td>
                    <td><input type="text" placeholder=""></td>
                    <td><input type="text" placeholder=""></td>
                    <td><input type="text" placeholder=""></td>
                    <td><input type="text" placeholder=""></td>
                    <td><input type="text" placeholder=""></td>
                    <td><input type="text" placeholder=""></td>
                    <td><input type="text" placeholder=""></td>
                    <td>
                        <div class="button-container">
                            <button type="button" disabled>Edit Data</button>
                            <button class="button delete-button">Delete Data</button>
                        </div>
                    </td>
                    <td>
                        <div class="button-container">
                        <button class="button">Approved</button>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="button-container">
                            
                        </div>
                    </td>
                    <td>
                        <div class="button-container">
                            
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    
    </div>
</body>
</html>



