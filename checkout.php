<DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.td">
<html>
<head>
<title>Check Book Out</title>
</head>
<body>
<?php
   if(isset($_GET['borrower'])){
   //check book out since you know the borrower
   
   #Get data from form
   $bookid=trim($_GET($_GET['bookid']);
   $borrower=trim($_GET['borrower']);
   
   //Ideally should also veryfy that borower exist
   if(!$borrower){
   printf("You must specify a valid borrower");
   printf("<br><a href=index.php>Return to home page</a>");
   exit();
   }
   $bookid=addslashes($bookid);
   $borrower=addslashes($borrower);
   
   }
   

</body>
</html>
