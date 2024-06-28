<style>

    /* Basic Reset */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: cursive;
}

/* Container Styles */
.container {
    display: grid;
    place-items: center;
    height: 100vh; /* Full viewport height */
    background: url(assets/bg.jpg);
    filter: brightness(90%);
}

/* Content Styles */
/* .form-container {
    padding: 20px;
    background: #007bff;
    color: white;
    border-radius: 8px;
    text-align: center;
} */

/* Basic Reset */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

/* Container Styles */
.form-container {
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
}

/* Form Styles */
form {
    background: antiquewhite;
    color: black;
    filter: brightness(100%);
    letter-spacing: 1px;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    margin-bottom: 20px;
    font-size: 24px;
    text-align: center;
    border-bottom: 1px solid white;
}

/* Form Group Styles */
.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input, textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 4px;
    background: steelblue;
    color: #fff;
    font-size: 18px;
    cursor: pointer;
    font-weight: bold;
    letter-spacing: 1px;
}

::placeholder {
    color: black;
    letter-spacing: 1px;
    font-weight: bold;
}

button:hover {
    background: steelblue;
    color: black;
    background: gray;
    color: white;
    transition: .5s;
}

/* Responsive Styles */
@media (max-width: 600px) {
    .form-container {
        padding: 10px;
    }

    input, textarea, button {
        font-size: 14px;
        padding: 8px;
    }

    h2 {
        font-size: 20px;
    }
}



</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
    <div class="form-container">
        <form action="index.php" method="post">
            <h2>BMI Calculator</h2>
            <div class="form-group">
                <!-- <label for="height">Height <small> (in meter) </small></label> -->
                <input type="number" id="height" name="height" step="0.01" placeholder="Height in Meter" required>
            </div>
            <div class="form-group">
                <!-- <label for="email">Weight <small>(in KG)</small></label> -->
                <input type="number" id="weight" name="weight" step="0.01"  placeholder="Weight in KG" name="weight" required>
            </div>
            <div class="form-group">
                <button type="submit">Calculate</button>
            </div>
        </form>
    </div>
    </div>
</body>
</html>

<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["weight"]) && isset($_POST["height"])) {
        $weight = $_POST["weight"];
        $height = $_POST["height"];

        if (is_numeric($weight) && is_numeric($height) && $height > 0) {
            $bmi = $weight / ($height * $height);
            $bmi = number_format($bmi, 2);

            if ($bmi < 18.5) {
                header("Location: underweight.php?result=" . urlencode($bmi));
                exit();
            } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
                header("Location: healthy.php?result=" . urlencode($bmi));
                exit();
            } elseif ($bmi >= 25.0 && $bmi <= 29.9) {
                header("Location: overweight.php?result=" . urlencode($bmi));
            } elseif ($bmi >= 30.0) {
                header("Location: obese.php?result=" . urlencode($bmi));
            } else {
                echo "Invalid input";
            }
        } else {
            echo "Please enter valid numerical values.";
        }
    } else {
        echo "Please enter both weight and height.";
    }
} else {
    echo "Invalid request method.";
}


    


?>
