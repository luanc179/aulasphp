<form action="" method="post">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
    </div>
    <div class="form-group">
        <label for="cidade">Cidade:</label>
        <select name="cidade" id="cidade">
            <option value="Barbacena">Barbacena</option>
            <option value="Juiz de Fora">Juiz de Fora</option>
            <option value="Matias Barbosa">Matias Barbosa</option>
            <option value="Rio de Janeiro">Rio de Janeiro</option>
        </select>
    </div>
    <div class="form-group">
        <label for="recado">Recado:</label>
        <textarea name="recado" id="recado" cols="30" rows="10"></textarea>
    </div>    
    <input type="submit" value="Cadastrar" name="cadastrar">
</form>