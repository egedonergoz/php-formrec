<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>İş Başvuru Formu</h2>
    <form action="" method="post">
        <label for="Ad">Ad: </label> <br>
        <input type="text" id="ad" name="ad"> <br>
        
        <label for="Email">Eposta Adresi: </label><br>
        <input type="email" id="email" name="email" ><br>
        
        <label for="TelNo">Telefon Numaranız:</label><br>
        <input type="tel" id="telNo" name="tel" ><br>
        
        <label for="ozgecmis">Özgeçmişiniz: </label><br>
        <textarea id="og" name="ozgecmis" rows="4" cols="50" ></textarea><br>
        
        <button type="button">Başvur</button>
    </form>
    <?php
    if(isset($_POST['submit'])) {
        $Ad = $_GET['ad'];
        $Email = $_GET['email'];
        $TelNo = $_GET['telNo'];
        $og = $_GET['og'];
    
        if(mail($to, $subject, $message, $headers)) {
            echo "Başvurunuz Gönderildi! ";
        } else {
            echo "Başvurunuz Başarısız Oldu, TEKRAR DENEYİN! ";
        }
    }

?>

    
    
</body>
</html>