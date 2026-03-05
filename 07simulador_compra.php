<?php
/*Código elaborado pelos estudantes Suely e Diego, do Curso Técnico em Desenvolvimento de Sistemas */
$nomeProduto = 'Iphone 13';
$valorUnitario = 3000;
$quantidade = 1;

function calcular($valorUnitario, $quantidade)
{
    $totalBruto = $valorUnitario * $quantidade;

    if ($totalBruto >= 200) {
        $percentual = 0.10;
    } else if ($totalBruto >= 100) {
        $percentual = 0.05;
    } else {
        $percentual = 0.00;
    }

    $desconto = $totalBruto * $percentual;
    $totalFinal = $totalBruto - $desconto;

    return [
        "totalBruto" => $totalBruto,
        "percentual" => $percentual,
        "desconto"  => $desconto,
        "totalFinal" => $totalFinal
    ];
}

$resultado = calcular($valorUnitario, $quantidade);
?>

<h1 style="color:brown">Resumo da Compra</h1>
<hr>

<?php
echo "Produto: $nomeProduto<br>";
echo "Preço unitário: R$ " . number_format($valorUnitario, 2, ',', '.') . "<br>";
echo "Quantidade: $quantidade<br><br>";

echo "Total sem Desconto: R$ " . number_format($resultado['totalBruto'], 2, ',', '.') . "<br>";
echo "Desconto (" . ($resultado['percentual'] * 100) . "%): R$ " . number_format($resultado['desconto'], 2, ',', '.') . "<br>";
echo "<strong>Total final: R$ " . number_format($resultado['totalFinal'], 2, ',', '.') . "</strong>";
?>