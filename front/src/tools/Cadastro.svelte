<script>
    import { currentUser, automoveis, addProduct } from "../Stores";


  const form = {
    modelo: "",
    ano: "",
    cor: "",
    placa: "",
  };

  function handleForm() {
    addProduct(form.modelo, form.ano, form.cor, form.placa, $currentUser.id);

    form.modelo = "";
    form.ano = "";
    form.cor = "";
    form.placa = "";
  }
</script>

<aside>
  <h2 id="h2Color">CRUD Options</h2>

  <h2>Cadastrar Automovel</h2>
  <p>
    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
  </p>

  <form on:submit|preventDefault={handleForm}>
    <input 
        type="text" 
        placeholder="Modelo"
        name="modelo"
        bind:value={form.modelo}
        required 
    />
    <input 
        type="text" 
        placeholder="Ano" 
        name="ano"
        bind:value={form.ano}
        required
    />
    <input 
        type="text" 
        placeholder="Cor"
        name="cor" 
        bind:value={form.cor}
        required
    />
    <input 
        type="text" 
        placeholder="Placa"
        name="placa"
        bind:value={form.placa}
        required
    />
    <input id="button" type="submit" value="Cadastrar" />
  </form>
</aside>
