<!DOCTYPE HTML>
    <html lang='pt-BR'>
        <head>
             <meta charset="UTF-8">
             <title>Upload Multiplo com PHP</title>
        </head>
        <body>
            <form action="" method="POST" enctype="multipart/form-data">
            <fieldset>
                <?php
                    if(isset($_POST['submitupload'])){
                        include('class/upload.php');
                        $upload = new upload;
                        //var_dump($_FILES['arquivo']);
                        $upload->getFiles($_FILES['arquivo']);
                        $upload->start('');
                    }
                 ?>
                <input type="file" name="arquivo[]"><br/>
                <input type="file" name="arquivo[]"><br/>
                <input type="file" name="arquivo[]"><br/>
                <input type="file" name="arquivo[]"><br/>
                <input type="file" name="arquivo[]"><br/>
                <input type="submit" value="Enviar" name="submitupload">
            </fieldset>
        </body>
    </html>