<?php
    require_once 'connect.php' ; 
    $req = "SELECT * FROM `product` "; 
    $res = mysqli_query($con,$req) ; 

    if ($res){
        echo "<table class=\"table\">
            <thead>
              <tr>
                <th scope=\"col\">id</th>
                <th scope=\"col\">Name</th>
                <th scope=\"col\">Cout</th>
                <th scope=\"col\">Prix Unit</th>
              </tr>
            </thead>
            <tbody>";

        while ($row = mysqli_fetch_array($res)){
            

            echo "
           
              <tr>
                <th scope=\"row\">".$row['prod_id']."</th>
                <td>".$row['prod_name']."</td>
                <td>".$row['prod_cout']."</td>
                <td>".$row['prod_prix_unit']."</td>
              </tr>
            ";
          
            
        }

        echo "</tbody>
        </table>"; 
    }

?> 