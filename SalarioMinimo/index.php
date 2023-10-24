<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Salário Mínimo</title>
</head>
<body>
    <?php 
        $SalarioMinimo = 1_380.00;
        $salario = $_GET['salario'] ?? 0;
    ?>
    <main>
        <h1>Informe seu Salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>" step="0.01">
            <p>Conisderando o salário mínimo de <strong>R$ <?=number_format($SalarioMinimo, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">       
            </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
           $total = intdiv($salario, $SalarioMinimo);
           $diferenca = $salario % $SalarioMinimo;

           if ($total > 0)
           {
            echo "Quem recebe o salario de R\$" . number_format($salario, 2, ",", ".") . " ganha $total salários mínimos + R\$ " . number_format($diferenca, 2, ",", ".");
           }
           else
           {
            echo "Quem recebe o salario de R\$" . number_format($salario, 2, ",", ".") . " ganha menos que um salários mínimos - R\$ " . number_format(($SalarioMinimo - $salario), 2, ",", ".");
           }
        ?>
    </section>
</body>
</html>