


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style3.css">
    <title>Raghad eissa</title>
</head>
<body>
    
    <?php
    echo '<header>';
    echo '<a href="#" class="logo">نسعد بخدمتــكم</a>';
    echo '<nav class="navigation"></nav>';
    echo '</header>';
    ?>

    <?php
    echo '<section class="main">';
    echo '<div>';
    echo '<h2>الاستعلام عن شكوى<br><span></span></br></h2>';
    echo '<section class="ram">';
    echo '<div>';
    echo '<h3> الرجـاء ادخال البيانات الازمة</h3>';
    echo '</div>';
    echo '</div>';
    echo '</section>';
    echo '<section>';
    echo '<div class="center">';
    echo '<label for="id-number"></label>';
    echo '<input type="text" id="id-number" name="id-number" required pattern="[0-9]{10,14}" placeholder="رقم الهاتف او الهوية">';
    echo '<button id="submit-btn">أستعلام</button>';
    echo '<div id="message"></div>';
    echo '</div>';
    echo '</section>';
    echo '</section>';
    ?>

    <script>
        const idNumberInput = document.getElementById('id-number');
        const errorMessageDiv = document.getElementById('error-messge');
        const submitButton = document.getElementById('submit-btn');
        const messageDiv = document.getElementById('message');

        submitButton.addEventListener('click', () => {
            if (!idNumberInput.checkValidity()) {
                messageDiv.textContent = 'الرجاء إدخال رقم صحيح';
                return;
            }

            setTimeout(() => {
                messageDiv.textContent = 'تم إرسال النموذج بنجاح';
            }, 2000);
        });
    </script>
   
</body>
</html>
