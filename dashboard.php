<?php
include("conexao.php");
$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conexao, $sql);
?>


<style>
.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
}
















.table-container {
    margin-top: 20px;
}








table {
    width: 100%;
    border-collapse: collapse;
}








th, td {
    padding: 12px;
    text-align: left;
    border: 1px solid #ddd;
}








th {
    background-color: #f4f4f4;
}
















.panel {
    margin-top: 30px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}








h1 {
    color: #333;
}








#user {
    font-size: 18px;
    margin-top: 10px;
}
















.btn-dashboard {
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}








.btn-dashboard:hover {
    background-color: #0056b3;
}




.container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: space-between;
}




.table-container, .panel {
    flex: 1 1 48%;
}








@media (max-width: 768px) {
    .container {
        flex-direction: column;
        align-items: center;
    }








    .table-container, .panel {
        flex: 1 1 100%;
    }
}


</style>


<div class="container">
    <h2>Lista de Usuários</h2>
    <table>
        <tr>
           
            <th>Nome</th>
            <th>Email</th>
            </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            
            <td><?= $row['nome']; ?></td>
            <td><?= $row['email']; ?></td> </tr>
        <?php } ?>
    </table>
</div>