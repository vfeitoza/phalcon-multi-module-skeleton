<?php

namespace App\Library\Utilities;

/**
 * Classe responsavel pela formatação de dados em geral
 *
 * @author Victor Feitoza <vfeitoza@gmail.com>
 */
class Utilities
{
    /**
     * Formata dados de acordo com a máscara passada.
     *
     * @param $data Dados a serem formatados
     * @param $mask Mascara a ser utilizada
     * @param int $padLen Caracteres para o espaçamento
     * @param null $padValue Valor para o espaçamento
     * @param int $padPosition Posiçaõ do espaçamento
     *
     * @return mixed Valor com a máscara
     */
    public static function formatData($data, $mask, $padLen = 2, $padValue = null, $padPosition = STR_PAD_LEFT)
    {
        if (!is_null($padValue)) {
            $data = str_pad($data, $padLen, $padValue, $padPosition);
        }
        $string = str_replace(" ", "", $data);
        for ($i = 0; $i < strlen($string); $i++) {
            $mask[strpos($mask, "#")] = $string[$i];
        }
        return $mask;
    }

    /**
     * Formata o valor repassado em forma monetária.
     *
     * @param $data Conteúdo a ser formatado
     *
     * @return string Conteúdo formatado
     */
    public static function formatMoney($data)
    {
        return number_format($data, 2, ',', '');
    }
}
