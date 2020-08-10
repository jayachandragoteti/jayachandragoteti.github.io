<?PHP
if (isset($_POST['submit'])) {
   $name=$_POST['name'];
   $from=$_POST['email'];
   $Subject=$_POST['Subject'];
   $Message=$_POST['Message'];
   $to="gotetijayachandra@gmail.com";
   $headers = "From:" . $from;
   if ($name !=" " && $from !=" " &&  $Subject !=" " && $Message !=" ") {
    if (mail($to,$Subject,$Message,$headers)){
        echo "<script>alert('Request submitted successfully')</script>";
        echo "<script>window.location='index.html';</script>";
  }else{
    echo "<script>alert('faild try again!')</script>";
    echo "<script>window.location='index.html';</script>";
  }

   } else {
    echo "<script>alert('all fields mandatory')</script>";
    echo "<script>window.location='index.html';</script>";
   }
   

}else{
    header("location:index.html");
}
?>