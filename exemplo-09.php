<?php


$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'salario' => 10000,
        'subordinados' => array(
            // Inicio Diretor Comercial e todos seus subordinados:
            array(
                'nome_cargo' => 'Diretor Comercial',
                'salario' => 5000,
                'subordinados' => array(
                    //Inicio Gerente de vendas:
                    array(
                        'nome_cargo' =>'Gerente De Vendas',
                        'salario' => 2500

                    )
                    //Final Gerente de vendas:
                )
            ),
            // Final Diretor Comercial:
            // Inicio Diretor finaceiro e todos seus subordinados:
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'salario' => 5000,
                'subordinados' => array(
                    // Inicio Gerentes de contas a pagar
                    array(
                        'nome_cargo' => 'Gerente de contas a pagar',
                        'salario' => 2500,
                        'subordinados' => array(
                            //Inicio Supervisor de pagamento
                            array(
                                'nome_cargo' => 'Supervisor de pagamento',
                                'salario' => 1600
                            )
                            //Final Supervisor de pagamento
                        )
                        
                    ),
                    //Terminio Gerente de contas a pagar

                    //Inicio Getente de compras
                    array(
                        'nome_cargo' => 'Gerente de compras',
                        'salario' => 2500,
                        'subordinados' => array(
                            //Inicio Supervisor de suprementos
                            array(
                                'nome_cargo' => 'Supervisor de suprementos',
                                'salario' => 1600,
                                'subordinados' => array(
                                    array(
                                        'nome_cargo' => 'funcionarios',
                                        'salario' => 1200
                                    )
                                )
                            )
                            //Final Supervisor de suprementos
                        )
                    )
                    //Final Gerentes de compras
                )
            )
            // Final Diretor financeiro: 

        )
    )
);

function exibe($cargos){
    $html = "<ul>";

    foreach ($cargos as $cargo) {

        $html .= "<li>";

        $html .= $cargo['nome_cargo'];

        $html .= "</li>";
        $html .= "<li>";

        $html .= $cargo['salario'];



        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0 ){
           $html .=  exibe($cargo['subordinados']);
        }

        $html .= "</li>";
    }


    $html .= "</ul>";

    return $html;
}

echo exibe($hierarquia);



?>