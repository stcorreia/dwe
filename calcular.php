<!DOCTYPE html>
<html>
  <head>
	  <title>Calcular</title>
	  <meta charset="utf-8">
	  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> 
	  
		<style>
      table, th{
			border: 2px solid black;
			}
      table{
			border-collapse: collapse;
			}
		td{ 
			border: 1px solid black;
			text-align:center;	
		   }
		</style>
  </head>
  
  <body>
		<h1 align="center">-- Calculadora de Salário Líquido --</h1>
		
		<h2 align="center">-- Demonstrativo: --</h2>
  </body>
  
  
  <body>
  
 
 <?php
	$salario     = $_POST['salario'];
	
	if($salario <= '0' || ""){
			$res2 = '0';
			$IR = '0';	
			$inss = '0';
			$salario = '0';
			$texto = 'Valor Inválido!';
			echo "<div style='text-align: center;'> <font size=14><font color='#FF0000'>$texto</font></font></div>";	
		}
	
	if ($salario >= '0' && $salario <= '1556.94' ) {
		
		$inss = ($salario * 0.08);
		$res1 = $salario - $inss;		
		
		if($res1 >= '0' && $res1 <= '1903.98'){
			$res2 = $res1;
			$IR = '0';			
		}		
	} 
	
	if ($salario >= '1556.95' && $salario <= '2594.92' ) {
		
		$inss = ($salario * 0.09);
		$res1 = $salario - $inss;		
		
		
		if($res1 >= '0' && $res1 <= '1903.98'){
			$res2 = $res1;
			$IR = '0';
		}
			
		if($res1 >= '1903.99' && $res1 < '2826.65'){				
			$IR = ($res1 * 0.075) - ('142.80');
			$res2 = $res1 - $IR;
		}	
		
	}			
	if ($salario >= '2594.93' && $salario <= '5189.82' ) {
		
		
		$inss = ($salario * 0.11);
		$res1 = $salario - $inss;
		
		
		if($res1 >= '0' && $res1 <= '1903.98'){
			$res2 = $res1;
		}
			
		if($res1 >= '1903.99' && $res1 <= '2826.65'){				
			$IR = ($res1 * 0.075) - ('142.80');
			$res2 = $res1 - $IR;
			}					
				
		if($res1 >= '2826.66' && $res1 <= '3751.05'){
			$IR = ($res1 * 0.15) - ('354.80');
			$res2 = $res1 - $IR;
		}
			
		if($res1 >= '3751.06' && $res1 <= '4664.68'){	
			$IR = ($res1 * 0.225) - ('636.13');
			$res2 = $res1 - $IR;
		}
			
		if($res1 >= '4664.69'){	
			$IR = ($res1 * 0.275) - ('869.36');
			$res2 = $res1 - $IR;
		}			
	}	
	
	
	if ($salario >= '5189.83' ) {
		$inss = ('570.8912');
		$res1 = $salario - $inss;		
		
		if($res1 >= '3751.06' && $res1 <= '4664.68'){				
			$IR = ($res1 * 0.225) - ('636.13');
			$res2 = $res1 - $IR;
		}
			
		if($res1 >= '4664.69'){				
			$IR = ($res1 * 0.275) - ('869.36');
			$res2 = $res1 - $IR;
		}			
	}	
?>

 <table align="center">
      <thead>
        <tr>
		  <th>Salário Bruto</th>
          <th>Desconto IR</th>
          <th>Desconto INSS</th>
          <th>Salário Liquido</th>
         
        </tr> 
   </thead>
   
   <tbody>
        <?php
			$IR = number_format($IR, 2, ',', '.');
			$salario = number_format($salario, 2, ',', '.');
			$inss = number_format($inss, 2, ',', '.');
			$res2 = number_format($res2, 2, ',', '.');
            echo '<tr>';
            echo "<td>R$ $salario</td>";            
            echo "<td>R$ $IR</td>";
            echo "<td>R$ $inss</td>";  
			echo "<td>R$ $res2</td>";
            echo '</tr>';         
        ?>
      </tbody>
    </table>   
  	
	<form action="form_salario.html" >
		<h3 align="center"><input type="submit" value="Voltar" />
	</form>
	
  </body>
</html>