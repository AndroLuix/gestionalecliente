<!-- Modal -->
<div class="modal fade" id="newClienteModal" tabindex="-1" role="dialog" aria-labelledby="newClienteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newClienteModalLabel">Nuovo Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form per l'inserimento dei dati del nuovo cliente -->
                <form action="{{ url('/salva-cliente') }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="POST">
                    <div class="form-group">
                        <label for="codice">Codice</label>
                        <input type="number" class="form-control" id="codice" name="codice" placeholder="Inserisci il codice">
                    </div>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Inserisci il nome">
                    </div>
                    <div class="form-group">
                        <label for="cognome">Cognome</label>
                        <input type="text" class="form-control" id="cognome" name="cognome" placeholder="Inserisci il cognome">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Inserisci l'email">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Inserisci il telefono">
                    </div>
                    <div class="form-group">
                        <label for="piva">Partita IVA</label>
                        <input type="text" class="form-control" id="piva" name="piva" placeholder="Inserisci la Partita IVA">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                        <button type="submit" class="btn btn-primary" id="salvaClienteBtn">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
