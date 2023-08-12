<?php
require '../config/config.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $resId = $_POST["res_id"];
    
    // Call the deleteRes function to delete the restaurant
    $rowsAffected = deleteRes($resId);
    
    if ($rowsAffected > 0) {
        echo "success";
    } else {
        echo "error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant List</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</head>
<body>
<style>
        /* Vertically center text in table cells */
        .table td, .table th {
            vertical-align: middle;
        }
    </style>
    <div class="container mt-4">
        <h1>Restaurant List</h1><br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Restaurant Logo</th>
                    <th>Restaurant ID</th>
                    <th>User ID</th>
                    <th>Restaurant Name</th>
                    <th>Address</th>
                    <th>Website</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <?php    
                // Fetch restaurants
                $restaurants = fetchRestaurantsAdmin();

                foreach ($restaurants as $restaurant) {
                    $logoUrl = fetchLogoRes($restaurant['res_id']);
                    echo '<tr>';
                    echo '<td><img  style="width: 70px;" src="' . $logoUrl . '" class="img-thumbnail" alt="Restaurant Logo"></td>';
                    echo '<td>' . $restaurant['res_id'] . '</td>';
                    echo '<td>' . $restaurant['user_id'] . '</td>';
                    echo '<td>' . $restaurant['res_name'] . '</td>';
                    echo '<td>' . $restaurant['address'] . '</td>';
                    echo '<td><a href="' . $restaurant['site_address'] . '" target="_blank" class="btn btn-primary">Visit Website</a></td>';
                    
                    
                    //button
                    echo '<td>';
                    echo '<div class="btn-group">';
                    echo '<button type="button" class="btn btn-outline-secondary btn-option dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                    echo '</button>';
                    echo '<div class="dropdown-menu">';
                    echo '<a class="dropdown-item" href="editRes.php?res_id=' . $restaurant['res_id'] . '">Edit</a>';
                    echo '<a class="dropdown-item" href="#" onclick="deleteRestaurant(' . $restaurant['res_id'] . ')">Delete</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</td>';
    
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <script>
        function deleteRestaurant(resId) {
                var confirmation = confirm("Are you sure you want to delete this restaurant?");
                if (confirmation) {
                    $.ajax({
                        type: "POST",
                        url: "adminRestaurant.php",
                        data: { res_id: resId },
                        success: function(response) {
                            if (response === "success") {
                                // Update the table or perform any other necessary action
                                alert("Restaurant with ID " + resId + " has been deleted.");
                            } else {
                                alert("Failed to delete restaurant.");
                            }
                        }
                    });
                }
            }
</script>
<!-- <script src="https://unpkg.com/@popperjs/core@2"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
