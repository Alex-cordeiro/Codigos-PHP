<div class="container">
        <div class="relatorio">
            <center>
            <table border="2">
                <tr>
                <th>Ação</th><th>Nome</th><th>Acesso</th>
                </tr>
             <?php
                while ($linhas =  mysqli_fetch_array($result)){
                   
                    echo $linhas['nome'];?>
                    

               <?php } ?>  
            </table>
            </center>
        </div>
    </div>