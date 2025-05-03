@csrf
<div class="card">
    <div class="card-body">
        <fieldset>
            <legend>Identificação</legend>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input required value="{{ old('nome', $servico->nome ?? '') }}" type="text" class="form-control" name="nome" id="nome" placeholder="Nome do serviço">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="icone">Ícone</label>
                        <select name="icone" id="icone" class="form-control">
                            <option value="">Selecione o ícone</option>
                            <option value="twf-cleaning-1" {{ old('icone', $servico->icone ?? '') === 'tw-cleaning-1' ? 'selected' : '' }}>Ícone 1</option>
                            <option value="twf-cleaning-2" {{ old('icone', $servico->icone ?? '') === 'tw-cleaning-2' ? 'selected' : '' }}>Ícone 2</option>
                            <option value="twf-cleaning-3" {{ old('icone', $servico->icone ?? '') === 'tw-cleaning-3' ? 'selected' : '' }}>Ícone 3</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="posicao">Posição na Plataforma</label>
                        <input required value="{{ old('posicao', $servico->posicao ?? '') }}" type="text" class="form-control" name="posicao" data-mask="00" id="posicao" placeholder="Posição do serviço na Plataforma">
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Globais</legend>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valor_minimo">Valor Mínimo</label>
                        <input required value="{{ old('valor_minimo', $servico->valor_minimo ?? '') }}" type="number" class="form-control" name="valor_minimo" data-mask="#.##0,00" data-mask-reverse="true" id="valor_minimo">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="quantidade_horas">Quantidade Mínima de horas</label>
                        <input required value="{{ old('quantidade_horas', $servico->quantidade_horas ?? '') }}" type="number" class="form-control" name="quantidade_horas" id="quantidade_horas" data-mask="0">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="porcentagem">Porcentagem de Comissão</label>
                        <input required value="{{ old('porcentagem', $servico->porcentagem ?? '') }}" type="text" class="form-control" name="porcentagem" id="porcentagem" data-mask="00" placeholder="Porcentagem de comissão por serviço">
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Cômodos</legend>
            <div class="row">
                @php
                    $campos = [
                        'quarto', 'sala', 'cozinha', 'banheiro', 'quintal', 'outros'
                    ];
                @endphp

                @foreach($campos as $comodo)
                    <div class="col-md-6">
                        <label for="valor_{{ $comodo }}">Valor por {{ ucfirst($comodo) }}</label>
                        <input required value="{{ old('valor_'.$comodo, $servico->{'valor_'.$comodo} ?? '') }}" type="text" class="form-control" name="valor_{{ $comodo }}" id="valor_{{ $comodo }}" data-mask="#.##0,00" data-mask-reverse="true" placeholder="valor por {{ $comodo }}">
                    </div>
                    <div class="col-md-6">
                        <label for="horas_{{ $comodo }}">Quantidade de horas por {{ ucfirst($comodo) }}</label>
                        <input required value="{{ old('horas_'.$comodo, $servico->{'horas_'.$comodo} ?? '') }}" type="text" class="form-control" name="horas_{{ $comodo }}" id="horas_{{ $comodo }}" data-mask="0" placeholder="quantidade de horas por {{ $comodo }}">
                    </div>
                @endforeach
            </div>
        </fieldset>
    </div>
</div>
<button class="btn btn-primary" type="submit">Salvar</button>
