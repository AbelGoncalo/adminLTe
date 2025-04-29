@csrf
        <div class="card">
            <div class="card-body">
                <fieldset>
                    <legend>Identificação</legend>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input value="{{$servico->nome?? ''}}" type="text" class="form-control" name="nome" id="nome" placeholder="Nome do serviço">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="icone">Ícone</label>
                                <input value="{{$servico->icone?? ''}}" type="text" class="form-control" name="icone" id="icone" placeholder="Ícone">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="posicao">Posição na Plataforma</label>
                                <input value="{{$servico->posicao?? ''}}" type="text" class="form-control" name="posicao" id="posicao" placeholder="Posição do serviço na Plataforma">
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
                                <input value="{{$servico->valor_minimo?? ''}}" type="number" class="form-control" name="valor_minimo" id="valor_minimo" placeholder="Nome do serviço">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="quantidade_horas">Quantidade Mínima de horas</label>
                                <input value="{{$servico->quantidade_horas?? ''}}" type="number" class="form-control" name="quantidade_horas" id="quantidade_horas" placeholder="">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="porcentagem">Porcentagem de Comissão</label>
                                <input value="{{$servico->porcentagem?? ''}}" type="text" class="form-control" name="porcentagem" id="porcentagem" placeholder="Porcentagem de comissão por serviço">
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Cómodos</legend>
                    <div class="row">

                        <div class="col-md-6">
                            <label for="valor_quarto">Valor por Quarto</label>
                            <input value="{{$servico->valor_quarto?? ''}}" type="text" class="form-control" name="valor_quarto" id="valor_quarto" placeholder="valor por quarto">
                        </div>
                        <div class="col-md-6">
                            <label for="horas_quarto">Quantidade de horas por Quarto</label>
                            <input value="{{$servico->horas_quarto?? ''}}" type="text" class="form-control" name="horas_quarto" id="horas_quarto" placeholder="quantidade de horas por quarto">
                        </div>

                        <div class="col-md-6">
                            <label for="valor_sala">Valor por Sala</label>
                            <input value="{{$servico->valor_sala?? ''}}" type="text" class="form-control" name="valor_sala" id="valor_sala" placeholder="valor por sala">
                        </div>
                        <div class="col-md-6">
                            <label for="horas_sala">Quantidade de horas por Sala</label>
                            <input value="{{$servico->horas_sala?? ''}}" type="text" class="form-control" name="horas_sala" id="horas_sala" placeholder="quantidade de horas por sala">
                        </div>

                        <div class="col-md-6">
                            <label for="valor_cozinha">Valor por Cozinha</label>
                            <input value="{{$servico->valor_cozinha??''}}" type="text" class="form-control" name="valor_cozinha" id="valor_cozinha" placeholder="valor por cozinha">
                        </div>
                        <div class="col-md-6">
                            <label for="horas_cozinha">Quantidade de horas por Cozinha</label>
                            <input value="{{$servico->horas_cozinha?? ''}}" type="text" class="form-control" name="horas_cozinha" id="horas_cozinha" placeholder="quantidade de horas por cozinha">
                        </div>

                        <div class="col-md-6">
                            <label for="valor_banheiro">Valor por Banheiro</label>
                            <input value="{{$servico->valor_banheiro?? ''}}" type="text" class="form-control" name="valor_banheiro" id="valor_banheiro" placeholder="valor por banheiro">
                        </div>
                        <div class="col-md-6">
                            <label for="horas_banheiro">Quantidade de horas por Banheiro</label>
                            <input value="{{$servico->horas_banheiro?? ''}}" type="text" class="form-control" name="horas_banheiro" id="horas_banheiro" placeholder="quantidade de horas por banheiro">
                        </div>

                        <div class="col-md-6">
                            <label for="valor_quintal">Valor por Quintal</label>
                            <input value="{{$servico->valor_quintal?? ''}}" type="text" class="form-control" name="valor_quintal" id="valor_quintal" placeholder="valor por quintal">
                        </div>
                        <div class="col-md-6">
                            <label for="horas_quintal">Quantidade de horas por Quintal</label>
                            <input value="{{$servico->horas_quintal?? ''}}" type="text" class="form-control" name="horas_quintal" id="horas_quintal" placeholder="quantidade de horas por quintal">
                        </div>

                        <div class="col-md-6">
                            <label for="valor_outros">Valor por Outros tipo de cómodos</label>
                            <input value="{{$servico->valor_outros?? ''}}" type="text" class="form-control" name="valor_outros" id="valor_outros" placeholder="valor por outros">
                        </div>
                        <div class="col-md-6">
                            <label for="horas_outros">Quantidade de horas por Outros tipo de cómodos </label>
                            <input value="{{$servico->horas_outros?? ''}}" type="text" class="form-control" name="horas_outros" id="horas_outros" placeholder="quantidade de horas por outros">
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Salvar</button>
