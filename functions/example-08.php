<?php

$hierarquia = array(
    //Início: CEO
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //Início: Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    //Início: Gerente de Vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas',
                        'subordinados' => array(
                            //Início: Supervisor de Marketing
                            array(
                                'nome_cargo' => 'Supervisor de Marketing'
                            )
                            //Fim: Supervisor de Marketing
                        )
                    )
                    //Fim: Gerente de Vendas
                )
            ),
            //Fim: Diretor Comercial
            //Início: Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    //Início: Gerente de Contas Pendentes
                    array(
                        'nome_cargo' => 'Gerente de Contas Pendentes',
                        'subordinados' => array(
                            //Início: Supervisor de Pagamentos
                            array(
                                'nome_cargo' => 'Supervisor de Pagamentos'
                            )
                            //Fim: Supervisor de Pagamentos
                        )
                    ),
                    //Fim: Gerente de Contas Pendentes
                    //Início: Gerente de Compras
                    array(
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' => array(
                            //Início: Supervisor de Suprimentos
                            array(
                                'nome_cargo' => 'Supervisor de Suprimentos'
                            )
                            //Fim: Supervisor de Suprimentos
                        )
                    )
                    //Fim: Gerente de Compras
                )
            )
            //Fim: Diretor Financeiro
        )
    )
    //Fim: CEO
);


function mostra_dados(array $cargos): string{

    $html = '<ul>';

    foreach ($cargos as $cargo) {
        $html .= ('<li>' . $cargo['nome_cargo']);

        if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
            $html .= mostra_dados($cargo['subordinados']);
        }

        $html .= '</li>';
    }

    $html .= '</ul>';
    return $html;
}


echo mostra_dados($hierarquia);
echo "<br/>";
