<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style/page1.css">
    <title>Raghad eissa</title>
</head>
<body>
    
    <header>
        <a href="#" class="logo">نسعد بخدمتــكم</a>
        <nav class="navigation"></nav>
    </header>

    <section class="main">
        <div>
            <h2>تقديم شكوى جديدة<br><span></span></br></h2>
            
            </div>
            <div>
            <h4>
            </section>
            </script>
              </div>
            <section class="har">

            <script>
                  const form = document.getElementById("myForm");
                  const submitBtn = document.getElementById("submitBtn");
                
                  submitBtn.addEventListener("click", function(event) {
                    event.preventDefault(); 
                
                    
                
                    form.submit();  
                  });
                </script>
              </div>
              <section class="input">
            <div class="center">
              <form method="post" action="complaint.php">
                <label for="id_number"></label>
                <input type="text" id="id_number" name="id_number"required pattern="[0-9]{10}" placeholder="رقم الهوية"><br>
               
                <label for="phone_number"></label>
                <input type="tel" id="phone_number" name="phone_number"required pattern="[0-9]{10}" placeholder="رقم الجوال"><br>
                <label for="complaint_text">الشكوى كتابة</label>
                <textarea name="complaint_text" required></textarea><br>
             
                <button id="record-button"><i class="fas fa-microphone"></i> الشكوى بتسجيل الصوت</button>

                <script>
               const recordButton = document.getElementById("record-button");
let isRecording = false;
let chunks = [];

recordButton.addEventListener("click", () => {
  if (!isRecording) {
    // بدء التسجيل
    isRecording = true;
    startRecording();
    recordButton.classList.add("recording");
  } else {
    // إيقاف التسجيل
    isRecording = false;
    stopRecording();
    recordButton.classList.remove("recording");
  }
});

function startRecording() {
  navigator.mediaDevices.getUserMedia({ audio: true })
    .then(stream => {
      const mediaRecorder = new MediaRecorder(stream);
      mediaRecorder.addEventListener("dataavailable", event => {
        chunks.push(event.data);
      });
      mediaRecorder.addEventListener("stop", () => {
        const blob = new Blob(chunks, { type: "audio/webm" });
        const audioUrl = URL.createObjectURL(blob);
        sendRecordingToServer(audioUrl);
      });
      mediaRecorder.start();
    })
    .catch(error => {
      console.error(error);
    });
}

function stopRecording() {
  chunks = [];
  mediaRecorder.stop();
}

function sendRecordingToServer(audioUrl) {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "complaint.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
      console.log(this.responseText);
    }
  };
  xhr.send("audio=" + encodeURIComponent(audioUrl));
}


                </script>

<form method="post" action="complaint.php">
                </script>
               <p> <input type="submit" value="تقديم الشكوى"></p>
                <div type="message"></div>
              </div>
              </form>
   <script>

const submit = document.getElementById('submit');
const messageDiv = document.getElementById('message');

submitButton.addEventListener('click', () => {
   
  setTimeout(() => {
    messageDiv.textContent = 'تم تقديم الشكوى بنجاح';
  }, 2000);
});
   </script>
            </h4>
            </script>
            
          

</script>
            </section>
</div>
<script>

  
</script>

      </div>
    </div>
       </section>
            </section>
        </section>
   
 </body>
</html