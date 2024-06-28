<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthy Result</title>
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
            color: green;
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
            /* padding: 20px; */
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
                echo "Your BMI is: " . htmlspecialchars($bmi) . "<br>You belong to <b>Healthy</b> category";
            } else {
                echo "No BMI result found.";
            }
            ?>
        </div>
    </div>

    <section class="advice">
        <div class="content">
            <h2><u>Some Advices to maintain your Healthy weight</u></h2>
            <p>
            
                Congratulations on taking the first step towards maintaining a healthy weight! Here are some tips to help you stay in a healthy weight range:
                <br>

                    1. **Maintain a balanced diet**: Focus on whole, unprocessed foods like fruits, vegetables, whole grains, lean proteins, and healthy fats. Avoid sugary drinks and foods high in added sugars.
                    <br>
                    2. **Eat regularly**: Eat three main meals and one or two snacks in between, depending on your activity level and hunger. Avoid skipping meals, as it can lead to overeating later.
                    <br>
                    3. **Control portion sizes**: Pay attention to serving sizes and control your portions to maintain a healthy calorie intake. Use measuring cups or a food scale to help you gauge accurate portions.
                    <br>
                    4. **Stay hydrated**: Drink plenty of water throughout the day to help control hunger and boost metabolism. Aim for at least 8 cups (64 oz) of water per day.
                    <br>
                    5. **Incorporate physical activity**: Aim for at least 150 minutes of moderate-intensity exercise or 75 minutes of vigorous-intensity exercise per week. You can also incorporate strength training, high-intensity interval training (HIIT), and other forms of physical activity to help you stay in shape.
                    <br>
                    6. **Monitor your progress**: Weigh yourself regularly, but avoid weighing too frequently. Aim to weigh yourself once a week or once every two weeks to track your progress.
                    <br>
                    7. **Be mindful of emotional eating**: Recognize when you're eating due to emotional reasons, such as stress, boredom, or anxiety. Take a few deep breaths and try to find healthier ways to cope with your emotions, such as meditation, yoga, or a short walk.
                    <br>
                    8. **Get enough sleep**: Aim for 7-9 hours of sleep per night to help regulate your appetite hormones and support weight loss and maintenance.
                    <br>
                    9. **Eat more fiber**: Fiber-rich foods like fruits, vegetables, and whole grains can help you feel full and satisfied, reducing the likelihood of overeating.
                    <br>
                    10. **Avoid distractions while eating**: Eat slowly, savor your food, and avoid eating in front of screens or while doing other activities. This can help you develop healthier eating habits and reduce mindless snacking.
                    <br>
                    11. **Get enough protein**: Aim for 0.8-1 gram of protein per pound of body weight per day to help support muscle growth and maintenance.
                    <br>
                    12. **Incorporate healthy fats**: Nuts, seeds, avocados, and olive oil are all great sources of healthy fats that can help support weight loss and maintenance.
                    <br>
                    13. **Be kind to yourself**: Remember that it's okay to indulge occasionally. Don't beat yourself up over minor setbacks – instead, focus on getting back on track and celebrating your small victories.
                    <br>
                    14. **Seek support**: Share your goals with a friend or family member and ask for their support. Having a supportive network can help you stay motivated and accountable.
                    <br>
                    15. **Stay positive**: Focus on the benefits of maintaining a healthy weight, such as increased energy levels, improved mental health, and reduced risk of chronic diseases.
                    <br>
                    16. **Monitor your calorie intake**: Use a food diary or tracking app to monitor your calorie intake and ensure you're staying within your daily limits.
                    <br>
                    17. **Eat more frequent meals**: Eating smaller, more frequent meals throughout the day can help you stay satisfied and reduce the likelihood of overeating.
                    <br>
                    18. **Avoid fad diets**: Fad diets are often unsustainable and may not provide adequate nutrition for long-term health. Focus on making sustainable lifestyle changes that promote overall health and well-being.
                    <br>
                    19. **Get enough potassium**: Potassium-rich foods like bananas, sweet potatoes, and spinach can help support blood pressure regulation and overall health.
                    <br>
                    20. **Consult with a healthcare professional**: If you're struggling to maintain a healthy weight or have concerns about your health, consult with a healthcare professional for personalized guidance and support.
                    <br>

                    Remember, maintaining a healthy weight is a long-term process that requires patience, dedication, and persistence. By following these tips and making sustainable lifestyle changes, you can achieve your weight goals and enjoy overall health and well-being.

            </p>
        </div>
    </section>

    <!-- YOUTUBE  -->
    <section class="youtube">
        <h2><u>These YouTube Videos might help you!</u></h2>
         <div class="grid-container">
            <div class="grid-item">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/OkNbacmwNp4?si=A950xkGsAD_b73PX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> 
        </div>

            <div class="grid-item">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/M93qnc6802c?si=JDXQ1bxfpXrEL0dP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            
            <div class="grid-item">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/kIK8ejw6tYw?si=lmQxt_4mvAnhqM-E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            
            <div class="grid-item">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/OkNbacmwNp4?si=A950xkGsAD_b73PX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        </div>  
    </section>

</body>
</html>
