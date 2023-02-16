<?php
    include('process.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "select * from users where Username = '$username' and Password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            header("Location: welcome.html");
        }  
        else{  
            echo  '<script>
                        window.location.href = "index.html";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }     
    }
    ?>