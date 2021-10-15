



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    <div class="bigcont">
    <form action="send.php" method="POST">
    <h1>დაგვიკავშირდით</h1>
       <div class="rowcont">
        <div class="row1">
            <div class="cont">
            <p>სახელი</p>
            <input type="text" name="name" >
            </div>
            <div class="cont">
            <p>იმეილი</p>
            <input type="text" name="mail" >
            </div>
            <div class="cont">
            <p>ტელეფონის ნომერი</p>
            <input type="text" name="phonenumber" >
            </div>
            <button >Send</button>
        </div>
        <div class="row2">
        <div class="cont">
            <p>გვარი</p>
            <input type="text" name="lastname" >
            </div>
            <div class="cont">
            <p>მესიჯი</p>
            <textarea name="mesiji" id="" cols="30" rows="7"></textarea>
            </div>
        </div>
        </div>
        <p id="error">გაგზავნის დროს დაფიქსირდა შეცდომა გთხოვთ სცადოთ თავიდან</p>
    </form>
    
    </div>
    
</body>
</html>

