<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     
     $MD_Sir = [
        'Name: Md Ismail Hossain',
        'Title: Founder & M.D at CodeNext IT Solution ',
        'Number: +8801300793313',
        'Gmail: engr.ismail348@gmail.com',
        'WebSite Link: https://codenextit.com',
        'Linkedin Link: https://www.linkedin.com/in/engr-md-ismail-hossain-a707ab216/',
    ];

     $CEO_Sir =[
     'Name: MD Imtiaz Ahmed',
     'Title: Founder & CEO at CodeNext IT Solution',
     'Number: +8801788428280',
     'Gmail: imtiaz.cnits01@gmail.com',
     'WebsiteLink: https://codenextit.com',
     'Linkedin Link: https://www.linkedin.com/in/imtiaz-ahmed-5b1b1071/'
     ];


    $foodstring = join("<br>", $CEO_Sir);
    echo $foodstring ;
     ?>

</body>
</html>




<!-- 

// foreach($MD_Sir as $info => $key){
//     echo $info ;

//     // foreach ($key as $information){
//     //     echo $information ." " ;
//     // };
//     // echo "<br>";
// }



// "CEO Sir" =>[
//     'Name: MD Imtiaz Ahmed',
//     'Title: Founder & CEO at CodeNext IT Solution',
//     'Number: +8801788428280',
//     'Gmail: imtiaz.cnits01@gmail.com',
//     'WebsiteLink: https://codenextit.com',
//     'Linkedin Link: https://www.linkedin.com/in/imtiaz-ahmed-5b1b1071/'
// ],

// "CAO Sir" =>[
//     'Name: Anika Tabassum',
//     'Title: Chief Administrative Officer at CodeNext IT',
//     'Number: +8801313911981',
//     'Gmail: anika.cnits@gmail.com',
//     'Website Link: https://codenextit.com',
//     'Linkedin Link: https://www.linkedin.com/in/anika-tabassum-b72718263/',
// ] -->