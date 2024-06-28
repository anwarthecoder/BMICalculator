<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overweight Result</title>
    <style>
        /* Center the content horizontally and vertically */
        /* body, html {
            height: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
        } */

        body {
            margin: 0;
            padding: 0;
            font-family: cursive;
        }

        .center {
            height: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;

        }

        .result-container {
            text-align: center;
            border: 2px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: 1px solid steelblue;
        }

        b {
            color: red;
        }

        .advice {
            width: 90%;
            margin: auto;
        }

        /* YOUTUBE */
        /* Container styles */
        
        .youtube {
            width: 90%;
            margin: auto;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(3, 1fr);
            gap: 10px;
            }

            .grid-item {
            background-color: none;
            padding: 20px;
            }

            /* Make the grid items take up the full width on small screens */
            @media (max-width: 600px) {
            .grid-item {
                grid-column: 1 / -1;
            }

            .youtube {
                width: 100%;
                margin: 0;
            }
        }

    </style>
</head>
<body>
    <div class="center">
        <div class="result-container">
            <?php
            if (isset($_GET['result'])) {
                $bmi = urldecode($_GET['result']);
                echo "Your BMI is: " . htmlspecialchars($bmi) . "<br>You belong to <b>OBESE</b> category";
            } else {
                echo "No BMI result found.";
            }
            ?>
        </div>
    </div>

    <section class="advice">
        <div class="content">
            <h2><u>Advices for Obese Individuals</u></h2>
            <p>
            Here are some additional tips and statistics to help overweight individuals:
            <br>
                1. Set a Realistic Goal**
                <br>
                * Aim to lose 1-2 pounds per week for a sustainable weight loss.
                * Set a goal to lose 5-10% of your body weight in the first 6 months.
                <br>
                2. Eat a Balanced Diet**

                * Aim for 3-5 servings of fruits and vegetables per day.
                * Include lean protein sources like poultry, fish, and beans in your diet.
                * Limit your intake of processed foods and added sugars.
                <br>
                3. Stay Hydrated**

                * Drink at least 8 cups (64 ounces) of water per day.
                * Aim for 1-2 cups of water per hour of exercise.
                <br>
                4. Exercise Regularly**

                * Aim for at least 150 minutes of moderate-intensity aerobic exercise per week.
                * Include strength training exercises 2-3 times per week.
                * Start with short sessions and gradually increase duration and intensity.
                <br>
                5. Get Enough Sleep**

                * Aim for 7-9 hours of sleep per night.
                * Establish a consistent sleep schedule and bedtime routine.
                <br>
                6. Monitor Progress**

                * Weigh yourself weekly or biweekly to track progress.
                * Take progress photos every 2-4 weeks.
                * Keep a food diary or use a mobile app to track eating habits.
                <br>
                7. Seek Support**

                * Share your weight loss goals with a friend or family member and ask for their support.
                * Join a weight loss support group or online community.
                * Consider consulting with a registered dietitian or a healthcare professional for personalized guidance.
                <br>
                **Statistics:**

                * According to the Centers for Disease Control and Prevention (CDC), more than one-third (36.5%) of adults in the United States have obesity.
                * The World Health Organization (WHO) estimates that over 1.9 billion adults worldwide are overweight or obese.
                * A study published in the Journal of the American Medical Association (JAMA) found that individuals who lost weight and kept it off for at least 5 years had a lower risk of developing chronic diseases, such as type 2 diabetes, high blood pressure, and heart disease.
                * According to the American Heart Association (AHA), losing just 5-10% of your body weight can reduce the risk of heart disease by up to 40%.
                * A study published in the International Journal of Obesity found that individuals who engaged in regular physical activity had a lower risk of developing depression, anxiety, and other mental health conditions.
                <br>
                **Additional Tips:**

                * Eat slowly and savor your food to reduce overeating.
                * Incorporate high-intensity interval training (HIIT) into your workout routine to boost metabolism and burn calories.
                * Use a food scale to measure your portions and avoid overeating.
                * Avoid eating in front of screens or while doing other activities.
                * Practice stress-reducing techniques, such as meditation or deep breathing, to reduce stress and anxiety.

                Remember, losing weight is not just about reaching a certain number on the scale. It's about adopting healthy habits that promote overall well-being and improve your quality of life.
           
            </p>
        </div>
    </section>

    <!-- YOUTUBE  -->
    <section class="youtube">
        <h2><u>These YouTube Videos might help you!</u></h2>
         <div class="grid-container">
            <div class="grid-item">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/q42n27oCOUM?si=RgHmT7rq-UOR_1j1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="grid-item">
                 <iframe width="560" height="315" src="https://www.youtube.com/embed//P7yM0TKvUm4?si=pkEKcm7v_NB5JN9U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="grid-item">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/V8GdAelYb38?si=SlCcNWzdY8JuUG5C" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="grid-item">
                 <iframe width="560" height="315" src="https://www.youtube.com/embed/3Ov7X9KAqk8?si=tNttNmWge2LUZWHu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>  
        </section>


</body>
</html>
