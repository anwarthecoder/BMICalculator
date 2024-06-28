<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Underweight Result</title>
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
                echo "Your BMI is: " . htmlspecialchars($bmi) . "<br>You belong to <b>UNDERWEIGHT</b> category";
            } else {
                echo "No BMI result found.";
            }
            ?>
        </div>
    </div>

    <section class="advice">
        <div class="content">
            <h2><u>Advices for Underweight Individuals</u></h2>
            <p>
            Overcoming underweight can be challenging, but with a combination of healthy habits and a supportive mindset, it is achievable. Here are some tips to help you overcome underweight:<br>

                1. **Eat nutrient-dense foods**: Focus on whole, unprocessed foods like fruits, vegetables, whole grains, lean proteins, and healthy fats. Avoid sugary and processed foods that can lead to weight gain. <br>
                2. **Increase calorie intake**: To gain weight, you need to consume more calories than you burn. Aim to increase your daily calorie intake by 250-500 calories. You can do this by adding healthy fats, protein-rich foods, and complex carbohydrates to your meals.
                <br>
                3. **Choose calorie-dense foods**: Focus on foods that are high in calories and nutrients, such as:
                    * Nuts and seeds (e.g., almonds, cashews, chia seeds)
                    * Dried fruits (e.g., dates, apricots, prunes)
                    * Avocado
                    * Full-fat dairy products (e.g., whole milk, full-fat yogurt)
                    * Healthy oils (e.g., olive oil, coconut oil)
                <br>
                4. **Eat frequently**: Instead of eating three main meals a day, try eating five or six smaller meals to increase your overall calorie intake. This can help you feel fuller and more satisfied.
                <br>
                5. **Incorporate healthy fats**: Add healthy fats like nuts, seeds, avocados, and olive oil to your meals to increase calorie density.
                <br>
                6. **Drink calorie-rich beverages**: Try drinking smoothies made with milk, yogurt, and fruit to increase your calorie intake.
                <br>
                7. **Strength train**: Building muscle mass helps you gain weight and increases your metabolism. Focus on strength training exercises like weightlifting, resistance band exercises, or bodyweight exercises.
                <br>
                8. **Get enough sleep**: Adequate sleep is essential for muscle growth and recovery. Aim for 7-9 hours of sleep per night.
                <br>
                9. **Stay hydrated**: Drink plenty of water throughout the day to help you feel fuller and more satisfied.
                <br>
                10. **Seek professional help**: If you're struggling to gain weight or have a significant appetite disorder, consider consulting with a registered dietitian or a healthcare professional for personalized guidance and support.
                <br>
                11. **Be patient**: Gaining weight takes time and effort. Don't get discouraged if you don't see immediate results. Focus on making sustainable lifestyle changes that promote overall health and well-being.
                <br>
                12. **Monitor your progress**: Keep track of your food intake, weight gain, and overall progress by keeping a food diary or using a tracking app.
                <br>
                13. **Incorporate healthy snacks**: Keep healthy snacks like nuts, seeds, fruits, and energy bars handy to munch on throughout the day.
                <br>
                14. **Eat regularly at night**: Finish your meals earlier in the day and focus on eating more at night to help you gain weight.
                <br>
                15. **Avoid restrictive eating**: Avoid cutting out entire food groups or restricting your diet too much, as this can lead to nutrient deficiencies and make it harder to gain weight.
                <br>
                16. **Incorporate high-calorie foods**: Add high-calorie foods like granola, trail mix, or energy bars to your diet to increase your calorie intake.
                <br>
                17. **Try meal replacement shakes**: Consider using meal replacement shakes or protein supplements as a convenient way to increase your calorie intake.
                <br>
                18. **Get enough protein**: Adequate protein intake is essential for muscle growth and recovery. Aim for 0.8-1 gram of protein per pound of body weight per day.
                <br>
                19. **Consult with a registered dietitian**: A registered dietitian can help you create a personalized meal plan that meets your specific needs and goals.
                <br>
                20. **Focus on overall health**: Remember that gaining weight is just one aspect of overall health. Focus on building a balanced lifestyle that includes regular exercise, stress management, and sufficient sleep.
                <br>

                Remember, gaining weight in a healthy manner takes time and patience. It's essential to focus on making sustainable lifestyle changes that promote overall health and well-being rather than trying fad diets or quick fixes.
            </p>
        </div>
    </section>

    <!-- YOUTUBE  -->
    <section class="youtube">
        <h2><u>These YouTube Videos might help you!</u></h2>
         <div class="grid-container">
            <div class="grid-item">
            <iframe width="500" height="315" src="https://www.youtube.com/embed/PYVxaMyfSTc?si=IPN25S-EMNbwgUjj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="grid-item">
                <iframe width="500" height="315" src="https://www.youtube.com/embed/KM3ko1Z4amA?si=VuSzJ4twXZBjGm6V" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="grid-item">
            <iframe width="500" height="315" src="https://www.youtube.com/embed/V_LGp-wdUJo?si=t5Elgl1APewfdVRA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="grid-item">
            <iframe width="500" height="315" src="https://www.youtube.com/embed/J_iiyW-ocV8?si=VgcFzPmqCxh94jN-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>  
    </section>

    <!-- MOTIVATION -->
    <section class="motivation">
        <h2><u>Are you feeling low? Be Motivated!</u></h2>
    </section>

</body>
</html>
