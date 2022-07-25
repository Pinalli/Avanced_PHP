<?php 
use PHPUnit\Framework\TestCase;
use Betop\AvancedPhp\Search;


 
class SearchTest extends TestCase{

 /**
 * @dataProvider dataTest 
 */

    public function testGetAddressFromZipCodeDefaultUsage(string $input, array $expect){
        $result = new Search();
        $result = $result->getAddressFromZipCode($input);
             
        $this->assertEquals($expect, $result);
    }

    public function dataTest(){
        return [
            "Endereço Praça da Sé" => [
                "01001000",
            [
                "cep" => "01001-000",
                "logradouro" =>"Praça da Sé",
                "complemento" =>"lado ímpar",
                "bairro" => "Sé",
                "localidade" => "São Paulo",
                "uf" => "SP",               
                "ibge" => "3550308",
                "gia" => "1004",
                "ddd" => "11",
                "siafi" => "7107"                             
            ]
          ],
            "Endereço Qualquer" => [
                "03624010",
            [
                    "cep" => "03624-010",
                    "logradouro" =>"Rua Luís Asson",
                    "complemento" =>"",
                    "bairro" => "Vila Buenos Aires",
                    "localidade" => "São Paulo",
                    "uf" => "SP",                   
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ]
            ]
        ];
    }

}
