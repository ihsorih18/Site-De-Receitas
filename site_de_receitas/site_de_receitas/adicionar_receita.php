<form action="salvar_receita.php" method="POST">
    <label for="titulo">Título da Receita:</label>
    <input type="text" id="titulo" name="titulo" required>
  
    <label for="descricao">Descrição:</label>
    <textarea id="descricao" name="descricao" required></textarea>
  
    <label for="ingredientes">Ingredientes:</label>
    <textarea id="ingredientes" name="ingredientes" required></textarea>
  
    <label for="modo_preparo">Modo de Preparo:</label>
    <textarea id="modo_preparo" name="modo_preparo" required></textarea>
  
    <button type="submit">Adicionar Receita</button>
  </form>
  