<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <title>123 Tabuada</title>
</head>

<body>
    <div class="cont_header">
        <form method="POST" class="form_container">
            <h1>123 Tabuada</h1>
            <label for="">Selecione Uma Operação:</label>
            <select name="select" id="" class="select">
                <option>------</option>
                <option value="somar">Somar ( + )</option>
                <option value="subtrair">Subtrair ( - )</option>
                <option value="multiplicar">Multiplicar ( x )</option>
                <option value="dividir">Dividir ( / )</option>
            </select>
            <input type="submit" name="submit" value="GERAR" class="button "/>
        </form>
    </div>

    <section class="table ">
        <?php
        
        function gerarTabuada($op) {

            switch ($op) {
                case 'somar':
                    $value=1;
                    for($value=1; $value <=10; $value++) {
                        
                        echo "<div class='col'>";
                        echo "<h2>Soma</h2>";
                        echo "<ul>";
                        for($i=1; $i <=10; $i++) {

                            $res = $i + $value;

                            echo " 
                                <li>".$i." + ".$value." = ".$res."</li>";
                                }
                            echo "</ul>";
                            echo  "</div>";
                    }
                break; 

                case 'subtrair':
                    $value=1;
                    for ($value=1; $value <=10 ; $value++) { 
                        echo "<div class='col'>";
                        echo "<h2>Subtração</h2>";
                        echo "<ul>";
                        if($value == 1){
                        for($i=2; $i<=10; $i++){
                            $res = $i - $value;
                            echo " 
                                <li>".$i." - ".$value." = ".$res."</li>";
                                }
                            echo "</ul>";
                            echo "</div>";
                        } elseif ($value == 2) {
                            for($i=3; $i<=11; $i++) {
                                
                                $res = $i - $value;
                                echo " 
                                    <li>".$i." - ".$value." = ".$res."</li>";
                                }
                                echo "</ul>";
                                echo "</div>";
                            
                    } elseif ($value == 3) {
                        for($i=4; $i<=12; $i++) {
                            $res = $i - $value;
                            echo " 
                                <li>".$i." - ".$value." = ".$res."</li>";
                            }
                            echo "</ul>";
                            echo "</div>";
                    }elseif ($value == 4) {
                        for($i=5; $i<=13; $i++) {
                            $res = $i - $value;
                            echo " 
                                <li>".$i." - ".$value." = ".$res."</li>";
                            }
                            echo "</ul>";
                            echo "</div>";
                    } elseif ($value == 5) {
                        for($i=6; $i<=14; $i++) {
                            $res = $i - $value;
                            echo " 
                                <li>".$i." - ".$value." = ".$res."</li>";
                            }
                            echo "</ul>";
                            echo "</div>";
                    } elseif ($value == 6) {
                        for($i=7 ; $i<=16; $i++) {
                            $res = $i - $value;
                            echo " 
                                <li>".$i." - ".$value." = ".$res."</li>";
                            }    
                            echo "</ul>";
                            echo "</div>";
                    } elseif ($value == 7) {
                        for($i=8 ; $i<=17; $i++) {
                            $res = $i - $value;
                            echo " 
                                <li>".$i." - ".$value." = ".$res."</li>";
                            }
                            echo "</ul>";
                            echo "</div>";
                    } elseif ($value == 8) {
                        for($i=9 ; $i<=18; $i++) {
                            $res = $i - $value;
                            echo " 
                                <li>".$i." - ".$value." = ".$res."</li>";
                            }  
                            echo "</ul>";
                            echo "</div>";
                    } elseif ($value == 9) {
                        for($i=10 ; $i<=19; $i++) {
                            $res = $i - $value;
                            echo " 
                                <li>".$i." - ".$value." = ".$res."</li>";
                            }  
                            echo "</ul>";
                            echo "</div>";
                    } elseif ($value == 10) {
                        for($i=11 ; $i<=20; $i++) {
                            $res = $i - $value;
                            echo " 
                                <li>".$i." - ".$value." = ".$res."</li>";
                            } 
                            echo "</ul>";
                            echo "</div>";
                        }
                 }
                break;

                case 'multiplicar':
                    $value=1;
                    for($value = 1; $value <=10; $value++) {

                        echo "<div class='col'>";
                        echo "<h2>Multiplicação</h2>";
                        echo "<ul>";

                        for($i = 1; $i <=10; $i++) {
                            $res = $i * $value;
                            echo " 
                                <li>".$i." x ".$value." = ".$res."</li>";
                                }
                            echo "</ul>";
                            echo  "</div>";
                    }
                break;
                case 'dividir':
                    $value=1;
                    for($value=1; $value <=10; $value++){
                        
                    echo "<div class='col'>";
                    echo "<h2>Divisão</h2>";
                    echo "<ul>";
                
                    if($value == 1) {
                        for($i=1; $i <=10; $i+=1) {

                            $res = $i / $value;
                                echo "<li>".$i." &#247; ".$value." = ".$res."</li>";
                            }
                        echo "</ul>";
                        echo "</div>";

                    } elseif($value == 2) {
                        for($i=2; $i <= 20; $i+=2) {
                            $res = $i / $value;
                            echo "<li>".$i." &#247; ".$value." = ".$res."</li>";
                            }
                        echo "</ul>";
                        echo "</div>";

                    } elseif($value == 3) {
                        for($i=3; $i <= 30; $i+=3) {
                            $res = $i / $value;
                            echo "<li>".$i." &#247; ".$value." = ".$res."</li>";
                            }
                        echo "</ul>";
                        echo "</div>";

                    } elseif($value == 4) {
                        for($i=4; $i <= 40; $i+=4) {
                            $res = $i / $value;
                            echo "<li>".$i." &#247; ".$value." = ".$res."</li>";
                            }
                        echo "</ul>";
                        echo "</div>";

                    } elseif($value == 5) {
                        for($i=5; $i <= 50; $i+=5) {
                            $res = $i / $value;
                            echo "<li>".$i." &#247; ".$value." = ".$res."</li>";
                            }
                        echo "</ul>";
                        echo "</div>";

                    } elseif ($value == 6) {
                        for($i=6; $i <= 60; $i+=6) {
                            $res = $i / $value;
                            echo "<li>".$i." &#247; ".$value." = ".$res."</li>";
                            }
                        echo "</ul>";
                        echo "</div>";

                    }elseif($value == 7) {
                        for($i=7; $i <=70; $i+=7) {
                            $res = $i / $value;
                            echo "<li>".$i." &#247; ".$value." = ".$res."</li>";
                            }
                        echo "</ul>";
                        echo "</div>";

                    }elseif($value == 8) {
                        for($i=8; $i <= 80; $i+=8) {
                            $res = $i / $value;
                            echo "<li>".$i." &#247; ".$value." = ".$res."</li>";
                            }
                        echo "</ul>";
                        echo "</div>";

                    }elseif($value == 9) {
                        for($i=9; $i <=90; $i+=9) {
                            $res = $i / $value;
                            echo "<li>".$i." &#247; ".$value." = ".$res."</li>";
                            }
                        echo "</ul>";
                        echo "</div>";
                    }else {
                        for($i=10; $i <= 100; $i+=10){
                            $res = $i / $value;
                            echo "<li>".$i." &#247; ".$value." = ".$res."</li>";
                            }
                        echo "</ul>";
                        echo "</div>";
                        }
                } 
                break;

                default;
                echo 'Erro...(Tabuada não encontrada)';
                break;
            }
        }

        if(isset($_POST['select']) && !empty($_POST['select'])){
            $op = $_POST['select'];
            gerarTabuada($op);
        }  ?>
    </section>
    <footer>
        <p>Todo os Direitos Reservados</p>
    </footer>          
</body>
</html>