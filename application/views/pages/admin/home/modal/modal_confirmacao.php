<!-- Modal -->
<div class="modal fade" id="modalConfirmacao"  role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelConfirmacao">Confirmação</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12 col-sm-12 col-12 form-group">
                    <div id="statusConfirmacaoimovel"></div>
                    <br>
                    Tem certeza que deseja apagar o arquivo <span class="font-weight-bold"
                                                                        id="confirmacaoArquivo" value=""></span> ?
                    <div class="col-md-12 col-sm-12 col-12 form-group"><b><span  id="confirmacaoArquivo2"> </span></b></div>
                </div>
            </div>
            <form method="post" id="formExcimovel" action="javascript:func()">
                <input type="hidden" name="idExcluirimovel" id="idExcluirArq">
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="btnApagarArq">Apagar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>



</script>