<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome'=> ['required', 'string', 'min:2', 'max:255'],
            'posicao'=> ['required', 'integer', 'min:1','max:99'],

            'valor_minimo'=> ['required', 'numeric', 'min:0'],
            'quantidade_horas'=> ['required', 'numeric', 'min:0','max:8'],
            'porcentagem'=> ['required', 'integer', 'between:1,99'],

            'valor_quarto'=> ['required', 'numeric', 'min:0'],
            'horas_quarto'=> ['required', 'integer', 'min:0','max:8'],

            'valor_sala'=> ['required', 'numeric', 'min:0'],
            'horas_sala'=> ['required', 'integer', 'min:0','max:8'],

            'valor_banheiro'=> ['required', 'numeric', 'min:0'],
            'horas_banheiro'=> ['required', 'integer', 'min:0','max:8'],

            'valor_cozinha'=> ['required', 'numeric', 'min:0'],
            'horas_cozinha'=> ['required', 'integer', 'min:0','max:8'],

            'valor_quintal'=> ['required', 'numeric', 'min:0'],
            'horas_quintal'=> ['required', 'integer', 'min:0','max:8'],

            'valor_outros'=> ['required', 'numeric', 'min:0'],
            'horas_outros'=> ['required', 'integer', 'min:0','max:8'],

            'icone'=> ['required', 'string', 'in:twf-cleaning-1,twf-cleaning-2,twf-cleaning-3'],
        ];

    }

    public function validationData()
    {
        $dados = $this->all();

        $dados['valor_minimo'] = $this->formatValorMonetario( $dados['valor_minimo']);
        $dados['valor_quarto'] = $this->formatValorMonetario( $dados['valor_quarto']);
        $dados['valor_sala'] = $this->formatValorMonetario( $dados['valor_sala']);
        $dados['valor_banheiro'] = $this->formatValorMonetario( $dados['valor_banheiro']);
        $dados['valor_cozinha'] = $this->formatValorMonetario( $dados['valor_cozinha']);
        $dados['valor_quintal'] = $this->formatValorMonetario( $dados['valor_quintal']);
        $dados['valor_outros'] = $this->formatValorMonetario( $dados['valor_outros']);

        $this->replace($dados);

        return $dados;

    }

    public function formatValorMonetario(string $valor)
    {
        return str_replace(['.',','],['','.'], $valor);
    }
}
