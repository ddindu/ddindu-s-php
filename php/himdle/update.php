<html>
    <head>
        <meta charset="utf-8">
        <?php
            $link=mysqli_connect("localhost","root","apmsetup","humaninfo");
            $Age=$_GET['Age'];

        ?>
    <head>
</html>
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8"/>
                <style type="text/css">
                td {border:1px solid #333; padding:10px;}
                </style>
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>Page Title</title>
                <meta name="viewport"
                content="width=device-width, initial-scale=1">
                <link rel="stylesheet" type="text/css"
                media="screen" href="main.css"/>
                <script src="main.js"></script>
            </head>
            <body>
                <table>
                    <tr>
                        <td> Name</td>
                        <td> Address</td>
                    <tr>
                        <form action = "update2.php"method="POST">
                        <td>
                            <input type="varchar"placeholder="Name"
                                name="Name"/><br> </td>
                        <td>
                            <input type="varchar"placeholder="Address"
                                name="Address"/><br> </td>
                        <td>
                            <input type="hidden" name = "Age" value = <?=$Age?> >
                            <input type="submit" value="수정완료"/> </td>
                        </form>
                    </tr> </tr>
                </table>
            </body>
        </html>