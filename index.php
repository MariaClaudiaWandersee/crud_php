<?php
include("header.php")
?>
    <div class="container">
      <div class="row">
        <table class="table table-hover" border="1">

          <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
          </tr>

          
            <tr>
              <td><?php echo $result['nome']?></td>
              <td><?php echo $result['email']?></td>
              <td><?php echo $result['senha']?></td>
            </tr>

        </table>
      </div>
    </div>
<?php
include("footer.php")

//  php while($result == true){

// <div class="grid col-2">
//   <div>
//     <div>Esquerda</div>
//   </div>
//   <div>Direita</div>
// </div>
// <div class="grid col-3">
//   <div>Esquerda</div>
//   <div>Centro</div>
//   <div>Direita</div>
// </div>
// <div class="grid col-3-sidebar">
//   <div>Sidebar</div>
//   <div>Esquerda</div>
//   <div>Direita</div>
// </div>
?>
    
